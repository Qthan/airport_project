<?php include 'header.php';
?>
<form action = "submit_model.php" method = "post">
    <table>
        <tr> 
            <td> Model Code </td> <td > <input type = "text" name = "model_code"> </td>
        </tr>
        <tr> 
            <td> Model Name </td> <td > <input type = "text" name = "model_name"> </td>
        </tr>
        <tr> 
            <td> Manufacturer </td> <td > <input type = "text" name = "manufacturer"> </td>
        </tr>
        <tr> 
            <td> Capacity </td> <td > <input type = "text" name = "capacity"> </td>
        </tr>
        <tr> 
            <td> Weight </td> <td > <input type = "text" name = "weight"> </td>
        </tr>
        <tr>
            <td> <input type = "submit" name = "submit" value = "submit"> </td>
        </tr>
    </table>

</form> 
<?php  include 'footer.php';
?>
