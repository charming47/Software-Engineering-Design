/*
Navicat MySQL Data Transfer

Source Server         : localMySQL
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : paper_manage

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2019-05-28 17:00:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for academic_officer
-- ----------------------------
DROP TABLE IF EXISTS `academic_officer`;
CREATE TABLE `academic_officer` (
  `tea_id` varchar(20) NOT NULL,
  PRIMARY KEY (`tea_id`),
  CONSTRAINT `academic_officer_ibfk_1` FOREIGN KEY (`tea_id`) REFERENCES `teacher` (`tea_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of academic_officer
-- ----------------------------
INSERT INTO `academic_officer` VALUES ('1');
INSERT INTO `academic_officer` VALUES ('3');

-- ----------------------------
-- Table structure for apply_topic
-- ----------------------------
DROP TABLE IF EXISTS `apply_topic`;
CREATE TABLE `apply_topic` (
  `stu_id` varchar(20) NOT NULL,
  `top_id` varchar(20) NOT NULL,
  `apply_reason` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`stu_id`,`top_id`),
  KEY `stu_id` (`stu_id`),
  KEY `top_id` (`top_id`),
  CONSTRAINT `apply_topic_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `student` (`stu_id`),
  CONSTRAINT `apply_topic_ibfk_2` FOREIGN KEY (`top_id`) REFERENCES `topic` (`top_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of apply_topic
-- ----------------------------
INSERT INTO `apply_topic` VALUES ('1', '1', '申请原因1_1');
INSERT INTO `apply_topic` VALUES ('1', '2', '申请原因1_2');
INSERT INTO `apply_topic` VALUES ('1', '3', '申请原因1_3');
INSERT INTO `apply_topic` VALUES ('2', '1', '申请原因2_1');
INSERT INTO `apply_topic` VALUES ('2', '3', '申请原因2_3');
INSERT INTO `apply_topic` VALUES ('3', '1', '申请原因3_1');
INSERT INTO `apply_topic` VALUES ('3', '2', '申请原因3_2');
INSERT INTO `apply_topic` VALUES ('3', '5', '申请原因3_5');
INSERT INTO `apply_topic` VALUES ('4', '2', '申请原因4_2');

-- ----------------------------
-- Table structure for appraiser
-- ----------------------------
DROP TABLE IF EXISTS `appraiser`;
CREATE TABLE `appraiser` (
  `tea_id` varchar(20) NOT NULL,
  PRIMARY KEY (`tea_id`),
  CONSTRAINT `appraiser_ibfk_1` FOREIGN KEY (`tea_id`) REFERENCES `teacher` (`tea_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of appraiser
-- ----------------------------
INSERT INTO `appraiser` VALUES ('1');
INSERT INTO `appraiser` VALUES ('2');
INSERT INTO `appraiser` VALUES ('3');

-- ----------------------------
-- Table structure for editing_paper
-- ----------------------------
DROP TABLE IF EXISTS `editing_paper`;
CREATE TABLE `editing_paper` (
  `stu_id` varchar(20) NOT NULL,
  `version_id` int(11) NOT NULL AUTO_INCREMENT,
  `paper_url` varchar(100) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `amendment` varchar(500) DEFAULT NULL,
  `pass` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`stu_id`,`version_id`),
  KEY `version_id` (`version_id`),
  KEY `stu_id` (`stu_id`),
  CONSTRAINT `editing_paper_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `successful_apply` (`stu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of editing_paper
-- ----------------------------
INSERT INTO `editing_paper` VALUES ('1', '1', '', '2019-05-28 16:54:39', '修改意见1_1', '1');
INSERT INTO `editing_paper` VALUES ('1', '2', '', '2019-05-28 16:50:19', '修改意见1_2', null);
INSERT INTO `editing_paper` VALUES ('2', '1', '', '2019-05-28 16:54:42', '修改意见2_2', '1');
INSERT INTO `editing_paper` VALUES ('2', '2', '', '2019-05-28 16:49:54', '修改意见2_3', null);
INSERT INTO `editing_paper` VALUES ('3', '1', '', '2019-05-28 16:50:48', '修改意见3_1', null);

-- ----------------------------
-- Table structure for final_paper
-- ----------------------------
DROP TABLE IF EXISTS `final_paper`;
CREATE TABLE `final_paper` (
  `stu_id` varchar(20) NOT NULL,
  `tea_id` varchar(20) DEFAULT NULL,
  `version_id` int(11) NOT NULL AUTO_INCREMENT,
  `score` int(11) DEFAULT NULL,
  `instructor_opinion_sheet_url` varchar(100) DEFAULT NULL,
  `appraiser_opinion_sheet_url` varchar(100) DEFAULT NULL,
  `pass` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`stu_id`),
  KEY `version_id` (`version_id`),
  KEY `tea_id` (`tea_id`),
  CONSTRAINT `final_paper_ibfk_3` FOREIGN KEY (`stu_id`) REFERENCES `editing_paper` (`stu_id`),
  CONSTRAINT `final_paper_ibfk_4` FOREIGN KEY (`version_id`) REFERENCES `editing_paper` (`version_id`),
  CONSTRAINT `final_paper_ibfk_5` FOREIGN KEY (`tea_id`) REFERENCES `appraiser` (`tea_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of final_paper
-- ----------------------------
INSERT INTO `final_paper` VALUES ('1', '1', '2', '95', '《导师意见表》路径1_1', '《评阅人意见表》路径1_1', '1');
INSERT INTO `final_paper` VALUES ('2', '2', '2', '70', '《导师意见表》路径2_2', '《评阅人意见表》路径2_2', null);
INSERT INTO `final_paper` VALUES ('3', '1', '1', '50', '《导师意见表》路径3_1', '《评阅人意见表》路径3_1', null);

-- ----------------------------
-- Table structure for midterm_test_form
-- ----------------------------
DROP TABLE IF EXISTS `midterm_test_form`;
CREATE TABLE `midterm_test_form` (
  `stu_id` varchar(20) NOT NULL,
  `midterm_test_form_url` varchar(100) DEFAULT NULL,
  `exam_opinion` varchar(800) DEFAULT NULL,
  `pass` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`stu_id`),
  CONSTRAINT `midterm_test_form_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `successful_apply` (`stu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of midterm_test_form
-- ----------------------------
INSERT INTO `midterm_test_form` VALUES ('1', '《中期考核表》路径1', '考核意见1', '1');
INSERT INTO `midterm_test_form` VALUES ('2', '《中期考核表》路径2', '考核意见2', '');
INSERT INTO `midterm_test_form` VALUES ('3', '《中期考核表》路径3', '考核意见3', null);

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `stu_id` varchar(20) NOT NULL,
  `name` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `expertise` varchar(50) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `progress_rate` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`stu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('1', 'stu1', 'stu1', 'stu1@163.com', '跑步', '11111111', 'apply_topic');
INSERT INTO `student` VALUES ('2', 'stu2', 'stu2', 'stu2@163.com', '打篮球', '22222222', 'apply_topic');
INSERT INTO `student` VALUES ('3', 'stu3', 'stu3', 'stu3@163.com', '跳舞', '33333333', 'apply_topic');
INSERT INTO `student` VALUES ('4', 'stu4', 'stu4', 'stu4@163.com', '打羽毛球', '44444444', 'apply_topic');
INSERT INTO `student` VALUES ('5', 'stu5', 'stu5', 'stu5@163.com', '写代码', '55555555', 'apply_topic');

-- ----------------------------
-- Table structure for successful_apply
-- ----------------------------
DROP TABLE IF EXISTS `successful_apply`;
CREATE TABLE `successful_apply` (
  `stu_id` varchar(20) NOT NULL,
  `top_id` varchar(20) NOT NULL,
  PRIMARY KEY (`stu_id`),
  KEY `top_id` (`top_id`) USING BTREE,
  KEY `stu_id` (`stu_id`) USING BTREE,
  CONSTRAINT `successful_apply_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `apply_topic` (`stu_id`),
  CONSTRAINT `successful_apply_ibfk_2` FOREIGN KEY (`top_id`) REFERENCES `apply_topic` (`top_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of successful_apply
-- ----------------------------
INSERT INTO `successful_apply` VALUES ('1', '1');
INSERT INTO `successful_apply` VALUES ('2', '2');
INSERT INTO `successful_apply` VALUES ('3', '3');

-- ----------------------------
-- Table structure for task_book
-- ----------------------------
DROP TABLE IF EXISTS `task_book`;
CREATE TABLE `task_book` (
  `top_id` varchar(20) NOT NULL,
  `task_book_url` varchar(100) NOT NULL,
  `pass` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`top_id`),
  CONSTRAINT `task_book_ibfk_1` FOREIGN KEY (`top_id`) REFERENCES `topic` (`top_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of task_book
-- ----------------------------
INSERT INTO `task_book` VALUES ('1', '《任务书》路径1', null);
INSERT INTO `task_book` VALUES ('2', '《任务书》路径2', '1');
INSERT INTO `task_book` VALUES ('3', '《任务书》路径3', null);

-- ----------------------------
-- Table structure for teacher
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `tea_id` varchar(20) NOT NULL,
  `name` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `expertise` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`tea_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teacher
-- ----------------------------
INSERT INTO `teacher` VALUES ('1', 'tea1', 'tea1', 'tea1@163.com', '11111111', '踢足球');
INSERT INTO `teacher` VALUES ('2', 'tea2', 'tea2', 'tea2@163.com', '22222222', '打篮球');
INSERT INTO `teacher` VALUES ('3', 'tea3', 'tea3', 'tea3@163.com', '33333333', '看书');
INSERT INTO `teacher` VALUES ('4', 'tea4', 'tea4', 'tea4@163.com', '44444444', '听音乐');
INSERT INTO `teacher` VALUES ('5', 'tea5', 'tea5', 'tea5@163.com', '55555555', '看电影');

-- ----------------------------
-- Table structure for teach_director
-- ----------------------------
DROP TABLE IF EXISTS `teach_director`;
CREATE TABLE `teach_director` (
  `tea_id` varchar(20) NOT NULL,
  PRIMARY KEY (`tea_id`),
  CONSTRAINT `teach_director_ibfk_1` FOREIGN KEY (`tea_id`) REFERENCES `teacher` (`tea_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teach_director
-- ----------------------------
INSERT INTO `teach_director` VALUES ('1');
INSERT INTO `teach_director` VALUES ('2');

-- ----------------------------
-- Table structure for topic
-- ----------------------------
DROP TABLE IF EXISTS `topic`;
CREATE TABLE `topic` (
  `top_id` varchar(20) NOT NULL,
  `tea_id` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `background` varchar(800) DEFAULT NULL,
  `requirement` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`top_id`),
  KEY `tea_id` (`tea_id`),
  CONSTRAINT `topic_ibfk_1` FOREIGN KEY (`tea_id`) REFERENCES `teacher` (`tea_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of topic
-- ----------------------------
INSERT INTO `topic` VALUES ('1', '1', '题目名称1', '背景1', '需求1');
INSERT INTO `topic` VALUES ('2', '1', '题目名称2', '背景2', '需求2');
INSERT INTO `topic` VALUES ('3', '1', '题目名称3', '背景3', '需求3');
INSERT INTO `topic` VALUES ('4', '2', '题目名称4', '背景4', '需求4');
INSERT INTO `topic` VALUES ('5', '2', '题目名称5', '背景5', '需求5');
INSERT INTO `topic` VALUES ('6', '3', '题目名称6', '背景6', '需求6');
INSERT INTO `topic` VALUES ('7', '3', '题目名称7', '背景7', '需求7');
INSERT INTO `topic` VALUES ('8', '4', '题目名称8', '背景8', '需求8');

-- ----------------------------
-- Table structure for topic_selection_report
-- ----------------------------
DROP TABLE IF EXISTS `topic_selection_report`;
CREATE TABLE `topic_selection_report` (
  `stu_id` varchar(20) NOT NULL,
  `topic_selection_report_url` varchar(100) DEFAULT NULL,
  `guiding_opinion` varchar(800) DEFAULT NULL,
  `pass` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`stu_id`),
  CONSTRAINT `topic_selection_report_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `successful_apply` (`stu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of topic_selection_report
-- ----------------------------
INSERT INTO `topic_selection_report` VALUES ('1', '《选题报告》路径1', '指导意见1', null);
INSERT INTO `topic_selection_report` VALUES ('2', '《选题报告》路径2', '指导意见2', '1');
INSERT INTO `topic_selection_report` VALUES ('3', '《选题报告》路径3', '指导意见3', null);
