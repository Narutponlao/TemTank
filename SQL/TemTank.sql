-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: 17 พ.ค. 2020 เมื่อ 02:46 PM
-- เวอร์ชันของเซิร์ฟเวอร์: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TemTank`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `BuySell`
--

CREATE TABLE `BuySell` (
  `Cssn` varchar(11) NOT NULL,
  `Pssn` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `Contactperson`
--

CREATE TABLE `Contactperson` (
  `Essn` varchar(11) NOT NULL,
  `CTName` varchar(50) NOT NULL,
  `Relation` varchar(20) NOT NULL,
  `CTPhone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `Customer`
--

CREATE TABLE `Customer` (
  `Cssn` varchar(7) NOT NULL,
  `Cname` varchar(50) NOT NULL,
  `CLocation` varchar(100) NOT NULL,
  `CPhone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `Department`
--

CREATE TABLE `Department` (
  `Essn` varchar(11) NOT NULL,
  `Dssn` varchar(11) NOT NULL,
  `Dname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `Employee`
--

CREATE TABLE `Employee` (
  `ID` varchar(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Salary` int(11) NOT NULL,
  `StartWork` varchar(11) NOT NULL,
  `Getoffwork` varchar(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Dessn` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `Login`
--

CREATE TABLE `Login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `Manufacture`
--

CREATE TABLE `Manufacture` (
  `Deessn` varchar(11) NOT NULL,
  `Pessn` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `Material`
--

CREATE TABLE `Material` (
  `Mssn` varchar(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Mname` varchar(50) NOT NULL,
  `Mprice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `Production`
--

CREATE TABLE `Production` (
  `Pssn` varchar(11) NOT NULL,
  `Mssn` varchar(11) NOT NULL,
  `Pname` varchar(50) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Pprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `Use`
--

CREATE TABLE `Use` (
  `Mssn` varchar(11) NOT NULL,
  `Pssn` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BuySell`
--
ALTER TABLE `BuySell`
  ADD PRIMARY KEY (`Cssn`,`Pssn`);

--
-- Indexes for table `Contactperson`
--
ALTER TABLE `Contactperson`
  ADD PRIMARY KEY (`Essn`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`Cssn`);

--
-- Indexes for table `Department`
--
ALTER TABLE `Department`
  ADD PRIMARY KEY (`Essn`,`Dssn`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`ID`,`Dessn`);

--
-- Indexes for table `Login`
--
ALTER TABLE `Login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `Manufacture`
--
ALTER TABLE `Manufacture`
  ADD PRIMARY KEY (`Deessn`,`Pessn`);

--
-- Indexes for table `Material`
--
ALTER TABLE `Material`
  ADD PRIMARY KEY (`Mssn`);

--
-- Indexes for table `Production`
--
ALTER TABLE `Production`
  ADD PRIMARY KEY (`Pssn`,`Mssn`);

--
-- Indexes for table `Use`
--
ALTER TABLE `Use`
  ADD PRIMARY KEY (`Mssn`,`Pssn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Login`
--
ALTER TABLE `Login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
