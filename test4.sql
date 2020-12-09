-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 03:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test4`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered_service_providers`
--

CREATE TABLE `registered_service_providers` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) CHARACTER SET latin1 NOT NULL,
  `mobile` varchar(10) CHARACTER SET latin1 NOT NULL,
  `passwords` varchar(300) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='This is Service Provider Registration Data';

--
-- Dumping data for table `registered_service_providers`
--

INSERT INTO `registered_service_providers` (`user_id`, `first_name`, `last_name`, `email`, `address1`, `address2`, `mobile`, `passwords`) VALUES
(9, 'Chandra', 'Sravanthi', 'chandrasravanthik@gmail.com', 'vasavi College', 'sadsfdsfafdss', '+918985733', 'hello'),
(10, 'Chandra', 'Sravanthi', 'chandrasravanthik@gmail.com', 'vasavi College', 'sadsfdsfafdss', '+918985733', 'hello789'),
(11, 'Chandra', 'Sravanthi', 'chandrasravanthik@gmail.com', 'vasavi College', 'sadsfdsfafdss', '+918985733', 'hello45'),
(12, 'Chandra', 'Sravanthi', 'chandrasravanthik@gmail.com', 'vasavi College', 'sadsfdsfafdss', '+918985733', 'hello456'),
(13, 'Chandra', 'Sravanthi', 'chandrasravanthik@gmail.com', 'vasavi College', 'sadsfdsfafdss', '+918985733', 'hello45'),
(16, 'anuvik', 't', 'anuvikt@gmail.com', 'vasavi College', 'sadsfdsfafdss', '2345678901', 'homesevices');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered_service_providers`
--
ALTER TABLE `registered_service_providers`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registered_service_providers`
--
ALTER TABLE `registered_service_providers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
