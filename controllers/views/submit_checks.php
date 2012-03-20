<?php include 'header.php';
?>
<form id="checksform" class="cmxform" action = "submit_checks.php" method = "post">
    <table class= "formz">
        <tr> 
        <td> Registration Number </td> 
            <td>    
                <select name ="regnum">
                    <?php 
                    foreach ( $aircrafts as $aircraft ) {
                    ?>                
                    <option value = "<?php echo $aircraft[ 0 ];?>" > <?php echo $aircraft[ 0 ]; ?> </option>
                    <?php 
                    } 
                    ?>
                </select>
            </td>
        </tr>
        <tr> 
        <td> Checktype </td> 
            <td>    
                <select name ="checktypeid">
                    <?php 
                    foreach ( $checktypes as $checktype ) {
                    ?>                
                    <option value = "<?php echo $checktype[ 0 ];?>" > <?php echo $checktype[ 1 ]; ?> </option>
                    <?php 
                    } 
                    ?>
                </select>
            </td>
        </tr>
        <tr> 
            <td> Supervisor </td> 
            <td>    
                <select name ="ssn">
                    <?php 
                    foreach ( $technicians as $technician ) {
                    ?>                
                    <option  value = "<?php echo $technician [ 0 ]; ?>" > <?php echo $technician[ 2 ]." ".$technician[ 3 ]; ?> </option>
                    <?php 
                    } 
                    ?>
                </select>
            </td>
        </tr>
        <tr> 
            <td> Duration </td> <td > <input type = "text" name = "duration"> </td>
        </tr>
        <tr> 
            <td> Score </td> <td > <input type = "text" name = "score"> </td>
        </tr>
        <tr> 
            <td> Date </td> <td > <input type = "text" id = "datepicker" name = "date"> </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <div class="buttons">
                     <input type = "submit" name = "submit" value = "submit"> 
                </div>
            </td>
        </tr>
    </table>

<?php
     if ($error) {
?>
<div class = "errmsg">
<?php
        echo "*Score must be less than Maxscore";
    }
?>
</div>
</form> 
<?php  include 'footer.php';
?>
