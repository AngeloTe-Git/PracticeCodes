#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <conio.h>
#include <math.h>


int prov(float q, float w, float e);
float quadm(float q,float w,float e);
float quadp(float q,float w,float e);

main()
{
      float a;
      float b;
      float c;
      float x;
      float y;
      float z;
      printf("please enter value of a for quadratic equation"); 
      scanf("%f",&a);
      printf("please enter value of b for quadratic equation"); 
      scanf("%f",&b);
      printf("please enter value of c for quadratic equation"); 
      scanf("%f",&c);
      z=prov(a,b,c);
      if(z==1)
      {
              x=quadm(a,b,c);
              y=quadp(a,b,c);
              printf("the roots are %.2f and %.2f\n",x,y);
      }
      else if(z==0)
      {
           printf("no real roots");
       }
      
      
       
  system("PAUSE");	
  return 0;
}

int prov(float q, float w, float e)
{
    int x;
    if((2*w)>(4*q*e))
    x=1;
    else
    x=0;
    return x;
}

float quadm(float q,float w,float e)
{
    float x,y,z,o;
    o=sqrt((w*w)-(4*q*e));
    y=-w;
    z=2*q;
    x=(y+o)/z;
    
    return x;
}

float quadp(float q,float w,float e)
{
    float x,y,z,o;
    o=sqrt((w*w)-(4*q*e));
    y=-w;
    z=2*q;
    x=(y-o)/z;
    
    return x;
}
