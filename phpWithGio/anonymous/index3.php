<?php
const BR = '<br>';
$fibMemo = call_user_func(function () {
    // return $fib;
    $memo = array(0 => 0, 1 => 1);
    $fib = function ($n) use (&$memo, &$fib) {
        // return $n;
        if (!isset($memo[$n])) {
            $memo[$n] = $fib($n - 1) + $fib($n - 2);
        }
        return $memo[$n];
    };
    
    return $fib;
});

echo $fibMemo(16) . BR;

$variable = "nothing";

$test = fn() => $variable = "something";
  


echo $test() . BR;  //output: "nothing"

$useArgs = array( "a" => 1, "b" => 2, "c" => 3 );
call_user_func(function() use($useArgs) {
    echo '<pre>';
    print_r($useArgs);
    echo '<pre>';
    // extract($useArgs);
    // print($a);
    // print($b);
    // print($c);

    if(isset($d)) {
        print($d);
    }
});

$app = 'App here';

$fn2 = function($var) use($app){
    echo $var . BR;
};

$fn1 = function($var) use($fn2, $app){
    $fn2($var);
};


$fn1('variable');

class Examplee
{
    public function __construct()
    {}

    public function test($func)
    {
        $func = $func->bindTo($this, $this);
        $func();
    }
}

$obj = new Examplee();


$obj->test(function(){
    print_r($this);
});

call_user_func(function() {
    echo 'access'. BR;
});

$m = array(
    0 => array('condition' => function($v) { return intval($v); }),
    3 => array('condition' => function($v) { var_dump(trim($v) > 0); }),
);

// print_r($m[0]['condition'](4.76));
print_r($m[3]['condition'](-4   ));

// ----------------------------------------------------
// First try with a simple array, outside a class
// ----------------------------------------------------

$test_array = array(
    "string" => "some string" ,
    "function" => function() {
        echo 'i am an anonymous function outside a Class';
    }
);

var_dump($test_array);
var_dump(call_user_func($test_array['function']));



class firstClass {

    public static $functions = array();

    function __construct()
    {
        self::$functions += array( "echo" => function( $text ) { echo $text; }, "fruit" => "apple" );
    }

}

class secondClass {

    function __construct()
    {

        var_dump( firstClass::$functions ); // returns array(1){ ["fruit"] => string(5) => "apple" )
        var_dump( firstClass::$functions["echo"]('test') ); // returns NULL

    }

}


$class = new firstClass;
$secondClass = new secondClass;

// var_dump($class);
var_dump($secondClass);
?>