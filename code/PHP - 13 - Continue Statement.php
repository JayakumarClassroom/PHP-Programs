<!DOCTYPE>

<html>
	<head>
<title>Branching Statements - Continue </title>
	</head>
	<body>
<?php ?>
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
<hr>
<?php
$Names=array("Jay","akram","Alex","Tait","Shaan","David","Roth");
for($i=0;$i<=7;$i++){
	if($Names[$i]=="jack")  //not in the , so alex added
	{
		continue; 
	}
	echo $Names[$i]. "<br>";
	} 
?>


</body>
</html>
