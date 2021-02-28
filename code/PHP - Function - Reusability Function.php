<?php
//require("FunctionFile.php");
//require_once("FunctionFile.php");
include("FunctionFile.php");
//include_once("FunctionFile.php");
?>
<!DOCTYPE>

<html>
	<head>
		<title>Reusability</title>
	</head>
	<body>
<?php
Welcome();
$foo=Addition_Using_Function_Parameter(15,10);
echo $foo;

?>
	    
	</body>
</html>
