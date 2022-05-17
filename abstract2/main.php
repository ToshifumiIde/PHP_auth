<?php declare(strict_types=1);?>
<body>
  <?php
  require_once dirname(__FILE__) . '/Canvas.php';
  require_once dirname(__FILE__) . '/../abstract1/DigitalClock.php';
  require_once dirname(__FILE__) . '/../abstract1/AnalogClock.php';
  $canvas = new Canvas();

  $currentTime  = strtotime('2022-05-17 17:15');
  $digitalClock = new DigitalClock();
  $digitalClock->setTime($currentTime);
  $canvas->drawClock($digitalClock);

  $analogClock = new AnalogClock();
  $analogClock->setTime($currentTime);
  $canvas->drawClock($analogClock);

  ;?>
</body>