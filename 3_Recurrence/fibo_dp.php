/* 2017-2 Internet Programming
 * Fibonacci Function Recursive Implementation - Dynamic Programming
 * Written by Choe Hyeong Jin, Dept. of CSE, Univ. of Seoul
 */

<?PHP
	global $memo;
	$memo = array();

	function fibo_td($x, &$memo){	
		// base condition
		if( $x == 1 || $x == 2 ) return 1;

		// Memoization
		if( $memo[$x] != -1 ) return $memo[$x];

		// Ignition
		$memo[$x] = fibo_td($x-1, $memo) + fibo_td($x-2, $memo);
		return $memo[$x];
	}

	$max = 10000;
	for($i=0;$i<$max;$i++){
		$memo[$i] = -1;
	}

	$x = 10;
	$answer = fibo_td($x, $memo);

	echo 'fibo_td('.$x.')='.$answer;
?>
