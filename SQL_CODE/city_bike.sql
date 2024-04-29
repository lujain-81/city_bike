-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2024 at 02:21 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `city_bike`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` bigint UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `Name`, `Email`, `Phone`, `Password`) VALUES
(1, 'Admin', 'admin@city-bike.com', '966000111000', '$2y$10$QxMF5oTJZNvHInulOQXMde/yhHWN3hagOs3EdBOaPaXsNgGWJWq4y');

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `AvailabilityID` bigint UNSIGNED NOT NULL,
  `VehicleID` bigint UNSIGNED NOT NULL,
  `DateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`AvailabilityID`, `VehicleID`, `DateTime`, `Status`) VALUES
(1, 3, '2024-03-22 21:45:48', 'active'),
(2, 3, '2024-03-22 21:56:05', 'active'),
(3, 3, '2024-03-23 11:45:13', 'active'),
(4, 3, '2024-03-23 11:54:25', 'active'),
(5, 3, '2024-03-23 23:14:31', 'active'),
(6, 3, '2024-03-29 00:59:43', 'active'),
(7, 4, '2024-03-29 00:59:43', 'active'),
(9, 5, '2024-03-29 01:01:13', 'active'),
(10, 5, '2024-03-30 01:28:40', 'active'),
(11, 4, '2024-03-30 16:03:11', 'active'),
(12, 3, '2024-03-30 16:12:56', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `canecllation`
--

CREATE TABLE `canecllation` (
  `CanecllationID` bigint UNSIGNED NOT NULL,
  `RentalID` bigint UNSIGNED NOT NULL,
  `DateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Reasons` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `canecllation`
--

INSERT INTO `canecllation` (`CanecllationID`, `RentalID`, `DateTime`, `Reasons`) VALUES
(1, 5, '2024-03-24 09:10:44', 'there is no .'),
(2, 4, '2024-03-24 22:44:19', 'from client.'),
(3, 4, '2024-04-22 08:09:23', 'Customer requested to cancel the reservation'),
(4, 5, '2024-04-22 08:09:23', 'Customer requested to cancel the reservation'),
(5, 15, '2024-04-22 08:09:23', 'Customer requested to cancel the reservation'),
(6, 17, '2024-04-22 08:09:23', 'Customer requested to cancel the reservation'),
(7, 19, '2024-04-22 08:09:23', 'Customer requested to cancel the reservation'),
(8, 21, '2024-04-22 08:09:23', 'Customer requested to cancel the reservation'),
(9, 23, '2024-04-22 08:09:23', 'Customer requested to cancel the reservation'),
(10, 25, '2024-04-22 08:09:23', 'Customer requested to cancel the reservation'),
(11, 27, '2024-04-22 08:09:23', 'Customer requested to cancel the reservation'),
(12, 29, '2024-04-22 08:09:23', 'Customer requested to cancel the reservation'),
(13, 31, '2024-04-22 08:09:23', 'Customer requested to cancel the reservation'),
(14, 33, '2024-04-22 08:09:23', 'Customer requested to cancel the reservation'),
(15, 35, '2024-04-22 08:09:23', 'Customer requested to cancel the reservation'),
(16, 37, '2024-04-22 08:09:23', 'Customer requested to cancel the reservation'),
(17, 39, '2024-04-22 08:09:23', 'Customer requested to cancel the reservation');

-- --------------------------------------------------------

--
-- Table structure for table `companyinformation`
--

CREATE TABLE `companyinformation` (
  `CompanyID` bigint UNSIGNED NOT NULL,
  `AdminID` bigint UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companyinformation`
--

INSERT INTO `companyinformation` (`CompanyID`, `AdminID`, `Name`, `Logo`, `Phone`, `Address`, `Email`) VALUES
(1, 1, 'City Bike', '/uploads/dummy-slug-2024-03-13-65f1638d317cd.png', '2344543', 'Soudi Arabia', 'soudi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `ContactID` bigint UNSIGNED NOT NULL,
  `AdminID` bigint UNSIGNED NOT NULL,
  `EmployeeID` bigint UNSIGNED DEFAULT NULL,
  `CustomerID` bigint UNSIGNED NOT NULL,
  `Replay` bigint UNSIGNED DEFAULT NULL,
  `Subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`ContactID`, `AdminID`, `EmployeeID`, `CustomerID`, `Replay`, `Subject`, `Message`) VALUES
(5, 1, NULL, 1, NULL, 'test message', 'sadsadadsa'),
(6, 1, NULL, 1, 5, 'test message', 'sdsa'),
(7, 1, 1, 1, 6, ' - Replay', 'fdsf'),
(8, 1, 1, 1, 6, ' - Replay', 'sadas');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` bigint UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NationalID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `Name`, `Email`, `Phone`, `Password`, `NationalID`) VALUES
(1, 'customer', 'customer@gmail.com', '3434432', '$2y$12$toTMOL3vrvM134ezOJN.TeA2ceuDwmUYvDyk73jo8YnZz3JYtE1O2', '23434556'),
(2, 'customer2', 'customer1@gmail.com', '01118738190', '$2y$10$BXKrCryqZNOwzab0nVwM4uByNCiMv7OkwC6i02l2KBLkBBTuul4em', '23345435345'),
(3, 'Taif Hussain', 'taeffhh9@gmail.com', '+966500000001', '$2y$12$toTMOL3vrvM134ezOJN.TeA2ceuDwmUYvDyk73jo8YnZz3JYtE1O2', '1234567890'),
(4, 'Lujain', 'Lujain@gmail.com', '+966500000002', '$2y$12$toTMOL3vrvM134ezOJN.TeA2ceuDwmUYvDyk73jo8YnZz3JYtE1O2', '2345678901'),
(5, 'Ftoon Alharbi', 'Ftoon@gmail.com', '+966500000003', '$2y$12$toTMOL3vrvM134ezOJN.TeA2ceuDwmUYvDyk73jo8YnZz3JYtE1O2', '3456789012'),
(6, 'Kawther', 'itKawther@gmail.com', '+966500000004', '$2y$12$toTMOL3vrvM134ezOJN.TeA2ceuDwmUYvDyk73jo8YnZz3JYtE1O2', '4567890123'),
(7, 'Rose Saleh', 'rosesaleh.800@gmail.com', '+966500000005', '$2y$12$toTMOL3vrvM134ezOJN.TeA2ceuDwmUYvDyk73jo8YnZz3JYtE1O2', '5678901234'),
(8, 'Retaj Alrahilah', 'Retaj@gmail.com', '+966500000006', '$2y$12$toTMOL3vrvM134ezOJN.TeA2ceuDwmUYvDyk73jo8YnZz3JYtE1O2', '6789012345'),
(9, 'Taif Saleh', 'Taif@gmail.com', '+966500000007', '$2y$12$toTMOL3vrvM134ezOJN.TeA2ceuDwmUYvDyk73jo8YnZz3JYtE1O2', '7890123456'),
(10, 'Mersal Mohammed', 'mrsail2000@gmail.com', '+966500000008', '$2y$12$toTMOL3vrvM134ezOJN.TeA2ceuDwmUYvDyk73jo8YnZz3JYtE1O2', '8901234567'),
(11, 'Emtnan Mohammed', 'Emtnan@gmail.com', '+966500000009', '$2y$12$toTMOL3vrvM134ezOJN.TeA2ceuDwmUYvDyk73jo8YnZz3JYtE1O2', '9012345678');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeID` bigint UNSIGNED NOT NULL,
  `AdminID` bigint UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Salary` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `AdminID`, `Name`, `Email`, `Phone`, `Password`, `Salary`) VALUES
(1, 1, 'emp 1', 'emp@admin.com', '23343434', '$2y$10$.sdJql2FZRtVuQy5ySZHFO9HEubCrWNwf/.oj/Di2swqH2Be7FMWi', 89);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FeedbackID` bigint UNSIGNED NOT NULL,
  `AdminID` bigint UNSIGNED NOT NULL,
  `CustomerID` bigint UNSIGNED NOT NULL,
  `Rate` int NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  `Comment` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedbackID`, `AdminID`, `CustomerID`, `Rate`, `Status`, `Comment`) VALUES
(1, 1, 3, 5, 0, 'Great service!'),
(2, 1, 3, 4, 0, 'Prompt response.'),
(3, 1, 3, 3, 0, 'Average experience.'),
(4, 1, 3, 2, 0, 'Could be better.'),
(5, 1, 3, 1, 0, 'Disappointed.'),
(6, 1, 4, 3, 0, 'Satisfactory service.'),
(7, 1, 4, 4, 0, 'Good communication.'),
(8, 1, 4, 5, 0, 'Excellent experience.'),
(9, 1, 4, 2, 0, 'Needs improvement.'),
(10, 1, 4, 1, 0, 'Unsatisfactory.'),
(11, 1, 5, 4, 0, 'Very helpful staff.'),
(12, 1, 5, 5, 0, 'Impressive service.'),
(13, 1, 5, 3, 0, 'Could be more efficient.'),
(14, 1, 5, 2, 0, 'Disappointed with the response time.'),
(15, 1, 5, 1, 0, 'Poor experience.'),
(16, 1, 6, 3, 0, 'Average service.'),
(17, 1, 6, 2, 0, 'Could be better.'),
(18, 1, 6, 4, 0, 'Good communication.'),
(19, 1, 6, 5, 0, 'Very satisfied.'),
(20, 1, 6, 1, 0, 'Highly dissatisfied.'),
(21, 1, 7, 5, 0, 'Excellent service!'),
(22, 1, 7, 4, 0, 'Prompt response.'),
(23, 1, 7, 3, 0, 'Average experience.'),
(24, 1, 7, 2, 0, 'Could be better.'),
(25, 1, 7, 1, 0, 'Disappointed.'),
(26, 1, 8, 3, 0, 'Satisfactory service.'),
(27, 1, 8, 4, 0, 'Good communication.'),
(28, 1, 8, 5, 1, 'Excellent experience.'),
(29, 1, 8, 2, 0, 'Needs improvement.'),
(30, 1, 8, 1, 0, 'Unsatisfactory.'),
(31, 1, 9, 4, 0, 'Very helpful staff.'),
(32, 1, 9, 5, 0, 'Impressive service.'),
(33, 1, 9, 3, 0, 'Could be more efficient.'),
(34, 1, 9, 2, 0, 'Disappointed with the response time.'),
(35, 1, 9, 1, 0, 'Poor experience.'),
(36, 1, 10, 3, 0, 'Average service.'),
(37, 1, 10, 2, 0, 'Could be better.'),
(38, 1, 10, 4, 0, 'Good communication.'),
(39, 1, 10, 5, 1, 'Very satisfied.'),
(40, 1, 10, 1, 1, 'Highly dissatisfied.'),
(41, 1, 1, 4, 1, 'very good vehicle');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `InvoiceID` bigint UNSIGNED NOT NULL,
  `RentalID` bigint UNSIGNED NOT NULL,
  `DateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TotalAmount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TotalAfterTax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`InvoiceID`, `RentalID`, `DateTime`, `TotalAmount`, `TotalAfterTax`) VALUES
(2, 2, '2024-03-22 21:56:05', '110', '110'),
(3, 3, '2024-03-23 11:45:13', '220', '220'),
(4, 4, '2024-03-23 11:54:25', '110', '110'),
(5, 5, '2024-03-23 23:14:31', '330', '330'),
(7, 13, '2024-03-29 00:59:43', '460', '460'),
(8, 14, '2024-03-29 01:01:13', '190', '190'),
(9, 15, '2024-03-30 01:28:40', '0', '0'),
(10, 16, '2024-03-30 16:03:11', '60', '60'),
(11, 17, '2024-03-30 16:12:56', '12.833333333333', '12.833333333333'),
(12, 18, '2024-04-22 08:01:38', '100.00', '110.00'),
(13, 19, '2024-04-22 08:01:38', '120.00', '132.00'),
(14, 20, '2024-04-22 08:01:38', '100.00', '110.00'),
(15, 21, '2024-04-22 08:01:38', '120.00', '132.00'),
(16, 22, '2024-04-22 08:01:38', '100.00', '110.00'),
(17, 23, '2024-04-22 08:01:38', '120.00', '132.00'),
(18, 24, '2024-04-22 08:01:38', '100.00', '110.00'),
(19, 25, '2024-04-22 08:01:38', '120.00', '132.00'),
(20, 26, '2024-04-22 08:01:38', '100.00', '110.00'),
(21, 27, '2024-04-22 08:01:38', '120.00', '132.00'),
(22, 28, '2024-04-22 08:01:38', '100.00', '110.00'),
(23, 29, '2024-04-22 08:01:38', '120.00', '132.00'),
(24, 30, '2024-04-22 08:01:38', '100.00', '110.00'),
(25, 31, '2024-04-22 08:01:38', '120.00', '132.00'),
(26, 32, '2024-04-22 08:01:38', '100.00', '110.00'),
(27, 33, '2024-04-22 08:01:38', '120.00', '132.00'),
(28, 34, '2024-04-22 08:01:38', '100.00', '110.00'),
(29, 35, '2024-04-22 08:01:38', '120.00', '132.00'),
(30, 36, '2024-04-22 08:01:38', '100.00', '110.00'),
(31, 37, '2024-04-22 08:01:38', '120.00', '132.00'),
(32, 38, '2024-04-22 08:01:38', '100.00', '110.00'),
(33, 39, '2024-04-22 08:01:38', '120.00', '132.00');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` bigint UNSIGNED NOT NULL,
  `RentalID` bigint UNSIGNED NOT NULL,
  `CVV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CardNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ExpireDate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Block` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PaymentStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentID`, `RentalID`, `CVV`, `CardNumber`, `ExpireDate`, `Amount`, `Block`, `PaymentStatus`) VALUES
