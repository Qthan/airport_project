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

function gettechnicians( $ssn ) {
    $res = mysql_query("
        SELECT a.*, b.*
        FROM employees a
        INNER JOIN technicians b
        ON a.ssn = b.ssn
        WHERE a.ssn = '$ssn'
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
