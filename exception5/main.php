<?php

declare(strict_types=1);

try {
  $parseXml = new SimpleXMLElement('<xml><data>XML DATA</DATA></xml>');
  echo $parseXml->data;
} catch (Exception $e) {
  echo '例外をキャッチしました。エラー内容：', $e->getMessage(), PHP_EOL;
}
