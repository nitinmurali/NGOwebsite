-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2020 at 08:33 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donor_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `donor_payid` int(50) NOT NULL,
  `amount_paid` bigint(20) NOT NULL,
  `donor_firstname` varchar(50) NOT NULL,
  `donor_lastname` varchar(50) NOT NULL,
  `donor_Address` varchar(150) NOT NULL,
  `donor_Address2` varchar(100) NOT NULL,
  `donor_city` varchar(50) NOT NULL,
  `donor_state` varchar(100) NOT NULL,
  `donor_zipcode` text NOT NULL,
  `donor_date` date NOT NULL,
  `donor_paymentmethod` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`donor_payid`, `amount_paid`, `donor_firstname`, `donor_lastname`, `donor_Address`, `donor_Address2`, `donor_city`, `donor_state`, `donor_zipcode`, `donor_date`, `donor_paymentmethod`) VALUES
(5, 5000, 'Nitin', 'M', '1234 Main st', '', 'Bangalore', 'Karnataka', '560076', '2020-07-25', 'Credit Card'),
(6, 1000, 'Pawan', 'R', '247,4th Main,Chandni Chowk', '', 'Delhi', 'Delhi', '110800', '2020-07-25', 'Cash'),
(7, 2000, 'Nithya', 'M', '1234 Main st', '', 'Chennai', 'Tamil Nadu', '210900', '2020-07-25', 'Cheque'),
(8, 3000, 'B', 'Meghana', 'NMIT,Yelahanka', '', 'Bangalore', 'Karnataka', '560018', '2020-07-27', 'Cheque'),
(9, 10000, 'Salmanul', 'F', '789,5th Main,Ervikulam,Kochi', 'GR Lavender', 'Kochi', 'Kerala', '360018', '2020-07-27', 'Credit Card'),
(10, 5000, 'Hari', 'Krishna', '247,GandhiPuram,Coimbatore', '', 'Coimbatore', 'Tamil Nadu', '800679', '2020-07-27', 'Cash'),
(11, 500, 'Akshaya', 'R', '126,8th Main,Ukkadam,Guntur', 'Brigade Springs', 'Guntur', 'Andhra Pradesh', '667080', '2020-07-26', 'Credit Card'),
(12, 3000, 'Sakshi', 'D', '345,MG Road,Ranchi', '', 'Ranchi', 'Jharkhand', '568098', '2020-07-27', 'Credit Card');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `donor_id` int(50) NOT NULL,
  `donor_name` varchar(50) NOT NULL,
  `donor_email` varchar(50) NOT NULL,
  `donor_phoneno` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`donor_id`, `donor_name`, `donor_email`, `donor_phoneno`) VALUES
(5, 'Nitin', 'nitin@email.com', 88888888),
(6, 'Pawan', 'pawan@gmail.com', 821789988000),
(7, 'Nithya', 'nithya07@gmail.com', 89990099),
(8, 'Meghana', 'meghana@gmail.com', 789021890),
(9, 'Salmanul F', 'salmunul324@gmail.com', 5678956787),
(10, 'Hari', 'hariyep@gmail.com', 6789009876),
(11, 'Akshaya', 'akshu423@gmail.com', 8867903176),
(12, 'Sakshi', 'sakshi777@gmail.com', 6670989078);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`donor_payid`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`donor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `donor_payid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `donor_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
