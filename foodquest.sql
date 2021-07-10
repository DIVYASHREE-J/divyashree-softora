-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 07:01 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodquest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uemail` varchar(50) CHARACTER SET latin1 NOT NULL,
  `upassword` varchar(250) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uemail`, `upassword`) VALUES
(1, 'admin@gmail.com', 'admin121');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `food_id` int(10) NOT NULL,
  `food_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `food_qty` int(10) NOT NULL,
  `food_amt` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `total_amt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`) VALUES
(1, ' HOT BEVERAGES'),
(2, 'NORTH INDIAN '),
(3, 'SOUTH INDIAN'),
(4, 'DESSERTS');

-- --------------------------------------------------------

--
-- Table structure for table `menudetails`
--

CREATE TABLE `menudetails` (
  `id` int(11) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `fname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menudetails`
--

INSERT INTO `menudetails` (`id`, `cat_id`, `fname`, `amt`) VALUES
(1, 1, 'Jaggery coffee', 20),
(2, 1, 'Masala chai', 20),
(3, 1, 'Kashmiri Kahwa', 30),
(4, 1, 'Lemon tea', 25),
(5, 1, 'Lassi', 50),
(6, 2, 'Idly sambhar', 40),
(7, 2, 'Pongal', 50),
(8, 2, 'Masala Dosa', 70),
(9, 2, 'Puttu with kadla curry', 100),
(10, 2, 'South Indian meals', 200),
(11, 3, 'Amritsari Chole Bhature', 200),
(12, 3, 'Paneer Biryani', 140),
(13, 3, 'Naan with aloo gobi masala', 180),
(14, 3, 'Gobi Paratha with curry', 180),
(15, 3, 'North Indian Meals', 200),
(16, 4, 'Jamun with rabri', 100),
(17, 4, 'Ghevar', 120),
(18, 4, 'Mysore pak', 110),
(19, 4, 'Gajar ka Halwa', 150),
(20, 4, 'Ela Ada', 120);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `order_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `user_id` varchar(10) CHARACTER SET latin1 NOT NULL,
  `food_id` varchar(10) CHARACTER SET latin1 NOT NULL,
  `food_qty` int(10) NOT NULL,
  `user_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `user_phone` varchar(50) CHARACTER SET latin1 NOT NULL,
  `user_address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `timestamp` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_id`, `user_id`, `food_id`, `food_qty`, `user_name`, `user_phone`, `user_address`, `timestamp`) VALUES
(7, 'FQTGF684431', '14', '1', 1, 'divya', '9106598881', 'Bangalore', '10:07:2021 08:28:01pm'),
(8, 'FQTGF684431', '14', '13', 2, 'divya', '9106598881', 'Bangalore', '10:07:2021 08:28:01pm'),
(9, 'FQTGF441837', '15', '5', 1, 'chithra', '9234567900', 'Mysore', '10:07:2021 08:29:08pm'),
(10, 'FQTGF441837', '15', '7', 1, 'chithra', '9234567900', 'Mysore', '10:07:2021 08:29:08pm'),
(11, 'FQTGF294632', '16', '8', 1, 'Jayaram', '9344567980', 'Mangalore', '10:07:2021 08:30:30pm'),
(12, 'FQTGF294632', '16', '1', 1, 'Jayaram', '9344567980', 'Mangalore', '10:07:2021 08:30:30pm'),
(13, 'FQTGF294632', '16', '18', 1, 'Jayaram', '9344567980', 'Mangalore', '10:07:2021 08:30:30pm'),
(14, 'FQTGF654960', '17', '9', 1, 'akshay', '8665432189', 'Mysore', '10:07:2021 08:32:04pm'),
(15, 'FQTGF654960', '17', '11', 1, 'akshay', '8665432189', 'Mysore', '10:07:2021 08:32:04pm'),
(16, 'FQTGF654960', '17', '4', 1, 'akshay', '8665432189', 'Mysore', '10:07:2021 08:32:04pm'),
(17, 'FQTGF654960', '17', '17', 1, 'akshay', '8665432189', 'Mysore', '10:07:2021 08:32:04pm'),
(18, 'FQTGF417449', '18', '4', 1, 'anusha', '9856432781', 'Bangalore', '10:07:2021 08:33:37pm'),
(19, 'FQTGF417449', '18', '12', 1, 'anusha', '9856432781', 'Bangalore', '10:07:2021 08:33:37pm'),
(20, 'FQTGF417449', '18', '19', 1, 'anusha', '9856432781', 'Bangalore', '10:07:2021 08:33:37pm'),
(21, 'FQTGF555462', '19', '5', 1, 'bhavana', '8654321901', 'Mysore', '10:07:2021 08:35:02pm'),
(22, 'FQTGF555462', '19', '14', 1, 'bhavana', '8654321901', 'Mysore', '10:07:2021 08:35:02pm'),
(23, 'FQTGF555462', '19', '6', 1, 'bhavana', '8654321901', 'Mysore', '10:07:2021 08:35:02pm'),
(24, 'FQTGF555462', '19', '20', 1, 'bhavana', '8654321901', 'Mysore', '10:07:2021 08:35:02pm'),
(25, 'FQTGF502278', '20', '7', 1, 'john', '8769054321', 'Bangalore\r\n', '10:07:2021 09:30:04pm'),
(26, 'FQTGF502278', '20', '18', 1, 'john', '8769054321', 'Bangalore\r\n', '10:07:2021 09:30:04pm'),
(27, 'FQTGF141530', '21', '4', 2, 'rohan', '9876543210', '', '10:07:2021 09:35:28pm'),
(28, 'FQTGF141530', '21', '14', 1, 'rohan', '9876543210', '', '10:07:2021 09:35:28pm'),
(29, 'FQTGF519645', '22', '7', 2, 'tina', '9106598886', 'mysore', '10:07:2021 09:39:50pm'),
(30, 'FQTGF519645', '22', '6', 1, 'tina', '9106598886', 'mysore', '10:07:2021 09:39:50pm'),
(31, 'FQTGF650302', '23', '6', 1, 'deepthi', '9234567901', 'mysore', '10:07:2021 09:45:13pm'),
(32, 'FQTGF650302', '23', '8', 2, 'deepthi', '9234567901', 'mysore', '10:07:2021 09:45:13pm'),
(33, 'FQTGF650302', '23', '3', 1, 'deepthi', '9234567901', 'mysore', '10:07:2021 09:45:13pm'),
(34, 'FQTGF171778', '24', '2', 2, 'apoorva', '9106598881', 'mysore', '10:07:2021 09:51:03pm'),
(35, 'FQTGF171778', '24', '10', 1, 'apoorva', '9106598881', 'mysore', '10:07:2021 09:51:03pm'),
(36, 'FQTGF171778', '24', '18', 1, 'apoorva', '9106598881', 'mysore', '10:07:2021 09:51:03pm'),
(37, 'FQTGF283822', '14', '6', 2, 'divya', '9106598881', 'mysore', '10:07:2021 09:54:11pm'),
(38, 'FQTGF283822', '14', '6', 1, 'divya', '9106598881', 'mysore', '10:07:2021 09:54:11pm'),
(39, 'FQTGF283822', '14', '4', 1, 'divya', '9106598881', 'mysore', '10:07:2021 09:54:11pm'),
(40, 'FQTGF315227', '14', '6', 2, 'divya', '9106598881', 'mysore', '10:07:2021 09:58:00pm'),
(41, 'FQTGF315227', '14', '15', 1, 'divya', '9106598881', 'mysore', '10:07:2021 09:58:00pm'),
(42, 'FQTGF315227', '14', '5', 1, 'divya', '9106598881', 'mysore', '10:07:2021 09:58:00pm'),
(43, 'FQTGF315227', '14', '5', 1, 'divya', '9106598881', 'mysore', '10:07:2021 09:58:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(200) CHARACTER SET latin1 NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `address` varchar(100) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `phone`, `address`) VALUES
(14, 'divya@gmail.com', '1234qwer', 'divya', '9106598881', 'mysore'),
(15, 'chithra@gmail.com', '1234asdf', 'chithra', '9234567900', 'Mysore'),
(16, 'jayaram@gmail.com', '1234zxcv', 'Jayaram', '9344567980', 'Mangalore'),
(17, 'akshay@gmail.com', '1234ghjk', 'akshay', '8665432189', 'Mysore'),
(18, 'anusha@gmail.com', 'asdf12', 'anusha', '9856432781', 'Bangalore'),
(19, 'bhavana@gmail.com', 'qwert56', 'bhavana', '8654321901', 'Mysore'),
(20, 'john@gmail.com', '1234dfgh', 'john', '8769054321', 'Bangalore\r\n'),
(21, 'rohan@gmail.com', '1234wert', 'rohan', '9876543210', ''),
(22, 'tina@gmail.com', '1234asdfg', 'tina', '9106598886', 'mysore'),
(23, 'deepthi@gmail.com', '1234dfgh', 'deepthi', '9234567901', 'mysore'),
(24, 'apoorva@gmail.com', '1234erty', 'apoorva', '9106598881', 'mysore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `food_id` (`food_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menudetails`
--
ALTER TABLE `menudetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menudetails`
--
ALTER TABLE `menudetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
