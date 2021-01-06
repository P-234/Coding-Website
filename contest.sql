-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2020 at 09:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `contest`
--

CREATE TABLE `contest` (
  `contestname` varchar(30) NOT NULL,
  `startdate` date NOT NULL DEFAULT current_timestamp(),
  `starttime` timestamp NOT NULL DEFAULT current_timestamp(),
  `enddate` date NOT NULL DEFAULT current_timestamp(),
  `endtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `organizationname` varchar(30) NOT NULL,
  `organizationtype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contest`
--

INSERT INTO `contest` (`contestname`, `startdate`, `starttime`, `enddate`, `endtime`, `organizationname`, `organizationtype`) VALUES
('vcet', '2020-01-26', '2020-01-17 20:29:00', '2020-01-26', '2020-01-24 20:29:00', 'vcetname', 'vcettype'),
('Parth hackathon', '2020-11-19', '2020-11-20 14:09:00', '2020-11-19', '2020-11-23 14:10:00', 'vcet college', 'Vcet'),
('Parth hackathon vcet', '2020-11-20', '2020-11-20 07:13:00', '2020-11-20', '2020-11-27 07:13:00', 'vcet college thane', 'Vcet college'),
('Rishi hackathon1', '2020-11-20', '2020-11-20 07:42:00', '2020-11-20', '2020-11-28 07:42:00', 'vcet college thane', 'Vcet college');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
