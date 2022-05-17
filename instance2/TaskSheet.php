<?php

declare(strict_types=1);
require_once dirname(__FILE__) . '/../instance1/Task.php';

class TaskSheet {
  private $tasks = [];

  // タスクを追加するメソッド
  public function addTask(Task $task): void {
    $this->tasks[] = $task;
    echo $task->getName(), 'を追加しました。', PHP_EOL;
  }

  // タスクリストを表示するメソッド
  public function showTasks(): void {
    foreach ($this->tasks as $task) {
      if ($task->isCompleted()) {
        echo '<b>', $task->getName(), '</b>', PHP_EOL;
      } else {
        echo $task->getName(), PHP_EOL;
      }
    }
  }
}
