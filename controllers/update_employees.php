<?php
    include 'models/database.php';
    include 'models/employees.php';
    include 'models/technicians.php';
    include 'models/controllers.php';
    include 'models/aircraft_model.php';

    if ( (isset( $_POST[ 'updssn' ] ) ) ) {
        $gett = gettechnicians( $_POST[ 'updssn' ] );
        $getc = getcontrollers( $_POST[ 'updssn' ] );
        $emp =  getemployees( $_POST[ 'updssn' ] );
		$models = listmodel();
        include 'views/update_employees.php';
    }
?>
