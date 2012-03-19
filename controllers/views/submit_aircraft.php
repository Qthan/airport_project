<?php include 'header.php';
?>

<form class="cmxform" id="aircraftform" action = "submit_aircraft.php" method = "post">
    <table class= "formz">
    <tbody>
        <tr> 
            <td> Registration Number </td> <td > <input type = "text" id = "regnum" name = "regnum"> </td>
        </tr>
        <tr> 
            <td> Air Carrier </td> <td > <input type = "text" id = "carrier" name = "carrier"> </td>
        </tr>
        <tr> 
            <td> Construction Date </td> <td > <input type = "text" name = "condate" id="datepicker"> </td>
        </tr>
        <tr> 
            <td> Model Name </td>
        <td>    
            <select name ="mname">
                <?php 
                foreach ( $models as $model ) {
                ?>                
                <option value="<?php echo $model[ 0 ] ?>"><?php echo $model[ 1 ]; ?> </option>
                <?php 
                } 
                ?>

            </select>
        </td>
        </tr>
        </tbody>    
    <tr>
            <td> 
            </td>
            <td> 
                <div class="buttons">
                    <input type = "submit" name = "submit" value = "submit"> 
                </div>
            </td>
        </tr>
    
    </table>

</form> 
<?php  include 'footer.php';
?>
