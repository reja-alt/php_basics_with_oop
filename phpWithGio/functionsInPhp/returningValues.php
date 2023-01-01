<?php
// A function can not return multiple values, but similar results can be obtained by returning an array.
// Returning an array to get multiple values

// To return a reference from a function, use the reference operator & in both the function declaration and when assigning the returned value to a variable:

function &returns_reference()
{
    return $someref;
}

$newref =& returns_reference();

function myfunc1() {
    return('thingy' or die('otherthingy'));
}
function myfunc2() {
    return 'thingy' or die('otherthingy');
}
function myfunc3() {
    return('thingy') or die('otherthingy');
}
function myfunc4() {
    return 'thingy' or 'otherthingy';
}
function myfunc5() {
    $x = 'thingy' or 'otherthingy'; return $x;
}
echo myfunc1(). "\n". myfunc2(). "\n". myfunc3(). "\n". myfunc4(). "\n". myfunc5(). "\n";

function listData($a,$b, $c,$d){
    return [$a,$b, $c,$d];
}

print_r(listData(32,43,56,43));
?>