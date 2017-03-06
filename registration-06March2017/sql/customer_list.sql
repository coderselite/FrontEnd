-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2017 at 06:38 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_list`
--

CREATE TABLE `customer_list` (
  `customer_Id` int(8) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `email_code` varchar(32) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_list`
--

INSERT INTO `customer_list` (`customer_Id`, `first_name`, `last_name`, `email`, `email_code`, `mobile`, `address`, `user_password`, `status`) VALUES
(34, 'Lakshmi', 'Pisharody', 'lakshmipisharody@yahoo.com', '945ec78f933839e0c240d96b525e5532', '8796536036', 'dksflklsdf', 'Lakshmi@123', 'inactive'),
(35, 'Lakshmi', 'Pisharody', 'lakshmipisharody@yahoo.com', 'b4d7dc643d6161289b2cdebad58ca6f0', '8796536036', 'fffdgfg', 'Lakshmi@1234', 'inactive'),
(37, 'Lakshmi', 'Pisharody', 'lakshmipisharody@yahoo.com', 'ce64fec8d530e212925d4c63da66ada8', '9921409927', 'dfxc', 'Abcd@123', 'inactive'),
(38, 'Lakshmi', 'Pisharody', 'lakshmipisharody@yahoo.com', '809ecbcb8178def832ac4dacd8f82a7d', '8796536036', 'ldfkkdfl', 'Lakshmi@1234', 'inactive'),
(39, 'Lakshmi', 'Pisharody', 'lakshmipisharody@yahoo.com', '9016b2a499d38b9cc0290cb544f7fc3c', '8796536036', 'sdldsl;dsl;ds;', 'Lakshmi@123', 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_list`
--
ALTER TABLE `customer_list`
  ADD PRIMARY KEY (`customer_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_list`
--
ALTER TABLE `customer_list`
  MODIFY `customer_Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
