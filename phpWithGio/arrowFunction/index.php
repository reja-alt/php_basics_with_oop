<?php
const BR = '<br>';
    $test = fn($x, $y) =>
         $x + $y;

    echo $test(4, 45) . BR;
    
    // Arrow functions capture variables by value automatically, even when nested

    $x = 43;
    $demo = fn($y, $z) => $x + $y * $z;

    echo $demo(34,54) . BR;


    $array = [54,634,4434,5,43,54];
    $data = array_map(fn($x) => $x * 4, $array);

    echo '<pre>';
    print_r($data);
    echo '<pre>';

    $items = [
        [
            'name' => 'iphone 14 pro max',
            'price' => 35.43,
            'quantity' => 2,
        ],

        [
            'name' => 'Laptop',
            'price' => 44.43,
            'quantity' => 2,
        ],

        [
            'name' => 'Smart Watch',
            'price' => 94.43,
            'quantity' => 2,
        ],

        [
            'name' => 'mouse',
            'price' => 54.43,
            'quantity' => 2,
        ]
    ];


    function netPrice($items) {
        // return $items;   
        // $length = count($items);
        $total = 0;
        for($i = 0; $i < count($items) ; $i++) {
            // return $item;
            $netPrice = $items[$i]['price'] * $items[$i]['quantity'];
            $data = $items[$i]['name'] . "'s price is : " . $netPrice;
            echo $data . '<br>'; 
            echo '<hr>';
            $total += $netPrice;
            echo '<hr>';
        }
        return 'total price is : ' . $total;
    }

    $itemData = function(callable $callback, $items) {
    // print_r($items);
    // $total = $quantity * $price;
    // echo $itemData($item);
        return $callback($items);
    };
   print_r($itemData('netPrice',$items));
    
?>