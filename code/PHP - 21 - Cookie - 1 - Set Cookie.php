<!DOCTYPE html>
<?php 
	$cookie_name = "user";
	$cookie_value = "Jayakumar Sadhasivam";
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
	//		86400 = 1 day
?>
<html>
<body>

<?php
	if(!isset($_COOKIE[$cookie_name])) 
		{
			echo "Cookie named '" . $cookie_name . "' is not set!";
		}
	else {
		echo "Cookie '" . $cookie_name . "' is set!<br>";
		echo "<h2> Value is: " . $_COOKIE[$cookie_name];
	}	
?>

<h2><strong>Note:</strong> Reload the page to see the value of the cookie.</h2>

</body>
</html>