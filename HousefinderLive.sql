-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: housefinder
-- ------------------------------------------------------
-- Server version	5.7.20-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','Admin2018');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `agents`
--

DROP TABLE IF EXISTS `agents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type_id` int(11) NOT NULL DEFAULT '2',
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bday` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email_info` varchar(255) NOT NULL,
  `landline` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `date_created` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agents`
--

LOCK TABLES `agents` WRITE;
/*!40000 ALTER TABLE `agents` DISABLE KEYS */;
INSERT INTO `agents` VALUES (1,2,'Rustine','Louise','Agbayani','Blk. 1, Lot 41, Carnation St., Maryhomes Subdivision, Molino IV, Bacoor, Cavite','1998-05-17',19,'Male','09565042295','agbayanirustine.ra@gmail.com','5374946','agbayanirustine.ra@gmail.com','$2y$10$st8BtBfcda4fB.45Q2xX/Oyoa0DMP/DOq/ACMV/cOQZ8hseDbDJde','images/hd-dog-wallpapers-24.jpg','70efdf2ec9b086079795c442636b55fb',0,'2018-01-07'),(2,2,'Derick','Reuben','Llanes','West Ville, Bacoor, Cavite','1998-01-03',20,'Male','09259034876','dekllanes@gmail.com','','dekllanes@gmail.com','$2y$10$uK3WAc8.oJ.QH17i3z8ReeZUT8TNgt0nW0P4EyOjG.lhKJKWLyoTy','images/dp.jpg','812b4ba287f5ee0bc9d43bbf5bbe87fb',0,'2018-01-08'),(3,2,'Karl','Alawi','Gonzales','Dasmarinas, Cavite','1997-09-11',20,'Male','09435234234','karlgonzales@gmail.com','','karlgonzales@gmail.com','$2y$10$Ch8vUMB97yhxUENbWqOoP.z9y4Sq7fnECxCxflwuq1HdsZ.Ss0xLa','images/dog-wallpaper-preview-21.jpg','58a2fc6ed39fd083f55d4182bf88826d',0,'2018-01-23'),(4,2,'Dek','Malubay','Llanes','Block 6 Lot 5 Casimiro Westville Homes Ligas 3','1998-01-04',20,'Male','09351028410','dekdek@dek.com','','dekdek@dek.com','$2y$10$BAhWfDOc9MyhnR2j83Ee9eCg.FEm.2NP/JxGhW8Ai7AkT4XGNAjou','images/hd-dog-wallpapers-24.jpg','043c3d7e489c69b48737cc0c92d0f3a2',0,'2018-01-24'),(5,2,'Tsumi','','Chan','Las Pinas','1992-09-06',25,'Male','09367661063','joedel.espinosa@gmail.com','','joedel.espinosa@gmail.com','$2y$10$LMbJyhXRAp2vx3e/8lBz.ex28WzVGSDs4gKPaMrOgquSG7pmPhEUW','images/Dota2.png','3621f1454cacf995530ea53652ddf8fb',0,'2018-01-25');
/*!40000 ALTER TABLE `agents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ip`
--

DROP TABLE IF EXISTS `ip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ip` (
  `address` char(16) COLLATE utf8_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ip`
--

