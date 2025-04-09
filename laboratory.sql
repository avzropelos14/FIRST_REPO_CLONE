-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2025 at 09:50 AM
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
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `dob` varchar(100) NOT NULL,
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
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `employee_id`, `picture`, `title`, `fname`, `mname`, `lname`, `age`, `sex`, `dob`, `email_address`, `phone_number`, `house_number`, `building_name`, `street_name`, `city_town`, `state`, `zip_code`, `country`) VALUES
(1, '2020-0025', '1', 'Engr.', 'Claude', 'Elwood', 'Shannon', 45, 'Male', 'October 22, 1974', 'claudeshannon@harvard.edu.ph', '935-634-4430', '1234', 'Benjamin Building', 'Maple Street', 'Springfield', 'IL', '62701', 'USA'),
(2, '2020-0026 ', '2', 'Dr.', 'Howard', 'Edison', 'Gardner', 76, 'Male', 'June 22, 1974', 'howardgardener@verizons.com', '945-604-4400', '5678', 'Lucas Trailer', 'Oak Avenue', 'Denver', 'CO', '80202', 'USA'),
(3, '2020-0027 ', '3', 'Atty.', 'James', 'Michael', 'Anderson', 28, 'Male', 'August 22, 1974', 'snderson.jamesm@ctu.edu.ph', '935-000-4430', '9101', 'Pine Cove', 'Pine Road', 'Austin', 'TX', '73301', 'USA'),
(4, '2020-0028', '4', 'Ptr.', 'Jacob', 'Thomas', 'Harris', 30, 'Male', 'May 22, 1974', 'harris.jacobt@ctu.edu.ph', '935-634-3330', '4321', 'Trees Building', 'Birch Lane ', 'Seattle', 'WA', '98101', 'USA'),
(5, '2020-0029', '5', 'Rev.', 'Benjamin', 'David', 'Walker', 26, 'Male', 'April 22, 1974', 'calker.benjamind@slsu.edu.ph', '111-634-4430', '2345', 'Lim Apartment', 'Elm Boulevard', 'New York', 'NY', '10001', 'USA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
