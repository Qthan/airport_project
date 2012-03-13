<?php
    include 'models/database.php';
    include 'models/aircraft.php';

    if ( (isset( $_POST[ 'regnum' ] ) ) && (isset( $_POST[ 'carrier' ] ) ) && (isset( $_POST[ 'condate' ] ) ) && (isset( $_POST[ 'mcode' ] ) ) ) {
        updateaircraft( $_POST[ 'regnum' ], 'air_carrier', $_POST[ 'carrier' ]);
        updateaircraft( $_POST[ 'regnum' ], 'construction_date', $_POST[ 'condate' ]);
        updateaircraft( $_POST[ 'regnum' ], 'model_code', $_POST[ 'mcode' ]);
        header( 'Location: aircraft.php' );
    }
?>

