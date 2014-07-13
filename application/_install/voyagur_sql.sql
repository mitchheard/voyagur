

CREATE DATABASE IF NOT EXISTS `voyagur`;
CREATE TABLE `voyagur`.`users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO `voyagur`.`users` (`id`, `username`, `location`) VALUES
(1, 'kevin', 'In Santa Barbara'),
(2, 'mitch', 'In austin'),
(3, 'user1', 'I am here');

CREATE USER 'code_db_user'@'localhost' IDENTIFIED BY 'I3xI7PGo*Z';
GRANT ALL PRIVILEGES ON *.* TO 'code_db_user'@'localhost' WITH GRANT OPTION;



