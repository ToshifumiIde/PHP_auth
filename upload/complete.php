<?php

declare(strict_types=1);


/**
 * ファイル名を元に拡張子を返す関数
 * @param string $fileName
 * @return string
 */
function getExtension(string $fileName): string {
  return pathinfo($fileName, PATHINFO_EXTENSION);
}

function validate(): array {
  if ($_FILES['image1']['error'] !== UPLOAD_ERR_OK) return [false, 'アップロードエラーを検出しました'];
  if (!in_array(getExtension($_FILES['image1']), ['jpg', 'jpeg', 'png', 'gif'])) return [false, '画像ファイルのみアップロードできます。'];

  $finfo = finfo_open(FILEINFO_MIME_TYPE);
  $mimeType = finfo_file($finfo, $_FILES['image1']['tmp_name']);
  finfo_close($finfo);
  if (!in_array($mimeType, ['image/jpeg', 'image/jpg', 'image/gif', 'image/png'])) return [false, '不正な画像ファイル形式です。'];

  if (filesize($_FILES['image1']['tmp_name']) > 1024 * 1024 * 2) return [false, 'ファイルサイズは2MBまでとしてください。'];

  return [true, null];
}

/**
 * アップロード後の保存ファイル名を生成して返す関数
 *
 * @return string
 */
function generateDestinationPath(): string {
  return 'uploaded/' . date('Ymd-His') . rand(10000, 99999) . '.' . getExtension($_FILES['image1']['name']);
}; ?>

<body>
  <p>アップロードに成功しました。保存されたファイルは以下の通りです。</p>
</body>