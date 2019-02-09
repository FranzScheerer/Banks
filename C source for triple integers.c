#include <stdio.h>
#include <stdint.h>
#define MAX  0x7FFFFFFFFFFFFFFF
#define BASE 0x8000000000000000
 
typedef struct Z {
  int v;
  uint64_t z0;
  uint64_t z1;
  uint64_t z2;
} i3;

int gt(i3 a, i3 b){
  if (a.z2 > b.z2) return 1;
  if (a.z1 > b.z1) return 1;
  if (a.z2 > b.z2) return 1;
  return 0;
}

i3 add(i3 a, i3 b){
  i3 res;
  res.z0 = res.z1 = res.z2 = 0;
  res.z0 = a.z0 + b.z0;
  if (res.z0 > MAX) {
      res.z1 = 1;
      res.z0 = res.z0 % BASE;
  }
  res.z1 += a.z1 + b.z1;
  if (res.z1 > MAX) {
      res.z2 = 1;
      res.z1 = res.z1 % BASE;
  }
  res.z2 += a.z2 + b.z2;
  return res;
} 

i3 sub(i3 a, i3 b){
  i3 res;
  if (gt(b,a)){
     res = a; 
     a = b;
     b = res;
     res.v = 1;
  }
  if (a.z0 < b.z0){
     res.z0 = BASE + a.z0 - b.z0;
     b.z1++;
  }
  else {
     res.z0 = a.z0 - b.z0;
  }

  if (a.z1 < b.z1){
     res.z1 += BASE + a.z1 - b.z1;
     b.z2++;
  }
  else {
     res.z1 = a.z1 - b.z1;
  }
  res.z2 += a.z2 - b.z2;

  return res;
} 

i3 times(i3 a, i3 b){
  int bit;
  i3 res;
  res.z0 = res.z1 = res.z2 = 0;

  for (bit = 0; bit < 63; bit++){
     if ( a.z0 | (1 << bit) )
        res = add(res, b);
     b = add(b,b);
  }
  for (bit = 0; bit < 63; bit++){
     if ( a.z1 | (1 << bit) )
        res = add(res, b);
     b = add(b,b);
  }
  for (bit = 0; bit < 63; bit++){
     if ( a.z2 | (1 << bit) )
        res = add(res, b);
     b = add(b,b);
  }
}

i3 div(i3 a, i3 b){
  i3 res, q, t, one;

  one.z0 = 1; 
  one.z1 = one.z2 = 0;

  if (! gt(b, a) ){
     q.z1 = q.z2 = 0;
     q.z0 = a.z2 / b.z2;
     t = times(b, q);
     if ( ! gt (t,a) ){
       a = sub(a, t);
     } else {
       q = sub(q,one);
       a = sub(a, times(b, q));
     }
     res.z2 += q.z0;
  }

  if (! gt(b, a)){
     q.z1 = q.z2 = 0;
     q.z0 = a.z1 / b.z1;
     t = times(b, q);
     if ( ! gt (t,a) ){
       a = sub(a, t);
     } else {
       q = sub(q,one);
       a = sub(a, times(b, q));
     }
     res.z1 += q.z0;
  }
  if (! gt(b, a)){
     q.z1 = q.z2 = 0;
     q.z0 = a.z0 / b.z0;
     t = times(b, q);
     if ( ! gt (t,a) ){
       a = sub(a, t);
     } else {
       q = sub(q, one);
       a = sub(a, times(b, q));
     }
     res.z0 += q.z0;
  }
  return res;
}

int main(){
  printf("Hello World %d\n", 1<<17);
}
