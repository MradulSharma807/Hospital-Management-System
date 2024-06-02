-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 16, 2021 at 08:07 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `adddoctor`
--

CREATE TABLE `adddoctor` (
  `fname` varchar(300) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `Contact` varchar(12) NOT NULL,
  `Age` varchar(5) NOT NULL,
  `address` varchar(300) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `caste` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `Qualification` varchar(300) NOT NULL,
  `Experience` int(11) NOT NULL,
  `Date Of Birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adddoctor`
--

INSERT INTO `adddoctor` (`fname`, `lname`, `Contact`, `Age`, `address`, `Email`, `caste`, `gender`, `Qualification`, `Experience`, `Date Of Birth`) VALUES
('ROHAN', 'SHARMA', '8796326111', '45', '162-B VIVEK VIHAR,JAIPUR', 'ROHAN@GMAIL.COM', 'GENERAL', 'MALE', 'MBBS,BDS', 19, '1976-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `addpatient`
--

CREATE TABLE `addpatient` (
  `fname` varchar(300) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `Contact` varchar(12) NOT NULL,
  `Age` varchar(5) NOT NULL,
  `address` varchar(300) NOT NULL,
  `caste` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `Admitdate` date NOT NULL,
  `Date Of Birth` date NOT NULL,
  `Disease` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addpatient`
--

INSERT INTO `addpatient` (`fname`, `lname`, `Contact`, `Age`, `address`, `caste`, `gender`, `Admitdate`, `Date Of Birth`, `Disease`) VALUES
('VISHAL', 'BARIYA', '7564651423', '46', 'GANDHI NAGAR,JAIPUR', 'SC', 'MALE', '2021-07-15', '1975-05-13', 'Neurological');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogintable`
--

CREATE TABLE `adminlogintable` (
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `confirmpassword` varchar(40) NOT NULL,
  `emailid` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogintable`
--

INSERT INTO `adminlogintable` (`username`, `password`, `confirmpassword`, `emailid`) VALUES
('AMITRAJ', '123', '123', 'AMITRAJ@GMAIL.COM'),
('MRADUL', '123', '123', 'mradul.sharma807@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `patientlogintable`
--

CREATE TABLE `patientlogintable` (
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `confirmpassword` varchar(40) NOT NULL,
  `emailid` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientlogintable`
--

INSERT INTO `patientlogintable` (`username`, `password`, `confirmpassword`, `emailid`) VALUES
('AARSH', '456', '456', 'AARSH@CUMAL.IN'),
('RAHUL', '234', '234', 'RAHUL102@GMAIL.COM'),
('ramrajan', '123', '123', 'ram@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adddoctor`
--
ALTER TABLE `adddoctor`
  ADD PRIMARY KEY (`fname`);

--
-- Indexes for table `addpatient`
--
ALTER TABLE `addpatient`
  ADD PRIMARY KEY (`fname`);

--
-- Indexes for table `adminlogintable`
--
ALTER TABLE `adminlogintable`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `patientlogintable`
--
ALTER TABLE `patientlogintable`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
