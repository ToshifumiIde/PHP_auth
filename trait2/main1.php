<?php

declare(strict_types=1);
?>

<body>
  <?php
  require_once dirname(__FILE__) . '/SomeTraitA.php';
  require_once dirname(__FILE__) . '/SomeTraitB.php';

  class SomeClass {
    use SomeTrait1, SomeTraitB;
    
    /**
     * トレイトのプロパティセット
     *
     * @return void
     */
    public function setTraitProperty(): void {
      $this->traitMethod(null, null);
      echo $this->traitProperty;
    }
  }
    $someClass = new SomeClass();
    $someClass->setTraitProperty();
  ; ?>
</body>