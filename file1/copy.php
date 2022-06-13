<?php
declare(strict_types=1);
;?>

<body>
  <?php
  echo '●flower.jpegをコピーしてflower-copy1.jpegを作成' , PHP_EOL;
  copy('./files/flower.jpeg' , './files/flower-copy1.jpeg');
  echo '●flower.jpegをコピーしてflower-copy2.jpegを作成', PHP_EOL;
  copy('./files/flower.jpeg' , './files/flower-copy2.jpeg');
  echo '●flower.jpegをコピーしてflower-copy3.jpegを作成', PHP_EOL;
  copy('./files/flower.jpeg' , './files/flower-copy3.jpeg');
  echo '●flower.jpegをflower-rename1.jpegにリネーム', PHP_EOL;
  rename('./files/flower.jpeg' , './files/flower-rename1.jpeg');
  echo '●flower-copy2.jpegを削除', PHP_EOL;
  unlink('./files/flower-copy2.jpeg');
  ;?>
</body>