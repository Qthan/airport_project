<table class="listing">

    <tr>
        <th>Checktype</th>
        <th># Checks</th>
    </tr>
<?php
    if ( $stats ){
        foreach( $stats as $stat ) {
        ?><tr>
                <td> <?php echo $stat[0]; ?> </td>
                <td> <?php echo $stat[1]; ?> </td>
          </tr>
        <?php
        }
    }
    ?>
</table>

<table class="listing">
    <tr>
        <th>Checktype</th>
        <th># Approved Checks</th>
    </tr>
    <?php
    if ( $passes ){
        foreach( $passes as $pass ) {
        ?><tr>
                <td> <?php echo $pass[0]; ?> </td>
                <td> <?php echo $pass[1]; ?> </td>
          </tr>
        <?php
        }
    }
    ?>
</table>

<table class="listing">
    <tr>
        <th>Highest Ranked Technicians</th>
        <th># Checks</th>
    </tr>
    <?php
    if ( $pros ) {
        foreach( $pros as $pro ) {
        ?><tr>
                <td> <?php echo $pro[1]." ".$pro[2]; ?> </td>
                <td> <?php echo $pro[3]; ?> </td>
          </tr>
        <?php
        }
    }
    ?>
</table>

<table class="listing">
    <tr>
        <th>Idle Technicians</th>
    </tr>
    <?php
    if ($idles){
        foreach( $idles as $idle ) {
        ?><tr>
                <td> <?php echo $idle[0]." ".$idle[1]; ?> </td>
          </tr>
        <?php
        }
    }
    ?>
</table>
