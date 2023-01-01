<?php
// while (expr)
// statement

$i=1;
while($i<=5)
{
    $j=1;
    while($j<=$i)
    {
        echo $j . '<br>';
        echo $i . '<br>';
      echo "*&nbsp&nbsp" .'<br>';
      $j++;     
    }
    echo"<br>";
    $i++;
}