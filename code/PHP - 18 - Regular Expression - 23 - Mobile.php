<?php
$mobile = '9876543210';
$mobile = '09876543210';
if ( preg_match( "/(^[+0-9]{1,3})?([0-9]{10,11}$)/", $mobile ) ) {
    echo 'Matched';
} else {
    echo 'Not matched';
}

?>