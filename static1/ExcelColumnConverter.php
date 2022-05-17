<?php

declare(strict_types=1);

class ExcelColumnConverter {
  // 数値で表された列の番号をもとに、アルファベット表記の列名を返す
  public static function calcAlphabetColumnName(int $number): string {
    return chr(ord('A') + $number);
  }
  // アルファベット表記の列名をもとに、数値で表された列の番号を返す
  public static function calcNumberColumnName(string $alphabet): int {
    return ord($alphabet) - ord('A');
  }
}
