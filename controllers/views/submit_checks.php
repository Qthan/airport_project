<?php include 'header.php';
?>
<form action = "submit_checks.php" method = "post">
    <table>
        <tr> 
        <td> Registration Number </td> 
            <td>    
                <select name ="regnum">
                    <?php 
                    foreach ( $aircrafts as $aircraft ) {
                    ?>                
                    <option ><?php echo $aircraft[ 0 ]; ?> </option>
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
                    <option ><?php echo $checktype[ 1 ]; ?> </option>
                    <?php 
                    } 
                    ?>
                </select>
            </td>
        </tr>
        <tr> 
            <td> SSN </td> 
            <td>    
                <select name ="ssn">
                    <?php 
                    foreach ( $technicians as $technician ) {
                    ?>                
                    <option ><?php echo $technician[ 0 ]; ?> </option>
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
            <td> <input type = "submit" name = "submit" value = "submit"> </td>
        </tr>
    </table>

</form> 
<?php  include 'footer.php';
?>
