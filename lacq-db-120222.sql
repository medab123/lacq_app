-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: lacq_app
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `activity_log` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint unsigned DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint unsigned DEFAULT NULL,
  `properties` json DEFAULT NULL,
  `batch_uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject` (`subject_type`,`subject_id`),
  KEY `causer` (`causer_type`,`causer_id`),
  KEY `activity_log_log_name_index` (`log_name`)
) ENGINE=InnoDB AUTO_INCREMENT=346 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity_log`
--

LOCK TABLES `activity_log` WRITE;
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
INSERT INTO `activity_log` VALUES (1,'add','3','App\\Models\\Client',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 08:54:02','2022-01-24 08:54:02'),(2,'add','9','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 08:55:33','2022-01-24 08:55:33'),(3,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',7,'[]',NULL,'2022-01-24 09:00:22','2022-01-24 09:00:22'),(4,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',6,'[]',NULL,'2022-01-24 09:04:36','2022-01-24 09:04:36'),(5,'add','4','App\\Models\\Client',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 09:37:06','2022-01-24 09:37:06'),(6,'add','10','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 09:41:20','2022-01-24 09:41:20'),(7,'add','5','App\\Models\\Client',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 09:43:53','2022-01-24 09:43:53'),(8,'add','11','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 10:03:43','2022-01-24 10:03:43'),(9,'add','12','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 10:03:43','2022-01-24 10:03:43'),(10,'delete','1','App\\Models\\Client',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-24 10:04:11','2022-01-24 10:04:11'),(11,'delete','2','App\\Models\\Client',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-24 10:04:32','2022-01-24 10:04:32'),(12,'add','13','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:11','2022-01-24 11:05:11'),(13,'add','14','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:11','2022-01-24 11:05:11'),(14,'add','15','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:11','2022-01-24 11:05:11'),(15,'add','16','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:11','2022-01-24 11:05:11'),(16,'add','17','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:11','2022-01-24 11:05:11'),(17,'add','18','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:11','2022-01-24 11:05:11'),(18,'add','19','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:12','2022-01-24 11:05:12'),(19,'add','20','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:12','2022-01-24 11:05:12'),(20,'add','21','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:12','2022-01-24 11:05:12'),(21,'add','22','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:12','2022-01-24 11:05:12'),(22,'add','23','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:12','2022-01-24 11:05:12'),(23,'add','24','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:12','2022-01-24 11:05:12'),(24,'add','25','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:12','2022-01-24 11:05:12'),(25,'add','26','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:13','2022-01-24 11:05:13'),(26,'add','27','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:13','2022-01-24 11:05:13'),(27,'add','28','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:13','2022-01-24 11:05:13'),(28,'add','29','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:13','2022-01-24 11:05:13'),(29,'add','30','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:13','2022-01-24 11:05:13'),(30,'add','31','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:13','2022-01-24 11:05:13'),(31,'add','32','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:13','2022-01-24 11:05:13'),(32,'add','33','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:13','2022-01-24 11:05:13'),(33,'add','34','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:14','2022-01-24 11:05:14'),(34,'add','35','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:14','2022-01-24 11:05:14'),(35,'add','36','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:14','2022-01-24 11:05:14'),(36,'add','37','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-24 11:05:14','2022-01-24 11:05:14'),(37,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 09:29:22','2022-01-25 09:29:22'),(38,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 11:58:27','2022-01-25 11:58:27'),(39,'update','9','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 12:04:21','2022-01-25 12:04:21'),(40,'update','10','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 12:04:42','2022-01-25 12:04:42'),(41,'add','38','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 12:48:29','2022-01-25 12:48:29'),(42,'add','39','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 12:48:29','2022-01-25 12:48:29'),(43,'add','40','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 12:48:30','2022-01-25 12:48:30'),(44,'add','41','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 12:48:30','2022-01-25 12:48:30'),(45,'add','42','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 12:48:30','2022-01-25 12:48:30'),(46,'add','43','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 12:48:30','2022-01-25 12:48:30'),(47,'add','44','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 12:48:30','2022-01-25 12:48:30'),(48,'add','45','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 12:48:30','2022-01-25 12:48:30'),(49,'add','6','App\\Models\\Client',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 12:58:04','2022-01-25 12:58:04'),(50,'add','46','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:11:00','2022-01-25 13:11:00'),(51,'add','47','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:11:00','2022-01-25 13:11:00'),(52,'add','48','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:11:01','2022-01-25 13:11:01'),(53,'add','49','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:11:01','2022-01-25 13:11:01'),(54,'add','50','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:11:01','2022-01-25 13:11:01'),(55,'add','51','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:11:01','2022-01-25 13:11:01'),(56,'add','52','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:11:01','2022-01-25 13:11:01'),(57,'add','53','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:11:01','2022-01-25 13:11:01'),(58,'add','54','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:11:01','2022-01-25 13:11:01'),(59,'add','55','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:11:02','2022-01-25 13:11:02'),(60,'add','56','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:22','2022-01-25 13:38:22'),(61,'add','57','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:22','2022-01-25 13:38:22'),(62,'add','58','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:22','2022-01-25 13:38:22'),(63,'add','59','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:23','2022-01-25 13:38:23'),(64,'add','60','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:23','2022-01-25 13:38:23'),(65,'add','61','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:23','2022-01-25 13:38:23'),(66,'add','62','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:23','2022-01-25 13:38:23'),(67,'add','63','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:23','2022-01-25 13:38:23'),(68,'add','64','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:23','2022-01-25 13:38:23'),(69,'add','65','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:24','2022-01-25 13:38:24'),(70,'add','66','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:24','2022-01-25 13:38:24'),(71,'add','67','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:24','2022-01-25 13:38:24'),(72,'add','68','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:24','2022-01-25 13:38:24'),(73,'add','69','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:24','2022-01-25 13:38:24'),(74,'add','70','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:24','2022-01-25 13:38:24'),(75,'add','71','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:25','2022-01-25 13:38:25'),(76,'add','72','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:25','2022-01-25 13:38:25'),(77,'add','73','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:25','2022-01-25 13:38:25'),(78,'add','74','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:25','2022-01-25 13:38:25'),(79,'add','75','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:25','2022-01-25 13:38:25'),(80,'add','76','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:25','2022-01-25 13:38:25'),(81,'add','77','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:25','2022-01-25 13:38:25'),(82,'add','78','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:25','2022-01-25 13:38:25'),(83,'add','79','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:26','2022-01-25 13:38:26'),(84,'add','80','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:26','2022-01-25 13:38:26'),(85,'add','81','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:26','2022-01-25 13:38:26'),(86,'add','82','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:26','2022-01-25 13:38:26'),(87,'add','83','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:26','2022-01-25 13:38:26'),(88,'add','84','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:26','2022-01-25 13:38:26'),(89,'add','85','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:26','2022-01-25 13:38:26'),(90,'add','86','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:26','2022-01-25 13:38:26'),(91,'add','87','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:26','2022-01-25 13:38:26'),(92,'add','88','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:27','2022-01-25 13:38:27'),(93,'add','89','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:27','2022-01-25 13:38:27'),(94,'add','90','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:27','2022-01-25 13:38:27'),(95,'add','91','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:27','2022-01-25 13:38:27'),(96,'add','92','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:27','2022-01-25 13:38:27'),(97,'add','93','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:27','2022-01-25 13:38:27'),(98,'add','94','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:27','2022-01-25 13:38:27'),(99,'add','95','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:27','2022-01-25 13:38:27'),(100,'add','96','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:27','2022-01-25 13:38:27'),(101,'add','97','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:27','2022-01-25 13:38:27'),(102,'add','98','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:27','2022-01-25 13:38:27'),(103,'add','99','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:27','2022-01-25 13:38:27'),(104,'add','100','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:27','2022-01-25 13:38:27'),(105,'add','101','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:28','2022-01-25 13:38:28'),(106,'add','102','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:28','2022-01-25 13:38:28'),(107,'add','103','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:28','2022-01-25 13:38:28'),(108,'add','104','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:28','2022-01-25 13:38:28'),(109,'add','105','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:28','2022-01-25 13:38:28'),(110,'add','106','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:28','2022-01-25 13:38:28'),(111,'add','107','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:28','2022-01-25 13:38:28'),(112,'add','108','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:28','2022-01-25 13:38:28'),(113,'add','109','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:28','2022-01-25 13:38:28'),(114,'add','110','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:28','2022-01-25 13:38:28'),(115,'add','111','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:29','2022-01-25 13:38:29'),(116,'add','112','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:29','2022-01-25 13:38:29'),(117,'add','113','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:29','2022-01-25 13:38:29'),(118,'add','114','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:29','2022-01-25 13:38:29'),(119,'add','115','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:29','2022-01-25 13:38:29'),(120,'add','116','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:29','2022-01-25 13:38:29'),(121,'add','117','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:29','2022-01-25 13:38:29'),(122,'add','118','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:29','2022-01-25 13:38:29'),(123,'add','119','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:30','2022-01-25 13:38:30'),(124,'add','120','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:30','2022-01-25 13:38:30'),(125,'add','121','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:30','2022-01-25 13:38:30'),(126,'add','122','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:30','2022-01-25 13:38:30'),(127,'add','123','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:30','2022-01-25 13:38:30'),(128,'add','124','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:30','2022-01-25 13:38:30'),(129,'add','125','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:30','2022-01-25 13:38:30'),(130,'add','126','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:31','2022-01-25 13:38:31'),(131,'add','127','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:31','2022-01-25 13:38:31'),(132,'add','128','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:31','2022-01-25 13:38:31'),(133,'add','129','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:31','2022-01-25 13:38:31'),(134,'add','130','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:31','2022-01-25 13:38:31'),(135,'add','131','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:31','2022-01-25 13:38:31'),(136,'add','132','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:31','2022-01-25 13:38:31'),(137,'add','133','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:31','2022-01-25 13:38:31'),(138,'add','134','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:32','2022-01-25 13:38:32'),(139,'add','135','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:38:32','2022-01-25 13:38:32'),(140,'add','136','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:41:51','2022-01-25 13:41:51'),(141,'add','137','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:43:04','2022-01-25 13:43:04'),(142,'add','138','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:43:57','2022-01-25 13:43:57'),(143,'add','139','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:44:30','2022-01-25 13:44:30'),(144,'add','7','App\\Models\\Client',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:45:09','2022-01-25 13:45:09'),(145,'add','140','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:47:44','2022-01-25 13:47:44'),(146,'add','141','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:47:45','2022-01-25 13:47:45'),(147,'add','8','App\\Models\\Client',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:48:21','2022-01-25 13:48:21'),(148,'add','142','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:50:38','2022-01-25 13:50:38'),(149,'add','143','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:50:39','2022-01-25 13:50:39'),(150,'add','9','App\\Models\\Client',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:51:34','2022-01-25 13:51:34'),(151,'add','144','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:54:36','2022-01-25 13:54:36'),(152,'add','145','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:54:36','2022-01-25 13:54:36'),(153,'add','146','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:54:36','2022-01-25 13:54:36'),(154,'add','147','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:55:35','2022-01-25 13:55:35'),(155,'add','10','App\\Models\\Client',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:56:05','2022-01-25 13:56:05'),(156,'add','148','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:59:20','2022-01-25 13:59:20'),(157,'add','149','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:59:20','2022-01-25 13:59:20'),(158,'add','150','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:59:20','2022-01-25 13:59:20'),(159,'add','151','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 13:59:20','2022-01-25 13:59:20'),(160,'add','152','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 14:10:19','2022-01-25 14:10:19'),(161,'add','153','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 14:10:19','2022-01-25 14:10:19'),(162,'add','154','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 14:10:19','2022-01-25 14:10:19'),(163,'add','155','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 14:10:19','2022-01-25 14:10:19'),(164,'add','156','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 14:10:19','2022-01-25 14:10:19'),(165,'add','157','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 14:10:19','2022-01-25 14:10:19'),(166,'add','158','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 14:13:12','2022-01-25 14:13:12'),(167,'add','11','App\\Models\\Client',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 14:13:39','2022-01-25 14:13:39'),(168,'add','159','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 14:15:50','2022-01-25 14:15:50'),(169,'add','12','App\\Models\\Client',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 14:16:16','2022-01-25 14:16:16'),(170,'add','160','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 14:25:23','2022-01-25 14:25:23'),(171,'add','161','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 14:25:23','2022-01-25 14:25:23'),(172,'add','162','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 14:25:23','2022-01-25 14:25:23'),(173,'add','163','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 14:25:23','2022-01-25 14:25:23'),(174,'add','164','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 14:25:24','2022-01-25 14:25:24'),(175,'add','165','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 14:25:24','2022-01-25 14:25:24'),(176,'add','166','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 14:25:24','2022-01-25 14:25:24'),(177,'add','167','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 14:25:24','2022-01-25 14:25:24'),(178,'add','168','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 14:25:24','2022-01-25 14:25:24'),(179,'add','169','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-25 14:25:24','2022-01-25 14:25:24'),(180,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',6,'[]',NULL,'2022-01-25 14:25:55','2022-01-25 14:25:55'),(181,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-26 08:55:57','2022-01-26 08:55:57'),(182,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',6,'[]',NULL,'2022-01-26 10:10:03','2022-01-26 10:10:03'),(183,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',6,'[]',NULL,'2022-01-26 13:56:15','2022-01-26 13:56:15'),(184,'Commande rejeter','145','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',6,'[]',NULL,'2022-01-26 13:58:59','2022-01-26 13:58:59'),(185,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-26 14:02:58','2022-01-26 14:02:58'),(186,'update','149','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-26 14:24:12','2022-01-26 14:24:12'),(187,'update','1','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-26 14:28:50','2022-01-26 14:28:50'),(188,'update','2','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-26 14:29:15','2022-01-26 14:29:15'),(189,'update','3','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-26 14:29:34','2022-01-26 14:29:34'),(190,'update','4','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-26 14:30:06','2022-01-26 14:30:06'),(191,'update','5','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-26 14:30:34','2022-01-26 14:30:34'),(192,'update','6','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-26 14:30:53','2022-01-26 14:30:53'),(193,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',2,'[]',NULL,'2022-01-26 14:35:48','2022-01-26 14:35:48'),(194,'delete','7','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-26 14:36:22','2022-01-26 14:36:22'),(195,'Logout','Loged Out','App\\Models\\User',NULL,NULL,'App\\Models\\User',2,'[]',NULL,'2022-01-26 14:36:24','2022-01-26 14:36:24'),(196,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-26 14:36:35','2022-01-26 14:36:35'),(197,'update','8','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-26 14:37:13','2022-01-26 14:37:13'),(198,'delete','9','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-26 14:37:57','2022-01-26 14:37:57'),(199,'delete','10','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-26 14:48:50','2022-01-26 14:48:50'),(200,'update','11','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-26 14:48:56','2022-01-26 14:48:56'),(201,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-26 16:53:29','2022-01-26 16:53:29'),(202,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 07:29:22','2022-01-27 07:29:22'),(203,'update','12','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 07:30:10','2022-01-27 07:30:10'),(204,'delete','13','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 07:32:45','2022-01-27 07:32:45'),(205,'update','14','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 07:33:17','2022-01-27 07:33:17'),(206,'update','15','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 07:34:05','2022-01-27 07:34:05'),(207,'update','16','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 07:34:52','2022-01-27 07:34:52'),(208,'update','17','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 07:35:42','2022-01-27 07:35:42'),(209,'update','18','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 07:36:06','2022-01-27 07:36:06'),(210,'update','18','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 07:36:22','2022-01-27 07:36:22'),(211,'update','19','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 07:36:56','2022-01-27 07:36:56'),(212,'update','20','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 07:37:36','2022-01-27 07:37:36'),(213,'delete','21','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 07:37:43','2022-01-27 07:37:43'),(214,'update','22','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 07:38:41','2022-01-27 07:38:41'),(215,'update','23','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 07:39:15','2022-01-27 07:39:15'),(216,'update','24','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 07:42:02','2022-01-27 07:42:02'),(217,'update','25','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 07:42:44','2022-01-27 07:42:44'),(218,'delete','26','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:02:31','2022-01-27 08:02:31'),(219,'update','27','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:03:59','2022-01-27 08:03:59'),(220,'update','28','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:04:45','2022-01-27 08:04:45'),(221,'update','29','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:05:11','2022-01-27 08:05:11'),(222,'update','30','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:05:39','2022-01-27 08:05:39'),(223,'update','31','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:06:20','2022-01-27 08:06:20'),(224,'update','32','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:07:14','2022-01-27 08:07:14'),(225,'update','33','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:07:40','2022-01-27 08:07:40'),(226,'delete','34','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:07:58','2022-01-27 08:07:58'),(227,'delete','35','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:08:55','2022-01-27 08:08:55'),(228,'update','36','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:09:32','2022-01-27 08:09:32'),(229,'delete','37','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:10:26','2022-01-27 08:10:26'),(230,'update','38','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:11:42','2022-01-27 08:11:42'),(231,'delete','39','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:12:13','2022-01-27 08:12:13'),(232,'update','40','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:12:48','2022-01-27 08:12:48'),(233,'update','41','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:13:06','2022-01-27 08:13:06'),(234,'update','41','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:13:37','2022-01-27 08:13:37'),(235,'delete','42','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:13:41','2022-01-27 08:13:41'),(236,'update','43','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:14:25','2022-01-27 08:14:25'),(237,'delete','44','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:14:31','2022-01-27 08:14:31'),(238,'update','45','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:16:01','2022-01-27 08:16:01'),(239,'delete','46','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:16:44','2022-01-27 08:16:44'),(240,'delete','47','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:16:52','2022-01-27 08:16:52'),(241,'update','48','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:17:11','2022-01-27 08:17:11'),(242,'delete','49','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:17:31','2022-01-27 08:17:31'),(243,'delete','50','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:17:46','2022-01-27 08:17:46'),(244,'update','51','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:18:04','2022-01-27 08:18:04'),(245,'update','52','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:18:44','2022-01-27 08:18:44'),(246,'delete','53','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:19:39','2022-01-27 08:19:39'),(247,'delete','54','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:19:47','2022-01-27 08:19:47'),(248,'update','55','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:20:04','2022-01-27 08:20:04'),(249,'update','56','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:20:25','2022-01-27 08:20:25'),(250,'update','57','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:20:44','2022-01-27 08:20:44'),(251,'delete','58','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:21:02','2022-01-27 08:21:02'),(252,'update','59','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:21:20','2022-01-27 08:21:20'),(253,'update','60','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:21:43','2022-01-27 08:21:43'),(254,'update','61','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:22:12','2022-01-27 08:22:12'),(255,'update','62','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:22:32','2022-01-27 08:22:32'),(256,'update','63','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:22:53','2022-01-27 08:22:53'),(257,'update','64','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:23:29','2022-01-27 08:23:29'),(258,'delete','68','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:24:19','2022-01-27 08:24:19'),(259,'update','70','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:24:42','2022-01-27 08:24:42'),(260,'update','75','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:25:09','2022-01-27 08:25:09'),(261,'update','76','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:25:26','2022-01-27 08:25:26'),(262,'delete','75','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:25:30','2022-01-27 08:25:30'),(263,'update','14','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:27:39','2022-01-27 08:27:39'),(264,'update','43','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:28:02','2022-01-27 08:28:02'),(265,'update','15','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:42:10','2022-01-27 08:42:10'),(266,'update','45','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:42:34','2022-01-27 08:42:34'),(267,'update','16','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:43:52','2022-01-27 08:43:52'),(268,'update','48','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:44:06','2022-01-27 08:44:06'),(269,'update','40','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:44:36','2022-01-27 08:44:36'),(270,'update','41','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:45:38','2022-01-27 08:45:38'),(271,'update','38','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:46:26','2022-01-27 08:46:26'),(272,'update','38','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:46:53','2022-01-27 08:46:53'),(273,'update','30','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:47:37','2022-01-27 08:47:37'),(274,'update','25','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:47:54','2022-01-27 08:47:54'),(275,'update','24','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:48:13','2022-01-27 08:48:13'),(276,'update','76','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:48:25','2022-01-27 08:48:25'),(277,'update','36','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:48:37','2022-01-27 08:48:37'),(278,'update','33','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:48:57','2022-01-27 08:48:57'),(279,'update','31','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:49:10','2022-01-27 08:49:10'),(280,'update','32','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:49:30','2022-01-27 08:49:30'),(281,'update','1','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:50:15','2022-01-27 08:50:15'),(282,'update','8','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:50:27','2022-01-27 08:50:27'),(283,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',6,'[]',NULL,'2022-01-27 08:51:27','2022-01-27 08:51:27'),(284,'update','2','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:51:57','2022-01-27 08:51:57'),(285,'update','11','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:52:43','2022-01-27 08:52:43'),(286,'update','18','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:54:36','2022-01-27 08:54:36'),(287,'update','19','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:54:56','2022-01-27 08:54:56'),(288,'update','22','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:55:21','2022-01-27 08:55:21'),(289,'update','20','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:55:55','2022-01-27 08:55:55'),(290,'update','52','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:59:29','2022-01-27 08:59:29'),(291,'update','27','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 08:59:52','2022-01-27 08:59:52'),(292,'update','17','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 09:02:55','2022-01-27 09:02:55'),(293,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-27 09:09:30','2022-01-27 09:09:30'),(294,'Logout','Loged Out','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-27 09:13:52','2022-01-27 09:13:52'),(295,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',6,'[]',NULL,'2022-01-27 09:15:26','2022-01-27 09:15:26'),(296,'delete','28','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 09:21:04','2022-01-27 09:21:04'),(297,'update','29','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 09:24:47','2022-01-27 09:24:47'),(298,'update','6','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 09:28:34','2022-01-27 09:28:34'),(299,'update','6','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 09:29:20','2022-01-27 09:29:20'),(300,'delete','12','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 09:31:10','2022-01-27 09:31:10'),(301,'commande valider','140','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',6,'[]',NULL,'2022-01-27 09:41:57','2022-01-27 09:41:57'),(302,'commande valider','141','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',6,'[]',NULL,'2022-01-27 10:14:48','2022-01-27 10:14:48'),(303,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 13:32:10','2022-01-27 13:32:10'),(304,'update','70','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 13:32:40','2022-01-27 13:32:40'),(305,'update','66','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 13:32:58','2022-01-27 13:32:58'),(306,'update','71','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 13:34:39','2022-01-27 13:34:39'),(307,'update','62','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 13:35:01','2022-01-27 13:35:01'),(308,'add','77','App\\Models\\Commercial',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-27 13:36:43','2022-01-27 13:36:43'),(309,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-27 15:24:36','2022-01-27 15:24:36'),(310,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-27 21:50:40','2022-01-27 21:50:40'),(311,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-28 08:55:33','2022-01-28 08:55:33'),(312,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-28 14:33:38','2022-01-28 14:33:38'),(313,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-28 23:01:06','2022-01-28 23:01:06'),(314,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-28 23:46:45','2022-01-28 23:46:45'),(315,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-30 00:15:25','2022-01-30 00:15:25'),(316,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-30 14:26:08','2022-01-30 14:26:08'),(317,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-30 16:00:11','2022-01-30 16:00:11'),(318,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-30 16:37:19','2022-01-30 16:37:19'),(319,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-30 16:59:43','2022-01-30 16:59:43'),(320,'Logout','Loged Out','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-30 17:02:35','2022-01-30 17:02:35'),(321,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-30 17:02:50','2022-01-30 17:02:50'),(322,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-31 07:04:08','2022-01-31 07:04:08'),(323,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-31 09:42:49','2022-01-31 09:42:49'),(324,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-31 12:42:15','2022-01-31 12:42:15'),(325,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',6,'[]',NULL,'2022-01-31 14:02:58','2022-01-31 14:02:58'),(326,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-31 14:34:35','2022-01-31 14:34:35'),(327,'add','13','App\\Models\\Client',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-31 14:36:15','2022-01-31 14:36:15'),(328,'add','170','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-31 14:39:54','2022-01-31 14:39:54'),(329,'update','170','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-01-31 14:43:04','2022-01-31 14:43:04'),(330,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-01-31 14:57:50','2022-01-31 14:57:50'),(331,'commande valider','170','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',6,'[]',NULL,'2022-01-31 15:03:50','2022-01-31 15:03:50'),(332,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-02-01 13:03:55','2022-02-01 13:03:55'),(333,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-02-02 08:19:26','2022-02-02 08:19:26'),(334,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',6,'[]',NULL,'2022-02-02 09:24:17','2022-02-02 09:24:17'),(335,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',6,'[]',NULL,'2022-02-02 12:23:21','2022-02-02 12:23:21'),(336,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-02-02 14:09:31','2022-02-02 14:09:31'),(337,'update','analyse 1 update','App\\Models\\Analys',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-02-02 14:12:04','2022-02-02 14:12:04'),(338,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-02-02 21:18:38','2022-02-02 21:18:38'),(339,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-02-07 07:34:12','2022-02-07 07:34:12'),(340,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',8,'[]',NULL,'2022-02-07 13:17:45','2022-02-07 13:17:45'),(341,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-02-09 20:25:33','2022-02-09 20:25:33'),(342,'update','analyse 1 update','App\\Models\\Analys',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-02-09 20:38:00','2022-02-09 20:38:00'),(343,'update','9','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-02-09 20:50:13','2022-02-09 20:50:13'),(344,'update','9','App\\Models\\Commande',NULL,NULL,'App\\Models\\User',1,'[]',NULL,'2022-02-09 20:50:24','2022-02-09 20:50:24'),(345,'Login','Loged in ','App\\Models\\User',NULL,NULL,'App\\Models\\User',2,'[]',NULL,'2022-02-11 22:46:46','2022-02-11 22:46:46');
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `analyse_ameo`
--

DROP TABLE IF EXISTS `analyse_ameo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `analyse_ameo` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `commande_id` bigint unsigned NOT NULL,
  `MS` double(8,2) DEFAULT NULL,
  `Etat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PH` double(8,2) DEFAULT NULL,
  `EC` double(8,2) DEFAULT NULL,
  `NTK` double(8,2) DEFAULT NULL,
  `PT` double(8,2) DEFAULT NULL,
  `K` double(8,2) DEFAULT NULL,
  `Na` double(8,2) DEFAULT NULL,
  `Ca` double(8,2) DEFAULT NULL,
  `Mg` double(8,2) DEFAULT NULL,
  `M_O` double(8,2) DEFAULT NULL,
  `Zn` double(8,2) DEFAULT NULL,
  `Cu` double(8,2) DEFAULT NULL,
  `Mn` double(8,2) DEFAULT NULL,
  `Fe` double(8,2) DEFAULT NULL,
  `B` double(8,2) DEFAULT NULL,
  `Cl` double(8,2) DEFAULT NULL,
  `MN_NH4` double(8,2) DEFAULT NULL,
  `N_NO3` double(8,2) DEFAULT NULL,
  `As` double(8,2) DEFAULT NULL,
  `Cd` double(8,2) DEFAULT NULL,
  `Co` double(8,2) DEFAULT NULL,
  `Cr` double(8,2) DEFAULT NULL,
  `Hg` double(8,2) DEFAULT NULL,
  `Mo` double(8,2) DEFAULT NULL,
  `Ni` double(8,2) DEFAULT NULL,
  `Pb` double(8,2) DEFAULT NULL,
  `Se` double(8,2) DEFAULT NULL,
  `M_V` double(8,2) DEFAULT NULL,
  `Refus` double(8,2) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `analyse_ameo_commande_id_foreign` (`commande_id`),
  CONSTRAINT `analyse_ameo_commande_id_foreign` FOREIGN KEY (`commande_id`) REFERENCES `commandes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analyse_ameo`
