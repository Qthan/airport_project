<?php

function insertemployee( $ssn, $umn, $fname, $surname, $address, $phone, $yob, $salary ) {
    $success = mysql_query ("
        INSERT INTO employee (
            ssn,
            umn,
            fname,
            address,
            phone,
            yob,
            salary
        )
        VALUES (
            '$ssn',
            '$umn',
            '$fname',
            '$surnmae',
            '$address',
            '$phone',
            '$yob',
            '$salary'
        )"
    );
    return $success;
}


function deleteemployee ( $ssn) {
    $success = mysql_query (
        "DELETE FROM employee
        WHERE ssn = '$ssn'"
    );

    return $success;
}

function updateemployee ( $ssn, $changing, $value ) {
    $success = mysql_query ("
        UPDATE employee
        SET ". "$changing"." = '$value'
        WHERE ssn = '$ssn'"
    );

    if ( !$success ) die ('query fail'.mysql_error());
    return $success;
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
