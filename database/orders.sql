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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `qty` int(11) NOT NULL,
  `name_` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address_` text NOT NULL,
  `date_` varchar(255) NOT NULL,
  `time_` varchar(255) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`qty`, `name_`, `phone`, `email`, `address_`, `date_`, `time_`, `pro_name`, `pro_price`) VALUES
(0, '', '', '', '', '', '', 'khichadi', 'Rs.399'),
(1, 'chanaksh', '9979098892', 'king123@gmail.com', 'nashik', '2023-05-17', '04:15', 'khichadi', 'Rs.399'),
(2, 'chanaksh', '9979098892', 'king123@gmail.com', 'nashik', '2023-05-17', '08:44', 'Cold coffee', 'Rs.40 '),
(3, 'chanaksh', '9979098892', 'king123@gmail.com', 'nashik', '2023-05-17', '06:48', 'PIZZA', 'Rs.99'),
(3, 'rama_', '2323455677', 'rama@gmail.com', 'meri,nashik', '2023-05-17', '19:24', 'matan pulav', 'Rs.599'),
(4, 'pratiksha', '1223334422', 'pratiksha@gmail.com', 'nashik', '2023-05-24', '02:09', 'chikan pulav', 'Rs.399'),
(2, 'vaibhav', '1121111111', 'chanaksh@gmail.com', 'Jl. Darmokali No. 25 - 27 Keputran Tegalsari Surabaya Jawa Timur', '2023-08-03', '22:44', 'chikan pulav', 'Rs.399'),
(2, 'vaibhav', '1121111111', 'king123@gmail.com', 'Jl. Darmokali No. 25 - 27 Keputran Tegalsari Surabaya Jawa Timur', '2023-08-03', '22:44', 'chikan pulav', 'Rs.399'),
(1, 'chanaksh', '7410757602', 'king123@gmail.com', 'Jl. Darmokali No. 25 - 27 Keputran Tegalsari Surabaya Jawa Timur', '2023-11-12', '18:34', 'kaju masala', 'Rs.230');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
