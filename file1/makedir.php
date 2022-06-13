<?php 
declare(strict_types=1);
;?>

<body>
  <?php
  echo '●new-dir1ディレクトリを作成' , PHP_EOL;
  mkdir('./files/new-dir1');

  echo '●new-dir2ディレクトリを作成' , PHP_EOL;
  mkdir('./files/new-dir2');

  echo '●new-dir1を削除' , PHP_EOL;
  rmdir('./files/new-dir1');
  ;?>
</body>