/*
Navicat MySQL Data Transfer

Source Server         : LocalMySQL
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : paper_manage

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2019-05-16 16:10:16
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

-- ----------------------------
-- Table structure for editing_paper
-- ----------------------------
DROP TABLE IF EXISTS `editing_paper`;
CREATE TABLE `editing_paper` (
  `stu_id` varchar(20) NOT NULL,
  `version_id` int(11) NOT NULL,
  `paper_name` varchar(100) NOT NULL,
  `create_time` datetime NOT NULL,
  `amendment` varchar(500) DEFAULT NULL,
  `pass` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`stu_id`,`version_id`),
  KEY `version_id` (`version_id`),
  KEY `stu_id` (`stu_id`),
  CONSTRAINT `editing_paper_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `successfull_apply` (`stu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of editing_paper
-- ----------------------------

-- ----------------------------
-- Table structure for final_paper
-- ----------------------------
DROP TABLE IF EXISTS `final_paper`;
CREATE TABLE `final_paper` (
  `stu_id` varchar(20) NOT NULL,
  `version_id` int(11) NOT NULL,
  `score` int(11) DEFAULT NULL,
  `instructor_opinion_sheet_name` varchar(100) DEFAULT NULL,
  `appraiser_opinion_sheet_name` varchar(100) DEFAULT NULL,
  `pass` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`stu_id`),
  KEY `version_id` (`version_id`),
  CONSTRAINT `final_paper_ibfk_2` FOREIGN KEY (`version_id`) REFERENCES `editing_paper` (`version_id`),
  CONSTRAINT `final_paper_ibfk_3` FOREIGN KEY (`stu_id`) REFERENCES `editing_paper` (`stu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of final_paper
-- ----------------------------

-- ----------------------------
-- Table structure for midterm_test_form
-- ----------------------------
DROP TABLE IF EXISTS `midterm_test_form`;
CREATE TABLE `midterm_test_form` (
  `stu_id` varchar(20) NOT NULL,
  `midterm_test_form_name` varchar(100) DEFAULT NULL,
  `exam_opinion` varchar(800) DEFAULT NULL,
  `pass` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`stu_id`),
  CONSTRAINT `midterm_test_form_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `successfull_apply` (`stu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of midterm_test_form
-- ----------------------------

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
  PRIMARY KEY (`stu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('1', 'sss', 'sss', null, null);

-- ----------------------------
-- Table structure for successfull_apply
-- ----------------------------
DROP TABLE IF EXISTS `successfull_apply`;
CREATE TABLE `successfull_apply` (
  `stu_id` varchar(20) NOT NULL,
  `top_id` varchar(20) NOT NULL,
  PRIMARY KEY (`stu_id`),
  KEY `top_id` (`top_id`),
  KEY `stu_id` (`stu_id`),
  CONSTRAINT `successfull_apply_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `apply_topic` (`stu_id`),
  CONSTRAINT `successfull_apply_ibfk_2` FOREIGN KEY (`top_id`) REFERENCES `apply_topic` (`top_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of successfull_apply
-- ----------------------------

-- ----------------------------
-- Table structure for task_book
-- ----------------------------
DROP TABLE IF EXISTS `task_book`;
CREATE TABLE `task_book` (
  `top_id` varchar(20) NOT NULL,
  `task_book_name` varchar(100) NOT NULL,
  `pass` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`top_id`),
  CONSTRAINT `task_book_ibfk_1` FOREIGN KEY (`top_id`) REFERENCES `topic` (`top_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of task_book
-- ----------------------------

-- ----------------------------
-- Table structure for teacher
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `tea_id` varchar(20) NOT NULL,
  `name` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `expertise` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`tea_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teacher
-- ----------------------------
INSERT INTO `teacher` VALUES ('1', 'ttt', 'ttt', null, null);

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

-- ----------------------------
-- Table structure for topic_selection_report
-- ----------------------------
DROP TABLE IF EXISTS `topic_selection_report`;
CREATE TABLE `topic_selection_report` (
  `stu_id` varchar(20) NOT NULL,
  `topic_selection_report_name` varchar(100) DEFAULT NULL,
  `guiding_opinion` varchar(800) DEFAULT NULL,
  `pass` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`stu_id`),
  CONSTRAINT `topic_selection_report_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `successfull_apply` (`stu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of topic_selection_report
-- ----------------------------
