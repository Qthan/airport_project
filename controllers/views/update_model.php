<?php include 'header.php';
?>


<form class="cmxform" id="modelform" action = "change_model.php" method = "post">
    <table>
        <tr> 
        <td> Model Code</td> <td > <input type = "text" readonly = "readonly" value = " <?php echo $get[ 0 ];?> " name = "modelc" > </td>
        </tr>
        <tr> 
        <td> Model Name </td> <td > <input type = "text" name = "modelname" value = "<?php echo $get [ 1 ]; ?>" id="modelname" > </td>
        </tr>
        <tr> 
        <td> Manufacturer </td> <td > <input type = "text" name = "manufacturer" value = "<?php echo $get[ 2 ]; ?>" id="manufacturer" > </td>
        </tr>
        <tr> 
        <td> Capacity </td> <td > <input type = "text" name = "capacity" value = "<?php echo $get[ 3 ]; ?>" id="capacity" > </td>
        </tr>
        <tr> 
        <td> Weight </td> <td > <input type = "text" name = "weight" value = "<?php echo $get[ 4 ]; ?>" id="weight" > </td>
        </tr>
        <tr>
            <td> <input type = "submit" name = "submit" value = "submit"> </td>
        </tr>
    </table>

</form> 
<?php  include 'footer.php';
?>
