<?php
    include 'models/database.php';
    include 'models/aircraft_model.php';

    if ( (isset( $_POST[ 'modelc' ] ) ) && (isset( $_POST[ 'modelname' ] ) ) && (isset( $_POST[ 'manufacturer' ] ) ) && (isset( $_POST[ 'capacity' ] ) ) && (isset( $_POST[ 'weight' ] ) ) ) {
        updatemodel( $_POST[ 'modelc' ], 'model_name', $_POST[ 'modelname' ]);
        updatemodel( $_POST[ 'modelc' ], 'manufacturer', $_POST[ 'manufacturer' ]);
        updatemodel( $_POST[ 'modelc' ], 'capacity', $_POST[ 'capacity' ]);
        updatemodel( $_POST[ 'modelc' ], 'weight', $_POST[ 'weight' ]);
        header( 'Location: planes_tabs.php' );
    }
?>

