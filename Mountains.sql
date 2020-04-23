-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb17.biz.nf
-- Generation Time: Mar 25, 2020 at 10:28 PM
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
-- Table structure for table `Mountains`
--

CREATE TABLE `Mountains` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Elevation` varchar(20) NOT NULL,
  `Distance` decimal(4,1) UNSIGNED NOT NULL,
  `Difficulty` varchar(20) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Info` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Mountains`
--

INSERT INTO `Mountains` (`id`, `Name`, `Elevation`, `Distance`, `Difficulty`, `Location`, `Info`) VALUES
(1, 'Mount Bierstadt', '14,065', 6.8, 'Hard', 'Mount Evans Wilderness, Colorado', 'https://www.alltrails.com/trail/us/colorado/mount-bierstadt-trail'),
(2, 'Mount Evans', '14,265', 4.0, 'Hard', 'Mount Evans Wilderness, Colorado', 'https://www.alltrails.com/trail/us/colorado/mount-evans-and-mount-spalding-loop-trail'),
(3, 'Grays Peak', '14,265', 7.9, 'Hard', 'Arapahoe National Forest, Colorado', 'https://www.alltrails.com/trail/us/colorado/grays-and-torreys-peak'),
(4, 'Torreys Peak', '14,265', 7.9, 'Hard', 'Arapahoe National Forest, Colorado', 'https://www.alltrails.com/trail/us/colorado/grays-and-torreys-peak'),
(5, 'Quandary Peak', '14,275', 6.7, 'Hard', 'White River National Forest, Colorado', 'https://www.alltrails.com/trail/us/colorado/quandary-peak-trail'),
(7, 'Pikes Peak', '14115', 5.1, 'Moderate', 'Black Forest Regional Park', 'https://www.alltrails.com/trail/us/colorado/pikes-peak-trail--2'),
(8, 'Mount Elbert', '14439', 10.3, 'Moderate', 'San Isabel National Forest, Colorado', 'http://sharedslides.com/signup');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Mountains`
--
ALTER TABLE `Mountains`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Mountains`
--
ALTER TABLE `Mountains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
