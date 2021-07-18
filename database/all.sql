-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 11:56 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `all`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `email` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `pass` varchar(255) COLLATE utf32_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_croatian_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`) VALUES
(1, 'rimon', 'rimon@rimon.com', 'rimon');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `address` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `psn` varchar(255) COLLATE utf32_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_croatian_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `address`, `mobile`, `psn`) VALUES
(1, 'rimon', 'dhaka', '01862117112', '1001'),
(2, 'kaes', 'dhaka', '01839765995', '1002');

-- --------------------------------------------------------

--
-- Table structure for table `propety`
--

CREATE TABLE `propety` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `monthly` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `address` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `access` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `floor` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `utility` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `descrip` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `images` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `rimg` varchar(255) COLLATE utf32_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_croatian_ci;

--
-- Dumping data for table `propety`
--

INSERT INTO `propety` (`id`, `name`, `monthly`, `address`, `access`, `floor`, `utility`, `descrip`, `images`, `rimg`) VALUES
(1, 'House NO 01', '20000/=', 'Dhaka', 'July, 2021', '2000sqr. feets', '4 bed, 4 bathroom (1 common, 3 attch), drawing , dining, living, 2 balconi', 'Near Dhaka', 'u (1).jpg', ''),
(2, 'House NO 02', '25000/=', 'Dhaka', 'August , 2021', '2000sqr. feets', '3 bed, 4 bathroom (1 common, 3 attch), drawing , dining, living, 2 balconi', 'Near Dhaka', 'u (2).jpg', ''),
(3, 'House NO 03', '25000/=', 'Dhaka', 'August , 2021', '2000sqr. feets', '3 bed, 4 bathroom (1 common, 3 attch), drawing , dining, living, 2 balconi', 'Near Dhaka', 'u (3).jpg', ''),
(4, 'House NO 04', '25000/=', 'Dhaka', 'August , 2021', '2000sqr. feets', '3 bed, 4 bathroom (1 common, 3 attch), drawing , dining, living, 2 balconi', 'Near Dhaka', 'u (4).jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `email` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `password` varchar(255) COLLATE utf32_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_croatian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'rimon', 'rimon@rimon.com', '99e6c29c359f06a3a38addba7445f550'),
(2, 'test', 'test@test.com', '098f6bcd4621d373cade4e832627b4f6'),
(3, 'mridul', 'mridu@mridul.com', 'c106b55522f08b35a4e81b3868d3616d'),
(4, 'abc', 'abc@gmail.com', '900150983cd24fb0d6963f7d28e17f72');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propety`
--
ALTER TABLE `propety`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `propety`
--
ALTER TABLE `propety`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
