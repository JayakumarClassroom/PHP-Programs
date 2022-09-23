<?php
$pattern = '/ca[kf]e/';
$text = 'He was eating cake in the cafe.';
echo 'The String is :  '.$text;
echo '<hr><h3>preg_match()</h3>';
if ( preg_match( $pattern, $text, $arrarys ) ) {
    print_r( $arrarys );
} else {
    echo 'Match not found.';
}

echo '<hr><h3>preg_match_all()</h3>';

if ( preg_match_all( $pattern, $text, $arrarys ) ) {
    print_r( $arrarys );
} else {
    echo 'Match not found.';
}
?>