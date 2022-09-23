
<html>
<head>
<title>PHP Cookies Example</title>
</head>
<body>

<form name = 'form1' method = 'post' action = "<?php echo $_SERVER['PHP_SELF']; ?>" >

Enter Name : <input type = 'text' name = 'name'> <br/>
Enter RegNo : <input type = 'text' name = 'regno'> <br/>
Enter City : <input type = 'text' name = 'city'> <br/>
<br/>
<input type = 'submit' name = 'Submit1' value = 'Create Cookie'>
<input type = 'submit' name = 'Submit2' value = 'Retrive Cookie'>
<input type = 'submit' name = 'Submit3' value = 'Delete Cookie'>
</FORM>


<?php
if ( isset( $_POST['Submit1'] ) ) {
    setcookie( 'name', $_POST['name'], time() + 3600, '/', '', 0 );
    setcookie( 'regno', $_POST['regno'], time() + 3600, '/', '', 0 );
    setcookie( 'city', $_POST['city'], time() + 3600, '/', '', 0 );
    echo 'Cookies Created !!';
}

if ( isset( $_POST['Submit3'] ) ) {
    setcookie( 'name', '', time() - 3600, '/', '', 0 );
    setcookie( 'regno', '', time() - 3600, '/', '', 0 );
    setcookie( 'city', '', time() - 3600, '/', '', 0 );
}


if ( isset( $_POST['Submit2'] ) ) {
    if ( isset( $_COOKIE['name'] ) ) {
        echo 'Name = ' . $_COOKIE['name'] . '<br/>';
        echo 'Regno = ' . $_COOKIE['regno'] . '<br/>';
        echo 'City = ' . $_COOKIE['city'] . '<br/>';
    } else {
        echo 'Cookies deleted !!';
    }
}
?>

</body>
</html>