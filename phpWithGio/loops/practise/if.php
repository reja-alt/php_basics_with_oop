<?php
// if (expr)
// statement
const BR = '<br>';
$a = 43;
$b = 34;

if ($a > $b):
    echo "a is bigger than b" . BR;
    $b = $a;
    echo $b . BR;
endif;

if ($a >= $b)
    echo "a is bigger than or equal b" . BR;
    $b = $a;
    echo $b . BR;

// easy way to execute conditional html / javascript / css / other language code with php if else:
?>

<?php 
    $item = 'Print inside html';
    $itemLength = strlen($item);

    if ($itemLength > 20): ?>
<p style="color:purple; font-size: 30px;font-weight: 800;"><?php echo $item ?></p>
<?php else: ?>
<p style="color:red; font-size: 30px;font-weight: 800;">Item not found</p>
<?php endif ?>

<!-- An other way for controls is the ternary operator (see Comparison Operators) that can be used as follows: -->

<?php
$v = 1;

$r = (1 == $v) ? 'Yes' : 'No'; // $r is set to 'Yes'
$r = (3 == $v) ? 'Yes' : 'No'; // $r is set to 'No'

echo (1 == $v) ? 'Yes' : 'No' . BR; // 'Yes' will be printed

// and since PHP 5.3
$v = 'My Value';
$r = ($v) ?: 'No Value'; // $r is set to 'My Value' because $v is evaluated to TRUE

$v = '';
echo ($v) ?: 'No Value' .BR; // 'No Value' will be printed because $v is evaluated to FALSE
?>

<!-- Parentheses can be left out in all examples above. -->

<!-- Any variables defined inside the if block will be available outside the block. Remember that the if doesn't have its own scope. -->

<?php
$bool = true;
if ($bool) {
    $hi = 'Hello to all people!';
}
echo $hi . BR;
?>

<!-- It will print 'Hello to all people!' -->

<!-- On the other hand, this will have no output: -->

<?php
if (false) {
    $hi = 'Hello to all people!';
}
echo $hi . BR;
?>