#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <math.h>
#include <conio.h>

main()
{
  int pass;
  int x;
  int y;
  int z;
  int balance;
  int due;
  due=500;
  balance=1000;
  printf("welcome\n");
  printf("Please insert card\n");
  system("pause");
  system("cls");
  printf("please enter password\n");
  scanf("%d",&pass);
  if(pass==0000)
  {
   
  do 
  { 
         printf("please choose an option:\n");
         printf("1)widthraw\n");
         printf("2)deposit\n");
         printf("3)check balance\n");
         printf("4)pay utility bills\n");
         printf("5)buy a movie ticket\n");
         printf("6)exit\n");
         scanf("%d",&x);
         
         
  if(x==1)
  {
          printf("please input amount to widthraw:\n");
          scanf("%d",&y);
          
          if(balance>=y && y<=500)
          {
                        balance=balance-y;
                         printf("balance left: %d\n",balance);
          }
          else if(balance>=y && y>500 && y<=700)
          {
                              printf("are you sure you want to widthraw that amount?\n 1 for yes 2 for no\n");
                             scanf("%d",&z);
                             if(z==1)
                             {
                             balance=balance-y;
                              printf("transaction complete\nbalance: %d",balance);
                                            }
               else
               {
                   printf("please come again\n");
               }
           }
           
          else if(balance>=y && y>700) 
          {
               printf("cannot widthraw more than 700.\n");
           }
          else if(balance<y)
          {
               printf("invalid input\n");
          }
  }
  else if(x==2)
  {
       printf("please input amount to be deposited\n");
       scanf("%d",&y);
       balance=balance+y;
       printf("your current balance is %d\n",balance);
   }
  else if(x==3)
  {
       printf("your current balance is %d\n",balance);
   }
   
  else if(x==4)
  {
       if(due<=0)
       {
                 printf("already paid\n");
                 }
  else{
       printf("your bill cost is %d\n",due);
       if(due>balance)
       {
       printf("not enough balance\n");
       }
       else
       {
        printf("would you like to pay now?\n");
        printf("1 for yes\n2 for no\n");
        scanf("%d",&y);
        if(y==1)
        {
                balance=balance-due;
                due=0;
                printf("remaining balance: %d\n", balance);
        }
        else
        {
         printf("transaction cancelled\n");
        }
        
       }
  }
   }
  else if(x==5)
  {
       printf("there is only one movie availabe.\nmoney used to pay is form balance\nwould you like to buy a ticket?\n");
       printf("1 for yes\n2for no\n");
       scanf("%d",&y);
       if(y==1)
       {
        printf("ticket cost 200 each.\nhow many would you like to buy?\n");
        scanf("%d",&y);
        z=y*200;
        if(z>balance)
        {
         printf("not enough credits\n");
        }
        else if(balance>=z)
        {
             balance=balance-z;
             printf("%d tickets purhcased. remaining balance %d\n",y,balance);
         }
       }
       else
       {
           printf("transaction cancelled\n");
       }
   }
              
                
  
system("pause");
system("cls");
  
}while(x<6);

}
  else
  {
      printf("invalid password\n");
  }
  
  
  
  system("pause");

}
