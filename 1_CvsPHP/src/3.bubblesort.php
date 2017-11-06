/* Homework C vs. PHP Performance Analysis 3.bubblesort.php
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

	$LMT = 50000;
	$numbers = range($LMT, 1);
	
	echo 'Before Sort...
';
	$start = get_time();
	
	// Bubble sort...Ascending...
	echo 'BUBBLE SORTING...
';
	for($i = 0; $i < $LMT; $i++){
		for($j = 0; $j < $LMT; $j++){
			if($numbers[$i] < $numbers[$j]){
				$temp = $numbers[$i];
				$numbers[$i] = $numbers[$j];
				$numbers[$j] = $temp;
			}
		}
	}

	$end = get_time();
	echo ' After Sort...
';
	$time = $end - $start;
	echo $LMT.' Bubble Sort takes '.$time.' seconds...
';
?>
