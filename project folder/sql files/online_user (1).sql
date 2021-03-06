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
-- Table structure for table `online_user`
--

CREATE TABLE `online_user` (
  `id` int(15) NOT NULL,
  `user_id` int(100) NOT NULL,
  `active_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_user`
--

INSERT INTO `online_user` (`id`, `user_id`, `active_date`, `status`) VALUES
(2, 9, '2020-11-28 09:29:48', 1),
(4, 2, '2020-11-28 12:08:12', 2),
(8, 2, '2020-11-30 03:46:58', 2),
(10, 2, '2020-11-30 05:21:12', 1),
(11, 2, '2020-11-30 06:56:40', 2),
(12, 2, '2020-11-30 13:08:50', 0),
(13, 2, '2020-11-30 13:15:42', 0),
(14, 2, '2020-12-01 09:48:33', 0),
(15, 2, '2020-12-01 11:27:49', 0),
(16, 2, '2020-12-01 11:33:56', 0),
(17, 2, '2020-12-01 12:04:40', 0),
(18, 2, '2020-12-02 02:08:18', 0),
(19, 2, '2020-12-02 04:29:29', 0),
(20, 9, '2020-12-02 04:30:23', 2),
(21, 9, '2020-12-02 07:56:24', 1),
(22, 9, '2020-12-02 07:58:15', 2),
(23, 1, '2020-12-02 09:20:53', 1),
(24, 1, '2020-12-02 09:32:30', 2),
(25, 1, '2020-12-02 11:07:56', 1),
(26, 1, '2020-12-02 11:23:33', 2),
(33, 2, '2020-12-03 03:29:56', 0),
(34, 2, '2020-12-03 03:31:51', 0),
(35, 5, '2020-12-03 03:42:01', 1),
(37, 10, '2020-12-06 02:10:40', 1),
(38, 10, '2020-12-06 02:45:36', 2),
(39, 10, '2020-12-06 03:49:37', 1),
(40, 12, '2020-12-06 04:01:47', 1),
(41, 13, '2020-12-06 04:29:24', 1),
(42, 10, '2020-12-06 05:20:12', 2),
(44, 9, '2020-12-06 05:25:07', 0),
(45, 10, '2020-12-06 05:26:50', 0),
(46, 10, '2020-12-06 08:04:41', 0),
(47, 10, '2020-12-06 09:11:08', 0),
(48, 10, '2020-12-07 02:19:15', 0),
(49, 10, '2020-12-07 04:42:55', 0),
(50, 10, '2020-12-07 05:28:52', 0),
(51, 10, '2020-12-07 07:16:00', 0),
(52, 10, '2020-12-07 10:49:59', 0),
(53, 10, '2020-12-08 03:20:48', 0),
(54, 3, '2020-12-08 03:55:57', 1),
(55, 3, '2020-12-08 04:00:17', 2),
(56, 10, '2021-02-16 13:20:59', 0),
(57, 1, '2021-02-20 08:00:04', 0),
(58, 1, '2021-02-21 02:18:18', 0),
(59, 1, '2021-02-26 10:53:13', 0),
(60, 1, '2021-02-27 08:19:42', 0),
(61, 13, '2021-02-27 08:45:51', 2),
(62, 13, '2021-02-27 10:07:13', 1),
(63, 17, '2021-06-14 06:35:07', 1),
(64, 18, '2021-06-14 07:10:14', 1),
(65, 14, '2021-06-17 05:19:25', 1),
(66, 29, '2021-06-17 08:02:22', 1),
(67, 14, '2021-06-17 10:45:02', 2),
(68, 37, '2021-06-21 09:37:33', 1),
(69, 14, '2021-06-21 11:34:10', 1),
(70, 14, '2021-06-21 11:40:08', 2),
(71, 66, '2021-06-22 01:36:03', 1),
(72, 2, '2021-06-22 01:39:17', 0),
(73, 63, '2021-06-22 15:03:56', 1),
(74, 94, '2021-08-02 06:59:54', 1),
(75, 94, '2021-08-02 07:05:39', 2),
(76, 94, '2021-08-02 07:09:56', 1),
(77, 94, '2021-08-02 13:03:52', 2),
(78, 94, '2021-08-02 13:08:27', 0),
(79, 94, '2021-08-02 13:59:49', 0),
(80, 94, '2021-08-02 15:33:55', 0),
(81, 64, '2021-08-02 15:36:31', 1),
(82, 95, '2021-08-02 15:42:25', 1),
(83, 95, '2021-08-02 16:03:30', 2),
(84, 96, '2021-08-03 02:10:50', 1),
(85, 96, '2021-08-03 02:12:33', 2),
(86, 96, '2021-08-03 02:13:03', 1),
(87, 64, '2021-08-03 02:23:17', 2),
(88, 94, '2021-08-03 02:58:03', 0),
(89, 94, '2021-08-03 05:15:26', 0),
(90, 94, '2021-08-03 05:20:46', 0),
(91, 96, '2021-08-03 05:21:36', 2),
(92, 64, '2021-08-03 06:33:05', 1),
(93, 94, '2021-08-03 06:44:45', 0),
(94, 108, '2021-08-04 03:06:23', 1),
(95, 94, '2021-08-04 04:58:03', 0),
(96, 94, '2021-08-04 06:19:02', 0),
(97, 94, '2021-08-04 06:38:40', 0),
(98, 119, '2021-08-04 06:53:07', 1),
(99, 119, '2021-08-04 06:54:05', 2),
(100, 63, '2021-08-04 07:07:42', 2),
(101, 63, '2021-08-04 08:26:11', 1),
(102, 63, '2021-08-04 10:08:01', 2),
(103, 63, '2021-08-04 10:09:18', 0),
(104, 63, '2021-08-04 10:37:16', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `online_user`
--
ALTER TABLE `online_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `online_user`
--
ALTER TABLE `online_user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
