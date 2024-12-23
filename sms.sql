-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2024 at 10:34 AM
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
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `username` varchar(10) NOT NULL,
  `password` int(10) NOT NULL,
  `id` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pcont` varchar(13) NOT NULL,
  `standard` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`username`, `password`, `id`, `rollno`, `name`, `city`, `pcont`, `standard`, `image`) VALUES
('harman', 123, 5, 2, 'HARMAN', 'SIRHIND', '9417757680', 5, 'windows-11-logo-colorful-background-digital-art-4k-wallpaper-uhdpaper.com-127@0@h.jpg'),
('anmol', 123, 6, 1, 'ANMOL SINGH', 'DORAHA', '123456789', 6, 'pexels-pixabay-33045.jpg'),
('aman', 123, 9, 24, 'AMANDEEPSINGH', 'FGS', '789546985', 2, 'windows-11-logo-colorful-background-digital-art-4k-wallpaper-uhdpaper.com-127@0@h.jpg'),
('SINGH', 1234, 10, 1, 'HARPREETSINGH', 'FGS', '878787', 2, 'windows-11-logo-colorful-background-digital-art-4k-wallpaper-uhdpaper.com-127@0@h.jpg'),
('SIMRAN', 12345, 11, 12, 'SIMRANJEETSINGH', 'FGS', '57575757575', 2, 'windows-11-logo-colorful-background-digital-art-4k-wallpaper-uhdpaper.com-127@0@h.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
