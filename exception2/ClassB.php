<?php

declare(strict_types=1);

class ClassB {

  public function methodB(): void {
    throw new Exception('methodBでエラー発生');
    echo 'methodB completed'; //exceptionが実行された後のため、呼び出されない。
  }
}
