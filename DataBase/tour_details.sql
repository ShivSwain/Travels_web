-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 11:05 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aaotravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tour_details`
--

CREATE TABLE `tour_details` (
  `booking_id` int(5) NOT NULL,
  `booking_from` date NOT NULL,
  `package_id` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` varchar(10) NOT NULL,
  `Alter_number` varchar(10) DEFAULT NULL,
  `city` varchar(30) NOT NULL,
  `package_type` varchar(20) NOT NULL,
  `hotel_id` int(5) NOT NULL,
  `hotel_rate` int(5) NOT NULL,
  `rooms` int(10) NOT NULL,
  `beds` int(5) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tour_details`
--

INSERT INTO `tour_details` (`booking_id`, `booking_from`, `package_id`, `Name`, `email`, `number`, `Alter_number`, `city`, `package_type`, `hotel_id`, `hotel_rate`, `rooms`, `beds`, `amount`) VALUES
(1, '2020-06-06', 301, 'Rahul', 'rahul1@gmail.com', '7896541230', '', 'Ajmer', 'Silver', 201, 3, 2, 1, 8800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tour_details`
--
ALTER TABLE `tour_details`
  ADD PRIMARY KEY (`booking_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tour_details`
--
ALTER TABLE `tour_details`
  MODIFY `booking_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
