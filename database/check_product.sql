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
-- Table structure for table `check_product`
--

CREATE TABLE `check_product` (
  `SR.NO` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `check_product`
--

INSERT INTO `check_product` (`SR.NO`, `email`, `product_name`, `price`, `id`) VALUES
(15, 'king123@gmail.com', 'Cold coffee', 'Rs.40 ', 10),
(16, 'king123@gmail.com', 'Cold coffee', 'Rs.40 ', 10),
(17, 'king123@gmail.com', 'Cold coffee', 'Rs.40 ', 10),
(22, 'king123@gmail.com', 'chikan pulav', 'Rs.399', 8),
(23, 'king123@gmail.com', 'khichadi', 'Rs.399', 5),
(24, 'king123@gmail.com', 'khichadi', 'Rs.399', 5),
(25, 'king123@gmail.com', 'simple burger', 'Rs.65', 7),
(26, 'king123@gmail.com', 'simple burger', 'Rs.65', 7),
(27, 'king123@gmail.com', 'matan pulav', 'Rs.599', 6),
(28, 'king123@gmail.com', 'matan pulav', 'Rs.599', 6),
(29, 'king123@gmail.com', 'matan pulav', 'Rs.599', 6),
(30, 'king123@gmail.com', 'simple burger', 'Rs.65', 7),
(31, 'king123@gmail.com', 'simple burger', 'Rs.65', 7),
(32, 'king123@gmail.com', 'simple burger', 'Rs.65', 7),
(33, 'king123@gmail.com', 'khichadi', 'Rs.399', 5),
(34, 'king123@gmail.com', 'matan pulav', 'Rs.599', 6),
(35, 'king123@gmail.com', 'matan pulav', 'Rs.599', 6),
(36, 'king123@gmail.com', 'matan pulav', 'Rs.599', 6),
(37, 'king123@gmail.com', 'BURGER', 'Rs.99', 4),
(38, 'king123@gmail.com', 'chikan pulav', 'Rs.399', 8),
(39, 'king123@gmail.com', 'chikan pulav', 'Rs.399', 8),
(40, 'king123@gmail.com', 'matan pulav', 'Rs.599', 6),
(41, 'king123@gmail.com', 'khichadi', 'Rs.399', 5),
(42, 'king123@gmail.com', 'khichadi', 'Rs.399', 5),
(43, 'king123@gmail.com', 'simple burger', 'Rs.65', 7),
(44, 'king123@gmail.com', 'khichadi', 'Rs.399', 5),
(45, 'king123@gmail.com', 'simple burger', 'Rs.65', 7),
(46, 'king123@gmail.com', 'fry matan', 'Rs.299', 9),
(47, 'king123@gmail.com', 'matan pulav', 'Rs.599', 6),
(48, 'king123@gmail.com', 'khichadi', 'Rs.399', 5),
(49, 'king123@gmail.com', 'matan pulav', 'Rs.599', 6),
(50, 'king123@gmail.com', 'Cold coffee', 'Rs.40 ', 10),
(51, 'king123@gmail.com', 'PIZZA', 'Rs.99', 3),
(52, 'rama@gmail.com', 'matan pulav', 'Rs.599', 6),
(53, 'pratiksha@gmail.com', 'BURGER', 'Rs.99', 4),
(54, 'pratiksha@gmail.com', 'chikan pulav', 'Rs.399', 8),
(55, 'khetu@gmail.com', 'butter chicken lasangana', 'Rs.250', 4),
(56, 'khetu@gmail.com', 'matan pulav', 'Rs.599', 6),
(57, 'king123@gmail.com', 'khichadi', 'Rs.399', 5),
(58, 'king123@gmail.com', 'chikan pulav', 'Rs.399', 8),
(59, 'king123@gmail.com', 'kaju masala', 'Rs.230', 19),
(60, 'king123@gmail.com', 'kaju masala', 'Rs.230', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `check_product`
--
ALTER TABLE `check_product`
  ADD PRIMARY KEY (`SR.NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `check_product`
--
ALTER TABLE `check_product`
  MODIFY `SR.NO` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
