<?php
    include 'models/database.php';
    include 'models/technicians.php';

    $technicians = listtech();

    include 'views/technicians.php';
?>
