-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: baa
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.10.1

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,NULL,'architecture','pink','2015-03-21 19:43:44','2015-03-22 13:03:59'),(2,NULL,'agile','yellow','2015-03-22 11:47:55','2015-03-22 13:03:56'),(3,NULL,'symfony','green','2015-03-22 11:47:55','2015-03-22 13:04:01');
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
  CONSTRAINT `route_id` FOREIGN KEY (`route_id`) REFERENCES `routes` (`route_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_contents`
--

LOCK TABLES `category_contents` WRITE;
/*!40000 ALTER TABLE `category_contents` DISABLE KEYS */;
INSERT INTO `category_contents` VALUES (1,1,1,1,'Architecture','Architecture','2015-03-21 19:44:00','2015-03-22 10:49:26'),(2,2,1,2,'Agile','Agile','2015-03-22 11:48:48','2015-03-22 10:49:26'),(3,3,1,3,'Symfony','Symfony','2015-03-22 11:48:48','2015-03-22 10:49:26');
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
  `post_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `target_url` text COLLATE utf8_unicode_ci,
  `open_blank` int(1) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`link_id`),
  UNIQUE KEY `link_id` (`link_id`) USING BTREE,
  UNIQUE KEY `name` (`name`) USING BTREE,
  KEY `post_id` (`post_id`) USING BTREE,
  CONSTRAINT `links_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `links`
--

LOCK TABLES `links` WRITE;
/*!40000 ALTER TABLE `links` DISABLE KEYS */;
INSERT INTO `links` VALUES (1,1,'scrum.org-1','Scrum.org','Scrum.org','https://www.scrum.org/',1,'2015-03-22 13:25:30','2015-03-22 20:50:01'),(2,1,'symfony.com-1','Symfony.com','Symfony.com','http://www.symfony.com/',1,'2015-03-22 13:26:00','2015-03-22 20:50:03'),(3,2,'scrum.org-2','Scrum.org','Scrum.org','https://www.scrum.org/',1,'2015-03-22 13:26:29','2015-03-22 20:50:04'),(4,2,'symfony.com-2','Symfony.com','Symfony.com','http://www.symfony.com/',1,'2015-03-22 13:26:56','2015-03-22 20:50:08'),(5,NULL,'scrum.org-3','Scrum.org','Scrum.org','https://www.scrum.org/',1,'2015-03-22 21:42:39','2015-03-22 20:50:09'),(6,NULL,'symfony.com-4','Symfony.com','Symfony.com','http://www.symfony.com/',1,'2015-03-22 21:42:39','2015-03-22 20:50:11');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,1,'architecture','Arquitectura','Arquitectura',NULL,1,'2015-03-21 19:47:44','2015-03-22 10:46:03'),(2,2,'agile','Agile','Agile',NULL,1,'2015-03-22 11:45:25','2015-03-22 10:46:27'),(3,3,'symfony','Symfony','Symfony',NULL,NULL,'2015-03-22 11:45:38','2015-03-22 20:50:51'),(4,4,'contact','Contacto','Contacto',NULL,1,'2015-03-22 11:45:38','2015-03-22 12:11:03'),(5,5,'curriculum-vitae','Curriculum','Curriculum',NULL,1,'2015-03-22 11:47:12','2015-03-22 12:11:08');
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
INSERT INTO `migration_versions` VALUES ('20150321191039'),('20150321194129'),('20150322134527');
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
INSERT INTO `page_contents` VALUES (1,1,1,4,'Contacto','Contacto','<p>Si deseas ponerte en contacto conmigo escribe a la dirección de correo electrónico que figura en la página.</p>\r\n<p>Y recuerda, esto no ha hecho más que empezar. En pocos días el blog irá creciendo, tanto en posts como en funcionalidad.</p>\r\n<div style=\"text-align: center;\">\r\n    <a href=\"mailto:alejandro.barba@becominganagilearchitect.com\">alejandro.barba@becominganagilearchitect.com</a>\r\n</div>',NULL,NULL,NULL,'2015-03-22 11:50:28','2015-03-22 18:55:02'),(2,2,1,5,'Curriculum Vitae','Curriculum Vitae','Curriculum Vitae',NULL,NULL,NULL,'2015-03-22 11:50:28','2015-03-22 12:11:12');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_contents`
--

LOCK TABLES `post_contents` WRITE;
/*!40000 ALTER TABLE `post_contents` DISABLE KEYS */;
INSERT INTO `post_contents` VALUES (1,1,1,6,'Blog Bootstrap','<p>Soy Alejandro Barba, Ingeniero en Informática, y hace meses se me ocurrió organizar mis ideas en un blog que fuera capaz de arrojar cierta luz en las dudas más sencillas y en las grandes preguntas que pudieran ayudar a diseñar un proyecto complejo y escalable desde un punto de vista ágil, es decir, enseñarnos desde el minuto cero cómo ser ágiles y tener en cuenta cómo sacar el mayor provecho al agilismo.</p>\r\n<p>El objetivo del blog no es proporcionar todas las respuestas sobre lo que debe ser un arquitecto Agile sino ofrecer posibles soluciones a sus problemas cotidianos...</p>','<p>Soy Alejandro Barba, Ingeniero en Informática por la Universidad de León, y desde hace diez años ejerzo como programador, analista, consultor, arquitecto, gestor o lo que haga falta según las necesidades precisas del proyecto en cada fase de su ciclo de vida o de sus necesidades de negocio.</p>\r\n<p>Supongo que decidí lanzarme al estudio de una ingeniería debido a mi pasión por la informática y, por que no decirlo, porque se me daba bastante bien a nivel usuario. El mío fue un caso de vocación tardía, dado que fue la informática quien me encontró gracias a que, con quince años, mi hermano me regaló mi primer ordenador, un Pentium I MMX a 166Mhz, aunque por aquel entonces lo llamábamos simplemente Pentium.</p>\r\n<img align=\"left\" style=\"margin: 15px\" src=\"/uploads/posts/150315_blog-bootstrap/Pentium_MMX_Logo.jpg\">\r\n<p>Mis estudios como ingeniero me han servido para desechar una gran cantidad de ideas erróneas preconcebidas, aprender organización, a organizarme a mí mismo y, por qué no decirlo, a entender cada uno de los pasos y mecanismos que entran en juego desde que se pulsa una tecla en el teclado hasta que vemos escrita la letra en la pantalla, es decir, a deshechar la magia del proceso y quedarnos tan sólo la ciencia. Pero no es que dichos estudios me hayan servido, en el sentido estricto de la palabra, para aprender a programar, eso se aprende después. Lo que sí han conseguido ha sido ponerme en el camino de las preguntas correctas, a las que voy encontrando respuesta en los compañeros, la experiencia y, sobre todo, en una buena cantidad de libros.</p>\r\n<p>Hace ya bastantes meses se me ocurrió la idea de organizar y estructurar mis ideas y plasmar el resultado en un blog. El resultado debía ser un blog que fuera capaz de dar respuesta a las dudas más sencillas y arrojar cierta luz sobre las grandes preguntas, es decir, que contuviera tanto recetas DevOps para configurar paso a paso un sencillo servidor Web como ideas y buenas prácticas que pudieran ayudar a diseñar un proyecto complejo y escalable.</p>\r\n<img align=\"right\" style=\"margin: 15px\" src=\"/uploads/posts/150315_blog-bootstrap/agile.png\">\r\n<p>Además de contar con recetas para hacer tareas específicas a modo de tutorial, plantear problemas y ofrecer soluciones a grandes cuestiones de diseño y arquitectura para sistemas complejos, el blog debería hacer todo esto desde un punto de vista Agile, es decir, enseñarnos desde el minuto cero cómo ser ágiles y tener en cuenta cómo sacar el mayor provecho al agilismo. Aunque veremos las principales diferencias entre diversas metodologías ágiles nos centraremos en aquella que, por mi experiencia profesional y preparación, conozco en mayor grado, Scrum.</p>\r\n<p>El objetivo del blog no es proporcionar todas las respuestas sobre lo que debe ser, qué debe saber o cómo debe actuar un arquitecto Agile, sino sembrar una buena cantidad de preguntas y problemas y ofrecer posibles soluciones a los mismos. Será tarea vuestra aplicar o adaptar dichas soluciones a vuestros problemas o lógica de negocio y sus circunstancias concretas. También espero que sirva como aliciente o punto de partida para abrir nuevas vías de investigación y experimentación que den lugar a desconocidos y emocionantes niveles de excelencia, productividad y retorno de inversión.</p>\r\n<p>Os invito a acompañarme en esta aventura que, semana tras semana, podremos ir descubriendo y comprendiendo juntos.</p><br>','uploads/posts/150315_blog-bootstrap/blog-bootstrap.jpg',NULL,NULL,NULL,'2015-03-15 23:00:00','2015-03-23 22:28:02'),(2,2,1,7,'Arquitecto Agile','<p>Soy Alejandro Barba, Ingeniero en Informática, y hace meses se me ocurrió organizar mis ideas en un blog que fuera capaz de arrojar cierta luz en las dudas más sencillas y en las grandes preguntas que pudieran ayudar a diseñar un proyecto complejo y escalable desde un punto de vista ágil, es decir, enseñarnos desde el minuto cero cómo ser ágiles y tener en cuenta cómo sacar el mayor provecho al agilismo.</p>\r\n<p>El objetivo del blog no es proporcionar todas las respuestas sobre lo que debe ser un arquitecto Agile sino ofrecer posibles soluciones a sus problemas cotidianos...</p>','Arquitecto Agile','uploads/posts/150329_agile-architect/agile-architect.jpg',NULL,NULL,NULL,'2015-03-22 13:18:07','2015-03-23 22:36:08'),(3,3,1,8,'Loading...','<p>El hilo conductor del blog estará formado por varios proyectos, en principio tengo dos en la cabeza, con los que pretendo plantear diversos problemas o necesidades, analizar las posibles soluciones e ir llevando a cabo, a lo largo de una serie de posts, el desarrollo de cada uno mediante la implementación de tecnologías que den solución a dichos problemas, tratando siempre de buscar algún tipo de valor añadido.<br>\r\nEl primero de los proyectos sería el propio blog, el segundo, una herramienta Agile de gestión de equipos de desarrollo mediante Scrum.</p>','<p>El hilo conductor del blog estará formado por varios proyectos, en principio tengo dos en la cabeza, con los que pretendo plantear diversos problemas o necesidades, analizar las posibles soluciones e ir llevando a cabo, a lo largo de una serie de posts, el desarrollo de cada uno mediante la implementación de tecnologías que den solución a dichos problemas, tratando siempre de buscar algún tipo de valor añadido.<br>\r\nEl primero de los proyectos sería el propio blog, el segundo, una herramienta Agile de gestión de equipos de desarrollo mediante Scrum.</p>\r\n<p>Durante el desarrollo de los proyectos detallaré mi experiencia y punto de vista sobre cada una de las etapas del ciclo de vida de los mismos y explicaré cómo convertir esta frase tan de “desarrollo en cascada” en algo más Agile.</p>\r\n<ul>\r\n<li><p>Hablaremos de cómo formar un equipo, cómo elegir los roles necesarios dentro del mismo y cómo seleccionar al candidato más adecuado para cada uno de los puestos. Compartiré con vosotros mis preferencias sobre dónde buscar y cómo conseguir que, además de poder elegir a la persona que quieras, que dicha persona quiera también formar parte de nuestro proyecto.</p></li>\r\n<li><p>Compartiré con vosotros las mejores técnicas de desarrollo que he ido aprendiendo y madurando por mi cuenta a lo largo de mi trayectoria profesional o que me han resultado útiles en determinadas circunstancias. Explicaré mi visión sobre cómo organizar el código y escogeremos las herramientas más adecuadas para que nuestro equipo lleve a cabo su trabajo de forma óptima.</p></li>\r\n<li><p>Os hablaré de las principales técnicas de testing, desde simples pruebas ejecutadas por un operador al Diseño Orientado a Pruebas de Aceptación (Acceptance Test Driven Development) o al Diseño Orientado a Comportamiento (Behaviour Driven Development).</p></li>\r\n<li><p>Aprenderemos a configurar un servidor de Integración Continua (Continuous Integration) y cómo sacarle el mayor partido mediante el uso de los plugins adecuados y la instalación de un servidor de integración con el que beneficiarse de la Entrega Continua (Continuous Delivery). Además entenderemos la importancia clave que un departamento de control de calidad (Quality Assurance) puede jugar en nuestros proyectos.</p></li>\r\n<li><p>Llegado el momento de desplegar nuestro trabajo en producción aprenderemos a configurar los servidores, a elegir la cantidad y configuración de máquinas adecuadas, balancearlas, montar grupos de auto escalado, a automatizar los despliegues, etc. y todo ello sin descuidar la seguridad de nuestros sistemas y nuestros datos.</p></li>\r\n<li><p>Por último, aunque no necesariamente lo abordaremos en este orden, explicaré cómo convertirnos en Agile. Aprenderemos a enfocar, no sólo nuestro proyecto sino cada una de sus tareas, de forma ágil mediante el framework Scrum. Entenderemos los pormenores de dicho framework y analizaremos sus ventajas, tanto las evidentes como las no tan evidentes. Compararemos Scrum con otras metodologías ágiles y aprenderemos a gestionar nuestro equipo para convertirnos en respetados líderes en lugar de temidos jefes.</p></li>\r\n</ul><br>','uploads/posts/150322_loading/loading.jpg',NULL,NULL,NULL,'2015-03-23 23:36:02','2015-03-23 22:55:44');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'blog-bootstrap',1,1,1,'2015-03-15 23:00:00','2015-03-22 18:08:03'),(2,'agile-architect',1,1,3,'2015-03-29 23:00:00','2015-03-23 22:39:09'),(3,'loading',1,1,2,'2015-03-22 23:00:00','2015-03-23 22:39:06');
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
INSERT INTO `posts_categories` VALUES (1,1,'2015-03-22 13:23:47','2015-03-22 12:23:51'),(1,2,'2015-03-22 13:23:49','2015-03-22 12:23:53'),(2,1,'2015-03-22 13:24:14','2015-03-22 12:24:19'),(2,2,'2015-03-22 13:24:16','2015-03-22 12:24:20'),(3,1,'2015-03-23 23:37:45','2015-03-23 22:37:49'),(3,2,'2015-03-23 23:37:47','2015-03-23 22:37:50');
/*!40000 ALTER TABLE `posts_categories` ENABLE KEYS */;
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
  CONSTRAINT `routes_ibfk_3` FOREIGN KEY (`route_type_id`) REFERENCES `route_types` (`route_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `routes`
