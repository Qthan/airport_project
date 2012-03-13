<!CTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="el" lang="el"> 
    <head>
        <title>My Base</title>
        <link type="text/css" rel="stylesheet" href="style.css" />
    </head>
    <body>
         <div class="users">
            <?php
            if ( isset( $username ) ) {
                ?><a href="logout.php" class="users">logout</a><?php
            }
            else {
                ?><a href="login.php" class="users">login</a><?php
            }
            ?>
        </div>
        <div class="logo">
            <h1>MyBase</h1>
        </div>
        <div class="menu">
            <table class="menu">
                <tr>
                   <td> <a href="employees.php" class="menu">employess</a> </td>
                   <td> <a href="aircraft.php" class="menu">planes</a> </td>
                   <td> <a href="checks.php" class="menu">checks </a></td>
                </tr>
            </table>
        </div>
        <div class="content">
