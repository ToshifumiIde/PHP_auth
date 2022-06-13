<?php 
declare(strict_types=1);

;?>
<body>
  <?php 
  $finfo = finfo_open(FILEINFO_MIME_TYPE);
  echo finfo_file($finfo , './files/flower-rename1.jpeg') , PHP_EOL;
  finfo_close($finfo);
  ;?>
</body>