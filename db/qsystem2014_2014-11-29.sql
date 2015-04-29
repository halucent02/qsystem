# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.6.21)
# Database: qsystem2014
# Generation Time: 2014-11-29 10:49:22 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table ci_sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`)
VALUES
	('138e426b3c8a9cb9dc3e9ee951a211cb','192.168.1.143','Mozilla/5.0 (iPad; CPU OS 8_1 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Version/8.0 Mobile/12B410 Safari/60',1417257145,''),
	('bf194d5441307c964865fd1586d19137','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36',1417257922,'a:11:{s:9:\"user_data\";s:0:\"\";s:6:\"status\";s:3:\"all\";s:2:\"id\";s:1:\"6\";s:9:\"firstname\";s:7:\"charles\";s:8:\"lastname\";s:7:\"culaton\";s:8:\"username\";s:8:\"charles2\";s:9:\"acct_type\";s:12:\"cs-frontline\";s:9:\"logged_in\";b:1;s:4:\"jump\";i:0;s:7:\"counter\";s:1:\"1\";s:11:\"transaction\";s:7:\"INQUIRY\";}');

/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table dropcall
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dropcall`;

CREATE TABLE `dropcall` (
  `id` int(11) NOT NULL,
  `pandora` varchar(7) DEFAULT NULL,
  `pandora1` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `dropcall` WRITE;
/*!40000 ALTER TABLE `dropcall` DISABLE KEYS */;

INSERT INTO `dropcall` (`id`, `pandora`, `pandora1`)
VALUES
	(1,'call','call');

/*!40000 ALTER TABLE `dropcall` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table number
# ------------------------------------------------------------

DROP TABLE IF EXISTS `number`;

CREATE TABLE `number` (
  `id` int(11) DEFAULT NULL,
  `number_sequence` int(11) NOT NULL,
  `date_of_transaction` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `number` WRITE;
/*!40000 ALTER TABLE `number` DISABLE KEYS */;

INSERT INTO `number` (`id`, `number_sequence`, `date_of_transaction`)
VALUES
	(1,4,'2014-11-28 18:43:39');

/*!40000 ALTER TABLE `number` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pending
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pending`;

CREATE TABLE `pending` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `numberque` int(255) DEFAULT NULL,
  `salutation` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `ar` varchar(255) DEFAULT NULL,
  `prepared` tinyint(1) DEFAULT NULL,
  `flag` varchar(255) DEFAULT NULL,
  `date_of_transaction` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table quedata
# ------------------------------------------------------------

DROP TABLE IF EXISTS `quedata`;

