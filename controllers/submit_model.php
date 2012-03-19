<?php
    include 'models/database.php';
    include 'models/aircraft_model.php';

    if ( (isset( $_POST[ 'model_name' ] ) ) && (isset( $_POST[ 'model_code' ] ) ) && (isset( $_POST[ 'manufacturer' ] ) ) && (isset( $_POST[ 'capacity' ] ) ) && (isset( $_POST[ 'weight' ] ) ) ) {
        insertmodel( $_POST[ 'model_code' ], $_POST[ 'model_name' ], $_POST[ 'manufacturer' ], $_POST[ 'capacity' ], $_POST[ 'weight' ] );
        header( 'Location: planes_tabs.php' );
    }
?>
