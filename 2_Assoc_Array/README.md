# 2. 연상배열 정렬함수 분석 및 구현
* 2016920020 서예찬
* 2016920041 이태희
* 2016920060 최형진
## 1. 배경
**연상 배열(Associative Array)**은  자료구조 중 하나로, 키 하나와 값 하나가 연관되어 있으며 키를  키를 통해 연관된 값을 얻을 수 있다.  
php는 연상 배열을 사용할 수 있고, 이를 정렬하는 함수들도 구현되어 있다.
* asort() - 연상 배열을 **값**에 따라 **오름차순**으로 정렬
* ksort() - 연상 배열을 **키**에 따라 **오름차순**으로 정렬
* arsort() - 연상 배열을 **값**에 따라 **내림차순**으로 정렬
* krsort() - 연상 배열을 **키**에 따라 **내림차순**으로 정렬
## 2. 분석 방법
위 4개의 정렬함수가 어떻게 작동하는지 알아보기 위해 다음과 같은 연상 배열을 사용한다.
```
$assoc = array(
	  "Student0" => "김갑",
	  "Professor0" => "인터넷프로그래밍및실습",
	  19430112 => "할머니",
	  "라쿤" => 4.5,
	  1105 => array("Remember", "November", "5th"),
	  "Student1" => "이을",
	  19670518 => "두부장수",
	  "Professor1" => "자료구조",
	  "너구리" => 4.3,
	  "Student00" => "박병",
	  19871112 => "감나무집아들",
	  1003 => array("My", "Birthday"),
	  "Professor00" => "유닉스프로그래밍",
	  "래서팬더" => 2.8,
	  );
```
## 3. 분석 결과
자료형이 서로 다를 때는 오름차순 기준으로 문자열, 정수, 실수, 배열 순으로 정렬되는 것을 알 수 있다.
## 4. 추가 실험
위 4개의 정렬함수 중 값에 따라 정렬하는 함수 중 ```asort()```, 키에 따라 정렬함수 중 ```ksort()``` 2개를 각각 구현해본다.```(my_asort() / my_ksort() 구현)```
## 5. 결과 분석
asort함수를 사용하여 정렬을 하면 데이터 값을 기준으로 오름차순으로 정렬하며
ksort함수를 사용하여 정렬을 하면 키 값을 기준으로 오름차순으로 정렬되었다.
arsort함수를 사용하여 정렬을 하면 데이터 값을 기준으로 내림차순으로 정렬되고
krsort함수를 사용하여 정렬을 하면 키 값을 기준으로 내림차순으로 정렬된다.
이 때 데이터 타입이 서로 다른 경우 문자열, 정수, 실수, 배열 순으로 정렬된다.
  그런데 여기서 특이한 점을 하나 찾을 수 있었는데, 한글로 이루어진 문자열의 데이터 크기가 한글 1글자당 3byte로 출력되었다는 것이다. 흔히 유니코드에서 한글을 표현하기 위해 한글은 1글자당 2byte로 표현된다고 하는데 php를 통한 출력에서 데이터의 크기를 출력하면 1글자당 3byte로 표현된다. 이를 조사하여 보니 유니코드를 통한 가변길이문자 형식의 인코딩 방법인 UTF-8에 대해 알게 되었다.
  UTF-8은 간단히 말하자면 데이터를 원하는 만큼 확장시켜 한 문자를 표현할 수 있는 인코딩 방식이다. 1byte의 문자를 표현할 때에는 1byte의 시작 bit가 0이며 ```U+0000~U+007F```까지의 문자를 표현할 수 있어 이 경우 ASCII문자를 표현하며 시작bit가 0이다.
2byte의 문자를 표현할 때에는 첫 byte가 110xxxxx이며 이어지는 byte는 10xxxxxx이다. 이 경우 ```U+0080~U+07FF```까지의 문자를 표현할 수 있다.
3byte의 문자를 표현할 때에는 첫 byte가 1110xxxx이며 이어지는 byte는 10xxxxxx이다. 이 경우 ```U+0800~U+FFFF```까지의 문자를 표현할 수 있다. 한글1글자는 ```U+0800~U+FFFF```영역에 표현되어 있으므로 3byte의 데이터로 변환하여 인코딩하는 것이다.

