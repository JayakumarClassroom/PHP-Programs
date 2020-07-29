<?php
/*
array_push($arr, $val)
This can be used to add a new element at the end of the array.
*/

$lamborghinis = array("Urus", "Huracan", "Aventador");
print_r($lamborghinis);

// adding a new element at the end
array_push($lamborghinis, "Estoque");
echo "<br><br>After Array Push<br>";


print_r($lamborghinis);

?>