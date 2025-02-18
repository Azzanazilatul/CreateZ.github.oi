-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2024 at 03:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_from`
--

CREATE TABLE `user_from` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_from`
--

INSERT INTO `user_from` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Azza', 'nazilatulazza092@gmail.com', '888dffc5812553227c45cd7b6f75b7cd', 'user'),
(2, 'Azza', 'nazilatulazza12@gmail.com', 'Azil30ITS', 'admin'),
(3, 'Nazila', 'nazilatulazza03@gmail.com', 'Azil30MAN', 'user'),
(4, 'satu', 'satu1@gmail.com', 'Cumasatu1', 'user'),
(5, 'RACHEL', 'rachelmiranda12@gmail.com', '1212', 'user'),
(6, 'nikmah', 'nikmah1@gmail.com', 'nikmah1', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_from`
--
ALTER TABLE `user_from`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_from`
--
ALTER TABLE `user_from`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
