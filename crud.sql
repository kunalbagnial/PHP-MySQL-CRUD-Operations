-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 01:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `joining_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `email`, `age`, `gender`, `designation`, `joining_date`) VALUES
(9, 'Jimmy', 'Powell', 'jp.me@test.com', 29, 'Male', 'PHP Developer', '2022-09-24'),
(10, 'John', 'Doe', 'john.doe@test.com', 31, 'Male', 'UI Designer', '2022-08-06'),
(11, 'Phillip', 'Johnson', 'pj.123@test.com', 34, 'Male', 'Android Developer', '2022-11-04'),
(12, 'Melissa', 'Butler', 'mel.buttler@test.com', 26, 'Female', 'UI Designer', '2022-11-13'),
(13, 'Sara', 'Griffin', 'sara.griffin@test.com', 28, 'Female', 'Android Developer', '2022-08-31'),
(14, 'Kelly', 'Martin', 'k.martin@test.com', 27, 'Female', 'Frontend Developer', '2022-05-29'),
(15, 'Avinash', 'Sharma', 'av.sharma@test.com', 34, 'Male', 'PHP Developer', '2022-11-12'),
(16, 'Nidhi', 'Aggarwal', 'na.me@test.com', 31, 'Female', 'Frontend Developer', '2022-11-04'),
(17, 'Charles', 'Lee', 'charles.lee@test.com', 33, 'Male', 'Android Developer', '2022-09-10'),
(18, 'Martin', 'Wood', 'martin.wood@test.com', 37, 'Others', 'UI Designer', '2021-12-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
