<?php

declare(strict_types=1);; ?>

<body>
  <?php
  $a = 'a';
  var_dump(isset($a));
  var_dump(isset($b));

  $z = null;
  var_dump(isset($z));

  $chars = ['a', 'b', 'c'];
  var_dump(isset($chars));
  var_dump(isset($chars[0]));
  var_dump(isset($chars[1]));
  var_dump(isset($chars[2]));
  var_dump(isset($chars[3]));
  var_dump(array_key_exists(0, $chars));
  var_dump(array_key_exists(3, $chars));

  $chars = [
    'a' => 'あ',
    'i' => 'い',
    'u' => 'う',
    'e' => null,
    'o' => 'お',
  ];

  var_dump(isset($chars['a']));
  var_dump(isset($chars['e']));
  var_dump(isset($chars[0]));
  var_dump(array_key_exists('a', $chars));
  var_dump(array_key_exists('e', $chars));; ?>
</body>