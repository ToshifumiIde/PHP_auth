<?php declare(strict_types=1);?>
<body>
  <?php
  $word = '奥多摩';
  echo "●{$word}を16進数に変換します", PHP_EOL;
  echo bin2hex($word) , PHP_EOL;

  $binary = 'e7aeb1e6a0b9';
  echo "●{$binary}の16進数表現をデコードします。" , PHP_EOL;
  echo hex2bin($binary);
  ;?>
</body>