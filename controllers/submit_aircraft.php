<?php
    include 'models/database.php';
    include 'models/aircraft.php';

    if ( (isset( $_POST[ 'regnum' ] ) ) && (isset( $_POST[ 'carrier' ] ) ) && (isset( $_POST[ 'condate' ] ) ) && (isset( $_POST[ 'mcode' ] ) ) ) {
        insertaircraft( $_POST[ 'regnum' ], $_POST[ 'carrier' ], $_POST[ 'condate' ], $_POST[ 'mcode' ] );
        header( 'Location: aircraft.php' );
    }
?>

