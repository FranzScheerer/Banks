#include<stdio.h>
#include<ctype.h>
#include<stdlib.h>
#include<string.h>

int hex(char c){
    if (c<'A') return c-'0'; else return toupper(c)-'A'+10;   
}
int quersumme(int i){
  int sum = 0;
  while (i>0){
    sum += i%10;
    i /= 10;
  }
  return sum;
}
int p(char *nr, char *g,int i1, int i2, int mod, int q){
  int i;
  int sum = 0;
  for (i=i1;i<=i2;i++){
    if (q){
       sum += quersumme ( (g[i2-i]-'0')*(nr[i-1]-'0') );
    } else {
       sum += (g[i2-i]-'0')*(nr[i-1]-'0');
    }
  }
  return (mod-sum%mod)%mod%10;
}

int kreditkarte(char *nr, int len, int ofs){
    int i;
    int sum = 0;
    int gw = 2;
    for(i=len+ofs-2;i>=ofs;i--){ 
        sum += quersumme(gw*(nr[i]-'0'));
        printf("%d\n",quersumme(gw*(nr[i]-'0')));
        gw = 3-gw;
   }
    sum = (10 - sum%10)%10;
    printf("Pruefziffer = %d %d\n",sum, nr[len+ofs-1]-'0');
    return sum == nr[len+ofs-1]-'0';
}

int rule(char *blz){
  FILE *fp;
  int iblz;
  int regel;
  char buf[5];
  if (!(fp = fopen("bblz","rb"))){
      fprintf(stderr,"Datei bblz nicht zu oeffnen\n");
      exit(-1);
  }
  while (fread(buf,5,1,fp)){
    int i;
    regel = buf[4];
    memcpy(&iblz,buf,4);
    if (iblz == atoi(blz)){
       fclose(fp);
       return regel;
    }
  }
  fclose(fp);
  return -1;
}

int compress(){
  FILE *fp,*fpw;
  char buf[170];
  int i=0,cnt=0;
  int regel = -1;
  int blz0 = 0;
  if (!(fpw = fopen("data2.inc","w"))) {
    printf("error");
    exit(-1);
  }
  if (!(fp = fopen("BLZ_20131209.txt","rb"))){
      fprintf(stderr,"Datei BLZ_20110905.txt nicht zu oeffnen\n");
      exit(-1);
  }
  fprintf(fpw,"\n<?\n$data2=array(\n");
  while (fread(buf,sizeof(buf),1,fp)){
    int iblz;
    int regel;
    if (buf[8] == '1'){
      buf[134]=0;buf[8]=0;
      i++;
      if (i>1) fprintf(fpw,",");
      fprintf(fpw,"'%s','%s'",buf,buf+107);
      cnt++;
      if (cnt==3) {cnt=0; fprintf(fpw,"\n");}
    }
  }
  fprintf(fpw,"\n);\n?>");
  fclose(fp);
  fclose(fpw);
  return 0;
}

void list_regel(){
  FILE *fp;
  char buf[190];
  int cnt [200];
  int i;
  int regel = -1;
  memset(cnt,0,800);
  if (!(fp = fopen("blz","rb"))){
      fprintf(stderr,"Datei blz nicht zu oeffnen\n");
      exit(-1);
  }
  while (fread(buf,sizeof(buf),1,fp)){
      cnt[10*hex(buf[181])+buf[182]-'0']++;
  }
  for (i=0;i<200;i++) if (cnt[i]>0) printf("%d.  %d\n",i,cnt[i]);
  fclose(fp);
}

int IBAN_pz(char *blz, char *knr){
    char tmp[30];
    int i;
    int sum = 0;
    sprintf(tmp,"%s%10s131400",blz,knr);
    printf("%s\n",tmp);
    for(i=0;i<strlen(tmp);i++){
        if (tmp[i] == ' ') tmp[i]='0';
	sum = (10*sum + tmp[i]-'0')%97;
    }
    return 98 - sum;
}

