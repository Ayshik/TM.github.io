-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 09:06 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `UserId` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UserId`, `Email`, `Password`) VALUES
('a12', 'a', 'a'),
('Ayshik112', 'Ayshikmee@gmail.com', '@Ayshik1234');

-- --------------------------------------------------------

--
-- Table structure for table `ainbox`
--

CREATE TABLE `ainbox` (
  `Sl` int(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `SenderId` varchar(100) NOT NULL,
  `Message` varchar(300) NOT NULL,
  `Date&Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ainbox`
--

INSERT INTO `ainbox` (`Sl`, `Type`, `SenderId`, `Message`, `Date&Time`) VALUES
(1, 'Student', 'Ayshik111', 'I love this system.', '2020-04-01 19:11:58'),
(2, 'Teacher', 'Sad134', 'Hi kkkkkkk', '2020-04-01 19:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `chatbox`
--

CREATE TABLE `chatbox` (
  `Sender` varchar(100) NOT NULL,
  `Receiver` varchar(100) NOT NULL,
  `Message` varchar(300) NOT NULL,
  `Date&Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatbox`
--

INSERT INTO `chatbox` (`Sender`, `Receiver`, `Message`, `Date&Time`) VALUES
('Ayshik111', 'saad121', 'hi ki koren pora hoise?', '2020-04-01 10:22:23'),
('Ahhhh', 'hhhhhh', 'sdfghjkjhgfddghjk', '2020-04-02 01:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `Sl` int(50) NOT NULL,
  `Nmessage` varchar(300) NOT NULL,
  `Status` varchar(300) NOT NULL,
  `Time&Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`Sl`, `Nmessage`, `Status`, `Time&Date`) VALUES
(1, 'Sinam100 has joined as a Teacher!!', 'unread', '2020-05-11 00:00:02'),
(2, 'Sinam100 has joined as a Student!!', 'unread', '2020-05-11 00:00:06'),
(3, 'Tamim100 has joined as a Student!!', 'read', '2020-05-11 00:00:09');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `UserName` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Institute` varchar(200) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Picture` varchar(200) NOT NULL,
  `Rating` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`UserName`, `Name`, `Institute`, `Type`, `Email`, `Phone`, `Address`, `Password`, `Gender`, `Picture`, `Rating`) VALUES
