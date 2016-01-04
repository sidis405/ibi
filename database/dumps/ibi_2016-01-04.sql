# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.34)
# Database: ibi
# Generation Time: 2016-01-04 15:28:22 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table candidature
# ------------------------------------------------------------

DROP TABLE IF EXISTS `candidature`;

CREATE TABLE `candidature` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `posizione_id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cognome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `messagio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cv_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



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


# Dump of table comunicati
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comunicati`;

CREATE TABLE `comunicati` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titolo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `allegato` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descrizione` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `testo` longtext COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `comunicati` WRITE;
/*!40000 ALTER TABLE `comunicati` DISABLE KEYS */;

INSERT INTO `comunicati` (`id`, `titolo`, `slug`, `allegato`, `descrizione`, `testo`, `active`, `created_at`, `updated_at`)
VALUES
	(1,'Prima Informativa Importante sui medicinali contenenti Ketoprofene (05/02/2015)','prima-informativa-importante-sui-medicinali-contenenti-ketoprofene-05022015','comunicati/a8ccfd97450a0b9dd8371cd3d2dd18c7-Screen Shot 2016-01-02 at 16.46.13.png','Nota Informativa Importante sui medicinali contenenti Ketoprofene (05/02/2015)','<p>Nota Informativa Importante sui medicinali contenenti Ketoprofene (05/02/2015)</p>','1','2016-01-03 10:40:27','2016-01-03 10:51:16'),
	(2,'Seconda Nota Informativa Importante sui medicinali contenenti Ketoprofene (05/02/2015)','seconda-nota-informativa-importante-sui-medicinali-contenenti-ketoprofene-05022015','','Nota Informativa Importante sui medicinali contenenti Ketoprofene (05/02/2015)','<p>Nota Informativa Importante sui medicinali contenenti Ketoprofene (05/02/2015)<br></p>','1','2016-01-03 10:53:08','2016-01-03 10:53:08'),
	(3,'Terza Nota Informativa Importante sui medicinali contenenti Ketoprofene (05/02/2015)','terza-nota-informativa-importante-sui-medicinali-contenenti-ketoprofene-05022015','','Nota Informativa Importante sui medicinali contenenti Ketoprofene (05/02/2015)','<p>Nota Informativa Importante sui medicinali contenenti Ketoprofene (05/02/2015)<br></p>','1','2016-01-03 10:53:26','2016-01-03 10:53:26');

/*!40000 ALTER TABLE `comunicati` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contenuti
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contenuti`;

CREATE TABLE `contenuti` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descrizione` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pagina_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `contenuti` WRITE;
/*!40000 ALTER TABLE `contenuti` DISABLE KEYS */;

INSERT INTO `contenuti` (`id`, `descrizione`, `slug`, `pagina_id`, `created_at`, `updated_at`)
VALUES
	(1,'Home Blocco Ibi Export','home_ibi_export_box',1,'2016-01-03 14:43:47','2016-01-03 14:43:47'),
	(2,'Home Ibisqus Ospedale Box','home_ibisqus_ospedale_box',1,'2016-01-04 15:24:18','2016-01-04 15:24:18');

/*!40000 ALTER TABLE `contenuti` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contenuti_translations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contenuti_translations`;

CREATE TABLE `contenuti_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contenuti_id` int(10) unsigned NOT NULL,
  `testo` longtext COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contenuti_translations_contenuti_id_locale_unique` (`contenuti_id`,`locale`),
  KEY `contenuti_translations_locale_index` (`locale`),
  CONSTRAINT `contenuti_translations_contenuti_id_foreign` FOREIGN KEY (`contenuti_id`) REFERENCES `contenuti` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `contenuti_translations` WRITE;
/*!40000 ALTER TABLE `contenuti_translations` DISABLE KEYS */;

INSERT INTO `contenuti_translations` (`id`, `contenuti_id`, `testo`, `locale`)
VALUES
	(1,1,'<p>ITA2 : - &nbsp;Ibi è oggi presente in più di 30 Paesi con un’esportazione di tutta la gamma dei suoi prodotti pari ai 2/3 della produzione. Il mercato estero riveste un ruolo molto importante: le esportazioni infatti sono intorno all’80% del fatturato.</p>','it'),
	(2,1,'<p>ENG2 : - Ibi è oggi presente in più di 30 Paesi con un’esportazione di tutta la gamma dei suoi prodotti pari ai 2/3 della produzione. Il mercato estero riveste un ruolo molto importante: le esportazioni infatti sono intorno all’80% del fatturato.</p>','en'),
	(3,2,'<p>ITA : A quasi 100 anni dalla data della sua fondazione l’Istituto Biochimico Italiano ha intrapreso una strategia di crescita e di rinnovamento con l’obiettivo di competere a livello internazionale.<br></p>','it'),
	(4,2,'<p>ENG :&nbsp;A quasi 100 anni dalla data della sua fondazione l’Istituto Biochimico Italiano ha intrapreso una strategia di crescita e di rinnovamento con l’obiettivo di competere a livello internazionale.</p>','en');

