<!DOCTYPE>

<html>
	<head>
		<title>Arrays</title>
	</head>
	<body>
		<?php

$name=array('Jay','Ali','Mike');
echo $name[2];

?><br>
<?php $Food= array('Pizza',10,15,array("Asian","French","German"),"Pasta");   ?><br>
<?php echo $Food[2] ?><br>
<?php echo $Food[3][2]?><br>
<?php $Food[56]="Mango";?><br>
<?php $Food[300]="Apple"; ?><br>
<pre>
<?php echo print_r($Food);?><br></pre>
<?php  $Color=array("A"=>"40","B"=>"Pizza");  ?> <br>
<?php echo $Color["B"];  ?><br>
<?php $Food=array("Asian"=>"Pizza","Italian"=>"Biryani");  ?><br>
<?php  echo $Food["Asian"]. "is for" . $Food["Italian"];?><br>
<pre>
<?php echo print_r($Food);  ?><br></pre>
	</body>
</html>
