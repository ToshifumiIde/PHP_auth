<?php 
declare(strict_types=1);
;?>
<body>
  <?php
  $users = [
    [
      'name'         => 'Hanako Suzuki',
      'num-of-posts' => 15,
    ],
    [
      'name'         => 'Ichiro Yanagi',
      'num-of-posts' => 92,
    ],
    [
      'name'         => 'Akira Hanayama',
      'num-of-posts' => 15,
    ],
    [
      'name'         => 'Ayami Yoshikawa',
      'num-of-posts' => 8,
    ],
  ];

  usort($users , function ($a,$b){
    if($a['num-of-posts'] === $b['num-of-posts']){
      return $a['name'] <=> $b['name'];
    }
    return ($a['num-of-posts'] <=> $b['num-of-posts']) * -1;
  });
  print_r($users);
  ;?>
</body>