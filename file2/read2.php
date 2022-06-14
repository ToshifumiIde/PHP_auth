<?php

declare(strict_types=1); ?>

<body>
  <?php
  setlocale(LC_ALL, 'ja_JP.UTF-8');
  require_once (__FILE__) . '/functions.php';

  // sample.csvのコードをUTF-8に変換し、sample-utf.csvとして保存する。
  sjis2utf('files/sample.csv', 'files/temp/sample-utf.csv');

  // sample-utf.csvファイルの読み込み
  $csv = new SplFileObject('files/temp/sample-utf.csv');
  $csv->setFlags(SplFileObject::READ_CSV);

  // sample-utf.csvを1行ずつループ処理
  foreach ($csv as $filePerLine) {
    print_r($fieldsPerLine);
  }
  $csv = null;; ?>
</body>