<!DOCTYPE html>
<html>

<body>

    <?php
$myfile = fopen("welcome-1.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("welcome-1.txt"));
fclose($myfile);
?>

</body>

</html>