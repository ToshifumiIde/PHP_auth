<?php

declare(strict_types=1);; ?>

<body>
  <?php
  $log = <<<LOG
  ■2022-06-12 12:34:56 [ERROR] 画像ファイルが見つかりませんでした。
  ■2022-06-12 12:34:56 [INFO] ユーザーがログインしました。
  
  LOG;

  file_put_contents('files/log.txt', $log);

  $log = <<<LOG
  ■2022-06-13 12:34:56 [INFO] フリーワードが検索されました。
  ■2022-06-13 12:34:56 [INFO] PDFファイルがアップロードされました。
  
  LOG;

  file_put_contents('files/log.txt', $log, FILE_APPEND);

  echo '●log.txtの内容は以下の通りです。', PHP_EOL;

  readfile('files/log.txt');; ?>
</body>