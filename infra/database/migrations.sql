CREATE DATABASE  IF NOT EXISTS `tarefasdiarias` 
/*!40100 DEFAULT CHARACTER SET utf8 */;
USE `tarefasdiarias`;
-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: tarefasdiarias
-- ------------------------------------------------------
-- Server version	8.0.29-0ubuntu0.20.04.3

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
-- Table structure for table `categoria_tarefa`
--

DROP TABLE IF EXISTS `categoria_tarefa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria_tarefa` (
  `cod` int NOT NULL,
  `nome` varchar(45) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria_tarefa`
--

LOCK TABLES `categoria_tarefa` WRITE;
/*!40000 ALTER TABLE `categoria_tarefa` DISABLE KEYS */;
INSERT INTO `categoria_tarefa` VALUES (1,'Trabalho'),(2,'Escola'),(3,'Estágio'),(4,'Compra');
/*!40000 ALTER TABLE `categoria_tarefa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil_usuario`
--

DROP TABLE IF EXISTS `perfil_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perfil_usuario` (
  `cod` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil_usuario`
--

LOCK TABLES `perfil_usuario` WRITE;
/*!40000 ALTER TABLE `perfil_usuario` DISABLE KEYS */;
INSERT INTO `perfil_usuario` VALUES (1,'Administrador'),(2,'Usuário Padrão');
/*!40000 ALTER TABLE `perfil_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tarefas`
--

DROP TABLE IF EXISTS `tarefas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tarefas` (
  `cod` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `usuario_cod` int NOT NULL,
  `categoria_cod` int NOT NULL,
  PRIMARY KEY (`cod`),
  KEY `fk_tarefas_usuario1` (`usuario_cod`),
  KEY `fk_tarefas_categoria1` (`categoria_cod`),
  CONSTRAINT `fk_tarefas_categoria1` FOREIGN KEY (`categoria_cod`) REFERENCES `categoria_tarefa` (`cod`),
  CONSTRAINT `fk_tarefas_usuario1` FOREIGN KEY (`usuario_cod`) REFERENCES `usuario` (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarefas`
--

LOCK TABLES `tarefas` WRITE;
/*!40000 ALTER TABLE `tarefas` DISABLE KEYS */;
INSERT INTO `tarefas` VALUES (7,'Comprar Iogurte','2019-08-23','12:00:00','Teste',5,4),(8,'Estudar Matemática','2019-08-27','09:00:00','',4,2),(11,'Comprar Iogurte','2019-08-01','12:12:00','Activia',5,3),(12,'Comprar Pão','2019-08-16','13:13:00','',3,1),(13,'Estudar Geografia','2019-08-31','13:15:00','Estudar para a prova que será aplicada amanhã',3,2),(14,'Comprar Café','2019-08-31','09:09:00','Café Solúvel',5,4);
/*!40000 ALTER TABLE `tarefas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `cod` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `perfil_cod` int NOT NULL,
  PRIMARY KEY (`cod`),
  KEY `fk_usuario_perfil1_idx` (`perfil_cod`),
  CONSTRAINT `fk_usuario_perfil1` FOREIGN KEY (`perfil_cod`) REFERENCES `perfil_usuario` (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (3,'brendson','brendson@gmail.com','123456789',2),(4,'teste','teste@gmail.com','123456789',2),(5,'Administrador','admin@gmail.com','123456789',1);
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

-- Dump completed on 2022-06-27 18:02:48
