#include <stdio.h>
#include <stdlib.h>

main()
{
  int v; 
  int w;
  int x;
  int y;
  int z;
  printf("please input 5 integers in order\n");
  printf("v:");
  scanf("%d",&v);
  printf("w:");
  scanf("%d",&w);
  printf("x:");
  scanf("%d",&x);
  printf("y:");
  scanf("%d",&y);
  printf("z:");
  scanf("%d",&z);
  system("PAUSE");
  system("cls");
  printf("v=%d\nw=%d\nx=%d\ny=%d\nz=%d\n\n\n\n\n",v,w,x,y,z);
   system("PAUSE");
  reverse(&v,&w,&x,&y,&z);
  printf("v=%d\nw=%d\nx=%d\ny=%d\nz=%d\n",v,w,x,y,z);
  
  
  system("PAUSE");	
  return 0;
}

int reverse(int *a, int *b,int *c,int *d,int *e)
{
    int temp;
    temp=*a;
    *a=*e;
    *e=temp;
    temp=*b;
    *b=*d;
    *d=temp;
    return temp;
    
    
    
    
    
}
