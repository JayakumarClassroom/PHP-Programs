<?php
$pattern = '/^color/im';
// /m - Performs a multiline search (patterns that search for the beginning or end of a string will match the beginning or end of each line)

$text = 'Color red is more visible than \n color blue in daylight.';
$matches = preg_match_all( $pattern, $text, $array );
echo $matches . ' matches were found.';
?>