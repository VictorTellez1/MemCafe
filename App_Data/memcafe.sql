-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: memcafe
-- ------------------------------------------------------
-- Server version	5.7.33

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
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blogs_user_id_foreign` (`user_id`),
  CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'Tipos de Grano de Café','blog/41SH95nXcSfBUAalGjX1J944BkYTpA5vBOQGOqUb.webp','<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</div>',2,'2022-04-30 03:40:28','2022-04-30 03:40:28'),(2,'3 Deliciosas Recetas de Café','blog/FFOR1tIY7mujh9qv9g4IdYJxav0PsjLXRa5DH5s9.jpg','<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</div>',2,'2022-04-30 03:40:48','2022-04-30 03:40:48'),(3,'Beneficios del Café','blog/5uS0GNpTQkOn0ewdmel3PecJWole9nJbpWZSOCMO.jpg','<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</div>',2,'2022-04-30 03:41:35','2022-04-30 03:41:35'),(4,'Historia del café','blog/1IZNM2aLna8nIr7jxExZan12hpb7t8y4Nm4Bc11F.jpg','<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</div>',1,'2022-04-30 03:47:40','2022-04-30 03:47:40'),(5,'Todo sobre el café','blog/C2XrFFiaTbhrQOjwgvN7X3hdamTZrvMouN2rUBtg.jpg','<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</div>',1,'2022-04-30 03:48:01','2022-04-30 03:48:01'),(6,'¿Por que es tan importante el café en la vida moderna?','blog/xOddgtHJF4dqestGw5LqUJTI2P2ZdA2mfOfKCZdm.webp','<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</div>',1,'2022-04-30 03:49:16','2022-04-30 03:49:16');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactos`
--

DROP TABLE IF EXISTS `contactos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contactos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactos`
--

