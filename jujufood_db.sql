-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 10:16 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jujufood_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `visitors_msg`
--

CREATE TABLE `visitors_msg` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `locations` varchar(30) NOT NULL,
  `question` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors_msg`
--

INSERT INTO `visitors_msg` (`id`, `username`, `email`, `phone_number`, `locations`, `question`) VALUES
(1, 'jose', 'jj@gail.com', 897, 'oeiiur', 'wdhwudwidwidd'),
(2, 'jfjjf', 'jfjf@gg.com', 0, 'urufrnrj', 'ejnfelfAsk Us anything');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `visitors_msg`
--
ALTER TABLE `visitors_msg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visitors_msg`
--
ALTER TABLE `visitors_msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
