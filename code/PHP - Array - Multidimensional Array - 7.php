<?php

$cars = array(
    "Urus" => array(
        "type"=>"SUV", 
        "brand"=>"Lamborghini"
    ),
    "Cayenne" => array(
        "type"=>"SUV", 
        "brand"=>"Porsche"
    ),
    "Bentayga" => array(
        "type"=>"SUV", 
        "brand"=>"Bentley"
    ),
);

$size = count($cars);

// array keys
$keys = array_keys($cars);

// using the for loop
for($i = 0; $i < $size; $i++)
{
    echo $keys[$i]. "<br>";
    foreach($cars[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "<br>";
}

?>