(2, 2, '123', '4354543', '01-2025', '110', '0', 'accepted'),
(3, 3, '123', '23454353', '01-2025', '220', '0', 'accepted'),
(4, 4, '123', '123122323', '01-2025', '110', '0', 'accepted'),
(5, 5, '123', '2143243434', '01-2025', '330', '0', 'accepted'),
(7, 13, '123', 'mahmoud', '03-2028', '460', '0', 'accepted'),
(8, 14, '123', 'mahmoud', '08-2028', '190', '0', 'accepted'),
(9, 15, '123', 'text', '10-2025', '0', '0', 'accepted'),
(10, 16, '353', 'dfgsdfg', '10-2026', '60', '0', 'accepted'),
(11, 17, '123', 'ghfghg', '05-2028', '12.833333333333', '0', 'accepted'),
(12, 18, '123', '1234567890123456', '04/26', '110.00', '123ABC', 'Completed'),
(13, 19, '456', '2345678901234567', '05/26', '132.00', '456DEF', 'Completed'),
(14, 20, '789', '3456789012345678', '06/26', '110.00', '789GHI', 'Completed'),
(15, 21, '123', '4567890123456789', '07/26', '132.00', '123JKL', 'Completed'),
(16, 22, '456', '5678901234567890', '08/26', '110.00', '456MNO', 'Completed'),
(17, 23, '789', '6789012345678901', '09/26', '132.00', '789PQR', 'Completed'),
(18, 24, '123', '7890123456789012', '10/26', '110.00', '123STU', 'Completed'),
(19, 25, '456', '8901234567890123', '11/26', '132.00', '456VWX', 'Completed'),
(20, 26, '789', '9012345678901234', '12/26', '110.00', '789YZA', 'Completed'),
(21, 27, '123', '0123456789012345', '01/27', '132.00', '123BCD', 'Completed'),
(22, 28, '456', '1234567890123456', '02/27', '110.00', '456EFG', 'Completed'),
(23, 29, '789', '2345678901234567', '03/27', '132.00', '789HIJ', 'Completed'),
(24, 30, '123', '3456789012345678', '04/27', '110.00', '123KLM', 'Completed'),
(25, 31, '456', '4567890123456789', '05/27', '132.00', '456NOP', 'Completed'),
(26, 32, '789', '5678901234567890', '06/27', '110.00', '789QRS', 'Completed'),
(27, 33, '123', '6789012345678901', '07/27', '132.00', '123TUV', 'Completed'),
(28, 34, '456', '7890123456789012', '08/27', '110.00', '456WXY', 'Completed'),
(29, 35, '789', '8901234567890123', '09/27', '132.00', '789ZAB', 'Completed'),
(30, 36, '123', '9012345678901234', '10/27', '110.00', '123CDE', 'Completed'),
(31, 37, '456', '0123456789012345', '11/27', '132.00', '456FGH', 'Completed'),
(32, 38, '789', '1234567890123456', '12/27', '110.00', '789IJK', 'Completed'),
(33, 39, '123', '2345678901234567', '01/28', '132.00', '123LMN', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `RentalID` bigint UNSIGNED NOT NULL,
  `CustomerID` bigint UNSIGNED NOT NULL,
  `VehicleID` bigint UNSIGNED DEFAULT NULL,
  `Date` date NOT NULL,
  `TimeFrom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TimeTo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FullDateTimeFrom` timestamp NULL DEFAULT NULL,
  `FullDateTimeTo` timestamp NULL DEFAULT NULL,
  `WithHelmet` tinyint(1) NOT NULL,
  `Deposit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RentalDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`RentalID`, `CustomerID`, `VehicleID`, `Date`, `TimeFrom`, `TimeTo`, `FullDateTimeFrom`, `FullDateTimeTo`, `WithHelmet`, `Deposit`, `Amount`, `Status`, `RentalDateTime`) VALUES
(2, 1, 3, '2024-03-23', '11:00', '12:00', '2024-03-23 09:00:00', '2024-03-23 10:00:00', 1, '110', '110', 'active', '2024-03-22 21:56:05'),
(3, 1, 3, '2024-03-23', '01:30', '03:30', '2024-03-22 23:30:00', '2024-03-23 01:30:00', 1, '220', '220', 'active', '2024-03-23 11:45:13'),
(4, 1, 3, '2024-03-23', '04:00', '05:00', '2024-03-23 02:00:00', '2024-03-23 03:00:00', 1, '110', '110', 'cancelled', '2024-03-24 21:44:19'),
(5, 1, 3, '2024-03-24', '02:00', '05:00', '2024-03-24 00:00:00', '2024-03-24 03:00:00', 1, '330', '330', 'cancelled', '2024-03-24 08:10:44'),
(13, 1, NULL, '2024-03-29', '21:00', '23:00', '2024-03-29 19:00:00', '2024-03-29 21:00:00', 0, '460', '460', 'active', '2024-03-29 00:59:43'),
(14, 1, NULL, '2024-04-05', '19:00', '20:00', '2024-04-05 17:00:00', '2024-04-05 18:00:00', 0, '190', '190', 'active', '2024-03-29 01:01:13'),
(15, 1, NULL, '2024-03-30', '12:30', '12:45', '2024-03-30 10:30:00', '2024-03-30 10:45:00', 0, '0', '0', 'cancelled', '2024-03-30 01:01:26'),
(16, 1, NULL, '2024-03-30', '12:00', '12:30', '2024-03-30 10:00:00', '2024-03-30 10:30:00', 0, '60', '60', 'active', '2024-03-30 16:03:10'),
(17, 1, NULL, '2024-03-30', '12:00', '12:07', '2024-03-30 10:00:00', '2024-03-30 10:07:00', 0, '12.833333333333', '12.833333333333', 'cancelled', '2024-03-30 23:24:47'),
(18, 1, 3, '2024-04-21', '09:00', '11:00', '2024-04-21 07:00:00', '2024-04-21 09:00:00', 1, '50.00', '100.00', 'active', '2024-04-22 07:58:19'),
(19, 1, 4, '2024-04-22', '10:00', '12:00', '2024-04-22 08:00:00', '2024-04-22 10:00:00', 0, '0.00', '120.00', 'cancelled', '2024-04-22 07:58:19'),
(20, 2, 5, '2024-04-23', '09:00', '11:00', '2024-04-23 07:00:00', '2024-04-23 09:00:00', 1, '50.00', '100.00', 'active', '2024-04-22 07:58:19'),
(21, 2, 6, '2024-04-24', '10:00', '12:00', '2024-04-24 08:00:00', '2024-04-24 10:00:00', 0, '0.00', '120.00', 'cancelled', '2024-04-22 07:58:19'),
(22, 3, 7, '2024-04-25', '09:00', '11:00', '2024-04-25 07:00:00', '2024-04-25 09:00:00', 1, '50.00', '100.00', 'active', '2024-04-22 07:58:19'),
(23, 3, 8, '2024-04-26', '10:00', '12:00', '2024-04-26 07:00:00', '2024-04-26 09:00:00', 0, '0.00', '120.00', 'cancelled', '2024-04-22 07:58:19'),
(24, 4, 9, '2024-04-27', '09:00', '11:00', '2024-04-27 06:00:00', '2024-04-27 08:00:00', 1, '50.00', '100.00', 'active', '2024-04-22 07:58:19'),
(25, 4, 10, '2024-04-28', '10:00', '12:00', '2024-04-28 07:00:00', '2024-04-28 09:00:00', 0, '0.00', '120.00', 'cancelled', '2024-04-22 07:58:19'),
(26, 5, 11, '2024-04-29', '09:00', '11:00', '2024-04-29 06:00:00', '2024-04-29 08:00:00', 1, '50.00', '100.00', 'active', '2024-04-22 07:58:19'),
(27, 5, 12, '2024-04-30', '10:00', '12:00', '2024-04-30 07:00:00', '2024-04-30 09:00:00', 0, '0.00', '120.00', 'cancelled', '2024-04-22 07:58:19'),
(28, 6, 13, '2024-05-01', '09:00', '11:00', '2024-05-01 06:00:00', '2024-05-01 08:00:00', 1, '50.00', '100.00', 'active', '2024-04-22 07:58:19'),
(29, 6, 14, '2024-05-02', '10:00', '12:00', '2024-05-02 07:00:00', '2024-05-02 09:00:00', 0, '0.00', '120.00', 'cancelled', '2024-04-22 07:58:19'),
(30, 7, 15, '2024-05-03', '09:00', '11:00', '2024-05-03 06:00:00', '2024-05-03 08:00:00', 1, '50.00', '100.00', 'active', '2024-04-22 07:58:19'),
(31, 7, 16, '2024-05-04', '10:00', '12:00', '2024-05-04 07:00:00', '2024-05-04 09:00:00', 0, '0.00', '120.00', 'cancelled', '2024-04-22 07:58:19'),
(32, 8, 17, '2024-05-05', '09:00', '11:00', '2024-05-05 06:00:00', '2024-05-05 08:00:00', 1, '50.00', '100.00', 'active', '2024-04-22 07:58:19'),
(33, 8, 18, '2024-05-06', '10:00', '12:00', '2024-05-06 07:00:00', '2024-05-06 09:00:00', 0, '0.00', '120.00', 'cancelled', '2024-04-22 07:58:19'),
(34, 9, 19, '2024-05-07', '09:00', '11:00', '2024-05-07 06:00:00', '2024-05-07 08:00:00', 1, '50.00', '100.00', 'active', '2024-04-22 07:58:19'),
(35, 9, 20, '2024-05-08', '10:00', '12:00', '2024-05-08 07:00:00', '2024-05-08 09:00:00', 0, '0.00', '120.00', 'cancelled', '2024-04-22 07:58:19'),
(36, 10, 21, '2024-05-09', '09:00', '11:00', '2024-05-09 06:00:00', '2024-05-09 08:00:00', 1, '50.00', '100.00', 'active', '2024-04-22 07:58:19'),
(37, 10, 3, '2024-05-10', '10:00', '12:00', '2024-05-10 07:00:00', '2024-05-10 09:00:00', 0, '0.00', '120.00', 'cancelled', '2024-04-22 07:58:19'),
(38, 11, 4, '2024-05-11', '09:00', '11:00', '2024-05-11 06:00:00', '2024-05-11 08:00:00', 1, '50.00', '100.00', 'active', '2024-04-22 07:58:19'),
(39, 11, 5, '2024-05-12', '10:00', '12:00', '2024-05-12 07:00:00', '2024-05-12 09:00:00', 0, '0.00', '120.00', 'cancelled', '2024-04-22 07:58:19');

-- --------------------------------------------------------

--
-- Table structure for table `reset_passwords`
--

CREATE TABLE `reset_passwords` (
  `ID` bigint UNSIGNED NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spots`
--

CREATE TABLE `spots` (
  `SpotID` bigint UNSIGNED NOT NULL,
  `AdminID` bigint UNSIGNED NOT NULL,
  `Location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spots`
--

INSERT INTO `spots` (`SpotID`, `AdminID`, `Location`) VALUES
(1, 1, 'A1'),
(2, 1, 'A2'),
(3, 1, 'A3'),
(4, 1, 'B1'),
(5, 1, 'B2'),
(6, 1, 'Al Fanateer'),
(7, 1, 'Al Nakheel'),
(8, 1, 'Al Huwaylat'),
(9, 1, 'Al Mutlaq'),
(10, 1, 'Al Bahri'),
(11, 1, 'Al Jubail Industrial City'),
(12, 1, 'Al Fursan'),
(13, 1, 'Al Jubail Royal Commission'),
(14, 1, 'Al Sheraa'),
(15, 1, 'Al Mahd');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `VehicleID` bigint UNSIGNED NOT NULL,
  `AdminID` bigint UNSIGNED NOT NULL,
  `EmployeeID` bigint UNSIGNED DEFAULT NULL,
  `SpotID` bigint UNSIGNED NOT NULL,
  `CodNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Manufacturer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `QRCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`VehicleID`, `AdminID`, `EmployeeID`, `SpotID`, `CodNumber`, `Model`, `Type`, `Manufacturer`, `Image`, `QRCode`, `Price`) VALUES
(3, 1, NULL, 2, '4567', 'Model2', 'Type2', 'Manu2', '/uploads/dummy-slug-2024-03-13-65f2128632b75.png', '4567', 110),
(4, 1, NULL, 3, '131415', 'Model3', 'Type3', 'Manu3', '/uploads/dummy-slug-2024-03-13-65f212cc16187.webp', '131415', 120),
(5, 1, NULL, 4, '121555', 'Model4', 'Type4', 'Manu4', '/uploads/dummy-slug-2024-03-13-65f213168c2f5.webp', '135666', 90),
(6, 1, NULL, 4, '121555', 'Model4', 'Type4', 'Manu4', '/uploads/dummy-slug-2024-03-13-65f213168c2f5.webp', '135666', 90),
(7, 1, 1, 6, 'ABC123', 'Scooter Ele', 'Electric Scooter', 'Manufacturer A', '/uploads/dummy-slug-2024-03-13-65f2128632b75.png', 'QR_ABC123', 10),
(8, 1, 1, 6, 'DEF456', 'Scooter Ele', 'Electric Scooter', 'Manufacturer A', '/uploads/dummy-slug-2024-03-13-65f212cc16187.webp', 'QR_DEF456', 10),
(9, 1, 1, 6, 'GHI789', 'Scooter Ele', 'Electric Scooter', 'Manufacturer B', '/uploads/dummy-slug-2024-03-13-65f213168c2f5.webp', 'QR_GHI789', 10),
(10, 1, 1, 6, 'JKL012', 'Scooter Ele', 'Electric Scooter', 'Manufacturer B', '/uploads/dummy-slug-2024-03-13-65f213168c2f5.webp', 'QR_JKL012', 10),
(11, 1, 1, 6, 'MNO345', 'Scooter Ele', 'Electric Scooter', 'Manufacturer C', '/uploads/dummy-slug-2024-03-13-65f213168c2f5.webp', 'QR_MNO345', 10),
(12, 1, 1, 7, 'PQR678', 'Scooter Ele', 'Electric Scooter', 'Manufacturer A', '/uploads/dummy-slug-2024-03-13-65f2128632b75.png', 'QR_PQR678', 10),
(13, 1, 1, 7, 'STU901', 'Scooter Ele', 'Electric Scooter', 'Manufacturer A', '/uploads/dummy-slug-2024-03-13-65f212cc16187.webp', 'QR_STU901', 10),
(14, 1, 1, 7, 'VWX234', 'Scooter Ele', 'Electric Scooter', 'Manufacturer B', '/uploads/dummy-slug-2024-03-13-65f213168c2f5.webp', 'QR_VWX234', 10),
(15, 1, 1, 7, 'YZA567', 'Scooter Ele', 'Electric Scooter', 'Manufacturer B', '/uploads/dummy-slug-2024-03-13-65f213168c2f5.webp', 'QR_YZA567', 10),
(16, 1, 1, 7, 'BCD890', 'Scooter Ele', 'Electric Scooter', 'Manufacturer C', '/uploads/dummy-slug-2024-03-13-65f213168c2f5.webp', 'QR_BCD890', 10),
(17, 1, 1, 8, 'CDE345', 'Scooter Ele', 'Electric Scooter', 'Manufacturer A', '/uploads/dummy-slug-2024-03-13-65f2128632b75.png', 'QR_CDE345', 10),
(18, 1, 1, 8, 'EFG678', 'Scooter Ele', 'Electric Scooter', 'Manufacturer A', '/uploads/dummy-slug-2024-03-13-65f212cc16187.webp', 'QR_EFG678', 10),
(19, 1, 1, 8, 'GHI901', 'Scooter Ele', 'Electric Scooter', 'Manufacturer B', '/uploads/dummy-slug-2024-03-13-65f213168c2f5.webp', 'QR_GHI901', 10),
(20, 1, 1, 8, 'IJK234', 'Scooter Ele', 'Electric Scooter', 'Manufacturer B', '/uploads/dummy-slug-2024-03-13-65f213168c2f5.webp', 'QR_IJK234', 10),
(21, 1, 1, 8, 'KLM567', 'Scooter Ele', 'Electric Scooter', 'Manufacturer C', '/uploads/dummy-slug-2024-03-13-65f213168c2f5.webp', 'QR_KLM567', 10);

-- --------------------------------------------------------

--
-- Table structure for table `vehiclerental`
--

CREATE TABLE `vehiclerental` (
  `VehicleRentalID` bigint UNSIGNED NOT NULL,
  `RentalID` bigint UNSIGNED NOT NULL,
  `VehicleID` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehiclerental`
--

INSERT INTO `vehiclerental` (`VehicleRentalID`, `RentalID`, `VehicleID`) VALUES
(3, 3, 3),
(4, 4, 3),
(5, 5, 3),
(8, 13, 3),
(9, 13, 4),
(11, 14, 5),
(12, 15, 5),
(13, 16, 4),
(14, 17, 3),
(16, 18, 5),
(17, 19, 6),
(18, 20, 7),
(19, 21, 8),
(20, 22, 9),
(21, 23, 10),
(22, 24, 11),
(23, 25, 12),
(24, 26, 13),
(25, 27, 14),
(26, 28, 15),
(27, 29, 16),
(28, 30, 17),
(29, 31, 18),
(30, 32, 19),
(31, 33, 20),
(32, 34, 21),
(33, 35, 3),
(34, 36, 3),
(35, 37, 3),
(36, 38, 4),
(37, 39, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`),
  ADD UNIQUE KEY `admin_email_unique` (`Email`),
  ADD UNIQUE KEY `admin_phone_unique` (`Phone`);

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`AvailabilityID`),
  ADD KEY `availability_vehicleid_foreign` (`VehicleID`);

