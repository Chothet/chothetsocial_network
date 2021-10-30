-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 12:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `like_data`
--

CREATE TABLE `like_data` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `like_data`
--

INSERT INTO `like_data` (`id`, `post_id`, `user_id`) VALUES
(21, 4, 2),
(24, 5, 9),
(28, 2, 9),
(29, 4, 9),
(30, 4, 10),
(31, 5, 10),
(32, 13, 9),
(33, 13, 7),
(34, 14, 9),
(35, 15, 9),
(37, 17, 9),
(38, 16, 9),
(39, 18, 9),
(40, 20, 9),
(41, 21, 9),
(42, 21, 2),
(43, 20, 2),
(44, 19, 2),
(45, 18, 2),
(46, 22, 2),
(47, 16, 10),
(48, 2, 10),
(51, 25, 1),
(52, 20, 1),
(54, 28, 14),
(55, 31, 29),
(56, 26, 0),
(58, 38, 94),
(59, 38, 64),
(60, 37, 64),
(61, 39, 95),
(62, 40, 96),
(64, 40, 64),
(67, 41, 119),
(68, 43, 119),
(69, 43, 63);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `like_data`
--
ALTER TABLE `like_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `like_data`
--
ALTER TABLE `like_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
