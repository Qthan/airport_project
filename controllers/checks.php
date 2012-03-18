<?php
    include 'models/database.php';
    include 'models/checks.php';

    $checks = listchecks();
    $stats = typegroup();
    include 'views/checks.php';
?>
