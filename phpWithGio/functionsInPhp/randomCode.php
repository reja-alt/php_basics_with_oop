<?php
    function getData($openLight = false, $openDoor = false) {
        if($openLight) {
            echo 'open the light';
        }

        if($openDoor) {
            echo 'open the door';
        }
    }

    // getData(openLight: true);


?>

<?php

// Define a function to format a number as a price
function format_price( $amount )
{
    return '$'.number_format($amount, 2);
}

// Convert a rating and total into a visual rating using stars
function rating_stars($rating, $total = 5)
{

    $html = '';

    for($i = 0; $i < $total; $i ++)
    {
        if($rating > $i)
        {
            $html .= '&#9733;';
        } 
        else
        {
            $html .= '&#9734;';
        }
    }

    return $html;

}

?>
<!doctype html>
<html>

<head>
    <title>PHP and For Loops</title>
</head>

<body>

    <h1>PHP and For Loops</h1>

    <p>Use PHP echo, if statements, loops, and functions to output all three books.</p>

    <hr>

    <?php

    // **************************************************
    // Do not edit this code

    // Define a multi dimensional array to store all of the books
    $books = array (
        0 => array (
            'name' => 'JavaScript and JQuery: Interactive Front-End Web Development',
            'url' =>'https://www.chapters.indigo.ca/en-ca/books/javascript-and-jquery-interactive-front/9781118531648-item.html',
            'image' => 'javascript-jquery.jpg',
            'description' => 'Learn JavaScript and jQuery a nicer way.',
            'rating' => 4,
            'price' => '44.90',
            'sale' => '39.90' ),
        1 => array ( 
            'name' => 'Php For The Web: Visual Quickstart Guide',
            'url' =>'https://www.chapters.indigo.ca/en-ca/books/php-for-the-web-visual/9780134291253-item.html',
            'image' => 'php-web.jpg',
            'description' => 'Learn PHP programming the quick and easy way!',
            'rating' => 3,
            'price' => '55.99',
            'sale' => '' ),
        2 => array (
            'name' => 'Beginning Node.js',
            'url' =>'https://www.chapters.indigo.ca/en-ca/books/beginning-node-js/9781484201886-item.html',
            'image' => 'beginning-nodejs.jpg',
            'description' => 'A step-by-step guide to learning how to develope a Node.js application.',
            'rating' => 5,
            'price' => '65.90',
            'sale' => '58.90' ),
        );
        
    // **************************************************

    // Loop through the array and display the link information
    foreach ($books as $book)
    {
        echo '<h2>'.$book['name'].'</h2>';
        
        echo '<img src="'.$book['image'].'" width="200">';

        echo '<p>'.$book['description'].'</p>';
        
        echo '<p><a href="'.$book['url'].'">Purchase '.$book['name'].'</a></p>';

        if ($book['sale'])
        {
            echo '<p>Sale Price: <font color="red">'.
                format_price($book['sale']).
                '</font> <strike>'.
                format_price($book['price']).
                '</strike></p>';
        }
        else
        {
            echo '<p>Price: '.
                format_price($book['price']).
                '</p>';
        }
        
        echo '<p>'.rating_stars($book['rating']).'</p>';
            
        echo '<hr>';

    }

    // Use the print_r function to view the contents of the array
    echo '<pre>';
    print_r ($books);
    echo '</pre>';
    
    ?>

</body>

</html>