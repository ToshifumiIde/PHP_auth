<?php

declare(strict_types=1);; ?>

<body>
  <?php
  require_once dirname(__FILE__) . '/PageNotFoundException.php';
  class UserModel {
    /**
     * ユーザーのプロファイルを表示するメソッド
     *
     * @param  mixed $userId
     * @return void
     */
    public function findProfile(int $userId): void {
      throw new PageNotFoundException('User profile does not found');
    }
  }

  $model = new UserModel();
  try {
    $profile = $model->findProfile(1001);
  } catch (PageNotFoundException $e) {
    echo file_get_contents('error-page-not-found.html');
    return;
  }; ?>
</body>