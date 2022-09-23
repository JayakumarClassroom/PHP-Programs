<!DOCTYPE>

<html>
<head>
	<title>Arrays Functions</title>
</head>
<body>
	<?php ?><br>

	<?php
	$color=array("red","green","blue");
	echo "Printing Array Colors : ";
	print_r($color);
	echo "<hr>";
	echo "Printing Array Colors after POP (removes last element) : ";
	array_pop($color);
	print_r($color);
	echo "<hr>";
	array_push($color,"black","White","Pink");
	echo "Printing Array Colors after PUSH (Adding the element) : ";
	print_r($color); //printing in array format
	echo "<hr>";
	?>
	<br>
	
	<?php 
	$Numbers=array(13,54,6,89,100,15,12,789,1000,99);
	?>
	<br>
	<?php echo "Number Count : ",count($Numbers); ?><br>
	Max:<?php echo max($Numbers);?><br>
	Min:<?php echo min($Numbers);?><br>
	Yes /No:<?php echo in_array(89,$Numbers);?><br>
	Sort:<?php echo sort($Numbers);?><br>
	<?php print_r($Numbers);?><br>
	Reverse Sort:<?php echo rsort($Numbers);?><br>
	<?php print_r($Numbers);?><br>
Implode:<?php // The implode() function returns a string from the elements of an array.
$Quote=array("Never","Give","UP","in","life");
?><br>
<?php echo implode(" ",$Quote);?><br>
Explode:<?php  // The explode() function breaks a string into an array
$Quote="Never Give UP in life";
print_r (explode(" ",$Quote));
?><br>


</body>
</html>
