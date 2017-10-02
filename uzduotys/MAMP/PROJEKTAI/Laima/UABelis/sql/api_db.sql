-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 02, 2017 at 10:20 AM
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
-- Database: `api_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(6) NOT NULL,
  `title` varchar(160) COLLATE utf8_lithuanian_ci DEFAULT NULL,
  `content` text COLLATE utf8_lithuanian_ci,
  `page_id` int(6) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `page_id`, `date`) VALUES
(1, 'Kai pradedi gyvenimą savarankiškai', 'Cat ipsum dolor sit amet, claw drapes. Hunt anything that moves mrow pelt around the house and up and down stairs chasing phantoms, always hungry. Destroy couch hide from vacuum cleaner eat the fat cats food so meowing non stop for food, but sniff sniff. Lounge in doorway curl up and sleep on the freshly laundered towels plan steps for world domination pet right here, no not there, here, no fool, right here that other cat smells funny you should really give me all the treats because i smell the best and omg you finally got the right spot and i love you right now hunt by meowing loudly at 5am next to human slave food dispenser i like big cats and i can not lie.', 1, '2017-09-30'),
(2, 'Mūsų idėjos', 'Cat ipsum dolor sit amet, claw drapes. Hunt anything that moves mrow pelt around the house and up and down stairs chasing phantoms, always hungry. Destroy couch hide from vacuum cleaner eat the fat cats food so meowing non stop for food, but sniff sniff. Lounge in doorway curl up and sleep on the freshly laundered towels plan steps for world domination pet right here, no not there, here, no fool, right here that other cat smells funny you should really give me all the treats because i smell the best and omg you finally got the right spot and i love you right now hunt by meowing loudly at 5am next to human slave food dispenser i like big cats and i can not lie. Damn that dog leave hair everywhere scratch at the door then walk away when in doubt, wash, massacre a bird in the living room and then look like the cutest and most innocent animal on the planet.', 1, '2017-09-30'),
(3, 'Mūsų pagalba, jūsų sprendimai', 'Jump five feet high and sideways when a shadow moves scratch the furniture playing with balls of wool and sleep in the bathroom sink hunt by meowing loudly at 5am next to human slave food dispenser step on your keyboard while you\'re gaming and then turn in a circle eat plants, meow, and throw up because i ate plants. Proudly present butt to human crash against wall but walk away like nothing happened claw at curtains stretch and yawn nibble on tuna ignore human bite human hand. Hide when guests come over plays league of legends and present belly, scratch hand when stroked swat turds around the house pose purrfectly to show my beauty. Throw down all the stuff in the kitchen demand to be let outside at once, and expect owner to wait for me as i think about it mark territory.', 1, '2017-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

CREATE TABLE `myguests` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `message` text,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myguests`
--

INSERT INTO `myguests` (`id`, `name`, `email`, `phone`, `message`, `reg_date`) VALUES
(1, 'Pandora', 'prochelle0@bandcamp.com', '1386994928', 'Donec posuere metus vitae ipsum. Aliquam non mauris. Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet.', '2017-09-06 03:38:36'),
(2, 'Jewel', 'jsturdy1@un.org', '4361225133', 'Aenean sit amet justo. Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl. Aenean lectus.', '2017-04-07 21:43:00'),
(3, 'Daphene', 'dmcclune2@google.pl', '9251255772', 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante.', '2017-08-30 03:19:34'),
(4, 'Agnes', 'aserjent3@berkeley.edu', '6921187611', 'Integer non velit. Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque. Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus. In sagittis dui vel nisl. Duis ac nibh.', '2017-07-20 16:25:45'),
(5, 'Dionisio', 'dheikkinen4@ox.ac.uk', '8902893598', 'Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh. Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros. Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue.', '2017-06-30 19:45:40'),
(6, 'Tadas', 'laimucka@gmail.com', '5555555', 'kkkkdk', '2017-09-24 17:11:11'),
(108, 'Dalia', 'jonas@gmail.com', '888555', '', '2017-10-02 09:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(6) NOT NULL,
  `pagename` varchar(50) COLLATE utf8_lithuanian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `pagename`) VALUES
(1, 'index'),
(2, 'about'),
(3, 'gallery'),
(4, 'services'),
(5, 'contact');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myguests`
--
ALTER TABLE `myguests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `myguests`
--
ALTER TABLE `myguests`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
