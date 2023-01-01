<?php


class Template
{
    
    function __construct($items, Closure $render)
    {
        
        foreach ($items as $i) {
            echo '<div style="border: 1px solid black; margin-bottom: 20px">';
            $render($i);
            echo '</div>';
        }
    }
    
    public static function create($items, $render)
    {
        $class = __CLASS__;
        return new $class($items, $render);
    }
}



?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <title>untitled</title>

</head>

<body>
    <h1>Welcome</h1>

    <?php

$items = array(
    'foo',
    'bar',
    'baz',
);
?>

    <?
Template::create($items, function ($word) {
?>
    <h2><?php echo $word ?></h2>
    <p>
        Lorem ipsum dolor sit amet.
    </p>
    <?
});
?>

</body>

</html>