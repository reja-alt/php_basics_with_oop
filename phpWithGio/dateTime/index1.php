<?php
// date(format,timestamp)
// mktime(hour, minute, second, month, day, year)
$time = mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y.m.d h:i:sa", $time);

// The PHP strtotime() function is used to convert a human readable date string into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 GMT).
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>