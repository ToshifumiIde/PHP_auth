<?php

declare(strict_types=1);

use DigitalClock as GlobalDigitalClock;

?>

<body>
  <?php
  abstract class Clock {
    public function setTime(int $time): void {
      echo 'ClockクラスのsetTimeメソッドが呼ばれました。', PHP_EOL;
    }
  }
  class DigitalClock extends Clock {
    public function setTime(int $time): void {
      echo 'DigitalClockクラスのsetTimeメソッドが呼ばれました。', PHP_EOL;
      parent::setTime($time); //ここでスーパークラスのsetTimeメソッドを呼び出す。
    }
  }
  $currentTime = strtotime('2022-05-17 19:44');
  $digitalClock = new DigitalClock();
  $digitalClock->setTime($currentTime);; ?>
</body>