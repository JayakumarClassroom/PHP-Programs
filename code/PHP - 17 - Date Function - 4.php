<?php
$today = date("F j, Y, g:i a"); // March 10, 2021, 5:16 pm
echo "$today <br>";
$today = date("m.d.y"); // 03.10.21
echo "$today <br>";
$today = date("j, n, Y"); // 10, 3, 2021
echo "$today <br>";
$today = date("Ymd"); // 20210310
echo "$today <br>";
$today = date('h-i-s, j-m-y'); // 05-16-18, 10-03-21
echo "$today <br>";
$today = date('\i\t \i\s \t\h\e jS \d\a\y.'); // it is the 10th day.
echo "$today <br>";
$today = date("D M j G:i:s T Y"); // Sat Mar 10 17:16:18 UTC 2021
echo "$today <br>";
$today = date('H:m:s \m \i\s\ \m\o\n\t\h'); // 17:03:18 m is month
echo "$today <br>";
$today = date("H:i:s"); // 17:16:18
echo "$today <br>";
$today = date("Y-m-d H:i:s"); // 2021-03-10 17:16:18 (the MySQL DATETIME format)
?>