<?php

declare(strict_types=1);

class ClassB {
  /**
   * 例外処理を強制的に投げるメソッド
   *
   * @return void
   */
  public function methodB(): void {
    throw new Exception('methodBでエラー発生');
    echo 'methodB completed'; //ここは処理されない。
  }
}
