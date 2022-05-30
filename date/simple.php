<?php

declare(strict_types=1);; ?>

<body>
  <?php
  echo '●現在のUnixタイム：', PHP_EOL;
  echo time(), PHP_EOL;

  echo '●現在時刻を出力：', PHP_EOL;
  echo date('Y-m-d H:i:s'), PHP_EOL;
  echo '●現在の3日後の日時を出力(time使用)', PHP_EOL;
  echo date('Y/m/d H:i:s', time() + 60 * 60 * 24 * 3) , PHP_EOL;
  echo '●2022-05-30 10:00:00の3時間前を出力：' , PHP_EOL;
  echo date('Y/m/d H:i:s' , strtotime('+3 days')),PHP_EOL;

  $date1 = '2022-05-30 09:20:00';
  $date2 = '2022-05-30 17:12:34';
  echo '●date1はdate2よりも未来か？' , PHP_EOL;
  var_dump(strtotime($date1) > strtotime($date2));

  echo '●date1はdate2よりも過去か？'  , PHP_EOL;
  var_dump(strtotime($date1) < strtotime($date2));

  ; ?>
</body>