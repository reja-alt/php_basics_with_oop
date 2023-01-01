<!-- 7 types of variables are integer, string, array, boolean, object, floats, resource  -->

<?php
        // References : http://www.hackingwithphp.com/3/2/0/checking-a-variable-is-set-isset

        $variable = "check";
        echo $variable, PHP_EOL;

        $data = 1;

        if(isset($data)) {
                echo 'variable is set', PHP_EOL;
        } else {
                echo 'data  is not set', PHP_EOL;
                echo "<br>";
        }

        $number = null;

        if(isset($number)) {
                echo 'number is set', PHP_EOL;
        } else {
                echo 'number  is not set', PHP_EOL;
        }
        echo "<br>";

// Automatic type convertion

// References : http://www.hackingwithphp.com/3/3/0/automatic-type-conversion, https://www.php.net/manual/en/language.types.type-juggling.php
const BR = '<BR>';
$value = true;

print $value;

$value = false;

print (int)$value;
echo "<br>";

$count = "6734.9878";

echo (int)$count; //convert float to integer

echo intval($count);
echo "<br>";

$foo = 20;
print_r ((array)$foo);

// constants
// Constants are automatically global and can be used across the entire script.
define('STATUS_PAID', 'pending');
echo STATUS_PAID;

echo defined('STATUS_PAID');

const askIt = 'WHY THIS';
// const $dontAskIt = 'WHY not THIS'; //Parse error: syntax error, unexpected '$dontAskIt' 
echo askIt . BR;

// const STATUS_PAID = 'SOMETHING NEW'; //Constant STATUS_PAID already defined

DEFINE('cars', [
    'volvo', 'audi', 'axio', 'maruti'
]);

// echo constant('cars') . BR; //Array to string conversion
var_dump(constant('cars')) . BR;
echo cars[3] . BR;

echo 'Line Number' . __LINE__ . BR;
$fileGet = 'FILE NAME '. __FILE__ .BR;
echo $fileGet;

function show() {
    echo 'In the function '.__FUNCTION__ .BR;
    }
    show();

    class MainClass
    {
    function show() {
    echo "<br>".__CLASS__;
    }
    function test() {
    echo "<br>".__METHOD__ . BR;
    }
    }
    $obj = new MainClass;
    echo $obj->show();
    echo $obj->test();

    $value = 'VALUE';
    DEFINE('SINGLE_' . $value, $value);
    echo SINGLE_VALUE . BR;

    $name = 'reja';
    $$name = 'khan';

    echo $reja . BR;
    // list of predefined constant

    echo PHP_VERSION . BR;
    echo PHP_DEBUG . BR;
    echo E_ERROR . BR;
    echo E_USER_ERROR . BR;
    //List of magic constants
    $fileGet2 = __FILE__;
    echo file_exists($fileGet2);

    // variable scope 
    $globalVar = 9;
    function tryInside($globalVar) {
        $localVar = 45;
        echo $localVar . BR;
        echo $globalVar;    //Undefined variable: globalVar
    }
    // echo $localVar;         //Undefined variable: localVar
    tryInside($globalVar);
?>