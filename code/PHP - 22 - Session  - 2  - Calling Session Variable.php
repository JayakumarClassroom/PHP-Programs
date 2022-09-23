<?php
// Start the session
session_start(); ?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION['favcolor'] = 'green';
$_SESSION['favanimal'] = 'cat';
echo 'Session variables are set.';
?>
<br><br>
<?php
// Echo session variables that were set on previous page
echo 'Favorite color is ' . $_SESSION['favcolor'] . '.<br>';
echo 'Favorite animal is ' . $_SESSION['favanimal'] . '.';
?>

<br><br>
<?php print_r($_SESSION); ?>
</body>
</html>