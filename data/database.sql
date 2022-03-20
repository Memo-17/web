CREATE DATABASE  IF NOT EXISTS `events_website` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `events_website`;
-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: events_website
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `attendeesrange`
--

DROP TABLE IF EXISTS `attendeesrange`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `attendeesrange` (
  `id` int NOT NULL AUTO_INCREMENT,
  `range` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Rango estimado de asistentes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendeesrange`
--

LOCK TABLES `attendeesrange` WRITE;
/*!40000 ALTER TABLE `attendeesrange` DISABLE KEYS */;
INSERT INTO `attendeesrange` VALUES (1,'Menos de 20'),(2,'Entre 20 y 50'),(3,'Mas de 50');
/*!40000 ALTER TABLE `attendeesrange` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacto`
--

DROP TABLE IF EXISTS `contacto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacto` (
  `ID_CONTACTO` int NOT NULL AUTO_INCREMENT,
  `NOMBRE_APELLIDO` varchar(20) NOT NULL,
  `CORREO` varchar(30) NOT NULL,
  `TELEFONO` varchar(25) NOT NULL,
  `CIUDAD` varchar(30) NOT NULL,
  `TITULO_MENSAJE` varchar(30) NOT NULL,
  `MENSAJE` longtext CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `PREFERENCIA` varchar(2) DEFAULT NULL,
  `FECHA_EMISION` date DEFAULT NULL,
  PRIMARY KEY (`ID_CONTACTO`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacto`
--

LOCK TABLES `contacto` WRITE;
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
INSERT INTO `contacto` VALUES (15,'Indigo a','fazor@modificado.com','4234242342','GUAYAQUIL','modificadoomnis id ddad','modificadoofnis ad ullam ipsMaioadasdasddadadres ad asasasasasasas','Si',NULL),(43,'Zia Head','sydisyb@mailinator.com','2423443224','GUAYAQUIL','Debitis maxime vero ','Pariatur Sunt praesPariatur Sunt praesPariatur Sunt praes','No','2022-03-14'),(44,'Guillermo Baquerizo','guillermo.baquerizom@ug.edu.ec','0989088015','QUITO','Prueba del CRUD','Este modulo funciona correctamente, en estructura MVC','Si','2022-03-14'),(54,'Fredericka Calderon','zyli@mailinato.com','1439251266','GUAYAQUIL','Et quaerat dolor lab','Maxime ut et debitisdebitisdebitisdebitisdebitisdebitisdebitis','Si','2022-03-19');
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info_tarjeta`
--

DROP TABLE IF EXISTS `info_tarjeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `info_tarjeta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(19) DEFAULT NULL,
  `NumTarjeta` varchar(19) DEFAULT NULL,
  `Mes` varchar(2) DEFAULT NULL,
  `Anio` varchar(4) DEFAULT NULL,
  `CCV` varchar(3) DEFAULT NULL,
  `idUsuario` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_tarjeta`
--

LOCK TABLES `info_tarjeta` WRITE;
/*!40000 ALTER TABLE `info_tarjeta` DISABLE KEYS */;
INSERT INTO `info_tarjeta` VALUES (3,'Erick Quijije','5421 3213 1513 2151','7','2027','233',2),(4,'Guillermo Baquerizo','4442 1313 3332 5152','4','2025','551',2),(8,'kkkkaaaaaaaa','555555555','3','2025','255',3),(9,'jajaja','88888888','3','2025','255',2),(10,'KOKOKOKO','88888888','3','2025','255',2),(11,'Camilo','5132 1215 1355 5123','6','2022','442',2),(12,'Juanito','5321 3513 1381 3213','6','2026','442',3),(13,'jj','4132 1351 3513 2135','7','2025','552',2),(14,'assda','1651 3135 1321 3135','5','2023','552',2),(16,'Mariasa','5421 3151 3213 5132','9','2029','112',1),(17,'Pruebas','2321 3221 3135 1325','3','2026','111',3),(18,'asdasdass','2051 6516 5132 1351','8','2027','123',2),(19,'mEMOgOD','5545 4654 6846 5468','7','2028','445',3);
/*!40000 ALTER TABLE `info_tarjeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resenas`
--

DROP TABLE IF EXISTS `resenas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `resenas` (
  `ID_USUARIO` int NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(100) NOT NULL,
  `APELLIDOS` varchar(100) NOT NULL,
  `USUARIO` varchar(25) NOT NULL,
  `CORREO` varchar(50) NOT NULL,
  `COMENTARIOS` longtext NOT NULL,
  `VALORACION` int NOT NULL,
  PRIMARY KEY (`ID_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resenas`
--

LOCK TABLES `resenas` WRITE;
/*!40000 ALTER TABLE `resenas` DISABLE KEYS */;
INSERT INTO `resenas` VALUES (1,'Ivan','Ramos','harijan16','harijan-14@hotmail.com','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at vulputate ante, ut lobortis lectus. Proin pharetra mauris id enim tincidunt, sed bibendum nisl porttitor. In ut interdum ligula. Aliquam tempor est neque, et molestie mauris vehicula a. Vivamus a consequat metus. Vivamus a nisi non nunc consequat sagittis. Aliquam eu metus quis mi semper consequat. Quisque ex sapien, elementum et quam eget, sodales aliquam nisl. Nulla facilisi. Integer condimentum imperdiet tellus eget viverra. Donec at orci turpis. Nulla at velit auctor, tempus ante sit amet, mattis ligula. Nulla augue nunc, ultrices in velit vel, pellentesque ultrices ligula.',2),(3,'Joel','Villlao','Darrow98','Darrow98@hotmail.com','Prueba',2);
/*!40000 ALTER TABLE `resenas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rol` (
  `idrol` int NOT NULL AUTO_INCREMENT,
  `rol` varchar(15) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  PRIMARY KEY (`idrol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` VALUES (1,'admin','A'),(2,'cliente','A'),(3,'cliente','A');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scheduleevents`
--

DROP TABLE IF EXISTS `scheduleevents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `scheduleevents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `eventName` varchar(255) NOT NULL,
  `contactEmail` varchar(255) DEFAULT NULL,
  `contactPhone` varchar(255) NOT NULL,
  `estimatedDate` date NOT NULL,
  `estimatedHour` time NOT NULL,
  `estimatedAttendees` int NOT NULL,
  `message` text,
  PRIMARY KEY (`id`),
  KEY `estimatedAttendessFK_idx` (`estimatedAttendees`),
  CONSTRAINT `estimatedAttendessFK` FOREIGN KEY (`estimatedAttendees`) REFERENCES `attendeesrange` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Registro de los potenciales eventos agendados.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scheduleevents`
--

LOCK TABLES `scheduleevents` WRITE;
/*!40000 ALTER TABLE `scheduleevents` DISABLE KEYS */;
INSERT INTO `scheduleevents` VALUES (3,'Expedita iure illum','dawav@mailinator.com','2342424424','2009-10-16','12:03:00',1,'Et est sit et tempo'),(4,'Expedita iure illum','dawav@mailinator.com','2342424424','2009-10-16','12:03:00',1,'Et est sit et temp'),(5,'Expedita iure editado','dawav@mailinator.com','2342424424','2009-10-16','12:03:00',1,'Et est sit et tempo'),(7,'Theodore edi','mudybe@mailinator.com','3123123123','1994-08-15','20:37:00',3,'Nemo eveniet dolore');
/*!40000 ALTER TABLE `scheduleevents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trabajo`
--

DROP TABLE IF EXISTS `trabajo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trabajo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(10) DEFAULT NULL,
  `APELLIDO` varchar(10) DEFAULT NULL,
  `TELEFONO` varchar(20) DEFAULT NULL,
  `CORREO` varchar(40) DEFAULT NULL,
  `NACIMIENTO` date DEFAULT NULL,
  `TRABAJO` varchar(10) DEFAULT NULL,
  `EMISION` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trabajo`
--

LOCK TABLES `trabajo` WRITE;
/*!40000 ALTER TABLE `trabajo` DISABLE KEYS */;
INSERT INTO `trabajo` VALUES (23,'update','update','0927114123','sda@mailinator.com','1998-09-09','mesero',NULL),(25,'Philip Lyo','Carrillo','0947861445','byhyfuboco@mailinator.com','2000-05-26','mesero',NULL),(26,'Guillermo','Baquerizo','1234567890','wihicir@mailinator.com','2000-01-02','animador',NULL),(30,'Quynn','Pacheco','1234567890','tunul@mailinator.com','1983-03-10','mesero','2022-03-20');
/*!40000 ALTER TABLE `trabajo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `idUsuario` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `telefono` varchar(11) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  `id_rol` int DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Guillermo','adminmemo','memo@gmail.com','12345','0990135535','Batallon','A',1),(2,'Pedro','pepe','pepe@gmail.com','12345','0987456321','Guasmo','A',2),(3,'Erick','Ercik','erick@gmail.com','12345','0363258954','Trinitaria','A',2);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-19 20:56:48
