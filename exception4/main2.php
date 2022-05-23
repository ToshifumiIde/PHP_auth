<?php

declare(strict_types=1);

use UserModel as GlobalUserModel;

?>

<body>
  <?php
  require_once dirname(__FILE__) . '/PageNotFoundException.php';


  class UserModel {
    /**
     * ユーザープロファイルの検索
     *
     * @return array
     */
    public function findProfile(): array {
      throw new PageNotFoundException('User profile does not exist');
    }
  }

  $model = new UserModel();
  try {
    $profile = $model->findProfile();
  } catch (PageNotFoundException $e) {
    echo file_get_contents('error-page-not-found.html');
    return;
  } catch (Exception $e) {
    echo file_get_contents('error-unknown.html');
    return;
  }; ?>
</body>