<?php include 'header.php';

if ( ($getc!==false) ) {
    $get = $getc;
}
else if ($gett!==false ) {
    $get = $gett;
}
else {
    $get = $emp;
}
?>

<form action = "change_employees.php" method = "post">
    <table>
        <tr> 
        <td> SSN </td> <td > <input type = "text" readonly = "readonly" value = " <?php echo $get[ 0 ];?> " name = "ssn" > </td>
        </tr>
        <tr> 
        <td> UMN </td> <td > <input type = "text" name = "umn" value = "<?php echo $get [ 1 ]; ?>" > </td>
        </tr>
        <tr> 
        <td> First Name </td> <td > <input type = "text" name = "fname" value = "<?php echo $get[ 2 ]; ?>" > </td>
        </tr>
        <tr> 
        <td> Surname </td> <td > <input type = "text" name = "surname" value = "<?php echo $get[ 3 ]; ?>" > </td>
        </tr>
        <tr> 
        <td> Address </td> <td > <input type = "text" name = "address" value = "<?php echo $get[ 4 ]; ?>" > </td>
        </tr>
        <tr> 
        <td> Phone </td> <td > <input type = "text" name = "phone" value = "<?php echo $get[ 5 ]; ?>" > </td>
        </tr>
        <tr> 
        <td> Year of Birth </td> <td > <input type = "text" name = "yob" value = "<?php echo $get[ 6 ]; ?>" > </td>
        </tr>
        <tr> 
        <td> Salary </td> <td > <input type = "text" name = "salary" value = "<?php echo $get[ 7 ]; ?>" > </td>
        </tr>
       <tr>
            <td> Specialization: </td>
            <?php
            if ( $gett == $get ) { 
                $rank = $get[ 9 ];
            ?>
            <td>
                <select name="spec">
                    <option value="none" rel="none"  >Without Specialazation </option>
                    <option value="tech" rel="tech" selected="selected"> Technician </option> 
                    <option value="contr" rel="contr" >Air Traffic Controler </option>
                    <input name = "tech" type = "hidden" value = "set">
                </select>
            </td>
            <?php 
                }
            else if ( $getc == $get ) { 
                $date = $get[ 9 ];
                $result = $get [ 10 ];
            ?>
            <td>
                <select name="spec">
                    <option value="none" rel="none"  >Without Specialazation </option>
                    <option value="tech" rel="tech" > Technician </option> 
                    <option value="contr" rel="contr" selected="selected">Air Traffic Controler </option>
                </select>
                <input name = "contr" type = "hidden" value = "set">
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
                <input name = "none" type = "hidden" value = "set">
            </td>
            <?php
                }
            ?>
        </tr>
        <tr rel="tech">
            <td> Rank </td> <td> <input type="text" name  ="rank" value ="<?php echo $rank;?> " > </td>
        </tr>
         <tr rel="contr">
            <td> Last Examination Date </td> <td> <input type="text" name ="exdate" value ="<?php echo $date;?> "> </td>
            <td> Result </td> <td> <input type="text" name ="exres" value ="<?php echo $result;?> " > </td>
        </tr>
        <tr>
            <td> <input type = "submit" name = "submit" value = "submit"> </td>
        </tr>
    </table>

</form> 
<?php  include 'footer.php';
?>
