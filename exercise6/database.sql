CREATE DATABASE `dbexercise6` ;
CREATE TABLE `dbexercise6`.`users` (
`user_id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`name` VARCHAR( 45 ) NOT NULL ,
`nickname` VARCHAR( 25 ) NOT NULL ,
`email` VARCHAR( 45 ) NOT NULL,
`address` VARCHAR( 45 ) ,
`gender` VARCHAR( 25 ) NOT NULL,
`cpnum` VARCHAR( 45 ) NOT NULL,
`comment` VARCHAR( 45 ) 
) ENGINE = InnoDB;