<?php

declare(strict_types=1); ?>

<body>
  <?php

  require_once dirname(__FILE__) . '/../clone2/Address.php';
  require_once dirname(__FILE__) . '/Customer.php';

  $customer1 = new Customer('山田太郎', new Address('東京都', '品川区'));
  $customer2 = clone $customer1;
  $customer2->changeName('伊藤花子');
  $customer2->changeAddress('神奈川県', '横浜市');
  print_r($customer1);
  print_r($customer2);
  ; ?>
</body>