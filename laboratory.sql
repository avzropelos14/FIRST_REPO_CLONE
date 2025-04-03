-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2025 at 10:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laboratory`
--

-- --------------------------------------------------------

--
-- Table structure for table `primaryinformation`
--

CREATE TABLE `primaryinformation` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `dob` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `secondaryinformation`
--

CREATE TABLE `secondaryinformation` (
  `id` int(11) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `house_number` varchar(50) NOT NULL,
  `building_name` varchar(100) NOT NULL,
  `street_name` varchar(100) NOT NULL,
  `city_town` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `primaryinformation`
--
ALTER TABLE `primaryinformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secondaryinformation`
--
ALTER TABLE `secondaryinformation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `primaryinformation`
--
ALTER TABLE `primaryinformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `secondaryinformation`
--
ALTER TABLE `secondaryinformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
