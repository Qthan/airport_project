<?php
    include 'models/database.php';
    include 'models/checks.php';

    if ( (isset( $_POST[ 'regnum' ] ) ) && (isset( $_POST[ 'checkid' ] ) ) && (isset( $_POST[ 'checkname' ] ) ) && (isset( $_POST[ 'supervisor' ] ) ) && (isset( $_POST[ 'duration' ] ) ) && (isset( $_POST[ 'score' ] ) ) && (isset( $_POST[ 'date' ] ) ) ) {
        updatechecks( $_POST[ 'checkid' ], 'duration', $_POST[ 'duration' ]);
        updatechecks( $_POST[ 'checkid' ], 'score', $_POST[ 'score' ]);
        updatechecks( $_POST[ 'checkid' ], 'date', $_POST[ 'date' ]);
        header( 'Location: checks_tabs.php' );
    }
?>

