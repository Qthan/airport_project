<?php
    include 'models/database.php';
    include 'models/technicians.php';

    if ( (isset( $_POST[ 'delssn' ] ) ) ) {
        deletetechnicians( $_POST[ 'delssn' ] );
        header( 'Location: employees_tabs.php' );
    }
?>
