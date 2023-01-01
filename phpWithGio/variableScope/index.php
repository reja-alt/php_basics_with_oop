<?php
    const BR = '<br>';
    $x = 45;
    // echo $x;

    function Msg() {
        // $x = 34;
        // global $x;
        $var = &$GLOBALS['x'];
        $GLOBALS['x'] = 3445;
        echo $var;
        // echo $x;
        // echo $x;       Undefined variable: x not accessiable inside function
    }
    Msg();

    // PHP has three different variable scopes:

    //     local
    //     global
    //     static

    // A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:
    $x = 5; // global scope

    function myTest() {
      // using x inside this function will generate an error
    //   echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();
    
    echo "<p>Variable x outside function is: $x</p>";

    $x = 5; // global scope

    function myTest1() {
      // using x inside this function will generate an error
    //   echo "<p>Variable x inside function is: $x</p>";
    }
    myTest1();
    
    // A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
    function myFunc() {
        $x = 5; // local scope
        echo "<p>Variable x inside function is: $x</p>";
      }
      myFunc();
      
      // using x outside the function will generate an error
      echo "<p>Variable x outside function is: $x</p>";

    //   PHP The static Keyword

    function findData() {
        static $x = 5454;
        echo $x . BR;
        $x++;
    }

    findData();
    findData();
    findData();

    // Using static variables
    function test()
    {
        static $a = 0;
        echo $a;
        $a++;
    }
    test();
?>