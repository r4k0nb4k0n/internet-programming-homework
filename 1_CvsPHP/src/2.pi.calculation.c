/* Homework C vs. PHP Performance Analysis 2.pi.calculation.c
 * 2017-2 Internet Programming
 * Written by Lee Tae Hee, Dept. of Computer Science and Engineering, Univ. of Seoul
 */

#include <stdio.h>
#include <time.h>

int main() {
	time_t start_time = 0, end_time = 0;
	double gap;
      int lmt = 0;
      scanf("%d",&lmt);
	start_time = clock();
	double pi = 0;
	int s = 1;
	for (int i = 1; i <= lmt; i++) {
		pi += 1 / (double)(2 * i - 1)*s;
		s *= -1;
	}
	pi *= 4;

	end_time = clock();
	gap = (double)(end_time - start_time) / (CLOCKS_PER_SEC);
	printf("result : %.20lf \n", pi);
	printf("%lf ÃÊ\n", gap);

	return 0;
}
