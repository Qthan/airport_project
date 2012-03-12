<?php

function insertcontrollers( $ssn, $check_date, $check_result ) {
    $success = mysql_query ("
        INSERT INTO controllers (
            ssn,
            check_date,
            check_result
        )
        VALUES (
            '$ssn',
            '$check_date',
            '$check_result'
        )"
    );
    if ( !$success ) die ('query fail'.mysql_error());
    return $success;
}

function deletecontrollers ( $ssn) {
    $success = mysql_query (
        "DELETE FROM controllers
        WHERE ssn = '$ssn'"
    );

    return $success;
}

function updatecontrollers ( $ssn, $changing, $value ) {
    $success = mysql_query ("
        UPDATE controllers
        SET ". "$changing"." = '$value'
        WHERE ssn = '$ssn'"
    );

    if ( !$success ) die ('query fail'.mysql_error());
    return $success;
}

function listcont () {
    $res = mysql_query ("
        SELECT a.*, m.*
        FROM controllers a 
        INNER JOIN employees m 
        ON a.ssn = m.ssn"
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