CREATE TABLE `quedata` (
  `id` int(11) unsigned NOT NULL DEFAULT '1',
  `banner_num` varchar(20) DEFAULT NULL,
  `banner_name` varchar(255) DEFAULT NULL,
  `date_of_transaction` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `quedata` WRITE;
/*!40000 ALTER TABLE `quedata` DISABLE KEYS */;

INSERT INTO `quedata` (`id`, `banner_num`, `banner_name`, `date_of_transaction`)
VALUES
	(1,'1','DXDCRCFDFD SEXEXDXEXDX','2014-11-28 23:54:04');

/*!40000 ALTER TABLE `quedata` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table queserve
# ------------------------------------------------------------

DROP TABLE IF EXISTS `queserve`;

CREATE TABLE `queserve` (
  `counter_number` int(20) NOT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `active` varchar(10) DEFAULT NULL,
  `sit` varchar(255) DEFAULT NULL,
  `date_of_transaction` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`counter_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `queserve` WRITE;
/*!40000 ALTER TABLE `queserve` DISABLE KEYS */;

INSERT INTO `queserve` (`counter_number`, `client_name`, `status`, `active`, `sit`, `date_of_transaction`)
VALUES
	(1,NULL,NULL,NULL,NULL,'2014-11-29 18:45:27'),
	(2,NULL,NULL,NULL,NULL,'2014-11-29 18:45:27'),
	(3,NULL,NULL,NULL,NULL,'2014-11-29 18:45:27'),
	(4,NULL,NULL,NULL,NULL,'2014-11-29 18:45:27'),
	(5,NULL,NULL,NULL,NULL,'2014-11-29 18:45:27'),
	(6,NULL,NULL,NULL,NULL,'2014-11-29 18:45:27'),
	(7,NULL,NULL,NULL,NULL,'2014-11-29 18:45:27'),
	(8,NULL,NULL,NULL,NULL,'2014-11-29 18:45:27'),
	(9,NULL,NULL,NULL,NULL,'2014-11-29 18:45:27'),
	(10,NULL,NULL,NULL,NULL,'2014-11-29 18:45:27'),
	(11,NULL,NULL,NULL,NULL,'2014-11-29 18:45:27');

/*!40000 ALTER TABLE `queserve` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table served
# ------------------------------------------------------------

DROP TABLE IF EXISTS `served`;

CREATE TABLE `served` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `numberque` int(255) DEFAULT NULL,
  `salutation` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `agent` varchar(255) DEFAULT NULL,
  `date_of_transaction` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table served_archive
# ------------------------------------------------------------

DROP TABLE IF EXISTS `served_archive`;

CREATE TABLE `served_archive` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `numberque` int(255) DEFAULT NULL,
  `salutation` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `agent` varchar(255) DEFAULT NULL,
  `date_of_transaction` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `served_archive` WRITE;
/*!40000 ALTER TABLE `served_archive` DISABLE KEYS */;

INSERT INTO `served_archive` (`id`, `user_id`, `numberque`, `salutation`, `firstname`, `lastname`, `status`, `agent`, `date_of_transaction`)
VALUES
	(1,NULL,1,'MS','Shai','tan','FOR REPAIR',NULL,'2014-10-30 12:34:49'),
	(2,NULL,3,'MS','Nika','lucas','FOR REPAIR',NULL,'2014-10-30 12:35:10'),
	(3,NULL,4,'MR','A','b','INQUIRY',NULL,'2014-10-30 12:44:41'),
	(4,NULL,7,'MRS','A','mniosm','INQUIRY',NULL,'2014-10-30 13:09:00'),
	(5,NULL,13,'MRS','Shai','tan','INQUIRY',NULL,'2014-10-30 15:24:41'),
	(6,NULL,14,'MR','Kamskaoa','kamsisk','INQUIRY',NULL,'2014-10-30 15:24:52'),
	(7,NULL,18,'MR','Yjtcytcv','ggvg','INQUIRY',NULL,'2014-10-30 15:26:05'),
	(8,NULL,19,'MR','Tykfytvuyv','hgf fy hvjyt','INQUIRY',NULL,'2014-10-30 15:27:50'),
	(9,NULL,27,'MR','Javaad','malik','INQUIRY',NULL,'2014-10-30 15:27:57'),
	(10,NULL,29,'MS','Kim','kardashiaN','INQUIRY',NULL,'2014-10-30 15:46:51'),
	(11,NULL,61,'MR','J','i','INQUIRY',NULL,'2014-10-30 15:49:08'),
	(12,NULL,6,'MR','Z','malik','RELEASING',NULL,'2014-10-30 17:07:08'),
	(13,NULL,12,'MS','Ksmaosms ','kaisjxmsk','RELEASING',NULL,'2014-10-30 17:08:35'),
	(14,NULL,23,'MRS','Gkugkyuvvykuv','yjfvityvtkyvytkvtk','RELEASING',NULL,'2014-10-30 17:57:52'),
	(15,NULL,25,'MS','Ghhtvb','gghyg','RELEASING',NULL,'2014-10-30 18:00:55'),
	(16,NULL,8,'MR','Rpla','ksiwid','APPOINTMENT',NULL,'2014-10-30 19:05:13'),
	(17,NULL,11,'MR','Qls,d','owksmsk','APPOINTMENT',NULL,'2014-10-30 19:05:43'),
	(18,NULL,21,'MRS','Fvjtyvukvukyvuv','yfvjvtyvt','APPOINTMENT',NULL,'2014-10-30 19:28:12'),
	(19,NULL,69,'MS','Hj','ojn','INQUIRY',NULL,'2014-10-30 22:00:06'),
	(20,NULL,50,'MRS','Kngb','kjhbg','RELEASING',NULL,'2014-10-30 22:13:41'),
	(21,NULL,5,'Mr','B bbbhbh',' ghbhbhbbhbh','APPOINTMENT',NULL,'2014-11-01 23:51:52'),
	(22,NULL,1,'Mr','Abudabe','Bbbbhb','INQUIRY',NULL,'2014-11-02 12:08:17'),
	(23,NULL,2,'Ms','Hbhbhhh','Bhbhbhhh','FOR REPAIR',NULL,'2014-11-02 12:16:37'),
	(24,NULL,7,'Mr','Bhbhbhh','Bbhbh','FOR REPAIR',NULL,'2014-11-02 12:23:46'),
	(25,NULL,6,'Mr','Byybhby','Bhbhbhb','APPOINTMENT',NULL,'2014-11-02 12:24:53'),
	(26,NULL,11,'Mr','Hghhbhbhbh','Bvbvhbhbh','APPOINTMENT',NULL,'2014-11-02 00:16:34'),
	(27,NULL,4,'Ms','Vygvgvgb','Gyybhgybb','INQUIRY',NULL,'2014-11-02 00:17:45'),
	(28,NULL,13,'Ms','Junjun','Yoh','RELEASING',NULL,'2014-11-02 02:37:36'),
	(29,NULL,37,'MR','Nkonj','bggnn','FOR REPAIR',NULL,'2014-11-02 02:44:37'),
	(30,NULL,15,'Ms','Njjnjnjnjn','Njjnnh','RELEASING',NULL,'2014-11-02 02:45:46'),
	(31,NULL,33,'MR','Harry','styles','FOR REPAIR',NULL,'2014-11-02 04:30:52'),
	(32,NULL,2,'Ms','Nika ','Lucas','FOR REPAIR',NULL,'2014-11-03 16:47:51'),
	(33,NULL,1,'Mr','Richard','Gunabe','RELEASING',NULL,'2014-11-03 16:49:12'),
	(34,NULL,3,'Mr','Jim','Laguio','RELEASING',NULL,'2014-11-03 16:49:32'),
	(35,NULL,5,'Mr','Lito','Ansay','RELEASING',NULL,'2014-11-03 16:49:39'),
	(36,NULL,6,'Ms','Grace','Gatchalian','RELEASING',NULL,'2014-11-03 16:49:47'),
	(37,NULL,7,'Mrs','Aileen','Chua','FOR REPAIR',NULL,'2014-11-03 16:50:29'),
	(38,NULL,8,'Mr','Richard','Gomez','RELEASING',NULL,'2014-11-03 16:52:20'),
	(39,NULL,9,'Mr','Jim','Laguio','FOR REPAIR',NULL,'2014-11-03 16:52:49'),
	(40,NULL,4,'Mr','Raf','Cansino','FOR REPAIR',NULL,'2014-11-03 16:54:01'),
	(41,NULL,10,'Mrs','Pregnant','Woman','FOR REPAIR',NULL,'2014-11-03 16:55:42'),
	(42,NULL,11,'Mr','Lcs','Vip','RELEASING',NULL,'2014-11-03 16:58:05'),
	(43,NULL,12,'Mr','Madam','Vip','RELEASING',NULL,'2014-11-03 16:59:26'),
	(44,NULL,13,'Mr','Neo','Cansino ','INQUIRY',NULL,'2014-11-03 17:02:34'),
	(45,NULL,14,'Mr','Charles','Culaton','RELEASING',NULL,'2014-11-03 17:03:21'),
	(46,NULL,15,'Ms','Nika','Lucas','RELEASING',NULL,'2014-11-03 17:05:36'),
	(47,NULL,16,'Mr','Jim','Laguio','RELEASING',NULL,'2014-11-03 17:06:21'),
	(48,NULL,17,'Mr','Lito','Ansay','RELEASING',NULL,'2014-11-03 17:06:47'),
	(49,NULL,18,'Mr','Lawrence','Sison','RELEASING',NULL,'2014-11-03 17:08:10'),
	(50,NULL,20,'Ms','N','Nvn','RELEASING',NULL,'2014-11-03 17:09:57'),
	(51,NULL,19,'Mr','Jim','Laguio','RELEASING',NULL,'2014-11-03 17:14:51'),
	(52,NULL,45,'MR','Ap','yi','FOR REPAIR',NULL,'2014-11-03 17:15:57'),
	(53,NULL,3,'Ms','Sadads','Dasdasd','RELEASING',NULL,'2014-11-04 17:42:42'),
	(54,NULL,4,'Ms','67676','77787','RELEASING',NULL,'2014-11-04 22:27:40'),
	(55,NULL,5,'Ms','Dasdasd','Dasdasd','RELEASING',NULL,'2014-11-04 22:31:08'),
	(56,NULL,15,'Mr','Vvygyg','Vyvgvgvgg','RELEASING',NULL,'2014-11-04 22:32:10'),
	(57,NULL,16,'Mr','Bbhbhbbh','Hbhhbhb','RELEASING',NULL,'2014-11-04 22:32:16'),
	(58,NULL,17,'Mr','Vgvgbv','Vgvbvb b','RELEASING',NULL,'2014-11-04 22:32:21'),
	(59,NULL,19,'Mr','Bgbhb','Hbhbhbhb','RELEASING',NULL,'2014-11-04 22:32:37'),
	(60,NULL,20,'Mr',' fvfvfvfvfvn','Vgvvgvfvgv','RELEASING',NULL,'2014-11-04 22:32:41'),
	(61,NULL,21,'Mr','Vgvvgh',' gvgvg','RELEASING',NULL,'2014-11-04 22:32:44'),
	(62,NULL,22,'Mr','B. vhbhv','Xfxfccfcf','RELEASING',NULL,'2014-11-04 22:32:47'),
	(63,NULL,23,'Mr','Vhbhbbh','Bhbbhbh','RELEASING',NULL,'2014-11-04 22:32:49'),
	(64,NULL,24,'Mr','Bjbnbjn','Bjbjnjnnj','RELEASING',NULL,'2014-11-04 22:32:53'),
	(65,NULL,27,'Ms','Dsds','Dsdsd','RELEASING',NULL,'2014-11-04 22:40:19'),
	(66,NULL,1,'Ms','Bhbhbhbjnn','Bhbnjbjn','INQUIRY',NULL,'2014-11-05 00:14:21'),
	(67,NULL,2,'Mr','Bybhbhh','Ghbhbhb','APPOINTMENT',NULL,'2014-11-05 00:17:48'),
	(68,NULL,3,'Mr','Hbhhbhb','Bhbhbhbbb','RELEASING',NULL,'2014-11-05 00:21:17'),
	(69,NULL,4,'Mr','Bhbhbb','Bhbhbhbn','APPOINTMENT',NULL,'2014-11-05 00:30:49'),
	(70,NULL,58,'MS','Qw','we','FOR REPAIR',NULL,'2014-11-05 00:32:28'),
	(71,NULL,7,'Mr','Bbhbhbhbbh','Hbjnjnnj','FOR REPAIR',NULL,'2014-11-05 00:42:07'),
	(72,NULL,8,'Mr','Vgvgvgbgb','Vgvgvgbgb','RELEASING',NULL,'2014-11-05 02:17:48'),
	(73,NULL,1,'Ms','HYBYBHHBH','BGVBGBBG','INQUIRY',NULL,'2014-11-06 20:30:14'),
	(74,NULL,1,'Mr','GYYGHBHB','GBVGVVBB','APPOINTMENT',NULL,'2014-11-07 17:53:34'),
	(75,6,1,'Ms','VGVGVGVGBG','G GVGVGVGYB','INQUIRY',NULL,'2014-11-29 18:00:49'),
	(76,6,2,'Ms','YRYFGFGCG','YFYFGGFGFFG','INQUIRY',NULL,'2014-11-29 18:13:11'),
	(77,6,3,'Ms','YVVGVGVV','CGCGCGVCGV','INQUIRY',NULL,'2014-11-29 18:33:53'),
	(78,6,5,'Mrs','GCGGFGFGF','SDRSDSXFDF','INQUIRY',NULL,'2014-11-29 18:35:18'),
	(79,6,4,'Ms','CHVGGVGVGV','HVGFYGYGYGYGG','INQUIRY',NULL,'2014-11-29 18:35:31'),
	(80,6,6,'Ms','CGCGCGCFXF','SDDRDFDFD','INQUIRY',NULL,'2014-11-29 18:35:35'),
	(81,6,1,'Mrs','FTFGGGYY','CFFCFCFCFCG','INQUIRY','Charles C.','2014-11-28 18:44:04'),
	(82,6,3,'Mr','DXDXDRXDXX','KOKOMOMO','INQUIRY','Charles C.','2014-11-28 18:44:10'),
	(83,6,4,'Mrs','DRERDRDTD','DFCFCFCFCFC','INQUIRY','Charles C.','2014-11-28 18:44:46'),
	(84,6,2,'Mrs','DXDCRCFDFD','SEXEXDXEXDX','INQUIRY','Charles C.','2014-11-28 18:45:03');

/*!40000 ALTER TABLE `served_archive` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table skipped
# ------------------------------------------------------------

DROP TABLE IF EXISTS `skipped`;

CREATE TABLE `skipped` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `numberque` int(255) DEFAULT NULL,
  `salutation` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `agent` varchar(255) DEFAULT NULL,
  `ar` varchar(255) DEFAULT NULL,
  `prepared` tinyint(1) DEFAULT NULL,
  `date_of_transaction` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `account_type` varchar(255) DEFAULT NULL,
  `active` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `account_type`, `active`)
VALUES
	(4,'dsd','dsdsd','user','fsdfsdf','admin','no'),
	(5,'charles','culaton','charles1','charles','admin','yes'),
	(6,'charles','culaton','charles2','charles','cs-frontline','yes'),
	(7,'charles','culaton','charles3','charles','cs-backroom','yes'),
	(8,'Nika','Lucas','nika','nika','admin','yes');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users_handle
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_handle`;

CREATE TABLE `users_handle` (
  `user_id` int(11) NOT NULL,
  `counter` varchar(11) NOT NULL DEFAULT '',
  `type` varchar(11) NOT NULL DEFAULT '',
  KEY `user_id` (`user_id`),
  CONSTRAINT `users_handle_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users_handle` WRITE;
/*!40000 ALTER TABLE `users_handle` DISABLE KEYS */;

INSERT INTO `users_handle` (`user_id`, `counter`, `type`)
VALUES
	(6,'1','INQUIRY'),
	(7,'5','APPOINTMENT'),
	(8,'1','FOR REPAIR');

/*!40000 ALTER TABLE `users_handle` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
