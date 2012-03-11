<?php 

function insertaircraft( $regno, $aircarrier, $con_date, $modelcode ) {
    $success = mysql_query ("
        INSERT INTO aircraft (
            reg_num,
            air_carrier,
            construction_date,
            model_code
        )
        VALUES (
            '$regno',
            '$aircarrier',
            '$con_date',
            '$modelcode'
        )"
    );
    return $success;
}


function deleteaircraft ( $regno) {
    $success = mysql_query (
        "DELETE FROM aircraft
        WHERE reg_num = '$regno'"
    );

    return $success;
}

function updateaircraft ( $regno, $changing, $value ) {
    $success = mysql_query ("
        UPDATE aircraft
        SET ". "$changing"." = '$value'
        WHERE reg_num = '$regno'"
    );

    if ( !$success ) die ('query fail'.mysql_error());
    return $success;
}

function listing () {
    $res = mysql_query ("
        SELECT a.*, m.*
        FROM aircraft a 
        INNER JOIN aircraft_model m 
        ON a.model_code = m.model_code"
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
