<?php
$myfile = fopen("welcome.txt", "r") or die("Unable to open file!");
//Print only one character
echo fgetc($myfile);
fclose($myfile);
?>