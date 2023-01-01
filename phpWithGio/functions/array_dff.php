<?php
    $arrayOne = ['summner', 'rainy', 'winter', 'spring'];
    $arrayTwo = ['ytr', 'winter', 'springs'];

    $result = array_diff($arrayOne, $arrayTwo);
    var_dump($result);
?>