<?php
    include 'models/database.php';
    include 'models/aircraft.php';

    $aircrafts = listing();

    include 'views/aircraft.php';
?>
