/* Homework C vs. PHP Performance Analysis 0.assign.php
 * 2017-2 Internet Programming
 * Written by Choe Hyeong Jin, Dept. of Computer Science and Engineering, Univ. of Seoul
 */

<?PHP
	function get_time(){
		list($usec, $sec) = explode(" ", microtime());
		return ((float)$usec + (float)$sec);
	}

	$lmt = 1000000000;

	$start = get_time();

	for($k = 0;$k<=$lmt;$k++){
		$a = 0;
		unset($a);
	}

	$end = get_time();

	$time = $end - $start;

	print $time.'seconds passed...';

?>
