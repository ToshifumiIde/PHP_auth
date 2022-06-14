<?php

declare(strict_types=1);; ?>

<body>
  <?php
  class someClass {
    /**
     * doStatic
     *
     * @return void
     */
    public static function doStatic(): void {
    }
    /**
     * doPublic
     *
     * @return void
     */
    public function doPublic(): void {
    }
    /**
     * doPrivate
     *
     * @return void
     */
    private function doPrivate(): void {
    }
  }

  $someClass = new someClass();
  var_dump(class_exists('someClass', false));
  var_dump(class_exists('GhostClass', false));

  require_once dirname(__FILE__) . '/classes/ExternalClass1.php';

  var_dump(class_exists('ExternalClass1', false));
  var_dump(class_exists('ExternalClass2', false));

  var_dump(method_exists($someClass, 'doPublic'));
  var_dump(method_exists($someClass, 'doStatic'));
  var_dump(method_exists($someClass, 'doPrivate'));
  var_dump(method_exists('someClass', 'doPublic'));
  var_dump(method_exists('someClass', 'doStatic'));
  var_dump(method_exists('someClass', 'doPrivate'));
  var_dump(method_exists($someClass, 'doNothing'));

  var_dump(is_callable([$someClass, 'doPublic']));
  var_dump(is_callable([$someClass, 'doPrivate']));
  var_dump(is_callable([$someClass, 'doStatic']));
  var_dump(is_callable([$someClass, 'doPrivate'], true));
  
  function calc(){}
  var_dump(is_callable('calc'));
  var_dump(function_exists('calc'));
  var_dump(function_exists('nothing'));
  ; ?>
</body>