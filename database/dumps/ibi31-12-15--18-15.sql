# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.42)
# Database: ibi
# Generation Time: 2015-12-31 17:15:46 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categorie_principi
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categorie_principi`;

CREATE TABLE `categorie_principi` (
  `categoria_id` int(11) NOT NULL,
  `principio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `categorie_principi` WRITE;
/*!40000 ALTER TABLE `categorie_principi` DISABLE KEYS */;

INSERT INTO `categorie_principi` (`categoria_id`, `principio_id`)
VALUES
	(1,1),
	(1,2),
	(2,3),
	(2,4),
	(2,5),
	(2,6),
	(2,7),
	(2,8),
	(2,9),
	(2,10),
	(3,11),
	(4,12),
	(5,13),
	(5,14),
	(5,15),
	(7,19),
	(6,18),
	(6,16),
	(6,17),
	(8,20);

/*!40000 ALTER TABLE `categorie_principi` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table categorie_terapeutiche
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categorie_terapeutiche`;

CREATE TABLE `categorie_terapeutiche` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `categorie_terapeutiche` WRITE;
/*!40000 ALTER TABLE `categorie_terapeutiche` DISABLE KEYS */;

INSERT INTO `categorie_terapeutiche` (`id`, `nome`, `slug`, `created_at`, `updated_at`)
VALUES
	(1,'Anestesiologica','anestesiologica','2015-12-30 14:43:14','2015-12-30 14:43:14'),
	(2,'Antibiotici','antibiotici','2015-12-30 14:43:32','2015-12-30 14:43:32'),
	(3,'Antineoplastici','antineoplastici','2015-12-30 14:43:48','2015-12-30 14:43:48'),
	(4,'Cardiologica','cardiologica','2015-12-30 14:44:05','2015-12-30 14:48:00'),
	(5,'Infiammazione/Edema','infiammazioneedema','2015-12-30 14:44:30','2015-12-30 14:44:30'),
	(6,'Gastroenterelogica','gastroenterelogica','2015-12-30 14:44:58','2015-12-30 14:44:58'),
	(7,'Ormoni Ipotalamici','ormoni-ipotalamici','2015-12-30 14:45:14','2015-12-30 14:45:14'),
	(8,'Terapia Osteomodulanti','terapia-osteomodulanti','2015-12-30 14:45:35','2015-12-30 14:45:35');

/*!40000 ALTER TABLE `categorie_terapeutiche` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table fascie
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fascie`;

CREATE TABLE `fascie` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `fascie` WRITE;
/*!40000 ALTER TABLE `fascie` DISABLE KEYS */;

INSERT INTO `fascie` (`id`, `nome`, `slug`, `created_at`, `updated_at`)
VALUES
	(1,'C(nn)','cnn','2015-12-29 15:35:57','2015-12-29 15:35:57'),
	(2,'A','a','2015-12-29 15:38:51','2015-12-29 17:42:29'),
	(3,'C','c','2015-12-29 15:38:58','2015-12-29 15:38:58'),
	(4,'H','h','2015-12-29 15:39:08','2015-12-29 15:39:08');

/*!40000 ALTER TABLE `fascie` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2014_10_12_000000_create_users_table',1),
	('2014_10_12_100000_create_password_resets_table',1),
	('2015_12_29_104700_create_permission_tables',1),
	('2015_12_29_134141_create_sezioni_table',2),
	('2015_12_29_134142_create_prodotti_table',2),
	('2015_12_29_134143_create_categorie_terapeutiche_table',2),
	('2015_12_29_134301_create_principi_attivi_table',2),
	('2015_12_29_134507_create_categorie_terapeutiche_principi_attivi_table',2),
	('2015_12_29_135552_create_paesi_table',2),
	('2015_12_29_135809_create_fascie_table',2),
	('2015_12_30_140117_create_prodotti_sezioni_table',3),
	('2015_12_30_163602_create_prodotti_paesi_table',4);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table paesi
# ------------------------------------------------------------

DROP TABLE IF EXISTS `paesi`;

CREATE TABLE `paesi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `paesi` WRITE;
/*!40000 ALTER TABLE `paesi` DISABLE KEYS */;

