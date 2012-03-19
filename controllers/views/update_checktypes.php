<?php include 'header.php';
?>
<form class="cmxform" id="checktypesform" action = "change_checktypes.php" method = "post">
    <table class = "formz">
        <tr> 
        <td> Checktype ID </td> <td > <input type = "text" readonly = "readonly" value = " <?php echo $get[ 0 ];?> " name = "checktypeid" > </td>
        </tr>
        <tr> 
        <td> Check Name </td> <td > <input type = "text"  name = "checkname" value = "<?php echo $get[ 1 ]; ?>" > </td>
        </tr>
        <tr> 
        <td> Max Score </td> <td > <input type = "text" name = "maxscore" value = "<?php echo $get[ 2 ]; ?>" > </td>
        </tr>
        <tr>
            <td>
            </td>
            <td> 
                <div class = "buttons">
                    <input type = "submit" name = "submit" value = "submit"> 
                </div>
            </td>
        </tr>
    </table>

</form> 
<?php  include 'footer.php';
?>
