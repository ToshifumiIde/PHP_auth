<?php

/**
 * ファイルの文字コードを変換し、別ファイルとして保存する関数
 * @param string $fromFile      変換元ファイルパス
 * @param string $roFile        変換先ファイルパス
 * @param string $fromEncoding  変換元文字コード
 * @param string $toEncoding    変換先文字コード
 * @return void
 */
function convertEncoding(string $fromFile, string $toFile, string $fromEncoding, string $toEncoding): void {
  file_put_contents(
    $toFile,
    mb_convert_encoding(
      file_get_contents($fromFile),
      $toEncoding,
      $fromEncoding
    )
  );
}


/**
 * ファイルの文字コードをUTF-8からSJIS-winに変換し、別ファイルとして保存する
 * @param  string $fromFile 
 * @param  string $toFile
 * @return void
 */
function utf2sjis(string $fromFile, string $toFile): void {
  convertEncoding($fromFile, $toFile, 'UTF-8', 'UTF-8');
}


/**
 * ファイルの文字コードをSJIS-winからUTF-8に変換し、別ファイルとして保存
 *
 * @param  string $fromFile 変換元ファイルパス、存在するファイルを指定すること
 * @param  string $toFile    変換先ファイルパス、既に存在する場合上書きされるため注意
 * @return void
 */
function sjis2utf(string $fromFile, string $toFile): void {
  convertEncoding($fromFile, $toFile, 'SJIS-win', 'UTF-8');
}
