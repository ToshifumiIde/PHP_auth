<?php

declare(strict_types=1); ?>

<body>
  <?php
  class SuperClass {
    protected $data1;
    public function __construct(string $data1) {
      $this->data1 = $data1;
      echo $this->data1;
    }
  }
  class SubClass extends SuperClass{

  }
  $subClass = new Subclass('This is SubClass');

  ; ?>
</body>