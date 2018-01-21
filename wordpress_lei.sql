/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : wordpress_lei

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-12-24 15:56:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `lei_pic`
-- ----------------------------
DROP TABLE IF EXISTS `lei_pic`;
CREATE TABLE `lei_pic` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `type` char(255) DEFAULT NULL,
  `src` char(255) DEFAULT NULL,
  `text` text,
  `time` text,
  `weight` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lei_pic
-- ----------------------------
INSERT INTO `lei_pic` VALUES ('3', 'science', '/wordpress_lei/public/static/img/natural_02.jpg', '<p align=\"right\">\r\n	<strong><em>John Doe</em></strong> \r\n</p>\r\n<p>\r\n	Some example text some example text. John Doe is an architect and engineer<br />\r\n<strong><em></em></strong><em><strong></strong></em> \r\n</p>', '12/18/2017', '333');
INSERT INTO `lei_pic` VALUES ('15', 'natural', '__IMG__/natural_02.jpg', '<p align=\"right\">\r\n	<strong><em>John Doe</em></strong> \r\n</p>\r\n<p>\r\n	Some example text some example text. John Doe is an architect and engineer<br />\r\n<strong><em></em></strong><em><strong></strong></em> \r\n</p>', null, '666');
INSERT INTO `lei_pic` VALUES ('18', 'science', '__IMG__/science_00.jpg', '<p align=\"right\">\r\n	<strong><em>John Doe</em></strong> \r\n</p>\r\n<p>\r\n	Some example text some example text. John Doe is an architect and engineer<br />\r\n<strong><em></em></strong><em><strong></strong></em> \r\n</p>', '12/18/2017', '3');
INSERT INTO `lei_pic` VALUES ('19', 'character', '__IMG__/beauty_03.jpg', '<p align=\"right\">\r\n	<strong><em>John Doe</em></strong> \r\n</p>\r\n<p>\r\n	Some example text some example text. John Doe is an architect and engineer<br />\r\n<strong><em></em></strong><em><strong></strong></em> \r\n</p>', '12/18/2017', '17');
INSERT INTO `lei_pic` VALUES ('20', 'character', '__IMG__/beauty_05.jpg', '<p align=\"right\">\r\n	<strong><em>John Doe</em></strong> \r\n</p>\r\n<p>\r\n	Some example text some example text. John Doe is an architect and engineer<br />\r\n<strong><em></em></strong><em><strong></strong></em> \r\n</p>', null, null);
INSERT INTO `lei_pic` VALUES ('21', 'character', '__IMG__/beauty_04.jpg', '<p align=\"right\">\r\n	<strong><em>John Doe</em></strong> \r\n</p>\r\n<p>\r\n	Some example text some example text. John Doe is an architect and engineer<br />\r\n<strong><em></em></strong><em><strong></strong></em> \r\n</p>', null, '7');
INSERT INTO `lei_pic` VALUES ('22', 'character', '__IMG__/beauty_02.jpg', '<p align=\"right\">\r\n	<strong><em>John Doe</em></strong> \r\n</p>\r\n<p>\r\n	Some example text some example text. John Doe is an architect and engineer<br />\r\n<strong><em></em></strong><em><strong></strong></em> \r\n</p>', null, '7');
INSERT INTO `lei_pic` VALUES ('23', 'character', '__IMG__/beauty_01.jpg', '<p align=\"right\">\r\n	<strong><em>John Doe</em></strong> \r\n</p>\r\n<p>\r\n	Some example text some example text. John Doe is an architect and engineer<br />\r\n<strong><em></em></strong><em><strong></strong></em> \r\n</p>', null, '7');
INSERT INTO `lei_pic` VALUES ('24', 'character', '__IMG__/beauty_00.jpg', '<p align=\"right\">\r\n	<strong><em>John Doe</em></strong> \r\n</p>\r\n<p>\r\n	Some example text some example text. John Doe is an architect and engineer<br />\r\n<strong><em></em></strong><em><strong></strong></em> \r\n</p>', null, '7');
INSERT INTO `lei_pic` VALUES ('25', 'character', '__IMG__/beauty_05.jpg', '<p align=\"right\">\r\n	<strong><em>John Doe</em></strong> \r\n</p>\r\n<p>\r\n	Some example text some example text. John Doe is an architect and engineer<br />\r\n<strong><em></em></strong><em><strong></strong></em> \r\n</p>', null, '7');
INSERT INTO `lei_pic` VALUES ('26', 'natural', '__IMG__/natural_03.jpg', '<p align=\"right\">\r\n	<strong><em>John Doe</em></strong> \r\n</p>\r\n<p>\r\n	Some example text some example text. John Doe is an architect and engineer<br />\r\n<strong><em></em></strong><em><strong></strong></em> \r\n</p>', null, '4');
INSERT INTO `lei_pic` VALUES ('27', 'natural', '__IMG__/natural_01.jpg', '<p align=\"right\">\r\n	<strong><em>John Doe</em></strong> \r\n</p>\r\n<p>\r\n	Some example text some example text. John Doe is an architect and engineer<br />\r\n<strong><em></em></strong><em><strong></strong></em> \r\n</p>', null, '4');
INSERT INTO `lei_pic` VALUES ('28', 'natural', '__IMG__/natural_00.jpg', '<p align=\"right\">\r\n	<strong><em>John Doe</em></strong> \r\n</p>\r\n<p>\r\n	Some example text some example text. John Doe is an architect and engineer<br />\r\n<strong><em></em></strong><em><strong></strong></em> \r\n</p>', null, '1');
INSERT INTO `lei_pic` VALUES ('41', 'character', '/wordpress_lei/public/static/img/image/20171221/20171221135059_38075.jpg', '<p align=\"right\">\r\n	<strong><em>John Doe</em></strong> \r\n</p>\r\n<p>\r\n	Some example text some example text. John Doe is an architect and engineer<br />\r\n<strong><em></em></strong><em><strong></strong></em> \r\n</p>', '', '999');

