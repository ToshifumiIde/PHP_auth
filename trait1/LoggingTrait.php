<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Logger.php';

trait LoggingTrait {

  // loggerインスタンスの格納先
  private $logger;
  // ログファイル名
  private $logFIleName;

  /**
   * Loggerインスタンスをロードする
   *
   * @return void
   */
  private function loadLogger(): void {
    if ($this->logFIleName === NULL) {
      // __CLASS__ はphpであらかじめ定義されているクラス名を表す定数
      $this->logFIleName = __CLASS__ . '.log';
    }
    $this->logger = new Logger($this->logFIleName);
    $this->logger->clear();
  }

  /**
   * ログ出力のメソッド
   *
   * @return void
   */
  private function log(string $data): void {
    if ($this->logger === null) {
      $this->loadLogger();
    }
    $data = date('Y-m-d H:i:s') . ' ' . $data;
    $this->logger->write($data);
  }
}
