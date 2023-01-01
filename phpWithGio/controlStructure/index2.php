<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Structure</title>
</head>

<body>
    <?php $score = 27 ?>
    <?php if($score > 80): ?>
    <strong style="color: green">A+</strong>
    <?php elseif($score > 70): ?>
    <strong>A</strong>
    <?php elseif($score > 60): ?>
    <strong>A</strong>
    <?php elseif($score > 50): ?>
    <strong>B+</strong>
    <?php elseif($score > 40): ?>
    <strong>c+</strong>
    <?php else: ?>
    <strong style="color: red">fail</strong>
    <?php endif ?>
</body>

</html>