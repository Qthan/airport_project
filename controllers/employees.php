<?php
    include 'models/database.php';
    include 'models/employees.php';

    $employees = listemployees();

    include 'views/employees.php';
?>
