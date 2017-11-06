/* Homework C vs. PHP Performance Analysis 0.assign.c
 * 2017-2 Internet Programming
 * Written by Choe Hyeong Jin, Dept. of Computer Science and Engineering, Univ. of Seoul
 */

#include <stdio.h>
#include <time.h>

int main(){
	time_t start_time = 0, end_time = 0;
	double gap;
      int lmt = 0;
	int i=0;
	scanf("%d",&lmt);
	start_time = clock();
	for(i=0;i<lmt;i++){
		int *a = (int *)malloc(sizeof(int));
		free(a);
	}

	end_time = clock();

	gap = (double)(end_time - start_time) / (CLOCKS_PER_SEC);
	printf("%lf seconds...\n",gap);

	return 0;
}
