<?php

    include 'database.php';
    $sql = "CREATE VIEW employees_spec AS
            SELECT e.*,
            ( CASE WHEN t.ssn IS NOT NULL THEN 'technician'
              WHEN c.ssn IS NOT NULL THEN 'controller'
              ELSE '' END ) AS spec 
        FROM
            employees e
            LEFT JOIN technicians t
            ON e.ssn = t.ssn
            LEFT JOIN controllers c
            ON c.ssn = e.ssn;";

    mysql_query( $sql, $con );    
?>
