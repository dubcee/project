-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `softacad`
--
CREATE DATABASE IF NOT EXISTS `softacad` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `softacad`;

-- --------------------------------------------------------

--
-- Структура на таблица `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `content` text,
  `date_added` datetime DEFAULT NULL,
  `news_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Схема на данните от таблица `comments`
--

INSERT INTO `comments` (`id`, `name`, `content`, `date_added`, `news_id`) VALUES
(2, 'Ivan', 'Svetovnoooto', '2014-06-12 18:56:08', 2),
(11, 'sz,jcnasdlanjka', 'sdkjnsd;vndfvn', '0000-00-00 00:00:00', 0),
(14, 'dfsdf', 'sfsdf', '0000-00-00 00:00:00', 0),
(15, 'dsd', 'dxcxcxzc', '0000-00-00 00:00:00', 0),
(16, 'dsd', 'dxcxcxzc', '0000-00-00 00:00:00', 1),
(17, 'zx;fclvk n', '. nzlknvadslknv', '0000-00-00 00:00:00', 1),
(18, 'gjnsd;fgjndflkn;l', 'sdofngs;dfnvsd;fjv', '0000-00-00 00:00:00', 1),
(19, '1111111111', '1111111111111111111', '0000-00-00 00:00:00', 1),
(20, '1111111111', '1111111111111111111', '0000-00-00 00:00:00', 1),
(21, '1111111111', '1111111111111111111', '0000-00-00 00:00:00', 1),
(22, 'xfgdsfh', 'fghdfghfdghfghfdgh', '0000-00-00 00:00:00', 1),
(23, 'xfgdsfh', 'fghdfghfdghfghfdgh', '0000-00-00 00:00:00', 1),
(24, 'xfgdsfh', 'fghdfghfdghfghfdgh', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Структура на таблица `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Схема на данните от таблица `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `phone`, `title`, `content`) VALUES
(2, 'ÐÑÐµÐ½', 'Ð¡Ñ‚Ð¾ÑÐ½Ð¾Ð²', 'dubcee@abv.bg', 1234567890, 'ÐšÐ°Ðº Ðµ', 'Ð‘Ð¸Ð²Ð° Ð³Ð¾Ñ€Ðµ Ð´Ð¾Ð»Ñƒ'),
(3, 'Don', 'Jon', 'don@jon.com', 1234567890, 'WSCG', 'fgsfgsfdhsgfhdghdfg');

-- --------------------------------------------------------

--
-- Структура на таблица `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `image` varchar(255) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Схема на данните от таблица `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `date_added`) VALUES
(1, 'DPS podade ostavka', 'Pravitelstvoto na DPS podade ostavka.', '345zx450y250_2071889.jpg', '0000-00-00 00:00:00'),
(2, 'Boiko e nomer 1', 'Taka e da. ', '1279zzzz.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура на таблица `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура на таблица `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `promotion` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Схема на данните от таблица `products`
--

INSERT INTO `products` (`id`, `title`, `content`, `price`, `promotion`) VALUES
(1, 'Product 1', 'Product 1 description', '11.00', 1),
(2, 'Product 2', 'Product 2 description', '22.00', 1),
(3, 'Product 3', 'Product 3 description', '33.00', 1),
(4, 'Product 4', 'Product 4 description', '44.00', 1),
(5, 'Product 5', 'Product 5 description', '55.00', 0);

-- --------------------------------------------------------

--
-- Структура на таблица `products_images`
--

DROP TABLE IF EXISTS `products_images`;
CREATE TABLE IF NOT EXISTS `products_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `products_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Схема на данните от таблица `products_images`
--

INSERT INTO `products_images` (`id`, `name`, `products_id`) VALUES
(1, '4341dfgdfdg.jpg', 0),
(8, '5618dfgdfdg.jpg', 0),
(12, '9650gfhdfthfg.jpg', 0),
(17, '7280dfgdfdg.jpg', 0),
(21, '5433HavMotorOil20W50.jpg', 0),
(27, '5096gfhdfthfg.jpg', 0),
(30, '7335gfhdfthfg.jpg', 5),
(37, '2141HavMotorOil20W50.jpg', 6),
(46, '9719dfgdfdg.jpg', 9),
(56, '7338gfhdfthfg.jpg', 9),
(59, '8656HavMotorOil20W50.jpg', 9),
(61, '4064HavMotorOil20W50.jpg', 9),
(62, '1088dfgdfdg.jpg', 10),
(63, '6573gfhdfthfg.jpg', 10),
(64, '3945dfgdfdg.jpg', 11),
(65, '1553gfhdfthfg.jpg', 11),
(66, '1929dfgdfdg.jpg', 1),
(67, '6497gfhdfthfg.jpg', 2),
(68, '1772HavMotorOil20W50.jpg', 3),
(69, '8521dfgdfdg.jpg', 2),
(70, '3876HavMotorOil20W50.jpg', 2),
(71, '6438dfgdfdg.jpg', 1),
(72, '7005HavMotorOil20W50.jpg', 1),
(73, '2409HavMotorOil20W50.jpg', 1),
(74, '7068HavMotorOil20W50.jpg', 4);

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'test', '202cb962ac59075b964b07152d234b70'),
(3, 'asd', '7815696ecbf1c96e6894b779456d330e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
