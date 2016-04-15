<?php
fwrite(STDOUT, "Pick some colors (enter the letter and press return)\n");

// An array of choice to color
$colors = array (
    'a'=>'Red',
    'b'=>'Green',
    'c'=>'Blue',
);

fwrite(STDOUT, "Enter 'q' to quit\n");

// Display the choices
foreach ( $colors as $choice => $color ) {
    fwrite(STDOUT, "\t$choice: $color\n");
}

// Loop until they enter 'q' for Quit
do {
    // A character from STDIN, ignoring whitespace characters
    do {
        $selection = fgetc(STDIN);
    } while ( trim($selection) == '' );

    if ( array_key_exists($selection,$colors) ) {
        fwrite(STDOUT, "You picked {$colors[$selection]}\n");
    }

} while ( $selection != 'q' );

exit(0);
?>