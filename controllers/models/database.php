<?php
    $con = mysql_connect( 'localhost', 'root', 'lilalo5' );
    if (!$con){
                die('Could not connect: ' . mysql_error());
                    }
    mysql_select_db( 'project_airport', $con );
?>
