<?php
    include 'models/database.php';
    include 'models/employees.php';

    if ( (isset( $_POST[ 'delssn' ] ) ) ) {
        deleteemployees( $_POST[ 'delssn' ] );
        header( 'Location: employees.php' );
    }
?>
