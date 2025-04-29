-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2025 at 03:15 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pam_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_Id` int(11) DEFAULT NULL,
  `Customers_firstname` varchar(255) DEFAULT NULL,
  `Customers_Lastname` varchar(255) DEFAULT NULL,
  `Customers_Numbers` varchar(12) DEFAULT NULL,
  `Customers_Contact` varchar(255) DEFAULT NULL,
  `Customers_Nationality` varchar(255) DEFAULT NULL,
  `DATE_Register` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_Id`, `Customers_firstname`, `Customers_Lastname`, `Customers_Numbers`, `Customers_Contact`, `Customers_Nationality`, `DATE_Register`) VALUES
(1, 'นายเอ', 'สกุลเอ', '081', 'TH', 'Thai', '2025-04-01'),
(2, 'นายบี', 'สกุลบี', '082', 'TH', 'Thai', '2025-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_Id` int(11) DEFAULT NULL,
  `Employee_name` varchar(255) DEFAULT NULL,
  `Employee_lastname` varchar(255) DEFAULT NULL,
  `Employee_Number` varchar(11) NOT NULL,
  `Employee_Email` varchar(255) DEFAULT NULL,
  `Employee_Address` varchar(255) DEFAULT NULL,
  `Employee_role` varchar(255) DEFAULT NULL,
  `Employee_username` varchar(255) DEFAULT NULL,
  `Employee_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_Id`, `Employee_name`, `Employee_lastname`, `Employee_Number`, `Employee_Email`, `Employee_Address`, `Employee_role`, `Employee_username`, `Employee_password`) VALUES
(1, 'Theeraphat', 'Rattanasorn', '0968685928', 'darklist0000@gmail.com', '24/4 ม.3', 'Admin', 'Admin', 'Admin'),
(2, 'Janthakan', 'Thongjaroon', '0952345960', 'Theeraphat0804@gmail.com', '24/5 ม.3', 'Super Admin', 'User', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

CREATE TABLE `parcel` (
  `Pacel_ID` int(11) DEFAULT NULL,
  `Tracknumbers` varchar(30) DEFAULT NULL,
  `Cus_ID` int(11) DEFAULT NULL,
  `Pacel_Recieve` date DEFAULT NULL,
  `Pacel_Taken` date DEFAULT NULL,
  `Pacel_Status` int(11) DEFAULT NULL,
  `Pacel_Name` varchar(255) DEFAULT NULL,
  `Pacel_Delived` varchar(255) DEFAULT NULL,
  `Pacel_Store` varchar(50) DEFAULT NULL,
  `Employee_Receive` int(11) DEFAULT NULL,
  `Employee_Taken` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
