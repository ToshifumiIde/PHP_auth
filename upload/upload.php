<?php

declare(strict_types=1); ?>

<body>
  <form action="complete.php" name='upload-form' method='post' enctype="multipart/form-data">
    <input type="hidden" name='max_file_size' value='2097152'>
    <p>
      ●アップロードファイルを選択
      <input type="file" name='image'><br><br>
      <button type='submit' name="operation" value='upload'>アップロード</button>
    </p>
  </form>
</body>