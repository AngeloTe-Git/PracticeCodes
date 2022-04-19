#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <conio.h>

int add(int x,int y);

main()
{
  int x[50][50];
  int y;
  int g;
  int r;
  int z;
  char team[50][50];
r=1;
  printf("Team %d name:\n");
  scanf("%s",&team1);
  r++;
  printf("Team %d name:\n");
  scanf("%s",&team2);
  r++;
  printf("Team %d name:\n");
  scanf("%s",&team3);
  r++;
  printf("Team %d name:\n");
  scanf("%s",&team4);
  r++;
  printf("Team %d name:\n");
  scanf("%s",&team5);
  
  printf("game1 team1 score\n");
  scanf("%d",&x[1][1]);
  printf("game1 team2 score\n");
  scanf("%d",&x[1][2]);
  
  printf("game2 team1 score\n");
  scanf("%d",&x[2][1]);
  printf("game2 team3 score\n");
  scanf("%d",&x[1][3]);
  
  printf("game3 team1 score\n");
  scanf("%d",&x[3][1]);
  printf("game3 team4 score\n");
  scanf("%d",&x[1][4]);
  
  printf("game4 team1 score\n");
  scanf("%d",&x[4][1]);
  printf("game4 team5 score\n");
  scanf("%d",&x[1][5]);
  
  printf("game5 team2 score\n");
  scanf("%d",&x[2][2]);
  printf("game5 team3 score\n");
  scanf("%d",&x[2][3]);
  
  printf("game6 team2 score\n");
  scanf("%d",&x[3][2]);
  printf("game6 team4 score\n");
  scanf("%d",&x[2][4]);
  
  printf("game7 team2 score\n");
  scanf("%d",&x[4][2]);
  printf("game7 team5 score\n");
  scanf("%d",&x[2][4]);
  
  printf("game8 team3 score\n");
  scanf("%d",&x[3][3]);
  printf("game8 team4 score\n");
  scanf("%d",&x[3][4]);
  
  printf("game9 team3 score\n");
  scanf("%d",&x[4][3]);
  printf("game9 team5 score\n");
  scanf("%d",&x[3][5]);
  
  printf("game10 team4 score\n");
  scanf("%d",&x[4][4]);
  printf("game10 team5 score\n");
  scanf("%d",&x[4][5]);

  for(y=1;y<=5;y++)
  {
               for(g=1;g<=4;g++)
               {
                 printf("%d  ",x[g][y]);
               }
               printf("\n");
  }
  
  system("pause");
  system("cls");
  
  for(y=1;y<=5;y++)
  {
                   z=0;
               for(g=1;g<=4;g++)
               {
                 z=z+x[g][y];
               }
               x[g+1][y]=z;
  }
  
  
  
  
  
  
  system("PAUSE");	
}
int add(int x,int y)
{
    int z;
    z=x+y;
    return z;
}


