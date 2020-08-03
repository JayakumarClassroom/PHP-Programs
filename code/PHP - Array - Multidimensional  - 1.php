<?php    
$emp = array  
(  
    array(1,"sonoo",400000),  
    array(2,"john",500000),  
    array(3,"rahul",300000),
    array(4,"rahul",300000),
    array(5,"rahul",300000),
    
);  


for ($row = 0; $row < 6; $row++) {  
    for ($col = 0; $col < 6; $col++) {  
        echo $emp[$row][$col]."  ";  
    }  
    echo "<br/>";  
}  
?>