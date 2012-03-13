<?php include 'header.php';
?>
<form action = "submit_checks.php" method = "post">
    <table>
        <tr> 
            <td> Registration Number </td> <td > <input type = "text" name = "regnum"> </td>
        </tr>
        <tr> 
            <td> Checktype ID </td> <td > <input type = "text" name = "checktypeid"> </td>
        </tr>
        <tr> 
            <td> SSN </td> <td > <input type = "text" name = "ssn"> </td>
        </tr>
        <tr> 
            <td> Duration </td> <td > <input type = "text" name = "duration"> </td>
        </tr>
        <tr> 
            <td> Score </td> <td > <input type = "text" name = "score"> </td>
        </tr>
        <tr>
            <td> <input type = "submit" name = "submit" value = "submit"> </td>
        </tr>
    </table>

</form> 
<?php  include 'footer.php';
?>
