# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.27)
# Database: Luke-Collection
# Generation Time: 2019-09-26 15:22:06 +0000
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
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `alignment` enum('Sith','Republic') DEFAULT NULL,
  `forcePower(%)` int(11) NOT NULL,
  `lightsaberPower(%)` int(11) NOT NULL,
  `blasterPower(%)` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `star_wars_characters` WRITE;
/*!40000 ALTER TABLE `star_wars_characters` DISABLE KEYS */;

INSERT INTO `star_wars_characters` (`id`, `name`, `alignment`, `forcePower(%)`, `lightsaberPower(%)`, `blasterPower(%)`, `image`)
VALUES
	(1,'Palpatine','Sith',98,72,3,'https://d3atsf3fgek2rw.cloudfront.net/content/uploads/2015/09/Screen-Shot-2015-09-11-at-18.11.18.png'),
	(2,'Vader','Sith',84,82,23,'https://d3atsf3fgek2rw.cloudfront.net/content/uploads/2015/09/Screen-Shot-2015-09-11-at-18.08.01.png'),
	(3,'Skywalker','Republic',81,79,65,'https://d3atsf3fgek2rw.cloudfront.net/content/uploads/2015/09/Screen-Shot-2015-09-11-at-18.09.28.png'),
	(4,'Han Solo','Republic',15,5,94,'https://d3atsf3fgek2rw.cloudfront.net/content/uploads/2015/09/Screen-Shot-2015-09-11-at-18.08.45.png'),
	(5,'Obi Wan','Republic',90,85,58,'https://d3atsf3fgek2rw.cloudfront.net/content/uploads/2015/09/Screen-Shot-2015-09-11-at-18.09.47.png');

/*!40000 ALTER TABLE `star_wars_characters` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
