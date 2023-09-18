-- MySQL dump 10.13  Distrib 5.7.43, for Linux (x86_64)
--
-- Host: localhost    Database: ledc
-- ------------------------------------------------------
-- Server version	5.7.43-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `meta_celebrity`
--

DROP TABLE IF EXISTS `meta_celebrity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_celebrity` (
  `celebrity_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `sites_id` smallint(5) unsigned NOT NULL COMMENT '电影站点主键',
  `name_sn` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '第三方影人id',
  `imdb_nm` varchar(20) NOT NULL DEFAULT '' COMMENT 'IMDB编号',
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '外键：中文名',
  `name_en` varchar(100) NOT NULL DEFAULT '' COMMENT '外键：英文名',
  `aka` varchar(255) NOT NULL DEFAULT '' COMMENT '外键：更多中文名',
  `aka_en` varchar(255) NOT NULL DEFAULT '' COMMENT '外键：更多英文名',
  `gender` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '性别：1男,2女',
  `alt` varchar(255) NOT NULL DEFAULT '' COMMENT '条目页URL',
  `avatars` varchar(255) NOT NULL DEFAULT '' COMMENT '影人头像',
  `works` mediumtext COMMENT '影人作品',
  `summary` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '外键：简介',
  `birthday` date DEFAULT NULL COMMENT '出生日期',
  `born_place` varchar(200) NOT NULL DEFAULT '' COMMENT '出生地',
  `photos` mediumtext COMMENT '影人剧照',
  `website` varchar(200) NOT NULL DEFAULT '' COMMENT '官方网站',
  `state` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`celebrity_id`),
  UNIQUE KEY `sites_id` (`sites_id`,`name_sn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='名人表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_celebrity`
--

LOCK TABLES `meta_celebrity` WRITE;
/*!40000 ALTER TABLE `meta_celebrity` DISABLE KEYS */;
/*!40000 ALTER TABLE `meta_celebrity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_celebrity_relation`
--

DROP TABLE IF EXISTS `meta_celebrity_relation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_celebrity_relation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `subject_id` int(10) unsigned NOT NULL COMMENT '外键',
  `celebrity_id` int(10) unsigned NOT NULL COMMENT '外键',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `subject_id` (`subject_id`,`celebrity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='条目影人关系表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_celebrity_relation`
--

LOCK TABLES `meta_celebrity_relation` WRITE;
/*!40000 ALTER TABLE `meta_celebrity_relation` DISABLE KEYS */;
/*!40000 ALTER TABLE `meta_celebrity_relation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_content`
--

DROP TABLE IF EXISTS `meta_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `content` mediumtext NOT NULL COMMENT '内容',
  `sha1` char(40) NOT NULL COMMENT '哈希',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `sha1` (`sha1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='剧情简介';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_content`
--

LOCK TABLES `meta_content` WRITE;
/*!40000 ALTER TABLE `meta_content` DISABLE KEYS */;
/*!40000 ALTER TABLE `meta_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_countries`
--

DROP TABLE IF EXISTS `meta_countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_countries` (
  `countries_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '国家ID',
  `value` varchar(100) NOT NULL COMMENT '值',
  `create_time` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`countries_id`),
  UNIQUE KEY `value` (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='国家或地区';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_countries`
--

LOCK TABLES `meta_countries` WRITE;
/*!40000 ALTER TABLE `meta_countries` DISABLE KEYS */;
/*!40000 ALTER TABLE `meta_countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_countries_relation`
--

DROP TABLE IF EXISTS `meta_countries_relation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_countries_relation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `countries_id` smallint(6) unsigned NOT NULL COMMENT '外键',
  `subject_id` int(10) unsigned NOT NULL COMMENT '外键',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `countries_id` (`countries_id`,`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='国家关系表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_countries_relation`
--

LOCK TABLES `meta_countries_relation` WRITE;
/*!40000 ALTER TABLE `meta_countries_relation` DISABLE KEYS */;
/*!40000 ALTER TABLE `meta_countries_relation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_genres`
--

DROP TABLE IF EXISTS `meta_genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_genres` (
  `genres_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT COMMENT '流派ID',
  `value` varchar(100) NOT NULL COMMENT '流派值',
  `create_time` datetime DEFAULT NULL COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`genres_id`),
  UNIQUE KEY `value` (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='流派';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_genres`
--

LOCK TABLES `meta_genres` WRITE;
/*!40000 ALTER TABLE `meta_genres` DISABLE KEYS */;
/*!40000 ALTER TABLE `meta_genres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_genres_relation`
--

DROP TABLE IF EXISTS `meta_genres_relation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_genres_relation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `genres_id` smallint(6) unsigned NOT NULL COMMENT '外键',
  `subject_id` int(10) unsigned NOT NULL COMMENT '外键',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `genres_id` (`genres_id`,`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='流派关系表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_genres_relation`
--

LOCK TABLES `meta_genres_relation` WRITE;
/*!40000 ALTER TABLE `meta_genres_relation` DISABLE KEYS */;
/*!40000 ALTER TABLE `meta_genres_relation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_imdb`
--

DROP TABLE IF EXISTS `meta_imdb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_imdb` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `imdb` varchar(50) NOT NULL COMMENT 'IMDB',
  `sn` int(10) unsigned NOT NULL COMMENT '数字编号',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `imdb` (`imdb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='IMDB条目';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_imdb`
--

LOCK TABLES `meta_imdb` WRITE;
/*!40000 ALTER TABLE `meta_imdb` DISABLE KEYS */;
/*!40000 ALTER TABLE `meta_imdb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_imdb_nm`
--

DROP TABLE IF EXISTS `meta_imdb_nm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_imdb_nm` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `imdb` varchar(50) NOT NULL COMMENT 'IMDB',
  `sn` int(10) unsigned NOT NULL COMMENT '数字编号',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `imdb` (`imdb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='IMDB名字';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_imdb_nm`
--

LOCK TABLES `meta_imdb_nm` WRITE;
/*!40000 ALTER TABLE `meta_imdb_nm` DISABLE KEYS */;
/*!40000 ALTER TABLE `meta_imdb_nm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_languages`
--

DROP TABLE IF EXISTS `meta_languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_languages` (
  `lang_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '语言ID',
  `value` varchar(200) NOT NULL COMMENT '语言值',
  `create_time` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`lang_id`),
  UNIQUE KEY `value` (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='语言';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_languages`
--

LOCK TABLES `meta_languages` WRITE;
/*!40000 ALTER TABLE `meta_languages` DISABLE KEYS */;
/*!40000 ALTER TABLE `meta_languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_languages_relation`
--

DROP TABLE IF EXISTS `meta_languages_relation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_languages_relation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `lang_id` mediumint(8) unsigned NOT NULL COMMENT '外键',
  `subject_id` int(10) unsigned NOT NULL COMMENT '外键',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `lang_id` (`lang_id`,`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='语言关系表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_languages_relation`
--

LOCK TABLES `meta_languages_relation` WRITE;
/*!40000 ALTER TABLE `meta_languages_relation` DISABLE KEYS */;
/*!40000 ALTER TABLE `meta_languages_relation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_name`
--

DROP TABLE IF EXISTS `meta_name`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_name` (
  `name_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(100) NOT NULL COMMENT '名字',
  `create_time` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`name_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='演员名字';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_name`
--

LOCK TABLES `meta_name` WRITE;
/*!40000 ALTER TABLE `meta_name` DISABLE KEYS */;
/*!40000 ALTER TABLE `meta_name` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_name_relation`
--

DROP TABLE IF EXISTS `meta_name_relation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_name_relation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name_id` int(10) unsigned NOT NULL COMMENT '外建',
  `celebrity_id` int(10) unsigned NOT NULL COMMENT '外建',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_id` (`name_id`,`celebrity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='演员名字关系';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_name_relation`
--

LOCK TABLES `meta_name_relation` WRITE;
/*!40000 ALTER TABLE `meta_name_relation` DISABLE KEYS */;
/*!40000 ALTER TABLE `meta_name_relation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_sites`
--

DROP TABLE IF EXISTS `meta_sites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_sites` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(50) NOT NULL COMMENT '名字',
  `protocol` varchar(10) NOT NULL DEFAULT 'https' COMMENT '协议',
  `domain` varchar(100) NOT NULL COMMENT '域名',
  `create_time` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='元信息站点';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_sites`
--

LOCK TABLES `meta_sites` WRITE;
/*!40000 ALTER TABLE `meta_sites` DISABLE KEYS */;
INSERT INTO `meta_sites` VALUES (1,'douban','https','movie.douban.com','2023-09-17 21:49:28','2023-09-17 21:49:52');
/*!40000 ALTER TABLE `meta_sites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_subject`
--

DROP TABLE IF EXISTS `meta_subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_subject` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `sites_id` smallint(5) unsigned NOT NULL COMMENT '电影站点主键',
  `subject_sn` int(11) unsigned NOT NULL COMMENT '第三方影片ID',
  `imdb` varchar(32) NOT NULL DEFAULT '' COMMENT 'IMDb编号',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '外键：中文名',
  `original_title` varchar(50) NOT NULL DEFAULT '' COMMENT '外键：原名',
  `aka` varchar(255) NOT NULL DEFAULT '' COMMENT '外键：又名',
  `year` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '年代',
  `alt` varchar(255) NOT NULL DEFAULT '' COMMENT '条目页URL',
  `rating_value` decimal(3,1) unsigned NOT NULL DEFAULT '0.0' COMMENT '评分',
  `rating_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '评分人数',
  `images` varchar(255) NOT NULL DEFAULT '' COMMENT '海报图',
  `subtype` varchar(50) NOT NULL DEFAULT '' COMMENT '条目分类',
  `directors` varchar(255) NOT NULL DEFAULT '' COMMENT '外键：导演',
  `writers` varchar(255) NOT NULL DEFAULT '' COMMENT '外键：编剧',
  `casts` text COMMENT '外键：主演',
  `tags` varchar(255) NOT NULL DEFAULT '' COMMENT '外键：标签',
  `languages` varchar(255) NOT NULL DEFAULT '' COMMENT '外键：语言',
  `genres` varchar(255) NOT NULL DEFAULT '' COMMENT '外键：影片类型',
  `countries` varchar(255) NOT NULL DEFAULT '' COMMENT '外键：制片国家/地区areas',
  `pubdates` mediumtext COMMENT '上映首映日期',
  `mainland_pubdate` date DEFAULT NULL COMMENT '大陆上映日期',
  `summary` int(11) unsigned DEFAULT NULL COMMENT '外键：简介',
  `seasons_count` smallint(3) unsigned NOT NULL DEFAULT '0' COMMENT '总季数',
  `current_season` smallint(3) unsigned NOT NULL DEFAULT '0' COMMENT '当前季数',
  `episodes_count` smallint(3) unsigned NOT NULL DEFAULT '0' COMMENT '当前季的集数',
  `state` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `sites_id` (`sites_id`,`subject_sn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='影视条目';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_subject`
--

LOCK TABLES `meta_subject` WRITE;
/*!40000 ALTER TABLE `meta_subject` DISABLE KEYS */;
/*!40000 ALTER TABLE `meta_subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_subject_attent`
--

DROP TABLE IF EXISTS `meta_subject_attent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_subject_attent` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户ID',
  `subject_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '条目ID',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态:0取消,1追',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `user_id` (`user_id`,`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='追剧表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_subject_attent`
--

LOCK TABLES `meta_subject_attent` WRITE;
/*!40000 ALTER TABLE `meta_subject_attent` DISABLE KEYS */;
/*!40000 ALTER TABLE `meta_subject_attent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_tags`
--

DROP TABLE IF EXISTS `meta_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_tags` (
  `tags_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '标签ID',
  `value` varchar(200) NOT NULL COMMENT '值',
  `create_time` datetime DEFAULT NULL COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`tags_id`),
  UNIQUE KEY `value` (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='影视标签';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_tags`
--

LOCK TABLES `meta_tags` WRITE;
/*!40000 ALTER TABLE `meta_tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `meta_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_tags_relation`
--

DROP TABLE IF EXISTS `meta_tags_relation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_tags_relation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `tags_id` int(10) unsigned NOT NULL COMMENT '外键',
  `subject_id` int(10) unsigned NOT NULL COMMENT '外键',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_id` (`tags_id`,`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='标签关系表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_tags_relation`
--

LOCK TABLES `meta_tags_relation` WRITE;
/*!40000 ALTER TABLE `meta_tags_relation` DISABLE KEYS */;
/*!40000 ALTER TABLE `meta_tags_relation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_title`
--

DROP TABLE IF EXISTS `meta_title`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_title` (
  `title_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '名称ID',
  `title` varchar(200) NOT NULL COMMENT '影片名',
  `sha1` char(40) NOT NULL COMMENT '散列',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`title_id`),
  UNIQUE KEY `sha1` (`sha1`),
  KEY `title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='影视标题';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_title`
--

LOCK TABLES `meta_title` WRITE;
/*!40000 ALTER TABLE `meta_title` DISABLE KEYS */;
/*!40000 ALTER TABLE `meta_title` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_title_relation`
--

DROP TABLE IF EXISTS `meta_title_relation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_title_relation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title_id` int(10) unsigned NOT NULL COMMENT '外键',
  `subject_id` int(10) unsigned NOT NULL COMMENT '外键',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `title_id` (`title_id`,`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='影视标题关系表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_title_relation`
--

LOCK TABLES `meta_title_relation` WRITE;
/*!40000 ALTER TABLE `meta_title_relation` DISABLE KEYS */;
/*!40000 ALTER TABLE `meta_title_relation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'ledc'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-17 21:52:30
