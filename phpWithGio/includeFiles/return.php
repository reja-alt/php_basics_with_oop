<?php
// return, declare, goto 
// function sum($x, $y) {
//     $z = $x + $y;
//     return $z;       //end the function execution not the whole script execution next exection will continue as usual
// }

// $result = sum(4,5);
// echo $result . '<br>';
// return;           //now script execution will stop return null
// echo 'next execution';

// declare -ticks

// function onTick() {
//     echo 'ticks'. '<br>';
// }

// register_tick_function('onTick');

// declare(ticks=3);

// $i = 0;
// $length = 10;

// while($i < $length) {
//     echo $i++ . '<br>';
// }

// declare strict types

declare(strict_types=1);

function mul(int $b, int $c) {
    return $b;
}
echo mul('ew', 'ew');