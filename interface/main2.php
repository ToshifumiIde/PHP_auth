<?php declare(strict_types=1);?>
<body>
  <?php
  require_once dirname(__FILE__) . '/Sky.php';
  require_once dirname(__FILE__) . '/Bird.php';
  require_once dirname(__FILE__) . '/Airplane.php';

  $sky      = new Sky();
  $bird     = new Bird();
  $airplane = new Airplane();

  $sky->draw($bird);
  $sky->draw($airplane);

  ;?>
</body>