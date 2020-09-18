
#include <stddef.h>
#include <string.h>

typedef struct State_ {
    unsigned char s[256];
    unsigned char a;
    unsigned char i;
    unsigned char j;
    unsigned char k;
    unsigned char w;
    unsigned char z;
} State;

#define LOW(B)  ((B) & 0xf)
#define HIGH(B) ((B) >> 4)

static void
memzero(void *pnt, size_t len)
{
  ;
}

static void
initialize_state(State *state)
{
    unsigned int v;

    for (v = 0; v < 256; v++) {
        state->s[v] = (unsigned char) v;
    }
    state->a = 0;
    state->i = 0;
    state->j = 0;
    state->k = 0;
    state->w = 1;
    state->z = 0;
}

static void
update(State *state)
{
    unsigned char t;
    unsigned char y;

    state->i += state->w;
    y = state->j + state->s[state->i];
    state->j = state->k + state->s[y];
    state->k = state->i + state->k + state->s[state->j];
    t = state->s[state->i];
    state->s[state->i] = state->s[state->j];
    state->s[state->j] = t;
}

static unsigned char
output(State *state)
{
    const unsigned char y1 = state->z + state->k;
    const unsigned char x1 = state->i + state->s[y1];
    const unsigned char y2 = state->j + state->s[x1];

    state->z = state->s[y2];

    return state->z;
}


static void
whip(State *state)
{
    const unsigned int r = 512;
    unsigned int       v;

    for (v = 0; v < r; v++) {
        update(state);
    }
    state->w += 2;
}

static void
shuffle(State *state)
{
    whip(state);
    state->a = 0;
}

static void
absorb_stop(State *state)
{
    if (state->a == 128) {
        shuffle(state);
    }
    state->a++;
}

static void
absorb_nibble(State *state, const unsigned char x)
{
    unsigned char t;
    unsigned char y;

    if (state->a == 128) {
        shuffle(state);
    }
    y = 128 + x;
    t = state->s[state->a];
    state->s[state->a] = state->s[y];
    state->s[y] = t;
    state->a++;
}

static void
absorb_byte(State *state, const unsigned char b)
{
    state->j += b;
    absorb_nibble(state, LOW(b));
    absorb_nibble(state, HIGH(b));
}

static void
absorb(State *state, const unsigned char *msg, size_t length)
{
    size_t v;

    for (v = 0; v < length; v++) {
        absorb_byte(state, msg[v]);
    }
}

static unsigned char
drip(State *state)
{
    if (state->a > 0) {
        shuffle(state);
    }
    update(state);

    return output(state);
}

static void
squeeze(State *state, unsigned char *out, size_t outlen)
{
    size_t v;

    if (state->a > 0) {
        shuffle(state);
    }
    for (v = 0; v < outlen; v++) {
        out[v] = drip(state);
    }
}

static void
key_setup(State *state, const unsigned char *key, size_t keylen)
{
    initialize_state(state);
    absorb(state, key, keylen);
}

int
spritz_hash(unsigned char *out, size_t outlen,
            const unsigned char *msg, size_t msglen)
{
    State         state;
    unsigned char r;

    if (outlen > 255) {
        return -1;
    }
    r = (unsigned char) outlen;
    initialize_state(&state);
    absorb(&state, msg, msglen);
    absorb_stop(&state);
    absorb(&state, &r, 1U);
    squeeze(&state, out, outlen);
    memzero(&state, sizeof state);

    return 0;
}

int
spritz_stream(unsigned char *out, size_t outlen,
              const unsigned char *key, size_t keylen)
{
    State state;

    initialize_state(&state);
    absorb(&state, key, keylen);
    squeeze(&state, out, outlen);
    memzero(&state, sizeof state);

    return 0;
}

int
spritz_encrypt(unsigned char *out, const unsigned char *msg, size_t msglen,
               const unsigned char *nonce, size_t noncelen,
               const unsigned char *key, size_t keylen)
{
    State  state;
    size_t v;

    key_setup(&state, key, keylen);
    absorb_stop(&state);
    absorb(&state, nonce, noncelen);
    for (v = 0; v < msglen; v++) {
        out[v] = msg[v] + drip(&state);
    }
    memzero(&state, sizeof state);

    return 0;
}

int
spritz_decrypt(unsigned char *out, const unsigned char *c, size_t clen,
               const unsigned char *nonce, size_t noncelen,
               const unsigned char *key, size_t keylen)
{
    State  state;
    size_t v;

    key_setup(&state, key, keylen);
    absorb_stop(&state);
    absorb(&state, nonce, noncelen);
    for (v = 0; v < clen; v++) {
        out[v] = c[v] - drip(&state);
    }
    memzero(&state, sizeof state);

    return 0;
}

int
spritz_auth(unsigned char *out, size_t outlen,
            const unsigned char *msg, size_t msglen,
            const unsigned char *key, size_t keylen)
{
    State         state;
    unsigned char r;

    if (outlen > 255) {
        return -1;
    }
    r = (unsigned char) outlen;
    key_setup(&state, key, keylen);
    absorb_stop(&state);
    absorb(&state, msg, msglen);
    absorb_stop(&state);
    absorb(&state, &r, 1U);
    squeeze(&state, out, outlen);
    memzero(&state, sizeof state);

    return 0;
}

#include <stdio.h>
int main(){
  int i,c,cc;
  char out[32];  
  char pw[] = "total geheim";

  State state, sb;
  initialize_state(&state);
  initialize_state(&sb);

  i = 0;
  while (pw[i++]){
     absorb_byte(&state, pw[i]);
  }
  i = 1;
  while (pw[i++]){
     absorb_byte(&sb, pw[i]);
  }

  while ((c = fgetc(stdin)) != -1){
     cc = c ^ output(&state);
     absorb_byte(&state, cc);
     absorb_byte(&sb, cc);
     fprintf(stdout,"%c", cc);
  }
 
  squeeze(&state, out, 32);

  for (i=0;i<32;i++)
     fprintf(stderr, "%02X", (unsigned char)out[i]);
  fprintf(stderr, "\n");

  return 0;
}
