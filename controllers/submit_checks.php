<?php
    include 'models/database.php';
    include 'models/checks.php';

    if ( (isset( $_POST[ 'regnum' ] ) ) && (isset( $_POST[ 'checktypeid' ] ) ) && (isset( $_POST[ 'ssn' ] ) ) && (isset( $_POST[ 'duration' ] ) ) && (isset( $_POST[ 'score' ] ) ) && (isset( $_POST[ 'date' ] ) ) ) {
        insertchecks( $_POST[ 'regnum' ], $_POST[ 'checktypeid' ], $_POST[ 'ssn' ], $_POST[ 'duration' ], $_POST[ 'score' ], $_POST[ 'date' ] );
        header( 'Location: checks_tabs.php' );
    }
?>

