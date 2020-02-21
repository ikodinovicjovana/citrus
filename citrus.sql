-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 21, 2020 at 10:09 AM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.26-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citrus`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `visible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `text`, `visible`) VALUES
(1, 'Marie', 'marie55@gmail.com', 'When life gives you lemons, make lemonade. It is a pleasure to work with you', 1),
(2, 'Peter', 'peterpp@gmail.com', 'My truly recommendation for all products, but my favorite fruit is Tangelo :)', 1),
(3, 'Thomas', 'tt895@gmail.com', 'This is an excellent choice of citrus fruit', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `description`, `image`) VALUES
(1, 'Buddha\'s hand', 'Buddha\'s hand can be found in North East India as well as China.', 'buddha1.jpg'),
(2, 'Amanatsu', 'Yellowish-orange in colour, about the size of grapefruit and oblate in shape. The fruit contains 12 segments and about 30 seeds.', 'amanatsu.jpeg'),
(3, 'Papeda', 'Papedas are a group of less palatable, slow-growing, hardy citrus native to Asia. he papeda group includes some of the most tropical, and also some of the most frost-tolerant citrus plants.', 'papeda.png'),
(4, 'Kumquat', 'Kumquat closely resembles the orange in color and shape but is much smaller, being approximately the size of a large olive. Kumquat is a fairly cold-hardy citrus.', 'kumquat.jpg'),
(5, 'Grapefruit', 'Grapefruit is a citrus hybrid originating in Barbados as an accidental cross between two introduced species - sweet orange and pomelo both of which were introduced from Asia in the seventeenth century.', 'grapefruit.jpg'),
(6, 'Lemon', 'The tree\'s ellipsoidal yellow fruit is used for culinary and non-culinary purposes throughout the world, primarily for its juice, which has both culinary and cleaning uses.', 'lemon.jpg'),
(7, 'Mandarin orange', 'Also known as the mandarin or mandarine, is a small citrus tree with fruit resembling other oranges, usually eaten plain or in fruit salads.', 'mandarin.jpg'),
(8, 'Orange', 'The orange is the fruit of the citrus species Citrus sinensis in the family Rutaceae, native to China. It\'s a hybrid between pomelo and mandarin.', 'orange.jpg'),
(9, 'Tangelo', 'Tangelo is a citrus fruit hybrid of a Citrus reticulata variety such as mandarin orange or a tangerine, and Citrus maxima variety, such as a pomelo or grapefruit. The name is a portmanteau of \'tangerine\' and \'pomelo\'.', 'tangelo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
