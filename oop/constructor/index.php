<?php
include 'includes/class.inc.php';
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
        $data = new Car();
        // unset($data);
        $data->setValue('bmw 2398-ot');

        echo $data->getValue();
    ?>
</body>
</html>