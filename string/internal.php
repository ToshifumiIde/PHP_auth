<?php

declare(strict_types=1); ?>

<body>
  <?php
  echo '●変更前の文字コード：', mb_internal_encoding(), PHP_EOL;

  mb_internal_encoding('SJIS-Win');
  echo '●変更後の文字コード', mb_internal_encoding(), PHP_EOL;; ?>
</body>