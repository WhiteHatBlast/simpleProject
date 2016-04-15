<?php
// A constant to be used as an error return status
define ('DB_CONNECTION_FAILED',1);

// Try connecting to MySQL
if ( !@mysql_connect('localhost','user','pass') ) {
    // Write to STDERR
    fwrite(STDERR,mysql_error()."\n");
    exit(DB_CONNECTION_FAILED);
}

fwrite(STDOUT,"Connected to database\n");
exit(0);
?>