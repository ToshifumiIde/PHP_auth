<?php

declare(strict_types=1);
require_once dirname(__FILE__) . '/../abstract1/Clock.php';
class Canvas {
  public $backGroundColor;
  public function drawClock(Clock $clock) :void{
    echo $clock->show() . PHP_EOL;
  }
}
