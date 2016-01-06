# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.42)
# Database: ibi
# Generation Time: 2016-01-06 17:48:06 +0000
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
  `messaggio` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `cv_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `candidature` WRITE;
/*!40000 ALTER TABLE `candidature` DISABLE KEYS */;

INSERT INTO `candidature` (`id`, `posizione_id`, `nome`, `cognome`, `email`, `messaggio`, `cv_path`, `created_at`, `updated_at`)
VALUES
	(1,3,'Sidrit','Trandafili','forge405@gmail.com','Piccola descrizione riguardo la figura ricercata per questa posizione, con i principali requisiti richiesti ed eventualmente alcune delle mansioni di cui si dovrà occupare.','cv/3cfbc0861f6bb36822cd4fe26e6fcd7e-The Martian - Andy Weir.pdf','2016-01-05 14:10:11','2016-01-05 14:10:12'),
	(2,1,'Anestesiologica','Trandafili','forge405@gmail.com','a','cv/7c33e455f2e9613b2b83ba9480e12995-header-home.jpg','2016-01-05 14:29:16','2016-01-05 14:29:17');

/*!40000 ALTER TABLE `candidature` ENABLE KEYS */;
UNLOCK TABLES;


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
	(2,'Home Ibisqus Ospedale Box','home_ibisqus_ospedale_box',1,'2016-01-04 15:24:18','2016-01-04 15:24:18'),
	(3,'Home Articolo Principale','home_articolo_principale',1,'2016-01-04 17:51:19','2016-01-04 17:51:19');

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
	(4,2,'<p>ENG :&nbsp;A quasi 100 anni dalla data della sua fondazione l’Istituto Biochimico Italiano ha intrapreso una strategia di crescita e di rinnovamento con l’obiettivo di competere a livello internazionale.</p>','en'),
	(5,3,'<h2 style=\"font-family: Lato; font-weight: 700; color: rgb(0, 80, 154); margin: 20px 0px 5px; font-size: 32px;\">IBI: 90 anni di esperienza</h2><h3 style=\"font-family: Lato; color: rgb(102, 102, 102); margin: 5px 0px 30px; font-size: 16px; text-transform: uppercase;\">LA NOSTRA STORIA, I NOSTRI VALORI</h3><p><img src=\"http://ibi.dev/img/home-content-img.jpg\" class=\"img-responsive\" style=\"color: rgb(102, 102, 102); font-family: Lato; font-size: 14px; line-height: 20px;\"></p><p style=\"margin: 30px auto; text-align: justify; font-size: 16px; color: rgb(102, 102, 102); font-family: Lato;\">L’Istituto Biochimico Italiano, Ibi, fondato dal Prof. Giovanni Lorenzini, è un’azienda farmaceutica di grande tradizione scientifica presente sul mercato italiano da più di 90 anni, con obiettivi di ricerca, innovazione e produzione. Oltre la tradizione storica aziendale, le nuove tecnologie applicate e un’attenta cura nella produzione, fanno della Ibi sinonimo di affidabilità e garanzia di alta qualità nei paesi in cui l’Azienda è presente.</p><p style=\"margin: 30px auto; text-align: justify; font-size: 16px; color: rgb(102, 102, 102); font-family: Lato;\">Ibi dedica la propria attività allo sviluppo di nuove applicazioni terapeutiche per offrire soluzioni alternative a medici e pazienti ed è oggi una realtà consolidata in Italia, Europa, Asia, Australia e US.</p><p style=\"margin: 30px auto; text-align: justify; font-size: 16px; color: rgb(102, 102, 102); font-family: Lato;\">La sede si trova ad Aprilia dove, oltre allo stabilimento di produzione, sono collocate tutte le funzioni aziendali. La produzione e il controllo qualità sono il core business dell’Azienda, a cui si affiancano Ricerca e Sviluppo, Farmacovigilanza...</p>','it'),
	(6,3,'<h2 style=\"font-family: Lato; font-weight: 700; color: rgb(0, 80, 154); margin: 20px 0px 5px; font-size: 32px;\">IBI: 90 anni di esperienza</h2><h3 style=\"font-family: Lato; color: rgb(102, 102, 102); margin: 5px 0px 30px; font-size: 16px; text-transform: uppercase;\">LA NOSTRA STORIA, I NOSTRI VALORI</h3><p><img src=\"http://ibi.dev/img/home-content-img.jpg\" class=\"img-responsive\" style=\"color: rgb(102, 102, 102); font-family: Lato; font-size: 14px; line-height: 20px;\"></p><p style=\"margin: 30px auto; text-align: justify; font-size: 16px; color: rgb(102, 102, 102); font-family: Lato;\">L’Istituto Biochimico Italiano, Ibi, fondato dal Prof. Giovanni Lorenzini, è un’azienda farmaceutica di grande tradizione scientifica presente sul mercato italiano da più di 90 anni, con obiettivi di ricerca, innovazione e produzione. Oltre la tradizione storica aziendale, le nuove tecnologie applicate e un’attenta cura nella produzione, fanno della Ibi sinonimo di affidabilità e garanzia di alta qualità nei paesi in cui l’Azienda è presente.</p><p style=\"margin: 30px auto; text-align: justify; font-size: 16px; color: rgb(102, 102, 102); font-family: Lato;\">Ibi dedica la propria attività allo sviluppo di nuove applicazioni terapeutiche per offrire soluzioni alternative a medici e pazienti ed è oggi una realtà consolidata in Italia, Europa, Asia, Australia e US.</p><p style=\"margin: 30px auto; text-align: justify; font-size: 16px; color: rgb(102, 102, 102); font-family: Lato;\">La sede si trova ad Aprilia dove, oltre allo stabilimento di produzione, sono collocate tutte le funzioni aziendali. La produzione e il controllo qualità sono il core business dell’Azienda, a cui si affiancano Ricerca e Sviluppo, Farmacovigilanza...</p>','en');

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


# Dump of table menu_items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menu_items`;

CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;

INSERT INTO `menu_items` (`id`, `slug`, `created_at`, `updated_at`)
VALUES
	(4,'chi-siamo','2016-01-06 00:08:14','2016-01-06 00:08:14'),
	(5,'prodotti','2016-01-06 00:08:30','2016-01-06 00:08:30'),
	(6,'toll-development-manufacturer','2016-01-06 00:09:09','2016-01-06 00:09:09'),
	(7,'ricerca-innovazione','2016-01-06 00:09:41','2016-01-06 00:09:41'),
	(8,'contatti','2016-01-06 00:09:59','2016-01-06 00:09:59'),
	(9,'informazioni','2016-01-06 00:10:23','2016-01-06 00:21:08'),
	(10,'lavora-con-noi','2016-01-06 00:10:40','2016-01-06 00:10:40');

/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table menu_items_translations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menu_items_translations`;

CREATE TABLE `menu_items_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_items_id` int(10) unsigned NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menu_items_translations_menu_items_id_locale_unique` (`menu_items_id`,`locale`),
  KEY `menu_items_translations_locale_index` (`locale`),
  CONSTRAINT `menu_items_translations_menu_items_id_foreign` FOREIGN KEY (`menu_items_id`) REFERENCES `menu_items` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `menu_items_translations` WRITE;
/*!40000 ALTER TABLE `menu_items_translations` DISABLE KEYS */;

INSERT INTO `menu_items_translations` (`id`, `menu_items_id`, `label`, `locale`)
VALUES
	(3,4,'Chi Siamo','it'),
	(4,4,'About Us','en'),
	(5,5,'Prodotti','it'),
	(6,5,'Products','en'),
	(7,6,'Toll Development Manufacturer','it'),
	(8,6,'Toll Development Manufacturer','en'),
	(9,7,'Ricerca e Innovazione','it'),
	(10,7,'Research and Innovation','en'),
	(11,8,'Contatti','it'),
	(12,8,'Contacts','en'),
	(13,9,'Informazioni','it'),
	(14,9,'Information','en'),
	(15,10,'Lavora Con Noi','it'),
	(16,10,'Work With Us','en');

/*!40000 ALTER TABLE `menu_items_translations` ENABLE KEYS */;
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
	('2016_01_04_132641_add_reason',11),
	('2016_01_05_095701_create_sliders_table',12),
	('2016_01_05_225020_create_menu_items_table',13),
	('2016_01_06_090402_create_provincie_table',14),
	('2016_01_06_091528_create_specializzazioni_table',15),
	('2016_01_06_110235_create_profiles_table',16);

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



# Dump of table profiles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `profiles`;

