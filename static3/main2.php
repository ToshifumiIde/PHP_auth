<?php declare(strict_types=1);

use SomeClass as GlobalSomeClass;

?>
<body>
  <?php
    class SomeClass{
      private $instanceProperty;

      public function instanceMethod():void{
        echo 'instanceMethod() is called' , PHP_EOL;
      }

      public static function staticMethod():void{
      // 自分自身のインスタンスを生成し、インスタンスメソッドを呼び出す
        $someClass = new SomeClass();
        $someClass->instanceMethod();
        $externalClass = new ExternalClass();
        $externalClass->externalMethod();
      }
    }

    class ExternalClass{
      public function externalMethod():void{
        echo 'externalMethod() is called' , PHP_EOL;
      }
    }

    SomeClass::staticMethod();
  ;?>
</body>