<meta charset="UTF-8"/>

<?PHP

	function get_time()
	{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
	}
	
	function ncr($n, $k, $i) // nCk , when i is 2
	{
		if($k>$n-$k) return ncr($n,$n-$k,$i);
		if($k>=$i) return (ncr($n,$k,$i+1)/$i);
		if($k>0) return (ncr($n-1,$k-1,$i)*$n);
		return 1;
	}
	
	function fibo($n)
	{
		$n++;
		$sum = 0;
		for($r = 0;$r<=$n;$r++)
		{
			if(($n-$r+2)%2 == 1)
			{
				$exp = ($n - $r - 1)/2;
				$sum += (ncr($n,$r,2) * pow(5,$exp)) / pow(2,$n-1);
			}
		}
		
		return $sum;
	}
	
	$start = get_time();
	
	for($z = 0; $z<=269; $z++) // 이 부분을 수정해서 계산하세요
	{
		$p = fibo($z);
		print "f(".$z.") = ".$p."
";
	}
	
	$end = get_time();
	$time = $end - $start;
	echo '
'.$time.'초 걸림
';
?>
