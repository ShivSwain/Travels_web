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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm_password` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL,
  `contact_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `confirm_password`, `address`, `birthday`, `city`, `state`, `pincode`, `contact_no`) VALUES
('Golsanju', 'gsanju@gmail.com', 'Golsanju123', 'Golsanju123', 'near Railway', '1998-12-01', 'Kishangarh', 'Rajasthan', 741852, '9638520741'),
('Muskan', 'mukan@gmail.com', 'Muskan12', 'Muskan12', 'near GCA road', '1222-12-12', 'Ajmer', 'Rajasthan', 305001, '9638520741'),
('Pooja', 'poojad1@gmail.com', 'Poojad12', 'Poojad12', 'Near GCA road', '1998-12-12', 'Ajmer', 'Rajasthan', 305001, '9638527410'),
('Raju', 'raju@gamil.com', 'Rajuda123', 'Rajuda123', 'Near railway', '1998-10-10', 'Kishangarh', 'Rajasthan', 123654, '9638520741'),
('shiv', 'shiv@a.com', 'Shiv1234', 'Shiv1234', 'asdfasdfs', '2020-05-12', 'asdf', 'asdf', 123131, '7896541230');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
