<meta charset="UTF-8"/>

<?PHP

	function get_time()
	{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
	}

	function fibo_param($a,$b,$n){ // $a = a(0), $b = a(1), $n = 원하는 항의 번호
		if($n == 0)
			return $a;
		else if($n == 1)
			return $b;
		else
			return fibo_param($b,$a+$b,$n-1);
	}	

	$start = get_time();
	
	for($z = 0; $z<=269; $z++) // 이 부분을 수정해서 계산하세요
	{
		$p = fibo_param(1, 1, $z);
		print "fibo_param(".$z.") = ".$p."
";
	}
	
	$end = get_time();
	$time = $end - $start;
	echo '
'.$time.'초 걸림
';
?>
