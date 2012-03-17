<?php 
    include 'models/database.php';
    include 'models/aircraft_model.php';
    $models = listmodel();

    if ( isset( $_GET[ 'tech' ]) ){
        $add='tech';
    }
    else if( isset( $_GET[ 'contr' ]) ){
        $add='contr';
    }
    else $add='none';

    include 'views/submit_employee.php';
?>
