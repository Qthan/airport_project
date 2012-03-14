<?php include 'header.php';

if ( !$getc ) {
    $get = $gett;
}
else if ( !$gett ) {
    $get = $getc;
}
?>

<script type="text/javascript" src="usableform.js"></script>

<form action = "change_employees.php" method = "post">
    <table>
        <tr> 
        <td> SSN </td> <td > <input type = "text" readonly = "readonly" value = " <?php echo $get[ 0 ];?> " name = "regnum" > </td>
        </tr>
        <tr> 
        <td> UMN </td> <td > <input type = "text" name = "carrier" value = "<?php echo $get [ 1 ]; ?>" > </td>
        </tr>
        <tr> 
        <td> First Name </td> <td > <input type = "text" name = "condate" value = "<?php echo $get[ 2 ]; ?>" > </td>
        </tr>
        <tr> 
        <td> Surname </td> <td > <input type = "text" name = "mcode" value = "<?php echo $get[ 3 ]; ?>" > </td>
        </tr>
        <tr> 
        <td> Address </td> <td > <input type = "text" name = "mcode" value = "<?php echo $get[ 4 ]; ?>" > </td>
        </tr>
        <tr> 
        <td> Phone </td> <td > <input type = "text" name = "mcode" value = "<?php echo $get[ 5 ]; ?>" > </td>
        </tr>
        <tr> 
        <td> Year of Birth </td> <td > <input type = "text" name = "mcode" value = "<?php echo $get[ 6 ]; ?>" > </td>
        </tr>
        <tr> 
        <td> Salary </td> <td > <input type = "text" name = "mcode" value = "<?php echo $get[ 7 ]; ?>" > </td>
        </tr>
       <tr>
            <td> Specialization: </td>
            <?php
            if ( $gett == $get ) { 
            ?>
            <td>
                <select name="spec">
                    <option value="none" rel="none"  >Without Specialazation </option>
                    <option value="tech" rel="tech" selected="selected"> Technician </option> 
                    <option value="contr" rel="contr" >Air Traffic Controler </option>
                </select>
            </td>
            <?php 
                }
            else if ( $getc == $get ) { 
            ?>
            <td>
                <select name="spec">
                    <option value="none" rel="none"  >Without Specialazation </option>
                    <option value="tech" rel="tech" > Technician </option> 
                    <option value="contr" rel="contr" selected="selected">Air Traffic Controler </option>
                </select>
            </td>
            <?php
                }
            else {
            ?>
            <td>
                <select name="spec">
                    <option value="none" rel="none"  selected="selected">Without Specialazation </option>
                    <option value="tech" rel="tech" > Technician </option> 
                    <option value="contr" rel="contr" >Air Traffic Controler </option>
                </select>
            </td>
            <?php
                }
            ?>
        </tr>
        <tr rel="tech">
            <td> Rank </td> <td> <input type="text" name ="rank" value ="<?php echo $get[ 9 ];?> " > </td>
        </tr>
         <tr rel="contr">
            <td> Last Examination Date </td> <td> <input type="text" name ="exdate" value ="<?php echo $get[ 9 ];?> "> </td>
            <td> Result </td> <td> <input type="text" name ="exres" value ="<?php echo $get[ 10 ];?> " > </td>
        </tr>
        <tr>
            <td> <input type = "submit" name = "submit" value = "submit"> </td>
        </tr>
    </table>

</form> 
<?php  include 'footer.php';
?>