--
-- Indexes for table `canecllation`
--
ALTER TABLE `canecllation`
  ADD PRIMARY KEY (`CanecllationID`),
  ADD KEY `canecllation_rentalid_foreign` (`RentalID`);

--
-- Indexes for table `companyinformation`
--
ALTER TABLE `companyinformation`
  ADD PRIMARY KEY (`CompanyID`),
  ADD KEY `companyinformation_adminid_foreign` (`AdminID`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`ContactID`),
  ADD KEY `contact_us_adminid_foreign` (`AdminID`),
  ADD KEY `contact_us_customerid_foreign` (`CustomerID`),
  ADD KEY `contact_us_replay_foreign` (`Replay`),
  ADD KEY `contact_us_employeeid_foreign` (`EmployeeID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`),
  ADD UNIQUE KEY `customer_email_unique` (`Email`),
  ADD UNIQUE KEY `customer_phone_unique` (`Phone`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeID`),
  ADD UNIQUE KEY `employee_email_unique` (`Email`),
  ADD UNIQUE KEY `employee_phone_unique` (`Phone`),
  ADD KEY `employee_adminid_foreign` (`AdminID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedbackID`),
  ADD KEY `feedback_adminid_foreign` (`AdminID`),
  ADD KEY `feedback_customerid_foreign` (`CustomerID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`InvoiceID`),
  ADD KEY `invoice_rentalid_foreign` (`RentalID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `payment_rentalid_foreign` (`RentalID`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`RentalID`),
  ADD KEY `rental_customerid_foreign` (`CustomerID`),
  ADD KEY `rental_vehicleid_foreign` (`VehicleID`);

--
-- Indexes for table `reset_passwords`
--
ALTER TABLE `reset_passwords`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `spots`
--
ALTER TABLE `spots`
  ADD PRIMARY KEY (`SpotID`),
  ADD KEY `spots_adminid_foreign` (`AdminID`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`VehicleID`),
  ADD KEY `vehicle_adminid_foreign` (`AdminID`),
  ADD KEY `vehicle_spotid_foreign` (`SpotID`),
  ADD KEY `vehicle_employeeid_foreign` (`EmployeeID`);

--
-- Indexes for table `vehiclerental`
--
ALTER TABLE `vehiclerental`
  ADD PRIMARY KEY (`VehicleRentalID`),
  ADD KEY `vehiclerental_rentalid_foreign` (`RentalID`),
  ADD KEY `vehiclerental_vehicleid_foreign` (`VehicleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `AvailabilityID` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `canecllation`
--
ALTER TABLE `canecllation`
  MODIFY `CanecllationID` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `companyinformation`
--
ALTER TABLE `companyinformation`
  MODIFY `CompanyID` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `ContactID` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmployeeID` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackID` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `InvoiceID` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `RentalID` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `reset_passwords`
--
ALTER TABLE `reset_passwords`
  MODIFY `ID` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `spots`
--
ALTER TABLE `spots`
  MODIFY `SpotID` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `VehicleID` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `vehiclerental`
--
ALTER TABLE `vehiclerental`
  MODIFY `VehicleRentalID` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `availability`
--
ALTER TABLE `availability`
  ADD CONSTRAINT `availability_vehicleid_foreign` FOREIGN KEY (`VehicleID`) REFERENCES `vehicle` (`VehicleID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `canecllation`
--
ALTER TABLE `canecllation`
  ADD CONSTRAINT `canecllation_rentalid_foreign` FOREIGN KEY (`RentalID`) REFERENCES `rental` (`RentalID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `companyinformation`
--
ALTER TABLE `companyinformation`
  ADD CONSTRAINT `companyinformation_adminid_foreign` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD CONSTRAINT `contact_us_adminid_foreign` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contact_us_customerid_foreign` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contact_us_employeeid_foreign` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contact_us_replay_foreign` FOREIGN KEY (`Replay`) REFERENCES `contact_us` (`ContactID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_adminid_foreign` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_adminid_foreign` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedback_customerid_foreign` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_rentalid_foreign` FOREIGN KEY (`RentalID`) REFERENCES `rental` (`RentalID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_rentalid_foreign` FOREIGN KEY (`RentalID`) REFERENCES `rental` (`RentalID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rental`
--
ALTER TABLE `rental`
  ADD CONSTRAINT `rental_customerid_foreign` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rental_vehicleid_foreign` FOREIGN KEY (`VehicleID`) REFERENCES `vehicle` (`VehicleID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `spots`
--
ALTER TABLE `spots`
  ADD CONSTRAINT `spots_adminid_foreign` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_adminid_foreign` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vehicle_employeeid_foreign` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vehicle_spotid_foreign` FOREIGN KEY (`SpotID`) REFERENCES `spots` (`SpotID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehiclerental`
--
ALTER TABLE `vehiclerental`
  ADD CONSTRAINT `vehiclerental_rentalid_foreign` FOREIGN KEY (`RentalID`) REFERENCES `rental` (`RentalID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vehiclerental_vehicleid_foreign` FOREIGN KEY (`VehicleID`) REFERENCES `vehicle` (`VehicleID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
