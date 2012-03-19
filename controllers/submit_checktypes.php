<?php
    include 'models/database.php';
    include 'models/checktypes.php';

    if ( (isset( $_POST[ 'checkname' ] ) ) && (isset( $_POST[ 'maxscore' ] ) ) ) {
        insertchecktypes( $_POST[ 'checkname' ], $_POST[ 'maxscore' ] );
        header( 'Location: checks_tabs.php' );
    }
?>

