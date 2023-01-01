<?php
$i = 7;
$factor = 1;
do {
    if ($i < 5) {
        echo "i is not big enough";
        break;
    }
    $i *= $factor;
    if ($i < 5) {
        break;
    }
   echo "i is ok";

    /* process i */

} while (0);

$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);