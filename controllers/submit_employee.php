<?php
    include 'models/database.php';
    include 'models/employees.php';
    include 'models/technicians.php';
    include 'models/controllers.php';
    include 'models/aircraft_model.php';
    include 'models/expertises.php';
    
    if ( ( isset( $_POST[ 'ssn' ] ) ) && ( isset( $_POST[ 'umn' ] ) )  && ( isset( $_POST[ 'name' ] ) ) && ( isset( $_POST[ 'sname' ] ) ) && ( isset( $_POST[ 'salary' ] ) ) ) {
        insertemployees( $_POST[ 'ssn' ] , $_POST[ 'umn' ] , $_POST[ 'name' ] , $_POST[ 'sname' ] , $_POST[ 'address' ] , $_POST[ 'phone' ] , $_POST[ 'yob' ] , $_POST[ 'salary' ] );
            if ( isset( $_POST[ 'rank' ] ) && isset( $_POST[ 'mname'] ) ) {
                inserttechnicians( $_POST[ 'ssn' ], $_POST[ 'rank' ] );
//                $mcode = getmcode( $_POST[ 'mname' ] ); 
                insertexpertises( $_POST[ 'ssn' ], $_POST[ 'mname' ] );
            }
            if ( isset( $_POST[ 'exdate' ] ) && isset( $_POST[ 'exres' ] ) ) {
                insertcontrollers( $_POST[ 'ssn' ], $_POST[ 'exdate' ], $_POST[ 'exres' ]);
            }
       header( 'Location: employees.php' );
    }
?>

