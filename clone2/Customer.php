<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Address.php';

class Customer {
  public $name;
  public $address;
  /**
   * インスタンス生成時のマジックメソッド
   *
   * @param  mixed $name
   * @param  mixed $address
   * @return void
   */
  public function __construct(string $name, Address $address) {
    $this->name = $name;
    $this->address = $address;
  }

  /**
   * 名前変更のメソッド
   *
   * @param  mixed $name
   * @return void
   */
  public function changeName(string $name): void {
    $this->name = $name;
  }

  public function changeAddress(string $prefecture, string $city): void {
    $this->address->prefecture = $prefecture;
    $this->address->city = $city;
  }
}
