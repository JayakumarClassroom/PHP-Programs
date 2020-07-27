<?php
 for($i=1; $i<=10; $i++){
	echo " {$i} is printing on screen<br>";
 }
?> 

<hr>
<?php echo "<b>Multiplication Table</b><br>"; ?>
<?php $N=2;
for($i=1; $i<=10; $i++){
	$Result=$N*$i;
	echo $N . " * " . $i . " = " . $Result . "<br>";
}
?>