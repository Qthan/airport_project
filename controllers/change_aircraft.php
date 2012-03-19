<?php
    include 'models/database.php';
    include 'models/aircraft.php';

    if ( (isset( $_POST[ 'regnumb' ] ) ) && (isset( $_POST[ 'carrier' ] ) ) && (isset( $_POST[ 'condate' ] ) ) && (isset( $_POST[ 'mcode' ] ) ) ) {
        updateaircraft( $_POST[ 'regnumb' ], 'air_carrier', $_POST[ 'carrier' ]);
        updateaircraft( $_POST[ 'regnumb' ], 'construction_date', $_POST[ 'condate' ]);
        updateaircraft( $_POST[ 'regnumb' ], 'model_code', $_POST[ 'mcode' ]);
        header( 'Location: planes_tabs.php' );
    }
?>

