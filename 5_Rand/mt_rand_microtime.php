<?php
  // 2017-2 Internet-Programming
  // Written by Choe Hyeong Jin, Dept. of CSE, Univ. of Seoul
  // Given a seed value using microtime()
  mt_srand((double)microtime()*1000);
  for($i=1;$i<=500;$i++)
    echo $i.';'.mt_rand(1, 500).'
';
?>
