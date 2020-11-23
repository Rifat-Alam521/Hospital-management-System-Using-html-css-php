-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 04:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `ID` varchar(10) NOT NULL,
  `NAME` varchar(55) NOT NULL,
  `PASSWORD` varchar(55) NOT NULL,
  `AGE` int(3) NOT NULL,
  `BLOOD` varchar(3) NOT NULL,
  `EXPRIENCE` int(3) NOT NULL,
  `MOBILE` bigint(20) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `GENDER` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`ID`, `NAME`, `PASSWORD`, `AGE`, `BLOOD`, `EXPRIENCE`, `MOBILE`, `ADDRESS`, `GENDER`) VALUES
('18', 'ALAM', '1234', 21, 'A+', 5, 1869968821, 'GULSHAN', 'MALE'),
('18-37639-1', 'ALAM', '1111', 21, 'A+', 5, 1869968821, 'GULSHAN', 'MALE'),
('15-1111-20', 'RAFI RAHMAN', '1234', 40, 'A-', 5, 1768824242, 'bhola', 'FEMALE'),
('201', 'ARIF', '2222', 40, 'A+', 2, 1768821242, 'KHULNA', 'MALE'),
('23-11-2020', 'RIMON HOSSAIN', '55555', 20, 'A+', 2, 1768821243, 'MIRPUR-10', 'MALE');

-- --------------------------------------------------------

--
-- Table structure for table `doctortable`
--

CREATE TABLE `doctortable` (
  `ID` varchar(10) NOT NULL,
  `NAME` varchar(55) NOT NULL,
  `PASSWORD` varchar(55) NOT NULL,
  `AGE` int(3) NOT NULL,
  `BLOOD` varchar(3) NOT NULL,
  `EXPRIENCE` int(3) NOT NULL,
  `MOBILE` bigint(20) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `GENDER` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctortable`
--

INSERT INTO `doctortable` (`ID`, `NAME`, `PASSWORD`, `AGE`, `BLOOD`, `EXPRIENCE`, `MOBILE`, `ADDRESS`, `GENDER`) VALUES
('20', 'Rifat', 'old', 21, 'O+', 2, 1768824242, 'bashundhara', 'MALE'),
('20-1311-21', 'Rifat', '1234', 21, 'O+', 2, 1768824242, 'bashundhara', 'MALE'),
('21-1311-20', 'ALAM', '1234', 20, 'A+', 5, 1869968821, 'DHAKA', 'MALE'),
('20', 'SAIF', '5555', 20, 'O+', 5, 1768821242, 'MIRPUR', 'FEMALE');

-- --------------------------------------------------------

--
-- Table structure for table `patienttable`
--

CREATE TABLE `patienttable` (
  `ID` varchar(10) NOT NULL,
  `NAME` varchar(55) NOT NULL,
  `PASSWORD` varchar(55) NOT NULL,
  `AGE` int(3) NOT NULL,
  `BLOOD` varchar(3) NOT NULL,
  `MOBILE` bigint(20) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `GENDER` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patienttable`
--

INSERT INTO `patienttable` (`ID`, `NAME`, `PASSWORD`, `AGE`, `BLOOD`, `MOBILE`, `ADDRESS`, `GENDER`) VALUES
('20-16-1', 'RIMI', '1212', 21, 'O+', 1768824242, 'notunbazar', '0'),
('20-16-1', 'RIMI', '1212', 21, 'O+', 1768824242, 'notunbazar', '0'),
('20-16-1', 'RIMI', '1212', 21, 'O+', 1768824242, 'notunbazar', '0'),
('20-16-1', 'RIMI', '1212', 21, 'O+', 1768824242, 'notunbazar', '0'),
('20-16-1', 'RIMI', '1212', 21, 'O+', 1768824242, 'notunbazar', 'MALE'),
('20-16-1', 'RIMI', '1212', 21, 'O+', 1768824242, 'notunbazar', 'FEMALE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
