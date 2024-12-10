-- MariaDB dump 10.19  Distrib 10.5.23-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: poc_iser
-- ------------------------------------------------------
-- Server version	10.5.23-MariaDB

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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(255) NOT NULL,
  `tipo_doc` enum('ti','cc','ce','pasaporte') NOT NULL,
  `no_doc` varchar(255) NOT NULL,
  `fecha_nacimiento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ciudad` varchar(255) NOT NULL,
  `departamento` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `celular` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Gerry Zulauf','ti','6421935','2010-10-03 06:42:26','bogota','cundinamarca','621 Shaniya Junctions Suite 604\nEast Alexandre, VT 74679','(206) 757-1402','(305) 325-6676','2024-09-02 21:51:43','2024-09-02 21:51:43'),(2,'Amy McClure Sr.','ti','2903955','2017-08-12 16:54:06','bogota','cundinamarca','5569 Cleveland Drive\nEast Melvinborough, UT 84659','(820) 454-6216','+1 (248) 953-1815','2024-09-02 21:51:43','2024-09-02 21:51:43'),(3,'Wendell Kuphal','pasaporte','7166490','1990-06-18 23:04:36','bogota','cundinamarca','594 Murray Junctions\nHarberchester, VA 21516','276-276-6880','(681) 875-8955','2024-09-02 21:51:43','2024-09-02 21:51:43'),(4,'Leo Wyman','ti','5963443','1979-06-28 14:44:46','bogota','cundinamarca','646 Russ Coves Apt. 024\nPort Haleigh, RI 19080','678.972.0174','1-832-766-5425','2024-09-02 21:51:43','2024-09-02 21:51:43'),(5,'Margaretta Swaniawski','pasaporte','3420391','2021-11-23 20:15:09','bogota','cundinamarca','79504 Rath Brooks Suite 430\nPriceborough, OR 16724','1-820-746-9672','+1-726-457-5189','2024-09-02 21:51:43','2024-09-02 21:51:43'),(6,'Darrin Botsford','cc','6937820','1982-05-04 12:05:29','bogota','cundinamarca','943 Melvin Rue\nSchulistmouth, NE 70410-9490','+14849608677','351.876.3678','2024-09-02 21:51:43','2024-09-02 21:51:43'),(7,'Jaclyn Heller','ti','5307709','1986-06-27 16:54:48','bogota','cundinamarca','653 Cruickshank Keys\nAidentown, ID 92345-4267','(209) 787-2415','+1-857-924-6896','2024-09-02 21:51:43','2024-09-02 21:51:43'),(8,'Alda Schmeler','pasaporte','4644046','1997-06-19 04:24:11','bogota','cundinamarca','1496 Mylene Bypass\nNew Merlview, OH 30857-9277','(801) 696-3803','1-276-617-2397','2024-09-02 21:51:43','2024-09-02 21:51:43'),(9,'Tyrese Grant MD','cc','9967680','1981-08-04 22:09:03','bogota','cundinamarca','280 Michaela Hills Apt. 679\nNorth Jovanny, ND 41250-0010','(307) 517-6551','469-408-7655','2024-09-02 21:51:43','2024-09-02 21:51:43'),(10,'Gregory Bergnaum','cc','8813392','1991-09-27 23:18:00','bogota','cundinamarca','41296 Klein Fort Apt. 494\nLake Jerel, NV 80974','442-848-1854','1-651-749-7106','2024-09-02 21:51:43','2024-09-02 21:51:43'),(11,'Molly Crist','ti','7957167','2017-11-12 01:39:46','bogota','cundinamarca','55576 Satterfield Vista Apt. 932\nQuitzonview, SD 66543-9156','+1-586-866-0263','+1.253.609.0767','2024-09-02 21:51:43','2024-09-02 21:51:43'),(12,'Genesis Ankunding','ce','4001686','2004-03-07 08:33:56','bogota','cundinamarca','403 Dicki Plaza\nNaderburgh, TX 93195-8130','(651) 605-9485','+1-951-527-3328','2024-09-02 21:51:43','2024-09-02 21:51:43'),(13,'Estella Runolfsdottir','cc','1539368','2017-09-11 05:50:32','bogota','cundinamarca','351 Zackary Valleys\nWest Emmie, AR 77511-5071','+1 (339) 829-1394','423.736.6238','2024-09-02 21:51:43','2024-09-02 21:51:43'),(14,'Marty Ritchie III','ce','3034159','1976-03-27 21:15:36','bogota','cundinamarca','13728 Estella Mountain Suite 620\nNew Darontown, AZ 37143-9699','248-512-0441','985.659.8378','2024-09-02 21:51:43','2024-09-02 21:51:43'),(15,'Rosamond McCullough','ti','1708584','1977-01-03 22:03:54','bogota','cundinamarca','57569 Bailey Extension Suite 492\nWest Samantafurt, IA 34150-1551','+17577120505','1-743-460-8815','2024-09-02 21:51:43','2024-09-02 21:51:43'),(16,'Destinee Langosh','ce','1652705','2018-07-08 18:29:26','bogota','cundinamarca','220 Eleanora Center\nWest Madonnaside, NV 83007','+1.917.815.9466','1-531-658-5173','2024-09-02 21:51:43','2024-09-02 21:51:43'),(17,'Richard Witting','cc','6581191','1981-01-13 11:51:27','bogota','cundinamarca','5285 Nikolaus Fall Suite 867\nLake Brandon, LA 65173-2600','+1 (352) 560-8895','+1-224-651-6460','2024-09-02 21:51:43','2024-09-02 21:51:43'),(18,'Prof. Aliyah Bosco V','pasaporte','9612564','2023-09-06 02:46:00','bogota','cundinamarca','346 Gerhold Route\nSouth Russellstad, KS 30291','417-858-9641','(520) 292-9836','2024-09-02 21:51:43','2024-09-02 21:51:43'),(19,'Mr. Amani Tillman IV','ti','3969976','1980-02-13 03:26:58','bogota','cundinamarca','1831 Ruby Hollow Suite 261\nLake Janessatown, NH 56887','1-863-518-4438','(828) 495-2332','2024-09-02 21:51:43','2024-09-02 21:51:43'),(20,'Mr. Kennedy Greenholt','pasaporte','8140351','1997-08-10 11:58:10','bogota','cundinamarca','833 Kuhic Well Apt. 175\nStantonville, OH 47680','1-540-991-0013','+1-920-831-6133','2024-09-02 21:51:43','2024-09-02 21:51:43');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(255) NOT NULL,
  `tipo_doc` enum('ti','cc','ce','pasaporte') NOT NULL,
  `no_doc` varchar(255) NOT NULL,
  `fecha_nacimiento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `profesion` varchar(255) NOT NULL,
  `area` varchar(255) DEFAULT NULL,
  `an_exp` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `celular` varchar(255) NOT NULL,
  `horario` varchar(255) DEFAULT NULL,
  `tipo_contrato` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctors`
