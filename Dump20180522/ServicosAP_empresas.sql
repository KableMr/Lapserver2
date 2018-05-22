-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: ServicosAP
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `localizacao` varchar(45) DEFAULT NULL,
  `formacao` varchar(45) DEFAULT NULL,
  `bio` varchar(45) DEFAULT NULL,
  `area_conhecimento` varchar(45) DEFAULT NULL,
  `categoria_id` varchar(45) DEFAULT NULL,
  `arquivo_id` int(11) DEFAULT NULL,
  `conhecimento_id` int(11) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Profissional_arquivo1_idx` (`arquivo_id`),
  KEY `fk_Profissional_conhecimento1_idx` (`conhecimento_id`),
  CONSTRAINT `fk_Profissional_arquivo1` FOREIGN KEY (`arquivo_id`) REFERENCES `arquivo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Profissional_conhecimento1` FOREIGN KEY (`conhecimento_id`) REFERENCES `conhecimento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` VALUES (1,'proesc','proesc@gmail.com','202cb962ac59075b964b07152d234b70','Macapá, Amapá, Brasil','Especializada em Gestão Escolar','Gestão Escolar',NULL,'1',60,1,'(96) 991323261'),(2,'faculdade meta','faculdade.meta@gmail.com','202cb962ac59075b964b07152d234b70','Macapá, Amapá, Brasil','Oferece cursos de Ensino Superior','Graduação e Pós-graduação','outros','1',86,NULL,'(96) 99182-9192'),(3,'mbs system ti','mbs@contato.com','202cb962ac59075b964b07152d234b70','Macapá, Amapá, Brasil','Desenvolvimento de Software.','Sistemas para Empresas. ','Desenvolvimento de Software','1',90,NULL,'(96) 99132-3261');
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-22 16:13:43