('', '', '', '', '', '', '', '', '', '', ''),
('a112', 'ayshik', 'Aiub university', 'Student', 'A@gmail.com', '017933240820', 'Dhaka bd', '@Ayshikmee1234', 'Male', '../storage/product_image/21083606_1417844621644360_2485360932342925475_o.jpg', ''),
('Ayshik111', 'Ayshik Khan', 'Aiub university', 'Student', 'Ayshik@gmail.com', '01775503498', 'Dhaka bd,kuril', '@Ayshikmee1234', 'Male', '../storage/product_image/21083606_1417844621644360_2485360932342925475_o.jpg', ''),
('Saad123', 'Kazi Saad', '', '', 'rofiq@gmail.com', '', '', '@Asdfghhf12345', 'male', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tcomments`
--

CREATE TABLE `tcomments` (
  `SId` varchar(50) NOT NULL,
  `SName` varchar(50) NOT NULL,
  `TeacherId` varchar(50) NOT NULL,
  `TeachingMon` varchar(50) NOT NULL,
  `TimeMain` varchar(50) NOT NULL,
  `StudyExp` varchar(50) NOT NULL,
  `TeachingQ` varchar(100) NOT NULL,
  `Comments` varchar(300) NOT NULL,
  `Rating` varchar(10) NOT NULL,
  `D&T` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tcomments`
--

INSERT INTO `tcomments` (`SId`, `SName`, `TeacherId`, `TeachingMon`, `TimeMain`, `StudyExp`, `TeachingQ`, `Comments`, `Rating`, `D&T`) VALUES
('ayshik111', 'ayshik', 'Ayshik1998', 'january', 'good', 'good', 'good', 'best', '10', '2020-04-01 20:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `UserName` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Institute` varchar(200) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Picture` varchar(200) NOT NULL,
  `Rating` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`UserName`, `Name`, `Institute`, `Type`, `Email`, `Phone`, `Address`, `Password`, `Gender`, `Picture`, `Rating`) VALUES
('', '', '', '', '', '', '', '', '', '', ''),
('a112', 'ayshik', 'Nsu', 'Teacher', 'A@gmail.com', '01776264332', 'Narail', 'abc', 'Male', '../storage/product_image/FB.jpg', '****'),
('a1126', 'ayshik', 'Aiub', 'Teacher', 'A@gmail.com', '01793324082', 'Dhaka', 'a', 'Male', '../storage/product_image/aysh.jpg', ''),
('Ankus223', 'Ankus Mouri', 'aiub', 'Teacher', 'rofiq@gmail.com', '01633075341', 'Basundhara', '@Ankus112233', 'male', '../storage/product_image/swap.jpg', ''),
('Ayshik1998', 'Ayshik Khan', 'Aiub', 'Teacher', 'Ayshikmee@gmail.com', '01793324082', 'Dhaka', 'a', 'Male', '../storage/product_image/aysh.jpg', ''),
('Rifa1122', 'Rifa Khan', 'aiub', 'Teacher', 'Ayshik@gmail.com', '01633075341', 'Basundhara', '@Rifa19980', 'female', '../storage/product_image/rifa.jpg', ''),
('Rifa11225', 'Rifa Khan', 'aiub', 'Teacher', 'Ayshik@gmail.com', '01633075341', 'Basundhara', '@Rifa19980', 'female', '../storage/product_image/rifa.jpg', ''),
('Saad112', 'Kazi Saad', 'nai', 'Teacher', 'Saad@gmail.com', '01633075341', 'Basundhara', '@Saad1234', 'male', '../storage/product_image/SA.jpg', ''),
('Saad1123', 'Kazi Saad', 'nai', 'Teacher', 'Saad@gmail.com', '01633075341', 'Basundhara', '@Saad1234', 'male', '../storage/product_image/SA.jpg', ''),
('Saad1129', 'Kazi Saad', 'nai', 'Teacher', 'Saad@gmail.com', '01633075341', 'Basundhara', '@Saad1234', 'male', '../storage/product_image/SA.jpg', ''),
('Sinam100', 'Sinam Ibne', '', '', 'Sinam@gmail.com', '', '', '@Ayshikmee1234', 'male', '../storage/product_image/ava.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tsques`
--

CREATE TABLE `tsques` (
  `Action` varchar(100) NOT NULL DEFAULT 'ADMIN',
  `Question1` varchar(300) NOT NULL,
  `Question2` varchar(300) NOT NULL,
  `Question3` varchar(300) NOT NULL,
  `Question4` varchar(300) NOT NULL,
  `Question5` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tsques`
--

INSERT INTO `tsques` (`Action`, `Question1`, `Question2`, `Question3`, `Question4`, `Question5`) VALUES
('ADMIN', 'ab', 'ac', 'ad', 'ae', 'af');

-- --------------------------------------------------------

--
-- Table structure for table `wsques`
--

CREATE TABLE `wsques` (
  `Action` varchar(100) NOT NULL DEFAULT 'ADMIN',
  `Question1` varchar(300) NOT NULL,
  `Question2` varchar(300) NOT NULL,
  `Question3` varchar(300) NOT NULL,
  `Question4` varchar(300) NOT NULL,
  `Question5` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wsques`
--

INSERT INTO `wsques` (`Action`, `Question1`, `Question2`, `Question3`, `Question4`, `Question5`) VALUES
('ADMIN', '1a', '2b', '3c', '4d', '5q');

-- --------------------------------------------------------

--
-- Table structure for table `wsreport`
--

CREATE TABLE `wsreport` (
  `Type` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Satisfaction` varchar(50) NOT NULL,
  `Difficulties` varchar(50) NOT NULL,
  `Comments` varchar(300) NOT NULL,
  `Month` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wsreport`
--

INSERT INTO `wsreport` (`Type`, `UserName`, `Name`, `Satisfaction`, `Difficulties`, `Comments`, `Month`) VALUES
('Teacher', 'Ayshik000', 'Ayshik', 'joss', 'Nai easy', 'khub e valo.', '2020-04-03 22:20:45'),
('Student', 'saad112', 'Saad', 'joss', 'No', 'Fantastic work gyes welldone.', '2020-04-04 00:57:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `ainbox`
--
ALTER TABLE `ainbox`
  ADD PRIMARY KEY (`SenderId`),
  ADD UNIQUE KEY `Sl` (`Sl`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`Sl`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `tcomments`
--
ALTER TABLE `tcomments`
  ADD PRIMARY KEY (`TeacherId`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `tsques`
--
ALTER TABLE `tsques`
  ADD PRIMARY KEY (`Action`);

--
-- Indexes for table `wsques`
--
ALTER TABLE `wsques`
  ADD PRIMARY KEY (`Action`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ainbox`
--
ALTER TABLE `ainbox`
  MODIFY `Sl` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `Sl` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