/*!40000 ALTER TABLE `contenuti_translations` ENABLE KEYS */;
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


# Dump of table languages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `languages`;

CREATE TABLE `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;

INSERT INTO `languages` (`id`, `label`, `slug`, `locale`, `created_at`, `updated_at`)
VALUES
	(1,'Italiano','ITA','it','2016-01-03 13:29:49','2016-01-03 13:29:49'),
	(2,'English','ENG','en','2016-01-03 13:30:02','2016-01-03 13:30:02');

/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
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
	('2015_12_30_163602_create_prodotti_paesi_table',4),
	('2016_01_01_143203_create_news_table',5),
	('2016_01_01_143241_create_posizioni_aperte_table',5),
	('2016_01_01_143300_create_candidature_table',6),
	('2016_01_02_175202_create_comunicati_table',7),
	('2016_01_02_175219_create_schede_segnalazione_table',7),
	('2016_01_03_122208_create_languages_table',8),
	('2016_01_03_123117_create_pages_table',9),
	('2016_01_03_132508_create_contenuti_table',10),
	('2016_01_04_112641_create_versions_table',11),
	('2016_01_04_132641_add_reason',11);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table news
# ------------------------------------------------------------

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titolo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `immagine_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descrizione` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `testo` longtext COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;

INSERT INTO `news` (`id`, `titolo`, `slug`, `immagine_path`, `descrizione`, `testo`, `active`, `created_at`, `updated_at`)
VALUES
	(1,'La prima news','la-prima-news','news/ba288ff624cb06188aea6918572662e4-NYC-by-Bicycle-1 2.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque alias, quo..Doloremque alias, quo..','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque alias, quo..Doloremque alias, quo..</p><p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque alias, quo..Doloremque alias, quo..</p><p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque alias, quo..Doloremque alias, quo..<br></p>','1','2016-01-02 11:53:28','2016-01-02 11:58:10'),
	(2,'La seconda news','la-seconda-news','news/30a5a8c345771da99039d1de941597a4-Fotolia_43117675_M 2.jpg','La seconda news La seconda news La seconda news La seconda news La seconda news','<p>La seconda news La seconda news La seconda news La seconda news La seconda news</p><p><br></p><p>La seconda news La seconda news La seconda news La seconda news La seconda news</p><p><br></p><p>La seconda news La seconda news La seconda news La seconda news La seconda news<br></p>','1','2016-01-02 11:59:28','2016-01-02 11:59:29'),
	(3,'La terza news','la-terza-news','news/7aa20f5dc9aee91cd3ad1ce5651c87f0-Fotolia_32505268_M 2.jpg','La terza news La terza news La terza news La terza news','<p>La terza news La terza news La terza news La terza news</p><p>La terza news La terza news La terza news La terza news</p><p>La terza news La terza news La terza news La terza news</p><p>La terza news La terza news La terza news La terza news<br></p>','1','2016-01-02 12:00:03','2016-01-02 12:00:04');

/*!40000 ALTER TABLE `news` ENABLE KEYS */;
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


# Dump of table pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;

INSERT INTO `pages` (`id`, `name`, `slug`, `created_at`, `updated_at`)
VALUES
	(1,'Index','index','2016-01-03 13:15:19','2016-01-03 13:16:12'),
	(2,'Chi Siamo','chi-siamo','2016-01-03 13:16:29','2016-01-03 13:16:57'),
	(3,'Prodotti Export','prodotti-export','2016-01-03 13:19:25','2016-01-03 13:19:25'),
	(4,'Prodotti Ibisqus','prodotti-ibisqus','2016-01-03 13:19:44','2016-01-03 13:19:44'),
	(5,'Prodotti Italia','prodotti-italia','2016-01-03 13:19:56','2016-01-03 13:19:56'),
	(6,'Ibi Toll Manufacturer','ibi-toll-manufacturer','2016-01-03 13:20:12','2016-01-03 13:20:12'),
	(7,'Ricerca Innovazione','ricerca-innovazione','2016-01-03 13:20:28','2016-01-03 13:20:28'),
	(8,'Contatti','contatti','2016-01-03 13:21:03','2016-01-03 13:21:03'),
	(9,'Lavora Con Noi','lavora-con-noi','2016-01-03 13:21:16','2016-01-03 13:21:16'),
	(10,'Farmaco Vigilanza','farmaco-vigilanza','2016-01-03 13:21:51','2016-01-03 13:21:51'),
	(11,'Ibi Export','ibi-export','2016-01-03 13:22:05','2016-01-03 13:22:05'),
	(12,'Ibi Italia','ibi-italia','2016-01-03 13:22:13','2016-01-03 13:22:13'),
	(13,'Ibisqus ospedale','ibisqus-ospedale','2016-01-03 13:22:27','2016-01-03 13:22:27');

/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
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


# Dump of table posizioni_aperte
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posizioni_aperte`;

