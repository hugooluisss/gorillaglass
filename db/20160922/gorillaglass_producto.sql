CREATE DATABASE  IF NOT EXISTS `gorillaglass` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `gorillaglass`;
-- MySQL dump 10.13  Distrib 5.6.13, for osx10.6 (i386)
--
-- Host: 127.0.0.1    Database: gorillaglass
-- ------------------------------------------------------
-- Server version	5.6.13

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
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `idProducto` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idPadre` bigint(20) unsigned NOT NULL,
  `clave` varchar(10) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT '0.00',
  PRIMARY KEY (`idProducto`),
  KEY `fk_padre_idx` (`idPadre`),
  CONSTRAINT `fk_padre` FOREIGN KEY (`idPadre`) REFERENCES `producto` (`idProducto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (0,0,NULL,'Init',0.00),(9,0,'CFP','Color Front Plug',4.00),(10,9,'S','Single Flare',1.00),(11,10,'04','4mm',1.00),(12,11,'SB','Sky Blue',0.50),(13,9,'DF','Double Flare',1.50),(14,13,'09','9mm',2.00),(15,14,'MT','Matte',1.00),(16,15,'AG','Agave',1.00),(17,10,'08','8mm',1.30),(18,17,'MR','Martele',1.00),(20,18,'PI','Pink',1.00),(21,0,'SOP-C','Solid Concave Plug',8.00),(22,21,'12','12mm',1.00),(23,22,'MR','Martele',10.00),(24,23,'LV','Lavender',0.00),(25,21,'09','9mm',1.00);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-22 23:29:02
