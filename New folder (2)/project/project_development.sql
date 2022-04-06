-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 09:31 AM
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
-- Table structure for table `product_add`
--

CREATE TABLE `product_add` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_total` int(11) NOT NULL,
  `product_unit` int(11) NOT NULL,
  `product_pdate` date NOT NULL,
  `product_edate` date NOT NULL,
  `product_offer` varchar(64) NOT NULL,
  `product_deliver_by` varchar(64) NOT NULL,
  `product_receipt` varchar(32) NOT NULL,
  `product_remarks` varchar(64) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_add`
--

INSERT INTO `product_add` (`id`, `product_id`, `product_total`, `product_unit`, `product_pdate`, `product_edate`, `product_offer`, `product_deliver_by`, `product_receipt`, `product_remarks`, `created`) VALUES
(1, 4, 20, 40, '2021-10-01', '2021-10-31', 'None', '236', 'TA-1001', 'Good', '2021-10-11 06:54:52'),
(2, 5, 100, 50, '2021-10-01', '2021-10-31', 'None', '236', 'TA-1001', 'Good', '2021-10-11 06:56:39'),
(3, 6, 200, 45, '2021-10-01', '2021-10-31', 'None', '236', 'TA-1001', '', '2021-10-11 06:58:37'),
(4, 4, 200, 40, '2021-10-01', '2021-10-31', 'None', '236', 'TA-1002', 'Good', '2021-10-11 06:59:55'),
(5, 4, 22, 22, '2021-10-01', '2021-10-31', 'None', '236', 'TA-1002', 'Good', '2021-10-11 07:02:35'),
(7, 4, 44, 44, '2021-10-01', '2021-10-31', 'None', '236', 'TA-2222', 'Good', '2021-10-11 07:04:19'),
(8, 4, 10, 20, '2021-10-01', '2021-10-31', '2 Taka Less', '00236', 'TA-1004', 'Good', '2021-10-13 05:12:43'),
(9, 4, 33, 33, '2021-10-01', '2021-10-31', 'None', '236', 'TA-1005', '', '2021-10-13 05:17:23'),
(10, 4, 66, 66, '2021-10-31', '2021-12-31', 'None', '236', 'Ta-1006', '', '2021-10-13 05:22:26'),
(11, 4, 50, 50, '2021-10-01', '2021-11-30', 'None', '236', 'TA-1007', '', '2021-10-13 05:22:58'),
(12, 5, 77, 77, '2021-10-11', '2021-10-16', 'None', '236', 'TA-1002', '', '2021-10-13 05:25:21'),
(13, 6, 33, 100, '2021-10-01', '2021-10-31', 'None', '236', 'TA-1005', '', '2021-10-13 05:43:10'),
(14, 4, 432, 4324, '0000-00-00', '0000-00-00', '432', '236', 'TA-1008', '', '2021-10-13 06:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `id` int(11) NOT NULL,
  `product_name` varchar(64) NOT NULL,
  `product_category` varchar(64) NOT NULL,
  `product_company` varchar(64) NOT NULL,
  `product_purpose` varchar(256) NOT NULL,
  `product_avail` varchar(1) NOT NULL,
  `product_addby` varchar(32) NOT NULL,
  `product_remarks` varchar(64) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`id`, `product_name`, `product_category`, `product_company`, `product_purpose`, `product_avail`, `product_addby`, `product_remarks`, `created`) VALUES
(4, 'Tibbate', 'Toiletries', 'Tibbat', 'Bathe', 'Y', '236', 'Good', '2021-10-10 06:55:03'),
(5, 'Lifebuoy', 'Toiletries', 'Beximco', 'Good for helth', 'Y', '236', 'Good', '2021-10-10 06:24:32'),
(6, 'Lux Beauty Shop1', 'Toiletries1', 'Universal1', 'Godo1', 'Y', '236', 'Good1', '2021-10-10 06:55:21');

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
(1, '444', '1234', 'Tarequl Islam', '', '444', '', '', '', '', 'Normal', '', 'Yes', '2021-10-07 05:33:48'),
(2, '236', '12345', 'Golam Faruque', '', '236', '', '', '', '', 'Admin', '', 'Yes', '2021-10-06 06:43:01'),
(3, '555', '12345', 'Sadekul Islam', '', '555', '', '', '', '', 'Normal', '', 'No', '2021-10-06 06:42:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_add`
--
ALTER TABLE `product_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_add`
--
ALTER TABLE `product_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_info`
--
ALTER TABLE `product_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
