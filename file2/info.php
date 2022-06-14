<?php

declare(strict_types=1);; ?>

<body>
  <?php
  $file = new SplFileObject('./files/flower.jpeg');
  echo '最終アクセス日時（getATIme）', date('Y-m-d H:i:s', $file->getATime()),  PHP_EOL;
  echo '作成日時（getCtTime）', date('Y-m-d H:i:s', $file->getCTime()),  PHP_EOL;
  echo 'ベース名（getBaseName）', $file->getBasename(),  PHP_EOL;
  echo '拡張子（getExtension）', $file->getExtension(),  PHP_EOL;
  echo 'ファイル名（getFileName）', $file->getFilename(),  PHP_EOL;
  echo 'ファイルへのパス（getPath）', $file->getPath(),  PHP_EOL;
  echo '読み込み時のパス名（getPathName）', $file->getPathName(),  PHP_EOL;
  echo '絶対パス（getRealPath）', $file->getRealPath(),  PHP_EOL;
  echo 'サイズ（getSize）', $file->getSize(),  PHP_EOL;
  echo '種別(getType)', $file->getType(),  PHP_EOL;
  echo '読み取り可能か（isReadable）', $file->isReadable(),  PHP_EOL;
  echo '書き込み可能か（isWritable）', $file->isWritable(),  PHP_EOL;
  
  ; ?>
</body>