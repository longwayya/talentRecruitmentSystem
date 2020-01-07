-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020 年 01 月 07 日 21:07
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `rencai`
--

-- --------------------------------------------------------

--
-- 表的结构 `geren`
--

CREATE TABLE IF NOT EXISTS `geren` (
  `Gno` int(11) NOT NULL AUTO_INCREMENT,
  `Gname` char(20) NOT NULL,
  `Gpassword` char(20) NOT NULL,
  `Gtel` varchar(11) NOT NULL,
  `Gsex` char(2) NOT NULL,
  `Gyear` int(6) NOT NULL,
  `Gxueli` char(10) NOT NULL,
  `Gemail` char(20) NOT NULL,
  `Gzhuanye` char(10) NOT NULL,
  PRIMARY KEY (`Gno`),
  UNIQUE KEY `Gno` (`Gno`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10004 ;

--
-- 转存表中的数据 `geren`
--

INSERT INTO `geren` (`Gno`, `Gname`, `Gpassword`, `Gtel`, `Gsex`, `Gyear`, `Gxueli`, `Gemail`, `Gzhuanye`) VALUES
(10001, '张三', '123456', '123456', '男', 2020, '本科', '111@qq.com', '信息安全'),
(10000, '李四', '123456', '2222', '女', 2019, '专科', '2.@。com', '无'),
(10002, '王五', '123456', '123456', '女', 2019, '硕士', '2000@.com', '法学'),
(10003, '张三', '123456', '123456', '女', 2019, '本科', '111@qq.com', '法学');

-- --------------------------------------------------------

--
-- 表的结构 `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `Mname` char(20) NOT NULL,
  `Mpassword` char(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `qiye`
--

CREATE TABLE IF NOT EXISTS `qiye` (
  `Qname` char(20) NOT NULL,
  `Qtel` varchar(11) NOT NULL,
  `Qemail` char(20) NOT NULL,
  `Qpassword` char(20) NOT NULL,
  `Qlocate` char(20) NOT NULL,
  PRIMARY KEY (`Qname`),
  UNIQUE KEY `Qname` (`Qname`),
  UNIQUE KEY `Qname_2` (`Qname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `qiye`
--

INSERT INTO `qiye` (`Qname`, `Qtel`, `Qemail`, `Qpassword`, `Qlocate`) VALUES
('工商银行保定分行', '11111111', '11111', '123456', '11111');

-- --------------------------------------------------------

--
-- 表的结构 `zhiwei`
--

CREATE TABLE IF NOT EXISTS `zhiwei` (
  `Zname` char(20) NOT NULL,
  `Zqiye` char(20) NOT NULL,
  `Znumber` int(5) NOT NULL,
  `Zmoney` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
