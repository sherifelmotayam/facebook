-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 09:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `fbreg`
--

CREATE TABLE `fbreg` (
  `Fname` varchar(30) DEFAULT NULL,
  `Lname` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `Gender` varchar(30) DEFAULT NULL,
  `Dateofbirth` varchar(30) DEFAULT NULL,
  `Image` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fbreg`
--

INSERT INTO `fbreg` (`Fname`, `Lname`, `Email`, `password`, `Gender`, `Dateofbirth`, `Image`) VALUES
('', '', 'sherif@gmail.com', 'sherif', 'Male', '0002-02-02', ''),
('Ahmed ', 'Samir', 'ahmedsamir@gmail.com', 'sherifpass', 'Male', '2222-02-02', 'sherif.png'),
('Seif', 'nagi', 'seifnagi@gmail.com', 'seifpass', 'Male', '2222-02-09', 'seif.jpeg'),
('Ammar', 'Mohamed', 'ammar@gmail.com', 'ammarpass', 'Male', '0001-01-01', 'sherif.png'),
('seif', 'nagi', 'seifnagi@gmail.com', 'seifpass', 'Male', '0001-01-01', 'seif.jpeg'),
('Seif', 'nahi', 'seifnagi@gmail.com', 'sherif', 'Male', '2021-12-31', 'seif.jpeg'),
('Seif', 'nahi', 'seifnagi@gmail.com', 'sherif', 'Male', '2021-12-31', 'seif.jpeg'),
('Mostafa', 'mm', 'mostafa@gmail.com', 'mostafapass', 'Male', '0001-01-01', 'mostafa.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
