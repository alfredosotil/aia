CREATE DATABASE  IF NOT EXISTS `aia` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `aia`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: aia
-- ------------------------------------------------------
-- Server version	5.6.21-log

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
-- Table structure for table `access`
--

DROP TABLE IF EXISTS `access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_access_profile1_idx` (`profile_id`),
  KEY `fk_access_module1_idx` (`module_id`),
  CONSTRAINT `fk_access_module1` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_access_profile1` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `access`
--

LOCK TABLES `access` WRITE;
/*!40000 ALTER TABLE `access` DISABLE KEYS */;
INSERT INTO `access` (`id`, `profile_id`, `module_id`) VALUES (3,1,3),(4,1,1),(5,1,4),(9,1,2),(10,1,5),(11,1,7),(12,1,6),(14,2,6),(15,2,7),(16,3,6);
/*!40000 ALTER TABLE `access` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accesspropertydetail`
--

DROP TABLE IF EXISTS `accesspropertydetail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accesspropertydetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `property_detail_id` int(11) NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_accesspropertydetail_property1_idx` (`property_id`),
  KEY `fk_accesspropertydetail_property_detail1_idx` (`property_detail_id`),
  CONSTRAINT `fk_accesspropertydetail_property1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_accesspropertydetail_property_detail1` FOREIGN KEY (`property_detail_id`) REFERENCES `property_detail` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accesspropertydetail`
--

LOCK TABLES `accesspropertydetail` WRITE;
/*!40000 ALTER TABLE `accesspropertydetail` DISABLE KEYS */;
/*!40000 ALTER TABLE `accesspropertydetail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images_property`
--

DROP TABLE IF EXISTS `images_property`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images_property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`,`property_id`),
  KEY `fk_images_property_property1_idx` (`property_id`),
  CONSTRAINT `fk_images_property_property1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images_property`
--

