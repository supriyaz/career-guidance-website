CREATE TABLE `register` ( 
`id` INT( 3 ) NOT NULL AUTO_INCREMENT,
`username` VARCHAR( 25 ) NOT NULL ,
`email` VARCHAR( 50 ) NOT NULL ,
`password` VARCHAR(50) NOT NULL,
`usertype` VARCHAR(11) NOT NULL,
 UNIQUE KEY id (id)
 ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

 INSERT INTO `register` (`id`, `username`, `email`, `password` ) VALUES 
 (1, 'admin', 'admin@sitename.com','admin');


 CREATE TABLE `counsellor` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `image` LONGTEXT NOT NULL,
  `name` VARCHAR(200) NOT NULL,
  `desgin` VARCHAR(200) NOT NULL,
  `decrip` VARCHAR(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;