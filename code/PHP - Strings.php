<!DOCTYPE>
<html>
<head>
	<title>Strings</title>
</head>
<body>
	<?php
	$pharase1="student who come late ";
	$pharase2="in class sit in last with Rock";
	$combine = $pharase1;
	$combine .= $pharase2;
	echo "Origional full string: $combine <br>";
	?> <hr>
	Uppercase first: <?php echo ucfirst($combine); ?><br>
	Uppercase words: <?php echo ucwords($combine); ?><br>
	Lowercase: <?php echo strtolower($combine); ?><br>
	Uppercase: <?php echo strtoupper($combine); ?><br>
	<hr>
	Repeat: <?php echo str_repeat($combine, 3); ?><br>
	Make substring from one point to another: <?php echo substr($combine, 5, 10); ?><br>
	Find position of any specific word: <?php echo strpos($combine, "come"); ?><br>
	Find character: <?php echo strchr($combine, "R"); ?><br>
	
	<hr>

	
	Total Length of String: <?php echo strlen($combine); ?><br>
	Trim: <?php echo "A" . trim(" B C D ") . "E"; ?><br>
	Find specific and show after: <?php echo strstr($combine, "come"); ?><br>
	Replace word with new: <?php echo str_replace("sit", "stand", $combine); ?><br>
	<br> <hr>

</body>
</html>