#include <stdio.h>

#include <stddef.h>

#include <string.h>

#define LOW(B) ((B) & 0xf)

#define HIGH(B) ((B) >> 4)

typedef struct State_0_ {

  unsigned char s[256];
  unsigned char a;
  unsigned char i;
  unsigned char j;
  unsigned char k;
  unsigned char w;
  unsigned char z;
} State_0;

static void initialize_state(State_0 *state) {

  for (int v = 0; v < 256; v++) {
      state->s[v] = (unsigned char) v;
      state->s[v] += 3;
  }
  state->a = state->i = state->j = 
  state->k = state->w = state->z = 3;
}

static void update(State_0 *state) {

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

static unsigned char output(State_0 *state) {

  const unsigned char y1 = state->z + state->k;
  const unsigned char x1 = state->i + state->s[y1];
  const unsigned char y2 = state->j + state->s[x1];
  state->z = state->s[y2];
  return state->z;
}

static void absorb_nibble(State_0 *state, const unsigned char x) {

  unsigned char t;
  if (state->a == 128) {
    for(int v = 0; v < 512; v++){ 
       update(state);
    }
    state->w += 2;
    state->a = 0;
  }
 
  t = state->s[state->a];
  state->s[state->a] = state->s[128 + x];
  state->s[128 + x] = t;
  state->a++;
}

static void absorb_byte(State_0 *state, const unsigned char b) {

  state->j += b;
  absorb_nibble(state, LOW(b));
  absorb_nibble(state, HIGH(b));
}

int main(int argn, char **argv){

int i,c,cc;
char pw[] = "top secret";
State_0 state;
initialize_state(&state);
i = 0;
while (pw[i]){
   absorb_byte(&state, pw[i++]);
}
while ((c = fgetc(stdin)) != -1){
   cc = c ^ output(&state);
   if (argn > 1)
      absorb_byte(&state, cc);
   else
      absorb_byte(&state, c);
   update(&state);
   fprintf(stdout,"%c", cc);
}
for (i=0;i<32;i++){
   update(&state);
   fprintf(stderr, "%02X", output(&state));
}
fprintf(stderr, "\n");
return 0;
}

