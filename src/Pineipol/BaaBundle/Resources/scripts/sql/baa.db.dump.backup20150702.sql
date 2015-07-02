-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: baa
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.10.1

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_category_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category_id` (`category_id`) USING BTREE,
  UNIQUE KEY `name` (`name`) USING BTREE,
  KEY `parent_category_id` (`parent_category_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,NULL,'architecture','pink','2015-03-21 19:43:44','2015-03-22 13:03:59'),(2,NULL,'agile','yellow','2015-03-22 11:47:55','2015-03-22 13:03:56'),(3,NULL,'symfony','green','2015-03-22 11:47:55','2015-03-22 13:04:01'),(4,NULL,'scrum','pink','2015-05-02 21:39:20','2015-05-02 19:39:32'),(5,NULL,'lean','green','2015-05-02 21:39:28','2015-05-02 19:39:32');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_contents`
--

DROP TABLE IF EXISTS `category_contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_contents` (
  `category_content_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `locale_id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`category_content_id`),
  UNIQUE KEY `category_locale` (`category_id`,`locale_id`) USING BTREE,
  UNIQUE KEY `category_content_id` (`category_content_id`) USING BTREE,
  KEY `category_id` (`category_id`) USING BTREE,
  KEY `locale_id` (`locale_id`) USING BTREE,
  KEY `route_id` (`route_id`) USING BTREE,
  CONSTRAINT `category_contents_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON UPDATE CASCADE,
  CONSTRAINT `category_contents_ibfk_2` FOREIGN KEY (`locale_id`) REFERENCES `locales` (`locale_id`) ON UPDATE CASCADE,
  CONSTRAINT `category_contents_ibfk_3` FOREIGN KEY (`route_id`) REFERENCES `routes` (`route_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_contents`
--

LOCK TABLES `category_contents` WRITE;
/*!40000 ALTER TABLE `category_contents` DISABLE KEYS */;
INSERT INTO `category_contents` VALUES (1,1,1,1,'Architecture','Architecture','2015-03-21 19:44:00','2015-03-22 10:49:26'),(2,2,1,2,'Agile','Agile','2015-03-22 11:48:48','2015-03-22 10:49:26'),(3,3,1,3,'Symfony','Symfony','2015-03-22 11:48:48','2015-03-22 10:49:26'),(4,4,1,10,'Scrum','Scrum','2015-05-02 21:52:05','2015-05-02 19:52:19'),(5,5,1,11,'Lean','Lean','2015-05-02 21:52:14','2015-05-02 19:52:19');
/*!40000 ALTER TABLE `category_contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment_status`
--

DROP TABLE IF EXISTS `comment_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment_status` (
  `comment_status_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_status_id`),
  UNIQUE KEY `comment_status_id` (`comment_status_id`) USING BTREE,
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment_status`
--

LOCK TABLES `comment_status` WRITE;
/*!40000 ALTER TABLE `comment_status` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_status_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`),
  UNIQUE KEY `comment_id` (`comment_id`) USING BTREE,
  KEY `user_id` (`user_id`) USING BTREE,
  KEY `comment_status_id` (`comment_status_id`) USING BTREE,
  KEY `post_id` (`post_id`) USING BTREE,
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE,
  CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`comment_status_id`) REFERENCES `comment_status` (`comment_status_id`) ON UPDATE CASCADE,
  CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `labels`
--

DROP TABLE IF EXISTS `labels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `labels` (
  `label_id` int(11) NOT NULL AUTO_INCREMENT,
  `locale_id` int(11) DEFAULT NULL,
  `label_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `translation` text COLLATE utf8_unicode_ci,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`label_id`),
  UNIQUE KEY `label_id` (`label_id`) USING BTREE,
  UNIQUE KEY `locale_key` (`locale_id`,`label_key`) USING BTREE,
  KEY `locale_id` (`locale_id`) USING BTREE,
  KEY `label_key` (`label_key`) USING BTREE,
  CONSTRAINT `labels_ibfk_1` FOREIGN KEY (`locale_id`) REFERENCES `locales` (`locale_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `labels`
--

LOCK TABLES `labels` WRITE;
/*!40000 ALTER TABLE `labels` DISABLE KEYS */;
/*!40000 ALTER TABLE `labels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `layouts`
--

DROP TABLE IF EXISTS `layouts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `layouts` (
  `layout_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `file` longtext COLLATE utf8_unicode_ci,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`layout_id`),
  UNIQUE KEY `layout_id` (`layout_id`) USING BTREE,
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `layouts`
--

LOCK TABLES `layouts` WRITE;
/*!40000 ALTER TABLE `layouts` DISABLE KEYS */;
INSERT INTO `layouts` VALUES (1,'home-layout','Home layout','Home layout','PineipolBaaBundle:Layout:home.html.twig','2015-03-21 15:35:07','2015-03-21 14:35:17');
/*!40000 ALTER TABLE `layouts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `links` (
  `link_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `target_url` text COLLATE utf8_unicode_ci,
  `open_blank` int(1) DEFAULT '0',
  `home` int(1) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`link_id`),
  UNIQUE KEY `link_id` (`link_id`) USING BTREE,
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `links`
--

LOCK TABLES `links` WRITE;
/*!40000 ALTER TABLE `links` DISABLE KEYS */;
INSERT INTO `links` VALUES (1,'scrum.org','Scrum.org','Scrum.org','https://www.scrum.org/',1,1,'2015-03-22 13:25:30','2015-06-24 21:53:14'),(2,'symfony.com','Symfony.com','Symfony.com','http://www.symfony.com/',1,1,'2015-03-22 13:26:00','2015-06-24 21:53:14'),(3,'blog-bootstrap','Blog Bootstrap','Blog Bootstrap','http://www.becominganagilearchitect.com/blog-bootstrap',0,1,'0000-00-00 00:00:00','2015-06-29 21:21:37'),(4,'agile-architect','Arquitecto Agile','Arquitecto Agile','http://www.becominganagilearchitect.com/arquitecto-agile',0,1,'0000-00-00 00:00:00','2015-06-29 21:21:38'),(5,'loading','Loading...','Loading...','http://www.becominganagilearchitect.com/loading',0,1,'0000-00-00 00:00:00','2015-06-29 21:21:39'),(6,'agile-scrum-lean-kanban-difference','Agile, Lean, Scrum, Kanban… ¿cuál es la diferencia?','Agile, Lean, Scrum, Kanban… ¿cuál es la diferencia?','http://www.becominganagilearchitect.com/lean-agile-scrum-kanban-diferencia',0,1,'2015-06-21 21:33:51','2015-06-29 21:21:20'),(7,'scrum-framework-one','Scrum. El framework de los roles, eventos y artefactos','Scrum. El framework de los roles, eventos y artefactos','http://www.becominganagilearchitect.com/scrum-valores-roles-eventos-artefactos',0,1,'2015-06-21 23:23:40','2015-06-29 21:21:14'),(8,'scrum-framework-two','El Equipo Scrum. Scrum Master, Product Owner y Developer Team','El Equipo Scrum. Scrum Master, Product Owner y Developer Team','http://www.becominganagilearchitect.com/scrum-roles-scrum-master-product-owner-desarrolladores',0,1,'2015-06-21 23:23:58','2015-06-29 21:36:39'),(9,'scrum-framework-three','Eventos de Scrum. Sprint','Eventos de Scrum. Sprint','http://www.becominganagilearchitect.com/scrum-eventos-el-sprint',0,0,'2015-06-21 23:54:33','2015-06-23 18:11:49'),(10,'scrum-framework-four','Eventos de Scrum. Reunión de planificación','Eventos de Scrum. Reunión de planificación','http://www.becominganagilearchitect.com/scrum-eventos-planificacion',0,0,'2015-06-21 23:54:35','2015-06-23 18:11:48'),(11,'scrum-framework-five','Eventos de Scrum. Scrum diario o Stand Up Meeting','Eventos de Scrum. Scrum diario o Stand Up Meeting','http://www.becominganagilearchitect.com/scrum-eventos-scrum-diario-stand-up-meeting',0,0,'2015-06-21 23:54:37','2015-06-23 18:11:47'),(12,'scrum-framework-six','Eventos de Scrum. Revisión de Sprint','Eventos de Scrum. Revisión de Sprint','http://www.becominganagilearchitect.com/scrum-eventos-revision-de-sprint',0,0,'2015-06-21 23:54:38','2015-06-23 18:11:47'),(13,'scrum-framework-seven','Eventos de Scrum. Retrospectiva de Sprint','Eventos de Scrum. Retrospectiva de Sprint','http://www.becominganagilearchitect.com/scrum-eventos-retrospectiva-de-sprint',0,0,'2015-06-21 23:54:40','2015-06-23 18:11:46'),(14,'scrum-framework-eight','Eventos de Scrum. Reuniones de Grooming o refinamiento del Backlog','Eventos de Scrum. Reuniones de Grooming o refinamiento del Backlog','http://www.becominganagilearchitect.com/scrum-eventos-reunion-de-grooming',0,0,'2015-06-21 23:54:42','2015-06-23 18:11:45'),(15,'scrum-framework-nine','Artefactos de Scrum. Product Backlog','Artefactos de Scrum. Product Backlog','http://www.becominganagilearchitect.com/scrum-product-backlog',0,0,'2015-06-21 23:54:45','2015-06-23 18:11:44'),(16,'scrum-framework-ten','Artefactos de Scrum. Historias de Usuario en el Product Backlog','Artefactos de Scrum. Historias de Usuario en el Product Backlog','http://www.becominganagilearchitect.com/scrum-product-backlog-historias-de-usuario-empirismo',0,0,'2015-06-21 23:54:46','2015-06-23 18:11:43'),(17,'scrum-framework-eleven','Artefactos de Scrum. Gráfico Release Burndown','Artefactos de Scrum. Gráfico Release Burndown','http://www.becominganagilearchitect.com/scrum-product-backlog-release-burndown-chart',0,0,'2015-06-21 23:54:48','2015-06-23 18:11:42'),(18,'scrum-framework-twelve','Artefactos de Scrum. Sprint Backlog','Artefactos de Scrum. Sprint Backlog','http://www.becominganagilearchitect.com/scrum-sprint-backlog',0,0,'2015-06-21 23:54:50','2015-06-23 18:11:42'),(19,'scrum-framework-thirteen','Artefactos de Scrum. Gráfico Sprint Burndown','Artefactos de Scrum. Gráfico Sprint Burndown','http://www.becominganagilearchitect.com/scrum-sprint-backlog-sprint-burndown-chart',0,0,'2015-06-21 23:54:52','2015-06-23 18:11:41'),(20,'scrum-framework-fouteen','Artefactos de Scrum. Sprint Taskboard','Artefactos de Scrum. Sprint Taskboard','http://www.becominganagilearchitect.com/scrum-sprint-taskboard',0,0,'2015-06-21 23:54:54','2015-06-23 18:11:39');
/*!40000 ALTER TABLE `links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locales`
--

DROP TABLE IF EXISTS `locales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locales` (
  `locale_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` longtext COLLATE utf8_unicode_ci,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`locale_id`),
  UNIQUE KEY `locale_id` (`locale_id`) USING BTREE,
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locales`
--

LOCK TABLES `locales` WRITE;
/*!40000 ALTER TABLE `locales` DISABLE KEYS */;
INSERT INTO `locales` VALUES (1,'spanish','Spanish','es','2015-03-21 15:36:24','2015-03-21 14:36:30'),(2,'english','English','en','2015-03-21 15:36:24','2015-03-21 14:36:32');
/*!40000 ALTER TABLE `locales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `route_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `style` longtext COLLATE utf8_unicode_ci,
  `show` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`menu_id`),
  UNIQUE KEY `menu_id` (`menu_id`) USING BTREE,
  UNIQUE KEY `name` (`name`) USING BTREE,
  KEY `IDX_727508CF34ECB4E6` (`route_id`) USING BTREE,
  CONSTRAINT `menus_ibfk_1` FOREIGN KEY (`route_id`) REFERENCES `routes` (`route_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,1,'architecture','Arquitectura','Arquitectura',NULL,1,'2015-03-21 19:47:44','2015-03-22 10:46:03'),(2,2,'agile','Agile','Agile',NULL,1,'2015-03-22 11:45:25','2015-03-22 10:46:27'),(3,3,'symfony','Symfony','Symfony',NULL,NULL,'2015-03-22 11:45:38','2015-03-22 20:50:51'),(4,4,'contact','Contacto','Contacto',NULL,1,'2015-03-22 11:45:38','2015-03-22 12:11:03'),(5,5,'curriculum-vitae','Curriculum','Curriculum',NULL,NULL,'2015-03-22 11:47:12','2015-03-24 22:58:35'),(6,10,'scrum','Scrum','Scrum','',1,'2015-05-03 09:22:14','2015-05-03 07:22:29'),(7,11,'lean','Lean','Lean','',1,'2015-05-03 09:22:24','2015-05-03 07:22:29');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration_versions`
--

LOCK TABLES `migration_versions` WRITE;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
INSERT INTO `migration_versions` VALUES ('20150321191039'),('20150321194129'),('20150322134527'),('20150329210200'),('20150624231300'),('20150625201800'),('20150626203700');
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_contents`
--

DROP TABLE IF EXISTS `page_contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page_contents` (
  `page_content_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) DEFAULT NULL,
  `locale_id` int(11) DEFAULT NULL,
  `route_id` int(11) DEFAULT NULL,
  `title` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `meta_title` longtext COLLATE utf8_unicode_ci,
  `meta_description` longtext COLLATE utf8_unicode_ci,
  `meta_keywords` longtext COLLATE utf8_unicode_ci,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`page_content_id`),
  UNIQUE KEY `page_content_id` (`page_content_id`) USING BTREE,
  KEY `page_id` (`page_id`) USING BTREE,
  KEY `locale_id` (`locale_id`) USING BTREE,
  KEY `route_id` (`route_id`) USING BTREE,
  CONSTRAINT `page_contents_ibfk_1` FOREIGN KEY (`route_id`) REFERENCES `routes` (`route_id`),
  CONSTRAINT `page_contents_ibfk_2` FOREIGN KEY (`page_id`) REFERENCES `pages` (`page_id`),
  CONSTRAINT `page_contents_ibfk_3` FOREIGN KEY (`locale_id`) REFERENCES `locales` (`locale_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_contents`
--

LOCK TABLES `page_contents` WRITE;
/*!40000 ALTER TABLE `page_contents` DISABLE KEYS */;
INSERT INTO `page_contents` VALUES (1,1,1,4,'Contacto','Contacto','<p>Si deseas ponerte en contacto conmigo escribe a la dirección de correo electrónico que figura en la página.</p>\r\n<p>Y recuerda, esto no ha hecho más que empezar. En pocos días el blog irá creciendo, tanto en posts como en funcionalidad.</p>\r\n<div style=\"text-align: center;\">\r\n    <a href=\"mailto:alejandro.barba@becominganagilearchitect.com\">alejandro.barba@becominganagilearchitect.com</a>\r\n</div>','Becoming An Agile Architect - El blog Agil sobre coaching, Scrum, TDD y Continuous integration','Un blog práctico sobre Agile Coaching, Scrum, Test Driven Development y cómo llevarlos a cabo mediante explicaciones claras y ejemplos de cada paso','agile lean scrum kanban tdd extreme programming architect arquitectura clean code programacion coaching continuous integration integración continua contacto contact','2015-03-22 11:50:28','2015-06-26 18:39:01'),(2,2,1,5,'Curriculum Vitae','Curriculum Vitae','Curriculum Vitae','Becoming An Agile Architect - El blog Agil sobre coaching, Scrum, TDD y Continuous integration','Un blog práctico sobre Agile Coaching, Scrum, Test Driven Development y cómo llevarlos a cabo mediante explicaciones claras y ejemplos de cada paso','agile lean scrum kanban tdd extreme programming architect arquitectura clean code programacion coaching continuous integration integración continua alejandro barba','2015-03-22 11:50:28','2015-06-26 19:04:19');
/*!40000 ALTER TABLE `page_contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `order` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `js_callback` longtext COLLATE utf8_unicode_ci,
  `is_private` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`page_id`),
  UNIQUE KEY `page_id` (`page_id`) USING BTREE,
  UNIQUE KEY `name` (`name`) USING BTREE,
  KEY `order` (`order`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,2,'contact',NULL,NULL,'2015-03-22 11:50:08','2015-03-22 12:11:27'),(2,1,'curriculum-vitae',NULL,NULL,'2015-03-22 11:50:08','2015-03-22 12:11:28');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_contents`
--

DROP TABLE IF EXISTS `post_contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_contents` (
  `post_content_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `locale_id` int(11) DEFAULT NULL,
  `route_id` int(11) DEFAULT NULL,
  `title` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `image` tinytext COLLATE utf8_unicode_ci,
  `image_alt` tinytext COLLATE utf8_unicode_ci,
  `image_origin` tinytext COLLATE utf8_unicode_ci,
  `meta_title` longtext COLLATE utf8_unicode_ci,
  `meta_description` longtext COLLATE utf8_unicode_ci,
  `meta_keywords` longtext COLLATE utf8_unicode_ci,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_content_id`),
  UNIQUE KEY `post_content_id` (`post_content_id`) USING BTREE,
  UNIQUE KEY `post_id_locale_id` (`post_id`,`locale_id`) USING BTREE,
  KEY `post_id` (`post_id`) USING BTREE,
  KEY `locale_id` (`locale_id`) USING BTREE,
  KEY `route_id` (`route_id`) USING BTREE,
  CONSTRAINT `post_contents_ibfk_1` FOREIGN KEY (`route_id`) REFERENCES `routes` (`route_id`),
  CONSTRAINT `post_contents_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`),
  CONSTRAINT `post_contents_ibfk_3` FOREIGN KEY (`locale_id`) REFERENCES `locales` (`locale_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_contents`
--

LOCK TABLES `post_contents` WRITE;
/*!40000 ALTER TABLE `post_contents` DISABLE KEYS */;
INSERT INTO `post_contents` VALUES (1,1,1,6,'Blog Bootstrap','<p>Soy Alejandro Barba, Ingeniero en Informática, y hace meses se me ocurrió organizar mis ideas en un blog que fuera capaz de arrojar cierta luz en las dudas más sencillas y en las grandes preguntas que pudieran ayudar a diseñar un proyecto complejo y escalable desde un punto de vista ágil, es decir, enseñarnos desde el minuto cero cómo ser ágiles y tener en cuenta cómo sacar el mayor provecho al agilismo.</p>\r\n<p>El objetivo del blog no es proporcionar todas las respuestas sobre lo que debe ser un arquitecto Agile sino ofrecer posibles soluciones a sus problemas...</p>','<p><span style=\"font-size: 60px\">S</span>oy Alejandro Barba, Ingeniero en Informática por la Universidad de León, y desde hace diez años ejerzo como programador, analista, consultor, arquitecto, gestor o lo que haga falta según las necesidades precisas del proyecto en cada fase de su ciclo de vida o de sus necesidades de negocio.</p>\r\n<p>Supongo que decidí lanzarme al estudio de una ingeniería debido a mi pasión por la informática y, por que no decirlo, porque se me daba bastante bien a nivel usuario. El mío fue un caso de vocación tardía, dado que fue la informática quien me encontró gracias a que, con quince años, mi hermano me regaló mi primer ordenador, un Pentium I MMX a 166Mhz, aunque por aquel entonces lo llamábamos simplemente Pentium.</p>\r\n<img align=\"left\" style=\"margin: 15px\" src=\"/uploads/posts/150315_blog-bootstrap/Pentium_MMX_Logo.jpg\">\r\n<p>Mis estudios como ingeniero me han servido para desechar una gran cantidad de ideas erróneas preconcebidas, aprender organización, a organizarme a mí mismo y, por qué no decirlo, a entender cada uno de los pasos y mecanismos que entran en juego desde que se pulsa una tecla en el teclado hasta que vemos escrita la letra en la pantalla, es decir, a deshechar la magia del proceso y quedarnos tan sólo la ciencia. Pero no es que dichos estudios me hayan servido, en el sentido estricto de la palabra, para aprender a programar, eso se aprende después. Lo que sí han conseguido ha sido ponerme en el camino de las preguntas correctas, a las que voy encontrando respuesta en los compañeros, la experiencia y, sobre todo, en una buena cantidad de libros.</p>\r\n<p>Hace ya bastantes meses se me ocurrió la idea de organizar y estructurar mis ideas y plasmar el resultado en un blog. El resultado debía ser un blog que fuera capaz de dar respuesta a las dudas más sencillas y arrojar cierta luz sobre las grandes preguntas, es decir, que contuviera tanto recetas DevOps para configurar paso a paso un sencillo servidor Web como ideas y buenas prácticas que pudieran ayudar a diseñar un proyecto complejo y escalable.</p>\r\n<img align=\"right\" style=\"margin: 15px\" src=\"/uploads/posts/150315_blog-bootstrap/agile.png\">\r\n<p>Además de contar con recetas para hacer tareas específicas a modo de tutorial, plantear problemas y ofrecer soluciones a grandes cuestiones de diseño y arquitectura para sistemas complejos, el blog debería hacer todo esto desde un punto de vista Agile, es decir, enseñarnos desde el minuto cero cómo ser ágiles y tener en cuenta cómo sacar el mayor provecho al agilismo. Aunque veremos las principales diferencias entre diversas metodologías ágiles nos centraremos en aquella que, por mi experiencia profesional y preparación, conozco en mayor grado, Scrum.</p>\r\n<p>El objetivo del blog no es proporcionar todas las respuestas sobre lo que debe ser, qué debe saber o cómo debe actuar un arquitecto Agile, sino sembrar una buena cantidad de preguntas y problemas y ofrecer posibles soluciones a los mismos. Será tarea vuestra aplicar o adaptar dichas soluciones a vuestros problemas o lógica de negocio y sus circunstancias concretas. También espero que sirva como aliciente o punto de partida para abrir nuevas vías de investigación y experimentación que den lugar a desconocidos y emocionantes niveles de excelencia, productividad y retorno de inversión.</p>\r\n<p>Os invito a acompañarme en esta aventura que, semana tras semana, podremos ir descubriendo y comprendiendo juntos.</p>\r\n<div class=\"links-container\">\r\n		<div class=\"right-side-link-container\">\r\n        <a href=\"[[ROUTE:loading-]]\" class=\"post-content-link\">Loading... ></a>\r\n    </div>\r\n</div>\r\n<br>\r\n','uploads/posts/150315_blog-bootstrap/blog-bootstrap.jpg','Blog Bootstrap',NULL,'Becoming An Agile Architect - Presentación del Blog Ágil sobre coaching, Scrum, TDD y Continuous integration','Primer post del Blog en el que se introduce al auto, la temática del blog y las motivaciones que llevaron a su desarrollo','agile lean scrum kanban tdd extreme programming architect arquitectura clean code programacion coaching continuous integration integración continua alejandro barba','2015-03-15 23:00:00','2015-06-26 19:04:19'),(2,2,1,7,'Arquitecto Agile','<p>A veces el camino desde la puerta de la universidad a un puesto de Arquitecto Agile puede ser una larga peregrinación, otras veces, simplemente, un paso demasiado corto. En general la segunda vía es más fácil pero no suele ser cierta.</p>\r\n<p>Arquitecto puede ser tanto aquel que, de facto, hace las labores del puesto, aquel al que le ha tocado o le ha sido impuesto o aquel que, con su experiencia, se ha ganado el respeto de sus compañeros y la admiración de sus superiores. Nosotros vamos a tratar de imitar al último tipo, no porque sea más digno o se lo merezca más, sino porque...</p>','<p><span style=\"font-size: 60px\">A</span> veces el camino desde la puerta de la universidad a un puesto de Arquitecto Agile puede ser una larga peregrinación, otras veces, simplemente, un paso demasiado corto. En general la segunda vía es más fácil pero no suele ser cierta.</p>\r\n<p>Arquitecto puede ser tanto aquel que, de facto, hace las labores del puesto, aquel al que le ha tocado o le ha sido impuesto o aquel que, con su experiencia, se ha ganado el respeto de sus compañeros y la admiración de sus superiores. Nosotros vamos a tratar de imitar al último tipo, no porque sea más digno o se lo merezca más, sino porque es aquel al que queremos parecernos y del que esperamos aprender cuanto podamos.</p>\r\n<p>Un Arquitecto Agile debe ser una persona capaz de, dadas unas especificaciones y un presupuesto, tener claro desde el primer instante qué es lo que hay que hacer y cómo llevarlo a cabo.<br>\r\nUn arquitecto no sabe lo que va a pasar en el futuro pero tiene los conocimientos, la experiencia y la audacia necesarias para anticiparse a lo que ha de suceder y lograr conducir el proyecto por un camino suficientemente equilibrado como para terminar en plazo y en precio.</p>\r\n<ul>\r\n<li><p>Lo primero que hará un arquitecto es, no sólo asegurarse de haber comprendido la funcionalidad y el alcance completo del proyecto, sino el objetivo final del mismo y las motivaciones que han llevado a desear su desarrollo.</p></li>\r\n<li><p>Acto seguido buscará y seleccionará al equipo necesario para llevarlo a cabo y se encargará de mantener a dicho equipo altamente motivado y organizado, contando con las herramientas adecuadas para maximizar su potencial y productividad a la vez que transmite al mismo los objetivos y motivaciones del proyecto como si fuera suyo.</p></li>\r\n<li><p>Planificará cada aspecto del proyecto buscando eliminar la mayor cantidad posible de incertidumbre en las etapas iniciales del mismo, es decir, tratará de probar o experimentar con las partes más complejas o delicadas del mismo cuanto antes para evitar sorpresas de última hora o replantearlas en caso de que su desarrollo fuera inviable dadas las circunstancias del proyecto.</p></li>\r\n<li><p>Desde el inicio del desarrollo garantizará la calidad de los productos llevados a cabo y se asegurará de que cuenten con un diseño que favorezca su escalabilidad y mantenibilidad. Además velará para que dichos productos se mantengan libres de errores.</p></li>\r\n<li><p>Por último, el factor diferencial que convertirá en Agile al arquitecto será la búsqueda del mayor índice posible de Retorno de Inversión tan pronto como sea posible o tenga sentido dentro del proyecto, generando entregables operativos de funcionalidad acotada a intervalos regulares de tiempo y analizando y reconduciendo el rumbo del proyecto para adaptarse a los cambios de definición y alcance que el cliente pueda necesitar, consiguiendo con ello minimizar el coste de los mismos.</p></li>\r\n</ul>\r\n<p>Llegar a convertirse en arquitecto no suele ser una tarea ni rápida ni sencilla. Para ello se necesitará una buena dosis de los siguientes ingredientes:</p>\r\n<ul>\r\n<li><p>Observación e imitación de todo aquel que pueda enseñarnos algo.</p></li>\r\n<li><p>Esfuerzo, perseverancia y responsabilidad para llevar siempre el compromiso entre productividad y eficiencia al nivel de máximo equilibrio.</p></li>\r\n<li><p>Estudio, pues un buen arquitecto es como un médico, debe ser capaz de reciclarse más rápido de lo que lo hace su propia ciencia, en este caso, la tecnología.</p></li>\r\n<li><p>Audacia y atrevimiento para innovar y experimentar, pues llevar las cosas a la práctica es la única manera real de afianzar los conocimientos adquiridos y deshechar aquellos que, por su eficacia o complejidad, no sean adecuados en términos prácticos.</p></li>\r\n</ul>\r\n<p>Una de las labores fundamentales del arquitecto, si además se diera el caso probable de que éste ejerza el rol de Scrum Master dentro del equipo, será la de eliminar cualquier tipo de impedimento o distracción que dificulte o impida el trabajo óptimo de cada uno de los miembros del mismo.</p>\r\n<div class=\"links-container\">\r\n    <div class=\"left-side-link-container\">\r\n        <a href=\"[[ROUTE:loading-]]\" class=\"post-content-link\">< Loading...</a>\r\n    </div\r\n    ><div class=\"right-side-link-container\">\r\n        <a href=\"[[ROUTE:lean-agile-scrum-]]\" class=\"post-content-link\">Agile, Lean, Scrum, Kanban… ¿cuál es la &nbsp;diferencia? ></a>\r\n    </div>\r\n</div>\r\n<br>','uploads/posts/150329_agile-architect/agile-architect.jpg','The Agile Architect',NULL,'Becoming An Agile Architect - Objetivos y motivaciones del arquitecto Ágil en un entorno Scrum, TDD y Continuous integration','En este post se habla de las prácticas y objetivos que un arquitecto Ágil debe seguir para llevar a cabo su trabajo de forma correcta y dentro de un contexto de agilismo','agile lean scrum kanban tdd extreme programming architect arquitectura clean code programacion coaching continuous integration integración continua alejandro barba','2015-03-22 13:18:07','2015-06-26 19:04:19'),(3,3,1,8,'Loading...','<p>El hilo conductor del blog estará formado por varios proyectos, en principio tengo dos en la cabeza, con los que pretendo plantear diversos problemas o necesidades, analizar las posibles soluciones e ir llevando a cabo, a lo largo de una serie de posts, el desarrollo de cada uno mediante la implementación de tecnologías que den solución a dichos problemas, tratando siempre de buscar algún tipo de valor añadido.<br>\r\nEl primero de los proyectos sería el propio blog, el segundo, una herramienta Agile de gestión de equipos de desarrollo mediante Scrum.</p>','<p><span style=\"font-size: 60px\">E</span>l hilo conductor del blog estará formado por varios proyectos, en principio tengo dos en la cabeza, con los que pretendo plantear diversos problemas o necesidades, analizar las posibles soluciones e ir llevando a cabo, a lo largo de una serie de posts, el desarrollo de cada uno mediante la implementación de tecnologías que den solución a dichos problemas, tratando siempre de buscar algún tipo de valor añadido.<br>\r\nEl primero de los proyectos sería el propio blog, el segundo, una herramienta Agile de gestión de equipos de desarrollo mediante Scrum.</p>\r\n<p>Durante el desarrollo de los proyectos detallaré mi experiencia y punto de vista sobre cada una de las etapas del ciclo de vida de los mismos y explicaré cómo convertir esta frase tan de “desarrollo en cascada” en algo más Agile.</p>\r\n<ul>\r\n<li><p>Hablaremos de cómo formar un equipo, cómo elegir los roles necesarios dentro del mismo y cómo seleccionar al candidato más adecuado para cada uno de los puestos. Compartiré con vosotros mis preferencias sobre dónde buscar y cómo conseguir que, además de poder elegir a la persona que quieras, que dicha persona quiera también formar parte de nuestro proyecto.</p></li>\r\n<li><p>Compartiré con vosotros las mejores técnicas de desarrollo que he ido aprendiendo y madurando por mi cuenta a lo largo de mi trayectoria profesional o que me han resultado útiles en determinadas circunstancias. Explicaré mi visión sobre cómo organizar el código y escogeremos las herramientas más adecuadas para que nuestro equipo lleve a cabo su trabajo de forma óptima.</p></li>\r\n<li><p>Os hablaré de las principales técnicas de testing, desde simples pruebas ejecutadas por un operador al Diseño Orientado a Pruebas de Aceptación (Acceptance Test Driven Development) o al Diseño Orientado a Comportamiento (Behaviour Driven Development).</p></li>\r\n<li><p>Aprenderemos a configurar un servidor de Integración Continua (Continuous Integration) y cómo sacarle el mayor partido mediante el uso de los plugins adecuados y la instalación de un servidor de integración con el que beneficiarse de la Entrega Continua (Continuous Delivery). Además entenderemos la importancia clave que un departamento de control de calidad (Quality Assurance) puede jugar en nuestros proyectos.</p></li>\r\n<li><p>Llegado el momento de desplegar nuestro trabajo en producción aprenderemos a configurar los servidores, a elegir la cantidad y configuración de máquinas adecuadas, balancearlas, montar grupos de auto escalado, a automatizar los despliegues, etc. y todo ello sin descuidar la seguridad de nuestros sistemas y nuestros datos.</p></li>\r\n<li><p>Por último, aunque no necesariamente lo abordaremos en este orden, explicaré cómo convertirnos en Agile. Aprenderemos a enfocar, no sólo nuestro proyecto sino cada una de sus tareas, de forma ágil mediante el framework Scrum. Entenderemos los pormenores de dicho framework y analizaremos sus ventajas, tanto las evidentes como las no tan evidentes. Compararemos Scrum con otras metodologías ágiles y aprenderemos a gestionar nuestro equipo para convertirnos en respetados líderes en lugar de temidos jefes.</p></li>\r\n</ul>\r\n<div class=\"links-container\">\r\n    <div class=\"left-side-link-container\">\r\n        <a href=\"[[ROUTE:blog-bootstrap-]]\" class=\"post-content-link\">< Blog Bootstrap</a>\r\n    </div\r\n    ><div class=\"right-side-link-container\">\r\n        <a href=\"[[ROUTE:agile-architect-]]\" class=\"post-content-link\">Arquitecto Agile ></a>\r\n    </div>\r\n</div>\r\n<br>','uploads/posts/150322_loading/loading.jpg','Blog loading','http://mag.splashnology.com/article/modern-progress-bar-design-40-examples-for-inspiration/6495/','Becoming An Agile Architect - Los proyectos del Blog Ágil sobre coaching, Scrum, TDD y Continuous integration','Descripción de los dos proyectos que actuarán como hilo conductor de los posts de la primera etapa del Blog y que servirán como ejemplo para ilustrar las prácticas de Scrum, TDD y Continuous Integration que planteadas en el Blog','agile lean scrum kanban tdd extreme programming architect arquitectura clean code programacion coaching continuous integration integración continua alejandro barba projects proyectos','2015-03-23 23:36:02','2015-06-26 19:04:19'),(4,4,1,9,'Agile, Lean, Scrum, Kanban… ¿cuál es la diferencia?','<p>Los términos Agile, Scrum, Kanban, etc. están de moda, es un hecho, pero si empezamos a investigar en qué consiste cada uno enseguida nos encontramos con otros términos con los que se entrecruzan e, inmediatamente, nos damos cuenta de que no somos capaces de distinguir dónde termina cada uno y empieza el siguiente.</p>\r\n<p>Por un lado, unos parecen ser filosofías y otros metodologías. Unos parecen más amplios y da la impresión de que engloban a otros pero... ¿quién es quién?</p>','<p><span style=\"font-size: 60px\">L</span>os términos Agile, Scrum, Kanban, etc. están de moda, es un hecho, pero si  empezamos a investigar en qué consiste cada uno enseguida nos encontramos con otros términos con los que se entrecruzan e, inmediatamente, nos damos cuenta de que no somos capaces de distinguir dónde termina cada uno y empieza el siguiente.</p>\r\n<p>Por un lado, unos parecen ser filosofías y otros metodologías. Unos parecen más amplios y da la impresión de que engloban a otros pero, cuando parece que los conceptos empiezan a aclararse, se llega a la conclusión de que Scrum es una forma de Agile, Kanban viene de Lean pero también es Agile aunque Scrum es anterior a Agile… En medio de esta confusión… ¿quién es quién?</p>\r\n<p>En cierto modo todo este solapamiento no sólo es normal sino inevitable dado que todos son sistemas diseñados para incrementar la productividad por lo que es de esperar que distintas mentes brillantes en distintos momentos de la historia y, ante problemas de naturaleza similar, lleguen a las mismas o parecidas conclusiones. Cada uno de estos sistemas persigue los mismos objetivos, aumentar la productividad, mejorar la calidad y reducir el coste y el tiempo empleado en el desarrollo de sus productos.</p>\r\n<p>Si nos remontamos hacia atrás en el tiempo se podría decir que el germen común a todos ellos reside en Henry Ford y Frederick Taylor y sus avances en productividad durante la revolución industrial. Fueron estos avances los que inspiraron al japonés Taiichi Ohno, director y consultor de Toyota, para desarrollar el método Lean de producción industrial.</p>\r\n<ul>\r\n    <li>\r\n        <p><span style=\"font-weight:bold\">Lean</span> significa magro, esbelto y la base de su filosofía consiste en eliminar los “desperdicios”, es decir, eliminar todo aquello que no aporte valor o, incluso, que no lo hará en el futuro. Uno de los ejemplos más sorprendentes pero simples de este principio consiste en la eliminación de las puertas en los armarios de muchas empresas japonesas, si no se esconde nada… ¿qué aporta la puerta?</p>\r\n        <p>El término fue llevado al campo del desarrollo de software por Mary y Tom Poppendieck en su libro Lean Software Development. En él realizan una adaptación de los principios industriales.</p>\r\n        <p>Los valores de Lean son:</p>\r\n        <p>\r\n            <ul>\r\n                <li><p>Eliminar los desperdicios (código innecesario, burocracia, comunicación lenta, reuniones innecesarias, etc.)</p></li>\r\n                <li><p>Ampliar el aprendizaje</p></li>\r\n                <li><p>Eliminar incertidumbre antes de tomar decisiones o decidir lo más tarde posible</p></li>\r\n                <li><p>Reaccionar lo antes posible ante el cambio</p></li>\r\n                <li><p>Potenciar el equipo</p></li>\r\n            </ul>\r\n        </p>\r\n    </li>\r\n    <li>\r\n        <p><span style=\"font-weight:bold\">Agile</span> es un movimiento de reacción ante las estrictas reglas de las metodologías tradicionales de desarrollo de software. Se formaliza en Febrero de 2001, en el Snowbird Resort, Utah, donde 17 conocidos desarrolladores y defensores de metodologías que promovían técnicas ágiles firman el Agile Manifesto, un listado de principios que recoge la esencia filosófica del agilismo.</p>\r\n        <p>De todos los sistemas de los que estamos hablando se podría decir que Agile representa el más filosófico, pues no es una metodología ni un framework que diga cómo hacer las cosas, sino un conjunto de principios y valores a tener en cuenta para evitar los problemas de los sistemas tradicionales de desarrollo de software.</p>\r\n        <p>Pese a ser anteriores, tanto Lean cómo Scrum podrían ser considerados ágiles pues su forma de plantear el desarrollo y sus valores encajan dentro del Agile Manifesto y ambos ejercieron una gran influencia en la redacción del mismo.</p>\r\n    </li>\r\n    <li>\r\n        <p><span style=\"font-weight:bold\">Scrum</span> es un framework. No es una filosofía ni una metodología de trabajo. Sus creadores lo definen como un framework dado que está formado por una serie de roles, eventos, artefactos y normas precisos cada uno de los cuales tiene un fin específico por lo que si no se hace uso de todos y cada uno de ellos, según sus creadores, se estará haciendo algo similar a Scrum, pero no Scrum.</p>\r\n        <p>Scrum proviene del trabajo de Ikujiro Nonaka e Hirotaka Takeuchi a principios de los 80 aunque su forma final se debe al trabajo “Scrum Development Process” que Ken Schwaber presentó en OOPSLA 95. Tanto Ken Schwaber como Jeff Sutherland son considerados sus creadores oficiales.</p>\r\n        <p>Los principios de Scrum encajan a la perfección dentro de la filosofía Agile y sus creadores forman parte de los firmantes del Agile Manifesto.</p>\r\n    </li>\r\n    <li>\r\n        <p>El método <span style=\"font-weight:bold\">Kanban</span> basa su funcionamiento en la entrega just-in-time (justo a tiempo), otro modelo de producción industrial proveniente de las factorías de Toyota. </p>\r\n        <p>Uno de los fuertes de Kanban es la gestión visual del proceso mediante tableros e indicadores (kanban, en japonés, significa tarjeta). Pese a lo que muchos puedan creer, los tableros de Scrum para el manejo de Sprints y Releases no son propios del framework sino importados de Kanban.</p>\r\n        <p>Las prácticas fundamentales del método Kanban son:</p>\r\n        <p>\r\n            <ul>\r\n                <li><p>Visualizar el flujo de trabajo y su avance</p></li>\r\n                <li><p>Limitar el trabajo en curso para evitar cuellos de botella</p></li>\r\n                <li><p>Dirigir y gestionar el flujo de trabajo</p></li>\r\n                <li><p>Indicar y comprender claramente las reglas del proceso</p></li>\r\n                <li><p>Reconocer y aprovechar las oportunidades de mejora</p></li>\r\n            </ul>\r\n        </p>\r\n    </li>\r\n</ul>\r\n<p>Se podría decir, por tanto, que cada uno de estos métodos, frameworks o filosofías comparten una serie de valores u objetivos comunes, los cuales son reconocidos y defendidos por el Agile Manifesto:</p>\r\n<ul>\r\n    <li><p>Entrega iterativa e incremental de producto terminado y usable</p></li>\r\n    <li><p>Reacción temprana al cambio</p></li>\r\n    <li><p>Inspección del trabajo completado y del proceso llevado a cabo</p></li>\r\n    <li><p>Adaptación del proceso para mejorarlo</p></li>\r\n    <li><p>Potenciación y motivación del equipo</p></li>\r\n    <li><p>Comunicación</p></li>\r\n    <li><p>Desarrollo sostenible en cada etapa del ciclo de vida del proyecto</p></li>\r\n    <li><p>Simplicidad y diseño emergente</p></li>\r\n</ul>\r\n<p>Hablaremos más de cada uno de ellos, pero sobre todo de Scrum, en posts posteriores.</p>\r\n<div class=\"links-container\">\r\n    <div class=\"left-side-link-container\">\r\n        <a href=\"[[ROUTE:agile-architect-]]\" class=\"post-content-link\">< Arquitecto Agile</a>\r\n    </div\r\n    ><div class=\"right-side-link-container\">\r\n        <a href=\"[[ROUTE:scrum-framework-one-]]\" class=\"post-content-link\">Scrum. El framework de los roles, eventos y artefactos ></a>\r\n    </div>\r\n</div>\r\n<br><br>','uploads/posts/150502_lean_agile_scrum_kanban/lean_agile_scrum_kanban.jpg','Agile, Lean, Scrum, Kanban… ¿cuál es la diferencia?','http://www.fotoblur.com/','Becoming An Agile Architect - Agile, Lean, Scrum y Kanban. Similitudes y diferencias','Análisis de las principales corrientes del Agilismo y sus metodologías orientadas al desarrollo de software. Parecidos y diferencias entre Agile, Lean, Scrum y Kanban','agile lean scrum kanban tdd extreme programming architect arquitectura clean code programacion coaching continuous integration integración continua alejandro barba diferencias differences','2015-05-02 21:38:38','2015-06-26 19:04:19'),(5,5,1,12,'Scrum. El framework de los roles, eventos y artefactos','<p>Scrum es, sin duda, la más popular de entre las ramas del mundo Agile orientadas al desarrollo de software. El motivo es sencillo, Scrum es, como sus propios creadores apuntan, un framework, ni una filosofía, ni una disciplina, ni una metodología ni nada por el estilo, simplemente, un framework.</p>\r\n<p>Scrum es un framework formado por un conjunto de roles, eventos y artefactos concebidos y diseñados para facilitar la implantación de los valores Agile en un entorno de trabajo, es por eso que es también uno de los colores Agile más sencillo de implementar...</p>','<p><span style=\"font-size: 60px\">A</span>ntes de empezar a pensar en el código del primer proyecto comentado en el post <a href=\"[[ROUTE:loading-]]\" class=\"post-content-link\">Loading...</a> resulta imprescindible una introducción a <a href=\"https://www.scrum.org/\" target=\"_blank\" class=\"post-content-link\">Scrum</a>, dado que basaremos nuestra forma de trabajo en dicha metodología Agile.</p>\r\n<p>Scrum es, sin duda, la más popular de entre las ramas del mundo Agile orientadas al desarrollo de software. El motivo es sencillo, Scrum es, como sus propios creadores apuntan, un framework, ni una filosofía, ni una disciplina, ni una metodología ni nada por el estilo, simplemente, un framework.</p>\r\n<div class=\"green_text_box\">\r\n    <div class=\"generic_icon\"></div\r\n    ><div class=\"generic_text_container\">Scrum es un <span style=\"font-weight:bold\">framework</span> formado por un conjunto de <span style=\"font-weight:bold\">roles, eventos y artefactos</span> concebidos y diseñados para facilitar la implantación de los valores Agile en un entorno de trabajo o en el seno de una entera organización, es por eso que es también uno de los colores Agile más sencillo de implementar, pues sólo hay que seguir una serie de normas precisa y minuciosamente descritas.</div>\r\n</div>\r\n<p>Como ya señalado en el post <a href=\"[[ROUTE:lean-agile-scrum-]]\" class=\"post-content-link\">Agile, Lean, Scrum, Kanban… ¿cuál es la diferencia?</a> es fácil pensar que Scrum sea una especialización dentro del mundo Agile, pero no es así, pues Scrum es unos diez años anterior al <a href=\"http://www.agilemanifesto.org/\" target=\"_blank\" class=\"post-content-link\">Agile Manifesto</a>, aunque influyó en buena manera en la redacción de éste último, pues sus dos creadores formaban parte de los 17 firmantes.</p>\r\n<div class=\"green_text_box\">\r\n    <div class=\"generic_icon\"></div\r\n    ><div class=\"generic_text_container\">Scrum es un framework pensado para gestionar de forma eficiente tanto el desarrollo como el mantenimiento de <span style=\"font-weight:bold\">productos complejos en entornos complejos</span>, y entre sus mayores virtudes se encuentran la <span style=\"font-weight:bold\">gestión del cambio</span> y el <span style=\"font-weight:bold\">control del riesgo</span>.</div>\r\n</div>\r\n<p>La gestión del cambio y el control del riesgo se consigue planificando el desarrollo de los proyectos en iteraciones de corta duración llamadas <span style=\"font-weight:bold\">Sprints</span>, tras cada una de las cuales se inspecciona el trabajo completado directamente con el cliente y se decide si dicho incremento avanza en la dirección correcta o no, pues como reza un antiguo proverbio chino, <span style=\"font-style:italic\">si continuas avanzando en la misma dirección llegarás exactamente al lugar al que te diriges</span>.</p>\r\n<br>\r\n<h2>Principios de Scrum</h2>\r\n<p>Scrum está basado en el <a href=\"https://es.wikipedia.org/wiki/Empirismo\" target=\"_blank\" class=\"post-content-link\">empirismo</a>, es decir, observación y medida de experiencias pasadas en vez de predicciones sin una base tangible. Esta condición hace que, <span style=\"font-weight:bold\">para que sea posible hacer Scrum, se requiere un tiempo haciendo Scrum</span>, es decir, se necesita un cierto rodaje para poder calcular la capacidad de producción, o velocidad de desarrollo en términos de Scrum, de los equipos de desarrollo implicados en base a resultados anteriores. Esto no significa que un equipo sin experiencia no pueda empezar a hacer Scrum, simplemente quiere decir que las predicciones que realicen para sus iteraciones o Sprints serán significativamente más acertadas a medida que los Sprints se vayan sucediendo y se vaya ganando experiencia.</p>\r\n<p>Los valores fundamentales de Scrum son:</p>\r\n<ul>\r\n    <li>\r\n        <p>\r\n            <span style=\"font-weight:bold\">Transparencia.</span> Todos los aspectos de un proceso deben ser transparentes a todos sus responsables, es decir, no podemos excluir a los desarrolladores de la parte de diseño ni al consultor de producto de los problemas del desarrollo.<br>\r\n            Los primeros pueden tener mucho que decir en cuanto a cómo un diseño demasiado complejo puede encarecer el proyecto, quizás a cambio de un retorno artístico ínfimo y el segundo podría tratar de proponer al cliente alternativas a una funcionalidad si ésta resultara tan costosa en tiempo y problemática respecto a su desarrollo que pudiera hacer peligrar la calidad del producto innecesariamente.\r\n        </p>\r\n        <div class=\"green_text_box\">\r\n            <div class=\"generic_icon\"></div\r\n            ><div class=\"generic_text_container\">Una de las consecuencias inmediatas de la transparencia consiste en el sentimiento de propiedad colectiva del proyecto y cooperación interdepartamental, queriendo decir esto que todos los implicados cooperan activamente pues el resultado afecta e interesa a todos por igual.</div>\r\n        </div>\r\n    </li>\r\n    <li>\r\n        <p><span style=\"font-weight:bold\">Inspección.</span> En un proyecto Scrum la inspección debe ser una constante, es decir, se debe cuestionar cada paso una vez completado y en equipo y discutir y decidir si resulta efectivo o no. En Scrum cualquier momento es bueno para la inspección aunque cuenta con eventos específicos dedicados a tal fin.</p>\r\n    </li>\r\n    <li>\r\n        <p><span style=\"font-weight:bold\">Adaptación.</span> Si tras la inspección se decide que alguno de los procedimientos o tareas que se ha llevado a cabo nos alejan de la consecución del objetivo del proyecto dicha práctica debe ser modificada o sustituida por otra cuyo efecto sea el deseado.<br>\r\n            En general, la adaptación se decide al final de cada Sprint aunque debe tener lugar lo antes posible una vez que el inconveniente o problema ha sido detectado es por ello que los Daily Scrum, reunión diaria de planificación e inspección en Scrum, son también momentos de inspección y adaptación.</p>\r\n    </li>\r\n</ul>\r\n<p>Aunque no sea oficial, me gustaría añadir otro elemento que, en mi opinión, resulta ser inherente a Scrum y fundamental para su buena marcha, el equipo. Scrum es cosa de equipos y la primera gran ventaja que Scrum nos aportará de forma sorprendente, y casi inmediata, es que Scrum genera equipo.</p>\r\n<p>Es difícil gestionar un proyecto Scrum con un equipo de una única persona. Para un freelance podría ser una gran ventaja, de cara al cliente, abordar el proyecto de forma iterativa pues se aumenta la frecuencia de feedback, se mantiene el riesgo bajo control volviendo a priorizar y planificar las tareas pero se pierde el elemento de control de los compañeros de equipo, es decir, si empezamos haciendo algo técnico de una determinada manera porque creemos que es lo correcto, difícilmente alguien nos hará ver si estamos equivocados o si existe otra forma mejor de hacerlo y, por tanto, carecen de sentido los eventos de inspección y adaptación que definiremos enseguida por lo cual, y por definición de sus creadores, si no usas todos los elementos de Scrum estarás haciendo algo parecido, pero no será Scrum. De hecho ellos recomiendan no configurar equipos de Scrum de menos de tres miembros dentro del Equipo de Desarrollo.</p>\r\n<br>\r\n<h2>Componentes de Scrum</h2>\r\n<p>Scrum está formado por tres tipos de elementos que analizaremos en detalle en las secciones siguientes, roles, eventos y artefactos. Además Scrum define una serie de normas que los coordinan entre sí.</p>\r\n<p>Como ya mencionado, según sus creadores, cada uno de estos elementos es parte fundamental del framework y si se decide prescindir de alguno de ellos no se estará realmente haciendo Scrum, algo parecido sí, pero no Scrum.</p>\r\n<p>Este tipo de situaciones se conoce como <a href=\"https://www.scrum.org/ScrumBut\" target=\"_blank\" class=\"post-content-link\">ScrumButs</a>, es decir, se modifican las reglas de Scrum para tratar de sortear un problema.</p>\r\n<p>Suelen responder a la sintaxis:</p>\r\n<p style=\"text-align:center\"><span style=\"font-weight:bold\">(ScrumBut)(Razón)(Solución adoptada)</span></p>\r\n<p>Por ejemplo, (Usamos Scrum, pero)(tener un Daily Scrum cada día supone mucha carga de horas)(por eso lo hacemos sólo una vez a la semana).</p>\r\n<p>En cualquier caso, lo que estemos haciendo no podrá ser llamado Scrum.</p>\r\n\r\n<div class=\"key_points_text_box\">\r\n    <div class=\"title_box\">\r\n        <div class=\"generic_icon_container\"></div>\r\n        <div class=\"generic_title_container\">Key Points</div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">Scrum es un framework</div>\r\n        </div>\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">Scrum está compuesto por roles, eventos y artefactos</div>\r\n        </div>\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">Scrum sigue los valores y principios Agile</div>\r\n        </div>\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">Agile ayuda a gestionar el cambio y controlar el riesgo</div>\r\n        </div>\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">Scrum se basa en el empirismo</div>\r\n        </div>\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">Los principios de Scrum son transparencia, inspección y adaptación Los principios de Scrum son transparencia, inspección y adaptación</div>\r\n        </div>\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">Scrum genera equipo</div>\r\n        </div>\r\n    </div>\r\n</div>\r\n<div class=\"links-container\">\r\n    <div class=\"left-side-link-container\">\r\n        <a href=\"[[ROUTE:lean-agile-scrum-]]\" class=\"post-content-link\">< Agile, Lean, Scrum, Kanban… ¿cuál es la diferencia?</a>\r\n    </div\r\n    ><div class=\"right-side-link-container\">\r\n        <a href=\"[[ROUTE:scrum-framework-two-]]\" class=\"post-content-link\">El Equipo Scrum. Scrum Master, Product Owner y Developer Team ></a>\r\n    </div>\r\n</div>\r\n<br>','uploads/posts/150621_scrum_framework/scrum_framework.jpg','Scrum. El framework de los roles, eventos y artefactos','http://www.pbase.com/dubaidavid/image/58171065/original','Becoming An Agile Architect - Scrum framework. Valores, roles, eventos y artefactos','Primer post de la serie Scrum en el que se introduce el framework y se enumeran sus valores y principios así como sus roles, eventos, y artefactos','agile lean scrum kanban tdd extreme programming architect arquitectura clean code programacion coaching continuous integration integración continua alejandro barba events roles values artifacts','2015-06-21 21:31:07','2015-06-30 18:45:28'),(6,6,1,13,'El Equipo Scrum. Scrum Master, Product Owner y Developer Team','<p>Los equipos en Scrum son:</p>\r\n<p><span style=\"font-weight:bold\">Auto-organizados.</span> El equipo, en su totalidad, es el único responsable de decidir cómo hacer su trabajo sin que nadie ajeno al mismo pueda imponer condiciones y;</p>\r\n<p><span style=\"font-weight:bold\">Multi-disciplinares.</span> Dentro del equipo hay profesionales con experiencia suficiente en cada uno de los campos necesarios (programación, diseño, marketing, etc) para completar una versión 100% funcional y potencialmente entregable de las funcionalidades comprometidas para el Sprint.</p>','<p><span style=\"font-size: 60px\">E</span>l <span style=\"font-weight:bold\">Equipo en Scrum</span> está formado por un único <span style=\"font-weight:bold\">Product Owner</span>, un único <span style=\"font-weight:bold\">Scrum Master</span> y un único <span style=\"font-weight:bold\">Equipo de Desarrollo</span>. Es importante la palabra único pues un equipo de Scrum no puede tener, en ningún caso, dos Product Owner o dos Scrum Master aunque, tanto estos como los miembros del equipo de desarrollo sí que podrían formar parte de más de un equipo Scrum.</p>\r\n<p>Más que frecuente es recomendable que, si para un mismo proyecto en el que se desarrolla un único gran producto existen varios equipos de Scrum, estos compartan un único Product Owner, pues se trata del consultor de negocio o la persona con mayor conocimiento y capacidad de decisión sobre el producto a desarrollar (nos referimos a conocimientos a nivel de lógica de negocio del producto, no a nivel técnico o de desarrollo). Si el número de equipos fuera tan elevado que un único Product Owner no fuera capaz de gestionar tantos equipos cada equipo o subconjunto de equipos tendría un Product Owner, los cuales reportarían a un Line Product Owner, aunque esto ya es entrar en Scaled Scrum.</p>\r\n<p>Los equipos en Scrum son:</p>\r\n<ul>\r\n    <li>\r\n        <p><span style=\"font-weight:bold\">Auto-organizados.</span> El equipo, en su totalidad, es el único responsable de decidir cómo hacer su trabajo sin que nadie ajeno al mismo pueda imponer condiciones y;</p>\r\n    </li>\r\n    <li>\r\n        <p><span style=\"font-weight:bold\">Multi-disciplinares.</span> Dentro del equipo hay profesionales con experiencia suficiente en cada uno de los campos necesarios (programación, diseño, marketing, etc) para completar una versión 100% funcional y potencialmente entregable de las funcionalidades comprometidas para el Sprint.</p>\r\n    </li>\r\n</ul>\r\n<br>\r\n<h2>El Product Owner</h2>\r\n<p>Es el responsable de todo lo que tiene que ver con el producto, es decir, decide y prioriza qué es lo que se va a hacer y aclara cómo debe funcionar. Debe ser capaz de responder a cualquier pregunta que el equipo de desarrollo pueda plantear.</p>\r\n<div class=\"green_text_box\">\r\n    <div class=\"generic_icon\"></div\r\n    ><div class=\"generic_text_container\">Se podría decir que el Product Owner es el <span style=\"font-weight:bold\">experto en el producto</span>. Debe conocer y ser capaz de explicar la lógica de negocio del mismo hasta sus últimos detalles y es la persona que actúa como puente o intermediario entre el equipo de desarrollo y el cliente, es por ello que este puesto suele ser ocupado por consultores de negocio o, en ocasiones, perfiles relacionados con el mundo comercial.</div>\r\n</div>\r\n<p>Además de conocer el producto debe conocer las necesidades, criterios y metas del cliente para ser capaz de maximizar el valor, tanto del producto como del trabajo del equipo de desarrollo, es decir, debe ser capaz de conseguir que, en cada incremento, el equipo de desarrollo entregue aquellas funcionalidades que satisfagan en mayor medida las necesidades del cliente a la vez que éste consigue el mayor ROI posible (retorno de inversión) y, por supuesto, que el cliente esté satisfecho con el producto entregado. Esto significa que el producto entregado cumpla la <span style=\"font-weight:bold\">definición de terminado</span> que el cliente acuerde con el Product Owner y que éste último negocie con el equipo de desarrollo.</p>\r\n<p>El hecho de que el Product Owner sea el responsable del producto lo convierte, por tanto, en propietario y responsable del Product Backlog, uno de los tres artefactos de Scrum constituido por el listado priorizado y detallado de todos los requerimientos y funcionalidades del producto y que explicaremos en detalle en una sección posterior.</p>\r\n<p>Las tareas del Product Owner se pueden resumir en las siguientes:</p>\r\n<ul>\r\n    <li>\r\n        <p><span style=\"font-weight:bold\">Mantener el Product Backlog</span>, cuyos ítems recogen todos los requisitos, funcionalidades, prototipos, bugs, etc que es necesario resolver para completar el producto.</p>\r\n    </li>\r\n    <li>\r\n        <p>Expresar de forma <span style=\"font-weight:bold\">suficientemente clara cada elemento</span> en el Product Backlog.</p>\r\n    </li>\r\n    <li>\r\n        <p><span style=\"font-weight:bold\">Priorizar</span> los elementos del <span style=\"font-weight:bold\">Product Backlog</span> en la manera en que mejor se puedan alcanzar los objetivos del proyecto, se maximice el ROI, se optimice la carga de trabajo del equipo o cualquier otra razón que el Product Owner considere adecuada.</p>\r\n    </li>\r\n    <li>\r\n        <p>Asegurarse de que el <span style=\"font-weight:bold\">Product Backlog es visible</span>, claro y <span style=\"font-weight:bold\">transparente</span> para todos los componentes del equipo Scrum.</p>\r\n    </li>\r\n    <li>\r\n        <p><span style=\"font-weight:bold\">Optimizar el valor del trabajo</span> del equipo de desarrollo.</p>\r\n    </li>\r\n    <li>\r\n        <p><span style=\"font-weight:bold\">Resolver las dudas</span> que los miembros del equipo de desarrollo puedan tener en cuanto a lógica de negocio del proyecto.</p>\r\n    </li>\r\n</ul>\r\n<br>\r\n<h2>El equipo de desarrollo</h2>\r\n<div class=\"green_text_box\">\r\n    <div class=\"generic_icon\"></div\r\n    ><div class=\"generic_text_container\">Está formado por el conjunto de profesionales que cada Sprint trabaja de forma colaborativa para desarrollar un incremento de producto completo y potencialmente entregable.</div>\r\n</div>\r\n<p>El equipo de desarrollo Scrum tiene las siguientes características:</p>\r\n<ul>\r\n    <li>\r\n        <p>Es <span style=\"font-weight:bold\">multi-disciplinar.</span> Una vez que se haya comprometido a entregar una serie de elementos del Product Backlog en un Sprint contará con todas las capacidades necesarias a nivel humano, con conocimientos en todas las disciplinas necesarias, para completar dichos elementos.</p>\r\n    </li>\r\n    <li>\r\n        <p>Es <span style=\"font-weight:bold\">auto-organizado.</span> Podrá planificar, organizar y priorizar el trabajo en la manera en que, consensuadamente, considere más oportuna, sin que nadie pueda poner objeciones a cómo o en qué orden aborda dichas tareas o en qué medida las divide y asigna a cada uno de sus miembros.</p>\r\n    </li>\r\n    <li>\r\n        <p><span style=\"font-weight:bold\">No existen sub-equipos</span> dentro de un equipo Scrum ni títulos para sus miembros más allá del de desarrollador, es decir, no hay encargados o responsables dentro del equipo de desarrollo pues la responsabilidad recae siempre en el equipo completo, sin importar quién pueda haber llevado a cabo cada parte del trabajo.</p>\r\n    </li>\r\n    <li>\r\n        <p>Un equipo de desarrollo estará formado por entre <span style=\"font-weight:bold\">tres y nueve miembros</span>, sin incluir al Product Owner ni al Scrum Master. Equipos menores pueden experimentar dificultades a la hora de contar con todas las habilidades necesarias para completar el trabajo y equipos mayores pueden llegar a ser demasiado difíciles de gestionar.</p>\r\n    </li>\r\n</ul>\r\n<br>\r\n<h2>El Scrum Master</h2>\r\n<div class=\"green_text_box\">\r\n    <div class=\"generic_icon\"></div\r\n    ><div class=\"generic_text_container\">Se tiende a pensar que el Scrum Master es el Project Manager moderno, cuando en realidad el Scrum Master es tan sólo el encargado de hacer entender Scrum a todos los implicados y velar por su cumplimiento.</div>\r\n</div>\r\n<p>El Scrum master debe ser el <span style=\"font-weight:bold\">experto en Scrum</span>, es decir, debe conocer de manera precisa sus roles, eventos y artefactos y sería recomendable que contara con cierta experiencia trabajando con el framework, no obstante, no se trata de una posición que deba estar por encima del resto del equipo Scrum, es decir, no es necesario que sea un jefe de equipo aunque en muchas ocasiones suela coincidir. El rol de Scrum Master podría, perfectamente, ser llevado a cabo por cualquiera de los desarrolladores.</p>\r\n<p>Se suele definir al Scrum Master como un líder <span style=\"font-weight:bold\">servil o facilitador</span> para el equipo Scrum y entre sus principales tareas están las de <span style=\"font-weight:bold\">eliminar impedimentos</span> que puedan dificultar la labor del equipo y hacer entender a las personas ajenas al mismo qué interacciones con el equipo son beneficiosas y cuáles no, por ejemplo, el Scrum Master trata de disuadir al cliente de introducir cambios de diseño o funcionalidad a mitad de un Sprint si estos no están debidamente justificados.</p>\r\n<br>\r\n<h2>El Scrum Master al servicio del Product Owner</h2>\r\n<p>Como otro miembro más del equipo, el Scrum Master ayuda al Product Owner a:</p>\r\n<ul>\r\n    <li>\r\n        <p>Buscar técnicas que le permitan <span style=\"font-weight:bold\">gestionar el Product Backlog</span> de forma efectiva.</p>\r\n    </li>\r\n    <li>\r\n        <p>Ayudar al equipo a entender la necesidad de contar con elementos del Product Backlog claramente definidos.</p>\r\n    </li>\r\n    <li>\r\n        <p><span style=\"font-weight:bold\">Entender</span> la planificación de un producto en un <span style=\"font-weight:bold\">entorno empírico</span>, es decir, ser capaz de planificar el desarrollo completo de un producto en base a la estimación del total de sus funcionalidades y a la velocidad de desarrollo del equipo en lugar de imponer fechas que respondan únicamente a las necesidades del cliente.</p>\r\n    </li>\r\n    <li>\r\n        <p>Asegurarse de que el Product Owner sabe cómo <span style=\"font-weight:bold\">organizar el Product Backlog</span> para maximizar su valor.</p>\r\n    </li>\r\n    <li>\r\n        <p>Entender y <span style=\"font-weight:bold\">practicar el agilismo</span>, es decir, iteración, transparencia, inspección y adaptación.</p>\r\n    </li>\r\n</ul>\r\n<br>\r\n<h2>El Scrum Master al servicio del Equipo de Desarrollo</h2>\r\n<p>El Scrum Master sirve y ayuda al equipo de desarrollo en:</p>\r\n<ul>\r\n    <li>\r\n        <p>Practicar y entender la <span style=\"font-weight:bold\">auto-organización</span> y la <span style=\"font-weight:bold\">multi-disciplinaridad.</span></p>\r\n    </li>\r\n    <li>\r\n        <p>Crear productos de <span style=\"font-weight:bold\">alto valor</span>.</p>\r\n    </li>\r\n    <li>\r\n        <p><span style=\"font-weight:bold\">Eliminar impedimentos</span> que puedan dificultar el progreso del equipo.</p>\r\n    </li>\r\n    <li>\r\n        <p><span style=\"font-weight:bold\">Facilitar los eventos de Scrum</span> según sean requeridos.</p>\r\n    </li>\r\n    <li>\r\n        <p>Enseñar Scrum en entornos en los que éste no esté completamente adoptado y comprendido.</p>\r\n    </li>\r\n</ul>\r\n<br>\r\n<h2>El Scrum Master al servicio de la organización</h2>\r\n<p>Además de a los miembros del equipo de Scrum, el Scrum Master debe fomentar los valores y potenciar los eventos y artefactos de Scrum en el seno completo de la organización mediante:</p>\r\n<ul>\r\n    <li>\r\n        <p>Liderar y <span style=\"font-weight:bold\">asesorar a la organización</span> en su adopción de Scrum.</p>\r\n    </li>\r\n    <li>\r\n        <p>Planificar la <span style=\"font-weight:bold\">implementación de Scrum</span> dentro de la organización, es decir, escoger proyectos <span style=\"font-weight:bold\">pilotos de bajo riesgo</span> con los que empezar a hacer Scrum para introducir la mentalidad en el seno de la misma.</p>\r\n    </li>\r\n    <li>\r\n        <p>Ayudar a los empleados e implicados a <span style=\"font-weight:bold\">entender Scrum</span> y el desarrollo de proyectos de forma empírica.</p>\r\n    </li>\r\n    <li>\r\n        <p><span style=\"font-weight:bold\">Favorecer el cambio</span> que aumente la productividad de los equipos Scrum.</p>\r\n    </li>\r\n    <li>\r\n        <p>Trabajar con otros Scrum Master para mejorar la efectividad de la aplicación de Scrum en la compañía.</p>\r\n    </li>\r\n</ul>\r\n<div class=\"key_points_text_box\">\r\n    <div class=\"title_box\">\r\n        <div class=\"generic_icon_container\"></div>\r\n        <div class=\"generic_title_container\">Key Points</div>\r\n    </div>\r\n    <div class=\"content_container\">\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">Un Equipo Scrum está formado por un Product Owner, un Scrum Master y un Equipo de Desarrollo de entre tres y nueve miembros.</div>\r\n        </div>\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">Los equipos Scrum son auto-organizados y multi-disciplinares.</div>\r\n        </div>\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">El Product Owner es el responsable del producto y de mantener claro, actualizado y priorizado el Product Backlog.</div>\r\n        </div>\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">El Equipo de Desarrollo está formado por profesionales con todas las competencias necesarias para entregar un incremento de producto potencialmente entregable al final de cada Sprint.</div>\r\n        </div>\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">El Scrum Master es el experto en el proceso de Scrum.</div>\r\n        </div>\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">El Scrum Master es un líder servil o facilitador de cara al resto del Equipo Scrum.</div>\r\n        </div>\r\n        <div class=\"row_container\">\r\n            <div class=\"bullet\"></div>\r\n            <div class=\"text\">El Scrum Master debe eliminar impedimentos, facilitar eventos y favorecer el agilismo.</div>\r\n        </div>\r\n    </div>\r\n</div>\r\n<div class=\"links-container\">\r\n    <div class=\"left-side-link-container\">\r\n        <a href=\"[[ROUTE:scrum-framework-one-]]\" class=\"post-content-link\">< Scrum. El framework de los roles, eventos y artefactos</a>\r\n    </div\r\n    ><!-- <div class=\"right-side-link-container\">\r\n        <a href=\"[[RO_UTE:scrum-framework-three-]]\" class=\"post-content-link\">Eventos de Scrum. Sprint ></a>\r\n    </div> -->        \r\n</div>\r\n<br>','uploads/posts/150621_scrum_team/scrum_team.jpg','El Equipo Scrum. Scrum Master, Product Owner y Developer Team','http://hdwallpapergirls.com/assets/large/sunset-art-background-wallpaper','Becoming An Agile Architect - Miembros del equipo Scrum, Scrum Master, Product Owner y Equipo de desarrollo','Segundo post de la serie Scrum en el que se detallan los distintos componentes dentro de un Equipo Scrum así como sus responsabilidades y  características','agile lean scrum kanban tdd extreme programming architect arquitectura clean code programacion coaching continuous integration integración continua alejandro barba scrum master product owner development team','2015-06-21 23:20:36','2015-06-30 18:48:59'),(7,7,1,14,'Eventos de Scrum. Sprint',NULL,NULL,'uploads/posts/150621_scrum_events/scrum_events.gif','Eventos de Scrum. Sprint',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2015-06-21 22:14:12'),(8,8,1,15,'Eventos de Scrum. Reunión de planificación',NULL,NULL,NULL,'Eventos de Scrum. Reunión de planificación',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2015-06-21 21:50:34'),(9,9,1,16,'Eventos de Scrum. Scrum diario o Stand Up Meeting',NULL,NULL,NULL,'Eventos de Scrum. Scrum diario o Stand Up Meeting',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2015-06-21 21:50:34'),(10,10,1,17,'Eventos de Scrum. Revisión de Sprint',NULL,NULL,NULL,'Eventos de Scrum. Revisión de Sprint',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2015-06-21 21:50:34'),(11,11,1,18,'Eventos de Scrum. Retrospectiva de Sprint',NULL,NULL,NULL,'Eventos de Scrum. Retrospectiva de Sprint',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2015-06-21 21:50:34'),(12,12,1,19,'Eventos de Scrum. Reuniones de Grooming o refinamiento del Backlog',NULL,NULL,NULL,'Eventos de Scrum. Reuniones de Grooming o refinamiento del Backlog',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2015-06-21 21:50:34'),(13,13,1,20,'Artefactos de Scrum. Product Backlog',NULL,NULL,NULL,'Artefactos de Scrum. Product Backlog',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2015-06-21 21:50:34'),(14,14,1,21,'Artefactos de Scrum. Historias de Usuario en el Product Backlog',NULL,NULL,NULL,'Artefactos de Scrum. Historias de Usuario en el Product Backlog',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2015-06-21 21:50:34'),(15,15,1,22,'Artefactos de Scrum. Gráfico Release Burndown',NULL,NULL,NULL,'Artefactos de Scrum. Gráfico Release Burndown',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2015-06-21 21:50:34'),(16,16,1,23,'Artefactos de Scrum. Sprint Backlog',NULL,NULL,NULL,'Artefactos de Scrum. Sprint Backlog',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2015-06-21 21:50:34'),(17,17,1,24,'Artefactos de Scrum. Gráfico Sprint Burndown',NULL,NULL,NULL,'Artefactos de Scrum. Gráfico Sprint Burndown',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2015-06-21 21:50:34'),(18,18,1,25,'Artefactos de Scrum. Sprint Taskboard',NULL,NULL,NULL,'Artefactos de Scrum. Sprint Taskboard',NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','2015-06-21 21:50:34');
/*!40000 ALTER TABLE `post_contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `show` int(11) DEFAULT NULL,
  `home` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`),
  UNIQUE KEY `post_id` (`post_id`) USING BTREE,
  UNIQUE KEY `name` (`name`) USING BTREE,
  UNIQUE KEY `order` (`order`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'blog-bootstrap',1,1,1,'2015-03-15 23:00:00','2015-03-22 18:08:03'),(2,'agile-architect',1,1,3,'2015-03-24 23:00:00','2015-03-24 23:02:22'),(3,'loading',1,1,2,'2015-03-19 23:00:00','2015-03-24 23:02:18'),(4,'lean-agile-scrum',1,1,4,'2015-05-02 21:36:10','2015-05-02 19:36:14'),(5,'scrum-framework-one',1,1,5,'2015-06-23 20:40:41','2015-06-23 18:40:44'),(6,'scrum-framework-two',1,1,6,'2015-06-29 23:17:36','2015-06-29 21:17:39'),(7,'scrum-framework-three',0,1,7,'0000-00-00 00:00:00','2015-06-23 18:40:55'),(8,'scrum-framework-four',0,1,8,'0000-00-00 00:00:00','2015-06-23 18:40:55'),(9,'scrum-framework-five',0,1,9,'0000-00-00 00:00:00','2015-06-23 18:40:56'),(10,'scrum-framework-six',0,1,10,'0000-00-00 00:00:00','2015-06-23 18:40:56'),(11,'scrum-framework-seven',0,1,11,'0000-00-00 00:00:00','2015-06-23 18:40:57'),(12,'scrum-framework-eight',0,1,12,'0000-00-00 00:00:00','2015-06-23 18:40:57'),(13,'scrum-framework-nine',0,1,13,'0000-00-00 00:00:00','2015-06-23 18:40:58'),(14,'scrum-framework-ten',0,1,14,'0000-00-00 00:00:00','2015-06-23 18:40:59'),(15,'scrum-framework-eleven',0,1,15,'0000-00-00 00:00:00','2015-06-23 18:40:59'),(16,'scrum-framework-twelve',0,1,16,'0000-00-00 00:00:00','2015-06-23 18:41:00'),(17,'scrum-framework-thirteen',0,1,17,'0000-00-00 00:00:00','2015-06-23 18:41:00'),(18,'scrum-framework-fourteen',0,1,18,'0000-00-00 00:00:00','2015-06-23 18:41:01');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_categories`
--

DROP TABLE IF EXISTS `posts_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_categories` (
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`,`category_id`),
  UNIQUE KEY `post_category` (`post_id`,`category_id`) USING BTREE,
  KEY `post_id` (`post_id`) USING BTREE,
  KEY `category_id` (`category_id`) USING BTREE,
  CONSTRAINT `posts_categories_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON UPDATE CASCADE,
  CONSTRAINT `posts_categories_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_categories`
--

LOCK TABLES `posts_categories` WRITE;
/*!40000 ALTER TABLE `posts_categories` DISABLE KEYS */;
INSERT INTO `posts_categories` VALUES (1,1,'2015-03-22 13:23:47','2015-03-22 12:23:51'),(1,2,'2015-03-22 13:23:49','2015-03-22 12:23:53'),(2,1,'2015-03-22 13:24:14','2015-03-22 12:24:19'),(2,2,'2015-03-22 13:24:16','2015-03-22 12:24:20'),(3,1,'2015-03-23 23:37:45','2015-03-23 22:37:49'),(3,2,'2015-03-23 23:37:47','2015-03-23 22:37:50'),(4,2,'2015-05-02 21:39:43','2015-05-02 19:39:54'),(4,4,'2015-05-02 21:39:47','2015-05-02 19:39:54'),(4,5,'2015-05-02 21:39:49','2015-05-02 19:39:54'),(5,2,'2015-06-21 21:31:57','2015-06-21 19:32:02'),(5,4,'2015-06-21 21:32:00','2015-06-21 19:32:04'),(6,2,'2015-06-21 23:21:52','2015-06-21 21:21:57'),(6,4,'2015-06-21 23:21:55','2015-06-21 21:21:59'),(7,2,'2015-06-21 23:50:48','2015-06-21 21:52:17'),(7,4,'2015-06-21 23:50:51','2015-06-21 21:52:17'),(8,2,'2015-06-21 23:50:58','2015-06-21 21:52:17'),(8,4,'2015-06-21 23:51:00','2015-06-21 21:52:17'),(9,2,'2015-06-21 23:51:03','2015-06-21 21:52:17'),(9,4,'2015-06-21 23:51:05','2015-06-21 21:52:17'),(10,2,'2015-06-21 23:51:08','2015-06-21 21:52:17'),(10,4,'2015-06-21 23:51:10','2015-06-21 21:52:17'),(11,2,'2015-06-21 23:51:12','2015-06-21 21:52:17'),(11,4,'2015-06-21 23:51:15','2015-06-21 21:52:17'),(12,2,'2015-06-21 23:51:17','2015-06-21 21:52:17'),(12,4,'2015-06-21 23:51:20','2015-06-21 21:52:17'),(13,2,'2015-06-21 23:51:24','2015-06-21 21:52:17'),(13,4,'2015-06-21 23:51:27','2015-06-21 21:52:17'),(14,2,'2015-06-21 23:51:29','2015-06-21 21:52:17'),(14,4,'2015-06-21 23:51:32','2015-06-21 21:52:17'),(15,2,'2015-06-21 23:51:35','2015-06-21 21:52:17'),(15,4,'2015-06-21 23:51:38','2015-06-21 21:52:17'),(16,2,'2015-06-21 23:51:40','2015-06-21 21:52:17'),(16,4,'2015-06-21 23:51:43','2015-06-21 21:52:17'),(17,2,'2015-06-21 23:51:46','2015-06-21 21:52:17'),(17,4,'2015-06-21 23:51:49','2015-06-21 21:52:17'),(18,2,'2015-06-21 23:51:52','2015-06-21 21:52:17'),(18,4,'2015-06-21 23:51:55','2015-06-21 21:52:17');
/*!40000 ALTER TABLE `posts_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts_links`
--

DROP TABLE IF EXISTS `posts_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts_links` (
  `post_id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`,`link_id`),
  UNIQUE KEY `post_link` (`post_id`,`link_id`) USING BTREE,
  KEY `post_id` (`post_id`) USING BTREE,
  KEY `link_id` (`link_id`) USING BTREE,
  CONSTRAINT `posts_links_ibfk_1` FOREIGN KEY (`link_id`) REFERENCES `links` (`link_id`) ON UPDATE CASCADE,
  CONSTRAINT `posts_links_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts_links`
--

LOCK TABLES `posts_links` WRITE;
/*!40000 ALTER TABLE `posts_links` DISABLE KEYS */;
INSERT INTO `posts_links` VALUES (1,1,'2015-06-23 20:26:55','2015-06-23 18:29:40'),(1,4,'2015-06-23 20:26:35','2015-06-23 18:29:40'),(1,5,'2015-06-23 20:26:40','2015-06-23 18:29:40'),(1,6,'2015-06-23 20:26:46','2015-06-23 18:29:40'),(1,7,'2015-06-23 20:26:53','2015-06-23 18:29:40'),(2,1,'2015-06-23 20:29:24','2015-06-23 18:29:40'),(2,2,'2015-06-23 20:29:24','2015-06-23 18:29:40'),(2,3,'2015-06-23 20:29:24','2015-06-23 18:29:40'),(2,5,'2015-06-23 20:29:24','2015-06-23 18:29:40'),(2,6,'2015-06-23 20:29:24','2015-06-23 18:29:40'),(2,7,'2015-06-23 20:29:24','2015-06-23 18:29:40'),(3,1,'2015-06-23 20:29:24','2015-06-23 18:29:40'),(3,2,'2015-06-23 20:29:24','2015-06-23 18:29:40'),(3,3,'2015-06-23 20:29:24','2015-06-23 18:29:40'),(3,4,'2015-06-23 20:29:24','2015-06-23 18:29:40'),(3,6,'2015-06-23 20:29:24','2015-06-23 18:29:40'),(3,7,'2015-06-23 20:29:24','2015-06-23 18:29:40'),(4,1,'2015-06-23 20:29:24','2015-06-23 18:29:40'),(4,3,'2015-06-23 20:29:24','2015-06-23 18:29:40'),(4,4,'2015-06-23 20:29:24','2015-06-23 18:29:40'),(4,5,'2015-06-23 20:29:24','2015-06-23 18:29:40'),(4,7,'2015-06-23 20:29:24','2015-06-23 18:29:40'),(5,1,'2015-06-23 20:29:24','2015-06-23 18:29:40'),(5,3,'2015-06-23 20:29:24','2015-06-23 18:29:40'),(5,4,'2015-06-23 20:29:24','2015-06-23 18:29:40'),(5,6,'2015-06-23 20:29:24','2015-06-23 18:29:40'),(5,8,'2015-06-29 23:21:59','2015-06-29 21:22:47'),(6,1,'2015-06-29 23:19:47','2015-06-29 21:20:08'),(6,3,'2015-06-29 23:19:47','2015-06-29 21:20:08'),(6,4,'2015-06-29 23:19:47','2015-06-29 21:20:08'),(6,5,'2015-06-29 23:19:47','2015-06-29 21:20:08'),(6,6,'2015-06-29 23:19:47','2015-06-29 21:20:08'),(6,7,'2015-06-29 23:19:58','2015-06-29 21:20:08');
/*!40000 ALTER TABLE `posts_links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `route_types`
--

DROP TABLE IF EXISTS `route_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `route_types` (
  `route_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`route_type_id`),
  UNIQUE KEY `route_type_id` (`route_type_id`) USING BTREE,
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `route_types`
--

LOCK TABLES `route_types` WRITE;
/*!40000 ALTER TABLE `route_types` DISABLE KEYS */;
INSERT INTO `route_types` VALUES (1,'category-route','Category route','Category route','2015-03-21 19:44:43','2015-03-21 18:44:48'),(2,'page-route','Page route','Page route','2015-03-21 19:44:43','2015-03-21 18:44:47'),(3,'post-route','Post route','Post route','2015-03-21 19:44:43','2015-03-21 18:44:43');
/*!40000 ALTER TABLE `route_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `routes`
--

DROP TABLE IF EXISTS `routes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `routes` (
  `route_id` int(11) NOT NULL AUTO_INCREMENT,
  `route_type_id` int(11) DEFAULT NULL,
  `layout_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`route_id`),
  UNIQUE KEY `route_id` (`route_id`) USING BTREE,
  UNIQUE KEY `name` (`name`) USING BTREE,
  KEY `route_type_id` (`route_type_id`) USING BTREE,
  KEY `IDX_32D5C2B38C22AA1A` (`layout_id`) USING BTREE,
  CONSTRAINT `routes_ibfk_1` FOREIGN KEY (`layout_id`) REFERENCES `layouts` (`layout_id`),
  CONSTRAINT `routes_ibfk_2` FOREIGN KEY (`route_type_id`) REFERENCES `route_types` (`route_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `routes`
--

LOCK TABLES `routes` WRITE;
/*!40000 ALTER TABLE `routes` DISABLE KEYS */;
INSERT INTO `routes` VALUES (1,1,1,'architecture-es','/arquitectura','PineipolBaaBundle:Category:get','Posts sobre Arquitectura del Software','2015-03-21 19:46:18','2015-03-22 10:56:08'),(2,1,1,'agile-es','/agile','PineipolBaaBundle:Category:get','Posts sobre metodología Agile','2015-03-22 11:38:56','2015-03-22 10:56:10'),(3,1,1,'symfony-es','/symfony','PineipolBaaBundle:Category:get','Posts sobre desarrollo con Symfony','2015-03-22 11:39:32','2015-03-22 10:56:12'),(4,2,1,'contact-es','/contacto','PineipolBaaBundle:Page:get','Página de contacto del blog','2015-03-22 11:40:05','2015-03-22 10:56:14'),(5,2,1,'curriculum-vitae-es','/curriculum','PineipolBaaBundle:Page:get','Visita mi currículum vitae','2015-03-22 11:41:23','2015-03-22 10:56:16'),(6,3,1,'blog-bootstrap-es','/blog-bootstrap','PineipolBaaBundle:Post:get','Post Blog Bootstrap','2015-03-22 11:42:01','2015-03-22 10:56:18'),(7,3,1,'agile-architect-es','/arquitecto-agile','PineipolBaaBundle:Post:get','Post Arquitecto Agile','2015-03-22 11:44:15','2015-03-22 10:56:20'),(8,3,1,'loading-es','/loading','PineipolBaaBundle:Post:get','Post Loading','2015-03-23 23:34:34','2015-03-23 22:34:45'),(9,3,1,'lean-agile-scrum-es','/lean-agile-scrum-kanban-diferencia','PineipolBaaBundle:Post:get','Post Lean Agile Scrum','2015-05-02 21:35:25','2015-06-21 19:35:57'),(10,1,1,'scrum-es','/scrum','PineipolBaaBundle:Category:get','Posts sobre el framework Scrum','2015-05-02 21:51:15','2015-05-02 19:51:27'),(11,1,1,'lean-es','/lean','PineipolBaaBundle:Category:get','Posts sobre la metodología Lean','2015-05-02 21:51:40','2015-05-02 19:51:51'),(12,3,1,'scrum-framework-one-es','/scrum-valores-roles-eventos-artefactos','PineipolBaaBundle:Post:get','Post Scrum Framework Part One','2015-06-21 21:26:13','2015-06-21 19:26:16'),(13,3,1,'scrum-framework-two-es','/scrum-roles-scrum-master-product-owner-desarrolladores','PineipolBaaBundle:Post:get','Post Scrum Framework Part Two','2015-06-21 23:18:41','2015-06-21 21:32:03'),(14,3,1,'scrum-framework-three-es','/scrum-eventos-el-sprint','PineipolBaaBundle:Post:get','Post Scrum Framework Part Three','2015-06-21 23:26:34','2015-06-21 21:32:45'),(15,3,1,'scrum-framework-four-es','/scrum-eventos-planificacion','PineipolBaaBundle:Post:get','Post Scrum Framework Part Four','2015-06-21 23:38:57','2015-06-21 21:39:13'),(16,3,1,'scrum-framework-five-es','/scrum-eventos-scrum-diario-stand-up-meeting','PineipolBaaBundle:Post:get','Post Scrum Framework Part Five','2015-06-21 23:33:12','2015-06-21 21:39:18'),(17,3,1,'scrum-framework-six-es','/scrum-eventos-revision-de-sprint','PineipolBaaBundle:Post:get','Post Scrum Framework Part Six','2015-06-21 23:33:48','2015-06-21 21:39:22'),(18,3,1,'scrum-framework-seven-es','/scrum-eventos-retrospectiva-de-sprint','PineipolBaaBundle:Post:get','Post Scrum Framework Part Seven','2015-06-21 23:34:01','2015-06-21 21:39:29'),(19,3,1,'scrum-framework-eight-es','/scrum-eventos-reunion-de-grooming','PineipolBaaBundle:Post:get','Post Scrum Framework Part Eight','2015-06-21 23:34:14','2015-06-21 21:40:16'),(20,3,1,'scrum-framework-nine-es','/scrum-product-backlog','PineipolBaaBundle:Post:get','Post Scrum Framework Part Nine','2015-06-21 23:36:07','2015-06-21 21:40:18'),(21,3,1,'scrum-framework-ten-es','/scrum-product-backlog-historias-de-usuario-empirismo','PineipolBaaBundle:Post:get','Post Scrum Framework Part Ten','2015-06-21 23:36:32','2015-06-21 21:40:19'),(22,3,1,'scrum-framework-eleven-es','/scrum-product-backlog-release-burndown-chart','PineipolBaaBundle:Post:get','Post Scrum Framework Part Eleven','2015-06-21 23:38:09','2015-06-21 21:40:21'),(23,3,1,'scrum-framework-twelve-es','/scrum-sprint-backlog','PineipolBaaBundle:Post:get','Post Scrum Framework Part Twelve','2015-06-21 23:37:49','2015-06-21 21:40:22'),(24,3,1,'scrum-framework-thirteen-es','/scrum-sprint-backlog-sprint-burndown-chart','PineipolBaaBundle:Post:get','Post Scrum Framework Part Thirteen','2015-06-21 23:38:05','2015-06-21 21:40:24'),(25,3,1,'scrum-framework-fouteen-es','/scrum-sprint-taskboard','PineipolBaaBundle:Post:get','Post Scrum Framework Part Fourteen','2015-06-21 23:38:37','2015-06-21 21:40:27');
/*!40000 ALTER TABLE `routes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_status`
--

DROP TABLE IF EXISTS `user_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_status` (
  `user_status_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_status_id`),
  UNIQUE KEY `name` (`name`) USING BTREE,
  UNIQUE KEY `user_status_id` (`user_status_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_status`
--

LOCK TABLES `user_status` WRITE;
/*!40000 ALTER TABLE `user_status` DISABLE KEYS */;
INSERT INTO `user_status` VALUES (1,'active','Active','Active','2015-03-18 20:51:53','2015-03-18 19:51:56');
/*!40000 ALTER TABLE `user_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_status_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passwd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `active` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id` (`user_id`) USING BTREE,
  UNIQUE KEY `email` (`email`) USING BTREE,
  UNIQUE KEY `username` (`username`) USING BTREE,
  KEY `user_status_id` (`user_status_id`) USING BTREE,
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_status_id`) REFERENCES `user_status` (`user_status_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2015-07-02 20:12:45
