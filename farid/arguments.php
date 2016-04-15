<?php
// Correct English grammar...
$argc > 1 ? $plural = 's' : $plural = '';

// Display the number of arguments received
fwrite(STDOUT,"Got $argc argument$plural\n");

// Write out the contents of the $argv array
foreach ( $argv as $key => $value ) {
    fwrite(STDOUT,"$key => $value\n");
}
?>