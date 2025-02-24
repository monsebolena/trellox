-- MySQL dump 10.13  Distrib 8.0.40, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: olimpiadas
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `areas`
--

DROP TABLE IF EXISTS `areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `areas` (
  `areas_id` int(11) NOT NULL AUTO_INCREMENT,
  `indicador_localizacion` varchar(255) DEFAULT NULL,
  `deporte` varchar(255) DEFAULT NULL,
  `complejos_id` int(11) NOT NULL,
  PRIMARY KEY (`areas_id`),
  KEY `fk_areas_complejos1_idx` (`complejos_id`),
  CONSTRAINT `fk_areas_complejos1` FOREIGN KEY (`complejos_id`) REFERENCES `complejos` (`complejos_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areas`
--

LOCK TABLES `areas` WRITE;
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
/*!40000 ALTER TABLE `areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comisarios`
--

DROP TABLE IF EXISTS `comisarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comisarios` (
  `comisarios_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`comisarios_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comisarios`
--

LOCK TABLES `comisarios` WRITE;
/*!40000 ALTER TABLE `comisarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `comisarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complejos`
--

DROP TABLE IF EXISTS `complejos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `complejos` (
  `complejos_id` int(11) NOT NULL AUTO_INCREMENT,
  `localizacion` varchar(255) DEFAULT NULL,
  `jefe` varchar(255) DEFAULT NULL,
  `area` decimal(10,2) DEFAULT NULL,
  `presupuesto` double DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `sedes_id` int(11) NOT NULL,
  PRIMARY KEY (`complejos_id`),
  KEY `fk_complejos_sedes_idx` (`sedes_id`),
  CONSTRAINT `fk_complejos_sedes` FOREIGN KEY (`sedes_id`) REFERENCES `sedes` (`sedes_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complejos`
--

LOCK TABLES `complejos` WRITE;
/*!40000 ALTER TABLE `complejos` DISABLE KEYS */;
INSERT INTO `complejos` VALUES (1,'localizacion1','jefe1',0.00,23000,'multideporte',1),(2,'localizacion2','jefe2',0.00,23001,'multideporte',1),(3,'localizacion3','jefe3',0.00,23002,'multideporte',1),(4,'localizacion4','jefe4',0.00,23003,'multideporte',1),(5,'localizacion5','jefe5',0.00,23004,'multideporte',1),(6,'localizacion6','jefe6',0.00,23005,'multideporte',1),(7,'localizacion7','jefe7',0.00,23006,'multideporte',1),(8,'localizacion8','jefe8',0.00,23007,'multideporte',1),(9,'localizacion9','jefe9',0.00,23008,'multideporte',1),(10,'localizacion10','jefe10',0.00,23009,'multideporte',1),(11,'localizacion11','jefe11',0.00,23010,'multideporte',1),(12,'localizacion12','jefe12',0.00,23011,'multideporte',1),(13,'localizacion13','jefe13',0.00,23012,'multideporte',1),(14,'localizacion14','jefe14',0.00,23013,'multideporte',1),(15,'localizacion15','jefe15',0.00,23014,'multideporte',1),(16,'localizacion16','jefe16',0.00,23015,'multideporte',1),(17,'localizacion17','jefe17',0.00,23016,'multideporte',1),(18,'localizacion18','jefe18',0.00,23017,'multideporte',1),(19,'localizacion19','jefe19',0.00,23018,'multideporte',1),(20,'localizacion20','jefe20',0.00,23019,'multideporte',1),(21,'localizacion21','jefe21',0.00,23020,'multideporte',1),(22,'localizacion22','jefe22',0.00,23021,'multideporte',1),(23,'localizacion23','jefe23',0.00,23022,'multideporte',1),(24,'localizacion24','jefe24',0.00,23023,'multideporte',2),(25,'localizacion25','jefe25',0.00,23024,'multideporte',2),(26,'localizacion26','jefe26',0.00,23025,'multideporte',2),(27,'localizacion27','jefe27',0.00,23026,'multideporte',2),(28,'localizacion28','jefe28',0.00,23027,'multideporte',2),(29,'localizacion29','jefe29',0.00,23028,'multideporte',2),(30,'localizacion30','jefe30',0.00,23029,'multideporte',2),(31,'localizacion31','jefe31',0.00,23030,'multideporte',2),(32,'localizacion32','jefe32',0.00,23031,'multideporte',2),(33,'localizacion33','jefe33',0.00,23032,'multideporte',2),(34,'localizacion34','jefe34',0.00,23033,'multideporte',2),(35,'localizacion35','jefe35',0.00,23034,'multideporte',2),(36,'localizacion36','jefe36',0.00,23035,'multideporte',4),(37,'localizacion37','jefe37',0.00,23036,'multideporte',4),(38,'localizacion38','jefe38',0.00,23037,'multideporte',4),(39,'localizacion39','jefe39',0.00,23038,'multideporte',4),(40,'localizacion40','jefe40',0.00,23039,'multideporte',4),(41,'localizacion41','jefe41',0.00,23040,'multideporte',4),(42,'localizacion42','jefe42',0.00,23041,'multideporte',4),(43,'localizacion43','jefe43',0.00,23042,'multideporte',4),(44,'localizacion44','jefe44',0.00,23043,'multideporte',4),(45,'localizacion45','jefe45',0.00,23044,'multideporte',4),(46,'localizacion46','jefe46',0.00,23045,'multideporte',4),(47,'localizacion47','jefe47',0.00,23046,'multideporte',4),(48,'localizacion48','jefe48',0.00,23047,'multideporte',4),(49,'localizacion49','jefe49',0.00,23048,'unico',4),(50,'localizacion50','jefe50',0.00,23049,'unico',4),(51,'localizacion51','jefe51',0.00,23050,'unico',4),(52,'localizacion52','jefe52',0.00,23051,'unico',4),(53,'localizacion53','jefe53',0.00,23052,'unico',4),(54,'localizacion54','jefe54',0.00,23053,'unico',4),(55,'localizacion55','jefe55',0.00,23054,'unico',4),(56,'localizacion56','jefe56',0.00,23055,'unico',4),(57,'localizacion57','jefe57',0.00,23056,'unico',4),(58,'localizacion58','jefe58',0.00,23057,'unico',6),(59,'localizacion59','jefe59',0.00,23058,'unico',6),(60,'localizacion60','jefe60',0.00,23059,'unico',6),(61,'localizacion61','jefe61',0.00,23060,'unico',6),(62,'localizacion62','jefe62',0.00,23061,'unico',6),(63,'localizacion63','jefe63',0.00,23062,'unico',6),(64,'localizacion64','jefe64',0.00,23063,'unico',6),(65,'localizacion65','jefe65',0.00,23064,'unico',6),(66,'localizacion66','jefe66',0.00,23065,'unico',6),(67,'localizacion67','jefe67',0.00,23066,'unico',6),(68,'localizacion68','jefe68',0.00,23067,'unico',6),(69,'localizacion69','jefe69',0.00,23068,'unico',6),(70,'localizacion70','jefe70',0.00,23069,'unico',6),(71,'localizacion71','jefe71',0.00,23070,'unico',6),(72,'localizacion72','jefe72',0.00,23071,'unico',6),(73,'localizacion73','jefe73',0.00,23072,'unico',6),(74,'localizacion74','jefe74',0.00,23073,'unico',6),(75,'localizacion75','jefe75',0.00,23074,'unico',6),(76,'localizacion76','jefe76',0.00,23075,'unico',6),(77,'localizacion77','jefe77',0.00,23076,'unico',6),(78,'localizacion78','jefe78',0.00,23077,'unico',6),(79,'localizacion79','jefe79',0.00,23078,'unico',6),(80,'localizacion80','jefe80',0.00,23079,'unico',6),(81,'localizacion81','jefe81',0.00,23080,'unico',6),(82,'localizacion82','jefe82',0.00,23081,'unico',6),(83,'localizacion83','jefe83',0.00,23082,'unico',6),(84,'localizacion84','jefe84',0.00,23083,'unico',23),(85,'localizacion85','jefe85',0.00,23084,'unico',23),(86,'localizacion86','jefe86',0.00,23085,'unico',23),(87,'localizacion87','jefe87',0.00,23086,'unico',23),(88,'localizacion88','jefe88',0.00,23087,'unico',23),(89,'localizacion89','jefe89',0.00,23088,'unico',23),(90,'localizacion90','jefe90',0.00,23089,'unico',23),(91,'localizacion91','jefe91',0.00,23090,'unico',23),(92,'localizacion92','jefe92',0.00,23091,'unico',23),(93,'localizacion93','jefe93',0.00,23092,'unico',23),(94,'localizacion94','jefe94',0.00,23093,'unico',23),(95,'localizacion95','jefe95',0.00,23094,'unico',23),(96,'localizacion96','jefe96',0.00,23095,'unico',23),(97,'localizacion97','jefe97',0.00,23096,'unico',23),(98,'localizacion98','jefe98',0.00,23097,'unico',23),(99,'localizacion99','jefe99',0.00,23098,'unico',23),(100,'localizacion100','jefe100',0.00,23099,'unico',23),(101,'localizacion101','jefe101',0.00,23100,'unico',23),(102,'localizacion102','jefe102',0.00,23101,'unico',23),(103,'localizacion103','jefe103',0.00,23102,'unico',23),(104,'localizacion104','jefe104',0.00,23103,'unico',23),(105,'localizacion105','jefe105',0.00,23104,'unico',23),(106,'localizacion106','jefe106',0.00,23105,'unico',23),(107,'localizacion107','jefe107',0.00,23106,'unico',23),(108,'localizacion108','jefe108',0.00,23107,'unico',23),(109,'localizacion109','jefe109',0.00,23108,'unico',23),(110,'localizacion110','jefe110',0.00,23109,'unico',23),(111,'localizacion111','jefe111',0.00,23110,'unico',23),(112,'localizacion112','jefe112',0.00,23111,'unico',23),(113,'localizacion113','jefe113',0.00,23112,'unico',23),(114,'localizacion114','jefe114',0.00,23113,'unico',23),(115,'localizacion115','jefe115',0.00,23114,'unico',23),(116,'localizacion116','jefe116',0.00,23115,'unico',23),(117,'localizacion117','jefe117',0.00,23116,'unico',23),(118,'localizacion118','jefe118',0.00,23117,'unico',23),(119,'localizacion119','jefe119',0.00,23118,'unico',23),(120,'localizacion120','jefe120',0.00,23119,'unico',23),(121,'localizacion121','jefe121',0.00,23120,'unico',23),(122,'localizacion122','jefe122',0.00,23121,'unico',23),(123,'localizacion123','jefe123',0.00,23122,'unico',23),(124,'localizacion124','jefe124',0.00,23123,'unico',23),(125,'localizacion125','jefe125',0.00,23124,'unico',23),(126,'localizacion126','jefe126',0.00,23125,'unico',23),(127,'localizacion127','jefe127',0.00,23126,'unico',23),(128,'localizacion128','jefe128',0.00,23127,'unico',23),(129,'localizacion129','jefe129',0.00,23128,'unico',23),(130,'localizacion130','jefe130',0.00,23129,'unico',23),(131,'localizacion131','jefe131',0.00,23130,'unico',23),(132,'localizacion132','jefe132',0.00,23131,'unico',23),(133,'localizacion133','jefe133',0.00,23132,'unico',23),(134,'localizacion134','jefe134',0.00,23133,'unico',23),(135,'localizacion135','jefe135',0.00,23134,'unico',23),(136,'localizacion136','jefe136',0.00,23135,'unico',23),(137,'localizacion137','jefe137',0.00,23136,'unico',23),(138,'localizacion138','jefe138',0.00,23137,'unico',23),(139,'localizacion139','jefe139',0.00,23138,'unico',23),(140,'localizacion140','jefe140',0.00,23139,'unico',23),(141,'localizacion141','jefe141',0.00,23140,'unico',23),(142,'localizacion142','jefe142',0.00,23141,'unico',23);
/*!40000 ALTER TABLE `complejos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipamiento`
--

DROP TABLE IF EXISTS `equipamiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipamiento` (
  `equipamiento_id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`equipamiento_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipamiento`
--

LOCK TABLES `equipamiento` WRITE;
/*!40000 ALTER TABLE `equipamiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `equipamiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `eventos` (
  `eventos_id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime DEFAULT NULL,
  `duracion` int(11) DEFAULT NULL,
  `participantes` int(11) DEFAULT NULL,
  `complejos_id` int(11) NOT NULL,
  `areas_id` int(11) NOT NULL,
  PRIMARY KEY (`eventos_id`),
  KEY `fk_eventos_complejos1_idx` (`complejos_id`),
  KEY `fk_eventos_areas1_idx` (`areas_id`),
  CONSTRAINT `fk_eventos_areas1` FOREIGN KEY (`areas_id`) REFERENCES `areas` (`areas_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_eventos_complejos1` FOREIGN KEY (`complejos_id`) REFERENCES `complejos` (`complejos_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos_has_comisarios`
--

DROP TABLE IF EXISTS `eventos_has_comisarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `eventos_has_comisarios` (
  `eventos_id` int(11) NOT NULL,
  `comisarios_id` int(11) NOT NULL,
  `rol` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`eventos_id`,`comisarios_id`),
  KEY `fk_eventos_has_comisarios_comisarios1_idx` (`comisarios_id`),
  KEY `fk_eventos_has_comisarios_eventos1_idx` (`eventos_id`),
  CONSTRAINT `fk_eventos_has_comisarios_comisarios1` FOREIGN KEY (`comisarios_id`) REFERENCES `comisarios` (`comisarios_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_eventos_has_comisarios_eventos1` FOREIGN KEY (`eventos_id`) REFERENCES `eventos` (`eventos_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos_has_comisarios`
--

LOCK TABLES `eventos_has_comisarios` WRITE;
/*!40000 ALTER TABLE `eventos_has_comisarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventos_has_comisarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos_has_equipamiento`
--

DROP TABLE IF EXISTS `eventos_has_equipamiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `eventos_has_equipamiento` (
  `eventos_id` int(11) NOT NULL,
  `equipamiento_id` int(11) NOT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`eventos_id`,`equipamiento_id`),
  KEY `fk_eventos_has_equipamiento_equipamiento1_idx` (`equipamiento_id`),
  KEY `fk_eventos_has_equipamiento_eventos1_idx` (`eventos_id`),
  CONSTRAINT `fk_eventos_has_equipamiento_equipamiento1` FOREIGN KEY (`equipamiento_id`) REFERENCES `equipamiento` (`equipamiento_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_eventos_has_equipamiento_eventos1` FOREIGN KEY (`eventos_id`) REFERENCES `eventos` (`eventos_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos_has_equipamiento`
--

LOCK TABLES `eventos_has_equipamiento` WRITE;
/*!40000 ALTER TABLE `eventos_has_equipamiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventos_has_equipamiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sedes`
--

DROP TABLE IF EXISTS `sedes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sedes` (
  `sedes_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sedes_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sedes`
--

LOCK TABLES `sedes` WRITE;
/*!40000 ALTER TABLE `sedes` DISABLE KEYS */;
INSERT INTO `sedes` VALUES (1,'sede1'),(2,'sede2'),(3,'sede3'),(4,'sede4'),(5,'sede5'),(6,'sede6'),(7,'sede7'),(8,'sede8'),(9,'sede9'),(10,'sede10'),(11,'sede11'),(12,'sede12'),(13,'sede13'),(14,'sede14'),(15,'sede15'),(16,'sede16'),(17,'sede17'),(18,'sede18'),(19,'sede19'),(20,'sede20'),(21,'sede21'),(22,'sede22'),(23,'sede23'),(24,'sede24'),(25,'sede25'),(26,'sede26'),(27,'sede27'),(28,'sede28'),(29,'sede29'),(30,'sede30'),(31,'sede31'),(32,'sede32');
/*!40000 ALTER TABLE `sedes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-01-24 19:59:05