--

LOCK TABLES `analyse_ameo` WRITE;
/*!40000 ALTER TABLE `analyse_ameo` DISABLE KEYS */;
/*!40000 ALTER TABLE `analyse_ameo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `analyse_eap`
--

DROP TABLE IF EXISTS `analyse_eap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `analyse_eap` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `commande_id` bigint unsigned NOT NULL,
  `PH_Unité_PH` double(8,2) DEFAULT NULL,
  `PH-Kcl_Unité_PH` double(8,2) DEFAULT NULL,
  `EC_mS_Cm` double(8,2) DEFAULT NULL,
  `NO3_mg_l` double(8,2) DEFAULT NULL,
  `NO2_mg_l` double(8,2) DEFAULT NULL,
  `NH4_mg_l` double(8,2) DEFAULT NULL,
  `Cl_mg_l` double(8,2) DEFAULT NULL,
  `SO4_mg_l` double(8,2) DEFAULT NULL,
  `P_mg_l` double(8,2) DEFAULT NULL,
  `K_mg_l` double(8,2) DEFAULT NULL,
  `Na_mg_l` double(8,2) DEFAULT NULL,
  `Ca_mg_l` double(8,2) DEFAULT NULL,
  `Mg_mg_l` double(8,2) DEFAULT NULL,
  `Zn-EDTA_mg_l` double(8,2) DEFAULT NULL,
  `Cu-EDTA_mg_l` double(8,2) DEFAULT NULL,
  `Mn-EDTA_mg_l` double(8,2) DEFAULT NULL,
  `Fe-EDTA_mg_l` double(8,2) DEFAULT NULL,
  `NT_‰` double(8,2) DEFAULT NULL,
  `C-O_g_Kg` double(8,2) DEFAULT NULL,
  `HCO3_mg_l` double(8,2) DEFAULT NULL,
  `Ms_%` double(8,2) DEFAULT NULL,
  `Bore_mg_Kg` double(8,2) DEFAULT NULL,
  `Bilan` double(8,2) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `analyse_eap_commande_id_foreign` (`commande_id`),
  CONSTRAINT `analyse_eap_commande_id_foreign` FOREIGN KEY (`commande_id`) REFERENCES `commandes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analyse_eap`
--

LOCK TABLES `analyse_eap` WRITE;
/*!40000 ALTER TABLE `analyse_eap` DISABLE KEYS */;
/*!40000 ALTER TABLE `analyse_eap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `analyse_eau`
--

DROP TABLE IF EXISTS `analyse_eau`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `analyse_eau` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `commande_id` bigint unsigned NOT NULL,
  `plus_moins` double(8,2) DEFAULT NULL,
  `temp_°C` double(8,2) DEFAULT NULL,
  `PH_Unité_PH` double(8,2) DEFAULT NULL,
  `EC_mS_Cm` double(8,2) DEFAULT NULL,
  `NO3_ppm` double(8,2) DEFAULT NULL,
  `NO2_ppm` double(8,2) DEFAULT NULL,
  `NH4_ppm` double(8,2) DEFAULT NULL,
  `Cl_ppm` double(8,2) DEFAULT NULL,
  `SO4_ppm` double(8,2) DEFAULT NULL,
  `H2PO4_ppm` double(8,2) DEFAULT NULL,
  `HCO3_ppm` double(8,2) DEFAULT NULL,
  `CO3_ppm` double(8,2) DEFAULT NULL,
  `K_ppm` double(8,2) DEFAULT NULL,
  `Ca_ppm` double(8,2) DEFAULT NULL,
  `Mg_ppm` double(8,2) DEFAULT NULL,
  `Zn_ppm` double(8,2) DEFAULT NULL,
  `Cu_ppm` double(8,2) DEFAULT NULL,
  `Mn_ppm` double(8,2) DEFAULT NULL,
  `Fe_ppm` double(8,2) DEFAULT NULL,
  `B_ppm` double(8,2) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `analyse_eau_commande_id_foreign` (`commande_id`),
  CONSTRAINT `analyse_eau_commande_id_foreign` FOREIGN KEY (`commande_id`) REFERENCES `commandes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analyse_eau`
--

LOCK TABLES `analyse_eau` WRITE;
/*!40000 ALTER TABLE `analyse_eau` DISABLE KEYS */;
/*!40000 ALTER TABLE `analyse_eau` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `analyse_eau_potable`
--

DROP TABLE IF EXISTS `analyse_eau_potable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `analyse_eau_potable` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `commande_id` bigint unsigned NOT NULL,
  `temp` double(8,2) DEFAULT NULL,
  `Cl2` double(8,2) DEFAULT NULL,
  `O2` double(8,2) DEFAULT NULL,
  `PH` double(8,2) DEFAULT NULL,
  `EC` double(8,2) DEFAULT NULL,
  `NO3` double(8,2) DEFAULT NULL,
  `NO2` double(8,2) DEFAULT NULL,
  `NH4` double(8,2) DEFAULT NULL,
  `Cl` double(8,2) DEFAULT NULL,
  `SO4` double(8,2) DEFAULT NULL,
  `HCO3` double(8,2) DEFAULT NULL,
  `CO3` double(8,2) DEFAULT NULL,
  `Ca` double(8,2) DEFAULT NULL,
  `Mg` double(8,2) DEFAULT NULL,
  `Oxydabilite` double(8,2) DEFAULT NULL,
  `Turbidite` double(8,2) DEFAULT NULL,
  `Zn` double(8,2) DEFAULT NULL,
  `Cu` double(8,2) DEFAULT NULL,
  `Mn` double(8,2) DEFAULT NULL,
  `Fe` double(8,2) DEFAULT NULL,
  `B` double(8,2) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `analyse_eau_potable_commande_id_foreign` (`commande_id`),
  CONSTRAINT `analyse_eau_potable_commande_id_foreign` FOREIGN KEY (`commande_id`) REFERENCES `commandes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analyse_eau_potable`
--

LOCK TABLES `analyse_eau_potable` WRITE;
/*!40000 ALTER TABLE `analyse_eau_potable` DISABLE KEYS */;
INSERT INTO `analyse_eau_potable` VALUES (1,170,NULL,NULL,NULL,6.92,1.80,4.78,NULL,0.08,330.71,174.73,206.40,NULL,97.60,47.73,1.26,0.66,0.01,NULL,NULL,0.01,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `analyse_eau_potable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `analyse_eaus`
--

DROP TABLE IF EXISTS `analyse_eaus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `analyse_eaus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analyse_eaus`
--

LOCK TABLES `analyse_eaus` WRITE;
/*!40000 ALTER TABLE `analyse_eaus` DISABLE KEYS */;
/*!40000 ALTER TABLE `analyse_eaus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `analyse_sol`
--

DROP TABLE IF EXISTS `analyse_sol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `analyse_sol` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `commande_id` bigint unsigned NOT NULL,
  `CT_%` double(8,2) DEFAULT NULL,
  `CA_%` double(8,2) DEFAULT NULL,
  `PH_Unité_PH` double(8,2) DEFAULT NULL,
  `EC_mS_Cm` double(8,2) DEFAULT NULL,
  `Cl_mg_Kg` double(8,2) DEFAULT NULL,
  `P2O5_mg_Kg` double(8,2) DEFAULT NULL,
  `K2O_mg_Kg` double(8,2) DEFAULT NULL,
  `Na2O_g_Kg` double(8,2) DEFAULT NULL,
  `CaO_g_Kg` double(8,2) DEFAULT NULL,
  `MgO_mg_Kg` double(8,2) DEFAULT NULL,
  `Zn-EDTA_mg_Kg` double(8,2) DEFAULT NULL,
  `Cu-EDTA_mg_Kg` double(8,2) DEFAULT NULL,
  `Mn-EDTA_mg_Kg` double(8,2) DEFAULT NULL,
  `Fe-EDTA_mg_Kg` double(8,2) DEFAULT NULL,
  `NT_‰` double(8,2) DEFAULT NULL,
  `C-O_g_Kg` double(8,2) DEFAULT NULL,
  `CEC_Cmol_Kg` double(8,2) DEFAULT NULL,
  `pH-KCI_Unité_pH` double(8,2) DEFAULT NULL,
  `N-NO3_mg_Kg` double(8,2) DEFAULT NULL,
  `N-NH4_mg_Kg` double(8,2) DEFAULT NULL,
  `Humidité_%` double(8,2) DEFAULT NULL,
  `Agrile_‰` double(8,2) DEFAULT NULL,
  `Limon_‰` double(8,2) DEFAULT NULL,
  `Sable_‰` double(8,2) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `analyse_sol_commande_id_foreign` (`commande_id`),
  CONSTRAINT `analyse_sol_commande_id_foreign` FOREIGN KEY (`commande_id`) REFERENCES `commandes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analyse_sol`
--

LOCK TABLES `analyse_sol` WRITE;
/*!40000 ALTER TABLE `analyse_sol` DISABLE KEYS */;
INSERT INTO `analyse_sol` VALUES (2,9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `analyse_sol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `analyse_terre`
--

DROP TABLE IF EXISTS `analyse_terre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `analyse_terre` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `commande_id` bigint unsigned NOT NULL,
  `CT_%` double(8,2) DEFAULT NULL,
  `CA_%` double(8,2) DEFAULT NULL,
  `PH_Unité_PH` double(8,2) DEFAULT NULL,
  `EC_mS_Cm` double(8,2) DEFAULT NULL,
  `Cl_mg_Kg` double(8,2) DEFAULT NULL,
  `P2O5_mg_Kg` double(8,2) DEFAULT NULL,
  `K2O_mg_Kg` double(8,2) DEFAULT NULL,
  `Na2O_g_Kg` double(8,2) DEFAULT NULL,
  `CaO_g_Kg` double(8,2) DEFAULT NULL,
  `MgO_mg_Kg` double(8,2) DEFAULT NULL,
  `Zn-EDTA_mg_Kg` double(8,2) DEFAULT NULL,
  `Cu-EDTA_mg_Kg` double(8,2) DEFAULT NULL,
  `Mn-EDTA_mg_Kg` double(8,2) DEFAULT NULL,
  `Fe-EDTA_mg_Kg` double(8,2) DEFAULT NULL,
  `NT_‰` double(8,2) DEFAULT NULL,
  `C-O_g_Kg` double(8,2) DEFAULT NULL,
  `CEC_Cmol_Kg` double(8,2) DEFAULT NULL,
  `pH-KCI_Unité_pH` double(8,2) DEFAULT NULL,
  `N-NO3_mg_Kg` double(8,2) DEFAULT NULL,
  `N-NH4_mg_Kg` double(8,2) DEFAULT NULL,
  `Humidité_%` double(8,2) DEFAULT NULL,
  `Agrile_‰` double(8,2) DEFAULT NULL,
  `Limon_‰` double(8,2) DEFAULT NULL,
  `Sable_‰` double(8,2) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `analyse_terre_commande_id_foreign` (`commande_id`),
  CONSTRAINT `analyse_terre_commande_id_foreign` FOREIGN KEY (`commande_id`) REFERENCES `commandes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analyse_terre`
--

LOCK TABLES `analyse_terre` WRITE;
/*!40000 ALTER TABLE `analyse_terre` DISABLE KEYS */;
/*!40000 ALTER TABLE `analyse_terre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `analyse_unite_ameo`
--

DROP TABLE IF EXISTS `analyse_unite_ameo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `analyse_unite_ameo` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `parametre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analyse_unite_ameo`
--

LOCK TABLES `analyse_unite_ameo` WRITE;
/*!40000 ALTER TABLE `analyse_unite_ameo` DISABLE KEYS */;
INSERT INTO `analyse_unite_ameo` VALUES (1,'MS','%',NULL,NULL),(2,'PH','Unite_pH',NULL,NULL),(3,'EC','mS_Cm',NULL,NULL),(4,'NTK','%',NULL,NULL),(5,'PT','%',NULL,NULL),(6,'K','%',NULL,NULL),(7,'Na','%',NULL,NULL),(8,'Ca','%',NULL,NULL),(9,'Mg','%',NULL,NULL),(10,'M_O','%',NULL,NULL),(11,'Zn','mg_kg',NULL,NULL),(12,'Cu','mg_kg',NULL,NULL),(13,'Mn','mg_kg',NULL,NULL),(14,'Fe','mg_kg',NULL,NULL),(15,'B','mg_kg',NULL,NULL),(16,'Cl','%',NULL,NULL),(17,'MN_NH4','g_kg',NULL,NULL),(18,'N_NO3','mg_kg',NULL,NULL),(19,'As','mg_kg',NULL,NULL),(20,'Cd','mg_kg',NULL,NULL),(21,'Co','mg_kg',NULL,NULL),(22,'Cr','mg_kg',NULL,NULL),(23,'Hg','mg_kg',NULL,NULL),(24,'Mo','mg_kg',NULL,NULL),(25,'Ni','mg_kg',NULL,NULL),(26,'Pb','mg_kg',NULL,NULL),(27,'Se','mg_kg',NULL,NULL),(28,'M_V','G_L',NULL,NULL),(29,'Refus','%',NULL,NULL);
/*!40000 ALTER TABLE `analyse_unite_ameo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `analyse_unite_eau_potable`
--

DROP TABLE IF EXISTS `analyse_unite_eau_potable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `analyse_unite_eau_potable` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `parametre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analyse_unite_eau_potable`
--

LOCK TABLES `analyse_unite_eau_potable` WRITE;
/*!40000 ALTER TABLE `analyse_unite_eau_potable` DISABLE KEYS */;
INSERT INTO `analyse_unite_eau_potable` VALUES (1,'temp','°C',NULL,NULL),(2,'Cl2','ppm',NULL,NULL),(3,'O2','ppm',NULL,NULL),(4,'PH','Unite_pH',NULL,NULL),(5,'EC','mS_Cm',NULL,NULL),(6,'NO3','ppm',NULL,NULL),(7,'NO2','ppm',NULL,NULL),(8,'NH4','ppm',NULL,NULL),(9,'Cl','ppm',NULL,NULL),(10,'SO4','ppm',NULL,NULL),(11,'HCO3','ppm',NULL,NULL),(12,'CO3','ppm',NULL,NULL),(13,'Ca','ppm',NULL,NULL),(14,'Mg','ppm',NULL,NULL),(15,'Oxydabilite','ppm',NULL,NULL),(16,'Turbidite','NTU',NULL,NULL),(17,'Zn','ppm',NULL,NULL),(18,'Cu','ppm',NULL,NULL),(19,'Mn','ppm',NULL,NULL),(20,'Fe','ppm',NULL,NULL),(21,'B','ppm',NULL,NULL);
/*!40000 ALTER TABLE `analyse_unite_eau_potable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `analyse_veg`
--

DROP TABLE IF EXISTS `analyse_veg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `analyse_veg` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `commande_id` bigint unsigned NOT NULL,
  `Humidité_%` double(8,2) DEFAULT NULL,
  `NTK_%` double(8,2) DEFAULT NULL,
  `PT_%` double(8,2) DEFAULT NULL,
  `K_%` double(8,2) DEFAULT NULL,
  `Na_%` double(8,2) DEFAULT NULL,
  `Ca_%` double(8,2) DEFAULT NULL,
  `Mg_%` double(8,2) DEFAULT NULL,
  `Zn_mg_Kg` double(8,2) DEFAULT NULL,
  `Cu_mg_Kg` double(8,2) DEFAULT NULL,
  `Mn_mg_Kg` double(8,2) DEFAULT NULL,
  `Fe_mg_Kg` double(8,2) DEFAULT NULL,
  `B_mg_Kg` double(8,2) DEFAULT NULL,
  `Poids_g` double(8,2) DEFAULT NULL,
  `S_%` double(8,2) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `analyse_veg_commande_id_foreign` (`commande_id`),
  CONSTRAINT `analyse_veg_commande_id_foreign` FOREIGN KEY (`commande_id`) REFERENCES `commandes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analyse_veg`
--

LOCK TABLES `analyse_veg` WRITE;
/*!40000 ALTER TABLE `analyse_veg` DISABLE KEYS */;
/*!40000 ALTER TABLE `analyse_veg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `cin_rc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exploiteur` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organisme` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clients_cin_rc_unique` (`cin_rc`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (3,'C89774','DOUAR OULED RZAG FRITISSA OUTAT EL HAJ','DRISS EL MOUSSAOUY','_','2022-01-24 08:54:02','2022-01-24 08:54:02',NULL),(4,'CB220599','TAGOUR MISSOUR','EL HARRASS ALI','_','2022-01-24 09:37:06','2022-01-24 09:37:06',NULL),(5,'_','MEKNES','EVM','ELEPHANT VERT MAROC','2022-01-24 09:43:53','2022-01-24 09:43:53',NULL),(6,'RC 8329','AIT AMIRA','DOMAINE MARGAU','_','2022-01-25 12:58:04','2022-01-25 12:58:04',NULL),(7,'D553023','EL HAJEB','YAKINE KAMAL','_','2022-01-25 13:45:09','2022-01-25 13:45:09',NULL),(8,'W209348','MEKNES','EL HMIDI AHMED','_','2022-01-25 13:48:21','2022-01-25 13:48:21',NULL),(9,'RC CI-ABJ-2014-R-3222','ADZOPE CI','BIOFERTIL','_','2022-01-25 13:51:33','2022-01-25 13:51:33',NULL),(10,'JE202580','DOUAR ZAOUI MASSA BELFAA','HRROUG ABDERRAHIM','_','2022-01-25 13:56:05','2022-01-25 13:56:05',NULL),(11,'JB265357','DOUAR TIFNIT SIDI BIBI','ENNADI ABDELTIF','-','2022-01-25 14:13:38','2022-01-25 14:13:38',NULL),(12,'RC 247679','BOUDNIB','MEDJOOL STAR','MEDJOOL STAR','2022-01-25 14:16:16','2022-01-25 14:16:16',NULL),(13,'RC 247 679','BOUDNIB','SAHAM AGRI','SAHAM AGRI','2022-01-31 14:36:15','2022-01-31 14:36:15',NULL);
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `commandes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code_commande` bigint unsigned DEFAULT NULL,
  `client_id` bigint unsigned NOT NULL,
  `commercial_id` bigint unsigned NOT NULL,
  `menu_id` bigint unsigned NOT NULL,
  `lieu_id` bigint unsigned NOT NULL,
  `ref_client` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nature` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `culture` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `varite` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gps_1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gps_2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horizon_1` int DEFAULT NULL,
  `horizon_2` int DEFAULT NULL,
  `temperature` double(8,2) DEFAULT NULL,
  `date_reception` date NOT NULL,
  `date_prelevement` date NOT NULL,
  `date_edition` date NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quantite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `commandes_code_commande_unique` (`code_commande`),
  KEY `commandes_lieu_id_foreign` (`lieu_id`),
  KEY `commandes_client_id_foreign` (`client_id`),
  KEY `commandes_commercial_id_foreign` (`commercial_id`),
  KEY `commandes_menu_id_foreign` (`menu_id`),
  CONSTRAINT `commandes_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `commandes_commercial_id_foreign` FOREIGN KEY (`commercial_id`) REFERENCES `commercials` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `commandes_lieu_id_foreign` FOREIGN KEY (`lieu_id`) REFERENCES `lieus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `commandes_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=171 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commandes`
--

LOCK TABLES `commandes` WRITE;
/*!40000 ALTER TABLE `commandes` DISABLE KEYS */;
INSERT INTO `commandes` VALUES (9,103486,3,22,4,3,'SOL1 P1','Terre végétale','_','_','33° 61 85 76','3° 55 61 00',0,50,NULL,'2022-01-04','2022-01-03','2022-01-24','Valid',NULL,'2022-01-24 08:55:33','2022-02-09 20:50:24','0',NULL,NULL),(10,103487,4,22,4,3,'SOL1 P1','Terre végétale','_','_','33° 61 85 76','3° 55 61 00',0,50,NULL,'2022-01-04','2022-01-03','2022-01-24','Valid',NULL,'2022-01-24 09:41:20','2022-01-24 10:17:56',NULL,NULL,NULL),(11,109518,5,59,47,3,'FO-BYSF(F311)3_L04012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 10:03:43','2022-01-24 11:49:18',NULL,NULL,NULL),(12,109519,5,59,47,3,'FO-BYSF(F311)4_L04012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 10:03:43','2022-01-24 13:37:44',NULL,NULL,NULL),(13,109520,5,59,47,3,'FO-BYSF(F311)5_L04012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:11','2022-01-24 13:38:06',NULL,NULL,NULL),(14,109521,5,59,47,3,'FBAP-ZIYDT(F311)4_L04012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:11','2022-01-24 13:38:12',NULL,NULL,NULL),(15,109522,5,59,47,3,'FO-ZIYDT(F311)7_L04012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:11','2022-01-24 13:38:16',NULL,NULL,NULL),(16,109523,5,59,47,3,'FO-ZIYDT(F311)8_L04012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:11','2022-01-24 13:38:21',NULL,NULL,NULL),(17,109524,5,59,47,3,'FO-ZIYDT(F311)9_L04012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:11','2022-01-24 13:38:28',NULL,NULL,NULL),(18,109525,5,59,47,3,'FO_BYSF(F311)6_L04012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:11','2022-01-24 13:38:31',NULL,NULL,NULL),(19,109526,5,59,47,3,'FO_BYSF(F311)7_L04012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:12','2022-01-24 13:38:35',NULL,NULL,NULL),(20,109527,5,59,47,3,'FO_BYSF(F311)8_L04012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:12','2022-01-24 13:38:39',NULL,NULL,NULL),(21,109528,5,59,47,3,'FO_ZIYDT(F311)10_L04012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:12','2022-01-24 13:38:42',NULL,NULL,NULL),(22,109529,5,59,47,3,'FO_ZIYDT(F311)11_L04012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:12','2022-01-24 13:38:46',NULL,NULL,NULL),(23,109530,5,59,47,3,'FO-BYSF(F311)9_L04012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:12','2022-01-24 13:38:50',NULL,NULL,NULL),(24,109531,5,59,47,3,'FO-BYSF(F311)10_L04012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:12','2022-01-24 13:38:57',NULL,NULL,NULL),(25,109532,5,59,47,3,'FBAP-ZIYDT(F311)5_L04012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:12','2022-01-24 13:40:20',NULL,NULL,NULL),(26,109533,5,59,47,3,'FO-ZIYDT(F311)12_L04012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:12','2022-01-24 13:40:25',NULL,NULL,NULL),(27,109534,5,59,47,3,'FO-BYSF(F311)11_L04012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:13','2022-01-24 13:40:28',NULL,NULL,NULL),(28,109535,5,59,47,3,'FO-ZIYD4_L29122021OE','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:13','2022-01-24 13:40:34',NULL,NULL,NULL),(29,109536,5,59,47,3,'FO-FBVA2_L29122021OE','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:13','2022-01-24 13:40:39',NULL,NULL,NULL),(30,109537,5,59,47,3,'FO-BYSF2_L29122021OE','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:13','2022-01-24 13:40:43',NULL,NULL,NULL),(31,109538,5,59,47,3,'FO-BYSF1_L29122021OE','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:13','2022-01-24 13:40:54',NULL,NULL,NULL),(32,109539,5,59,47,3,'FO-ZIYD6_L29122021OE','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:13','2022-01-24 13:40:58',NULL,NULL,NULL),(33,109540,5,59,47,3,'FO-ZIYD1_L29122021OE','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:13','2022-01-24 13:41:06',NULL,NULL,NULL),(34,109541,5,59,47,3,'FBAP-ZIYD3_L29122021OE','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:14','2022-01-24 13:41:15',NULL,NULL,NULL),(35,109542,5,59,47,3,'FO-FBVA1_L29122021OE','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:14','2022-01-24 13:41:19',NULL,NULL,NULL),(36,109543,5,59,47,3,'FO-ZIYD5_L29122021OE','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:14','2022-01-24 13:41:22',NULL,NULL,NULL),(37,109544,5,59,47,3,'FO-ZIYD2_L29122021OE','_','_','_','_','_',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-24','Valid',NULL,'2022-01-24 11:05:14','2022-01-24 13:41:25',NULL,NULL,NULL),(38,109545,5,59,47,3,'FBAP-ZIYD2_L29122021OE','-','-','-','-','-',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-25','Valid',NULL,'2022-01-25 12:48:29','2022-01-25 14:26:04',NULL,NULL,NULL),(39,109546,5,59,47,3,'FO-ZIYD3_L29122021OE','-','-','-','-','-',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-25','Valid',NULL,'2022-01-25 12:48:29','2022-01-25 14:26:12',NULL,NULL,NULL),(40,109547,5,59,47,3,'FBAP-ZIYD1_L29122021OE','-','-','-','-','-',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-25','Valid',NULL,'2022-01-25 12:48:30','2022-01-25 14:26:15',NULL,NULL,NULL),(41,109548,5,59,47,3,'PF-GALNTP_L04012022AA','-','-','-','-','-',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-25','Valid',NULL,'2022-01-25 12:48:30','2022-01-25 14:26:23',NULL,NULL,NULL),(42,109549,5,59,47,3,'PF-2.3.2(F270)_L04012022AA','-','-','-','-','-',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-25','Valid',NULL,'2022-01-25 12:48:30','2022-01-25 14:26:31',NULL,NULL,NULL),(43,109550,5,59,47,3,'PF-ORGNV(F261)_L04012022AA','-','-','-','-','-',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-25','Valid',NULL,'2022-01-25 12:48:30','2022-01-25 14:26:40',NULL,NULL,NULL),(44,109551,5,59,47,3,'PF-2.2.8(F270)2_L04012022AA','-','-','-','-','-',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-25','Valid',NULL,'2022-01-25 12:48:30','2022-01-25 14:26:43',NULL,NULL,NULL),(45,109552,5,59,47,3,'PF-2.2.8(F270)1_L04012022AA','-','-','-','-','-',NULL,NULL,NULL,'2022-01-04','2022-01-04','2022-01-25','Valid',NULL,'2022-01-25 12:48:30','2022-01-25 14:26:46',NULL,NULL,NULL),(46,112036,6,3,26,2,'22-DM-S1-BC1-P1','Feuilles entières','_','_','_','_',NULL,NULL,NULL,'2022-01-05','2022-01-05','2022-01-25','Valid',NULL,'2022-01-25 13:11:00','2022-01-26 10:14:18',NULL,NULL,NULL),(47,112037,6,3,26,2,'22-DM-S1-BC1-P2','Feuilles entières','_','_','_','_',NULL,NULL,NULL,'2022-01-05','2022-01-05','2022-01-25','Valid',NULL,'2022-01-25 13:11:00','2022-01-26 10:14:25',NULL,NULL,NULL),(48,112038,6,3,26,2,'22-DM-S1-BC1-P3','Feuilles entières','_','_','_','_',NULL,NULL,NULL,'2022-01-05','2022-01-05','2022-01-25','Valid',NULL,'2022-01-25 13:11:01','2022-01-26 10:14:30',NULL,NULL,NULL),(49,112039,6,3,26,2,'22-DM-S1-BC1-P4','Feuilles entières','_','_','_','_',NULL,NULL,NULL,'2022-01-05','2022-01-05','2022-01-25','Valid',NULL,'2022-01-25 13:11:01','2022-01-26 10:14:34',NULL,NULL,NULL),(50,112040,6,3,26,2,'22-DM-S1-BC1-P5','Feuilles entières','_','_','_','_',NULL,NULL,NULL,'2022-01-05','2022-01-05','2022-01-25','Valid',NULL,'2022-01-25 13:11:01','2022-01-26 10:14:44',NULL,NULL,NULL),(51,112041,6,3,26,2,'22-DM-S1-BC1-P6','Feuilles entières','_','_','_','_',NULL,NULL,NULL,'2022-01-05','2022-01-05','2022-01-25','Valid',NULL,'2022-01-25 13:11:01','2022-01-26 10:14:49',NULL,NULL,NULL),(52,112042,6,3,26,2,'22-DM-S1-BC1-P7','Feuilles entières','_','_','_','_',NULL,NULL,NULL,'2022-01-05','2022-01-05','2022-01-25','Valid',NULL,'2022-01-25 13:11:01','2022-01-26 10:14:55',NULL,NULL,NULL),(53,112043,6,3,26,2,'22-DM-S1-BC1-P8','Feuilles entières','_','_','_','_',NULL,NULL,NULL,'2022-01-05','2022-01-05','2022-01-25','Valid',NULL,'2022-01-25 13:11:01','2022-01-26 10:15:04',NULL,NULL,NULL),(54,112044,6,3,26,2,'22-DM-S1-BC1-P9','Feuilles entières','_','_','_','_',NULL,NULL,NULL,'2022-01-05','2022-01-05','2022-01-25','Valid',NULL,'2022-01-25 13:11:01','2022-01-26 10:15:12',NULL,NULL,NULL),(55,112045,6,3,26,2,'22-DM-S1-BC1-P10','Feuilles entières','_','_','_','_',NULL,NULL,NULL,'2022-01-05','2022-01-05','2022-01-25','Valid',NULL,'2022-01-25 13:11:02','2022-01-26 10:15:17',NULL,NULL,NULL),(56,109553,5,59,47,3,'FO-TBVA(F312)3_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:22','2022-01-25 14:26:50',NULL,NULL,NULL),(57,109554,5,59,47,3,'FO-ZIYDT(F311)13_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:22','2022-01-25 14:26:53',NULL,NULL,NULL),(58,109555,5,59,47,3,'FO-TBVA(311)4_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:22','2022-01-25 14:26:57',NULL,NULL,NULL),(59,109556,5,59,47,3,'FO-ZIYDT(F312)14_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:23','2022-01-25 14:27:15',NULL,NULL,NULL),(60,109557,5,59,47,3,'FO-BYSF(F312)11_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:23','2022-01-25 14:27:19',NULL,NULL,NULL),(61,109558,5,59,47,3,'FO-ZIYDT(F312)15_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:23','2022-01-25 14:27:24',NULL,NULL,NULL),(62,109559,5,59,47,3,'FO-ZIYDT(F312)16_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:23','2022-01-25 14:27:27',NULL,NULL,NULL),(63,109560,5,59,47,3,'FO-ZIYDT(F312)17_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:23','2022-01-25 14:27:30',NULL,NULL,NULL),(64,109561,5,59,47,3,'FBAP-ZIYDT(F312)6_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:23','2022-01-25 14:27:34',NULL,NULL,NULL),(65,109562,5,59,47,3,'FBAP-ZIYDT(F312)7_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:24','2022-01-25 14:27:38',NULL,NULL,NULL),(66,109563,5,59,47,3,'FO-ZIYD(F312)18_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:24','2022-01-25 14:27:41',NULL,NULL,NULL),(67,109564,5,59,47,3,'FBAP-ZIYDT(F312)8_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:24','2022-01-25 14:27:48',NULL,NULL,NULL),(68,109565,5,59,47,3,'FBAP-ZIYDI(F312)9_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:24','2022-01-25 14:27:51',NULL,NULL,NULL),(69,109566,5,59,47,3,'FO-BYSF(F311)12_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:24','2022-01-25 14:27:57',NULL,NULL,NULL),(70,109567,5,59,47,3,'FO-BYSF(F312)13_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:24','2022-01-25 14:28:01',NULL,NULL,NULL),(71,109568,5,59,47,3,'FO-ZIYDT(F311)19_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:25','2022-01-25 14:28:04',NULL,NULL,NULL),(72,109569,5,59,47,3,'FO-ZIYDT(F312)20_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:25','2022-01-25 14:28:13',NULL,NULL,NULL),(73,109570,5,59,47,3,'FO-BYSF(F311)14_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:25','2022-01-25 14:28:19',NULL,NULL,NULL),(74,109571,5,59,47,3,'FO-BYSF(F312)15_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:25','2022-01-25 14:28:22',NULL,NULL,NULL),(75,109572,5,59,47,3,'FO-ZIYDT(F312)21_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:25','2022-01-25 14:28:32',NULL,NULL,NULL),(76,109573,5,59,47,3,'FO-ZIYDT(F312)22_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:25','2022-01-25 14:28:36',NULL,NULL,NULL),(77,109574,5,59,47,3,'FO-ZIYDT(F312)23_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:25','2022-01-25 14:28:39',NULL,NULL,NULL),(78,109575,5,59,47,3,'FO-TBVA(F312)5_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:25','2022-01-25 14:28:42',NULL,NULL,NULL),(79,109576,5,59,47,3,'FBAP-ZIYDI(F312)10_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:26','2022-01-25 14:28:45',NULL,NULL,NULL),(80,109577,5,59,47,3,'FO-ZIYDT(F311)28_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:26','2022-01-25 14:28:49',NULL,NULL,NULL),(81,109578,5,59,47,3,'FO-BYSF(F312)17_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:26','2022-01-25 14:28:53',NULL,NULL,NULL),(82,109579,5,59,47,3,'FO-ZIYDT(F311)29_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:26','2022-01-25 14:28:58',NULL,NULL,NULL),(83,109580,5,59,47,3,'FO-BYSF(F311)18_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','Valid',NULL,'2022-01-25 13:38:26','2022-01-25 14:29:14',NULL,NULL,NULL),(84,NULL,5,59,47,3,'FO-TBVA(F312)3_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:26','2022-01-25 14:29:21',NULL,NULL,NULL),(85,NULL,5,59,47,3,'FO-BYSF(F311)19_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:26','2022-01-25 14:29:26',NULL,NULL,NULL),(86,NULL,5,59,47,3,'FO-ZIYDT(F311)13_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:26','2022-01-25 14:29:30',NULL,NULL,NULL),(87,NULL,5,59,47,3,'FO-ZIYDT(F311)30_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:26','2022-01-25 14:29:35',NULL,NULL,NULL),(88,NULL,5,59,47,3,'FO-TBVA(311)4_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:26','2022-01-25 14:29:39',NULL,NULL,NULL),(89,NULL,5,59,47,3,'FBAP-ZIYDT(F311)14_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:26','2022-01-25 14:29:44',NULL,NULL,NULL),(90,NULL,5,59,47,3,'FO-ZIYDT(F312)14_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:27','2022-01-25 14:29:48',NULL,NULL,NULL),(91,NULL,5,59,47,3,'FO-BYSF(F312)20_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:27','2022-01-25 14:29:57',NULL,NULL,NULL),(92,NULL,5,59,47,3,'FO-BYSF(F312)11_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:27','2022-01-25 14:31:35',NULL,NULL,NULL),(93,NULL,5,59,47,3,'FBAP-ZIYDT(F312)11_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:27','2022-01-25 14:31:41',NULL,NULL,NULL),(94,NULL,5,59,47,3,'FO-ZIYDT(F312)15_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:27','2022-01-25 14:31:45',NULL,NULL,NULL),(95,NULL,5,59,47,3,'FO-ZIYDT(F312)24_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:27','2022-01-25 14:31:58',NULL,NULL,NULL),(96,NULL,5,59,47,3,'FO-ZIYDT(F312)16_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:27','2022-01-25 14:32:01',NULL,NULL,NULL),(97,NULL,5,59,47,3,'FO-ZIYDT(F312)25_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:27','2022-01-25 14:32:04',NULL,NULL,NULL),(98,NULL,5,59,47,3,'FO-ZIYDT(F312)17_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:27','2022-01-25 14:32:08',NULL,NULL,NULL),(99,NULL,5,59,47,3,'FBAP-ZIYDT(F312)12_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:27','2022-01-25 14:32:16',NULL,NULL,NULL),(100,NULL,5,59,47,3,'FBAP-ZIYDT(F312)6_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:27','2022-01-25 14:32:20',NULL,NULL,NULL),(101,NULL,5,59,47,3,'FBAP-ZIYDT(F312)13_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:27','2022-01-25 14:32:23',NULL,NULL,NULL),(102,NULL,5,59,47,3,'FBAP-ZIYDT(F312)7_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:28','2022-01-25 14:32:26',NULL,NULL,NULL),(103,NULL,5,59,47,3,'FO-ZIYDT(F312)26_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:28','2022-01-25 14:32:29',NULL,NULL,NULL),(104,NULL,5,59,47,3,'FO-ZIYD(F312)18_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:28','2022-01-25 14:32:32',NULL,NULL,NULL),(105,NULL,5,59,47,3,'FO-BYSF(F312)16_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:28','2022-01-25 14:32:35',NULL,NULL,NULL),(106,NULL,5,59,47,3,'FBAP-ZIYDT(F312)8_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:28','2022-01-25 14:32:38',NULL,NULL,NULL),(107,NULL,5,59,47,3,'FO-ZIYDT(F312)27_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:28','2022-01-25 14:32:48',NULL,NULL,NULL),(108,NULL,5,59,47,3,'FBAP-ZIYDI(F312)9_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:28','2022-01-25 14:33:03',NULL,NULL,NULL),(109,NULL,5,59,47,3,'FO-BYSF(F311)12_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:28','2022-01-25 14:33:06',NULL,NULL,NULL),(110,NULL,5,59,47,3,'FO-BYSF(F312)13_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:28','2022-01-25 14:33:09',NULL,NULL,NULL),(111,NULL,5,59,47,3,'FO-ZIYDT(F311)19_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:28','2022-01-25 14:33:13',NULL,NULL,NULL),(112,NULL,5,59,47,3,'FO-ZIYDT(F312)20_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:29','2022-01-25 14:33:17',NULL,NULL,NULL),(113,NULL,5,59,47,3,'FO-BYSF(F311)14_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:29','2022-01-25 14:33:31',NULL,NULL,NULL),(114,NULL,5,59,47,3,'FO-BYSF(F312)15_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:29','2022-01-25 14:33:34',NULL,NULL,NULL),(115,NULL,5,59,47,3,'FO-ZIYDT(F312)21_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:29','2022-01-25 14:33:41',NULL,NULL,NULL),(116,NULL,5,59,47,3,'FO-ZIYDT(F312)22_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:29','2022-01-25 14:33:49',NULL,NULL,NULL),(117,NULL,5,59,47,3,'FO-ZIYDT(F312)23_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:29','2022-01-25 14:33:52',NULL,NULL,NULL),(118,NULL,5,59,47,3,'FO-TBVA(F312)5_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:29','2022-01-25 14:33:57',NULL,NULL,NULL),(119,NULL,5,59,47,3,'FBAP-ZIYDI(F312)10_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:30','2022-01-25 14:34:00',NULL,NULL,NULL),(120,NULL,5,59,47,3,'FO-ZIYDT(F311)28_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:30','2022-01-25 14:34:04',NULL,NULL,NULL),(121,NULL,5,59,47,3,'FO-BYSF(F312)17_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:30','2022-01-25 14:34:07',NULL,NULL,NULL),(122,NULL,5,59,47,3,'FO-ZIYDT(F311)29_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:30','2022-01-25 14:34:10',NULL,NULL,NULL),(123,NULL,5,59,47,3,'FO-BYSF(F311)18_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:30','2022-01-25 14:34:18',NULL,NULL,NULL),(124,NULL,5,59,47,3,'FO-BYSF(F311)19_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:30','2022-01-25 14:34:21',NULL,NULL,NULL),(125,NULL,5,59,47,3,'FO-ZIYDT(F311)30_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:30','2022-01-25 14:34:24',NULL,NULL,NULL),(126,NULL,5,59,47,3,'FBAP-ZIYDT(F311)14_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:31','2022-01-25 14:34:31',NULL,NULL,NULL),(127,NULL,5,59,47,3,'FO-BYSF(F312)20_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:31','2022-01-25 14:34:36',NULL,NULL,NULL),(128,NULL,5,59,47,3,'FBAP-ZIYDT(F312)11_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:31','2022-01-25 14:34:39',NULL,NULL,NULL),(129,NULL,5,59,47,3,'FO-ZIYDT(F312)24_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:31','2022-01-25 14:34:42',NULL,NULL,NULL),(130,NULL,5,59,47,3,'FO-ZIYDT(F312)25_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:31','2022-01-25 14:34:45',NULL,NULL,NULL),(131,NULL,5,59,47,3,'FBAP-ZIYDT(F312)12_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:31','2022-01-25 14:34:52',NULL,NULL,NULL),(132,NULL,5,59,47,3,'FBAP-ZIYDT(F312)13_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:31','2022-01-25 14:34:55',NULL,NULL,NULL),(133,NULL,5,59,47,3,'FO-ZIYDT(F312)26_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:31','2022-01-25 14:34:58',NULL,NULL,NULL),(134,NULL,5,59,47,3,'FO-BYSF(F312)16_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:32','2022-01-25 14:35:01',NULL,NULL,NULL),(135,NULL,5,59,47,3,'FO-ZIYDT(F312)27_L06012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-06','2022-01-06','2022-01-25','En cours',NULL,'2022-01-25 13:38:32','2022-01-25 14:35:08',NULL,NULL,NULL),(136,NULL,5,59,13,3,'PF-2.3.2(F270)_L10012022AA','COMPOST','_','_','_','_',NULL,NULL,NULL,'2022-01-10','2022-01-10','2022-01-25','En cours',NULL,'2022-01-25 13:41:51','2022-01-25 14:35:11',NULL,NULL,NULL),(137,NULL,5,59,13,3,'PF-276_L12012022AA','COMPOST','_','_','_','_',NULL,NULL,NULL,'2022-01-12','2022-01-12','2022-01-25','En cours',NULL,'2022-01-25 13:43:04','2022-01-25 14:35:14',NULL,NULL,NULL),(138,NULL,5,59,13,3,'MEL-F307_L13012022AA','COMPOST','_','_','_','_',NULL,NULL,NULL,'2022-01-13','2022-01-13','2022-01-25','En cours',NULL,'2022-01-25 13:43:57','2022-01-25 14:35:17',NULL,NULL,NULL),(139,NULL,5,59,13,3,'PF-F271_L17012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-17','2022-01-17','2022-01-25','En cours',NULL,'2022-01-25 13:44:30','2022-01-26 10:10:15',NULL,NULL,NULL),(140,103488,7,43,4,3,'HORIZON 20-40','Terre végétale','VIGNE','MUSCAT','33° 72 78 95','5° 39 78 44',20,40,NULL,'2022-01-14','2022-01-14','2022-01-25','Valid',NULL,'2022-01-25 13:47:44','2022-01-27 09:41:56',NULL,NULL,NULL),(141,103489,7,43,4,3,'HORIZON 60-100','Terre végétale','VIGNE','MUSCAT','33° 72 78 95','5° 39 78 44',60,100,NULL,'2022-01-14','2022-01-14','2022-01-25','Valid',NULL,'2022-01-25 13:47:44','2022-01-27 10:14:47',NULL,NULL,NULL),(142,NULL,8,43,4,3,'HORIZON 20-40','Terre végétale','VIGNE','MUSCAT','33° 72 53 4','5° 67 75 3',20,40,NULL,'2022-01-14','2022-01-14','2022-01-25','En cours',NULL,'2022-01-25 13:50:38','2022-01-25 13:50:38',NULL,NULL,NULL),(143,NULL,8,43,4,3,'HORIZON 60-100','Terre végétale','VIGNE','MUSCAT','33° 72 53 4','5° 67 75 3',60,100,NULL,'2022-01-14','2022-01-14','2022-01-25','En cours',NULL,'2022-01-25 13:50:39','2022-01-25 13:50:39',NULL,NULL,NULL),(144,NULL,9,71,14,3,'MP-FAP-1111121WIK','FARINE DE POISSON','_','_','_','_',NULL,NULL,NULL,'2022-01-17','2021-11-11','2022-01-25','En cours',NULL,'2022-01-25 13:54:36','2022-01-25 13:54:36',NULL,NULL,NULL),(145,NULL,9,71,14,3,'MP-FAP-1011121WIK','FARINE DE POISSON','_','_','_','_',NULL,NULL,NULL,'2022-01-17','2021-11-10','2022-01-25','En cours',NULL,'2022-01-25 13:54:36','2022-01-26 13:59:02',NULL,NULL,NULL),(146,NULL,9,71,14,3,'MP-CDR-101121-WIK','_','_','_','_','_',NULL,NULL,NULL,'2022-01-17','2021-11-10','2022-01-25','En cours',NULL,'2022-01-25 13:54:36','2022-01-26 10:16:36',NULL,NULL,NULL),(147,NULL,5,59,13,3,'PF-GALNTP_L17012022AA','_','_','_','_','_',NULL,NULL,NULL,'2022-01-17','2022-01-17','2022-01-25','En cours',NULL,'2022-01-25 13:55:35','2022-01-26 10:10:20',NULL,NULL,NULL),(148,NULL,10,4,4,3,'PARCELLE N°1','Terre végétale','_','_','29° 98 65 56','9° 65 19 42',0,20,NULL,'2022-01-20','2022-01-17','2022-01-25','En cours',NULL,'2022-01-25 13:59:20','2022-01-25 13:59:20',NULL,NULL,NULL),(149,NULL,10,4,4,3,'PARCELLE N°2','Terre végétale','_','_','29° 98 65 56','9° 65 19 42',0,20,NULL,'2022-01-20','2022-01-17','2022-01-25','En cours',NULL,'2022-01-25 13:59:20','2022-01-26 14:24:12',NULL,NULL,NULL),(150,NULL,10,4,4,3,'PARCELLE N°3','Terre végétale','_','_','29° 98 65 56','9° 65 19 42',0,20,NULL,'2022-01-20','2022-01-17','2022-01-25','En cours',NULL,'2022-01-25 13:59:20','2022-01-25 13:59:20',NULL,NULL,NULL),(151,NULL,10,4,1,3,'EAU DE PUITS','EAU DE PUITS','_','_','29° 98 65 56','9° 65 19 42',NULL,NULL,4.00,'2022-01-20','2022-01-17','2022-01-25','En cours',NULL,'2022-01-25 13:59:20','2022-01-25 13:59:20',NULL,NULL,NULL),(152,NULL,5,59,13,3,'PF-2.2.8-1(F276)_L19012022AA','-','-','-','-','-',NULL,NULL,NULL,'2022-01-19','2022-01-19','2022-01-25','En cours',NULL,'2022-01-25 14:10:19','2022-01-26 10:13:31',NULL,NULL,NULL),(153,NULL,5,59,13,3,'PF-2.2.8-2(F276)_L19012022AA','-','-','-','-','-',NULL,NULL,NULL,'2022-01-19','2022-01-19','2022-01-25','En cours',NULL,'2022-01-25 14:10:19','2022-01-26 10:13:37',NULL,NULL,NULL),(154,NULL,5,59,13,3,'PF-2.2.8-3(F276)_L19012022AA','-','-','-','-','-',NULL,NULL,NULL,'2022-01-19','2022-01-19','2022-01-25','En cours',NULL,'2022-01-25 14:10:19','2022-01-26 10:13:41',NULL,NULL,NULL),(155,NULL,5,59,13,3,'PF-2.3.2(F276)_L19012022AA','-','-','-','-','-',NULL,NULL,NULL,'2022-01-19','2022-01-19','2022-01-25','En cours',NULL,'2022-01-25 14:10:19','2022-01-26 10:13:45',NULL,NULL,NULL),(156,NULL,5,59,13,3,'PF-ORGNV(F261+C5)_L19012022AA','-','-','-','-','-',NULL,NULL,NULL,'2022-01-19','2022-01-19','2022-01-25','En cours',NULL,'2022-01-25 14:10:19','2022-01-26 10:13:49',NULL,NULL,NULL),(157,NULL,5,59,13,3,'PF-ORGNV(RF)_L19012022AA','-','-','-','-','-',NULL,NULL,NULL,'2022-01-19','2022-01-19','2022-01-25','En cours',NULL,'2022-01-25 14:10:19','2022-01-26 10:13:56',NULL,NULL,NULL),(158,NULL,5,59,13,3,'PF-F279_L20012022AA','-','-','-','-','-',NULL,NULL,NULL,'2022-01-20','2022-01-20','2022-01-25','En cours',NULL,'2022-01-25 14:13:12','2022-01-26 10:14:05',NULL,NULL,NULL),(159,NULL,11,57,4,3,'PARCELLE N°08','Terre végétale','HARICOT','FRAZIDA','30° 09 03 3','9° 35 24 9',0,20,NULL,'2022-01-24','2022-01-20','2022-01-25','En cours',NULL,'2022-01-25 14:15:50','2022-01-25 14:15:50',NULL,NULL,NULL),(160,NULL,12,19,4,3,'P51L23AR3','Terre végétale','PALMIER DATTIER','MJHOL','31° 99 4','3° 72 4',0,40,NULL,'2022-01-24','2022-01-22','2022-01-25','En cours',NULL,'2022-01-25 14:25:23','2022-01-25 14:25:23',NULL,NULL,NULL),(161,NULL,12,19,4,3,'P47L27AR9','Terre végétale','PALMIER DATTIER','MJHOL','31° 99 4','3° 72 4',0,40,NULL,'2022-01-24','2022-01-22','2022-01-25','En cours',NULL,'2022-01-25 14:25:23','2022-01-25 14:25:23',NULL,NULL,NULL),(162,NULL,12,19,4,3,'P53L28AR19','Terre végétale','PALMIER DATTIER','MJHOL','31° 99 4','3° 72 4',0,40,NULL,'2022-01-24','2022-01-22','2022-01-25','En cours',NULL,'2022-01-25 14:25:23','2022-01-25 14:25:23',NULL,NULL,NULL),(163,NULL,12,19,4,3,'P43L8AR23','Terre végétale','PALMIER DATTIER','MJHOL','31° 99 4','3° 72 4',0,40,NULL,'2022-01-24','2022-01-22','2022-01-25','En cours',NULL,'2022-01-25 14:25:23','2022-01-25 14:25:23',NULL,NULL,NULL),(164,NULL,12,19,4,3,'P57L7A4','Terre végétale','PALMIER DATTIER','MJHOL','31° 99 4','3° 72 4',0,40,NULL,'2022-01-24','2022-01-22','2022-01-25','En cours',NULL,'2022-01-25 14:25:24','2022-01-25 14:25:24',NULL,NULL,NULL),(165,NULL,12,19,4,3,'P60L6AR4','Terre végétale','PALMIER DATTIER','MJHOL','31° 99 4','3° 72 4',0,40,NULL,'2022-01-24','2022-01-22','2022-01-25','En cours',NULL,'2022-01-25 14:25:24','2022-01-25 14:25:24',NULL,NULL,NULL),(166,NULL,12,19,4,3,'P66L11AR16','Terre végétale','PALMIER DATTIER','MJHOL','31° 99 4','3° 72 4',0,40,NULL,'2022-01-24','2022-01-22','2022-01-25','En cours',NULL,'2022-01-25 14:25:24','2022-01-25 14:25:24',NULL,NULL,NULL),(167,NULL,12,19,4,3,'P83L2AR6','Terre végétale','PALMIER DATTIER','MJHOL','31° 99 4','3° 72 4',0,40,NULL,'2022-01-24','2022-01-22','2022-01-25','En cours',NULL,'2022-01-25 14:25:24','2022-01-25 14:25:24',NULL,NULL,NULL),(168,NULL,12,19,4,3,'P74L2AR15','Terre végétale','PALMIER DATTIER','MJHOL','31° 99 4','3° 72 4',0,40,NULL,'2022-01-24','2022-01-22','2022-01-25','En cours',NULL,'2022-01-25 14:25:24','2022-01-25 14:25:24',NULL,NULL,NULL),(169,NULL,12,19,4,3,'P89L8AR22','Terre végétale','PALMIER DATTIER','MJHOL','31° 99 4','3° 72 4',0,40,NULL,'2022-01-24','2022-01-22','2022-01-25','En cours',NULL,'2022-01-25 14:25:24','2022-01-25 14:25:24',NULL,NULL,NULL),(170,102014,13,19,3,3,'F3','Eau de Forage','_','_','_','_',NULL,NULL,4.00,'2021-10-08','2021-10-06','2022-01-31','Valid',NULL,'2022-01-31 14:39:54','2022-01-31 15:03:50',NULL,NULL,NULL);
/*!40000 ALTER TABLE `commandes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commantairs`
--

DROP TABLE IF EXISTS `commantairs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `commantairs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `commande_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `commantairs_commande_id_foreign` (`commande_id`),
  KEY `commantairs_user_id_foreign` (`user_id`),
  CONSTRAINT `commantairs_commande_id_foreign` FOREIGN KEY (`commande_id`) REFERENCES `commandes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `commantairs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commantairs`
--

LOCK TABLES `commantairs` WRITE;
/*!40000 ALTER TABLE `commantairs` DISABLE KEYS */;
INSERT INTO `commantairs` VALUES (1,145,6,'decalage',NULL,'2022-01-26 13:58:58','2022-01-26 13:58:58');
/*!40000 ALTER TABLE `commantairs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commercials`
--

DROP TABLE IF EXISTS `commercials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `commercials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commercials`
--

LOCK TABLES `commercials` WRITE;
/*!40000 ALTER TABLE `commercials` DISABLE KEYS */;
INSERT INTO `commercials` VALUES (1,'MOHAMMED BOUTGOURINE','-CHEF DE ZONE-SOUSS MASSA','mohamed.boutgourine@elephant-vert.com',NULL,NULL,'2022-01-27 08:50:15'),(2,'ABDELJALIL BOUFOUSSI','-CHEF DE ZONE-TAROUDANTE-OUARZAZATE','abdeljalil.boufoussi@elephant-vert.com',NULL,NULL,'2022-01-27 08:51:57'),(3,'AMINE LAMNAOUAR','SOUSS-MASSA','amine.lamnaouar@elephant-vert.com',NULL,NULL,'2022-01-26 14:29:34'),(4,'MUSTAPHA  EL HASSANI','SOUSS-MASSA','mastapha.el-hassani@elephant-vert.com',NULL,NULL,'2022-01-26 14:30:06'),(5,'MOHAMMED BENZINE','SOUSS-MASSA','mohamed.benzine@elephant-vert.com',NULL,NULL,'2022-01-26 14:30:34'),(6,'BOUTZIZAT YOUSSEF','ATLAS DARAA TAFILALET','youssef.boutzaizat@elephant-vert.com',NULL,NULL,'2022-01-27 09:29:19'),(7,'BENTAARITE MED AMINE','SOUSS-MASSA',NULL,'2022-01-26 14:36:22',NULL,'2022-01-26 14:36:22'),(8,'IDRISS EL BAZ','SOUSS-MASSA','driss.elbaz@elephant-vert.com',NULL,NULL,'2022-01-26 14:37:13'),(9,'TOUIL FOUAD ','TARDOUDANT-OUARZAZATE',NULL,'2022-01-26 14:37:57',NULL,'2022-01-26 14:37:57'),(10,'ABDELKARIM AZELMAD','TARDOUDANT-OUARZAZATE',NULL,'2022-01-26 14:48:50',NULL,'2022-01-26 14:48:50'),(11,'AHMAD MOUTAWAKIL','TARDOUDANT-OUARZAZATE','abdelkarim.azelmad@elephant-vert.com',NULL,NULL,'2022-01-26 14:48:56'),(12,'HICHAM HARRAT','TARDOUDANT-OUARZAZATE','hicham.elharrat@elephant-vert.com','2022-01-27 09:31:10',NULL,'2022-01-27 09:31:10'),(13,'HAMID BAHTAT','TARDOUDANT-OUARZAZATE',NULL,'2022-01-27 07:32:45',NULL,'2022-01-27 07:32:45'),(14,'ABDELALI BOUFALA','-CHEF DE ZONE-MEKNES SAISS/GHARB','abdelali.boufala@elephant-vert.com',NULL,NULL,'2022-01-27 08:27:39'),(15,'AZOUGAGH NOUREDDINE','MEKNES SAISS-GHARB','noureddine.azougagh@elephant-vert.com',NULL,NULL,'2022-01-27 08:42:10'),(16,'BOUCHTA BENHANINE','MEKNES SAISS-GHARB','bouchta.benhanyn@elephant-vert.com',NULL,NULL,'2022-01-27 08:43:52'),(17,'IMAD QAROUAOUY','NORD OUEST','imad.el-qarouaouy@elephant-vert.com',NULL,NULL,'2022-01-27 09:02:55'),(18,'ALI AIT ASSOU','-CHEF DE ZONE-ATLAS DARAA TAFILALET','ali.ait-assou@elephant-vert.com',NULL,NULL,'2022-01-27 08:54:36'),(19,'ABDELLAH SALIMI','ATLAS DARAA TAFILALET','abdellah.salimi@elephant-vert.com',NULL,NULL,'2022-01-27 08:54:56'),(20,'MOHAMED EL ABASSI','ATLAS DARAA TAFILALET','mohamed.el-abassi@elephant-vert.com',NULL,NULL,'2022-01-27 08:55:55'),(21,'HASSANE BAOUHAM','ATLAS-DRAA',NULL,'2022-01-27 07:37:43',NULL,'2022-01-27 07:37:43'),(22,'MUSTAPHA HOUARI','ATLAS DARAA TAFILALET','mustapha.houari@elephant-vert.com',NULL,NULL,'2022-01-27 08:55:21'),(23,'AYOUB WOUAI','CENTRE OUEST','ayoub.wouai@elephant-vert.com',NULL,NULL,'2022-01-27 07:39:15'),(24,'AMINE CHEBLI','CENTRE','amine.chebli@elephant-vert.com',NULL,NULL,'2022-01-27 08:48:13'),(25,'LABDALAOUI NABIL','CENTRE','nabil.labdalaoui@elephant-vert.com',NULL,NULL,'2022-01-27 08:47:54'),(26,'MOHCINE OTMANE','CENTRE OUEST',NULL,'2022-01-27 08:02:31',NULL,'2022-01-27 08:02:31'),(27,'MUSTAFA AZZAKANI','ABDA-CHIADMA','mustafa.azzakani@elephant-vert.com',NULL,NULL,'2022-01-27 08:59:52'),(28,'ISSAM TALBI','CENTRE OUEST','issam.talbi@elephant-vert.com','2022-01-27 09:21:04',NULL,'2022-01-27 09:21:04'),(29,'ABDERRAHIM BIRABANE','TAROUDANTE-OUARZAZATE','abderrahim.birabane@elephant-vert.com',NULL,NULL,'2022-01-27 09:24:47'),(30,'HICHAM ENNOUBI','-CHEF DE ZONE-CENTRE','hicham.ennoubi@elephant-vert.com',NULL,NULL,'2022-01-27 08:47:37'),(31,'ABDERRAHIM MAROUI','CENTRE','abderrahim.maroui@elephant-vert.com',NULL,NULL,'2022-01-27 08:49:10'),(32,'LAMIAE AABOUN','CENTRE','lamiae.aaboun@elephant-vert.com',NULL,NULL,'2022-01-27 08:49:30'),(33,'BOUCHAIB HOURRANE','CENTRE','bouchaib.hourrane@elephant-vert.com',NULL,NULL,'2022-01-27 08:48:57'),(34,'SAMIR BOUHAL','CENTRE SUD',NULL,'2022-01-27 08:07:58',NULL,'2022-01-27 08:07:58'),(35,'MUSTAPHA BAKHOU ','CENTRE SUD',NULL,'2022-01-27 08:08:55',NULL,'2022-01-27 08:08:55'),(36,'MOHAMED EL GHAZOUANI','CENTRE','mohamed.el-ghazouani@elephant-vert.com',NULL,NULL,'2022-01-27 08:48:37'),(37,'MONSIF BAHIA','CENTRE SUD',NULL,'2022-01-27 08:10:26',NULL,'2022-01-27 08:10:26'),(38,'NOUREDINE KORDASS','-CHEF DE ZONE-NORD OUEST','nouredine.kordass@elephant-vert.com',NULL,NULL,'2022-01-27 08:46:52'),(39,'ALI EL AYOUNI','NORD OUEST',NULL,'2022-01-27 08:12:13',NULL,'2022-01-27 08:12:13'),(40,'AYOUB HOURMA','NORD OUEST','ayoub.hourma@elephant-vert.com',NULL,NULL,'2022-01-27 08:12:48'),(41,'MARIAMA OUHNINI','NORD OUEST','mariama.ouhnini@elephant-vert.com',NULL,NULL,'2022-01-27 08:13:37'),(42,'YOUSSEF RACHID ','MEKNèS-SAîS',NULL,'2022-01-27 08:13:41',NULL,'2022-01-27 08:13:41'),(43,'KHALID EZZOUAK','MEKNES SAISS-GHARB','khalid.ezzouak@elephant-vert.com',NULL,NULL,'2022-01-27 08:28:02'),(44,'OUSSAMA ZBITA ','MEKNèS-SAîS',NULL,'2022-01-27 08:14:31',NULL,'2022-01-27 08:14:31'),(45,'WEAM BENCHAREF','MEKNES SAISS-GHARB','weam.bencharef@elephant-vert.com',NULL,NULL,'2022-01-27 08:42:34'),(46,'YASSINE FARAJ ','MEKNèS-SAîS',NULL,'2022-01-27 08:16:44',NULL,'2022-01-27 08:16:44'),(47,'ADIL EL MAHFOUDI ','MEKNèS-SAîS',NULL,'2022-01-27 08:16:52',NULL,'2022-01-27 08:16:52'),(48,'AYOUB HAJJAJ','MEKNES SAISS-GHARB','ayoub.hajjaj@elephant-vert.com',NULL,NULL,'2022-01-27 08:44:06'),(49,'ISMAIL BOULRHAZIOUI','MEKNèS-SAîS',NULL,'2022-01-27 08:17:31',NULL,'2022-01-27 08:17:31'),(50,'ZAKARIA EL KABBAJ ','ORIENTAL',NULL,'2022-01-27 08:17:46',NULL,'2022-01-27 08:17:46'),(51,'CHAKIB HAMZA','ORIENTAL','hamza.chakib@elephant-vert.com',NULL,NULL,'2022-01-27 08:18:04'),(52,'MOHAMMED EL ABDELLAOUI','BERKANE-NADOR','mohammed.el-abdellaoui@elephant-vert.com',NULL,NULL,'2022-01-27 08:59:29'),(53,'KAMAL HADDI ','ORIENTAL',NULL,'2022-01-27 08:19:39',NULL,'2022-01-27 08:19:39'),(54,'MEYSAA BENAMAR','ORIENTAL',NULL,'2022-01-27 08:19:47',NULL,'2022-01-27 08:19:47'),(55,'BRAHIM ANIJI','NORD OUEST','brahim.aniji@elephant-vert.com',NULL,NULL,'2022-01-27 08:20:04'),(56,'MOHAMED AIT M\'HAMED OUAHMED','SOUSS-MASSA','mohamed.ait-mhamed-ouahmed@elephant-vert.com',NULL,NULL,'2022-01-27 08:20:25'),(57,'HAMID JABIR','SOUSS-MASSA','hamid.jabir@elephant-vert.com',NULL,NULL,'2022-01-27 08:20:44'),(58,'ABDERRAHIM EL KHARRAZ','CENTRE OUEST',NULL,'2022-01-27 08:21:02',NULL,'2022-01-27 08:21:02'),(59,'OUIAM ELGHAZOUANI','EV MAROC','ouiam.elghazouani@elephant-vert.com',NULL,NULL,'2022-01-27 08:21:20'),(60,'FADWA MAZOUZ','EV MAROC','fadwa.mazouz@elephant-vert.com',NULL,NULL,'2022-01-27 08:21:43'),(61,'ABDELAZIZ MAHFOUD','EV MAROC','abdelaziz.mahfoud@elephant-vert.com',NULL,NULL,'2022-01-27 08:22:12'),(62,'REDOUANE NDA','CDP','redouane.nda@elephant-vert.com',NULL,NULL,'2022-01-27 13:35:01'),(63,'FATIMAZAHRA MAMOUNI','EVM DÉVELOPPEMENT','fatimazahra.mamouni@elephant-vert.com',NULL,NULL,'2022-01-27 08:22:53'),(64,'EV MARKETING','EVM','hanane.chafik@elephant-vert.com',NULL,NULL,'2022-01-27 08:23:29'),(65,'EV SENEGAL','EV SENEGAL',NULL,NULL,NULL,NULL),(66,'CLINIQUE DES PLANTES','CLINIQUE DES PLANTES','redouane.nda@elephant-vert.com',NULL,NULL,'2022-01-27 13:32:58'),(67,'EV MALI','EV MALI',NULL,NULL,NULL,NULL),(68,'M. F.L MOUNKORO','EV MALI',NULL,'2022-01-27 08:24:19',NULL,'2022-01-27 08:24:19'),(69,'EV KENYA','KENYA',NULL,NULL,NULL,NULL),(70,'ROLAND AMANI','EV CÔTE D\'IVOIRE','roland.amani@elephant-vert.com',NULL,NULL,'2022-01-27 13:32:40'),(71,'EV CÔTE D\'IVOIRE&NBSP;','CÔTE D\'IVOIRE&NBSP;','redouane.nda@elephant-vert.com',NULL,NULL,'2022-01-27 13:34:39'),(72,'EVFRANCE','FRANCE ',NULL,NULL,NULL,NULL),(73,'CLIENT','DIRECT',NULL,NULL,NULL,NULL),(74,'BIPEA','BIPEA',NULL,NULL,NULL,NULL),(75,'ROCHDI YOUNES','CENTRE OUEST','younes.rochdi@elephant-vert.com','2022-01-27 08:25:30',NULL,'2022-01-27 08:25:30'),(76,'YOUNES ROCHDI','CENTRE','younes.rochdi@elephant-vert.com',NULL,NULL,'2022-01-27 08:48:25'),(77,'ABDELAZIZ MAHFOUD','_','abdelaziz.mahfoud@elephant-vert.com',NULL,'2022-01-27 13:36:43','2022-01-27 13:36:43');
/*!40000 ALTER TABLE `commercials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lieus`
--

DROP TABLE IF EXISTS `lieus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lieus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lieu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lieus`
--

LOCK TABLES `lieus` WRITE;
/*!40000 ALTER TABLE `lieus` DISABLE KEYS */;
INSERT INTO `lieus` VALUES (1,'null',NULL,NULL),(2,'Sous traiter',NULL,NULL),(3,'Elephant vert agropolise meknes',NULL,NULL);
/*!40000 ALTER TABLE `lieus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matrices`
--

DROP TABLE IF EXISTS `matrices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `matrices` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int NOT NULL,
  `delai` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matrices`
--

LOCK TABLES `matrices` WRITE;
/*!40000 ALTER TABLE `matrices` DISABLE KEYS */;
INSERT INTO `matrices` VALUES (1,'EAU',100,4,NULL,NULL,NULL),(2,'EAU POTABLE',102,4,NULL,NULL,NULL),(3,'SOL',103,7,NULL,NULL,NULL),(4,'VEG',106,4,NULL,NULL,NULL),(5,'AMEO',109,7,NULL,NULL,NULL),(6,'MIC',110,7,NULL,NULL,NULL),(7,'SPV',111,7,NULL,NULL,NULL),(8,'DIAG',112,7,NULL,NULL,NULL),(9,'EAP',113,5,NULL,NULL,NULL);
/*!40000 ALTER TABLE `matrices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `matrice_id` bigint unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix_ht` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix_supv` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menus_matrice_id_foreign` (`matrice_id`),
  CONSTRAINT `menus_matrice_id_foreign` FOREIGN KEY (`matrice_id`) REFERENCES `matrices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,1,'EAU1','300','300',NULL,NULL,NULL),(2,1,'EAU2','240','240',NULL,NULL,NULL),(3,2,'WPOTA','400','395',NULL,NULL,NULL),(4,3,'SOL1','400','400',NULL,NULL,NULL),(5,3,'SOL2','375','375',NULL,NULL,NULL),(6,3,'SOL3','340','340',NULL,NULL,NULL),(7,3,'SOL4','300','300',NULL,NULL,NULL),(8,3,'SOL5','250','221',NULL,NULL,NULL),(9,4,'FOL1','400','400',NULL,NULL,NULL),(10,4,'FOL2','330','330',NULL,NULL,NULL),(11,4,'FOL3','270','265',NULL,NULL,NULL),(12,5,'ORG1','570','0',NULL,NULL,NULL),(13,5,'ORG2','418','0',NULL,NULL,NULL),(14,5,'ORGQ','1200','0',NULL,NULL,NULL),(15,5,'ORG-ETM','1000','0',NULL,NULL,NULL),(16,6,'MIC1','550','0',NULL,NULL,NULL),(17,6,'MIC2','450','0',NULL,NULL,NULL),(18,6,'MIC-AGRI','500','0',NULL,NULL,NULL),(19,6,'M-ALI','600','0',NULL,NULL,NULL),(20,6,'MIC-SUR','350','0',NULL,NULL,NULL),(21,6,'MIC-AIR','350','0',NULL,NULL,NULL),(22,7,'R-BASI','1200','0',NULL,NULL,NULL),(23,7,'R-DITH','800','0',NULL,NULL,NULL),(24,7,'S-TOXI','500','0',NULL,NULL,NULL),(25,7,'S-ETM','1000','0',NULL,NULL,NULL),(26,8,'DIAGV','1000','0',NULL,NULL,NULL),(27,8,'DIAGC','1000','0',NULL,NULL,NULL),(28,8,'DIAGB','1000','0',NULL,NULL,NULL),(29,8,'DIAGN','700','0',NULL,NULL,NULL),(30,9,'SOLM1','335','335',NULL,NULL,NULL),(31,9,'SOLM2','270','270',NULL,NULL,NULL),(32,9,'SOLRF1','495','401',NULL,NULL,NULL),(33,9,'SOLRF2','400','282',NULL,NULL,NULL),(34,9,'SOLRF3','317','0',NULL,NULL,NULL),(35,5,'MO 48H','200','0',NULL,NULL,NULL),(36,5,'MO24H','400','0',NULL,NULL,NULL),(37,5,'ORG2+ MO 48H','618','0',NULL,NULL,NULL),(38,5,'ORG1+ETM','1570','0',NULL,NULL,NULL),(39,5,'ORG2+ETM','1418','0',NULL,NULL,NULL),(40,5,'ISMO','8000','0',NULL,NULL,NULL),(41,3,'SOL1+SULFT','400','400',NULL,NULL,NULL),(42,1,'MENU BIPEA','0','0',NULL,NULL,NULL),(43,1,'EAU1+BORE','300','300',NULL,NULL,NULL),(44,9,'SOLM1+BORE','335','335',NULL,NULL,NULL),(45,5,'PH+EC+MO','300','0',NULL,NULL,NULL),(46,5,'PH+EC','100','0',NULL,NULL,NULL),(47,5,'MO ','100','0',NULL,NULL,NULL);
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (21,'2014_10_12_000000_create_users_table',1),(22,'2014_10_12_100000_create_password_resets_table',1),(23,'2019_08_19_000000_create_failed_jobs_table',1),(24,'2019_12_14_000001_create_personal_access_tokens_table',1),(25,'2022_01_02_120319_create_roles_table',1),(26,'2022_01_04_113328_create_matrices_table',1),(27,'2022_01_04_114310_create_menus_table',1),(28,'2022_01_05_073259_create_commercials_table',1),(29,'2022_01_05_090702_create_clients_table',1),(30,'2022_01_14_100848_create_lieus_table',1),(31,'2022_01_14_104729_create_commandes_table',1),(32,'2022_01_15_225552_create_commantairs_table',1),(34,'2022_01_17_191723_create_notifications_table',1),(35,'2022_01_19_074959_create_activity_log_table',1),(36,'2022_01_19_075000_add_event_column_to_activity_log_table',1),(37,'2022_01_19_075001_add_batch_uuid_column_to_activity_log_table',1),(38,'2022_01_20_084447_analyse_eau',1),(40,'2022_01_20_144721_create_analyse_eaus_table',1),(43,'2022_01_30_190850_add_deleted_at_to_clients_table',4),(44,'2022_01_30_210542_create_analyse_eap_table',4),(45,'2022_01_30_213431_create_analyse_terre_table',4),(46,'2022_01_30_220408_create_analyse_veg_table',4),(47,'2022_01_27_214146_add_quantite_to_commandes_table',5),(48,'2022_01_29_173023_create_analyse_ameo_table',6),(49,'2022_01_20_085239_create_analyse_eau_table',7),(50,'2022_01_16_161628_create_analyse_eau_potable_table',8),(51,'2022_01_30_213431_create_analyse_sol_table',9),(52,'2022_02_01_123244_add_path_images_to_commandes_table',9),(53,'2022_02_03_184609_create_analyse_unite_ameo_table',9),(54,'2022_02_03_184657_create_analyse_unite_eau_potable_table',9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint unsigned NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'administrateur',NULL,NULL),(2,'responsable',NULL,NULL),(3,'cordinateur',NULL,NULL),(4,'receptionniste',NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int unsigned NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'mohammed','el-abidi','mohammed.el-abidi@elephant-vert.com',NULL,'$2y$10$RIpWG.5VHhUW0kvX2x7gZ.t6d92lf12coSZw/rUAOYLqZoPxju3PG',1,1,'programming.PNG',NULL,NULL,'2022-02-09 20:33:56'),(2,'faical','rouissi','faical.rouissi@elephant-vert.com',NULL,'$2y$10$aCS4W7k4H6ySUl0a6YA0Iu/QBRe7BN2w8QszBkibnGk.wlZXKX1W2',1,1,'user.png',NULL,NULL,NULL),(3,'mohammed oussama','mousaouy','m-o.el-mousaouy@elephant-vert.com',NULL,'$2y$10$fd/Ta7iN1UugRmWxmR6Cyu69KuPnwSM9jJB7AELSGUDbmm5VlCe36',1,1,'user.png',NULL,NULL,'2022-01-24 11:03:12'),(4,'amal','el-kabous','amal.el-kabous@elephant-vert.com',NULL,'$2y$10$cERTA5rVw2DYeL90cPOUeO0bwQFi5ygY6syGADnow2ETrYzbQxd62',1,1,'user.png',NULL,NULL,NULL),(5,'amine','bouslamti','amine.bouslamti@elephant-vert.com',NULL,'$2y$10$359Kc7ymkMnuNYP2a78UmuysJasiI.P00AFipoL/kdAYG3O0ojx86',1,1,'user.png',NULL,NULL,'2022-01-24 11:02:37'),(6,'asmaa','benhida','asmaa.benhida@elephant-vert.com',NULL,'$2y$10$WfMiNa9F.tl66e7k5jAvIuWQ6QxbOYKMm.mPiX4ra05fe40d.9yWS',2,1,'user.png',NULL,NULL,NULL),(7,'mohamed','amzad','mohamed.amzad@elephant-vert.com',NULL,'$2y$10$nr9jVcM8PPKTvUcP3dhMr.IWv8Ka3wx.PncglQZemZXGRB4kQPYWq',3,1,'user.png',NULL,NULL,NULL),(8,'fatima','zarrouk','fatima.zarrouk@elephant-vert.com',NULL,'$2y$10$rFXZFq9YIsn3PuIxPLP3lOtKAlfXi60CmOK126Hx/x83VoTXMbpDW',4,1,'user.png',NULL,NULL,NULL);
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

-- Dump completed on 2022-02-12  1:27:30
