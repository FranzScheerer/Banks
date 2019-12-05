/*****************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool
for C, C++, Python, PHP, Ruby, C#, VB, Perl, Swift, Prolog,
Javascript, Pascal, HTML, CSS, JS
Code, Compile, Run and Debug online from anywhere in world.

*****************************************************************************/
#include <stdio.h>

int
main ()
{
  int c;
  unsigned char tmp=0;
  int cnt = 0;

  while ((c = fgetc (stdin)) != -1){
 
   if ((c >= '0' && c<='9') || (c >= 'a' && c<='f'))
   {
      if (cnt % 2 == 0) 
         tmp = 0;
      cnt += 1;
      if (c >= '0' && c<='9'){
        tmp = (tmp<<4) + c - '0';
      } else {
        tmp = (tmp<<4) + c - 'a' + 10;
      }
      if (cnt % 2 == 0) {
         printf("%c",tmp);
         cnt = 0;
      }       
   }

  }
  fprintf(stderr, "\n");
  return 0;
}
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool
for C, C++, Python, PHP, Ruby, C#, VB, Perl, Swift, 
Prolog, Javascript, Pascal, HTML, CSS, JS Code, 
Compile, Run and Debug online from anywhere in world.

#include <stdio.h>

int
main ()
{
  int c;
  int cnt = 0;
  unsigned char uc;
  while ((c = fgetc (stdin)) != -1)
  {
    uc = c;
    printf ("%02x", uc);
    cnt++;
    if (cnt == 35)
    {
      printf ("\n");
      cnt = 0;
    }
  }
  return 0;
}
*******************************************************************************/



