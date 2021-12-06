-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 06:18 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vidafeu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblaccomodation`
--

CREATE TABLE `tblaccomodation` (
  `ACCOMID` int(11) NOT NULL,
  `ACCOMODATION` varchar(30) NOT NULL,
  `ACCOMDESC` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblaccomodation`
--

INSERT INTO `tblaccomodation` (`ACCOMID`, `ACCOMODATION`, `ACCOMDESC`) VALUES
(12, 'Standard Room', 'max 22hrs.'),
(13, 'Deluxe Room', 'max of 12hrs.'),
(15, 'Super Deluxe Room', 'max 22hrs.');

-- --------------------------------------------------------

--
-- Table structure for table `tblauto`
--

CREATE TABLE `tblauto` (
  `autoid` int(11) NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblauto`
--

INSERT INTO `tblauto` (`autoid`, `start`, `end`) VALUES
(1, 11160, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblbilling`
--

CREATE TABLE `tblbilling` (
  `bill_id` int(11) NOT NULL,
  `bill_amount` varchar(50) DEFAULT NULL,
  `bill_misc_charges` varchar(50) DEFAULT NULL,
  `bill_room_charges` varchar(50) DEFAULT NULL,
  `bill_mode_of_payment` varchar(50) DEFAULT NULL,
  `bill_roomnum` varchar(50) DEFAULT NULL,
  `bill_balance` int(11) DEFAULT NULL,
  `Booking_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbilling`
--

INSERT INTO `tblbilling` (`bill_id`, `bill_amount`, `bill_misc_charges`, `bill_room_charges`, `bill_mode_of_payment`, `bill_roomnum`, `bill_balance`, `Booking_id`) VALUES
(1, '1000000', '0', '0', 'Paypal Payment', '18', 1000000, 0),
(2, '1000000', '0', '0', 'Paypal Payment', '18', 1000000, 0),
(3, '1000000', '0', '0', 'Paypal Payment', '18', 1000000, 0),
(4, '1000000', '0', '0', 'Paypal Payment', '18', 1000000, 300),
(5, '1000000000', '0', '0', 'Paypal Payment', '19', 1000000000, 0),
(6, '1000', '0', '0', 'Paypal Payment', '17', 1000, 6),
(7, '1000', '0', '0', 'Paypal Payment', '17', 1000, 56),
(8, '1000', '0', '0', 'Paypal Payment', '17', 1000, 0),
(9, '1000', '0', '0', 'Paypal Payment', '17', 1000, 0),
(10, '1000', '0', '0', 'Paypal Payment', '17', 1000, 0),
(11, '1000', '0', '0', 'Paypal Payment', '17', 1000, 0),
(12, '1000', '0', '0', 'Paypal Payment', '17', 1000, 0),
(13, '1000', '0', '0', 'Paypal Payment', '17', 1000, 5),
(14, '1000', '0', '0', 'Paypal Payment', '17', 1000, 0),
(15, '1000', '0', '0', 'Paypal Payment', '17', 1000, 7),
(16, '1000000', '0', '0', 'Paypal Payment', '18', 1000000, 0),
(17, '1000000', '0', '0', 'Paypal Payment', '18', 1000000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblfirstpartition`
--

CREATE TABLE `tblfirstpartition` (
  `FirstPID` int(11) NOT NULL,
  `FirstPTitle` text NOT NULL,
  `FirstPImage` varchar(99) NOT NULL,
  `FirstPSubTitle` text NOT NULL,
  `FirstPDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfirstpartition`
--

INSERT INTO `tblfirstpartition` (`FirstPID`, `FirstPTitle`, `FirstPImage`, `FirstPSubTitle`, `FirstPDescription`) VALUES
(1, 'Welcome to Vida International Hotel', '5page-img1.png', 'In our Hotel', 'Candon City Ilocos Sur');

-- --------------------------------------------------------

--
-- Table structure for table `tblguest`
--

CREATE TABLE `tblguest` (
  `GUESTID` int(11) NOT NULL,
  `REFNO` int(11) NOT NULL,
  `G_FNAME` varchar(30) NOT NULL,
  `G_LNAME` varchar(30) NOT NULL,
  `G_CITY` varchar(90) NOT NULL,
  `G_ADDRESS` varchar(90) NOT NULL,
  `DBIRTH` date NOT NULL,
  `G_PHONE` varchar(20) NOT NULL,
  `G_NATIONALITY` varchar(30) NOT NULL,
  `G_COMPANY` varchar(90) NOT NULL,
  `G_CADDRESS` varchar(90) NOT NULL,
  `G_TERMS` tinyint(4) NOT NULL,
  `G_EMAIL` varchar(99) NOT NULL,
  `G_UNAME` varchar(255) NOT NULL,
  `G_PASS` varchar(255) NOT NULL,
  `ZIP` int(11) NOT NULL,
  `LOCATION` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblguest`
--

INSERT INTO `tblguest` (`GUESTID`, `REFNO`, `G_FNAME`, `G_LNAME`, `G_CITY`, `G_ADDRESS`, `DBIRTH`, `G_PHONE`, `G_NATIONALITY`, `G_COMPANY`, `G_CADDRESS`, `G_TERMS`, `G_EMAIL`, `G_UNAME`, `G_PASS`, `ZIP`, `LOCATION`) VALUES
(11125, 0, 'RICO JAMES B', 'QUIRANTE', '', 'Candon City Ilocos Sur Philippines, Candon City Ilocos Sur Philippines', '2021-11-02', '0999999999', 'Filipino', 'MGBRILL', 'Candon City Ilocos Sur Philippines, Candon City Ilocos Sur Philippines', 1, 'ricojames.quirante@lorma.edu', 'ricojames123', '22d8f0d38c087ee4940bde07bd1acb776b50d102', 2710, ''),
(11126, 0, 'JOHN PAUL', 'LODIVADING', '', 'Candon City Ilocos Sur Philippines, Candon City Ilocos Sur Philippines', '2021-11-03', '0999999999', 'FILIPINO', 'MGBRILL', 'Candon City Ilocos Sur Philippines, Candon City Ilocos Sur Philippines', 1, 'ricojames.quirante@lorma.edu', '123qwe', '05fe7461c607c33229772d402505601016a7d0ea', 2710, 'guest/photos/author_1.jpg'),
(11128, 0, 'FEU STUDENT', 'VIDA', '', 'Candon City Ilocos Sur Philippines, Candon City Ilocos Sur Philippines', '2021-11-01', '0999999999', 'Filipino', 'MGBRILL', 'Candon City Ilocos Sur Philippines, Candon City Ilocos Sur Philippines', 1, 'feustudents@gmail.com', 'feuvida', '76212ae4da59e93998590802bead511a4d899451', 2710, 'guest/photos/logo_3.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblhousekeeping`
--

CREATE TABLE `tblhousekeeping` (
  `HK_ID` int(11) NOT NULL,
  `HK_DES` varchar(50) DEFAULT NULL,
  `HK_ASSISTANT` varchar(50) DEFAULT NULL,
  `HK_ACTION` varchar(50) DEFAULT NULL,
  `HK_STATUS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhousekeeping`
--

INSERT INTO `tblhousekeeping` (`HK_ID`, `HK_DES`, `HK_ASSISTANT`, `HK_ACTION`, `HK_STATUS`) VALUES
(55, 'ROOM #: 18', 'STAFF', 'CLEAN ROOM', 'CLEAN'),
(56, 'ROOM #: 18', 'STAFF', 'CLEAN ROOM', 'CLEANING'),
(57, 'ROOM #: 18', 'STAFF', 'CLEAN ROOM', 'CHECKED'),
(58, 'ROOM #: 18', 'STAFF', 'CLEAN ROOM', 'TOUCHED'),
(59, 'ROOM #: 18', 'STAFF', 'CLEAN ROOM', 'DIRTY'),
(60, 'ROOM #: 18', 'STAFF', 'CLEAN ROOM', 'OUT OF SERVICE'),
(61, 'ROOM #: 18', 'STAFF', 'CLEAN ROOM', 'OUT OF SERVICE'),
(62, 'ROOM #: 18', 'STAFF', 'APPROVED ROOM', 'CLEAN'),
(63, 'ROOM #: 18', 'STAFF', 'UNDER MAINTENANCE', 'CLEANING'),
(64, 'ROOM #: 18', 'STAFF', 'INSPECTED ROOM', 'CHECKED'),
(65, 'ROOM #: 18', 'STAFF', 'INSPECTED ROOM', 'TOUCHED'),
(66, 'ROOM #: 18', 'STAFF', 'CLEAN ROOM', 'DIRTY'),
(67, 'ROOM #: 18', 'STAFF', 'UNDER MAINTENANCE', 'OUT OF SERVICE'),
(68, 'ROOM #: 18', 'STAFF', 'UNDER MAINTENANCE', 'OUT OF SERVICE'),
(69, 'ROOM #: 19', 'STAFF', 'APPROVED ROOM', 'CLEAN');

-- --------------------------------------------------------

--
-- Table structure for table `tblinventory`
--

CREATE TABLE `tblinventory` (
  `inv_id` int(11) NOT NULL,
  `inv_name` varchar(50) DEFAULT NULL,
  `inv_desc` varchar(50) DEFAULT NULL,
  `inv_guestname` varchar(50) DEFAULT NULL,
  `inv_startdate` varchar(50) DEFAULT NULL,
  `inv_guest_end_date` varchar(50) DEFAULT NULL,
  `inv_rate` varchar(50) DEFAULT NULL,
  `inv_guestpaid` varchar(50) DEFAULT NULL,
  `inv_guest_to_pay` varchar(50) DEFAULT NULL,
  `inv_bal` varchar(50) DEFAULT NULL,
  `inv_guest_room` varchar(50) DEFAULT NULL,
  `User_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinventory`
--

INSERT INTO `tblinventory` (`inv_id`, `inv_name`, `inv_desc`, `inv_guestname`, `inv_startdate`, `inv_guest_end_date`, `inv_rate`, `inv_guestpaid`, `inv_guest_to_pay`, `inv_bal`, `inv_guest_room`, `User_user_id`) VALUES
(14, 'ROOM RENTAL', 'Standard Room for Standard People hahaha', 'RICO JAMES B', '2021-11-16 00:00:00', '2021-11-16 00:00:00', '1000', '0', '1000', '1000', 'WING A', 11125),
(15, 'ROOM RENTAL', 'Standard Room for Standard People hahaha', 'RICO JAMES B', '2021-11-16 00:00:00', '2021-11-16 00:00:00', '1000000', '0', '1000000', '1000000', 'WING A', 11125),
(16, 'ROOM RENTAL', 'Standard Room for Standard People hahaha', 'FEU STUDENT', '2021-11-16 00:00:00', '2021-11-16 00:00:00', '1000000', '0', '1000000', '1000000', 'WING A', 11128);

-- --------------------------------------------------------

--
-- Table structure for table `tblmeal`
--

CREATE TABLE `tblmeal` (
  `MealID` int(11) NOT NULL,
  `MealType` varchar(90) NOT NULL,
  `MealPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmeal`
--

INSERT INTO `tblmeal` (`MealID`, `MealType`, `MealPrice`) VALUES
(4, 'Lunch', 10),
(7, 'HB', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

CREATE TABLE `tblpayment` (
  `SUMMARYID` int(11) NOT NULL,
  `TRANSDATE` datetime NOT NULL,
  `CONFIRMATIONCODE` varchar(30) NOT NULL,
  `PQTY` int(11) NOT NULL,
  `GUESTID` int(11) NOT NULL,
  `SPRICE` double NOT NULL,
  `MSGVIEW` tinyint(1) NOT NULL,
  `STATUS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpayment`
--

INSERT INTO `tblpayment` (`SUMMARYID`, `TRANSDATE`, `CONFIRMATIONCODE`, `PQTY`, `GUESTID`, `SPRICE`, `MSGVIEW`, `STATUS`) VALUES
(1, '2021-11-14 07:14:52', '26jhaeuq', 1, 11122, 1000000, 0, 'Pending'),
(2, '2021-11-14 07:17:08', '8wckdhzq', 1, 11122, 2000, 0, 'Pending'),
(3, '2021-11-14 07:47:05', '2sfqj8ef', 1, 11122, 2000000, 0, 'Pending'),
(7, '2021-11-14 09:25:31', 'x248za4q', 1, 11128, 1000000, 0, 'Checkedout'),
(8, '2021-11-14 09:26:52', 'zwnby8h2', 1, 11128, 1000000, 0, 'Checkedout'),
(12, '2021-11-15 10:47:23', 'd2app2yc', 1, 11125, 1000000000, 1, 'Checkedout'),
(13, '2021-11-15 11:01:41', 'wke0u3sk', 1, 11125, 1000000, 1, 'Checkedin'),
(14, '2021-11-15 11:03:42', 'uvipbx35', 1, 11125, 1000000000, 1, 'Checkedin'),
(15, '2021-11-15 11:58:22', 'jqnnhrvi', 1, 11125, 1000000000, 1, 'Confirmed'),
(16, '2021-11-15 11:59:17', 'vkd4c47g', 1, 11125, 1000000000, 1, 'Confirmed'),
(17, '2021-11-16 12:02:08', 'sq5syyhx', 1, 11125, 1000000000, 1, 'Confirmed'),
(18, '2021-11-16 12:07:05', '3a5jhhey', 1, 11125, 1000000000, 1, 'Confirmed'),
(19, '2021-11-16 12:07:52', '3zuxh708', 1, 11125, 1000000000, 1, 'Confirmed'),
(20, '2021-11-16 12:26:20', 'eav3n34q', 1, 11125, 1000000, 1, 'Confirmed'),
(21, '2021-11-16 12:33:45', 'gg80ixnq', 1, 11125, 1000000, 1, 'Confirmed'),
(22, '2021-11-16 12:35:41', 'w2gby26f', 1, 11125, 1000000, 1, 'Confirmed'),
(23, '2021-11-16 12:36:24', '03e2kpzs', 1, 11125, 1000000, 0, 'Pending'),
(24, '2021-11-16 12:38:12', 'gcpu3seg', 1, 11125, 1000000000, 0, 'Pending'),
(25, '2021-11-16 12:39:37', '6dujnx6v', 1, 11125, 1000, 0, 'Pending'),
(26, '2021-11-16 12:39:56', '56jjihh8', 1, 11125, 1000, 0, 'Pending'),
(27, '2021-11-16 12:41:05', 't7vwy68o', 1, 11125, 1000, 0, 'Pending'),
(28, '2021-11-16 12:43:12', 'aoxqitth', 1, 11125, 1000, 0, 'Pending'),
(29, '2021-11-16 12:43:38', 'fw33hmwc', 1, 11125, 1000, 0, 'Pending'),
(30, '2021-11-16 12:44:37', 'wi4bf8rk', 1, 11125, 1000, 0, 'Pending'),
(31, '2021-11-16 12:45:02', 'z0j2mjvc', 1, 11125, 1000, 0, 'Pending'),
(32, '2021-11-16 12:46:07', '5rz73t5d', 1, 11125, 1000, 0, 'Pending'),
(33, '2021-11-16 12:47:48', 'x3d6kgrj', 1, 11125, 1000, 0, 'Pending'),
(34, '2021-11-16 12:48:09', '7jbsvxjw', 1, 11125, 1000, 0, 'Pending'),
(35, '2021-11-16 12:58:25', 'd2zx85h4', 1, 11125, 1000000, 1, 'Confirmed'),
(36, '2021-11-16 01:15:58', 'a73eunky', 1, 11128, 1000000, 0, 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `tblreservation`
--

CREATE TABLE `tblreservation` (
  `RESERVEID` int(11) NOT NULL,
  `CONFIRMATIONCODE` varchar(50) NOT NULL,
  `TRANSDATE` date NOT NULL,
  `ROOMID` int(11) NOT NULL,
  `ARRIVAL` datetime NOT NULL,
  `DEPARTURE` datetime NOT NULL,
  `RPRICE` double NOT NULL,
  `GUESTID` int(11) NOT NULL,
  `PRORPOSE` varchar(30) NOT NULL,
  `STATUS` varchar(11) NOT NULL,
  `BOOKDATE` datetime NOT NULL,
  `REMARKS` text NOT NULL,
  `USERID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblreservation`
--

INSERT INTO `tblreservation` (`RESERVEID`, `CONFIRMATIONCODE`, `TRANSDATE`, `ROOMID`, `ARRIVAL`, `DEPARTURE`, `RPRICE`, `GUESTID`, `PRORPOSE`, `STATUS`, `BOOKDATE`, `REMARKS`, `USERID`) VALUES
(1, '26jhaeuq', '2021-11-14', 18, '2021-11-14 00:00:00', '2021-11-14 00:00:00', 1000000, 11122, 'Travel', 'Pending', '0000-00-00 00:00:00', '', 0),
(2, '8wckdhzq', '2021-11-14', 17, '2021-11-01 00:00:00', '2021-11-03 00:00:00', 2000, 11122, 'Travel', 'Pending', '0000-00-00 00:00:00', '', 0),
(3, '2sfqj8ef', '2021-11-14', 18, '2021-11-01 00:00:00', '2021-11-03 00:00:00', 2000000, 11122, 'Travel', 'Pending', '0000-00-00 00:00:00', '', 0),
(7, 'x248za4q', '2021-11-14', 18, '2021-11-14 00:00:00', '2021-11-14 00:00:00', 1000000, 11128, 'Travel', 'Checkedout', '0000-00-00 00:00:00', '', 0),
(8, 'zwnby8h2', '2021-11-14', 18, '2021-11-14 00:00:00', '2021-11-14 00:00:00', 1000000, 11128, 'Travel', 'Checkedout', '0000-00-00 00:00:00', '', 0),
(10, '4cgknuak', '2021-11-15', 18, '2021-11-15 00:00:00', '2021-11-15 00:00:00', 1000000, 11125, 'Travel', 'Pending', '0000-00-00 00:00:00', '', 0),
(11, 'v56dx4qk', '2021-11-15', 19, '2021-11-15 00:00:00', '2021-11-15 00:00:00', 1000000000, 11125, 'Travel', 'Pending', '0000-00-00 00:00:00', '', 0),
(14, 'd2app2yc', '2021-11-15', 19, '2021-11-15 00:00:00', '2021-11-15 00:00:00', 1000000000, 11125, 'Travel', 'Checkedout', '0000-00-00 00:00:00', '', 0),
(15, 'wke0u3sk', '2021-11-15', 18, '2021-11-15 00:00:00', '2021-11-15 00:00:00', 1000000, 11125, 'Travel', 'Checkedin', '0000-00-00 00:00:00', '', 0),
(16, 'uvipbx35', '2021-11-15', 19, '2021-11-15 00:00:00', '2021-11-15 00:00:00', 1000000000, 11125, 'Travel', 'Checkedin', '0000-00-00 00:00:00', '', 0),
(17, 'jqnnhrvi', '2021-11-15', 19, '2021-11-15 00:00:00', '2021-11-15 00:00:00', 1000000000, 11125, 'Travel', 'Confirmed', '0000-00-00 00:00:00', '', 0),
(18, 'vkd4c47g', '2021-11-15', 19, '2021-11-15 00:00:00', '2021-11-15 00:00:00', 1000000000, 11125, 'Travel', 'Confirmed', '0000-00-00 00:00:00', '', 0),
(19, 'sq5syyhx', '2021-11-16', 19, '2021-11-16 00:00:00', '2021-11-16 00:00:00', 1000000000, 11125, 'Travel', 'Confirmed', '0000-00-00 00:00:00', '', 0),
(20, '3a5jhhey', '2021-11-16', 19, '2021-11-16 00:00:00', '2021-11-16 00:00:00', 1000000000, 11125, 'Travel', 'Confirmed', '0000-00-00 00:00:00', '', 0),
(21, '3zuxh708', '2021-11-16', 19, '2021-11-16 00:00:00', '2021-11-16 00:00:00', 1000000000, 11125, 'Travel', 'Confirmed', '0000-00-00 00:00:00', '', 0),
(22, 'eav3n34q', '2021-11-16', 18, '2021-11-16 00:00:00', '2021-11-16 00:00:00', 1000000, 11125, 'Travel', 'Confirmed', '0000-00-00 00:00:00', '', 0),
(23, 'gg80ixnq', '2021-11-16', 18, '2021-11-16 00:00:00', '2021-11-16 00:00:00', 1000000, 11125, 'Travel', 'Confirmed', '0000-00-00 00:00:00', '', 0),
(24, 'w2gby26f', '2021-11-16', 18, '2021-11-16 00:00:00', '2021-11-16 00:00:00', 1000000, 11125, 'Travel', 'Confirmed', '0000-00-00 00:00:00', '', 0),
(25, '03e2kpzs', '2021-11-16', 18, '2021-11-16 00:00:00', '2021-11-16 00:00:00', 1000000, 11125, 'Travel', 'Pending', '0000-00-00 00:00:00', '', 0),
(26, 'gcpu3seg', '2021-11-16', 19, '2021-11-16 00:00:00', '2021-11-16 00:00:00', 1000000000, 11125, 'Travel', 'Pending', '0000-00-00 00:00:00', '', 0),
(27, '6dujnx6v', '2021-11-16', 17, '2021-11-16 00:00:00', '2021-11-16 00:00:00', 1000, 11125, 'Travel', 'Pending', '0000-00-00 00:00:00', '', 0),
(28, '56jjihh8', '2021-11-16', 17, '2021-11-16 00:00:00', '2021-11-16 00:00:00', 1000, 11125, 'Travel', 'Pending', '0000-00-00 00:00:00', '', 0),
(29, 't7vwy68o', '2021-11-16', 17, '2021-11-16 00:00:00', '2021-11-16 00:00:00', 1000, 11125, 'Travel', 'Pending', '0000-00-00 00:00:00', '', 0),
(30, 'aoxqitth', '2021-11-16', 17, '2021-11-16 00:00:00', '2021-11-16 00:00:00', 1000, 11125, 'Travel', 'Pending', '0000-00-00 00:00:00', '', 0),
(31, 'fw33hmwc', '2021-11-16', 17, '2021-11-16 00:00:00', '2021-11-16 00:00:00', 1000, 11125, 'Travel', 'Pending', '0000-00-00 00:00:00', '', 0),
(32, 'wi4bf8rk', '2021-11-16', 17, '2021-11-16 00:00:00', '2021-11-16 00:00:00', 1000, 11125, 'Travel', 'Pending', '0000-00-00 00:00:00', '', 0),
(33, 'z0j2mjvc', '2021-11-16', 17, '2021-11-16 00:00:00', '2021-11-16 00:00:00', 1000, 11125, 'Travel', 'Pending', '0000-00-00 00:00:00', '', 0),
(34, '5rz73t5d', '2021-11-16', 17, '2021-11-16 00:00:00', '2021-11-16 00:00:00', 1000, 11125, 'Travel', 'Pending', '0000-00-00 00:00:00', '', 0),
(35, 'x3d6kgrj', '2021-11-16', 17, '2021-11-16 00:00:00', '2021-11-16 00:00:00', 1000, 11125, 'Travel', 'Pending', '0000-00-00 00:00:00', '', 0),
(36, '7jbsvxjw', '2021-11-16', 17, '2021-11-16 00:00:00', '2021-11-16 00:00:00', 1000, 11125, 'Travel', 'Pending', '0000-00-00 00:00:00', '', 0),
(37, 'd2zx85h4', '2021-11-16', 18, '2021-11-16 00:00:00', '2021-11-16 00:00:00', 1000000, 11125, 'Travel', 'Confirmed', '0000-00-00 00:00:00', '', 0),
(38, 'a73eunky', '2021-11-16', 18, '2021-11-16 00:00:00', '2021-11-16 00:00:00', 1000000, 11128, 'Travel', 'Confirmed', '0000-00-00 00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblroom`
--

CREATE TABLE `tblroom` (
  `ROOMID` int(11) NOT NULL,
  `ROOMNUM` int(11) NOT NULL,
  `ACCOMID` int(11) NOT NULL,
  `ROOM` varchar(30) NOT NULL,
  `ROOMDESC` varchar(255) NOT NULL,
  `NUMPERSON` int(11) NOT NULL,
  `PRICE` double NOT NULL,
  `ROOMIMAGE` varchar(255) NOT NULL,
  `OROOMNUM` int(11) NOT NULL,
  `RoomTypeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblroom`
--

INSERT INTO `tblroom` (`ROOMID`, `ROOMNUM`, `ACCOMID`, `ROOM`, `ROOMDESC`, `NUMPERSON`, `PRICE`, `ROOMIMAGE`, `OROOMNUM`, `RoomTypeID`) VALUES
(17, 1, 12, 'WING A', 'Standard Room for Standard People hahaha', 1, 1000, 'rooms/202111141859_offer_3.jpg', 1, 0),
(18, -21, 13, 'WING B', 'Deluxe Room for luxurious People hahaha', 1, 1000000, 'rooms/202111141900_offer_4.jpg', 1, 0),
(19, -24, 15, 'WING C', 'Super Deluxe for super luxurious people hahaha', 1, 1000000000, 'rooms/202111141900_room_1.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblroomtype`
--

CREATE TABLE `tblroomtype` (
  `RoomTypeID` int(11) NOT NULL,
  `RoomType` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblslideshow`
--

CREATE TABLE `tblslideshow` (
  `SlideID` int(11) NOT NULL,
  `SlideImage` text NOT NULL,
  `SlideCaption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblslideshow`
--

INSERT INTO `tblslideshow` (`SlideID`, `SlideImage`, `SlideCaption`) VALUES
(15, 'images.jpg', ''),
(16, 'slide-image-3.jpg', ''),
(17, 'header-bg1.jpg', ''),
(18, 'slide-image-3.jpg', ''),
(19, 'Desert.jpg', ''),
(20, 'Koala.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbltitle`
--

CREATE TABLE `tbltitle` (
  `TItleID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Subtitle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltitle`
--

INSERT INTO `tbltitle` (`TItleID`, `Title`, `Subtitle`) VALUES
(1, 'VIDA INTERNATIONAL HOTEL AND RESORT', '24hrs.');

-- --------------------------------------------------------

--
-- Table structure for table `tbluseraccount`
--

CREATE TABLE `tbluseraccount` (
  `USERID` int(11) NOT NULL,
  `UNAME` varchar(30) NOT NULL,
  `USER_NAME` varchar(30) NOT NULL,
  `UPASS` varchar(90) NOT NULL,
  `ROLE` varchar(30) NOT NULL,
  `PHONE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluseraccount`
--

INSERT INTO `tbluseraccount` (`USERID`, `UNAME`, `USER_NAME`, `UPASS`, `ROLE`, `PHONE`) VALUES
(1, 'RJQ SOFTWARE DEV', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 999999999);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting_contact`
--

CREATE TABLE `tbl_setting_contact` (
  `SetCon_ID` int(11) NOT NULL,
  `SetConLocation` varchar(99) NOT NULL,
  `SetConEmail` varchar(99) NOT NULL,
  `SetConContactNo` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_setting_contact`
--

INSERT INTO `tbl_setting_contact` (`SetCon_ID`, `SetConLocation`, `SetConEmail`, `SetConContactNo`) VALUES
(1, 'Candon CIty Ilocos Sur\r\n', 'secret@gmail.com', '(000)000-000-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblaccomodation`
--
ALTER TABLE `tblaccomodation`
  ADD PRIMARY KEY (`ACCOMID`);

--
-- Indexes for table `tblauto`
--
ALTER TABLE `tblauto`
  ADD PRIMARY KEY (`autoid`);

--
-- Indexes for table `tblbilling`
--
ALTER TABLE `tblbilling`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `tblfirstpartition`
--
ALTER TABLE `tblfirstpartition`
  ADD PRIMARY KEY (`FirstPID`);

--
-- Indexes for table `tblguest`
--
ALTER TABLE `tblguest`
  ADD PRIMARY KEY (`GUESTID`);

--
-- Indexes for table `tblhousekeeping`
--
ALTER TABLE `tblhousekeeping`
  ADD PRIMARY KEY (`HK_ID`);

--
-- Indexes for table `tblinventory`
--
ALTER TABLE `tblinventory`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `tblmeal`
--
ALTER TABLE `tblmeal`
  ADD PRIMARY KEY (`MealID`);

--
-- Indexes for table `tblpayment`
--
ALTER TABLE `tblpayment`
  ADD PRIMARY KEY (`SUMMARYID`),
  ADD UNIQUE KEY `CONFIRMATIONCODE` (`CONFIRMATIONCODE`),
  ADD KEY `GUESTID` (`GUESTID`);

--
-- Indexes for table `tblreservation`
--
ALTER TABLE `tblreservation`
  ADD PRIMARY KEY (`RESERVEID`),
  ADD KEY `ROOMID` (`ROOMID`),
  ADD KEY `GUESTID` (`GUESTID`),
  ADD KEY `CONFIRMATIONCODE` (`CONFIRMATIONCODE`);

--
-- Indexes for table `tblroom`
--
ALTER TABLE `tblroom`
  ADD PRIMARY KEY (`ROOMID`),
  ADD KEY `ACCOMID` (`ACCOMID`);

--
-- Indexes for table `tblroomtype`
--
ALTER TABLE `tblroomtype`
  ADD PRIMARY KEY (`RoomTypeID`);

--
-- Indexes for table `tblslideshow`
--
ALTER TABLE `tblslideshow`
  ADD PRIMARY KEY (`SlideID`);

--
-- Indexes for table `tbltitle`
--
ALTER TABLE `tbltitle`
  ADD PRIMARY KEY (`TItleID`);

--
-- Indexes for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  ADD PRIMARY KEY (`USERID`);

--
-- Indexes for table `tbl_setting_contact`
--
ALTER TABLE `tbl_setting_contact`
  ADD PRIMARY KEY (`SetCon_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblaccomodation`
--
ALTER TABLE `tblaccomodation`
  MODIFY `ACCOMID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblauto`
--
ALTER TABLE `tblauto`
  MODIFY `autoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbilling`
--
ALTER TABLE `tblbilling`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tblfirstpartition`
--
ALTER TABLE `tblfirstpartition`
  MODIFY `FirstPID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblguest`
--
ALTER TABLE `tblguest`
  MODIFY `GUESTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11129;

--
-- AUTO_INCREMENT for table `tblhousekeeping`
--
ALTER TABLE `tblhousekeeping`
  MODIFY `HK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tblinventory`
--
ALTER TABLE `tblinventory`
  MODIFY `inv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblmeal`
--
ALTER TABLE `tblmeal`
  MODIFY `MealID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblpayment`
--
ALTER TABLE `tblpayment`
  MODIFY `SUMMARYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tblreservation`
--
ALTER TABLE `tblreservation`
  MODIFY `RESERVEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tblroom`
--
ALTER TABLE `tblroom`
  MODIFY `ROOMID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblroomtype`
--
ALTER TABLE `tblroomtype`
  MODIFY `RoomTypeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblslideshow`
--
ALTER TABLE `tblslideshow`
  MODIFY `SlideID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbltitle`
--
ALTER TABLE `tbltitle`
  MODIFY `TItleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  MODIFY `USERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_setting_contact`
--
ALTER TABLE `tbl_setting_contact`
  MODIFY `SetCon_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
