<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

echo "Number of cars : $arrlength <br>";

for($x = 0; $x < $arrlength; $x++) {
	echo $cars[$x];
	echo "<br>";
}
?>