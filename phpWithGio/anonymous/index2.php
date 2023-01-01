<?php
// Anonymous recursive function is a type of recursion in which function does not explicitly call another function by name. This can be done either comprehensively, by using a higher order function passing in a function as an argument and calling that function. 

// Anonymous function as callback
const BR = '<br>';
$arr = [43,65,7655,645,65];

usort($arr,function($x, $y) {
    return $x < $y;
});

print_r($arr);
// Anonymous functions, also known as closures, allow the creation of functions which have no specified name. They are most useful as the value of callable parameters, but they have many other uses
echo preg_replace_callback('~-([a-z])~', function ($match) {
    return strtoupper($match[1]);
}, 'hello-world') . BR;


// anonmouse function 
$multiply = function ($x= 56, $y =65) {
    return $x * $y;
};
print_r($multiply(45,45));

$data = [54,45,765,43,6543,546,65,55];

$getData = array_map(function($element) {
    return $element * 2;
}, $data);
 
print_r($getData);

function demo($x) {
    return $x + 10;
}

$test1 = function(callable $callback, $x) {
    return $callback($x);
};

echo 'callable function' . $test1('demo',7) . BR;

// যখন একটি anonymous function অন্য একটা function এর argument হিসেবে pass হয়, তখন সেটিকে বলা হয় lambda function. চলুন একটি উদাহরণ দেখা যাক:
// Pass Lambda to function
function shout ($message){
  echo $message();
}
  
// Call function
shout(function(){
  return "Hello world";
});

// Including static anonymous function
class TrialClass
{
private $AnonymousVar;

public function __construct()
{
    $this->closure = self::createClosure();
}

public static function createClosure()
{
    return function () {
};
}

public function __destruct()
{
    echo "Destruction function is called";
}
}

new TrialClass;
echo "\n";
echo "\n";
echo "After the object is being defined";
echo "\n";
echo "\n";
?>