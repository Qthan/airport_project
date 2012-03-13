<?php
    include 'models/database.php';
    include 'models/checktypes.php';

    if ( isset ( $_POST[ 'updchecktypeid' ] ) ) {
        $get = getchecktypes( $_POST[ 'updchecktypeid' ] );
        include 'views/update_checktypes.php';
    }

?>
