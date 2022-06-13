<?php declare(strict_types=1);?>
<body>
  <?php
  echo base_convert('123', 10 ,2) , PHP_EOL;
  echo base_convert('1111011', 2 ,10) , PHP_EOL;
  
  echo base_convert('ff' , 16,10) ,PHP_EOL;
  echo base_convert('c0' , 16,10) ,PHP_EOL;
  echo base_convert('cb' , 16,10) ,PHP_EOL;
  echo base_convert('0754',8,2) , PHP_EOL;
  ;?>
</body>