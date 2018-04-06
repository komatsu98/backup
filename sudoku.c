/*
 * sudoku.c
 *
 *  Created on: May 29, 2015
 *      Author: hunglv
 */
#include<time.h>
#include<stdio.h>
#include<string.h>

void main(void){
		int S[9][9] =      {{0,0,0,8,0,0,0,9,7},
							{0,0,7,0,1,0,8,0,2},
							{0,0,8,0,0,6,0,0,5},
							{1,0,6,0,0,0,2,0,3},
						  	{9,0,0,0,0,5,0,4,0},
							{3,0,0,0,4,0,0,0,6},
							{6,0,0,0,2,0,0,0,4},
							{8,0,0,0,0,1,0,7,0},
							{7,0,0,0,0,0,1,0,0}};
		solve_sudoku(S,0,0);
}

void solve_sudoku(int S[][9], int x, int y){
	if(y == 9){
		if(x == 8){
			printSolution(S);
			exit(0);
		} else {
			solve_sudoku(S, x+1,0);
		}
	} else if(S[x][y] == 0){
		int k = 0;
		for (k = 1; k <=9; k++){
			if(feasible(S,x,y,k)){
				S[x][y] = k;
				solve_sudoku(S, x, y+1);
				S[x][y] = 0;
			}
		}
	} else {
		solve_sudoku(S,x,y+1);
	}
}


int feasible(int S[][9], int x, int y, int k){
	int i = 0, j = 0;
	for(i = 0; i <9 ; i++){
		if(S[x][i] == k) return 0;
	}
	for(i = 0; i <9 ; i++){
			if(S[i][y] == k) return 0;
		}

	return 1;

}
void printSolution(int S[][9]){
	int i = 0, j = 0;
	for(i = 0; i <  9; i++){
		for(j = 0; j <  9; j++){
			printf("%d   ",S[i][j]);
		}
		printf("\n");
	}
}

