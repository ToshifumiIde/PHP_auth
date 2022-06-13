<?php

declare(strict_types=1);; ?>

<body>
  <?php
  echo '●「TestString」をURLエンコードします。', PHP_EOL;
  $encoded = urlencode('TestString');
  echo $encoded, PHP_EOL;
  $decoded = urldecode($encoded);
  echo $decoded, PHP_EOL;
  
  echo '●「東京都杉並区」をURLエンコードします。' , PHP_EOL;
  $encoded = urlencode('東京都杉並区');
  echo $encoded  , PHP_EOL;
  $decoded = urldecode($encoded); //%エンコードに変換される
  echo $decoded , PHP_EOL;

  echo '●「Mark Of !?(^^)」をURLエンコードします。' , PHP_EOL;
  $encoded = urlencode('Mark Of !?(^^)');
  echo $encoded , PHP_EOL;
  $decoded = urldecode($encoded);
  echo $decoded , PHP_EOL;
  ; ?>
</body>