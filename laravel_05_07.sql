-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: laravel
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES (1,'Cty 1','1530714451-9.jpg','2018-07-04 07:27:31','2018-07-04 07:27:31',NULL),(2,'Cty2','1530714473-9.jpg','2018-07-04 07:27:53','2018-07-04 07:27:53',NULL),(3,'Cty 3','1530714484-9.jpg','2018-07-04 07:28:04','2018-07-04 07:28:04',NULL),(4,'Cty 4','1530714495-9.jpg','2018-07-04 07:28:15','2018-07-04 07:28:15',NULL),(5,'Cty 5','1530714505-9.jpg','2018-07-04 07:28:25','2018-07-04 07:28:25',NULL),(6,'Cty 6','1530714514-9.jpg','2018-07-04 07:28:34','2018-07-04 07:28:34',NULL),(7,'Cty 7','1530714539-6.jpg','2018-07-04 07:28:59','2018-07-04 07:28:59',NULL),(8,'Cty 8','1530714551-6.jpg','2018-07-04 07:29:11','2018-07-04 07:29:11',NULL);
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `short_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (1,'Gop y 1111Gop y 1111Gop y 1111','Gop y 1111Gop y 1111Gop y 1111Gop y 1111Gop y 1111Gop y 1111Gop y 1111Gop y 1111Gop y 1111Gop y 1111Gop y 1111Gop y 1111Gop y 1111','2018-07-05 08:27:46','2018-07-05 08:27:46',NULL);
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `footerinfo`
--

DROP TABLE IF EXISTS `footerinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `footerinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `footerinfo`
--

LOCK TABLES `footerinfo` WRITE;
/*!40000 ALTER TABLE `footerinfo` DISABLE KEYS */;
INSERT INTO `footerinfo` VALUES (1,'Công ty 1 thành viên Dv - Siêu Lầy','0988958479','abcxxx444','dotuan0601@gmail.com','2017 thuộc về Dv. Designed by Dv.','2018-07-04 08:45:26','2018-07-04 08:45:26',NULL);
/*!40000 ALTER TABLE `footerinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `footersitemap`
--

DROP TABLE IF EXISTS `footersitemap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `footersitemap` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_parent` tinyint(4) DEFAULT '0',
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `footersitemap`
--

