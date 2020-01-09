-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020 年 01 月 09 日 09:07
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
  `Gname` char(20) NOT NULL,
  `Gpassword` char(20) NOT NULL,
  `Gtel` varchar(11) NOT NULL,
  `Gsex` char(2) NOT NULL,
  `Gyear` int(6) NOT NULL,
  `Gxueli` char(10) NOT NULL,
  `Gemail` char(20) NOT NULL,
  `Gzhuanye` char(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `geren`
--

INSERT INTO `geren` (`Gname`, `Gpassword`, `Gtel`, `Gsex`, `Gyear`, `Gxueli`, `Gemail`, `Gzhuanye`) VALUES
('王五', '003', '333333', '男', 22, '本科', '2345@qq.com', '文学'),
('李四', '002', '222222', '女', 22, '研究生', '5678@qq.com', '英语'),
('张三', '001', '111111', '男', 20, '本科', '1234@qq.com', '计算机'),
('王五', '111', '2', '2', 2, '2', '2', '2');

-- --------------------------------------------------------

--
-- 表的结构 `qiye`
--

CREATE TABLE IF NOT EXISTS `qiye` (
  `Qname` char(20) NOT NULL,
  `Qtel` int(11) NOT NULL,
  `Qemail` char(20) NOT NULL,
  `Qpassword` char(20) NOT NULL,
  `Qlocate` char(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `qiye`
--

INSERT INTO `qiye` (`Qname`, `Qtel`, `Qemail`, `Qpassword`, `Qlocate`) VALUES
('中国电信', 3, '0003@163.com', '0003', '石家庄'),
('中国联通', 2, '0002@163.com', '0002', '保定'),
('中国移动', 1, '0001@163.com', '0001', '北京');

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

--
-- 转存表中的数据 `zhiwei`
--

INSERT INTO `zhiwei` (`Zname`, `Zqiye`, `Znumber`, `Zmoney`) VALUES
('客服', '中国移动', 2, 5000),
('维修人员', '中国联通', 1, 8000),
('客服', '中国联通', 2, 4000),
('前台', '中国电信', 1, 3000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
