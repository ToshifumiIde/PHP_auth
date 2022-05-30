<?php

declare(strict_types=1);; ?>

<body>
  <?php
  $term1Start = new DateTime('2022-02-01 00:00:00');
  $term1End   = new DateTime('2022-02-28 23:59:59');

  $term2Start = new DateTime('2022-01-01 00:00:00');
  $term2End   = new DateTime('2022-02-10 23:59:59');

  if ($term1Start <= $term2End && $term1End >= $term2Start) {
    echo '2つの期間が重なり合っています。', PHP_EOL;
  } else {
    echo '2つの期間は重なり合っていません。', PHP_EOL;
  }; ?>
</body>