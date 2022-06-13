<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/../clone2/Address.php';

class Customer {
  public $name;
  public $address;

  /**
   * インスタンス生成時の自動処理
   *
   * @param  string $name
   * @param  object $address
   * @return void
   */
  public function __construct(string $name, Address $address) {
    $this->name = $name;
    $this->address = $address;
  }

  /**
   * 名前変更メソッド
   *
   * @param  mixed $name
   * @return void
   */
  public function changeName(string $name): void {
    $this->name = $name;
  }

  public function changeAddress(string $prefecture, string $city): void {
    $this->address->prefecture = $prefecture;
    $this->address->town = $city;
  }

  public function __clone(): void {
    $this->address = clone $this->address;
  }
};