LOCK TABLES `images_property` WRITE;
/*!40000 ALTER TABLE `images_property` DISABLE KEYS */;
/*!40000 ALTER TABLE `images_property` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images_user`
--

DROP TABLE IF EXISTS `images_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `fk_images_user_user1_idx` (`user_id`),
  CONSTRAINT `fk_images_user_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images_user`
--

LOCK TABLES `images_user` WRITE;
/*!40000 ALTER TABLE `images_user` DISABLE KEYS */;
INSERT INTO `images_user` (`id`, `name`, `order`, `active`, `user_id`) VALUES (8,'GEKsJ7gq-fzZ0qhJEoQOEkkxS2iB8ZOO.jpg',1,1,32);
/*!40000 ALTER TABLE `images_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `module`
--

DROP TABLE IF EXISTS `module`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iconfa` varchar(100) DEFAULT NULL,
  `label` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `controller` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_controller_type1_idx` (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `module`
--

LOCK TABLES `module` WRITE;
/*!40000 ALTER TABLE `module` DISABLE KEYS */;
INSERT INTO `module` (`id`, `iconfa`, `label`, `description`, `controller`, `active`, `type_id`) VALUES (1,'fa-users','Users','Modulo de Usuarios','user',1,2),(2,'fa-tags','Access Profiles','Modulo de Perfiles de Acceso','profile',1,2),(3,'fa-cogs','Modules','Modulo de Controladores','module',1,2),(4,'fa-cog','Types','Module Type','type',1,2),(5,'fa-cog','States','Module State','state',1,2),(6,'fa-building','Propiedades','Modulo de propiedades Operaciones CRUD','property',1,4),(7,'fa-user','Agentes','Modulo de agentes Operaciones CRUD','agent',1,3),(8,'fa-tachometer','Dashboard','Muestra informacion importante de entrada a la aplicacion.','dashboard',1,2);
/*!40000 ALTER TABLE `module` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(500) NOT NULL,
  `category` varchar(45) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` (`id`, `name`, `description`, `category`, `active`) VALUES (1,'App Manager','Management Modules','user',1),(2,'Administracion Gerencia','Gestion de Modulos de agente y propiedad','user',1),(3,'Agente','Gestion de propiedades','user',1);
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property`
--

DROP TABLE IF EXISTS `property`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `price` double DEFAULT NULL,
  `money` char(1) NOT NULL,
  `commission` double NOT NULL,
  `area` double DEFAULT NULL,
  `bedrooms` double DEFAULT NULL,
  `bathrooms` double DEFAULT NULL,
  `longitude` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `datecreation` timestamp NULL DEFAULT NULL,
  `datestart` timestamp NULL DEFAULT NULL,
  `datelastupdate` timestamp NULL DEFAULT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `phoneowner` varchar(45) DEFAULT NULL,
  `emailowner` varchar(100) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `references` varchar(500) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `garages` double DEFAULT NULL,
  `yearsold` double DEFAULT NULL,
  `furnished` tinyint(1) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_property_type1_idx` (`type_id`),
  KEY `fk_property_state1_idx` (`state_id`),
  KEY `fk_property_user1_idx` (`user_id`),
  CONSTRAINT `fk_property_state1` FOREIGN KEY (`state_id`) REFERENCES `state` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_property_type1` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_property_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property`
--

LOCK TABLES `property` WRITE;
/*!40000 ALTER TABLE `property` DISABLE KEYS */;
/*!40000 ALTER TABLE `property` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_detail`
--

DROP TABLE IF EXISTS `property_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_detail`
--

LOCK TABLES `property_detail` WRITE;
/*!40000 ALTER TABLE `property_detail` DISABLE KEYS */;
INSERT INTO `property_detail` (`id`, `name`, `description`, `active`) VALUES (1,'Terraza',NULL,1),(2,'Patio',NULL,1),(3,'Cable',NULL,1),(4,'Jacuzzi',NULL,1),(5,'Walk in Closet',NULL,1),(6,'Caseta de Seguridad',NULL,1),(7,'Piscina',NULL,1),(8,'Internet',NULL,1),(9,'Deposito',NULL,1),(10,'Cuarto y Baño de Servicio',NULL,1),(11,'Club house',NULL,1),(12,'Ascensor',NULL,1),(13,'Frente a parque',NULL,1),(14,'Vista a calle',NULL,1),(15,'Balcon',NULL,1),(16,'Kitchenette',NULL,1),(17,'Portero electrico',NULL,1),(18,'Area BBQ',NULL,1),(19,'Area deportiva',NULL,1);
/*!40000 ALTER TABLE `property_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `state`
--

LOCK TABLES `state` WRITE;
/*!40000 ALTER TABLE `state` DISABLE KEYS */;
INSERT INTO `state` (`id`, `state`, `category`, `active`) VALUES (1,'active','user',1),(2,'Alquiler','property',1),(3,'Venta','property',1),(4,'Alquilado','property',1),(5,'Vendido','property',1);
/*!40000 ALTER TABLE `state` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type`
--

LOCK TABLES `type` WRITE;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` (`id`, `type`, `category`, `active`) VALUES (1,'admin','user',1),(2,'AIA admin App','module',1),(3,'AIA admin Agentes','module',1),(4,'AIA admin Propiedades','module',1),(5,'Casa','property',1),(6,'Departamento','property',1),(7,'Local','property',1),(8,'Terreno','property',1),(9,'Agente','user',1),(10,'Oficina','property',1),(11,'Casa de Campo','property',1),(12,'Casa de Playa','property',1);
/*!40000 ALTER TABLE `type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(100) NOT NULL,
  `surnames` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `sex` char(1) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `authKey` varchar(45) DEFAULT NULL,
  `accessToken` varchar(45) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_tipo1_idx` (`type_id`),
  KEY `fk_usuario_estado1_idx` (`state_id`),
  KEY `fk_user_profile1_idx` (`profile_id`),
  KEY `_idx` (`avatar`),
  CONSTRAINT `fk_user_profile1` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_estado1` FOREIGN KEY (`state_id`) REFERENCES `state` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_tipo1` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `names`, `surnames`, `email`, `username`, `password`, `active`, `lastupdate`, `type_id`, `state_id`, `sex`, `profile_id`, `authKey`, `accessToken`, `parent`, `avatar`, `phone`) VALUES (1,'Alfredo Antonios','Sotil Pastor','alfredosotil@gmail.com','asotilp','asotilp',1,'2016-07-04 17:45:36',1,1,'M',1,'','',NULL,NULL,NULL),(32,'Claudia','Davila','cdavila@aia.com.pe','cdavila','123cdavila',1,'2016-07-15 22:42:51',1,1,'F',2,'','',NULL,'GEKsJ7gq-fzZ0qhJEoQOEkkxS2iB8ZOO.jpg','');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'aia'
--

--
-- Dumping routines for database 'aia'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-15 17:47:11
