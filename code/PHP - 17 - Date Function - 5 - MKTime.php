<?php
// Prints: October 3, 1975 was on a Friday
echo "March 17th, 2021 was on a " . date("l", mktime(0, 0, 0, 3, 17, 2021)) . "<br><br>";

//The mktime() function is useful for doing date arithmetic and validation.
//It will automatically calculate the correct value for out-of-range input:
echo date("M-d-Y", mktime(0, 0, 0, 12, 36, 2021)) . "<br>";
echo date("M-d-Y", mktime(0, 0, 0, 14, 1, 2021)) . "<br>";
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 2021)) . "<br>";
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 2099)) . "<br>";
?>