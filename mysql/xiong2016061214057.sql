# Host: localhost  (Version: 5.5.47)
# Date: 2016-06-12 14:59:01
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT COMMENT='”√ªß±Ì';

#
# Data for table "user"
#

INSERT INTO `user` VALUES (3,'wei','1','','');
