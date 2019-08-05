# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 192.168.20.20 (MySQL 5.6.44)
# Database: Project2
# Generation Time: 2019-08-05 15:01:52 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Plants
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Plants`;

CREATE TABLE `Plants` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `common_name` varchar(255) DEFAULT NULL,
  `latin_name` varchar(255) DEFAULT NULL,
  `identification_image` varchar(255) DEFAULT NULL,
  `canopy_level` varchar(255) DEFAULT NULL,
  `life_span` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `common_name` (`common_name`),
  UNIQUE KEY `latin_name` (`latin_name`),
  UNIQUE KEY `identification_image` (`identification_image`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Plants` WRITE;
/*!40000 ALTER TABLE `Plants` DISABLE KEYS */;

INSERT INTO `Plants` (`id`, `common_name`, `latin_name`, `identification_image`, `canopy_level`, `life_span`)
VALUES
	(1,'American Persimmon','Diospyros virginiana','./images/american-persimmon.jpg','Canopy layer','60'),
	(2,'Nodding Saltbush','Einadia wutans','./images/nodding-saltbush.jpg','Shrub Layer','10'),
	(3,'Chinese Chestnut','Castanea mollissima','./images/chinese-chestnut.jpg','Canopy Layer','150'),
	(4,'papaya tree','carica papaya','./images/yellow-papaya-tree.png.webp','Low-Tree Layer','5'),
	(5,'Black locust','Robinia pseudoacacia ','./images/black-locust.jpg.webp','Canopy Layer','75'),
	(6,'Zucchini','Cucurbita pepo ','./images/yellow-zucchini-plant.jpg','Vertical Layer','0.4'),
	(7,'Chokos','Sechium edule ','./images/chokos.jpg.webp','Vertical Layer','0.4'),
	(8,'Sorrel','Rumex acetosa','./images/sorrel.jpg','Herbacious Layer','0.3'),
	(9,'Olive','Olea europaea','./images/olive.jpg','Low-Tree Layer','300 - 600'),
	(10,'lavender','lavandula angustifolia','./images/lavender.jpg','Shrub Layer','12'),
	(11,'Goji berries','Lycium barbarum ','./images/goji-berry.jpg','Shrub Layer','5'),
	(12,'Fennel','Foeniculum vulgare','./images/fennel.jpg','Herbacious Layer','2'),
	(13,'Blackberry','Rubus fruticosus','./images/blackberry.jpg','Shrub Layer','15'),
	(14,'Honey locusts','Gleditsia triacanthos','./images/honey-locust.jpg','Canopy Layer','120'),
	(15,'Dogwood','Cornus','./images/dogwood.jpg','Low-Tree Layer','80');

/*!40000 ALTER TABLE `Plants` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
