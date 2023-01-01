<?php
$array = new SplFixedArray(7);

echo '<pre>';
print_r($array);
echo '<pre>';

$array[0] = 'fruits';
$array[1] = 'flowers';
$array[3] = 'banana';
$array[4] = 'mango';
$array[5] = 'mango';
$array[6] = 'mango';
echo '<pre>';
print_r($array);
echo '<pre>';

// Creating an array of variables
$username = 'Hadibut';
$email = 'hadibut@example.org';
$variables = compact('username', 'email');
print_r($variables);
// $variables is now ['username' => 'Hadibut', 'email' => 'hadibut@example.org']

?>