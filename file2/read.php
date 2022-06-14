<?php

declare(strict_types=1);; ?>

<body>
  <?php
  $file = new SplFileObject('files/sample.txt'); //sample.txtの読み込み
  // 実行時のオプションを指定
  $file->setFlags(
    SplFileObject::READ_AHEAD |    // 先読み、巻き戻しで読み出す
      SplFileObject::SKIP_EMPTY |    // 空行はスキップ
      SplFileObject::DROP_NEW_LINE  // 行末の改行を除去する
  );
  $lineNumber = 0;
  foreach ($file as $line) {
    $lineNumber++;
    echo "{$lineNumber}行目：『{$line}』", PHP_EOL;
  }
  $file = null;
  ; ?>
</body>