CREATE TABLE `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ruolo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `farmacia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `farmacia_posizione` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anno_laurea` int(11) NOT NULL,
  `numero_albo` int(11) NOT NULL,
  `provincia_albo` int(11) NOT NULL,
  `specializzazione` int(11) NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `luogo_nascita` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_nascita` date NOT NULL,
  `indirizzo_attivita` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `citta_attivita` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provincia_attivita` int(11) NOT NULL,
  `cap_attivita` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `indirizzo_residenza` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `citta_residenza` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provincia_residenza` int(11) NOT NULL,
  `cap_residenza` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notifica_spedita` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;

INSERT INTO `profiles` (`id`, `user_id`, `ruolo`, `farmacia`, `farmacia_posizione`, `anno_laurea`, `numero_albo`, `provincia_albo`, `specializzazione`, `telefono`, `luogo_nascita`, `data_nascita`, `indirizzo_attivita`, `citta_attivita`, `provincia_attivita`, `cap_attivita`, `indirizzo_residenza`, `citta_residenza`, `provincia_residenza`, `cap_residenza`, `notifica_spedita`, `created_at`, `updated_at`)
VALUES
	(1,6,'farmacista','La mia farmacia','collaboratore',2010,1235,79,7,'1244534','New york','1984-07-16','Via dei volsci','Roma',79,'00185','Via dei caudini 9','Roma',79,'00185',0,'2016-01-06 11:56:02','2016-01-06 17:44:51');

/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table provincie
# ------------------------------------------------------------

DROP TABLE IF EXISTS `provincie`;

CREATE TABLE `provincie` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sigla` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `provincie` WRITE;
/*!40000 ALTER TABLE `provincie` DISABLE KEYS */;

INSERT INTO `provincie` (`id`, `nome`, `sigla`)
VALUES
	(1,'Agrigento','AG'),
	(2,'Alessandria','AL'),
	(3,'Ancona','AN'),
	(4,'Aosta','AO'),
	(5,'Arezzo','AR'),
	(6,'Ascoli Piceno','AP'),
	(7,'Asti','AT'),
	(8,'Avellino','AV'),
	(9,'Bari','BA'),
	(10,'Belluno','BL'),
	(11,'Benevento','BN'),
	(12,'Bergamo','BG'),
	(13,'Biella','BI'),
	(14,'Bologna','BO'),
	(15,'Bolzano','BZ'),
	(16,'Brescia','BS'),
	(17,'Brindisi','BR'),
	(18,'Cagliari','CA'),
	(19,'Caltanissetta','CL'),
	(20,'Campobasso','CB'),
	(21,'Caserta','CE'),
	(22,'Catania','CT'),
	(23,'Catanzaro','CZ'),
	(24,'Chieti','CH'),
	(25,'Como','CO'),
	(26,'Cosenza','CS'),
	(27,'Cremona','CR'),
	(28,'Crotone','KR'),
	(29,'Cuneo','CN'),
	(30,'Enna','EN'),
	(31,'Ferrara','FE'),
	(32,'Firenze','FI'),
	(33,'Foggia','FG'),
	(34,'Forlì-Cesena','FC'),
	(35,'Frosinone','FR'),
	(36,'Genova','GE'),
	(37,'Gorizia','GO'),
	(38,'Grosseto','GR'),
	(39,'Imperia','IM'),
	(40,'Isernia','IS'),
	(41,'La Spezia','SP'),
	(42,'L\'Aquila','AQ'),
	(43,'Latina','LT'),
	(44,'Lecce','LE'),
	(45,'Lecco','LC'),
	(46,'Livorno','LI'),
	(47,'Lodi','LO'),
	(48,'Lucca','LU'),
	(49,'Macerata','MC'),
	(50,'Mantova','MN'),
	(51,'Massa-Carrara','MS'),
	(52,'Matera','MT'),
	(53,'Messina','ME'),
	(54,'Milano','MI'),
	(55,'Modena','MO'),
	(56,'Napoli','NA'),
	(57,'Novara','NO'),
	(58,'Nuoro','NU'),
	(59,'Oristano','OR'),
	(60,'Padova','PD'),
	(61,'Palermo','PA'),
	(62,'Parma','PR'),
	(63,'Pavia','PV'),
	(64,'Perugia','PG'),
	(65,'Pesaro e Urbino','PU'),
	(66,'Pescara','PE'),
	(67,'Piacenza','PC'),
	(68,'Pisa','PI'),
	(69,'Pistoia','PT'),
	(70,'Pordenone Friuli-Venezia','PN'),
	(71,'Potenza','PZ'),
	(72,'Prato','PO'),
	(73,'Ragusa','RG'),
	(74,'Ravenna','RA'),
	(75,'Reggio Calabria','RC'),
	(76,'Reggio Emilia','RE'),
	(77,'Rieti','RI'),
	(78,'Rimini','RN'),
	(79,'Roma','RM'),
	(80,'Rovigo','RO'),
	(81,'Salerno','SA'),
	(82,'Sassari','SS'),
	(83,'Savona','SV'),
	(84,'Siena','SI'),
	(85,'Siracusa','SR'),
	(86,'Sondrio','SO'),
	(87,'Taranto','TA'),
	(88,'Teramo','TE'),
	(89,'Terni','TR'),
	(90,'Torino','TO'),
	(91,'Trapani','TP'),
	(92,'Trento','TN'),
	(93,'Treviso','TV'),
	(94,'Trieste','TS'),
	(95,'Udine','UD'),
	(96,'Varese','VA'),
	(97,'Venezia','VE'),
	(98,'Verbano-Cusio-Ossola','VB'),
	(99,'Vercelli','VC'),
	(100,'Verona','VR'),
	(101,'Vibo Valentia','VV'),
	(102,'Vicenza','VI'),
	(103,'Viterbo','VT');

