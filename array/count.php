<?php

declare(strict_types=1);; ?>

<body>
  <?php
  $chars = ['a', 'b', 'c'];
  echo count($chars), PHP_EOL;
  $chars = [
    'a' => 'あ',
    'i' => 'い',
    'u' => 'う',
  ];
  echo count($chars), PHP_EOL;
  $user = [
    'name' => 'Tanaka',
    'age' => 20,
    'prefecture' => 'Osaka',
    'hobbies' => [
      '魚つり',
      '読書',
      '作詞',
    ],
  ];
  echo count($user), PHP_EOL;
  echo count($user, COUNT_RECURSIVE), PHP_EOL;; ?>
</body>