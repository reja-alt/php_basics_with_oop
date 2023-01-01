<?php
$num = 1;

while ($num <= 20) :
    if ($num % 2 == 0 && $num % 5 == 0) :
        echo $num;
        echo PHP_EOL;
    endif;
    $num++;
endwhile;

 //write your do-while loop below
 $f = 1;
 do {
     if ($f == 1){
     echo "the loop is ru";
     }
     elseif ($f > 1) {
     echo "n";
     } else {
         echo "ing.";
     }
     $f++;
 } while($f<=8);
 echo "<br> The loop stopped";
 
 ?>