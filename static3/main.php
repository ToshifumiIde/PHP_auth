<?php declare(strict_types=1);?>
<body>
  <?php
    class SomeClass{
      private $instanceProperty;
      public static function staticMethod():void{
        $this->instanceProperty;
      }
    }
    SomeClass::staticMethod();
  ;?>
</body>
