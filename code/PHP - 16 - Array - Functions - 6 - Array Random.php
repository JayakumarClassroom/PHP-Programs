<?php

//array_rand($arr) - If you want to pick random data element from an array


$colors = array("red", "black", "blue", "green", "white", "yellow");

echo "Color of the day: ". $colors[array_rand($colors)];

?>