int pz(int method, char *knr, int *cmp){
   int tab[40] = {0,1,5,9,3,7,4,8,2,6,
                  0,1,7,6,9,8,3,2,5,4,
                  0,1,8,4,6,2,9,5,7,3,
                  0,1,2,3,4,5,6,7,8,9};
    char ga[9] = "212121212";
    char gb[9] = "371371371";
    char gc[9] = "234567892";
    char gd[9] = "234567234";
    char ge[9] = "731731731";
    char gf[9] = "23456789:";
    char gg[9] = "234523452";
    char gh[9] = "121212121";
    char gi[9] = "123123123";
    char gj[9] = "234567891";
    char gk[9] = "397139713";    
    char gl[9] = "234567893";
    char gm[9] = "313131313";
    char nr[19]= "000000000000000000";
    char blz[9]= "00000000";
    int i;
    int result;
    int sum = 0;

  i = strlen(knr);
  if (i<=10){
     memcpy(nr+(10-i),knr,i);
  }else{
     memcpy(nr+(18-i),knr,i);
     memcpy(blz, knr+(i-8),8);
  }
  *cmp = nr[9] - '0';
  switch (method){
      case 0:
          for(i=0;i<9;i++){
             sum += quersumme((ga[i]-'0')*(nr[9-i-1]-'0'));
          }
          return (10 - sum%10) % 10;
          break;
      case 1:
          for(i=0;i<9;i++){
             sum += (gb[i]-'0')*(nr[9-i-1]-'0');
          }
          return (10 - sum%10) % 10;
          break;
      case 2:
          sum = 0;
          for(i=0;i<9;i++){
             sum += (gc[i]-'0')*(nr[9-i-1]-'0');
          }
          return (11 - sum%11) % 11;
     case 3:
          for(i=0;i<9;i++){
             sum += (ga[i]-'0')*(nr[9-i-1]-'0');
          }
          return (10 - sum%10) % 10;
          break;
     case 4:
          for(i=0;i<9;i++){
             sum += (gd[i]-'0')*(nr[9-i-1]-'0');
          }
          return (11 - sum%11) % 11;
          break;
     case 5:
          for(i=0;i<9;i++){
             sum += (ge[i]-'0')*(nr[9-i-1]-'0');
          }
          return (10 - sum%10) % 10;
          break;
     case 6:
          for(i=0;i<9;i++){
             sum += (gd[i]-'0')*(nr[9-i-1]-'0');
          }
          return ((11 - sum%11) % 11) % 10;
          break;
     case 7:
          for(i=0;i<9;i++){
             sum += (gf[i]-'0')*(nr[9-i-1]-'0');
          }
          return (11 - sum%11) % 11;
          break;
     case 8:
	 if (memcmp(nr,"0000060000",10)<0) return *cmp;
          for(i=0;i<9;i++){
             sum += (ga[i]-'0')*(nr[9-i-1]-'0');
          }
          return (10 - sum%10) % 10;
          break;
     case 9: return *cmp;
     case 10:
          sum = 0;
          for(i=0;i<9;i++){
             sum += (i+2)*(nr[9-i-1]-'0');
          }
          return ((11 - sum%11) % 11) % 10;
          break;
     case 11:
          for(i=0;i<9;i++){
             sum += (gf[i]-'0')*(nr[9-i-1]-'0');
          }
          return (11 - sum%11) % 11 == 10 ? 9 : (11 - sum%11) % 11;
          break;
     case 13:
	  if (!memcmp("000",nr,3)){
             for(i=1;i<7;i++){
                sum += quersumme( (ga[i-1]-'0')*(nr[9-i]-'0') );
             }
             return (10 - sum%10) % 10;
          }
	  *cmp = nr[7] - '0';
          for(i=1;i<7;i++){
             sum += quersumme( (ga[i-1]-'0')*(nr[7-i]-'0') );
          }
          return (10 - sum%10) % 10;
          break;
     case 14:
          for(i=0;i<6;i++){
             sum += (gd[i]-'0')*(nr[9-i-1]-'0');
          }
          return (11 - sum%11) % 11;
          break;
     case 15:
          for(i=0;i<4;i++){
             sum += (gg[i]-'0')*(nr[9-i-1]-'0');
          }
          return ((11 - sum%11) % 11) % 10;
          break;
     case 16:
          for(i=0;i<9;i++){
             sum += (gd[i]-'0')*(nr[9-i-1]-'0');
          }
          if (sum%11==1){
	      return nr[8]-'0';
          }  
          return ((11 - sum%11) % 11) % 10;
          break;
     case 17:
	  *cmp = nr[7]-'0';
          for(i=2;i<=7;i++){
	      if (i%2) {
                 sum += quersumme(2*(nr[i-1]-'0'));
              } else {
                 sum += (nr[i-1]-'0');
              }
              printf("%d\n",sum);
          }
          return ( 10 - ((sum - 1) % 11) ) % 10;
          break;
     case 18:
          for(i=0;i<9;i++){
             sum += (gk[i]-'0')*(nr[9-i-1]-'0');
          }
          return (10 - sum%10) % 10;
          break;
     case 19:
          for(i=0;i<9;i++){
             sum += (gj[i]-'0')*(nr[9-i-1]-'0');
          }
          return ((11 - sum%11) % 11) % 10;
          break;
     case 20:
          for(i=0;i<9;i++){
             sum += (gl[i]-'0')*(nr[9-i-1]-'0');
          }
          return ((11 - sum%11) % 11) % 10;
          break;
     case 21:
          for(i=0;i<9;i++){
             sum += quersumme( (ga[i]-'0')*(nr[9-i-1]-'0') );
          }
          while (sum >= 10)
             sum = quersumme(sum);
          return 10 - sum;
          break;
     case 22:
          for(i=0;i<9;i++){
             sum += (gm[i]-'0')*(nr[9-i-1]-'0') % 10;
          }
          return (10 - sum%10) % 10;
          break;
     case 23:
	 *cmp = nr[6] - '0';
          for(i=0;i<9;i++){
             sum += (gd[i]-'0')*(nr[9-i-1]-'0');
          }
          if (sum%11==1){
	      return nr[5]-'0';
          }  
          return (11 - sum%11) % 11;
          break;
     case 28:
	 *cmp = nr[7] -'0';
         if (!memcmp("0000000",nr,7)) return *cmp;
         for(i=1;i<=7;i++)
	     sum += (nr[i-1]-'0')*(9-i);
         return ((11 - sum%11) % 11) % 10;
     case 29:
          for(i=0;i<9;i++){
	      sum += tab[(i%4)*10+nr[8-i]-'0'];
          }
          return (10-sum%10)%10;
     case 30:
	 sum = 2*(nr[0]-'0');
         for(i=6;i<=9;i++)
	     sum += (i%2+1)*(nr[i-1]-'0'); 
         return (10-sum%10)%10; 
     case 31:
         for(i=1;i<=9;i++)
	     sum += i*(nr[i-1]-'0');
         return sum%11; 
     case 32:
          for(i=4;i<=9;i++){
             sum += (11-i)*(nr[i-1]-'0');
          }
          return ((11 - sum%11) % 11)%10;
          break;
      case 33:
	 for(i=5;i<=9;i++)
	     sum += (11-i)*(nr[i-1]-'0');
         return ((11-sum%11)%11)%10; 
      case 34:{
	 int gw[] = {2,4,8,5,10,9,7};
	 *cmp = nr[7] -'0';
         for(i=1;i<=7;i++)
	     sum += (nr[i-1]-'0')*(gw[7-i]);
         return ((11 - sum%11) % 11) % 10;
      }
     case 35:
         for (i=1;i<=9;i++) sum += (11-i)*(nr[i-1]-'0');
         sum %= 11;
         if (sum==10) return nr[8]-'0';
         return sum;
     case 36:{
         int g[4] = {2,4,8,5};
         for(i=6;i<=9;i++)
	     sum += (nr[i-1]-'0')*g[9-i];
         return ((11 - sum%11) % 11) % 10;
     }
     case 37:{
         int g[5] = {2,4,8,5,10};
         for(i=5;i<=9;i++)
	     sum += (nr[i-1]-'0')*g[9-i];
         return ((11 - sum%11) % 11) % 10;
     }
     case 38:{
         int g[6] = {2,4,8,5,10,9};
         for(i=4;i<=9;i++)
	     sum += (nr[i-1]-'0')*g[9-i];
         return ((11 - sum%11) % 11) % 10;
     }
     case 39:{
         int g[7] = {2,4,8,5,10,9,7};
         for(i=3;i<=9;i++)
	     sum += (nr[i-1]-'0')*g[9-i];
         return ((11 - sum%11) % 11) % 10;
     }
     case 40:{
	 int g[9] = {2, 4, 8, 5, 10, 9, 7, 3, 6};
         return ((11-sum%11)%11)%10;
     }
     case 41:
	 if (nr[3]=='9') 
              nr[0]=nr[1]=nr[2]='0'; 
         return pz(0,nr,cmp);
     case 42:
         for (i=1;i<=9;i++) sum += (11-i)*(nr[i-1]-'0');
         return ((11-sum%11)%11)%10;
     case 43:
         for (i=1;i<=9;i++) sum += (10-i)*(nr[i-1]-'0');
         return (10-sum%10)%10;
     case 44:{
         int g[9] = {2,4,8,5,10,0,0,0,0};
         for (i=1;i<=9;i++) sum += g[9-i]*(nr[i-1]-'0');
         return ((11-sum%11)%11)%10;
     }
     case 45:
         if (nr[0]=='0' || nr[4]=='1') return *cmp;
         return pz(0,nr,cmp); 
     case 46:{
         int g[5] = {2,3,4,5,6};
         *cmp = nr[7]-'0';
         for (i=3;i<=7;i++) sum += g[7-i]*(nr[i-1]-'0');
         return ((11-sum%11)%11)%10;
     }
     case 47:{
         int g[5] = {2,3,4,5,6};
         *cmp = nr[8]-'0';
         for (i=4;i<=8;i++) sum += g[8-i]*(nr[i-1]-'0');
         return ((11-sum%11)%11)%10;
     }
     case 48:{
         int g[6] = {2,3,4,5,6,7};
         *cmp = nr[8]-'0';
         for (i=3;i<=8;i++) sum += g[8-i]*(nr[i-1]-'0');
         return ((11-sum%11)%11)%10;
     }
     case 49:
	 if (pz(0,nr,cmp)==*cmp) return *cmp;
         return pz(1,nr,cmp); 
     case 52:{
	 int g[12] = {2,4,8, 5,10,9, 7,3,6, 1,2,4};
         int delta = 0;
         if (nr[0]=='9') return pz(20,nr,cmp);
         /* P: 2. Stelle der 8-stelligen Kontonummer = 4. Stelle */
         *cmp = nr[3]-'0'; 
         for (i=5;i<=9;i++) {
             if (nr[i-1]!='0') break;
             delta++;             
         } 
         for (i=5+delta;i<=10;i++){
	     sum += g[10-i]*(nr[i-1]-'0');
         }
         for (i=3;i<=4;i++){
	     sum += g[10-delta-i]*(nr[i-1]-'0');
         }
         for (i=5;i<=8;i++){
	     sum += g[16-delta-i]*(blz[i-1]-'0');
         }
         if (sum%11 == 10) return *cmp;
         return 10;
     }
     case 53:{
	 int g[12] = {2,4,8, 5,10,9, 7,3,6, 1,2,4};
         int delta = 0;
         if (nr[0]=='9') return pz(20,nr,cmp);
         /* P: 2. Stelle der 8-stelligen Kontonummer = 4. Stelle */
         *cmp = nr[3]-'0'; 
         for (i=5;i<=9;i++) {
             if (nr[i-1]!='0') break;
             delta++;             
         } 
         for (i=5+delta;i<=10;i++){
	     sum += g[10-i]*(nr[i-1]-'0');
         }
	 sum += g[6-delta]*(nr[4-1]-'0');  
	 sum += g[7-delta]*(nr[2-1]-'0');
	 sum += g[8-delta]*(blz[8-1]-'0');
	 sum += g[9-delta]*(nr[3-1]-'0');
	 sum += g[10-delta]*(blz[6-1]-'0');
	 sum += g[11-delta]*(blz[5-1]-'0');
         if (sum%11 == 10) return *cmp;
         return 10;
     }
     case 54:
         for (i=3;i<=9;i++) sum += (gd[9-i]-'0')*(nr[i-1]-'0');
         return 11-sum%11;
     case 55:
         for (i=3;i<=9;i++) sum += (11-i)*(nr[i-1]-'0');
         for (i=1;i<=2;i++) sum += (9-i)*(nr[i-1]-'0');
         return ((11-sum%11)%11)%10;
     case 56:
	 for (i=1;i<=9;i++){
	     sum += ((9-i)%6+2)*(nr[i-1]-'0'); 
         }
         sum = 11 - sum%11;
         if (nr[0]='9' && sum > 9) sum -= 3;
         return sum;
     case 58:
          for(i=5;i<=9;i++) sum += (nr[i-1]-'0')*(11-i);
          if (sum%10==1) return 99;
          return (10-sum%10)%10;
     case 59:
         if (nr[0]=='0') return *cmp;
         return pz(0,nr,cmp); 
     case 60:
	 nr[0] = nr[1] = '0';
         return pz(0,nr,cmp);
     case 61:
         *cmp = nr[7]-'0';
         for (i=1;i<=7;i++){
	     sum += quersumme((1+i%2)*(nr[i-1]-'0'));
         }
         if (nr[8]=='8'){
             for (i=9;i<=10;i++)
	        sum += quersumme((2-i%2)*(nr[i-1]-'0'));          
         }
         return (10-sum%10)%10;
     case 69:
     {
	  if (nr[0]=='9' && nr[1]=='3') return pz(9,nr,cmp);
	  if (nr[0]!='9' || nr[1]!='7'){
	      if (pz(28,nr,cmp) == *cmp) return *cmp; 
          } 
          *cmp = nr[9]-'0';
          for(i=0;i<9;i++){
              sum += tab[(i%4)*10+(nr[9-i-1]-'0')];
          }
          return (10 - sum%10)%10;
          break;
     }
     case 91:{
          int g1[6] = {2,3,4,5,6,7};
          int g2[6] = {7,6,5,4,3,2};
          int g4[6] = {2,4,8,5,10,9};
          int g3[10] = {2,3,4,0,5,6,7,8,9,10};
          *cmp = nr[6]-'0';
          sum = 0;
          for(i=1;i<=6;i++) sum += g1[6-i]*(nr[i-1]-'0');
          sum = (11-sum%11)%11%10;
          if (sum==*cmp) return sum;
          sum = 0;
          for(i=1;i<=6;i++) sum += g2[6-i]*(nr[i-1]-'0');
          sum = (11-sum%11)%11%10;
          if (sum==*cmp) return sum;
          sum = 0;
          for(i=1;i<=10;i++) sum += g3[10-i]*(nr[i-1]-'0');
          sum = (11-sum%11)%11%10;
          if (sum==*cmp) return sum;
          sum = 0;
          for(i=1;i<=6;i++) sum += g4[6-i]*(nr[i-1]-'0');
          return (11-sum%11)%11%10;
     }
     case 92:
          memset(nr,'0',3);
          return pz(1,nr,cmp);
     case 93:
          if (!memcmp("0000",nr,4)){
            for (i=5;i<=9;i++){
               sum += (11-i)*(nr[i-1]-'0');
            }
          } else {
            *cmp = nr[5]-'0';
            for (i=1;i<=5;i++){
               sum += (7-i)*(nr[i-1]-'0');
            }
          }
          if (((11-sum%11)%11)%10 == *cmp) return *cmp;
          return (7-sum%7)%7;
     case 94:
          for(i=0;i<9;i++){
             sum += quersumme((gh[i]-'0')*(nr[9-i-1]-'0'));
          }
          return (10 - sum%10) % 10;
          break;
     case 95:
	 if (pz(6,nr,cmp) == *cmp)
	     return *cmp;
          if ( memcmp(nr,"0000000001",10) >= 0
	    && memcmp(nr,"0001999999",10)<=0 ){
	      return nr[9]-'0';
          }
          if ( memcmp(nr,"0009000000",10) >= 0
	    && memcmp(nr,"0025999999",10)<=0 ){
	      return nr[9]-'0';
          }
          if ( memcmp(nr,"0396000000",10) >= 0
	    && memcmp(nr,"0499999999",10)<=0 ){
	      return nr[9]-'0';
          }
          if ( memcmp(nr,"0700000000",10) >= 0
	    && memcmp(nr,"0799999999",10)<=0 ){
	      return nr[9]-'0';
          }
          *cmp = 99;
          return 10;
          break;
     case 96:
          if (pz(19,nr,cmp) == *cmp){
              return *cmp;
          } else {
              if (pz(0,nr,cmp) == *cmp){
		  return *cmp;
              } else {
		  if (memcmp(nr,"0001300000",10)>=0 
		      && memcmp(nr,"0099399999",10)<=0){
		      *cmp = nr[9]-'0';
                      return *cmp; 
		  } else {
		      *cmp = nr[9]-'0';
                      return 10;
                  }
              }
          }  
          for(i=0;i<9;i++){
             sum = (10*sum + (nr[i]-'0')) % 11;
          }
          return sum%10;
          break;
     case 97:
          for(i=0;i<9;i++){
             sum = (10*sum + (nr[i]-'0')) % 11;
          }
          return sum%10;
          break;
     case 98:
          for(i=0;i<7;i++){
             sum += (gb[i]-'0')*(nr[i+2]-'0');
          }
          return (10 - sum%10) % 10;
          break;
     case 99:
          for(i=0;i<9;i++){
             sum += (gd[i]-'0')*(nr[9-i-1]-'0');
          }
          if (!memcmp(nr,"4999999999",10)) *cmp = ((11 - sum%11) % 11) % 10;
          if (!memcmp(nr,"0396000000",10)) *cmp = ((11 - sum%11) % 11) % 10;
          return ((11 - sum%11) % 11) % 10;
          break;
      case 24:{
	 int delta = 0;
	 if (nr[0]=='0'||nr[0] =='3'||nr[0]=='4'||nr[0]=='5'||nr[0]=='6'){
            for(i=0;i<8;i++){
		if (sum || nr[i+1]>'0'){      
		    sum +=((gi[i-delta]-'0')*(nr[i+1]-'0')+(gi[i-delta]-'0'))%11;                } else delta++;
            }
          } else if (nr[0]=='9'){
              for(i=0;i<6;i++){
                  sum += ( (gi[i]-'0')*(nr[i+3]-'0')+(gi[i]-'0') ) % 11;
              }
          } else {
              for(i=0;i<9;i++){
                  sum += ( (gi[i]-'0')*(nr[i]-'0')+(gi[i]-'0') ) % 11;
              }
          }
	 return sum % 10;
      }
      case 25:
          for(i=0;i<8;i++){
             sum += (gj[i]-'0')*(nr[9-i-1]-'0');
          }
          if (sum%11 == 1){
	     if( (nr[1]-'0' == 8) ||(nr[1]-'0' == 9) )
		 return 0;
             else
                 return 10;
          }
          return (11 - sum%11) % 11;
          break;
      case 26:
          *cmp = nr[7]-'0';
          if (nr[0]=='0' && nr[1]=='0'){
	     *cmp = nr[9] - '0';
             for(i=0;i<7;i++){
                sum += (gd[i]-'0')*(nr[9-i-1]-'0');
             }
          } else {
             for(i=0;i<7;i++){
                sum += (gd[i]-'0')*(nr[7-i-1]-'0');
             }
          }
          return ((11 - sum%11) % 11) % 10;
          break;
      case 27:
          if (nr[0]=='0') return pz(0,nr,cmp);
          for(i=0;i<9;i++){
	      sum += tab[(i%4)*10+nr[8-i]-'0'];
          }
          return (10-sum%10)%10;
      case 50:
          if (memcmp(nr,"000",3)){
             *cmp = nr[6]-'0';
             for(i=1;i<=6;i++)
	         sum += (nr[i-1]-'0')*(8-i);
	     return ((11-sum%11)%11)%10;
          }
          for(i=4;i<=9;i++)
	         sum += (nr[i-1]-'0')*(11-i);
	  return ((11-sum%11)%11)%10;
          for(i=4;i<=9;i++)
	         sum += (nr[i-1]-'0')*(11-i);
	  return ((11-sum%11)%11)%10;
      case 51:
          if (nr[2]=='9' && nr[3]=='9' ) return pz(10,nr,cmp);
          for(i=4;i<=9;i++)
	         sum += (nr[i-1]-'0')*(11-i);
	  sum = ((11-sum%11)%11)%10;
          if (sum == *cmp) return sum;
          sum = pz(33,nr,cmp);
          if (sum == *cmp) return sum;
          if (nr[9]=='7' || nr[9]=='8' || nr[9]=='9') return 10;
          sum=0;
          for(i=5;i<=9;i++)
	      sum += (nr[i-1]-'0')*(11-i);
          return (7-sum%7)%7;                    
      case 57:
	  if (memcmp("50",nr,2)>=0) return *cmp;          
	  if (!memcmp("91",nr,2)) return *cmp;          
	  if (memcmp("96",nr,2)<=0) return *cmp;
	  if (!memcmp("777777",nr,6)) return *cmp;          
	  if (!memcmp("888888",nr,6)) return *cmp;          
          for (i=1;i<=9;i++) sum += quersumme( (2-i%2)*(nr[i-1]-'0') );
          return (10-sum%10)%10;
      case 62:
          *cmp = nr[7]-'0';
          for(i=1;i<=7;i++) sum += quersumme( (1+i%2)*(nr[i-1]-'0') );
          return (10-sum%10)%10;
      case 63:
	  if (nr[0]!='0') return 10;
          return pz(13,nr,cmp);          
      case 64:{
          int g[6] = {9,10,5,8,4,2};
	  for(i=1;i<=6;i++) sum += g[i-1]*(nr[i-1]-'0');
          return ((sum-sum%11)%11)%10; 
      }
      case 65:
          *cmp = nr[7]-'0'; 
	  for(i=1;i<=7;i++) sum += quersumme( (1+i%2)*(nr[i-1]-'0') );
          if (nr[8]=='9') {
	     for(i=9;i<=10;i++) sum += quersumme( (2-i%2)*(nr[i-1]-'0') );
          }
          return (10-sum%10)%10;
      case 66:
          sum = sum = 7*(nr[2-1]-'0'); 
	  for(i=5;i<=9;i++) sum += (11-i)*(nr[i-1]-'0');
          sum %= 11;
          if (sum>1) return 11-sum;
          return 1-sum; 
      case 67:
          *cmp = nr[7]-'0'; 
	  for(i=1;i<=7;i++) sum += quersumme( (1+i%2)*(nr[i-1]-'0') );
          return (10-sum%10)%10;
      case 68:
          if (nr[0] != '0'){
             nr[0] = nr[1] = nr[2] = '0';
             if (nr[3] != '9') return 10;
          }
          if (nr[0]=='0' && nr[1]==4 && nr[2]==9) return *cmp;
          if (pz(0,nr,cmp) == *cmp){
	      return *cmp;
          } else {
	      nr[3] = nr[1];
              nr[1] = nr[2] = '0';
              return pz(0,nr,cmp);
          }
      case 70:
	  if (nr[3]=='5' || (nr[3]=='6' && nr[4]=='9')){
              nr[0]=nr[1]=nr[2]='0';
          }           
          return pz(6,nr,cmp);
      case 71:
          for (i=2;i<=7;i++)
	      sum += (nr[i-1]-'0')*(8-i);
          sum = (11 - sum%11)%11;          
          return sum == 10 ? 1 : sum;
      case 73:
          if (nr[2] == '9'){
              for (i=1;i<=9;i++){
	         sum += ((11-i)*(nr[i-1]-'0'));
              }
              return ((11-sum%11)%11)%10;
          } else { 
              for (i=4;i<=9;i++){
	         sum += quersumme ((1+i%2)*(nr[i-1]-'0'));
              }
          }
          return (10 - sum%10) % 10;
      case 74:
           if (pz(0,nr,cmp)==*cmp) return *cmp;
           if ((!memcpy("0000",nr,4)) && nr[4]>'0'){
              for (i=4;i<=9;i++)
                 sum += quersumme ((1+i%2)*(nr[i-1]-'0'));
              return (5-sum%5)%5; 
           }             
      case 75:{
          int cnt;
          for (cnt=1;cnt<=9;cnt++) if (nr[cnt-1]!='0') break;
          cnt = 11-cnt;
          switch(cnt){
              case 6:
              case 7:
		  for (i=5;i<=9;i++) sum += (2-i%2)*(nr[i-1]-'0');
                  return (10-sum%10)%10;
              case 9:
                  if (nr[1]=='9'){
                     *cmp = nr[7]-'0';
	   	     for (i=3;i<=7;i++) sum += (2-i%2)*(nr[i-1]-'0');
                     return (10-sum%10)%10;
                  }
                  *cmp = nr[6]-'0';
		  for (i=2;i<=6;i++) sum += (1+i%2)*(nr[i-1]-'0');
                  return (10-sum%10)%10;
          }          
      }           
      case 76:
          if (nr[0]=='0' && nr[1]=='0'){
            for (i=4;i<=9;i++)
	      sum += (nr[i-1]-'0')*(11-i);
            return sum % 11;
          }
          *cmp = nr[7]-'0'; 
          for (i=2;i<=7;i++)
	      sum += (nr[i-1]-'0')*(9-i);
          return sum % 11;
      case 77:{
          int g[5] = {5,4,3,4,5};
          for(i=6;i<=10;i++) sum += (11-i)*(nr[i-1]-'0');
          if (sum%11==0) return *cmp;
          sum=0;
          for(i=6;i<=10;i++) sum += (nr[i-1]-'0')*g[10-i];
          if (sum%11) return 99;
          return *cmp;
      }
      case 78:
          if (nr[0]=='0' && nr[1]=='0' && nr[1]>'0') return *cmp;
          return pz(0,nr,cmp);
      case 79:
          switch(nr[9]-'0'){
            case 0: return 99;
            case 1: 
            case 2:
            case 9:
                  *cmp = nr[8]-'0';
                  for (i=1;i<=8;i++) sum += quersumme ((2-i%2)*(nr[i-1]-'0'));
                  return (10-sum%10)%10;
            default: 
                  for (i=1;i<=9;i++) sum += quersumme ((1+i%2)*(nr[i-1]-'0'));
                  return (10-sum%10)%10;
          }
      case 80:
           if (!memcmp("99",nr+2,2)) return pz(10,nr,cmp);
           for (i=1;i<=9;i++) sum += quersumme ((1+i%2)*(nr[i-1]-'0'));
           if ((10-sum%10)%10 == *cmp) return *cmp;
           return (7-sum%7)%7;
      case 81:
          if (nr[2]=='9') return pz(10,nr,cmp);
          for(i=4;i<=9;i++){
             sum += (11-i)*(nr[i-1]-'0');
          }
          return ((11 - sum%11) % 11)%10;
          break;
      case 82:
           if (!memcmp("99",nr+2,2)) return pz(10,nr,cmp);
           return pz(33,nr,cmp);  
      case 83:
           if (pz(32,nr,cmp)==*cmp) return *cmp;
           if (pz(33,nr,cmp)==*cmp) return *cmp;
           if (nr[9]>='7') return 99;
           sum = 0;
           for(i=5;i<=9;i++) sum += (11-i)*(nr[i-1]-'0');
           return (7-sum%7)%7;
      case 84:
           if (!memcmp("99",nr+2,2)) return pz(10,nr,cmp);
           if (pz(33,nr,cmp)==*cmp) return *cmp;
           for(i=5;i<=9;i++) sum += (11-i)*(nr[i-1]-'0');
           return (7-sum%7)%7;
      case 85:
           if (!memcmp("99",nr+2,2)){
               for(i=3;i<=9;i++) sum += (11-i)*(nr[i-1]-'0');
               return (11 - sum%11)%11;
           }
           for(i=4;i<=9;i++) sum += (11-i)*(nr[i-1]-'0'); 
           if ((11-sum%11)%11%10 == *cmp) return *cmp;
           sum = 0;
           for(i=5;i<=9;i++) sum += (11-i)*(nr[i-1]-'0');
           if ((11-sum%11)%11%10 == *cmp) return *cmp;
           return (7-sum%7)%7;
      case 86:
           if (nr[2]=='9') return pz(10,nr,cmp);
           for(i=4;i<=9;i++)
              sum += quersumme( (1+i%2)*(nr[i-1]-'0') );
           if ((10-sum%10)%10 ==*cmp) return *cmp;
           sum = 0;
           for(i=4;i<=9;i++)
              sum += (11-i)*(nr[i-1]-'0');
           return (11-sum%11)%11%10;
      case 87:{
           int c=0,d=0,a=0,k,p;
           int tab1[5] = {0,4,3,2,6};
           int tab2[5] = {7,1,5,9,8};
           if (nr[2]=='9') return pz(10,nr,cmp);
           if (pz(33,nr,cmp)==*cmp) return *cmp;
           for(i=5;i<=9;i++) sum += (11-i)*(nr[i-1]-'0');
           sum = (7-sum%7)%7;
           if (sum==*cmp) return *cmp;

           for (i=4;i<=9;i++){
             if (nr[i-1]!='0') break;
           }
           c = i%2;
           for (;i<10;i++){
             k = nr[i-1]-'0';
             switch(k){
             case 0: k=5; break;
             case 1: k=6; break;
             case 5: k=10;break;
             case 6: k=1; break;
           } 
           if (c==d){
             if (k>5){
                if (c+d==0){
                  c=d=1;
                  a += 12-k;
                } else {
                  c=d=0;
                  a += k;
                }
             } else {/* k<=5 */
                if (c+d==0){
                  c=1; a+=k;
                } else {
                  c=0; a+=k;
                }
             }
           } else { /* c!=d */
             if (k>5){
                if (c==0){
                 c=1;d=0;a+=12-k;
                } else {
                 c=0;d=1;a-=k;
                }
             } else {/* k<=5 */
                if (c==0){
                 c=1;a-=k;
                } else {
                 c=0;a-=k; 
                }
             }
           }
         }
         while (a<0) a+=5;
         while (a>4) a-=5;
         if (!d) p=tab1[a]; else p=tab2[a];
         if (nr[9]-'0'== p) return p;
         if (nr[3]=='0'){
            if (p-5 == nr[9]-'0') return p-5;
            if (p+5 == nr[9]-'0') return p+5;
         } 
         return 99;
      }
      case 88:
          if (nr[2] == '9'){
             for (i=4;i<=9;i++)
	         sum += (nr[i-1]-'0')*(11-i);
             return ((11 - sum%11)%11)%10;
          }
          else {
	      return pz(6,nr,cmp);
       }
       case 89:
             if (nr[0]=='0' &&
                (nr[1]>'0' || nr[2]>'0')) return pz(10,nr,cmp);
             if (!memcmp("0000",nr,4)) return *cmp;
             sum = 0;
             for (i=4;i<=9;i++){
                 sum += quersumme ( (nr[i-1]-'0')*(11-i) );
             }
             return ((11 - sum%11)%11)%10;
       case 90:
             for (i=5;i<=9;i++)
                 sum += (nr[i-1]-'0')*(11-i);
             if (((11 - sum%11)%11)%10==*cmp) return *cmp;
             if ((7-sum%7)%7==*cmp) return *cmp;
             if ((9-sum%9)%9==*cmp) return *cmp;
             sum += (nr[4-1]-'0')*(11-4);
             if (((11 - sum%11)%11)%10==*cmp) return *cmp;
             sum = 0;
             for (i=5;i<=9;i++) sum += (1+i%2)*(nr[i-1]-'0');
             return (10-sum%10)%10;
       case 100:{
         int g[10] = {2,4,8,5,10,0,0,0,0};
         if (!memcmp("0000000",nr,7)) return *cmp;
         for (i=1;i<=9;i++) sum += g[9-i]*(nr[i-1]-'0');
         return ((11-sum%11)%11)%10;
       }
       case 101:
         if (nr[0]=='0' && nr[1]>'0') return 10;
         if (!memcmp("000",nr,3)) return 11;
         return pz(0,nr,cmp);
       case 102:
	   if (pz(0,nr,cmp)==*cmp) return *cmp;
           return pz(4,nr,cmp);  
       case 103:
	   if (pz(0,nr,cmp)==*cmp) return *cmp;
           return pz(10,nr,cmp);
       case 104:
            if (!memcmp(nr+2,"99",2)){
               for (i=5;i<=9;i++) sum += (11-i)*(nr[i-1]-'0');
               if ((11-sum%11)%11%10 == *cmp) return *cmp;
               sum=0;
               return pz(93,nr,cmp);
            }
            for (i=4;i<=9;i++) sum += (11-i)*(nr[i-1]-'0');
            if (((11-sum%11)%11)%10==*cmp) return *cmp;
            if ((7-sum%7)%7 == *cmp) return *cmp;
            sum=0;
            return pz(93,nr,cmp);  
       case 105:
            if (pz(0,nr,cmp)==*cmp) return *cmp;
            if (nr[0]=='9') return 10;
            return pz(10,nr,cmp);
       case 106:
            if (nr[1]!='8') return pz(1,nr,cmp);
            return pz(0,nr,cmp); 
       case 107:
            if (pz(0,nr,cmp)==*cmp) return *cmp;
            return pz(3,nr,cmp);          
       case 108:
	 if (pz(81,nr,cmp) == *cmp) return *cmp;
         if (nr[2] == '9') return 10;
         return pz(73,nr,cmp);
       case 109:
	   if (pz(1,nr,cmp)==*cmp) return *cmp;
           return pz(6,nr,cmp);  
  }/* switch(method) */    
   return *cmp;
}
main(int narg, char * argv[]){
  int pzz,regel;
  char blz[255];
  char kto[255];
  compress();
  exit(-1);
  pHead();
  getPara("blz=",blz);
  getPara("kto=",kto);
  printf("<head><title>Konto und BLZ pr&uuml;fen</title></head>\n"
         "<body bgcolor=#f5f5ff>\n"
         "<h2>BLZKontoCheck (Testversion)</h2>");
  /*printf("<h1>%s %s</h1>",blz,kto);*/
  if (strlen(kto)<3) {
     kto[3]=0;kto[2]=kto[1];kto[1]=kto[0];kto[0]='0';
  }
  /*printf("Kto=%s",kto);
  if (strlen(blz)<8))
  printf("<h2>%d</h2>",p(blz,"0004711173",4,9,11,0));
  */
  printf("<form method=\"get\"><table>"
         "<tr><td>BLZ</td><td> <input name=\"blz\" value=\"%s\">"
         "</td></tr>"
         "<tr><td>KTO </td><td><input name=\"kto\" value=\"%s\"></td>"
         "</tr></table>"
         "<input type=submit value=\"Pr&uuml;fziffer berechnen\">"
         "\n</form><p>",blz,kto);

  if (strlen(blz)<8){
      printf("<h2>%d</h2>",pz(atoi(blz),kto,&pzz));
      printf("%d<br>",pzz);
  }

  if (strlen(blz)==8){
     if (strlen(blz)<8) regel = atoi(blz); else regel = rule(blz);
     if (regel < 0) {
           printf("BLZ falsch"
                  "</body></html>");
           exit(0);
     } else printf("Regel %d<p>",regel);
     if (strlen(blz)<8) strcpy(blz,"12345678");
     /* printf("<h2> Pr&uuml;fziffer, Regel %d</h2>",regel);
      */
     if (pz(regel,strcat(kto,blz),&pzz) == pzz)
       printf("<h3>Ergebnis der Kontopr&uuml;fung</h3>"
              "Kontonummer zul&auml;ssig");
     else 
       printf("<h3>Ergebnis der Kontopr&uuml;fung</h3>"
              "Prüfziffer ist falsch");
  }
  printf("\n<hr><a href=\"http://www.scheerer-software.de/iban.html\">IBAN</a></body></html>");
}
