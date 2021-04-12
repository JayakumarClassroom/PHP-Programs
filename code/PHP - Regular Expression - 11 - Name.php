<?php

// Declare a regular expression
$regex = '/^[a-zA-Z ]*$/';

// Declare a string
$nameString = 'Jayakumar Sadhasivam';

// Use preg_match() function to
// search string pattern
if ( preg_match( $regex, $nameString ) ) {
    echo( "$nameString  - matched with the regular expression" );
} else {
    echo( 'Only letters and white space allowed in name string' );
}
?>
