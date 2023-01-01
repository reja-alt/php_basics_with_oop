<?php
const BR = '<br>';
$a = 54;
$b = 65;
if ($a > $b) {
    echo "a is greater than b" . BR;
} else {
    echo "a is NOT greater than b" . BR;
}

$a = true;
$b = false;
if ($a){
    if ($b)
            echo "b" .BR;
    else
        echo "c" . BR;
}
echo $a;
echo $b;
print('$a is : ' . ($a > $b) ? '$a is bigger than $b' : ($a == $b) ? '$a is equal to $b' : '$a is smaller than $b');

// When you escape out of HTML, you can get an UNEXPECTED T_ELSE error with the following:

// Error:

<? if( $condition ) {
        dosomething;
   }
?>

<? else {
       dosomethingelse;
   }
?>

Correct:

<? if( $condition ) {
       dosomething;
?>

<? } else {
       dosomethingelse;
   }
?>

// Apparently the compiler thinks a breaks the connection between the and the else
?>