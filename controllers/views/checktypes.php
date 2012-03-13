<?php include 'header.php';
?>
<table>
    <tr>
        <th >Checktype ID</th>
        <th >Check Name</th>
        <th >Max Score</th>
    </tr>
<?php
foreach( $checktypes as $checktype ) {
    ?><tr>
        <td> <?php echo $checktype[0]; ?></td> 
        <td> <?php echo $checktype[1]; ?></td>
        <td> <?php echo $checktype[2]; ?></td>
        <td> 
            <form action = "delete_checktypes.php" method = "post">
                <input name = "delchecktypeid" type = "hidden" value = "<?php echo $checktype[0]; ?>">
                <input type = "submit" value = "delete">
            </form>
        </td>
        <td> 
            <form action = "update_checktypes.php" method = "post">
                <input name = "updchecktypeid" type = "hidden" value = "<?php echo $checktype[0]; ?>">
                <input type = "submit" value = "update">
            </form>
        </td>
      </tr>
    <?php } ?>
</table>

<p>
    <a href = 'insert_checktypes.php'>add checktype</a> 
</p>

    
<?php  include 'footer.php';
?>
