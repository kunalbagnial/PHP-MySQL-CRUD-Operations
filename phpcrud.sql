-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 08:04 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(6) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(70) NOT NULL,
  `course` varchar(30) NOT NULL,
  `batch` int(4) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `lastname`, `email`, `course`, `batch`, `city`, `state`) VALUES
(1, 'ashish', 'raturi', 'ashishraturi@gmail.com', 'bca', 2013, 'dehradun', 'uttarakhand'),
(2, 'sumit', 'arora', 'sumitarora@gmail.com', 'mca', 2013, 'ludhiana', 'punjab'),
(3, 'raghav', 'gupta', 'raghavgupta@gmail.com', 'bca', 2014, 'jalandhar', 'punjab'),
(4, 'vinita', 'kansal', 'vinitakansal@gmail.com', 'mca', 2015, 'gurugram', 'haryana'),
(5, 'neha', 'bansal', 'nehabansal@gmail.com', 'pgdca', 2015, 'rohtak', 'haryana'),
(16, 'jaspreet', 'kaur', 'kaur.jaspreet@gmail.com', 'pgdca', 2016, 'mohali', 'punjab'),
(18, 'tanya', 'bansal', 'tanyabansal@gmail.com', 'pgdca', 2017, 'ludhiana', 'punjab'),
(19, 'jagdeep', 'arora', 'jagdeeparora@gmail.com', 'mca', 2018, 'panchkula', 'haryana'),
(20, 'kushal', 'dubey', 'kdubey123@yahoo.com', 'mca', 2018, 'muzzaffarpur', 'bihar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
