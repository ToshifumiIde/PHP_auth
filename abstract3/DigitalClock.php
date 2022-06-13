<?php

declare(strict_types=1);
require_once dirname(__FILE__) . '/../abstract1/Clock.php';

class DigitalClock extends Clock {
  private $color;
  public function setTime(int $time): void {
    if (date('H', $time) >= 6 && date('H', $time) <= 21) {
      $this->color = 'white';
    } else {
      $this->color = 'blue';
    }
  }
  public function getColor(){
    return $this->color;
  }

  public function show():string{
    return date('H:i' , $this->time);
  }
}
