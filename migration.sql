-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2024 at 05:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jamestickett_netmatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `company` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `message` text NOT NULL,
  `marketing` tinyint(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `company`, `email`, `phone`, `message`, `marketing`, `date`) VALUES
(1, 'Firstname Lastname', '', 'test@test.com', '05555555555', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0, '2024-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_color` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `author_name` varchar(100) DEFAULT NULL,
  `author_image` varchar(100) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category_name`, `category_color`, `title`, `description`, `image`, `author_name`, `author_image`, `date`) VALUES
(1, 'careers', 'business', 'Test News Title', 'Salary Range £26k-£36k per annum + Bonus Hours 40 hours per week, Monday – Friday  Location Wymondha...', 'what-is-digital-dPNq.webp', 'Bethany Shakespeare', 'bethany-shakespeare-F6Iu.webp', '2024-11-20'),
(2, 'careers', 'webdesign', 'Web Project Manager', 'Salary Range £26,000 - £30,000 (DOE) + Bonus Hours 40 hours per week, Mon - Fri Location Wymondham,...', '1st-line-technician-PiSq.webp', 'Bethany Shakespeare', 'bethany-shakespeare-F6Iu.webp', '2024-11-18'),
(3, 'news', 'business', 'Celebrating Our Team', 'Salary Range £26k-£36k per annum + Bonus Hours 40 hours per week, Monday – Friday  Location Wymondha...', 'march-notables-2024-37Z5.png', NULL, NULL, '2024-11-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
