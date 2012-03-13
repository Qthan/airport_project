<?php
    include 'models/database.php';
    include 'models/aircraft_model.php';

    if ( (isset( $_POST[ 'modelcode' ] ) ) && (isset( $_POST[ 'modelname' ] ) ) && (isset( $_POST[ 'manufacturer' ] ) ) && (isset( $_POST[ 'capacity' ] ) ) && (isset( $_POST[ 'weight' ] ) ) ) {
        updatemodel( $_POST[ 'modelcode' ], 'model_name', $_POST[ 'modelname' ]);
        updatemodel( $_POST[ 'modelcode' ], 'manufacturer', $_POST[ 'manufacturer' ]);
        updatemodel( $_POST[ 'modelcode' ], 'capacity', $_POST[ 'capacity' ]);
        updatemodel( $_POST[ 'modelcode' ], 'weight', $_POST[ 'weight' ]);
        header( 'Location: aircraft_model.php' );
    }
?>

