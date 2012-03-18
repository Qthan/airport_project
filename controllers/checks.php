<?php
    include 'models/database.php';
    include 'models/checks.php';

    $checks = listchecks();
    $stats = typegroup();
    $passes = typegroup_has();
    $pros = onlybypros();
    $idles = arazoun();
    include 'views/checks.php';
?>
