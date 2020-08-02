<?php

$name = array('Jay', 'Ali', 'Mike');
echo $name[2];

echo "<br><br>";

$Food = array('Pizza', 10, 15, array("Asian", "French", "German"), "Pasta");
echo $Food[2];
echo "<br><br>";
echo $Food[3][2];
$Food[56] = "Mango";
$Food[300] = "Apple";
echo "<br><br>";
print_r($Food);

echo "<br><br>";

$Color = array("A" => "40", "B" => "Pizza");
echo $Color["B"];
echo "<br><br>";
$Food = array("Asian" => "Pizza", "Italian" => "Biryani");
echo $Food["Asian"] . "is for " . $Food["Italian"];
echo "<br><br>";
print_r($Food);

?>