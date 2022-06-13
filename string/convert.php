<?php

declare(strict_types=1); ?>

<body>
  <?php
  $greetings = 'こんにちは　コンニチハ　ｺﾝﾊﾞﾝﾊ　Ｈｅｌｌｏ　ＨＥＬＬＯ　HELLO hello １２３';
  echo mb_convert_case($greetings, MB_CASE_UPPER), PHP_EOL; // 英字が全て大文字に変換される
  echo mb_convert_case($greetings, MB_CASE_LOWER), PHP_EOL; // 英字が全て小文字に変換される
  echo mb_convert_case($greetings, MB_CASE_TITLE) ,PHP_EOL; // 英語が全て「Hello」に変換される

  echo mb_convert_kana($greetings , 'KV') , PHP_EOL; // 「ｺﾝﾊﾞﾝﾊ」が「コンバンハ」になる
  echo mb_convert_kana($greetings, 'rns') , PHP_EOL; // 英数字が半角英数字に、全角スペースが半角スペースになる。
  ; ?>
</body>