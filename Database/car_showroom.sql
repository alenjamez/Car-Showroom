-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 07:42 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car showroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accessory`
--

CREATE TABLE `tbl_accessory` (
  `acc_id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `description` varchar(600) NOT NULL,
  `status` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_car`
--

CREATE TABLE `tbl_car` (
  `car_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `car_type` varchar(11) NOT NULL,
  `ground` varchar(11) NOT NULL,
  `steering` varchar(20) NOT NULL,
  `airbag` varchar(20) NOT NULL,
  `ac` varchar(10) NOT NULL,
  `capacity` int(10) NOT NULL,
  `length` int(10) NOT NULL,
  `width` int(10) NOT NULL,
  `heigth` int(10) NOT NULL,
  `bootspace` int(10) NOT NULL,
  `status` int(5) NOT NULL DEFAULT 1,
  `enc` varchar(600) NOT NULL,
  `seat` int(5) NOT NULL,
  `comp_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_car`
--

INSERT INTO `tbl_car` (`car_id`, `name`, `car_type`, `ground`, `steering`, `airbag`, `ac`, `capacity`, `length`, `width`, `heigth`, `bootspace`, `status`, `enc`, `seat`, `comp_id`) VALUES
(2, 'Swift', 'Disel', 'Steel', 'digital', '2', 'Yes', 0, 1000, 500, 350, 250, 0, 'cgzfz gf hgfhcvv gvbx', 5, 1),
(3, 'Venue', 'CNG', 'Steel', 'digital', '4', 'Yes', 0, 1300, 550, 450, 400, 0, 'ldms sdhyg s sadh db sjdhb', 5, 2),
(4, 'dizer', 'Sedan', 'bleeh', 'digital', '2', 'Yes', 0, 444, 550, 52, 250, 0, 'bleeh', 4, 1),
(7, 'Swift', 'Hatchback', '163', 'Yes', '2', 'Yes', 37, 3840, 1735, 1530, 263, 1, 'BS VI', 5, 1),
(8, 'Sonet', 'SUV', '_', 'Yes', '2', 'Yes', 40, 3995, 1790, 1642, 392, 1, 'BS VI', 5, 6),
(9, 'Dzire', 'Sedan', '_', 'Yes', '2', 'Yes', 50, 3995, 1735, 1515, 378, 1, 'BS VI', 5, 1),
(10, 'Urban cruizer', 'SUV', '-', 'Yes', '2', 'Yes', 48, 3995, 1790, 1640, 392, 1, 'BS VI', 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_carimage`
--

CREATE TABLE `tbl_carimage` (
  `img_id` int(50) NOT NULL,
  `main` varchar(20) NOT NULL,
  `image1` varchar(20) DEFAULT NULL,
  `image2` varchar(20) DEFAULT NULL,
  `image3` varchar(20) DEFAULT NULL,
  `image4` varchar(20) DEFAULT NULL,
  `image5` varchar(20) DEFAULT NULL,
  `colour` varchar(20) NOT NULL,
  `car_id` int(5) NOT NULL,
  `xmt` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_carimage`
--

INSERT INTO `tbl_carimage` (`img_id`, `main`, `image1`, `image2`, `image3`, `image4`, `image5`, `colour`, `car_id`, `xmt`) VALUES
(1, 'car6.jpg', 'car1.jpg', 'car4.jpg', 'car3.jpg', 'car5.jpg', 'car2.jpg', 'Solid Fire Red', 7, 1),
(2, 'swift1.jpg', '', '', '', '', '', 'Artic White', 7, 0),
(3, 'swift2.jpg', '', '', '', '', '', 'Silky Silver', 7, 0),
(4, 'swift3.jpg', '', '', '', '', '', 'Midnight Blue', 7, 0),
(5, 'swift4.jpg', '', '', '', '', '', 'Lucent Orange', 7, 0),
(6, 'swift5.jpg', '', '', '', '', '', 'Magma Grey', 7, 0),
(7, 'dzire1.jpg', 'dezire2.jpg', 'dzire3.jpg', 'dzire4.jpg', 'dzire5.jpg', 'dezire6.jpg', 'Oxford Blue', 9, 1),
(8, 'dzire10.jpg', '', '', '', '', '', 'Artic White', 9, 0),
(9, 'dzire8.jpg', '', '', '', '', '', 'Sherwood Brown', 9, 0),
(10, 'dzire9.jpg', '', '', '', '', '', 'Premium Silver', 9, 0),
(11, 'dzire9.jpg', '', '', '', '', '', 'Magma Grey', 9, 0),
(12, 'sonet1.jpg', 'sonet 2.jpg', 'sonet 3.jpg', 'sonet 4.jpg', 'sonet 5.jpg', 'sonet 6.jpg', 'Intense Red', 8, 1),
(13, 'urban1.jpg', 'urban2.jpg', 'urban3.jpg', 'urban4.jpg', 'urban5.jpg', 'urban6.jpg', 'Spunky Blue', 10, 1),
(14, 'urban7.jpg', '', '', '', '', '', 'Suave Silver', 10, 0),
(15, 'urban8.jpg', '', '', '', '', '', 'Rustic Brown ', 10, 0),
(16, 'urban9.jpg', '', '', '', '', '', 'Sunny White', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_com`
--

CREATE TABLE `tbl_com` (
  `comp_id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `icon` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_com`
--

INSERT INTO `tbl_com` (`comp_id`, `name`, `icon`, `status`) VALUES
(1, 'Maruthi Suzuki', 'sel cuc.txt', 1),
(2, 'Hyundai', '2.jpg', 1),
(3, 'Ford', '3.jpg', 1),
(4, 'Toyota', '4.jpg', 1),
(5, 'Mahindra', '5.jpg', 1),
(6, 'KIA', '6.png', 1),
(7, 'Tata', '7.jpg', 1),
(8, 'Volkswagen', '8.png', 1),
(9, 'Mistibushi', '9.jpg', 0),
(10, 'Land Rover', '10.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `username`, `password`, `status`) VALUES
(1, 'Admin', 'Admin@123', 1),
(2, 'alen123', 'd449265ec1ae246afccf70ed090a7092', 1),
(3, 'Sona123', 'c10bc197e7f70380be376d423551ba12', 1),
(4, 'alenzj', 'a09d69b8d4ab30c2e6f8e4bfe4ccfcda', 1),
(5, 'alenjamz', 'f6a7c1d7ba186db6cb8df4e85cb4b00b', 1),
(6, 'sibyjozf', 'f6a7c1d7ba186db6cb8df4e85cb4b00b', 1),
(7, 'alenjames', '0b96d287b2007404ccc75090d23067a8', 1),
(8, 'jubinshaji', '9bcbb30b156050b05de0ed247ef94ef6', 1),
(9, 'Joseph', '2d055c1e7e0aa722187a649157775a4c', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ltestdrive`
--

CREATE TABLE `tbl_ltestdrive` (
  `tid` int(5) NOT NULL,
  `date` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `login_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_model`
--

CREATE TABLE `tbl_model` (
  `model_id` int(5) NOT NULL,
  `model` varchar(20) NOT NULL,
  `wheel` varchar(20) NOT NULL,
  `fog_lamb` varchar(10) NOT NULL,
  `sensor` varchar(10) NOT NULL,
  `camera` varchar(10) NOT NULL,
  `powerstart` varchar(10) NOT NULL,
  `autoac` varchar(10) NOT NULL,
  `sunroof` varchar(10) NOT NULL,
  `headlamb` varchar(10) NOT NULL,
  `sterio` varchar(20) NOT NULL,
  `car_id` int(5) NOT NULL,
  `window` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_model`
--

INSERT INTO `tbl_model` (`model_id`, `model`, `wheel`, `fog_lamb`, `sensor`, `camera`, `powerstart`, `autoac`, `sunroof`, `headlamb`, `sterio`, `car_id`, `window`) VALUES
(1, 'vxi', '0', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'no', 4, ''),
(2, 'vxi', 'wheelcup', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'no', 4, ''),
(3, 'vxi', 'wheelcup', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'no', 4, ''),
(4, 'LXI', 'wheelcup', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'no', 7, 'Front only'),
(5, 'VXI', 'wheelcup', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 7, 'Both'),
(6, 'ZXI', 'Alloy', 'Yes', 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 7, 'Both'),
(7, 'ZXI plus', 'crystal alloy', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 7, 'Both'),
(8, 'VXI', 'wheelcup', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 9, 'Both'),
(9, 'ZXI', 'Alloy', 'Yes', 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 9, 'Both'),
(10, 'ZXI plus', 'crystal alloy', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 9, 'Both'),
(11, 'LXI', 'wheelcup', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'no', 9, 'Front only'),
(13, '1.2 HTE', 'wheelcup', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'no', 8, 'Front only'),
(14, 'High', 'wheelcup', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 10, 'Both'),
(15, 'Mid', 'wheelcup', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'no', 10, 'Both'),
(16, 'Premium', 'crystal alloy', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 10, 'Both');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `reg_id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `login_id` int(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `propic` varchar(20) NOT NULL DEFAULT 'admin.jpg',
  `status` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`reg_id`, `name`, `phone`, `email`, `location`, `login_id`, `gender`, `propic`, `status`) VALUES
(1, 'Alen', '9544441942', 'alenillicka@gmail.com', 'Elangoi', 2, 'Male', 'admin.jpg', 1),
(2, 'Sona', '9544441942', 'sona0312@gmail.com', 'Elangoi', 3, 'Female', 'admin.jpg', 1),
(3, 'Alen', '9446921395', 'alen123@gmail.com', 'Elangoi', 4, 'Male', 'admin.jpg', 1),
(4, 'Alen', '9544441342', 'alen@gmail.com', 'elangoi', 5, 'Male', 'admin.jpg', 1),
(5, 'Siby', '9446921395', 'sibyilicka@gmail.com', 'manimala', 6, 'Male', 'witcher-3-001.jpg', 1),
(6, 'alen', '9544441942', 'alenjames@mca.ajce.in', 'elangoi', 7, 'Male', 'admin.jpg', 1),
(7, 'Jubin', '7907131635', 'jubinarackal@gmail.com', 'Manimala', 8, 'Male', 'admin.jpg', 1),
(8, 'Alen', '9544441942', 'alenillicka@gmail.com', 'Elangoi', 9, 'Male', 'admin.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transmission`
--

CREATE TABLE `tbl_transmission` (
  `trans_id` int(5) NOT NULL,
  `type` varchar(20) NOT NULL,
  `fuel` varchar(10) NOT NULL,
  `enginecc` int(10) NOT NULL,
  `bhp` varchar(20) NOT NULL,
  `millage` int(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `car_id` int(5) NOT NULL,
  `model_id` int(5) NOT NULL,
  `engtype` varchar(20) NOT NULL,
  `gearno` int(10) DEFAULT NULL,
  `xmt` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transmission`
--

INSERT INTO `tbl_transmission` (`trans_id`, `type`, `fuel`, `enginecc`, `bhp`, `millage`, `price`, `car_id`, `model_id`, `engtype`, `gearno`, `xmt`) VALUES
(1, 'Automatic', 'Petrol', 1197, '81.80bhp@6000rpm', 21, '6.71', 7, 5, 'VTVT Engine', 5, 0),
(2, 'Manual', 'Petrol', 1197, '81.80bhp@6000rpm', 21, '5.53', 7, 4, 'VTVT Engine', 5, 1),
(3, 'Manual', 'Petrol', 1197, '81.80bhp@6000rpm', 21, '6.23', 7, 5, 'VTVT Engine', 5, 0),
(4, 'Automatic', 'Petrol', 1197, '81.80bhp@6000rpm', 21, '7.30', 7, 6, 'VTVT Engine', 5, 0),
(5, 'Manual', 'Petrol', 1197, '81.80bhp@6000rpm', 21, '6.83', 7, 6, 'VTVT Engine', 5, 0),
(6, 'Automatic', 'Petrol', 1197, '81.80bhp@6000rpm', 21, '8.08', 7, 7, 'VTVT Engine', 5, 0),
(7, 'Manual', 'Petrol', 1197, '88.50bhp@6000rpm', 20, '5.98', 9, 11, 'VTVT Engine', 5, 1),
(8, 'Manual', 'Petrol', 1197, '81.86bhp@6000rpm', 18, '6.71', 8, 13, 'Smartstream G1.2', 5, 1),
(9, 'Automatic', 'Petrol', 1197, '81.86bhp@6000rpm', 23, '7.42', 9, 8, 'VTVT Engine', 5, 0),
(10, 'Manual', 'Petrol', 1197, '81.86bhp@6000rpm', 21, '6.92', 9, 8, 'VTVT Engine', 5, 0),
(11, 'Automatic', 'Petrol', 1462, '103.26bhp@6000rpm', 16, '8.40', 10, 15, 'k-series1.5l', 4, 0),
(12, 'Automatic', 'Petrol', 1400, '103.26bhp@6000rpm', 18, '9.15', 10, 14, 'k-series1.5l', 4, 0),
(13, 'Manual', 'Petrol', 1400, '103.26bhp@6000rpm', 25, '9.80', 10, 16, 'k-series1.5l', 5, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accessory`
--
ALTER TABLE `tbl_accessory`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `tbl_car`
--
ALTER TABLE `tbl_car`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `tbl_car_ibfk_1` (`comp_id`);

--
-- Indexes for table `tbl_carimage`
--
ALTER TABLE `tbl_carimage`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `tbl_carimage_ibfk_1` (`car_id`);

--
-- Indexes for table `tbl_com`
--
ALTER TABLE `tbl_com`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_ltestdrive`
--
ALTER TABLE `tbl_ltestdrive`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `tbl_model`
--
ALTER TABLE `tbl_model`
  ADD PRIMARY KEY (`model_id`),
  ADD KEY `tbl_model_ibfk_1` (`car_id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`reg_id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `tbl_transmission`
--
ALTER TABLE `tbl_transmission`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `tbl_transmission_ibfk_1` (`car_id`),
  ADD KEY `tbl_transmission_ibfk_2` (`model_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accessory`
--
ALTER TABLE `tbl_accessory`
  MODIFY `acc_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_car`
--
ALTER TABLE `tbl_car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_carimage`
--
ALTER TABLE `tbl_carimage`
  MODIFY `img_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_com`
--
ALTER TABLE `tbl_com`
  MODIFY `comp_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_ltestdrive`
--
ALTER TABLE `tbl_ltestdrive`
  MODIFY `tid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_model`
--
ALTER TABLE `tbl_model`
  MODIFY `model_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `reg_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_transmission`
--
ALTER TABLE `tbl_transmission`
  MODIFY `trans_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_car`
--
ALTER TABLE `tbl_car`
  ADD CONSTRAINT `tbl_car_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `tbl_com` (`comp_id`);

--
-- Constraints for table `tbl_carimage`
--
ALTER TABLE `tbl_carimage`
  ADD CONSTRAINT `tbl_carimage_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `tbl_car` (`car_id`);

--
-- Constraints for table `tbl_model`
--
ALTER TABLE `tbl_model`
  ADD CONSTRAINT `tbl_model_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `tbl_car` (`car_id`);

--
-- Constraints for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD CONSTRAINT `tbl_registration_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `tbl_login` (`login_id`);

--
-- Constraints for table `tbl_transmission`
--
ALTER TABLE `tbl_transmission`
  ADD CONSTRAINT `tbl_transmission_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `tbl_car` (`car_id`),
  ADD CONSTRAINT `tbl_transmission_ibfk_2` FOREIGN KEY (`model_id`) REFERENCES `tbl_model` (`model_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
