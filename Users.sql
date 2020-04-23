-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb17.biz.nf
-- Generation Time: Mar 25, 2020 at 10:27 PM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3321922_kermitusers`
--

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `email`, `password`) VALUES
(1, 'Sandy@gmail.com', 'Bd1'),
(2, 'Zippy@gmail.com', 'Ft2'),
(3, 'WhatUP@gmail.com', 'Ft2'),
(4, 'Kermit@gmail.com', 'Sw2'),
(5, 'Batman@gmail.com', 'Tm3'),
(6, 'Nathan@gmail.com', 'Cm5'),
(7, 'Carol@gmail.com', 'Ck7'),
(8, 'John@gmail.com', 'Cd9'),
(9, 'plant@gmail.com', 'Pt2'),
(10, 'chair@gmail.com', 'Bd1'),
(11, 'Anna@gmail.com', 'Cd1'),
(12, 'tea@gmail.com', 'RRRrrr33'),
(13, '', ''),
(14, 'Woop@gmail.com', 'aaaaaaaaaabbbbbbBbbbccccccccccddddddddddeeeeeeeeee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
