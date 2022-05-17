<body>
  <?php
  require_once dirname(__FILE__) . '/../instance1/Task.php';
  require_once dirname(__FILE__) . '/TaskSheet.php';

  $taskSheet = new TaskSheet();

  $task1 = new Task('パスポートの更新');
  // $task1->setName('パスポートの更新');
  $task1->setProgress(100);
  $taskSheet->addTask($task1);
  
  $task2 = new Task('食材の買い出し');
  // $task2->setName('食材の買い出し');
  $task2->setProgress(50);
  $taskSheet->addTask($task2);

  echo PHP_EOL , '●タスクリストを表示します...' , PHP_EOL;
  $taskSheet->showTasks();
  ; ?>
</body>