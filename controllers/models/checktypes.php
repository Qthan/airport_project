<?php 

function insertchecktypes( $check_name, $max_score ) {
    $success = mysql_query ("
        INSERT INTO checktypes (
            checktypeid,
            check_name,
            maxscore
        )
        VALUES (
            NULL,
            '$check_name',
            '$max_score'
        )"
    );
    if ( !$success ) die ('query fail'.mysql_error());
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

function listchecktypes () {
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
 
function getchecktypes ( $checktypesid ) {
    $res = mysql_query ("
        SELECT *
        FROM checktypes
        WHERE checktypeid = '$checktypesid'
        LIMIT 1;"
    );

/*    if ( !$res ) die ('query fail'.mysql_error());
return $res;*/
    if ( mysql_num_rows ( $res ) == 1 ) {
        $checktype = mysql_fetch_array( $res );
        return $checktype;
    }
    else {
        return false;
    }
}
?>
