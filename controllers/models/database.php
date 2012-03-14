<?php
    $con = mysql_connect( 'localhost', 'root', 'vlc55555' );
    if (!$con){
                die('Could not connect: ' . mysql_error());
                    }
    mysql_select_db( 'project_airport', $con );
?>
