<?php include 'header.php';
?>
<script type="text/javascript" src="usableform.js"></script>

<form action = "submit_employee.php" method = "post">
    <table>
        <tr> 
            <td> SSN </td> <td > <input type = "text" name = "ssn"> </td>
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
            <td> Specialazation: </td>
            <td>
                <select name="spec">
                    <option value="none" rel="none" selected="selected" >Without Specialazation </option>
                    <option value="tech" rel="tech" > Technician </option> 
                    <option value="contr" rel="contr" >Air Traffic Controler </option>
                </select>
            </td>
        </tr>
        <tr rel="tech">
            <td> Rank </td> <td> <input type="text" name ="rank" value ="notset" > </td>
        </tr>
         <tr rel="contr">
            <td> Last Examination Date </td> <td> <input type="text" name ="exdate" value ="notset"> </td>
            <td> Result </td> <td> <input type="text" name ="exres" value="notset"> </td>
        </tr>
        <tr>
            <td> <input type = "submit" name = "submit" value = "submit"> </td>
        </tr>
       
    </table>
</form> 
<?php  include 'footer.php';
?>