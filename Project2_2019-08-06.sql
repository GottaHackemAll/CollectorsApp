# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 192.168.20.20 (MySQL 5.6.44)
# Database: Project2
# Generation Time: 2019-08-06 08:02:43 +0000
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
  `common_name` varchar(255) NOT NULL DEFAULT '',
  `latin_name` varchar(255) NOT NULL DEFAULT '',
  `identification_image` varchar(255) NOT NULL DEFAULT '',
  `canopy_level` enum('CANOPY LAYER','LOW-TREE LAYER','SHRUB LAYER','HERBACIOUS LAYER','GROUNDCOVER LAYER','RHIZOSPHERE LAYER','VERTICAL LAYER') NOT NULL DEFAULT 'CANOPY LAYER',
  `life_span` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `common_name` (`common_name`),
  UNIQUE KEY `latin_name` (`latin_name`),
  UNIQUE KEY `identification_image` (`identification_image`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Plants` WRITE;
/*!40000 ALTER TABLE `Plants` DISABLE KEYS */;

INSERT INTO `Plants` (`id`, `common_name`, `latin_name`, `identification_image`, `canopy_level`, `life_span`)
VALUES
	(1,'American Persimmon','Diospyros virginiana','./images/american-persimmon.jpg','CANOPY LAYER','60'),
	(2,'Nodding Saltbush','Einadia wutans','./images/nodding-saltbush.jpg','SHRUB LAYER','10'),
	(3,'Chinese Chestnut','Castanea mollissima','./images/chinese-chestnut.jpg','CANOPY LAYER','150'),
	(4,'Papaya Tree','Carica papaya','./images/yellow-papaya-tree.png.webp','LOW-TREE LAYER','5'),
	(5,'Black Locust','Robinia pseudoacacia ','./images/black-locust.jpg.webp','CANOPY LAYER','75'),
	(6,'Zucchini','Cucurbita pepo ','./images/yellow-zucchini-plant.jpg','VERTICAL LAYER','0.4'),
	(7,'Chokos','Sechium edule ','./images/chokos.jpg.webp','VERTICAL LAYER','0.4'),
	(8,'Sorrel','Rumex acetosa','./images/sorrel.jpg','HERBACIOUS LAYER','0.3'),
	(9,'Olive','Olea europaea','./images/olive.jpg','LOW-TREE LAYER','300 - 600'),
	(10,'Lavender','Lavandula angustifolia','./images/lavender.jpg','SHRUB LAYER','12'),
	(11,'Goji Berries','Lycium barbarum ','./images/goji-berry.jpg','SHRUB LAYER','5'),
	(12,'Fennel','Foeniculum vulgare','./images/fennel.jpg','HERBACIOUS LAYER','2'),
	(13,'Blackberry','Rubus fruticosus','./images/blackberry.jpg','SHRUB LAYER','15'),
	(14,'Honey Locusts','Gleditsia triacanthos','./images/honey-locust.jpg','CANOPY LAYER','120'),
	(15,'Dogwood','Cornus','./images/dogwood.jpg','LOW-TREE LAYER','80');

/*!40000 ALTER TABLE `Plants` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
