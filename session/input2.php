<?php

declare(strict_types=1);
function validate() {
  return ($_POST['email'] !== '' && $_POST['message'] !== "");
}
if (isset($_POST['operation']) && $_POST['operation'] === "inquiry") {
  if (!validate()) {
    $message = 'メールアドレスとメッセージの入力は必須です。';
    $data = [
      'email' => $_POST['email'],
      'message' => $_POST['message'],
    ];
  }
  if (validate()) {
    $_SESSION['data'] = [
      'email' => $_POST['email'],
      'message' => $_POST['message'],
    ];
    header('location:confirm.php');
    return;
  }
}
if (isset($_SESSION['data'])) {
  $data = [
    'email' => $_SESSION['data']['email'],
    'message' => $_SESSION['data']['message'],
  ];
}; ?>

<body>
  <div class="">
    <p style='color:red;'>メールアドレスとメッセージの入力は必須です。</p>
  </div>
  <form action="" method="post">
    ●メールアドレス<br>
    <input type="text" name='email' value='<?= isset($data['email']) ? $data['email'] : ""; ?>'><br>
    ●お問い合わせ内容<br>
    <textarea name="message" id="" cols="30" rows="10"><?= isset($data['message']) ? $data['message'] : ''; ?></textarea><br>
    <button type='submit' name='operation' value='inquiry'>送信</button>
  </form>
</body>