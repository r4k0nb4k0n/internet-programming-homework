/* Homework C vs. PHP Performance Analysis 2.pi.calculation.php
 * 2017-2 Internet Programming
 * Written by Choe Hyeong Jin, Dept. of Computer Science and Engineering, Univ. of Seoul
 */

<!DOCTYPE html>
<meta charset="utf-8"/>

<?PHP
	function get_time(){
		list($usec, $sec) = explode(" ", microtime());
		return ((float)$usec + (float)$sec);
	}

	$LMT = 100000;

	$start = get_time();
	
	$k = 1;
	$result = 0;
	$s=-1;

	for($k = 2; $k <= $LMT; $k++){
		$result += 1/(2*$k-1)*$s;
		$s*=-1; 
	}
	$result = 4 * $result;

	$end = get_time();

	$time = $end - $start;
	echo 'Pi calculation using Gregory-Leibniz series...'.$LMT.' = '.$result.'
';
	echo 'It takes '.$time.' seconds...
';
?>
