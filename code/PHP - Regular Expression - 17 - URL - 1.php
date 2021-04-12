<?php
  $url = 'www.jayakumars.in';
  if ( preg_match( "/(^([www.]?)[0-9a-z_.]+.[a-z.]{1,5}$)/", $url ) ) {
    echo 'Matched';
  } else {
    echo 'Not matched';
  }
  //Output: Matched
  
?>