<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Flyable.php';
require_once dirname(__FILE__) . '/Walkable.php';

class Bird implements Flyable, Walkable {

  public function walk(): void {
    echo 'bird is walking' . PHP_EOL;
  }

  public function fly(): void {
    echo 'bird is flying' . PHP_EOL;
  }
}
