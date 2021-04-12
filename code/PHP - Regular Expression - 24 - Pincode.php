<?php
$pincode = 632014;
if ( preg_match( "/^[0-9]{6}$/", $pincode ) ) {
    echo 'Matched';
} else {
    echo 'Not matched';
}

?>