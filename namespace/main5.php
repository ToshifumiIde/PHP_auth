<?php

declare(strict_types=1); ?>

<body>
  <?php
  require_once dirname(__FILE__) . '/office/word/Writer.php';

  use office\word\Writer;
use SomeClass as GlobalSomeClass;

  class SomeClass { 
    private $writer;   
    /**
     * 初期化処理
     *
     * @return void
     */
    public function __construct()
    {
      $this->writer = new Writer();
      $this->writer->write();
    }
  }
  $c = new SomeClass();
  
  ; ?>
</body>