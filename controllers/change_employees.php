<?php
    include 'models/database.php';
    include 'models/employees.php';
    include 'models/technicians.php';
    include 'models/controllers.php';
    include 'models/expertises.php';


    if ( ( isset( $_POST[ 'ssnro' ] ) ) && ( isset( $_POST[ 'umn' ] ) )  && ( isset( $_POST[ 'fname' ] ) ) && ( isset( $_POST[ 'surname' ] ) ) && ( isset( $_POST[ 'salary' ] ) ) ){
        
            updateemployees( $_POST[ 'ssnro' ] , 'umn', $_POST[ 'umn' ]);        
            updateemployees( $_POST[ 'ssnro' ] , 'fname', $_POST[ 'fname' ]);        
            updateemployees( $_POST[ 'ssnro' ] , 'surname', $_POST[ 'surname' ]);        
            updateemployees( $_POST[ 'ssnro' ] , 'address', $_POST[ 'address' ]);        
            updateemployees( $_POST[ 'ssnro' ] , 'phone', $_POST[ 'phone' ]);        
            updateemployees( $_POST[ 'ssnro' ] , 'yob', $_POST[ 'yob' ]);        
            updateemployees( $_POST[ 'ssnro' ] , 'salary', $_POST[ 'salary' ]);        


        if ( isset( $_POST[ 'rank' ] ) ){

            if ( isset( $_POST[ 'contr' ] ) ){
                
                deletecontrollers( $_POST[ 'ssnro' ] );
                inserttechnicians( $_POST[ 'ssnro' ] , $_POST[ 'rank' ] );
                if ( $_POST[ 'mname' ] != 'notset' ){
                    insertexpertises( $_POST[ 'ssnro' ] , $_POST[ 'mname' ]);
                }
            }

            else if ( isset( $_POST[ 'none' ] ) ){
                
                inserttechnicians( $_POST[ 'ssnro' ] , $_POST[ 'rank' ] );
                if ( $_POST[ 'mname' ] != 'notset' ){
                    insertexpertises( $_POST[ 'ssnro' ] , $_POST[ 'mname' ]);
                }
            }
            else {
                
                updatetechnicians( $_POST[ 'ssnro' ], 'rank' , $_POST[ 'rank' ] );
                
                if ( $_POST[ 'mname' ] != 'notset' ){
                
                    if ( isset ($_POST[ 'hasexp' ] ) ){

                        updateexpertises( $_POST[ 'ssnro' ] , $_POST[ 'hasexp' ] , $_POST[ 'mname' ]);
                    }
                
                    else {
                       
                        insertexpertises( $_POST[ 'ssnro' ] , $_POST[ 'mname' ]);
                    }
                }
                
                else {
                
                    if ( isset ($_POST[ 'hasexp' ] ) ){
                
                        deleteexpertises( $_POST[ 'ssnro' ] , $_POST[ 'hasexp' ]);
                
                    }
                }
            }
        }

        else if (  (  isset( $_POST[ 'exdate' ] ) ) && ( isset( $_POST[ 'exres' ]  ) ) ){
            
            if ( isset( $_POST[ 'tech'] ) ){
                
                deletetechnicians( $_POST[ 'ssnro' ] );
                insertcontrollers( $_POST[ 'ssnro' ] , $_POST[  'exdate' ] , $_POST[ 'exres' ] );
                if ( isset ($_POST[ 'hasexp' ] ) ){
                
                    deleteexpertises( $_POST[ 'ssnro' ] , $_POST[ 'hasexp' ]);
                
                }
            }

            else if ( isset( $_POST[ 'none' ]) ){
                
                insertcontrollers( $_POST[ 'ssnro' ] , $_POST[  'exdate' ] , $_POST[ 'exres' ] );
            
            }
            
            else {
                
                updatecontrollers( $_POST[ 'ssnro' ], 'check_date' , $_POST[  'exdate' ] );
                updatecontrollers( $_POST[ 'ssnro' ], 'check_result' , $_POST[  'exdate' ] );
            
            }
        }

        else {
            
            if ( isset( $_POST[ 'tech' ] ) ){
                
                deletetechnicians( $_POST[ 'ssnro' ] );
                
                if ( isset ($_POST[ 'hasexp' ] ) ){
                
                    deleteexpertises( $_POST[ 'ssnro' ] , $_POST[ 'hasexp' ]);
                
                }
            
            }
            
            if ( isset( $_POST[ 'contr' ] ) ){
                
                deletecontrollers( $_POST[ 'ssnro' ] );
            
            }
        }

       header( 'Location: employees_tabs.php' );
    }
?>

