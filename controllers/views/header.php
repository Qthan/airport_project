<!CTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="el" lang="el"> 
    <head>
        <title>My Base</title>
        <link rel="stylesheet" href="css/jquery-ui-1.8.18.custom.css">
        <link type="text/css" rel="stylesheet" href="css/style.css" />
	
		<script src="js/jquery-1.7.1.min.js"></script>
		<script src="js/jquery-ui-1.8.18.custom.min.js"></script>
		<script>
			$(document).ready(function() {
				$( "#datepicker" ).datepicker({
					dateFormat:'yy-mm-dd',
					changeMonth: true,
					changeYear: true,
                    maxDate: "+0w"
                });
			});
		</script>
        <script type="text/javascript" src="js/usableform.js"></script>
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
