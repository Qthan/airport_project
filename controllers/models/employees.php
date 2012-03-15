<?php

function insertemployees( $ssn, $umn, $fname, $surname, $address, $phone, $yob, $salary ) {
    $success = mysql_query ("
        INSERT INTO employees (
            ssn,
            umn,
            fname,
            surname,
            address,
            phone,
            yob,
            salary
        )
        VALUES (
            '$ssn',
            '$umn',
            '$fname',
            '$surname',
            '$address',
            '$phone',
            '$yob',
            '$salary'
        )"
    );
//    if ( !$success ) die ('query fail'.mysql_error());
    return $success;
}

function getemployees( $ssn ) {
    $res = mysql_query("
        SELECT *
        FROM employees 
        WHERE ssn = '$ssn'
        LIMIT 1;            
        ");
        
    if ( mysql_num_rows ( $res ) == 1 ) {
        $check = mysql_fetch_array( $res );
        return $check;
    }
    else {
        return false;
    }
}

function deleteemployees ( $ssn) {
    $success = mysql_query (
        "DELETE FROM employees
        WHERE ssn = '$ssn'"
    );

    return $success;
}

function updateemployees ( $ssn, $changing, $value ) {
    if (($changing == 'ssn') || ($changing == 'umn'))
       return 0; 
    $success = mysql_query ("
        UPDATE employees
        SET ". "$changing"." = '$value'
        WHERE ssn = '$ssn'"
    );

    if ( !$success ) die ('query fail'.mysql_error());
    return mysql_affected_rows();
}

function listemployees () {
    $res = mysql_query ("
        SELECT *
        FROM employees" 
    );
    if ( !$res ) {
        die ('query fail' . mysql_error());
    }

    $rows = array();
    while ( $row = mysql_fetch_array( $res ) ) {
        $rows[] = $row;
    }

    return $rows;
}
 
?>
