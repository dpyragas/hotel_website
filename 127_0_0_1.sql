-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2019 at 05:48 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `18123343`
--
CREATE DATABASE IF NOT EXISTS `18123343` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `18123343`;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Daumantas', 'daumantas@gmail.com', '07549621', 'Testing.');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `day` varchar(5) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(7) NOT NULL,
  `adults` varchar(5) NOT NULL,
  `rooms` varchar(5) NOT NULL,
  `message` varchar(3000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `name`, `email`, `phone`, `day`, `month`, `year`, `adults`, `rooms`, `message`) VALUES
(1, 'Dom', 'daumantas@gmail.com', '78964862', '20', '02', '2023', '5', '5', 'Testing.');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(50000) NOT NULL,
  `size` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image1` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `title`, `description`, `size`, `price`, `image1`) VALUES
(4, 'Suite', 'Elegant and luxury superior rooms are an ideal retreat for both business and leisure guests. Relax and enjoy distinctive comfort from the very first steps at your luxury superior room. On the top floor, enjoy the uniquely designed windows and one-of-a-kind cosy layout due to the attic roof. Experience your stay in Gevora Hotel.', '2', '350', '1.jpg'),
(6, 'Suite', 'Elegant and luxury superior rooms are an ideal retreat for both business and leisure guests. Relax and enjoy distinctive comfort from the very first steps at your luxury superior room. On the top floor, enjoy the uniquely designed windows and one-of-a-kind cosy layout due to the attic roof. Experience your stay in Gevora Hotel.', '1', '3456', '1.jpg'),
(5, 'Suite', 'Elegant and luxury superior rooms are an ideal retreat for both business and leisure guests. Relax and enjoy distinctive comfort from the very first steps at your luxury superior room. On the top floor, enjoy the uniquely designed windows and one-of-a-kind cosy layout due to the attic roof. Experience your stay in Gevora Hotel.', '2', '350', '1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
