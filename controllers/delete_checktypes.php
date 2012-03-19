<?php
    include 'models/database.php';
    include 'models/checktypes.php';

    if ( isset( $_POST[ 'delchecktypeid' ] ) ) {
        deletechecktypes( $_POST[ 'delchecktypeid' ]);
        header( 'Location: checks_tabs.php');
    }

?>
