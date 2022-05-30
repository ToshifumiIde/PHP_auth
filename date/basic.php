<?php

declare(strict_types=1);; ?>

<body>
  <?php
  date_default_timezone_set('Asia/Tokyo');

  echo '現在の時刻：', date('Y-m-d H:i:s'), PHP_EOL;
  $dateTime = new DateTime('2022-05-30 11:52:30');
  echo $dateTime->format('Y.m.d H:i:s'), PHP_EOL;

  echo (new DateTime('2022-05-30 11:40:00'))->format('Y.m.d H:i:s'), PHP_EOL;

  $dateTime = new DateTime();
  echo $dateTime->format('Y.m.d H:i:s'), PHP_EOL;

  $dateTime = new DateTime('+3 hours');
  echo $dateTime->format('Y/m/d H:i:s'), PHP_EOL;

  $dateTime = new DateTime();
  $dateTime->setDate(2019, 2, 25)->setTime(17, 12, 34);
  echo $dateTime->format('Y/m/d H:i:s'), PHP_EOL;
  echo (new DateTime('2022-05-30 12:00:00'))->modify('+5 days')->modify('+12 hours')->format('Y/m/d H:i:s'), PHP_EOL;
  $dateTime = new DateTime('2022-05-30 12:10:12');
  $dateTime->setTimezone(new DateTimeZone('UTC'));
  echo $dateTime->format('Y/m/d H:i:s') , PHP_EOL;
  ; ?>
</body>