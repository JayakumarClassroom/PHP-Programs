<!DOCTYPE>

<html>
	<head>
<title> Global Variables</title>
	</head>
	<body>
<?php

$MyNumber=456456; // Local Scope
echo "Number is : $MyNumber <br/>";
function Addition(){
	global $MyNumber; //Assigning $MyNumber as Global Variable
	$a=5;
	$b=2;
	$c=$a+$b;
echo "New Global Addition".($MyNumber+$c)."<br>";
	echo "Addition is {$c}<br>";	
}

Addition();
?>

	</body>
</html>
