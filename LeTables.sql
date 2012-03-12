CREATE TABLE aircraft_model (
    model_code int NOT NULL,
    model_name varchar ( 15 ) NOT NULL,
    manufacturer varchar ( 15 ),
    capacity int,
    weight int,
    PRIMARY KEY ( model_code )
) ENGINE=INNODB;

CREATE TABLE aircraft (
    reg_num int NOT NULL,
    air_carrier varchar ( 15 ),
    construction_date DATE,
    model_code int,
    PRIMARY KEY ( reg_num ),
    FOREIGN KEY ( model_code ) REFERENCES aircraft_model( model_code )
) ENGINE=INNODB;

CREATE TABLE employees (
    ssn int NOT NULL,
    umn int NOT NULL,
    fname varchar ( 15 ) NOT NULL,
    surname varchar ( 15 ) NOT NULL,
    address varchar ( 15 ),
    phone varchar ( 15 ),
    yob int,
    salary int,
    PRIMARY KEY( ssn ),
    UNIQUE ( umn )
) ENGINE=INNODB;

CREATE TABLE controllers (
    ssn int NOT NULL,
    check_date DATE,
    check_result int,
    PRIMARY KEY ( ssn ),
    FOREIGN KEY ( ssn ) REFERENCES employees( ssn )
) ENGINE=INNODB;

CREATE TABLE technicians (
    ssn int NOT NULL,
    rank int NOT NULL,
    PRIMARY KEY ( ssn ),
    FOREIGN KEE ( ssn ), REFERENCES employees( ssn )
) ENGINE=INNODB;

CREATE TABLE expertises (
    ssn int NOT NULL,
    model_code int NOT NULL,
    PRIMARY KEY ( ssn, model_code ),
    FOREIGN KEY ( ssn ) REFERENCES employess( ssn ),
    FOREIGN KEY ( model_code ) REFERENCES employess( aircraft_model )
) ENGINE=INODB;

CREATE TABLE checktypes (
    checktypeid int NOT NULL,
    name varchar ( 15 ),
    maxscire int NOT NULL,
    PRIMARY KEY ( checktypeid )
) ENGINE=INODB;

CREATE TABLE checks (
    reg_num int NOT NULL,
    checkid int NOT NULL,
    checktypeid int NOT NULL,
    ssn int NOT NULL,
    duration int NOT NULL,
    score int NOT NULL,
    PRIMARY KEY ( checkid ),
    FOREIGN KEY ( ssn ) REFERENCES employees( ssn ),
    FOREIGN KEY (checktypeid ) REFERENCES checktypes( checktypeid ),
    FOREIGN KEY ( reg_num ) REFERENECES aircraft( reg_num )
    CHECK score <= ( SELECT maxscore FROM checktypes c WHERE checktypeid = c.checktypeid )
) ENGINE=INODB;
