# Host: localhost  (Version: 5.5.47)
# Date: 2016-06-12 16:24:18
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES gb2312 */;

#
# Structure for table "imagerec"
#

DROP TABLE IF EXISTS `imagerec`;
CREATE TABLE `imagerec` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `createTime` varchar(32) NOT NULL,
  `timeRecId` int(11) NOT NULL,
  `field01` varchar(32) DEFAULT NULL,
  `field02` varchar(32) DEFAULT NULL,
  `field03` varchar(32) DEFAULT NULL,
  `field04` varchar(32) DEFAULT NULL,
  `field05` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "imagerec"
#

INSERT INTO `imagerec` VALUES (0,'29e7ab64-f178-f7bc-1675-a9372d598d78.jpg','2016-06-12 16:20:55',0,NULL,NULL,NULL,NULL,NULL);

#
# Structure for table "timerec"
#

DROP TABLE IF EXISTS `timerec`;
CREATE TABLE `timerec` (
  `id` int(11) NOT NULL,
  `year` varchar(4) NOT NULL,
  `date` varchar(10) NOT NULL,
  `address` varchar(32) NOT NULL,
  `title` varchar(64) NOT NULL,
  `content` varchar(500) NOT NULL,
  `isPublic` varchar(4) NOT NULL,
  `author` varchar(32) NOT NULL,
  `createTime` varchar(32) NOT NULL,
  `field01` varchar(32) DEFAULT NULL,
  `field02` varchar(32) DEFAULT NULL,
  `field03` varchar(32) DEFAULT NULL,
  `field04` varchar(32) DEFAULT NULL,
  `field05` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "timerec"
#

INSERT INTO `timerec` VALUES (0,'2015','2016-6-2','花都','test','测试','0','nn','2016-06-12 15:54:55',NULL,NULL,NULL,NULL,NULL),(0,'2016','2016-6-11','天河员村','网站上线了','第一个网站,虽然还有一些问题还需要解决,但勉强能用了','0','wei','2016-06-12 16:20:55',NULL,NULL,NULL,NULL,NULL);

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT COMMENT='用户表';

#
# Data for table "user"
#

INSERT INTO `user` VALUES (3,'wei','1','','');
