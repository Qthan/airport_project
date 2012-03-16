<?php 
    include 'models/database.php';
    include 'models/aircraft.php';
    include 'models/checktypes.php';
    include 'models/technicians.php';
    $aircrafts = listing();
    $checktypes = listchecktypes();
    $technicians = listtech();
    include 'views/submit_checks.php';
    ?>
