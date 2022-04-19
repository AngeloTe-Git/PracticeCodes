#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <conio.h>
#include <math.h>

struct lto
{
       char user1[30];
       char user2[30];
       char user3[30];
       char user4[30];
       char user5[30];
       char inu[30];
       int pas1;
       int pas2;
       int pas3;
       int pas4;
       int pas5;
       int pac;
};

main()
{
      struct lto t;
      char info[50][50];
      int vio[55];
      int x;
      int g;
      
      
      vio[1]=0;
      vio[2]=2;
      vio[3]=0;
      vio[4]=0;
      vio[5]=0;
      
      
    
      strcpy(t.user1, "Marcus_Eduard");
      t.pas1=000000;
      
      strcpy(t.user2, "lasalle");
      t.pas2=100;
      
      strcpy(t.user3, "hey_hey");
      t.pas3=1234;
      
      strcpy(t.user4, "pokemon");
      t.pas4=9876;
      
      strcpy(t.user5, "pacman");
      t.pas5=6789;
     
     
      printf("Please put username:\n");
      scanf("%s",&t.inu);
      printf("Please put Password:\n");
      scanf("%d",&t.pac);
      x=strcmp(t.inu,t.user1);
      
      if(((x==0)&&(t.pac==t.pas1))||((strcmp(t.inu,t.user2)==0)&&(t.pac==t.pas2))||((strcmp(t.inu,t.user3)==0)&&(t.pac==t.pas3))||((strcmp(t.inu,t.user4)==0)&&(t.pac==t.pas4))||((strcmp(t.inu,t.user5)==0)&&(t.pac==t.pas5)))
      {
          if(((strcmp(t.inu,t.user2)==0)&&(t.pac==t.pas2)))
          {
             do
             {
                system("cls");
                printf("please choose an option.\n");
                printf("1) apply for liscence\n2) renewal of liscence\n3) pay violation\n4) record violation\n5) Exit Program\n");
                scanf("%d",&g);
                if(g==1)
                {
                  printf("please input information\n");
                  printf("first name:\n");
                  scanf("%s",&info[1]);
                  printf("last name:\n");
                  scanf("%s",&info[5]);
                  printf("month of birth:");
                  scanf("%s",&info[2]);
                  printf("day of birth:");
                  scanf("%s",&info[3]);
                  printf("year of birth:");
                  scanf("%s",&info[4]);
                  
                  
                  system("pause");
                  system("cls");
                  
                  
                  printf("__________________________________________________\n\n");
                  printf("LTO\n");
                  printf("name:%s, %s\n",info[5],info[1]);
                  printf("birthday:%s %s, %s\n",info[2],info[3],info[4]);
                  printf("issued in manila\n\n");
                  printf("__________________________________________________\n");
                  
                  printf("\n\nservice fee: 50 pesos\nlicsence fee: 750\n");
                  printf("end of transaction:\n");
                  
                }
                
                
                else if(g==2)
                {
                     system("cls");
                     printf("|||renewal of liscence|||\n");
                     printf("you have %d violations\n",vio[1]);
                     if(vio[1]>0)
                     {
                      printf("you have to pay fine first.\n");
                     }
                     else
                     {
                         printf("renewal cost: 500 pesos\nservice fee: 50 pesos\n--end of transaction.\n");
                     }
                }
                else if(g==3)
                {
                     printf("you have %d fines\n",vio[1]);
                     x=vio[1]*500;
                     printf("violation fee: %d\n",x);
                     printf("end of transaction\n");
                 }
                 else if(g==4)
                 {
                      printf("violations\n");
                      printf("Driver's name:\n");
                      scanf("%s",&info[1]);
                      printf("plate number\n");
                      scanf("%s",&info[2]);
                      printf("violation\n");
                      scanf("%s",&info[3]);
                      printf("attending officer\n");
                      scanf("%s",&info[4]);
                      system("pause");
                      system("cls");
                      
                      printf("Name: %s\nViolation: %s\nPlate number: %s\nAttending Officer:%s\n",info[1],info[3],info[2],info[4]);
                  }
                
               system("pause");
             }while(g<5);
          }
          
          
          else//this starts the others
          {
              do
             {
                system("cls");
                printf("please choose an option.\n");
                printf("1) apply for liscence\n2) renewal of liscence\n3) pay violation\n4) Exit program\n");
                scanf("%d",&g);
                if(g==1)
                {
                  printf("please input information\n");
                  printf("first name:\n");
                  scanf("%s",&info[1]);
                  printf("last name:\n");
                  scanf("%s",&info[5]);
                  printf("month of birth:");
                  scanf("%s",&info[2]);
                  printf("day of birth:");
                  scanf("%s",&info[3]);
                  printf("year of birth:");
                  scanf("%s",&info[4]);
                  
                  
                  system("pause");
                  system("cls");
                  
                  
                  printf("__________________________________________________\n\n");
                  printf("LTO\n");
                  printf("name:%s, %s\n",info[5],info[1]);
                  printf("birthday:%s %s, %s\n",info[2],info[3],info[4]);
                  printf("issued in manila\n\n");
                  printf("__________________________________________________\n");
                  
                  printf("\n\nservice fee: 50 pesos\nlicsence fee: 750\n");
                  printf("end of transaction:\n");
                  
                }
                
                
                else if(g==2)
                {
                     system("cls");
                     printf("|||renewal of liscence|||\n");
                     printf("you have %d violations\n",vio[2]);
                     if(vio[2]>0)
                     {
                      printf("you have to pay fine first.\n");
                     }
                     else
                     {
                         printf("renewal cost: 500 pesos\nservice fee: 50 pesos\n--end of transaction.\n");
                     }
                }
                else if(g==3)
                {
                     printf("you have %d fines\n",vio[2]);
                     x=vio[2]*500;
                     vio[2]=0;
                     printf("violation fee: %d\n",x);
                     printf("end of transaction\n");
                 }
                
                
               system("pause");
             }while(g<4);
          }
      }
      else
      {
          printf("invalid username and password\n");
          }
      
  
  
  
  system("PAUSE");	
  return 0;
}
