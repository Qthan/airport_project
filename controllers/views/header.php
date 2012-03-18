<!CTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="el" lang="el"> 
    <head>
        <title>My Base</title>
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/jquery-ui-1.8.18.custom.css">
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
        <script>
            $(document).ready(function() {
                $( "input:submit, a, button", ".menu" ).button();
            });
        </script>
        <script>
            $(document).ready(function() {
                $( "input:submit, a, button", ".buttons" ).button();
            });
        </script>
        <script>
        $(document).ready(function() {
            $( "#tabs" ).tabs({
                ajaxOptions: {
                    error: function( xhr, status, index, anchor ) {
                        $( anchor.hash ).html(
                            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
                            "If this wouldn't be a demo." );
                    }  
                }
            });
        });
        </script>
        <script type="text/javascript" src="js/usableform.js"></script>
        <script src="js/jquery.validate.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
     </head>
    <body>
        <div class="logo">
            <h1><img src = "css/images/logo.png" alt = "airport logo"</h1>
        </div>
        <div class = "menu">
                <table >
                 <tr>
                   <td> <a href="emptabs.php" >employess</a> </td>
                   <td> <a href="aircraft.php" >planes</a> </td>
                   <td> <a href="checks.php" >checks </a></td>
                 </tr>
                </table>
        </div>
        <div class="content">
