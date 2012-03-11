<?php

function inserttechnician( $ssn, $rank ) {
    $success = mysql_query ("
        INSERT INTO technician (
            ssn,
            rank
        )
        VALUES (
            '$ssn',
            '$rank'
        )"
    );
    return $success;
}

function deletetechnician ( $ssn) {
    $success = mysql_query (
        "DELETE FROM technician
        WHERE ssn = '$ssn'"
    );

    return $success;
}

function updatetechnician ( $ssn, $changing, $value ) {
    $success = mysql_query ("
        UPDATE technician
        SET ". "$changing"." = '$value'
        WHERE ssn = '$ssn'"
    );

    if ( !$success ) die ('query fail'.mysql_error());
    return $success;
}

function listtech () {
    $res = mysql_query ("
        SELECT a.*, m.*
        FROM technician a 
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

