<?php include 'header.php';
?>
<form action = "change_aircraft.php" class="cmxform" id="aircraftform" method = "post">
    <table>
        <tr> 
        <td> Registration Number </td> <td > <input type = "text" readonly = "readonly" value = " <?php echo $get[ 0 ];?> " name = "regnumb"  > </td>
        </tr>
        <tr> 
        <td> Air Carrier </td> <td > <input type = "text" name = "carrier" value = "<?php echo $get[ 1 ]; ?>" id="carrier" > </td>
        </tr>
        <tr> 
        <td> Construction Date </td> <td > <input type = "text" id="datepicker" name = "condate" value = "<?php echo $get[ 2 ]; ?>" > </td>
        </tr>
        <tr> 
        <td> Model Code </td> 
        <td>    
            <select name ="mcode" >
            <?php 
                foreach ( $models as $model ) {
                ?>                
                <option value="<?php echo $model[ 0 ] ?>" <?php if ( $get[ 3 ] == $model[ 0 ] ) { ?> selected = "selected" <?php } ?> >
                <?php echo $model[ 1 ];?>
                </option>
                <?php 
                }
            ?>
            </select>
        </td>
        </tr>
        <tr>
            <td> <input type = "submit" name = "submit" value = "submit"> </td>
        </tr>
    </table>

</form> 
<?php  include 'footer.php';
?>
