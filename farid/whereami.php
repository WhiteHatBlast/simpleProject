<?php
if ( realpath($_SERVER['argv'][0]) == __FILE__ ) {
    fwrite(STDOUT,'You executed "$ php whereami.php"');
} else {
    fwrite(STDOUT,'You executed "$ whereami.php"');
}
?>