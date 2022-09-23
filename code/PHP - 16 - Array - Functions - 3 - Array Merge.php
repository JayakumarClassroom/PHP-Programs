<?php
/*
array_merge($arr1, $arr2)
If you want to combine two different arrays into a single array.
*/

$hatchbacks = array(
    "Suzuki" => "Baleno",
    "Skoda" => "Fabia",
    "Hyundai" => "i20",
    "Tata" => "Tigor"
);

// friends who own the above cars
$friends = array("Vinod", "Javed", "Navjot", "Samuel");

// let's merge the two arrays into one
$merged = array_merge($hatchbacks, $friends);

print_r($merged);

?>