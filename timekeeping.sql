-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2022 at 06:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timekeeping`
--

-- --------------------------------------------------------

--
-- Table structure for table `timekeeping_action`
--

CREATE TABLE `timekeeping_action` (
  `int` int(10) NOT NULL,
  `email` varchar(250) NOT NULL,
  `time_in` varchar(250) NOT NULL,
  `first_break_in` varchar(250) NOT NULL,
  `first_end_break` varchar(250) NOT NULL,
  `second_break_in` varchar(250) NOT NULL,
  `second_end_break` varchar(250) NOT NULL,
  `time_out` varchar(250) NOT NULL,
  `date_action` date NOT NULL DEFAULT current_timestamp(),
  `added_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timekeeping_action`
--

INSERT INTO `timekeeping_action` (`int`, `email`, `time_in`, `first_break_in`, `first_end_break`, `second_break_in`, `second_end_break`, `time_out`, `date_action`, `added_at`) VALUES
(1, 'admin@email.com', 'active', '', '', '3', '', '', '2022-10-08', '2022-10-07 00:00:00'),
(2, 'admin@email.com', '', '', '', '', '', '', '2022-10-08', '2022-10-08 00:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `id` int(10) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `privilege` varchar(250) NOT NULL,
  `added_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`id`, `username`, `password`, `privilege`, `added_at`) VALUES
(1, 'admin@email.com', '$2y$10$zQT3x0EK8y2g/9hpr4CdCOSxAODFkaoM.41YnS1xBxLuHXbaBc1LS', 'admin', '2022-09-27 08:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `user_action`
--

CREATE TABLE `user_action` (
  `id` int(10) NOT NULL,
  `username` varchar(250) NOT NULL,
  `device` varchar(250) NOT NULL,
  `ip_address` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `action` varchar(250) NOT NULL,
  `action_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_action`
--

INSERT INTO `user_action` (`id`, `username`, `device`, `ip_address`, `location`, `action`, `action_date`) VALUES
(1, '', '::1', 'Desktop', '', '', '2022-09-28 09:22:26'),
(2, '', '::1', 'Desktop', '', '', '2022-09-28 09:42:46'),
(3, '', 'Desktop', '::1', 'Manila National Capital Region Asia Philippines 1219', '', '2022-09-28 23:15:21'),
(4, '', 'Desktop', '::1', 'private', '', '2022-09-28 23:22:08'),
(5, '', 'Desktop', '::1', 'private', '', '2022-09-28 23:40:29'),
(6, '', 'Desktop', '::1', 'private', '', '2022-09-28 23:42:49'),
(7, '', 'Desktop', '::1', 'private', '', '2022-09-28 23:43:23'),
(8, '', 'Desktop', '::1', 'private', '', '2022-09-28 23:44:21'),
(9, '', 'Desktop', '::1', 'private', '', '2022-09-28 23:45:03'),
(10, '', 'Desktop', '::1', 'private', '', '2022-09-29 00:19:05'),
(11, '', 'Desktop', '::1', 'private', '', '2022-09-29 00:20:53'),
(12, '', 'Desktop', '::1', 'private', '', '2022-09-29 00:35:46'),
(13, '', 'Desktop', '::1', 'private', '', '2022-09-29 00:36:10'),
(14, '', 'Desktop', '::1', 'private', '', '2022-09-29 00:37:19'),
(15, '', 'Desktop', '::1', 'private', '', '2022-09-29 00:38:24'),
(16, '', 'Mobile', '192.168.100.4', 'private', '', '2022-09-29 08:50:05'),
(17, '', 'Desktop', '::1', 'private', '', '2022-09-29 09:30:16'),
(18, '', 'Desktop', '::1', 'private', '', '2022-09-29 22:55:06'),
(19, '', 'Desktop', '::1', 'private', '', '2022-09-29 22:56:01'),
(20, '', 'Desktop', '::1', 'private', '', '2022-09-30 22:12:46'),
(21, '', 'Desktop', '::1', 'private', '', '2022-10-05 22:49:32'),
(22, '', 'Desktop', '::1', 'private', '', '2022-10-06 23:00:05'),
(23, '', 'Desktop', '::1', 'private', '', '2022-10-06 23:05:58'),
(24, '', 'Desktop', '::1', 'private', '', '2022-10-07 22:13:51'),
(25, '', 'Desktop', '::1', 'private', '', '2022-10-08 15:34:29'),
(26, '', 'Desktop', '::1', 'private', '', '2022-10-08 15:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(10) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `emp_no` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `emp_status` varchar(250) NOT NULL,
  `added_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `firstname`, `middlename`, `lastname`, `emp_no`, `email`, `department`, `emp_status`, `added_at`) VALUES
(1, 'admin', 'admin', 'admin', 'company01', 'admin@email.com', 'Accounts', 'Regular', '2022-09-29 09:12:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `timekeeping_action`
--
ALTER TABLE `timekeeping_action`
  ADD PRIMARY KEY (`int`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_action`
--
ALTER TABLE `user_action`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `timekeeping_action`
--
ALTER TABLE `timekeeping_action`
  MODIFY `int` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_action`
--
ALTER TABLE `user_action`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
