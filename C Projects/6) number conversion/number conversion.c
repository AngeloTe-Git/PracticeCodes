#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <conio.h>
#include <math.h>

struct num
{
    int x;
    int y;
    int g;
    int z[50];
    int ans;
};

int bintodec(struct num s);

main()
{
    struct num s;
    
    do
    {
    printf("Please choose a program:\n");
    printf("\n1) Binary to Decimal\n2) Decimal to Binary\n3) Octal to Decimal\n4) Decimal to Octal\n5) Exit Program\n");
    scanf("%d",&s.x);
    system("cls");
    
    if(s.x==1)
    {
            printf("|||Binary to Decimal|||\n");
            printf("please input number of digits:");
            scanf("%d",&s.g);
            printf("input digits from left to right");
            for(s.y=1;s.y<=s.g;s.y++)
            {
               printf("Please input digit number %d\n",s.y);
               scanf("%d",&s.z[s.y]);
            } 
            s.ans=bintodec(s);
            for(s.y=1;s.y<=s.g;s.y++)
            {
               printf("%d",s.z[s.y]);
            }
            printf(" converted to decimal is %d\n",s.ans);
            system("pause");
            system("cls");
    }
    else if(s.x==2)
    {
         printf("|||Decimal to Binary|||\n");
         printf("Please input Decimal Value:\n");
         scanf("%d",&s.ans);
         dectobin(s);
         system("pause");
         system("cls");
    }
    else if(s.x==3)
    {
         printf("|||Octal to Decimal|||\n");
         printf("please input number of digits:");
         scanf("%d",&s.g);
         printf("please input digits from left to right.");
         for(s.y=1;s.y<=s.g;s.y++)
            {
               printf("Please input digit number %d\n",s.y);
               scanf("%d",&s.z[s.y]);
            } 
         s.ans=octodec(s);
          for(s.y=1;s.y<=s.g;s.y++)
            {
               printf("%d",s.z[s.y]);
            }
         printf(" converted to decimal is %d\n",s.ans);
         system("pause");
         system("cls");
    }
    else if(s.x==4)
    {
         printf("|||Decimal to Binary|||\n");
         printf("Please input Decimal Value:\n");
         scanf("%d",&s.ans);
         dectooc(s);
         system("pause");
         system("cls");
    }
    }while(s.x<5);
  
  system("PAUSE");	
  return 0;
}

int dectooc(struct num s)
{
    int x;
    int y;
    int z;
    x=1;
    y=s.ans;
    do
    {
        if((y%8)==0)
        {
             s.z[x]=y%8;
             y=y/8;
             x++;  
        }
        else
        {
            s.z[x]=y%8;
            y=(y-(y%8))/8;
            x++;
        }
    }while(y>0);
    printf("Decimal %d becomes ",s.ans);
    for(z=x-1;z>0;z--)
    {
      printf("%d",s.z[z]);
    }
    printf("\n");
}

int octodec(struct num s)
{
    int x;
    int y;
    y=0;

      for(x=s.g;x>0;x--)
      {
         y=(8*y)+s.z[x];
      }  
    return y;
}

int bintodec(struct num s)
{
    int x;
    int y;
    y=0;

      for(x=s.g;x>0;x--)
      {
         y=(2*y)+s.z[x];
      }  
    return y;  

}

int dectobin(struct num s)
{
    int x;
    int y;
    int z;
    x=1;
    y=s.ans;
    do
    {
        if((y%2)==0)
        {
             s.z[x]=y%2;
             y=y/2;
             x++;  
        }
        else if((y%2)==1)
        {
            s.z[x]=y%2;
            y=(y-1)/2;
            x++;
        }
    }while(y>0);
    printf("Decimal %d becomes ",s.ans);
    for(z=x-1;z>0;z--)
    {
      printf("%d",s.z[z]);
    }
    printf("\n");
}
