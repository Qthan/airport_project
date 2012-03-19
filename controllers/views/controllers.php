<?php 
//  include 'header.php';
?>
        <script type="text/javascript" src = "js/myscripts.js"></script>

<div class = "tabsmenu">
    <a href = 'insert_controllers.php'>add controller</a> 
</div>

<table class = "listing">
    <tr>
        <th >ssn</th>
        <th >umn</th>
        <th >Name</th>
        <th >Surrname</th>
        <th >Address</th>
        <th >Phone</th>
        <th >Year of Birth</th>
        <th >Salary</th>
        <th >Check Date </th>
        <th >Check Result </th>
        <th ></th>
        <th ></th>
    </tr>
<?php
foreach( $controllers as $controller ) {
    ?><tr>
        <td> <?php echo $controller[3]; ?></td> 
        <td> <?php echo $controller[4]; ?></td>
        <td> <?php echo $controller[5]; ?></td>
        <td> <?php echo $controller[6]; ?></td>
        <td> <?php echo $controller[7]; ?></td>
        <td> <?php echo $controller[8]; ?></td>
        <td> <?php echo $controller[9]; ?></td>
        <td> <?php echo $controller[10]; ?></td>
        <td> <?php echo $controller[1]; ?></td>
        <td> <?php echo $controller[2]; ?></td>
        <td> 
            <form class ="buttons" action = "delete_controller.php" method = "post">
                <input name = "delssn" type = "hidden" value = "<?php echo $controller[3]; ?>">
                <input type = "submit" value = "delete">
            </form>
        </td>
        <td> 
            <form class ="buttons" action = "update_employees.php" method = "post">
                <input name = "updssn" type = "hidden" value = "<?php echo $controller[3]; ?>">
                <input type = "submit" value = "update">
            </form>
        </td>
      </tr>
    <?php } ?>
</table>
    
<?php 
    //include 'footer.php';

?>
