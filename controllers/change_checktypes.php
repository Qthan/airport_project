<?php
    include 'models/database.php';
    include 'models/checktypes.php';

    if ( isset( $_POST[ 'checktypeid' ] ) && (isset( $_POST[ 'checkname' ] ) ) && (isset( $_POST[ 'maxscore' ] ) ) ) {
        updatechecktypes( $_POST[ 'checktypeid' ], 'check_name', $_POST[ 'checkname' ]);
        updatechecktypes( $_POST[ 'checktypeid' ], 'maxscore', $_POST[ 'maxscore' ]);
        header( 'Location: checks_tabs.php' );
    }
?>

