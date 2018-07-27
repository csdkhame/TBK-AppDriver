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
-- Table structure for table `income_other_type`
--

CREATE TABLE `income_other_type` (
  `id` int(11) NOT NULL,
  `topic` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `driver_percent` int(10) NOT NULL DEFAULT '50',
  `company_percent` int(10) NOT NULL DEFAULT '50',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `posted` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `post_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_update` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `text_box` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `income_other_type`
--

INSERT INTO `income_other_type` (`id`, `topic`, `driver_percent`, `company_percent`, `status`, `posted`, `post_date`, `last_update`, `text_box`) VALUES
(1, 'ร้านอาหาร', 50, 50, 1, '', '1532594092', '1532594092', 0),
(2, 'ช้อปปิ้ง', 50, 50, 1, '', '1532594098', '1532594098', 0),
(3, 'ขี่ช้าง', 50, 50, 1, '', '1532594104', '1532594104', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `income_other_type`
--
ALTER TABLE `income_other_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `income_other_type`
--
ALTER TABLE `income_other_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
