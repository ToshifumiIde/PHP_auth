<?php

declare(strict_types=1);; ?>

<body>
  <?php
  date_default_timezone_set('Asia/Tokyo');
  $date = new DateTime('2022-05-30 12:15:15');
  echo $date->format('Y.m.d H:i:s'), PHP_EOL;
  echo $date->format('Y/m/d H:i'), PHP_EOL;
  echo $date->format('Y年m月d日(D) H時i分'), PHP_EOL;
  echo $date->format('Y.m.t'), PHP_EOL;
  echo $date->format('U'), PHP_EOL;
  echo $date->format(DateTime::ATOM), PHP_EOL;
  echo $date->format(DateTime::COOKIE), PHP_EOL;
  $date->setTimezone(new DateTimezone('UTC'));
  echo $date->format('Y/m/d H:i:s')
  ; ?>
</body>