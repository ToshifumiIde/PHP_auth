<?php
declare(strict_types=1);
;?>
<body>
  <?php
  echo '●年月日をドット区切りからハイフン区切りに変換する。' , PHP_EOL;
  $diary = '2022.05.30 今日は快晴です。';
  $diary = preg_replace('/([0-9]{4})\.([0-9]{2})\.([0-9]{2})/u' , '${1}-${2}-${3}' , $diary);
  echo $diary , PHP_EOL;
  echo '●[LINK] ~ [/LINK]の文字タグを<a>タグに変換する。' , PHP_EOL;
  $diary = '今日は聖蹟桜ヶ丘を散歩しました。参考：[LINK]https://example.com/seiseki[/LINK]';
  $diary = preg_replace('/(\[LINK\])(https:\/\/.+)(\[\/LINK\])/ui' ,'<a href="${2}">${2}</a>' ,$diary);
  echo $diary , PHP_EOL;
  ;?>
</body>