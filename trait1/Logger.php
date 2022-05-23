<?php

declare(strict_types=1);

class Logger {
  private $filename;

  /**
   * 初期化処理
   *
   * @param  string $filename
   * @return void
   */
  public function __construct(string $filename) {
    $this->filename = $filename;
  }


  /**
   * ログを記入するメソッド
   *
   * @param  string $data
   * @return void
   */
  public function write(string $data): void {
    file_put_contents($this->filename, $data, FILE_APPEND);
  }

  /**
   * ログファイルの初期化
   *
   * @return void
   */
  public function clear(): void {
    file_put_contents($this->filename, '');
  }
}
