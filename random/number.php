<?php

declare(strict_types=1);; ?>

<body>
  <?php
  echo 'ランダムな数字：', random_int(1, 9999), PHP_EOL;
  $code = 'customer-' . str_pad(strval(random_int(1, 9999)), 5, '0', STR_PAD_LEFT);
  echo '顧客コードは：', $code, PHP_EOL;
  $colors = ['red', 'blue', 'green', 'yellow', 'black'];
  echo 'ラッキーカラーは：', $colors[random_int(0, 4)], PHP_EOL;

  /**
   * ランダムURLを生成
   *
   * @param  int $minLength
   * @param  int $maxLength
   * @return string
   */
  function generateRandom(int $minLength, int $maxLength): string {
    $length = random_int($minLength, $maxLength);
    $chars  = array_merge(range('a', 'z'), range('a', 'z'), range('0', '9'));
    $random = '';
    for ($i = 0; $i < $length; $i++) {
      $random .= $chars[random_int(0, count($chars) - 1)];
    }
    return $random;
  }
  echo 'ここをクリックして登録を完了してください。：https://example.com/user?key=' , generateRandom(16,32) , PHP_EOL; 
  
  ; ?>
</body>