<?php

declare(strict_types=1);
?>

<body>
  <?php
  echo '●file関数でファイルの読み込み', PHP_EOL;
  $lines = file('files/note.txt');
  foreach ($lines as $line) {
    echo trim($line), PHP_EOL;
  }

  echo '●file_get_contents関数でファイルの読み込み', PHP_EOL;
  $contents = file_get_contents('files/note.txt');
  echo $contents , PHP_EOL;

  echo '●readfile関数でファイルの読み込み' , PHP_EOL;
  readfile('files/note.txt');
  ; ?>
</body>