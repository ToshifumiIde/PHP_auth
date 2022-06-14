<?php

declare(strict_types=1);; ?>

<body>
  <?php
  // 論理型のチェック
  var_dump(is_bool('true'));  // false
  var_dump(is_bool(true));    // true
  var_dump(is_bool(false));   // true
  var_dump(is_bool(1));       // false
  var_dump(is_bool(0));       // false

  // 整数型のチェック
  var_dump(is_int(1234));     // true
  var_dump(is_int('1234'));   // false
  var_dump(is_int(123.456));  // false

  // 数値形式の文字列または数値であるかのチェック
  var_dump(is_numeric(1234));       // true
  var_dump(is_numeric('1234'));     // true
  var_dump(is_numeric('1234.567')); // true
  var_dump(is_numeric('string'));   // false

  // オブジェクトの型チェック
  var_dump(is_object("object"));        // false
  var_dump(is_object(new stdClass()));  // true

  // nullチェック
  var_dump(is_null(null));  // true
  var_dump(is_null(''));    // true
  var_dump(is_null(0));     // false
  ; ?>
</body>