-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 26, 2017 at 01:13 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--
CREATE DATABASE IF NOT EXISTS `testdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `testdb`;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(6) NOT NULL,
  `title` varchar(160) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_lithuanian_ci,
  `date` date DEFAULT NULL,
  `user_id` int(6) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `date`, `user_id`) VALUES
(1, 'Atsikrausto sveiko maisto restoranai i Kauną ąčėčęįęė ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-09-25', 1),
(3, 'Antraste - kala medi', 'Turinys tratata', '2017-09-26', 1),
(4, 'Kaunas svencia Rudeni', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-09-26', 2),
(5, 'Antraste - kala medi', 'Turinys tratata', '2017-09-26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(6) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci DEFAULT NULL,
  `pass` varchar(20) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci DEFAULT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci DEFAULT NULL,
  `rights` varchar(10) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `email`, `rights`) VALUES
(0, 'Karolis', 'Karolis', 'Karolis', 'Karolis'),
(1, 'Tim', 'tratata', 'a@a.lt', 'moderator'),
(2, 'Paul', 'drakonas1', 'a@a.lt', 'admin'),
(5, 'Karolis', 'Karolis', 'Karolis', 'Karolis'),
(6, 'Petras', 'xxd3f', 'ada@a.lt', 'subscriber'),
(7, 'ęčėįčęįėęčį', '', '', 'subscriber'),
(8, 'Karlis', 'blakas', 'aaa@a.lt', 'subscriber'),
(10, 'karlosas', 'c20bf0c97ecc7d22c50d', 'kaunas@info.lt', 'subscriber'),
(11, 'Kasdf/is', '$2y$10$80Za7HU2hdGDI', 'aaa@a.lt', 'subscriber'),
(12, 'Kasdf/is', '$2y$10$7zI9K6K2LL3AW', 'aaa@a.lt', 'subscriber'),
(13, 'Kasdf/is', '$2y$10$fagUUof3m8o/x', 'aaa@a.lt', 'subscriber'),
(14, 'Kasdf/is', '$2y$10$Y5/7kq5SGvahC', 'aaa@a.lt', 'subscriber'),
(15, 'Kasdf/is', '$2y$10$OQ5IVfWN.Uztu', 'aaa@a.lt', 'subscriber'),
(16, 'Kasdf/is', '$2y$10$l9JXS/u8op//9', 'aaa@a.lt', 'subscriber'),
(17, 'Kasdf/is', '$2y$10$tR3B94GdYVc7I', 'aaa@a.lt', 'subscriber'),
(18, 'Kasdf/is', '$2y$10$JCxBZ.s1nyKzm', 'aaa@a.lt', 'subscriber'),
(19, 'Kasdf/is', '$2y$10$k7tYHbFzd80ru', 'aaa@a.lt', 'subscriber'),
(20, 'Kasdf/is', '$2y$10$60L9YwR9B5wGS', 'aaa@a.lt', 'subscriber');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
