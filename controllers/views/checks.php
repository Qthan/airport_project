<?php include 'header.php';
?>
<p>
    <a href = 'checktypes.php'>view checktypes</a>
</p>
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

<p>
    <a href = 'insert_checks.php'>add check</a> 
</p>

    <table>
    <?php
    foreach( $stats as $stat ) {
    ?><tr>
            <td> <?php echo $stat[0]; ?> </td>
            <td> <?php echo $stat[1]; ?> </td>
      </tr>
    <?php
    }
    ?>
    </table>

    <table>
    <?php
    foreach( $passes as $pass ) {
    ?><tr>
            <td> <?php echo $pass[0]; ?> </td>
            <td> <?php echo $pass[1]; ?> </td>
      </tr>
    <?php
    }
    ?>
    </table>

    <table>
    <?php
    foreach( $pros as $pro ) {
    ?><tr>
            <td> <?php echo $pro[3]; ?> </td>
            <td> <?php echo $pro[1]; ?> </td>
      </tr>
    <?php
    }
    ?>
    </table>

    <table>
    <?php
    foreach( $idles as $idle ) {
    ?><tr>
            <td> <?php echo $idle[0]; ?> </td>
            <td> <?php echo $idle[1]; ?> </td>
      </tr>
    <?php
    }
    ?>
    </table>
    
<?php  include 'footer.php';
?>
