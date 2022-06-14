<?php

declare(strict_types=1);
?>

<body>
  <?php
  $csv = new SplFileObject('files/sample.csv'); // sample.csvの読み込み
  $csv->setFlags(SplFileObject::READ_CSV);      // 

  foreach ($csv as $fieldsPerLine) {
    mb_convert_variables('UTF-8', 'UTF-8', $fieldsPerLine);
    print_r($fieldsPerLine);
  }
  $csv = null;; ?>
</body>