CREATE TABLE `posizioni_aperte` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titolo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `sede` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descrizione` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `posizioni_aperte` WRITE;
/*!40000 ALTER TABLE `posizioni_aperte` DISABLE KEYS */;

INSERT INTO `posizioni_aperte` (`id`, `titolo`, `slug`, `sede`, `descrizione`, `active`, `created_at`, `updated_at`)
VALUES
	(1,'HUMAN RESOURCES SPECIALIST	(RIF. HRS)','human-resources-specialistrif-hrs-heppenheim-lt-germany','Heppenheim (LT) - GERMANY','Piccola descrizione riguardo la figura ricercata per questa posizione, con i principali requisiti richiesti ed eventualmente alcune delle mansioni di cui si dovrà occupare.','1','2016-01-02 11:21:34','2016-01-02 11:32:53'),
	(2,'Posizione due','posizione-due-la-seconda-sede','La seconda sede','Piccola descrizione riguardo la figura ricercata per questa posizione, con i principali requisiti richiesti ed eventualmente alcune delle mansioni di cui si dovrà occupare.','1','2016-01-02 11:22:58','2016-01-02 11:22:58'),
	(3,'Posizione tre','posizione-tre-la-terza-sede','La terza sede','Piccola descrizione riguardo la figura ricercata per questa posizione, con i principali requisiti richiesti ed eventualmente alcune delle mansioni di cui si dovrà occupare.','1','2016-01-02 11:23:22','2016-01-02 11:31:37'),
	(4,'Posizione quattro','posizione-quattro-la-quarta-sede','La quarta sede','Piccola descrizione riguardo la figura ricercata per questa posizione, con i principali requisiti richiesti ed eventualmente alcune delle mansioni di cui si dovrà occupare.','1','2016-01-02 11:23:37','2016-01-02 11:31:27');

/*!40000 ALTER TABLE `posizioni_aperte` ENABLE KEYS */;
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
	(23,1),
	(24,1),
	(25,1),
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
	(23,2),
	(24,2),
	(25,2),
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


# Dump of table schede_segnalazione
# ------------------------------------------------------------

DROP TABLE IF EXISTS `schede_segnalazione`;

CREATE TABLE `schede_segnalazione` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titolo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `allegato` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `schede_segnalazione` WRITE;
/*!40000 ALTER TABLE `schede_segnalazione` DISABLE KEYS */;

INSERT INTO `schede_segnalazione` (`id`, `titolo`, `allegato`, `active`, `created_at`, `updated_at`)
VALUES
	(1,'Modulo segnalazione operatore sanitario e paziente (AUSTRIACO)','schede/a0b6830d689ad6980d6292f833fed0b3-Screen Shot 2015-12-25 at 20.14.36.png','1','2016-01-03 11:23:23','2016-01-03 11:23:24'),
	(2,'Modulo segnalazione operatore sanitario e paziente (CECO)','schede/b478aded6bc3d830ef257d47ad9a124d-Screen Shot 2015-12-25 at 20.14.36.png','1','2016-01-03 11:24:04','2016-01-03 11:24:05'),
	(3,'Modulo segnalazione operatore sanitario e paziente (TEDESCO)','schede/a31229f6c381d5f0c79f2db9d1b18092-Screen Shot 2015-12-25 at 20.14.36.png','1','2016-01-03 11:24:32','2016-01-03 11:24:34'),
	(4,'Modulo segnalazione operatore sanitario e paziente (ITALIANO)','schede/f75eab0f84ffd4e092b07589fc26df44-Screen Shot 2015-12-25 at 20.14.36.png','1','2016-01-03 11:24:55','2016-01-03 11:24:56');

/*!40000 ALTER TABLE `schede_segnalazione` ENABLE KEYS */;
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
	(2,'System','Dev','forge405@gmail.com','$2y$10$Gw4v7ieIO2.RL2u7wQnDUOr.i7pIss1u/nlj/iCNzeMEWVd7r6DMm',NULL,0,'yJAFapa8iHp5DK9lpeoEBEovoxNGhGuojwUl7zo2bOX3EeXaS8ib41MCGKPc','2016-01-02 18:39:29','2015-12-29 11:49:15','2016-01-02 17:39:28'),
	(3,'Stefania','Testa','stefania@ibi-lorenzini.it','$2y$10$l8RdsxidsjNnwfk4ZNoxx.MPzK5vih1g8OVvD2mULDCYNeggkTow.',NULL,1,NULL,'2016-01-02 16:00:02','2015-12-31 17:15:08','2016-01-02 15:00:02');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table versions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `versions`;

CREATE TABLE `versions` (
  `version_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `versionable_id` int(11) NOT NULL,
  `versionable_type` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `model_data` blob NOT NULL,
  `reason` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`version_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `versions` WRITE;
/*!40000 ALTER TABLE `versions` DISABLE KEYS */;

INSERT INTO `versions` (`version_id`, `versionable_id`, `versionable_type`, `user_id`, `active`, `model_data`, `reason`, `created_at`, `updated_at`)
VALUES
	(1,2,'Ibi\\Models\\ContenutiTranslation',2,0,X'613A343A7B733A323A226964223B693A323B733A31323A22636F6E74656E7574695F6964223B693A313B733A353A22746573746F223B733A3235393A223C703E454E47203A202D2D2049626920C3A8206F6767692070726573656E746520696E207069C3B920646920333020506165736920636F6E20756EE280996573706F7274617A696F6E65206469207475747461206C612067616D6D61206465692073756F692070726F646F747469207061726920616920322F332064656C6C612070726F64757A696F6E652E20496C206D65726361746F2065737465726F207269766573746520756E2072756F6C6F206D6F6C746F20696D706F7274616E74653A206C65206573706F7274617A696F6E6920696E666174746920736F6E6F20696E746F726E6F20616C6CE280993830252064656C2066617474757261746F2E3C2F703E223B733A363A226C6F63616C65223B733A323A22656E223B7D',NULL,'2016-01-04 12:20:45','2016-01-04 12:20:45'),
	(2,1,'Ibi\\Models\\ContenutiTranslation',2,0,X'613A343A7B733A323A226964223B693A313B733A31323A22636F6E74656E7574695F6964223B693A313B733A353A22746573746F223B733A3236353A223C703E495441203A202D2D20266E6273703B49626920C3A8206F6767692070726573656E746520696E207069C3B920646920333020506165736920636F6E20756EE280996573706F7274617A696F6E65206469207475747461206C612067616D6D61206465692073756F692070726F646F747469207061726920616920322F332064656C6C612070726F64757A696F6E652E20496C206D65726361746F2065737465726F207269766573746520756E2072756F6C6F206D6F6C746F20696D706F7274616E74653A206C65206573706F7274617A696F6E6920696E666174746920736F6E6F20696E746F726E6F20616C6CE280993830252064656C2066617474757261746F2E3C2F703E223B733A363A226C6F63616C65223B733A323A226974223B7D',NULL,'2016-01-04 12:20:45','2016-01-04 12:20:45'),
	(3,2,'Ibi\\Models\\ContenutiTranslation',2,0,X'613A343A7B733A323A226964223B693A323B733A31323A22636F6E74656E7574695F6964223B693A313B733A353A22746573746F223B733A3235383A223C703E454E47203A202D2049626920C3A8206F6767692070726573656E746520696E207069C3B920646920333020506165736920636F6E20756EE280996573706F7274617A696F6E65206469207475747461206C612067616D6D61206465692073756F692070726F646F747469207061726920616920322F332064656C6C612070726F64757A696F6E652E20496C206D65726361746F2065737465726F207269766573746520756E2072756F6C6F206D6F6C746F20696D706F7274616E74653A206C65206573706F7274617A696F6E6920696E666174746920736F6E6F20696E746F726E6F20616C6CE280993830252064656C2066617474757261746F2E3C2F703E223B733A363A226C6F63616C65223B733A323A22656E223B7D',NULL,'2016-01-04 12:22:17','2016-01-04 12:22:17'),
	(4,1,'Ibi\\Models\\ContenutiTranslation',2,0,X'613A343A7B733A323A226964223B693A313B733A31323A22636F6E74656E7574695F6964223B693A313B733A353A22746573746F223B733A3236343A223C703E495441203A202D20266E6273703B49626920C3A8206F6767692070726573656E746520696E207069C3B920646920333020506165736920636F6E20756EE280996573706F7274617A696F6E65206469207475747461206C612067616D6D61206465692073756F692070726F646F747469207061726920616920322F332064656C6C612070726F64757A696F6E652E20496C206D65726361746F2065737465726F207269766573746520756E2072756F6C6F206D6F6C746F20696D706F7274616E74653A206C65206573706F7274617A696F6E6920696E666174746920736F6E6F20696E746F726E6F20616C6CE280993830252064656C2066617474757261746F2E3C2F703E223B733A363A226C6F63616C65223B733A323A226974223B7D',NULL,'2016-01-04 12:22:17','2016-01-04 12:22:17'),
	(5,2,'Ibi\\Models\\ContenutiTranslation',2,0,X'613A343A7B733A323A226964223B733A313A2232223B733A31323A22636F6E74656E7574695F6964223B733A313A2231223B733A353A22746573746F223B733A3235393A223C703E454E4732203A202D2049626920C3A8206F6767692070726573656E746520696E207069C3B920646920333020506165736920636F6E20756EE280996573706F7274617A696F6E65206469207475747461206C612067616D6D61206465692073756F692070726F646F747469207061726920616920322F332064656C6C612070726F64757A696F6E652E20496C206D65726361746F2065737465726F207269766573746520756E2072756F6C6F206D6F6C746F20696D706F7274616E74653A206C65206573706F7274617A696F6E6920696E666174746920736F6E6F20696E746F726E6F20616C6CE280993830252064656C2066617474757261746F2E3C2F703E223B733A363A226C6F63616C65223B733A323A22656E223B7D',NULL,'2016-01-04 14:56:23','2016-01-04 14:56:23'),
	(6,1,'Ibi\\Models\\ContenutiTranslation',2,0,X'613A343A7B733A323A226964223B733A313A2231223B733A31323A22636F6E74656E7574695F6964223B733A313A2231223B733A353A22746573746F223B733A3236353A223C703E49544132203A202D20266E6273703B49626920C3A8206F6767692070726573656E746520696E207069C3B920646920333020506165736920636F6E20756EE280996573706F7274617A696F6E65206469207475747461206C612067616D6D61206465692073756F692070726F646F747469207061726920616920322F332064656C6C612070726F64757A696F6E652E20496C206D65726361746F2065737465726F207269766573746520756E2072756F6C6F206D6F6C746F20696D706F7274616E74653A206C65206573706F7274617A696F6E6920696E666174746920736F6E6F20696E746F726E6F20616C6CE280993830252064656C2066617474757261746F2E3C2F703E223B733A363A226C6F63616C65223B733A323A226974223B7D',NULL,'2016-01-04 14:56:23','2016-01-04 14:56:23'),
	(7,3,'Ibi\\Models\\ContenutiTranslation',2,0,X'613A343A7B733A363A226C6F63616C65223B733A323A226974223B733A353A22746573746F223B733A3231333A223C703E495441203A20412071756173692031303020616E6E692064616C6C6120646174612064656C6C612073756120666F6E64617A696F6E65206CE28099497374697475746F2042696F6368696D69636F204974616C69616E6F20686120696E747261707265736F20756E612073747261746567696120646920637265736369746120652064692072696E6E6F76616D656E746F20636F6E206CE280996F626965747469766F20646920636F6D7065746572652061206C6976656C6C6F20696E7465726E617A696F6E616C652E3C62723E3C2F703E223B733A31323A22636F6E74656E7574695F6964223B693A323B733A323A226964223B693A333B7D',NULL,'2016-01-04 15:24:18','2016-01-04 15:24:18'),
	(8,4,'Ibi\\Models\\ContenutiTranslation',2,0,X'613A343A7B733A363A226C6F63616C65223B733A323A22656E223B733A353A22746573746F223B733A3231343A223C703E454E47203A266E6273703B412071756173692031303020616E6E692064616C6C6120646174612064656C6C612073756120666F6E64617A696F6E65206CE28099497374697475746F2042696F6368696D69636F204974616C69616E6F20686120696E747261707265736F20756E612073747261746567696120646920637265736369746120652064692072696E6E6F76616D656E746F20636F6E206CE280996F626965747469766F20646920636F6D7065746572652061206C6976656C6C6F20696E7465726E617A696F6E616C652E3C2F703E223B733A31323A22636F6E74656E7574695F6964223B693A323B733A323A226964223B693A343B7D',NULL,'2016-01-04 15:24:18','2016-01-04 15:24:18');

/*!40000 ALTER TABLE `versions` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
