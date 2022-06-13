<?php
declare(strict_types=1);
;?>

<body>
  <?php
  echo '●文字列を1文字ずつに分割する。',PHP_EOL;
  $chars = preg_split('//u' , 'こんにちは hello'  , -1 ,PREG_SPLIT_NO_EMPTY);
  print_r($chars);
  echo '●文字列を改行で分解する。',  PHP_EOL;
  $diary=<<<TEXT
  2022年05月30日
  今日は快晴です。
  スタバで勉強しています。
  TEXT;
  $words = preg_split('/(\r\n|\r|\n)/u',$diary);
  print_r($words);
  echo '●文字列を半角または全角スペースで分解する。' , PHP_EOL;
  $words = preg_split("/[ 　]/u" , 'あいうえお　かきくけこ さしすせそ');
  print_r($words);
  ;?>
</body>