<?php
    include 'models/database.php';
    include 'models/aircraft.php';
    include 'models/aircraft_model.php';

    if ( (isset( $_POST[ 'updregnum' ] ) ) ) {
        $get = getaircraft( $_POST[ 'updregnum' ] );
        $models = listmodel();
        include 'views/update_aircraft.php';
    }
?>
