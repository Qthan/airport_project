<?php include 'header.php';
?>

<form class="cmxform" id="employeesform" action = "submit_employee.php" method = "post">
    <table>
        <tr> 
            <td> SSN </td> <td > <input type = "text" name = "ssn" id="ssn"> </td>
        </tr>
        <tr> 
            <td> UMN </td> <td > <input type = "text" name = "umn"> </td>
        </tr>
        <tr> 
            <td> Name </td> <td > <input type = "text" name = "name"> </td>
        </tr>
        <tr> 
            <td> Surname </td> <td > <input type = "text" name = "sname"> </td>
        </tr>
            <tr> 
            <td> Address </td> <td > <input type = "text" name = "address"> </td>
        </tr>
        <tr> 
            <td> Phone </td> <td > <input type = "text" name = "phone"> </td>
        </tr>
        <tr> 
            <td> Year of Birth </td> <td > <input type = "text" name = "yob"> </td>
        </tr>
        <tr> 
            <td> Salary </td> <td > <input type = "text" name = "salary"> </td>
        </tr>
       <tr>
            <td> Occupation </td>
            <td>
                <select name="spec">
                    <option value="none" rel="none" <?php if ( $add==='none' ){?> selected="selected" <?php } ?> >Without Specialazation</option>
                    <option value="tech" rel="tech" <?php if ( $add==='tech' ){?> selected="selected" <?php } ?> >Technician</option> 
                    <option value="contr" rel="contr" <?php if ( $add==='contr' ){?> selected="selected" <?php } ?>  >Air Traffic Controler </option>
                </select>
            </td>
        </tr>
        <tr rel="tech">
            <td> Rank </td> <td> <input type="text" name ="rank" > </td>
        </tr>
        <tr rel="tech"> 
            <td> Specialization </td>
            <td>
                <select name ="mname">
                    <?php 
                    foreach ( $models as $model ) {
                    ?>                
                    <option value="<?php echo $model[ 0 ]; ?>"><?php echo $model[ 1 ]; ?> </option>
                    <?php 
                    } 
                    ?>
                </select>
            </td>
        </tr>
         <tr rel="contr">
            <td> Last Examination Date </td> <td> <input type="text" name ="exdate" id="datepicker"> </td>
        </tr>
         <tr rel="contr">
            <td> Result </td> <td> <input type="text" name ="exres" > </td>
        </tr>
        <tr>
            <td> <input type = "submit" name = "submit" value = "submit"> </td>
        </tr>
       
    </table>
</form> 
<?php  include 'footer.php';
?>
