SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `meta_celebrity` (
  `celebrity_id` int(11) UNSIGNED NOT NULL COMMENT '主键',
  `sites_id` smallint(5) UNSIGNED NOT NULL COMMENT '电影站点主键',
  `name_sn` int(11) UNSIGNED NOT NULL DEFAULT '0' COMMENT '第三方影人id',
  `imdb_nm` varchar(20) NOT NULL DEFAULT '' COMMENT 'IMDB编号',
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '外键：中文名',
  `name_en` varchar(100) NOT NULL DEFAULT '' COMMENT '外键：英文名',
  `aka` varchar(255) NOT NULL DEFAULT '' COMMENT '外键：更多中文名',
  `aka_en` varchar(255) NOT NULL DEFAULT '' COMMENT '外键：更多英文名',
  `gender` tinyint(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT '性别：1男,2女',
  `alt` varchar(255) NOT NULL DEFAULT '' COMMENT '条目页URL',
  `avatars` varchar(255) NOT NULL DEFAULT '' COMMENT '影人头像',
  `works` mediumtext COMMENT '影人作品',
  `summary` int(11) UNSIGNED NOT NULL DEFAULT '0' COMMENT '外键：简介',
  `birthday` date DEFAULT NULL COMMENT '出生日期',
  `born_place` varchar(200) NOT NULL DEFAULT '' COMMENT '出生地',
  `photos` mediumtext COMMENT '影人剧照',
  `website` varchar(200) NOT NULL DEFAULT '' COMMENT '官方网站',
  `state` tinyint(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT '状态',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='名人表';

CREATE TABLE `meta_celebrity_relation` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id',
  `subject_id` int(10) UNSIGNED NOT NULL COMMENT '外键',
  `celebrity_id` int(10) UNSIGNED NOT NULL COMMENT '外键',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='条目影人关系表';

CREATE TABLE `meta_content` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '主键',
  `content` mediumtext NOT NULL COMMENT '内容',
  `sha1` char(40) NOT NULL COMMENT '哈希',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='剧情简介';

CREATE TABLE `meta_countries` (
  `countries_id` smallint(5) UNSIGNED NOT NULL COMMENT '国家ID',
  `value` varchar(100) NOT NULL COMMENT '值',
  `create_time` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='国家或地区';

CREATE TABLE `meta_countries_relation` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '主键',
  `countries_id` smallint(6) UNSIGNED NOT NULL COMMENT '外键',
  `subject_id` int(10) UNSIGNED NOT NULL COMMENT '外键',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='国家关系表';

CREATE TABLE `meta_dispatch` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID',
  `type` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '主类型',
  `subtype` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '子类型',
  `unique_id` int(10) UNSIGNED NOT NULL COMMENT '唯一标识',
  `payload` varchar(300) DEFAULT NULL COMMENT '有效载荷',
  `state` tinyint(3) NOT NULL DEFAULT '0' COMMENT '状态',
  `dispatch_time` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '调度时间',
  `message` varchar(100) NOT NULL DEFAULT '' COMMENT '错误描述',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='任务调度';

CREATE TABLE `meta_genres` (
  `genres_id` smallint(6) UNSIGNED NOT NULL COMMENT '流派ID',
  `value` varchar(100) NOT NULL COMMENT '流派值',
  `create_time` datetime DEFAULT NULL COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='流派';

CREATE TABLE `meta_genres_relation` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '主键',
  `genres_id` smallint(6) UNSIGNED NOT NULL COMMENT '外键',
  `subject_id` int(10) UNSIGNED NOT NULL COMMENT '外键',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='流派关系表';

CREATE TABLE `meta_imdb` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '主键',
  `imdb` varchar(50) NOT NULL COMMENT 'IMDB',
  `sn` int(10) UNSIGNED NOT NULL COMMENT '数字编号',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='IMDB条目';

CREATE TABLE `meta_imdb_nm` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '主键',
  `imdb` varchar(50) NOT NULL COMMENT 'IMDB',
  `sn` int(10) UNSIGNED NOT NULL COMMENT '数字编号',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='IMDB名字';

CREATE TABLE `meta_languages` (
  `lang_id` mediumint(8) UNSIGNED NOT NULL COMMENT '语言ID',
  `value` varchar(200) NOT NULL COMMENT '语言值',
  `create_time` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='语言';

CREATE TABLE `meta_languages_relation` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '主键',
  `lang_id` mediumint(8) UNSIGNED NOT NULL COMMENT '外键',
  `subject_id` int(10) UNSIGNED NOT NULL COMMENT '外键',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='语言关系表';

CREATE TABLE `meta_name` (
  `name_id` int(10) UNSIGNED NOT NULL COMMENT '主键',
  `name` varchar(100) NOT NULL COMMENT '名字',
  `create_time` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='演员名字';

CREATE TABLE `meta_name_relation` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '主键',
  `name_id` int(10) UNSIGNED NOT NULL COMMENT '外建',
  `celebrity_id` int(10) UNSIGNED NOT NULL COMMENT '外建',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='演员名字关系';

CREATE TABLE `meta_subject` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '主键',
  `sites_id` smallint(5) UNSIGNED NOT NULL COMMENT '电影站点主键',
  `subject_sn` int(11) UNSIGNED NOT NULL COMMENT '第三方影片ID',
  `imdb` varchar(32) NOT NULL DEFAULT '' COMMENT 'IMDb编号',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '外键：中文名',
  `original_title` varchar(50) NOT NULL DEFAULT '' COMMENT '外键：原名',
  `aka` varchar(255) NOT NULL DEFAULT '' COMMENT '外键：又名',
  `year` smallint(5) UNSIGNED NOT NULL DEFAULT '0' COMMENT '年代',
  `alt` varchar(255) NOT NULL DEFAULT '' COMMENT '条目页URL',
  `rating_value` decimal(3,1) UNSIGNED NOT NULL DEFAULT '0.0' COMMENT '评分',
  `rating_count` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '评分人数',
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
  `summary` int(11) UNSIGNED DEFAULT NULL COMMENT '外键：简介',
  `seasons_count` smallint(3) UNSIGNED NOT NULL DEFAULT '0' COMMENT '总季数',
  `current_season` smallint(3) UNSIGNED NOT NULL DEFAULT '0' COMMENT '当前季数',
  `episodes_count` smallint(3) UNSIGNED NOT NULL DEFAULT '0' COMMENT '当前季的集数',
  `state` tinyint(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT '状态',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='影视条目';

CREATE TABLE `meta_subject_attent` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '主键',
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '用户ID',
  `subject_id` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '条目ID',
  `status` tinyint(1) UNSIGNED NOT NULL DEFAULT '1' COMMENT '状态:0取消,1追',
  `create_time` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='追剧表';

CREATE TABLE `meta_tags` (
  `tags_id` int(10) UNSIGNED NOT NULL COMMENT '标签ID',
  `value` varchar(200) NOT NULL COMMENT '值',
  `create_time` datetime DEFAULT NULL COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='影视标签';

CREATE TABLE `meta_tags_relation` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '主键',
  `tags_id` int(10) UNSIGNED NOT NULL COMMENT '外键',
  `subject_id` int(10) UNSIGNED NOT NULL COMMENT '外键',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='标签关系表';

CREATE TABLE `meta_title` (
  `title_id` int(10) UNSIGNED NOT NULL COMMENT '名称ID',
  `title` varchar(200) NOT NULL COMMENT '影片名',
  `sha1` char(40) NOT NULL COMMENT '散列',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='影视标题';

CREATE TABLE `meta_title_relation` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '主键',
  `title_id` int(10) UNSIGNED NOT NULL COMMENT '外键',
  `subject_id` int(10) UNSIGNED NOT NULL COMMENT '外键',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='影视标题关系表';


ALTER TABLE `meta_celebrity`
  ADD PRIMARY KEY (`celebrity_id`),
  ADD UNIQUE KEY `sites_id` (`sites_id`,`name_sn`);

ALTER TABLE `meta_celebrity_relation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subject_id` (`subject_id`,`celebrity_id`);

ALTER TABLE `meta_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sha1` (`sha1`);

ALTER TABLE `meta_countries`
  ADD PRIMARY KEY (`countries_id`),
  ADD UNIQUE KEY `value` (`value`);

ALTER TABLE `meta_countries_relation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countries_id` (`countries_id`,`subject_id`);

ALTER TABLE `meta_dispatch`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type` (`type`,`subtype`,`unique_id`),
  ADD KEY `state` (`state`);

ALTER TABLE `meta_genres`
  ADD PRIMARY KEY (`genres_id`),
  ADD UNIQUE KEY `value` (`value`);

ALTER TABLE `meta_genres_relation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `genres_id` (`genres_id`,`subject_id`);

ALTER TABLE `meta_imdb`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `imdb` (`imdb`);

ALTER TABLE `meta_imdb_nm`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `imdb` (`imdb`);

ALTER TABLE `meta_languages`
  ADD PRIMARY KEY (`lang_id`),
  ADD UNIQUE KEY `value` (`value`);

ALTER TABLE `meta_languages_relation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lang_id` (`lang_id`,`subject_id`);

ALTER TABLE `meta_name`
  ADD PRIMARY KEY (`name_id`),
  ADD UNIQUE KEY `name` (`name`);

ALTER TABLE `meta_name_relation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_id` (`name_id`,`celebrity_id`);

ALTER TABLE `meta_subject`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sites_id` (`sites_id`,`subject_sn`);

ALTER TABLE `meta_subject_attent`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `user_id` (`user_id`,`subject_id`);

ALTER TABLE `meta_tags`
  ADD PRIMARY KEY (`tags_id`),
  ADD UNIQUE KEY `value` (`value`);

ALTER TABLE `meta_tags_relation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_id` (`tags_id`,`subject_id`);

ALTER TABLE `meta_title`
  ADD PRIMARY KEY (`title_id`),
  ADD UNIQUE KEY `sha1` (`sha1`),
  ADD KEY `title` (`title`);

ALTER TABLE `meta_title_relation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title_id` (`title_id`,`subject_id`);


ALTER TABLE `meta_celebrity`
  MODIFY `celebrity_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键';

ALTER TABLE `meta_celebrity_relation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id';

ALTER TABLE `meta_content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键';

ALTER TABLE `meta_countries`
  MODIFY `countries_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '国家ID';

ALTER TABLE `meta_countries_relation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键';

ALTER TABLE `meta_dispatch`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID';

ALTER TABLE `meta_genres`
  MODIFY `genres_id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流派ID';

ALTER TABLE `meta_genres_relation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键';

ALTER TABLE `meta_imdb`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键';

ALTER TABLE `meta_imdb_nm`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键';

ALTER TABLE `meta_languages`
  MODIFY `lang_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '语言ID';

ALTER TABLE `meta_languages_relation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键';

ALTER TABLE `meta_name`
  MODIFY `name_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键';

ALTER TABLE `meta_name_relation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键';

ALTER TABLE `meta_subject`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键';

ALTER TABLE `meta_subject_attent`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键';

ALTER TABLE `meta_tags`
  MODIFY `tags_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '标签ID';

ALTER TABLE `meta_tags_relation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键';

ALTER TABLE `meta_title`
  MODIFY `title_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '名称ID';

ALTER TABLE `meta_title_relation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
