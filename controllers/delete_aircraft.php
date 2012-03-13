<?php
    include 'models/database.php';
    include 'models/aircraft.php';

    if ( (isset( $_POST[ 'delregnum' ] ) ) ) {
        deleteaircraft( $_POST[ 'delregnum' ] );
        header( 'Location: aircraft.php' );
    }
?>
