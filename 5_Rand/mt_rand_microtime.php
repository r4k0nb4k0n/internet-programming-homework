<?php
  // 2017-2 Internet-Programming
  // Written by Choe Hyeong Jin, Dept. of CSE, Univ. of Seoul
  // Given a seed value using microtime()
  mt_srand((double)microtime()*10000);
  for($i=0;$i<500;$i++)
    echo mt_rand(1, 500).'
';
?>
