<?php

function insertcontroller( $ssn, $check_date, $check_result ) {
    $success = mysql_query ("
        INSERT INTO controller (
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
    return $success;
}

function deletecontroller ( $ssn) {
    $success = mysql_query (
        "DELETE FROM controller
        WHERE ssn = '$ssn'"
    );

    return $success;
}

function updatecontroller ( $ssn, $changing, $value ) {
    $success = mysql_query ("
        UPDATE controller
        SET ". "$changing"." = '$value'
        WHERE ssn = '$ssn'"
    );

    if ( !$success ) die ('query fail'.mysql_error());
    return $success;
}

function listcont () {
    $res = mysql_query ("
        SELECT a.*, m.*
        FROM controller a 
        INNER JOIN employee m 
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

