<!DOCTYPE>

<html>
<head>
	<title>For each loop structure</title>
</head>
<body>
	
	<?php
	$Food=array(
		"item_number"=>1050,
		"name"=>"Pizza",
		"region"=>"Italy",
		"Side_food"=>"Pasta",
		"drink"=>"Cook",
		"package_price"=>78545
	);
	foreach($Food as $Key=>$Value){
		$Data=ucwords( str_replace("_"," ",$Key));  //Replacing _(underscore ) with whitespace
		if($Key=="package_price"){
			if(is_numeric($Value)){
			}
			else
			{
				$Value="Can not be determined";
			}
		}	
		echo "{$Data} : {$Value} <br>";
	}
	?>
	<hr>
	<h3>Changed Price value to String</h3>
	
	<?php
	$Food=array(
		"item_number"=>1050,
		"name"=>"Pizza",
		"region"=>"Italy",
		"Side_food"=>"Pasta",
		"drink"=>"Cook",
		"package_price"=>"unknown"
	);
	foreach($Food as $Key=>$Value){
		$Data=ucwords( str_replace("_"," ",$Key));  //Replacing _(underscore ) with whitespace
		if($Key=="package_price"){
			if(is_numeric($Value)){
			}
			else
			{
				$Value="Can not be determined";
			}
		}	
		echo "{$Data} : {$Value} <br>";
	}
	?>
</body>
</html>
