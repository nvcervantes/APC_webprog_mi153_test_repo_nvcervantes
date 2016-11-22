CREATE DATABASE `dbtuts` ;
CREATE TABLE `dbtuts`.`users` (
`user_id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`name` VARCHAR( 50 ) NOT NULL ,
`email` VARCHAR(50) NOT NULL,
`address` VARCHAR( 100 ),
`website` VARCHAR (100),
`message` VARCHAR(255),
`cpnum` VARCHAR(14) NOT NULL,
`gender` VARCHAR(20) NOT NULL,
`nickname` VARCHAR( 25 ) NOT NULL
) ENGINE = InnoDB;