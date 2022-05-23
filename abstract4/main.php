<?php declare(strict_types=1);

use AnalogClock as GlobalAnalogClock;
use DigitalClock as GlobalDigitalClock;

?>
<body>
  <?php
  abstract class Clock{
    public function setTime(string $time , $extraArgument =null){

    }
  }
  class DigitalClock extends Clock{
    public function setTime(string $time, $extraArgument = null)
    {
      return ;
    }
  }
  class AnalogClock extends Clock{
    public function setTime(string $time , $extraArgument = null){
      return ;
    }
  }

  $digitalClock = new DigitalClock();
  $digitalClock->setTime('11:14'  , ['fontColor' => 'white']);
  $analogClock = new AnalogClock();
  $analogClock->setTime('11:14');
  ;?>
</body>