
<?php
    include 'models/database.php';
    include 'models/checks.php';

    if ( (isset( $_POST[ 'updcheckid' ] ) ) ) {
        $get = getchecks( $_POST[ 'updcheckid' ] );
        include 'views/update_checks.php';
    }
?>
