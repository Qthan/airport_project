<?php 
    include 'database.php';
    include 'aircraft.php';
    include 'aircraft_model.php';
    /*
    insertaircraft( 1, 'zoocarries', '2010-02-01', 10 );
     */
    //insertaircraft( 2, 'koncarries', '2010-02-01', 10 );
     

    /*
     $list = listing();
    foreach( $list as $lala ) {
       echo $lala[0]; 
       echo $lala[1]; 
       echo $lala[2]; 
       echo $lala[3]; 
       echo $lala[4]; 
       echo $lala[5]; 
       echo $lala[6]; 
       echo $lala[7]; 
       echo "\n"; 
    }
 */
//    updateaircraft( 2, 'construction_date', '1900-01-01') 

   // insertmodel( 11, 'f16', 'russia', 2, 1000); 
    updatemodel(11, 'manufacturer', 'ugada');
    /*$list = listmodel();
    foreach ($list as $lala ) {
       echo $lala[0]; 
       echo $lala[1]; 
       echo $lala[2]; 
       echo $lala[3]; 
       echo $lala[4]; 
    }
     */
//    deletemodel(11);
?> 

