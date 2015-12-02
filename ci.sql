-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci`
--

-- --------------------------------------------------------

--
-- Структура на таблица `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `postMessage` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `views` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Схема на данните от таблица `article`
--

INSERT INTO `article` (`id`, `title`, `author`, `postMessage`, `image`, `date`, `views`) VALUES
(13, 'Hi', 'Hi', 'Hi', 'cars-volkswagen_004231143.jpg', '2015-11-26 10:42:22', 14),
(14, 'Op', 'Op', 'Op', '12049737_1101597746530752_2801169704047912874_n4.jpg', '2015-11-26 10:42:32', 7),
(15, 'fdsfsd', 'fdsd', 'fdfdfdsfsd', '12049737_1101597746530752_2801169704047912874_n5.jpg', '2015-11-26 10:42:39', 2),
(16, 'Hello', 'PetarSpasov', 'dffsfdfsd', '12049737_1101597746530752_2801169704047912874_n6.jpg', '2015-11-30 00:19:34', 0),
(17, 'Hello1', 'PetarSpasov1', 'jnhjkh1', '12049737_1101597746530752_2801169704047912874_n7.jpg', '2015-11-30 10:38:52', 4);

-- --------------------------------------------------------

--
-- Структура на таблица `ci`
--

CREATE TABLE IF NOT EXISTS `ci` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Схема на данните от таблица `ci`
--

INSERT INTO `ci` (`id`, `fullName`, `email`, `message`) VALUES
(14, 'PetarSpasov', 'codeprci@gmail.com', 'Zdrasti'),
(15, 'PetarSpasov', 'codeprci@gmail.com', 'dffdsfsd'),
(16, 'dfsfd', 'fdsfd@abv.bg', 'fdfds');

-- --------------------------------------------------------

--
-- Структура на таблица `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `avatar` varchar(255) DEFAULT 'default.jpg',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_admin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_confirmed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `avatar`, `created_at`, `updated_at`, `is_admin`, `is_confirmed`, `is_deleted`) VALUES
(1, 'peca7a', 'petar_spasov@abv.bg', '$2y$10$LKtDgfK5I8PaQoxCnx5Fq.e4ZAVi/sxDOKBo84NISvwuNeMOASVpK', 'default.jpg', '2015-11-26 17:57:42', NULL, 1, 0, 0),
(2, 'gosho', 'gosho@abv.bg', '$2y$10$d1Ld5cK6uK9MJ1CvqhmDJ.TwddVe4t5PYk5L3C53OydfPvlTA5u/i', 'default.jpg', '2015-12-01 10:11:25', NULL, 0, 0, 0),
(3, 'alabala', 'coderpci@gmail.com', '$2y$10$gi2MVARVvcxirnWIy6z4SeOjkJSxRQicI39I.h7ULyU8N/WusHXGC', 'default.jpg', '2015-12-01 17:44:13', NULL, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
