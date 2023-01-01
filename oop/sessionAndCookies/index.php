<?php
session_start();       //  session_start() should set before any output like echo something
// echo session_id();

setcookie(             ////  setcookie() should set before any output like echo something
    'offer',
    'Offers Running',
    time() + 1000
);
var_dump($_COOKIE);
// unset($_SESSION);
// $_SESSION['count'] = ($_SESSION['count'] ?? 0) + 1;

// var_dump($_SESSION);


// echo 'access';
// sleep(5);
// echo 'ok';

