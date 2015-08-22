-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: dashboard
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_idx` (`user_id`),
  CONSTRAINT `id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'this is a comment',3,'2015-08-22 08:40:12'),(2,'this is another comment',3,'2015-08-22 08:40:21'),(3,'this is a third comment',3,'2015-08-22 08:40:24'),(4,'cool comment',4,'2015-08-22 08:40:26'),(5,'so many comments',5,'2015-08-22 08:40:31'),(6,'wow',5,'2015-08-22 08:40:34'),(7,'such comment',5,'2015-08-22 08:40:37'),(8,'good suggestion',8,'2015-08-22 08:40:44');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_comment`
--

DROP TABLE IF EXISTS `post_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id_idx` (`post_id`),
  KEY `comment_id_idx` (`comment_id`),
  CONSTRAINT `comment_id` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `post_id` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_comment`
--

LOCK TABLES `post_comment` WRITE;
/*!40000 ALTER TABLE `post_comment` DISABLE KEYS */;
INSERT INTO `post_comment` VALUES (1,1,1),(2,2,2),(3,2,3),(4,3,4),(5,3,5),(6,3,6),(7,3,7),(8,4,8);
/*!40000 ALTER TABLE `post_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post` text,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_idx` (`user_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'hello',3,'2015-08-22 08:43:21'),(2,'goodbye',4,'2015-08-22 08:43:21'),(3,'this is a post',5,'2015-08-22 08:43:21'),(4,'some random crap',8,'2015-08-22 08:43:21');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_level` varchar(45) DEFAULT NULL,
  `description` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'Ray','Oh','ray@o.o','asdfasdfasdf','Normal','WANT TO LEARN CSS??','2015-08-21 21:58:05','2015-08-22 11:27:57'),(4,'ASDF','ASDF','ASDF@ASDF.COM','asdfasfd','Normal','asdffff','2015-08-21 22:49:59','2015-08-21 22:49:59'),(5,'Sue','Su','sue@su.com','asdfasdf','Admin','sue su','2015-08-20 00:00:00','2015-08-22 11:39:20'),(8,'Sourabh','Pal','sourabh@pal.com','asdfasdf','Admin','so','2015-07-07 00:00:00','2015-08-09 00:00:00'),(9,'asdf','asdf','asdf@asdf.asdf','asdfasdf','Admin',NULL,'2015-08-22 09:37:28','2015-08-22 11:28:43'),(10,'hello','kitty','hello@kitty.com','hellokitty','Admin',NULL,'2015-08-22 09:41:42','2015-08-22 11:39:28'),(11,'New','User','newuser@new.user','asdfasdf','Normal',NULL,'2015-08-22 11:29:05','2015-08-22 11:29:05'),(12,'Cool','User','cooluser@cool.user','asdfasdf','Normal',NULL,'2015-08-22 11:31:00','2015-08-22 11:31:00');
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

-- Dump completed on 2015-08-22 11:58:59
