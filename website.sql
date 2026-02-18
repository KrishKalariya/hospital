-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2024 at 07:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `name` char(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `number` varchar(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `problem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`name`, `email`, `number`, `date`, `problem`) VALUES
('bhavya', '', '1234567890', '0000-00-00', 'Checking'),
('bhavya', 'bhavyasavaliya1685@gmail.com', '9428711114', '2022-04-28', 'cavity'),
('Birva', 'birva@gmail.com', '8526985698', '2024-11-12', ' Regular Checkup'),
('mansi', 'mansi012@gmail.com', '1234567890', '2022-05-26', 'teeth clean'),
('shruti', 'spatoliya552@rku.ac.in', '1234567890', '2022-04-22', 'detistry');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_name` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_name`, `quantity`, `price`) VALUES
('Dolo650', '150', '200'),
('ipill', '100', '500'),
('monokoto', '150', '200');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `first_name` char(50) NOT NULL,
  `last_name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `mobile_no` varchar(11) NOT NULL,
  `type` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`first_name`, `last_name`, `email`, `password`, `confirm_password`, `mobile_no`, `type`) VALUES
('aashvi', 'kansagra', 'aashvik012@gmail.com', 'ak012', 'ak012', '1234567890', 'Patient'),
('bhavya', 'savaliya', 'bhavyasavaliya168@gmail.com', '3456', '3456', '1234567890', 'Nurse'),
('bhavya', 'savaliya', 'bhavyasavaliya85@gmail.com', 'bhavya 1685', 'bhavya 1685', '1234567890', 'Nurse'),
('Birva', 'Patel', 'birva@gmail.com', 'Bp1313', 'Bp1313', '8756896589', 'Nurse'),
('janki mam', 'patoliya', 'janki.kansagra@rku.ac.in', '123', '123', '1234567890', 'Doctor'),
('krish', 'kalariya', 'krishkalariya851@gmail.com', 'Kk1212', 'Kk1212', '8956231478', 'Patient'),
('MILI', 'bathani', 'mbathani123@rku.ac.in', '123', '123', '1234567890', 'Nurse'),
('bhavya', 'savaliya', 'savaliyabhavya118@gmail.com', 'Bhavya_1471', 'bhavya 1471', '9428711114', 'Nurse'),
('shanay', 'sorathiya', 'shanay148@gmail.com', 'H0605105', 'H0605105', '1234567890', 'Doctor'),
('Vasu', 'Khunt', 'vasu@gmail.com', 'Vk1414', 'Vk1414', '8327069065', 'Doctor');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `name` char(50) NOT NULL,
  `mobile_no` varchar(11) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`name`, `mobile_no`, `message`) VALUES
('bhavya', '1234567890', 'this is so good website');

-- --------------------------------------------------------

--
-- Table structure for table `token1`
--

CREATE TABLE `token1` (
  `token_id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `s_time` datetime DEFAULT NULL,
  `token` varchar(1000) DEFAULT NULL,
  `otp` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `token1`
--

INSERT INTO `token1` (`token_id`, `email`, `s_time`, `token`, `otp`) VALUES
(8, 'shanay148@gmail.com', '2022-04-28 09:50:44', 'ef5c4be41fbf3dcda85df0091e681a87ca69c1f7bf1f2258acd96ed89254672aadcd624b6c2d65d8f0a010ec004bf48f0c6ffb214545ec51896c9cc0833bb8c5', 616126),
(9, 'janki.kansagra@rku.ac.in', '2022-04-28 10:24:23', 'e110c6c54b22d34791a08a5d095894f7b94f225afff6887ac55b82ec0fccc004f44d74561adf6ef8ac68c7b982c0013764c1f40a797aa581485907ab44921a66', 317570);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_name`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`mobile_no`);

--
-- Indexes for table `token1`
--
ALTER TABLE `token1`
  ADD PRIMARY KEY (`token_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `token1`
--
ALTER TABLE `token1`
  MODIFY `token_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