--

LOCK TABLES `doctors` WRITE;
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;
INSERT INTO `doctors` VALUES (1,'Camille Lubowitz','ti','4131256','1975-03-02 23:26:42','medico oftalmológico','Oftalmología','1','98911 Gleason Ramp Apt. 157\nMarvinton, AR 39321-7469','956.656.0067','(267) 513-1486','8:00am - 5:00pm','obra labor','2024-09-02 21:51:43','2024-09-02 21:51:43'),(2,'Loraine Zemlak','pasaporte','2304516','1982-10-23 20:46:31','medico oftalmológico','Oftalmología','14','6366 Gavin Rue\nCarolannechester, SC 19855-2168','+1-716-252-9056','609-882-8039','8:00am - 5:00pm','indefinido','2024-09-02 21:51:43','2024-09-02 21:51:43'),(3,'Evelyn Emmerich PhD','cc','5356761','2001-07-19 23:20:58','medico oftalmológico','Oftalmología','19','43805 Werner Vista\nHauckberg, IL 23352','+1 (470) 555-0997','+1-425-242-0663','8:00am - 5:00pm','obra labor','2024-09-02 21:51:43','2024-09-02 21:51:43'),(4,'America Feest','cc','4785882','1981-06-18 11:07:28','medico oftalmológico','Oftalmología','13','42711 Hank Mission Suite 559\nZiemannbury, VA 62440','+1.301.324.3339','(360) 877-8935','8:00am - 5:00pm','indefinido','2024-09-02 21:51:43','2024-09-02 21:51:43'),(5,'Belle Jerde','ti','8600118','2004-05-06 19:35:16','medico oftalmológico','Oftalmología','30','3264 Jarred Wall Suite 707\nAlexanderchester, MT 52986-8998','1-815-376-7101','325-200-3678','8:00am - 5:00pm','indefinido','2024-09-02 21:51:43','2024-09-02 21:51:43'),(6,'Abe Conroy','pasaporte','2013925','2015-07-15 23:21:10','medico oftalmológico','Oftalmología','22','8569 Marielle Roads\nNew Nolaville, OH 15470-5795','+1.820.874.1630','(312) 313-6242','8:00am - 5:00pm','fijo','2024-09-02 21:51:43','2024-09-02 21:51:43'),(7,'Dr. Emiliano Johnston','ti','8767466','1995-03-30 12:18:15','medico oftalmológico','Oftalmología','23','96746 Kiehn Trail Suite 903\nEast Roberto, SD 62321-8705','+1-509-272-1730','+1-458-577-1950','8:00am - 5:00pm','fijo','2024-09-02 21:51:43','2024-09-02 21:51:43'),(8,'Laury O\'Conner','cc','1623733','1991-02-24 06:53:11','medico oftalmológico','Oftalmología','22','8745 Madeline Mountain\nSouth Marlenborough, TX 29662-2128','+1-830-714-9759','1-678-547-0490','8:00am - 5:00pm','indefinido','2024-09-02 21:51:43','2024-09-02 21:51:43'),(9,'Tomas Weissnat','cc','7869192','1993-09-20 08:38:51','medico oftalmológico','Oftalmología','15','1724 Alexandrea Inlet Suite 867\nJoanyville, DE 72279-2732','+13602069279','863.318.0123','8:00am - 5:00pm','fijo','2024-09-02 21:51:43','2024-09-02 21:51:43'),(10,'Timothy Mayert','ce','2861482','1994-03-02 01:16:22','medico oftalmológico','Oftalmología','25','12646 Rosina Trail\nSouth Celia, MO 86701-5886','+1.469.651.2670','+1-859-951-7417','8:00am - 5:00pm','fijo','2024-09-02 21:51:43','2024-09-02 21:51:43'),(11,'Jasen Schaden','ce','4817230','1987-03-11 08:47:22','medico oftalmológico','Oftalmología','12','614 Cronin Mall Suite 519\nEast Nickolastown, UT 70166','+1-717-676-9798','816-392-3559','8:00am - 5:00pm','obra labor','2024-09-02 21:51:43','2024-09-02 21:51:43'),(12,'Crystal Shields','cc','1454019','2016-08-20 23:58:58','medico oftalmológico','Oftalmología','2','4494 Missouri Forges Suite 206\nCodyborough, AL 75471','847.807.0841','904-639-5083','8:00am - 5:00pm','fijo','2024-09-02 21:51:43','2024-09-02 21:51:43'),(13,'Miss Reanna Quigley DVM','ti','3485656','1978-04-08 08:59:14','medico oftalmológico','Oftalmología','5','8810 Bergstrom Ways Suite 714\nWalshshire, NJ 77891-4765','+1.425.947.4310','+1 (954) 684-6336','8:00am - 5:00pm','fijo','2024-09-02 21:51:43','2024-09-02 21:51:43'),(14,'Mr. Green Romaguera','cc','4973904','1990-01-22 23:27:11','medico oftalmológico','Oftalmología','12','47117 Shields Mews Apt. 285\nWest Cathyton, TN 01379','682-553-7754','626-517-4716','8:00am - 5:00pm','obra labor','2024-09-02 21:51:43','2024-09-02 21:51:43'),(15,'Mitchel Predovic','cc','4172004','1981-09-03 20:05:49','medico oftalmológico','Oftalmología','2','12933 Willms Turnpike\nEthylfort, IL 66801-2179','(339) 340-9520','205.301.7250','8:00am - 5:00pm','fijo','2024-09-02 21:51:43','2024-09-02 21:51:43'),(16,'Jazmyn Rippin','ce','5840583','2003-12-27 20:15:15','medico oftalmológico','Oftalmología','27','71063 Juliet Burgs Suite 598\nNew Erickberg, NE 16606-2225','(740) 226-0883','220.721.3478','8:00am - 5:00pm','obra labor','2024-09-02 21:51:43','2024-09-02 21:51:43'),(17,'Tavares Hane','ti','3339951','1995-10-20 22:11:53','medico oftalmológico','Oftalmología','13','8882 Cormier Ranch Apt. 581\nTomfort, KY 92964','380.213.9152','681-520-8146','8:00am - 5:00pm','indefinido','2024-09-02 21:51:43','2024-09-02 21:51:43'),(18,'Miss Lilian Turner V','ti','5980043','1998-05-08 13:54:15','medico oftalmológico','Oftalmología','20','9542 Philip Canyon\nGiovannyborough, AL 62710-9636','858-383-0766','+1 (979) 817-4383','8:00am - 5:00pm','indefinido','2024-09-02 21:51:43','2024-09-02 21:51:43'),(19,'Amber Murazik','ti','4831444','1991-11-04 18:31:49','medico oftalmológico','Oftalmología','29','74652 Waldo Harbors Suite 399\nFerrychester, IL 45823','+1-320-500-9994','304.977.0391','8:00am - 5:00pm','indefinido','2024-09-02 21:51:43','2024-09-02 21:51:43'),(20,'Oscar Borer','ce','5235135','1970-11-03 02:13:15','medico oftalmológico','Oftalmología','13','6099 Rogahn Course\nEast Zitachester, AK 62596','+1.458.727.8718','(984) 537-7658','8:00am - 5:00pm','fijo','2024-09-02 21:51:43','2024-09-02 21:51:43');
/*!40000 ALTER TABLE `doctors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exports`
--

DROP TABLE IF EXISTS `exports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exports` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `completed_at` timestamp NULL DEFAULT NULL,
  `file_disk` varchar(255) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `exporter` varchar(255) NOT NULL,
  `processed_rows` int(10) unsigned NOT NULL DEFAULT 0,
  `total_rows` int(10) unsigned NOT NULL,
  `successful_rows` int(10) unsigned NOT NULL DEFAULT 0,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `exports_user_id_foreign` (`user_id`),
  CONSTRAINT `exports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exports`
--

LOCK TABLES `exports` WRITE;
/*!40000 ALTER TABLE `exports` DISABLE KEYS */;
/*!40000 ALTER TABLE `exports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fabricantes`
--

DROP TABLE IF EXISTS `fabricantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fabricantes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fabricantes`
--

LOCK TABLES `fabricantes` WRITE;
/*!40000 ALTER TABLE `fabricantes` DISABLE KEYS */;
INSERT INTO `fabricantes` VALUES (1,'Fabricante óptico S.A','2024-09-02 21:51:43','2024-09-02 21:51:43'),(2,'Fabricante óptico S.A','2024-09-02 21:51:43','2024-09-02 21:51:43'),(3,'Fabricante óptico S.A','2024-09-02 21:51:43','2024-09-02 21:51:43'),(4,'Fabricante óptico S.A','2024-09-02 21:51:43','2024-09-02 21:51:43'),(5,'Fabricante óptico S.A','2024-09-02 21:51:43','2024-09-02 21:51:43'),(6,'Fabricante óptico S.A','2024-09-02 21:51:43','2024-09-02 21:51:43'),(7,'Fabricante óptico S.A','2024-09-02 21:51:43','2024-09-02 21:51:43'),(8,'Fabricante óptico S.A','2024-09-02 21:51:43','2024-09-02 21:51:43'),(9,'Fabricante óptico S.A','2024-09-02 21:51:43','2024-09-02 21:51:43'),(10,'Fabricante óptico S.A','2024-09-02 21:51:43','2024-09-02 21:51:43'),(11,'Fabricante óptico S.A','2024-09-02 21:51:43','2024-09-02 21:51:43'),(12,'Fabricante óptico S.A','2024-09-02 21:51:43','2024-09-02 21:51:43'),(13,'Fabricante óptico S.A','2024-09-02 21:51:43','2024-09-02 21:51:43'),(14,'Fabricante óptico S.A','2024-09-02 21:51:43','2024-09-02 21:51:43'),(15,'Fabricante óptico S.A','2024-09-02 21:51:43','2024-09-02 21:51:43'),(16,'Fabricante óptico S.A','2024-09-02 21:51:43','2024-09-02 21:51:43'),(17,'Fabricante óptico S.A','2024-09-02 21:51:43','2024-09-02 21:51:43'),(18,'Fabricante óptico S.A','2024-09-02 21:51:43','2024-09-02 21:51:43'),(19,'Fabricante óptico S.A','2024-09-02 21:51:43','2024-09-02 21:51:43'),(20,'Fabricante óptico S.A','2024-09-02 21:51:43','2024-09-02 21:51:43');
/*!40000 ALTER TABLE `fabricantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facturas`
--

DROP TABLE IF EXISTS `facturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facturas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `formula_id` bigint(20) unsigned NOT NULL,
  `cantidad` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturas`
--

LOCK TABLES `facturas` WRITE;
/*!40000 ALTER TABLE `facturas` DISABLE KEYS */;
/*!40000 ALTER TABLE `facturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_import_rows`
--

DROP TABLE IF EXISTS `failed_import_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_import_rows` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`data`)),
  `import_id` bigint(20) unsigned NOT NULL,
  `validation_error` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `failed_import_rows_import_id_foreign` (`import_id`),
  CONSTRAINT `failed_import_rows_import_id_foreign` FOREIGN KEY (`import_id`) REFERENCES `imports` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_import_rows`
--

LOCK TABLES `failed_import_rows` WRITE;
/*!40000 ALTER TABLE `failed_import_rows` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_import_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
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
-- Table structure for table `formulas`
--

DROP TABLE IF EXISTS `formulas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formulas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255) NOT NULL,
  `ojo_izquierdo_esfera` smallint(6) DEFAULT NULL,
  `ojo_izquierdo_cilindro` smallint(6) DEFAULT NULL,
  `ojo_izquierdo_eje` smallint(6) DEFAULT NULL,
  `ojo_izquierdo_av` smallint(6) DEFAULT NULL,
  `ojo_izquierdo_add` smallint(6) DEFAULT NULL,
  `ojo_izquierdo_dp` smallint(6) DEFAULT NULL,
  `ojo_derecho_esfera` smallint(6) DEFAULT NULL,
  `ojo_derecho_cilindro` smallint(6) DEFAULT NULL,
  `ojo_derecho_eje` smallint(6) DEFAULT NULL,
  `ojo_derecho_av` smallint(6) DEFAULT NULL,
  `ojo_derecho_add` smallint(6) DEFAULT NULL,
  `ojo_derecho_dp` smallint(6) DEFAULT NULL,
  `tipo_lente` varchar(255) DEFAULT NULL,
  `valor_lente` int(11) DEFAULT NULL,
  `cita` tinyint(1) NOT NULL,
  `notas_adicionales` longtext DEFAULT NULL,
  `cliente_id` bigint(20) unsigned NOT NULL,
  `montura_id` bigint(20) unsigned NOT NULL,
  `doctor_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `formulas_codigo_unique` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formulas`
--

LOCK TABLES `formulas` WRITE;
/*!40000 ALTER TABLE `formulas` DISABLE KEYS */;
INSERT INTO `formulas` VALUES (1,'hog-835',63,47,58,34,73,80,70,38,41,14,54,75,'policarbonato',140044,0,'Tener cuidado al limpiar los lentes',1,1,1,'2024-09-02 21:51:43','2024-09-02 21:51:43'),(2,'uoq-166',22,72,41,49,67,20,49,72,44,52,51,32,'policarbonato',898572,0,'Tener cuidado al limpiar los lentes',2,2,2,'2024-09-02 21:51:43','2024-09-02 21:51:43'),(3,'khs-324',37,59,19,47,58,23,16,19,68,44,50,59,'policarbonato',173913,0,'Tener cuidado al limpiar los lentes',3,3,3,'2024-09-02 21:51:43','2024-09-02 21:51:43'),(4,'zg4-401',15,29,75,24,46,11,48,22,26,75,73,75,'policarbonato',481761,0,'Tener cuidado al limpiar los lentes',4,4,4,'2024-09-02 21:51:43','2024-09-02 21:51:43'),(5,'tw4-319',50,45,52,66,17,23,55,15,46,34,43,14,'policarbonato',889135,1,'Tener cuidado al limpiar los lentes',5,5,5,'2024-09-02 21:51:43','2024-09-02 21:51:43'),(6,'ohk-581',18,22,67,57,39,61,40,51,69,36,36,52,'policarbonato',142390,1,'Tener cuidado al limpiar los lentes',6,6,6,'2024-09-02 21:51:43','2024-09-02 21:51:43'),(7,'nzj-830',40,25,70,18,17,57,75,26,20,18,74,36,'policarbonato',228270,1,'Tener cuidado al limpiar los lentes',7,7,7,'2024-09-02 21:51:43','2024-09-02 21:51:43'),(8,'4cf-614',15,38,57,31,46,73,47,60,31,61,59,39,'policarbonato',899219,1,'Tener cuidado al limpiar los lentes',8,8,8,'2024-09-02 21:51:43','2024-09-02 21:51:43'),(9,'bif-818',55,29,48,50,50,20,64,50,37,32,75,33,'policarbonato',405389,0,'Tener cuidado al limpiar los lentes',9,9,9,'2024-09-02 21:51:43','2024-09-02 21:51:43'),(10,'i1z-310',64,41,30,76,40,41,36,14,34,58,39,28,'policarbonato',372352,0,'Tener cuidado al limpiar los lentes',10,10,10,'2024-09-02 21:51:43','2024-09-02 21:51:43'),(11,'nct-312',39,46,75,34,16,15,68,47,68,11,11,55,'policarbonato',642514,0,'Tener cuidado al limpiar los lentes',11,11,11,'2024-09-02 21:51:43','2024-09-02 21:51:43'),(12,'drx-979',68,10,25,46,79,57,13,16,22,16,28,48,'policarbonato',448133,1,'Tener cuidado al limpiar los lentes',12,12,12,'2024-09-02 21:51:43','2024-09-02 21:51:43'),(13,'5g2-823',25,47,30,48,21,20,15,11,36,60,45,21,'policarbonato',503283,1,'Tener cuidado al limpiar los lentes',13,13,13,'2024-09-02 21:51:43','2024-09-02 21:51:43'),(14,'lg0-270',70,45,47,59,62,11,28,67,73,39,39,44,'policarbonato',806674,0,'Tener cuidado al limpiar los lentes',14,14,14,'2024-09-02 21:51:43','2024-09-02 21:51:43'),(15,'5ak-241',15,63,68,36,27,15,57,19,61,51,45,74,'policarbonato',305661,1,'Tener cuidado al limpiar los lentes',15,15,15,'2024-09-02 21:51:43','2024-09-02 21:51:43'),(16,'etk-463',75,60,62,27,17,47,14,80,73,46,15,60,'policarbonato',202295,0,'Tener cuidado al limpiar los lentes',16,16,16,'2024-09-02 21:51:43','2024-09-02 21:51:43'),(17,'g33-938',14,35,54,27,75,39,12,62,78,54,23,38,'policarbonato',807587,0,'Tener cuidado al limpiar los lentes',17,17,17,'2024-09-02 21:51:43','2024-09-02 21:51:43'),(18,'tkr-558',36,14,15,57,73,74,71,50,66,11,36,71,'policarbonato',220345,1,'Tener cuidado al limpiar los lentes',18,18,18,'2024-09-02 21:51:43','2024-09-02 21:51:43'),(19,'w73-840',52,72,67,72,35,55,16,31,58,49,42,26,'policarbonato',439092,1,'Tener cuidado al limpiar los lentes',19,19,19,'2024-09-02 21:51:43','2024-09-02 21:51:43'),(20,'hvc-128',30,39,18,17,27,30,42,56,26,19,26,40,'policarbonato',693224,1,'Tener cuidado al limpiar los lentes',20,20,20,'2024-09-02 21:51:43','2024-09-02 21:51:43');
/*!40000 ALTER TABLE `formulas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imports`
--

DROP TABLE IF EXISTS `imports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imports` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `completed_at` timestamp NULL DEFAULT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `importer` varchar(255) NOT NULL,
  `processed_rows` int(10) unsigned NOT NULL DEFAULT 0,
  `total_rows` int(10) unsigned NOT NULL,
  `successful_rows` int(10) unsigned NOT NULL DEFAULT 0,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `imports_user_id_foreign` (`user_id`),
  CONSTRAINT `imports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imports`
--

LOCK TABLES `imports` WRITE;
/*!40000 ALTER TABLE `imports` DISABLE KEYS */;
/*!40000 ALTER TABLE `imports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(52,'2024_07_31_012718_create_clientes_table',2),(53,'2024_07_31_012719_create_doctors_table',2),(54,'2024_07_31_012720_create_formulas_table',2),(55,'2024_07_31_012721_create_monturas_table',2),(56,'2024_07_31_012722_create_fabricantes_table',2),(57,'2024_07_31_012723_create_facturas_table',2),(58,'2024_08_02_025004_create_job_batches_table',2),(59,'2024_08_02_025013_create_notifications_table',2),(60,'2024_08_02_025022_create_imports_table',2),(61,'2024_08_02_025023_create_exports_table',2),(62,'2024_08_02_025024_create_failed_import_rows_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `monturas`
--

DROP TABLE IF EXISTS `monturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `monturas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `fabricante_id` bigint(20) unsigned NOT NULL,
  `color` varchar(255) NOT NULL,
  `genero` enum('femenino','masculino','unisex') NOT NULL,
  `garantia` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `monturas`
--

LOCK TABLES `monturas` WRITE;
/*!40000 ALTER TABLE `monturas` DISABLE KEYS */;
INSERT INTO `monturas` VALUES (1,'oblongo',176080,1,'SandyBrown','unisex','1 año','2024-09-02 21:51:43','2024-09-02 21:51:43'),(2,'piramidal',432426,2,'Green','unisex','6 meses','2024-09-02 21:51:43','2024-09-02 21:51:43'),(3,'oblongo',405912,3,'LightYellow','femenino','3 meses','2024-09-02 21:51:43','2024-09-02 21:51:43'),(4,'triangular',276812,4,'Red','masculino','1 año','2024-09-02 21:51:43','2024-09-02 21:51:43'),(5,'triangular',73632,5,'HotPink','unisex','1 año','2024-09-02 21:51:43','2024-09-02 21:51:43'),(6,'piramidal',193474,6,'BlanchedAlmond','femenino','2 años','2024-09-02 21:51:43','2024-09-02 21:51:43'),(7,'romboide',490676,7,'AliceBlue','femenino','3 meses','2024-09-02 21:51:43','2024-09-02 21:51:43'),(8,'piramidal',354882,8,'LightSalmon','masculino','6 meses','2024-09-02 21:51:43','2024-09-02 21:51:43'),(9,'oblongo',100146,9,'MintCream','femenino','3 meses','2024-09-02 21:51:43','2024-09-02 21:51:43'),(10,'ovalado',382063,10,'Gold','masculino','1 año','2024-09-02 21:51:43','2024-09-02 21:51:43'),(11,'romboide',172667,11,'DarkTurquoise','unisex','2 años','2024-09-02 21:51:43','2024-09-02 21:51:43'),(12,'romboide',85497,12,'PaleGreen','masculino','1 año','2024-09-02 21:51:43','2024-09-02 21:51:43'),(13,'cuadrado',311785,13,'OldLace','masculino','1 año','2024-09-02 21:51:43','2024-09-02 21:51:43'),(14,'triangular',468969,14,'DarkGreen','femenino','2 años','2024-09-02 21:51:43','2024-09-02 21:51:43'),(15,'ovalado',380580,15,'Black','femenino','6 meses','2024-09-02 21:51:43','2024-09-02 21:51:43'),(16,'romboide',292930,16,'Tan','masculino','3 meses','2024-09-02 21:51:43','2024-09-02 21:51:43'),(17,'piramidal',289781,17,'LightSeaGreen','femenino','1 año','2024-09-02 21:51:43','2024-09-02 21:51:43'),(18,'oblongo',431499,18,'IndianRed','masculino','3 meses','2024-09-02 21:51:43','2024-09-02 21:51:43'),(19,'redondo',142384,19,'Turquoise','unisex','6 meses','2024-09-02 21:51:43','2024-09-02 21:51:43'),(20,'oblongo',112054,20,'Crimson','femenino','3 meses','2024-09-02 21:51:43','2024-09-02 21:51:43');
/*!40000 ALTER TABLE `monturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) unsigned NOT NULL,
  `data` text NOT NULL,
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
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@email.com',NULL,'$2y$12$qmTz5DydWMEXWU52wHt8rOhhugF8wyEikD2.VgTEX2kx4sEY0wM4m','wfw0Pm6WIB3eN2cyb2MUu62HITMALgccRnBAFbMH9Xghh4WejAdJ6pCqwFgj','2024-07-22 03:56:08','2024-07-22 03:56:08'),(2,'jeison','jei@email.com',NULL,'$2y$12$sgo.cxN.pgBQav5tz/U61OdHSpyKjXssuSpDQihwQhS./VpGwgFZ.','qFgmCKlsYcOsHkDyTKZAksYvT9EYXXr5ZLmFigFKw0hqOQE7XQXlTc8SZ2Xu','2024-08-17 00:42:45','2024-08-17 00:42:45'),(3,'master','master@email.com',NULL,'$2y$12$kS.N25IhT46DyaZuBjVweu1P6hFqeaBgpHKSV2RGjDABOuJFFOeoO','MrH5MKTV6pn0sfNpUYSnlnOGPrLJWbelVISOe8aSOQB7uEO3KCtcr7j8pGCV','2024-09-02 20:43:06','2024-09-02 20:43:06');
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

-- Dump completed on 2024-09-03 12:21:40
