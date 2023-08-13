-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 13 أغسطس 2023 الساعة 09:59
-- إصدار الخادم: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproject`
--

-- --------------------------------------------------------

--
-- بنية الجدول `dbuser`
--

DROP TABLE IF EXISTS `dbuser`;
CREATE TABLE IF NOT EXISTS `dbuser` (
  `ID` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `comments` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- إرجاع أو استيراد بيانات الجدول `dbuser`
--

INSERT INTO `dbuser` (`ID`, `title`, `fname`, `comments`) VALUES
(0, 'Mr.', 'نواف', 'الصفحة سيئة'),
(0, '', 'محمد', ' موقع رائع'),
(0, '', 'عمر', ' موقع مميز'),
(0, '', '', ''),
(0, '', 'يوسف', ' صفحة جميلة'),
(0, '', 'خالد', 'صفحة رائعة'),
(0, '', 'Omar', ' very good'),
(0, '', 'محمد', ' رائع');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
