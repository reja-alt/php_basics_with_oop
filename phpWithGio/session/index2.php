<?php
session_start();
$_SESSION['color'] = 'green';

session_unset();
$_SESSION['size'] = 43.9;
$_SESSION['width'] = '1200px';

// echo $_SESSION['color'];
echo $_SESSION['width'];


?>