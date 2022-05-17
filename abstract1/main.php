<?php declare(strict_types=1);
;?>
<body>
  <?php
  require_once dirname(__FILE__) . '/DigitalClock.php';
  
  $currentTIme = strtotime('2022-05-17 18:30');
  $digitalClock = new DigitalClock();
  $digitalClock->setTime($currentTIme);
  echo $digitalClock->show();
  ;?>
</body>