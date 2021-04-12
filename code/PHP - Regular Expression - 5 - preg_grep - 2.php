<?php
$pattern = '/^J/i'; // case insensitive 
$pattern = '/^J/'; // case sensitive 

$names = array( 'Jhon Carter', 'Clark Kent', 'john Rambo' );
$matches = preg_grep( $pattern, $names );

// Loop through matches array and display matched names
foreach ( $matches as $match ) {
    echo $match . '<br>';
}
?>