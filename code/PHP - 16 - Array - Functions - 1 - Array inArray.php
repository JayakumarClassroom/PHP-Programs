<?php
/*
in_array($var, $arr)
When using an array, we may often want to check whether a certain value is present in the array or not. 
*/

$lamborghinis = array("Urus", "Huracan", "Aventador");

// new concept car by lamborghini
$concept = "estoque";

echo in_array($concept, $lamborghinis) ? 'Added to the Lineup' : 'Not yet!'

?>

