<!DOCTYPE html>
<html>

<body>

    <?php
$myfile = fopen("welcome.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("welcome.txt"));
fclose($myfile);
?>

</body>

</html>