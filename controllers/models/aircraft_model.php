<?php

function insertmodel( $code, $name, $man, $cap, $weight ) {
    $success = mysql_query ("
        INSERT INTO aircraft_model (
            model_code,
            model_name,
            manufacturer,
            capacity,
            weight
        )
        VALUES (
            '$code',
            '$name',
            '$man',
            '$cap',
            '$weight'
        )"
    );
    return $success;
}

function deletemodel ( $code) {
    $success = mysql_query (
        "DELETE FROM aircraft_model
        WHERE model_code = '$code'"
    );

    return $success;
}
    
function updatemodel ( $code, $changing, $value ) {
    $success = mysql_query ("
        UPDATE aircraft_model
        SET ". "$changing"." = '$value'
        WHERE model_code = '$code'"
    );

    if ( !$success ) die ('query fail'.mysql_error());
    return $success;
}

function listmodel () {
    $res = mysql_query ("
        SELECT *
        FROM aircraft_model"
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

function getmodel ( $modelcode ) {
    $res = mysql_query ("
        SELECT *
        FROM aircraft_model
        WHERE model_code = '$modelcode'
        LIMIT 1;"
    );

    if ( mysql_num_rows ( $res ) == 1 ) {
        $model = mysql_fetch_array( $res );
        return $model;
    }
    else {
        return false;
    }
}

?>
