<?php
    include 'models/database.php';
    include 'models/technicians.php';

    if ( (isset( $_POST[ 'ssn' ] ) ) && (isset( $_POST[ 'rank' ] ) ) ) {
        inserttechnicians( $_POST[ 'ssn' ], $_POST[ 'rank' ] );
        header( 'Location: technicians.php' );
    }
?>
