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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `photo` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `password`, `gender`, `photo`) VALUES
(63, 'Su Su', '19676', '123', 'male', 'empty.png'),
(64, 'Mg Mg', '09772770059', '123', 'male', 'empty.png'),
(119, 'ky', '09688510241', '123', 'male', 'empty.png'),
(120, 'dsss', '09688510241', '123', 'male', 'empty.png'),
(121, '67', '09688510241', '123', 'male', 'empty.png'),
(122, 'fhf', '09688510241', '123', 'male', 'empty.png'),
(123, 'asd', '09688510241', '123', 'male', 'empty.png'),
(124, 'wer', '09688510241', '123', 'male', 'empty.png'),
(125, 'vfg', '09688510241', '123', 'male', 'empty.png'),
(126, 'adsg', '09688510241', '123', 'male', 'empty.png'),
(127, 'Thazin', '09688510241', '123', 'female', 'Cho Thet Picture.jpg'),
(128, 'Pyan', '09772770059', '123', 'male', '41.png'),
(129, 'Cho Thet', '09688510241', '123', 'male', 'IMG_20200204_115742.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
