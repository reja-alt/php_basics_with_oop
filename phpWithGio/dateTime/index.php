<?php
    // Date & time 
    const BR = '<br>';
    echo time() . BR;
    $currentTime = time();
    $dayTime = $currentTime + 5 * 24 * 60 * 60;
    echo $dayTime . BR;

    echo date('Y/M/D', $dayTime) . BR;
    echo date('h:i:s', $dayTime) . BR;
    echo date('M,d,Y h:i:s A', $currentTime + 5 * 24 * 60 * 60) . BR;
    echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . BR;
    echo date("jS \of M") . BR;  //24th of Nov
    echo date("jS \of M") . BR;  //24th of Nov
    $today = date("F j, Y, g:i a") . BR;                 // March 10, 2001, 5:16 pm
    $today = date("m.d.y") . BR;                         // 03.10.01
    $today = date("j, n, Y") . BR;                       // 10, 3, 2001
    $today = date("Ymd") . BR;                           // 20010310
    $today = date('h-i-s, j-m-y, it is w Day') . BR;     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
    $today = date('\i\t \i\s \t\h\e jS \d\a\y.') .BR;   // it is the 10th day.
    $today = date("D M j G:i:s T Y") . BR;               // Sat Mar 10 17:16:18 MST 2001
    $today = date('H:m:s \m \i\s\ \m\o\n\t\h') . BR;     // 17:03:18 m is month
    $today = date("H:i:s") . BR;                         // 17:16:18
    $today = date("Y-m-d H:i:s") . BR;                   // 2001-03-

    // echo date_default_timezone_get();
    echo date_default_timezone_set('UTC');

    echo date('Y/M/D', $dayTime) . BR;
    echo date('h:i:s', $dayTime) . BR;
    echo date('M,d,Y h:i:s A', $currentTime + 5 * 24 * 60 * 60) . BR;
    echo date_default_timezone_get() . BR;
    echo date_default_timezone_set('Asia/Dhaka') . BR;
    echo date('M,d,Y h:i:s A', $currentTime + 5 * 24 * 60 * 60) . BR;

    $date = new DateTimeImmutable();
    echo '<pre>';
    var_dump($date);
    echo '<pre>';

    $dateType = date('m/d/Y g:ia', strtotime('third friday of November'));
    echo '<pre>';
    var_dump($dateType);
    echo '<pre>';
    
    echo date_default_timezone_set('Asia/Japan') . BR;

    // print_r(new DateTime("now"));
    print_r(new DateTime("now"));
    print_r(new DateTime("-1 month"));
    print_r(new DateTime("-2 months"));


?>