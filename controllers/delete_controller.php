<?php
    include 'models/database.php';
    include 'models/controllers.php';

    if ( (isset( $_POST[ 'delssn' ] ) ) ) {
        deletecontrollers( $_POST[ 'delssn' ] );
        header( 'Location: controllers.php' );
    }
?>