INSERT INTO `paesi` (`id`, `nome`, `slug`, `created_at`, `updated_at`)
VALUES
	(1,'Italia','italia','2015-12-29 15:02:18','2015-12-29 15:02:18'),
	(2,'Germania','germania','2015-12-29 15:02:36','2015-12-29 15:02:36'),
	(3,'Regno Unito','regno-unito','2015-12-29 15:02:53','2015-12-29 15:02:53');

/*!40000 ALTER TABLE `paesi` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;

INSERT INTO `permissions` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(2,'accedi_admin','2015-12-31 13:39:12','2015-12-31 13:39:12'),
	(3,'modifica_acl','2015-12-31 13:39:44','2015-12-31 13:39:44'),
	(4,'modifica_utenti','2015-12-31 13:40:17','2015-12-31 13:40:17'),
	(5,'modifica_tutti_prodotti','2015-12-31 13:40:30','2015-12-31 13:49:24'),
	(6,'modifica_contenuti','2015-12-31 13:41:04','2015-12-31 13:41:04'),
	(7,'modifica_news','2015-12-31 13:41:21','2015-12-31 13:41:21'),
	(8,'modifica_impostazioni','2015-12-31 13:41:32','2015-12-31 13:41:32'),
	(9,'modifica_codice_etico','2015-12-31 13:42:38','2015-12-31 13:42:38'),
	(10,'modifica_policy_privacy','2015-12-31 13:42:59','2015-12-31 13:42:59'),
	(11,'modifica_lavora_con_noi','2015-12-31 13:43:49','2015-12-31 13:43:49'),
	(12,'modifica_home','2015-12-31 13:44:38','2015-12-31 13:44:38'),
	(13,'modifica_export','2015-12-31 13:50:27','2015-12-31 13:51:09'),
	(14,'modifica_prodotti_export','2015-12-31 13:53:58','2015-12-31 13:53:58'),
	(15,'modifica_prodotti_ibisqus','2015-12-31 13:54:18','2015-12-31 13:54:18'),
	(16,'modifica_prodotti_ibi_italia','2015-12-31 13:54:47','2015-12-31 13:54:47'),
	(17,'modifica_ibi_italia','2015-12-31 13:54:55','2015-12-31 13:54:55'),
	(18,'modifica_toll_development','2015-12-31 13:55:29','2015-12-31 13:55:29'),
	(19,'modifica_ricerca_innovazione','2015-12-31 13:55:49','2015-12-31 13:55:49'),
	(20,'modifica_politica_integrata','2015-12-31 13:56:19','2015-12-31 13:56:19'),
	(21,'modifica_quality_unit_system','2015-12-31 13:56:33','2015-12-31 13:56:33'),
	(22,'modifica_farmacovigilanza','2015-12-31 13:56:52','2015-12-31 13:56:52'),
	(23,'modifica_contatti','2015-12-31 14:28:48','2015-12-31 14:28:48'),
	(24,'modifica_ibisqus','2015-12-31 14:30:24','2015-12-31 14:30:24'),
	(25,'scarica_allegati','2015-12-31 16:47:42','2015-12-31 16:47:42');

/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table principi_attivi
# ------------------------------------------------------------

DROP TABLE IF EXISTS `principi_attivi`;

CREATE TABLE `principi_attivi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `principi_attivi` WRITE;
/*!40000 ALTER TABLE `principi_attivi` DISABLE KEYS */;

