#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <conio.h>
#include <math.h>

float rai(float a, int b);

main()
{
  float y;
  float x;
  int n;
  printf("y=x^n\n");
  printf("input x:\n");
  scanf("%f",&x);
  printf("input n:\n");
  scanf("%d",&n);
  y=rai(x,n);
  printf("y=%.2f\n",y);
  
  system("PAUSE");	
}

float rai(float a, int b)
{
      float z;
      int g;
      z=1;
      for(g=1;g<=b;g++)
      {
      z=z*a;
      }
      return z;
}
