<?php

declare(strict_types=1); ?>

<body>
  <?php
  $greeting = ' こんばんは！ ';
  var_dump(trim($greeting));
  $greeting = "こんにちは\t\r\n";
  var_dump(trim($greeting));; ?>
</body>