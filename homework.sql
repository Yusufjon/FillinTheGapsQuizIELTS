-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2021 at 01:30 PM
-- Server version: 5.7.29
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homework`
--

-- --------------------------------------------------------

--
-- Table structure for table `listeningtest`
--

CREATE TABLE `listeningtest` (
  `id` int(11) NOT NULL,
  `Destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_visits` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `best_thing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_attraction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_dining` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method_transport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `income_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accomodation_cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listeningtest`
--

INSERT INTO `listeningtest` (`id`, `Destination`, `total_visits`, `best_thing`, `fav_attraction`, `destination_dining`, `method_transport`, `age_group`, `income_level`, `visit_purpose`, `occupation`, `accomodation_cost`) VALUES
(2, 'Melburn', 'Three times', 'Amazing weather', 'Town Hall', 'Variety', 'Plane', 'Over forty', 'Mid-range', 'Tourism', 'Computer programmer', 'Good value');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listeningtest`
--
ALTER TABLE `listeningtest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listeningtest`
--
ALTER TABLE `listeningtest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