/*!40000 ALTER TABLE `provincie` ENABLE KEYS */;
UNLOCK TABLES;


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


# Dump of table slider_translations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `slider_translations`;

CREATE TABLE `slider_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slider_id` int(10) unsigned NOT NULL,
  `titolo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sottotitolo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slider_translations_slider_id_locale_unique` (`slider_id`,`locale`),
  KEY `slider_translations_locale_index` (`locale`),
  CONSTRAINT `slider_translations_slider_id_foreign` FOREIGN KEY (`slider_id`) REFERENCES `sliders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `slider_translations` WRITE;
/*!40000 ALTER TABLE `slider_translations` DISABLE KEYS */;

INSERT INTO `slider_translations` (`id`, `slider_id`, `titolo`, `sottotitolo`, `locale`)
VALUES
	(1,1,'Ibi: 90 anni di esperienza','Affidabilità di garanzia e alta qualità','it'),
	(2,1,'Ibi: 90 years of experience','Reliability and quality assurance','en'),
	(3,2,'Ricerca e innovazione','All\'avanguardia nella nanomedicina','it'),
	(4,2,'Research and innovation','On the forefront of nanomedicine','en');

/*!40000 ALTER TABLE `slider_translations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sliders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sliders`;

CREATE TABLE `sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `immagine` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;

INSERT INTO `sliders` (`id`, `link`, `immagine`, `active`, `created_at`, `updated_at`)
VALUES
	(1,'/chi-siamo','slider/26d6f86e587059e8612ef4324d51fd77-header-home.jpg',1,'2016-01-05 12:26:10','2016-01-05 12:26:11'),
	(2,'/ricerca-innovazione','slider/68cddfa76249009b520bac7ab5c50fc7-slide02.jpg',1,'2016-01-05 12:28:45','2016-01-05 12:34:09');

/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table specializzazioni
# ------------------------------------------------------------

DROP TABLE IF EXISTS `specializzazioni`;

CREATE TABLE `specializzazioni` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `specializzazioni` WRITE;
/*!40000 ALTER TABLE `specializzazioni` DISABLE KEYS */;

INSERT INTO `specializzazioni` (`id`, `nome`)
VALUES
	(1,'Medicina Generale'),
	(2,'Allergologia'),
	(3,'Anatomia Patologica'),
	(4,'Andrologia'),
	(5,'Anestesiologia'),
	(6,'Angiologia'),
	(7,'Cardiologia'),
	(8,'Chirurgia'),
	(9,'Clinica Farmacologica'),
	(10,'Dermatologia'),
	(11,'Diabetologia'),
	(12,'Dietetica e Nutrizione'),
	(13,'Ematologia'),
	(14,'Endocrinologia'),
	(15,'Epatologia'),
	(16,'Epidemiologia'),
	(17,'Fisiologia'),
	(18,'Fisiopatologia Riprod. Umana'),
	(19,'Foniatria e Audiologia'),
	(20,'Gastroenterologia'),
	(21,'Genetica'),
	(22,'Geriatria'),
	(23,'Ginecologia e Ostetricia'),
	(24,'Igiene e Medicina preventiva'),
	(25,'Immunologia'),
	(26,'Infettivologia'),
	(27,'Medicina Interna'),
	(28,'Medicina Aeronautica'),
	(29,'Medicina del Lavoro'),
	(30,'Medicina di Comunità'),
	(31,'Medicina di Laboratorio'),
	(32,'Medicina Legale'),
	(33,'Medicina Nucleare'),
	(34,'Medicina Preventiva'),
	(35,'Medicina Sportiva'),
	(36,'Microbiologia'),
	(37,'Microbiol. Epidemiol. Infettiva'),
	(38,'Nefro-Urologia'),
	(39,'Neurologia'),
	(40,'Odontoiatria'),
	(41,'Oftalmologia'),
	(42,'Oncologia'),
	(43,'Organizz. Sanitaria e Sicurezza'),
	(44,'Ortopedia'),
	(45,'Otorinolaringoiatria'),
	(46,'Pediatria'),
	(47,'Pneumologia'),
	(48,'Pronto Soccorso'),
	(49,'Psichiatria e Psicoterapia'),
	(50,'Psicologia'),
	(51,'Radiologia'),
	(52,'Reumatologia'),
	(53,'Riabilitazione Motoria'),
	(54,'Tossicologia'),
	(55,'Urologia'),
	(56,'Venereologia');

