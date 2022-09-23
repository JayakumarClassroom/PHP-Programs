<?php
// Write you regular expression patttern to match URL
$pattern = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";

// Assign URL to $URL variable
$URL = 'http://example.com?id=2021&name=jay';

// Check url using preg_match
if ( preg_match($pattern, $URL) ) {
    echo "Valid URL";
} else {
    echo "Invalid URL";
}

?>