CREATE DATABASE  IF NOT EXISTS `twitter` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `twitter`;
-- MySQL dump 10.16  Distrib 10.1.41-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: twitter
-- ------------------------------------------------------
-- Server version	10.1.41-MariaDB-0+deb9u1

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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `data_post` datetime NOT NULL,
  `mensagem` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,1,'2020-01-23 19:24:38','kjhkj kjkjkl'),(2,1,'2020-01-23 19:24:44','Teste de msg'),(3,1,'2020-01-23 19:43:34','Teste de msg'),(4,3,'2020-01-23 19:46:46','Teste do novo'),(5,3,'2020-01-23 22:19:44','Muito bom este teste'),(6,1,'2020-01-23 22:20:33','Posts bem bacana\r\n'),(7,6,'2020-01-23 22:21:47','Também gostei'),(8,6,'2020-01-23 22:24:06','Também gostei'),(9,6,'2020-01-23 22:24:52','Também gostei');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relacionamentos`
--

DROP TABLE IF EXISTS `relacionamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `relacionamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_seguidor` int(11) NOT NULL,
  `id_seguido` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relacionamentos`
--

LOCK TABLES `relacionamentos` WRITE;
/*!40000 ALTER TABLE `relacionamentos` DISABLE KEYS */;
INSERT INTO `relacionamentos` VALUES (5,3,1),(6,2,3),(7,2,1),(8,3,2),(9,6,2),(12,4,3),(13,4,6),(14,5,1),(15,5,2),(16,5,3),(17,5,4),(18,1,2),(21,1,5),(23,1,6),(24,3,6),(28,6,3);
/*!40000 ALTER TABLE `relacionamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Deusyvan','deusyvan@gmail.com','202cb962ac59075b964b07152d234b70'),(2,'Teste','teste@teste','202cb962ac59075b964b07152d234b70'),(3,'Novo','novo@novo','202cb962ac59075b964b07152d234b70'),(4,'Cicrano','ci@ci','202cb962ac59075b964b07152d234b70'),(5,'Fulano','fu@fu','202cb962ac59075b964b07152d234b70'),(6,'Beltrano','bi@bi','202cb962ac59075b964b07152d234b70');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-23 22:33:28
