<?php  
    $color = array('white', 'green', 'red');  
    
    foreach ($color as $i)  
    {  
        echo "$i, ";  
    }  
    sort($color);  
    echo "<ul>";  
    foreach ($color as $a)  
    {  
        echo "<li>$a</li>";  
    }  
    echo "</ul>";  
     
    // $array = [];
    $data = range(2,7);
    $array_key = range(20, 25);
    // $arrayData = array_fill_keys($array, $array_key);

    echo '<pre>';
    print_r(array_combine($array_key, $data));
    echo '<pre>';

    $list1 = array('x', 'y', 'z');
    $list2 = array(10, 20, 30);

    $combineList = array_combine($list1, $list2);
    print_r($combineList);

    $a1 = array(
        'a1' => array('a_name' => 'aaa', 'a_value' => 'aaaaa'),
        'b1' => array('b_name' => 'bbb', 'b_value' => 'bbbbbb'),
        'c1' => array('c_name' => 'ccc', 'c_value' => 'cccccc')
    );

    $a2 = array(
        'b1' => array('b_name' => 'zzzzz'),
    );


    function check_diff_multi($array1, $array2){
        $result = array();
        foreach($array1 as $key => $val) {
             if(isset($array2[$key])){
               if(is_array($val) && $array2[$key]){
                   $result[$key] = check_diff_multi($val, $array2[$key]);
               }
           } else {
               $result[$key] = $val;
           }
        }

        return $result;
    }
    
    print_r(check_diff_multi($a1, $a2));
?>