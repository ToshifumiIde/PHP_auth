<?php declare(strict_types=1);

use SomeClass as GlobalSomeClass;

?>

<body>
  <?php
    require_once dirname(__FILE__) . '/SomeTraitA.php';
    require_once dirname(__FILE__) . '/SomeTraitB.php';

    class SomeClass{
      use SomeTraitA , SomeTraitB{
        SomeTraitB::traitMethod  insteadof SomeTraitA;
      }
      
      /**
       * プロパティセット
       *
       * @return void
       */
      public function setTraitProperty(){
        $this->traitMethod(null,null);
        echo $this->traitProperty;
      }
    }
    $someClass = new SomeClass();
    $someClass->setTraitProperty();
  ;?>
</body>

