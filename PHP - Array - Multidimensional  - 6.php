<?php
/* 
multidimensional array initialization
*/
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
        )
    );
    
    // array traversal
    // find size of the array
    $size = count($cars);
    
    // using the for loop
    for($i = 0; $i < $size; $i++)
    {
        foreach($cars[$i] as $key => $value) {
            echo $key . " : " . $value . "<br>";
        }
        echo "<br>";
    }
    
    ?>