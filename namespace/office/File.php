<?php

declare(strict_types=1);

namespace Office;

require_once dirname(__FILE__) . '/word/Writer.php';
require_once dirname(__FILE__) . '/excel/Writer.php';

class File {

  /**
   * setWordProperty
   *
   * @return void
   */
  public function setWordProperty(): void {
    $writer = new word\Writer();
    $writer->write();
  }

  /**
   * setExcelProperty
   *
   * @return void
   */
  public function setExcelProperty(): void {
    $writer = new excel\Writer();
    $writer->write();
  }
}
