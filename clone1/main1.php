<?php

declare(strict_types=1);

use Task as GlobalTask;

?>

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
  function changeTask(Task $task): void {
    $task->name = '散歩';
  }

  $task1 = new Task();
  $task1->name = 'パスポートの更新';
  $task2 = $task1;
  $task2->name = '買い物';
  echo $task1->name, PHP_EOL;

  changeTask($task2);

  echo $task1->name;
  echo $task2->name;; ?>


</body>