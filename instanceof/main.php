<body>
  <?php
  require_once dirname(__FILE__) . '/Schedule.php';
  require_once dirname(__FILE__) . '/Task.php';
  require_once dirname(__FILE__) . '/TaskSheet.php';

  $taskSheet = new TaskSheet();
  $task = new Task();
  $task->name = 'パスポートの更新';
  $taskSheet->addTask($task);
  $schedule = new Schedule();
  $schedule->name = '今週の金曜日は14:00に打ち合わせ。';
  $taskSheet->addTask($schedule);
  ; ?>
</body>