-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 02, 2017 at 10:28 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajaxtry`
--
CREATE DATABASE IF NOT EXISTS `ajaxtry` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_lithuanian_ci;
USE `ajaxtry`;

-- --------------------------------------------------------

--
-- Table structure for table `tekstai`
--

CREATE TABLE `tekstai` (
  `id` int(6) NOT NULL,
  `main` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  `straipsniai` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  `kita` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `tekstai`
--

INSERT INTO `tekstai` (`id`, `main`, `straipsniai`, `kita`) VALUES
(1, 'lorem ipsum header', 'lorem article1', 'lorem kazkas kita1'),
(2, 'lorem ipsum body', 'lorem article1', 'lorem kazkas kita2'),
(3, 'lorem ipsum footer', 'lorem article3', 'lorem kazkas kita3'),
(4, '', 'lorem article4', 'lorem kazkas kita4'),
(5, '', 'lorem article5', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tekstai`
--
ALTER TABLE `tekstai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tekstai`
--
ALTER TABLE `tekstai`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;--
-- Database: `hospital9`
--
CREATE DATABASE IF NOT EXISTS `hospital9` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hospital9`;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(6) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `lname` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `lname`) VALUES
(1, 'Tom', 'Opsa'),
(2, 'Paul', 'Tor'),
(3, 'Jo', 'Oto'),
(4, 'Lili', 'Lekso'),
(5, 'Timy', 'So');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(6) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `client_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `name`, `client_id`) VALUES
(1, 'pic-46.jpg', 5),
(2, 'logo.jpg', 1),
(3, 'pic-456.jpg', 3),
(4, 'pic-4234234.GIF', 2),
(5, 'pic-4622.GIF', 4);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(6) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `lname` varchar(35) DEFAULT NULL,
  `doctor_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `lname`, `doctor_id`) VALUES
(1, 'Ari', 'Amon', 2),
(2, 'Tomas', 'Taros', 5),
(3, 'Ana', 'Tomson', 1),
(4, 'Tom', 'Alis', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;--
-- Database: `projektui`
--
CREATE DATABASE IF NOT EXISTS `projektui` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projektui`;

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(6) NOT NULL,
  `kas` text CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `kaip` text CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `kodel` text CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `ka` text CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `kas`, `kaip`, `kodel`, `ka`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet repellat exercitationem sunt nihil vero, quae perferendis error quam consectetur quia maiores at magnam assumenda, mollitia, nesciunt voluptas molestiae sapiente laudantium doloribus esse eaque. Iste libero quos, velit nam vitae quaerat, cumque ab delectus quae voluptas optio! Dolorum, voluptatum KAS MES?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet repellat exercitationem sunt nihil vero, quae perferendis error quam consectetur quia maiores at magnam assumenda, mollitia, nesciunt voluptas molestiae sapiente laudantium doloribus esse eaque. Iste libero quos, velit nam vitae quaerat, cumque ab delectus quae voluptas optio! Dolorum, voluptatum kaip pradejom?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet repellat exercitationem sunt nihil vero, quae perferendis error quam consectetur quia maiores at magnam assumenda, mollitia, nesciunt voluptas molestiae sapiente laudantium doloribus esse eaque. Iste libero quos, velit nam vitae quaerat, cumque ab delectus quae voluptas optio! Dolorum, voluptatum kodel mes?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet repellat exercitationem sunt nihil vero, quae perferendis error quam consectetur quia maiores at magnam assumenda, mollitia, nesciunt voluptas molestiae sapiente laudantium doloribus esse eaque. Iste libero quos, velit nam vitae quaerat, cumque ab delectus quae voluptas optio! Dolorum, voluptatum paslaugos trumpai');

-- --------------------------------------------------------

--
-- Table structure for table `paslaugos`
--

CREATE TABLE `paslaugos` (
  `id` int(6) NOT NULL,
  `pavadinimas` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_lithuanian_ci DEFAULT NULL,
  `tekstas` varchar(255) COLLATE utf8_lithuanian_ci DEFAULT NULL,
  `paveikslelis` varchar(500) COLLATE utf8_lithuanian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `paslaugos`
--

INSERT INTO `paslaugos` (`id`, `pavadinimas`, `tekstas`, `paveikslelis`) VALUES
(1, 'apdaila', 'Taisome apdailos linijų ir panašių įrengimų gedimus, optimizuojame specifiniam darbui.', '../img/toothed-belt-drive.jpg'),
(2, 'robotai', 'Taisome ir optimizuojame pramoninius robotus', 'img/robotas1.jpg'),
(3, 'medis', 'Gaminame vidaus ir lauko baldus iš medžio masyvo.', '../img/medis.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produktai`
--

CREATE TABLE `produktai` (
  `id` int(6) NOT NULL,
  `tipas` varchar(50) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `pavadinimas` varchar(50) CHARACTER SET utf8 COLLATE utf8_romanian_ci NOT NULL,
  `kaina` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produktai`
--

INSERT INTO `produktai` (`id`, `tipas`, `pavadinimas`, `kaina`) VALUES
(1, 'stakles', 'razor', 100),
(2, 'stakles', 'kreizas', 200),
(3, 'stakles', 'gerosstakles', 500),
(4, 'stakles', 'blogosstakles', 50),
(5, 'linija', 'medziopjuklas', 100),
(6, 'linija', 'bite', 190),
(7, 'linija', 'vokietis', 400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paslaugos`
--
ALTER TABLE `paslaugos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produktai`
--
ALTER TABLE `produktai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `paslaugos`
--
ALTER TABLE `paslaugos`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `produktai`
--
ALTER TABLE `produktai`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;--
-- Database: `savaite4`
--
CREATE DATABASE IF NOT EXISTS `savaite4` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `savaite4`;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(6) NOT NULL,
  `title` varchar(160) DEFAULT NULL,
  `content` text,
  `date` date DEFAULT NULL,
  `user_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `date`, `user_id`) VALUES
(1, '3Schools is optimized for learning, testing, and training.', 'Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2017 by Refsnes Data. All Rights Reserved.', '2017-09-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL DEFAULT '0',
  `username` varchar(20) DEFAULT NULL,
  `pass` char(20) DEFAULT NULL,
  `email` char(20) DEFAULT NULL,
  `rights` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `email`, `rights`) VALUES
(1, 'Julius', 'slaptazodis1', 'emailas@mail.com', 'vartotojas'),
(2, 'Jonas', 'slaptazodis2', 'emailas2@gmail.com', 'vartotojas'),
(3, 'Petras', 'slaptazodis3', 'emailas3@gmail.com', 'vartotojas');

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
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `test`;
--
-- Database: `testdb`
--
CREATE DATABASE IF NOT EXISTS `testdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `testdb`;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(6) NOT NULL,
  `title` varchar(160) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_lithuanian_ci,
  `date` date DEFAULT NULL,
  `user_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci DEFAULT NULL,
  `pass` varchar(20) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci DEFAULT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci DEFAULT NULL,
  `rights` varchar(10) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
