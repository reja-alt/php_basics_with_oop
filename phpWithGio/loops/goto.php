<?php
// The goto operator can be used to jump to another section in the program. 
// The target point is specified by a case-sensitive label followed by a colon, and the instruction is given as goto followed by the desired target label.
goto a;
echo 'Foo';

a:
echo 'Bar';

goto test;
echo 'middle';
test: 
echo 'test';

// 2 goto loop example
for($i=0,$j=50; $i<100; $i++) {
    while($j--) {
      if($j==17) goto end; 
    }  
  }
  echo "i = $i";
  end:
  echo 'j hit 17';

//   Example #3 This will not work    dont work inside loop
// goto tax;
// for($i=0,$j=50; $i<100; $i++) {
//   while($j--) {
//     tax:
//   }
// }
// echo "$i = $i";
?>