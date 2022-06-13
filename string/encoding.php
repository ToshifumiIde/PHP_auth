<?php

declare(strict_types=1); ?>

<body>
  <?php
  $books = file('books.txt');
  var_dump($books);

  foreach ($books as $book) {
    echo mb_convert_encoding($book, 'UTF-8', 'SJIS-win'), PHP_EOL;
  }
  mb_convert_variables('UTF-8', 'SJIS-win', $books);
  foreach ($books as $book) {
    echo $book, PHP_EOL;
  }; ?>
</body>