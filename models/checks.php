<?php 

function insertchecks( $reg_num, $checktypeid, $ssn, $duration, $score ) {
    $success = mysql_query ("
        INSERT INTO checks (
            checkid,
            reg_num,
            checktypeid,
            ssn,
            duration,
            score
        )
        VALUES (
            NULL,
            '$reg_num',
            '$checktypeid',
            '$ssn',
            '$duration',
            '$score'
        )"
    );
    if ( !$success ) die ('query fail'.mysql_error());
    return $success;
}


function deletechecks ( $checkid) {
    $success = mysql_query (
        "DELETE FROM checks
        WHERE checkid = '$checkid'"
    );

    if ( !$success ) die ('query fail'.mysql_error());
    return $success;
}

function updatechecks ( $checkid, $changing, $value ) {
    $success = mysql_query ("
        UPDATE checks
        SET ". "$changing"." = '$value'
        WHERE checkid = '$checkid'"
    );

    if ( !$success ) die ('query fail'.mysql_error());
    return $success;
}

function listchecks () {
    $res = mysql_query ("
        SELECT a.*, b.*, c.*, d.*
        FROM checks a 
        INNER JOIN checktypes b 
        ON a.checktypeid = b.checktypeid
        INNER JOIN aircraft c
        ON c.reg_num = a.reg_num
        INNER JOIN technicians d
        ON d.ssn = a.ssn"
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
