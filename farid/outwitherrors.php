<?php
// A custom error handler
function CliErrorHandler($errno, $errstr, $errfile, $errline) {
    fwrite(STDERR,"$errstr in $errfile on $errline\n");
}
// Tell PHP to use the error handler
set_error_handler('CliErrorHandler');

fwrite(STDOUT,"Opening file foobar.log\n");

// File does not exist - error is generated
if ( $fp = fopen('foobar.log','r') ) {
    // do something with the file here
    fclose($fp);
}

fwrite(STDOUT,"Job finished\n");
exit(0);
?>