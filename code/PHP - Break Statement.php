<!DOCTYPE>

<html>
	<head>
<title>Branching Statements - Break </title>
	</head>
	<body>
<?php ?>
<?php
echo "Break Statement <hr>";
$Names=array("Jay","akram","Alex","Tait","Shaan","David","Roth");
for($i=0;$i<=7;$i++){
	if($Names[$i]=="Alex")
	{
		break; 
	}
	echo $Names[$i]. "<br>";
	} 
?>
<hr>
<?php
$Names=array("Jay","akram","Alex","Tait","Shaan","David","Roth");
for($i=0;$i<=7;$i++){
	if($Names[$i]=="jack")  //not in the list
	{
		break; 
	}
	echo $Names[$i]. "<br>";
	} 
?>


</body>
</html>
