<?php
$filename = "welcome.txt";
//Append the content at the end of the file.
//If file not found, create a new file and write the content
$fp = fopen($filename,"a+") or exit("Unable to open file");
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