<?php

declare(strict_types=1); ?>

<body>
  <?php
  require_once dirname(__FILE__) . '/ClassA.php';

  try {
    $classA = new ClassA();
    $classA->methodA();
  } catch (Exception $e) {
    echo 'メインルーティンで例外を取得。エラー内容は', $e->getMessage(), PHP_EOL;
    echo '例外のトレース情報は以下の通りです。：', PHP_EOL;
    print_r($e->getTrace());
  } finally {
    echo 'メインルーティンを終了します。';
  }; ?>
</body>