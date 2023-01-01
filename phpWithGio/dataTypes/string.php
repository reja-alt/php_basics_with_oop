<?php
// strings 
const BR = '<br>';
const SPACE = ' ';
$firstname = 'reja';
echo 'name is $firstname'. BR;     //can not use variable inside '' qoute
echo "name is $firstname" . BR;    

$lastname = 'khan';
$name = $firstname. SPACE . $lastname;
// echo $name[-2];
$name[-2] = 'A';
echo $name[-2]. BR;

//heredoc
$text = <<<TEXT
Write somethinng  
new test
by $name 
<h1>demo test for heredoc</h1>
TEXT;

$heretest = 'some <h1>demo test for heredoc</h1>';
echo $text . BR;
echo $heretest . BR;

//nowdoc            //WONT WORK VARIABLE INSIDE NOWDOC
$text = <<<'TEXT'
Write somethinng  
new test
by $name
TEXT;

echo $text;

$values = [<<<END
a
  b
    c
END, 'd e f'];
var_dump($values);