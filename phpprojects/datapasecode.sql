CREATE TABLE COMMENTS ( user_id INT(11) NOT NULL 
, COMMENT_ TEXT NOT NULL
, REPORT_ID INT (11) NOT NULL 
, CONSTRAINT com_user_id_fk FOREIGN KEY (user_id) REFERENCES users(user_id )
, FOREIGN KEY (REPORT_ID) REFERENCES reports(REPORT_ID) );

CREATE TABLE REPORTS ( 
    REPORT_ID INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL ,
    REPORT TEXT  NOT NULL ,
    NUM_LINK VARCHAR(255) NOT NULL , 
    user_id INT(11) NOT NULL ,
    FOREIGN KEY (user_id ) REFERENCES users(user_id)
);
create table users (
    user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    user_first varchar(256) not null,
    user_last varchar(256) not null,
    user_numb int(15) not null,
    user_uid varchar(256) not null,
    user_pwd varchar(256) not null
);

insert into (user_id,user_first,user_last, user_numb,user_uid,userpwd)
valuse ('','','','','','')