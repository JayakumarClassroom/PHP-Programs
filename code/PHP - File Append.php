<?php
$filename = "welcome.txt";
$fp = fopen($filename,"a+") or exit("Unable to open file");
$content="Adding one more line to the document";
if(fwrite($fp,$content)==true)
{   
    echo " sucess";   
}
else
{ 
    echo "failed to written";   
}    
?>