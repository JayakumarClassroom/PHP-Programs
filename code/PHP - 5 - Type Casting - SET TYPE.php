<?php
$pi = 3.14;
echo gettype($pi);
echo "<br>";
settype($pi, "string");
echo $pi;
echo "<br>";
echo gettype($pi);
echo "<br>";
echo "\n";
settype($pi, "integer");
echo $pi;
echo "<br>";
echo gettype($pi);
?>