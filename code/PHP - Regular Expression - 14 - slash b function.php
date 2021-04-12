<?php
/* The \b in the pattern indicates a word boundary, so only the distinct
* word 'web' is matched, and not a word partial like 'webbing' or 'cobweb' */
// - /b used to find the whole word

if ( preg_match( '/\bweb\b/i', 'PHP is the web scripting language of choice.' ) ) {
    echo 'A match was found.';
} else {
    echo 'A match was not found.';
}

echo '<br><br><hr><br><br>';

if ( preg_match( '/\bweb\b/i', 'PHP is the website scripting language of choice.' ) ) {
    echo 'A match was found as a whole word using \b function.';
} else {
    echo 'A match was not found as a whole word using \b function.';
}
?>