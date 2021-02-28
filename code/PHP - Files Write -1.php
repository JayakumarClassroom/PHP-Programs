<?php
$filename = "welcome.txt";
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