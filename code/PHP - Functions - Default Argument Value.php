<?php 
function setHeight(
    $minheight = 50,$weight=100)
    {
        echo "The height is : $minheight, $weight  <br/><br/>";
    }
    setHeight(350,102);
    setHeight("",); // will use the default value of 50
    setHeight(135,323);
    setHeight(12,121);
    ?>