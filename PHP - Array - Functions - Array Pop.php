<?php
/*array_pop($arr)
This function removes the last element of the array.
*/

$lamborghinis = array("Urus", "Huracan", "Aventador");

print_r($lamborghinis);

// removing the last element
array_pop($lamborghinis);
echo "<br><br>After Array POP<br>";

print_r($lamborghinis);

?>