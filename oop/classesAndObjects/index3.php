<?php
// Declare the class
class Car
{
    // Properties
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;
 
    // Method that says hello
    public function hello()
    {
        return "beep";
    }
}
 
// Create an instance with new keyword
$bmw = new Car();
$mercedes = new Car();
 
// Get the values
echo $bmw->color; // beige
echo "<br />";
echo $mercedes->color; // beige
echo "<hr />";
 
// Set the values
$bmw->color = 'blue';
$bmw->comp = "BMW";
$mercedes->comp = "Mercedes Benz";
 
// Get the values again
echo $bmw->color; // blue
echo "<br />";
echo $mercedes->color; // beige
echo "<br />";
echo $bmw->comp; // BMW
echo "<br />";
echo $mercedes->comp; // Mercedes Benz
echo "<hr />";
 
// Use the methods to get a beep
echo $bmw->hello(); // beep
echo "<br />";
echo $mercedes->hello() . '<br>'; // beep

$newObj = new Car;
$newObj->color = 'black';
echo $newObj->color;


// $this keyword