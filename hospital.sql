-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 02:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`) VALUES
(1, 'test@gmail.com', '123456', 'Helping-Hand');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `b_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `u_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `d_id` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL,
  `is_update` int(11) NOT NULL,
  `is_delete_time` varchar(30) NOT NULL,
  `is_update_time` varchar(30) NOT NULL,
  `app_date` datetime NOT NULL,
  `msg` text NOT NULL,
  `book_date` date DEFAULT NULL,
  `amount` varchar(50) NOT NULL,
  `payment_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`b_id`, `name`, `email`, `contact`, `u_id`, `status`, `d_id`, `is_delete`, `is_update`, `is_delete_time`, `is_update_time`, `app_date`, `msg`, `book_date`, `amount`, `payment_status`) VALUES
(1, 'Dharmendrabhai Shah', 'harshshah6966@gmail.com', 9712658293, 1, 'accepted', 3, 0, 1, '', '1685686161', '2023-05-30 00:00:00', 'Regarading Diabites.....', '2023-06-09', '500', 'completed'),
(2, 'Het', 'hetshah@gmail.com', 9687052303, 1, 'Completed', 3, 0, 1, '', '1685882573', '2023-05-30 00:00:00', 'This is for testing purpose.....', '2023-06-06', '500', 'completed'),
(3, 'Harsh Shah', 'dsshah009@gmail.com', 9712658293, 1, 'pending', 3, 0, 1, '', '1685882165', '2023-05-30 08:36:32', 'Testing.........', '2023-07-05', '', 'pending'),
(4, 'test', 'test@gmail.com', 0, 1, 'rejected', 3, 1, 0, '1685882282', '', '2023-05-30 08:44:04', 'testing....', '2023-06-07', '', 'pending'),
(5, 'Dharmendrabhai shah', 'dsshah009@gmail.com', 7984605895, 1, 'Completed', 3, 0, 1, '', '1686024113', '2023-06-06 05:59:58', 'Diabites', '2023-06-06', '500', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `name`, `city_id`) VALUES
(1, 'Bapuanagar', 1),
(2, 'Nikol', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `is_delete` int(11) NOT NULL,
  `is_update` int(11) NOT NULL,
  `is_delete_time` varchar(50) NOT NULL,
  `is_update_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `name`, `is_delete`, `is_update`, `is_delete_time`, `is_update_time`) VALUES
(1, 'Dentist', 0, 1, '1684472798', '1684473776'),
(2, 'General Practitioner (GP)', 0, 0, '', '1684556120');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `name`, `state_id`) VALUES
(1, 'Ahmedabad', 1),
(2, 'Gandhinagar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `is_time` varchar(50) NOT NULL,
  `is_date` date NOT NULL,
  `contact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `msg`, `is_time`, `is_date`, `contact`) VALUES
(1, 'test', 'test@gmail.com', 'dentist', 'testing', '1684589514', '2023-05-20', 9785632014);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `d_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `file` varchar(80) NOT NULL,
  `image` varchar(50) NOT NULL,
  `is_delete` int(11) NOT NULL,
  `is_update` int(11) NOT NULL,
  `is_delete_time` varchar(30) NOT NULL,
  `is_update_time` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `r_date` date NOT NULL,
  `city_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`d_id`, `name`, `email`, `contact`, `status`, `password`, `about`, `file`, `image`, `is_delete`, `is_update`, `is_delete_time`, `is_update_time`, `gender`, `cat_id`, `r_date`, `city_id`, `area_id`) VALUES
(3, 'Dr. Dhaval Gandhi', 'dhavalgandhi@gmail.com', 9685230147, 'approved', 'test@123', 'Hello,GM....', 'cv.pdf', '11.jpg', 0, 1, '', '1684838389', 'Male', 2, '2023-05-22', 0, 0),
(4, 'test', 'test@gmail.com', 8596230147, 'pending', '', 'testing', 'cv.pdf', '', 0, 1, '1684838503', '1684838503', 'Male', 1, '2023-05-23', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `m_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `stoke` varchar(50) NOT NULL,
  `r_date` date NOT NULL,
  `is_delete` int(11) NOT NULL,
  `is_update` int(11) NOT NULL,
  `is_update_time` varchar(50) NOT NULL,
  `is_delete_time` varchar(50) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`m_id`, `name`, `stoke`, `r_date`, `is_delete`, `is_update`, `is_update_time`, `is_delete_time`, `image`) VALUES
(5, 'LTK-H', 'availabel', '2023-05-28', 1, 0, '1685249685', '1685251045', 'download (1).jpg'),
(6, 'LTK-H', 'availabel', '2023-05-28', 0, 0, '1685249700', '', 'download (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `name`) VALUES
(1, 'Gujarat'),
(2, 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `city_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `r_date` datetime NOT NULL,
  `is_delete` int(11) NOT NULL,
  `is_update` int(11) NOT NULL,
  `is_delete_time` varchar(30) NOT NULL,
  `is_update_time` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `name`, `email`, `contact`, `address`, `image`, `city_id`, `area_id`, `r_date`, `is_delete`, `is_update`, `is_delete_time`, `is_update_time`, `gender`, `password`) VALUES
(1, 'Harsh Shah', 'harshshah6966@gmail.com', 9712658293, 'Bapunagar', 'WhatsApp Image 2022-12-21 at 20.24.32.jpg', 1, 1, '2023-05-28 08:15:43', 0, 0, '', '', 'Male', 'abc@123'),
(2, 'Vrusha shah', 'vrushshah@gmail.com', 8596320147, 'nikol', 'Untitled-3.png', 1, 2, '2023-05-28 08:26:48', 0, 0, '', '', 'Female', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `u_id` (`u_id`,`d_id`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `city_id` (`city_id`,`area_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD CONSTRAINT `appoinment_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `doctor` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appoinment_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
