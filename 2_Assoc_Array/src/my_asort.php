<meta charset="utf-8"/>
<?PHP
 function my_asort($arr){
   $return=$value=array();
   foreach($arr as $arr_key => $arr_value){
     $value[]=$arr_value;
   }
   sort($value);
   
   for($i=0;$i<sizeof($value);$i++){
     $key=array_search($value[$i],$arr);
     $return[$key]=$value[$i];
   }
   print_r($return);
 }
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
	echo 'my_asort()
';
	my_asort($assoc);
?>