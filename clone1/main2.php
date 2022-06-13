<?php

declare(strict_types=1);; ?>

<body>
  <?php
  class Task {
    public $name;
  }
  
  /**
   * タスクを「散歩」に変更するメソッド
   *
   * @param  mixed $task
   * @return void
   */
  function changeTask(Task $task) {
    $task->name = '散歩';
  }
  $task1 = new Task();
  $task1->name = 'パスポート更新';
  $task2 =  clone $task1;
  $task2->name = '買い物';
  echo $task1->name, PHP_EOL;

  changeTask(clone $task2);
  echo $task1->name, PHP_EOL;
  echo $task2->name, PHP_EOL;; ?>
</body>