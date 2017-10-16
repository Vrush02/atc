-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2017 at 10:47 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) NOT NULL,
  `pwd` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pwd`) VALUES
('admin@mycart', 'secretpwd1');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `product_type` varchar(30) NOT NULL,
  `brand_type` varchar(30) NOT NULL,
  `image` varchar(20) NOT NULL,
  `product_desc` varchar(200) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`product_id`, `product_name`, `city_name`, `product_type`, `brand_type`, `image`, `product_desc`, `cost`) VALUES
(101, 'iphone7', 'Vashi', 'Mobiles', 'Apple', 'm2.jpg', '64gb ROM,8gb RAM,21 megapx cam', 60000),
(103, 'Desktop PC', 'Dadar', 'Electronics', 'Samsung', 'd1.jpg', '7th gen Intel core i7 processor,8GB RAM,1TB HDD', 70000),
(105, 'Washing Machine', 'Airoli', 'Electronics', 'Samsung', 'h1.jpg', 'Capacity:6kg,Semi-automatic', 30000),
(106, 'DSLR', 'Thane', 'Electronics', 'Sony', 'c1.jpg', '21megapx,DSLR,2.5mm lens', 75000),
(107, 'Xperia', 'Borivali', 'Mobiles', 'Sony', 'm3.jpg', '32Gb ROM,8Gb RAM,50megapx rear camera', 40000),
(108, 'Playstation', 'Dadar', 'Electronics', 'Sony', 'd2.jpg', 'Sony Playstation', 55000),
(109, 'Smart watch', 'Thane', 'Electronics', 'Apple', 'w1.jpg', 'Apple smart watch with gps tracking and much more...', 40000),
(110, 'Headphones', 'Vashi', 'Electronics', 'Sony', 'sony headphones.jpg', 'Sony MDR-ZX110a stereo headphones with inbuilt mic', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_name` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `password`) VALUES
('Paul', 'vampire');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
