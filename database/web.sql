-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 04:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `status` int(2) NOT NULL,
  `token` int(100) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`email`, `name`, `pass`, `contact`, `status`, `token`, `user`) VALUES
('a@gamil.com', 'DarkPhoenix', '123456789', '0712051203', 0, 3, 'user'),
('admin@gmail.com', 'admin', '123456789', '0712051203', 1, 0, 'admin'),
('covd476@gmail.com', 'DarkPhoenix', '123456789', '0752051205', 1, 6486, 'user'),
('danushanandan1@gmail.com', 'asd', '123456789', '0712051203', 1, 0, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE `design` (
  `Design_id` varchar(100) NOT NULL,
  `User_email` varchar(100) NOT NULL,
  `Design` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`Design_id`, `User_email`, `Design`) VALUES
('001', 'danushanandan1@gmail.com', '663f34db22dcf.jpg'),
('006', 'covd476@gmail.com', '662203ff1e5ff.jpg'),
('007', 'covd476@gmail.com', '6622040e7d66c.jpg'),
('008', 'covd476@gmail.com', '663a2cb04d057.jpeg'),
('009', 'covd476@gmail.com', '663a2e0282fef.jpg'),
('010', 'covd476@gmail.com', '663a2e1c59765.png'),
('011', 'covd476@gmail.com', '663a2e318b9ab.png'),
('012', 'covd476@gmail.com', '663a2e4154831.png');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentid` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentid`, `amount`, `email`, `status`) VALUES
('001', 25000, 'covd476@gmail.com', 'paid'),
('002', 25000, 'covd476@gmail.com', 'paid'),
('003', 3000, 'admin@gmail.com', 'paid'),
('004', 25000, 'covd476@gmail.com', 'paid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`Design_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
