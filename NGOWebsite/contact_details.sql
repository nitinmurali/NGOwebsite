-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2020 at 08:12 AM
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
-- Database: `contact_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `volunteer_id` int(50) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `message` varchar(150) NOT NULL,
  `telephone` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`volunteer_id`, `first_name`, `last_name`, `email`, `address`, `message`, `telephone`) VALUES
(5, 'Nitin', 'Murali', 'nitin@dataone.in', '1234 Main St.', 'Hello', 984567890),
(6, 'Chandana', 'R', 'chandana@yahoo.com', 'Elita Promenade,Bangalore', 'Looking forward', 988678900),
(7, 'Rohit', 'K', 'rohitk@gmail.com', 'Shiraguppi,Belgaum', '', 636268111),
(8, 'Meghana', 'B', 'bmeghana@gmail.com', 'Yelahanka,Bangalore', 'Looking Forward to volunteer', 984543217),
(9, 'Rahul', 'B', 'rahul@yahoo.co.in', 'JP Nagar 8th Phase,Bangalore', 'Great initiative.', 9845478900),
(10, 'Pawan', 'TU', 'pawantu@gmail.com', '234,4th Main,Besant Nagar,Chennai', '', 6789067890),
(11, 'Anjana', 'R', 'anjie2048@yahoo.com', 'Govind Nagar,Madurai', '', 7890067898),
(12, 'suraj', 'sen', 'surajpara@gmail.com', 'Cathedral Road,Kolkata', '', 8217884216),
(13, 'Sandeep', 'T', 'sandeep123@gmail.com', '246,Kothnur Dinne,Kolar', 'Great Work.Would love to volunteer', 6364789101),
(14, 'Nithya', 'M', 'nithya@gmail.com', '1234 Main St.', '', 8867208900);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`volunteer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `volunteer_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
