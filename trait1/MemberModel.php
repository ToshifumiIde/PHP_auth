<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/LoggingTrait.php';

class MemberModel {

  use LoggingTrait;

  /**
   * 初期化処理
   *
   * @return void
   */
  public function __construct() {
    // 独自のログファイル名を指定したい場合は、以下のコメントアウトを外します。
    // $this->logFileName = 'my-log.log';
  }


  /**
   * 会員データの新規作成メソッド
   *
   * @param  string $memberId
   * @return void
   */
  public function create(string $memberId): void {
    $this->log("created {$memberId}." . PHP_EOL);
  }

  /**
   * 会員データの削除メソッド
   * @param  string $memberId
   * @return void
   */
  public function delete(string $memberId): void {
    $this->log("deleted {$memberId}." . PHP_EOL);
  }
}
