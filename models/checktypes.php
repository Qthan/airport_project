<?php 

function insertchecktypes( $check_name, $max_score ) {
    $success = mysql_query ("
        INSERT INTO checktypes (
            checktypeid,
            check_name,
            max_score
        )
        VALUES (
            NULL,
            '$check_name',
            '$max_score'
        )"
    );
    return $success;
}


function deletechecktypes ( $checktypeid) {
    $success = mysql_query (
        "DELETE FROM checktypes
        WHERE checktypeid = '$checktypeid'"
    );

    return $success;
}

function updatechecktypes ( $checktypeid, $changing, $value ) {
    $success = mysql_query ("
        UPDATE checktypes
        SET ". "$changing"." = '$value'
        WHERE checktypeid = '$checktypeid'"
    );

    if ( !$success ) die ('query fail'.mysql_error());
    return $success;
}

function listchectypes () {
    $res = mysql_query ("
        SELECT *
        FROM checktypes"
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
