<?php
    include 'models/database.php';
    include 'models/aircraft_model.php';

    if ( (isset( $_POST[ 'delmodelcode' ] ) ) ) {
        deletemodel( $_POST[ 'delmodelcode' ] );
        header( 'Location: planes_tabs.php' );
    }
?>
