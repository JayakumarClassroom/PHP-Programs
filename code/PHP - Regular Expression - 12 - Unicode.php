<?php

// Declare a regular expression
$regex = '/<b>(.*)<\/b>/U';

// Declare a string
$inputString = 'Name: <b>Jayakumar</b> Position: <b>Professor</b>';

// Use preg_match_all() function to perform
// a global regular expression match
preg_match_all( $regex, $inputString, $output );

echo $output[0][0].' <br> '.$output[0][1].'<br>';

?>
