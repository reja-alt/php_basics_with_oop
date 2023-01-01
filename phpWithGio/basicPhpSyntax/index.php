<?php
    CONST BR = '<br>';
    echo 'hello world'; // <! dont need close with php >-- if we only use php and dont need ; after line if we close php while embeding html -->
    // print echo 'hello world'; //error
    print 'some';  //return 1
    echo print 'some';    //return 1

    // echo 'JOES'S FUN'; //ERROR
    // Solve above by 
    echo "JOES'S FUN";
    echo 'JOES\'S FUN';

    $name = 'reja';
    echo $name . BR;

    // $324name = 'test';  //error
    $_655reja = 'some';
    // $_*%khan; = 'some text';  //error
    // echo $_*%khan; //errpr
    echo $_655reja . BR;

    // $this = 'solve'; //error

    $day = 'tuesday';
    $storeDay = &$day;  //REFERENCES

    $day = 'friday';
    echo $storeDay . BR;
    #test comment single line
    $name = 'reja khan';
    echo "hello {$name}"  . BR;
    echo 'hello $name' . BR;  //not show value of name inside '' colon
    echo `hello {$name}` . BR;

    echo 'Hello ' . $name;
    // If you want to just print single text or something ,you should use shorthand version .<?= $var 

//  But if you want to process something, you should use normal tag.
// $var = 3;
//             $var2 = 2;
//             $var3 = $var+$var2;
//             if($var3){result}

// <!-- case sensibity -->
// In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.
$caseSensitivity = 'tab open';
echo $caseSensitivity;
// echo $cAseSensitivity;   //Undefined variable: cAseSensitivity in C:\xampp\htdocs\phpWithGio\basicPhpSyntax\index.php on line 47