<?php
    include 'models/database.php';
    include 'models/employees.php';

    $employees = listfromview();
    include 'views/employees.php';

?>
