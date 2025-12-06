-- MySQL dump 10.13  Distrib 8.0.43, for Win64 (x86_64)
--
-- Host: localhost    Database: addtocart
-- ------------------------------------------------------
-- Server version	8.0.43

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
-- Table structure for table `beagle`
--

DROP TABLE IF EXISTS `beagle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `beagle` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `age` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `colour` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `product_image` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beagle`
--

LOCK TABLES `beagle` WRITE;
/*!40000 ALTER TABLE `beagle` DISABLE KEYS */;
INSERT INTO `beagle` VALUES (101,'Beagle B&T','0.5 years','Male','Tan and Black',25000,'Beagle B&T.jpeg'),(102,'Beagle B&T1','1.5 years','Female','Tan and Black',30000,'Beagle B&T1.jpeg'),(103,'Beagle B&T2','1 year','Male','Tan and Black',20000,'Beagle B&T2.jpeg'),(104,'Beagle BRW','1 year','Female','Black Red White',30000,'Beagle BRW.jpeg'),(105,'Beagle BRW1','2 years','Female','Black Red White',30000,'Beagle BRW1.jpeg'),(106,'Beagle BRW2','1.5 years','Male','Black Red White',35000,'Beagle BRW2.jpeg');
/*!40000 ALTER TABLE `beagle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doberman`
--

DROP TABLE IF EXISTS `doberman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doberman` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `age` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `colour` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `product_image` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=208 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doberman`
--

LOCK TABLES `doberman` WRITE;
/*!40000 ALTER TABLE `doberman` DISABLE KEYS */;
INSERT INTO `doberman` VALUES (201,'Doberman B&R','6 years','Male','Black and Rust',40000,'Doberman B&R.jpg'),(202,'Doberman B&R2','1.5 years','Female','Black and Rust',30000,'Doberman B&R2.jpg'),(203,'Doberman B&R3','1 year','Male','Black and Rust',35000,'Doberman B&R3.jpg'),(204,'Doberman F&R','1 year','Female','Fawn and Rust',30000,'Doberman F&R.jpg'),(205,'Doberman F&R1','1.5 years','Male','Fawn and Rust',35000,'Doberman F&R1.jpeg'),(206,'Doberman F&R2','2 years','Female','Fawn and Rust',35000,'Doberman F&R2.jpeg');
/*!40000 ALTER TABLE `doberman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `germanshepherd`
--

DROP TABLE IF EXISTS `germanshepherd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `germanshepherd` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `age` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `colour` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `product_image` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=308 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `germanshepherd`
--

LOCK TABLES `germanshepherd` WRITE;
/*!40000 ALTER TABLE `germanshepherd` DISABLE KEYS */;
INSERT INTO `germanshepherd` VALUES (301,'German Shepherd Black3','3.5 years','Male','Black',40000,'German Shepherd Black3.jpeg'),(302,'German Shepherd Black','1.5 years','Female','Black',30000,'German Shepherd Black.jpeg'),(303,'German Shepherd Black1','1 year','Male','Black',35000,'German Shepherd Black1.jpg'),(304,'German Shepherd TB','5 years','Male','Tan and Black',40000,'German Shepherd TB.jpg'),(305,'German Shepherd1','1.5 years','Female','Tan and Black',30000,'German Shepherd1.jpg'),(306,'German Shepherd3','3 years','Male','Tan and Black',35000,'German Shepherd3.png');
/*!40000 ALTER TABLE `germanshepherd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goldenretriever`
--

DROP TABLE IF EXISTS `goldenretriever`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `goldenretriever` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `age` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `colour` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `product_image` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=408 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goldenretriever`
--

LOCK TABLES `goldenretriever` WRITE;
/*!40000 ALTER TABLE `goldenretriever` DISABLE KEYS */;
INSERT INTO `goldenretriever` VALUES (401,'Golden Retriever CG1','1 year','Male','Classic Golden',40000,'Golden Retriever CG1.jpeg'),(402,'Golden Retriever CG','2 years','Female','Classic Golden',40000,'Golden Retriever CG.jpg'),(403,'Golden Retriever CG3','3 years','Male','Classic Golden',45000,'Golden Retriever CG3.jpg'),(404,'Golden Retriever CrG2','2 years','Male','Cream Golden',40000,'Golden Retriever CrG2.jpeg'),(405,'Golden Retriever CrG1','2 years','Male','Cream Golden',45000,'Golden Retriever CrG1.jpeg'),(406,'Golden Retriever CrG3','0.5 years','Female','Cream Golden',40000,'Golden Retriever CrG3.jpeg');
/*!40000 ALTER TABLE `goldenretriever` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `labradorretriever`
--

DROP TABLE IF EXISTS `labradorretriever`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `labradorretriever` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `age` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `colour` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `product_image` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=508 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `labradorretriever`
--

LOCK TABLES `labradorretriever` WRITE;
/*!40000 ALTER TABLE `labradorretriever` DISABLE KEYS */;
INSERT INTO `labradorretriever` VALUES (501,'Labarador  Black1','0.5 years','Male','Cream',30000,'Labarador.jpg'),(502,'Labarador','2 years','Female','Cream',35000,'Labarador1.jpeg'),(503,'Labrador White','2 years','Male','Cream',40000,'Labrador White.jpeg'),(504,'Labrador White1','1.5 years','Male','White',40000,'Labrador White1.jpeg'),(505,'Labrador White3','2 years','Male','White',40000,'Labrador White3.jpeg'),(506,'Labrador White2','3 years','Male','White',40000,'Labrador White2.jpeg');
/*!40000 ALTER TABLE `labradorretriever` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pomeranian`
--

DROP TABLE IF EXISTS `pomeranian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pomeranian` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `age` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `colour` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `product_image` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=608 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pomeranian`
--

LOCK TABLES `pomeranian` WRITE;
/*!40000 ALTER TABLE `pomeranian` DISABLE KEYS */;
INSERT INTO `pomeranian` VALUES (601,'Pomeranian Black&Tan','1 year','Male','Black and Tan',10000,'Pomeranian Black&Tan.jpg'),(602,'Pomeranian Black&Tan2','1.5 years','Female','Black and Tan',10000,'Pomeranian Black&Tan2.jpeg'),(603,'Pomeranian B&T3','1 year','Female','Black and Tan',10000,'Pomeranian B&T3.jpg'),(604,'Pomeranian Cream','1.5 years','Male','Cream',11000,'Pomeranian Cream.jpg'),(605,'Pomeranian Cream1','2 years','Male','Cream',11000,'Pomeranian Cream1.jpeg'),(606,'Pomeranian Cream2','2 years','Male','Cream',11000,'Pomeranian Cream2.jpeg');
/*!40000 ALTER TABLE `pomeranian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pug`
--

DROP TABLE IF EXISTS `pug`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pug` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `age` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `colour` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `product_image` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=708 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pug`
--

LOCK TABLES `pug` WRITE;
/*!40000 ALTER TABLE `pug` DISABLE KEYS */;
INSERT INTO `pug` VALUES (701,'Pug SFS','3 years','Male','Silver Fawn and Silver',30000,'Pug SFS.jpg'),(702,'Pug SFS1','2 years','Female','Silver Fawn and Silver',25000,'Pug SFS1.jpg'),(703,'Pug1','2 years','Male','Silver Fawn and Silver',30000,'Pug1.jpg'),(704,'Pug Black','2 years','Female','Black',25000,'Pug Black.jpeg'),(705,'Pug Black2','1.5 years','Male','Black',25000,'Pug Black2.jpg'),(706,'Pug Black1','2 years','Male','Black',25000,'Pug Black1.png');
/*!40000 ALTER TABLE `pug` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rottweiler`
--

DROP TABLE IF EXISTS `rottweiler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rottweiler` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `age` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `colour` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `product_image` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=808 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rottweiler`
--

LOCK TABLES `rottweiler` WRITE;
/*!40000 ALTER TABLE `rottweiler` DISABLE KEYS */;
INSERT INTO `rottweiler` VALUES (801,'Rottweiler B&M','3 years','Male','Black and Mahogany',40000,'Rottweiler B&M.png'),(802,'Rottweiler B&M1','3.5 years','Female','Black and Mahogany',40000,'Rottweiler B&M1.jpg'),(803,'Rottweiler1','2 years','Male','Black and Mahogany',40000,'Rottweiler1.jpg'),(804,'Rottweiler B&R','2 years','Male','Black and Rust',40000,'Rottweiler B&R.jpg'),(805,'Rottweiler B&R1','2.5 years','Female','Black and Rust',40000,'Rottweiler B&R1.jpg'),(806,'Rottweiler2','0.5 years','Male','Black and Rust',45000,'Rottweiler2.jpg');
/*!40000 ALTER TABLE `rottweiler` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shihtzu`
--

DROP TABLE IF EXISTS `shihtzu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shihtzu` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `age` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `colour` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `product_image` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=908 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shihtzu`
--

LOCK TABLES `shihtzu` WRITE;
/*!40000 ALTER TABLE `shihtzu` DISABLE KEYS */;
INSERT INTO `shihtzu` VALUES (901,'Shih Tzu2','2 years','Female','Brindle and White',35000,'Shih Tzu2.png'),(902,'Shih Tzu Br&W','2 years','Male','Brindle and White',40000,'Shih Tzu Br&W.jpg'),(903,'Shih Tzu Br&W1','1 year','Male','Brindle and White',35000,'Shih Tzu Br&W1.jpeg'),(904,'Shih Tzu B&W2','0.5 years','Male','Black and White',35000,'Shih Tzu B&W2.jpg'),(905,'Shih Tzu B&W1','1.5 years','Female','Black and White',35000,'Shih Tzu B&W1.jpg'),(906,'Shih Tzu B&W','1.5 years','Male','Black and White',40000,'Shih Tzu B&W.jpg');
/*!40000 ALTER TABLE `shihtzu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siberianhusky`
--

DROP TABLE IF EXISTS `siberianhusky`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `siberianhusky` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `age` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `colour` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `product_image` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1008 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siberianhusky`
--

LOCK TABLES `siberianhusky` WRITE;
/*!40000 ALTER TABLE `siberianhusky` DISABLE KEYS */;
INSERT INTO `siberianhusky` VALUES (1001,'Siberian Husky A&W','2 years','Female','Agouti and White',35000,'Siberian Husky A&W.png'),(1002,'Siberian Husky A&W1','2 years','Male','Agouti and White',40000,'Siberian Husky A&W1.jpg'),(1003,'Siberian Husky A&W2','1.5 years','Male','Agouti and White',40000,'Siberian Husky A&W2.jpg'),(1004,'Siberian Husky','0.5 years','Male','Black and White',35000,'Siberian Husky.jpg'),(1005,'Siberian Husky B&W1','2 years','Female','Black and White',35000,'Siberian Husky B&W1.jpeg'),(1006,'Siberian Husky B&W','2 years','Male','Black and White',40000,'Siberian Husky B&W.jpg');
/*!40000 ALTER TABLE `siberianhusky` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-12-06 11:50:58
