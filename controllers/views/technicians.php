<?php //include 'header.php';
?>
    <script type="text/javascript" src = "js/tabscripts.js"></script>

<div class = "tabsmenu">
    <a href = 'insert_technicians.php'>add technician</a> 
</div>

<div class="listing">
<table class = "listing">
    <tr>
        <th>ssn</th>
        <th>umn</th>
        <th>Name</th>
        <th>Surrname</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Year of Birth</th>
        <th>Salary</th>
        <th>Rank</th>
        <th>Experts In</th>    
        <th ></th>
        <th ></th>
    </tr>
<?php
foreach( $technicians as $technician ) {
    ?><tr>
        <td> <?php echo $technician[0]; ?></td> 
        <td> <?php echo $technician[1]; ?></td>
        <td> <?php echo $technician[2]; ?></td>
        <td> <?php echo $technician[3]; ?></td>
        <td> <?php echo $technician[4]; ?></td>
        <td> <?php echo $technician[5]; ?></td>
        <td> <?php echo $technician[6]; ?></td>
        <td> <?php echo $technician[7]; ?></td>
        <td> <?php echo $technician[9]; ?></td>
        <td> <?php echo $technician[13];?></td>
        <td> 
            <form class ="buttons" action = "delete_technicians.php" method = "post">
                <input name = "delssn" type = "hidden" value = "<?php echo $technician[0]; ?>">
                <input type = "submit" value = "delete">
            </form>
        </td>
        <td> 
            <form class ="buttons" action = "update_employees.php" method = "post">
                <input name = "updssn" type = "hidden" value = "<?php echo $technician[0]; ?>">
                <input type = "submit" value = "update">
            </form>
        </td>
      </tr>
    <?php } ?>
</table>
</div>


    
<?php//  include 'footer.php';
?>
