<?php

declare(strict_types=1); ?>

<body>
  <?php
  require_once dirname(__FILE__) . '/TaxCalculator.php';

  $calculator  = new TaxCalculator();

  try {
    $priceWithTax = $calculator->calculate(1000, 0.08);
    echo "Price : {$priceWithTax} 円", PHP_EOL;
  } catch (Exception $e) {
    echo "税込計算ができませんでした。理由：{$e->getMessage()}", PHP_EOL;
  } finally {
    // try catchの結果に関わらず必ず実行される処理
    $calculator->reset();
  }
  echo 'プログラムを終了します。'; ?>
</body>