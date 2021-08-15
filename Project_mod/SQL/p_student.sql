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
-- Database: `p_student`
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
  `TGender` varchar(255) NOT NULL,
  `Current_Institution` varchar(255) NOT NULL,
  `Class` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Area` varchar(255) NOT NULL,
  `Salary` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ID`, `Name`, `Email`, `Username`, `Password`, `Gender`, `TGender`, `Current_Institution`, `Class`, `Phone`, `Area`, `Salary`, `DOB`) VALUES
(1, 'Zareen Zia', 'zareenzia801@gmail.com', 'Zia', 'sfDFa3525245@@', 'female', 'female', 'KG', 'Class 4', '054866497', 'Bashundhara R/A', '2000', '2021-07-21'),
(2, 'Student', 'student@aiub.edu', 'Student', 'Student123@', 'female', 'female', 'KG', 'Class 4', '01664849', 'Bashundhara R/A', '44500', '2021-07-21'),
(3, 'Wasim', 'wasimdurjoy@gmail.com', 'Wasim', 'Wasim123@', 'male', 'male', 'KG', 'Class 4', '01868649', 'Bashundhara R/A', '44500', '2021-07-21'),
(4, 'Tithi Sarkar', 'sarkar@gmail.com', 'Tithi', 'Tithy123@', 'female', 'female', 'Police Kg School', 'Class 5', '35537572474', 'Banasree', '23', '2021-07-21'),
(5, 'Test 1', 'test1gmail.com', 'test', 'test123', 'Female', 'Female', 'Ami porashuna kori na', 'Nai', '846847', 'Aftabnagar', 'Dibo na', 'Bolbo na'),
(6, 'Test 1', 'test1gmail.com', 'test1', 'test123', 'Female', 'Female', 'Ami porashuna kori na', 'Nai', '957958058', 'Bashundhara ', 'Dibo na', 'Bolbo na'),
(7, 'Test 2', 'test2gmail.com', 'test2', 'test123', 'Female', 'Female', 'Ami porashuna kori na', 'Nai', '8080809-', 'Aftabnagar', 'Dibo na', 'Bolbo na'),
(8, 'Test 3', 'test3gmail.com', 'test3', 'test123', 'Female', 'Female', 'Ami porashuna kori na', 'Nai', '806754643', 'Bashundhara ', 'Dibo na', 'Bolbo na'),
(9, 'Test 4', 'test4gmail.com', 'test4', 'test123', 'Female', 'Female', 'Ami porashuna kori na', 'Nai', '5565754', 'Bangladesh', 'Dibo na', 'Bolbo na'),
(11, 'Test 6', 'test6gmail.com', 'test6', 'test123', 'Female', 'Female', 'Ami porashuna kori na', 'Nai', '766467668', 'Uttara', 'Dibo na', 'Bolbo na'),
(16, 'Test 11', 'test11gmail.com', 'test11', 'test123', 'Female', 'Female', 'Ami porashuna kori na', 'Nai', '5755879564', 'Bangladesh', 'Dibo na', 'Bolbo na'),
(24, 'Student', 'student@aiub.edu', 'Student', 'student123@', 'male', 'male', 'KG', 'Class 9', '01791396479', 'Banasree', '2000', '2021-08-25'),
(25, 'Nabil', 'n@gmail.com', 'nabil', 'student123@', 'male', 'male', 'gfs', 'Class 10', '325452462525', 'Banasree', '4246257', '2021-08-25');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
