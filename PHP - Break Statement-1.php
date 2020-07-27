
<?php
echo "Break Statement <hr>";
$Names=array("Jay","akram","Alex","Tait","Shaan","David","Roth");


for($i=0;$i<=7;$i++){
	if($Names[$i]=="Shaan")
	{
		break; 
	}
	echo $Names[$i]. "<br>";
	} 
?>
