<?php/*<p>
    <a href = 'controllers.php'>view controllers</a>
    <a href = 'technicians.php'>view technicians</a>
    </p>
		<script src="js/jquery-1.7.1.min.js"></script>
		<script src="js/jquery-ui-1.8.18.custom.min.js"></script>
 */?>
        <script type="text/javascript" src = "js/myscripts.js"></script>
       
    <div class="tabsmenu">
        <a href = 'insert_employee.php'>add employee</a> 
    </div>
<div class="listing">
<table class="listing">
    <tr>
        <th >ssn</th>
        <th >umn</th>
        <th >Name</th>
        <th >Surrname</th>
        <th >Address</th>
        <th >Phone</th>
        <th >Year of Birth</th>
        <th >Salary</th>
        <th >Occupation</th>
        <th ></th>
        <th ></th>
    </tr>
<?php
foreach( $employees as $employee ) {
    ?><tr>
        <td> <?php echo $employee[0]; ?></td> 
        <td> <?php echo $employee[1]; ?></td>
        <td> <?php echo $employee[2]; ?></td>
        <td> <?php echo $employee[3]; ?></td>
        <td> <?php echo $employee[4]; ?></td>
        <td> <?php echo $employee[5]; ?></td>
        <td> <?php echo $employee[6]; ?></td>
        <td> <?php echo $employee[7]; ?></td>
        <td> <?php echo $employee[8]; ?></td>
        <td> 
            <form class ="buttons" action = "delete_employees.php" method = "post">
                <input name = "delssn" type = "hidden" value = "<?php echo $employee[0]; ?>">
                <input type = "submit" value = "delete">
            </form>
        </td>
        <td> 
            <form class ="buttons" action = "update_employees.php" method = "post">
                <input name = "updssn" type = "hidden" value = "<?php echo $employee[0]; ?>">
                <input type = "submit" value = "update">
            </form>
        </td>
      </tr>
    <?php } ?>
</table>
</div>
