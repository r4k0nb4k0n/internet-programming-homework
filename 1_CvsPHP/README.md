# 1. C vs PHP Performance Analysis
* 2016920020 Seo Ye Chan  
* 2016920041 Lee Tae Hee  
* 2016920060 Choe Hyeong Jin 
## 실험 환경
```
CPU : Intel(R) Core™ i5-5200U CPU @ 2.20GHz 
RAM :  8 GB
OS : Ubuntu 16.04.2 LTS Xenial Xerus x64

gcc (Ubuntu 5.4.0-6ubuntu1~16.04.5) 5.4.0 20160609

PHP 7.0.22-0ubuntu0.16.04.1 (cli) ( NTS )
Zend Engine v3.0.0, Copyright (c) 1998-2017 Zend Technologies
    with Zend OPcache v7.0.22-0ubuntu0.16.04.1, Copyright (c) 1999-2017, by Zend Technologies

``` 
## (1) 실험 동기
php와 c의 수행 속도가 동일한지 실험한다.  
한 언어가 빠르다면, 왜 더욱 빠른지 알아보도록 한다.
## (2) 가설
1. 연산을 수행하는 시간에 있어 유리한 점이 있다.
	* pi 계산, 증감문
2. 동적 타입 변수보다는 정적 타입 변수를 처리하는 것이 더 유리하다.
	* 사칙연산
3. 기계어로 변환하는 방법과 수행하는 방법에 있어 유리한 점이 있다.
	* 버블소트
4. 메모리 할당하는 방법에 유리한 점이 있다.
	* 메모리 할당 및 해제
## (3) 실험 방법

## (1) 실험 동기
php와 c의 수행 속도가 동일한지 실험한다.  
한 언어가 빠르다면, 왜 더욱 빠른지 알아보도록 한다.
## (2) 가설
1. 연산을 수행하는 시간에 있어 유리한 점이 있다.
	* pi 계산, 증감문
2. 동적 타입 변수보다는 정적 타입 변수를 처리하는 것이 더 유리하다.
	* 사칙연산
3. 기계어로 변환하는 방법과 수행하는 방법에 있어 유리한 점이 있다.
	* 버블소트
4. 메모리 할당하는 방법에 유리한 점이 있다.
	* 메모리 할당 및 해제
## (3) 실험 방법
1. 연산을 수행하는 시간에 있어 차이가 있다.
	1. For문을 활용하여 증감연산을 충분히 큰 횟수로 반복한다.
	2. For문을 활용하여 원주율 pi를 그레고리 라이프니츠 방법을 이용하여 계산하여본다.
	3. PHP와 C언어에서 각각 동일 알고리즘을 수행하는데 걸린 시간을 측정한다.
	4. 각각 실험에서 두 수행시간을 비교한다.
2. 동적 타입 변수보다는 정적 타입 변수를 처리하는 것이 더 유리하다.
	1. PHP는 C언어와 달리 데이터의 타입을 선언하지 않는다는 점을 이용한다.
	2. C언어는 정적 타입 변수를, PHP는 동적 타입 변수를 이용하여 사칙연산을 수행하여본다.
	3. 두 수행시간을 비교한다.
3. 시간복잡도가 큰 알고리즘을 수행할 때 처리 시간이 서로 차이가 있다.
	1. 충분히 많은 라인을 포함하는 알고리즘을 이용하여 실험한다.
	2. 두 수행시간을 비교한다.
4. 메모리 할당 및 해제하는 시간이 서로 차이가 있다.
	1. For문과 메모리할당/해제 함수를 사용하여 실험한다.
	2. C언어에서는 malloc()함수와 free()함수를 이용하여 할당과 해제를 반복하여 시간을 측정한다.
	3. PHP에서는 선언후 unset()함수를 이용하여 해제시키는 것을 반복하여 시간을 측정한다.
	4. 두 수행시간을 비교한다.
## (4) 실험 진행
* 소스코드
	1. 사칙연산 [1.gagamseungjae.php](./src/1.gagamseungjae.php), [1.gagamseungjae.c](./src/1.gagamseungjae.c)
	2. pi 계산 [2.pi.calculation.php](./src/2.pi.calculation.php), [2.pi.calculation.c](./src/2.pi.calculation.c)
	3. 버블소트 [3.bubblesort.php](./src/3.bubblesort.php), [3.bubblesort.c](./src/3.bubblesort.c)
	4. 메모리 할당 및 해제 [0.assign.php](./src/0.assign.php), [0.assign.c](./src/0.assign.c)
## (5) 실험 결과


