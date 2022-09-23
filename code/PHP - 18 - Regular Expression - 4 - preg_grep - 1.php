<?php
//method 1
$input = ['Red','Pink','Green','Blue','Purple'];
//method 2 
$input = array( 'Red', 'Pink', 'Green', 'Blue', 'Purple' );

//find the word starting with P
$result = preg_grep( '/^p/i', $input );

print_r( $result );
?>