/*!40000 ALTER TABLE `specializzazioni` ENABLE KEYS */;
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
	(5,3),
	(14,6);

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

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `active`, `remember_token`, `last_login`, `created_at`, `updated_at`)
VALUES
	(1,'IBI','Admin','info@ibi-lorenzini.it','$2y$10$Gw4v7ieIO2.RL2u7wQnDUOr.i7pIss1u/nlj/iCNzeMEWVd7r6DMm',1,'0dasrR4l2wyAcj3yoRz5c5zA69wzGiJWFn9tyilKAxD2XipwHoiTmuevM0cM','2016-01-06 10:31:30','2015-12-29 11:49:15','2015-12-31 17:07:36'),
	(2,'System','Dev','forge405@gmail.com','$2y$10$Gw4v7ieIO2.RL2u7wQnDUOr.i7pIss1u/nlj/iCNzeMEWVd7r6DMm',1,'dl8GvlB8Jb5eulliJluLUle4dN1fI7AawdCY3ejL26Yyiym46urj0mgamVCj','2016-01-06 17:41:01','2015-12-29 11:49:15','2016-01-06 16:41:01'),
	(3,'Stefania','Testa','stefania@ibi-lorenzini.it','$2y$10$l8RdsxidsjNnwfk4ZNoxx.MPzK5vih1g8OVvD2mULDCYNeggkTow.',1,NULL,'2016-01-02 16:00:02','2015-12-31 17:15:08','2016-01-02 15:00:02'),
	(6,'Sidrit','Trandafili','sidrit.trandafili@gmail.com','$2y$10$B.X54SjurPhm9b/XMqElOOpOn16ztMu1BLZOjY0LV.B1/mCsfYJMG',0,'Xsh7aq9jgVMWQKAq4iL07sc5dv1g7jHqd4HTsfGOredhB2Dlq53czNlvdnsP','2016-01-06 18:47:10','2016-01-06 11:56:02','2016-01-06 17:44:47');

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
	(8,4,'Ibi\\Models\\ContenutiTranslation',2,0,X'613A343A7B733A363A226C6F63616C65223B733A323A22656E223B733A353A22746573746F223B733A3231343A223C703E454E47203A266E6273703B412071756173692031303020616E6E692064616C6C6120646174612064656C6C612073756120666F6E64617A696F6E65206CE28099497374697475746F2042696F6368696D69636F204974616C69616E6F20686120696E747261707265736F20756E612073747261746567696120646920637265736369746120652064692072696E6E6F76616D656E746F20636F6E206CE280996F626965747469766F20646920636F6D7065746572652061206C6976656C6C6F20696E7465726E617A696F6E616C652E3C2F703E223B733A31323A22636F6E74656E7574695F6964223B693A323B733A323A226964223B693A343B7D',NULL,'2016-01-04 15:24:18','2016-01-04 15:24:18'),
	(9,5,'Ibi\\Models\\ContenutiTranslation',2,0,X'613A343A7B733A363A226C6F63616C65223B733A323A226974223B733A353A22746573746F223B733A313735313A223C6832207374796C653D22666F6E742D66616D696C793A204C61746F3B20666F6E742D7765696768743A203730303B20636F6C6F723A2072676228302C2038302C20313534293B206D617267696E3A203230707820307078203570783B20666F6E742D73697A653A20333270783B223E4942493A20393020616E6E6920646920657370657269656E7A613C2F68323E3C6833207374796C653D22666F6E742D66616D696C793A204C61746F3B20636F6C6F723A20726762283130322C203130322C20313032293B206D617267696E3A203570782030707820333070783B20666F6E742D73697A653A20313670783B20746578742D7472616E73666F726D3A207570706572636173653B223E4C41204E4F535452412053544F5249412C2049204E4F535452492056414C4F52493C2F68333E3C703E3C696D67207372633D22687474703A2F2F6962692E6465762F696D672F686F6D652D636F6E74656E742D696D672E6A70672220636C6173733D22696D672D726573706F6E7369766522207374796C653D22636F6C6F723A20726762283130322C203130322C20313032293B20666F6E742D66616D696C793A204C61746F3B20666F6E742D73697A653A20313470783B206C696E652D6865696768743A20323070783B223E3C2F703E3C70207374796C653D226D617267696E3A2033307078206175746F3B20746578742D616C69676E3A206A7573746966793B20666F6E742D73697A653A20313670783B20636F6C6F723A20726762283130322C203130322C20313032293B20666F6E742D66616D696C793A204C61746F3B223E4CE28099497374697475746F2042696F6368696D69636F204974616C69616E6F2C204962692C20666F6E6461746F2064616C2050726F662E2047696F76616E6E69204C6F72656E7A696E692C20C3A820756EE28099617A69656E6461206661726D6163657574696361206469206772616E64652074726164697A696F6E6520736369656E7469666963612070726573656E74652073756C206D65726361746F206974616C69616E6F206461207069C3B920646920393020616E6E692C20636F6E206F626965747469766920646920726963657263612C20696E6E6F76617A696F6E6520652070726F64757A696F6E652E204F6C747265206C612074726164697A696F6E652073746F7269636120617A69656E64616C652C206C65206E756F7665207465636E6F6C6F676965206170706C6963617465206520756EE28099617474656E74612063757261206E656C6C612070726F64757A696F6E652C2066616E6E6F2064656C6C61204962692073696E6F6E696D6F2064692061666669646162696C6974C3A0206520676172616E7A696120646920616C7461207175616C6974C3A0206E656920706165736920696E20637569206CE28099417A69656E646120C3A82070726573656E74652E3C2F703E3C70207374796C653D226D617267696E3A2033307078206175746F3B20746578742D616C69676E3A206A7573746966793B20666F6E742D73697A653A20313670783B20636F6C6F723A20726762283130322C203130322C20313032293B20666F6E742D66616D696C793A204C61746F3B223E49626920646564696361206C612070726F707269612061747469766974C3A020616C6C6F207376696C7570706F206469206E756F7665206170706C6963617A696F6E692074657261706575746963686520706572206F66667269726520736F6C757A696F6E6920616C7465726E61746976652061206D656469636920652070617A69656E746920656420C3A8206F67676920756E61207265616C74C3A020636F6E736F6C696461746120696E204974616C69612C204575726F70612C20417369612C204175737472616C696120652055532E3C2F703E3C70207374796C653D226D617267696E3A2033307078206175746F3B20746578742D616C69676E3A206A7573746966793B20666F6E742D73697A653A20313670783B20636F6C6F723A20726762283130322C203130322C20313032293B20666F6E742D66616D696C793A204C61746F3B223E4C6120736564652073692074726F766120616420417072696C696120646F76652C206F6C74726520616C6C6F2073746162696C696D656E746F2064692070726F64757A696F6E652C20736F6E6F20636F6C6C6F63617465207475747465206C652066756E7A696F6E6920617A69656E64616C692E204C612070726F64757A696F6E65206520696C20636F6E74726F6C6C6F207175616C6974C3A020736F6E6F20696C20636F726520627573696E6573732064656C6CE28099417A69656E64612C2061206375692073692061666669616E63616E6F20526963657263612065205376696C7570706F2C204661726D61636F766967696C616E7A612E2E2E3C2F703E223B733A31323A22636F6E74656E7574695F6964223B693A333B733A323A226964223B693A353B7D',NULL,'2016-01-04 17:51:20','2016-01-04 17:51:20'),
	(10,6,'Ibi\\Models\\ContenutiTranslation',2,0,X'613A343A7B733A363A226C6F63616C65223B733A323A22656E223B733A353A22746573746F223B733A313735313A223C6832207374796C653D22666F6E742D66616D696C793A204C61746F3B20666F6E742D7765696768743A203730303B20636F6C6F723A2072676228302C2038302C20313534293B206D617267696E3A203230707820307078203570783B20666F6E742D73697A653A20333270783B223E4942493A20393020616E6E6920646920657370657269656E7A613C2F68323E3C6833207374796C653D22666F6E742D66616D696C793A204C61746F3B20636F6C6F723A20726762283130322C203130322C20313032293B206D617267696E3A203570782030707820333070783B20666F6E742D73697A653A20313670783B20746578742D7472616E73666F726D3A207570706572636173653B223E4C41204E4F535452412053544F5249412C2049204E4F535452492056414C4F52493C2F68333E3C703E3C696D67207372633D22687474703A2F2F6962692E6465762F696D672F686F6D652D636F6E74656E742D696D672E6A70672220636C6173733D22696D672D726573706F6E7369766522207374796C653D22636F6C6F723A20726762283130322C203130322C20313032293B20666F6E742D66616D696C793A204C61746F3B20666F6E742D73697A653A20313470783B206C696E652D6865696768743A20323070783B223E3C2F703E3C70207374796C653D226D617267696E3A2033307078206175746F3B20746578742D616C69676E3A206A7573746966793B20666F6E742D73697A653A20313670783B20636F6C6F723A20726762283130322C203130322C20313032293B20666F6E742D66616D696C793A204C61746F3B223E4CE28099497374697475746F2042696F6368696D69636F204974616C69616E6F2C204962692C20666F6E6461746F2064616C2050726F662E2047696F76616E6E69204C6F72656E7A696E692C20C3A820756EE28099617A69656E6461206661726D6163657574696361206469206772616E64652074726164697A696F6E6520736369656E7469666963612070726573656E74652073756C206D65726361746F206974616C69616E6F206461207069C3B920646920393020616E6E692C20636F6E206F626965747469766920646920726963657263612C20696E6E6F76617A696F6E6520652070726F64757A696F6E652E204F6C747265206C612074726164697A696F6E652073746F7269636120617A69656E64616C652C206C65206E756F7665207465636E6F6C6F676965206170706C6963617465206520756EE28099617474656E74612063757261206E656C6C612070726F64757A696F6E652C2066616E6E6F2064656C6C61204962692073696E6F6E696D6F2064692061666669646162696C6974C3A0206520676172616E7A696120646920616C7461207175616C6974C3A0206E656920706165736920696E20637569206CE28099417A69656E646120C3A82070726573656E74652E3C2F703E3C70207374796C653D226D617267696E3A2033307078206175746F3B20746578742D616C69676E3A206A7573746966793B20666F6E742D73697A653A20313670783B20636F6C6F723A20726762283130322C203130322C20313032293B20666F6E742D66616D696C793A204C61746F3B223E49626920646564696361206C612070726F707269612061747469766974C3A020616C6C6F207376696C7570706F206469206E756F7665206170706C6963617A696F6E692074657261706575746963686520706572206F66667269726520736F6C757A696F6E6920616C7465726E61746976652061206D656469636920652070617A69656E746920656420C3A8206F67676920756E61207265616C74C3A020636F6E736F6C696461746120696E204974616C69612C204575726F70612C20417369612C204175737472616C696120652055532E3C2F703E3C70207374796C653D226D617267696E3A2033307078206175746F3B20746578742D616C69676E3A206A7573746966793B20666F6E742D73697A653A20313670783B20636F6C6F723A20726762283130322C203130322C20313032293B20666F6E742D66616D696C793A204C61746F3B223E4C6120736564652073692074726F766120616420417072696C696120646F76652C206F6C74726520616C6C6F2073746162696C696D656E746F2064692070726F64757A696F6E652C20736F6E6F20636F6C6C6F63617465207475747465206C652066756E7A696F6E6920617A69656E64616C692E204C612070726F64757A696F6E65206520696C20636F6E74726F6C6C6F207175616C6974C3A020736F6E6F20696C20636F726520627573696E6573732064656C6CE28099417A69656E64612C2061206375692073692061666669616E63616E6F20526963657263612065205376696C7570706F2C204661726D61636F766967696C616E7A612E2E2E3C2F703E223B733A31323A22636F6E74656E7574695F6964223B693A333B733A323A226964223B693A363B7D',NULL,'2016-01-04 17:51:20','2016-01-04 17:51:20'),
	(11,1,'Ibi\\Models\\SliderTranslation',2,0,X'613A353A7B733A363A226C6F63616C65223B733A323A226974223B733A363A227469746F6C6F223B733A32363A224962693A20393020616E6E6920646920657370657269656E7A61223B733A31313A22736F74746F7469746F6C6F223B733A34313A2241666669646162696C6974C3A020646920676172616E7A6961206520616C7461207175616C6974C3A0223B733A393A22736C696465725F6964223B693A313B733A323A226964223B693A313B7D',NULL,'2016-01-05 12:24:05','2016-01-05 12:24:05'),
	(12,2,'Ibi\\Models\\SliderTranslation',2,0,X'613A353A7B733A363A226C6F63616C65223B733A323A22656E223B733A363A227469746F6C6F223B733A32373A224962693A203930207965617273206F6620657870657269656E6365223B733A31313A22736F74746F7469746F6C6F223B733A33333A2252656C696162696C69747920616E64207175616C697479206173737572616E6365223B733A393A22736C696465725F6964223B693A313B733A323A226964223B693A323B7D',NULL,'2016-01-05 12:24:05','2016-01-05 12:24:05'),
	(13,1,'Ibi\\Models\\SliderTranslation',2,0,X'613A353A7B733A363A226C6F63616C65223B733A323A226974223B733A363A227469746F6C6F223B733A32363A224962693A20393020616E6E6920646920657370657269656E7A61223B733A31313A22736F74746F7469746F6C6F223B733A34313A2241666669646162696C6974C3A020646920676172616E7A6961206520616C7461207175616C6974C3A0223B733A393A22736C696465725F6964223B693A313B733A323A226964223B693A313B7D',NULL,'2016-01-05 12:26:10','2016-01-05 12:26:10'),
	(14,2,'Ibi\\Models\\SliderTranslation',2,0,X'613A353A7B733A363A226C6F63616C65223B733A323A22656E223B733A363A227469746F6C6F223B733A32373A224962693A203930207965617273206F6620657870657269656E6365223B733A31313A22736F74746F7469746F6C6F223B733A33333A2252656C696162696C69747920616E64207175616C697479206173737572616E6365223B733A393A22736C696465725F6964223B693A313B733A323A226964223B693A323B7D',NULL,'2016-01-05 12:26:10','2016-01-05 12:26:10'),
	(15,3,'Ibi\\Models\\SliderTranslation',2,0,X'613A353A7B733A363A226C6F63616C65223B733A323A226974223B733A363A227469746F6C6F223B733A32313A2252696365726361206520696E6E6F76617A696F6E65223B733A31313A22736F74746F7469746F6C6F223B733A33343A22416C6C276176616E67756172646961206E656C6C61206E616E6F6D65646963696E61223B733A393A22736C696465725F6964223B693A323B733A323A226964223B693A333B7D',NULL,'2016-01-05 12:28:46','2016-01-05 12:28:46'),
	(16,4,'Ibi\\Models\\SliderTranslation',2,0,X'613A353A7B733A363A226C6F63616C65223B733A323A22656E223B733A363A227469746F6C6F223B733A32333A22526573656172636820616E6420696E6E6F766174696F6E223B733A31313A22736F74746F7469746F6C6F223B733A33323A224F6E2074686520666F726566726F6E74206F66206E616E6F6D65646963696E65223B733A393A22736C696465725F6964223B693A323B733A323A226964223B693A343B7D',NULL,'2016-01-05 12:28:46','2016-01-05 12:28:46'),
	(17,4,'Ibi\\Models\\SliderTranslation',2,0,X'613A353A7B733A323A226964223B693A343B733A393A22736C696465725F6964223B693A323B733A363A227469746F6C6F223B733A32343A22526573656172636820616E6420696E6E6F766174696F6E32223B733A31313A22736F74746F7469746F6C6F223B733A33333A224F6E2074686520666F726566726F6E74206F66206E616E6F6D65646963696E6532223B733A363A226C6F63616C65223B733A323A22656E223B7D',NULL,'2016-01-05 12:34:09','2016-01-05 12:34:09'),
	(18,3,'Ibi\\Models\\SliderTranslation',2,0,X'613A353A7B733A323A226964223B693A333B733A393A22736C696465725F6964223B693A323B733A363A227469746F6C6F223B733A32323A2252696365726361206520696E6E6F76617A696F6E6532223B733A31313A22736F74746F7469746F6C6F223B733A33353A22416C6C276176616E67756172646961206E656C6C61206E616E6F6D65646963696E6132223B733A363A226C6F63616C65223B733A323A226974223B7D',NULL,'2016-01-05 12:34:09','2016-01-05 12:34:09'),
	(19,4,'Ibi\\Models\\SliderTranslation',2,0,X'613A353A7B733A323A226964223B693A343B733A393A22736C696465725F6964223B693A323B733A363A227469746F6C6F223B733A32333A22526573656172636820616E6420696E6E6F766174696F6E223B733A31313A22736F74746F7469746F6C6F223B733A33323A224F6E2074686520666F726566726F6E74206F66206E616E6F6D65646963696E65223B733A363A226C6F63616C65223B733A323A22656E223B7D',NULL,'2016-01-05 12:35:47','2016-01-05 12:35:47'),
	(20,3,'Ibi\\Models\\SliderTranslation',2,0,X'613A353A7B733A323A226964223B693A333B733A393A22736C696465725F6964223B693A323B733A363A227469746F6C6F223B733A32313A2252696365726361206520696E6E6F76617A696F6E65223B733A31313A22736F74746F7469746F6C6F223B733A33343A22416C6C276176616E67756172646961206E656C6C61206E616E6F6D65646963696E61223B733A363A226C6F63616C65223B733A323A226974223B7D',NULL,'2016-01-05 12:35:47','2016-01-05 12:35:47');

/*!40000 ALTER TABLE `versions` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
