<?php include 'header.php';
?>
<form class="cmxform" id="checktypesform" action = "submit_checktypes.php" method = "post">
    <table class= "formz">
        <tr> 
            <td> Check Name </td> <td > <input type = "text" name = "checkname"> </td>
        </tr>
        <tr> 
            <td> Max Score </td> <td > <input type = "text" name = "maxscore"> </td>
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

</form> 
<?php  include 'footer.php';
?>
