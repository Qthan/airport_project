<?php
    include 'models/database.php';
    include 'models/checks.php';

    if ( ( isset( $_POST[ 'delcheckid' ] ))) {
        deletechecks( $_POST[ 'delcheckid' ] );
        header( 'Location: checks.php' );
    }
    
?>

