<?php
declare(strict_types = 1);

namespace Jasny;

CONST BR = '<br>';
function array_only(array $array, array $keys): array
{
    $intersect = array_fill_keys($keys, null);          //fill the array key with value
    return array_intersect_key($array, $intersect);   //The array_intersect_key() function compares the keys of two (or more) arrays, and returns the matches
}
var_dump(array_only(['color' => 'red', 'size' => '34.4', 'blue'], ['color', 'size'])). BR;

function array_without(array $array, array $keys): array
{
    $intersect = array_fill_keys($keys, null);
    return array_diff_key($array, $intersect);        //The array_diff_key() function compares the keys of two (or more) arrays, and returns the differences.
}

var_dump(array_without(['col' => 'red', 'size' => '34.4', 'blue'], ['color', 'size']));

function array_contains_all(array $array, array $subset, bool $strict = false)
{
   $contains = true;

   foreach($subset as $item) {
        if(!in_array($item, $array, $strict)) {
            $contains = false;
            break;
        }
   }

//    return $contains;
   if($contains === true) {
        return '<h1 style="color: green;">Data Found </h1>';
    } else {
        return '<h1 style="color: red;">Data Not Found </h1>';
    }
   
}

$array = ['mango', 'banana', 'apple', 'orange', 'jack fruit'];
$arrSet = ['mango', 'banana', 'apple', 'orange', 'jack fruit'];
echo array_contains_all($array, $arrSet);

/**
 * Check if an array contains all values in a set with index check.
 *
 * @param array $array
 * @param array $subset
 * @param bool  $strict  Strict type checking
 * @return bool
 */

function array_contains_all_assoc(array $day, array $dayCheck, bool $strict = false): string {
    if(count(array_diff_key($day, $dayCheck)) > 0) {
        return '<h1 style="color:red">Error</h1>';
    }
    
    $contains = true;

    foreach($dayCheck as $key => $value) {
        if(!array_key_exists($key, $day) || isset($value) !== isset($day[$key]) || ($strict ? $value !== $day[$key] : $value != $day[$key])) {
            $contains = false;
        }
    }

    if($contains === true) {
        return '<h1 style="color: green;">Data Found </h1>';
    } else {
        return '<h1 style="color: red;">Data Not Found </h1>';
    }

}

$day = ['sat', 'sun', 'mon', 'tues', 'wed', 'thrus', 'fri'];
$dayCheck = ['sat',  'sun','mon', 'tues', 'wed', 'thrus', 'fri'];

echo array_contains_all_assoc($day, $dayCheck);

function array_find(array $array, callable $callback, int $flag = 0)
{
    foreach ($array as $key => $value) {
        $args = $flag === ARRAY_FILTER_USE_BOTH ? [$value, $key] :
            ($flag === ARRAY_FILTER_USE_KEY ? [$key] : [$value]);

        if ($callback(...$args)) {
            return $value;
        }
    }

    return false;
}

$numbers = [54,65,87,54,76,69,87];
echo array_find($numbers,$callback(...$numbers));
?>