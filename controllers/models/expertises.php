<?php 

function insertexpertises( $ssn, $model_code ) {
    $success = mysql_query ("
        INSERT INTO expertises (
            ssn,
            model_code
        )
        VALUES (
            '$ssn',
            '$model_code'
        )"
    );
    if ( !$success ) die ('query fail'.mysql_error());
    return $success;
}


function deleteexpertises ( $ssn, $model_code) {
    $success = mysql_query (
        "DELETE FROM expertises
        WHERE ssn = '$ssn' AND model_code='$model_code'"
    );

    return $success;
}

function updateexpertises ( $ssn, $model_code, $value ) {
    $success = mysql_query ("
        UPDATE expertises
        SET model_code = '$value'
        WHERE ssn = '$ssn' AND model_code = '$model_code'"
    );

    if ( !$success ) die ('query fail'.mysql_error());
    return $success;
}

function listexpertises () {
    $res = mysql_query ("
        SELECT a.*, m.*, n.*
        FROM expertises a 
        INNER JOIN technicians m
        ON a.ssn = m.ssn
        INNER JOIN employees n
        ON n.ssn = m.ssn"
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
