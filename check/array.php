<?php

declare(strict_types=1);; ?>

<body>
  <?php
  $chars = [
    'a', 'i', 'u', 'e', 'o'
  ];

  var_dump(in_array('u', $chars, true));
  var_dump(in_array('U', $chars, true));
  var_dump(in_array('n', $chars, true));
  var_dump(in_array(0, $chars, true));
  $users = [
    [
      'id'         => 1,
      'user_id'    => 1,
      'user_name'  => '山田 太郎',
      'created_at' => '2022-06-14 12:00:00',
      'updated_at' => '2022-06-14 13:00:00',
    ],
    [
      'id'         => 2,
      'user_id'    => 2,
      'user_name'  => '喧嘩',
      'created_at' => '2022-06-14 12:00:00',
      'updated_at' => '2022-06-14 13:00:00',
    ],
  ];

  var_dump(in_array('山田 太郎', $users[0], true));; ?>
</body>