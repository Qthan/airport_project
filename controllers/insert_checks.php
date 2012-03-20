<?php 
    include 'models/database.php';
    include 'models/aircraft.php';
    include 'models/checktypes.php';
    include 'models/technicians.php';
    $aircrafts = listing();
    $checktypes = listchecktypes();
    $technicians = listtech();

    if ( isset( $_GET[ 'error' ]) ){
        $error = true;
    }
    else {
        $error = false;
    }

    include 'views/submit_checks.php';
?>

