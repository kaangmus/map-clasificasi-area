-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2017 at 01:26 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `googleapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(10) NOT NULL,
  `category_map` varchar(30) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `color_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `category_map`, `category_name`, `color_name`) VALUES
(1, '1', 'wilayah 1', '800000'),
(2, '2', 'wilayah 2', 'FF0000'),
(3, '3', 'wilayah 3', '008000');

-- --------------------------------------------------------

--
-- Table structure for table `map_point`
--

CREATE TABLE `map_point` (
  `id` int(4) NOT NULL,
  `city` varchar(30) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `category_map` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_point`
--

INSERT INTO `map_point` (`id`, `city`, `latitude`, `longitude`, `category_map`) VALUES
(1, 'surabaya', -7.259085, 112.747896, '1'),
(2, 'malang', -7.008355, 110.440767, '1'),
(3, 'klaten', -7.730183, 110.709932, '1'),
(4, 'bandung', -6.914297, 107.609041, '2'),
(5, 'tasikmalaya', -7.334004, 108.196809, '2'),
(6, 'purwokerto', -7.426614, 109.235017, '2'),
(7, 'pekalongan', -6.854308, 109.674471, '3'),
(8, 'semarang', -6.854308, 109.674471, '3'),
(9, 'jepara', -6.55425, 110.657747, '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `map_point`
--
ALTER TABLE `map_point`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `map_point`
--
ALTER TABLE `map_point`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
