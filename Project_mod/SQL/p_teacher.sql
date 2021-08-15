-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 07:34 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p_teacher`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Current_Institution` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ID`, `Name`, `Email`, `Username`, `Password`, `Gender`, `Current_Institution`, `Department`, `DOB`, `image`) VALUES
(13, 'ZareenZia', 'zareenzia801@gmail.com', 'Zareen', '123', 'female', 'AIUB', 'CSE', '2021-07-13', 'ProfilePicLogo.png'),
(14, 'Zareen', 'zareenzia801@gmail.com', 'Zia', 'abc123@', 'male', 'BRAC', 'CSE', '2021-07-21', '5252.jpg'),
(17, 'Supriyo', 'Sup@gmail.com', 'Sup', 'Sup123@', 'male', 'BRAC', 'CSE', '2021-07-06', '10 Things All Readers Can Relate To.gif'),
(19, 'Mrinmoy', 'M@gmail.com', 'Mrinmoy', 'abc123@', 'male', 'AIUB', 'Computer Science', '2021-07-06', 'ProfilePicLogo.png'),
(20, 'wasim', 'chyfiyt', 'yfytdtyc', 'ydytdt', 'uyfytf', 'fudytd', 'gyuff', '354354', NULL),
(21, 'Oshin', 'oshin@gmail.com', 'oshin', 'oshin123@', 'female', 'Medical', 'Medical', '2021-08-25', 'Disney Fairies Photo_ avaqishvili.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
