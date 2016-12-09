
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
`nickname` VARCHAR( 25 ) NOT NULL ,
`email` VARCHAR( 45 ) NOT NULL,
`address` VARCHAR( 45 ) ,
`gender` VARCHAR( 25 ) NOT NULL,
`cpnum` VARCHAR( 45 ) NOT NULL,
`comment` VARCHAR( 45 )
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
 