<?php
$str = 'Visit jayakumars.in website. Its jayakumar personal website.';
$pattern = '/jayakumar/i';
echo preg_match_all( $pattern, $str );
?>
