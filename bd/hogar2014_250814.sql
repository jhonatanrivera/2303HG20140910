CREATE DATABASE  IF NOT EXISTS `hogar2014` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hogar2014`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: hogar2014
-- ------------------------------------------------------
-- Server version	5.0.45-community-nt

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
-- Not dumping tablespaces as no INFORMATION_SCHEMA.FILES table on this server
--

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) collate utf8_bin NOT NULL default '0',
  `ip_address` varchar(16) collate utf8_bin NOT NULL default '0',
  `user_agent` varchar(150) collate utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL default '0',
  `user_data` text collate utf8_bin NOT NULL,
  PRIMARY KEY  (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hg1_localizacion`
--

DROP TABLE IF EXISTS `hg1_localizacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hg1_localizacion` (
  `NUM_VIV` int(11) NOT NULL,
  `NOM_DD` varchar(80) default 'LIMA',
  `NOM_PP` varchar(80) default 'LIMA',
  `NOM_DI` varchar(80) default NULL,
  `NOM_CCPP` varchar(80) default NULL,
  `NOM_NNUU` varchar(80) default NULL,
  `NOM_ZZCC` varchar(3) default NULL,
  `NOM_MZCE` varchar(3) default NULL,
  `NUM_FREN` int(11) default NULL,
  `TIPVIA` int(11) default NULL,
  `TIPVIA_O` varchar(30) default NULL,
  `NOMVIA` varchar(50) default NULL,
  `PTANUM` varchar(4) default NULL,
  `MZ` varchar(3) default NULL,
  `LOTE` varchar(3) default NULL,
  `NOM_PER` varchar(60) default NULL,
  `TELEF` varchar(9) default NULL,
  `NUM_HOGA` int(11) default NULL,
  `HOGA_ENTREV` int(1) default '1',
  `NOM_ENCUES` varchar(60) default NULL,
  `NUM_NI` int(11) default NULL,
  `USER_ID` int(11) default NULL,
  `FECHA_CREACION` timestamp NULL default CURRENT_TIMESTAMP,
  `USER_ID_MOD` int(11) default NULL,
  `FECHA_MODIFICACION` datetime default NULL,
  PRIMARY KEY  (`NUM_VIV`),
  UNIQUE KEY `NUM_VIV_UNIQUE` (`NUM_VIV`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hg1_localizacion`
--

LOCK TABLES `hg1_localizacion` WRITE;
/*!40000 ALTER TABLE `hg1_localizacion` DISABLE KEYS */;
INSERT INTO `hg1_localizacion` VALUES (545,'LIMA','LIMA','CHOSICA','CALLAO',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'JHONATAN RIVERA',NULL,1,'2014-08-25 07:33:33',NULL,NULL),(4545,'LIMA','LIMA','CHOSICA','AMAZONAS','NUCLE','ZON','MZ',1,1,NULL,'NOMBRE','2','MZ','12','NOMBRE D ELA PERSONAS INFORMANTE','TELEFONO',5,1,'NOMBRE DEL ENCUESTADOR',5,NULL,NULL,1,'2014-08-25 03:21:27');
/*!40000 ALTER TABLE `hg1_localizacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL auto_increment,
  `ip_address` varchar(40) collate utf8_bin NOT NULL,
  `login` varchar(50) collate utf8_bin NOT NULL,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_attempts`
--

LOCK TABLES `login_attempts` WRITE;
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_autologin`
--

DROP TABLE IF EXISTS `user_autologin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_autologin` (
  `key_id` char(32) collate utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL default '0',
  `user_agent` varchar(150) collate utf8_bin NOT NULL,
  `last_ip` varchar(40) collate utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_autologin`
--

LOCK TABLES `user_autologin` WRITE;
/*!40000 ALTER TABLE `user_autologin` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_autologin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_profiles`
--

DROP TABLE IF EXISTS `user_profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) collate utf8_bin default NULL,
  `website` varchar(255) collate utf8_bin default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_profiles`
--

LOCK TABLES `user_profiles` WRITE;
/*!40000 ALTER TABLE `user_profiles` DISABLE KEYS */;
INSERT INTO `user_profiles` VALUES (1,1,NULL,NULL),(2,2,NULL,NULL);
/*!40000 ALTER TABLE `user_profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(50) collate utf8_bin NOT NULL,
  `password` varchar(255) collate utf8_bin NOT NULL,
  `email` varchar(100) collate utf8_bin NOT NULL,
  `role_id` int(11) NOT NULL default '5',
  `activated` tinyint(1) NOT NULL default '1',
  `banned` tinyint(1) NOT NULL default '0',
  `ban_reason` varchar(255) collate utf8_bin default NULL,
  `new_password_key` varchar(50) collate utf8_bin default NULL,
  `new_password_requested` datetime default NULL,
  `new_email` varchar(100) collate utf8_bin default NULL,
  `new_email_key` varchar(50) collate utf8_bin default NULL,
  `last_ip` varchar(40) collate utf8_bin NOT NULL,
  `last_login` datetime NOT NULL default '0000-00-00 00:00:00',
  `created` datetime NOT NULL default '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'70151662','$P$B/HUUNnbQDAWIigY0hsVfHikp3KMrk/','inei@inei.com',1,1,0,NULL,NULL,NULL,NULL,NULL,'127.0.0.1','2014-08-25 00:27:16','2014-08-23 15:41:10','2014-08-25 04:27:16'),(2,'12345678','$P$BC6.P71Lp9y9S4HqUWx8C9s122.2l91','inei@inei2.com',5,1,0,NULL,NULL,NULL,NULL,NULL,'127.0.0.1','0000-00-00 00:00:00','2014-08-23 15:44:49','2014-08-23 19:44:49');
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

-- Dump completed on 2014-08-25  9:34:43
