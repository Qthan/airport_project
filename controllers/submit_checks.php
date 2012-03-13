<?php
    include 'models/database.php';
    include 'models/checks.php';

    if ( (isset( $_POST[ 'regnum' ] ) ) && (isset( $_POST[ 'checktypeid' ] ) ) && (isset( $_POST[ 'ssn' ] ) ) && (isset( $_POST[ 'duration' ] ) ) && (isset( $_POST[ 'score' ] ) ) ) {
        insertchecks( $_POST[ 'regnum' ], $_POST[ 'checktypeid' ], $_POST[ 'ssn' ], $_POST[ 'duration' ], $_POST[ 'score' ] );
        header( 'Location: checks.php' );
    }
?>

