-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 07:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_delivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `SR. NO` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `purchase_product` varchar(255) NOT NULL,
  `information_of_product` text NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`SR. NO`, `customer_name`, `purchase_product`, `information_of_product`, `email`) VALUES
(1, 'chanaksh metkar', 'panipuri', 'i like o-cap panipuri and it is very tasty .', 'chi@gmail.com'),
(2, 'pavan', 'pizza', 'i like pizza of  o-cap.', 'ra@gmail.com'),
(3, 'abhay', 'burger', 'i like 0-cap burger it is not expensive and dilevery service is also good', 'Abhi@Gmail.Com'),
(4, 'siddhu', 'puran poli', ' i like o-cap puran poli it is very sweet', 'king123@gmail.com'),
(5, 'pratiksha', 'samosa', 'i like o-cap samosa', ''),
(6, 'tejas dighe', 'meva', 'it is very tasty', 'king123@gmail.com'),
(7, 'vaibhav', 'pulav', 'i like the service', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`SR. NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `SR. NO` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
