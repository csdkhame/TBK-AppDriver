-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 27, 2018 at 03:15 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `income_other_list`
--

CREATE TABLE `income_other_list` (
  `id` int(11) NOT NULL,
  `transfer_id` int(11) NOT NULL COMMENT 'id of transfer_report_all',
  `type` int(10) NOT NULL,
  `driver_balance` decimal(10,0) NOT NULL DEFAULT '0',
  `balance` decimal(10,0) NOT NULL DEFAULT '0',
  `company_balance` decimal(10,0) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `posted` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `post_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_update` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `income_other_list`
--

INSERT INTO `income_other_list` (`id`, `transfer_id`, `type`, `driver_balance`, `balance`, `company_balance`, `status`, `posted`, `post_date`, `last_update`) VALUES
(1, 264228, 2, '60', '120', '60', 1, 'driver_dv000037', '1532661297', '1532661297');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `income_other_list`
--
ALTER TABLE `income_other_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `income_other_list`
--
ALTER TABLE `income_other_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