INSERT INTO `principi_attivi` (`id`, `nome`, `slug`, `created_at`, `updated_at`)
VALUES
	(1,'midazolam','midazolam','2015-12-30 15:27:55','2015-12-30 15:27:55'),
	(2,'propofol','propofol','2015-12-30 15:28:26','2015-12-30 15:28:26'),
	(3,'amoxicillina e acido clavulanico','amoxicillina-e-acido-clavulanico','2015-12-30 15:28:38','2015-12-30 15:28:38'),
	(4,'ampicillina+sulbactam','ampicillinasulbactam','2015-12-30 15:28:49','2015-12-30 15:28:49'),
	(5,'cefotaxime sodico','cefotaxime-sodico','2015-12-30 15:28:59','2015-12-30 15:28:59'),
	(6,'ciprofloxacina','ciprofloxacina','2015-12-30 15:29:10','2015-12-30 15:29:10'),
	(7,'clindamicina','clindamicina','2015-12-30 15:29:19','2015-12-30 15:29:19'),
	(8,'piperacillina','piperacillina','2015-12-30 15:29:29','2015-12-30 15:29:29'),
	(9,'piperacillina+tazobactam','piperacillinatazobactam','2015-12-30 15:29:39','2015-12-30 15:29:39'),
	(10,'tobramicina','tobramicina','2015-12-30 15:29:48','2015-12-30 15:29:48'),
	(11,'bicalutamide','bicalutamide','2015-12-30 15:29:59','2015-12-30 15:29:59'),
	(12,'epoprostenolo','epoprostenolo','2015-12-30 15:30:07','2015-12-30 15:30:07'),
	(13,'escina','escina','2015-12-30 15:30:18','2015-12-30 15:30:18'),
	(14,'escina + dietilamina','escina-dietilamina','2015-12-30 15:30:32','2015-12-30 15:30:32'),
	(15,'ketoprofene','ketoprofene','2015-12-30 15:30:42','2015-12-30 15:30:42'),
	(16,'gabesato mesilato','gabesato-mesilato','2015-12-30 15:30:51','2015-12-30 15:30:51'),
	(17,'simeticone','simeticone','2015-12-30 15:31:01','2015-12-30 15:31:01'),
	(18,'acido ursodesossicolico','acido-ursodesossicolico','2015-12-30 15:31:11','2015-12-30 15:31:11'),
	(19,'somatostatina','somatostatina','2015-12-30 15:31:22','2015-12-30 15:31:22'),
	(20,'acido zoledronico','acido-zoledronico','2015-12-30 15:31:36','2015-12-30 15:31:36');

/*!40000 ALTER TABLE `principi_attivi` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table prodotti
# ------------------------------------------------------------

DROP TABLE IF EXISTS `prodotti`;

CREATE TABLE `prodotti` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `formulazione` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `principio_attivo_id` int(11) DEFAULT NULL,
  `fascia_id` int(11) DEFAULT NULL,
  `foglietto_illustrativo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scheda_tecnica` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `atc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `regime_dispensazione` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unita` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `validita_mesi` int(11) NOT NULL,
  `categoria_terapeutica_id` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table prodotti_paesi
# ------------------------------------------------------------

DROP TABLE IF EXISTS `prodotti_paesi`;

CREATE TABLE `prodotti_paesi` (
  `prodotto_id` int(11) NOT NULL,
  `paese_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table prodotti_sezioni
# ------------------------------------------------------------

DROP TABLE IF EXISTS `prodotti_sezioni`;

CREATE TABLE `prodotti_sezioni` (
  `prodotto_id` int(11) NOT NULL,
  `sezione_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table role_has_permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`)
VALUES
	(2,1),
	(3,1),
	(4,1),
	(5,1),
	(6,1),
	(7,1),
	(8,1),
	(9,1),
	(10,1),
	(11,1),
	(12,1),
	(13,1),
	(14,1),
	(15,1),
	(16,1),
	(17,1),
	(18,1),
	(19,1),
	(20,1),
	(21,1),
	(22,1),
	(2,2),
	(3,2),
	(4,2),
	(5,2),
	(6,2),
	(7,2),
	(8,2),
	(9,2),
	(10,2),
	(11,2),
	(12,2),
	(13,2),
	(14,2),
	(15,2),
	(16,2),
	(17,2),
	(18,2),
	(19,2),
	(20,2),
	(21,2),
	(22,2),
	(2,3),
	(9,3),
	(10,3),
	(11,3),
	(2,4),
	(13,4),
	(14,4),
	(15,5),
	(16,5),
	(17,5),
	(23,5),
	(24,5),
	(2,6),
	(15,6),
	(18,7),
	(19,7),
	(20,8),
	(21,9),
	(22,10),
	(25,13),
	(25,14);

/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'Dev','2015-12-31 14:22:17','2015-12-31 14:22:17'),
	(2,'Segreteria di Direzione','2015-12-31 14:26:28','2015-12-31 14:26:28'),
	(3,'Ufficio del Personale','2015-12-31 14:27:26','2015-12-31 14:27:26'),
	(4,'Ufficio Estero','2015-12-31 14:27:59','2015-12-31 14:27:59'),
	(5,'Stefania testa','2015-12-31 14:30:10','2015-12-31 14:30:10'),
	(6,'Ufficio regulatorio','2015-12-31 14:31:16','2015-12-31 14:31:16'),
	(7,'Direzione delle Operations','2015-12-31 14:32:40','2015-12-31 14:32:40'),
	(8,'Ufficio ambiente e sicurezza','2015-12-31 14:33:27','2015-12-31 14:33:27'),
	(9,'Direttore Tecnico','2015-12-31 14:33:41','2015-12-31 14:33:41'),
	(10,'Direzione Medica','2015-12-31 14:34:01','2015-12-31 14:34:01'),
	(11,'Cancellami','2015-12-31 14:40:18','2015-12-31 14:40:18'),
	(12,'Cancellami','2015-12-31 14:41:30','2015-12-31 14:41:30'),
	(13,'Medico','2015-12-31 16:48:09','2015-12-31 16:48:09'),
	(14,'Farmacista','2015-12-31 16:48:21','2015-12-31 16:48:21');

/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sezioni
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sezioni`;

CREATE TABLE `sezioni` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `sezioni` WRITE;
/*!40000 ALTER TABLE `sezioni` DISABLE KEYS */;

