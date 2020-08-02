<?php
echo "Continue Statement <hr>";
$Names=array("Jay","akram","Alex","Tait","Shaan","David","Roth");
for($i=0;$i<=7;$i++){
	if($Names[$i]=="Alex") //Alex Skipped
	{
		continue; 
	}
	echo $Names[$i]. "<br>";
	} 
?>
