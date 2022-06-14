<?php

declare(strict_types=1);; ?>

<body>
  <?php
  // 5バイトのランダム値を生成
  $bytes = random_bytes(5);
  echo bin2hex($bytes), PHP_EOL;

  $bytes = openssl_random_pseudo_bytes(5);
  echo bin2hex($bytes), PHP_EOL;; ?>
</body>