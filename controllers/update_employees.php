<?php
    include 'models/database.php';
    include 'models/technicians.php';
    include 'models/controllers.php';

    if ( (isset( $_POST[ 'updssn' ] ) ) ) {
        $gett = gettechnicians( $_POST[ 'updssn' ] );
        $getc = getcontrollers( $_POST[ 'updssn' ] );
        include 'views/update_employees.php';
    }
?>
