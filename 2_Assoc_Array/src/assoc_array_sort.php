/* Associative Array Sort functions Analysis
 * 2017-2 Internet Programming
 * Written by Choe Hyeong Jin, Dept. of Computer Science and Engineering, Univ. of Seoul
 */

<?PHP
	$assoc = ;

	echo 'Before Sort...
';
	var_dump($assoc);

	echo 'After Sort...
';

	echo '1. asort()
';
	$temp = $assoc;
	asort($temp);
	var_dump($temp);

	echo '2. ksort()
';
	$temp = $assoc;
	ksort($temp);
	var_dump($temp);

	echo '3. arsort()
';
	$temp = $assoc;
	arsort($temp);
	var_dump($temp);

	echo '4. krsort()
';
	$temp = $assoc;
	krsort($temp);
	var_dump($temp);

?>
