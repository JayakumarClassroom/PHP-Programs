<?php
	
$date = '01-01-2021';
if ( preg_match( "/(^[0-9]{1,2})-[0-9]{1,2}-([0-9]{4}$)/", $date ) ) {
    echo 'Matched';
} else {
    echo 'Not matched';
}

?>