<?php
// PHP supports passing arguments by value (the default), passing by reference, and default argument values. Variable-length argument lists and Named Arguments are also supported.
// Type declared variable arguments
function total_intervals($unit, ...$intervals) {
    $time = 0;
    foreach ($intervals as $interval) {
        $time += $interval->$unit;
    }
    return $time;
}

$a = new DateInterval('P1D');
// echo '<pre>';
// print_r($a);
// echo '<pre>';
$b = new DateInterval('P2D');
$c = new DateInterval('P4M');
$d = new DateInterval('P2D');
$e = new DateInterval('P5Y');
$array = [$a, $b, $c, $d, $e];
echo total_intervals('d', ...$array).' days';

// This will fail, since null isn't a DateInterval object.
// echo total_intervals('d', null);

function null_string_wrong(string $str) {
    var_dump($str);
}

function null_string_correct(string $str = null) {
    var_dump($str);
}
$null = null;
null_string_wrong('a');     //string(1) "a"
null_string_correct('a');   //string(1) "a"
null_string_correct();      //NULL
null_string_correct($null); //NULL
null_string_wrong($null);   //TypeError thrown
  ?>