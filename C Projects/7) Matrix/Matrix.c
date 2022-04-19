#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <conio.h>
#include <math.h>

main()
{
  int x[4][4];
  int y[4][4];
  int final[4][4];
  int z;//option
  int h;

  
  int k;//row
  int f;//column
  
  int l;
  int d;
  
  int g;
  int e;
  int marg;
  int n;
  int sum;

  
  do
  {
  printf("||| Matrix |||\n");
  printf("Please choose an option:\n1) Add Matrices\n2) Multiply Matrices\n3) Exit program\n");
  scanf("%d",&z);
  system("pause");
  system("cls");
  
  if(z==1)//start of addition
  {
          printf("||| Matrix ADD |||\n");
          printf("Please indicate size of matrix:");
          scanf("%d",&h);
          printf("from left to right, top to bottom please put the numbers for matrix 1\n");
          for(k=1;k<=h;k++)
          {
                           for(f=1;f<=h;f++)
                           {
                              printf("number of row %d, column %d\n",k,f);
                              scanf("%d",&x[f][k]);
                           }
          }
          
          printf("from left to right, top to bottom please put the numbers for matrix 2\n");
          for(k=1;k<=h;k++)
          {
                           for(f=1;f<=h;f++)
                           {
                              printf("number of row %d, column %d\n",k,f);
                              scanf("%d",&y[f][k]);
                           }
          }
          system("pause");
          system("cls");
          for(k=1;k<=h;k++)
          {
                           for(f=1;f<=h;f++)
                           {
                              final[f][k]=x[f][k]+y[f][k];
                           }
          }
          
          for(k=1;k<=h;k++)
          {
                           for(f=1;f<=h;f++)
                           {
                              printf("%d ",x[f][k]);
                           }
                           printf("\n");
          }
          printf("\n+\n");
          
          for(k=1;k<=h;k++)
          {
                           for(f=1;f<=h;f++)
                           {
                              printf("%d ",y[f][k]);
                           }
                           printf("\n");
          }
          printf("\n=\n\n");
          
          for(k=1;k<=h;k++)
          {
                           for(f=1;f<=h;f++)
                           {
                              printf("%d ",final[f][k]);
                           }
                           printf("\n");
          }
          
        system("pause");
        system("cls");  
  }//end of addition
  
  
  
  
  
  
  else if(z==2)//start of multiplication
  {
       printf("||| Multiplying Matrix |||\n");
       printf("please indicate size of matrix:\n");
       printf("how many rows for matrix A ?\n");
       scanf("%d",&k);
       printf("how many columns for matrix A ?\n");
       scanf("%d",&f);
       printf("how many rows for matrix B ?\n");
       scanf("%d",&l);
       printf("how many columns for matrix B ?\n");
       scanf("%d",&d);
       system("pause");
       system("cls");
       
       if(f==l)
       {
          printf("from left to right, top to bottom please put the numbers for matrix A\n");
          for(g=1;g<=k;g++)
          {
                           for(e=1;e<=f;e++)
                           {
                              printf("number of row %d, column %d\n",e,g);
                              scanf("%d",&x[e][g]);
                           }
          }
           system("cls");
           
           printf("from left to right, top to bottom please put the numbers for matrix B\n");
          for(g=1;g<=l;g++)
          {
                           for(e=1;e<=d;e++)
                           {
                              printf("number of row %d, column %d\n",e,g);
                              scanf("%d",&y[e][g]);
                           }
          }   
            system("cls");   
          for(g=1;g<=k;g++)
          {
                           for(e=1;e<=d;e++)
                           {
                                sum=0;
                                marg=0;
                                for(n=1;n<=f;n++)
                                {
                                sum=marg+((x[e][n])*(y[n][g]));
                                marg=sum;
                                }            
                              final[e][g]=sum;
                           }
          }     
               printf("Matrix A * Matrix B\n\n");
          for(g=1;g<=k;g++)
          {
                           for(e=1;e<=f;e++)
                           {
                              printf("%d ",x[e][g]);
                           }
                           printf("\n");
          } 
          
          printf("\n\nmultiplied\n\n") ;
          
          for(g=1;g<=l;g++)
          {
                           for(e=1;e<=d;e++)
                           {
                              printf("%d ",y[e][g]);
                           }
                           printf("\n");
          }     
               
               
               printf("\n\nequals\n\n");
            
          for(g=1;g<=k;g++)
          {
                           for(e=1;e<=d;e++)
                           {
                           printf("%d ",final[e][g]);
                           }
                           printf("\n");
          }   
               
               
       }
       
       else if(f!=1)
       {
            printf("invalid matrix size\n");
       }
    system("pause");
    system("cls");   
       
  }
  
  }while(z<3);
  
  system("PAUSE");	
}



          /*for(k=1;k<=h;k++)
          {
                           for(f=1;f<=h;f++)
                           {
                              printf("%d ",x[f][k]);
                           }
                           printf("\n");
          }*/
