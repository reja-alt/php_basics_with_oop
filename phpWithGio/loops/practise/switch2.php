<?php
const BR = '<br>';
// This switch statement:
$i = 2;
switch ($i) {
    case 0:
        echo "i equals 0" . BR;
        break;
    case 1:
        echo "i equals 1" . BR;
        break;
    case 2:
        echo "i equals 2". BR;
        break;
}

// Is equivalent to:

if ($i == 0) {
    echo "i equals 0" . BR;
} elseif ($i == 1) {
    echo "i equals 1" . BR;
} elseif ($i == 2) {
    echo "i equals 2" . BR;
}

$i = 3;
switch ($i) {
    case 0:
        echo "i equals 0" . BR;
    case 1:
        echo "i equals 1". BR;
    case 2:
        echo "i equals 2" . BR;
    case 3:
        echo "i equals 3" . BR;
    case 4:
        echo "i equals 4" . BR;
}

// The statement list for a case can also be empty, which simply passes control into the statement list for the next case.
switch ($i) {
    case 0:
    case 1:
    case 2:
        echo "i is less than 3 but not negative" . BR;
        break;
    case 3:
        echo "i is 3" . BR;
}

// A special case is the default case. This case matches anything that wasn't matched by the other cases. For example:
$i = 2;
switch ($i) {
    case 0:
        echo "i equals 0" . BR;
        break;
    case 1:
        echo "i equals 1" . BR;
        break;
    case 2:
        echo "i equals 2" . BR;
        break;
    default:
       echo "i is not equal to 0, 1 or 2" . BR;
}

$offset = 1;
$start = 3;

switch (true) {
    case $start - $offset === 1:
        print "A";
        break;
    case $start - $offset === 2:
        print "B";
        break;
    case $start - $offset === 3:
        print "C";
        break;
    case $start - $offset === 4:
        print "D";
        break;
}

// Prints "B"

switch ($i):
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
        echo "i is not equal to 0, 1 or 2";
endswitch;

// It's possible to use a semicolon instead of a colon after a case like:
$beer = 'heineken';
switch($beer)
{
    case 'tuborg';
    case 'carlsberg';
    case 'stella';
    case 'heineken';
        echo 'Good choice';
        break;
    default;
        echo 'Please make a new selection...';
        break;
}

function testSwitch($key) {
    switch ($key) {
        case 'non numeric string':
            echo $key . ' matches "non numeric string"';
            break;
    }
}

testSwitch(0);
?>