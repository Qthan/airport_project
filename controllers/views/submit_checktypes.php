<?php include 'header.php';
?>
<form action = "submit_checktypes.php" method = "post">
    <table>
        <tr> 
            <td> Check Name </td> <td > <input type = "text" name = "checkname"> </td>
        </tr>
        <tr> 
            <td> Max Score </td> <td > <input type = "text" name = "maxscore"> </td>
        </tr>
        <tr>
            <td> <input type = "submit" name = "submit" value = "submit"> </td>
        </tr>
    </table>

</form> 
<?php  include 'footer.php';
?>
