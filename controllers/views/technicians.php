<?php include 'header.php';
?>
<p>
</p>
<table>
    <tr>
        <th >ssn</th>
        <th >umn</th>
        <th >Name</th>
        <th >Surrname</th>
        <th >Address</th>
        <th >Phone</th>
        <th >Year of Birth</th>
        <th >Salary</th>
        <th >Rank</th>
    </tr>
<?php
foreach( $technicians as $technician ) {
    ?><tr>
        <td> <?php echo $technician[0]; ?></td> 
        <td> <?php echo $technician[3]; ?></td>
        <td> <?php echo $technician[4]; ?></td>
        <td> <?php echo $technician[5]; ?></td>
        <td> <?php echo $technician[6]; ?></td>
        <td> <?php echo $technician[7]; ?></td>
        <td> <?php echo $technician[8]; ?></td>
        <td> <?php echo $technician[9]; ?></td>
        <td> <?php echo $technician[1]; ?></td>
        <td> 
            <form action = "delete_technicians.php" method = "post">
                <input name = "delssn" type = "hidden" value = "<?php echo $technician[0]; ?>">
                <input type = "submit" value = "delete">
            </form>
        </td>
        <td> 
            <form action = "update_employees.php" method = "post">
                <input name = "updssn" type = "hidden" value = "<?php echo $technician[0]; ?>">
                <input type = "submit" value = "update">
            </form>
        </td>
      </tr>
    <?php } ?>
</table>

<p>
    <a href = 'insert_technicians.php'>add technician</a> 
</p>

    
<?php  include 'footer.php';
?>
