<?php

function inserttechnicians( $ssn, $rank ) {
    $success = mysql_query ("
        INSERT INTO technicians (
            ssn,
            rank
        )
        VALUES (
            '$ssn',
            '$rank'
        )"
    );
     if ( !$success ) {
        die ('query fail' . mysql_error());
    }

   return $success;
}

function deletetechnicians ( $ssn) {
    $success = mysql_query (
        "DELETE FROM technicians
        WHERE ssn = '$ssn'"
    );

    return $success;
}

function updatetechnicians ( $ssn, $changing, $value ) {
    $success = mysql_query ("
        UPDATE technicians
        SET ". "$changing"." = '$value'
        WHERE ssn = '$ssn'"
    );

    if ( !$success ) die ('query fail'.mysql_error());
  	  return $success;
}

function listtech () {
    $res = mysql_query ("
        SELECT a.*, m.*
        FROM technicians a 
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
