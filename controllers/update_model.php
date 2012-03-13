<?php
    include 'models/database.php';
    include 'models/aircraft_model.php';

    if ( (isset( $_POST[ 'updmodelcode' ] ) ) ) {
        $get = getmodel( $_POST[ 'updmodelcode' ] );
        include 'views/update_model.php';
    }
?>
