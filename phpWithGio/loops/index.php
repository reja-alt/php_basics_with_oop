<?php
const BR = '<br>';
// loops 
// while
$i = 0;
While($i < 10) {
    $i++;
    echo $i . BR;
}

$x = 4;
while($x < 19):
    $x++;
    echo $x . BR;
endwhile;

// do while
// The do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.
$number = 1;

do {
  echo "The number is: $number <br>";
  $number++;
} while ($number <= 5);


// for
// for (expr1; expr2; expr3)
// statement

for ($i = 1; $i <= 10; $i++) {
    echo $i . BR;
}

for($i = 1; ; $i++) {
    if($i > 10) {
        break;
    }
    echo $i . BR;
}

$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i . BR;
    $i++;
}

for (; ; ):
    if ($i > 10) {
        break;
    }
    echo $i . BR;
    $i++;
endfor;

// for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
// for (expr1; expr2; expr3):
//     statement
//     ...
// endfor;

/*
 * This is an array with some data we want to modify
 * when running through the for loop.
 */
$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);

for($i = 0; $i < count($people); $i++) {
    // echo 'VAL OF ++i : ' . ++$i . BR; //1
    // echo 'VAL OF i : ' . $i . BR;   //1

    // echo 'VAL OF i++ : ' . $i++ . BR; //0
    echo 'VAL OF i : ' . $i . BR;   //1
    $people[$i]['salt'] = mt_rand(000000, 999999);
    echo $people[$i]['salt'] . BR;
}

// Looping through letters is possible. I'm amazed at how few people know that.

for($col = 'B'; $col != 'M'; $col++) {
    echo $col.' ' . BR;
}


// returns: R S T U V W X Y Z AA AB AC
//   If you want to do a for and increment with decimal numbers:
    for($i=0; $i<=2; $i+=0.1)
    echo $i . BR;

    for($i=0; round($i,1)<=2; $i+=0.1)
    echo $i . BR;


    $array = array(
        'pop0',
        'pop1',
        'pop2',
        'pop3',
        'pop4',
        'pop5',
        'pop6',
        'pop7',
        'pop8'
    );

    echo "Tot Before: ".count($array)."<br><br>";
    for ($i=0; $i<count($array); $i++) {
        if ($i === 3) {
            unset($array[$i]);
        }
        echo "Count: ".count($array). " - Position: ".$i."<br>";
    }
    
    echo "<br> Tot After: ".count($array)."<br>";
// foreach