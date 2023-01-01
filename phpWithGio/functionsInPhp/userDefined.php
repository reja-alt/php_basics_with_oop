<?php
function sum() //Declaring User Defined function
{
    $a=3;
    $b=6;
    $a=$a+$b;
    echo $a;            
}
sum();//Calling a function

function food($arg_1, $arg_2, /* ..., */ $arg_n)
{
    echo "Example function.\n";
    // $retval = 0;
    // $retval += $arg_1 + $arg_2;
    return $retval;
}


// echo foo(43,54);

$makefoo = true;

/* We can't call foo() from here 
   since it doesn't exist yet,
   but we can call bar() */

bar();

if ($makefoo) {
  function foo()
  {
    echo "I don't exist until program execution reaches me.\n";
  }
}

/* Now we can safely call foo()
   since $makefoo evaluated to true */

if ($makefoo) foo();

function bar() 
{
  echo "I exist immediately upon program start.\n";
}

function foo() 
{
  function bar() 
  {
    echo "I don't exist until foo() is called.\n";
  }
}

/* We can't call bar() yet
   since it doesn't exist. */

foo();

/* Now we can call bar(),
   foo()'s processing has
   made it accessible. */

bar();