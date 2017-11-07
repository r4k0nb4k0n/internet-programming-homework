<meta charset="UTF-8"/>

<?PHP

	function get_time()
	{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
	}

	$memoize = function($func)
	{
	    return function() use ($func)
	    {
	        static $cache = [];
	
	        $args = func_get_args();
	        $key = md5(serialize($args));
	
    	    if ( ! isset($cache[$key])) {
    	        $cache[$key] = call_user_func_array($func, $args);
    	    }

 	       return $cache[$key];
	    };
	};

	$fibonacci = $memoize(function($n) use (&$fibonacci)
	{
		return ($n < 2) ? $n : $fibonacci($n - 1) + $fibonacci($n - 2);
	});
	
	$start = get_time();
	
	for($z = 0; $z<=269; $z++) // 이 부분을 수정해서 계산하세요
	{
		$p = $fibonacci($z);
		print "fibo_dp(".$z.") = ".$p."
";
	}
	
	$end = get_time();
	$time = $end - $start;
	echo '
'.$time.'초 걸림
';
?>
