<?php

declare(strict_types=1); ?>

<body>
  <?php
  class Task {

    public $name;
    private $extras = [];
    public function __set($name, $value): void {
      $this->extras[$name] = $value;
    }
    public function __get($name) {
      return $this->extras[$name];
    }
    public function __toString() {
      $properties = 'タスク名：' . $this->name . PHP_EOL;
      foreach ($this->extras as $key => $value) {
        $properties .= $key . ':' . $value . PHP_EOL;
      }
      return $properties;
    }
  }
  $task =  new Task();
  $task->name      = '飛行機のチケット購入'; //__set()は呼ばれない
  $task->placeFrom = '成田'; //__set()が呼ばれる
  $task->placeTo   = '函館'; //__set()が呼ばれる
  echo $task; //__toString()が呼ばれる
  
  ; ?>
</body>