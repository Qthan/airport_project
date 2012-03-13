<?php
    include 'models/database.php';
    include 'models/checks.php';

    $checks = listchecks();

    include 'views/checks.php';
?>