-- ----------------------------
-- Table structure for `lei_setting`
-- ----------------------------
DROP TABLE IF EXISTS `lei_setting`;
CREATE TABLE `lei_setting` (
  `id` int(11) NOT NULL,
  `type` char(255) NOT NULL,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lei_setting
-- ----------------------------
INSERT INTO `lei_setting` VALUES ('0', '首页标题', '这是首页标题');
INSERT INTO `lei_setting` VALUES ('1', '网站标题', '这是网站标题');
INSERT INTO `lei_setting` VALUES ('3', '', null);

-- ----------------------------
-- Table structure for `lei_text`
-- ----------------------------
DROP TABLE IF EXISTS `lei_text`;
CREATE TABLE `lei_text` (
  `id` int(11) NOT NULL DEFAULT '0',
  `title` text,
  `text` text,
  `paranText` text,
  `time` time DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lei_text
-- ----------------------------
INSERT INTO `lei_text` VALUES ('0', 'connectUs', '<strong>地址</strong><br /> 			123 Main Street<br /> 			New York, NY 10001', '<strong>营业时间</strong><br />\r\n星期一 五：15:00 ; 17:00<br />\r\n星期六 日：17:00; 17:10<br />', '00:00:12', '1');
INSERT INTO `lei_text` VALUES ('1', 'aboutUs', 'emmmmmm', '关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们', '00:00:12', '0');
INSERT INTO `lei_text` VALUES ('2', 'logo', 'July\'s test site', '<em>made in zhangjiajie</em><br />', '00:00:12', '0');

-- ----------------------------
-- Table structure for `lei_user`
-- ----------------------------
DROP TABLE IF EXISTS `lei_user`;
CREATE TABLE `lei_user` (
  `id` int(11) DEFAULT NULL,
  `name` char(255) DEFAULT NULL,
  `password` char(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lei_user
-- ----------------------------
INSERT INTO `lei_user` VALUES ('0', 'admin', '123456');
