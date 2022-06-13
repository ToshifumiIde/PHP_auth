<?php

declare(strict_types=1); ?>

<body>
  <?php
  $today = '2022-05-24';
  $dateElements = explode('-', $today);
  print_r($dateElements);

  list($year, $month, $day) = explode('-', $today);
  echo '年：' , $year , PHP_EOL;
  echo '月：' , $month , PHP_EOL;
  echo '日：' , $day , PHP_EOL;
  ; ?>
</body>