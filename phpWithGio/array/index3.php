<?php
    const BR = '<br>';
    $demo = ['phone', 'fruits', 'flowers', 'medicines'];
    // unset($demo[3]);
    array_splice($demo, 2, 2);    //remove element form start and the end position
    print_r($demo);

    $array = [0 => "a", 1 => "b", 2 => "c"];
    
    $data = array_filter($array, function($element) {
            return $element !== 'c' && $element !== 'b';
    });

    print_r($data);
    echo BR;

    $arr = array('red', 'green', 'blue', 'black', 'white');
    $filterData = array_diff($arr, array('red', 'green', 'blue'));
    print_r($filterData);

    // if(!empty($arr)) {
    if(count($arr) != 0) {
        echo 'Array not empty';
    } else {
        echo 'empty array';
    }


    $userdb = array(
        array(
            'uid' => '100',
            'name' => 'Sandra Shush',
            'pic_square' => 'urlof100'
        ),
        array(
            'uid' => '5465',
            'name' => 'Stefanie Mcmohn',
            'pic_square' => 'urlof100'
        ),
        array(
            'uid' => '40489',
            'name' => 'Michael',
            'pic_square' => 'urlof40489'
        )
    );

    function searchById($name, array $items) {
        foreach($items as $key => $val) {
            if($name === $val['name']) {
                return $val['pic_square'];
            }
        }
    }

    echo BR;
    $id = searchById('Sandra Shush', $userdb);
    print_r($id);

    echo BR;
    $getData = array_search(40489, array_column($userdb, 'uid'));
    print_r($getData);

    
    ?>