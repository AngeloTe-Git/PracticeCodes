#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <math.h>
#include <conio.h>

int pizza(int x,int y);

main()
{
  int x[50];
  int y;
  int cost;
  cost=0;
  printf("Hello, may i take your order:\n");
  printf("30 pesos per topping.\n100 pesos for thin crust.\n130 pesos for thick crust\n");
  printf("1) Thick Crust\n2) Thin Crust \n");
  scanf("%d",&x[1]);
  if(x[1]==2)
  cost=cost+100;
  else
  cost=cost+130;
  
  system("pause");
  system("cls");
 
 do
  { 
  printf("Add Toppings\n");
  printf("1) Cheese-10\n2) Pepperoni-25\n3) Bell Pepper-15\n");
  printf("4) Anchovies-20\n5) Mushroom-10\n6) Onions-10\n");
  printf("7) egg-30\n8) Steak-40\n9) Chicken-30\n");

    scanf("%d",&y);
    cost=pizza(y,cost);
    system("cls");
  }while(y<10);
  printf("your total cost is %d\n",cost);
  system("PAUSE");
}

int pizza(int x,int y)
{
    int z;
    z=y;
    if(x==1)
    z=z+10;
    else if(x==2)
    z=z+25;
    else if(x==3)
    z=z+15;
    else if(x==4)
    z=z+20;
    else if(x==5)
    z=z+10;
    else if(x==6)
    z=z+10;
    else if(x==7)
    z=z+30;
    else if(x==8)
    z=z+40;
    else if(x==9)
    z=z+30;
    else
    z=z;
    return z;
}
