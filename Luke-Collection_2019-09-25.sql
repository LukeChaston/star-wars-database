# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.27)
# Database: Luke-Collection
# Generation Time: 2019-09-25 10:06:14 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table star_wars_characters
# ------------------------------------------------------------

DROP TABLE IF EXISTS `star_wars_characters`;

CREATE TABLE `star_wars_characters` (
  `Name` varchar(30) DEFAULT NULL,
  `Alignment` enum('Sith','Republic') DEFAULT NULL,
  `Force Power (%)` int(11) NOT NULL,
  `Lightsaber Power (%)` int(11) NOT NULL,
  `Blaster Power (%)` int(11) NOT NULL,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `star_wars_characters` WRITE;
/*!40000 ALTER TABLE `star_wars_characters` DISABLE KEYS */;

INSERT INTO `star_wars_characters` (`Name`, `Alignment`, `Force Power (%)`, `Lightsaber Power (%)`, `Blaster Power (%)`, `Image`)
VALUES
	('Palpatine','Sith',98,72,3,'Palpatine.jpg'),
	('Vader','Sith',84,82,23,'Darth Vader.jpg'),
	('Skywalker','Republic',81,79,65,'Luke Skywalker.jpg'),
	('Hans Solo','Republic',15,5,94,'Hans Solo.jpg'),
	('Obi Wan','Republic',90,85,58,'Obi Wan Kinobi.jpg');

/*!40000 ALTER TABLE `star_wars_characters` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
