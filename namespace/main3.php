<?php declare(strict_types=1);?>

<body>
  <?php
  require_once dirname(__FILE__) . '/office/word/Writer.php';
  use office\word\Writer;
  
  $writer = new Writer();
  $writer->write();

  ;?>
</body>
