<?php 
    include 'database.php';
    include 'aircraft.php';
    include 'aircraft_model.php';
    include 'employees.php';
    include 'checks.php';
    include 'checktypes.php';
    include 'technicians.php';
    include 'controllers.php';


    
    $list = listchecks();
    foreach( $list as $lala ) {
       echo "$lala[0]"; 
       echo "$lala[1]"; 
       echo "$lala[2]"; 
       echo "$lala[3]"; 
       echo "$lala[4]"; 
       echo "$lala[5]"; 
       echo "$lala[6]"; 
       echo "$lala[7]"; 
       echo "$lala[9]"; 
       echo "$lala[10]"; 
       echo "$lala[11]"; 
       echo "$lala[12]"; 
       echo "$lala[13]"; 
       echo "$lala[14]"; 
       echo "$lala[16]"; 
       echo "$lala[16]"; 
       echo "$lala[17]"; 
       echo "$lala[18]"; 
       echo "$lala[19]"; 
       echo "$lala[20]"; 
    }
 /*
    $list = listcont();
    foreach ($list as $lala ) {
       echo $lala[0]; 
       echo $lala[1]; 
       echo $lala[2]; 
       echo $lala[3]; 
       echo $lala[4]; 

    }
  */
?> 

