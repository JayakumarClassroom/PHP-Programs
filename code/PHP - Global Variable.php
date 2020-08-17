<?php

$MyNumber=456456; // Local Scope
echo "Number is : $MyNumber <br/>";
function Addition(){
    // echo "The value is : ", $MyNumber ,"<br>";
    global $MyNumber; //Assigning $MyNumber as Global Variable
    $a=50;
    $b=22;
    $c=$a*$b;
    echo "New Global Value : ".($MyNumber * $c)."<br>";
    echo "Multiplication is {$c}<br>";	
}
Addition();
?>