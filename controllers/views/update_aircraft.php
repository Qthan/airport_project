<?php include 'header.php';
?>
<form action = "change_aircraft.php" method = "post">
    <table>
        <tr> 
        <td> Registration Number </td> <td > <input type = "text" readonly = "readonly" value = " <?php echo $get[ 0 ];?> " name = "regnum" > </td>
        </tr>
        <tr> 
        <td> Air Carrier </td> <td > <input type = "text" name = "carrier" value = "<?php echo $get [ 1 ]; ?>" > </td>
        </tr>
        <tr> 
        <td> Construction Date </td> <td > <input type = "text" name = "condate" value = "<?php echo $get[ 2 ]; ?>" > </td>
        </tr>
        <tr> 
        <td> Model Code </td> <td > <input type = "text" name = "mcode" value = "<?php echo $get[ 3 ]; ?>" > </td>
        </tr>
        <tr>
            <td> <input type = "submit" name = "submit" value = "submit"> </td>
        </tr>
    </table>

</form> 
<?php  include 'footer.php';
?>
