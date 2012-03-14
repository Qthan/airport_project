<?php
    include 'models/database.php';
    include 'models/employees.php';
    include 'models/technicians.php';
    include 'models/controllers.php';
    
    if ( ( isset( $_POST[ 'ssn' ] ) ) && ( isset( $_POST[ 'umn' ] ) )  && ( isset( $_POST[ 'name' ] ) ) && ( isset( $_POST[ 'sname' ] ) ) && ( isset( $_POST[ 'salary' ] ) ) ) {
<<<<<<< HEAD
        insertemployees( $_POST[ 'ssn' ] , $_POST[ 'umn' ] , $_POST[ 'name' ] , $_POST[ 'sname' ] , $_POST[ 'address' ] , $_POST[ 'phone' ] , $_POST[ 'yob' ] , $_POST[ 'salary' ] );
            if ( isset( $_POST[ 'rank' ] ) ) {
                inserttechnicians( $_POST[ 'ssn' ], $_POST[ 'rank' ] );
            }
            if ( isset( $_POST[ 'exdate' ] ) && isset( $_POST[ 'exres' ] ) ) {
                insertcontrollers( $_POST[ 'ssn' ], $_POST[ 'exdate' ], $_POST[ 'exres' ]);
            }
=======
            
        insertemployees( $_POST[ 'ssn' ] , $_POST[ 'umn' ] , $_POST[ 'name' ] , $_POST[ 'sname' ] , $_POST[ 'address' ] , $_POST[ 'phone' ] , $_POST[ 'yob' ] , $_POST[ 'salary' ] );

        if (  isset( $_POST[ 'rank' ] ) ){
            inserttechnicians( $_POST[ 'ssn' ] , $_POST[ 'rank' ] );
        }


        else if ( ( isset( $_POST[ 'exdate' ] ) ) && ( isset( $_POST[ 'exres' ] ) ) ) {
            insertcontrollers( $_POST[ 'ssn' ] , $_POST[ 'exdate' ] , $_POST[ 'exres' ]);
        }
                                             
>>>>>>> 5251009486906f34604a5e9208576b75f7e26d78
       header( 'Location: employees.php' );
    }
?>

