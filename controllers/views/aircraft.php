
<script type="text/javascript" src = "js/myscripts.js"></script>

<div class="tabsmenu">
    <a href = 'insert_aircraft.php'>add aircraft</a> 
</div>

<table class = "listing" >
        <th >Registration Number</th>
        <th >Air Carrier</th>
        <th >Construction Date</th>
        <th >Model Code</th>
        <th >Model Name</th>
        <th >Manufacturer</th>
        <th >Capacity</th>
        <th >Weight</th>
        <th ></th>
        <th ></th>
    </tr>
<?php
foreach( $aircrafts as $aircraft ) {
    ?><tr>
            <td> <?php echo $aircraft[0]; ?></td> 
            <td> <?php echo $aircraft[1]; ?></td>
            <td> <?php echo $aircraft[2]; ?></td>
            <td> <?php echo $aircraft[3]; ?></td>
            <td> <?php echo $aircraft[5]; ?></td>
            <td> <?php echo $aircraft[6]; ?></td>
            <td> <?php echo $aircraft[7]; ?></td>
            <td> <?php echo $aircraft[8]; ?></td>
            <td> 
                <form class ="buttons" action = "delete_aircraft.php" method = "post">
                    <input name = "delregnum" type = "hidden" value = "<?php echo $aircraft[0]; ?>">
                    <input  type = "submit" value = "delete">
                </form>
            </td>
            <td> 
                <form class ="buttons" action = "update_aircraft.php" method = "post">
                    <input name = "updregnum" type = "hidden" value = "<?php echo $aircraft[0]; ?>">
                    <input type = "submit" value = "update">
                </form>
            </td>
      </tr>
    <?php } ?>
</table>


    
