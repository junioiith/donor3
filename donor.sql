-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2020 at 02:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donor`
--

-- --------------------------------------------------------

--
-- Table structure for table `darah`
--

CREATE TABLE `darah` (
  `kd_darah` char(2) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `rhesus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `darah`
--

INSERT INTO `darah` (`kd_darah`, `gol_darah`, `rhesus`) VALUES
('a', 'a', 'Positif'),
('b', 'b', 'Positif'),
('c', 'c', 'Positif'),
('d', 'd', 'Positif'),
('D1', 'O', 'Positif'),
('D2', 'O', 'Negatif'),
('f', 'f', 'Positif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `darah`
--
ALTER TABLE `darah`
  ADD PRIMARY KEY (`kd_darah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
