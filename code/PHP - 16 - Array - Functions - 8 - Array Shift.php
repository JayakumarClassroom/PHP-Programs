<?php
/*
array_shift($arr)
used to remove/shift the first element out of the array. 
*/

$lamborghinis = array("Urus", "Huracan", "Aventador");

print_r($lamborghinis);

// removing the first element
array_shift($lamborghinis);

echo "<br><br>After Array Shift<br>";


print_r($lamborghinis);

?>