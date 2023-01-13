-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 06:36 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admins`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_db`
--

CREATE TABLE `order_db` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `orders` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_db`
--

INSERT INTO `order_db` (`id`, `name`, `orders`, `amount`, `quantity`) VALUES
(1, 'Kyla', 'Betta', 1200, 1),
(4, 'Ben', 'Goldfish', 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `trial_order`
--

CREATE TABLE `trial_order` (
  `id` int(11) NOT NULL,
  `orders` varchar(50) NOT NULL,
  `amount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trial_order`
--

INSERT INTO `trial_order` (`id`, `orders`, `amount`) VALUES
(1, '', ''),
(2, '', ''),
(3, '', ''),
(4, '', ''),
(5, '', ''),
(6, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `contact` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `user_type`, `contact`) VALUES
(1, 'Jeff', 'jeff@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', 0),
(2, 'John', 'john@gmail.com', '123', 'user', 9354676754),
(3, 'John Doe', 'johnd@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 9354676574),
(4, 'Rosemar', 'rose@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 9778764563),
(5, 'Brian', 'brian@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 9564531234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_db`
--
ALTER TABLE `order_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trial_order`
--
ALTER TABLE `trial_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_db`
--
ALTER TABLE `order_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trial_order`
--
ALTER TABLE `trial_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
