<?php
include 'includes/class.inc.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    CONST BR = '<br>';
        $person = new Person(5.8, 62, 03232323222);
        // echo $person->height;
        echo '<pre>';
        print_r($person);

        $person->setValue(5.9, 66, 9843824);
        echo '<pre>';
        print_r($person->getValue());
        $data = $person->getValue();
        echo $data['height'] . BR;
        echo $data['weight'] . BR;
        echo $data['phone'] . BR;

        $person2 = new Person(6.8, 82, 032323522);
        echo '<pre>';
        print_r($person2);
        // echo '<pre>';
        // print_r($person->getValue('reja', 28, 'dhaka'));

        // echo $person->name . BR;
        // echo $person->age . BR;
        // echo $person->address . BR;

        // $person2 = new Person();
        // print_r($person2->getValue('Zillur'));
        // echo $person2->name;
    ?>
</body>
</html>