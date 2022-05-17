<?php declare (strict_types=1);?>
<body>
  <?php
  require_once dirname(__FILE__) . '/../instance1/Task.php';
  $task = new Task('パスポートの更新');
  echo $task->getName() , PHP_EOL;
  echo $task->getPriority() , PHP_EOL;
  echo $task->getProgress() , PHP_EOL;
  ;?>
</body>