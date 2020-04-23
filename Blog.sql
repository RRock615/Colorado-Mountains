-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb17.biz.nf
-- Generation Time: Mar 25, 2020 at 10:29 PM
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
-- Table structure for table `Blog`
--

CREATE TABLE `Blog` (
  `id` int(11) NOT NULL,
  `Expertise` varchar(20) NOT NULL,
  `Question` varchar(700) CHARACTER SET utf8mb4 NOT NULL,
  `User` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Blog`
--

INSERT INTO `Blog` (`id`, `Expertise`, `Question`, `User`) VALUES
(8, 'Advanced', '<script>alert(â€œhello worldâ€)</script>', 'Sandy@gmail.com'),
(6, 'Advanced', 'I like fish', 'Sandy@gmail.com'),
(7, 'Advanced', 'I like fetch!', 'Sandy@gmail.com'),
(5, 'Beginner', 'Hello! I am very new to this and wanted to know what jackets to bring. Thanks!', 'Sandy@gmail.com'),
(9, 'Advanced', '"<script>alert("hello world")</script>"', 'Sandy@gmail.com'),
(20, 'Intermediate', '"<img src=â€Booooâ€)>â€', 'Sandy@gmail.com'),
(21, 'Intermediate', 'SELECT * FROM Blog;', 'Sandy@gmail.com'),
(19, '', '"<img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Ffavpng.com%2Fpng_view%2Fsmiling-face-emoji-kids-smiley-face-png%2Fk0WRwGYJ&psig=AOvVaw29s3p_uqSPm3tEhIXJqkm1&ust=1585177952126000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCJjPr56etOgCFQAAAAAdAAAAABAD">', 'Sandy@gmail.com'),
(36, 'Intermediate', 'Hey!', ''),
(35, 'Advanced', '$sql = chr(0x87) . "\' DROP FROM Blog -- ";', 'Sandy@gmail.com'),
(34, '', 'Robert0x27); DROP TABLE Blog;--? ', 'Sandy@gmail.com'),
(33, 'Intermediate', 'Robert(0x??5c)\'); DROP TABLE Blog;--? ', 'Sandy@gmail.com'),
(32, '', 'Robert0x??5c\'); DROP TABLE Blog;--? ', 'Sandy@gmail.com'),
(31, 'Intermediate', 'Robert\'); DROP TABLE Blog;--?', 'Sandy@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Blog`
--
ALTER TABLE `Blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Blog`
--
ALTER TABLE `Blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