--

LOCK TABLES `routes` WRITE;
/*!40000 ALTER TABLE `routes` DISABLE KEYS */;
INSERT INTO `routes` VALUES (1,1,1,'architecture-es','/arquitectura','PineipolBaaBundle:Category:get','Posts sobre Arquitectura del Software','2015-03-21 19:46:18','2015-03-22 10:56:08'),(2,1,1,'agile-es','/agile','PineipolBaaBundle:Category:get','Posts sobre metodología Agile','2015-03-22 11:38:56','2015-03-22 10:56:10'),(3,1,1,'symfony-es','/symfony','PineipolBaaBundle:Category:get','Posts sobre desarrollo con Symfony','2015-03-22 11:39:32','2015-03-22 10:56:12'),(4,2,1,'contact-es','/contacto','PineipolBaaBundle:Page:get','Página de contacto del blog','2015-03-22 11:40:05','2015-03-22 10:56:14'),(5,2,1,'curriculum-vitae-es','/curriculum','PineipolBaaBundle:Page:get','Visita mi currículum vitae','2015-03-22 11:41:23','2015-03-22 10:56:16'),(6,3,1,'blog-bootstrap-es','/blog-bootstrap','PineipolBaaBundle:Post:get','Post Blog Bootstrap','2015-03-22 11:42:01','2015-03-22 10:56:18'),(7,3,1,'agile-architect-es','/arquitecto-agile','PineipolBaaBundle:Post:get','Post Arquitecto Agile','2015-03-22 11:44:15','2015-03-22 10:56:20'),(8,3,1,'loading-es','/loading','PineipolBaaBundle:Post:get','Post Loading','2015-03-23 23:34:34','2015-03-23 22:34:45');
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
  CONSTRAINT `user_status_id` FOREIGN KEY (`user_status_id`) REFERENCES `user_status` (`user_status_id`) ON UPDATE CASCADE
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

-- Dump completed on 2015-03-24  0:02:23
