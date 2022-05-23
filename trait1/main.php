<?php
declare(strict_types=1);
?>
<body>
  <?php
  require_once dirname(__FILE__)  . '/MemberModel.php';
  $memberModel = new MemberModel();
  $memberModel->create('001'); // ID001の会員を新規作成する
  $memberModel->delete('001'); // ID001の会員を削除する
  echo nl2br(file_get_contents('MemberModel.log'));
  ;?>
</body>