LOCK TABLES `ip` WRITE;
/*!40000 ALTER TABLE `ip` DISABLE KEYS */;
/*!40000 ALTER TABLE `ip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (1,'properties/3.jpg',1),(2,'properties/12.jpg',1),(3,'properties/22.jpg',1),(4,'properties/18.jpg',2),(5,'properties/19.jpg',2),(6,'properties/21.jpg',2),(7,'properties/hampton-condo-for-sale-imus-cavite-deca-homes (5).jpg',3),(8,'properties/01-apecweb_projects-san-isidroTOWNHOUSE-units-floor-plan.jpg',4),(9,'properties/bahay-kubo-different-types-kinds-styles-of-houses-in-philippines-rowhouses-towhouses (2).jpg',5),(10,'properties/4-bungalow-shutterstock-555x370.jpg',6),(11,'properties/0002.jpg',7),(12,'properties/townhouse-plans-PHP2014011-perspective.jpg',8),(13,'properties/1house.jpg',9),(14,'properties/5-single-attached-555x369.jpg',10),(15,'properties/55dfd9e13297913fd809722ef25df99c--u-shaped-houses-cape-cod-houses.jpg',11),(16,'properties/1452472_708904225907516_3018693867875630168_n.jpg',12),(17,'properties/house-and-lot.jpg',13),(18,'properties/p_99_DREAM-HOMES-A-SINGLE-DETACHED-HOUSE-TOWNHOUSE-FOR-SALE-LOCATED-IN-QUIJADA-GUADALUPE-CEBU-CITY_c_2_TOWNHOUSE-FOR-SALE-IN-QUIJADA-GUADALUPE-CEBU-CITY-PHILIPPINES-TOWNHOUSE_6491355.jpg',14),(19,'properties/SD House 2.jpg',15),(20,'properties/lalique.jpg',16),(21,'properties/lalique2.jpg',17),(22,'properties/lalique.jpg',17);
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_type` varchar(255) NOT NULL,
  `property_category` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `postal` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `negotiable` varchar(255) NOT NULL,
  `reservationFee` varchar(45) NOT NULL,
  `property_size` varchar(255) NOT NULL,
  `property_title` varchar(255) NOT NULL,
  `bedrooms` varchar(255) NOT NULL,
  `bathrooms` varchar(255) NOT NULL,
  `garages` varchar(255) NOT NULL,
  `storey` varchar(255) NOT NULL,
  `additional` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `featured` varchar(255) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `latitude` varchar(45) DEFAULT NULL,
  `longitude` varchar(45) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date_created` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
INSERT INTO `properties` VALUES (1,'For Sale','House and Lot','Bacoor, Cavite','','4500000','No','1500','220','Detached','4','2','1','2','','Rustine','featured/2.jpg',1,'14.416022','120.968860',0,'12-24-2017'),(2,'For Sale','House and Lot','Imus, Cavite','','3900000','Yes','1500','190','Multi Storey','5','2','1','2','','Rustine','featured/1.jpg',1,'14.416022','120.968860',0,'12-27-2017'),(3,'For Sale','Condominium','Imus, Cavite','','3500000','No','1500','60','Condo','1','1','1','1','','Rustine','featured/hampton-condo-for-sale-imus-cavite-deca-homes (5).jpg',1,'14.416022','120.968860',0,'12-27-2017'),(4,'For Sale','Apartment','Imus, Cavite','','800000','Yes','750','50','Townhouse','1','1','','1','','Rustine','featured/01-apecweb_projects-san-isidroTOWNHOUSE-units-floor-plan.jpg',1,'14.416022','120.968860',4,'12-27-2017'),(5,'For Sale','House and Lot','Bacoor, Cavite','','1400000','Yes','1000','85','Rowhouse','2','1','','2','','Rustine','featured/bahay-kubo-different-types-kinds-styles-of-houses-in-philippines-rowhouses-towhouses (2).jpg',1,'14.416022','120.968860',0,'12-28-2017'),(6,'For Sale','House and Lot','Imus, Cavite','','2500000','No','1250','120','Bungalow','3','2','1','1','','Rustine','featured/4-bungalow-shutterstock-555x370.jpg',1,'14.416022','120.968860',0,'12-29-2017'),(7,'For Sale','House and Lot','Bacoor, Cavite','','3200000','Yes','1700','180','Multi Storey','5','2','1','2','','Rustine','featured/0002.jpg',1,'14.416022','120.968860',0,'01-09-2018'),(8,'For Sale','Apartment','Dasmarinas, Cavite','','1400000','No','1000','70','Townhouse','3','3','','2','','Derick','featured/townhouse-plans-PHP2014011-perspective.jpg',2,'14.416022','120.968860',0,'01-09-2018'),(9,'For Sale','House and Lot','Imus, Cavite','','4800000','No','2000','235','Multi-storey','3','2','1','2','','Derick','featured/1house.jpg',2,'14.416022','120.968860',0,'01-09-2018'),(10,'For Sale','House and Lot','Dasmarinas','','3300000','Yes','1500','130','Attached','3','2','1','2','','Derick','featured/5-single-attached-555x369.jpg',2,'14.416022','120.968860',0,'01-10-2018'),(11,'For Sale','House and Lot','Bacoor, Cavite','','2800000','No','1000','160','Bungalow','3','2','1','1','','Derick','featured/55dfd9e13297913fd809722ef25df99c--u-shaped-houses-cape-cod-houses.jpg',2,'14.416022','120.968860',0,'01-12-2018'),(12,'For Sale','House and Lot','Dasmarinas','','2100000','No','1000','110','Bungalow','2','1','','1','','Derick','featured/1452472_708904225907516_3018693867875630168_n.jpg',2,'14.416022','120.968860',0,'01-12-2018'),(13,'For Sale','House and Lot','Imus, Cavite','','3100000','Yes','1250','140','House & Lot','2','1','1','2','','Karl','featured/house-and-lot.jpg',3,'14.416022','120.968860',0,'01-12-2018'),(14,'For Sale','Apartment','Bacoor, Cavite','','1000000','No','800','40','Townhouse','2','1','','2','','Karl','featured/p_99_DREAM-HOMES-A-SINGLE-DETACHED-HOUSE-TOWNHOUSE-FOR-SALE-LOCATED-IN-QUIJADA-GUADALUPE-CEBU-CITY_c_2_TOWNHOUSE-FOR-SALE-IN-QUIJADA-GUADALUPE-CEBU-CITY-PHILIPPINES-TOWNHOUSE_6491355.jpg',3,'14.416022','120.968860',3,'01-24-2018'),(15,'For Sale','House and Lot','Dasmarinas, Cavite','','1600000','No','1000','130','Single','3','2','1','2','','Karl','featured/SD House 2.jpg',5,'14.416022','120.968860',4,'01-24-2018'),(16,'For Sale','House and Lot','Molino Bacoor',NULL,'3500000','No','1500','150','House & Lot','4','3','1','2','','Dek','featured/lalique.jpg',4,'14.386211','120.998032',3,'01-24-2018'),(17,'For Sale','House and Lot','Molino, Cavite',NULL,'2500000','Yes','1350','131','House and Lot','4','3','1','2','','Tsumi','featured/lalique.jpg',5,'14.386211','120.998032',0,'01-25-2018');
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_reservations`
--

DROP TABLE IF EXISTS `property_reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_reservations` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `customer_name` varchar(45) DEFAULT NULL,
  `customer_email` varchar(45) DEFAULT NULL,
  `customer_number` varchar(45) DEFAULT NULL,
  `customer_notes` varchar(255) DEFAULT NULL,
  `reservation_status` varchar(45) DEFAULT NULL,
  `user_id` varchar(45) NOT NULL,
  PRIMARY KEY (`reservation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_reservations`
--

LOCK TABLES `property_reservations` WRITE;
/*!40000 ALTER TABLE `property_reservations` DISABLE KEYS */;
INSERT INTO `property_reservations` VALUES (12,16,4,'Tsumi Chan','Strafer14@yahoo.com','09367661063','Sample Sample Sample','DECLINED','5'),(13,15,5,'Buyer 1 ','Buyer@buy.com','09367661063','Smaple buy','SOLD','3'),(17,17,5,'Crystal Maiden','crystal.maiden@dota2.com','09367661063','Interested please contact me.','DECLINED','5'),(18,14,3,'Joedel Espinosa','joedel.espinosa@gmail.com','09367661063','Please Contact Me!',NULL,'5');
/*!40000 ALTER TABLE `property_reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recent_search`
--

DROP TABLE IF EXISTS `recent_search`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recent_search` (
  `recent_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `date_clicked` varchar(255) NOT NULL,
  PRIMARY KEY (`recent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recent_search`
--

LOCK TABLES `recent_search` WRITE;
/*!40000 ALTER TABLE `recent_search` DISABLE KEYS */;
INSERT INTO `recent_search` VALUES (1,17,'01-29-2018'),(2,13,'01-29-2018'),(3,3,'01-29-2018'),(4,6,'01-29-2018'),(5,7,'01-29-2018'),(6,17,'01-29-2018'),(7,7,'01-29-2018'),(8,2,'01-29-2018');
/*!40000 ALTER TABLE `recent_search` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation_payments`
--

DROP TABLE IF EXISTS `reservation_payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation_payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `agent_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(45) NOT NULL,
  `reference_number` varchar(45) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation_payments`
--

LOCK TABLES `reservation_payments` WRITE;
/*!40000 ALTER TABLE `reservation_payments` DISABLE KEYS */;
INSERT INTO `reservation_payments` VALUES (1,5,17,5,'1350','ABC-123'),(10,3,15,3,'1500','ZXC-1234'),(11,3,15,3,'1500','TFVC-1234');
/*!40000 ALTER TABLE `reservation_payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_types`
--

DROP TABLE IF EXISTS `user_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_types` (
  `user_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`user_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_types`
--

LOCK TABLES `user_types` WRITE;
/*!40000 ALTER TABLE `user_types` DISABLE KEYS */;
INSERT INTO `user_types` VALUES (1,'Admin'),(2,'Agents'),(3,'Users');
/*!40000 ALTER TABLE `user_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type_id` int(11) NOT NULL DEFAULT '3',
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,3,'Dek','Llanes','llanesderick@gmail.com','Dekdek04','',1),(3,3,'Joedel','Espinosa','joedel.espinosa@gmail.com','$2y$10$CPm0k4rrEhh1yI7MZgfPlOPdADcMsknoD.2oTmi6ovMASaCwVIBj.','c15da1f2b5e5ed6e6837a3802f0d1593',0),(4,3,'Test','Tester','test@test.com','$2y$10$F8C.9P22wE4t1H8Q7lo9..PC6RlPU9cRbHlVUnZU1lR/VaEHR2YZ.','e165421110ba03099a1c0393373c5b43',0),(5,3,'House','Buyer','house.buyer@test.com','$2y$10$uo5d0GYfqdGBsZAbeDJnKOT3oVGfuqsCH/NBxKDvDDb6tLkEPqod.','93db85ed909c13838ff95ccfa94cebd9',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-29 13:59:22
