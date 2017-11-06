/* Homework C vs. PHP Performance Analysis 3.bubblesort.c
 * 2017-2 Internet Programming
 * Written by Lee Tae Hee, Dept. of Computer Science and Engineering, Univ. of Seoul
 */

#include <stdio.h>
#include <time.h>

int main() {
	time_t start, end;
	double gap;
	start = clock();

	int number[5000];
	int tmp;
	int lmt = 5000;

	for (int i = 0; i < lmt; i++)
		number[i] = lmt - i;

	for (int i = 0; i < lmt; i++) {
		for (int j = 0; j < lmt; j++) {
			if (number[i] < number[j]) {
				tmp = number[i];
				number[i] = number[j];
				number[j] = tmp;
			}
		}
	}

	end = clock();
	gap = (double)(end - start) / (CLOCKS_PER_SEC);
	printf("%lf ÃÊ...\n", gap);
}
