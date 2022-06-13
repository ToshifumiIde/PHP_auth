<?php

declare(strict_types=1); ?>

<body>
  <?php
  require_once dirname(__FILE__) . '/TaxCalculator.php';

  $calculator = new TaxCalculator();
  $priceWithTax = $calculator->calculate(1000, -0.08);
  echo "計算結果は{$priceWithTax}です。", PHP_EOL;; ?>
</body>