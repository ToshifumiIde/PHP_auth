<?php

declare(strict_types=1); ?>

<body>
  <?php
  $string = '万能MIXERーご自宅で簡単にジュースやスムージー、なんとふりかけまで！今ならなんと交換刃2セット追加して、お値段なんと20,000円！超お買い得のキャンペーンは2022年05月24日23:59:59まで！';
  echo mb_strimwidth($string, 0, 98, '…'), PHP_EOL;; ?>
</body>