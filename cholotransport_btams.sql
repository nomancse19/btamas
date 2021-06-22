-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 22, 2021 at 02:38 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cholotransport_btams`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_cost_category`
--

DROP TABLE IF EXISTS `account_cost_category`;
CREATE TABLE IF NOT EXISTS `account_cost_category` (
  `cost_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `cost_category_name` varchar(150) NOT NULL,
  `cost_category_added_time` datetime NOT NULL,
  `cost_category_is_active` int(11) NOT NULL,
  `cost_category_added_user_id` int(11) NOT NULL,
  PRIMARY KEY (`cost_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account_cost_category`
--

INSERT INTO `account_cost_category` (`cost_category_id`, `cost_category_name`, `cost_category_added_time`, `cost_category_is_active`, `cost_category_added_user_id`) VALUES
(1, 'Salary A/C ', '2020-12-03 18:17:58', 1, 1),
(2, 'Publicity A/C', '2020-12-03 18:20:57', 1, 1),
(3, 'Market Development A/C', '2020-12-03 18:22:04', 1, 1),
(4, 'Vomra Transport office Cost A/C', '2021-01-31 18:32:05', 1, 1),
(5, 'Market TA/DA   A/C', '2021-03-01 12:23:49', 1, 1),
(6, 'Social Donation A/C', '2021-03-01 12:25:04', 1, 1),
(7, 'Digital Marketing A/C ', '2021-03-01 12:27:42', 1, 1),
(8, 'Demurrage  A/C', '2021-03-01 12:29:01', 1, 1),
(9, 'Office Accessories A/C', '2021-03-01 12:30:11', 1, 1),
(10, 'Ashrafuzzaman Invest A/C', '2021-03-01 12:30:53', 1, 1),
(11, 'Sagor Invest A/C', '2021-03-01 12:31:06', 1, 1),
(12, 'Akkas  Invest A/C', '2021-03-01 12:31:19', 1, 1),
(13, 'Sell Device Dew Amount A/C', '2021-03-01 12:32:06', 1, 1),
(14, 'Domain Hosting A/C', '2021-03-01 12:33:26', 1, 1),
(15, 'Software Maintenance A/C', '2021-03-01 12:33:59', 1, 1),
(16, 'Office Rent , Internet ,Current & Water Bill A/C', '2021-03-01 12:37:27', 1, 1),
(17, 'Company Legal Paper Cost A/C', '2021-03-01 12:51:34', 1, 1),
(18, 'Printing Press A/C', '2021-03-01 12:55:25', 1, 1),
(19, 'Meeting Cost  A/C', '2021-03-01 12:55:58', 1, 1),
(20, 'Hotline Mobile Bill', '2021-03-01 12:57:23', 1, 1),
(21, 'Installation Tools A/C', '2021-03-01 12:59:13', 1, 1),
(22, 'Entertainment A/C ', '2021-03-01 13:01:05', 1, 1),
(23, 'Computer accessories A/C ', '2021-03-01 13:02:03', 1, 1),
(24, 'Device Buy A/C', '2021-03-01 13:04:16', 1, 1),
(25, 'Electrical Goods A/C', '2021-03-01 14:59:56', 1, 1),
(26, 'Bathroom  Accessories  A/C', '2021-03-01 15:02:33', 1, 1),
(27, 'Office stationery A/C', '2021-03-01 15:03:33', 1, 1),
(28, 'Bank , Bkash , Nagot Service Charge  A/C', '2021-03-01 15:31:14', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `account_cost_details`
--

DROP TABLE IF EXISTS `account_cost_details`;
CREATE TABLE IF NOT EXISTS `account_cost_details` (
  `cost_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `cost_details_date` date NOT NULL,
  `cost_category_id` int(11) NOT NULL,
  `cost_category_name` varchar(250) NOT NULL,
  `cost_details_name` varchar(250) DEFAULT NULL,
  `cost_details_amount` float NOT NULL,
  `cost_details_added_user_id` int(11) NOT NULL,
  `cost_details_added_date_time` datetime NOT NULL,
  PRIMARY KEY (`cost_details_id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account_cost_details`
--

INSERT INTO `account_cost_details` (`cost_details_id`, `cost_details_date`, `cost_category_id`, `cost_category_name`, `cost_details_name`, `cost_details_amount`, `cost_details_added_user_id`, `cost_details_added_date_time`) VALUES
(10, '2021-01-31', 4, 'Vomra Transport office Cost A/C', 'Trade Licence', 3500, 1, '2021-01-31 18:33:31'),
(11, '2021-01-31', 4, 'Vomra Transport office Cost A/C', 'Transport Malik Somity Licence', 15000, 1, '2021-01-31 18:34:16'),
(12, '2021-01-31', 4, 'Vomra Transport office Cost A/C', 'Car Vara Benapole - Vomra', 3000, 1, '2021-01-31 18:35:53'),
(13, '2021-01-31', 4, 'Vomra Transport office Cost A/C', 'Lunch 4 Person ', 450, 1, '2021-01-31 18:38:15'),
(14, '2021-01-31', 4, 'Vomra Transport office Cost A/C', 'Office Room Advance ( Ashraf)', 30000, 1, '2021-01-31 18:38:58'),
(15, '2021-01-28', 15, 'Software Maintenance A/C', 'Software Development Project By Senior Programmer Jahidul Islam', 120000, 1, '2021-01-28 12:49:59'),
(16, '2020-10-01', 14, 'Domain Hosting A/C', 'domain Cholotransport.com.bd BTCL', 2552, 1, '2020-10-01 12:52:41'),
(17, '2020-10-03', 17, 'Company Legal Paper Cost A/C', 'Tread License M/s Cholo transport Agency issue by akkas ', 4680, 1, '2020-10-03 12:53:55'),
(19, '2020-10-13', 15, 'Software Maintenance A/C', 'Cholo Transport bd tracking Apps by Jweel Rana', 35000, 1, '2020-10-13 13:06:09'),
(20, '2020-10-09', 3, 'Market Development A/C', 'Key Ring', 3100, 1, '2020-10-09 13:13:19'),
(21, '2020-10-06', 24, 'Device Buy A/C', '1 pics With Voice GPS Device by to Jweel Rana', 2500, 1, '2020-10-06 13:14:26'),
(22, '2020-10-10', 18, 'Printing Press A/C', 'Table Trangel Buy to Ashraful', 1000, 1, '2020-10-10 13:15:51'),
(23, '2020-10-10', 9, 'Office Accessories A/C', 'Table Chare  and Rent buy to ashrafuzzaman', 15500, 1, '2020-10-10 13:18:27'),
(24, '2020-10-12', 18, 'Printing Press A/C', 'Liflet , banner , card, ETC Print', 12612, 1, '2020-10-12 13:21:09'),
(25, '2020-10-14', 14, 'Domain Hosting A/C', 'cholotransport.com domain and hosting', 3800, 1, '2020-10-14 13:22:38'),
(26, '2020-10-15', 24, 'Device Buy A/C', 'With Voice GPS by to Ashrafuzzaman', 25000, 1, '2020-10-15 13:24:57'),
(27, '2020-10-15', 24, 'Device Buy A/C', 'without voice GPS by to Ashrafuzzaman', 11000, 1, '2020-10-15 13:25:55'),
(28, '2020-10-17', 18, 'Printing Press A/C', 'Rubber Sil 2 pics', 160, 1, '2020-10-17 14:59:22'),
(29, '2020-10-18', 25, 'Electrical Goods A/C', 'Celling Fan 2 pics ashrafuzzaman', 5300, 1, '2020-10-18 15:00:41'),
(30, '2021-03-01', 16, 'Office Rent , Internet ,Current & Water Bill A/C', 'Water Bill 7 pis pay sagor', 210, 1, '2021-03-01 15:04:45'),
(31, '2020-10-19', 26, 'Bathroom  Accessories  A/C', 'Papos and musni pay by ashrafuzzaman', 350, 1, '2020-10-19 15:06:13'),
(32, '2020-10-20', 26, 'Bathroom  Accessories  A/C', 'Handwash', 82, 1, '2020-10-20 15:06:53'),
(33, '2020-10-21', 18, 'Printing Press A/C', 'Banner Board', 920, 1, '2020-10-21 15:08:23'),
(34, '2020-10-22', 27, 'Office stationery A/C', 'File , pen, etc stationer Product', 980, 1, '2020-10-22 15:09:56'),
(35, '2020-10-23', 9, 'Office Accessories A/C', 'Tala 1 pics', 350, 1, '2020-10-23 15:10:40'),
(36, '2020-10-24', 19, 'Meeting Cost  A/C', 'Meeting nasta', 145, 1, '2020-10-24 15:11:16'),
(37, '2020-10-27', 19, 'Meeting Cost  A/C', 'Meeting Nasata', 210, 1, '2020-10-27 15:12:03'),
(38, '2020-10-26', 26, 'Bathroom  Accessories  A/C', 'Bathroom Etc ', 365, 1, '2020-10-26 15:12:41'),
(39, '2020-11-02', 7, 'Digital Marketing A/C ', 'SSL Sms Cholo group Masking', 4500, 1, '2020-11-02 15:17:57'),
(40, '2020-11-02', 27, 'Office stationery A/C', 'A4 Paper 1 ring', 270, 1, '2020-11-02 15:18:50'),
(41, '2020-11-02', 27, 'Office stationery A/C', 'Sill Pad', 90, 1, '2020-11-02 15:19:21'),
(42, '2020-11-04', 9, 'Office Accessories A/C', 'Calling bell', 400, 1, '2020-11-04 15:22:02'),
(43, '2020-11-04', 21, 'Installation Tools A/C', 'Bazar + Wire + relay ', 130, 1, '2020-11-04 15:23:24'),
(44, '2020-11-11', 18, 'Printing Press A/C', 'challan , festoon , ETC Printing Press ', 11100, 1, '2020-11-11 15:24:44'),
(45, '2020-11-11', 27, 'Office stationery A/C', 'Office File and other ', 1295, 1, '2020-11-11 15:25:37'),
(46, '2020-11-01', 16, 'Office Rent , Internet ,Current & Water Bill A/C', 'Office Room Rent', 3300, 1, '2020-11-01 15:26:48'),
(47, '2020-11-25', 23, 'Computer accessories A/C ', 'Buy A office Mobile', 16000, 1, '2020-11-25 15:27:56'),
(48, '2020-12-01', 16, 'Office Rent , Internet ,Current & Water Bill A/C', 'Office Room Rant', 3300, 1, '2020-12-01 15:29:18'),
(49, '2020-12-16', 16, 'Office Rent , Internet ,Current & Water Bill A/C', 'internet bill', 500, 1, '2020-12-16 15:29:52'),
(50, '2020-12-31', 28, 'Bank , Bkash , Nagot Service Charge  A/C', 'AB bank service yearly ', 1000, 1, '2020-12-31 15:32:00'),
(51, '2021-01-01', 16, 'Office Rent , Internet ,Current & Water Bill A/C', 'Office room Rant', 3300, 1, '2021-01-01 15:33:06'),
(52, '2021-01-01', 16, 'Office Rent , Internet ,Current & Water Bill A/C', 'Office internet bill', 800, 1, '2021-01-01 15:33:28'),
(53, '2021-01-09', 16, 'Office Rent , Internet ,Current & Water Bill A/C', 'Office current bill', 863, 1, '2021-01-09 15:34:02'),
(54, '2021-01-01', 18, 'Printing Press A/C', 'GPS Transport Banner', 1000, 1, '2021-01-01 15:34:44'),
(55, '2021-01-06', 21, 'Installation Tools A/C', 'New Installation Tools', 1000, 1, '2021-01-06 15:35:26'),
(56, '2021-01-31', 16, 'Office Rent , Internet ,Current & Water Bill A/C', 'Water Bill 7 jar', 210, 1, '2021-01-31 15:36:00'),
(57, '2021-02-02', 27, 'Office stationery A/C', 'A4 Paper 1 ring', 260, 1, '2021-02-02 18:51:07'),
(58, '2021-02-07', 21, 'Installation Tools A/C', 'T Tools', 120, 1, '2021-02-07 18:52:42'),
(59, '2021-02-10', 23, 'Computer accessories A/C ', 'Mouse', 250, 1, '2021-02-10 18:57:23'),
(60, '2021-02-10', 16, 'Office Rent , Internet ,Current & Water Bill A/C', 'internet bill', 800, 1, '2021-02-10 18:58:46'),
(61, '2021-02-10', 21, 'Installation Tools A/C', '6v battery and charger ', 430, 1, '2021-02-10 19:00:27'),
(62, '2021-02-15', 16, 'Office Rent , Internet ,Current & Water Bill A/C', 'New  internet line Service cost ', 1100, 1, '2021-02-15 19:02:27'),
(63, '2021-02-22', 27, 'Office stationery A/C', 'Marker Pen 4 pics', 100, 1, '2021-02-22 19:03:16'),
(64, '2021-02-01', 16, 'Office Rent , Internet ,Current & Water Bill A/C', 'Office room rent', 3300, 1, '2021-02-01 19:05:39'),
(65, '2021-02-05', 20, 'Hotline Mobile Bill', 'Mobile internet and voice Bill', 500, 1, '2021-02-05 19:12:53'),
(66, '2021-02-25', 21, 'Installation Tools A/C', 'multimeter', 400, 1, '2021-02-25 19:14:31'),
(67, '2020-11-23', 24, 'Device Buy A/C', 'Brand Device 250 Pics', 380000, 1, '2020-11-23 19:18:12'),
(68, '2020-11-01', 16, 'Office Rent , Internet ,Current & Water Bill A/C', 'Water Kit bill', 300, 1, '2020-11-01 19:20:41'),
(69, '2020-11-09', 24, 'Device Buy A/C', 'Non Brand Device Not sure how much pics', 29000, 1, '2020-11-09 19:26:02'),
(70, '2021-03-02', 27, 'Office stationery A/C', 'A4 PAPER 1Rim', 260, 4, '2021-03-02 09:08:59'),
(71, '2021-03-04', 14, 'Domain Hosting A/C', 'Hosting bill 3 month pay by ashrafuzzaman', 1740, 1, '2021-03-04 23:27:03'),
(72, '2021-03-07', 1, 'Salary A/C ', 'Amit Khumer Biswas', 6000, 1, '2021-03-07 14:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `account_income_category`
--

DROP TABLE IF EXISTS `account_income_category`;
CREATE TABLE IF NOT EXISTS `account_income_category` (
  `income_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `income_category_name` varchar(350) NOT NULL,
  `income_category_is_active` int(11) NOT NULL,
  `income_category_added_time` datetime NOT NULL,
  `income_category_added_user_id` int(11) NOT NULL,
  PRIMARY KEY (`income_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account_income_category`
--

INSERT INTO `account_income_category` (`income_category_id`, `income_category_name`, `income_category_is_active`, `income_category_added_time`, `income_category_added_user_id`) VALUES
(1, 'Office Tracker Device Sell A/C ', 1, '2020-11-16 19:16:37', 1),
(2, 'Chalan A/C ', 1, '2020-11-16 19:18:15', 1),
(3, 'Entertainment A/C', 0, '2020-12-01 12:09:30', 1),
(4, 'Device Sell', 0, '2021-01-13 16:22:40', 1),
(5, 'GPS Monthly  Bill collection', 1, '2021-01-31 18:42:25', 1),
(6, 'Dealer Tracker Device Sell A/C', 1, '2021-03-01 12:22:25', 1),
(7, 'Service Charge A/C', 1, '2021-03-01 12:38:02', 1),
(8, 'Dealer Device installation Charge A/C', 1, '2021-03-01 12:39:26', 1),
(9, 'Setup Service Charge A/C', 1, '2021-03-07 17:46:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `account_income_details`
--

DROP TABLE IF EXISTS `account_income_details`;
CREATE TABLE IF NOT EXISTS `account_income_details` (
  `income_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `chalan_info_id` int(11) DEFAULT NULL,
  `income_details_date` date NOT NULL,
  `income_category_id` int(11) NOT NULL,
  `income_category_name` varchar(400) NOT NULL,
  `income_details_name` varchar(300) DEFAULT NULL,
  `income_details_id_no` varchar(300) DEFAULT NULL,
  `income_details_name_number` varchar(250) DEFAULT NULL,
  `income_details_original_amount` float NOT NULL,
  `income_details_sell_amount` float NOT NULL,
  `income_details_due_amount` float NOT NULL DEFAULT '0',
  `income_details_due_paid_amount` float DEFAULT '0',
  `income_details_is_profit` int(11) NOT NULL,
  `income_details_added_by` varchar(150) NOT NULL DEFAULT 'auto',
  `income_details_due_paid_status` int(11) NOT NULL,
  `income_details_due_status` varchar(100) NOT NULL,
  `income_details_added_user_id` int(11) NOT NULL,
  `income_details_added_date_time` datetime NOT NULL,
  PRIMARY KEY (`income_details_id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account_income_details`
--

INSERT INTO `account_income_details` (`income_details_id`, `chalan_info_id`, `income_details_date`, `income_category_id`, `income_category_name`, `income_details_name`, `income_details_id_no`, `income_details_name_number`, `income_details_original_amount`, `income_details_sell_amount`, `income_details_due_amount`, `income_details_due_paid_amount`, `income_details_is_profit`, `income_details_added_by`, `income_details_due_paid_status`, `income_details_due_status`, `income_details_added_user_id`, `income_details_added_date_time`) VALUES
(1, NULL, '2020-11-17', 1, 'Tracker Device Sell A/C', NULL, NULL, NULL, 2500, 3500, 0, 0, 0, 'auto', 0, 'paid', 1, '2020-11-17 01:00:41'),
(3, 10, '2020-11-19', 2, 'Chalan A/C', NULL, 'CT1000000000105425445last23dfgdgdfgdfgdfgdfg', NULL, 0, 4525, 0, 2250, 0, 'auto', 1, 'oldduepaid', 1, '2020-11-19 00:31:49'),
(4, 9, '2020-11-29', 2, 'Chalan A/C', NULL, 'CT100000000009', NULL, 0, 0, 0, 2448, 0, 'auto', 1, 'oldduepaid', 1, '2020-11-29 06:48:30'),
(6, 4, '2020-11-29', 2, 'Chalan A/C', NULL, 'CT100000000004', NULL, 0, 0, 0, 25000, 0, 'auto', 1, 'oldduepaid', 1, '2020-11-29 06:48:46'),
(7, NULL, '2020-11-17', 1, 'Tracker Device Sell A/C', NULL, NULL, NULL, 2500, 3500, 0, 0, 0, 'auto', 0, 'paid', 1, '2020-11-17 01:00:41'),
(8, NULL, '2020-11-17', 1, 'Tracker Device Sell A/C', NULL, NULL, NULL, 2500, 3500, 0, 0, 0, 'auto', 0, 'paid', 1, '2020-11-17 01:00:41'),
(10, NULL, '2020-11-17', 1, 'Tracker Device Sell A/C', NULL, NULL, NULL, 2500, 3500, 0, 0, 0, 'auto', 0, 'paid', 1, '2020-11-17 01:00:41'),
(11, NULL, '2020-11-17', 1, 'Tracker Device Sell A/C', NULL, NULL, NULL, 2500, 3500, 0, 0, 0, 'auto', 0, 'paid', 1, '2020-11-17 01:00:41'),
(12, NULL, '2020-11-17', 1, 'Tracker Device Sell A/C', NULL, NULL, NULL, 2500, 3500, 0, 0, 0, 'auto', 0, 'paid', 1, '2020-11-17 01:00:41'),
(13, NULL, '2020-11-17', 1, 'Tracker Device Sell A/C', NULL, NULL, NULL, 2500, 3500, 0, 0, 0, 'auto', 0, 'paid', 1, '2020-11-17 01:00:41'),
(14, NULL, '2020-11-17', 1, 'Tracker Device Sell A/C', NULL, NULL, NULL, 2500, 3500, 0, 0, 0, 'auto', 0, 'paid', 1, '2020-11-17 01:00:41'),
(15, NULL, '2020-12-01', 1, 'Tracker Device Sell A/C ', 'Imran Hossain', NULL, NULL, 500, 1500, 0, 0, 1, 'auto', 0, 'paid', 1, '2020-12-01 19:59:57'),
(20, NULL, '2020-12-02', 3, 'Entertainment A/C', 'dfsafs', NULL, NULL, 45, 454, 0, 0, 1, 'auto', 0, 'paid', 1, '2020-12-02 20:39:32'),
(21, 8, '2020-12-10', 2, 'Chalan A/C', NULL, 'CT100000000008', NULL, 0, 0, 0, 2000, 0, 'auto', 1, 'oldduepaid', 1, '2020-12-10 12:40:06'),
(22, 6, '2020-12-10', 2, 'Chalan A/C', NULL, 'CT100000000006', NULL, 0, 0, 0, 25000, 0, 'auto', 1, 'oldduepaid', 1, '2020-12-10 12:40:55'),
(23, 5, '2020-12-10', 2, 'Chalan A/C', NULL, 'CT100000000005', NULL, 0, 0, 0, 12500, 0, 'auto', 1, 'oldduepaid', 1, '2020-12-10 14:28:06'),
(24, 2, '2020-12-16', 2, 'Chalan A/C', NULL, 'CT100000000002', NULL, 0, 0, 0, 1458, 0, 'auto', 1, 'oldduepaid', 1, '2020-12-16 18:15:05'),
(25, 12, '2020-12-22', 2, 'Chalan A/C', 'Noman Khan', 'CT100000000012', '01890931354', 20000, 25000, 10000, 0, 1, 'auto', 0, 'due', 1, '2020-12-22 13:37:51'),
(26, 12, '2020-12-22', 2, 'Chalan A/C', NULL, 'CT100000000012', NULL, 0, 0, 0, 10000, 0, 'auto', 1, 'oldduepaid', 1, '2020-12-22 13:44:45'),
(27, 3, '2020-12-23', 2, 'Chalan A/C', NULL, 'CT100000000003', NULL, 0, 0, 0, 25000, 0, 'auto', 1, 'oldduepaid', 1, '2020-12-23 01:15:21'),
(28, 13, '2021-01-13', 2, 'Chalan A/C', 'Noman Khan', 'CT100000000013', '01890931354', 16500, 18500, 13500, 0, 1, 'auto', 0, 'due', 1, '2021-01-13 15:52:25'),
(30, 13, '2021-01-18', 2, 'Chalan A/C', NULL, 'CT100000000013', NULL, 0, 0, 0, 13500, 0, 'auto', 1, 'oldduepaid', 1, '2021-01-18 21:51:31'),
(31, NULL, '2020-11-01', 1, 'Tracker Device Sell A/C ', 'Rakib  Namaj Gram , Benapole', NULL, NULL, 2260, 3500, 0, 0, 1, 'manual', 0, 'paid', 1, '2020-11-01 20:25:47'),
(32, NULL, '2020-11-01', 1, 'Tracker Device Sell A/C ', 'Khalid hasan ,narionpur, benapole', NULL, NULL, 2260, 3500, 0, 0, 1, 'manual', 0, 'paid', 1, '2020-11-01 20:47:57'),
(33, NULL, '2020-11-07', 1, 'Tracker Device Sell A/C ', 'Majarul islam ,, Bagaachara , sharsha', NULL, NULL, 2260, 3500, 0, 0, 1, 'manual', 0, 'paid', 1, '2020-11-07 20:50:45'),
(34, NULL, '2020-11-07', 1, 'Tracker Device Sell A/C ', 'Abdus salam, Bagachara , Sharasha', NULL, NULL, 2260, 3500, 0, 0, 1, 'manual', 0, 'paid', 1, '2020-11-07 20:51:28'),
(35, NULL, '2020-11-07', 1, 'Tracker Device Sell A/C ', 'Liton Hosan , Nowapara , Jashore', NULL, NULL, 2260, 3000, 0, 0, 1, 'manual', 0, 'paid', 1, '2020-11-07 20:58:36'),
(36, NULL, '2020-11-08', 1, 'Tracker Device Sell A/C ', 'Mukul hosan jobber ,Gatipara , Benapole', NULL, NULL, 2260, 3300, 0, 0, 1, 'manual', 0, 'paid', 1, '2020-11-08 21:14:09'),
(37, NULL, '2020-11-14', 1, 'Tracker Device Sell A/C ', 'Towfik Anam , Kotchadpur ,model thana', NULL, NULL, 2260, 3500, 0, 0, 1, 'manual', 0, 'paid', 1, '2020-11-14 21:16:39'),
(38, NULL, '2020-11-17', 1, 'Tracker Device Sell A/C ', 'Amin ,Mohaspur', NULL, NULL, 2260, 3500, 0, 0, 1, 'manual', 0, 'paid', 1, '2020-11-17 21:19:02'),
(39, NULL, '2020-11-23', 1, 'Tracker Device Sell A/C ', 'Hider , Durgapur , Benapole  3 Pics Device', NULL, NULL, 6780, 8400, 0, 0, 1, 'manual', 0, 'paid', 1, '2020-11-23 21:21:51'),
(40, NULL, '2020-11-29', 1, 'Tracker Device Sell A/C ', 'Hasanuzzaman , Navaron', NULL, NULL, 2260, 3000, 0, 0, 1, 'manual', 0, 'paid', 1, '2020-11-29 21:23:09'),
(41, NULL, '2020-11-29', 1, 'Tracker Device Sell A/C ', 'Rahain Faruk , Navaron', NULL, NULL, 2260, 3000, 0, 0, 1, 'manual', 0, 'paid', 1, '2020-11-29 21:24:12'),
(42, NULL, '2020-12-01', 1, 'Tracker Device Sell A/C ', 'Md . Mukul , Durgapur , Benapole', NULL, NULL, 4520, 5600, 0, 0, 1, 'manual', 0, 'paid', 1, '2020-12-01 21:27:13'),
(43, NULL, '2020-12-01', 1, 'Tracker Device Sell A/C ', 'Md. Najmul , Gotkhali', NULL, NULL, 2260, 3000, 0, 0, 1, 'manual', 0, 'paid', 1, '2020-12-01 21:29:16'),
(44, NULL, '2020-12-01', 1, 'Tracker Device Sell A/C ', ' Sakib Hossain , bawerkanda', NULL, NULL, 2260, 3000, 0, 0, 1, 'manual', 0, 'paid', 1, '2020-12-01 21:35:53'),
(45, NULL, '2020-12-07', 1, 'Tracker Device Sell A/C ', 'Mofijur Rohoman , Durgapur , Benapole', NULL, NULL, 2260, 3000, 0, 0, 1, 'manual', 0, 'paid', 1, '2020-12-07 21:40:05'),
(46, NULL, '2020-12-17', 1, 'Tracker Device Sell A/C ', 'Mosiwar rohoman , choto Achara , Benapole', NULL, NULL, 2260, 2800, 0, 0, 1, 'manual', 0, 'paid', 1, '2020-12-17 21:43:46'),
(48, NULL, '2020-12-17', 1, 'Tracker Device Sell A/C ', 'Md . Zia , Namaj Gram , Benapole', NULL, NULL, 2260, 2800, 0, 0, 1, 'manual', 0, 'paid', 1, '2020-12-17 21:44:49'),
(49, NULL, '2020-12-25', 1, 'Tracker Device Sell A/C ', 'Mahabubul alom sawot paikpara , mirpur ( OC Police )', NULL, NULL, 2260, 3500, 0, 0, 1, 'manual', 0, 'paid', 1, '2020-12-25 21:46:18'),
(50, NULL, '2021-01-06', 1, 'Tracker Device Sell A/C ', 'Bepul Kumer Day,  RN Road , Jashore', NULL, NULL, 2260, 3000, 0, 0, 1, 'manual', 0, 'paid', 1, '2021-01-06 18:47:06'),
(51, NULL, '2021-01-10', 1, 'Tracker Device Sell A/C ', 'Sumon , Benapole ', NULL, NULL, 2260, 3000, 0, 0, 1, 'manual', 0, 'paid', 1, '2021-01-10 18:47:45'),
(52, NULL, '2021-01-15', 1, 'Tracker Device Sell A/C ', 'Maruf Hossain , Newmarket , Jashore', NULL, NULL, 2260, 3000, 0, 0, 1, 'manual', 0, 'paid', 1, '2021-01-15 18:48:40'),
(53, NULL, '2021-01-20', 1, 'Tracker Device Sell A/C ', 'Shilpy Benapole', NULL, NULL, 2260, 3000, 0, 0, 1, 'manual', 0, 'paid', 1, '2021-01-20 18:49:58'),
(54, NULL, '2021-01-30', 1, 'Tracker Device Sell A/C ', 'Rose Rojoni &lt; Baday Navaron', NULL, NULL, 2260, 3500, 0, 0, 1, 'manual', 0, 'paid', 1, '2021-01-30 18:52:39'),
(55, 14, '2021-02-03', 2, 'Chalan A/C', 'ইমপালস ইঞ্জিনিয়ারিং ও পাওয়ার লি :  ,গাজীপুর চৌরাস্তা, গাজীপুর।', 'CT100000000014', '01711223345', 20000, 23000, 18000, 0, 0, 'auto', 0, 'due', 1, '2021-02-03 21:27:38'),
(56, NULL, '2021-02-07', 1, 'Tracker Device Sell A/C ', 'Maruf Hossain , Newmarket , Jashore', NULL, NULL, 2260, 3000, 0, 0, 1, 'manual', 0, 'paid', 1, '2021-02-07 00:19:33'),
(57, NULL, '2021-02-14', 1, 'Tracker Device Sell A/C ', 'md Azim ( Transport head)', NULL, NULL, 2260, 2500, 0, 0, 1, 'manual', 0, 'paid', 1, '2021-02-14 13:28:09'),
(59, NULL, '2021-02-10', 1, 'Office Tracker Device Sell A/C ', 'Alamgir , Matikumra 01700812085', NULL, NULL, 2260, 3000, 0, 0, 1, 'manual', 0, 'paid', 1, '2021-02-10 19:31:23'),
(60, NULL, '2021-02-16', 1, 'Office Tracker Device Sell A/C ', 'joinal abadin - sharsha -013219656580', NULL, NULL, 2260, 3300, 0, 0, 1, 'manual', 0, 'paid', 1, '2021-02-16 19:33:18'),
(61, NULL, '2021-02-27', 6, 'Dealer Tracker Device Sell A/C', 'id-743103 Mizanur rahaman  ,khulna - 01913662299', NULL, NULL, 2260, 3000, 0, 0, 1, 'manual', 0, 'paid', 1, '2021-02-27 19:37:31'),
(63, NULL, '2021-02-28', 6, 'Dealer Tracker Device Sell A/C', 'id - 743100 shorif hossain - 01718608555', NULL, NULL, 2260, 3000, 0, 0, 1, 'manual', 0, 'paid', 1, '2021-02-28 19:40:14'),
(64, NULL, '2021-03-02', 6, 'Dealer Tracker Device Sell A/C', 'id 743131 moshiar rahaman', NULL, NULL, 2260, 3000, 0, 0, 1, 'manual', 0, 'paid', 4, '2021-03-02 09:15:12'),
(65, NULL, '2021-03-06', 6, 'Dealer Tracker Device Sell A/C', 'ID: 945001 Ashraf', NULL, NULL, 9040, 12000, 0, 0, 1, 'manual', 0, 'paid', 1, '2021-03-06 13:37:04'),
(66, NULL, '2021-03-07', 1, 'Office Tracker Device Sell A/C ', 'Md. Shahin Shak , shatkhira mor uttor burujbagan', NULL, NULL, 2260, 3000, 0, 0, 1, 'manual', 0, 'paid', 1, '2021-03-07 13:38:19'),
(67, NULL, '2021-03-07', 9, 'Setup Service Charge A/C', 'Collected by Akkas ali ', NULL, NULL, 200, 200, 0, 0, 1, 'manual', 0, 'paid', 1, '2021-03-07 17:47:10');

-- --------------------------------------------------------

--
-- Table structure for table `all_normal_user_log`
--

DROP TABLE IF EXISTS `all_normal_user_log`;
CREATE TABLE IF NOT EXISTS `all_normal_user_log` (
  `normal_user_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(350) NOT NULL,
  `user_name` varchar(350) NOT NULL,
  `user_number` varchar(350) CHARACTER SET utf8 NOT NULL,
  `user_login_time` datetime DEFAULT NULL,
  `user_logout_time` datetime DEFAULT NULL,
  `user_ip_address` varchar(350) DEFAULT NULL,
  `user_browser` varchar(350) DEFAULT NULL,
  `user_location` varchar(350) DEFAULT NULL,
  `user_country` varchar(150) DEFAULT NULL,
  `user_city` varchar(150) DEFAULT NULL,
  `user_region` varchar(150) DEFAULT NULL,
  `user_log_added_time` datetime NOT NULL,
  PRIMARY KEY (`normal_user_log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `all_user_account_request`
--

DROP TABLE IF EXISTS `all_user_account_request`;
CREATE TABLE IF NOT EXISTS `all_user_account_request` (
  `all_user_account_request_id` int(11) NOT NULL AUTO_INCREMENT,
  `all_user_account_request_name` varchar(300) NOT NULL,
  `all_user_account_request_number` varchar(100) NOT NULL,
  `all_user_account_request_address` text NOT NULL,
  `all_user_account_request_created_date` datetime NOT NULL,
  PRIMARY KEY (`all_user_account_request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `all_user_account_request`
--

INSERT INTO `all_user_account_request` (`all_user_account_request_id`, `all_user_account_request_name`, `all_user_account_request_number`, `all_user_account_request_address`, `all_user_account_request_created_date`) VALUES
(14, 'Animesh ', '07439554581', 'Rishra', '2021-02-22 23:10:34'),
(15, 'imran hossen asha', '01993980075', 'baropota.benapole', '2021-02-24 23:23:48'),
(16, 'N M Abdullah ', '01777869128', 'House: (NIBIR) 114 Crescent Road, Kolabagan, Dhaka- 1205, Bangladesh', '2021-03-06 22:00:23'),
(17, 'imran hossen asha ', '01993980075', 'baropota.benapole.shrsha.jessore.Khulna.', '2021-03-08 14:07:25'),
(18, 'SUFAL ADHIKARI', '08001066992', 'Desh Travels\r\nPetrapole Checkpost', '2021-03-16 16:03:31'),
(19, 'Md Raju ahmed', '01962386862', 'Thakurgaon', '2021-03-20 22:15:19'),
(22, 'MD.Rana Ahmed', '01785300006', 'sirajgonj\r\n', '2021-03-22 11:20:18'),
(23, 'Sheikh Rasel Ahamed', '01868928344', 'Madarsah Road, Jugia, Kushtia', '2021-03-28 19:38:09'),
(25, 'Subrata Mal', '07001184431', 'Murarai Sobji Market', '2021-04-04 13:03:38'),
(26, 'Md torikulislam  ', '01645250523', 'Jatrabari,Dhaka', '2021-05-04 17:03:01'),
(27, 'Zakir Hossain ', '00880172249', '452 West rampura. Dhaka ', '2021-05-13 01:10:52'),
(28, 'Zakir Hossain ', '01722498625', '452. West rampura. Dhaka ', '2021-05-13 01:11:55'),
(29, 'Arijit Mukherjee', '08902469373', 'Sukantanagar, 2nd Sarani\r\nMichaelnagar, Madhyamgram', '2021-05-15 15:44:04'),
(30, 'Prasanta Saha Himel', '01713590849', 'Joynagor netrakona', '2021-05-24 10:56:00'),
(31, 'Prasanta Saha Himel', '01713590849', 'Joynagor Netrakona', '2021-05-24 11:00:30'),
(32, 'shah alam', '01625738290', '10 dilkusha', '2021-05-25 12:58:37'),
(33, 'MD Sharif Mullah', '01316993921', 'Joynagar,SHIBPUR,Narsingdi', '2021-06-01 10:29:00'),
(34, 'MD Sharif Mullah', '01316993921', 'Joynagar SHIBPUR Narsingdi', '2021-06-01 10:33:00'),
(35, 'GHFGHFGH', '01524524545', 'FGHFHGFHH', '2021-06-13 15:08:03'),
(36, 'asd', '00000000000', 'kj', '2021-06-16 13:31:33'),
(37, 'vsagfas', '12345678900', 'csafas', '2021-06-16 13:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `all_vehicles_request`
--

DROP TABLE IF EXISTS `all_vehicles_request`;
CREATE TABLE IF NOT EXISTS `all_vehicles_request` (
  `vehicles_request_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicles_request_user_name` varchar(350) NOT NULL,
  `vehicles_request_user_number` varchar(350) NOT NULL,
  `vehicles_request_status` int(11) NOT NULL DEFAULT '0',
  `vehicles_request_some_note` text NOT NULL,
  `vehicles_request_user_id` int(11) DEFAULT NULL,
  `vehicles_request_user_type` varchar(300) NOT NULL,
  `vehicles_request_created_date` datetime NOT NULL,
  PRIMARY KEY (`vehicles_request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `all_vehicles_request`
--

INSERT INTO `all_vehicles_request` (`vehicles_request_id`, `vehicles_request_user_name`, `vehicles_request_user_number`, `vehicles_request_status`, `vehicles_request_some_note`, `vehicles_request_user_id`, `vehicles_request_user_type`, `vehicles_request_created_date`) VALUES
(1, 'Jahidul Islam', '01772068908', 4, 'Need A Track vndfsd fg dfgdfgdfng dfg dfg dfgdfgdfgdfng dfngdfng dfndg dfg dfngdfng dfng dfgnfd gndf g ', 1, 'cnf', '2020-10-21 12:34:09'),
(2, 'Jahidul Islam', '01772068908', 4, '', 1, 'cnf', '2020-10-21 12:35:13'),
(3, 'Jahidul Islam', '01772068908', 4, '', 1, 'cnf', '2020-10-21 12:35:15'),
(4, 'Jahidul Islam', '01772068908', 4, '', 1, 'cnf', '2020-10-21 12:40:18'),
(5, 'Jahidul Islam', '01772068908', 4, '', 1, 'cnf', '2020-10-21 12:40:20'),
(6, 'Jahidul Islam', '01772068908', 4, 'dfg', 1, 'cnf', '2020-10-21 12:40:22'),
(7, 'Jahidul Islam', '01772068908', 4, '', 1, 'cnf', '2020-10-21 12:40:22'),
(8, 'Noman Khan', '01890931354', 4, 'hjsadfsafs dmf sf sf sdf sdfsd nfmws fsdf sdfmsf sf sfsf sf sf sf sfsfjsfs fnsfjsnfew rjrf werwerjwrjwerjwjerwerwerwer', 1, 'importer', '2020-10-29 11:22:50'),
(9, 'Jahidul Islam', '01772068908', 4, '', 1, 'cnf', '2020-11-06 12:12:31'),
(10, 'Jahidul Islam', '01772068908', 4, 'uiuu', 1, 'cnf', '2020-11-06 12:12:34'),
(11, 'Ariful Islam ', '01764842617', 4, 'asdasd', 2, 'importer', '2020-12-09 20:07:22'),
(12, 'Ariful Islam ', '01764842617', 4, 'adsasdasd', 2, 'importer', '2020-12-09 20:07:25'),
(13, 'Ariful Islam ', '01764842617', 4, 'asdasdasd', 2, 'importer', '2020-12-09 20:07:30'),
(14, 'Jahidul Islam', '01772068908', 4, 'SDFSDF', 1, 'cnf', '2020-12-10 10:28:34'),
(15, 'sdfdsfsdff', '4545455', 4, 'sdafsdfsdf', NULL, 'main_site', '2020-12-16 17:54:41'),
(16, 'Mr. Gonesh Mondol', '01524525452', 4, 'dfsgbdsnf sdbn fsdbn fsdbn fnsdb fsdf sdb fsfbi sdbf', NULL, 'main_site', '2020-12-16 18:09:35'),
(17, 'SDsdads', '456445', 4, 'asdadsad', NULL, 'main_site', '2020-12-16 18:16:44'),
(18, 'Mr. Rezwan', '01772068955', 4, 'sadfbhas fbas abd abs anbsd sanbd asnd asnbd abnd anbd abnsd asnbd ahsdagjsdad ad ad adgadahdbabhadas dadad adbajdad ad ajd adabd ad abd ad adh adj ada dja dja dahd adad ad ahd ajd ad ad ajd ahdad ad adjas dja fgadswdbvahf afdas', NULL, 'main_site', '2020-12-16 18:48:05'),
(19, 'Ashraf', '01999052999', 4, 'Benapole', NULL, 'main_site', '2020-12-23 00:20:31'),
(20, 'Je', '01999052999', 4, 'Ok', NULL, 'main_site', '2020-12-23 00:24:51'),
(21, 'Farhan', '01799588418', 4, 'Mograpara,Sonargoan ', NULL, 'main_site', '2020-12-31 20:11:00'),
(22, 'Prasanta mandal', '09126207686', 4, 'Bankura', NULL, 'main_site', '2021-01-02 16:25:24'),
(23, 'Manash patra', '91973280736', 4, 'N', NULL, 'main_site', '2021-01-06 18:59:21'),
(24, 'M/S Soma Tread International', '01731234992', 4, 'Akkas amer 2 ta truck lagba duruto babosta koro', 4, 'cnf', '2021-01-13 15:29:45'),
(25, 'Md Tasrif Hossain', '01316485090', 4, 'keshabpur,jeshore', NULL, 'main_site', '2021-01-28 21:10:37'),
(26, 'ইমপালস ইঞ্জিনিয়ারিং ও পাওয়ার লি :  ,গাজীপুর চৌরাস্তা, গাজীপুর।', '01711223345', 4, 'বেনাপোল থেকে ৫ টা ট্রাক লাগবে। \r\nবেনাপোল থেকে গাজীপুর আসবে।', 3, 'importer', '2021-02-04 11:24:21'),
(27, 'অনিক  ইন্টারন্যাশনাল', '00000000000', 4, '5 ta truck lagba', 6, 'cnf', '2021-02-05 20:25:52'),
(28, 'Sharif', '01521242126', 4, 'as\r\n', NULL, 'main_site', '2021-02-07 23:14:34'),
(29, 'Md.Mozammel Haque ', '01793300090', 0, 'A-89 Savar Prime Hospital ', NULL, 'main_site', '2021-02-12 08:43:47'),
(30, 'রাসমা এজেন্সি', '01711338187', 1, 'sadasjk da 56 rter', 762, 'cnf', '2021-02-22 11:51:41'),
(31, 'Sefaat Ahammad', '01842455944', 0, 'Bashundhara Dhaka', NULL, 'main_site', '2021-03-10 17:04:26'),
(32, 'রিমন ট্রেডিং লিঃ ', '01713917388', 4, '', 758, 'cnf', '2021-03-23 15:25:10'),
(33, 'রিমন ট্রেডিং লিঃ ', '01713917388', 0, 'dkaka jaba 10 ton mal', 758, 'cnf', '2021-03-23 15:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `chalan_info`
--

DROP TABLE IF EXISTS `chalan_info`;
CREATE TABLE IF NOT EXISTS `chalan_info` (
  `chalan_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `chalan_be_no_c` varchar(400) DEFAULT NULL,
  `chalan_be_no_c_date` date DEFAULT NULL,
  `chalan_lc_no` varchar(300) DEFAULT NULL,
  `chalan_lc_no_date` date DEFAULT NULL,
  `chalan_no` varchar(350) NOT NULL,
  `chalan_no_barcode_image_name` varchar(350) NOT NULL,
  `chalan_date` datetime DEFAULT NULL,
  `chalan_importer_name` varchar(300) DEFAULT NULL,
  `chalan_exporter_name` varchar(350) DEFAULT NULL,
  `chalan_ac_no` varchar(400) DEFAULT NULL,
  `chalan_extra_ac_no` varchar(400) DEFAULT NULL,
  `chalan_vehicles_no` varchar(300) NOT NULL,
  `vehicles_gps_tracking_id` varchar(400) NOT NULL,
  `chalan_driver_name` varchar(400) NOT NULL,
  `chalan_driver_license_no` varchar(400) NOT NULL,
  `chalan_cnf_name` varchar(400) NOT NULL,
  `chalan_vehicles_owner_address` varchar(400) NOT NULL,
  `chalan_vehicles_owner_phone_number` varchar(400) DEFAULT NULL,
  `chalan_scoter_name` varchar(300) DEFAULT NULL,
  `chalan_scoter_number` varchar(300) DEFAULT NULL,
  `chalan_driver_card_no` varchar(300) NOT NULL,
  `chalan_target_location` varchar(300) DEFAULT NULL,
  `chalan_silgala_no` varchar(400) DEFAULT NULL,
  `chalan_product_sign` text,
  `chalan_product_quantity` text,
  `chalan_product_description` text,
  `chalan_vehicles_original_rent` float DEFAULT NULL,
  `chalan_vehicles_chalan_rent` float NOT NULL,
  `chalan_vehicles_party_rent` float DEFAULT NULL,
  `chalan_vehicles_party_advance_rent` float DEFAULT NULL,
  `chalan_vehicles_party_due_rent` float DEFAULT NULL,
  `chalan_vehicles_rent_advance_amount` float NOT NULL,
  `chalan_vehicles_rent_due_amount` float NOT NULL,
  `chalan_vehicles_driver_rec_due_amount` float DEFAULT NULL,
  `chalan_status` int(11) DEFAULT '0',
  `chalan_payment_status` int(11) NOT NULL,
  `cnf_info_id` int(11) NOT NULL,
  `importer_info_id` int(11) DEFAULT NULL,
  `exporter_info_id` int(11) DEFAULT NULL,
  `vehicles_info_id` int(11) DEFAULT NULL,
  `vehicles_owner_id` int(11) DEFAULT NULL,
  `driver_info_id` int(11) DEFAULT NULL,
  `chalan_created_date` datetime NOT NULL,
  PRIMARY KEY (`chalan_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chalan_info`
--

INSERT INTO `chalan_info` (`chalan_info_id`, `chalan_be_no_c`, `chalan_be_no_c_date`, `chalan_lc_no`, `chalan_lc_no_date`, `chalan_no`, `chalan_no_barcode_image_name`, `chalan_date`, `chalan_importer_name`, `chalan_exporter_name`, `chalan_ac_no`, `chalan_extra_ac_no`, `chalan_vehicles_no`, `vehicles_gps_tracking_id`, `chalan_driver_name`, `chalan_driver_license_no`, `chalan_cnf_name`, `chalan_vehicles_owner_address`, `chalan_vehicles_owner_phone_number`, `chalan_scoter_name`, `chalan_scoter_number`, `chalan_driver_card_no`, `chalan_target_location`, `chalan_silgala_no`, `chalan_product_sign`, `chalan_product_quantity`, `chalan_product_description`, `chalan_vehicles_original_rent`, `chalan_vehicles_chalan_rent`, `chalan_vehicles_party_rent`, `chalan_vehicles_party_advance_rent`, `chalan_vehicles_party_due_rent`, `chalan_vehicles_rent_advance_amount`, `chalan_vehicles_rent_due_amount`, `chalan_vehicles_driver_rec_due_amount`, `chalan_status`, `chalan_payment_status`, `cnf_info_id`, `importer_info_id`, `exporter_info_id`, `vehicles_info_id`, `vehicles_owner_id`, `driver_info_id`, `chalan_created_date`) VALUES
(2, '4154', '2020-11-01', '4145', '2020-11-01', 'CT100000000002', 'images/chalan_bar_code/CT100000000002.png', '2020-11-01 00:00:00', 'Noman Khan', '', '12544154', NULL, 'DHAKA-METRO-GHA-120-05', 'sd65f4sd6f4s6', 'Jahid Khan', '546656', 'Jahidul Islam', 'Jahidul Islam Noman,', '01521451354', 'Anowar', NULL, '9896565', 'Dhaka', '565656', '', '1.dfknsjsdfdsfsd\r\n2.djgdjgndgdfg\r\n3.jhfgsjfsf ', 'dfgdfggdgdggdgdfgdgdgdgdfgdgdgddfgdfgdbb dgg ', 0, 25000, NULL, NULL, NULL, 23542, 1458, 1458, 2, 1, 1, 1, NULL, 1, 1, 1, '2020-11-01 02:04:09'),
(3, '4154', '2020-11-01', '4145', '2020-11-01', 'CT100000000003', 'images/chalan_bar_code/CT100000000003.png', '2020-11-01 00:00:00', 'Noman Khan', '', '12544154', NULL, 'DHAKA-METRO-GHA-120-05', 'sd65f4sd6f4s6', 'Jahid Khan', '546656', 'Jahidul Islam', 'Jahidul Islam Noman,', '01521451354', 'Anowar', NULL, '9896565', 'Dhaka', '565656', '', '1.dfknsjsdfdsfsd\r\n2.djgdjgndgdfg\r\n3.jhfgsjfsf ', 'dfgdfggdgdggdgdfgdgdgdgdfgdgdgddfgdfgdbb dgg ', 0, 25000, NULL, NULL, NULL, 125000, 25000, 0, 2, 1, 1, 1, NULL, 1, 1, 1, '2020-11-01 02:17:59'),
(4, '4154', '2020-11-01', '4145', '2020-11-01', 'CT100000000004', 'images/chalan_bar_code/CT100000000004.png', '2020-11-01 00:00:00', 'Noman Khan', '', '12544154', NULL, 'DHAKA-METRO-GHA-120-05', 'sd65f4sd6f4s6', 'Jahid Khan', '546656', 'Jahidul Islam', 'Jahidul Islam Noman,', '01521451354', 'Anowar', NULL, '9896565', 'Dhaka', '565656', '', '1.dfknsjsdfdsfsd\r\n2.djgdjgndgdfg\r\n3.jhfgsjfsf ', 'dfgdfggdgdggdgdfgdgdgdgdfgdgdgddfgdfgdbb dgg ', 0, 25000, NULL, NULL, NULL, 125000, 25000, 0, 2, 1, 1, 1, NULL, 1, 1, 1, '2020-11-01 02:18:05'),
(5, '4154', '2020-11-01', '4145', '2020-11-01', 'CT100000000005', 'images/chalan_bar_code/CT100000000005.png', '2020-11-01 00:00:00', 'Noman Khan', '', '12544154', NULL, 'DHAKA-METRO-GHA-120-05', 'sd65f4sd6f4s6', 'Jahid Khan', '546656', 'Jahidul Islam', 'Jahidul Islam Noman,', '01521451354', 'Anowar', NULL, '9896565', 'Dhaka', '565656', 'wrffsdfdsfsfsfssfsffsdfsdfsf', '1.dfknsjsdfdsfsd\r\n2.djgdjgndgdfg\r\n3.jhfgsjfsf ', 'dfgdfggdgdggdgdfgdgdgdgdfgdgdgddfgdfgdbb dgg ', 0, 25000, NULL, NULL, NULL, 12500, 12500, 12500, 2, 1, 1, 1, NULL, 1, 1, 1, '2020-11-01 02:18:09'),
(6, '4154', '2020-11-01', '4145', '2020-11-01', 'CT100000000006', 'images/chalan_bar_code/CT100000000006.png', '2020-11-01 00:00:00', 'Noman Khan', '', '12544154', NULL, 'DHAKA-METRO-GHA-120-05', 'sd65f4sd6f4s6', 'Jahid Khan', '546656', 'Jahidul Islam', 'Jahidul Islam Noman,', '01521451354', 'Anowar', NULL, '9896565', 'Dhaka', '565656', '', '1.dfknsjsdfdsfsd\r\n2.djgdjgndgdfg\r\n3.jhfgsjfsf ', 'dfgdfggdgdggdgdfgdgdgdgdfgdgdgddfgdfgdbb dgg ', 0, 25000, NULL, NULL, NULL, 125000, 25000, 0, 2, 1, 1, 1, NULL, 1, 1, 1, '2020-11-01 02:18:53'),
(7, '4154', '2020-11-01', '4145', '2020-11-01', 'CT100000000007', 'images/chalan_bar_code/CT100000000007.png', '2020-11-01 00:00:00', 'Noman Khan', '', '12544154', NULL, 'DHAKA-METRO-GHA-120-05', 'sd65f4sd6f4s6', 'Jahid Khan', '546656', 'Jahidul Islam', 'Jahidul Islam Noman,', '01521451354', 'Anowar', NULL, '9896565', 'Dhaka', '565656', '', '1.dfknsjsdfdsfsd\r\n2.djgdjgndgdfg\r\n3.jhfgsjfsf ', 'dfgdfggdgdggdgdfgdgdgdgdfgdgdgddfgdfgdbb dgg ', 0, 25000, NULL, NULL, NULL, 125000, 25000, 0, 2, 1, 1, 1, NULL, 1, 1, 1, '2020-11-01 02:19:02'),
(8, 'SDFSDFSDF', '2020-11-08', 'SDFSDFSDF', '2020-11-08', 'CT100000000008', 'images/chalan_bar_code/CT100000000008.png', '2020-11-08 00:00:00', 'Ariful Islam ', '', 'SFSDFSDFSDFSDFSDFSDFSDF', NULL, 'DHAKA-METRO-GHA-120-05', 'sd65f4sd6f4s6', 'Jahid Khan', '546656', 'Jahidul Islam', 'Jahidul Islam Noman,', '01521451354', 'SDFSDFSDF', NULL, '9896565', 'Dhaka,Chakbazar', '', 'dfgdg', ' dfgdfgdfgdfgdf', ' dfgdfgdfgfdg', 0, 2500, NULL, NULL, NULL, 500, 2000, 2000, 2, 1, 1, 2, NULL, 1, 1, 1, '2020-11-08 21:21:13'),
(9, 'sdfsd', '2020-11-08', 'fsfsfsfsf', '2020-11-08', 'CT100000000009', 'images/chalan_bar_code/CT100000000009.png', '2020-11-08 00:00:00', 'Ariful Islam ', '', 'sdfsdfsfsfs', NULL, 'DHAKA-METRO-GHA-120-05', 'sd65f4sd6f4s6', 'Jahid Khan', '546656', 'Jahidul Islam', 'Jahidul Islam Noman,', '01521451354', '', NULL, '9896565', 'Dhaka,Chakbazar', '', '', ' ', ' ', 0, 2500, NULL, NULL, NULL, 52, 2448, 2448, 2, 1, 1, 2, NULL, 1, 1, 1, '2020-11-08 21:27:05'),
(10, 'sdfsdf', '2020-11-08', 'sdfsdfsdf', '2020-11-08', 'CT100000000010', 'images/chalan_bar_code/CT100000000010.png', '2020-11-08 00:00:00', 'Ariful Islam ', '', 'sdfsdfsdfsdfs', NULL, 'DHAKA-METRO-GHA-120-05', 'sd65f4sd6f4s6', 'Jahid Khan', '546656', 'Jahidul Islam', 'Jahidul Islam Noman,', '01521451354', 'dfgdfgfd', NULL, '9896565', 'Dhaka,Chakbazar', '', '', ' ', ' ', 25, 2500, NULL, NULL, NULL, 250, 2250, 2250, 2, 1, 1, 2, NULL, 1, 1, 1, '2020-11-08 21:28:29'),
(11, 'sdfsd', '2020-11-08', 'fsfsfsfsf', '2020-11-08', 'CT100000000011', 'images/chalan_bar_code/CT100000000011.png', '2020-11-08 00:00:00', 'Ariful Islam ', '', 'ADFfasdasdas', NULL, 'DHAKA-METRO-GHA-120-05', '358657100631956', 'Jahid Khan', '546656', 'Jahidul Islam', 'Jahidul Islam Noman,', '01521451354', 'asdfasas', NULL, '9896565', 'Dhaka,Chakbazar', '', '', ' ', ' ', 0, 2500, NULL, NULL, NULL, 252, 2248, 2248, 2, 1, 1, 2, NULL, 1, 1, 1, '2020-11-08 21:36:05'),
(12, 'sfggfdg', '2020-12-22', 'dfgdfgdfg', '2020-12-22', 'CT100000000012', 'images/chalan_bar_code/CT100000000012.png', '2020-12-22 00:00:00', 'Noman Khan', '', 'dfgdf', 'gdfgfdgfdgdgdgdg', 'Jessore Metro ga-12-25', '65965656565', 'New Driver', '5665', 'Araft Ahmed', 'Mr Tramp,jdfnnsf sdnf snf sfsndf sdf', '01772068908', 'dfgdfgfdg', NULL, 'hjgjgj', 'gdfgdfgd', 'dfgd', 'fgdfgdf', 'gdfgdfgdfg', 'dfgdfgdfgdfgfdg', 20000, 25000, NULL, NULL, NULL, 15000, 10000, 10000, 2, 1, 3, 1, NULL, 2, 2, 2, '2020-12-22 13:37:50'),
(13, '25222523352', '2021-01-13', '363556556969', '2021-01-13', 'CT100000000013', 'images/chalan_bar_code/CT100000000013.png', '2021-01-13 00:00:00', 'Noman Khan', '', 'VD455255222D252222121', '', 'Probox Truck', '358657100635643', 'Manik', '45522522522321', 'M/S Soma Tread International', 'MD syfuzzaman Manik,Navaron', '01940277027', 'Akkas', NULL, '362', 'Gazipur , Dhaka', '15', '২৫ পিচ্  বড় ড্রাম ', '১৫০০ লিটার তেল ', 'চলো ট্রান্সপোর্ট  জিপিএস ট্র্যাকার সর্বদা গ্রাহক সন্তুষ্টি এবং পণ্যগুলির বৈশিষ্ট্যগুলিতে ফোকাস করে।২৫ পিচ্  বড় ড্রাম ১৫০০ লিটার তেল', 16500, 18500, NULL, NULL, NULL, 5000, 13500, 13500, 2, 1, 4, 1, NULL, 4, 4, 3, '2021-01-13 15:52:22'),
(14, '২৩৫৩৯', '2021-02-02', '', '2021-02-03', 'CT100000000014', 'images/chalan_bar_code/CT100000000014.png', '2021-02-03 00:00:00', 'ইমপালস ইঞ্জিনিয়ারিং ও পাওয়ার লি :  ,গাজীপুর চৌরাস্তা, গাজীপুর।', '', '', '', 'ডেমো মেট্রো ট -১৮৫৬৫২', '359510081969391', 'আফতাবুজ্জামান', '১৯৯৮৫৮৫৫৫২৩২', 'মেসার্স ডেমো ইন্টারন্যাশনাল , স্থল-বন্দর, বেনাপোল।', 'মোহাম্মদ আলী হোসেন,  বেনাপোল দুর্গাপুর রোড , শার্শা ,যশোর।', '01711223347', 'মোহাম্মদ সুমন হোসেন', NULL, '১৩৫২', 'গাজীপুর চৌরাস্তা, গাজীপুর।', '৩০৫৯৯৩', 'Lock (305993)', '           ১৫০ গ্রাম মাত্র', '                          বিলিচিং পাউডার', 20000, 23000, NULL, NULL, NULL, 5000, 18000, 18000, 1, 0, 5, 3, NULL, 5, 5, 4, '2021-02-03 21:27:36');

-- --------------------------------------------------------

--
-- Table structure for table `chalan_product_sign_images`
--

DROP TABLE IF EXISTS `chalan_product_sign_images`;
CREATE TABLE IF NOT EXISTS `chalan_product_sign_images` (
  `chalan_product_sign_images_id` int(11) NOT NULL,
  `chalan_info_id` int(11) NOT NULL,
  `chalan_product_sign_images_name` varchar(400) NOT NULL,
  `chalan_product_sign_subtitle` varchar(400) NOT NULL,
  `chalan_product_sign_images_created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `choose_us`
--

DROP TABLE IF EXISTS `choose_us`;
CREATE TABLE IF NOT EXISTS `choose_us` (
  `choose_us_id` int(11) NOT NULL AUTO_INCREMENT,
  `choose_us_box_top_article` varchar(350) DEFAULT NULL,
  `choose_us_box_bottom_articles` varchar(350) DEFAULT NULL,
  `choose_us_is_active` int(11) NOT NULL,
  `choose_us_added_user_id` int(11) NOT NULL,
  `choose_us_added_time` datetime NOT NULL,
  PRIMARY KEY (`choose_us_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `choose_us`
--

INSERT INTO `choose_us` (`choose_us_id`, `choose_us_box_top_article`, `choose_us_box_bottom_articles`, `choose_us_is_active`, `choose_us_added_user_id`, `choose_us_added_time`) VALUES
(10, '615+', ' ট্রান্সপোর্ট মালিক', 1, 0, '2021-06-15 23:17:06'),
(11, '10+', 'পরিষদ', 1, 0, '2021-06-15 23:18:35'),
(12, '2200+', 'প্রতিদিন গাড়ি লোড', 1, 0, '2021-06-15 23:19:34'),
(13, '560+', 'প্রতিদিন গাড়ি আনলোড', 1, 0, '2021-06-15 23:20:53'),
(14, '11200 Taka+', 'মাসিক আদায়', 1, 0, '2021-06-15 23:24:26'),
(15, '50,00000 লক্ষ +', 'রাজস্ব', 1, 0, '2021-06-15 23:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `choose_us_head`
--

DROP TABLE IF EXISTS `choose_us_head`;
CREATE TABLE IF NOT EXISTS `choose_us_head` (
  `choose_us_head_id` int(11) NOT NULL AUTO_INCREMENT,
  `choose_us_head` text NOT NULL,
  `choose_us_article` text NOT NULL,
  `choose_us_image` varchar(300) NOT NULL,
  PRIMARY KEY (`choose_us_head_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `choose_us_head`
--

INSERT INTO `choose_us_head` (`choose_us_head_id`, `choose_us_head`, `choose_us_article`, `choose_us_image`) VALUES
(1, 'এক নজরে বেনাপোল ট্রান্সপোর্ট এজেন্সি মালিক সমিতি', '', 'images/choose_us/c71df4b90f6572866c6b31813ea69560.png');

-- --------------------------------------------------------

--
-- Table structure for table `cnf_info`
--

DROP TABLE IF EXISTS `cnf_info`;
CREATE TABLE IF NOT EXISTS `cnf_info` (
  `cnf_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `cnf_full_name` varchar(300) NOT NULL,
  `cnf_address` varchar(300) NOT NULL,
  `cnf_email_address` varchar(200) DEFAULT NULL,
  `cnf_primary_mobile_number` varchar(200) NOT NULL,
  `cnf_op1_mobile_number` varchar(200) DEFAULT NULL,
  `cnf_op2_mobile_number` varchar(200) DEFAULT NULL,
  `cnf_user_name` varchar(200) DEFAULT NULL,
  `cnf_user_password` varchar(350) DEFAULT NULL,
  `cnf_nid_number` varchar(300) DEFAULT NULL,
  `cnf_nid_card_front_side_image` varchar(300) DEFAULT NULL,
  `cnf_nid_card_back_side_image` varchar(300) DEFAULT NULL,
  `cnf_profile_photo` varchar(300) DEFAULT NULL,
  `cnf_is_active` tinyint(4) NOT NULL,
  `cnf_is_flash_notification` int(11) DEFAULT '0',
  `cnf_is_normal_notification` int(11) DEFAULT '0',
  `flash_notification_id` int(11) DEFAULT NULL,
  `normal_notification_id` int(11) DEFAULT NULL,
  `cnf_info_created_date` datetime NOT NULL,
  `cnf_created_user_id` int(11) NOT NULL,
  PRIMARY KEY (`cnf_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=763 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cnf_info`
--

INSERT INTO `cnf_info` (`cnf_info_id`, `cnf_full_name`, `cnf_address`, `cnf_email_address`, `cnf_primary_mobile_number`, `cnf_op1_mobile_number`, `cnf_op2_mobile_number`, `cnf_user_name`, `cnf_user_password`, `cnf_nid_number`, `cnf_nid_card_front_side_image`, `cnf_nid_card_back_side_image`, `cnf_profile_photo`, `cnf_is_active`, `cnf_is_flash_notification`, `cnf_is_normal_notification`, `flash_notification_id`, `normal_notification_id`, `cnf_info_created_date`, `cnf_created_user_id`) VALUES
(1, 'Jahidul Islam', '', '', '01772068908', '', '', '', '12345', '', '', '', '', 1, 0, 0, NULL, NULL, '2020-10-17 21:14:13', 1),
(2, 'shakil ahmed', '', 'asdasd@asdasd.com', '01521451354', '', '', '', '12345', '', '', '', '', 1, 0, 0, NULL, NULL, '2020-12-06 11:38:11', 1),
(3, 'Araft Ahmed', 'adssadasd', 'asdasd@asdasd.comads', '01890931354', '', '', '', '12345', '', '', '', '', 1, 0, 0, NULL, NULL, '2020-12-06 11:39:22', 1),
(4, 'M/S Soma Tread International', 'Durgapur Road , Benapole ', 'somatrede@gmail.com', '01731234992', '', '', 'sumatread@cholotransport.com', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-01-13 15:26:58', 1),
(5, 'মেসার্স ডেমো ইন্টারন্যাশনাল , স্থল-বন্দর, বেনাপোল।', 'স্থল-বন্দর, বেনাপোল', 'cnfdemo@gmail.com', '01711223344', '', '', 'cnfdemo@gmail.com', '123456', '1234567891234', '', '', '', 1, 1, 1, 4, 3, '2021-02-03 00:47:29', 1),
(6, 'অনিক  ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf01@gmail.com', '00000000000', '', '', '', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-05 19:31:02', 1),
(7, 'অরিন এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf02@gmail.com', '01711820421', '', '', 'Mahamud Hasan', '1234565', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-05 19:34:17', 1),
(8, 'অরোরা ট্রেড ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf03@gmail.com', '01711387311', '', '', 'Abdus Samad', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-05 19:35:25', 1),
(9, 'অগ্রদূত ট্রেডার্স লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf04@gmail.com', '01711588220', '', '', 'CERI Susanto das Bappy', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-05 19:36:41', 1),
(10, 'অমর ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf05@gmail.com', '01819313277', '', '', 'CERI Mehier Boron Nuth', '1234556', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-05 19:41:45', 1),
(11, 'অৎতা এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf06@gmail.com', '01713030020', '', '', 'Captant A K M Hafizur Rohoman', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-05 19:45:25', 1),
(12, 'অনন্যা অ্যাসোসিয়েট', 'স্থল-বন্দর, বেনাপোল', 'cnf07@gmail.com', '00000000001', '', '', 'Md Torikul Islam', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-05 19:47:24', 1),
(13, 'অথৈ ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf08@gmail.com', '01740945645', '', '', 'Md Mosiwer Rohoman', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-05 19:48:35', 1),
(14, 'অর্ণব এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf09@gmail.com', '01711236930', '', '', 'Md amadur Rohoman Babu', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-05 20:22:12', 1),
(15, 'অনি এন্ড মুন এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf11@gmail.com', '02900003312', '', '', 'Afroza chowduri', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-05 20:30:13', 1),
(16, 'অন্তা এন্টারপ্রাইজ প্রাইভেট লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf12@gmail.com', '01931984087', '', '', 'Md. Jumman Ali', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-05 20:33:43', 1),
(17, 'আব্দুল হক এন্ড সন্স', 'স্থল-বন্দর, বেনাপোল', 'cnf13@gmail.com', '01711369500', '', '', 'amadul hoq lota', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-05 20:36:01', 1),
(18, 'আব্দুল হোসেন এজেন্সি লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf14@gmail.com', '01924184338', '', '', 'Al amin  hossain', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-05 20:38:20', 1),
(19, 'আলী কদর', 'স্থল-বন্দর, বেনাপোল', 'cnf15@gmail.com', '01711541517', '', '', 'ইসরামুল কদর বাবলু ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 21:57:25', 1),
(20, 'আব্দুল হোসেন এন্ড সন্স', 'স্থল-বন্দর, বেনাপোল', 'cnf16@gmail.com', '01717864754', '', '', 'মোঃ আব্দুল হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 21:59:19', 1),
(21, 'আমজাদ এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf17@gmail.com', '01711814187', '', '', 'আলহাজ্ব আমজাদ আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:02:17', 1),
(22, 'আলাউদ্দিন', 'স্থল-বন্দর, বেনাপোল', 'cnf18@gmail.com', '0171436250', '', '', 'আলাউদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:04:21', 1),
(23, 'আজাদ এজেন্সি', 'স্থল-বন্দর, বেনাপোল', 'cnf19@gmail.com', '01726908504', '', '', 'আব্দুল কালাম আজাদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:05:56', 1),
(24, 'আলভী কমার্শিয়াল এজেন্সি লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf20@gmail.com', '01711121223', '', '', 'মোহাম্মদ আলাউদ্দিন চৌধুরী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:08:39', 1),
(25, 'আরিফ ট্রেড ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf21@gmail.com', '01710210135', '', '', 'মোহাম্মদ ফিরোজ মিয়া', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:11:11', 1),
(26, 'আশা এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf22@gmail.com', '01710448387', '', '', 'মোহাম্মদ মিজানুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:12:18', 1),
(27, 'অনিকা এন্টারপ্রাইজ এজেন্সি', 'স্থল-বন্দর, বেনাপোল', 'cnf23@gmail.com', '01818357575', '', '', 'মোহাম্মদ সালাউদ্দিন সরকার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:13:25', 1),
(28, 'আল মোস্তফা এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf24@gmail.com', '01974036279', '', '', 'মোহাম্মদ আব্দুল ওয়াদুদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:16:01', 1),
(29, 'আনোয়ার হোসেন ', 'স্থল-বন্দর, বেনাপোল', 'cnf25@gmail.com', '01711358373', '', '', 'মোহাম্মদ আনোয়ার হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:17:38', 1),
(30, 'আলম এন্ড সন্স', 'স্থল-বন্দর, বেনাপোল', 'cnf26@gmail.com', '01711308875', '', '', 'আলহাজ্ব নুর আলম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:18:34', 1),
(31, 'আমানত এন্টারপ্রাইজ লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf27@gmail.com', '01711820081', '', '', 'মোঃ শাহাদাত হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:25:30', 1),
(32, 'আলম এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf28@gmail.com', '01711217295', '', '', 'আলহাজ্ব এস এম আলম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:27:51', 1),
(33, 'আর কে এন্টারপ্রাইজ লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf29@gmail.com', '01819130408', '', '', 'মোঃ জাহাঙ্গীর হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:29:20', 1),
(34, 'আলম ট্রেডার্স', 'স্থল-বন্দর, বেনাপোল', 'cnf30@gmail.com', '01911353885', '', '', 'মোঃ শামসুল আলম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:30:36', 1),
(35, 'আলম ট্রেডিং ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf31@gmail.com', '01912205550', '', '', 'মোঃ শাহ আলম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:32:49', 1),
(36, 'আলম ব্রাদার্স', 'স্থল-বন্দর, বেনাপোল', 'cnf32@gmail.com', '01711340132', '', '', 'মোঃ রবিউল আলম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:34:35', 1),
(37, 'আর ইসলাম এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf33@gmail.com', '01711843798', '', '', 'মোঃ রফিকুল ইসলাম', '1234566', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:35:27', 1),
(38, 'আজাদ কিলিয়ারফোর্ড এজেন্সি', 'স্থল-বন্দর, বেনাপোল', 'cnf34@gmail.com', '01711047174', '', '', 'মোঃ নুরুজ্জামান খোকন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:37:51', 1),
(39, 'রাখী এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf601@gmail.com', '01715287200', '', '', 'আলহাজ সারওয়ার হোসেন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:38:49', 1),
(40, 'আলেহা ট্রেডিং', 'স্থল-বন্দর, বেনাপোল', 'cnf35@gmail.com', '11212222221', '', '', 'মোঃ আহসান কবীর চৌধুরী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:39:28', 1),
(41, 'রহমান এন্ড সন্স', 'স্থল-বন্দর, বেনাপোল', 'cnf602@gmail.com', '01711309607', '', '', 'মোঃ গোলাম হায়দার', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:41:08', 1),
(42, 'আর টি কর্পোরেশন', 'স্থল-বন্দর, বেনাপোল', 'cnf36@gmail.com', '01715149558', '', '', 'মোঃ রবিউল্লাহ ভূঁইয়া', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:42:07', 1),
(43, 'রুমা ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf603@gmail.com', '01711185210', '', '', 'আব্দুর রহমান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:42:27', 1),
(44, 'আজাদ ট্রেডার্স ', 'স্থল-বন্দর, বেনাপোল', 'cnf37@gmail.com', '01713079185', '', '', 'এম এ রশিদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:43:22', 1),
(45, 'রহমান এন্ড আহমেদ ব্রাদার্স', 'স্থল-বন্দর ,বেনাপোল', 'cnf604@gmail.com', '01719311447', '', '', 'চৌধুরী সেলিম উদ্দিন দুলু', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:43:44', 1),
(46, 'রাশা ট্রেড এন্টারপ্রাইজেস লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf605@gmail.com', '01790696969', '', '', 'খন্দকার ছারাইদ সাহরিয়ার', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:44:53', 1),
(47, 'আজাহার অ্যান্ড কোঃ', 'স্থল-বন্দর, বেনাপোল', 'cnf38@gmail.com', '01819217012', '', '', 'এস এম আজহারুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:45:49', 1),
(48, 'রানা এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf606@gmail.com', '01711741794', '', '', ' মোঃ শাহাবুদ্দিন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:46:17', 1),
(49, 'আয়েশা এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf39@gmail.com', '01712765372', '', '', 'মোহাম্মদ নূর আলম শিপন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:47:07', 1),
(50, 'আমেনা এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf40@gmail.com', '01931853752', '', '', 'মিসেস আমিনা বেগম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:48:25', 1),
(51, 'রয়্যাল বিজনেস মিডিয়া', 'স্থল-বন্দর ,বেনাপোল', 'cnf607@gmail.com', '01715086865', '', '', 'আব্দুল কাদের শিকদার', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:49:30', 1),
(52, 'আব্দুর রউফ এজেন্সি লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf41@gmail.com', '01917210148', '', '', 'আলহাজ্ব আবদুর রউফ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:49:47', 1),
(53, 'আমিনুদ্দিন ট্রেডার্স লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf42@gmail.com', '01705577194', '', '', 'মিজানুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:50:53', 1),
(54, 'রাদ এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf608@gmail.com', '01711822756', '', '', 'শেখ সামছুজ্জোহা', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:50:58', 1),
(55, 'আনুকা ইমপ্লেক্স', 'স্থল-বন্দর, বেনাপোল', 'cnf43@gmail.com', '01711169626', '', '', 'মোহাম্মদ নুরুল আলম স্বপন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:54:35', 1),
(56, 'আব্দুর রহমান', 'স্থল-বন্দর, বেনাপোল', 'cnf44@gmail.com', '01711534305', '', '', 'শামসুন্নাহার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:55:34', 1),
(57, 'রুপদান কর্পোরেশন', 'স্থল-বন্দর ,বেনাপোল', 'cnf609@gmail.com', '01711545044', '', '', 'এ কে এম মোস্তফা সেলিম', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:55:38', 1),
(58, 'আর এন ট্রেডার্স ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf45@gmail.com', '01711524328', '', '', 'মোঃ আলমগীর হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:56:55', 1),
(59, 'রুপালী ট্রেডার্স', 'স্থল-বন্দর ,বেনাপোল', 'cnf610@gmail.com', '00031630269', '', '', 'মোঃ জাকির হোসেন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:57:08', 1),
(60, 'আশরাফ এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf46@gmail.com', '01552433605', '', '', 'মোহাম্মদ আশরাফ আলী মুন্সী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:58:09', 1),
(61, 'রাজধানী ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf611@gmail.com', '01716518851', '', '', 'মোঃ আবুল হোসেন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:58:12', 1),
(62, 'আনমন এজেন্সি', 'স্থল-বন্দর, বেনাপোল', 'cnf47@gmail.com', '01711350046', '', '', 'মোঃ কামরুজ্জামান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:59:06', 1),
(63, 'রিয়াংকা ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf612@gmail.com', '01711665749', '', '', 'বাবু রতন কৃষ্ণ হালদার', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 22:59:37', 1),
(64, 'রায় ট্রেড ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf613@gmail.com', '01711338574', '', '', 'বাবু পরিমল কুমার রায়', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:00:57', 1),
(65, 'আজমির ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf48@gmail.com', '01711823172', '', '', 'মোঃ আব্দুল তাহের', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:01:21', 1),
(66, 'আনোয়ার এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf49@gmail.com', '01711822804', '', '', 'কাজী আনোয়ার উদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:02:44', 1),
(67, 'রিলায়েন্স ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf614@gmail.com', '029550278', '', '', 'মোঃ আব্দুস সামাদ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:03:15', 1),
(68, 'আপন ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf50@gmail.com', '01918056672', '', '', 'মোহাম্মদ আইয়ুব হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:03:37', 1),
(69, 'আহাদ এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf51@gmail.com', '01715044029', '', '', 'মোঃ আব্দুল আহাদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:04:29', 1),
(70, 'রহমান ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf615@gmail.com', '01818826346', '', '', 'আব্দুল ওয়াদুদ সিদ্দিক', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:04:34', 1),
(71, 'রিজু এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf616@gmail.com', '01711965478', '', '', 'মোঃ আবু মুছা', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:05:22', 1),
(72, 'আকাশ এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf52@gmail.com', '01712062191', '', '', 'মোঃ শাহাবুদ্দিন আহমেদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:05:24', 1),
(73, 'রিনা এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf617@gmail.com', '01711540734', '', '', 'এ কে এম রফিকুল ইসলাম', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:06:08', 1),
(74, 'আবিদ এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf53@gmail.com', '01711879972', '', '', ' শেখ আবিদ হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:06:21', 1),
(75, ' দি কমার্শিয়াল অ্যাসোসিয়েট ', 'বেনাপোল ,স্থলবন্দর', 'cnf401@gmail.com', '01711449916', '', '', 'রাজিয়া সুলতানা', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:06:45', 4),
(76, 'রাফি এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf618@gmail.com', '01711347916', '', '', 'মোঃ রবিউল ইসলাম', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:07:15', 1),
(77, 'আগা ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf54@gmail.com', '01711523317', '', '', 'Add Please', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:07:19', 1),
(78, 'রুপম শিপিং লাইন্স', 'স্থল-বন্দর ,বেনাপোল', 'cnf619@gmail.com', '01711355984', '', '', 'মোঃ মাজহারুল ইসলাম হাওলাদার', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:08:10', 1),
(79, 'আল-নূর এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf55@gmail.com', '01711617595', '', '', 'এ কে এম নূর হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:08:12', 1),
(80, 'অরণি এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf56@gmail.com', '01711027564', '', '', 'মোহাম্মদ আব্দুল আল মামুন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:09:21', 1),
(81, 'রুপসা সি এন্ড এফ লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf620@gmail.com', '01711896682', '', '', 'মোঃ এমদাদ হোসেন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:09:36', 1),
(82, 'দি গ্রীন ওয়ার্ল্ড প্যারাডাইস', 'বেনাপোল ,স্থলবন্দর', 'cnf402@gmail.com', '01711246516', '', '', 'আজিবর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:09:45', 4),
(83, 'আউলিয়া এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf57@gmail.com', '01917512018', '', '', 'মোঃ তৌহিদুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:10:29', 1),
(84, 'রাইসা এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf621@gmail.com', '01712260935', '', '', 'মোঃ ফারুক মৃধা', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:11:11', 1),
(85, 'আলামিন সিন্ডিকেট ', 'স্থল-বন্দর, বেনাপোল', 'cnf58@gmail.com', '01716107580', '', '', 'মোঃ ফারুক হোসেন সরদার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:11:18', 1),
(86, 'আবেদিন এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf59@gmail.com', '01711153740', '', '', 'মোঃ মফিজুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:12:07', 1),
(87, 'রাবেয়া এন্ড সন্স', 'স্থল-বন্দর ,বেনাপোল', 'cnf622@gmail.com', '01711947076', '', '', 'আলহাজ্ব মোঃ জালাল উদ্দিন', '11111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:12:27', 1),
(88, 'আবু জাফর এন্ড সন্স ', 'স্থল-বন্দর, বেনাপোল', 'cnf60@gmail.com', '01711189051', '', '', 'মোহাম্মদ আবু জাফর', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:13:03', 1),
(89, 'রুপা এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf623@gmail.com', '01711150336', '', '', 'মোঃ আওলাদ হোসেন', '11111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:13:37', 1),
(90, 'আল মামুন এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf61@gmail.com', '01711561543', '', '', 'মোঃ মাহবুবুর রহমান খান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:13:45', 1),
(91, 'রুপালী ইন্টারন্যাশনাল লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf624@gmail.com', '01712050920', '', '', 'মোঃ আসাদুজ্জামান আশা', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:14:47', 1),
(92, 'আল- আফসার ট্রেডার্স', 'স্থল-বন্দর, বেনাপোল', 'cnf62@gmail.com', '029551336', '', '', 'মোহাম্মদ বদরুজ্জামান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:14:58', 1),
(93, 'আবু তালেব এন্ড সন্স', 'স্থল-বন্দর, বেনাপোল', 'cnf63@gmail.com', '01714503150', '', '', 'আলহাজ্ব আবু তালেব', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:15:45', 1),
(94, 'রোজ ভ্যালী ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf625@gmail.com', '01711841541', '', '', 'রনধীর বড়ুয়া', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:16:08', 1),
(95, 'দ্রুতি ইন্টারন্যাশনাল', 'বেনাপোল ,স্থলবন্দর', 'cnf403@gmail.com', '01710666400', '', '', 'মোজাফফর আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:16:11', 4),
(96, 'আকাশ ট্রেড ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf64@gmail.com', '01711189091', '', '', 'মোসলেম উদ্দিন আহমেদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:17:05', 1),
(97, 'আলেয়া এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf65@gmail.com', '01733967164', '', '', 'জনাবা আলেয়া রাজ্জাক', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:19:03', 1),
(98, 'এস এ এফ ইন্টারন্যাশনাল', 'বেনাপোল ,স্থলবন্দর', 'cnf201@gmail.com', '01711942521', '', '', 'আলহাজ্ব নাসির উদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:24:17', 4),
(99, 'এম এ কার্গো সার্ভিস', 'বেনাপোল ,স্থলবন্দর', 'cnf202@gmail.com', '01711522488', '', '', 'মোঃ আব্দুল মালে', 'Jcs002255.,.,.', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:25:44', 4),
(100, 'আলাদিন', 'স্থল-বন্দর, বেনাপোল', 'cnf66@gmail.com', '01711328114', '', '', 'মোঃ জহির উদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:26:09', 1),
(101, 'এম আর বি বিজনেস এসোসিয়েশন', 'বেনাপোল ,স্থলবন্দর', 'cnf203@gmail.com', '01711193770', '', '', 'মোঃ মোশারফ হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:27:25', 4),
(102, 'আখরি  ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf67@gmail.com', '01711526305', '', '', 'আব্দুল হক', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:27:46', 1),
(103, 'আল মেঘনা ট্রেডিং প্রা: লি:', 'স্থল-বন্দর, বেনাপোল', 'cnf68@gmail.com', '01711827840', '', '', 'আলাউদ্দিন আহমেদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:29:10', 1),
(104, 'এম ভি ট্রেডিং', '', 'cnf204@gmail.com', '01817160727', '', '', 'মোঃ শাহাবুদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:30:05', 4),
(105, 'আদি ইম্পেক্স প্রাইভেট লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf69@gmail.com', '01712049111', '', '', 'মহিনুর রহমান মঈন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:30:45', 1),
(106, 'একুশে বাংলা এন্টারপ্রাইজ', 'বেনাপোল ,স্থলবন্দর', 'cnf205@gmail.com', '01711814129', '', '', 'মোঃ সাজ্জাদুল ইসলাম সৌরভ', 'Jcs002255.,.,.', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:31:04', 4),
(107, 'আবির ইন্টারন্যাশনাল লিমিটেড ', 'স্থল-বন্দর, বেনাপোল', 'cnf70@gmail.com', '01711953315', '', '', 'মোহাম্মদ জয়নাল আবেদীন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:31:39', 1),
(108, 'এম আর ট্রেড ইন্টারন্যাশনাল', '', 'cnf206@gmail.com', '01711359677', '', '', 'মোঃ মিজানুর রহমান চাকলাদার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:32:19', 4),
(109, 'আসিফ ট্রেডিং এজেন্সি', 'স্থল-বন্দর, বেনাপোল', 'cnf71@gmail.com', '01711595589', '', '', 'মোহাম্মদ আব্দুল হোসেন সরকার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:32:27', 1),
(110, 'আরএস ইম্পেক্স', 'স্থল-বন্দর, বেনাপোল', 'cnf72@gmail.com', '01711265054', '', '', 'মোহাম্মদ রাশেদুল রহমান রাসু', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:33:23', 1),
(111, ' চৌধুরী এ কে এম মহিনুর', 'বেনাপোল ,স্থলবন্দর', 'cnf207@gmail.com', '01711148945', '', '', 'চৌধুরী এ কে এম মইনুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:33:46', 4),
(112, 'এসটি এম ট্রেড ইন্টারন্যাশনাল', 'বেনাপোল ,স্থলবন্দর', 'cnf208@gmail.com', '01714085541', '', '', 'মোহাম্মদ শহিদুল আলম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:36:00', 4),
(113, 'এ আর এন্টারপ্রাইজ', 'বেনাপোল ,স্থলবন্দর', 'cnf209@gmail.com', '01712840276', '', '', 'কাজী রাশেদুল রেজা রাজ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:37:28', 4),
(114, 'এস আর শিপিং এজেন্সি', 'বেনাপোল ,স্থলবন্দর', 'cnf210@gmail.com', '01819327940', '', '', 'উৎপল রক্ষিত', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:38:27', 4),
(115, 'এস এস এ এন্টারপ্রাইজ', 'বেনাপোল ,স্থলবন্দর', 'cnf211@gmail.com', '01717002399', '', '', 'মাকসুদ আহমেদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:39:41', 4),
(116, 'এইচ এস এন্টারজপ্রাই', 'বেনাপোল ,স্থলবন্দর', 'cnf212@gmail.com', '01727411716', '', '', 'স ম হুমায়ুন খালিদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:41:08', 4),
(117, 'এশিয়া এন্টারপ্রাইজ', 'বেনাপোল ,স্থলবন্দর', 'cnf213@gmail.com', '01841132370', '', '', 'মোহাম্মদ সেলিম উদ্দিন চৌধুরী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:42:07', 4),
(118, 'আলতাফ এন্ড সন্স', 'স্থল-বন্দর, বেনাপোল', 'cnf73@gmail.com', '01711007051', '', '', 'এ জেড এম সালাউদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:43:00', 1),
(119, 'এস টি কর্পোরেশন প্রাইভেট লিমিটেড', 'বেনাপোল ,স্থলবন্দর', 'cnf214@gmail.com', '01915831645', '', '', 'মোহাম্মদ ইউনুস আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:43:09', 4),
(120, 'এম এস শিপিং এজেন্সি', 'বেনাপোল ,স্থলবন্দর', 'cnf215@gmail.com', '01711564404', '', '', 'শামসুল ইসলাম সিদ্দিকী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:44:12', 4),
(121, 'এস ট্রেডিং বিডি লিমিটেড', 'বেনাপোল ,স্থলবন্দর', 'cnf216@gmail.com', '01815000164', '', '', 'আজাদ মোহাম্মদ  হাওলাদার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:45:28', 4),
(122, 'আজিম এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf74@gmail.com', '01716538054', '', '', 'আব্দুস সামাদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:45:32', 1),
(123, 'এ বি ইন্টারন্যাশনাল', 'বেনাপোল ,স্থলবন্দর', 'cnf217@gmail.com', '01819218886', '', '', 'মোঃ আতিয়ার রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:47:12', 4),
(124, 'আর, বি ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf75@gmail.com', '01715052902', '', '', 'মোঃ হাফিজুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:49:14', 1),
(125, 'এ এন্ড ই ইন্টারন্যাশনাল ', 'বেনাপোল ,স্থলবন্দর', 'cnf218@gmail.com', '01919535566', '', '', 'বাহাদুর ব্যাপারী ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:49:39', 4),
(126, 'আজমির ট্রেডার্স এসোসিয়েটস্', 'স্থল-বন্দর, বেনাপোল', 'cnf76@gmail.com', '01711481851', '', '', 'বদরুল আলম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:50:14', 1),
(127, 'দেশ সেন্টার', 'স্থলবন্দর বেনাপোল', 'cnf404@gmail.com', '01767606722', '', '', 'মোহাম্মদ কামরুজ্জামান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:50:36', 4),
(128, 'এস ট্রেডার্স', 'বেনাপোল ,স্থলবন্দর', 'cnf219@gmail.com', '01715007200', '', '', 'মোঃ  সাহেব আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:51:47', 4),
(129, 'এ কে রওশন শিপিং লাইসেন্স লিমিটেড', 'বেনাপোল ,স্থলবন্দর', 'cnf220@gmail.com', '01814653889', '', '', 'মোহাম্মদ হারুন  অর রশিদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:52:53', 4),
(130, 'অনলেইড  সার্ভিসেস', 'স্থল-বন্দর, বেনাপোল', 'cnf77@gmail.com', '01911833481', '', '', 'মোঃ দেলোয়ার হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:53:31', 1),
(131, 'নিপুন  ইন্টারন্যাশনাল', 'স্থলবন্দর বেনাপোল', 'cnf405@gmail.com', '01711592354', '', '', 'মোহাম্মদ আসলাম খান বিদ্যুৎ ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:53:59', 4),
(132, 'ওয়ার্ল্ড ট্রেডিং কর্পোরেশন', 'বেনাপোল ,স্থলবন্দর', 'cnf221@gmail.com', '01818060465', '', '', 'ওয়ার্ল্ড ট্রেডিং কর্পোরেশন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:54:13', 4),
(133, 'আজমির এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf78@gmail.com', '01915637408', '', '', 'মোহাম্মদ মাসুদুর হক', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:54:38', 1),
(134, 'অবশেষ ট্রেডিং কর্পোরেশন', 'বেনাপোল ,স্থলবন্দর', 'cnf222@gmail.com', '01711217307', '', '', 'মিসেস ফিরোজা বেগম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:55:18', 4),
(135, 'আর এস এফ কার্গো সার্ভিসেস লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf79@gmail.com', '01711527629', '', '', 'হাবিবুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:55:51', 1),
(136, 'মোহাম্মদ নাজিম উদ্দিন', 'স্থলবন্দর বেনাপোল', 'cnf406@gmail.com', '01711807327', '', '', 'মোহাম্মদ নাজিম উদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:56:10', 4),
(137, 'ওশান  ট্রেড ইন্টারন্যাশনাল ', 'বেনাপোল ,স্থলবন্দর', 'cnf223@gmail.com', '01711750641', '', '', 'মোহাম্মদ গোলাম জিলানী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:56:30', 4),
(138, 'আটলান্টিক ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf80@gmail.com', '01819311728', '', '', 'মোহাম্মদ মেসবাউল হক', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:57:38', 1),
(139, 'ওয়ার্ল্ড ইন্টারন্যাশনাল', 'বেনাপোল ,স্থলবন্দর', 'cnf224@gmail.com', '01917240376', '', '', 'মোঃ হারুন-অর-রশিদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-09 23:57:42', 4),
(140, 'আদন এন্টারপ্রাইজ প্রাইভেট লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf81@gmail.com', '01717477334', '', '', 'মোহাম্মদ ইদ্রিস আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:00:01', 1),
(141, 'ওভারি ক্লিয়ারিং সিন্ডিকেট', 'বেনাপোল ,স্থলবন্দর', 'cnf225@gmail.com', '0031614819', '', '', 'দোদুল কান্তি সেন ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:00:11', 4),
(142, 'আর কে এস ট্রেডিং প্রাইভেট লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf82@gmail.com', '01712130070', '', '', 'মোহাম্মদ কামাল হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:00:49', 1),
(143, 'ন্যাশনাল ট্রেডিং কোম্পানি', 'স্থলবন্দর বেনাপোল', 'cnf407@gmail.com', '01711841600', '', '', 'মোঃ রবিউল ইসলাম রবি', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:01:17', 4),
(144, 'ওয়াহিদ মুরাদ', 'বেনাপোল ,স্থলবন্দর', 'cnf226@gmail.com', '01711544246', '', '', 'মোঃ  ওয়াহিদ মুরাদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:01:35', 4),
(145, 'আল-মুদাব্বির ইন্টারন্যাশনাল প্রাইভেট লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf83@gmail.com', '01712087443', '', '', 'মোঃ মতিয়ার রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:02:26', 1),
(146, 'আনবি লজিস্টিক লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf84@gmail.com', '01708166555', '', '', 'মোহাম্মদ বেলায়েত হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:03:24', 1),
(147, 'আর এ ট্রেড ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf85@gmail.com', '01720300848', '', '', 'মোহাম্মদ নূর হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:04:25', 1),
(148, 'নিয়াজ এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf408@gmail.com', '01712522066', '', '', ' এ এইচ মতিউর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:04:30', 4),
(149, 'এস এম জালাল উদ্দিন', 'বেনাপোল ,স্থলবন্দর', 'cnf227@gmail.com', '0031632166', '', '', 'ওভারসিজ  ইন্টারন্যাশনাল কর্পোরেশন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:04:32', 4),
(150, 'ওমর এন্ড সন্স', 'বেনাপোল ,স্থলবন্দর', 'cnf228@gmail.com', '01819221018', '', '', 'ইউনুস মিয়া', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:05:36', 4),
(151, 'রুপম ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf626@gmail.com', '01711385115', '', '', 'মোঃ মরতজা ইসলাম বাবু', 'inventor@180395', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:05:43', 1),
(152, 'ইরাস সিএন্ডএফ এজেন্ট', 'স্থল-বন্দর, বেনাপোল', 'cnf86@gmail.com', '01712030297', '', '', 'কাজী ইরাদুল রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:05:43', 1),
(153, 'ইউনিক এজেন্সি', 'স্থল-বন্দর, বেনাপোল', 'cnf87@gmail.com', '01711444928', '', '', 'আলহাজ্ব আনোয়ার আলী অনু', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:06:46', 1),
(154, 'রয়েল ট্রেড ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf627@gmail.com', '01711849878', '', '', 'মোঃ ইমরান হোসেন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:06:54', 1),
(155, 'ওশিন  এন্টারপ্রাইজ', 'বেনাপোল ,স্থলবন্দর', 'cnf229g@gmail.com', '01711141494', '', '', 'মোঃ  আখতারুজ্জামান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:06:58', 4),
(156, 'ইউনিভার্সাল এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf88@gmail.com', '01711841535', '', '', 'হারুন-অর-রশিদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:07:31', 1),
(157, 'রুপালী এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf628@gmail.com', '01731479505', '', '', 'মোঃ রফিক উদ্দিন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:07:44', 1),
(158, ' ওয়ার্ল্ড লিংক লজিস্টিক', 'বেনাপোল ,স্থলবন্দর', 'cnf230@gmail.com', '01911359603', '', '', 'শামসুন্নাহার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:08:49', 4),
(159, 'রোজা ট্রেডিং', 'স্থল-বন্দর ,বেনাপোল', 'cnf629@gmail.com', '01711520470', '', '', 'মোঃ মোরশেদুল আরেফিন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:09:17', 1),
(160, 'নোভো কার্গো সার্ভিসেস লিমিটেড', 'স্থলবন্দর বেনাপোল', 'cnf409@gmail.com', '01199850182', '', '', 'সৈয়দ মোস্তাফিজুর রহমান ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:09:22', 4),
(161, 'ওয়েলকিন', 'বেনাপোল ,স্থলবন্দর', 'cnf231@gmail.com', '01740981058', '', '', ' মোঃ আসাদুজ্জামান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:09:47', 4),
(162, 'রিফাত ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf630@gmail.com', '01711334897', '', '', 'মোঃ রেজাউল হাসান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:10:06', 1),
(163, 'কুয়েত ওয়াজেদ এজেন্সি', 'বেনাপোল ,স্থলবন্দর', 'cnf232@gmail.com', '01819244552', '', '', 'মুসা আহমেদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:10:42', 4),
(164, 'ইসলাম ট্রেডিং এজেন্সি', 'স্থল-বন্দর, বেনাপোল', 'cnf89@gmail.com', '01711571042', '', '', 'এস এম রফিকুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:11:07', 1),
(165, 'কমার্শিয়াল এজেন্সি', 'বেনাপোল ,স্থলবন্দর', 'cnf233@gmail.com', '01725895625', '', '', 'মোহাম্মদ আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:11:24', 4),
(166, 'ইকো এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf90@gmail.com', '01714082906', '', '', 'আমির এ আজম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:12:12', 1),
(167, 'কাওসার আলী', 'বেনাপোল ,স্থলবন্দর', 'cnf234@gmail.com', '01711265104', '', '', 'আক্তার মাহমুদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:12:13', 4),
(168, 'রাইভী ট্রেড ইন্টারন্যাশনাল ', 'স্থল-বন্দর ,বেনাপোল', 'cnf631@gmail.com', '0422875642', '', '', 'ইসতিয়াক মোহাম্মদ ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:12:27', 1),
(169, 'নুর ট্রেডিং এজেন্সি', 'স্থলবন্দর বেনাপোল', 'cnf410@gmail.com', '01729683960', '', '', ' মোঃ মিজানুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:13:15', 4),
(170, 'কবির শিপিং লিমিটেড', 'বেনাপোল ,স্থলবন্দর', 'cnf235@gmail.com', '01712141183', '', '', 'মোঃ আবুল কাশেম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:13:21', 4),
(171, 'রহমত ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf632@gmail.com', '01712664341', '', '', 'ইব্রাহিম জাকির রহমত উল্লাহ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:14:18', 1),
(172, 'কোয়ালিটি কার্গো সার্ভিস লজিস্টিক্স', 'বেনাপোল ,স্থলবন্দর', 'cnf236@gmail.com', '01711688175', '', '', 'কাজী জাহাঙ্গীর হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:14:57', 4),
(173, 'রিনা সি এন্ড এফ সেন্টার লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf633@gmail.com', '01711841718', '', '', 'মাকছুদুর রহমান রুনা', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:15:10', 1),
(174, 'নওশাদ এজেন্সি', 'স্থলবন্দর বেনাপোল', 'cnf411@gmail.com', '01954776821', '', '', 'মোহাম্মদ আজমত আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:15:49', 4),
(175, 'কহিনুর এজেন্সি', 'বেনাপোল ,স্থলবন্দর', 'cnf237@gmail.com', '01752130533', '', '', 'মোঃ শাহাবুদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:15:50', 4),
(176, 'রয়েল এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf634@gmail.com', '01711897335', '', '', 'মোঃ রফিকুল ইসলাম', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:16:05', 1),
(177, 'কে এম এন্টারপ্রাইজ', 'বেনাপোল ,স্থলবন্দর', 'cnf238@gmail.com', '01711814135', '', '', 'মোঃ মাহবুবুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:16:50', 4),
(178, 'রাতুল ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf635@gmail.com', '01711351322', '', '', 'মোঃ আব্দুল লতিফ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:17:22', 1),
(179, 'রবি ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf636@gmail.com', '01711023507', '', '', 'মোঃ রবিউল ইসলাম', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:18:33', 1),
(180, 'নাভারন সিএন্ডএফ লিমিটেড', 'স্থলবন্দর বেনাপোল', 'cnf412@gmail.com', '01819312328', '', '', 'ফারুক আহমেদ চৌধুরী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:19:02', 4),
(181, 'ইসলাম এন্ড সন্স', 'স্থল-বন্দর, বেনাপোল', 'cnf91@gmail.com', '0171152187', '', '', 'মোঃ খোরশেদ আলম ববি', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:19:22', 1),
(182, 'রায়েদ এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf637@gmail.com', '01711336080', '', '', 'মোঃ শফিউর রহমান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:19:27', 1),
(183, 'রিয়েল ট্রেড এজেন্সী', 'স্থল-বন্দর ,বেনাপোল', 'cnf638@gmail.com', '01711466131', '', '', 'এস এম আজমল হোসাইন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:20:24', 1),
(184, 'ইন্টেল ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf92@gmail.com', '01718845184', '', '', 'মোহাম্মদ মুসলিম আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:21:01', 1),
(185, 'রাফিন এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf639@gmail.com', '01716148592', '', '', 'মোঃ শরিফুল ইসলাম', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:21:28', 1),
(186, 'নেপচুন ট্রেডিং', 'স্থলবন্দর বেনাপোল', 'cnf413@gmail.com', '01819399836', '', '', 'ইকবাল হোসেন মজুমদার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:21:41', 4),
(187, 'ইউরেকা এজেন্সি প্রাইভেট লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf93@gmail.com', '01712018429', '', '', 'মোঃ আতিকুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:21:49', 1),
(188, 'রিয়াদ এজেন্সী', 'স্থল-বন্দর ,বেনাপোল', 'cnf640@gmail.com', '01715010743', '', '', 'মনিরুল আলম মনির', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:22:04', 1),
(189, 'রিয়াদ এন্টারপ্রাইজ প্রাঃ লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf641@gmail.com', '01715008624', '', '', 'মোঃ আবুল কালাম', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:22:47', 1),
(190, 'রিয়াজ এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf642@gmail.com', '01711365486', '', '', 'মোঃ রিয়াজ উদ্দিন মোল্লা', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:23:53', 1),
(191, 'ইন্টারন্যাশনাল ট্রেডিং সার্ভিসেস লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf94@gmail.com', '01766665454', '', '', 'এ কে এম মোশাররফ হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:23:57', 1),
(192, 'রাজিম এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf643@gmail.com', '01718596050', '', '', 'মাহমুদা খানম', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:24:30', 1),
(193, 'নাইস এন্টারপ্রাইজ লিমিটেড ', 'স্থলবন্দর বেনাপোল', 'cnf414@gmail.com', '01711343863', '', '', 'মোঃ সাইদুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:25:08', 4),
(194, 'ইশবাল এজেন্সি প্রাইভেট লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf95@gmail.com', '01711308872', '', '', 'মোহাম্মদ শওকত আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:25:19', 1),
(195, 'রাহাত ট্রেড লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf644@gmail.com', '01711449920', '', '', 'মোঃ ইমদাদুল হক', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:25:26', 1),
(196, 'রানা ইন্টারন্যাশনাল এজেন্সী', 'স্থল-বন্দর ,বেনাপোল', 'cnf645@gmail.com', '01713314908', '', '', 'মোঃ রাশেদুজ্জামান বাপ্পি', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:26:10', 1),
(197, 'ইরামনি এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf96@gmail.com', '01711681200', '', '', 'মোঃ সাইফুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:26:11', 1),
(198, 'রিমু এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf646@gmail.com', '01718611589', '', '', 'মোঃ হাদিউজ্জামান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:26:56', 1),
(199, 'ইউনিভার্সাল কার্গো এক্সপ্রেস', 'স্থল-বন্দর, বেনাপোল', 'cnf97@gmail.com', '01711381308', '', '', 'মোহাম্মদ আখতারুজ্জামান ফারুক', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:26:57', 1),
(200, 'ইস্টার্ন করপরেশন', 'স্থল-বন্দর, বেনাপোল', 'cnf98@gmail.com', '031618068', '', '', 'মোঃ কামাল উদ্দিন চৌধুরী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:27:43', 1),
(201, 'লিয়াকত  হোসেন এন্ড সন্স', 'স্থল-বন্দর ,বেনাপোল', 'cnf647@gmail.com', '01711661965', '', '', 'আলহাজ্ব নজরুল ইসলাম বুলু', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:27:59', 1),
(202, 'ইভা এন্টারপ্রাইস', 'স্থল-বন্দর, বেনাপোল', 'cnf99@gmail.com', '01912100074', '', '', 'আলহাজ্ব মজিবুর রহমান চৌধুরী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:28:34', 1),
(203, 'ক্যাভাসজি   ন্যারিম্যান এন্ড  কোং ', 'বেনাপোল ,স্থলবন্দর', 'cnf239@gmail.com', '01819311615', '', '', 'Please  enter your name', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:28:38', 4),
(204, 'লাবিবা ট্রেড সেন্টার লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf648@gmail.com', '017126749656', '', '', 'মোঃ আহসানুজ্জামান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:29:07', 1),
(205, 'ইয়োগী', 'স্থল-বন্দর, বেনাপোল', 'cnf100@gmail.com', '01711352783', '', '', 'এ জেড এম রবিউল হাসান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:29:25', 1),
(206, 'কে এস কে সেন্টিকেট প্রাইভেট লিমিটেড', 'বেনাপোল ,স্থলবন্দর', 'cnf240@gmail.com', '01716951237', '', '', 'মোঃ  শফিকুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:29:28', 4),
(207, 'লিংক ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf649@gmail.com', '01714441445', '', '', 'শাহারিয়া আলম খান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:29:52', 1),
(208, 'নিশি এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf415@gmail.com', '01711157681', '', '', 'মহাম্মদ তাহমুল  বিশ্বাস', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:30:08', 4),
(209, 'কেয়া এন্টারপ্রাইজ', 'বেনাপোল ,স্থলবন্দর', 'cnf241@gmail.com', '01711174645', '', '', 'Please  enter your name', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:30:21', 4),
(210, 'লাইম লাইট সেন্ডিকেট', 'স্থল-বন্দর ,বেনাপোল', 'cnf650@gmail.com', '01711141589', '', '', 'মোঃ আহসানুল হক', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:30:53', 1),
(211, 'লাকী ট্রেড ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf652@gmail.com', '01726313758', '', '', 'মোঃ মিঠু মিয়া', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:32:30', 1),
(212, 'নর্থ বেঙ্গল শপিং এজেন্সি প্রোপাইটার লিমিটেড', 'স্থলবন্দর বেনাপোল', 'cnf416@gmail.com', '01713411052', '', '', 'এম এ রাকিব ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:32:43', 4),
(213, 'কো অপারেটস এন্টারপ্রাইস ', 'বেনাপোল ,স্থলবন্দর', 'cnf242@gmail.com', '01711537561', '', '', 'সোহেল মাহবুবুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:33:10', 4),
(214, 'লোপা শিপিং লাইন্স', 'স্থল-বন্দর ,বেনাপোল', 'cnf653@gmail.com', '01711708732', '', '', '', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:33:39', 1),
(215, 'লিলি এন্টারপ্রাইজ প্রাঃ লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf654@gmail.com', '0', '', '', 'মোঃ রফিকউল্লাহ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:34:20', 1),
(216, 'কোনকোয়েস্ট শিপিং লাইসেন্স', 'বেনাপোল ,স্থলবন্দর', 'cnf243@gmail.com', '01711541602', '', '', 'মোহাম্মদ তৈবুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:34:58', 4),
(217, 'লিয়াকত এন্ড কোং', 'স্থল-বন্দর ,বেনাপোল', 'cnf655@gmail.com', '01711525165', '', '', 'মোঃ লিয়াকত আলম চৌধুরী', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:35:08', 1),
(218, 'লিডস কর্পোরেশন', 'স্থল-বন্দর ,বেনাপোল', 'cnf656@gmail.com', '01711443417', '', '', '', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:35:37', 1),
(219, 'লোটাস এজেন্সি', 'স্থল-বন্দর ,বেনাপোল', 'cnf657@gmail.com', '01711560698', '', '', 'মোঃ আনিছুর রহমান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:36:32', 1),
(220, ' নাসিম এন্টারপ্রাইজ ', 'স্থলবন্দর বেনাপোল', 'cnf417@gmail.com', '01711034614', '', '', 'নাজমুল হক ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:36:47', 4),
(221, 'লিটন এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf658@gmail.com', '01923304306', '', '', 'মোঃ নুরুজ্জামান লিটন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:37:08', 1),
(222, 'লিটন ট্রেড ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf659@gmail.com', '01911313931', '', '', 'রফিকুল ইসলাম লিটন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:37:49', 1),
(223, 'কর্ণফুলী লিমিটেড', 'বেনাপোল ,স্থলবন্দর', 'cnf244@gmail.com', '0029314141', '', '', 'মোঃ হেদায়েত হোসেন চৌধুরী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:38:13', 4),
(224, 'লয়াল মার্ট', 'স্থল-বন্দর ,বেনাপোল', 'cnf660@gmail.com', '01711612347', '', '', 'আ, শ, ম মামুনুর রহমান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:38:26', 1),
(225, 'কালকিনি কমার্শিয়াল এজেন্সি লিমিটেড', 'বেনাপোল ,স্থলবন্দর', 'cnf245@gmail.com', '01711527292', '', '', 'আলহাজ্ব মোহাম্মদ ইলিয়াস হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:39:22', 4),
(226, 'লুনা ট্রেডিং কর্পোরেশন', 'স্থল-বন্দর ,বেনাপোল', 'cnf661@gmail.com', '01720150757', '', '', 'হোসাইন মোঃ ইকবাল', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:39:28', 1),
(227, 'কিংস ল্যান্ড কর্পোরেশন', 'বেনাপোল ,স্থলবন্দর', 'cnf246@gmail.com', '01711583871', '', '', 'মোঃ রুহুল আমিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:40:10', 4),
(228, 'কে এইচ  ট্রেডিং', 'বেনাপোল ,স্থলবন্দর', 'cnf247@gmail.com', '01711325304', '', '', 'মোঃ কামরুল হুদা', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:41:18', 4),
(229, 'কদর এন্ড কোং ', 'বেনাপোল ,স্থলবন্দর', 'cnf248@gmail.com', '01711445604', '', '', 'মোঃ আলী কদর (সাগর)', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:42:45', 4),
(230, 'লোটাস ট্রেড লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf662@gmail.com', '01911241220', '', '', 'শামীম হোসেন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:43:46', 1),
(231, 'কাজী এন্টারপ্রাইজ', 'বেনাপোল ,স্থলবন্দর', 'cnf249@gmail.com', '01711351030', '', '', 'কাজী নওশীন দেলোয়ার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:43:53', 4),
(232, 'শাহাদৎ হোসেন', 'স্থল-বন্দর ,বেনাপোল', 'cnf663@gmail.com', '01759839202', '', '', 'মোঃ শাহাদৎ হোসেন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:45:09', 1),
(233, 'কাবেরী শিপিং এজেন্সি', '', 'cnf250@gmail.com', '01817757167', '', '', 'বাবু শম্বুনাথ দাস ', 'Jcs002255.,.,.', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:45:54', 4),
(234, 'শিমুল ট্রেডিং এজেন্সী', 'স্থল-বন্দর ,বেনাপোল', 'cnf664@gmail.com', '01711482724', '', '', 'আলহাজ্ব মোঃওয়াজেদ আলী', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:46:01', 1),
(235, 'কাজী কার্গো প্রাইভেট লিমিটেড', 'বেনাপোল ,স্থলবন্দর', 'cnf251@gmail.com', '01711162362', '', '', 'মোঃ কাজী এনায়েত হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:46:57', 4),
(236, 'শামছুর রহমান', 'স্থল-বন্দর ,বেনাপোল', 'cnf665@gmail.com', '01711836375', '', '', 'আলহাজ্ব মোঃ শামছুর রহমান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:46:59', 1),
(237, 'শরিফ শিপিং লাইন্স', 'স্থল-বন্দর ,বেনাপোল', 'cnf666@gmail.com', '01711273328', '', '', 'মোনতাজ আলী বিশ্বাস', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:48:54', 1),
(238, 'শুকতারা এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf667@gmail.com', '01772101540', '', '', 'মোঃ কোবির  হোসেন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:50:06', 1),
(239, 'শাহজাহান এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf668@gmail.com', '01717968740', '', '', 'মোঃ শাহজাহান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:51:05', 1),
(240, 'কমা ক্রিয়েশন ', 'বেনাপোল ,স্থলবন্দর', 'cnf253@gmail.com', '01713033999', '', '', 'মোঃ খাইরুল বাশার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:51:52', 4),
(241, 'শাহজালাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf669@gmail.com', '01711170818', '', '', 'মোঃ শাহজালাল', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:52:11', 1),
(242, 'শামীমা কার্গো লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf670@gmail.com', '01711363694', '', '', 'মোঃ রফিকুল ইসলাম', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:52:57', 1),
(243, 'করিম শিপিং কোম্পানি', 'বেনাপোল ,স্থলবন্দর', 'cnf254@gmail.com', '01714166290', '', '', 'মোঃ দেলোয়ার হোসেন ভূঁইয়া', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:53:22', 4),
(244, 'শ্যাফরন শিপিং ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf671@gmail.com', '01711343303', '', '', 'এম সোহেল আহসান চৌধুরী', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:54:01', 1),
(245, 'শাহনাজ এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf672@gmail.com', '01718375032', '', '', 'মোঃ আমিনুর রহমান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:54:44', 1),
(246, 'ক্যান্স ইন্টারন্যাশনাল', 'বেনাপোল ,স্থলবন্দর', 'cnf255@gmail.com', '01711330846', '', '', 'এ এস সাইফুদ্দিন কামাল', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:54:46', 4),
(247, 'কনফিডেন্স ট্রেড  অ্যাসোসিয়েট', 'বেনাপোল ,স্থলবন্দর', 'cnf256@gmail.com', '01711201391', '', '', 'মোঃ আতিয়ার রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:55:50', 4),
(248, 'শারমিন ফ্রাইট সিস্টেমস লিমিটেড ', 'স্থল-বন্দর ,বেনাপোল', 'cnf673@gmail.com', '1', '', '', '', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:56:28', 1),
(249, 'শারীফুর জালাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf674@gmail.com', '01716821614', '', '', 'মিসেস রজি জালাল', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:57:02', 1),
(250, 'কবির এন্টারপ্রাইজ', 'বেনাপোল ,স্থলবন্দর', 'cnf257@gmail.com', '01711029368', '', '', 'মোঃ হুমায়ুন কবির ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:57:12', 4),
(251, 'শ্যামল ট্রেডিং কর্পোরেশন', 'স্থল-বন্দর ,বেনাপোল', 'cnf675@gmail.com', '01711815294', '', '', 'মিসেস নুরুন্নাহার বেগম', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:57:30', 1),
(252, 'ইসরাইল হোসেন এন্ড কোম্পানি', 'স্থল-বন্দর, বেনাপোল', 'cnf101@gmail.com', '01714341866', '', '', 'মোঃ তাইরুল হাসান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:57:32', 1),
(253, 'শফিক এন্ড ইসলাম প্রাঃ লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf676@gmail.com', '01713029970', '', '', 'মোঃ শফিকুর রহমান সাইফুল', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:58:18', 1),
(254, 'কপোতাক্ষ এজেন্সি', 'বেনাপোল ,স্থলবন্দর', 'cnf258@gmail.com', '01711842337', '', '', 'মোঃ মশিউর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:58:26', 4),
(255, 'শুভ এজেন্সী', 'স্থল-বন্দর ,বেনাপোল', 'cnf677@gmail.com', '01711561682', '', '', 'মোঃ আলী আশরাফ চৌধুরী', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:59:03', 1),
(256, 'ক্যাপিটাল ট্রেড লিংক লিমিটেড', '', 'cnf259@gmail.com', '01711812239', '', '', 'মৃদুল কান্তি বড়ুয়া', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:59:38', 4),
(257, 'শেখ শিপিং লাইন্স', 'স্থল-বন্দর ,বেনাপোল', 'cnf678@gmail.com', '01711438671', '', '', 'শেখ মুজিবর রহমান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:59:48', 1),
(258, 'ইসলাম ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf102@gmail.com', '01712624471', '', '', 'মোঃ মোস্তাফিবুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 00:59:57', 1),
(259, 'কাজ ইন্টারন্যাশনাল', 'বেনাপোল ,স্থলবন্দর', 'cnf260@gmail.com', '01711897367', '', '', 'মোঃ আশরাফুল আলম লিটন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:00:43', 4),
(260, 'শাহ আলম শাহ সিন্ডিকেট', 'স্থল-বন্দর ,বেনাপোল', 'cnf679@gmail.com', '01711537456', '', '', 'মোঃ আবদুল আল মামুন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:00:47', 1),
(261, 'ইশতিয়াক এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf103@gmail.com', '01712087451', '', '', 'মোহাম্মদ রুমেল আহসান হাবিব বাপ্পি', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:01:06', 1),
(262, 'শাফি এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf680@gmail.com', '01817006272', '', '', 'সৈয়দ শাফিউল হক', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:01:23', 1);
INSERT INTO `cnf_info` (`cnf_info_id`, `cnf_full_name`, `cnf_address`, `cnf_email_address`, `cnf_primary_mobile_number`, `cnf_op1_mobile_number`, `cnf_op2_mobile_number`, `cnf_user_name`, `cnf_user_password`, `cnf_nid_number`, `cnf_nid_card_front_side_image`, `cnf_nid_card_back_side_image`, `cnf_profile_photo`, `cnf_is_active`, `cnf_is_flash_notification`, `cnf_is_normal_notification`, `flash_notification_id`, `normal_notification_id`, `cnf_info_created_date`, `cnf_created_user_id`) VALUES
(263, 'ক্লাসিক কার্গো লিমিটেড', 'বেনাপোল ,স্থলবন্দর', 'cnf261@gmail.com', '01711815310', '', '', 'আশরাফুল আলম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:01:28', 4),
(264, 'শোভা ইন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf681@gmail.com', '01711460896', '', '', 'মোঃ নাসিমুল গনি বন্টু', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:02:31', 1),
(265, 'কবির  এন্টারপ্রাইজ ০১', 'বেনাপোল ,স্থলবন্দর', 'cnf262@gmail.com', '01711437000', '', '', 'আমিনুল কবির ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:02:38', 4),
(266, 'ইমান আলী এন্ড সন্স', 'স্থল-বন্দর, বেনাপোল', 'cnf104@gmail.com', '01711897356', '', '', 'মোহাম্মদ ইনামুল হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:02:39', 1),
(267, 'শান্তা এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf682@gmail.com', '01732777513', '', '', 'রেজাউল হোসেন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:03:12', 1),
(268, 'করিম এন্ড সন্স ', 'বেনাপোল ,স্থলবন্দর', 'cnf263@gmail.comv', '01711355105', '', '', 'কামরুজ্জামান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:03:18', 4),
(269, 'শাহিন ইমপেক্স প্রাঃ লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf683@gmail.com', '01712190215', '', '', 'মোঃ হারুন অর রশীদ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:03:57', 1),
(270, 'প্রনি শিপিং কর্পোরেশন প্রাইভেট লিমিটেড', 'বেনাপোল ,স্থলবন্দর', 'cnf264@gmail.com', '01714036222', '', '', 'এম এ আজিজ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:03:57', 4),
(271, 'ইমপো-এক্সপোর ট্রেডার্স', 'স্থল-বন্দর, বেনাপোল', 'cnf105@gmail.com', '01711295517', '', '', 'সুলতান মাহমুদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:04:08', 1),
(272, 'শাহিন এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf684@gmail.com', '01917095668', '', '', 'মিসেস রেহেনা বেগম', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:04:30', 1),
(273, 'ইকবাল এন্ড ব্রাদার্স', 'স্থল-বন্দর, বেনাপোল', 'cnf106@gmail.com', '01711065870', '', '', 'মোহাম্মদ ইকবাল হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:04:54', 1),
(274, 'ক্রিস্টাল  কার্গো কমপ্লেক্স', 'বেনাপোল ,স্থলবন্দর', 'cnf265@gmail.com', '01711681264', '', '', 'সৈয়দ সাজ্জাদ হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:05:07', 4),
(275, 'শাকিল এন্ড সুজন এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf685@gmail.com', '01711830447', '', '', 'মঞ্জুরুল ইসলাম শেখ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:05:13', 1),
(276, 'করণা অ্যাসোসিয়েটস', 'বেনাপোল ,স্থলবন্দর', 'cnf266@gmail.com', '01819225538', '', '', 'কাজী সাইফুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:05:54', 4),
(277, 'শাহ আলম কবির', 'স্থল-বন্দর ,বেনাপোল', 'cnf686@gmail.com', '01713296448', '', '', 'শাহ আলম কবির', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:06:09', 1),
(278, 'ইসলাম এন্ড ব্রাদার্স', 'স্থল-বন্দর, বেনাপোল', 'cnf107@gmail.com', '017121793', '', '', 'জহুরুল আলম রিন্টু', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:06:15', 1),
(279, 'কাব্য এন্টারপ্রাইজ', 'বেনাপোল ,স্থলবন্দর', 'cnf267@gmail.com', '01711334033', '', '', 'একেএম আতিকুজ্জামান ছানি', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:06:35', 4),
(280, 'ইসলাম ব্রাদার্স অ্যান্ড কোম্পানি ', 'স্থল-বন্দর, বেনাপোল', 'cnf108@gmail.com', '0171', '', '', 'মোঃ সাইফুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:06:50', 1),
(281, 'শ্যালিমা লজিস্টিকস এন্ড ট্রেডিং লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf687@gmail.com', '01711363695', '', '', 'মোঃ শায়েদ এনাম চৌধুরী', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:07:29', 1),
(282, 'কনভেয়র লজিস্টিক লিমিটেড', 'বেনাপোল ,স্থলবন্দর', 'cnf268@gmail.com', '01552111111', '', '', 'কবির আহমদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:07:48', 4),
(283, 'ইসলাম করপরেশন', 'স্থল-বন্দর, বেনাপোল', 'cnf109@gmail.com', '01713337505', '', '', 'শেখ তরিকুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:08:20', 1),
(284, 'কে এ  ট্রেডার্স', 'বেনাপোল ,স্থলবন্দর', 'cnf269@gmail.com', '01711749452', '', '', 'কাজী ইমাম উদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:08:35', 4),
(285, 'সেতু সেন্টার', 'স্থল-বন্দর ,বেনাপোল', 'cnf689@gmail.com', '01711365311', '', '', 'আলহাজ্ব মসিয়ুর রহমান', '11111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:09:10', 1),
(286, 'ইছামতি করপরেশন', 'স্থল-বন্দর, বেনাপোল', 'cnf110@gmail.com', '01713066181', '', '', 'মোঃ জুলফিকার হায়দার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:09:19', 1),
(287, 'কে পি সন্স', 'বেনাপোল ,স্থলবন্দর', 'cnf270@gmail.com', '01711520777', '', '', 'মোঃ  হানিফ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:09:40', 4),
(288, 'কনসেপ্ট এন্ড আইডিয়া', 'বেনাপোল ,স্থলবন্দর', 'cnf271@gmail.com', '01714019239', '', '', 'মোঃ আশিকুর রহমান খান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:10:42', 4),
(289, 'ইয়াসিন ট্রেড সেনআর লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf111@gmail.com', '01711870375', '', '', 'মোহাম্মদ ইয়াসিন মোল্লা', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:11:42', 1),
(290, 'কানিজ  শিপিং লিমিটেড', 'বেনাপোল ,স্থলবন্দর', 'cnf272@gmail.com', '01714025470', '', '', ' মোঃ ইমরুল চৌধুরী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:11:45', 4),
(291, 'কাশফিয়া ইন্টারন্যাশনাল', 'বেনাপোল ,স্থলবন্দর', 'cnf273@gmail.com', '01711841603', '', '', 'মোঃ শামীম আলম খান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:12:24', 4),
(292, 'ইমন এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf112@gmail.com', '01921489955', '', '', 'মোঃ শফিকুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:12:30', 1),
(293, 'কাকন ট্রেড সেন্টার প্রাইভেট লিমিটেড', 'বেনাপোল ,স্থলবন্দর', 'cnf274@gmail.com', '01711482534', '', '', 'মোখলেছুর রহমান কাকন ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:13:19', 4),
(294, 'ইস্পিতা এন্টারপ্রাইজ লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf113@gmail.com', '0171174900044', '', '', 'মোঃ আমিরুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:13:20', 1),
(295, 'সুন্দরবন এক্সপ্রেস', 'স্থল-বন্দর ,বেনাপোল', 'cnf690@gmail.com', '01711397507', '', '', 'মোঃ আলী হোসেন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:13:25', 1),
(296, 'সোনালী এজেন্সি', 'স্থল-বন্দর ,বেনাপোল', 'cnf691@gmail.com', '01714027791', '', '', 'শামীম আহম্মেদ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:14:07', 1),
(297, 'ইশিতা এন্টারপ্রাইজ ', 'স্থল-বন্দর, বেনাপোল', 'cnf114@gmail.com', '01720678904', '', '', 'মোঃ জাহাঙ্গীর হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:14:11', 1),
(298, 'কাইফ  এন্ড ব্রাদার্স প্রাইভেট লিমিটেড', 'বেনাপোল ,স্থলবন্দর', 'cnf275@gmail.com', '00000000002', '', '', 'মোঃ কুতুব উদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:14:26', 4),
(299, 'উদয় এন্টারপ্রাইজ লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf115@gmail.com', '01711309036', '', '', 'মোহাম্মদ আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:14:54', 1),
(300, 'খলিলুর রহমান এন্ড সন্স', 'বেনাপোল ,স্থলবন্দর', 'cnf276@gmail.com', '01711566497', '', '', 'আলহাজ্ব মোখলেছুর রহমান (মুকুল)', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:15:30', 4),
(301, 'এক্সপো ট্রেডার্স', 'স্থল-বন্দর, বেনাপোল', 'cnf116@gmail.com', '01711528267', '', '', 'আহমেদ হোসেন চৌধুরী ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:16:05', 1),
(302, 'খান এন্টারপ্রাইজ', 'বেনাপোল ,স্থলবন্দর', 'cnf277@gmail.com', '01713101382', '', '', 'মোঃ গোলাম মাওলানা খান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:16:20', 4),
(303, 'সোনালী এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf692@gmail.com', '01819128159', '', '', 'মোঃ আনিসুজ্জামান মিন্টু', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:16:32', 1),
(304, 'খাজা এন্টারপ্রাইজ', 'বেনাপোল ,স্থলবন্দর', 'cnf278@gmail.com', '01717007374', '', '', 'মোঃএমরান  হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:17:07', 4),
(305, 'স্টার ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf693@gmail.com', '01713094564', '', '', 'মোঃ ইফতেখার আলম খান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:17:14', 1),
(306, 'এস আই চৌধুরী অ্যান্ড কোম্পানি', 'স্থল-বন্দর, বেনাপোল', 'cnf117@gmail.com', '01714094743', '', '', 'শামসুল ইসলাম চৌধুরী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:17:31', 1),
(307, 'খাজা শিপিং লাইসেন্স', 'বেনাপোল ,স্থলবন্দর', 'cnf279@gmail.com', '01720141222', '', '', 'মোঃ মোশারফ হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:17:49', 4),
(308, 'স্টার এজেন্সী', 'স্থল-বন্দর ,বেনাপোল', 'cnf694@gmail.com', '01718208821', '', '', 'মোঃ আরিফুর রহমান (বাপ্পি)', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:18:11', 1),
(309, 'খায়ের ব্রাদার্স', 'বেনাপোল ,স্থলবন্দর', 'cnf280@gmail.com', '01819264281', '', '', 'এস এম এ খায়ের', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:18:29', 4),
(310, 'সী ইন্টারন্যাশনাল এজেন্সী লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf695@gmail.com', '01711407609', '', '', 'মোঃ দিদারুল আলম', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:18:51', 1),
(311, 'খুশবু এন্টারপ্রাইজ', 'বেনাপোল ,স্থলবন্দর', 'cnf281@gmail.com', '01822049477', '', '', 'শরিফ উদ্দিন আহমেদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:19:18', 4),
(312, 'এন ইসলাম এন্টারপ্রাইজ প্রাইভেট লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf118@gmail.com', '01711048026', '', '', 'এন ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:19:24', 1),
(313, 'সজন এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf696@gmail.com', '01711807335', '', '', 'মোঃ মফিজুর রহমান সজন', '1111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:19:28', 1),
(314, 'খান এন্ড সন্স', 'বেনাপোল ,স্থলবন্দর', 'cnf282@gmail.com', '01711348947', '', '', 'কে এম আসাদুজ্জামান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:20:00', 4),
(315, 'সাইনি শিপিং সার্ভিসেস', 'স্থল-বন্দর ,বেনাপোল', 'cnf697@gmail.com', '01713000712', '', '', 'মোঃ সেলিমুজ্জামান জনি', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:20:04', 1),
(316, 'এম কামাল এন্টারপ্রাইজ বিডি লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf119@gmail.com', '01730342466', '', '', 'মামুনুর রশিদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:20:33', 1),
(317, 'গ্লোবাল ট্রেডিং', 'বেনাপোল ,স্থলবন্দর', 'cnf283@gmail.com', '0177347735', '', '', 'প্রশান্ত কুমার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:20:44', 4),
(318, 'সৌরভ এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf698@gmail.com', '01716808731', '', '', 'মিসেস সাজেদা ইসলাম', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:20:56', 1),
(319, 'এস আহমেদ এন্ড কোম্পানি', 'স্থল-বন্দর, বেনাপোল', 'cnf120@gmail.com', '01711972874', '', '', 'মোঃ সাজেদুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:21:13', 1),
(320, 'সিরাজ এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf699@gmail.com', '01714478719', '', '', 'এস. এম. মিজানুর রহমান (মিজান)', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:21:31', 1),
(321, 'গ্রীনল্যান্ড শিপিং এজেন্ট', 'বেনাপোল ,স্থলবন্দর', 'cnf284@gmail.com', '01711858775', '', '', 'মিসেস আখতারুন্নাহার হিরন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:21:42', 4),
(322, 'সাঈদ এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf700@gmail.com', '01712555317', '', '', 'মোঃ আবু সাঈদ খান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:22:18', 1),
(323, 'এম এস এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf121@gmail.com', '01711538825', '', '', 'মো মনিরুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:22:36', 1),
(324, 'সম্রাট এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf701@gmail.com', '01711755929', '', '', 'আলহাজ্ব মজনুর রহমান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:22:53', 1),
(325, 'এসএম তারিক প্রাইভেট লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf122@gmail.com', '01711612985', '', '', 'মোহাম্মদ শাহজাহান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:23:30', 1),
(326, 'সোহাগ এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf702@gmail.com', '01711358924', '', '', 'মোঃ হায়দার আলী', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:24:03', 1),
(327, 'গ্যা ঞ্জোজ  ইন্টারন্যাশনাল প্রাইভেট লিমিটেড', 'বেনাপোল ,স্থলবন্দর', 'cnf285@gmail.com', '01711308361', '', '', 'আলহাজ্ব ইসারুল হক', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:24:39', 4),
(328, 'এ আকবর এন্টারপ্রাইজ প্রাইভেট লিমিটেড ', 'স্থল-বন্দর, বেনাপোল', 'cnf123@gmail.com', '01711820581', '', '', 'মোহাম্মদ খবির উদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:24:41', 1),
(329, 'সুরমা এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf703@gmail.com', '01746015189', '', '', 'মোস্তফা কামাল খান মামুন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:25:17', 1),
(330, 'গ্রাজুয়েট ইন্টারন্যাশনাল', 'বেনাপোল ,স্থলবন্দর', 'cnf286@gmail.com', '01819227269', '', '', 'মোঃ শাহজাহান আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:25:27', 4),
(331, 'এন এম এন্টারপ্রাইজ লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf124@gmail.com', '01819221958', '', '', 'ডেভিড', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:25:53', 1),
(332, 'গনি এন্ড সন্স', 'বেনাপোল ,স্থলবন্দর', 'cnf287@gmail.com', '01711548986', '', '', 'মোঃ আমিনুর রহমান ঝন্টু', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:26:13', 4),
(333, 'এ এম ট্রেডিং কোম্পানি', 'স্থল-বন্দর, বেনাপোল', 'cnf125@gmail.com', '01711649256', '', '', 'আলী হোসেন হাওলাদার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:26:37', 1),
(334, 'সোহান এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf704@gmail.com', '01711470184', '', '', ' আলহাজ্ব আব্দুস সোবহান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:26:51', 1),
(335, 'গ্লোবেক্স ইন্টারন্যাশনাল', 'বেনাপোল ,স্থলবন্দর', 'cnf288@gmail.com', '0031723572', '', '', 'মোঃ মিজানুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:27:01', 4),
(336, 'এস জে এস এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf126@gmail.com', '01715855268', '', '', 'মোহাম্মদ সাজেদুর রহমান লালটু', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:27:20', 1),
(337, 'এস আলম এন্ড সন্স', 'স্থল-বন্দর, বেনাপোল', 'cnf127@gmail.com', '0029333202', '', '', 'মোঃ খায়রুল আলম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:27:52', 1),
(338, 'গেড বীম অ্যাসোসিয়েট ', 'বেনাপোল ,স্থলবন্দর', 'cnf289@gmail.com', '01711830150', '', '', 'মোঃ মাহবুব আলম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:27:54', 4),
(339, 'সৈকত ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf705@gmail.com', '01713925935', '', '', 'মোঃ বিল্লাল হোসেন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:28:22', 1),
(340, 'গুডলাক এন্টারপ্রাইজ', 'বেনাপোল ,স্থলবন্দর', 'cnf290@gmail.com', '01819213133', '', '', 'রতন বাবু বৈষ্ণব', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:28:37', 4),
(341, 'এইচ এন্ড এইচ এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf128@gmail.com', '01819216369', '', '', 'মোহাম্মদ নূরুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:29:29', 1),
(342, 'গাইডেন্স এন্ড কোং ', 'বেনাপোল ,স্থলবন্দর', 'cnf291@gmail.com', '003150404', '', '', 'মৃণাল কান্তি দাস', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:29:43', 4),
(343, 'সেন্টমার্টিন কমোডিটিজ ', 'স্থল-বন্দর ,বেনাপোল', 'cnf706@gmail.com', '029565480', '', '', 'এম ফারুক', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:29:49', 1),
(344, 'এলিট ট্রেডিং লিঃ', 'স্থল-বন্দর, বেনাপোল', 'cnf129@gmail.com', '01711295525', '', '', 'মোহাম্মদ শহীদ সরোয়ার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:30:25', 1),
(345, 'গ্রামবাংলা এজেন্সি', 'বেনাপোল ,স্থলবন্দর', 'cnf292@gmail.com', '01715793834', '', '', 'এরশাদ উল্লাহ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:30:28', 4),
(346, 'সোনারগাঁ এজেন্সি', 'স্থল-বন্দর ,বেনাপোল', 'cnf707@gmail.com', '01720229512', '', '', 'মোঃ সালাউদ্দিন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:30:44', 1),
(347, 'সোনালী ট্রেডিং কর্পোরেশন', 'স্থল-বন্দর ,বেনাপোল', 'cnf708@gmail.com', '01199860558', '', '', 'কামাল উদ্দিন আহমেদ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:31:33', 1),
(348, 'এম কে কে লজিস্টিক', 'স্থল-বন্দর, বেনাপোল', 'cnf130@gmail.com', '01711630876', '', '', 'আলহাজ্ব এইচ এম শামসুদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:31:37', 1),
(349, 'স্পীড কিং', 'স্থল-বন্দর ,বেনাপোল', 'cnf709@gmail.com', '01711561545', '', '', 'এ কে এম ওবায়দুর রহমান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:32:18', 1),
(350, 'এম ভি  ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf131@gmail.com', '01747783323', '', '', 'জহুরুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:32:19', 1),
(351, 'সোনালী সি এন্ড এফ এজেন্সী লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf710@gmail.com', '01678713160', '', '', 'বিলকিস সুলতানা সাথী', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:33:09', 1),
(352, 'এস এম বজলুল হক এন্ড কোম্পানি লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf132@gmail.com', '01711528058', '', '', 'এস এম বজলুল হক', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:33:38', 1),
(353, 'গ্লোবাল  ট্রান্সপোর্টেশন সিস্টেম', 'বেনাপোল ,স্থলবন্দর', 'cnf294@gmail.com', '01711795822', '', '', 'এ বি এম জহিরুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:33:38', 4),
(354, 'সানি ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf711@gmail.com', '01711950450', '', '', 'মোঃ আব্দুর রশিদ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:34:21', 1),
(355, 'এস এস এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf133@gmail.com', '01912979744', '', '', 'শেখ সরোয়ার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:34:35', 1),
(356, 'গাউছিয়া ট্রেডিং', 'বেনাপোল ,স্থলবন্দর', 'cnf295@gmail.com', '01711236829', '', '', 'মোঃ  রাশেদ পাশা', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:34:38', 4),
(357, 'সাকো ট্রেড এজেন্সী', 'স্থল-বন্দর ,বেনাপোল', 'cnf712@gmail.com', '01713479814', '', '', 'সিরাজ উদ্দিন আহম্মেদ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:35:02', 1),
(358, 'সুজুতি এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf713@gmail.com', '-01915698082', '', '', 'জহির উদ্দিন আহমেদ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:35:33', 1),
(359, 'গ্রীনওয়ে ইন্টারন্যাশনাল প্রাইভেট লিমিটেড', 'বেনাপোল ,স্থলবন্দর', 'cnf296@gmail.com', '01711661921', '', '', 'মোহাম্মদ ইউনুস', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:35:39', 4),
(360, 'এএম শিপিং লাইনস লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf134@gmail.com', '01711275956', '', '', 'মোহাম্মদ মনির উদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:35:54', 1),
(361, 'গাজী ট্রেড লিমিটেড', 'বেনাপোল ,স্থলবন্দর', 'cnf297@gmail.com', '01711820398', '', '', 'মোঃ  কবির  উদ্দিন গাজী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:36:38', 4),
(362, 'এস আই আহমেদ এন্ড সন্স লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf135@gmail.com', '01819217899', '', '', 'হাওলাদার এম এম মহিউদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:36:44', 1),
(363, 'সানি ট্রান্স ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf714@gmail.com', '01711666127', '', '', 'এম এ সোবহান ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:37:06', 1),
(364, 'গালফ  ভেঞ্চার লিমিটেড', 'বেনাপোল ,স্থলবন্দর', 'cnf298@gmail.com', '01714087740', '', '', 'মোঃ ওবায়দুল হক', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:37:41', 4),
(365, 'সানরাইজ এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf715@gmail.com', '01917017048', '', '', 'মোঃ সিরাজুল ইসলাম', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:37:58', 1),
(366, 'এসএ এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf4136@gmail.com', '01711842381', '', '', 'মোহাম্মদ শামছুল আলম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:38:03', 1),
(367, 'এম এ কর্পোরেশন', 'স্থল-বন্দর, বেনাপোল', 'cnf137@gmail.com', '01711243318', '', '', 'মোঃ মাহবুবুল হক', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:38:37', 1),
(368, 'সী গাল শিপিং', 'স্থল-বন্দর ,বেনাপোল', 'cnf716@gmail.com', '01715092899', '', '', 'মোঃ শামছুদ্দিন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:38:45', 1),
(369, 'এক্সপ্রেস সিএন্ডএফ এজেন্ট', 'স্থল-বন্দর, বেনাপোল', 'cnf138@gmail.com', '01711447891', '', '', 'ওবায়দুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:39:12', 1),
(370, 'গালস ওয়ারেন্টের সিওয়েজ ', 'বেনাপোল ,স্থলবন্দর', 'cnf299@gmail.com', '00000000003', '', '', 'শেখ মাসুদ হামিদ ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:39:21', 4),
(371, 'সালেহ ইন্টারন্যাশনাল প্রাঃ লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf717@gmail.com', '01711560122', '', '', 'মোঃ শাহানেওয়াজ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:39:50', 1),
(372, 'ঘোষ ট্রেড ইন্টারন্যাশনাল', 'বেনাপোল ,স্থলবন্দর', 'cnf300@gmail.com', '01716446778', '', '', 'জনাব অরুণ কুমার ঘোষ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:40:05', 4),
(373, 'এম আর এন এন্ড কোম্পানি', 'স্থল-বন্দর, বেনাপোল', 'cnf139@gmail.com', '01711829690', '', '', 'নাছিম উল আলম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:40:05', 1),
(374, 'সেভেন সিজ শিপিং লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf718@gmail.com', '01711821173', '', '', 'মিসেস সায়লা রইজ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:40:50', 1),
(375, ' মহাম্মদ নিজাম ', 'স্থল-বন্দর, বেনাপোল', 'cnf140@gmail.com', '01711521271', '', '', 'মহাম্মদ নিজাম উদ্দিন হায়দার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:41:04', 1),
(376, 'সাই এন্ড কোং লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf719@gmail.com', '01711421734', '', '', 'মোঃ মোস্তফা কামাল চৌধুরী', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:41:47', 1),
(377, 'এবি সালেহ আহমেদ এন্ড কোম্পানি', 'স্থল-বন্দর, বেনাপোল', 'cnf141@gmail.com', '01861284218', '', '', 'জালাল আহমেদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:41:57', 1),
(378, 'সেজুতী এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf720@gmail.com', '01713917809', '', '', 'নেছার উদ্দিন আহম্মেদ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:42:20', 1),
(379, 'এসএম ট্রেডার্স', 'স্থল-বন্দর, বেনাপোল', 'cnf142@gmail.com', '01711225260', '', '', 'তালুকদার সায়েদুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:42:37', 1),
(380, 'সুলতান এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf721@gmail.com', '01712948571', '', '', 'সুলতান আহমেদ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:42:57', 1),
(381, 'এস আর কর্পোরেশন', 'স্থল-বন্দর, বেনাপোল', 'cnf143@gmail.com', '029335136', '', '', 'এম এ রশিদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:43:43', 1),
(382, 'চাম কার্গো ইন্টারন্যাশনাল', 'বেনাপোল ,স্থলবন্দর', 'cnf301@gmail.com', '01711869598', '', '', 'মোঃ আলমগীর হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:43:58', 4),
(383, 'সিউ-রিপ প্যাকার্স এন্ড শিপার্স ', 'স্থল-বন্দর ,বেনাপোল', 'cnf722@gmail.com', '01199848060', '', '', 'পারভেজ আনোয়ার', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:44:28', 1),
(384, 'চৌধুরী সিন্ডিকেট', 'বেনাপোল ,স্থলবন্দর', 'cnf302@gmail.com', '01711690077', '', '', 'মোঃ মোস্তাফিজুর রহমান চৌধুরী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:44:39', 4),
(385, 'অ্যাসোসিয়েটেড শিপিং', 'স্থল-বন্দর, বেনাপোল', 'cnf144@gmail.com', '01711840536', '', '', 'মোঃ শামসুল আলম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:45:00', 1),
(386, 'চাঁদ এন্টারপ্রাইজ ', 'বেনাপোল ,স্থলবন্দর', 'cnf303@gmail.com', '01715488269', '', '', 'মোঃ আজগর আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:45:19', 4),
(387, 'সি-শোর এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf723@gmail.com', '01711831370', '', '', '', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:45:36', 1),
(388, 'এমি এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf145@gmail.com', '01711397479', '', '', 'সৈয়দ আজিজুল হক', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:45:42', 1),
(389, 'চাঁদপুর ট্রেডিং এজেন্সি', 'বেনাপোল ,স্থলবন্দর', 'cnf304@gmail.com', '01819288626', '', '', 'মোঃ মাসুদুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:46:08', 4),
(390, 'এম রফিকুল ইসলাম এন্ড কোম্পানি ', 'স্থল-বন্দর, বেনাপোল', 'cnf146@gmail.com', '01711541135', '', '', 'এম রফিকুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:46:18', 1),
(391, 'সানমুন এন্টারপ্রাইজ বিডি লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf724@gmail.com', '01715004870', '', '', 'শামছুর রহমান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:46:33', 1),
(392, 'এসএফ ট্রেডার্স', 'স্থল-বন্দর, বেনাপোল', 'cnf147@gmail.com', '01711520279', '', '', ' মোঃ ফারুক আলম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:46:51', 1),
(393, 'চ্যালেঞ্জ ইন্টারন্যাশনাল অ্যাসোসিয়েট', 'বেনাপোল ,স্থলবন্দর', 'cnf305@gmail.com', '01711750653', '', '', 'মোঃ নাসির উদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:46:59', 4),
(394, 'সজীব ট্রেডার্স', 'স্থল-বন্দর ,বেনাপোল', 'cnf725@gmail.com', '01711841696', '', '', 'আলহাজ্ব মোঃমনিরুজ্জামান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:47:27', 1),
(395, 'চৈতি এন্টারপ্রাইজ', 'বেনাপোল ,স্থলবন্দর', 'cnf306@gmail.com', '01712109732', '', '', 'মোঃ আলমগীর হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:47:37', 4),
(396, 'এস এ হুদা এন্ড কোম্পানি ', 'স্থল-বন্দর, বেনাপোল', 'cnf148@gmail.com', '01711748895', '', '', 'Please add your name', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:47:59', 1),
(397, 'সেভেন স্টার ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf726@gmail.com', '01711850839', '', '', 'আবুবক্কর সিদ্দিক', '11111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:48:11', 1),
(398, 'চমক সিন্ডিকেট ', 'বেনাপোল ,স্থলবন্দর', 'cnf307@gmail.com', '01711722674', '', '', 'সৈয়দ মোহাম্মদ আবু তৈয়ব', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:48:23', 4),
(399, 'সেলিম এজেন্সী', 'স্থল-বন্দর ,বেনাপোল', 'cnf727@gmail.com', '01726060365', '', '', 'আলহাজ্ব আজিজুর রহমান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:48:51', 1),
(400, 'এস এফ ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf149@gmail.com', '01552102016', '', '', 'মোহাম্মদ সালেহ উদ্দিন ফারুকী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:49:24', 1),
(401, 'স্কাই লাইন ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf728@gmail.com', '01713038689', '', '', 'মোঃ ওসমান গনি', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:49:38', 1),
(402, 'চিতা ইম্পেক্স ', 'বেনাপোল ,স্থলবন্দর', 'cnf308@gmail.com', '01713211248', '', '', 'মোঃ শাহ আলম মজুমদার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:49:41', 4),
(403, 'এ জি এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf150@gmail.com', '01711523151', '', '', 'বাবু গৌরচন্দ্র', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:50:16', 1),
(404, 'সারথী এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf729@gmail.com', '01711217372', '', '', 'আলহাজ্ব মোঃ মতিয়ার রহমান', 'inventor@180395', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:50:18', 1),
(405, 'সিদ্দিকুর রহমান এন্ড কোং', 'বেনাপোল ,স্থলবন্দর', 'cnf309@gmail.com', '01711896778', '', '', ' মোঃ  সিদ্দিকুর রহমান', '23456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:50:27', 4),
(406, 'সুচী এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf730@gmail.com', '01711988468', '', '', 'কাজী শাহজাহান সবুজ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:50:53', 1),
(407, 'এস এম এস এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf151@gmail.com', '01819219622', '', '', 'মোঃ মশিউর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:51:23', 1),
(408, 'জুলফিকার আলী এন্ড সন্স', 'বেনাপোল ,স্থলবন্দর', 'cnf310@gmail.com', '01711348558', '', '', 'আলহাজ্ব জুলফিকার আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:51:44', 4),
(409, 'সোহাগ ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf731@gmail.com', '01711897303', '', '', 'মোঃ মনিরুজ্জামান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:52:05', 1),
(410, 'জিলানী ট্রেডিং', 'বেনাপোল ,স্থলবন্দর', 'cnf311@gmail.com', '01711133917', '', '', 'মোঃ শফিকুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:52:26', 4),
(411, 'এড ডন', 'স্থল-বন্দর, বেনাপোল', 'cnf152@gmail.com', '01716655328', '', '', 'মোহাম্মদ শওকত আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:52:36', 1),
(412, 'সহীদ ট্রেডিং কর্পোরেশন', 'স্থল-বন্দর ,বেনাপোল', 'cnf732@gmail.com', '01712062382', '', '', 'আবু জাফর মোঃ মনির', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:52:49', 1),
(413, 'জামান ট্রেডস', 'বেনাপোল ,স্থলবন্দর', 'cnf312@gmail.com', '01819215069', '', '', 'আলহাজ্ব খাইরুজ্জামান মধু', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:53:39', 4),
(414, 'সোনালী সেন্টার (প্রাঃ) লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf733@gmail.com', '01711113265', '', '', 'মোঃ হাদিউজ্জামান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:53:49', 1),
(415, 'এক্সেল ফেইড সিস্টেম লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf153@gmail.com', '01819223685', '', '', 'বাবু আশিক কুমার সাহা', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:54:37', 1),
(416, 'জয়নাল এন্ড সন্স ', 'বেনাপোল ,স্থলবন্দর', 'cnf314@gmail.comc', '01711816468', '', '', 'মোঃ আইয়ুব হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:54:49', 4),
(417, 'মোঃ সাইফুল ইসলাম', 'স্থল-বন্দর ,বেনাপোল', 'cnf734@gmail.com', '01884515717', '', '', 'জনাবা রুনা লাইলা', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:54:56', 1),
(418, 'এশিয়ান ট্রেডিং কোম্পানি', 'স্থল-বন্দর, বেনাপোল', 'cnf154@gmail.com', '01714088945', '', '', 'আলী কদর', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:55:28', 1),
(419, 'জয়েন্ট এন্টারপ্রাইজ', 'বেনাপোল ,স্থলবন্দর', 'cnf315@gmail.com', '01919297581', '', '', 'আলহাজ্ব হাবিবুর রহমান (হবি)', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:55:50', 4),
(420, 'সুপ্রিম', 'স্থল-বন্দর ,বেনাপোল', 'cnf735@gmail.com', '01969127495', '', '', 'মোঃ তাসিরুল ইসলাম', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:56:00', 1),
(421, 'জেকে এন্টারপ্রাইজ ', 'বেনাপোল ,স্থলবন্দর', 'cnf316@gmail.com', '01760606956', '', '', 'জ রাজিয়া সুলতানা', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:56:24', 4),
(422, 'এস এস ট্রেডিং হাউস', 'স্থল-বন্দর, বেনাপোল', 'cnf156@gmail.com', '01712110489', '', '', 'মোঃ হাফিজুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:56:46', 1),
(423, 'সুজন এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf736@gmail.com', '01723115061', '', '', 'মোঃ মোস্তাফিজুর রহমান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:56:48', 1),
(424, 'সাপিয়া পাপিয়া এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf737@gmail.com', '01711065742', '', '', 'হাওলাদার আবুল কালাম আজাদ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:57:32', 1),
(425, 'সালভেশন লজিস্টিক', 'স্থল-বন্দর ,বেনাপোল', 'cnf738@gmail.com', '01713085907', '', '', 'মাসুদ হাসান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:58:12', 1),
(426, 'এ আর  সিন্ডিকেট', 'স্থল-বন্দর, বেনাপোল', 'cnf158@gmail.com', '01711817602', '', '', 'মিসেস রওশন সুলতানা', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:58:22', 1),
(427, 'জাহান শিপিং লাইসেন্স', 'বেনাপোল ,স্থলবন্দর', 'cnf317@gmail.com', '01711309342', '', '', 'মোঃ আব্দুল আজিজ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:58:38', 4),
(428, 'সালাম এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf739@gmail.com', '01712166084', '', '', 'মোঃ আব্দুস সালাম ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:58:54', 1),
(429, 'এফ এফ কে এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf159@gmail.com', '01819225277', '', '', 'এ জেড এম ফরিদুজ্জামান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:59:09', 1),
(430, 'জি এসএস ট্রেড সিন্ডিকেট', 'বেনাপোল ,স্থলবন্দর', 'cnf318@gmail.com', '01731047211', '', '', 'মোঃ শহিদুল আলম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:59:29', 4),
(431, 'সাফ-কোং', 'স্থল-বন্দর ,বেনাপোল', 'cnf740@gmail.com', '01742400278', '', '', 'এ কে এম গােলাম ফারুক', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 01:59:36', 1),
(432, 'জয়ী ইন্টারন্যাশনাল প্রাইভেট লিমিটেড', 'বেনাপোল ,স্থলবন্দর', 'cnf319@gmail.com', '01711842365', '', '', ' মিস্টার শরীফ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:00:30', 4),
(433, 'সোমা এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf741@gmail.com', '01711899179', '', '', 'মোঃ ইদ্রিস মালেক', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:01:00', 1),
(434, 'জেমস ইন্টারন্যাশনাল', 'বেনাপোল ,স্থলবন্দর', 'cnf320@gmail.com', '01711531474', '', '', ' স্বপন বড়ুয়া', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:01:09', 4),
(435, 'এস এস এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf160@gmail.com', '01713062435', '', '', 'মোহাম্মদ সুলতান হোসেন খান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:01:32', 1),
(436, 'সিনসিয়ার ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf742@gmail.com', '01711850939', '', '', 'শরীফ মোঃ হ্যাপি', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:01:53', 1),
(437, 'জয় ট্রেডার্স', 'বেনাপোল ,স্থলবন্দর', 'cnf321@gmail.com', '01711761845', '', '', 'বাবু পার্থ প্রতিম বড়ুয়া', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:02:09', 4),
(438, 'সুকতা কর্পোরেশন', 'স্থল-বন্দর ,বেনাপোল', 'cnf743@gmail.com', '01711820406', '', '', 'মোঃ সানোয়ার হোসেন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:02:53', 1),
(439, 'জোনাস কর্পোরেশন', 'স্থল-বন্দর,বেনাপোল ', 'cnf322@gmail.com', '01711813263', '', '', 'মোঃ গিয়াস উদ্দিন পাটোয়ারী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:04:13', 4),
(440, 'সুগন্ধা ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf744@gmail.com', '01715513110', '', '', 'মোঃ জাকির হোসেন খান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:04:14', 1),
(441, 'এস এম চৌধুরী এন্ড ব্রাদার্স', 'স্থল-বন্দর, বেনাপোল', 'cnf161@gmail.com', '01819313187', '', '', 'মোঃ সৈয়দ মোস্তফা চৌধুরী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:04:48', 1),
(442, 'জামিল এন্ড ব্রাদার্স', 'স্থল-বন্দর,বেনাপোল ', 'cnf323@gmail.com', '01711903647', '', '', 'মোঃ জামাল উদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:05:04', 4),
(443, 'সী লোটাস শিপিং এজেন্সী প্রাঃ লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf745@gmail.com', '01713030064', '', '', 'মোঃ তানবিরুল ইসলাম চৌধুরী', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:05:30', 1),
(444, 'জিলানী এয়ার কার্গো', 'স্থল-বন্দর,বেনাপোল ', 'cnf324@gmail.com', '01715005519', '', '', 'র্গো মোঃ আব্দুর রশিদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:05:45', 4),
(445, 'এম আর টি ফ্রীইড সিস্টেম', 'স্থল-বন্দর, বেনাপোল', 'cnf162@gmail.com', '01715050590', '', '', 'মোঃ মজিবুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:06:02', 1),
(446, 'সাব্বির এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf746@gmail.com', '01712030436', '', '', 'মোঃ শাহানুর ইসলাম শাহিন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:06:26', 1),
(447, 'জেড আর কর্পোরেশন', 'স্থল-বন্দর,বেনাপোল ', 'cnf325@gmail.com', '01711131431', '', '', 'জাকিয়া রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:06:49', 4),
(448, 'এইচ কে এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf163@gmail.com', '01711841164', '', '', 'মোঃ হারুন-অর-রশিদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:06:56', 1),
(449, 'সামাদ এন্ড সন্স', 'স্থল-বন্দর ,বেনাপোল', 'cnf747@gmail.com', '01715670060', '', '', 'মফিজ উদ্দিন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:07:48', 1),
(450, 'এম এন শিপিং ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf164@gmail.com', '0155730457', '', '', 'এম এন শিপিং ইন্টারন্যাশনাল', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:07:59', 1),
(451, 'জেবা এন্ড ব্রাদার্স', 'স্থল-বন্দর,বেনাপোল ', 'cnf327@gmail.com', '01711542626', '', '', 'Please  enter your name', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:08:09', 4),
(452, 'এস আর এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf165@gmail.com', '01819212974', '', '', 'আলহাজ্ব শাহজাহান আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:08:42', 1),
(453, 'জেকে ইন্টারন্যাশনাল', 'স্থল-বন্দর,বেনাপোল ', 'cnf328@gmail.com', '01713009740', '', '', 'মোঃ জাহাঙ্গীর কোভিদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:09:06', 4),
(454, 'স্বাধীন এন্ড ব্রাদার্স', 'স্থল-বন্দর ,বেনাপোল', 'cnf749@gmail.com', '01712740921', '', '', 'মোঃ শাহ-আলম', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:09:39', 1),
(455, 'এস রহমান এন্ড সন্স', 'স্থল-বন্দর, বেনাপোল', 'cnf166@gmail.com', '01749646081', '', '', 'মোঃ সাজেদুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:10:00', 1),
(456, 'জামান এন্টারপ্রাইজ', 'স্থল-বন্দর,বেনাপোল ', 'cnf329@gmail.com', '01712579933', '', '', 'শেখ আসাদুজ্জামান মিন্টু', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:10:05', 4),
(457, 'সাকিয়াত কন্সট্রাকশন', 'স্থল-বন্দর ,বেনাপোল', 'cnf750@gmail.com', '01711593400', '', '', 'মোঃ মোস্তাক আহমেদ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:10:29', 1),
(458, 'এস বি এস শিপিং এন্ড ট্রেডিং প্রাইভেট লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf167@gmail.com', '0171170001438', '', '', 'মোহাম্মদ গিয়াস উদ্দিন আহমেদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:10:42', 1),
(459, 'জিসান টেড্রাস', 'স্থল-বন্দর,বেনাপোল ', 'cnf330@gmail.com', '01711157683', '', '', 'মোঃ মমিনুর  রহমান ময়না', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:11:07', 4),
(460, 'সানি এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf752@gmail.com', '01912054183', '', '', 'মোঃ লিয়াকত আলী', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:11:31', 1),
(461, 'এম বি ক্লিয়ারিং লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf168@gmail.com', '01715004792', '', '', 'মোঃ মোস্তাক আহমেদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:11:36', 1),
(462, 'জে জে এসোসিয়েট ', 'স্থল-বন্দর,বেনাপোল ', 'cnf331@gmail.com', '01711722044', '', '', 'জাবের ইবনে কাদের', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:12:12', 4),
(463, 'সুলতান মাহমুদ', 'স্থল-বন্দর ,বেনাপোল', 'cnf753@gmail.com', '01711345165', '', '', 'মোঃ সুলতান মাহমুদ বিপুল', '11111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:12:16', 1),
(464, 'এভার ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf169@gmail.com', '01711524005', '', '', 'মোঃ সেলিম হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:12:51', 1),
(465, 'সম্পা শিপিং লাইন্স', 'স্থল-বন্দর ,বেনাপোল', 'cnf754@gmail.com', '01711981714', '', '', 'মোঃ সাখাওয়াত হোসেন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:12:59', 1),
(466, 'জ্যোতি ইন্টারন্যাশনাল', 'স্থল-বন্দর,বেনাপোল ', 'cnf332@gmail.com', '01714002061', '', '', ' বাবু রুদ্র জ্যোতি দাস', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:12:59', 4),
(467, 'জে এস এন্টারপ্রাইজ ', 'স্থল-বন্দর,বেনাপোল ', 'cnf333@gmail.com', '01711246445', '', '', 'আব্দুল মালেক', 'Jcs002255.,.,.', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:13:35', 4),
(468, 'স্পীড ওয়ে লজিস্ট্রিক', 'স্থল-বন্দর ,বেনাপোল', 'cnf755@gmail.com', '01712730045', '', '', 'মোঃ খায়রুল আলম আকন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:13:36', 1),
(469, 'এসবি ট্রেডার্স', 'স্থল-বন্দর, বেনাপোল', 'cnf170@gmail.com', '01734720292', '', '', 'শান্তা আক্তার ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:13:46', 1),
(470, 'জেমস ইন্টারন্যাশনাল ', 'স্থল-বন্দর,বেনাপোল ', 'cnf334@gmail.com', '01711527307', '', '', ' মোঃ জাহাঙ্গীর আলম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:14:16', 4),
(471, 'ষ্টার পাত সি ট্রেড লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf756@gmail.com', '016112176666', '', '', 'ক্যাপ্টেন মোঃ রফিকুল ইসলাম', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:14:22', 1),
(472, 'এসএফ ট্রেডিং কর্পোরেশন', 'স্থল-বন্দর, বেনাপোল', 'cnf171@gmail.com', '01711347462', '', '', 'গাজী মনিবুর ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:14:55', 1),
(473, 'জয়েন্ট স্টার এজেন্সি', 'স্থল-বন্দর,বেনাপোল ', 'cnf335@gmail.com', '01711944007', '', '', 'শেখ জিল্লুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:15:08', 4),
(474, 'স্বদেশ ট্রেডিং এজেন্সী লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf757@gmail.com', '01711842380', '', '', 'মোঃ সোলায়মান হোসেন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:15:11', 1),
(475, 'এম আর করপরেশন', 'স্থল-বন্দর, বেনাপোল', 'cnf172@gmail.com', '01711561954', '', '', 'মোহাম্মদ মফিউর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:15:48', 1),
(476, 'জুপিটার ট্রেডিং কর্পোরেশন ', 'স্থল-বন্দর,বেনাপোল ', 'cnf336@gmail.com', '01711747083', '', '', 'নারায়ন চন্দ্র ভূঁইয়া', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:16:05', 4),
(477, 'সোহান ট্রেড সেন্টার লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf758@gmail.com', '01714442599', '', '', 'আহসান হাবীব সেলিম', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:16:26', 1),
(478, 'এম রহমান এন্ড কোম্পানি', 'স্থল-বন্দর, বেনাপোল', 'cnf173@gmail.com', '01719412002', '', '', 'মোঃ মিজানুর রহমান খোকন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:16:36', 1),
(479, 'জেকে সেন্টিকেট প্রাইভেট লিমিটেড', 'স্থল-বন্দর,বেনাপোল ', 'cnf337@gmail.com', '01711537029', '', '', 'আনোয়ারুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:17:07', 4),
(480, 'এম এ হান্নান এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf174@gmail.com', '01711388029', '', '', 'এম এ হান্নান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:17:17', 1),
(481, 'জুয়েল এন্টারপ্রাইজ ', 'স্থল-বন্দর,বেনাপোল ', 'cnf338@gmail.com', '01712091633', '', '', 'মোঃ সাইফুল ইসলাম জুয়েল', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:17:44', 4),
(482, 'সোপান এন্টারপ্রাইজ লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf759@gmail.com', '01711549584', '', '', 'মেজর আনিসুর রহমান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:17:57', 1),
(483, 'জারিন এন্টারপ্রাইজ', 'স্থল-বন্দর,বেনাপোল ', 'cnf339@gmail.com', '01711309593', '', '', 'আজিম উদ্দিন গাজী', '1213456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:18:26', 4),
(484, 'সুফি এন্টারপ্রাইজেস লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf760@gmail.com', '01711830186', '', '', 'সৈয়দ জামান আহমদ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:18:26', 1),
(485, 'এনেক্স ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf175@gmail.com', '01919299106', '', '', 'ফারুক হোসেন উজ্জল', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:19:08', 1),
(486, 'সাবা ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf761@gmail.com', '01713400018', '', '', 'মোঃ নাজমুল হোসেন মুকুল', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:19:28', 1),
(487, 'এ এইচ এন্টারপ্রাইজ ', 'স্থল-বন্দর, বেনাপোল', 'cnf176@gmail.com', '01819707270', '', '', 'মোঃ আব্দুল খালেক তালুকদার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:19:49', 1),
(488, 'সাগর এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf762@gmail.com', '01711971183', '', '', 'মোঃ আকবর আলী', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:20:18', 1),
(489, 'এ আই ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf177@gmail.com', '01823362112', '', '', 'মোহাম্মদ দীন ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:20:42', 1),
(490, 'সার্ভিস লাইন', 'স্থল-বন্দর ,বেনাপোল', 'cnf763@gmail.com', '01729419009', '', '', 'নাসিমা পারভীন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:21:01', 1),
(491, 'এ কে সিএন্ডএফ লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf178@gmail.com', '01716302295', '', '', 'মোঃ নজরুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:21:45', 1),
(492, 'সি এস এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf764@gmail.com', '01777777609', '', '', 'সাখাওয়াত হোসেন খান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:21:59', 1),
(493, 'জেন ট্রেডিং কর্পোরেশন', 'স্থল-বন্দর,বেনাপোল ', 'cnf340@gmail.com', '01911323082', '', '', 'মিকি ডায়েজ ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:22:13', 4),
(494, 'এম আহমেদ', 'স্থল-বন্দর, বেনাপোল', 'cnf179@gmail.com', '01714017112', '', '', 'এম আহমেদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:22:32', 1),
(495, 'সিমা এন্টারপ্রাইজ লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf765@gmail.com', '01711825838', '', '', 'মোঃ ফারুক আহম্মেদ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:22:47', 1),
(496, 'সেফ এক্সপ্রেস', 'স্থল-বন্দর ,বেনাপোল', 'cnf766@gmail.com', '01711831802', '', '', 'সৈয়দ আরিফুজ্জামান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:23:23', 1),
(497, 'এন এম এক্সপ্রেস লিঃ ', 'স্থল-বন্দর, বেনাপোল', 'cnf180@gmail.com', '029110323', '', '', 'নিউ জি', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:23:25', 1),
(498, 'জে এন্ড জে  কর্পোরেশন', 'স্থল-বন্দর,বেনাপোল ', 'cnf341@gmail.com', '01711349626', '', '', 'মোঃ আসাদুজ্জামান খোকন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:23:43', 4),
(499, 'এফ আর এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf181@gmail.com', '01711365244', '', '', 'শেখ ফরিদ উদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:24:06', 1),
(500, 'সারাসেন কর্পোরেশন', 'স্থল-বন্দর ,বেনাপোল', 'cnf767@gmail.com', '01551400600', '', '', 'মোঃ জাহাঙ্গীর আলম', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:24:11', 1),
(501, 'জিরো প্লাস', 'স্থল-বন্দর,বেনাপোল ', 'cnf342@gmail.com', '01711275242', '', '', 'মোঃ আবুল হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:24:43', 4),
(502, 'এফ এস এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf182@gmail.com', '01712100503', '', '', 'মোহাম্মদ শাহজালাল', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:24:50', 1),
(503, 'হীরামন ট্রেডার্স', 'স্থল-বন্দর ,বেনাপোল', 'cnf768@gmail.com', '01718749645', '', '', '', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:24:54', 1),
(504, 'জেবিন এন্টারপ্রাইজ', 'স্থল-বন্দর,বেনাপোল ', 'cnf343@gmail.com', '01711897304', '', '', 'মোখলেসুর রহমান', 'Jcs002255.,.,.', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:26:03', 4),
(505, 'এইচ এফ ট্রেড ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf183@gmail.com', '01711309041', '', '', 'মোহাম্মদ ফারুক আহমেদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:26:05', 1),
(506, 'হোয়াইট ওয়েজ এজেন্সী', 'স্থল-বন্দর ,বেনাপোল', 'cnf769@gmail.com', '01711841628', '', '', ' মোঃ বিবুর রহমান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:26:22', 1),
(507, 'এম এইচ তৃপ্তি', 'স্থল-বন্দর, বেনাপোল', 'cnf184@gmail.com', '01713062797', '', '', 'মোহাম্মদ মফিকুল হাসান তৃপ্তি', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:26:51', 1),
(508, 'জে  আর ট্রেডিং কোম্পানি', 'স্থল-বন্দর,বেনাপোল ', 'cnf344@gmail.com', '01711952275', '', '', 'মোঃ রফিকুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:27:26', 4),
(509, 'হীরা এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf770@gmail.com', '01715422457', '', '', 'মিসেস আসমত আরা জামাল', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:27:37', 1),
(510, 'এম এল ট্রেড ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf185@gmail.com', '01767746211', '', '', 'মুক্তা পারভিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:27:53', 1),
(511, 'জিএম ট্রেডিং কর্পোরেশন', 'স্থল-বন্দর,বেনাপোল ', 'cnf345@gmail.com', '01711528649', '', '', 'মোঃ গোলাম গাউস', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:28:33', 4),
(512, 'হোসেন এন্ড সন্স', 'স্থল-বন্দর ,বেনাপোল', 'cnf771@gmail.com', '01818509946', '', '', 'মোঃ ইউনুচ', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:28:55', 1),
(513, 'হংকং ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf772@gmail.com', '01819239108', '', '', 'মোঃ হামিদুর রহমান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:30:20', 1),
(514, 'জেবিএম ট্রেডিং', 'স্থল-বন্দর,বেনাপোল ', 'cnf346@gmail.com', '01712117882', '', '', 'মোঃ  মাহমুদ আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:30:36', 4),
(515, 'এস হক এন্ড সন্স', 'স্থল-বন্দর, বেনাপোল', 'cnf187@gmail.com', '01713031230', '', '', 'মোঃ আসলামুল হক মিলন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:31:25', 1),
(516, 'হুসাইন জামাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf773@gmail.com', '01716319737', '', '', 'মোঃ হুসাইন জামাল', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:31:30', 1),
(517, 'জেএফ এন্টারপ্রাইজ', 'স্থল-বন্দর,বেনাপোল ', 'cnf347@gmail.com', '01711530614', '', '', 'জরুল ইসলাম ভূঁইয়া', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:31:46', 4),
(518, 'হাসনাইন এন্ড কোং', 'স্থল-বন্দর ,বেনাপোল', 'cnf774@gmail.com', '01711523664', '', '', 'এ এস এম শামছুজ্জোহা', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:32:10', 1),
(519, 'এস সরদার এন্ড সন্স', 'স্থল-বন্দর, বেনাপোল', 'cnf188@gmail.com', '01714002598', '', '', 'সেলিম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:32:39', 1),
(520, 'জুয়েল এন্টারপ্রাইজ লিমিটেড', 'স্থল-বন্দর,বেনাপোল ', 'cnf348@gmail.com', '01718669590', '', '', 'গাজী ওয়াদুদ ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:32:59', 4),
(521, 'এস এস এন্টারপ্রাইজ এন্ড কো', 'স্থল-বন্দর, বেনাপোল', 'cnf189@gmail.com', '01611520746', '', '', 'মোঃ মাজহারুল হক', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:33:27', 1),
(522, 'হোসেন ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf775@gmail.com', '01711570060', '', '', 'মোঃ বেলায়েত হোসেন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:33:53', 1),
(523, 'জানমনি ট্রেডিং প্রাইভেট লিমিটেড', 'স্থল-বন্দর,বেনাপোল ', 'cnf349@gmail.com', '0171106804', '', '', 'মোঃ নাজমুল হক', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:33:54', 4);
INSERT INTO `cnf_info` (`cnf_info_id`, `cnf_full_name`, `cnf_address`, `cnf_email_address`, `cnf_primary_mobile_number`, `cnf_op1_mobile_number`, `cnf_op2_mobile_number`, `cnf_user_name`, `cnf_user_password`, `cnf_nid_number`, `cnf_nid_card_front_side_image`, `cnf_nid_card_back_side_image`, `cnf_profile_photo`, `cnf_is_active`, `cnf_is_flash_notification`, `cnf_is_normal_notification`, `flash_notification_id`, `normal_notification_id`, `cnf_info_created_date`, `cnf_created_user_id`) VALUES
(524, 'এস আর পি ট্রেডিং কো', 'স্থল-বন্দর, বেনাপোল', 'cnf190@gmail.com', '0171402350', '', '', 'এস এম লুৎফর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:34:06', 1),
(525, 'হাই-কেয়ার কার্গো সার্ভিসেস', 'স্থল-বন্দর ,বেনাপোল', 'cnf776@gmail.com', '01711542008', '', '', 'মোঃ হুমায়ুন কবীর', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:34:44', 1),
(526, 'জি  ট্রেডিং এজেন্সি', 'স্থল-বন্দর,বেনাপোল ', 'cnf350@gmail.com', '0171868699', '', '', 'মোঃ লুৎফুর রহমান খান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:34:48', 4),
(527, 'হুদা ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf777@gmail.com', '017150064444', '', '', 'মোঃ আনিছুর রহমান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:35:24', 1),
(528, 'জবেদা এন্টারপ্রাইজ লিমিটেড', 'স্থল-বন্দর,বেনাপোল ', 'cnf351@gmail.com', '01712010614', '', '', 'মোঃ শফিকুর রহমান উজ্জল', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:35:53', 4),
(529, 'এমএ হোসেন ট্রেড ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf191@gmail.com', '01711578857', '', '', 'মোঃ মুতাকাব্বার  হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:36:06', 1),
(530, 'হলি কার্গো এক্সপ্রেস', 'স্থল-বন্দর ,বেনাপোল', 'cnf778@gmail.com', '01711521786', '', '', 'মোঃ আমিরুল ইসলাম', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:36:11', 1),
(531, 'এমএইচ ট্রেডিং কো', 'স্থল-বন্দর, বেনাপোল', 'cnf192@gmail.com', '01711169074', '', '', 'মোজাম্মেল হক', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:36:37', 1),
(532, 'হটলাইন কার্গো ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf779@gmail.com', '01711846996', '', '', 'বাবু অখিল চন্দ্র মন্ডল', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:36:52', 1),
(533, 'ঝিনু এন্টারপ্রাইজ প্রাইভেট লিমিটেড ', 'স্থল-বন্দর,বেনাপোল ', 'cnf352@gmail.com', '01711567762', '', '', 'মোঃ রেজা-ই-সেলিম ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:37:12', 4),
(534, 'এলান কর্পোরেশন লিমিটেড', 'স্থল-বন্দর, বেনাপোল', 'cnf193@gmail.com', '01711476163', '', '', 'এলান কর্পোরেশন লিমিটেড', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:37:48', 1),
(535, 'ঝালক এন্ড ব্রাদার্স', 'স্থল-বন্দর,বেনাপোল ', 'cnf353@gmail.com', '01715896112', '', '', 'মোঃ দেলোয়ার হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:38:20', 4),
(536, 'এন আহমেদ অ্যান্ড কোঃ', 'স্থল-বন্দর, বেনাপোল', 'cnf194@gmail.com', '01715089889', '', '', 'মোহাম্মদ নুরুদ্দিন আহমেদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:38:31', 1),
(537, 'ট্রেড ওয়েলকাম লিমিটেড', 'স্থল-বন্দর,বেনাপোল ', 'cnf354@gmail.com', '0029714546', '', '', 'মোঃ শামসুল হুদা', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:39:12', 4),
(538, 'এ এ এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf195@gmail.com', '01711732330', '', '', 'এ এস এম মাহবুবুল আলম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:39:18', 1),
(539, 'হাজারী এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf781@gmail.com', '01819212418', '', '', 'মোঃ নাসির উদ্দিন হাজারী', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:39:29', 1),
(540, 'এম রাহুল আমিন', 'স্থল-বন্দর, বেনাপোল', 'cnf196@gmail.com', '0171125180', '', '', 'মোহাম্মদ রুহুল আমিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:39:54', 1),
(541, 'ট্রেড  জংশন', 'স্থল-বন্দর,বেনাপোল ', 'cnf355@gmail.com', '01711837771', '', '', 'মোঃ  মনজুরুল হক', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:40:12', 4),
(542, 'হারবার শিপিং এজেন্সীজ লিঃ', 'স্থল-বন্দর ,বেনাপোল', 'cnf782@gmail.com', '01711524158', '', '', 'রেজাউল হক চৌধুরী মোস্তাক', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:40:21', 1),
(543, 'হাসিনা এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf783@gmail.com', '01916567480', '', '', 'মোঃ বদরুজ্জামান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:41:05', 1),
(544, 'এম আর এন্টারপ্রাইজ', 'স্থল-বন্দর, বেনাপোল', 'cnf197@gmail.com', '01711844898', '', '', 'মোঃ কামরুজ্জামান রকেট', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:41:10', 1),
(545, 'এস হোসাইন এন্ড কো', 'স্থল-বন্দর, বেনাপোল', 'cnf198@gmail.com', '01819931294', '', '', 'মোহাম্মদ সাজ্জাদ হোসাইন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:41:49', 1),
(546, 'হোমবাউন্ড প্যাকার্স এন্ড শিপার্স', 'স্থল-বন্দর ,বেনাপোল', 'cnf784@gmail.com', '01199802935', '', '', 'এন্সলেম এ কুইয়া', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:41:59', 1),
(547, 'এ এস ইন্টারন্যাশনাল', 'স্থল-বন্দর, বেনাপোল', 'cnf199@gmail.com', '01711530053', '', '', 'মোঃ আবু সাঈদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:42:25', 1),
(548, 'হায়দার এন্ড সন্স', 'স্থল-বন্দর ,বেনাপোল', 'cnf785@gmail.com', '01717096891', '', '', '', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:42:36', 1),
(549, 'টিভোলি এন্টারপ্রাইজ', 'স্থল-বন্দর,বেনাপোল ', 'cnf356@gmail.com', '01711947420', '', '', 'বিশ্বনাথ কর্মকার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:42:37', 4),
(550, 'হাফিজ ট্রেড এজেন্সী', 'স্থল-বন্দর ,বেনাপোল', 'cnf786@gmail.com', '01711297298', '', '', 'মোঃ হাফিজুর রহমান', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:43:16', 1),
(551, 'এইচ আর এস  শিপিং এজেন্সি', 'স্থল-বন্দর, বেনাপোল', 'cnf200@gmail.com', '01713337533', '', '', 'এস কে সিরাজ উদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:43:26', 1),
(552, 'ট্রেড উইনার লিমিটেড', 'স্থল-বন্দর,বেনাপোল ', 'cnf357@gmail.com', '01711661014', '', '', 'মোঃ আতাউর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:43:42', 4),
(553, 'হাসান এন্টারপ্রাইজ', 'স্থল-বন্দর ,বেনাপোল', 'cnf787@gmail.com', '01711375157', '', '', 'মোঃ আবুল হাসান জহির', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:44:02', 1),
(554, 'হাওলাদার ইন্টারন্যাশনাল', 'স্থল-বন্দর ,বেনাপোল', 'cnf788@gmail.com', '01711533330', '', '', 'বাবু রমেন হাওলাদার', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:44:40', 1),
(555, 'টি এন কর্পোরেশন লিমিটেড', 'স্থল-বন্দর,বেনাপোল ', 'cnf358@gmail.com', '01713160503', '', '', 'মোঃ আজাদ হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:44:49', 4),
(556, 'হোমল্যান্ড', 'স্থল-বন্দর ,বেনাপোল', 'cnf789@gmail.com', '01915950088', '', '', 'মোঃ কাইয়ুম হোসেন', '111111', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:45:52', 1),
(557, 'enter your company name', 'স্থল-বন্দর,বেনাপোল ', 'cnf359@gmail.com', '01711521108', '', '', 'মোঃ মিজানুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:50:01', 4),
(558, 'ট্রাম ট্রেড ', 'স্থল-বন্দর,বেনাপোল ', 'cnf360@gmail.com', '01711797555', '', '', 'এ এম জিয়াউর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:54:49', 4),
(559, 'ট্রেড  উইল ইন্টারন্যাশনাল', 'স্থল-বন্দর,বেনাপোল ', 'cnf361@gmail.com', '01713528533', '', '', ' মোঃ সাইফুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:56:24', 4),
(560, 'ট্রান্স ওশান শিপিং লাইসেন্স', 'স্থল-বন্দর,বেনাপোল ', 'cnf362@gmail.com', '01713100031', '', '', 'এম  মহিউদ্দিন আহমেদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 02:59:51', 4),
(561, 'টি এস কর্পোরেশন', 'স্থল-বন্দর,বেনাপোল ', 'cnf363@gmail.com', '01911655093', '', '', 'মোঃ শহিদুজ্জামান শহিদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 03:00:49', 4),
(562, 'টেক কেয়ার কার্গো সিস্টেম', 'স্থল-বন্দর,বেনাপোল ', 'cnf364@gmail.com', '01711708206', '', '', 'মোঃ কবির দ হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 03:01:54', 4),
(563, 'ট্রান্সকম ফ্লাইট  এন্ড লজিস্টিক', 'স্থল-বন্দর,বেনাপোল ', 'cnf365@gmail.com', '01711520778', '', '', 'এন সি ঘোষ কাজল', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 03:04:00', 4),
(564, 'ন্যাশনাল এজেন্সী ', 'স্থলবন্দর বেনাপোল', 'cnf418@gmail.com', '01732955781', '', '', 'টিএইচ হাসান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 15:33:25', 4),
(565, 'নিমফ ট্রেডিং', 'স্থলবন্দর বেনাপোল', 'cnf419@gmail.com', '01732661767', '', '', 'জিয়া ফজল রহিম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 15:40:04', 4),
(566, 'নীরা এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf420@gmail.com', '01711542822', '', '', 'মোঃ নজরুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 15:42:37', 4),
(567, 'নেয়ামত ট্রেডিং কর্পোরেশন', 'স্থলবন্দর বেনাপোল', 'cnf421@gmail.com', '01711359695', '', '', 'মোঃ মোশারফ হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 15:44:54', 4),
(568, 'নিউ ট্রেড এজেন্সি লিমিটেড', 'স্থলবন্দর বেনাপোল', 'cnf422@gmail.com', '01711062490', '', '', 'মোহাম্মদ নাসির উদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 15:48:19', 4),
(569, 'ট্রেড কমিশন', 'স্থল-বন্দর,বেনাপোল ', 'cnf366@gmail.com', '01711029890', '', '', 'মোঃ হুমায়ুন কবির ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:35:47', 4),
(570, 'ট্রেড ভিশন ইন্টারন্যাশনাল', 'স্থল-বন্দর,বেনাপোল ', 'cnf367@gmail.com', '01717184040', '', '', 'নারায়ন চন্দ্র দত্ত', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:37:22', 4),
(571, 'টোটাল কার্গো ম্যানেজমেন্ট ', 'স্থল-বন্দর,বেনাপোল ', 'cnf368@gmail.com', '01711571580', '', '', 'মোঃ হাবিবুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:38:19', 4),
(572, 'ডুয়েল ট্রেডার্স', 'স্থল-বন্দর,বেনাপোল ', 'cnf369@gmail.com', '01731510702', '', '', 'মোঃ শাহাদাত হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:39:17', 4),
(573, 'ডলফিন এন্টারপ্রাইজ', 'স্থল-বন্দর,বেনাপোল ', 'cnf370@gmail.com', '01711398644', '', '', 'মোঃ  তৌহিদ হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:40:27', 4),
(574, 'ডলফিন লিমিটেড', 'স্থল-বন্দর,বেনাপোল ', 'cnf371@gmail.com', '0031502479', '', '', 'জাম উদ্দিন আহমেদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:41:22', 4),
(575, 'ডায়নামিক ইয়ার লজিস্টিক এন্ড শিপিং', 'স্থল-বন্দর,বেনাপোল ', 'cnf372@gmail.com', '01715506066', '', '', 'মোঃ রায়হান কবির ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:42:50', 4),
(576, ' নিউ লাইট শিপসি এন্ড ট্রেডাস ', 'স্থলবন্দর বেনাপোল', 'cnf423@gmail.com', '01911555610', '', '', 'মোহাম্মদ শাদ  উল্লাহ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:43:39', 4),
(577, 'ডি কে এন্টারপ্রাইজ', 'স্থল-বন্দর,বেনাপোল ', 'cnf373@gmail.com', '01711070429', '', '', 'Please  enter your name', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:43:45', 4),
(578, 'নীলা ইন্টারন্যাশনাল এজেন্সি বাবু মেহের মুখার্জি', 'স্থলবন্দর বেনাপোল', 'cnf424@gmail.com', '01919913917', '', '', 'বাবু মেহের মুখার্জি', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:45:49', 4),
(579, 'ডি এস ইমপ্লেক্স বাংলাদেশ লিমিটেড', 'স্থল-বন্দর,বেনাপোল ', 'cnf374@gmail.com', '01711347574', '', '', 'বাবু ধীরেন চন্দ্র হালদার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:46:09', 4),
(580, 'ডায়নামিক ফ্রেইট  সিস্টেম', 'স্থল-বন্দর,বেনাপোল ', 'cnf375@gmail.com', '01713018860', '', '', 'মোঃ জানে আলম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:49:13', 4),
(581, 'ভিভো ইন্টারন্যাশনাল', 'স্থল-বন্দর,বেনাপোল ', 'cnf376@gmail.com', '01712128300', '', '', 'মোহাম্মদ রেজা শাহজাহান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:50:10', 4),
(582, 'নুপুর  ট্রেডাস', 'স্থলবন্দর বেনাপোল', 'cnf425@gmail.com', '01711527002', '', '', 'মোহাম্মদ আশরাফ আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:50:13', 4),
(583, 'ডি এন ট্রেড ইন্টারন্যাশনাল', 'স্থল-বন্দর,বেনাপোল ', 'cnf377@gmail.com', '01711810799', '', '', 'বাবু দীপ  নারায়ণ রায়', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:52:12', 4),
(584, 'নাসিব এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf426@gmail.com', '01711363692', '', '', ' আলহাজ্বমাসুদুর রহমান মিলন ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:52:50', 4),
(585, 'ঢাকা লজিস্টিক নেটওয়ার্ক', 'স্থল-বন্দর,বেনাপোল ', 'cnf378@gmail.com', '01713030818', '', '', 'মোঃ  রবিউল আলম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:53:26', 4),
(586, 'তৌহিদ এন্টারপ্রাইজ', 'স্থল-বন্দর,বেনাপোল ', 'cnf379@gmail.com', '01818184130', '', '', 'মোঃ হযরত আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:54:15', 4),
(587, 'তাজ ইন্টারন্যাশনাল', 'স্থল-বন্দর,বেনাপোল ', 'cnf380@gmail.com', '01711280509', '', '', 'তাজাল্লিল আমিন তাজ ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:56:34', 4),
(588, 'নিপ্পন ফ্রেইট সিমেন্টস   ', 'স্থলবন্দর বেনাপোল', 'cnf427@gmail.com', '01715535384', '', '', ' প্রিয় লাল দে', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:56:38', 4),
(589, 'তিতাস ট্রেড  ইন্টারন্যাশনাল AL', 'স্থল-বন্দর,বেনাপোল ', 'cnf381@gmail.com', '01711819107', '', '', 'আলহাজ্ব আলাউদ্দিন আজাদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:58:10', 4),
(590, 'তানভির এন্টারপ্রাইজ', 'স্থল-বন্দর,বেনাপোল ', 'cnf382@gmail.com', '01711578823', '', '', 'মোঃ শহিদুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:58:53', 4),
(591, ' নেহাদ এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf428@gmail.com', '01711365080', '', '', 'মোহাম্মদ নেহাদ  হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:59:09', 4),
(592, 'তমা এন্টারপ্রাইস', 'স্থল-বন্দর,বেনাপোল ', 'cnf383@gmail.com', '01712698010', '', '', 'এস এম ফারুক আলম ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 18:59:49', 4),
(593, 'তালুকদার ট্রেডার্স', 'স্থল-বন্দর,বেনাপোল ', 'cnf385@gmail.com', '01711181876', '', '', 'এসবি তালুকদার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:02:50', 4),
(594, 'নিশাত ট্রেড ইন্টারন্যাশনাল', 'স্থলবন্দর বেনাপোল', 'cnf429@gmail.com', '01711154563', '', '', ' মোহাম্মদ শাহানুর হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:03:12', 4),
(595, 'তমি  এন্টারপ্রাইজ', 'স্থল-বন্দর,বেনাপোল ', 'cnf386@gmail.com', '01712666461', '', '', 'মোঃ শাওন হোসেন তুমি', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:03:48', 4),
(596, 'তানজিনা এন্টারপ্রাইজ', 'স্থল-বন্দর,বেনাপোল ', 'cnf387@gmail.com', '01912620437', '', '', 'মোঃ তৌহিদুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:04:43', 4),
(597, 'তরঙ্গ এন্টারপ্রাইজ', 'স্থল-বন্দর,বেনাপোল ', 'cnf388@gmail.com', '01718445496', '', '', 'মোঃ শরিফুল আলম নয়ন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:05:44', 4),
(598, 'নওয়াব এন্ড ব্রাদার্স ', 'স্থলবন্দর বেনাপোল', 'cnf430@gmail.com', '01718291461', '', '', 'মোঃ নওয়াব  ওয়ালী মাহমুদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:05:46', 4),
(599, 'তৃণা অ্যাসোসিয়েট', 'স্থল-বন্দর,বেনাপোল ', 'cnf389@gmail.com', '01740906132', '', '', 'মোঃ বেলাল হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:06:48', 4),
(600, 'তরিক এন্টারপ্রাইজ ', 'স্থল-বন্দর,বেনাপোল ', 'cnf390@gmail.com', '01919242300', '', '', 'মোঃ তরিক রহমান ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:08:12', 4),
(601, 'তাবিব এন্টারপ্রাইজ', 'স্থল-বন্দর,বেনাপোল ', 'cnf391@gmail.com', '01714018415', '', '', 'মোঃ আমিনুল হক মোহন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:09:11', 4),
(602, 'নূর এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf432@gmail.com', '01711837662', '', '', 'মোঃ আব্দুস সবুর', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:11:10', 4),
(603, 'তিসু  এন্টারপ্রাইজ', 'স্থল-বন্দর,বেনাপোল ', 'cnf392@gmail.com', '01711308696', '', '', 'মোঃ ইয়ানুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:11:23', 4),
(604, 'তানিম ইমপ্লেক্স ', 'স্থল-বন্দর,বেনাপোল ', 'cnf393@gmail.com', '01711482091', '', '', 'মোঃ  মনিরুজ্জামান মনির', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:12:35', 4),
(605, 'নাজমুল এন্ড ব্রাদার্স', 'স্থলবন্দর বেনাপোল', 'cnf433@gmail.com', '01913336171', '', '', 'মোহাম্মদ মনজুরুল কাদের', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:13:11', 4),
(606, 'তিশা এন্টারপ্রাইজ ', 'স্থল-বন্দর,বেনাপোল ', 'cnf394@gmail.com', '01711277584', '', '', 'মোঃ  সাইদুজ্জামান বিটন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:13:29', 4),
(607, 'তরিকুল ইসলাম', 'স্থল-বন্দর,বেনাপোল ', 'cnf395@gmail.com', '01712572691', '', '', 'মোঃ তরিকুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:14:14', 4),
(608, 'দিলীপ কুমার চক্রবর্তী এন্ড সন্স', 'স্থল-বন্দর,বেনাপোল ', 'cnf396@gmail.com', '011985142437', '', '', 'বাবু দিলীপ কুমার চক্রবর্তী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:15:23', 4),
(609, 'দি আশা শিপিং লাইসেন্স', 'স্থল-বন্দর,বেনাপোল ', 'cnf4397@gmail.com', '01711340136', '', '', 'এ কে এম শাহ আলম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:16:37', 4),
(610, 'দ্বারা এন্টারপ্রাইজ', 'স্থল-বন্দর,বেনাপোল ', 'cnf398@gmail.com', '01819939225', '', '', 'মিসেস হামিদা কদর', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:17:39', 4),
(611, 'দি নিউ মোড়   আইসল্যান্ড ', 'স্থল-বন্দর,বেনাপোল ', 'cnf399@gmail.com', '01191243720', '', '', 'মোঃ  আনোয়ার হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:19:24', 4),
(612, 'নুপুর ইন্টারন্যাশনাল', 'স্থলবন্দর বেনাপোল', 'cnf434@gmail.com', '01716399630', '', '', 'শেখ সাইদুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:19:46', 4),
(613, 'দাদু ট্রেডার্স', 'স্থল-বন্দর,বেনাপোল ', 'cnf400@gmail.com', '01926687160', '', '', 'এস এম ইউসুফ আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:20:05', 4),
(614, 'নিয়ন এন্টারপ্রাইজ ', 'স্থলবন্দর বেনাপোল', 'cnf435@gmail.com', '01746262650', '', '', 'জি এম মোস্তাফিজুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:21:54', 4),
(615, 'প্রিন্স শপিং লাইন্স লিমিটেড', 'স্থলবন্দর বেনাপোল', 'cnf436@gmail.com', '01715813299', '', '', 'কাজী শাহানুল   শহীদ ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:25:25', 4),
(616, 'প্রগতি এজেন্সি ', 'স্থলবন্দর বেনাপোল', 'cnf437@gmail.com', '01711879978', '', '', 'মোহাম্মদ আহসান হাবীব', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:26:40', 4),
(617, 'প্রিন্স মুভি এজেন্সি ', 'স্থলবন্দর বেনাপোল', 'cnf438@gmail.com', '01711825626', '', '', 'মোঃ শাহাবুদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:28:20', 4),
(618, 'পদ্মা ট্রেডিং কর্পোরেশন ', 'স্থলবন্দর বেনাপোল', 'cnf439@gmail.com', '01711355900', '', '', 'আলহাজ্ব নুরুজ্জামান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:29:28', 4),
(619, 'প্রাইম সেন্ডিকেট প্রোপাইটার লিমিটেড ', 'স্থলবন্দর বেনাপোল', 'cnf440@gmail.com', '01716667912', '', '', 'মোহাম্মদ ফজের  আলী ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:31:22', 4),
(620, 'প্রগ্রেসিভ ইন্টারন্যাশনাল ', 'স্থলবন্দর বেনাপোল', 'cnf441@gmail.com', '01711812419', '', '', 'এস এম আব্দুস সামাদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:32:53', 4),
(621, 'প্রবাল শিপিং লাইনস', 'স্থলবন্দর বেনাপোল', 'cnf442@gmail.com', '01711309678', '', '', ' আবুল হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:37:54', 4),
(622, 'পূর্বালী এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf443@gmail.com', '01715851388', '', '', 'মোঃ আব্দুল কাদের', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:39:23', 4),
(623, 'প্যারাগন ইন্টারন্যাশনাল', 'স্থলবন্দর বেনাপোল', 'cnf444@gmail.com', '01711814114', '', '', ' আনিসুল হাসান বনি', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:41:00', 4),
(624, 'পপুলার এন্টারপ্রাইজ  ', 'স্থলবন্দর বেনাপোল', 'cnf445@gmail.com', '01913275226', '', '', 'এম এ তাহের', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:45:35', 4),
(625, 'প্রযুক্তি অন্বেষা', 'স্থলবন্দর বেনাপোল', 'cnf446@gmail.com', '01711560736', '', '', 'আলহাজ্ব এম মহসীন কবির', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:48:21', 4),
(626, '  পারভিন ট্রেডাস ', 'স্থলবন্দর বেনাপোল', 'cnf447@gmail.com', '01711974327', '', '', 'মোহাম্মদ বরকত আলী শিকদার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:49:47', 4),
(627, 'প্রমিনেন্ট এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf448@gmail.com', '01819120123', '', '', ' মোহাম্মদ  শাহারজুল হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:54:21', 4),
(628, 'প্যানডোরা ইন্টার্নেশনাল', 'স্থলবন্দর বেনাপোল', 'cnf449@gmail.com', '01715363384', '', '', ' এ কে এম খুরশিদ আলম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 19:56:12', 4),
(629, 'প্রভাতি ইন্টারন্যাশনাল ', 'স্থলবন্দর বেনাপোল', 'cnf450@gmail.com', '017111819003', '', '', 'আলহাজ্ব আলমগীর সিদ্দিক', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 20:03:22', 4),
(630, ' পদমদী ', 'স্থলবন্দর বেনাপোল', 'cnf451@gmail.com', '017819223740', '', '', 'কাজী মতিউর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 20:08:05', 4),
(631, 'প্রাক্স ট্রেডাস', 'স্থলবন্দর বেনাপোল', 'cnf452@gmail.com', '01713312139', '', '', 'মোঃ আইয়ুব আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 20:12:12', 4),
(632, 'প্যারাডাইস কর্পোরেশন লিমিটেড ', 'স্থলবন্দর বেনাপোল', 'cnf453@gmail.com', '01711850250', '', '', 'মোহাম্মদ সোলাইমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 20:18:34', 4),
(633, 'পার্ক ট্রেডিং কর্পোরেশন', 'স্থলবন্দর বেনাপোল', 'cnf454@gmail.com', '01711749968', '', '', ' হুমায়ুন কবির পাটোয়ারী ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 20:23:52', 4),
(634, 'প্রদীপ  ইন্টারন্যাশনাল ', 'স্থলবন্দর বেনাপোল', 'cnf455@gmail.com', '01711334575', '', '', 'বাবু দিলীপ কুমার মন্ডল ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 20:27:58', 4),
(635, 'প্রচেষ্টা ', 'স্থলবন্দর বেনাপোল', 'cnf456@gmail.com', '01711168592', '', '', 'স্মরণ মৎচডি ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 20:30:37', 4),
(636, 'প্যারেন্টস ইন্টারন্যাশনাল বিজনেস ', 'স্থলবন্দর বেনাপোল', 'cnf457@gmail.com', '01711855423', '', '', 'এস এম আজিজুর রহমান লিটু', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 20:32:35', 4),
(637, 'পরাগ শিপিং লাইনস', 'স্থলবন্দর বেনাপোল', 'cnf458@gmail.com', '01711481864', '', '', ' মোহাম্মদ শরিফুজ্জামান পরাগ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 20:36:00', 4),
(638, 'প্রিতু  এন্টারপ্রাইজ ', 'স্থলবন্দর বেনাপোল', 'cnf459@gmail.com', '01712100501', '', '', 'মোহাম্মদ আবু সাঈদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 20:38:21', 4),
(639, 'পান্না এন্টারপ্রাইজ ', 'স্থলবন্দর বেনাপোল', 'cnf460@gmail.com', '01711428292', '', '', 'মোহাম্মদ একরামুল হক ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 20:40:14', 4),
(640, 'প্লানেট ইন্টারন্যাশনাল ', 'স্থলবন্দর বেনাপোল', 'cnf461@gmail.com', '01715118843', '', '', 'তৈয়বুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 20:42:16', 4),
(641, 'প্রান্তিক প্লাস লিমিটেড ', 'স্থলবন্দর বেনাপোল', 'cnf462@gmail.com', '01711189090', '', '', 'মোহাম্মদ মিয়াদ আলী ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 20:45:33', 4),
(642, 'প্রজ্ঞাপন ইন্টারন্যাশনাল ', 'স্থলবন্দর বেনাপোল', 'cnf463@gmail.com', '01819273393', '', '', ' প্রদীপ কুমার ধর', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 20:48:00', 4),
(643, 'পারাবার শিপিং', 'স্থলবন্দর বেনাপোল', 'cnf464@gmail.com', '017111827512', '', '', ' শেখ নজরুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 20:49:32', 4),
(644, 'ফয়সাল এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf466@gmail.com', '01711824988', '', '', ' মোঃ এনামুল হক', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 20:51:31', 4),
(645, 'ফ্রেন্ডস এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf467@gmail.com', '01912980904', '', '', 'আলহাজ্ব মোঃ শওকত ওসমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 20:54:16', 4),
(646, 'ফেআর ডিল এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf468@gmail.com', '01714011372', '', '', '  খন্দকার হাসান মাহমুদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 21:32:57', 4),
(647, 'ফা এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf470@gmail.com', '01711542555', '', '', 'মোহাম্মদ আলী আজগর', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 21:37:05', 4),
(648, 'ফেয়ার ট্রেড ', 'স্থলবন্দর বেনাপোল', 'cnf471@gmail.com', '01715851150', '', '', ' মোছাম্মদ  জেসমিন আক্তার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 21:39:36', 4),
(649, 'ফাস্ট কার্গো সার্ভিসেস লিমিটেড  ', 'স্থলবন্দর বেনাপোল', 'cnf472@gmail.com', '01711568547', '', '', 'মোঃ লিয়াকত হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 21:41:24', 4),
(650, 'ফেয়ার ভেঞ্চার লিমিটেড ', '', 'cnf475@gmail.com', '01715435392', '', '', 'মোঃ আব্দুল কাইয়ুম শিকদার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 21:45:42', 4),
(651, 'ফ্রেইট স্কিল', 'স্থলবন্দর বেনাপোল', 'cnf476@gmail.com', '01711526951', '', '', 'লুৎফর হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 21:49:10', 4),
(652, 'ফেডারেল ফ্রেইট  সিমেন্ট লিমিটেড', 'স্থলবন্দর বেনাপোল', 'cnf477@gmail.com', '01711545063', '', '', ' ডিকি টি ডায়েস ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 21:51:44', 4),
(653, 'ফার ট্রেড লিংকাস ', 'স্থলবন্দর বেনাপোল', 'cnf478@gmail.com', '01715059582', '', '', 'কাজী জিয়াউল হক', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 21:57:07', 4),
(654, 'ফজলুর রহমান এন্ড সন্স ', 'স্থলবন্দর বেনাপোল', 'cnf479@gmail.com', '01711244118', '', '', 'মোঃ নুরুজ্জামান ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 21:58:52', 4),
(655, 'ফ্যামলিয়ার ইন্টারন্যাশনাল ', 'স্থলবন্দর বেনাপোল', 'cnf480@gmail.com', '01711375132', '', '', 'মোঃ সাজেদুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 22:04:55', 4),
(656, 'ফারুক এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf481@gmail.com', '01712336222', '', '', 'মোঃ ফারুক হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 22:09:40', 4),
(657, 'ফজলুর রহমান ', 'স্থলবন্দর বেনাপোল', 'cnf482@gmail.com', '01711382487', '', '', 'মোঃ ফজলুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 22:11:35', 4),
(658, 'ফোকাস পয়েন্ট', 'স্থলবন্দর বেনাপোল', 'cnf483@gmail.com', '01716632527', '', '', ' মোহাম্মদ সোয়েব ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 22:14:03', 4),
(659, 'ফারহাদ এন্টারপ্রাইজ ', 'স্থলবন্দর বেনাপোল', 'cnf484@gmail.com', '01713419042', '', '', 'মোঃ ওহিদুল ইসলাম ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 22:16:38', 4),
(660, 'ফারহানা এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf485@gmail.com', '01617143605', '', '', 'মোঃ রেজাউল করিম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 22:18:44', 4),
(661, 'বেঙ্গল এজেন্সি', 'স্থলবন্দর বেনাপোল', 'cnf486@gmail.com', '01712813138', '', '', 'ইফতেখার উদ্দিন আহমেদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 22:20:09', 4),
(662, 'বেনাপোল ইন্টারন্যাশনাল', 'স্থলবন্দর বেনাপোল', 'cnf487@gmail.com', '01711897354', '', '', 'হাসান  মাহমুদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 22:22:49', 4),
(663, 'বাণিজ্য বিকরণ ', 'স্থলবন্দর বেনাপোল', 'cnf489@gmail.com', '01713965885', '', '', 'মোঃ জহির উদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 22:31:27', 4),
(664, 'বাদল এন্টারপ্রাইজ ', 'স্থলবন্দর বেনাপোল', 'cnf490@gmail.com', '01713012885', '', '', 'বাবু বাদল চন্দ্র দে', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 22:33:18', 4),
(665, 'ব্রাইট শিপিং  এজেন্সি', 'স্থলবন্দর বেনাপোল', 'cnf491@gmail.com', '01720021873', '', '', 'এম এ  হক', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 22:37:40', 4),
(666, 'বিজনেস মিডিয়া ', 'স্থলবন্দর বেনাপোল', 'cnf494@gmail.com', '01711143633', '', '', 'আলহাজ্ব মোঃ মাহবুবর রহমান বকুল', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 22:40:26', 4),
(667, 'বকুল এন্ড ব্রাদার্স', 'স্থলবন্দর বেনাপোল', 'cnf496@gmail.com', '01711832287', '', '', 'জাফরিনা হক জলি ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 22:44:03', 4),
(668, 'বিজনেস কর্নার ইন্টারন্যাশনাল', 'স্থলবন্দর বেনাপোল', 'cnf498@gmail.com', '01731005328', '', '', '  মোঃ শাহিনুর রহমান কাজল', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 22:47:14', 4),
(669, 'বিএম কর্পোরেশন', 'স্থলবন্দর বেনাপোল', 'cnf499@gmail.com', '01711308873', '', '', 'বিএম কর্পোরেশন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 22:48:45', 4),
(670, 'বরিশাল এজেন্সি ', 'স্থলবন্দর বেনাপোল', 'cnf500@gmail.com', '01710931488', '', '', 'মোঃ আব্দুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 22:50:35', 4),
(671, 'বে শিপিং লাইন্স  লিমিটেড', 'স্থলবন্দর বেনাপোল', 'cnf501@gmail.com', '01819311352', '', '', 'মোঃ আখতার হোসেন খান', '123456.', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 22:55:23', 4),
(672, 'বরকত বিজনেস  কোম্পানি ', 'স্থলবন্দর বেনাপোল', 'cnf502@gmail.com', '01711547512', '', '', 'মোহাম্মদ সালাহ উদ্দিন চৌধুরী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 22:58:31', 4),
(673, 'বি দোজা এন্ড কোম্পানি', 'স্থলবন্দর বেনাপোল', 'cnf503@gmail.com', '01711775035', '', '', 'মোহাম্মদ বদরুজ্জামান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 23:03:12', 4),
(674, 'বি আর ইন্টারন্যাশনাল ', 'স্থলবন্দর বেনাপোল', 'cnf504@gmail.com', '01726824384', '', '', 'বজলুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 23:05:19', 4),
(675, 'ব্রাইট ইন্টারন্যাশনাল ', 'স্থলবন্দর বেনাপোল', 'cnf505@gmail.com', '01712019059', '', '', 'মোঃ শহিদুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 23:07:45', 4),
(676, 'ব্রাদার্স এন্টারপ্রাইজ ', 'স্থলবন্দর বেনাপোল', 'cnf506@gmail.com', '01819225232', '', '', 'মোঃ আব্দুল মন্নাফ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 23:10:42', 4),
(677, 'বিক্রমপুর ক্লিয়ারিং এজেন্সি', 'স্থলবন্দর বেনাপোল', 'cnf507@gmail.com', '01711761679', '', '', 'মীর রমজান আলী ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 23:13:23', 4),
(678, 'বনি ট্রেডিং কর্পোরেশন ', 'স্থলবন্দর বেনাপোল', 'cnf508@gmail.com', '01711841714', '', '', 'মিসেস নাজমা আক্তার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 23:14:56', 4),
(679, 'বিসমিল্লাহ এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf509@gmail.com', '01711527506', '', '', ' আলহাজ্ব মোহাম্মদ রোকনুজ্জামান রিপন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 23:16:44', 4),
(680, 'বি এন এ শিপিং লাইনস', 'স্থলবন্দর বেনাপোল', 'cnf510@gmail.com', '01716181893', '', '', 'মোঃশামিনুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 23:21:10', 4),
(681, 'বি এস এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf511@gmail.com', '01711397416', '', '', 'বাবু বংশী লাল সরকার ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 23:23:49', 4),
(682, ' বিপ্লব ট্রেড  ওভারসিজ', 'স্থলবন্দর বেনাপোল', 'cnf512@gmail.com', '01713101038', '', '', ' মোঃ আলতাফ হোসেন বাচ্চু', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 23:27:07', 4),
(683, ' বাংলাদেশ কার্গো  সার্ভিসেস', 'স্থলবন্দর বেনাপোল', 'cnf513@gmail.com', '01819228572', '', '', ' মোহাম্মদ দুলা হোসেন ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 23:28:43', 4),
(684, 'বলাকা ইন্টারন্যাশনাল ', 'স্থলবন্দর বেনাপোল', 'cnf514@gmail.com', '01711816104', '', '', 'আলহাজ্ব এম এ সাত্তার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 23:40:33', 4),
(685, ' বেলকুচি ট্রেডিং কর্পোরেশন', 'স্থলবন্দর বেনাপোল', 'cnf515@gmail.com', '01711132805', '', '', '  মুকুল রেজা', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 23:42:02', 4),
(686, 'বিশ্বাস এন্টারপ্রাইজ ', 'স্থলবন্দর বেনাপোল', 'cnf516@gmail.com', '01714252055', '', '', 'মোহাম্মদ আবদুল মুত্তালিব', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 23:44:56', 4),
(687, ' বি এন্ড ডি ক্রিয়েশন', 'স্থলবন্দর বেনাপোল', 'cnf517@gmail.com', '01713034978', '', '', ' মোঃ আবুল কালাম আজাদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 23:47:10', 4),
(688, 'বি এস  ইন্টারন্যাশনাল', 'স্থলবন্দর বেনাপোল', 'cnf518@gmail.com', '01712090697', '', '', ' বিকাশ আইস', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 23:56:43', 4),
(689, 'বিশ্বাস ট্রেডাস ', 'স্থলবন্দর বেনাপোল', 'cnf519@gmail.com', '01711526931', '', '', 'মোহাম্মদ নুরুল আমিন বিশ্বাস', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-10 23:58:03', 4),
(690, 'বারল  প্যাকাস এন্ড শিপাস  ', 'স্থলবন্দর বেনাপোল', 'cnf520@gmail.com', '01711761813', '', '', 'যে সেপ লরেন্স', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 00:03:11', 4),
(691, 'বেত্রাবতী এজেন্সি', 'স্থলবন্দর বেনাপোল', 'cnf521@gmail.com', '01918223573', '', '', 'মোহাম্মদ শহীদ লাল', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 10:37:16', 4),
(692, 'বিশাল ট্রেডিং', 'স্থলবন্দর বেনাপোল', 'cnf522@gmail.com', '01711360168', '', '', 'মোহাম্মদ ইসমাইল হোসেন ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 10:38:25', 4),
(693, 'বাসরাত  এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf523@gmail.com', '01911048871', '', '', ' মোহাম্মদ শাহাব উদ্দিন চৌধুরী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 10:40:48', 4),
(694, 'ব্রিলিয়ান্ট সেন্টিকেট লিমিটেড', 'স্থলবন্দর বেনাপোল', 'cnf525@gmail.com', '01712549893', '', '', ' মোহাম্মদ নাসির উদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 10:45:03', 4),
(695, 'বাংলাদেশ লজিস্টিক সার্ভিস প্রোপাইটার লিমিটেড  ', 'স্থলবন্দর বেনাপোল', 'cnf527@gmail.com', '01711131321', '', '', 'মোঃ ফারুক ইকবাল ডাবলু', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 10:52:10', 4),
(696, 'বিল্লাল ট্রেড সেন্টার লিঃ', 'স্থলবন্দর বেনাপোল', 'cnf528@gmail.com', '01759892046', '', '', ' আব্দুল করিম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 10:54:17', 4),
(697, 'ভিক্টর এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf529@gmail.com', '01728453528', '', '', ' মিসেস আয়েশা সুলতানা ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 10:55:31', 4),
(698, 'ভুইয়া এন্টারপ্রাইজ ', 'স্থলবন্দর বেনাপোল', 'cnf530@gmail.com', '01711525533', '', '', 'মিসেস  আইরিন নাহার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 10:57:27', 4),
(699, 'মইনুদ্দিন আহমেদ', 'স্থলবন্দর বেনাপোল', 'cnf531@gmail.com', '01816349729', '', '', '  রফিকুল ইসলাম শাহীন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 11:01:36', 4),
(700, ' মফিজ উদ্দিন আহমেদ', 'স্থলবন্দর বেনাপোল', 'cnf532@gmail.com', '01912922925', '', '', ' কামাল উদ্দিন বাবু ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 11:02:48', 4),
(701, 'মিতালী এজেন্সি ', 'স্থলবন্দর বেনাপোল', 'cnf533@gmail.com', '01711358225', '', '', 'আলহাজ্ব আব্দুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 11:05:18', 4),
(702, 'মুক্তি এন্টারপ্রাইজ ', 'স্থলবন্দর বেনাপোল', 'cnf536@gmail.com', '01726876568', '', '', 'জসিম উদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 11:08:39', 4),
(703, ' মাহমুদ সিএন্ডএফ এজেন্ট লিমিটেড', 'স্থলবন্দর বেনাপোল', 'cnf535@gmail.com', '01710976882', '', '', ' মোহাম্মদ জিয়াউর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 11:11:42', 4),
(704, 'মনি এজেন্সি ', 'স্থলবন্দর বেনাপোল', 'cnf537@gmail.com', '01819144268', '', '', 'মোঃ শহিদুজ্জামান খোকন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 11:19:02', 4),
(705, 'মুনির  আহম্মেদ', 'স্থলবন্দর বেনাপোল', 'cnf541@gmail.com', '01711841511', '', '', ' আলহাজ্ব মুনির আহমেদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 22:19:57', 4),
(706, 'মুকুল এন্ড ব্রাদার্স', 'স্থলবন্দর বেনাপোল', 'cnf542@gmail.com', '01711365270', '', '', ' আলহাজ্ব এনামুল হক মুকুল', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 22:24:56', 4),
(707, 'মেমোরিয়াল এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf543@gmail.com', '01711537612', '', '', ' মোঃ হাসান আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 22:32:59', 4),
(708, ' মনি ট্রেডিং কর্পোরেশন ', 'স্থলবন্দর বেনাপোল', 'cnf544@gmail.com', '01711790231', '', '', 'আঞ্জুমান আরা বেগম ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 22:34:39', 4),
(709, 'মুনমুন শিপিং  লাইনস ', 'স্থলবন্দর বেনাপোল', 'cnf545@gmail.com', '01711358498', '', '', 'আলহাজ্ব কামাল উদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 22:36:37', 4),
(710, ' মাহমুদ ট্রেডিং এজেন্সি ', 'স্থলবন্দর বেনাপোল', 'cnf546@gmail.com', '01811225254', '', '', 'মোহাম্মদ মফিজুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 22:37:43', 4),
(711, 'মিতা ট্রেড লিংক', 'স্থলবন্দর বেনাপোল', 'cnf547@gmail.com', '01711525704', '', '', 'বাবু অজিত কুমার সাহা', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 22:39:17', 4),
(712, 'মোশারফ ট্রেডার্স', 'স্থলবন্দর বেনাপোল', 'cnf548@gmail.com', '01711841654', '', '', ' মোঃ মোশারফ হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 22:42:17', 4),
(713, ' মার্চেন্ট কর্পোরেশন ', 'স্থলবন্দর বেনাপোল', 'cnf549@gmail.com', '01711824824', '', '', 'মোহাম্মদ নাসির উদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 22:44:05', 4),
(714, 'মেঘনা ট্রেডিং কোম্পানি ', 'স্থলবন্দর বেনাপোল', 'cnf550@gmail.com', '01711525865', '', '', 'মোহাম্মদ অলিউর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 22:45:10', 4),
(715, '  মিজান এন্টারপ্রাইজ ', 'স্থলবন্দর বেনাপোল', 'cnf551@gmail.com', '01711010642', '', '', 'মোঃ মিজানুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 22:46:24', 4),
(716, ' মাসুদ কর্পোরেশন ', 'স্থলবন্দর বেনাপোল', 'cnf552@gmail.com', '01819314439', '', '', 'মোঃ মুন্না খান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 22:47:42', 4),
(717, ' মিথুন এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf553@gmail.com', '01730238957', '', '', ' মিথুন এন্টারপ্রাইজ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 22:49:00', 4),
(718, ' মিলন এন্টারপ্রাইজ ', 'স্থলবন্দর বেনাপোল', 'cnf554@gmail.com', '01711820394', '', '', 'আলহাজ্ব মহাসিন মিলন ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 22:50:40', 4),
(719, 'মামুন এন্টারপ্রাইজ', 'স্থল-বন্দর,বেনাপোল ', 'cnf555@gmail.com', '01819229077', '', '', 'মোহাম্মদ মহাসিন খান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 23:05:38', 4),
(720, 'মুন  ইন্টারন্যাশনাল ', 'স্থল-বন্দর,বেনাপোল ', 'cnf556@gmail.com', '01926174033', '', '', 'এস এম ফরিদ আহাম্মেদ ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 23:09:01', 4),
(721, 'মুসা ব্রাদার প্রোপাইটার লিমিটেড', 'বেনাপোল ,স্থলবন্দর', 'cnf557@gmail.com', '01711567304', '', '', 'মোহাম্মদ ইউসুফ হাওলাদার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 23:13:00', 4),
(722, 'মৌমিতা এন্টারপ্রাইজ ', 'স্থল-বন্দর,বেনাপোল ', 'cnf558@gmail.com', '01711358756', '', '', 'মোঃ সহিদুর রহমান লিটন ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 23:16:23', 4),
(723, 'মাতৃ ইন্টারন্যাশনাল  ', 'স্থল-বন্দর,বেনাপোল ', 'cnf559@gmail.com', '1711397490', '', '', 'বাবু দুলাল চন্দ্র সাহা ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 23:19:00', 4),
(724, 'লেনিয়াম এন্টারপ্রাইজ ', 'স্থল-বন্দর,বেনাপোল ', 'cnf560@gmail.com', '01711536077', '', '', 'মোহাম্মদ দুলাল উদ্দিন লিটন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 23:21:33', 4),
(725, 'মহাসিন এন্ড সন্স', 'স্থলবন্দর বেনাপোল', 'cnf561@gmail.com', '01711841623', '', '', ' মোহাম্মদ মহসীন আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 23:27:07', 4),
(726, 'মিতু এন্টারপ্রাইজ ', 'স্থলবন্দর বেনাপোল', 'cnf562@gmail.com', '01711333944', '', '', 'মোঃ খাইরুজ্জামান লাভলু', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 23:31:55', 4),
(727, ' মুক্তা ট্রেডিং কর্পোরেশন', 'স্থলবন্দর বেনাপোল', 'cnf563@gmail.com', '01711359631', '', '', ' মোঃ আব্দুল মন্নাফ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 23:32:55', 4),
(728, 'মা এন্ড সন্স প্রোপাইটার লিমিটেড', 'স্থলবন্দর বেনাপোল', 'cnf564@gmail.com', '01925773560', '', '', 'মোঃ বাবলু মিয়া', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 23:35:54', 4),
(729, 'মৌসুমী এন্ড জয় এন্টারপ্রাইজ ', 'স্থলবন্দর বেনাপোল', 'cnf565@gmail.com', '01731135511', '', '', 'মোঃ মমিনুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 23:39:05', 4),
(730, 'মামুন ট্রেডার্স ', 'স্থলবন্দর বেনাপোল', 'cnf566@gmail.com', '01711897316', '', '', 'আলহাজ্ব মোহাম্মদ আলতাফ হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 23:40:44', 4),
(731, 'মাস্টার কর্পোরেশন ', 'স্থলবন্দর বেনাপোল', 'cnf567@gmail.com', '01711218222', '', '', 'এটিএম আনারুল ইসলাম বাচ্চু ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 23:41:50', 4),
(732, '  মধুমতি এন্টারপ্রাইজ ', 'স্থলবন্দর বেনাপোল', 'cnf568@gmail.com', '01711143492', '', '', 'মোঃ আব্দুল ওহাব', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 23:42:56', 4),
(733, 'মিল্কওয়ে  শিপিং লাইনস প্রোপাইটার লিমিটেড', 'স্থলবন্দর বেনাপোল', 'cnf569@gmail.com', '01739910010', '', '', ' গোলাম জিলানী চৌধুরী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 23:46:44', 4),
(734, 'মাধ্যম ', 'স্থলবন্দর বেনাপোল', 'cnf570@gmail.com', '01711527826', '', '', 'মোঃ গোলাম ফারুক', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 23:48:04', 4),
(735, ' ময়নামতি এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf571@gmail.com', '01711953356', '', '', ' মোঃ হুমায়ুন কবির', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 23:49:29', 4),
(736, '  মিঠু এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf572@gmail.com', '01715752300', '', '', ' মোহাম্মদ জাহিদ হোসেন মিঠু ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 23:50:37', 4),
(737, 'মাস  এন্টারপ্রাইজ ', 'স্থলবন্দর বেনাপোল', 'cnf573@gmail.com', '017132017391', '', '', 'রাশেদ শামীম চৌধুরী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 23:56:40', 4),
(738, ' মোস্তফা এন্ড ব্রাদার্স ', 'স্থলবন্দর বেনাপোল', 'cnf574@gmail.com', '01711841699', '', '', 'আলহাজ্ব গোলাম মোস্তফা', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-11 23:58:23', 4),
(739, 'মিডওয়ে  মার্চেন্ট লিমিটেড ', 'স্থলবন্দর বেনাপোল', 'cnf575@gmail.com', '01711721452', '', '', 'মোহাম্মদ সাদেক', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:00:04', 4),
(740, ' মিশনএন্টারপ্রাইজ ', 'স্থলবন্দর বেনাপোল', 'cnf576@gmail.com', '01711273325', '', '', 'মোঃ জুলফিকার আলী মন্টু', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:01:25', 4),
(741, 'মাল্টি টেক লিমিটেড ', 'স্থলবন্দর বেনাপোল', 'cnf577@gmail.com', '01711902356', '', '', 'হাফিজুর রহমান টিটু', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:02:32', 4),
(742, 'মিশু এন্টারপ্রাইজ ', 'স্থলবন্দর বেনাপোল', 'cnf578@gmail.com', '01711841445', '', '', 'মুন্সি মইনুদ্দিন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:04:50', 4),
(743, '  মতিয়ার রহমান ', 'স্থলবন্দর বেনাপোল', 'cnf579@gmail.com', '01711349180', '', '', 'মোঃ মতিয়ার রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:05:52', 4),
(744, 'মিম এন্টারপ্রাইজ ', 'স্থলবন্দর বেনাপোল', 'cnf580@gmail.com', '01720569366', '', '', 'মোহাম্মদ ওসমান আলী', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:07:39', 4),
(745, ' মা ট্রেডিং', 'স্থলবন্দর বেনাপোল', 'cnf581@gmail.com', '01919161133', '', '', 'আলহাজ্ব এস এম সরোয়ার আহসান জিয়া ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:09:33', 4),
(746, 'মাহফুজ ক্লিয়ারিং প্রোপাইটার লিমিটেড ', 'স্থলবন্দর বেনাপোল', 'cnf582@gmail.com', '0422875967', '', '', 'মোঃ শামসুল হুদা', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:11:03', 4),
(747, ' মাহাবি  এন্টারপ্রাইজ লিমিটেড ', 'স্থলবন্দর বেনাপোল', 'cnf583@gmail.com', '01711018766', '', '', ' মোঃ মফিজুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:13:43', 4),
(748, 'মায়া হাজরা এন্ড কোম্পানি লিমিটেড', 'স্থলবন্দর বেনাপোল', 'cnf584@gmail.com', '01715669669', '', '', 'মোঃ নজরুল ইসলাম ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:15:46', 4),
(749, 'যমুনা ট্রেডিং কর্পোরেশন ', 'স্থলবন্দর বেনাপোল', 'cnf585@gmail.com', '01711898725', '', '', 'আলহাজ্ব আমিনুল হক', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:16:51', 4),
(750, 'যুথি এন্টারপ্রাইজ ', 'স্থলবন্দর বেনাপোল', 'cnf586@gmail.com', '01713025356', '', '', '  আলহাজ জামাল হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:19:22', 4),
(751, 'যশোর ট্রেডিং এজেন্সি  ', 'স্থলবন্দর বেনাপোল', 'cnf587@gmail.com', '01714107491', '', '', 'মোঃ রফিকুল ইসলাম ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:20:34', 4),
(752, ' রনি ট্রেড এসোসিয়েটস', 'স্থলবন্দর বেনাপোল', 'cnf589@gmail.com', '01711341846', '', '', ' আলহাজ্ব হাফিজুর রহমান', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:24:38', 4),
(753, ' রুহুল ইন্টারন্যাশনাল', 'স্থলবন্দর বেনাপোল', 'cnf590@gmail.com', '01714080696', '', '', '  রুহুল কুদ্দুস', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:26:15', 4),
(754, ' রাজ এজেন্সি ', 'স্থলবন্দর বেনাপোল', 'cnf591@gmail.com', '01713272510', '', '', 'মোহাম্মদমুনজুর  হাসান সুজন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:28:39', 4),
(755, ' রাজিব এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf592@gmail.com', '01711374125', '', '', ' গোলাম নবী আক্তার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:29:39', 4),
(756, 'রোজ ট্রেড ইন্টারন্যাশনাল ', 'স্থলবন্দর বেনাপোল', 'cnf593@gmail.com', '01711698325', '', '', 'মোঃ ইসমাইল হোসেন', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:31:35', 4),
(757, 'মেসার্স রুপালি এজেন্সি ', 'স্থলবন্দর বেনাপোল', 'cnf594@gmail.com', '01935372533', '', '', 'মোঃ নজরুল ইসলাম ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:32:35', 4),
(758, 'রিমন ট্রেডিং লিঃ ', 'স্থলবন্দর বেনাপোল', 'cnf595@gmail.com', '01713917388', '', '', 'মোঃ জুলফিকার আলী রানা', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:33:39', 4),
(759, 'রুমি  এন্টারপ্রাইজ', 'স্থলবন্দর বেনাপোল', 'cnf597@gmail.com', '01711841748', '', '', '  রোকন উদ্দিন আহাম্মেদ', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:37:15', 4),
(760, ' রুপালি কার্গো সার্ভিসেস ', 'স্থলবন্দর বেনাপোল', 'cnf598@gmail.com', '031711814', '', '', ' মোহাম্মদ নূরুল ইসলাম', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:38:54', 4),
(761, ' রুপালি কার্গো সার্ভিসেস  ', 'স্থলবন্দর বেনাপোল', 'cnf599@gmail.com', '01673000578', '', '', 'এস এম শাহাদত', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:40:49', 4),
(762, 'রাসমা এজেন্সি', 'স্থলবন্দর বেনাপোল', 'cnf600@gmail.com', '01711338187', '', '', ' মিয়া আব্দুস সাত্তার', '123456', '', '', '', '', 1, 0, 0, NULL, NULL, '2021-02-12 00:43:18', 4);

-- --------------------------------------------------------

--
-- Table structure for table `corporate_client`
--

DROP TABLE IF EXISTS `corporate_client`;
CREATE TABLE IF NOT EXISTS `corporate_client` (
  `corporate_client_id` int(11) NOT NULL AUTO_INCREMENT,
  `corporate_client_image` varchar(250) NOT NULL,
  `corporate_client_is_active` int(11) NOT NULL,
  `corporate_client_added_time` datetime NOT NULL,
  PRIMARY KEY (`corporate_client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cover_industries`
--

DROP TABLE IF EXISTS `cover_industries`;
CREATE TABLE IF NOT EXISTS `cover_industries` (
  `cover_industries_id` int(11) NOT NULL AUTO_INCREMENT,
  `cover_industries_name` varchar(250) NOT NULL,
  `cover_industries_image` varchar(200) NOT NULL,
  `cover_industries_is_active` int(11) NOT NULL,
  `cover_industries_added_time` datetime NOT NULL,
  `cover_industries_added_user_id` int(11) NOT NULL,
  PRIMARY KEY (`cover_industries_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cover_industries`
--

INSERT INTO `cover_industries` (`cover_industries_id`, `cover_industries_name`, `cover_industries_image`, `cover_industries_is_active`, `cover_industries_added_time`, `cover_industries_added_user_id`) VALUES
(2, 'Employee Transportation', 'images/industries_we_cover/e04efd0f3ab00014a5b147b0e7f3b10d.png', 1, '2020-12-15 21:24:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `driver_images`
--

DROP TABLE IF EXISTS `driver_images`;
CREATE TABLE IF NOT EXISTS `driver_images` (
  `driver_images_id` int(11) NOT NULL AUTO_INCREMENT,
  `driver_info_id` int(11) NOT NULL,
  `driver_paper_name` varchar(350) NOT NULL,
  `driver_images_name` varchar(350) NOT NULL,
  `driver_images_created_date` datetime NOT NULL,
  `driver_images_created_user_id` int(11) NOT NULL,
  `driver_images_is_active` int(11) NOT NULL,
  PRIMARY KEY (`driver_images_id`),
  KEY `driver_info_id` (`driver_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `driver_images`
--

INSERT INTO `driver_images` (`driver_images_id`, `driver_info_id`, `driver_paper_name`, `driver_images_name`, `driver_images_created_date`, `driver_images_created_user_id`, `driver_images_is_active`) VALUES
(1, 3, 'Driver', 'images/driver_images/9785d9ca09dd253039ed58e00970b420.jpg', '2021-01-13 15:45:07', 1, 1),
(2, 4, 'Driver', 'images/driver_images/edb069cdb282841394becaeda23f0e73.gif', '2021-02-03 01:40:54', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `driver_info`
--

DROP TABLE IF EXISTS `driver_info`;
CREATE TABLE IF NOT EXISTS `driver_info` (
  `driver_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `driver_name` varchar(350) NOT NULL,
  `driver_mobile_number` varchar(350) NOT NULL,
  `driver_op_mobile_number` varchar(350) DEFAULT NULL,
  `driver_address` varchar(350) DEFAULT NULL,
  `driver_nid_card_no` varchar(200) DEFAULT NULL,
  `driver_license_number` varchar(350) NOT NULL,
  `driver_license_end_date` date DEFAULT NULL,
  `driver_parents_mobile_number` varchar(300) DEFAULT NULL,
  `driver_card_no` varchar(300) DEFAULT NULL,
  `driver_profile_photo` varchar(300) DEFAULT NULL,
  `driver_nid_card_front_side_image` varchar(300) DEFAULT NULL,
  `driver_nid_card_back_side_image` varchar(300) DEFAULT NULL,
  `driver_account_password` varchar(300) DEFAULT NULL,
  `driver_is_active` int(11) NOT NULL,
  `driver_is_used` int(11) NOT NULL DEFAULT '0',
  `vehicles_info_id` int(11) DEFAULT NULL,
  `driver_info_created_date` int(11) NOT NULL,
  `driver_created_user_id` int(11) NOT NULL,
  PRIMARY KEY (`driver_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `driver_info`
--

INSERT INTO `driver_info` (`driver_info_id`, `driver_name`, `driver_mobile_number`, `driver_op_mobile_number`, `driver_address`, `driver_nid_card_no`, `driver_license_number`, `driver_license_end_date`, `driver_parents_mobile_number`, `driver_card_no`, `driver_profile_photo`, `driver_nid_card_front_side_image`, `driver_nid_card_back_side_image`, `driver_account_password`, `driver_is_active`, `driver_is_used`, `vehicles_info_id`, `driver_info_created_date`, `driver_created_user_id`) VALUES
(1, 'Jahid Khan', '1525252523', '565665,6565665,654656526,465656', 'asdasdasd', '25465265', '546656', '2021-01-01', NULL, '9896565', 'images/driver_images/2f1d61982dd0d485bfe969a1e32feac5.jpg', 'images/driver_images/aa78abd68be2531ffb494bd595dd417b.jpg', 'images/driver_images/30b05c7c353dc12c2f26ead2ba245de2.jpg', NULL, 0, 1, 1, 2020, 1),
(2, 'New Driver', '01782727197', '', '5466', '', '5665', '2021-02-26', NULL, 'hjgjgj', '', '', '', NULL, 0, 1, 2, 2020, 1),
(3, 'Manik', '01911858217', '', 'Banepole', '362', '45522522522321', '2021-01-31', NULL, '', '', '', '', NULL, 0, 1, 4, 2021, 1),
(4, 'আফতাবুজ্জামান', '01711223348', '', 'খাজুরা বাস স্ট্যান্ড ,যশোর', '', '১৯৯৮৫৮৫৫৫২৩২', '2021-04-25', NULL, '১৩৫২', '', '', '', NULL, 1, 1, 5, 2021, 1);

-- --------------------------------------------------------

--
-- Table structure for table `exporter_info`
--

DROP TABLE IF EXISTS `exporter_info`;
CREATE TABLE IF NOT EXISTS `exporter_info` (
  `exporter_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `exporter_full_name` varchar(400) NOT NULL,
  `exporter_address` varchar(400) DEFAULT NULL,
  `exporter_email_address` varchar(200) DEFAULT NULL,
  `exporter_primary_mobile_number` varchar(200) NOT NULL,
  `exporter_op1_mobile_number` varchar(200) DEFAULT NULL,
  `exporter_op2_mobile_number` varchar(200) DEFAULT NULL,
  `exporter_user_name` varchar(200) DEFAULT NULL,
  `exporter_user_password` varchar(200) DEFAULT NULL,
  `exporter_nid_number` varchar(300) DEFAULT NULL,
  `exporter_nid_card_front_side_image` varchar(200) DEFAULT NULL,
  `exporter_nid_card_back_side_image` varchar(200) DEFAULT NULL,
  `exporter_profile_photo` varchar(200) DEFAULT NULL,
  `exporter_is_active` tinyint(4) NOT NULL,
  `exporter_is_flash_notification` int(11) NOT NULL DEFAULT '0',
  `exporter_is_normal_notification` int(11) NOT NULL DEFAULT '0',
  `flash_notification_id` int(11) DEFAULT NULL,
  `normal_notification_id` int(11) DEFAULT NULL,
  `exporter_created_date` datetime NOT NULL,
  `exporter_created_user_id` int(11) NOT NULL,
  PRIMARY KEY (`exporter_info_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `flash_notification`
--

DROP TABLE IF EXISTS `flash_notification`;
CREATE TABLE IF NOT EXISTS `flash_notification` (
  `flash_notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `flash_notification_title` varchar(250) NOT NULL,
  `flash_notification_details` text NOT NULL,
  `flash_notification_image` varchar(150) NOT NULL,
  `flash_notification_is_active` int(11) NOT NULL,
  `flash_notification_added_time` datetime NOT NULL,
  `flash_notification_added_user_id` int(11) NOT NULL,
  PRIMARY KEY (`flash_notification_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flash_notification`
--

INSERT INTO `flash_notification` (`flash_notification_id`, `flash_notification_title`, `flash_notification_details`, `flash_notification_image`, `flash_notification_is_active`, `flash_notification_added_time`, `flash_notification_added_user_id`) VALUES
(4, 'googd  work', 'All JAaAshrafuzzaman\r\nYoung Innovator,Founder & Chief executive officer of Cholo Group\r\nI am make a \" Road Acccident Prevention System \" I think this project can greatly reduce road accidents.i am build up cholo group Company.Cholo Group is representing Bangladesh. The members of Cholo Group are Cholo Transport, Cholo Shop , Cholo Super Mall, Cholo Technology ,Cholo iT ,Cholo GPS Tracker, Cholo Real state, Cholo Jai, Cholo Electronic, Cholo Khai, Cholo Import/Export, Cholo Enterprise.', 'images/notification_images/270a4dd25d20a4961a8ed8a8c06d87fd.jpg', 1, '2021-02-08 01:23:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gps_tracker_features`
--

DROP TABLE IF EXISTS `gps_tracker_features`;
CREATE TABLE IF NOT EXISTS `gps_tracker_features` (
  `gps_tracker_features_id` int(11) NOT NULL AUTO_INCREMENT,
  `gps_tracker_features_name` varchar(300) NOT NULL,
  `gps_tracker_features_article` text NOT NULL,
  `gps_tracker_features_image` varchar(200) NOT NULL,
  `gps_tracker_features_is_active` int(11) NOT NULL,
  `gps_tracker_features_added_time` datetime NOT NULL,
  `gps_tracker_features_added_user_id` int(11) NOT NULL,
  PRIMARY KEY (`gps_tracker_features_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gps_tracker_features`
--

INSERT INTO `gps_tracker_features` (`gps_tracker_features_id`, `gps_tracker_features_name`, `gps_tracker_features_article`, `gps_tracker_features_image`, `gps_tracker_features_is_active`, `gps_tracker_features_added_time`, `gps_tracker_features_added_user_id`) VALUES
(13, 'Monitor Multiple Vehicles', 'Monitor multiple vehicles on a single platform', 'images/truck_category/4436718fc1eb726b376b00dd112a8529.png', 1, '2021-01-22 01:40:34', 1),
(14, '6 Different Maps to Use', 'Use different map views (street view, hybrid view, satellites view etc.', 'images/truck_category/5ba80f7bd90960c4082c0c916471d827.png', 1, '2021-01-22 01:40:59', 1),
(15, 'Control Vehicle', 'Remote Stop/Resume Vehicle Engine', 'images/truck_category/762d9def040909a49cf9f3f315c5caba.png', 1, '2021-01-22 01:41:23', 1),
(16, 'Service Alerts', 'Manage your service routine with service alerts', 'images/truck_category/fb447a13898e8ac9b68f92eb9fd944d2.png', 1, '2021-01-22 01:41:43', 1),
(17, 'Route History', 'View & replay the precise routes taken by your vehicle', 'images/truck_category/b8c75ab0bdd10a7224931b5d43821c8f.png', 1, '2021-01-22 01:42:10', 1),
(18, 'Ignition Status', 'Monitor your vehicle’s ignition status in real-time', 'images/truck_category/27f4d61b6c9d365659dc174a171a1485.png', 1, '2021-01-22 01:42:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gps_user`
--

DROP TABLE IF EXISTS `gps_user`;
CREATE TABLE IF NOT EXISTS `gps_user` (
  `gps_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `gps_user_name` varchar(350) CHARACTER SET utf32 NOT NULL,
  `gps_user_phone_number` varchar(350) NOT NULL,
  `gps_user_details_address` text NOT NULL,
  `gps_user_state` varchar(350) NOT NULL,
  `gps_user_city` varchar(350) NOT NULL,
  `gps_user_post_code` varchar(350) NOT NULL,
  `gps_user_email_address` varchar(350) NOT NULL,
  `gps_user_account_password` varchar(350) NOT NULL,
  `gps_user_account_created_date` datetime NOT NULL,
  PRIMARY KEY (`gps_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `image_slider`
--

DROP TABLE IF EXISTS `image_slider`;
CREATE TABLE IF NOT EXISTS `image_slider` (
  `image_slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_slider_image_name` varchar(350) NOT NULL,
  `image_slider_link` varchar(350) NOT NULL,
  `image_slider_is_active` int(11) NOT NULL,
  `image_slider_added_time` datetime NOT NULL,
  `image_slider_added_user_id` int(11) NOT NULL,
  PRIMARY KEY (`image_slider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image_slider`
--

INSERT INTO `image_slider` (`image_slider_id`, `image_slider_image_name`, `image_slider_link`, `image_slider_is_active`, `image_slider_added_time`, `image_slider_added_user_id`) VALUES
(12, 'images/image_slider/3763f90f4599bdad908458b83a19bedb.png', 'https://www.facebook.com/btams.bd/', 1, '2021-06-21 19:21:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `importer_info`
--

DROP TABLE IF EXISTS `importer_info`;
CREATE TABLE IF NOT EXISTS `importer_info` (
  `importer_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `transport_owner_full_name_bn` varchar(400) DEFAULT NULL,
  `transport_owner_full_name_en` varchar(400) DEFAULT NULL,
  `importer_address` varchar(400) DEFAULT NULL,
  `transport_owner_permanent_address` text,
  `importer_email_address` varchar(200) DEFAULT NULL,
  `importer_primary_mobile_number` varchar(200) DEFAULT NULL,
  `importer_op1_mobile_number` varchar(350) DEFAULT NULL,
  `importer_op2_mobile_number` varchar(350) DEFAULT NULL,
  `transport_name_en` varchar(400) DEFAULT NULL,
  `transport_name_bn` varchar(400) DEFAULT NULL,
  `importer_user_password` varchar(200) DEFAULT NULL,
  `importer_nid_number` varchar(200) DEFAULT NULL,
  `importer_nid_card_front_side_image` varchar(200) DEFAULT NULL,
  `importer_nid_card_back_side_image` varchar(200) DEFAULT NULL,
  `importer_profile_photo` varchar(200) DEFAULT NULL,
  `importer_is_active` tinyint(4) NOT NULL,
  `importer_is_flash_notification` int(11) NOT NULL DEFAULT '0',
  `importer_is_normal_notification` int(11) NOT NULL DEFAULT '0',
  `flash_notification_id` int(11) DEFAULT NULL,
  `normal_notification_id` int(11) DEFAULT NULL,
  `importer_created_date` datetime DEFAULT NULL,
  `importer_created_user_id` int(11) NOT NULL,
  `transport_owner_blood_group` varchar(200) DEFAULT NULL,
  `transport_owner_member_no` varchar(350) DEFAULT NULL,
  `transport_owner_card_no` varchar(350) DEFAULT NULL,
  `transport_owner_QRcode_no` varchar(350) DEFAULT NULL,
  `transport_owner_member_type` varchar(250) DEFAULT NULL,
  `transport_owner_designation` varchar(250) DEFAULT NULL,
  `transport_owner_relative_name` varchar(350) DEFAULT NULL,
  `transport_owner_relative_number` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`importer_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `importer_info`
--

INSERT INTO `importer_info` (`importer_info_id`, `transport_owner_full_name_bn`, `transport_owner_full_name_en`, `importer_address`, `transport_owner_permanent_address`, `importer_email_address`, `importer_primary_mobile_number`, `importer_op1_mobile_number`, `importer_op2_mobile_number`, `transport_name_en`, `transport_name_bn`, `importer_user_password`, `importer_nid_number`, `importer_nid_card_front_side_image`, `importer_nid_card_back_side_image`, `importer_profile_photo`, `importer_is_active`, `importer_is_flash_notification`, `importer_is_normal_notification`, `flash_notification_id`, `normal_notification_id`, `importer_created_date`, `importer_created_user_id`, `transport_owner_blood_group`, `transport_owner_member_no`, `transport_owner_card_no`, `transport_owner_QRcode_no`, `transport_owner_member_type`, `transport_owner_designation`, `transport_owner_relative_name`, `transport_owner_relative_number`) VALUES
(1, 'Noman Khan', NULL, ' kgmdf ggg g jgmw wef wqfg rg', NULL, 'importer@gmail.com', '01890931354', '', '', 'import', NULL, '12345', '', '', '', '', 1, 0, 0, NULL, NULL, '2020-10-29 11:14:36', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Ariful Islam ', NULL, '', NULL, '', '01764842617', '', '', '', NULL, '12345', '', '', '', '', 1, 0, 0, NULL, NULL, '2020-11-08 21:14:44', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'ইমপালস ইঞ্জিনিয়ারিং ও পাওয়ার লি :  ,গাজীপুর চৌরাস্তা, গাজীপুর।', NULL, 'গাজীপুর চৌরাস্তা, গাজীপুর।', NULL, 'impdemo@gmail.com', '01711223345', '', '', 'impdemo@gmail.com', NULL, '123456', '', 'images/importer_images/5e16524ea0824a37e3ade4ce74be719d.png', 'images/importer_images/27b4dc73179a1c81eb0fba0d19a123f0.png', 'images/importer_images/9007452ed177a49f48c79122938d845f.png', 1, 0, 0, NULL, NULL, '2021-02-03 00:56:14', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'dadasd', 'asdasd', 'qasdas', 'dasdasd', 'admin@admin.com', '02212121212121212', '454543', NULL, '454', '5454545', 'NOMAN', '4545454545', 'images/importer_images/4015ca425427eb65cc17d76a755745d1.jpg', 'images/importer_images/65538cec4706daaa96aa721dae96d261.jpg', 'images/importer_images/d9a4a647dff3473d82758e23caeffc88.png', 1, 0, 0, NULL, NULL, '2021-06-22 13:01:49', 1, '4545', '24545454', '545454545', '454545454545', 'Member', NULL, 'NOMAN', '01521451354');

-- --------------------------------------------------------

--
-- Table structure for table `normal_notification`
--

DROP TABLE IF EXISTS `normal_notification`;
CREATE TABLE IF NOT EXISTS `normal_notification` (
  `normal_notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `normal_notification_title` varchar(300) NOT NULL,
  `normal_notification_details` text NOT NULL,
  `normal_notification_image` varchar(350) NOT NULL,
  `normal_notification_is_active` int(11) NOT NULL,
  `normal_notification_added_time` datetime NOT NULL,
  `normal_notification_added_user_id` int(11) NOT NULL,
  PRIMARY KEY (`normal_notification_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `normal_notification`
--

INSERT INTO `normal_notification` (`normal_notification_id`, `normal_notification_title`, `normal_notification_details`, `normal_notification_image`, `normal_notification_is_active`, `normal_notification_added_time`, `normal_notification_added_user_id`) VALUES
(2, 'asdas', 'dasdadad', '', 1, '2020-12-15 16:15:51', 1),
(3, 'Good', 'All in  all', 'images/notification_images/fabdd080d0c2ed712754878b9d558394.jpg', 1, '2021-02-08 01:21:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_role_id` int(11) NOT NULL AUTO_INCREMENT,
  `permission_role_name` varchar(250) NOT NULL,
  `permission_role_details` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`permission_role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_role_id`, `permission_role_name`, `permission_role_details`) VALUES
(1, 'frontend_control_panel', 'Control All Frontend Panel...'),
(2, 'manage_slider', NULL),
(3, 'slider_delete', NULL),
(4, 'manage_truck_lagbe', NULL),
(5, 'truck_lagbe_delete', NULL),
(6, 'manage_choose_us', NULL),
(7, 'choose_us_delete', NULL),
(8, 'manage_truck_category', NULL),
(9, 'truck_category_delete', NULL),
(10, 'manage_corporate_client', NULL),
(11, 'corporate_client_delete', NULL),
(12, 'manage_cover_industries', NULL),
(13, 'cover_industries_delete', NULL),
(14, 'manage_tracking_features', NULL),
(15, 'tracking_features_delete', NULL),
(16, 'all_request_control_panel', 'Control All Request Of Cholo Transport'),
(17, 'all_vehicles_request', NULL),
(18, 'vehicles_request_change_status', NULL),
(19, 'user_registration_request', NULL),
(20, 'device_tracking_scheduling', NULL),
(21, 'device_tracking_scheduling_status', NULL),
(22, 'user_registration_request_delete', NULL),
(23, 'cnf_control_panel', 'Control All cnf panel..'),
(24, 'add_cnf', NULL),
(25, 'manage_cnf', NULL),
(26, 'edit_cnf', NULL),
(27, 'publish_cnf', NULL),
(28, 'delete_cnf', NULL),
(29, 'importer_control_panel', 'Control All Importer Panel'),
(30, 'add_importer', NULL),
(31, 'manage_importer', NULL),
(32, 'edit_importer', NULL),
(33, 'publish_importer', NULL),
(34, 'delete_importer', NULL),
(35, 'exporter_control_panel', 'Control All Exporter Panel'),
(36, 'add_exporter', NULL),
(37, 'manage_exporter', NULL),
(38, 'edit_exporter', NULL),
(39, 'publish_exporter', NULL),
(40, 'delete_exporter', NULL),
(41, 'vehicles_control_panel', 'Control Vehicles All Panel'),
(42, 'add_vehicles', NULL),
(43, 'manage_vehicles', NULL),
(44, 'vehicles_change_driver', NULL),
(45, 'upload_vehicles_document', NULL),
(46, 'edit_vehicles', NULL),
(47, 'publish_vehicles', NULL),
(48, 'delete_vehicles', NULL),
(49, 'driver_control_panel', NULL),
(50, 'add_driver', NULL),
(51, 'manage_driver', NULL),
(52, 'upload_driver_document', NULL),
(53, 'edit_driver', NULL),
(54, 'delete_driver', NULL),
(55, 'chalan_control_panel', NULL),
(56, 'add_chalan', NULL),
(57, 'manage_chalan', NULL),
(58, 'upload_chalan_document', NULL),
(59, 'chalan_status_change', NULL),
(60, 'chalan_gps_location', NULL),
(61, 'chalan_edit', NULL),
(62, 'chalan_print', NULL),
(63, 'chalan_delete', NULL),
(64, 'account_control_panel', NULL),
(65, 'manage_income_category', NULL),
(66, 'edit_income_category', NULL),
(67, 'publish_income_category', NULL),
(68, 'manage_income_details', NULL),
(69, 'edit_income_details', NULL),
(70, 'delete_income_details', NULL),
(71, 'manage_costing_category', NULL),
(72, 'edit_costing_category', NULL),
(73, 'publish_costing_category', NULL),
(74, 'manage_costing_details', NULL),
(75, 'edit_costing_details', NULL),
(76, 'delete_costing_details', NULL),
(77, 'add_cost_details', NULL),
(78, 'manage_all_report', NULL),
(79, 'today_transaction_report', NULL),
(80, 'daily_transaction_report', NULL),
(81, 'monthly_transaction_report', NULL),
(82, 'due_report', NULL),
(83, 'all_income_report', NULL),
(84, 'income_summary_report', NULL),
(85, 'all_costing_report', NULL),
(86, 'costing_summary_report', NULL),
(87, 'profit_report', NULL),
(88, 'administrator_control_panel', 'Control Manage User, Manage Sms , Manage Notification'),
(89, 'sms_control_panel', NULL),
(90, 'manage_user', NULL),
(91, 'publish_user', NULL),
(92, 'assign_user_permission', NULL),
(93, 'assign_user_empty_permission', NULL),
(94, 'notification_control', NULL),
(95, 'manage_flash_notification', NULL),
(96, 'delete_flash_notification', NULL),
(97, 'manage_normal_notification', NULL),
(98, 'delete_normal_notification', NULL),
(99, 'admin_sp_power', NULL),
(100, 'admin_power', NULL),
(101, 'dashboard', 'Dashboard Role Helps Show Dashboard Content...');

-- --------------------------------------------------------

--
-- Table structure for table `request_notification`
--

DROP TABLE IF EXISTS `request_notification`;
CREATE TABLE IF NOT EXISTS `request_notification` (
  `request_notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicles_request_status` int(11) NOT NULL DEFAULT '0',
  `account_request_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`request_notification_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request_notification`
--

INSERT INTO `request_notification` (`request_notification_id`, `vehicles_request_status`, `account_request_status`) VALUES
(1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sms_notification`
--

DROP TABLE IF EXISTS `sms_notification`;
CREATE TABLE IF NOT EXISTS `sms_notification` (
  `sms_notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `chalan_cnf_sms` int(11) NOT NULL DEFAULT '0',
  `chalan_importer_sms` int(11) NOT NULL DEFAULT '0',
  `chalan_exporter_sms` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sms_notification_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sms_notification`
--

INSERT INTO `sms_notification` (`sms_notification_id`, `chalan_cnf_sms`, `chalan_importer_sms`, `chalan_exporter_sms`) VALUES
(1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `truck_category`
--

DROP TABLE IF EXISTS `truck_category`;
CREATE TABLE IF NOT EXISTS `truck_category` (
  `truck_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `truck_category_name` varchar(250) NOT NULL,
  `truck_category_article` text NOT NULL,
  `truck_category_image` varchar(250) NOT NULL,
  `truck_category_is_active` int(11) NOT NULL,
  `truck_category_added_time` datetime NOT NULL,
  `truck_category_added_user_id` int(11) NOT NULL,
  PRIMARY KEY (`truck_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `truck_category`
--

INSERT INTO `truck_category` (`truck_category_id`, `truck_category_name`, `truck_category_article`, `truck_category_image`, `truck_category_is_active`, `truck_category_added_time`, `truck_category_added_user_id`) VALUES
(2, '১ টন ট্রাক', 'মূলত পণ্য পরিবহণের প্রয়োজনীয়তার উপর ভিত্তি করেই মার্কেটে ভিন্ন ভিন্ন ট্রাকের উপযোগিতা তৈরি হয়।', 'images/truck_category/ab13c9c6f71f5aa2c901482194cc3f0b.jpg', 1, '2021-01-13 14:56:47', 1),
(3, '১.৫ টন ট্রাক', '১.৫ টনি ট্রাকগুলো ১ টনি ট্রাকের চেয়ে সামান্য বড় হয়ে থাকে। পণ্য প্রেরক তার প্রয়োজন অনুযায়ীই বাছাই করে থাকে', 'images/truck_category/c86ed6c4217d3e4fd4f74a8fd3ed2017.jpg', 1, '2021-01-13 14:58:48', 1),
(4, 'প্রাইম মুভার', 'মূলত এক্সপোর্ট-ইম্পোর্টের ভারী মালামাল আনা নেওয়ার কাজে এই প্রাইম মুভার বেশি ব্যবহৃত হয়', 'images/truck_category/64cf97d6e2f81c445135c7d7705a8236.jpg', 1, '2021-01-13 15:00:00', 1),
(5, '৭ টন ট্রাক', 'ভারী মালামাল পরিবহণ করা যায় তেমনি ভালো ব্র্যান্ডের ৭ টনি ট্রাকে পণ্যের নিরাপত্তাও নিশ্চিত হয়', 'images/truck_category/c4635e9bd5f178a0184b9365b03a5282.jpg', 1, '2021-01-13 15:01:22', 1),
(6, '১৫ টন ট্রাক', 'বড় ইন্ডাস্ট্রিগুলোতে শিপমেন্টের কাজে ১৫ টনের ট্রাক বেশি ব্যবহৃত হয়। ', 'images/truck_category/008cde24aad635e4080e2581b24dea4d.jpg', 1, '2021-01-13 15:02:48', 1),
(7, '২৫ টন ট্রাক', 'বড় বড় শিপমেন্টের ক্ষেত্রে ২৫ টনের ট্রাক ব্যবহার করা হয়', 'images/truck_category/2554354dee6c5420cca41c12af8f77ca.png', 1, '2021-01-18 22:06:20', 1),
(8, ' ২৫ টন ট্রাক', 'বড় বড় শিপমেন্টের ক্ষেত্রে ২৫ টনের ট্রাক ব্যবহার করা হয়', 'images/truck_category/cd525b5c12f21d0b7212aaaa55578af9.png', 1, '2021-01-22 01:12:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `truck_lagbe`
--

DROP TABLE IF EXISTS `truck_lagbe`;
CREATE TABLE IF NOT EXISTS `truck_lagbe` (
  `truck_lagbe_id` int(11) NOT NULL AUTO_INCREMENT,
  `truck_lagbe_icon` varchar(300) DEFAULT NULL,
  `truck_lagbe_icon_article` varchar(100) DEFAULT NULL,
  `truck_lagbe_is_active` int(11) NOT NULL,
  `truck_lagbe_added_date` datetime NOT NULL,
  PRIMARY KEY (`truck_lagbe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `truck_lagbe`
--

INSERT INTO `truck_lagbe` (`truck_lagbe_id`, `truck_lagbe_icon`, `truck_lagbe_icon_article`, `truck_lagbe_is_active`, `truck_lagbe_added_date`) VALUES
(9, 'images/truck_lagbe/abaf14c4c695cefdc3bf5ddcc3db8b7c.png', 'সার্বক্ষণিক নজরদারি', 1, '2021-01-13 13:35:29'),
(10, 'images/truck_lagbe/491c409771fa4bb9d67498de7ed013bc.png', 'সেরা রেট', 1, '2021-01-13 13:36:23'),
(11, 'images/truck_lagbe/7e5259ace7fa77d4a820c4c3c24fe999.png', 'দক্ষ ড্রাইভার', 1, '2021-01-13 13:36:48'),
(12, 'images/truck_lagbe/b7ef73b04e3926cddf07d7d4075a2b81.png', 'ddd', 1, '2021-06-15 22:35:02'),
(13, 'images/truck_lagbe/857a692a7b8913d79032080041568303.png', 'dsd', 1, '2021-06-15 22:35:17'),
(14, 'images/truck_lagbe/763b2919fc34004724bc9609ad4b5ff2.png', 'dgsgdsdg', 1, '2021-06-15 22:35:26'),
(15, 'images/truck_lagbe/f7b253d28b134f80a9cf29f31ef2b801.png', 'sgdsgsd', 1, '2021-06-15 22:35:35'),
(16, 'images/truck_lagbe/2dfea3f85ceb8121396c2cb3454d3d85.png', 'sgsdgsdgsdgasd', 1, '2021-06-15 22:35:45'),
(17, 'images/truck_lagbe/e174d1fe300b99523c4f3a5bee8084c9.png', 'dsgadsgasdgdsg', 1, '2021-06-15 22:35:55'),
(18, 'images/truck_lagbe/afe74a770d76df659c263a4dc57fefb9.png', 'sdgsadgsdghsdhsdhdh', 1, '2021-06-15 22:36:02'),
(19, 'images/truck_lagbe/e981be31d7719a5a3b8d3faff5b21030.png', 'dgasdgdasgdgsdg', 1, '2021-06-15 22:36:11'),
(26, 'images/truck_lagbe/5428466f79f7d115000018d2e41af81c.png', '.', 1, '2021-06-22 07:14:57'),
(27, 'images/truck_lagbe/5a033bd8b371004acc640f3742c3afa7.jpg', 'd', 1, '2021-06-22 07:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `truck_lagbe_head`
--

DROP TABLE IF EXISTS `truck_lagbe_head`;
CREATE TABLE IF NOT EXISTS `truck_lagbe_head` (
  `truck_lagbe_head_id` int(11) NOT NULL AUTO_INCREMENT,
  `truck_lagbe_head` text NOT NULL,
  `truck_lagbe_main_article` text NOT NULL,
  PRIMARY KEY (`truck_lagbe_head_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `truck_lagbe_head`
--

INSERT INTO `truck_lagbe_head` (`truck_lagbe_head_id`, `truck_lagbe_head`, `truck_lagbe_main_article`) VALUES
(1, 'এক নজরে বেনাপোল ট্রান্সপোর্ট এজেন্সী মালিক সমিতি প্যানেল পরিচিত ', 'বাংলাদেশের শীর্ষস্থানীয় স্থান বেনাপোল স্থলবন্দর। বেনাপোলের বুকে ১৯৯২ সাল থেকে একটু একটু করে গড়ে উঠেছে বেনাপোল ট্রান্সপোর্ট এজেন্সি মালিক সমিতি। প্রতিষ্ঠাতা: মরহুম ফজলুর রহমান। সেক্রেটারি:  ডঃ আব্দুল মজিদ মন্টু।');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `fullname` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `user_email` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `access_level` tinyint(1) DEFAULT NULL,
  `activation_status` tinyint(1) DEFAULT NULL,
  `user_is_login` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `fullname`, `user_email`, `password`, `access_level`, `activation_status`, `user_is_login`) VALUES
(1, 'noman', 'Jahidul Islam Noman', 'noman.cse19@gmail.com', '088564c3bbea7bca92362e03d0f9204c', 1, 1, 1),
(3, 'akkasali', 'COO Akkas Ali', 'coo@transport', 'e10adc3949ba59abbe56e057f20f883e', NULL, 1, 0),
(4, 'ceo@chologroup.com', 'Ashrafuzzaman', 'ceo@chologroup.com', 'd842b294daf48a25a2ed5011df76e01c', NULL, 1, 1),
(5, 'Ferdose ahamed', 'Ferdose ahamed', 'ferdouse087@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 1, 0),
(6, 'Sagor Hossain', 'Accouter Sagor', 'sagorhossain23573@gmail.com', 'd842b294daf48a25a2ed5011df76e01c', NULL, 1, 0),
(7, 'Transport Malik Somity', 'btams@gmail.com', 'Transport Malik Somity', 'd842b294daf48a25a2ed5011df76e01c', NULL, 0, 0),
(8, 'Transport Malik Somity', 'Transport Malik Somity', 'btams@gmail.com', 'd842b294daf48a25a2ed5011df76e01c', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_permission`
--

DROP TABLE IF EXISTS `users_permission`;
CREATE TABLE IF NOT EXISTS `users_permission` (
  `users_permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `permission_role_id` int(11) NOT NULL,
  `permission_role_name` varchar(250) DEFAULT NULL,
  `permission_role_details` varchar(300) DEFAULT NULL,
  `is_permission` int(11) NOT NULL,
  PRIMARY KEY (`users_permission_id`)
) ENGINE=InnoDB AUTO_INCREMENT=909 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_permission`
--

INSERT INTO `users_permission` (`users_permission_id`, `user_id`, `permission_role_id`, `permission_role_name`, `permission_role_details`, `is_permission`) VALUES
(101, 1, 1, 'frontend_control_panel', 'Control All Frontend Panel...', 1),
(102, 1, 2, 'manage_slider', NULL, 1),
(103, 1, 3, 'slider_delete', NULL, 1),
(104, 1, 4, 'manage_truck_lagbe', NULL, 1),
(105, 1, 5, 'truck_lagbe_delete', NULL, 1),
(106, 1, 6, 'manage_choose_us', NULL, 1),
(107, 1, 7, 'choose_us_delete', NULL, 1),
(108, 1, 8, 'manage_truck_category', NULL, 1),
(109, 1, 9, 'truck_category_delete', NULL, 1),
(110, 1, 10, 'manage_corporate_client', NULL, 1),
(111, 1, 11, 'corporate_client_delete', NULL, 1),
(112, 1, 12, 'manage_cover_industries', NULL, 1),
(113, 1, 13, 'cover_industries_delete', NULL, 1),
(114, 1, 14, 'manage_tracking_features', NULL, 1),
(115, 1, 15, 'tracking_features_delete', NULL, 1),
(116, 1, 16, 'all_request_control_panel', 'Control All Request Of Cholo Transport', 1),
(117, 1, 17, 'all_vehicles_request', NULL, 1),
(118, 1, 18, 'vehicles_request_change_status', NULL, 1),
(119, 1, 19, 'user_registration_request', NULL, 1),
(120, 1, 20, 'device_tracking_scheduling', NULL, 1),
(121, 1, 21, 'device_tracking_scheduling_status', NULL, 1),
(122, 1, 22, 'user_registration_request_delete', NULL, 1),
(123, 1, 23, 'cnf_control_panel', 'Control All cnf panel..', 1),
(124, 1, 24, 'add_cnf', NULL, 1),
(125, 1, 25, 'manage_cnf', NULL, 1),
(126, 1, 26, 'edit_cnf', NULL, 1),
(127, 1, 27, 'publish_cnf', NULL, 1),
(128, 1, 28, 'delete_cnf', NULL, 1),
(129, 1, 29, 'importer_control_panel', 'Control All Importer Panel', 1),
(130, 1, 30, 'add_importer', NULL, 1),
(131, 1, 31, 'manage_importer', NULL, 1),
(132, 1, 32, 'edit_importer', NULL, 1),
(133, 1, 33, 'publish_importer', NULL, 1),
(134, 1, 34, 'delete_importer', NULL, 1),
(135, 1, 35, 'exporter_control_panel', 'Control All Exporter Panel', 1),
(136, 1, 36, 'add_exporter', NULL, 1),
(137, 1, 37, 'manage_exporter', NULL, 1),
(138, 1, 38, 'edit_exporter', NULL, 1),
(139, 1, 39, 'publish_exporter', NULL, 1),
(140, 1, 40, 'delete_exporter', NULL, 1),
(141, 1, 41, 'vehicles_control_panel', 'Control Vehicles All Panel', 1),
(142, 1, 42, 'add_vehicles', NULL, 1),
(143, 1, 43, 'manage_vehicles', NULL, 1),
(144, 1, 44, 'vehicles_change_driver', NULL, 1),
(145, 1, 45, 'upload_vehicles_document', NULL, 1),
(146, 1, 46, 'edit_vehicles', NULL, 1),
(147, 1, 47, 'publish_vehicles', NULL, 1),
(148, 1, 48, 'delete_vehicles', NULL, 1),
(149, 1, 49, 'driver_control_panel', NULL, 1),
(150, 1, 50, 'add_driver', NULL, 1),
(151, 1, 51, 'manage_driver', NULL, 1),
(152, 1, 52, 'upload_driver_document', NULL, 1),
(153, 1, 53, 'edit_driver', NULL, 1),
(154, 1, 54, 'delete_driver', NULL, 1),
(155, 1, 55, 'chalan_control_panel', NULL, 1),
(156, 1, 56, 'add_chalan', NULL, 1),
(157, 1, 57, 'manage_chalan', NULL, 1),
(158, 1, 58, 'upload_chalan_document', NULL, 1),
(159, 1, 59, 'chalan_status_change', NULL, 1),
(160, 1, 60, 'chalan_gps_location', NULL, 1),
(161, 1, 61, 'chalan_edit', NULL, 1),
(162, 1, 62, 'chalan_print', NULL, 1),
(163, 1, 63, 'chalan_delete', NULL, 1),
(164, 1, 64, 'account_control_panel', NULL, 1),
(165, 1, 65, 'manage_income_category', NULL, 1),
(166, 1, 66, 'edit_income_category', NULL, 1),
(167, 1, 67, 'publish_income_category', NULL, 1),
(168, 1, 68, 'manage_income_details', NULL, 1),
(169, 1, 69, 'edit_income_details', NULL, 1),
(170, 1, 70, 'delete_income_details', NULL, 1),
(171, 1, 71, 'manage_costing_category', NULL, 1),
(172, 1, 72, 'edit_costing_category', NULL, 1),
(173, 1, 73, 'publish_costing_category', NULL, 1),
(174, 1, 74, 'manage_costing_details', NULL, 1),
(175, 1, 75, 'edit_costing_details', NULL, 1),
(176, 1, 76, 'delete_costing_details', NULL, 1),
(177, 1, 77, 'add_cost_details', NULL, 1),
(178, 1, 78, 'manage_all_report', NULL, 1),
(179, 1, 79, 'today_transaction_report', NULL, 1),
(180, 1, 80, 'daily_transaction_report', NULL, 1),
(181, 1, 81, 'monthly_transaction_report', NULL, 1),
(182, 1, 82, 'due_report', NULL, 1),
(183, 1, 83, 'all_income_report', NULL, 1),
(184, 1, 84, 'income_summary_report', NULL, 1),
(185, 1, 85, 'all_costing_report', NULL, 1),
(186, 1, 86, 'costing_summary_report', NULL, 1),
(187, 1, 87, 'profit_report', NULL, 1),
(188, 1, 88, 'administrator_control_panel', 'Control Manage User, Manage Sms , Manage Notification', 1),
(189, 1, 89, 'sms_control_panel', NULL, 1),
(190, 1, 90, 'manage_user', NULL, 1),
(191, 1, 91, 'publish_user', NULL, 1),
(192, 1, 92, 'assign_user_permission', NULL, 1),
(193, 1, 93, 'assign_user_empty_permission', NULL, 1),
(194, 1, 94, 'notification_control', NULL, 1),
(195, 1, 95, 'manage_flash_notification', NULL, 1),
(196, 1, 96, 'delete_flash_notification', NULL, 1),
(197, 1, 97, 'manage_normal_notification', NULL, 1),
(198, 1, 98, 'delete_normal_notification', NULL, 1),
(199, 1, 99, 'admin_sp_power', NULL, 1),
(200, 1, 100, 'admin_power', NULL, 1),
(201, 1, 101, 'dashboard', 'Dashboard Role Helps Show Dashboard Content...', 1),
(202, 3, 1, 'frontend_control_panel', 'Control All Frontend Panel...', 0),
(203, 3, 2, 'manage_slider', NULL, 0),
(204, 3, 3, 'slider_delete', NULL, 0),
(205, 3, 4, 'manage_truck_lagbe', NULL, 0),
(206, 3, 5, 'truck_lagbe_delete', NULL, 0),
(207, 3, 6, 'manage_choose_us', NULL, 0),
(208, 3, 7, 'choose_us_delete', NULL, 0),
(209, 3, 8, 'manage_truck_category', NULL, 0),
(210, 3, 9, 'truck_category_delete', NULL, 0),
(211, 3, 10, 'manage_corporate_client', NULL, 0),
(212, 3, 11, 'corporate_client_delete', NULL, 0),
(213, 3, 12, 'manage_cover_industries', NULL, 0),
(214, 3, 13, 'cover_industries_delete', NULL, 0),
(215, 3, 14, 'manage_tracking_features', NULL, 0),
(216, 3, 15, 'tracking_features_delete', NULL, 0),
(217, 3, 16, 'all_request_control_panel', 'Control All Request Of Cholo Transport', 0),
(218, 3, 17, 'all_vehicles_request', NULL, 0),
(219, 3, 18, 'vehicles_request_change_status', NULL, 0),
(220, 3, 19, 'user_registration_request', NULL, 0),
(221, 3, 20, 'device_tracking_scheduling', NULL, 0),
(222, 3, 21, 'device_tracking_scheduling_status', NULL, 0),
(223, 3, 22, 'user_registration_request_delete', NULL, 0),
(224, 3, 23, 'cnf_control_panel', 'Control All cnf panel..', 0),
(225, 3, 24, 'add_cnf', NULL, 0),
(226, 3, 25, 'manage_cnf', NULL, 0),
(227, 3, 26, 'edit_cnf', NULL, 0),
(228, 3, 27, 'publish_cnf', NULL, 0),
(229, 3, 28, 'delete_cnf', NULL, 0),
(230, 3, 29, 'importer_control_panel', 'Control All Importer Panel', 0),
(231, 3, 30, 'add_importer', NULL, 0),
(232, 3, 31, 'manage_importer', NULL, 0),
(233, 3, 32, 'edit_importer', NULL, 0),
(234, 3, 33, 'publish_importer', NULL, 0),
(235, 3, 34, 'delete_importer', NULL, 0),
(236, 3, 35, 'exporter_control_panel', 'Control All Exporter Panel', 0),
(237, 3, 36, 'add_exporter', NULL, 0),
(238, 3, 37, 'manage_exporter', NULL, 0),
(239, 3, 38, 'edit_exporter', NULL, 0),
(240, 3, 39, 'publish_exporter', NULL, 0),
(241, 3, 40, 'delete_exporter', NULL, 0),
(242, 3, 41, 'vehicles_control_panel', 'Control Vehicles All Panel', 0),
(243, 3, 42, 'add_vehicles', NULL, 0),
(244, 3, 43, 'manage_vehicles', NULL, 0),
(245, 3, 44, 'vehicles_change_driver', NULL, 0),
(246, 3, 45, 'upload_vehicles_document', NULL, 0),
(247, 3, 46, 'edit_vehicles', NULL, 0),
(248, 3, 47, 'publish_vehicles', NULL, 0),
(249, 3, 48, 'delete_vehicles', NULL, 0),
(250, 3, 49, 'driver_control_panel', NULL, 0),
(251, 3, 50, 'add_driver', NULL, 0),
(252, 3, 51, 'manage_driver', NULL, 0),
(253, 3, 52, 'upload_driver_document', NULL, 0),
(254, 3, 53, 'edit_driver', NULL, 0),
(255, 3, 54, 'delete_driver', NULL, 0),
(256, 3, 55, 'chalan_control_panel', NULL, 0),
(257, 3, 56, 'add_chalan', NULL, 0),
(258, 3, 57, 'manage_chalan', NULL, 0),
(259, 3, 58, 'upload_chalan_document', NULL, 0),
(260, 3, 59, 'chalan_status_change', NULL, 0),
(261, 3, 60, 'chalan_gps_location', NULL, 0),
(262, 3, 61, 'chalan_edit', NULL, 0),
(263, 3, 62, 'chalan_print', NULL, 0),
(264, 3, 63, 'chalan_delete', NULL, 0),
(265, 3, 64, 'account_control_panel', NULL, 0),
(266, 3, 65, 'manage_income_category', NULL, 0),
(267, 3, 66, 'edit_income_category', NULL, 0),
(268, 3, 67, 'publish_income_category', NULL, 0),
(269, 3, 68, 'manage_income_details', NULL, 0),
(270, 3, 69, 'edit_income_details', NULL, 0),
(271, 3, 70, 'delete_income_details', NULL, 0),
(272, 3, 71, 'manage_costing_category', NULL, 0),
(273, 3, 72, 'edit_costing_category', NULL, 0),
(274, 3, 73, 'publish_costing_category', NULL, 0),
(275, 3, 74, 'manage_costing_details', NULL, 0),
(276, 3, 75, 'edit_costing_details', NULL, 0),
(277, 3, 76, 'delete_costing_details', NULL, 0),
(278, 3, 77, 'add_cost_details', NULL, 0),
(279, 3, 78, 'manage_all_report', NULL, 0),
(280, 3, 79, 'today_transaction_report', NULL, 0),
(281, 3, 80, 'daily_transaction_report', NULL, 0),
(282, 3, 81, 'monthly_transaction_report', NULL, 0),
(283, 3, 82, 'due_report', NULL, 0),
(284, 3, 83, 'all_income_report', NULL, 0),
(285, 3, 84, 'income_summary_report', NULL, 0),
(286, 3, 85, 'all_costing_report', NULL, 0),
(287, 3, 86, 'costing_summary_report', NULL, 0),
(288, 3, 87, 'profit_report', NULL, 0),
(289, 3, 88, 'administrator_control_panel', 'Control Manage User, Manage Sms , Manage Notification', 0),
(290, 3, 89, 'sms_control_panel', NULL, 0),
(291, 3, 90, 'manage_user', NULL, 0),
(292, 3, 91, 'publish_user', NULL, 0),
(293, 3, 92, 'assign_user_permission', NULL, 0),
(294, 3, 93, 'assign_user_empty_permission', NULL, 0),
(295, 3, 94, 'notification_control', NULL, 0),
(296, 3, 95, 'manage_flash_notification', NULL, 0),
(297, 3, 96, 'delete_flash_notification', NULL, 0),
(298, 3, 97, 'manage_normal_notification', NULL, 0),
(299, 3, 98, 'delete_normal_notification', NULL, 0),
(300, 3, 99, 'admin_sp_power', NULL, 0),
(301, 3, 100, 'admin_power', NULL, 0),
(302, 3, 101, 'dashboard', 'Dashboard Role Helps Show Dashboard Content...', 0),
(303, 4, 1, 'frontend_control_panel', 'Control All Frontend Panel...', 1),
(304, 4, 2, 'manage_slider', NULL, 1),
(305, 4, 3, 'slider_delete', NULL, 1),
(306, 4, 4, 'manage_truck_lagbe', NULL, 1),
(307, 4, 5, 'truck_lagbe_delete', NULL, 1),
(308, 4, 6, 'manage_choose_us', NULL, 1),
(309, 4, 7, 'choose_us_delete', NULL, 1),
(310, 4, 8, 'manage_truck_category', NULL, 1),
(311, 4, 9, 'truck_category_delete', NULL, 1),
(312, 4, 10, 'manage_corporate_client', NULL, 1),
(313, 4, 11, 'corporate_client_delete', NULL, 1),
(314, 4, 12, 'manage_cover_industries', NULL, 1),
(315, 4, 13, 'cover_industries_delete', NULL, 1),
(316, 4, 14, 'manage_tracking_features', NULL, 1),
(317, 4, 15, 'tracking_features_delete', NULL, 1),
(318, 4, 16, 'all_request_control_panel', 'Control All Request Of Cholo Transport', 1),
(319, 4, 17, 'all_vehicles_request', NULL, 1),
(320, 4, 18, 'vehicles_request_change_status', NULL, 1),
(321, 4, 19, 'user_registration_request', NULL, 1),
(322, 4, 20, 'device_tracking_scheduling', NULL, 1),
(323, 4, 21, 'device_tracking_scheduling_status', NULL, 1),
(324, 4, 22, 'user_registration_request_delete', NULL, 1),
(325, 4, 23, 'cnf_control_panel', 'Control All cnf panel..', 1),
(326, 4, 24, 'add_cnf', NULL, 1),
(327, 4, 25, 'manage_cnf', NULL, 1),
(328, 4, 26, 'edit_cnf', NULL, 1),
(329, 4, 27, 'publish_cnf', NULL, 1),
(330, 4, 28, 'delete_cnf', NULL, 1),
(331, 4, 29, 'importer_control_panel', 'Control All Importer Panel', 1),
(332, 4, 30, 'add_importer', NULL, 1),
(333, 4, 31, 'manage_importer', NULL, 1),
(334, 4, 32, 'edit_importer', NULL, 1),
(335, 4, 33, 'publish_importer', NULL, 1),
(336, 4, 34, 'delete_importer', NULL, 1),
(337, 4, 35, 'exporter_control_panel', 'Control All Exporter Panel', 1),
(338, 4, 36, 'add_exporter', NULL, 1),
(339, 4, 37, 'manage_exporter', NULL, 1),
(340, 4, 38, 'edit_exporter', NULL, 1),
(341, 4, 39, 'publish_exporter', NULL, 1),
(342, 4, 40, 'delete_exporter', NULL, 1),
(343, 4, 41, 'vehicles_control_panel', 'Control Vehicles All Panel', 1),
(344, 4, 42, 'add_vehicles', NULL, 1),
(345, 4, 43, 'manage_vehicles', NULL, 1),
(346, 4, 44, 'vehicles_change_driver', NULL, 1),
(347, 4, 45, 'upload_vehicles_document', NULL, 1),
(348, 4, 46, 'edit_vehicles', NULL, 1),
(349, 4, 47, 'publish_vehicles', NULL, 1),
(350, 4, 48, 'delete_vehicles', NULL, 1),
(351, 4, 49, 'driver_control_panel', NULL, 1),
(352, 4, 50, 'add_driver', NULL, 1),
(353, 4, 51, 'manage_driver', NULL, 1),
(354, 4, 52, 'upload_driver_document', NULL, 1),
(355, 4, 53, 'edit_driver', NULL, 1),
(356, 4, 54, 'delete_driver', NULL, 1),
(357, 4, 55, 'chalan_control_panel', NULL, 1),
(358, 4, 56, 'add_chalan', NULL, 1),
(359, 4, 57, 'manage_chalan', NULL, 1),
(360, 4, 58, 'upload_chalan_document', NULL, 1),
(361, 4, 59, 'chalan_status_change', NULL, 1),
(362, 4, 60, 'chalan_gps_location', NULL, 1),
(363, 4, 61, 'chalan_edit', NULL, 1),
(364, 4, 62, 'chalan_print', NULL, 1),
(365, 4, 63, 'chalan_delete', NULL, 1),
(366, 4, 64, 'account_control_panel', NULL, 1),
(367, 4, 65, 'manage_income_category', NULL, 1),
(368, 4, 66, 'edit_income_category', NULL, 1),
(369, 4, 67, 'publish_income_category', NULL, 1),
(370, 4, 68, 'manage_income_details', NULL, 1),
(371, 4, 69, 'edit_income_details', NULL, 1),
(372, 4, 70, 'delete_income_details', NULL, 1),
(373, 4, 71, 'manage_costing_category', NULL, 1),
(374, 4, 72, 'edit_costing_category', NULL, 1),
(375, 4, 73, 'publish_costing_category', NULL, 1),
(376, 4, 74, 'manage_costing_details', NULL, 1),
(377, 4, 75, 'edit_costing_details', NULL, 1),
(378, 4, 76, 'delete_costing_details', NULL, 1),
(379, 4, 77, 'add_cost_details', NULL, 1),
(380, 4, 78, 'manage_all_report', NULL, 1),
(381, 4, 79, 'today_transaction_report', NULL, 1),
(382, 4, 80, 'daily_transaction_report', NULL, 1),
(383, 4, 81, 'monthly_transaction_report', NULL, 1),
(384, 4, 82, 'due_report', NULL, 1),
(385, 4, 83, 'all_income_report', NULL, 1),
(386, 4, 84, 'income_summary_report', NULL, 1),
(387, 4, 85, 'all_costing_report', NULL, 1),
(388, 4, 86, 'costing_summary_report', NULL, 1),
(389, 4, 87, 'profit_report', NULL, 1),
(390, 4, 88, 'administrator_control_panel', 'Control Manage User, Manage Sms , Manage Notification', 1),
(391, 4, 89, 'sms_control_panel', NULL, 1),
(392, 4, 90, 'manage_user', NULL, 1),
(393, 4, 91, 'publish_user', NULL, 1),
(394, 4, 92, 'assign_user_permission', NULL, 1),
(395, 4, 93, 'assign_user_empty_permission', NULL, 1),
(396, 4, 94, 'notification_control', NULL, 1),
(397, 4, 95, 'manage_flash_notification', NULL, 1),
(398, 4, 96, 'delete_flash_notification', NULL, 1),
(399, 4, 97, 'manage_normal_notification', NULL, 1),
(400, 4, 98, 'delete_normal_notification', NULL, 1),
(401, 4, 99, 'admin_sp_power', NULL, 1),
(402, 4, 100, 'admin_power', NULL, 1),
(403, 4, 101, 'dashboard', 'Dashboard Role Helps Show Dashboard Content...', 1),
(505, 5, 1, 'frontend_control_panel', 'Control All Frontend Panel...', 0),
(506, 5, 2, 'manage_slider', NULL, 0),
(507, 5, 3, 'slider_delete', NULL, 0),
(508, 5, 4, 'manage_truck_lagbe', NULL, 0),
(509, 5, 5, 'truck_lagbe_delete', NULL, 0),
(510, 5, 6, 'manage_choose_us', NULL, 0),
(511, 5, 7, 'choose_us_delete', NULL, 0),
(512, 5, 8, 'manage_truck_category', NULL, 0),
(513, 5, 9, 'truck_category_delete', NULL, 0),
(514, 5, 10, 'manage_corporate_client', NULL, 0),
(515, 5, 11, 'corporate_client_delete', NULL, 0),
(516, 5, 12, 'manage_cover_industries', NULL, 0),
(517, 5, 13, 'cover_industries_delete', NULL, 0),
(518, 5, 14, 'manage_tracking_features', NULL, 0),
(519, 5, 15, 'tracking_features_delete', NULL, 0),
(520, 5, 16, 'all_request_control_panel', 'Control All Request Of Cholo Transport', 1),
(521, 5, 17, 'all_vehicles_request', NULL, 0),
(522, 5, 18, 'vehicles_request_change_status', NULL, 0),
(523, 5, 19, 'user_registration_request', NULL, 0),
(524, 5, 20, 'device_tracking_scheduling', NULL, 1),
(525, 5, 21, 'device_tracking_scheduling_status', NULL, 0),
(526, 5, 22, 'user_registration_request_delete', NULL, 0),
(527, 5, 23, 'cnf_control_panel', 'Control All cnf panel..', 0),
(528, 5, 24, 'add_cnf', NULL, 0),
(529, 5, 25, 'manage_cnf', NULL, 0),
(530, 5, 26, 'edit_cnf', NULL, 0),
(531, 5, 27, 'publish_cnf', NULL, 0),
(532, 5, 28, 'delete_cnf', NULL, 0),
(533, 5, 29, 'importer_control_panel', 'Control All Importer Panel', 0),
(534, 5, 30, 'add_importer', NULL, 0),
(535, 5, 31, 'manage_importer', NULL, 0),
(536, 5, 32, 'edit_importer', NULL, 0),
(537, 5, 33, 'publish_importer', NULL, 0),
(538, 5, 34, 'delete_importer', NULL, 0),
(539, 5, 35, 'exporter_control_panel', 'Control All Exporter Panel', 0),
(540, 5, 36, 'add_exporter', NULL, 0),
(541, 5, 37, 'manage_exporter', NULL, 0),
(542, 5, 38, 'edit_exporter', NULL, 0),
(543, 5, 39, 'publish_exporter', NULL, 0),
(544, 5, 40, 'delete_exporter', NULL, 0),
(545, 5, 41, 'vehicles_control_panel', 'Control Vehicles All Panel', 0),
(546, 5, 42, 'add_vehicles', NULL, 0),
(547, 5, 43, 'manage_vehicles', NULL, 0),
(548, 5, 44, 'vehicles_change_driver', NULL, 0),
(549, 5, 45, 'upload_vehicles_document', NULL, 0),
(550, 5, 46, 'edit_vehicles', NULL, 0),
(551, 5, 47, 'publish_vehicles', NULL, 0),
(552, 5, 48, 'delete_vehicles', NULL, 0),
(553, 5, 49, 'driver_control_panel', NULL, 0),
(554, 5, 50, 'add_driver', NULL, 0),
(555, 5, 51, 'manage_driver', NULL, 0),
(556, 5, 52, 'upload_driver_document', NULL, 0),
(557, 5, 53, 'edit_driver', NULL, 0),
(558, 5, 54, 'delete_driver', NULL, 0),
(559, 5, 55, 'chalan_control_panel', NULL, 0),
(560, 5, 56, 'add_chalan', NULL, 0),
(561, 5, 57, 'manage_chalan', NULL, 0),
(562, 5, 58, 'upload_chalan_document', NULL, 0),
(563, 5, 59, 'chalan_status_change', NULL, 0),
(564, 5, 60, 'chalan_gps_location', NULL, 0),
(565, 5, 61, 'chalan_edit', NULL, 0),
(566, 5, 62, 'chalan_print', NULL, 0),
(567, 5, 63, 'chalan_delete', NULL, 0),
(568, 5, 64, 'account_control_panel', NULL, 0),
(569, 5, 65, 'manage_income_category', NULL, 0),
(570, 5, 66, 'edit_income_category', NULL, 0),
(571, 5, 67, 'publish_income_category', NULL, 0),
(572, 5, 68, 'manage_income_details', NULL, 0),
(573, 5, 69, 'edit_income_details', NULL, 0),
(574, 5, 70, 'delete_income_details', NULL, 0),
(575, 5, 71, 'manage_costing_category', NULL, 0),
(576, 5, 72, 'edit_costing_category', NULL, 0),
(577, 5, 73, 'publish_costing_category', NULL, 0),
(578, 5, 74, 'manage_costing_details', NULL, 0),
(579, 5, 75, 'edit_costing_details', NULL, 0),
(580, 5, 76, 'delete_costing_details', NULL, 0),
(581, 5, 77, 'add_cost_details', NULL, 0),
(582, 5, 78, 'manage_all_report', NULL, 0),
(583, 5, 79, 'today_transaction_report', NULL, 0),
(584, 5, 80, 'daily_transaction_report', NULL, 0),
(585, 5, 81, 'monthly_transaction_report', NULL, 0),
(586, 5, 82, 'due_report', NULL, 0),
(587, 5, 83, 'all_income_report', NULL, 0),
(588, 5, 84, 'income_summary_report', NULL, 0),
(589, 5, 85, 'all_costing_report', NULL, 0),
(590, 5, 86, 'costing_summary_report', NULL, 0),
(591, 5, 87, 'profit_report', NULL, 0),
(592, 5, 88, 'administrator_control_panel', 'Control Manage User, Manage Sms , Manage Notification', 0),
(593, 5, 89, 'sms_control_panel', NULL, 0),
(594, 5, 90, 'manage_user', NULL, 0),
(595, 5, 91, 'publish_user', NULL, 0),
(596, 5, 92, 'assign_user_permission', NULL, 0),
(597, 5, 93, 'assign_user_empty_permission', NULL, 0),
(598, 5, 94, 'notification_control', NULL, 0),
(599, 5, 95, 'manage_flash_notification', NULL, 0),
(600, 5, 96, 'delete_flash_notification', NULL, 0),
(601, 5, 97, 'manage_normal_notification', NULL, 0),
(602, 5, 98, 'delete_normal_notification', NULL, 0),
(603, 5, 99, 'admin_sp_power', NULL, 0),
(604, 5, 100, 'admin_power', NULL, 0),
(605, 5, 101, 'dashboard', 'Dashboard Role Helps Show Dashboard Content...', 0),
(606, 6, 1, 'frontend_control_panel', 'Control All Frontend Panel...', 0),
(607, 6, 2, 'manage_slider', NULL, 0),
(608, 6, 3, 'slider_delete', NULL, 0),
(609, 6, 4, 'manage_truck_lagbe', NULL, 0),
(610, 6, 5, 'truck_lagbe_delete', NULL, 0),
(611, 6, 6, 'manage_choose_us', NULL, 0),
(612, 6, 7, 'choose_us_delete', NULL, 0),
(613, 6, 8, 'manage_truck_category', NULL, 0),
(614, 6, 9, 'truck_category_delete', NULL, 0),
(615, 6, 10, 'manage_corporate_client', NULL, 0),
(616, 6, 11, 'corporate_client_delete', NULL, 0),
(617, 6, 12, 'manage_cover_industries', NULL, 0),
(618, 6, 13, 'cover_industries_delete', NULL, 0),
(619, 6, 14, 'manage_tracking_features', NULL, 0),
(620, 6, 15, 'tracking_features_delete', NULL, 0),
(621, 6, 16, 'all_request_control_panel', 'Control All Request Of Cholo Transport', 0),
(622, 6, 17, 'all_vehicles_request', NULL, 0),
(623, 6, 18, 'vehicles_request_change_status', NULL, 0),
(624, 6, 19, 'user_registration_request', NULL, 0),
(625, 6, 20, 'device_tracking_scheduling', NULL, 0),
(626, 6, 21, 'device_tracking_scheduling_status', NULL, 0),
(627, 6, 22, 'user_registration_request_delete', NULL, 0),
(628, 6, 23, 'cnf_control_panel', 'Control All cnf panel..', 0),
(629, 6, 24, 'add_cnf', NULL, 0),
(630, 6, 25, 'manage_cnf', NULL, 0),
(631, 6, 26, 'edit_cnf', NULL, 0),
(632, 6, 27, 'publish_cnf', NULL, 0),
(633, 6, 28, 'delete_cnf', NULL, 0),
(634, 6, 29, 'importer_control_panel', 'Control All Importer Panel', 0),
(635, 6, 30, 'add_importer', NULL, 0),
(636, 6, 31, 'manage_importer', NULL, 0),
(637, 6, 32, 'edit_importer', NULL, 0),
(638, 6, 33, 'publish_importer', NULL, 0),
(639, 6, 34, 'delete_importer', NULL, 0),
(640, 6, 35, 'exporter_control_panel', 'Control All Exporter Panel', 0),
(641, 6, 36, 'add_exporter', NULL, 0),
(642, 6, 37, 'manage_exporter', NULL, 0),
(643, 6, 38, 'edit_exporter', NULL, 0),
(644, 6, 39, 'publish_exporter', NULL, 0),
(645, 6, 40, 'delete_exporter', NULL, 0),
(646, 6, 41, 'vehicles_control_panel', 'Control Vehicles All Panel', 0),
(647, 6, 42, 'add_vehicles', NULL, 0),
(648, 6, 43, 'manage_vehicles', NULL, 0),
(649, 6, 44, 'vehicles_change_driver', NULL, 0),
(650, 6, 45, 'upload_vehicles_document', NULL, 0),
(651, 6, 46, 'edit_vehicles', NULL, 0),
(652, 6, 47, 'publish_vehicles', NULL, 0),
(653, 6, 48, 'delete_vehicles', NULL, 0),
(654, 6, 49, 'driver_control_panel', NULL, 0),
(655, 6, 50, 'add_driver', NULL, 0),
(656, 6, 51, 'manage_driver', NULL, 0),
(657, 6, 52, 'upload_driver_document', NULL, 0),
(658, 6, 53, 'edit_driver', NULL, 0),
(659, 6, 54, 'delete_driver', NULL, 0),
(660, 6, 55, 'chalan_control_panel', NULL, 0),
(661, 6, 56, 'add_chalan', NULL, 0),
(662, 6, 57, 'manage_chalan', NULL, 0),
(663, 6, 58, 'upload_chalan_document', NULL, 0),
(664, 6, 59, 'chalan_status_change', NULL, 0),
(665, 6, 60, 'chalan_gps_location', NULL, 0),
(666, 6, 61, 'chalan_edit', NULL, 0),
(667, 6, 62, 'chalan_print', NULL, 0),
(668, 6, 63, 'chalan_delete', NULL, 0),
(669, 6, 64, 'account_control_panel', NULL, 1),
(670, 6, 65, 'manage_income_category', NULL, 1),
(671, 6, 66, 'edit_income_category', NULL, 0),
(672, 6, 67, 'publish_income_category', NULL, 1),
(673, 6, 68, 'manage_income_details', NULL, 1),
(674, 6, 69, 'edit_income_details', NULL, 0),
(675, 6, 70, 'delete_income_details', NULL, 0),
(676, 6, 71, 'manage_costing_category', NULL, 1),
(677, 6, 72, 'edit_costing_category', NULL, 0),
(678, 6, 73, 'publish_costing_category', NULL, 1),
(679, 6, 74, 'manage_costing_details', NULL, 1),
(680, 6, 75, 'edit_costing_details', NULL, 0),
(681, 6, 76, 'delete_costing_details', NULL, 0),
(682, 6, 77, 'add_cost_details', NULL, 1),
(683, 6, 78, 'manage_all_report', NULL, 0),
(684, 6, 79, 'today_transaction_report', NULL, 0),
(685, 6, 80, 'daily_transaction_report', NULL, 0),
(686, 6, 81, 'monthly_transaction_report', NULL, 0),
(687, 6, 82, 'due_report', NULL, 0),
(688, 6, 83, 'all_income_report', NULL, 0),
(689, 6, 84, 'income_summary_report', NULL, 0),
(690, 6, 85, 'all_costing_report', NULL, 0),
(691, 6, 86, 'costing_summary_report', NULL, 0),
(692, 6, 87, 'profit_report', NULL, 0),
(693, 6, 88, 'administrator_control_panel', 'Control Manage User, Manage Sms , Manage Notification', 0),
(694, 6, 89, 'sms_control_panel', NULL, 0),
(695, 6, 90, 'manage_user', NULL, 0),
(696, 6, 91, 'publish_user', NULL, 0),
(697, 6, 92, 'assign_user_permission', NULL, 0),
(698, 6, 93, 'assign_user_empty_permission', NULL, 0),
(699, 6, 94, 'notification_control', NULL, 0),
(700, 6, 95, 'manage_flash_notification', NULL, 0),
(701, 6, 96, 'delete_flash_notification', NULL, 0),
(702, 6, 97, 'manage_normal_notification', NULL, 0),
(703, 6, 98, 'delete_normal_notification', NULL, 0),
(704, 6, 99, 'admin_sp_power', NULL, 0),
(705, 6, 100, 'admin_power', NULL, 0),
(706, 6, 101, 'dashboard', 'Dashboard Role Helps Show Dashboard Content...', 0),
(808, 8, 1, 'frontend_control_panel', 'Control All Frontend Panel...', 1),
(809, 8, 2, 'manage_slider', NULL, 1),
(810, 8, 3, 'slider_delete', NULL, 1),
(811, 8, 4, 'manage_truck_lagbe', NULL, 1),
(812, 8, 5, 'truck_lagbe_delete', NULL, 1),
(813, 8, 6, 'manage_choose_us', NULL, 1),
(814, 8, 7, 'choose_us_delete', NULL, 1),
(815, 8, 8, 'manage_truck_category', NULL, 0),
(816, 8, 9, 'truck_category_delete', NULL, 0),
(817, 8, 10, 'manage_corporate_client', NULL, 0),
(818, 8, 11, 'corporate_client_delete', NULL, 0),
(819, 8, 12, 'manage_cover_industries', NULL, 0),
(820, 8, 13, 'cover_industries_delete', NULL, 0),
(821, 8, 14, 'manage_tracking_features', NULL, 0),
(822, 8, 15, 'tracking_features_delete', NULL, 0),
(823, 8, 16, 'all_request_control_panel', 'Control All Request Of Cholo Transport', 1),
(824, 8, 17, 'all_vehicles_request', NULL, 0),
(825, 8, 18, 'vehicles_request_change_status', NULL, 0),
(826, 8, 19, 'user_registration_request', NULL, 1),
(827, 8, 20, 'device_tracking_scheduling', NULL, 0),
(828, 8, 21, 'device_tracking_scheduling_status', NULL, 0),
(829, 8, 22, 'user_registration_request_delete', NULL, 0),
(830, 8, 23, 'cnf_control_panel', 'Control All cnf panel..', 1),
(831, 8, 24, 'add_cnf', NULL, 0),
(832, 8, 25, 'manage_cnf', NULL, 1),
(833, 8, 26, 'edit_cnf', NULL, 0),
(834, 8, 27, 'publish_cnf', NULL, 0),
(835, 8, 28, 'delete_cnf', NULL, 0),
(836, 8, 29, 'importer_control_panel', 'Control All Importer Panel', 1),
(837, 8, 30, 'add_importer', NULL, 1),
(838, 8, 31, 'manage_importer', NULL, 1),
(839, 8, 32, 'edit_importer', NULL, 0),
(840, 8, 33, 'publish_importer', NULL, 1),
(841, 8, 34, 'delete_importer', NULL, 0),
(842, 8, 35, 'exporter_control_panel', 'Control All Exporter Panel', 0),
(843, 8, 36, 'add_exporter', NULL, 0),
(844, 8, 37, 'manage_exporter', NULL, 0),
(845, 8, 38, 'edit_exporter', NULL, 0),
(846, 8, 39, 'publish_exporter', NULL, 0),
(847, 8, 40, 'delete_exporter', NULL, 0),
(848, 8, 41, 'vehicles_control_panel', 'Control Vehicles All Panel', 0),
(849, 8, 42, 'add_vehicles', NULL, 0),
(850, 8, 43, 'manage_vehicles', NULL, 0),
(851, 8, 44, 'vehicles_change_driver', NULL, 0),
(852, 8, 45, 'upload_vehicles_document', NULL, 0),
(853, 8, 46, 'edit_vehicles', NULL, 0),
(854, 8, 47, 'publish_vehicles', NULL, 0),
(855, 8, 48, 'delete_vehicles', NULL, 0),
(856, 8, 49, 'driver_control_panel', NULL, 0),
(857, 8, 50, 'add_driver', NULL, 0),
(858, 8, 51, 'manage_driver', NULL, 0),
(859, 8, 52, 'upload_driver_document', NULL, 0),
(860, 8, 53, 'edit_driver', NULL, 0),
(861, 8, 54, 'delete_driver', NULL, 0),
(862, 8, 55, 'chalan_control_panel', NULL, 0),
(863, 8, 56, 'add_chalan', NULL, 0),
(864, 8, 57, 'manage_chalan', NULL, 0),
(865, 8, 58, 'upload_chalan_document', NULL, 0),
(866, 8, 59, 'chalan_status_change', NULL, 0),
(867, 8, 60, 'chalan_gps_location', NULL, 0),
(868, 8, 61, 'chalan_edit', NULL, 0),
(869, 8, 62, 'chalan_print', NULL, 0),
(870, 8, 63, 'chalan_delete', NULL, 0),
(871, 8, 64, 'account_control_panel', NULL, 1),
(872, 8, 65, 'manage_income_category', NULL, 1),
(873, 8, 66, 'edit_income_category', NULL, 0),
(874, 8, 67, 'publish_income_category', NULL, 1),
(875, 8, 68, 'manage_income_details', NULL, 1),
(876, 8, 69, 'edit_income_details', NULL, 1),
(877, 8, 70, 'delete_income_details', NULL, 0),
(878, 8, 71, 'manage_costing_category', NULL, 1),
(879, 8, 72, 'edit_costing_category', NULL, 0),
(880, 8, 73, 'publish_costing_category', NULL, 1),
(881, 8, 74, 'manage_costing_details', NULL, 1),
(882, 8, 75, 'edit_costing_details', NULL, 0),
(883, 8, 76, 'delete_costing_details', NULL, 0),
(884, 8, 77, 'add_cost_details', NULL, 1),
(885, 8, 78, 'manage_all_report', NULL, 1),
(886, 8, 79, 'today_transaction_report', NULL, 1),
(887, 8, 80, 'daily_transaction_report', NULL, 1),
(888, 8, 81, 'monthly_transaction_report', NULL, 1),
(889, 8, 82, 'due_report', NULL, 1),
(890, 8, 83, 'all_income_report', NULL, 1),
(891, 8, 84, 'income_summary_report', NULL, 1),
(892, 8, 85, 'all_costing_report', NULL, 1),
(893, 8, 86, 'costing_summary_report', NULL, 1),
(894, 8, 87, 'profit_report', NULL, 1),
(895, 8, 88, 'administrator_control_panel', 'Control Manage User, Manage Sms , Manage Notification', 0),
(896, 8, 89, 'sms_control_panel', NULL, 0),
(897, 8, 90, 'manage_user', NULL, 0),
(898, 8, 91, 'publish_user', NULL, 0),
(899, 8, 92, 'assign_user_permission', NULL, 0),
(900, 8, 93, 'assign_user_empty_permission', NULL, 0),
(901, 8, 94, 'notification_control', NULL, 0),
(902, 8, 95, 'manage_flash_notification', NULL, 0),
(903, 8, 96, 'delete_flash_notification', NULL, 0),
(904, 8, 97, 'manage_normal_notification', NULL, 0),
(905, 8, 98, 'delete_normal_notification', NULL, 0),
(906, 8, 99, 'admin_sp_power', NULL, 0),
(907, 8, 100, 'admin_power', NULL, 0),
(908, 8, 101, 'dashboard', 'Dashboard Role Helps Show Dashboard Content...', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

DROP TABLE IF EXISTS `user_log`;
CREATE TABLE IF NOT EXISTS `user_log` (
  `user_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(350) NOT NULL,
  `user_email` varchar(350) NOT NULL,
  `user_login_time` datetime DEFAULT NULL,
  `user_logout_time` datetime DEFAULT NULL,
  `user_ip_address` varchar(350) DEFAULT NULL,
  `user_browser` varchar(350) DEFAULT NULL,
  `user_location` varchar(350) DEFAULT NULL,
  `user_country` varchar(150) DEFAULT NULL,
  `user_city` varchar(150) DEFAULT NULL,
  `user_region` varchar(150) DEFAULT NULL,
  `user_log_added_time` datetime NOT NULL,
  PRIMARY KEY (`user_log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `user_id`, `user_name`, `user_email`, `user_login_time`, `user_logout_time`, `user_ip_address`, `user_browser`, `user_location`, `user_country`, `user_city`, `user_region`, `user_log_added_time`) VALUES
(1, 1, 'noman', 'noman.cse19@gmail.com', '2021-02-23 16:25:15', NULL, '103.161.2.6', 'Google Chrome 88.0.4324.182 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-02-23 16:25:15'),
(2, 1, 'noman', 'noman.cse19@gmail.com', '2021-02-24 09:36:30', NULL, '103.161.2.6', 'Google Chrome 88.0.4324.182 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-02-24 09:36:30'),
(3, 1, 'noman', 'noman.cse19@gmail.com', '2021-02-25 09:58:49', NULL, '103.161.2.98', 'Google Chrome 88.0.4324.190 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-02-25 09:58:49'),
(4, 1, 'noman', 'noman.cse19@gmail.com', '2021-02-25 14:43:28', NULL, '103.196.235.209', 'Google Chrome 88.0.4324.182 on windows', '23.7272,90.4093', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-02-25 14:43:28'),
(5, 1, 'noman', 'noman.cse19@gmail.com', '2021-02-26 22:02:31', NULL, '103.161.2.98', 'Google Chrome 88.0.4324.190 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-02-26 22:02:31'),
(6, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-01 10:14:46', NULL, '37.111.231.146', 'Google Chrome 88.0.4324.190 on windows', '23.8123,90.4257', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-03-01 10:14:46'),
(7, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-01 12:15:26', NULL, '103.123.35.83', 'Mozilla Firefox 87.0 on windows', '23.7272,90.4093', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-03-01 12:15:26'),
(8, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-02 11:09:14', NULL, '103.161.2.98', 'Google Chrome 88.0.4324.190 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-02 11:09:14'),
(9, 1, 'noman', 'noman.cse19@gmail.com', NULL, '2021-03-02 11:34:46', '103.161.2.98', 'Google Chrome 88.0.4324.190 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-02 11:34:46'),
(10, 5, 'Ferdose ahamed', 'ferdouse087@gmail.com', '2021-03-02 11:34:54', NULL, '103.161.2.98', 'Google Chrome 88.0.4324.190 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-02 11:34:54'),
(11, 4, 'ceo@chologroup.com', 'ceo@chologroup.com', '2021-03-02 11:38:15', NULL, '103.161.2.98', 'Mozilla Firefox 85.0 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-02 11:38:15'),
(12, 5, 'Ferdose ahamed', 'ferdouse087@gmail.com', NULL, '2021-03-02 11:41:16', '103.161.2.98', 'Google Chrome 88.0.4324.190 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-02 11:41:16'),
(13, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-02 11:42:14', NULL, '103.161.2.98', 'Google Chrome 88.0.4324.190 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-02 11:42:14'),
(14, 4, 'ceo@chologroup.com', 'ceo@chologroup.com', NULL, '2021-03-02 11:45:33', '103.161.2.98', 'Mozilla Firefox 85.0 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-02 11:45:33'),
(15, 5, 'Ferdose ahamed', 'ferdouse087@gmail.com', '2021-03-02 11:45:48', NULL, '103.161.2.98', 'Mozilla Firefox 85.0 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-02 11:45:48'),
(16, 5, 'Ferdose ahamed', 'ferdouse087@gmail.com', NULL, '2021-03-02 11:48:40', '103.161.2.98', 'Mozilla Firefox 85.0 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-02 11:48:40'),
(17, 5, 'Ferdose ahamed', 'ferdouse087@gmail.com', '2021-03-02 11:48:52', NULL, '103.161.2.98', 'Mozilla Firefox 85.0 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-02 11:48:52'),
(18, 5, 'Ferdose ahamed', 'ferdouse087@gmail.com', NULL, '2021-03-02 11:49:26', '103.161.2.98', 'Mozilla Firefox 85.0 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-02 11:49:26'),
(19, 5, 'Ferdose ahamed', 'ferdouse087@gmail.com', '2021-03-02 11:49:56', NULL, '103.161.2.98', 'Mozilla Firefox 85.0 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-02 11:49:56'),
(20, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-02 22:59:38', NULL, '103.161.2.98', 'Google Chrome 88.0.4324.190 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-02 22:59:38'),
(21, 4, 'ceo@chologroup.com', 'ceo@chologroup.com', '2021-03-03 08:34:38', NULL, '103.161.2.98', 'Google Chrome 88.0.4324.190 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-03 08:34:38'),
(22, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-03 12:21:01', NULL, '103.161.2.98', 'Google Chrome 88.0.4324.190 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-03 12:21:01'),
(23, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-03 20:40:01', NULL, '103.161.2.98', 'Google Chrome 88.0.4324.190 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-03 20:40:01'),
(24, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-04 23:25:06', NULL, '103.161.2.98', 'Google Chrome 89.0.4389.72 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-04 23:25:06'),
(25, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-05 12:29:46', NULL, '37.111.228.125', 'Google Chrome 89.0.4389.72 on linux', '23.7908,90.4109', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-03-05 12:29:46'),
(26, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-06 23:26:51', NULL, '103.161.2.98', 'Google Chrome 89.0.4389.82 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-06 23:26:52'),
(27, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-07 10:42:08', NULL, '103.161.2.98', 'Google Chrome 89.0.4389.82 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-07 10:42:08'),
(28, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-07 13:35:14', NULL, '103.161.2.98', 'Google Chrome 89.0.4389.82 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-07 13:35:14'),
(29, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-07 16:37:02', NULL, '103.161.2.98', 'Google Chrome 89.0.4389.82 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-07 16:37:02'),
(30, 5, 'Ferdose ahamed', 'ferdouse087@gmail.com', '2021-03-07 20:39:05', NULL, '103.126.149.23', 'Google Chrome 88.0.4324.181 on linux', '23.8486,90.25', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-03-07 20:39:05'),
(31, 5, 'Ferdose ahamed', 'ferdouse087@gmail.com', NULL, '2021-03-07 20:39:57', '103.126.149.23', 'Google Chrome 88.0.4324.181 on linux', '23.8486,90.25', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-03-07 20:39:57'),
(32, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-12 17:41:27', NULL, '103.161.2.99', 'Google Chrome 89.0.4389.82 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-12 17:41:27'),
(33, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-15 17:06:15', NULL, '103.161.2.99', 'Google Chrome 89.0.4389.82 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-15 17:06:15'),
(34, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-18 11:42:11', NULL, '103.161.2.99', 'Google Chrome 89.0.4389.90 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-18 11:42:11'),
(35, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-22 17:55:50', NULL, '103.161.2.99', 'Google Chrome 89.0.4389.90 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-22 17:55:50'),
(36, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-23 13:56:53', NULL, '103.161.2.6', 'Google Chrome 89.0.4389.90 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-23 13:56:53'),
(37, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-23 18:36:07', NULL, '103.161.2.6', 'Google Chrome 89.0.4389.90 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-03-23 18:36:07'),
(38, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-27 22:34:33', NULL, '116.58.201.75', 'Google Chrome 89.0.4389.90 on windows', '23.775,90.4159', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-03-27 22:34:33'),
(39, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-29 21:55:37', NULL, '103.219.163.62', 'Google Chrome 89.0.4389.105 on linux', '23.7272,90.4093', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-03-29 21:55:37'),
(40, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-30 09:29:28', NULL, '103.25.248.229', 'Google Chrome 89.0.4389.105 on linux', '24.851,89.3711', 'Bangladesh', 'Bogra', 'Rajshahi Division', '2021-03-30 09:29:28'),
(41, 1, 'noman', 'noman.cse19@gmail.com', '2021-03-31 12:22:57', NULL, '123.49.54.74', 'Google Chrome 89.0.4389.90 on windows', '23.7263,90.4318', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-03-31 12:22:57'),
(42, 1, 'noman', 'noman.cse19@gmail.com', '2021-04-02 21:16:56', NULL, '103.123.35.83', 'Mozilla Firefox 88.0 on windows', '23.7434,90.3496', 'Bangladesh', 'Azimpur', 'Dhaka Division', '2021-04-02 21:16:56'),
(43, 1, 'noman', 'noman.cse19@gmail.com', '2021-04-02 21:28:53', NULL, '103.25.250.251', 'Google Chrome 89.0.4389.105 on linux', '23.7272,90.4093', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-04-02 21:28:53'),
(44, 1, 'noman', 'noman.cse19@gmail.com', '2021-04-05 14:21:42', NULL, '103.25.250.238', 'Google Chrome 89.0.4389.105 on linux', '23.7272,90.4093', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-04-05 14:21:42'),
(45, 1, 'noman', 'noman.cse19@gmail.com', '2021-04-06 23:24:38', NULL, '103.161.2.6', 'Google Chrome 89.0.4389.114 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-04-06 23:24:38'),
(46, 1, 'noman', 'noman.cse19@gmail.com', '2021-04-24 09:08:38', NULL, '103.161.2.6', 'Google Chrome 89.0.4389.128 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-04-24 09:08:38'),
(47, 1, 'noman', 'noman.cse19@gmail.com', '2021-04-25 19:53:52', NULL, '103.161.2.6', 'Google Chrome 90.0.4430.85 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-04-25 19:53:52'),
(48, 1, 'noman', 'noman.cse19@gmail.com', '2021-05-23 23:32:57', NULL, '103.161.2.98', 'Google Chrome 90.0.4430.212 on windows', '23.0391,88.8983', 'Bangladesh', 'Benapol', 'Khulna Division', '2021-05-23 23:32:57'),
(49, 1, 'noman', 'noman.cse19@gmail.com', '2021-06-13 13:43:54', NULL, '203.76.220.38', 'Google Chrome 91.0.4472.77 on windows', '23.7529,90.4267', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-06-13 13:43:54'),
(50, 1, 'noman', 'noman.cse19@gmail.com', '2021-06-14 00:48:46', NULL, '203.76.220.38', 'Google Chrome 91.0.4472.77 on windows', '23.7529,90.4267', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-06-14 00:48:46'),
(51, 1, 'noman', 'noman.cse19@gmail.com', '2021-06-15 05:48:26', NULL, '103.123.35.83', 'Mozilla Firefox 90.0 on windows', '23.7434,90.3496', 'Bangladesh', 'Azimpur', 'Dhaka Division', '2021-06-15 05:48:26'),
(52, 1, 'noman', 'noman.cse19@gmail.com', '2021-06-15 08:30:50', NULL, '203.76.220.38', 'Google Chrome 91.0.4472.77 on windows', '23.7529,90.4267', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-06-15 08:30:50'),
(53, 1, 'noman', 'noman.cse19@gmail.com', '2021-06-15 16:09:16', NULL, '203.76.220.38', 'Google Chrome 91.0.4472.106 on windows', '23.7529,90.4267', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-06-15 16:09:16'),
(54, 1, 'noman', 'noman.cse19@gmail.com', '2021-06-15 21:54:31', NULL, '203.76.220.38', 'Google Chrome 91.0.4472.106 on windows', '23.7529,90.4267', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-06-15 21:54:31'),
(55, 1, 'noman', 'noman.cse19@gmail.com', '2021-06-16 11:27:26', NULL, '203.76.220.38', 'Google Chrome 91.0.4472.106 on windows', '23.7529,90.4267', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-06-16 11:27:26'),
(56, 8, 'Transport Malik Somity', 'btams@gmail.com', '2021-06-16 14:36:52', NULL, '203.76.220.38', 'Mozilla Firefox 89.0 on windows', '23.7529,90.4267', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-06-16 14:36:52'),
(57, 8, 'Transport Malik Somity', 'btams@gmail.com', NULL, '2021-06-16 14:37:56', '203.76.220.38', 'Mozilla Firefox 89.0 on windows', '23.7529,90.4267', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-06-16 14:37:56'),
(58, 8, 'Transport Malik Somity', 'btams@gmail.com', '2021-06-16 14:37:58', NULL, '203.76.220.38', 'Mozilla Firefox 89.0 on windows', '23.7529,90.4267', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-06-16 14:37:58'),
(59, 8, 'Transport Malik Somity', 'btams@gmail.com', NULL, '2021-06-16 14:40:28', '203.76.220.38', 'Mozilla Firefox 89.0 on windows', '23.7529,90.4267', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-06-16 14:40:28'),
(60, 8, 'Transport Malik Somity', 'btams@gmail.com', '2021-06-16 14:40:29', NULL, '203.76.220.38', 'Mozilla Firefox 89.0 on windows', '23.7529,90.4267', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-06-16 14:40:29'),
(61, 8, 'Transport Malik Somity', 'btams@gmail.com', '2021-06-16 19:16:46', NULL, '203.76.220.38', 'Mozilla Firefox 89.0 on windows', '23.7529,90.4267', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-06-16 19:16:46'),
(62, 8, 'Transport Malik Somity', 'btams@gmail.com', NULL, '2021-06-16 19:16:50', '203.76.220.38', 'Mozilla Firefox 89.0 on windows', '23.7529,90.4267', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-06-16 19:16:50'),
(63, 8, 'Transport Malik Somity', 'btams@gmail.com', '2021-06-16 19:38:05', NULL, '203.76.220.38', 'Mozilla Firefox 89.0 on windows', '23.7529,90.4267', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-06-16 19:38:05'),
(64, 8, 'Transport Malik Somity', 'btams@gmail.com', NULL, '2021-06-16 21:09:41', '203.76.220.38', 'Mozilla Firefox 89.0 on windows', '23.7529,90.4267', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-06-16 21:09:41'),
(65, 8, 'Transport Malik Somity', 'btams@gmail.com', '2021-06-16 21:16:05', NULL, '203.76.220.38', 'Mozilla Firefox 89.0 on windows', '23.7529,90.4267', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-06-16 21:16:05'),
(66, 1, 'noman', 'noman.cse19@gmail.com', '2021-06-16 21:35:40', NULL, '203.76.220.38', 'Google Chrome 91.0.4472.106 on windows', '23.7529,90.4267', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-06-16 21:35:40'),
(67, 8, 'Transport Malik Somity', 'btams@gmail.com', NULL, '2021-06-16 22:16:55', '203.76.220.38', 'Mozilla Firefox 89.0 on windows', '23.7529,90.4267', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-06-16 22:16:55'),
(68, 1, 'noman', 'noman.cse19@gmail.com', '2021-06-16 23:03:42', NULL, '37.111.213.52', 'Mozilla Firefox 90.0 on windows', '23.8123,90.4257', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-06-16 23:03:42'),
(69, 1, 'noman', 'noman.cse19@gmail.com', '2021-06-21 18:13:31', NULL, '203.76.220.38', 'Google Chrome 91.0.4472.106 on windows', '23.7272,90.4093', 'Bangladesh', 'Dhaka', 'Dhaka Division', '2021-06-21 18:13:31'),
(70, 1, 'noman', 'noman.cse19@gmail.com', '2021-06-22 06:23:13', NULL, '127.0.0.1', 'Mozilla Firefox 90.0 on windows', NULL, NULL, NULL, NULL, '2021-06-22 06:23:13'),
(71, 1, 'noman', 'noman.cse19@gmail.com', '2021-06-22 16:04:05', NULL, '127.0.0.1', 'Mozilla Firefox 89.0 on windows', NULL, NULL, NULL, NULL, '2021-06-22 16:04:06'),
(72, 1, 'noman', 'noman.cse19@gmail.com', NULL, '2021-06-22 16:23:03', '127.0.0.1', 'Mozilla Firefox 89.0 on windows', NULL, NULL, NULL, NULL, '2021-06-22 16:23:04'),
(73, 1, 'noman', 'noman.cse19@gmail.com', '2021-06-22 16:23:14', NULL, '::1', 'Google Chrome 91.0.4472.114 on windows', NULL, NULL, NULL, NULL, '2021-06-22 16:23:14'),
(74, 1, 'noman', 'noman.cse19@gmail.com', '2021-06-22 16:24:05', NULL, '127.0.0.1', 'Mozilla Firefox 89.0 on windows', NULL, NULL, NULL, NULL, '2021-06-22 16:24:05');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles_device_tracker`
--

DROP TABLE IF EXISTS `vehicles_device_tracker`;
CREATE TABLE IF NOT EXISTS `vehicles_device_tracker` (
  `vehicles_device_tracker_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(400) DEFAULT NULL,
  `customer_mobile_number` varchar(350) DEFAULT NULL,
  `customer_address` text,
  `tracker_device_model` varchar(350) DEFAULT NULL,
  `vehicles_model` varchar(300) DEFAULT NULL,
  `device_install_date_time` datetime DEFAULT NULL,
  `device_install_man_name` varchar(350) DEFAULT NULL,
  `device_install_man_number` varchar(200) DEFAULT NULL,
  `device_install_status` int(11) NOT NULL DEFAULT '0',
  `device_added_date_time` datetime NOT NULL,
  PRIMARY KEY (`vehicles_device_tracker_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicles_device_tracker`
--

INSERT INTO `vehicles_device_tracker` (`vehicles_device_tracker_id`, `customer_name`, `customer_mobile_number`, `customer_address`, `tracker_device_model`, `vehicles_model`, `device_install_date_time`, `device_install_man_name`, `device_install_man_number`, `device_install_status`, `device_added_date_time`) VALUES
(1, 'Hazi Barkat Ali ff', '01521451354', 'dfsfsdf sfsfsfsdfsd vsvf ', 'JHDSFHD55 f', 'dfsfsf', '2020-11-13 15:00:01', 'Mr. Salauddin Miah f', '01521451354', 2, '2020-11-12 13:32:24'),
(3, 'Nimmy', '57757575575', 'GULZARBAG,RAHMATPUR,DHAKA-1310', 'TRACKERV2', 'PALSERV2', '2020-11-18 20:17:52', 'JAHIDUL ISLAM', '757575757', 3, '2020-11-17 20:19:09'),
(4, 'DFSFSFSF', '4555', 'DASDD', 'ASDASDA', 'SDASDSAD', '2020-11-17 20:37:36', 'DASDASDASD', '45244', 3, '2020-11-17 20:38:01'),
(5, 'MD Sagor Hossain', '01951419544', 'Benapoel', 'Model - M Auto', 'Hank Hero', '2021-02-08 00:34:27', 'Ashraful', '01711347754', 0, '2021-02-08 00:40:44'),
(6, 'REAZUL ISLAM', '01725353560', 'Benapole car stand', 'Brand M', 'X corola car', '2021-02-09 11:39:29', 'Amit', '01990010840', 0, '2021-02-09 11:41:52'),
(7, 'sagor hossain', '01711347754', 'saver sador , dhaka', 'M', 'Pelser 150', '2021-03-03 10:00:02', 'Rabby', '01612476165', 1, '2021-03-02 11:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles_images`
--

DROP TABLE IF EXISTS `vehicles_images`;
CREATE TABLE IF NOT EXISTS `vehicles_images` (
  `vehicles_images_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicles_info_id` int(11) NOT NULL,
  `vehicles_owner_id` int(11) NOT NULL,
  `vehicles_paper_name` varchar(350) NOT NULL,
  `vehicles_images_name` varchar(350) NOT NULL,
  `vehicles_images_created_date` datetime NOT NULL,
  `vehicles_images_created_user_id` int(11) NOT NULL,
  `vehicles_images_is_active` int(11) NOT NULL,
  PRIMARY KEY (`vehicles_images_id`),
  KEY `vehicles_owner_id` (`vehicles_owner_id`),
  KEY `vehicles_info_id` (`vehicles_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicles_images`
--

INSERT INTO `vehicles_images` (`vehicles_images_id`, `vehicles_info_id`, `vehicles_owner_id`, `vehicles_paper_name`, `vehicles_images_name`, `vehicles_images_created_date`, `vehicles_images_created_user_id`, `vehicles_images_is_active`) VALUES
(1, 4, 4, 'Paper', 'images/vehicles_images/1d2412c41753581a0935a39684a2dd53.jpg', '2021-01-13 15:42:06', 1, 1),
(2, 5, 5, 'Paper', 'images/vehicles_images/70cdf87fdde43d5c88d851afd9e94e65.jpg', '2021-02-03 01:37:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles_info`
--

DROP TABLE IF EXISTS `vehicles_info`;
CREATE TABLE IF NOT EXISTS `vehicles_info` (
  `vehicles_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicles_owner_id` int(11) NOT NULL,
  `vehicles_no` varchar(300) DEFAULT NULL,
  `vehicles_engine_no` varchar(350) DEFAULT NULL,
  `vehicles_chassis_no` varchar(350) DEFAULT NULL,
  `vehicles_tax_token_no` varchar(300) DEFAULT NULL,
  `vehicles_license_no` varchar(350) DEFAULT NULL,
  `vehicles_gps_mobile_number` varchar(250) DEFAULT NULL,
  `vehicles_gps_tracking_id` varchar(300) DEFAULT NULL,
  `vehicles_fitness_paper_no` varchar(350) DEFAULT NULL,
  `vehicles_brta_paper_no` varchar(350) DEFAULT NULL,
  `vehicles_fitness_paper_end_date` date DEFAULT NULL,
  `vehicles_tax_token_end_date` date DEFAULT NULL,
  `vehicles_brta_paper_end_date` date DEFAULT NULL,
  `vehicles_info_created_date` datetime NOT NULL,
  `vehicles_info_is_active` int(11) NOT NULL,
  `vehicles_is_available` int(11) NOT NULL DEFAULT '1',
  `vehicles_is_driver` int(11) NOT NULL DEFAULT '0',
  `driver_info_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`vehicles_info_id`),
  KEY `vehicles_owner_id` (`vehicles_owner_id`),
  KEY `driver_info_id` (`driver_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicles_info`
--

INSERT INTO `vehicles_info` (`vehicles_info_id`, `vehicles_owner_id`, `vehicles_no`, `vehicles_engine_no`, `vehicles_chassis_no`, `vehicles_tax_token_no`, `vehicles_license_no`, `vehicles_gps_mobile_number`, `vehicles_gps_tracking_id`, `vehicles_fitness_paper_no`, `vehicles_brta_paper_no`, `vehicles_fitness_paper_end_date`, `vehicles_tax_token_end_date`, `vehicles_brta_paper_end_date`, `vehicles_info_created_date`, `vehicles_info_is_active`, `vehicles_is_available`, `vehicles_is_driver`, `driver_info_id`) VALUES
(1, 1, 'DHAKA-METRO-GHA-120-05', '54545454', '4545454', '45454545', '456546464', '01521451354', '358657100659338', '4545', '454545', '2020-11-15', '2021-02-20', '2020-11-21', '2020-09-26 20:17:10', 0, 1, 1, 1),
(2, 2, 'Jessore Metro ga-12-25', '', '', '', '', '01744714545', '358657100635528', '', '', '2021-03-19', '2020-12-27', '2020-12-27', '2020-10-26 12:18:43', 0, 0, 1, 2),
(3, 3, '78978892', '', '', '', '', '01919188282', '628828282829292', '', '', '2021-01-13', '2021-01-13', '2021-01-13', '2021-01-13 11:16:30', 0, 1, 0, NULL),
(4, 4, 'Probox Truck', '11452125', '2245525525563', '232', '2563636365', '01777668162', '358657100635643', '2523', '5425265', '2021-01-28', '2021-01-30', '2021-01-31', '2021-01-13 15:41:41', 0, 0, 1, 3),
(5, 5, 'ডেমো মেট্রো ট -১৮৫৬৫২', '', '', '', '', '01960333437', '359510081969391', '', '', '2021-06-25', '2021-06-24', '2021-04-30', '2021-02-03 01:36:42', 0, 0, 1, 4),
(6, 6, '36352', '', '', '', '', '33', '358657100635643', '', '', '2021-02-11', '2021-02-11', '2021-02-11', '2021-02-11 11:20:29', 0, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles_owner_info`
--

DROP TABLE IF EXISTS `vehicles_owner_info`;
CREATE TABLE IF NOT EXISTS `vehicles_owner_info` (
  `vehicles_owner_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicles_owner_name` varchar(300) NOT NULL,
  `vehicles_owner_primary_mobile_number` varchar(250) NOT NULL,
  `vehicles_owner_password` varchar(300) DEFAULT NULL,
  `vehicles_owner_op_mobile_number` varchar(400) NOT NULL,
  `vehicles_owner_address` text NOT NULL,
  `vehicles_owner_profile_photo` varchar(300) NOT NULL,
  `vehicles_owner_nid_no` varchar(300) NOT NULL,
  `vehicles_owner_nid_front_side_photo` varchar(300) NOT NULL,
  `vehicles_owner_nid_back_side_photo` varchar(300) NOT NULL,
  `vehicles_owner_created_date` datetime NOT NULL,
  `vehicles_owner_created_user_id` int(11) NOT NULL,
  PRIMARY KEY (`vehicles_owner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicles_owner_info`
--

INSERT INTO `vehicles_owner_info` (`vehicles_owner_id`, `vehicles_owner_name`, `vehicles_owner_primary_mobile_number`, `vehicles_owner_password`, `vehicles_owner_op_mobile_number`, `vehicles_owner_address`, `vehicles_owner_profile_photo`, `vehicles_owner_nid_no`, `vehicles_owner_nid_front_side_photo`, `vehicles_owner_nid_back_side_photo`, `vehicles_owner_created_date`, `vehicles_owner_created_user_id`) VALUES
(1, 'Jahidul Islam Noman', '01521451354', NULL, '', '', 'images/vehicles_images/ead5b519e7e9a6042afc6b1c281bb736.jpg', '', '', '', '2020-09-26 20:17:09', 1),
(2, 'Mr Tramp', '01772068908', NULL, '', 'jdfnnsf sdnf snf sfsndf sdf', '', '', '', '', '2020-10-26 12:18:43', 1),
(3, 'Doller', '01919157062', NULL, '', '', '', '', '', '', '2021-01-13 11:16:30', 1),
(4, 'MD syfuzzaman Manik', '01940277027', NULL, '', 'Navaron', '', '', '', '', '2021-01-13 15:41:41', 1),
(5, 'মোহাম্মদ আলী হোসেন', '01711223347', NULL, '', '  বেনাপোল দুর্গাপুর রোড , শার্শা ,যশোর।', '', '', '', '', '2021-02-03 01:36:42', 1),
(6, 'মোহাম্মদ আলী হোসেন', '02', NULL, '', '', '', '', '', '', '2021-02-11 11:20:29', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `driver_images`
--
ALTER TABLE `driver_images`
  ADD CONSTRAINT `driver_images_ibfk_1` FOREIGN KEY (`driver_info_id`) REFERENCES `driver_info` (`driver_info_id`);

--
-- Constraints for table `vehicles_images`
--
ALTER TABLE `vehicles_images`
  ADD CONSTRAINT `vehicles_images_ibfk_1` FOREIGN KEY (`vehicles_owner_id`) REFERENCES `vehicles_owner_info` (`vehicles_owner_id`),
  ADD CONSTRAINT `vehicles_images_ibfk_2` FOREIGN KEY (`vehicles_info_id`) REFERENCES `vehicles_info` (`vehicles_info_id`);

--
-- Constraints for table `vehicles_info`
--
ALTER TABLE `vehicles_info`
  ADD CONSTRAINT `vehicles_info_ibfk_1` FOREIGN KEY (`vehicles_owner_id`) REFERENCES `vehicles_owner_info` (`vehicles_owner_id`),
  ADD CONSTRAINT `vehicles_info_ibfk_2` FOREIGN KEY (`driver_info_id`) REFERENCES `driver_info` (`driver_info_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
