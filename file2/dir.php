<?php

declare(strict_types=1);; ?>

<body>
  <?php
  $dir = new DirectoryIterator('./files');

  foreach ($dir as $file) {
    if ($file->isDot()) continue;

    $type = '';
    if ($file->isFile()) {
      $type = 'ファイル';
    } elseif ($file->isDir()) {
      $type = 'ディレクトリ';
    } elseif ($file->isLink()) {
      $type .= '（シンボリックリンク）';
    }
    echo $type, ':', $file->getFilename(), PHP_EOL;
    echo '最終アクセス' , $file->getATime() , PHP_EOL;
    echo 'サイズ' , $file->getSize() , PHP_EOL;
  }
  $dir = null;; ?>
</body>