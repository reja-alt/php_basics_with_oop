<?php
// array functions 
// array_change_key_case  changes key ]
// array_change_key_case(array, case)  ex: 
$items = ['capsicam', 'brockly', 'coffee', 'sweet'];
$new_items = array_change_key_case($items, CASE_LOWER);

// echo '<pre>';
// var_dump($new_items);
// echo '<pre>';

$upper_items = array_change_key_case($items, CASE_UPPER);
echo '<pre>';
var_dump($upper_items);
echo '<pre>';

$pets =array("a"=>"Cat","B"=>"Dog","c"=>"Horse","b"=>"Bird");
print_r(array_change_key_case($pets,CASE_UPPER));

// array_chunk 
// The array_chunk() function splits an array into chunks of new arrays.
// array_chunk(array, size, preserve_key)

$age = array( 
    "Peter"=>"35",
    "Ben"=>"37",
    "Joe"=>"43",
    "Harry"=>"50"
);

print_r(array_chunk($age, 3, true));

// array_column() 
// An array that represents a possible record set returned from a database
// The array_column() function returns the values from a single column in the input array.
// array_column(array, column_key, index_key)
$a = array(
    array(
      'id' => 5698,
      'first_name' => 'Peter',
      'last_name' => 'Griffin',
    ),
    array(
      'id' => 4767,
      'first_name' => 'Ben',
      'last_name' => 'Smith',
    ),
    array(
      'id' => 3809,
      'first_name' => 'Joe',
      'last_name' => 'Doe',
    )
  );

  print_r($a[1]['id']);

  $findColumn = array_column($a, 'first_name');
  print_r($findColumn[1]);

//   array_combine
//   The array_combine() function creates an array by using the elements from one "keys" array and one "values" array.
// array_combine(keys, values)
$fname=array("Peter","Ben","Joe");
// $age=array("35","37");        //error $fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

print_r(array_combine($fname, $age));

// The array_count_values() function counts all the values of an array.
// The array_count_values() function counts all the values of an array

$a=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($a));


// array_diff function 
// The array_diff() function compares the values of two (or more) arrays, and returns the differences.
// array_diff(array1, array2, array3, ...)

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

print_r(array_diff($a1, $a2));

// array_diff_assoc() Function
// The array_diff_assoc() function compares the keys and values of two (or more) arrays, and returns the differences.
// array_diff_assoc(array1,array2,array3...)
$a11=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a22=array("e"=>"red","f"=>"green","g"=>"blue", "d"=>"trt");

$result=array_diff_assoc($a11,$a22);
print_r($result);