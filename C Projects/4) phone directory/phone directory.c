#include <stdio.h>
#include <stdlib.h>
#include <string.h>

struct direct
{
       char nam[50][50];
       char emal[50][50];
       int num[50];
       int enam;
       int name[50];
       int k;
       int v;   
};

main()
{
  struct direct s1;
  int z;
  int x;
  int y;
  int q;
  int lo;
  int ge;
  
  s1.k=0;
  do
  {
    printf("What would you like to do?\n");
    printf("1) Add Contact\n2) Delete Contact\n3) Search Contact by Name\n4) Search Contact by Number\n5) Display Contacts\n");
    scanf("%d",&z);
    system("cls");
    if(z==1)
    {
            printf("Name:");
            scanf("%s",&s1.nam[s1.k]);
            printf("Number:");
            scanf("%d",&s1.num[s1.k]);
            printf("E-mail Address:");
            scanf("%s",&s1.emal[s1.k]);
            s1.k++;
            system("pause");
            system("cls");
    }
    
    if(z==2)
    {
            printf("Put number of contact to be deleted:\n");
            scanf("%d",&s1.enam);
            q=0;
            do
            {
                   if(s1.num[q]==s1.enam)
                   {
                     s1.num[q]=0;
                     strcpy(s1.nam[q], "none");
                     strcpy(s1.emal[q], "none");
                     q=s1.k;
                   }
                   else
                   {
                       q++;
                   }
            }while(q!=s1.k);
            
            
            
            printf("Finished!!!\n");
            system("pause");
            system("cls");
    }
    else if(z==3)
    {
         printf("input name to be searched\n");
         scanf("%s",&s1.name);
         q=0;
         lo=0;
         do
         {
             lo=strcmp(s1.nam[q],s1.name);
                if(lo==0)
                {
                lo=q;
                q=s1.k;
                }      
                else
                {
                    q++;
                }        
         }while(q!=s1.k);
         
         printf("%s | %d | %s\n",s1.nam[lo],s1.num[lo],s1.emal[lo]);
         system("pause");
         system("cls");
     }
     else if(z==4)
     {
         printf("input number to be searched\n");
         scanf("%d",&s1.enam);
         q=0;
         lo=0;
         do
         {
                if(s1.enam==s1.num[q])
                {
                lo=q;
                q=s1.k;
                }      
                else
                {
                    q++;
                }        
         }while(q!=s1.k);
         
         printf("%s | %d | %s\n",s1.nam[lo],s1.num[lo],s1.emal[lo]);
         system("pause");
         system("cls"); 
      }
    
    else if(z==5)
    {
         discon(s1);
         system("pause");
         system("cls");
    }
  }while(z<6);
  
  system("PAUSE");	
}

int discon(struct direct s2)
{

    for(s2.v=0;s2.v<s2.k;s2.v++)
    {
    printf("%s |",s2.nam[s2.v]);
    printf(" %d |",s2.num[s2.v]);
    printf(" %s\n",s2.emal[s2.v]);
    }
}

