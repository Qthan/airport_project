<?php
    include 'models/database.php';
    include 'models/employees.php';
    
    $sumcount = sumsalary();
    $sum = $sumcount[ 0 ];
    $count = $sumcount [ 1 ];
    $avg = ( $sum ) / ( $count );
    include 'views/employees_stats.php';
?>
