<?php
$pi = 3.14;

echo gettype($pi);
echo "<br>";

settype($pi,"string");
echo $pi;
echo gettype($pi);

echo "<br>";
settype($pi,"integer");
echo $pi;
echo gettype($pi);

?>