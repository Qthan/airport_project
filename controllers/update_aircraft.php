<?php
    include 'models/database.php';
    include 'models/aircraft.php';

    if ( (isset( $_POST[ 'updregnum' ] ) ) ) {
        $get = getaircraft( $_POST[ 'updregnum' ] );
        include 'views/update_aircraft.php';
    }
?>
