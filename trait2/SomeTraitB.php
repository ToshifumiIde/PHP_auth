<?php

declare(strict_types=1);

trait SomeTraitB {
  private $traitProperty;
  /**
   * プロパティへの値の格納
   *
   * @return void
   */
  public function traitMethod($args1, $args2): void {
    $this->traitProperty = 'B';
  }
}
