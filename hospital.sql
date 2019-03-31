-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2019-03-31 03:07:40
-- 服务器版本： 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- 表的结构 `deptment`
--

DROP TABLE IF EXISTS `deptment`;
CREATE TABLE IF NOT EXISTS `deptment` (
  `name` varchar(10) NOT NULL,
  `room` int(10) DEFAULT NULL,
  `floor` int(5) DEFAULT NULL,
  `salary` int(10) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `deptment`
--

INSERT INTO `deptment` (`name`, `room`, `floor`, `salary`) VALUES
('内科', 101, 1, 10000),
('外科', 201, 2, 10000),
('儿科', 301, 3, 20000),
('妇科', 401, 4, 30000),
('男科', 501, 5, 4000),
('五官科', 601, 6, 5000),
('肿瘤科', 701, 7, 6000),
('皮肤性病科', 801, 8, 70000),
('传染科', 901, 9, 0),
('精神心理科', 1001, 10, 8000);

-- --------------------------------------------------------

--
-- 表的结构 `docter`
--

DROP TABLE IF EXISTS `docter`;
CREATE TABLE IF NOT EXISTS `docter` (
  `name` varchar(10) DEFAULT NULL,
  `sex` char(5) DEFAULT NULL,
  `id` varchar(10) NOT NULL,
  `dept_name` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `docter`
--

INSERT INTO `docter` (`name`, `sex`, `id`, `dept_name`) VALUES
('王萌', '女', '12131', '五官科'),
('陈凯', '男', '12314', '传染科'),
('王无', '男', '12324', '精神心理科'),
('刘康', '男', '32424', '男科'),
('王萌', '女', '23425', '儿科'),
('王萌', '女', '78686', '肿瘤科'),
('百科', '女', '29185', '皮肤性病科'),
('刘柳', '男', '13144', '五官科'),
('黄药师', '男', '23141', '男科');

-- --------------------------------------------------------

--
-- 表的结构 `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `pat_id` varchar(10) NOT NULL,
  `pat_name` varchar(10) DEFAULT NULL,
  `pat_time` int(10) DEFAULT NULL,
  `doc_id` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`pat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `history`
--

INSERT INTO `history` (`pat_id`, `pat_name`, `pat_time`, `doc_id`) VALUES
('141029', '王鹏', 1121, '12314'),
('9982719', '陈并', 1211, '12324');

-- --------------------------------------------------------

--
-- 表的结构 `livehospital`
--

DROP TABLE IF EXISTS `livehospital`;
CREATE TABLE IF NOT EXISTS `livehospital` (
  `pat_id` varchar(10) NOT NULL,
  `flat` varchar(5) DEFAULT NULL,
  `room_ID` varchar(5) DEFAULT NULL,
  `bed_ID` varchar(5) DEFAULT NULL,
  `dept_name` varchar(10) NOT NULL,
  PRIMARY KEY (`pat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `livehospital`
--

INSERT INTO `livehospital` (`pat_id`, `flat`, `room_ID`, `bed_ID`, `dept_name`) VALUES
('000000', '7', '01', '03', '皮肤性病科'),
('1315161', '1', '01', '01', '内科'),
('131313', '3', '05', '03', '儿科'),
('09011', '1', '01', '01', '内科');

-- --------------------------------------------------------

--
-- 表的结构 `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `user_name` varchar(10) NOT NULL,
  `code_num` varchar(10) NOT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `manager`
--

INSERT INTO `manager` (`user_name`, `code_num`) VALUES
('12314', '0000');

-- --------------------------------------------------------

--
-- 表的结构 `medicine`
--

DROP TABLE IF EXISTS `medicine`;
CREATE TABLE IF NOT EXISTS `medicine` (
  `name` varchar(10) DEFAULT NULL,
  `med_ID` varchar(10) NOT NULL,
  `number` int(10) NOT NULL,
  `money` int(10) NOT NULL,
  PRIMARY KEY (`med_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `medicine`
--

INSERT INTO `medicine` (`name`, `med_ID`, `number`, `money`) VALUES
('板蓝根', '1102', 81, 10),
('阿莫西林', '1103', 99, 12),
('速效救心丸', '1200', 100, 2000);

-- --------------------------------------------------------

--
-- 表的结构 `operation`
--

DROP TABLE IF EXISTS `operation`;
CREATE TABLE IF NOT EXISTS `operation` (
  `oper_ID` varchar(10) NOT NULL,
  `pat_id` varchar(10) NOT NULL,
  `oper_time` int(10) DEFAULT NULL,
  PRIMARY KEY (`pat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `operation`
--

INSERT INTO `operation` (`oper_ID`, `pat_id`, `oper_time`) VALUES
('32151', '123141', 907);

-- --------------------------------------------------------

--
-- 表的结构 `operation_form`
--

DROP TABLE IF EXISTS `operation_form`;
CREATE TABLE IF NOT EXISTS `operation_form` (
  `name` varchar(20) NOT NULL,
  `deptment` varchar(20) NOT NULL,
  `doc_id` varchar(10) NOT NULL,
  `oper_ID` varchar(10) NOT NULL,
  `money` int(10) NOT NULL,
  `doc_name` varchar(20) NOT NULL,
  PRIMARY KEY (`oper_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `operation_form`
--

INSERT INTO `operation_form` (`name`, `deptment`, `doc_id`, `oper_ID`, `money`, `doc_name`) VALUES
('胰腺肿瘤切除', '精神心理科', '12324', '00000', 300000, '王无'),
('异物取出', '儿科', '23425', '1010', 200000, '王萌'),
('眼睛切除', '五官科', '12131', '32151', 250000, '王萌'),
('眼睛切除', '五官科', '13144', '32141', 250000, '刘柳');

-- --------------------------------------------------------

--
-- 表的结构 `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `name` varchar(10) DEFAULT NULL,
  `sex` char(5) DEFAULT NULL,
  `year_old` int(10) DEFAULT NULL,
  `id` varchar(10) NOT NULL,
  `phone_num` int(7) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `patients`
--

INSERT INTO `patients` (`name`, `sex`, `year_old`, `id`, `phone_num`) VALUES
('白科', '男', 15, '11111', 1414141),
('陈天', '男', 41, '231414', 492013),
('蒙真', '男', 18, '43567', 1231574),
('蒙', '女', 51, '90999', 999999),
('陈天', '男', 51, '9011', 1414141),
('王鹏', '男', 18, '141415', 1513115),
('liu', '男', 77, '56746', 25342),
('王鹏', '男', 18, '000000', 1414141),
('百科', '男', 23, '991814', 897652),
('张两', '男', 55, '12306', 23145),
('王鹏', '男', 23, '141029', 9090909),
('赵敏', '男', 18, '61011', 432151),
('鹏', '男', 70, '9898', 7878),
('蒙真', '女', 18, '131313', 0),
('刘超', '男', 18, '6045321', 675382),
('白科', '男', 22, '09011', 1414141),
('是', '男', 18, '1211211', 90909091),
('陈并', '男', 21, '9982719', 893726),
('实验1', '男', 10, '1001', 10011);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
