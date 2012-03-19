
<script type="text/javascript" src = "js/myscripts.js"></script>

<div class="tabsmenu">
    <a href = 'insert_model.php'>add model</a> 
</div>

<table class = "listing">
    <tr>
        <th >Model Code</th>
        <th >Model Name</th>
        <th >Manufacturer</th>
        <th >Capacity</th>
        <th >Weight</th>
        <th ></th>
        <th ></th>

    </tr>
<?php
foreach( $models as $model ) {
    ?><tr>
        <td> <?php echo $model[0]; ?></td>
        <td> <?php echo $model[1]; ?></td>
        <td> <?php echo $model[2]; ?></td>
        <td> <?php echo $model[3]; ?></td>
        <td> <?php echo $model[4]; ?></td>
        <td> 
            <form class ="buttons" action = "delete_model.php" method = "post">
                <input name = "delmodelcode" type = "hidden" value = "<?php echo $model[0]; ?>">
                <input type = "submit" value = "delete">
            </form>
        </td>
        <td> 
            <form class ="buttons" action = "update_model.php" method = "post">
                <input name = "updmodelcode" type = "hidden" value = "<?php echo $model[0]; ?>">
                <input type = "submit" value = "update">
            </form>
        </td>
      </tr>
    <?php } ?>
</table>

