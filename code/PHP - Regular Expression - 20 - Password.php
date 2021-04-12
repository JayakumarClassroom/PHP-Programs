<?php
$pwd = 'Jaya#123$kumar';
if ( preg_match( "/^[a-zA-Z0-9*&^%$#@!-]{8,20}$/", $pwd ) ) {
    echo 'Matched';
} else {
    echo 'Not matched';
}
   
?>