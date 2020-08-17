-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 11:04 AM
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
-- Table structure for table `package_details`
--

CREATE TABLE `package_details` (
  `Id` int(5) NOT NULL,
  `package_id` varchar(100) NOT NULL,
  `source` int(5) NOT NULL,
  `destination` int(5) NOT NULL,
  `hotel_type` int(5) NOT NULL,
  `travel_type` varchar(15) NOT NULL,
  `package_type` varchar(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package_details`
--

INSERT INTO `package_details` (`Id`, `package_id`, `source`, `destination`, `hotel_type`, `travel_type`, `package_type`, `amount`) VALUES
(2001, '301', 2001, 2002, 3, 'Non-AC', 'Silver', 4000),
(2002, '301', 2001, 2002, 4, 'AC', 'Gold', 6000),
(2003, '301', 2001, 2002, 5, 'Luxury', 'Platinum', 8000),
(2004, '302', 2007, 2011, 3, 'Non-AC', 'Silver', 4000),
(2005, '302', 2007, 2011, 4, 'AC', 'Gold', 6000),
(2006, '302', 2007, 2011, 5, 'Luxury', 'Platinum', 8000),
(2007, '303', 2004, 2005, 3, 'Non-AC', 'Silver', 4000),
(2008, '303', 2004, 2005, 4, 'AC', 'Gold', 6000),
(2009, '303', 2004, 2005, 5, 'Luxury', 'Platinum', 8000),
(2010, '304', 2001, 2003, 3, 'Non-AC', 'Silver', 4000),
(2011, '304', 2001, 2003, 4, 'AC', 'Gold', 6000),
(2012, '304', 2001, 2003, 5, 'Luxury', 'Platinum', 8000),
(2013, '305', 2001, 2006, 3, 'Non-AC', 'Silver', 4000),
(2014, '305', 2001, 2006, 4, 'AC', 'Gold', 6000),
(2015, '305', 2001, 2006, 5, 'Luxury', 'Platinum', 8000),
(2016, '306', 2001, 2007, 3, 'Non-AC', 'Silver', 4000),
(2017, '306', 2001, 2007, 4, 'AC', 'Gold', 6000),
(2018, '306', 2001, 2007, 5, 'Luxury', 'Platinum', 8000),
(2019, '307', 2007, 2008, 3, 'Non-AC', 'Silver', 4000),
(2020, '307', 2007, 2008, 4, 'AC', 'Gold', 6000),
(2021, '307', 2007, 2008, 5, 'Luxury', 'Platinum', 8000),
(2022, '308', 2006, 2009, 3, 'Non-AC', 'Silver', 4000),
(2023, '309', 2006, 2009, 4, 'AC', 'Gold', 6000),
(2024, '310', 2006, 2009, 5, 'Luxury', 'Platinum', 8000),
(2025, '311', 2001, 2010, 3, 'Non-AC', 'Silver', 4000),
(2026, '311', 2001, 2010, 4, 'AC', 'Gold', 6000),
(2027, '311', 2001, 2010, 5, 'Luxury', 'Platinum', 8000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `package_details`
--
ALTER TABLE `package_details`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package_details`
--
ALTER TABLE `package_details`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2028;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