LOCK TABLES `footersitemap` WRITE;
/*!40000 ALTER TABLE `footersitemap` DISABLE KEYS */;
INSERT INTO `footersitemap` VALUES (1,'Sản phẩm',NULL,1,'http://google.com','2018-07-04 09:33:04','2018-07-04 09:33:04',NULL),(2,'Sản phẩm 1','Sản phẩm',NULL,NULL,'2018-07-04 09:33:19','2018-07-04 09:33:19',NULL),(3,'Sản phẩm 2','Sản phẩm',NULL,NULL,'2018-07-04 09:33:31','2018-07-04 09:33:31',NULL),(4,'Sản phẩm 3','Sản phẩm',NULL,NULL,'2018-07-04 09:33:43','2018-07-04 09:33:43',NULL),(5,'Middle',NULL,1,NULL,'2018-07-04 09:33:54','2018-07-04 09:33:54',NULL),(6,'Middle 1','Middle',NULL,NULL,'2018-07-04 09:34:04','2018-07-04 09:34:04',NULL),(7,'Middle 2','Middle',NULL,NULL,'2018-07-04 09:34:16','2018-07-04 09:34:16',NULL),(8,'Middle 3','Middle',NULL,NULL,'2018-07-04 09:34:31','2018-07-04 09:34:31',NULL),(9,'Right',NULL,1,NULL,'2018-07-04 09:34:40','2018-07-04 09:34:40',NULL),(10,'Right 11','Right',NULL,NULL,'2018-07-04 09:34:50','2018-07-04 09:34:50',NULL),(11,'Right 22','Right',NULL,NULL,'2018-07-04 09:34:59','2018-07-04 09:34:59',NULL),(12,'Right 3','Right',NULL,NULL,'2018-07-04 09:35:10','2018-07-04 09:35:10',NULL);
/*!40000 ALTER TABLE `footersitemap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `frmenu`
--

DROP TABLE IF EXISTS `frmenu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `frmenu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `frmenu`
--

LOCK TABLES `frmenu` WRITE;
/*!40000 ALTER TABLE `frmenu` DISABLE KEYS */;
INSERT INTO `frmenu` VALUES (1,'Trang chủ',NULL,'2018-07-03 09:41:05','2018-07-03 09:41:05',NULL),(2,'Giới thiệu',NULL,'2018-07-03 09:41:16','2018-07-03 09:41:16',NULL),(3,'Sản phẩm',NULL,'2018-07-03 09:41:23','2018-07-03 09:41:23',NULL),(4,'Sản phẩm 1','Sản phẩm','2018-07-03 09:41:32','2018-07-03 09:41:32',NULL),(5,'Sản phẩm 2','Sản phẩm','2018-07-03 09:41:44','2018-07-03 09:41:44',NULL),(6,'Sản phẩm 3','Sản phẩm','2018-07-03 09:41:54','2018-07-03 09:41:54',NULL),(7,'Góp ý',NULL,'2018-07-05 06:01:11','2018-07-05 06:01:11',NULL);
/*!40000 ALTER TABLE `frmenu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imageact`
--

DROP TABLE IF EXISTS `imageact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imageact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img_small` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_large` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_feature` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imageact`
--

LOCK TABLES `imageact` WRITE;
/*!40000 ALTER TABLE `imageact` DISABLE KEYS */;
INSERT INTO `imageact` VALUES (1,'1530715554-2222.jpg','1530715616-bai_viet_to.jpg','Ảnh to nè',1,'2018-07-04 07:45:54','2018-07-04 07:46:56',NULL),(2,'1530715578-9.jpg','1530715578-9.jpg','Ảnh nhỏ 1',NULL,'2018-07-04 07:46:18','2018-07-04 07:46:18',NULL),(3,'1530715636-9.jpg','1530715636-9.jpg','Ảnh nhỏ 2',NULL,'2018-07-04 07:47:16','2018-07-04 07:47:16',NULL),(4,'1530715650-6.jpg','1530715650-6.jpg','Ảnh nhỏ 3',NULL,'2018-07-04 07:47:30','2018-07-04 07:47:30',NULL),(5,'1530715682-bang-ron-300x100cm-sx-new.jpg','1530715682-bang-ron-300x100cm-sx-new.jpg','Ảnh nhỏ 4',NULL,'2018-07-04 07:48:02','2018-07-04 07:48:02',NULL),(6,'1530715710-cover-website-8c.jpg','1530715711-cover-website-8c.jpg','Ảnh nhỏ 5',NULL,'2018-07-04 07:48:31','2018-07-04 07:48:31',NULL),(7,'1530715727-cover-website-7b.jpg','1530715727-cover-website-7b.jpg','Ảnh nhỏ 6',NULL,'2018-07-04 07:48:47','2018-07-04 07:48:47',NULL),(8,'1530715743-cover-website-3c.jpg','1530715743-cover-website-3c.jpg','Ảnh nhỏ 7',NULL,'2018-07-04 07:49:03','2018-07-04 07:49:03',NULL),(9,'1530715759-cover-website-4c.jpg','1530715759-cover-website-4c.jpg','Ảnh nhỏ 8',NULL,'2018-07-04 07:49:19','2018-07-04 07:49:19',NULL);
/*!40000 ALTER TABLE `imageact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_role`
--

DROP TABLE IF EXISTS `menu_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_role` (
  `menu_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `menu_role_menu_id_role_id_unique` (`menu_id`,`role_id`),
  KEY `menu_role_menu_id_index` (`menu_id`),
  KEY `menu_role_role_id_index` (`role_id`),
  CONSTRAINT `menu_role_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE,
  CONSTRAINT `menu_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_role`
--

LOCK TABLES `menu_role` WRITE;
/*!40000 ALTER TABLE `menu_role` DISABLE KEYS */;
INSERT INTO `menu_role` VALUES (7,1),(7,2),(9,1),(9,2),(11,1),(11,2),(15,1),(15,2),(19,1),(19,2),(21,1),(21,2),(23,1),(23,2),(24,1),(24,2),(26,1),(26,2),(31,1),(31,2),(32,1),(32,2),(35,1),(35,2);
/*!40000 ALTER TABLE `menu_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `position` int(11) DEFAULT NULL,
  `menu_type` int(11) NOT NULL DEFAULT '1',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,NULL,0,NULL,'User','User',NULL,NULL,NULL),(2,NULL,0,NULL,'Role','Role',NULL,NULL,NULL),(7,0,2,'fa-database','QuảnLýNộiDung','Quản lý Trang chủ',NULL,'2018-07-03 09:38:19','2018-07-04 09:44:43'),(9,0,1,'fa-database','FrMenu','Menu trang chủ',7,'2018-07-03 09:40:48','2018-07-03 09:40:48'),(11,0,1,'fa-database','Products','Quản lý sản phẩm',7,'2018-07-03 09:45:12','2018-07-03 09:45:12'),(15,0,1,'fa-database','News','Quản lý tin bài',7,'2018-07-03 10:17:10','2018-07-03 10:17:10'),(19,0,1,'fa-database','PriceShow','Show giá',7,'2018-07-03 10:48:14','2018-07-03 10:48:14'),(21,0,1,'fa-database','Company','Công ty thành viên',7,'2018-07-04 07:26:39','2018-07-04 07:26:39'),(23,0,1,'fa-database','ImageAct','Hình ảnh hoạt động',7,'2018-07-04 07:41:06','2018-07-04 07:41:06'),(24,0,2,'fa-database','QuảnLýFooter','Quản lý Footer',NULL,'2018-07-04 08:39:37','2018-07-04 08:39:37'),(26,0,1,'fa-database','FooterInfo','Thông tin trong footer',24,'2018-07-04 08:44:18','2018-07-04 08:44:18'),(31,0,1,'fa-database','FooterSitemap','Footer Sitemap',24,'2018-07-04 09:32:39','2018-07-04 09:32:39'),(32,0,2,'fa-database','QuảnLýGópý','Quản lý Góp ý',NULL,'2018-07-05 05:52:27','2018-07-05 05:52:27'),(35,0,1,'fa-database','Feedback','Danh sách',32,'2018-07-05 08:25:35','2018-07-05 08:25:35');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2015_10_10_000000_create_menus_table',1),(4,'2015_10_10_000000_create_roles_table',1),(5,'2015_10_10_000000_update_users_table',1),(6,'2015_12_11_000000_create_users_logs_table',1),(7,'2016_03_14_000000_update_menus_table',1),(8,'2018_07_03_164048_create_frmenu_table',2),(9,'2018_07_03_164513_create_products_table',3),(10,'2018_07_03_170722_create_news_table',4),(11,'2018_07_03_171403_create_news_table',5),(12,'2018_07_03_171710_create_news_table',6),(13,'2018_07_03_174438_create_priceshow_table',7),(14,'2018_07_03_174815_create_priceshow_table',8),(15,'2018_07_04_142639_create_company_table',9),(16,'2018_07_04_144106_create_imageact_table',10),(17,'2018_07_04_154419_create_footerinfo_table',11),(18,'2018_07_04_160343_create_footersitemap_table',12),(19,'2018_07_04_163034_create_footersitemap_table',13),(20,'2018_07_04_163239_create_footersitemap_table',14),(21,'2018_07_05_130013_create_feedback_table',15),(22,'2018_07_05_152535_create_feedback_table',16);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `is_feature` tinyint(4) DEFAULT '0',
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Bài viết to','1530638276-bai_viet_to.jpg','Nằm trong kế hoạch các hoạt động xã hội hàng năm của công ty, ngày 18/4/2018 vừa qua, Anova Feed đã đi thăm và tặng quà cho các bệnh nhân tại Bệnh viện Ung Bướu TPHCM, Bệnh viện Nhi Đồng 1 và các trẻ em có hoàn cảnh đặc biệt của mái ấm tình thương Kim Chi - chùa Long Thạnh, tỉnh Long An',1,'<p><strong>Nằm trong kế hoạch c&aacute;c hoạt động x&atilde; hội h&agrave;ng năm của c&ocirc;ng ty, ng&agrave;y 18/4/2018 vừa qua, Anova Feed đ&atilde; đi thăm v&agrave; tặng qu&agrave; cho c&aacute;c bệnh nh&acirc;n tại Bệnh viện Ung Bướu TPHCM, Bệnh viện Nhi Đồng 1 v&agrave; c&aacute;c trẻ em c&oacute; ho&agrave;n cảnh đặc biệt của m&aacute;i ấm t&igrave;nh thương Kim Chi - ch&ugrave;a Long Thạnh, tỉnh Long An.</strong></p>\r\n\r\n<p>Trong chuyến đi, đo&agrave;n đ&atilde; c&oacute; dịp lắng nghe những t&acirc;m tư, t&igrave;nh cảm cũng như những trăn trở của những bệnh nh&acirc;n để c&oacute; thể kịp thời đồng cảm v&agrave; sẻ chia với những kh&oacute; khăn ấy. Hi vọng với những đ&oacute;ng g&oacute;p của m&igrave;nh, Anova Feed sẽ phần n&agrave;o phụ gi&uacute;p cho những ho&agrave;n cảnh kh&oacute; khăn c&oacute; th&ecirc;m nghị lực để vượt qua những thử th&aacute;ch của bệnh tật</p>','2018-07-03 10:17:56','2018-07-03 10:17:56',NULL),(2,'Bài viết nhỏ 1','1530638361-111.jpg','Sáng 07/02/2018 vừa qua, tại Trung tâm hội nghị White Palace (TP Hồ Chí Minh), Hội Doanh nghiệp hàng Việt Nam chất lượng cao đã long trọng tổ chức Lễ công',NULL,NULL,'2018-07-03 10:19:21','2018-07-03 10:19:21',NULL),(3,'Bài viết nhỏ 2','1530638376-2222.jpg','Trong 2 ngày 20 & 27/01/2018 vừa qua, Anova Feed đã tổ chức Liên hoan Tất niên cho toàn thể CB-CNV của công ty',NULL,NULL,'2018-07-03 10:19:36','2018-07-03 10:19:36',NULL),(4,'Bài viết nhỏ 3','1530638400-333.jpg','Doanh nghiệp khánh thành nhà máy đầu tiên tại thị trường phía Bắc, với tổng công suất thiết kế đạt 220.000 tấn mỗi',NULL,NULL,'2018-07-03 10:20:00','2018-07-03 10:20:00',NULL);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
-- Table structure for table `priceshow`
--

DROP TABLE IF EXISTS `priceshow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `priceshow` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `price_show_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `priceshow`
--

LOCK TABLES `priceshow` WRITE;
/*!40000 ALTER TABLE `priceshow` DISABLE KEYS */;
INSERT INTO `priceshow` VALUES (1,'Heo hơi <110 kg Miền Bắc: 48.000 - 50.000 đ/kg','2018-07-03 10:48:27','2018-07-03 10:48:27',NULL),(2,'Giờ đã khá muộn rồi mà tôi vẫn code','2018-07-03 10:48:44','2018-07-03 10:48:44',NULL),(3,'Tin thứ 1: aaaaaaaaaaaaaaaaa','2018-07-03 10:48:55','2018-07-03 10:48:55',NULL),(4,'Tin thứ 2: bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb','2018-07-03 10:49:05','2018-07-03 10:49:05',NULL),(5,'Tin thứ 3: sắp có tiền web về rooooiiiiiiiiiiiiiiiiiiiiiiiiiiii','2018-07-03 10:49:22','2018-07-03 10:49:22',NULL);
/*!40000 ALTER TABLE `priceshow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Thức ăn heo','http://localhost:8080/img/1a.png','2018-07-03 09:46:07','2018-07-03 09:55:50',NULL),(2,'Thức ăn lợn','http://localhost:8080/img/1a.png','2018-07-03 09:46:26','2018-07-03 09:57:54',NULL),(3,'Thức ăn bò','http://localhost:8080/img/1a.png','2018-07-03 09:46:38','2018-07-03 09:58:00',NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrator','2018-07-03 09:29:16','2018-07-03 09:29:16'),(2,'User','2018-07-03 09:29:16','2018-07-03 09:29:16');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'admin','admin@admin.com','$2y$10$cH9KyrYO0g.q3hL/zCTXaOflg10vobMGbM/tOukvUmiE5wQEZx/em',NULL,'2018-07-03 09:29:28','2018-07-03 09:29:28');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_logs`
--

DROP TABLE IF EXISTS `users_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_logs`
--

LOCK TABLES `users_logs` WRITE;
/*!40000 ALTER TABLE `users_logs` DISABLE KEYS */;
INSERT INTO `users_logs` VALUES (1,1,'created','frmenu',1,'2018-07-03 09:41:05','2018-07-03 09:41:05'),(2,1,'created','frmenu',2,'2018-07-03 09:41:16','2018-07-03 09:41:16'),(3,1,'created','frmenu',3,'2018-07-03 09:41:23','2018-07-03 09:41:23'),(4,1,'created','frmenu',4,'2018-07-03 09:41:32','2018-07-03 09:41:32'),(5,1,'created','frmenu',5,'2018-07-03 09:41:44','2018-07-03 09:41:44'),(6,1,'created','frmenu',6,'2018-07-03 09:41:54','2018-07-03 09:41:54'),(7,1,'created','products',1,'2018-07-03 09:46:07','2018-07-03 09:46:07'),(8,1,'created','products',2,'2018-07-03 09:46:26','2018-07-03 09:46:26'),(9,1,'created','products',3,'2018-07-03 09:46:38','2018-07-03 09:46:38'),(10,1,'updated','products',1,'2018-07-03 09:55:50','2018-07-03 09:55:50'),(11,1,'updated','products',2,'2018-07-03 09:57:54','2018-07-03 09:57:54'),(12,1,'updated','products',3,'2018-07-03 09:58:00','2018-07-03 09:58:00'),(13,1,'created','news',1,'2018-07-03 10:14:44','2018-07-03 10:14:44'),(14,1,'created','news',1,'2018-07-03 10:17:56','2018-07-03 10:17:56'),(15,1,'created','news',2,'2018-07-03 10:19:21','2018-07-03 10:19:21'),(16,1,'created','news',3,'2018-07-03 10:19:36','2018-07-03 10:19:36'),(17,1,'created','news',4,'2018-07-03 10:20:00','2018-07-03 10:20:00'),(18,1,'created','priceshow',1,'2018-07-03 10:45:02','2018-07-03 10:45:02'),(19,1,'updated','priceshow',1,'2018-07-03 10:45:15','2018-07-03 10:45:15'),(20,1,'updated','priceshow',1,'2018-07-03 10:45:26','2018-07-03 10:45:26'),(21,1,'created','priceshow',1,'2018-07-03 10:48:27','2018-07-03 10:48:27'),(22,1,'created','priceshow',2,'2018-07-03 10:48:44','2018-07-03 10:48:44'),(23,1,'created','priceshow',3,'2018-07-03 10:48:55','2018-07-03 10:48:55'),(24,1,'created','priceshow',4,'2018-07-03 10:49:05','2018-07-03 10:49:05'),(25,1,'created','priceshow',5,'2018-07-03 10:49:22','2018-07-03 10:49:22'),(26,1,'created','company',1,'2018-07-04 07:27:31','2018-07-04 07:27:31'),(27,1,'created','company',2,'2018-07-04 07:27:53','2018-07-04 07:27:53'),(28,1,'created','company',3,'2018-07-04 07:28:04','2018-07-04 07:28:04'),(29,1,'created','company',4,'2018-07-04 07:28:15','2018-07-04 07:28:15'),(30,1,'created','company',5,'2018-07-04 07:28:25','2018-07-04 07:28:25'),(31,1,'created','company',6,'2018-07-04 07:28:34','2018-07-04 07:28:34'),(32,1,'created','company',7,'2018-07-04 07:28:59','2018-07-04 07:28:59'),(33,1,'created','company',8,'2018-07-04 07:29:11','2018-07-04 07:29:11'),(34,1,'created','imageact',1,'2018-07-04 07:45:54','2018-07-04 07:45:54'),(35,1,'created','imageact',2,'2018-07-04 07:46:18','2018-07-04 07:46:18'),(36,1,'updated','imageact',1,'2018-07-04 07:46:47','2018-07-04 07:46:47'),(37,1,'updated','imageact',1,'2018-07-04 07:46:56','2018-07-04 07:46:56'),(38,1,'created','imageact',3,'2018-07-04 07:47:16','2018-07-04 07:47:16'),(39,1,'created','imageact',4,'2018-07-04 07:47:30','2018-07-04 07:47:30'),(40,1,'created','imageact',5,'2018-07-04 07:48:02','2018-07-04 07:48:02'),(41,1,'created','imageact',6,'2018-07-04 07:48:31','2018-07-04 07:48:31'),(42,1,'created','imageact',7,'2018-07-04 07:48:47','2018-07-04 07:48:47'),(43,1,'created','imageact',8,'2018-07-04 07:49:03','2018-07-04 07:49:03'),(44,1,'created','imageact',9,'2018-07-04 07:49:20','2018-07-04 07:49:20'),(45,1,'created','footerinfo',1,'2018-07-04 08:45:26','2018-07-04 08:45:26'),(46,1,'created','footersitemap',1,'2018-07-04 09:04:15','2018-07-04 09:04:15'),(47,1,'created','footersitemap',2,'2018-07-04 09:04:26','2018-07-04 09:04:26'),(48,1,'created','footersitemap',3,'2018-07-04 09:04:37','2018-07-04 09:04:37'),(49,1,'created','footersitemap',4,'2018-07-04 09:04:49','2018-07-04 09:04:49'),(50,1,'created','footersitemap',5,'2018-07-04 09:05:08','2018-07-04 09:05:08'),(51,1,'created','footersitemap',6,'2018-07-04 09:05:23','2018-07-04 09:05:23'),(52,1,'created','footersitemap',7,'2018-07-04 09:05:35','2018-07-04 09:05:35'),(53,1,'created','footersitemap',8,'2018-07-04 09:05:45','2018-07-04 09:05:45'),(54,1,'created','footersitemap',9,'2018-07-04 09:05:54','2018-07-04 09:05:54'),(55,1,'created','footersitemap',1,'2018-07-04 09:33:04','2018-07-04 09:33:04'),(56,1,'created','footersitemap',2,'2018-07-04 09:33:19','2018-07-04 09:33:19'),(57,1,'created','footersitemap',3,'2018-07-04 09:33:31','2018-07-04 09:33:31'),(58,1,'created','footersitemap',4,'2018-07-04 09:33:44','2018-07-04 09:33:44'),(59,1,'created','footersitemap',5,'2018-07-04 09:33:54','2018-07-04 09:33:54'),(60,1,'created','footersitemap',6,'2018-07-04 09:34:04','2018-07-04 09:34:04'),(61,1,'created','footersitemap',7,'2018-07-04 09:34:16','2018-07-04 09:34:16'),(62,1,'created','footersitemap',8,'2018-07-04 09:34:31','2018-07-04 09:34:31'),(63,1,'created','footersitemap',9,'2018-07-04 09:34:40','2018-07-04 09:34:40'),(64,1,'created','footersitemap',10,'2018-07-04 09:34:50','2018-07-04 09:34:50'),(65,1,'created','footersitemap',11,'2018-07-04 09:34:59','2018-07-04 09:34:59'),(66,1,'created','footersitemap',12,'2018-07-04 09:35:10','2018-07-04 09:35:10'),(67,1,'created','frmenu',7,'2018-07-05 06:01:12','2018-07-05 06:01:12'),(68,1,'created','feedback',1,'2018-07-05 08:12:26','2018-07-05 08:12:26'),(69,1,'created','feedback',2,'2018-07-05 08:13:41','2018-07-05 08:13:41'),(70,1,'created','feedback',3,'2018-07-05 08:17:16','2018-07-05 08:17:16'),(71,1,'created','feedback',4,'2018-07-05 08:20:48','2018-07-05 08:20:48'),(72,1,'created','feedback',5,'2018-07-05 08:22:25','2018-07-05 08:22:25'),(73,1,'created','feedback',1,'2018-07-05 08:27:46','2018-07-05 08:27:46');
/*!40000 ALTER TABLE `users_logs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-05 22:45:20
