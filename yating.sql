/*
Navicat MySQL Data Transfer

Source Server         : coobar_local
Source Server Version : 50538
Source Host           : 127.0.0.1:19306
Source Database       : xiaoxia

Target Server Type    : MYSQL
Target Server Version : 50538
File Encoding         : 65001

Date: 2016-05-09 11:49:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cb_boss`
-- ----------------------------
DROP TABLE IF EXISTS `cb_boss`;
CREATE TABLE `cb_boss` (
  `bossid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `guimo` varchar(250) DEFAULT NULL,
  `money` varchar(250) DEFAULT NULL,
  `lawer` varchar(250) DEFAULT NULL,
  `web` varchar(250) DEFAULT NULL,
  `telphone` varchar(250) DEFAULT NULL,
  `is_pass` varchar(250) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bossid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cb_boss
-- ----------------------------

-- ----------------------------
-- Table structure for `cb_mailsms`
-- ----------------------------
DROP TABLE IF EXISTS `cb_mailsms`;
CREATE TABLE `cb_mailsms` (
  `mailsmsid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `workname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '0',
  `content` varchar(50) NOT NULL DEFAULT '0',
  `add_time` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`mailsmsid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cb_mailsms
-- ----------------------------
INSERT INTO `cb_mailsms` VALUES ('3', '1', 'root', '', 'dadad', 'ddddd', '2016-04-26 18:40:13');
INSERT INTO `cb_mailsms` VALUES ('4', '1', 'root', '', 'ffffff', 'ggggg', '2016-04-26 18:41:33');
INSERT INTO `cb_mailsms` VALUES ('5', '1', 'root', '', '9999', '9999', '2016-04-26 18:45:03');
INSERT INTO `cb_mailsms` VALUES ('6', '1', 'root', '', '544545', '454545', '2016-04-26 18:45:32');
INSERT INTO `cb_mailsms` VALUES ('7', '1', 'root', '', '544545', '454545', '2016-04-26 18:45:50');
INSERT INTO `cb_mailsms` VALUES ('8', '1', 'root', '', '4334', '433443', '2016-04-26 18:47:44');
INSERT INTO `cb_mailsms` VALUES ('9', '1', 'root', '', '4334', '433443', '2016-04-26 18:47:59');
INSERT INTO `cb_mailsms` VALUES ('10', '1', 'root', '', 'dawdwa', '12', '2016-04-26 18:49:26');
INSERT INTO `cb_mailsms` VALUES ('11', '1', 'root', '', 'dawdwa', '12', '2016-04-26 18:50:00');

-- ----------------------------
-- Table structure for `cb_news`
-- ----------------------------
DROP TABLE IF EXISTS `cb_news`;
CREATE TABLE `cb_news` (
  `newsid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `news_title` varchar(50) NOT NULL,
  `news_about` varchar(50) NOT NULL,
  `news_url` varchar(50) NOT NULL,
  `add_time` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`newsid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cb_news
-- ----------------------------
INSERT INTO `cb_news` VALUES ('2', '44', 'php', 'www.baidu.com', '2016-05-09 11:40:17');

-- ----------------------------
-- Table structure for `cb_resume`
-- ----------------------------
DROP TABLE IF EXISTS `cb_resume`;
CREATE TABLE `cb_resume` (
  `resumeid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `mingzhu` varchar(50) DEFAULT NULL,
  `hunyin` varchar(50) DEFAULT NULL,
  `shenfen` varchar(50) DEFAULT NULL,
  `jiguan` varchar(50) DEFAULT NULL,
  `adress` varchar(50) DEFAULT NULL,
  `telphone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `edu` varchar(250) DEFAULT NULL,
  `reward` varchar(250) DEFAULT NULL,
  `work` varchar(250) DEFAULT NULL,
  `skill` varchar(250) DEFAULT NULL,
  `selftalk` varchar(250) DEFAULT NULL,
  `hopework` varchar(250) DEFAULT NULL,
  `is_pass` varchar(250) DEFAULT '0',
  PRIMARY KEY (`resumeid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cb_resume
-- ----------------------------
INSERT INTO `cb_resume` VALUES ('1', '3', 'root', '2', '2', '2', '2', '2', '333', '123456', '4444', '2', '2', '2', 'skill', '1', '1', '1');
INSERT INTO `cb_resume` VALUES ('2', '4', '3333', '33', '888', '888', '54455445', '', '', '18958063477', '1@qq.com', '', '', '', '', '', '', '0');
INSERT INTO `cb_resume` VALUES ('3', '5', 'dad222', null, null, null, null, null, null, '1111', '123456@qq.com', null, null, null, null, null, null, '0');

-- ----------------------------
-- Table structure for `cb_seek`
-- ----------------------------
DROP TABLE IF EXISTS `cb_seek`;
CREATE TABLE `cb_seek` (
  `seekid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `workid` varchar(50) NOT NULL,
  `work_title` varchar(50) NOT NULL,
  `is_look` varchar(50) NOT NULL DEFAULT '0',
  `create_time` varchar(250) DEFAULT NULL,
  `update_time` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`seekid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cb_seek
-- ----------------------------
INSERT INTO `cb_seek` VALUES ('12', '3', '2', '1', '1', '2016-04-26 15:05:40', '2016-04-26 15:05:40');
INSERT INTO `cb_seek` VALUES ('14', '4', '2', '1', '0', '2016-04-27 20:18:34', '2016-04-27 20:18:34');

-- ----------------------------
-- Table structure for `cb_users`
-- ----------------------------
DROP TABLE IF EXISTS `cb_users`;
CREATE TABLE `cb_users` (
  `userid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telphone` varchar(50) DEFAULT NULL,
  `userdata` varchar(50) DEFAULT NULL,
  `repassword` varchar(50) DEFAULT NULL,
  `role` int(11) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cb_users
-- ----------------------------
INSERT INTO `cb_users` VALUES ('2', '2', '1234@qq.com', '222', '', '123456', '2');
INSERT INTO `cb_users` VALUES ('3', '1', '123@qq.com', '123456', '', '111', '1');
INSERT INTO `cb_users` VALUES ('4', '3333', '1@qq.com', '18958063477', '', '123456', '3');
INSERT INTO `cb_users` VALUES ('5', '5', '123456@qq.com', '1111', '', '123456', '1');
INSERT INTO `cb_users` VALUES ('6', '3334', '12@qq.com', '18958063477', '', '123456', '1');

-- ----------------------------
-- Table structure for `cb_work`
-- ----------------------------
DROP TABLE IF EXISTS `cb_work`;
CREATE TABLE `cb_work` (
  `workid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `work_num` varchar(50) NOT NULL,
  `work_type` varchar(50) DEFAULT NULL,
  `work_title` varchar(50) NOT NULL,
  `positionname` varchar(50) NOT NULL,
  `department` varchar(50) DEFAULT NULL,
  `jobnature` varchar(50) DEFAULT NULL,
  `salarymin` varchar(50) DEFAULT NULL,
  `salarymax` varchar(50) DEFAULT NULL,
  `workaddress` varchar(50) DEFAULT NULL,
  `workyear` varchar(50) DEFAULT NULL,
  `education` varchar(50) DEFAULT NULL,
  `temptation` varchar(50) DEFAULT NULL,
  `receiveemail` varchar(250) DEFAULT NULL,
  `create_time` varchar(250) DEFAULT NULL,
  `update_time` varchar(250) DEFAULT NULL,
  `is_pass` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`workid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cb_work
-- ----------------------------
INSERT INTO `cb_work` VALUES ('2', '2', '5', null, '1', '全职', '研发部', '关注', '1', '55', '上海', '1年', '大专', '100万', 'admin@admin.com', '2016-04-20 16:37:49', '2016-04-20 16:37:49', '0');
INSERT INTO `cb_work` VALUES ('3', '2', '5', null, '2', '全职', '研发部', '关注', '1', '55', '上海', '1年', '大专', '100万', 'admin@admin.com', '2016-04-20 17:11:01', '2016-04-20 17:11:01', '0');
