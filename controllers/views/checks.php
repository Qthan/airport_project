<script type="text/javascript" src = "js/myscripts.js"></script>

<div class = "tabsmenu">
    <a href = 'insert_checks.php'>add check</a>
</div>

<table class = "listing">
    <tr>
        <th >Registration Number</th>
        <th >Check ID</th>
        <th >Check Name</th>
        <th >Supervisor</th>
        <th >Duration</th>
        <th >Score</th>
        <th >Max Score</th>
        <th >Date</th>
        <th ></th>
        <th ></th>
    </tr>
<?php
foreach( $checks as $check ) {
    ?><tr>
        <td> <?php echo $check[1]; ?></td> 
        <td> <?php echo $check[0]; ?></td>
        <td> <?php echo $check[8]; ?></td>
        <td> <?php echo $check[19]." ".$check[18]; ?></td>
        <td> <?php echo $check[4]; ?></td>
        <td> <?php echo $check[5]; ?></td>
        <td> <?php echo $check[9]; ?></td>
        <td> <?php echo $check[6]; ?></td>
        <td> 
            <form class ="buttons" action = "delete_checks.php" method = "post">
                <input name = "delcheckid" type = "hidden" value = "<?php echo $check[0]; ?>">
                <input type = "submit" value = "delete">
            </form>
        </td>
        <td> 
            <form class ="buttons" action = "update_checks.php" method = "post">
                <input name = "updcheckid" type = "hidden" value = "<?php echo $check[0]; ?>">
                <input type = "submit" value = "update">
            </form>
        </td>
      </tr>
    <?php } ?>
</table>

    
