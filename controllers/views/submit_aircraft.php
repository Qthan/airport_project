<?php include 'header.php';
?>
<form action = "submit_aircraft.php" method = "post">
    <table>
        <tr> 
            <td> Registration Number </td> <td > <input type = "text" name = "regnum"> </td>
        </tr>
        <tr> 
            <td> Air Carrier </td> <td > <input type = "text" name = "carrier"> </td>
        </tr>
        <tr> 
            <td> Construction Date </td> <td > <input type = "text" name = "condate"> </td>
        </tr>
        <tr> 
            <td> Model Code </td> <td > <input type = "text" name = "mcode"> </td>
        </tr>
        <tr>
            <td> <input type = "submit" name = "submit" value = "submit"> </td>
        </tr>
    </table>

</form> 
<?php  include 'footer.php';
?>