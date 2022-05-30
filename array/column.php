<?php

declare(strict_types=1);; ?>

<body>
  <?php
  $userLists = [
    [
      'user_id'    => 100001,
      'user_name'  => 'Tanaka',
      'age'        => 20,
      'prefecture' => 'Osaka',
    ],
    [
      'user_id'    => 100002,
      'user_name'  => 'Suzuki',
      'age'        => 38,
      'prefecture' => 'Ehime',
    ],
    [
      'user_id'    => 100003,
      'user_name'  => 'Tsukamoto',
      'age'        => 28,
      'prefecture' => 'Aichi',
    ],
  ];

  echo '●prefectureキーのみを取得', PHP_EOL;
  $prefectures = array_column($userLists, 'prefecture');
  print_r($prefectures);
  echo '●prefectureキーのみを取得し、戻り値のキーはuser_idとする。」', PHP_EOL;
  $prefectures = array_column($userLists, 'prefecture', 'user_id');
  print_r($prefectures);
  echo '●全てのキーを取得し、戻り値のキーはuser_idとする', PHP_EOL;
  $prefectures = array_column($userLists, null, 'user_id');
  print_r($prefectures);; ?>

</body>