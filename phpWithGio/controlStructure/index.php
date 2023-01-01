<?php
// control structures(if/ else/ elseif / else if) 
$score = 65;
// if($score > 40) {
//     echo 'pass';
// } else {
//     echo 'fail';
// }

if($score > 80) {
    echo 'A+';
} elseif($score > 70) {
    echo 'A';
} elseif($score > 60) {
    echo 'A-';
} elseif($score > 50) {
    echo 'B+';
} elseif($score > 40) {
    echo 'c';
} else {
    echo 'default';
}