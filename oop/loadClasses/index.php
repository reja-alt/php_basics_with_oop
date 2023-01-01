<?php
    include('includes/autoload.php')
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
        $car = new Car();
        echo $car->model;

        $person = new Person();
        echo $person->name;

        $house = new House();
        echo $house->address;
    ?>
</body>
</html>