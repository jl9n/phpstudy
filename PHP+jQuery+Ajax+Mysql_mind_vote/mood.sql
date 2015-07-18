-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 06 月 06 日 07:55
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `demo`
--

-- --------------------------------------------------------

--
-- 表的结构 `mood`
--

CREATE TABLE IF NOT EXISTS `mood` (
  `id` int(11) NOT NULL,
  `mood0` int(11) NOT NULL DEFAULT '0',
  `mood1` int(11) NOT NULL DEFAULT '0',
  `mood2` int(11) NOT NULL DEFAULT '0',
  `mood3` int(11) NOT NULL DEFAULT '0',
  `mood4` int(11) NOT NULL DEFAULT '0',
  `mood5` int(11) NOT NULL DEFAULT '0',
  `mood6` int(11) NOT NULL DEFAULT '0',
  `mood7` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mood`
--

INSERT INTO `mood` (`id`, `mood0`, `mood1`, `mood2`, `mood3`, `mood4`, `mood5`, `mood6`, `mood7`) VALUES
(1, 8, 6, 21, 19, 7, 10, 18, 24);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
