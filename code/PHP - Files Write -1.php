<?php
$filename = "welcome1.txt";
//delete the existing content and write the content
//If file not found, create a new file and write the content
$fp = fopen($filename,"w+") or exit("Unable to open file");
$content="welcome to php";
if(fwrite($fp,$content)==true)
{   
    echo " sucess";   
}
else
{ 
    echo "failed to written";   
}    
?>