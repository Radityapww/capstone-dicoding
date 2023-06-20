-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 04:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Kertas Continuous Form 1 Ply A4 Full 200 Lembar', 35000),
(2, 'Kertas Continuous Form 1 Ply A4 Dibagi 2 200 Lembar', 35000),
(3, 'Kertas Continuous Form 1 Ply A4 Dibagi 4 200 Lembar', 35000),
(4, 'Kertas Continuous Form 2 Ply A4 Full 100 Lembar', 43000),
(5, 'Kertas Continuous Form 2 Ply A4 Dibagi 2 100 Lembar', 43000),
(6, 'Kertas Continuous Form 2 Ply A4 Dibagi 4 100 Lembar', 43000),
(7, 'Kertas Continuous Form 3 Ply A4 Full 100 Lembar', 60000),
(8, 'Kertas Continuous Form 3 Ply A4 Dibagi 2 100 Lembar', 60000),
(9, 'Kertas Continuous Form 3 Ply A4 Dibagi 4 100 Lembar', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Raditya Punjul Wikantoro', 'raditz1412@gmail.com', 'tesraditya', '08888888888', 'Surabaya', 'dupak'),
(2, 'Admin', 'admin@gmail.com', 'admin1412', '08888888888', 'tes', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(53, 6, 1, 'Confirmed'),
(54, 6, 2, 'Confirmed'),
(55, 6, 8, 'Confirmed'),
(56, 6, 9, 'Confirmed'),
(59, 6, 2, 'Confirmed'),
(60, 6, 3, 'Confirmed'),
(61, 6, 2, 'Confirmed'),
(62, 6, 3, 'Confirmed'),
(63, 6, 2, 'Confirmed'),
(64, 6, 3, 'Confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
