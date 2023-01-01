<?php
// $item = 'payment';

// switch($item) {
//     case 'account':
//         echo 'account';
//         break;

//     case 'payment':
//         echo 'payment';
//         break;

//     case 'transaction':
//         echo 'transaction';
//         break;

//     case 'product':
//         echo 'product';
//         break;

//     default:
//         echo 'out';
// }

$sub = 'PHP';
  
  $val = match ($sub) {
      'HTML' => 'HTML Course',
      'CSS' => 'CSS Course',
      'PHP' => 'PHP Course',
      'JavaScript' => 'JS Course',
      'WebDev' => 'Complete Web Development'
  };
  
  var_dump($val);
?>