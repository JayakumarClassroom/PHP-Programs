<?php 

$languages = array(); 

$languages['PHP'] = array( 
    "first_release" => "1995",  
    "latest_release" => "7.3.11",  
    "designed_by" => "Rasmus Lerdorf", 
    "description" => array( 
        "extension" => ".php",  
        "typing_discipline" => "Dynamic, weak", 
        "license" => "PHP License (most of Zend engine 
        under Zend Engine License)" 
        ) 
    ); 
    
    print_r($languages['PHP']['description']); 
    echo "<br><br>";
    echo $languages['PHP']['latest_release']; 
    
    ?>