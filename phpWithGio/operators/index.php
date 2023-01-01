<?php

// operators 
// arithmatic operators (+ - * / % **)

$x = +"10";  //if we use + then output will show as int neither show string.
$y = 2; 

$m = 254.9;
$n = 10.3;

var_dump($x + $y);
var_dump($x / $y);
var_dump(fmod($m, $n));  //to show float use fmod
// var_dump($m / $n);  Warning: Division by zero 
// var_dump(fdiv($m, $n)); 

//assignment oprators (= += -= *= /= %= **=)
$value = 45;

$value += 2;
var_dump($value);

$num1 = $num2 = 34;
$numx = ($numy = 20) + 34;
var_dump($num2, $num1);
var_dump($numx, $numy);

// string operators 
// $text = 'football';
// $text = $text . ' team';

$text = 'football';
$text .= ' team';
var_dump($text);


// comparison operators (== === !== <> !=== < >  <= >= <==> ?? ?:)

$number1 = 40;
$number2 = 45;
var_dump($number1 == $number2);
var_dump($number1 === $number2);
var_dump($number1 !== $number2);
var_dump($number1 < $number2);
var_dump($number1 > $number2);
var_dump($number1 >= $number2);
var_dump($number1 <= $number2);
echo 'spaceship';
var_dump($number1 <=> $number2);

$result = $number1 == $number2 ? 'true' : 'false';
var_dump($result);

// error control operator(@)
$fp=@fopen("nosuchfile.txt","r");
echo "Hello World";

//increment and decrement operator
$incre = 45;
// $incre++;
// var_dump($incre);
var_dump($incre++);
var_dump($incre);
// var_dump(++$incre);
// var_dump($incre);



//bitwise operator(& | ^ ~ << >>)
$test1 = 5;   //binary 0101
$test2 = 3;   // binary 0011 
var_dump($test1 & $test2);

// array operators (+ == === !==  <> )
$arr1 = array("bio"=>50, "che"=>80, "math"=>90);
$arr2 = array("che"=>80, "bio"=>100,"math"=>90);
$arr3 = $arr1 + $arr2;   //UNION
$arrnumber1 = array(0=>70, 2=>80, 1=>90);
$arrnumber2 = array(70,90,80);

// print_r($arr3);
print_r($arrnumber1 == $arrnumber2);   //TRUE if aandb have the same key/value pairs.
print_r($arr1 != $arr2);   //TRUE if aisnotequaltob.
// execution operators(``) 
// type operators (instanceof)
// nullsafe operators (?)

// and	Logical AND	$x and $y	True if both the operands are true else false
// or	Logical OR	$x or $y	True if either of the operands is true else false
// xor	Logical XOR	$x xor $y	True if either of the operands is true and false if both are true
// &&	Logical AND	$x && $y	True if both the operands are true else false
// ||	Logical OR	$x || $y	True if either of the operands is true else false
// !	Logical NOT	!$x	True if $x is false
// Example: This example describes the logical & relational operator in PHP.

$xm = 50;
$yn = 30;
  if ($xm == 50 and $yn == 30)
      echo "and Success \n";
 
  if ($xm == 50 or $yn == 20)
      echo "or Success \n";
 
  if ($xm == 50 xor $yn == 20)
      echo "xor Success \n";
 
  if ($xm == 50 && $yn == 30)
      echo "&& Success \n";
 
  if ($xm == 50 || $yn == 20)
      echo "|| Success \n";
 
  if (!$z)
      echo "! Success \n";
?>
<!-- Output:

and Success 
or Success 
xor Success 
&& Success 
|| Success 
! Success  -->