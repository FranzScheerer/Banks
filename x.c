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
  if (res.z1 > MAX) {
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

int main(){
  printf("Hello World\n");
}
