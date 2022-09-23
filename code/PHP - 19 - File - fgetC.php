<?php
$file = fopen("testfile.txt", "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
while(!feof($file))
  {
  echo fgetc($file). "<br>";
  }
fclose($file);
?>