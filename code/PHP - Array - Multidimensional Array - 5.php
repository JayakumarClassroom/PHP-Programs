<?php
$cars = array(
    array(
        "name"=>"Urus", 
        "type"=>"SUV", 
        "brand"=>"Lamborghini"
    ),
    array(
        "name"=>"Cayenne", 
        "type"=>"SUV", 
        "brand"=>"Porsche"
    ),
    array(
        "name"=>"Bentayga", 
        "type"=>"SUV", 
        "brand"=>"Bentley"
    ),
);
echo "Accessing multidimensional array...";
echo "<br><br>";
echo "Urus is an ".$cars[0]["type"]." manufactured by ".$cars[0]["brand"]."\n";
echo "<br><br>";
echo "Bentayga is an ".$cars[2]["type"]." manufactured by ".$cars[2]["brand"]."\n";

?>