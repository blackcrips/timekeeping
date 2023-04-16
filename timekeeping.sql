-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 02:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `tkeep_history`
--

CREATE TABLE `tkeep_history` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `action_data` varchar(100) NOT NULL,
  `dated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tkeep_history`
--

INSERT INTO `tkeep_history` (`id`, `email`, `action_data`, `dated_at`) VALUES
(2, 'admin@email.com', 'break_out', '2023-04-12 18:25:36'),
(3, 'admin@email.com', 'time_out', '2023-04-12 18:26:50'),
(4, 'admin@email.com', 'break_in', '2023-04-12 18:29:34'),
(5, 'admin@email.com', 'break_in', '2023-04-12 18:29:55'),
(6, 'admin@email.com', 'break_in', '2023-04-12 18:30:04'),
(7, 'admin@email.com', 'break_in', '2023-04-12 18:30:27'),
(8, 'admin@email.com', 'break_in', '2023-04-12 18:30:51'),
(9, 'admin@email.com', 'break_out', '2023-04-12 18:32:17'),
(10, 'admin@email.com', 'break_in', '2023-04-12 18:32:30'),
(11, 'admin@email.com', 'break_in', '2023-04-12 18:32:46'),
(12, 'admin@email.com', 'break_out', '2023-04-12 18:33:20'),
(13, 'admin@email.com', 'break_in', '2023-04-12 18:33:24'),
(14, 'admin@email.com', 'break_out', '2023-04-12 18:34:29'),
(15, 'admin@email.com', 'time_out', '2023-04-12 18:34:35'),
(16, 'admin@email.com', 'break_out', '2023-04-12 18:35:35'),
(17, 'admin@email.com', 'time_in', '2023-04-12 18:35:38'),
(18, 'admin@email.com', 'break_out', '2023-04-14 21:33:27'),
(19, 'admin@email.com', 'time_out', '2023-04-14 22:26:19'),
(20, 'admin@email.com', 'break_in', '2023-04-14 22:32:44'),
(21, 'admin@email.com', 'time_in', '2023-04-14 22:38:11'),
(22, 'admin@email.com', 'break_out', '2023-04-14 23:20:27'),
(23, 'admin@email.com', 'break_in', '2023-04-14 23:21:28'),
(24, 'admin@email.com', 'time_out', '2023-04-14 23:21:36'),
(25, 'admin@email.com', 'time_in', '2023-04-14 23:21:39'),
(26, 'admin@email.com', 'break_out', '2023-04-14 23:21:43'),
(27, 'admin@email.com', 'break_in', '2023-04-14 23:22:54'),
(28, 'admin@email.com', 'time_out', '2023-04-14 23:22:57'),
(29, 'admin@email.com', 'time_in', '2023-04-15 09:17:28'),
(30, 'admin@email.com', 'time_in', '2023-04-15 09:18:13'),
(31, 'admin@email.com', 'time_out', '2023-04-15 09:34:55'),
(32, 'admin@email.com', 'time_in', '2023-04-15 09:35:03'),
(33, 'admin@email.com', 'time_in', '2023-04-15 10:09:20');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(26, '', 'Desktop', '::1', 'private', '', '2022-10-08 15:36:07'),
(27, '', 'Desktop', '::1', 'private', '', '2023-04-12 17:12:27'),
(28, '', 'Desktop', '::1', 'private', '', '2023-04-12 17:17:32'),
(29, '', 'Desktop', '::1', 'private', '', '2023-04-14 21:01:47'),
(30, '', 'Desktop', '::1', 'private', '', '2023-04-14 21:33:22'),
(31, '', 'Desktop', '::1', 'private', '', '2023-04-14 21:41:33'),
(32, '', 'Desktop', '::1', 'private', '', '2023-04-15 09:17:24'),
(33, '', 'Desktop', '::1', 'private', '', '2023-04-16 07:25:22');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `firstname`, `middlename`, `lastname`, `emp_no`, `email`, `department`, `emp_status`, `added_at`) VALUES
(1, 'admin', 'admin', 'admin', 'company01', 'admin@email.com', 'Accounts', 'Regular', '2022-09-29 09:12:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tkeep_history`
--
ALTER TABLE `tkeep_history`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `tkeep_history`
--
ALTER TABLE `tkeep_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_action`
--
ALTER TABLE `user_action`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
