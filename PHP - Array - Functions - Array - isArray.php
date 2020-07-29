<?php
/*
is_array($arr)

To check whether the provided data is in form of an array, we can use the is_array() function. It returns True if the variable is an array and returns False otherwise.
*/


$lamborghinis = array("Urus", "Huracan", "Aventador");

// using ternary operator
echo is_array($lamborghinis) ? 'Array' : 'Not an Array';

echo "<br><br>";

$mycar = "Urus";

// using ternary operator
echo is_array($mycar) ? 'Array' : 'Not an Array';



?>