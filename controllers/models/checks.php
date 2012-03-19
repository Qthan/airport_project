<?php 

function insertchecks( $reg_num, $checktypeid, $ssn, $duration, $score, $date ) {
    $success = mysql_query ("
        INSERT INTO checks (
            checkid,
            reg_num,
            checktypeid,
            ssn,
            duration,
            score,
            date
        )
        VALUES (
            NULL,
            '$reg_num',
            '$checktypeid',
            '$ssn',
            '$duration',
            '$score',
            '$date'
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
    SELECT a.*, b.*, c.*, d.*, e.*
    FROM checks a 
    INNER JOIN checktypes b 
    ON a.checktypeid = b.checktypeid
    INNER JOIN aircraft c
    ON c.reg_num = a.reg_num
    INNER JOIN technicians d
    ON d.ssn = a.ssn
    INNER JOIN employees e
    ON e.ssn = a.ssn"
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

function getchecks ( $checkid ) {
$res = mysql_query ("
    SELECT a.*, b.*, c.*, d.*, e.*
    FROM checks a 
    INNER JOIN checktypes b 
    ON a.checktypeid = b.checktypeid
    INNER JOIN aircraft c
    ON c.reg_num = a.reg_num
    INNER JOIN technicians d
    ON d.ssn = a.ssn
    INNER JOIN employees e
    ON e.ssn = a.ssn
    WHERE checkid = '$checkid'
    LIMIT 1;"
);

if ( mysql_num_rows ( $res ) == 1 ) {
    $check = mysql_fetch_array( $res );
    return $check;
}
else {
    return false;
}
}

function typegroup_has () {
$res = mysql_query("
    SELECT check_name, count( checkid )
    FROM checks 
    INNER JOIN checktypes
    ON checks.checktypeid = checktypes.checktypeid
    WHERE checks.score >= (checktypes.maxscore/2)
    GROUP BY check_name"
);

if ( !$res ) {
    die ( 'query fail'.mysql_error() );
}

while ( $row = mysql_fetch_array( $res ) ) {
    $rows[] = $row;
}

return $rows;
}

function onlybypros () {
$res = mysql_query("
    SELECT t.rank,e.surname,e.fname,count( c.checkid )
    FROM employees e
    INNER JOIN technicians t
    ON e.ssn = t.ssn
    INNER JOIN checks c
    ON c.ssn = t.ssn
    INNER JOIN checktypes ct
    ON c.checktypeid = ct.checktypeid
    GROUP BY t.ssn
    HAVING t.rank = 1"
);

if ( !$res ) {
    die ( 'query fail'.mysql_error() );
}

while ( $row = mysql_fetch_array( $res ) ) {
    $rows[] = $row;
}

return $rows;
}

function typegroup () {
$res = mysql_query("
    SELECT check_name, count( checkid )
    FROM checks 
    INNER JOIN checktypes
        ON checks.checktypeid = checktypes.checktypeid
        GROUP BY check_name"
    );

    if ( !$res ) {
        die ( 'query fail'.mysql_error() );
    }

    while ( $row = mysql_fetch_array( $res ) ) {
        $rows[] = $row;
    }

    return $rows;
}

function arazoun () {
    $res = mysql_query("
        SELECT e.fname, e.surname
        FROM employees e
        INNER JOIN technicians t
        ON e.ssn = t.ssn
        WHERE NOT EXISTS  ( SELECT em.*,te.*,c.*
                            FROM employees em
                            INNER JOIN technicians te
                            ON em.ssn = te.ssn
                            INNER JOIN checks c
                            ON c.ssn = te.ssn
                            WHERE em.ssn = e.ssn)"
    );
    if ( !$res ) {
        die ( 'query fail'.mysql_error() );
    }

    while ( $row = mysql_fetch_array( $res ) ) {
        $rows[] = $row;
    }

    return $rows;
}
?>
