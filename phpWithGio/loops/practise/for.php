<?php
for ($number = 0; $number <= 10; $number++) {
    echo "Is this your number? $number <br>";
}

for($a=32; $a>0; $a--){
    for($i=0; $i<=$a; $i++){
        echo "&nbsp; ";
    }
    for($j=32; $j>$a; $j--){
        echo "*";
    }
    for($k=32; $k>$a; $k--){
        echo "*";
    }
    echo "<br>";
    }
echo "</center>";
?>