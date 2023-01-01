<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="color:black;padding: 100px;background-color: purple;width: 250px;border-radius: 30px;">
        <?php
            require 'person/class.php';
            $person = new Person();
            $person2 = new Person();

            $person->getIdentity();
            // $person2->getIdentity2();
            // print_r($person2);

            $address = new Location;
            echo $address->accessAddress();
        ?>
    </h1>
</body>
</html>