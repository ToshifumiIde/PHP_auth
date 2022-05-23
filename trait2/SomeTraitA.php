<?php

declare(strict_types=1);


trait SomeTraitA {
  private $traitProperty;
  
  /**
   * プロパティへの値の格納
   *
   * @param  mixed $args1
   * @param  mixed $args2
   * @return void
   */
  public function traitMethod($args1, $args2): void {
    $this->traitProperty = 'A';
  }
}
