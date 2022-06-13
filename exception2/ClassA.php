<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/ClassB.php';

class ClassA {  
  /**
   * methodBを呼び出すClassAのコールメソッド
   *
   * @return void
   */
  public function methodA(): void {
    $classB = new ClassB();
    $classB->methodB();
    echo 'methodA completed'; //ClassBのmethodB内のExceptionが処理されるため、呼び出されない。
  }
}
