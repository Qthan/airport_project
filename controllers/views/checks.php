<?php include 'header.php';
?>
<p>
    <a href = 'checktypes.php'>view checktypes</a>
</p>
<table>
    <tr>
        <th >Registration Number</th>
        <th >Check ID</th>
        <th >Check Name</th>
        <th >Supervisor</th>
        <th >Duration</th>
        <th >Score</th>
        <th >Max Score</th>
    </tr>
<?php
foreach( $checks as $check ) {
    ?><tr>
        <td> <?php echo $check[1]; ?></td> 
        <td> <?php echo $check[0]; ?></td>
        <td> <?php echo $check[7]; ?></td>
        <td> <?php echo $check[18]." ".$check[17]; ?></td>
        <td> <?php echo $check[4]; ?></td>
        <td> <?php echo $check[5]; ?></td>
        <td> <?php echo $check[8]; ?></td>
        <td> 
            <form action = "delete_checks.php" method = "post">
                <input name = "delcheckid" type = "hidden" value = "<?php echo $check[0]; ?>">
                <input type = "submit" value = "delete">
            </form>
        </td>
        <td> 
            <form action = "update_checks.php" method = "post">
                <input name = "updcheckid" type = "hidden" value = "<?php echo $check[0]; ?>">
                <input type = "submit" value = "update">
            </form>
        </td>
      </tr>
    <?php } ?>
</table>

<p>
    <a href = 'insert_checks.php'>add check</a> 
</p>

    
<?php  include 'footer.php';
?>
