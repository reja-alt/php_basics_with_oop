<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    p {
        color: green;
        font-size: 30px;
        border: 1px solid black;
        width: 100px;
        text-align: center;
        border-radius: 10px;
    }
    </style>
</head>

<body>
    <?php 
        $test = 'End Days';
        $days = ['sat', 'sun', 'mon', 'tues', 'wed', 'thrus', 'fri'];
        function dayShow($days) {
            foreach($days as $day) {
                echo "<p>{$day}</p>";
                // return $day;
            }
        }
        dayShow($days)
    ?>
    <h1><?php echo "$test" ?></h1>
</body>

</html>