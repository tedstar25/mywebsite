CREATE DATABASE mywebsite;
USE mywebsite;


CREATE TABLE user (
 id INT(11) NOT NULL AUTO_INCREMENT,
 username VARCHAR(255) NOT NULL,
 pwd VARCHAR(255) NOT NULL,
 email VARCHAR(255) NOT NULL,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (id)
);