LOCK TABLES `contactos` WRITE;
/*!40000 ALTER TABLE `contactos` DISABLE KEYS */;
INSERT INTO `contactos` VALUES (1,'Victor','Tellez','123456789','victor-pumas69@live.com.mx','<div>asdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasf</div>','1','2022-04-30 04:38:55','2022-04-30 06:25:05'),(2,'Victor','Tellez','123456789','victor-pumas69@live.com.mx','<div>asdfasfdasfdsafdsafsdaf</div>','0','2022-04-30 04:40:00','2022-04-30 04:40:00'),(3,'Victor','Tellez','5561681069','victor-pumas69@live.com.mx','<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non gravida odio. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec ullamcorper suscipit eros, vitae scelerisque dui mattis vel. Nulla diam nulla, mollis ut nisi id, consectetur pulvinar ex. In eu lacus vulputate, fringilla sem sit amet, egestas leo. Morbi ultrices luctus velit a pellentesque. Mauris imperdiet vestibulum massa nec eleifend. Aliquam sit amet pulvinar orci. Aliquam nec justo quis lectus convallis lobortis. Nullam eget felis purus. Etiam nibh massa, sollicitudin eget commodo sed, vehicula ac arcu. Praesent tincidunt ligula nibh, id porta dui gravida vel. Vestibulum nunc metus, bibendum egestas libero eu, ornare euismod metus. Curabitur eget ante consectetur urna mattis molestie. Proin semper ullamcorper orci vitae tempus. Pellentesque gravida sagittis tincidunt.<br><br></div><div>Suspendisse in arcu ultrices, ullamcorper nisl ut, dapibus elit. Pellentesque hendrerit est tortor, eget hendrerit nisi viverra id. Aliquam non lorem consequat ante sagittis pellentesque. Integer in mauris mollis, efficitur metus vitae, faucibus augue. Duis at consequat augue, vel sodales mi. Proin id mauris eu lectus consectetur dictum non sit amet ligula. Ut pellentesque erat accumsan tortor vestibulum, et tempus lectus luctus. Nullam dolor justo, venenatis vel viverra sit amet, ullamcorper nec mauris. Nullam accumsan lorem at laoreet rhoncus. Nullam eu semper sapien. Nam ultrices est sit amet justo molestie tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique, ante sit amet eleifend sodales, erat risus fermentum quam, eu tincidunt ligula libero eget velit. Praesent in ante eleifend sapien egestas vehicula in quis nunc.<br><br></div>','0','2022-04-30 04:54:31','2022-04-30 04:54:31'),(4,'Victor','Tellez','123456789','victor-pumas69@live.com.mx','<div>asdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasf</div>','0','2022-04-30 06:10:43','2022-04-30 06:10:43'),(5,'Victor','Tellez','123456789','victor-pumas69@live.com.mx','<div>asdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasfasdfasf</div>','0','2022-04-30 06:11:55','2022-04-30 06:11:55'),(6,'Raul','Lopez','1223456789','correo@correo.com','<div>Requiero información acerca del curso....... me gustaría que me llamaran mañana si es posible.</div>','0','2022-05-01 00:37:58','2022-05-01 00:37:58');
/*!40000 ALTER TABLE `contactos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cursos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double(8,2) NOT NULL,
  `cupo` int(11) NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cursos_user_id_foreign` (`user_id`),
  CONSTRAINT `cursos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (1,'Técnicas de Extracción de Café',0.00,20,'cursos/AsJdvubQqi2MY25PwoO4J2lAk3Go0GZuDIPiVYIg.jpg','<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</div>',2,'2022-04-30 03:38:13','2022-04-30 03:38:13'),(2,'4 Recetas de Café para Principiantes',0.00,20,'cursos/mASThYK06eIZUhtlU4vhXKHhzvABFraW9Udxzoyz.webp','<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</div>',2,'2022-04-30 03:38:48','2022-04-30 03:39:01'),(3,'¿Cómo hacer un buen café?',5.00,100,'cursos/lwDYDGj8nA83pgPDuEjTlJA8ZXvTx2LPwU78o4GJ.jpg','<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</div>',2,'2022-04-30 03:39:32','2022-04-30 03:39:32'),(4,'La creación de un buen café',0.00,10,'cursos/6l2LJ73N0h7VwRcn643VbcrdmLPhWEdT0j2kYGhB.jpg','<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</div>',1,'2022-04-30 03:43:20','2022-04-30 03:43:20'),(5,'Decoración de café',1000.00,5,'cursos/Qoj2a1nMNGJtUXs0913w0jhY1cmewkHupfFZniNn.jpg','<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</div>',1,'2022-04-30 03:44:03','2022-04-30 03:44:03'),(6,'Café artesanal',0.00,20,'cursos/QqG7ycgtEnqerpJ02pyUYIi7ywA7M5tZyHxe4hvR.jpg','<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</div>',1,'2022-04-30 03:44:33','2022-04-30 03:44:33');
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (11,'2014_10_12_000000_create_users_table',1),(12,'2014_10_12_100000_create_password_resets_table',1),(13,'2019_08_19_000000_create_failed_jobs_table',1),(14,'2019_12_14_000001_create_personal_access_tokens_table',1),(15,'2022_04_28_182305_create_contactos_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nosotros`
--

DROP TABLE IF EXISTS `nosotros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nosotros` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nosotros_user_id_foreign` (`user_id`),
  CONSTRAINT `nosotros_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nosotros`
--

LOCK TABLES `nosotros` WRITE;
/*!40000 ALTER TABLE `nosotros` DISABLE KEYS */;
INSERT INTO `nosotros` VALUES (1,'Acerca de MemDeCafé','nosotros/KjXAkcXvzc892EBaFh0qLqGw4nsW3x5sIvhfM9Eb.jpg','<div><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</strong></div>',2,'2022-04-30 03:42:20','2022-04-30 03:42:20');
/*!40000 ALTER TABLE `nosotros` ENABLE KEYS */;
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
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Victor','correo@correo.com','2022-04-30 03:37:29','$2y$10$GByXRYBPPlSqMygK4f9tJef.0z6KwModN0Z5igIcDinAR6sXV4nSS',NULL,'2022-04-30 03:37:29','2022-04-30 03:37:29'),(2,'Penny','correo1@correo.com','2022-04-30 03:37:29','$2y$10$Hf6SwOie.1lNdVpNk33rYu/8vm5v9KUGO27SGCSjy0wk//qoOZZjO',NULL,'2022-04-30 03:37:30','2022-04-30 03:37:30');
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

-- Dump completed on 2022-05-18 13:20:08
