<?php

declare(strict_types=1); ?>

<body>
  <?php
  $sentence = '今日は、良い日です';

  var_dump(str_replace('今日', 'あした', $sentence));

  $sentence = <<<TEXT
  いろはにほへと　ちりぬるを
  わかよたれそ　つねならむ
  TEXT;
  var_dump(str_replace(["\r\n", "\r", "\n"], '', $sentence));; ?>
</body>