/* Associative Array Sort functions Analysis
 * 2017-2 Internet Programming
 * Written by Choe Hyeong Jin, Dept. of Computer Science and Engineering, Univ. of Seoul
 */

<?PHP
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
	  "래서팬더" => 2.8
	  );

	echo 'Before Sort...
';
	var_dump($assoc);

	echo 'After Sort...
';
	echo '3. arsort()
';
	$temp = $assoc;
	arsort($temp);
	var_dump($temp);
?>
