# ************************************************************
# Sequel Ace SQL dump
# Version 20062
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 8.0.32)
# Database: oms
# Generation Time: 2024-03-19 05:16:42 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_reset_tokens_table',1),
	(3,'2019_08_19_000000_create_failed_jobs_table',1),
	(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
	(5,'2024_02_09_194616_create_orders_table',1),
	(6,'2024_02_18_194522_create_notes_table',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table notes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `notes`;

CREATE TABLE `notes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint unsigned NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;

INSERT INTO `notes` (`id`, `order_id`, `content`, `created_at`, `updated_at`)
VALUES
	(1,2,'Nu a adus avans','2024-02-19 21:19:05','2024-02-19 21:19:05'),
	(2,5,'nu avem detalii','2024-02-19 21:19:19','2024-02-19 21:19:19'),
	(3,5,'nu are avans dat','2024-02-19 21:19:31','2024-02-19 21:19:31'),
	(4,10,'google','2024-02-25 14:43:06','2024-02-25 14:43:06'),
	(5,10,'avem toate detaliile','2024-02-25 14:43:16','2024-02-25 14:43:16'),
	(6,5,'am primit informatiile, il ridica pe la 17:00','2024-02-25 14:43:37','2024-02-25 14:43:37'),
	(7,3,'de verificat.','2024-02-25 16:45:11','2024-02-25 16:45:11'),
	(8,10,'uullala','2024-02-25 16:48:22','2024-02-25 16:48:22'),
	(9,10,'test emoji','2024-02-25 16:48:32','2024-02-25 16:48:32'),
	(10,9,'am primit un avans de 100 de lei','2024-02-25 17:40:44','2024-02-25 17:40:44'),
	(11,10,'abxbadas','2024-02-25 18:03:34','2024-02-25 18:03:34'),
	(12,8,'💰 Am incasat `250` lei la predare!','2024-02-25 22:59:57','2024-02-25 22:59:57'),
	(13,9,'💰 Am incasat `10` lei la predare!','2024-02-25 23:00:04','2024-02-25 23:00:04'),
	(14,9,'💰 Am incasat 110 lei la predare!','2024-02-25 23:00:34','2024-02-25 23:00:34'),
	(15,10,'[💰] Am incasat 200 lei la predare!','2024-02-25 23:00:54','2024-02-25 23:00:54'),
	(16,5,'[💰] Am incasat 260 lei la predare!','2024-02-25 23:01:18','2024-02-25 23:01:18'),
	(17,6,'[💰] Am incasat 100 lei la predare!','2024-02-25 23:01:33','2024-02-25 23:01:33'),
	(18,7,'[💰] Am incasat 160 lei la predare!','2024-02-25 23:11:56','2024-02-25 23:11:56'),
	(19,10,'[💰] Am modificat avansul la 50 lei de la 0 lei!','2024-02-27 22:11:04','2024-02-27 22:11:04'),
	(20,10,'[💰] Am primit 210 lei la predare!','2024-02-27 22:11:18','2024-02-27 22:11:18'),
	(21,9,'[💰] Am modificat avansul la 150 lei de la 100 lei!','2024-02-27 22:11:39','2024-02-27 22:11:39'),
	(22,9,'[💰] Am primit 200 lei la predare!','2024-02-27 22:11:39','2024-02-27 22:11:39'),
	(23,2,'[💰] Am modificat avansul la 200 lei de la 150 lei!','2024-02-27 22:17:01','2024-02-27 22:17:01'),
	(24,2,'[💰] Am primit 300 lei la predare!','2024-02-27 22:17:01','2024-02-27 22:17:01'),
	(25,11,'Am primit si modelul de tort dorit, pe messenger','2024-02-27 22:24:30','2024-02-27 22:24:30'),
	(26,10,'from \"upcoming page\"','2024-02-28 22:02:45','2024-02-28 22:02:45'),
	(27,10,'redirect (back) fuction added','2024-02-28 22:07:24','2024-02-28 22:07:24'),
	(28,14,'am primit detalii despre tort, forma...','2024-03-05 19:30:43','2024-03-05 19:30:43'),
	(29,16,'[💰] Am primit 150 lei la predare!','2024-03-06 22:07:57','2024-03-06 22:07:57'),
	(30,16,'[💰] Am primit 350 lei la predare!','2024-03-06 22:08:05','2024-03-06 22:08:05'),
	(31,22,'ceva','2024-03-13 22:50:44','2024-03-13 22:50:44'),
	(32,22,'[💰] Am primit 220 lei la predare!','2024-03-14 18:40:12','2024-03-14 18:40:12');

/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` double(8,2) NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup_date` datetime NOT NULL,
  `advance_payment_amount` double(8,2) NOT NULL DEFAULT '0.00',
  `rest_payment_amount` double(8,2) NOT NULL DEFAULT '0.00',
  `notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;

INSERT INTO `orders` (`id`, `name`, `phone`, `weight`, `details`, `pickup_date`, `advance_payment_amount`, `rest_payment_amount`, `notes`, `created_at`, `updated_at`)
VALUES
	(1,'Vasilescu Ana','0710203080',3.00,'cu umplutura de mousse ciocolata si visine, scris la multi ani, Andrei','2024-02-09 23:16:55',100.00,0.00,'0','2024-02-09 22:16:55','2024-02-09 22:16:55'),
	(2,'Lungu Mihai','0733228910',6.00,'tort de botez cu ursulet albastru si stelute galbene','2024-02-10 00:10:03',200.00,300.00,'0','2024-02-10 00:10:03','2024-02-27 22:17:01'),
	(3,'Ham Marius','0752324239',6.00,'Mouse de ciocolata','2024-02-24 20:15:00',50.00,0.00,'0','2024-02-17 21:49:49','2024-02-17 21:49:49'),
	(4,'Dinu Magda','0788345789',7.00,'mouse de ciocolata cu visine','2024-02-22 17:00:00',100.00,0.00,'0','2024-02-17 21:54:27','2024-02-17 21:54:27'),
	(5,'Manu Nicoleta','0734567891',3.00,'ganace de ciocolata','2024-02-18 13:00:00',0.00,260.00,'0','2024-02-18 07:07:47','2024-02-25 23:01:18'),
	(6,'Dinu Ana','0711223389',4.00,'mouse de ciocolata cu text la multi ani, andrei!','2024-02-18 22:00:00',50.00,100.00,'0','2024-02-18 18:59:43','2024-02-25 23:01:33'),
	(7,'Stanciu Horia','0788990012',2.00,'crema de cioco alba, fulgi de cioco si afine.','2024-02-19 22:00:00',50.00,160.00,'0','2024-02-18 19:03:08','2024-02-25 23:11:56'),
	(8,'Dinu Sorin','0711203421',3.00,'ciocolata cu visine si scris la multi ani','2024-02-22 19:00:00',50.00,250.00,'0','2024-02-21 19:52:34','2024-02-25 22:59:57'),
	(9,'Popescu Marina','0712345212',5.00,'ciocolata curgatoare peste frisca alba','2024-02-24 17:00:00',150.00,200.00,'0','2024-02-21 19:58:14','2024-02-27 22:11:39'),
	(10,'Oprea Alina','0781723193',2.00,'\"la multi ani, george\"','2024-03-01 14:00:00',50.00,210.00,'0','2024-02-21 19:59:09','2024-02-27 22:11:18'),
	(11,'Paun Daniela','0710234587',4.00,'Rotund, cu fotbal, Ronaldo, 8 ani, Rares','2024-03-01 20:00:00',50.00,0.00,'0','2024-02-27 22:19:58','2024-02-27 22:19:58'),
	(12,'Ionescu Daniela','0753234218',12.00,'mouse de cioco, tort de botez, cu ursulet','2024-06-20 20:00:00',100.00,0.00,'0','2024-03-03 18:19:31','2024-03-03 18:19:31'),
	(13,'Cristecu Daniela','0712313181',10.00,'ciocolata curgatoare, verde minecraft, 14 ani...','2024-04-26 20:00:00',50.00,0.00,'0','2024-03-03 18:20:40','2024-03-03 18:20:40'),
	(14,'Gigescu Nicoleta','072342313',5.00,'ciocolata neagra','2024-05-16 21:10:00',50.00,0.00,'0','2024-03-03 18:21:53','2024-03-03 18:21:53'),
	(15,'Diaconu Marius','078222913',9.00,'mouse de ciocolata cu ciocolata curgatoare, la multi ani Marius','2024-04-26 13:00:00',100.00,0.00,'0','2024-03-03 22:56:30','2024-03-03 22:56:30'),
	(16,'Miruna Mihai','07112030412',7.00,'ciocolata cu visine si toping','2024-03-09 21:30:00',50.00,350.00,'0','2024-03-06 21:36:55','2024-03-06 22:08:05'),
	(17,'Ion Ionescu','0787423423',3.00,'\"La multi ani, Bicu\"','2024-03-10 16:00:00',50.00,0.00,'0','2024-03-06 21:59:40','2024-03-06 21:59:40'),
	(18,'Jan Mihai','0742531833',3.00,'cicolata neagra','2024-03-07 14:00:00',50.00,0.00,'0','2024-03-06 23:13:02','2024-03-06 23:13:02'),
	(19,'Bicu Ionut','0753443532',4.00,'vanielie cu capsuni','2024-03-08 08:30:00',50.00,0.00,'0','2024-03-06 23:19:42','2024-03-06 23:19:42'),
	(20,'Micu Nicusor','0712131241',3.00,'cu fructe si imbracat in frisca.','2024-03-09 15:00:00',50.00,0.00,'0','2024-03-09 06:17:03','2024-03-09 06:17:03'),
	(21,'Pascu Daniela','0754354313',4.00,'anas si zmeura cu vanilie','2024-03-10 10:45:00',50.00,0.00,'0','2024-03-09 06:18:24','2024-03-09 06:18:24'),
	(22,'MIhai Ionescu','0752433823',5.00,'cu fotbal, verde si gablen','2024-03-14 22:00:00',50.00,220.00,'0','2024-03-13 19:00:59','2024-03-14 18:40:12'),
	(23,'Nistor Mirela','0782343422',8.00,'tort de fructe, cu text \"La multi ani, Nicusor\"','2024-03-15 21:00:00',100.00,0.00,'0','2024-03-13 20:53:40','2024-03-13 20:53:40'),
	(24,'Tutulus Mihaela','071234231',24.00,'Tort botez, cu 2 etaje','2024-03-16 21:00:00',150.00,0.00,'0','2024-03-13 20:57:41','2024-03-13 20:57:41'),
	(25,'Pascu Mihai','0754524354',10.00,'tort cu frisca si fructe','2024-03-17 20:30:00',50.00,0.00,'0','2024-03-13 22:30:53','2024-03-13 22:30:53'),
	(26,'Parvu Stelica','071234231',3.00,'tort cu masini, hot wheels','2024-03-19 18:00:00',50.00,0.00,'0','2024-03-13 22:41:40','2024-03-13 22:41:40'),
	(27,'Dincu Nicolae','07545353123',15.00,'tort de sf ion','2025-01-07 21:22:00',100.00,0.00,'0','2024-03-15 21:22:58','2024-03-15 21:22:58');

/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_reset_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table personal_access_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Ion Popescu','eduard.pantazi@gmail.com',NULL,'$2y$12$ny1XpqfjSLC2O5TJeEvOH.gFQWcdP4RKvfEqoS6DkjmZy3nRgDMia','Lulj41cfdEjC5hcLeAZqxq5b91NiQSmkESWZZHiW75IP2dMoMLoVbSlZ7O31','2024-02-09 20:18:52','2024-03-06 22:15:30');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
