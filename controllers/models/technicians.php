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
        SELECT a.*, b.*, x.*, m.*
        FROM employees a
        INNER JOIN technicians b
        ON a.ssn = b.ssn
        LEFT JOIN expertises x
        ON x.ssn = b.ssn
        LEFT JOIN aircraft_model m
        ON m.model_code = x.model_code
        WHERE a.ssn = '$ssn'
        LIMIT 1;            
        ");
    
    if ( !$res ) die ('query fail'.mysql_error());
        
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
        SELECT e.*, t.*, x.*, a.*
        FROM employees e
        INNER JOIN technicians t 
        ON e.ssn = t.ssn
        LEFT JOIN expertises x
        ON x.ssn = t.ssn
        LEFT JOIN aircraft_model a
        ON a.model_code = x.model_code"
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
