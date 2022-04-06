-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 08:58 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_development`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `user_id` varchar(24) NOT NULL,
  `user_password` varchar(24) NOT NULL,
  `user_name` varchar(64) NOT NULL,
  `user_gender` varchar(8) NOT NULL,
  `user_empid` varchar(16) NOT NULL,
  `user_position` varchar(32) NOT NULL,
  `user_mobile` varchar(40) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_address` varchar(256) NOT NULL,
  `user_type` varchar(16) NOT NULL,
  `user_photo` varchar(32) NOT NULL,
  `user_active` varchar(3) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `user_id`, `user_password`, `user_name`, `user_gender`, `user_empid`, `user_position`, `user_mobile`, `user_email`, `user_address`, `user_type`, `user_photo`, `user_active`, `created`) VALUES
(1, '444', '1234', 'Tarequl Islam', '', '444', '', '', '', '', 'Normal', '', 'No', '2021-10-06 06:42:40'),
(2, '236', '12345', 'Golam Faruque', '', '236', '', '', '', '', 'Admin', '', 'Yes', '2021-10-06 06:43:01'),
(3, '555', '12345', 'Sadekul Islam', '', '555', '', '', '', '', 'Normal', '', 'No', '2021-10-06 06:42:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
