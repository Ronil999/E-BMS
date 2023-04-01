-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 07:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `add`
--

-- --------------------------------------------------------

--
-- Table structure for table `adata`
--

CREATE TABLE `adata` (
  `id` int(11) NOT NULL,
  `hname` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `bgroup` varchar(5) NOT NULL,
  `ablood` int(10) NOT NULL,
  `cno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adata`
--

INSERT INTO `adata` (`id`, `hname`, `city`, `bgroup`, `ablood`, `cno`) VALUES
(17, 'Charusat University', 'Anand', 'A+', 12, 1234567890),
(22, 'ddu', 'nadiad', 'B+', 17, 1234567890),
(26, 'civil', 'Suratt', 'AB+', 10, 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adata`
--
ALTER TABLE `adata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adata`
--
ALTER TABLE `adata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
