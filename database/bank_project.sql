-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 12:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_open`
--

CREATE TABLE `account_open` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `birthdate` varchar(10) NOT NULL,
  `pan_number` varchar(20) NOT NULL,
  `home_address` varchar(50) NOT NULL,
  `office_address` varchar(50) DEFAULT 'NOT SPECIFIED',
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `account_no` bigint(30) NOT NULL,
  `balance` int(50) NOT NULL,
  `aadhar_card_no` bigint(30) NOT NULL,
  `ifsc` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `nominee_name` varchar(20) DEFAULT 'NOT SPECIFIED',
  `nominee_account_number` varchar(20) DEFAULT 'NOT SPECIFIED',
  `nominee_account_type` varchar(20) DEFAULT 'NOT SPECIFIED',
  `acc_open_date` varchar(100) NOT NULL,
  `is_aadhar_link` varchar(20) DEFAULT 'Not Link',
  `account_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_open`
--

INSERT INTO `account_open` (`id`, `name`, `gender`, `mobile`, `email`, `birthdate`, `pan_number`, `home_address`, `office_address`, `state`, `city`, `pincode`, `account_no`, `balance`, `aadhar_card_no`, `ifsc`, `branch`, `nominee_name`, `nominee_account_number`, `nominee_account_type`, `acc_open_date`, `is_aadhar_link`, `account_status`) VALUES
(2, 'Thumar Bhautik H.', 'Male', '9510788164', 'thumarbhautik@gmail.', '2004-02-16', 'GLUPB8920', 'charaniya', '', 'Gujarat', 'jetpur', '360370', 10118282366, 550, 287275735755, '1011', 'Demo Branch', '', '', '', '06/09/23 05:53:01 PM', 'Linked', 'Active'),
(3, 'Thumar Shrusti K.', 'Male', '8520852011', 'shrusti@gmail.com', '2008-03-07', 'ABC123456', 'surat', '', 'Gujarat', 'surat', '360370', 10113507964, 550, 0, '1011', 'Demo Branch', '', '', '', '06/09/23 05:59:54 PM', 'Not Link', 'Active'),
(4, 'bhautik', 'Male', '0951078816', 'bhautikthumar2004@gm', '2004-02-16', '15254652', 'charaniya', 'no', 'gujarat', 'jetpur', '360370', 10118199935, 500, 0, '1011', 'Demo Branch', '', '', '', '07/09/23 02:41:43 PM', 'Not Link', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `chequebook_request`
--

CREATE TABLE `chequebook_request` (
  `id` int(11) NOT NULL,
  `account_no` varchar(200) NOT NULL,
  `request_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `debit_request`
--

CREATE TABLE `debit_request` (
  `id` int(11) NOT NULL,
  `account_no` varchar(200) NOT NULL,
  `request_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff_login`
--

CREATE TABLE `staff_login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_login`
--

INSERT INTO `staff_login` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `account_no` bigint(30) NOT NULL,
  `transaction_type` varchar(50) NOT NULL,
  `amount` int(20) NOT NULL,
  `total_amount` int(20) NOT NULL,
  `done_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `account_no`, `transaction_type`, `amount`, `total_amount`, `done_at`) VALUES
(2, 10118282366, 'deposit', 100, 600, '06/09/23 05:55:18 PM'),
(2, 10118282366, 'withdraw', 100, 500, '06/09/23 05:55:28 PM'),
(2, 10118282366, 'deposit', 100, 600, '06/09/23 05:55:40 PM'),
(2, 10118282366, 'withdraw', 100, 500, '06/09/23 05:55:58 PM'),
(3, 10113507964, 'deposit', 100, 600, '06/09/23 06:02:24 PM'),
(3, 10113507964, 'transfer to 10118282366', 50, 550, '06/09/23 06:13:10 PM'),
(2, 10118282366, 'recive from 10113507964', 50, 550, '06/09/23 06:13:10 PM');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(10000) NOT NULL,
  `cpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `email`, `password`, `cpassword`) VALUES
(1, 'bhautik', 'thumarbhautik2004@gmail.com', '7651', '7651');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_open`
--
ALTER TABLE `account_open`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chequebook_request`
--
ALTER TABLE `chequebook_request`
  ADD KEY `c_id` (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `debit_request`
--
ALTER TABLE `debit_request`
  ADD KEY `c_id` (`id`);

--
-- Indexes for table `staff_login`
--
ALTER TABLE `staff_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_open`
--
ALTER TABLE `account_open`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_login`
--
ALTER TABLE `staff_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chequebook_request`
--
ALTER TABLE `chequebook_request`
  ADD CONSTRAINT `chequebook_request_ibfk_1` FOREIGN KEY (`id`) REFERENCES `account_open` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `debit_request`
--
ALTER TABLE `debit_request`
  ADD CONSTRAINT `debit_request_ibfk_1` FOREIGN KEY (`id`) REFERENCES `account_open` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`id`) REFERENCES `account_open` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
