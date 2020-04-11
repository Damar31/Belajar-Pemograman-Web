-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: Db_Tugas
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `kendaraan`
--

DROP TABLE IF EXISTS `kendaraan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kendaraan` (
  `noplat` varchar(9) NOT NULL,
  `idtipe` char(5) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `tarif` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`noplat`),
  KEY `kendaraan_ibfk_1` (`idtipe`),
  CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`idtipe`) REFERENCES `tipekendaraan` (`idtipe`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kendaraan`
--

LOCK TABLES `kendaraan` WRITE;
/*!40000 ALTER TABLE `kendaraan` DISABLE KEYS */;
INSERT INTO `kendaraan` VALUES ('B1234CD','A0001',2010,200000,'Baik'),('D4567GGG','B0002',2012,225000,'Baik'),('F8888FF','C0003',2014,250000,'Baik');
/*!40000 ALTER TABLE `kendaraan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pelanggan`
--

DROP TABLE IF EXISTS `pelanggan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pelanggan` (
  `noktp` char(16) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`noktp`),
  UNIQUE KEY `telepon` (`telepon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pelanggan`
--

LOCK TABLES `pelanggan` WRITE;
/*!40000 ALTER TABLE `pelanggan` DISABLE KEYS */;
INSERT INTO `pelanggan` VALUES ('1234567890123456','Nana','Magelang','081344444444'),('4567890123456789','Nona','Boyolali','081355555555'),('6789012345678901','Nina','Klaten','081366666666');
/*!40000 ALTER TABLE `pelanggan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sopir`
--

DROP TABLE IF EXISTS `sopir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sopir` (
  `idsopir` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  `sim` char(12) DEFAULT NULL,
  `tarif` int(11) DEFAULT NULL,
  PRIMARY KEY (`idsopir`),
  UNIQUE KEY `telepon` (`telepon`),
  UNIQUE KEY `sim` (`sim`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sopir`
--

LOCK TABLES `sopir` WRITE;
/*!40000 ALTER TABLE `sopir` DISABLE KEYS */;
INSERT INTO `sopir` VALUES (1,'Rosa','Semarang','081311111111','000000111111',75000),(2,'Reza','Solo','081322222222','111111222222',125000),(3,'Raja','Yogyakarta','081333333333','222222333333',100000);
/*!40000 ALTER TABLE `sopir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipekendaraan`
--

DROP TABLE IF EXISTS `tipekendaraan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipekendaraan` (
  `idtipe` char(5) NOT NULL,
  `tipe` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idtipe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipekendaraan`
--

LOCK TABLES `tipekendaraan` WRITE;
/*!40000 ALTER TABLE `tipekendaraan` DISABLE KEYS */;
INSERT INTO `tipekendaraan` VALUES ('A0001','Matic'),('B0002','Manual'),('C0003','Matic');
/*!40000 ALTER TABLE `tipekendaraan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaksi` (
  `notransaksi` char(10) NOT NULL,
  `noplat` varchar(9) DEFAULT NULL,
  `idsopir` int(11) DEFAULT NULL,
  `noktp` char(16) DEFAULT NULL,
  `tanggalpesan` date DEFAULT NULL,
  `tanggalpinjam` date DEFAULT NULL,
  `tanggalkembalirencana` date DEFAULT NULL,
  `jamkembalirencana` time DEFAULT NULL,
  `tanggalkembalirealisasi` date DEFAULT NULL,
  `jamkembalirealisasi` time DEFAULT NULL,
  `denda` int(11) DEFAULT NULL,
  `kmpinjam` int(11) DEFAULT NULL,
  `kmkembali` int(11) DEFAULT NULL,
  `bbmpinjam` varchar(50) DEFAULT NULL,
  `bbmkembali` varchar(50) DEFAULT NULL,
  `kondisipinjam` varchar(100) DEFAULT NULL,
  `kondisikembali` varchar(100) DEFAULT NULL,
  `kerusakan` varchar(100) DEFAULT NULL,
  `biayakerusakan` int(11) DEFAULT NULL,
  `biayabbm` int(11) DEFAULT NULL,
  PRIMARY KEY (`notransaksi`),
  KEY `transaksi_ibfk_1` (`noplat`),
  KEY `transaksi_ibfk_2` (`idsopir`),
  KEY `transaksi_ibfk_3` (`noktp`),
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`noplat`) REFERENCES `kendaraan` (`noplat`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`idsopir`) REFERENCES `sopir` (`idsopir`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`noktp`) REFERENCES `pelanggan` (`noktp`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi`
--

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` VALUES ('T000000001','B1234CD',1,'1234567890123456','2016-01-01','2016-02-02','2016-02-14','18:00:00','2016-02-14','15:00:00',0,1000,1200,'full','full','baik','baik','tidak ada',0,0),('T000000002','D4567GGG',2,'4567890123456789','2016-02-02','2016-02-15','2016-03-01','18:00:00','2016-03-03','12:00:00',400000,700,1500,'full','setengah','baik','tidak','bemper penyok',200000,75000),('T000000003','F8888FF',3,'6789012345678901','2016-03-03','2016-03-11','2016-04-04','18:00:00','2016-03-04','21:00:00',50000,2000,3000,'setengah','full','baik','baik','tidak ada',0,0);
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-11 17:47:28
