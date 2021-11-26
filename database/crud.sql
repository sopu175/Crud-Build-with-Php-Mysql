-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2021 at 08:18 PM
-- Server version: 8.0.26
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(4, 'userone', 'userone@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'usertwo', 'usertwo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'userthree', 'userthree@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'user4', 'user4@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(8, 'user5', 'user5@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'user6', 'user6@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'user7', 'user7@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, 'user8', 'user8@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(12, 'user9', 'user9@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(13, 'user10', 'user01@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(14, 'user11', 'user11@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(15, 'user13', 'user14@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(16, 'user15', 'user51@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
