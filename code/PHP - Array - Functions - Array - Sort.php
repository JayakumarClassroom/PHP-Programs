<?php
/*
sort($arr)
This function sorts the array elements in ascending order. 
In case of a string value array, values are sorted in ascending alphabetical order.
Some other sorting functions are: asort(), arsort(), ksort(), krsort() and rsort().
*/

$cars1 = array("Lamborghini"=>"Urus","Porsche"=>"Cayenne","Bentley"=>"Bentayga","Rolls-Royce"=>"Phantom");

// sort the array
echo "sort - sort arrays in ascending order<br>";
sort($cars1);
foreach($cars1 as $x=>$x_value)
{
    echo $x . " is " . $x_value;
    echo "<br>";
}

$cars2 = array("Lamborghini"=>"Urus","Porsche"=>"Cayenne","Bentley"=>"Bentayga","Rolls-Royce"=>"Phantom");

echo"<hr>rsort - sort arrays in descending order<br>";
krsort($cars2);
foreach($cars2 as $x=>$x_value)
{
    echo $x . " is " . $x_value;
    echo "<br>";
}

$cars3 = array("Lamborghini"=>"Urus","Porsche"=>"Cayenne","Bentley"=>"Bentayga","Rolls-Royce"=>"Phantom");

echo "<hr>asort - sort associative arrays in descending order, according to the value<br>";
arsort($cars3);
foreach($cars3 as $x=>$x_value)
{
    echo $x . " is " . $x_value;
    echo "<br>";
}


$cars4 = array("Lamborghini"=>"Urus","Porsche"=>"Cayenne","Bentley"=>"Bentayga","Rolls-Royce"=>"Phantom");
echo "<hr>ksort - sort associative arrays in ascending order, according to the key<br>";
ksort($cars4);
foreach($cars4 as $x=>$x_value)
{
    echo $x . " is " . $x_value;
    echo "<br>";
}

$cars5 = array("Lamborghini"=>"Urus","Porsche"=>"Cayenne","Bentley"=>"Bentayga","Rolls-Royce"=>"Phantom");

echo "<hr>arsort - sort associative arrays in descending order, according to the value <br>";
arsort($cars5);
foreach($cars5 as $x=>$x_value)
{
    echo $x . " is " . $x_value;
    echo "<br>";
}


$cars6 = array("Lamborghini"=>"Urus","Porsche"=>"Cayenne","Bentley"=>"Bentayga","Rolls-Royce"=>"Phantom");

echo "<hr>krsort - sort associative arrays in descending order, according to the key<br>";
krsort($cars6);
foreach($cars6 as $x=>$x_value)
{
    echo $x . " is " . $x_value;
    echo "<br>";
}

?>