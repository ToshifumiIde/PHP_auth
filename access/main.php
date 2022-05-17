<body>
  <?php

  class SomeClass{
    public $propertyA;
    private $propertyB;

    public function methodA():void{
      echo 'methodA is called' , PHP_EOL;
      $this->methodB();
    }
    private function methodB():void{
      echo 'methodB is called' ,PHP_EOL; 
    }
  }
  $someInstance = new SomeClass();

  $someInstance->propertyA = 'A';
  $someInstance->methodA();
  // $someInstance->propertyB = 'B';
  // $someInstance->methodB();

  ;?>
</body>