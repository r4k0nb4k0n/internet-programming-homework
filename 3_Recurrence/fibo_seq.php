<meta charset="UTF-8"/>

<?PHP

	function get_time()
	{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
	}

	function fibo_math($n)
	{
		if($n == 0 || $n == 1) return $n;
		else return fibo_math($n-1) + fibo_math($n-2);
	}		
	
	$start = get_time();
	
	for($z = 0; $z<=269; $z++) // 이 부분을 수정해서 계산하세요
	{
		$p = fibo_math($z);
		print "fibo_math(".$z.") = ".$p."
";
	}
	
	$end = get_time();
	$time = $end - $start;
	echo '
'.$time.'초 걸림
';
?>
