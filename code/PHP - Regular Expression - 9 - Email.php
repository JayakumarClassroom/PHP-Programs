<?php
$my_email = 'jayakumars@vit.ac.in';
if ( preg_match( "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $my_email ) ) {
    echo "$my_email is a valid email address";
} else {
    echo "$my_email is NOT a valid email address";
}

# "[/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.] {2, 5}$/]"
# Explanation,

# '/.../' starts and ends the regular expression
# '^[a-zA-Z0-9._-]' matches any lower or upper case letters, numbers between 0 and 9 and dots, underscores or dashes.
# '+@[a-zA-Z0-9-]' matches the @ symbol followed by lower or upper case letters, numbers between 0 and 9 or dashes.
#"+\.[a-zA-Z.] {2, 5}$/" escapes the dot using the backslash then matches any lower or upper case letters with a character length between 2 and 5 at the end of the string.

?>