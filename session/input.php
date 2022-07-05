<?php

declare(strict_types=1);
session_start();
function validate() {
  return ($_POST['email'] !== '' && $_POST['message'] !== '');
}
if (isset($_POST['operation']) && $_POST['operation'] === 'inquiry') {
  if (!validate()) {
    $message = 'メールアドレス・お問い合わせ内容は、いずれも入力必須です。';
    $data = [
      'email'   => $_POST['email'],
      'message' => $_POST['message'],
    ];
  }
  if (validate()) {
    $_SESSION['data'] = [
      'email'   => $_POST['email'],
      'message' => $_POST['message'],
    ];
    header('Location:confirm.php');
    // htmlの出力前に実行が必要
    // Locationと:の間に半角スペースは不要
    return;
  }
}
if (isset($_SESSION['data'])) {
  $data = [
    'email'   => $_SESSION['data']['email'],
    'message' => $_SESSION['data']['message'],
  ];
};; ?>

<body>
  <h2>お問い合わせ入力</h2>
  <?php if (isset($message)) : ?>
    <p style='color:red;'>
      <?= $message; ?>
    </p>
  <?php endif; ?>
  <form action="" name="inquiry-form" method="post">
    ●メールアドレス<br>
    <input type="text" name="email" placeholder="メールアドレスを入力してください。" value='<?= isset($data['email']) ? $data['email'] : '' ?>'><br>
    ●お問い合わせ内容<br>
    <textarea type="text" name='message' col='30' rows='4'><?= isset($data['message']) ? $data['message'] : '' ?></textarea><br>
    <button name='operation' value='inquiry'>送信</button>
  </form>
</body>