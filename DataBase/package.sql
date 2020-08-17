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
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `source` int(5) NOT NULL,
  `destination` int(5) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Available',
  `image` varchar(1000) NOT NULL,
  `duration` varchar(500) NOT NULL,
  `rows1` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `source`, `destination`, `status`, `image`, `duration`, `rows1`) VALUES
(301, 'Beauty of Taj Mahal Gateway', 2001, 2002, 'Available', '<img src=\"images/taj.jpg\" style=\"width:100%;height:100%;\"/>', '4 Days / 3 Nights', 1),
(302, 'Goa Paradise Beach', 2007, 2011, 'Available', '<img src=\"images/2187.jpg\" style=\"width:100%;height:100%;\"/>', '6 Days / 5 Nights', 1),
(303, 'Kerala Backwater Tour', 2004, 2005, 'Available', '<img src=\"images/4441.jpg\" style=\"width:100%;height:100%;\"/>', '3 Days / 2 Nights', 1),
(304, 'Mesmeirizing Golden Temple Tour', 2001, 2003, 'Available', '<img src=\"images/4463.jpg\" style=\"width:100%;height:100%;\"/>', '3 Days / 2 Nights', 2),
(305, 'Short Tour of Rajasthan', 2001, 2006, 'Available', '<img src=\"images/4439.jpg\" style=\"width:100%;height:100%;\"/>', '5 Days / 4 Nights', 2),
(306, 'Mumbai Tour', 2001, 2007, 'Available', '<img src=\"images/2221.jpg\" style=\"width:100%;height:100%;\"/>', '3 Days / 2 Nights', 2),
(307, 'Chennai Tour', 2007, 2008, 'Available', '<img src=\"images/2220.jpg\" style=\"width:100%;height:100%;\"/>', '3 Days / 2 Nights', 3),
(308, 'Kolkata Tour', 2001, 2009, 'Available', '<img src=\"images/2216.jpg\" style=\"width:100%;height:100%;\"/>', '3 Days / 2 Nights', 3),
(309, 'Varanasi Tour', 2001, 2010, 'Available', '<img src=\"images/2206.jpg\" style=\"width:100%;height:100%;\"/>', '3 Days / 2 Nights', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=310;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
