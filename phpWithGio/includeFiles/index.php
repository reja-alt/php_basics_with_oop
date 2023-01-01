<?php
    // include, require, require_once, include_once
    // include 'file1.php';  //provide only warning not stop execution if error
    // echo 'next';
    // require 'file.php';  //provide warning & stop execution if error
    // require 'file.php';  //provide warning & stop execution if error
    // echo 'then';
    // require_once 'file.php';  //provide one time  execute anything one time
    // require_once 'file.php'; //provide one time   execute anything one time
  
    // $y =  include 'file.php'; //return 1 on success
    // var_dump($y);

    // $m =  include 'file1.php'; //return 0 on failure
    // var_dump($m);

    ob_start();
    include 'file.php'; //return 1 on success
    $menu = ob_get_clean();
    $replace = str_replace('test', 'demo test', $menu);
    var_dump($menu);
    var_dump($replace);

?>