INSERT INTO `sezioni` (`id`, `nome`, `slug`, `created_at`, `updated_at`)
VALUES
	(1,'Ibi Export','ibi-export','2015-12-29 15:04:13','2015-12-29 15:04:13'),
	(2,'Ibisqus Ospedale','ibisqus-ospedale','2015-12-29 15:04:15','2015-12-29 15:04:14'),
	(3,'Ibi Italia','ibi-italia','2015-12-29 15:04:16','2015-12-29 15:04:14');

/*!40000 ALTER TABLE `sezioni` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_has_permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_has_permissions`;

CREATE TABLE `user_has_permissions` (
  `user_id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`),
  KEY `user_has_permissions_permission_id_foreign` (`permission_id`),
  CONSTRAINT `user_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_has_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table user_has_roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_has_roles`;

CREATE TABLE `user_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`user_id`),
  KEY `user_has_roles_user_id_foreign` (`user_id`),
  CONSTRAINT `user_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_has_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `user_has_roles` WRITE;
/*!40000 ALTER TABLE `user_has_roles` DISABLE KEYS */;

INSERT INTO `user_has_roles` (`role_id`, `user_id`)
VALUES
	(2,1),
	(1,2),
	(5,3);

/*!40000 ALTER TABLE `user_has_roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `provincia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `provincia`, `active`, `remember_token`, `last_login`, `created_at`, `updated_at`)
VALUES
	(1,'IBI','Admin','info@ibi-lorenzini.it','$2y$10$Gw4v7ieIO2.RL2u7wQnDUOr.i7pIss1u/nlj/iCNzeMEWVd7r6DMm',NULL,0,'0dasrR4l2wyAcj3yoRz5c5zA69wzGiJWFn9tyilKAxD2XipwHoiTmuevM0cM','2015-12-31 18:07:36','2015-12-29 11:49:15','2015-12-31 17:07:36'),
	(2,'System','Dev','forge405@gmail.com','$2y$10$Gw4v7ieIO2.RL2u7wQnDUOr.i7pIss1u/nlj/iCNzeMEWVd7r6DMm',NULL,0,'22H66NBmxuvvaiABuaFJAcTrjOoHZl0VjBjFqrdRw8ShHFTcDGMNsvbdkkz7','2015-12-31 18:08:53','2015-12-29 11:49:15','2015-12-31 17:08:53'),
	(3,'Stefania','Testa','stefania@ibi-lorenzini.it','$2y$10$l8RdsxidsjNnwfk4ZNoxx.MPzK5vih1g8OVvD2mULDCYNeggkTow.',NULL,0,NULL,NULL,'2015-12-31 17:15:08','2015-12-31 17:15:08');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
