<!DOCTYPE>

<html>
<head>
	<title>Switch Statement</title>
</head>
<body>
	<?php 

	$Weather="Cloudyblurr";
	switch($Weather){
		case "Sunny":
		echo "Weather is quite pleasent outside";
		break;
		case "Rainy":
		echo "Its Raining outside <br>";
		break;
		case "Cloudy":
		echo "It is expected to Rain <br>";
		break;
		default:
		echo "Weather Can not be forecast <br>";
		break;
	}
	?> 
	<hr>
	<?php
	$Restricted_Area='Public';
	switch($Restricted_Area){
		case 'Guard':
		echo "Permission Granted";
		break;
		case 'Office boy':
		case 'Public':
		case 'Media':
		echo "Permission Denied";
		break;
		default:
		echo "visit Jayakumars.in";

	}
	?>

</body>
</html>
