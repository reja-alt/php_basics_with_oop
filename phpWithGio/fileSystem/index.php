<?php
    $dir = scandir(__DIR__);
    echo '<pre>';
    print_r($dir);
    // $months = mkdir('months');
    // rmdir('months');
    $path = "indexText.php";
    // echo basename($path, '.php');
    $contents = file_put_contents($path, 'write here');
    echo filesize($path);

    // $newFile = fopen('demo.php', 'r'); 

    $file = "index.php";
 
 
    // Check the existence of file
    if(file_exists($file)){
        // Attempt to open the file
        $handle = fopen($file, "r");
        fwrite($file, $contents);
    } else{
        echo "ERROR: File does not exist.";
    }
?>