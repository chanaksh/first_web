-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 07:07 AM
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
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `terms_condition` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `username`, `email`, `password`, `terms_condition`) VALUES
(1, 'chanaksh', 'chanakshmetkar@gmail.com', 'dsdswdferfgefrg', 1),
(2, 'ra', 'chi@gmail.com', '12355', 1),
(3, 'ra', 'chi@gmail.com', '12355', 1),
(4, 'chanaksh_', 'chnakshmetkar@gmail.com', '1234', 1),
(5, 'pavan rakibe', 'Pav@Gmail.Com', '123', 1),
(6, 'chanaksh metkar', 'king@gmail.com', '1234', 1),
(7, 'king_', 'King123@Gmail.Com', '1234', 1),
(8, 'karan', 'raje@gmail.com', '123', 1),
(9, 'abhi_', 'Abhi@Gmail.Com', '1234', 1),
(10, 'rama_', 'rama@gmail.com', '1234', 1),
(11, 'mayuri_', 'pratiksha@gmail.com', '1234', 1),
(12, 'khetu', 'khetu@gmail.com', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
