<?php
    include 'models/database.php';
    include 'models/employees.php';
    include 'models/technicians.php';
    include 'models/controllers.php';


    if ( ( isset( $_POST[ 'ssn' ] ) ) && ( isset( $_POST[ 'umn' ] ) )  && ( isset( $_POST[ 'fname' ] ) ) && ( isset( $_POST[ 'surname' ] ) ) && ( isset( $_POST[ 'salary' ] ) ) ){
        
            updateemployees( $_POST[ 'ssn' ] , 'umn', $_POST[ 'umn' ]);        
            updateemployees( $_POST[ 'ssn' ] , 'fname', $_POST[ 'fname' ]);        
            updateemployees( $_POST[ 'ssn' ] , 'surname', $_POST[ 'surname' ]);        
            updateemployees( $_POST[ 'ssn' ] , 'address', $_POST[ 'address' ]);        
            updateemployees( $_POST[ 'ssn' ] , 'phone', $_POST[ 'phone' ]);        
            updateemployees( $_POST[ 'ssn' ] , 'yob', $_POST[ 'yob' ]);        
            updateemployees( $_POST[ 'ssn' ] , 'salary', $_POST[ 'salary' ]);        


        if ( isset( $_POST[ 'rank' ] ) ){

            if ( isset( $_POST[ 'contr' ] ) ){
                
                deletecontrollers( $_POST[ 'ssn' ] );
                inserttechnicians( $_POST[ 'ssn' ] , $_POST[ 'rank' ] );
            }

            else if ( isset( $_POST[ 'none' ] ) ){
                
                inserttechnicians( $_POST[ 'ssn' ] , $_POST[ 'rank' ] );
            }
            
            else {
                
                updatetechnicians( $_POST[ 'ssn' ], 'rank' , $_POST[ 'rank' ] );
            
            }
        }

        else if (  (  isset( $_POST[ 'exdate' ] ) ) && ( isset( $_POST[ 'exres' ]  ) ) ){
            
            if ( isset( $_POST[ 'tech'] ) ){
                
                deletetechnicians( $_POST[ 'ssn' ] );
                insertcontrollers( $_POST[ 'ssn' ] , $_POST[  'exdate' ] , $_POST[ 'exres' ] );
            }

            else if ( isset( $_POST[ 'none' ]) ){
                
                insertcontrollers( $_POST[ 'ssn' ] , $_POST[  'exdate' ] , $_POST[ 'exres' ] );
            
            }
            
            else {
                
                updatecontrollers( $_POST[ 'ssn' ], 'check_date' , $_POST[  'exdate' ] );
                updatecontrollers( $_POST[ 'ssn' ], 'check_result' , $_POST[  'exdate' ] );
            
            }
        }

        else {
            
            if ( isset( $_POST[ 'tech' ] ) ){
                
                deletetechnicians( $_POST[ 'ssn' ] );
            
            }
            
            if ( isset( $_POST[ 'contr' ] ) ){
                
                deletecontrollers( $_POST[ 'ssn' ] );
            
            }
        }

       header( 'Location: employees.php' );
    }
?>

