<?php
    include 'models/database.php';
    include 'models/checks.php';

    $stats = typegroup();
    $passes = typegroup_has();
    $pros = onlybypros();
    $idles = arazoun();

    include 'views/checks_stats.php';
?>
