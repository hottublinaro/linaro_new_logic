-- MariaDB dump 10.19  Distrib 10.5.19-MariaDB, for debian-linux-gnu (aarch64)
--
-- Host: localhost    Database: hottub
-- ------------------------------------------------------
-- Server version	10.5.19-MariaDB-0+deb11u2

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
-- Table structure for table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrator` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(150) NOT NULL,
  `admin_userlogin` varchar(100) NOT NULL,
  `admin_password` text NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrator`
--

LOCK TABLES `administrator` WRITE;
/*!40000 ALTER TABLE `administrator` DISABLE KEYS */;
INSERT INTO `administrator` VALUES (1,'administrator','administrator','8cb2237d0679ca88db6464eac60da96345513964');
/*!40000 ALTER TABLE `administrator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `apf`
--

DROP TABLE IF EXISTS `apf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `apf` (
  `apf_id` int(1) NOT NULL AUTO_INCREMENT,
  `apf_1` int(1) NOT NULL,
  `apf_2` int(1) NOT NULL,
  `apf_3` int(1) NOT NULL,
  `apf_4` int(1) NOT NULL,
  `apf_5` int(1) NOT NULL,
  `apf_6` int(1) NOT NULL,
  `apf_7` int(1) NOT NULL,
  `apf_8` int(1) NOT NULL,
  `apf_9` int(1) NOT NULL,
  `apf_10` int(1) NOT NULL,
  `apf_11` int(1) NOT NULL,
  `apf_12` int(1) NOT NULL,
  `apf_13` int(1) NOT NULL,
  `apf_14` int(1) NOT NULL,
  `apf_15` int(1) NOT NULL,
  `apf_16` int(1) NOT NULL,
  `apf_17` int(1) NOT NULL,
  `apf_18` int(1) NOT NULL,
  `apf_19` int(1) NOT NULL,
  `apf_20` int(1) NOT NULL,
  `apf_21` int(1) NOT NULL,
  `apf_22` int(1) NOT NULL,
  `apf_23` int(1) NOT NULL,
  `apf_24` int(1) NOT NULL,
  PRIMARY KEY (`apf_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apf`
--

LOCK TABLES `apf` WRITE;
/*!40000 ALTER TABLE `apf` DISABLE KEYS */;
INSERT INTO `apf` VALUES (1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `apf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `backwash`
--

DROP TABLE IF EXISTS `backwash`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `backwash` (
  `backwash_id` int(1) NOT NULL AUTO_INCREMENT,
  `backwash_state_1` varchar(255) NOT NULL,
  `backwash_start_1` time NOT NULL,
  `backwash_end_1` time NOT NULL,
  `backwash_status_1` int(1) NOT NULL COMMENT '0.close 1.open',
  `backwash_state_2` varchar(255) NOT NULL,
  `backwash_start_2` time NOT NULL,
  `backwash_end_2` time NOT NULL,
  `backwash_status_2` int(1) NOT NULL COMMENT '0.close 1.open	',
  `backwash_state_3` varchar(255) NOT NULL,
  `backwash_start_3` time NOT NULL,
  `backwash_end_3` time NOT NULL,
  `backwash_status_3` int(1) NOT NULL COMMENT '0.close 1.open',
  `backwash_state_4` varchar(255) NOT NULL,
  `backwash_start_4` time NOT NULL,
  `backwash_end_4` time NOT NULL,
  `backwash_status_4` int(1) NOT NULL COMMENT '0.close 1.open',
  `backwash_mode` int(1) NOT NULL COMMENT '0.close 1.manual 2.auto',
  `backwash_time` int(11) NOT NULL,
  `backwash_countdown` int(11) NOT NULL,
  PRIMARY KEY (`backwash_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `backwash`
--

LOCK TABLES `backwash` WRITE;
/*!40000 ALTER TABLE `backwash` DISABLE KEYS */;
INSERT INTO `backwash` VALUES (1,'[\"4\"]','11:05:00','00:00:00',1,'','00:00:00','00:00:00',0,'','00:00:00','00:00:00',0,'','00:00:00','00:00:00',0,2,60,10);
/*!40000 ALTER TABLE `backwash` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chlorine`
--

DROP TABLE IF EXISTS `chlorine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chlorine` (
  `chlorine_id` int(1) NOT NULL AUTO_INCREMENT,
  `chlorine_1` int(1) NOT NULL,
  `chlorine_2` int(1) NOT NULL,
  `chlorine_3` int(1) NOT NULL,
  `chlorine_4` int(1) NOT NULL,
  `chlorine_5` int(1) NOT NULL,
  `chlorine_6` int(1) NOT NULL,
  `chlorine_7` int(1) NOT NULL,
  `chlorine_8` int(1) NOT NULL,
  `chlorine_9` int(1) NOT NULL,
  `chlorine_10` int(1) NOT NULL,
  `chlorine_11` int(1) NOT NULL,
  `chlorine_12` int(1) NOT NULL,
  `chlorine_13` int(1) NOT NULL,
  `chlorine_14` int(1) NOT NULL,
  `chlorine_15` int(1) NOT NULL,
  `chlorine_16` int(1) NOT NULL,
  `chlorine_17` int(1) NOT NULL,
  `chlorine_18` int(1) NOT NULL,
  `chlorine_19` int(1) NOT NULL,
  `chlorine_20` int(1) NOT NULL,
  `chlorine_21` int(1) NOT NULL,
  `chlorine_22` int(1) NOT NULL,
  `chlorine_23` int(1) NOT NULL,
  `chlorine_24` int(1) NOT NULL,
  PRIMARY KEY (`chlorine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chlorine`
--

LOCK TABLES `chlorine` WRITE;
/*!40000 ALTER TABLE `chlorine` DISABLE KEYS */;
INSERT INTO `chlorine` VALUES (1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `chlorine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dashboard`
--

DROP TABLE IF EXISTS `dashboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dashboard` (
  `dashboard_id` int(1) NOT NULL AUTO_INCREMENT,
  `pressure` double NOT NULL,
  `ph` double NOT NULL,
  `orp` double NOT NULL,
  `temperature` double NOT NULL,
  `filtration` varchar(5) NOT NULL,
  `pompe_ozone` varchar(5) NOT NULL,
  `chauffage` varchar(5) NOT NULL,
  `chauffage2` varchar(5) NOT NULL,
  `lamp_zone1` varchar(5) NOT NULL,
  `lamp_zone2` varchar(5) NOT NULL,
  `lamp_uv` varchar(5) NOT NULL,
  `volt_1` double NOT NULL,
  `volt_2` double NOT NULL,
  `volt_3` double NOT NULL,
  `max_pressure` double DEFAULT NULL,
  `min_pressure` double DEFAULT NULL,
  `plc_in` text NOT NULL,
  `plc_out` text NOT NULL,
  `relay_ch` text NOT NULL,
  `count_down` varchar(255) NOT NULL,
  PRIMARY KEY (`dashboard_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dashboard`
--

LOCK TABLES `dashboard` WRITE;
/*!40000 ALTER TABLE `dashboard` DISABLE KEYS */;
INSERT INTO `dashboard` VALUES (1,0.5,6.35,127.79,32.04,'True','True','True','True','','','',0,0,0,0,0,'[\'False\', \'False\', True, True, True, True, False, True]','[True, True, True, True]','[True, True, False, True, False, False, False, False]','');
/*!40000 ALTER TABLE `dashboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_logger`
--

DROP TABLE IF EXISTS `data_logger`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_logger` (
  `data_logger_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `machine_code` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL,
  `ph` double NOT NULL,
  `orp` double NOT NULL,
  `temp` double NOT NULL,
  `pressure` double NOT NULL,
  `plc_q0` varchar(10) NOT NULL,
  `plc_q1` varchar(10) NOT NULL,
  `plc_q2` varchar(10) NOT NULL,
  `plc_q3` varchar(10) NOT NULL,
  `plc_i0` varchar(10) NOT NULL,
  `plc_i1` varchar(10) NOT NULL,
  `plc_i2` varchar(10) NOT NULL,
  `plc_i3` varchar(10) NOT NULL,
  `plc_i4` varchar(10) NOT NULL,
  `plc_i5` varchar(10) NOT NULL,
  `plc_i6` varchar(10) NOT NULL,
  `plc_i7` varchar(10) NOT NULL,
  `relay_ch0` varchar(10) NOT NULL,
  `relay_ch1` varchar(10) NOT NULL,
  `relay_ch2` varchar(10) NOT NULL,
  `relay_ch3` varchar(10) NOT NULL,
  `relay_ch4` varchar(10) NOT NULL,
  `relay_ch5` varchar(10) NOT NULL,
  `relay_ch6` varchar(10) NOT NULL,
  `relay_ch7` varchar(10) NOT NULL,
  `date_create` date DEFAULT NULL,
  PRIMARY KEY (`data_logger_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_logger`
--

LOCK TABLES `data_logger` WRITE;
/*!40000 ALTER TABLE `data_logger` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_logger` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `filtration_time`
--

DROP TABLE IF EXISTS `filtration_time`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `filtration_time` (
  `ft_id` int(1) NOT NULL AUTO_INCREMENT,
  `ft_status_1` int(1) NOT NULL COMMENT '0.close 1.swim 2.ozone choc',
  `ft_zone_1` varchar(255) NOT NULL,
  `ft_status_2` int(1) NOT NULL,
  `ft_zone_2` varchar(255) NOT NULL,
  `ft_status_3` int(1) NOT NULL,
  `ft_zone_3` varchar(255) NOT NULL,
  `ft_status_4` int(11) NOT NULL,
  `ft_zone_4` varchar(255) NOT NULL,
  `ft_status_5` int(1) NOT NULL,
  `ft_zone_5` varchar(255) NOT NULL,
  `ft_status_6` int(1) NOT NULL,
  `ft_zone_6` varchar(255) NOT NULL,
  `ft_status_7` int(1) NOT NULL,
  `ft_zone_7` varchar(255) NOT NULL,
  `ft_status_8` int(1) NOT NULL,
  `ft_zone_8` varchar(255) NOT NULL,
  `ft_status_9` int(1) NOT NULL,
  `ft_zone_9` varchar(255) NOT NULL,
  `ft_status_10` int(1) NOT NULL,
  `ft_zone_10` varchar(255) NOT NULL,
  `ft_status_11` int(1) NOT NULL,
  `ft_zone_11` varchar(255) NOT NULL,
  `ft_status_12` int(1) NOT NULL,
  `ft_zone_12` varchar(255) NOT NULL,
  `ft_status_13` int(1) NOT NULL,
  `ft_zone_13` varchar(255) NOT NULL,
  `ft_status_14` int(1) NOT NULL,
  `ft_zone_14` varchar(255) NOT NULL,
  `ft_status_15` int(1) NOT NULL,
  `ft_zone_15` varchar(255) NOT NULL,
  `ft_status_16` int(1) NOT NULL,
  `ft_zone_16` varchar(255) NOT NULL,
  `ft_status_17` int(1) NOT NULL,
  `ft_zone_17` varchar(255) NOT NULL,
  `ft_status_18` int(1) NOT NULL,
  `ft_zone_18` varchar(255) NOT NULL,
  `ft_status_19` int(1) NOT NULL,
  `ft_zone_19` varchar(255) NOT NULL,
  `ft_status_20` int(1) NOT NULL,
  `ft_zone_20` varchar(255) NOT NULL,
  `ft_status_21` int(1) NOT NULL,
  `ft_zone_21` varchar(255) NOT NULL,
  `ft_status_22` int(1) NOT NULL,
  `ft_zone_22` varchar(255) NOT NULL,
  `ft_status_23` int(1) NOT NULL,
  `ft_zone_23` varchar(255) NOT NULL,
  `ft_status_24` int(1) NOT NULL,
  `ft_zone_24` varchar(255) NOT NULL,
  PRIMARY KEY (`ft_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filtration_time`
--

LOCK TABLES `filtration_time` WRITE;
/*!40000 ALTER TABLE `filtration_time` DISABLE KEYS */;
INSERT INTO `filtration_time` VALUES (1,2,'00:00 - 00:59',2,'01:00 - 01:59',0,'02:00 - 02:59',2,'03:00 - 03:59',2,'04:00 - 04:59',2,'05:00 - 05:59',0,'06:00 - 06:59',0,'07:00 - 07:59',1,'08:00 - 08:59',1,'09:00 - 09:59',0,'10:00 - 10:59',0,'11:00 - 11:59',2,'12:00 - 12:59',2,'13:00 - 13:59',2,'14:00 - 14:59',0,'15:00 - 15:59',0,'16:00 - 16:59',1,'17:00 - 17:59',1,'18:00 - 18:59',0,'19:00 - 19:59',0,'20:00 - 20:59',0,'21:00 - 21:59',2,'22:00 - 22:59',2,'23:00 - 23:59');
/*!40000 ALTER TABLE `filtration_time` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `heatpump`
--

DROP TABLE IF EXISTS `heatpump`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `heatpump` (
  `heatpump_id` int(1) NOT NULL AUTO_INCREMENT,
  `heatpump_start` time NOT NULL,
  `heatpump_end` time NOT NULL,
  PRIMARY KEY (`heatpump_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `heatpump`
--

LOCK TABLES `heatpump` WRITE;
/*!40000 ALTER TABLE `heatpump` DISABLE KEYS */;
INSERT INTO `heatpump` VALUES (1,'08:00:00','22:00:00');
/*!40000 ALTER TABLE `heatpump` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `machine`
--

DROP TABLE IF EXISTS `machine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `machine` (
  `machine_id` int(1) NOT NULL AUTO_INCREMENT,
  `machine_name` varchar(255) NOT NULL,
  `machine_code` varchar(255) NOT NULL,
  PRIMARY KEY (`machine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `machine`
--

LOCK TABLES `machine` WRITE;
/*!40000 ALTER TABLE `machine` DISABLE KEYS */;
INSERT INTO `machine` VALUES (1,'performance','MA-202306-002');
/*!40000 ALTER TABLE `machine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `machine_option`
--

DROP TABLE IF EXISTS `machine_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `machine_option` (
  `mo_id` int(1) NOT NULL AUTO_INCREMENT,
  `volt_1_ph` int(1) NOT NULL COMMENT '0.close 1.open',
  `volt_2_ph` int(1) NOT NULL,
  `backwash` int(1) NOT NULL,
  `ph` int(1) NOT NULL,
  `orp` int(1) NOT NULL,
  `apf` int(1) NOT NULL,
  `chlorine` int(1) NOT NULL,
  `heater_1` int(1) NOT NULL,
  `heater_2` int(1) NOT NULL,
  `night_time` int(1) NOT NULL,
  `heat_pump_heater` int(1) NOT NULL,
  `heat_pump_cooling` int(1) NOT NULL,
  `heat_pump_all` int(1) NOT NULL,
  `ozone_choc` int(1) NOT NULL,
  `ozone_1` int(1) NOT NULL,
  `ozone_2` int(1) NOT NULL,
  `uv` int(1) NOT NULL,
  `air_pump` int(1) NOT NULL,
  `isaver_mode_1` int(1) NOT NULL,
  `isaver_mode_2` int(1) NOT NULL,
  `isaver_mode_3` int(1) NOT NULL,
  `isaver_mode_4` int(1) NOT NULL,
  PRIMARY KEY (`mo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `machine_option`
--

LOCK TABLES `machine_option` WRITE;
/*!40000 ALTER TABLE `machine_option` DISABLE KEYS */;
INSERT INTO `machine_option` VALUES (1,0,0,1,1,1,1,1,1,1,1,0,0,1,1,1,1,1,1,0,0,0,1);
/*!40000 ALTER TABLE `machine_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orp`
--

DROP TABLE IF EXISTS `orp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orp` (
  `orp_id` int(1) NOT NULL AUTO_INCREMENT,
  `orp_1` int(1) NOT NULL,
  `orp_2` int(1) NOT NULL,
  `orp_3` int(1) NOT NULL,
  `orp_4` int(1) NOT NULL,
  `orp_5` int(1) NOT NULL,
  `orp_6` int(1) NOT NULL,
  `orp_7` int(1) NOT NULL,
  `orp_8` int(1) NOT NULL,
  `orp_9` int(1) NOT NULL,
  `orp_10` int(1) NOT NULL,
  `orp_11` int(1) NOT NULL,
  `orp_12` int(1) NOT NULL,
  `orp_13` int(1) NOT NULL,
  `orp_14` int(1) NOT NULL,
  `orp_15` int(1) NOT NULL,
  `orp_16` int(1) NOT NULL,
  `orp_17` int(1) NOT NULL,
  `orp_18` int(1) NOT NULL,
  `orp_19` int(1) NOT NULL,
  `orp_20` int(1) NOT NULL,
  `orp_21` int(1) NOT NULL,
  `orp_22` int(1) NOT NULL,
  `orp_23` int(1) NOT NULL,
  `orp_24` int(1) NOT NULL,
  PRIMARY KEY (`orp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orp`
--

LOCK TABLES `orp` WRITE;
/*!40000 ALTER TABLE `orp` DISABLE KEYS */;
INSERT INTO `orp` VALUES (1,0,1,0,0,0,1,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `orp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ph`
--

DROP TABLE IF EXISTS `ph`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ph` (
  `ph_id` int(1) NOT NULL AUTO_INCREMENT,
  `ph_1` int(1) NOT NULL,
  `ph_2` int(1) NOT NULL,
  `ph_3` int(1) NOT NULL,
  `ph_4` int(1) NOT NULL,
  `ph_5` int(1) NOT NULL,
  `ph_6` int(1) NOT NULL,
  `ph_7` int(1) NOT NULL,
  `ph_8` int(1) NOT NULL,
  `ph_9` int(1) NOT NULL,
  `ph_10` int(1) NOT NULL,
  `ph_11` int(1) NOT NULL,
  `ph_12` int(1) NOT NULL,
  `ph_13` int(1) NOT NULL,
  `ph_14` int(1) NOT NULL,
  `ph_15` int(1) NOT NULL,
  `ph_16` int(1) NOT NULL,
  `ph_17` int(1) NOT NULL,
  `ph_18` int(1) NOT NULL,
  `ph_19` int(1) NOT NULL,
  `ph_20` int(1) NOT NULL,
  `ph_21` int(1) NOT NULL,
  `ph_22` int(1) NOT NULL,
  `ph_23` int(1) NOT NULL,
  `ph_24` int(1) NOT NULL,
  PRIMARY KEY (`ph_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ph`
--

LOCK TABLES `ph` WRITE;
/*!40000 ALTER TABLE `ph` DISABLE KEYS */;
INSERT INTO `ph` VALUES (1,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,1,0,0,0,0,0);
/*!40000 ALTER TABLE `ph` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setting` (
  `setting_id` int(1) NOT NULL AUTO_INCREMENT,
  `setting_temperature` double NOT NULL,
  `setting_aeau` int(11) NOT NULL,
  `setting_eau` int(11) NOT NULL,
  `setting_systeme` int(11) NOT NULL,
  `setting_temp_deff` int(11) NOT NULL,
  `setting_basse` double NOT NULL,
  `setting_haute` double NOT NULL,
  `setting_tentative` double NOT NULL,
  `setting_frequence` double NOT NULL,
  `online_status` int(1) NOT NULL COMMENT '0.close 1.open',
  `temp_type` varchar(25) NOT NULL,
  `temp_calibrate` double NOT NULL,
  `pressure_type` varchar(15) NOT NULL,
  `pressure_calibrate` double NOT NULL,
  PRIMARY KEY (`setting_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting`
--

LOCK TABLES `setting` WRITE;
/*!40000 ALTER TABLE `setting` DISABLE KEYS */;
INSERT INTO `setting` VALUES (1,38,3,6,5,2,0.2,1,15,1,0,'minus',0,'plus',0);
/*!40000 ALTER TABLE `setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setting_mode`
--

DROP TABLE IF EXISTS `setting_mode`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setting_mode` (
  `sm_id` int(1) NOT NULL AUTO_INCREMENT,
  `sm_filtration` int(1) NOT NULL COMMENT '0.close 1.open 2.auto',
  `sm_bypass` int(1) NOT NULL COMMENT '0.close 1.open',
  `sm_ozone_choc` int(1) NOT NULL COMMENT '0.close 1.open 2.auto',
  `sm_chauffage` int(1) NOT NULL COMMENT '0.close 1.open',
  `sm_pomp_ozone` int(1) NOT NULL COMMENT '0.close 1.open 2.auto',
  `sm_lamp_ozone` int(1) NOT NULL COMMENT '0.close 1.open 2.auto',
  `sm_lamp_uv` int(1) NOT NULL COMMENT '0.close 1.open 2.auto',
  `sm_pump_air` int(1) NOT NULL COMMENT '0.close 1.open 2.auto',
  PRIMARY KEY (`sm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting_mode`
--

LOCK TABLES `setting_mode` WRITE;
/*!40000 ALTER TABLE `setting_mode` DISABLE KEYS */;
INSERT INTO `setting_mode` VALUES (1,2,0,0,1,1,1,1,1);
/*!40000 ALTER TABLE `setting_mode` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `substance`
--

DROP TABLE IF EXISTS `substance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `substance` (
  `substance_id` int(1) NOT NULL AUTO_INCREMENT,
  `ph_set` double NOT NULL,
  `ph_lower` double NOT NULL,
  `ph_inj` double NOT NULL,
  `ph_freq` double NOT NULL,
  `orp_set` int(11) NOT NULL,
  `orp_lower` int(11) NOT NULL,
  `orp_inj` double NOT NULL,
  `orp_freq` double NOT NULL,
  `apf_set` double NOT NULL,
  `apf_lower` double NOT NULL,
  `apf_inj` double NOT NULL,
  `apf_freq` double NOT NULL,
  PRIMARY KEY (`substance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `substance`
--

LOCK TABLES `substance` WRITE;
/*!40000 ALTER TABLE `substance` DISABLE KEYS */;
INSERT INTO `substance` VALUES (1,7.3,7.25,1,10,600,650,1,10,7.3,7.25,1,2);
/*!40000 ALTER TABLE `substance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `volt_logger`
--

DROP TABLE IF EXISTS `volt_logger`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `volt_logger` (
  `volt_logger` bigint(20) NOT NULL AUTO_INCREMENT,
  `machine_code` varchar(255) NOT NULL,
  `va` double NOT NULL,
  `vb` double NOT NULL,
  `vc` double NOT NULL,
  `date_create` date DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  PRIMARY KEY (`volt_logger`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `volt_logger`
--

LOCK TABLES `volt_logger` WRITE;
/*!40000 ALTER TABLE `volt_logger` DISABLE KEYS */;
/*!40000 ALTER TABLE `volt_logger` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-14 11:53:54
