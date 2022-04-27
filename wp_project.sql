-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 03:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wp_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `img_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`img_id`, `vendor_id`, `image`) VALUES
(1, 4, '6974770.png'),
(2, 4, 'govBlue.png'),
(3, 5, '6974770.png'),
(5, 6, '6974770.png'),
(7, 7, '6974770.png'),
(9, 8, '6974770.png'),
(10, 8, ''),
(11, 10, '6974770.png'),
(12, 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `proof`
--

CREATE TABLE `proof` (
  `proof_id` int(11) NOT NULL,
  `proof_status` varchar(255) NOT NULL,
  `proof_name` varchar(255) NOT NULL,
  `proof_phonenum` varchar(255) NOT NULL,
  `proof_email` varchar(255) NOT NULL,
  `proof_package` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subsidies_pckg`
--

CREATE TABLE `subsidies_pckg` (
  `package_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sub_status` varchar(20) NOT NULL DEFAULT 'Not Approved',
  `Subsidies_Type` varchar(255) NOT NULL,
  `Subsidies_Value` varchar(255) NOT NULL,
  `date_created` date NOT NULL ,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subsidies_pckg`
--

INSERT INTO `subsidies_pckg` (`package_id`, `user_id`, `sub_status`, `Subsidies_Type`, `Subsidies_Value`, `date_created`) VALUES
(2, 7, 'Not Approved', 'Food', '30KG rice', '2021-07-06'),
(3, 7, 'Not Approved', 'Kuota', '1 Tera', '2021-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phonenum` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `citizen_num` int(50) NOT NULL,
  `min_wage` int(50) NOT NULL,
  `subsidies_status` varchar(255) NOT NULL DEFAULT 'Not Approved',
  `password` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `fname`, `lname`, `phonenum`, `address`, `citizen_num`, `min_wage`, `subsidies_status`, `password`, `occupation`) VALUES
(7, 'gofarhilman@sekut.com', 'Gofar', 'Hilman', '08231234321', 'Jalan sekut, Jakarta Selatan', 2147483647, 1500, 'Approved', 'fae0b27c451c728867a567e8c1bb4e53', 'kadal'),
(9, 'Bismillah@gmail.com', 'riza', 'luhut', '3231', 'Jalan kemayoran', 2147483647, 1500, 'Not Approved', '202cb962ac59075b964b07152d234b70', 'Unemployeed'),
(11, 'sdcs@Qad.com', 'Gofar', 'projek', '1214343', '1111', 2147483647, 1500, 'Not Approved', '202cb962ac59075b964b07152d234b70', 'Unemployeed'),
(12, 'kadal@mail.com', 'Gofar', 'Hilman', '08231234321', 'jalan jalan', 2147483647, 1500, 'Not Approved', '202cb962ac59075b964b07152d234b70', 'Workers'),
(13, 'cincong@mail.com', 'Gofar', 'projek', '08231234321', 'Jalan jalan', 2147483647, 1500, 'Not Approved', '202cb962ac59075b964b07152d234b70', 'Unemployeed');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(11) NOT NULL,
  `vendor_location` varchar(255) NOT NULL,
  `vendor_dates` date NOT NULL,
  `vendor_capacity` varchar(255) NOT NULL DEFAULT 'Available',
  `vendor_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `vendor_location`, `vendor_dates`, `vendor_capacity`, `vendor_name`) VALUES
(1, 'Jakarta', '2021-07-14', 'Available', 'Puskesmas Bujang'),
(2, 'Jakarta', '2021-07-14', 'Available', 'Puskesmas Bujang'),
(3, 'Jakarta', '2021-07-09', 'Available', 'Bujang'),
(5, 'Jakarta', '2021-07-09', 'FULL', 'Bujang'),
(6, 'Jakarta', '2021-07-09', 'Available', 'Bujang'),
(9, 'Jakarta', '2021-07-14', 'Available', 'Puskesmas Bujang'),
(10, 'North Bekasi', '2021-07-15', '120/200', 'Holy Wings Vaccination Center');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `proof`
--
ALTER TABLE `proof`
  ADD PRIMARY KEY (`proof_id`);

--
-- Indexes for table `subsidies_pckg`
--
ALTER TABLE `subsidies_pckg`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `proof`
--
ALTER TABLE `proof`
  MODIFY `proof_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subsidies_pckg`
--
ALTER TABLE `subsidies_pckg`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
