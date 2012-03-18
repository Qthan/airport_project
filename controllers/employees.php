<?php
    include 'models/database.php';
    include 'models/employees.php';

    $employees = listfromview();
    $sumcount = sumsalary();
    $sum = $sumcount[ 0 ];
    $count = $sumcount [ 1 ];
    $avg = ( $sum ) / ( $count );
    include 'views/employees.php';

?>
