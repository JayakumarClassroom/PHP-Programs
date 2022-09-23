<?php
//preg_split - The preg_split() function breaks a string into an array using matches of a regular expression as separators.


$date = '2021-01-01 00:00:00';
$pattern = '/[-\s:]/';
$components = preg_split( $pattern, $date );
print_r( $components );
?>