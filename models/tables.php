<?php 
    include 'database.php';

    $sql = "CREATE TABLE aircraft_model (
        model_code int NOT NULL PRIMARY KEY,
        model_name varchar ( 15 ) NOT NULL,
        manufacturer varchar ( 15 ) NOT NULL,
        capacity int NOT NULL,
        weight int NOT NULL
    ) ENGINE=INNODB";

    mysql_query( $sql, $con );    

    $sql = "CREATE TABLE aircraft (
        reg_num int NOT NULL PRIMARY KEY,
        air_carrier varchar ( 15 ) NOT NULL,
        construction_date DATE NOT NULL,
        model_code int NOT NULL,
        FOREIGN KEY ( model_code ) REFERENCES aircraft_model ( model_code ) ON DELETE CASCADE ON UPDATE CASCADE
    ) ENGINE=INNODB";

    mysql_query( $sql, $con );    

    $sql = "CREATE TABLE employees ( 
    	ssn int NOT NULL PRIMARY KEY,
    	umn int NOT NULL UNIQUE,
        fname varchar ( 15 ) NOT NULL,
        surname varchar ( 15 ) NOT NULL,
        address varchar ( 15 ),
        phone varchar ( 15 ),
        yob int,
        salary int NOT NULL
    ) ENGINE=INNODB";

    mysql_query( $sql, $con );    

    $sql = "CREATE TABLE controllers (
        ssn int NOT NULL PRIMARY KEY,
        check_date DATE,
        check_result int,
        FOREIGN KEY ( ssn ) REFERENCES employees ( ssn ) ON DELETE CASCADE ON UPDATE CASCADE
    
    ) ENGINE=INNODB";
    
    mysql_query( $sql, $con );    

    
    $sql = "CREATE TABLE technicians (
        ssn int PRIMARY KEY,
        rank int NOT NULL,
        FOREIGN KEY ( ssn ) REFERENCES employees ( ssn ) ON DELETE CASCADE ON UPDATE CASCADE
    ) ENGINE=INNODB";

    mysql_query( $sql, $con );    
    
    $sql = "CREATE TABLE expertises (
    ssn int NOT NULL,
    model_code int NOT NULL,
    PRIMARY KEY ( ssn, model_code ),
    FOREIGN KEY ( ssn ) REFERENCES employees ( ssn ) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY ( model_code ) REFERENCES aircraft_model ( model_code ) ON DELETE CASCADE ON UPDATE CASCADE
    ) ENGINE=INNODB";

    mysql_query( $sql, $con );    

    $sql = "CREATE TABLE checktypes (
    checktypeid int NOT NULL PRIMARY KEY,
    check_name varchar ( 15 ) NOT NULL,
    maxscore int NOT NULL
    ) ENGINE=INNODB";

    mysql_query( $sql, $con );    

    $sql = "CREATE TABLE checks (
    checkid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    reg_num int NOT NULL,
    checktypeid int NOT NULL,
    ssn int NOT NULL,
    duration int NOT NULL,
    score int NOT NULL,
    FOREIGN KEY ( reg_num ) REFERENCES aircraft ( reg_num ) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY ( checktypeid ) REFERENCES checktypes ( checktypeid ) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY ( ssn ) REFERENCES employees ( ssn ) ON DELETE CASCADE ON UPDATE CASCADE,
	CHECK (score < ( SELECT maxscore FROM checktypes c WHERE checktypeid = c.checktypeid ))
   ) ENGINE=INNODB";
    
    mysql_query( $sql, $con );    

    $sql = "CREATE TABLE users (
	userid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username varchar ( 15 ) NOT NULL UNIQUE,
	password varchar ( 15 ) NOT NULL,
	urole varchar ( 15 ) NOT NULL DEFAULT 'Limited',
	lastlogin DATETIME NOT NULL
    ) ENGINE=INNODB";

    mysql_query( $sql, $con );    
?>
