<?php declare(strict_types=1);

class Address{
  public $prefecture;
  public $city;
  
  /**
   * インスタンス生成時のマジックメソッド
   *
   * @param  mixed $prefecture
   * @param  mixed $city
   * @return void
   */
  public function __construct(string $prefecture , string $city)
  {
    $this->prefecture = $prefecture;
    $this->city = $city;
  }
}