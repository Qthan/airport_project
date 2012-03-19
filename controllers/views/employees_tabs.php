<?php

    include 'views/header.php';
?>

<div  class = "rmenu">
    <ul>
        <li><a href = 'insert_employee.php'>add employee</a> </li>
        <li><a href = 'insert_technicians.php'>add technician</a> </li>
        <li><a href = 'insert_controllers.php'>add controller</a> </li>
    </ul>
</div>

<div id = "tabs">
    <ul>
        <li><a href = "employees.php">General</a></li>
        <li><a href = "technicians.php">Technicians</a></li>
        <li><a href = "controllers.php">Controllers</a></li>
        <li><a href = "employees_stats.php">Stats</a></li>
    </ul>
</div>

<?php
    include 'views/footer.php';
?>
