<?php
    include 'models/database.php';
    include 'models/checktypes.php';

    $checktypes = listchecktypes();

    include 'views/checktypes.php';
?>
