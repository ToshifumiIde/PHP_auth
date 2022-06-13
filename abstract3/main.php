<?php

declare(strict_types=1); ?>

<body>
  <?php
  require_once dirname(__FILE__) . '/DigitalClock.php';
  $currentTime = strtotime('2022-05-22 19:08');
  $digitalClock = new DigitalClock();
  $digitalClock->setTime($currentTime);
  echo $digitalClock->getColor();

  ; ?>
</body>