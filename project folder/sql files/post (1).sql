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
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `post_photo` varchar(100) NOT NULL,
  `user_id` int(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `description`, `post_photo`, `user_id`, `created_date`, `modified_date`) VALUES
(41, '16th', 'user photo test', '', 64, '2021-08-02 19:44:27', '2021-08-02 19:44:27'),
(42, '25th post', 'post list', '', 94, '2021-08-03 02:03:24', '2021-08-03 02:03:24'),
(43, '17th post', 'user lost', '', 119, '2021-08-03 23:55:16', '2021-08-03 23:55:16'),
(44, '18th', 'photo post', 'ptu6.jpg', 119, '2021-08-03 23:56:14', '2021-08-03 23:56:14'),
(45, '19th post', 'test log in', 'ptu2.jpg', 63, '2021-08-04 00:08:36', '2021-08-04 00:08:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
