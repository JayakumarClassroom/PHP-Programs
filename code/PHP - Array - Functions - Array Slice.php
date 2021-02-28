<?php
/*
array_slice($arr, $offset, $length) - This function is used to create a subset of any array. 
Using this function, we define the starting point($offset, which is the array index from where the subset starts) 
length(or, the number of elements required in the subset, starting from the offset).
*/


$colors = array("red", "black", "blue", "green", "white", "yellow");

print_r(array_slice($colors, 2, 3));

?>