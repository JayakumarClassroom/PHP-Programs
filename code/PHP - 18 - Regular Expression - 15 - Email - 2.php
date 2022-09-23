<?php

$emails = [
    'luke@gmail.com',
    'andy@yahoocom',
    '34234sdfa#2345',
    'f344@gmail.com'
];

# regular expression for emails
$pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,18}$/";

foreach ( $emails as $email ) {

    if ( preg_match( $pattern, $email ) ) {
        echo "$email  - matches <br>";
    } else {
        echo "$email  - does not match <br>";
    }
}

?>