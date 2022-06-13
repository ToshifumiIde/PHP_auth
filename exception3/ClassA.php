<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/ClassB.php';

class ClassA {
  /**
   * ClassBのmethodBを呼び出すメソッド
   *
   * @return void
   */
  public function methodA(): void {
    $classB = new ClassB();
    try {
      $classB->methodB();
    } catch (Exception $e) {
      echo "methodAで例外を取得しました。エラー内容：{$e->getMessage()}", PHP_EOL;
      throw $e;
    }
    echo 'methodA completed.'; //この行は実行されない。finallyを用意していないため、catch内の処理で完了する。 
  }
}
