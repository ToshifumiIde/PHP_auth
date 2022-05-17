<?php

declare(strict_types=1);; ?>

<body>
  <?php
  require_once dirname(__FILE__) . '/Task.php';
  $task1 = new Task('パスポートの更新');
  // $task1->setName('パスポートの更新');
  $task1->setProgress(100);

  if ($task1->isCompleted() === true) {
    echo $task1->getName(), 'は完了しました。', PHP_EOL;
  } else {
    echo $task1->getName(), 'は未完了です。', PHP_EOL;
  }

  $task2 = new Task('食材の買い出し');
  // $task2->setName('食材の買い出し');
  $task2->setProgress(50);
  if ($task2->isCompleted() === true) {
    echo $task2->getName(), 'は完了しました。', PHP_EOL;
  } else {
    echo $task2->getName(), 'は未完了です。', PHP_EOL;
  }; ?>


</body>