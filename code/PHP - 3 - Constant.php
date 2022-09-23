<?php
define("Value_of_Pi",3.14);
define("Value_of_Gravity",9.8);
echo "PI VALUE : " . Value_of_Pi;
echo "<br/>G VALUE : " . Value_of_Gravity;

echo "<hr>";
define("Value_of_Pi",1000);   //changing the value of constant
echo "PI VALUE: " . Value_of_Pi;
?>

<?php
    // case-insensitive constant name
echo "<br><hr><br>";
define("Lang","WELCOME TO PHP V8",false);
echo  LANG;
?>
<?php
    // case-insensitive constant name
echo "<br><hr><br>";
define("Iwp","WELCOME TO PHP V8",true);
echo  iwp;
?>