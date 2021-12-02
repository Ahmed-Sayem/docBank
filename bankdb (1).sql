-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 03:55 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankdb`
--
drop database if exists bankdb;
create database if not exists bankdb;
use bankdb;
-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Account_id` int(10) NOT NULL,
  `Account_type` varchar(50) NOT NULL,
  `Date_opened` date NOT NULL,
  `Date_closed` date DEFAULT NULL,
  `Customerscustomer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Account_id`, `Account_type`, `Date_opened`, `Date_closed`, `Customerscustomer_id`) VALUES
(1, 'Yearly', '2021-05-17', '0000-00-00', 1),
(2, 'Monthly', '2021-05-21', '0000-00-00', 1),
(3, 'Monthly', '2021-04-30', '0000-00-00', 1),
(4, 'Yearly', '2021-04-30', '2021-04-30', 2),
(5, 'Monthly', '2021-04-30', NULL, 2),
(6, 'Yearly', '2021-05-03', '2021-05-03', 3),
(7, 'Monthly', '2021-05-03', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Mobile_number` int(11) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `Name`, `Mobile_number`, `Address`, `Email`, `Password`) VALUES
(1, 'sayef', 123, '123', 'sayef@123.com', '202cb962ac59075b964b07152d234b70'),
(2, 'sakib', 123, '123', 'sakib@123.com', '202cb962ac59075b964b07152d234b70'),
(3, 'customer', 1122334455, '998877', 'customer@customer.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `Document_number` varchar(20) NOT NULL,
  `Document_details` varchar(255) DEFAULT NULL,
  `AccountAccount_id` int(10) NOT NULL,
  `Document_image_path` varchar(200) DEFAULT NULL,
  `confirm` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`Document_number`, `Document_details`, `AccountAccount_id`, `Document_image_path`, `confirm`) VALUES
('100', 'asp', 5, 'Credentials/asp.jpg', 1),
('200', 'notun', 5, 'Credentials/notun.jpg', 0),
('205', 'advice', 7, 'Credentials/advice.jpg', 0),
('300', 'nope', 5, 'Credentials/nope.jpg', 0),
('96', 'ajker', 7, 'Credentials/ajker.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `document entry/withdraw`
--

CREATE TABLE `document entry/withdraw` (
  `Entry_date` date NOT NULL,
  `Withdraw_date` date DEFAULT NULL,
  `DocumentDocument_number` varchar(20) NOT NULL,
  `DocumentAccountAccount_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `document_softcopy`
--

CREATE TABLE `document_softcopy` (
  `Download_serial_number` varchar(50) NOT NULL,
  `Download_date` date NOT NULL,
  `DocumentDocument_number` varchar(20) NOT NULL,
  `DocumentAccountAccount_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_number` int(11) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `Name`, `Email`, `Mobile_number`, `Password`) VALUES
(1, 'employee', 'employee@em.com', 123, '202cb962ac59075b964b07152d234b70'),
(12, 'asdasda', 'asdasd@asdasdasd.com', 61662, '123');

-- --------------------------------------------------------

--
-- Table structure for table `payemnt`
--

CREATE TABLE `payemnt` (
  `serial_number` int(10) NOT NULL,
  `Payemnt_amount` double NOT NULL,
  `Payment_date` date NOT NULL,
  `AccountAccount_id` int(10) NOT NULL,
  `cust_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payemnt`
--

INSERT INTO `payemnt` (`serial_number`, `Payemnt_amount`, `Payment_date`, `AccountAccount_id`, `cust_id`) VALUES
(7207, 150, '2021-04-30', 1, NULL),
(7208, 560, '2021-04-30', 1, NULL),
(7209, 564, '2021-04-30', 1, NULL),
(7210, 9999, '2021-04-30', 2, NULL),
(7211, 6969, '2021-04-30', 4, NULL),
(7212, 2900, '2021-06-03', 7, NULL),
(7213, 350, '2021-06-03', 7, NULL),
(7214, 2980, '2021-06-03', 7, NULL),
(7215, 1e16, '2021-06-03', 7, 0),
(7216, 420420, '2021-06-03', 7, 0),
(7217, 999888, '2021-06-03', 5, 0),
(7218, 11111, '2021-06-03', 5, 0),
(7221, 1213212, '2021-06-03', 5, 0),
(7222, 33333333333, '2021-06-05', 7, 0),
(7223, 252525, '2021-06-05', 7, 0),
(7224, 751175256, '2021-06-05', 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `acc_id` int(10) NOT NULL,
  `doc_num` varchar(20) NOT NULL,
  `details` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sarequests`
--

CREATE TABLE `sarequests` (
  `cust_id` int(10)  NULL,
  `cust_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sarequests`
--

INSERT INTO `sarequests` (`cust_id`, `cust_name`) VALUES
(1, 'sayef');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `Superadmin_id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_number` int(11) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`Superadmin_id`, `Name`, `Email`, `Mobile_number`, `Password`) VALUES
(1, 'BOSS', 'boss@boss.com', 420420, '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Account_id`),
  ADD KEY `FKAccount558371` (`Customerscustomer_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`Document_number`,`AccountAccount_id`),
  ADD KEY `FKDocument702003` (`AccountAccount_id`);

--
-- Indexes for table `document entry/withdraw`
--
ALTER TABLE `document entry/withdraw`
  ADD PRIMARY KEY (`Entry_date`,`DocumentDocument_number`,`DocumentAccountAccount_id`),
  ADD KEY `FKDocument e559862` (`DocumentDocument_number`,`DocumentAccountAccount_id`);

--
-- Indexes for table `document_softcopy`
--
ALTER TABLE `document_softcopy`
  ADD PRIMARY KEY (`Download_serial_number`,`DocumentDocument_number`,`DocumentAccountAccount_id`),
  ADD KEY `FKDocument_s119087` (`DocumentDocument_number`,`DocumentAccountAccount_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `payemnt`
--
ALTER TABLE `payemnt`
  ADD PRIMARY KEY (`serial_number`,`AccountAccount_id`),
  ADD KEY `FKPayemnt78270` (`AccountAccount_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`acc_id`,`doc_num`);

--
-- Indexes for table `sarequests`
--
ALTER TABLE `sarequests`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `Account_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `payemnt`
--
ALTER TABLE `payemnt`
  MODIFY `serial_number` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7225;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `FKAccount558371` FOREIGN KEY (`Customerscustomer_id`) REFERENCES `customers` (`customer_id`) on delete cascade;

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `FKDocument702003` FOREIGN KEY (`AccountAccount_id`) REFERENCES `account` (`Account_id`) on delete cascade;

--
-- Constraints for table `document entry/withdraw`
--
ALTER TABLE `document entry/withdraw`
  ADD CONSTRAINT `FKDocument e559862` FOREIGN KEY (`DocumentDocument_number`,`DocumentAccountAccount_id`) REFERENCES `document` (`Document_number`, `AccountAccount_id`) on delete cascade;

--
-- Constraints for table `document_softcopy`
--
ALTER TABLE `document_softcopy`
  ADD CONSTRAINT `FKDocument_s119087` FOREIGN KEY (`DocumentDocument_number`,`DocumentAccountAccount_id`) REFERENCES `document` (`Document_number`, `AccountAccount_id`) on delete cascade;

--
-- Constraints for table `payemnt`
--
ALTER TABLE `payemnt`
  ADD CONSTRAINT `FKPayemnt78270` FOREIGN KEY (`AccountAccount_id`) REFERENCES `account` (`Account_id`) on delete cascade;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `var1` FOREIGN KEY (`acc_id`,`doc_num`) REFERENCES `document` (`AccountAccount_id`, `Document_number`) on delete cascade;

--
-- Constraints for table `sarequests`
--
ALTER TABLE `sarequests`
  ADD CONSTRAINT `var4` FOREIGN KEY (`cust_id`) REFERENCES `customers` (`customer_id`) on delete cascade;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
