-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 08:19 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(20) NOT NULL,
  `position` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `employee_id` int(20) NOT NULL,
  `department_id` int(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `position`, `email`, `employee_id`, `department_id`, `password`, `first_name`, `last_name`) VALUES
(1, 'HR secrtary', 'joshua@gmail.com', 2, 2, 'e807f1fcf82d132f9bb018ca6738a19f', 'joshua', 'mukuha'),
(2, 'HR manager', 'peter@gmail.com', 5, 2, 'e807f1fcf82d132f9bb018ca6738a19f', 'peter', 'musembi'),
(3, 'HR Treasure', 'joni@gmail.com', 3, 2, 'e807f1fcf82d132f9bb018ca6738a19f', 'johnson', 'nyaanga');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `complaint_id` int(20) NOT NULL,
  `employee_id` int(20) NOT NULL,
  `complainant_email` varchar(20) NOT NULL,
  `offender email` varchar(255) NOT NULL,
  `complain_subj` int(100) NOT NULL,
  `complain_desc` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `date_solved` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`complaint_id`, `employee_id`, `complainant_email`, `offender email`, `complain_subj`, `complain_desc`, `date_created`, `date_solved`) VALUES
(1, 3, 'c', 'c', 0, 'cc', '2019-04-09', '2019-04-15'),
(2, 11, 'mimi@gmail.com', 'nnfnfmimi@gmail.com', 0, 'nfnfn mfmfnvnvn', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(20) NOT NULL,
  `department_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`) VALUES
(1, 'Computer Science'),
(2, 'Human Resources'),
(3, 'Engineering'),
(4, 'Business');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(20) NOT NULL,
  `department_id` int(20) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `phone_number` varchar(200) NOT NULL,
  `salary` int(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `department_id`, `employee_name`, `phone_number`, `salary`, `password`, `email`, `first_name`, `last_name`) VALUES
(2, 2, 'Joshu', '+254702030208', 100, '39b5177e82858ecc5661a2077b58edc3', 'joshua@gmail.com', 'joshua', 'mukuha'),
(3, 2, 'joni', '+254710020321', 20, 'e807f1fcf82d132f9bb018ca6738a19f', 'joni@gmail.com', 'jonson', 'nyaanga'),
(4, 1, 'Kanjih', '+254702030099', 112000, 'fd0a297dccbaea99997f5e114c697386', 'kanjih2012@gmail.com', 'mburu', 'kanjih'),
(5, 2, 'Peter', '+254702030201', 1, 'e807f1fcf82d132f9bb018ca6738a19f', 'peter@gmail.com', 'peter', 'musembi'),
(8, 3, 'kim', '+254700193847', 10000, '81dc9bdb52d04dc20036dbd8313ed055', '858wpwaweru@gmail.com', 'kim', 'kim'),
(10, 4, 'james', '+525654959626', 300000, '934b535800b1cba8f96a5d72f72f1611', 'mwangi@gmail.com', 'james', 'mwangi'),
(11, 4, 'MIMI', '+254725678534', 10000, '81dc9bdb52d04dc20036dbd8313ed055', 'mimi@gmail.com', 'MIMI', 'WEwe'),
(12, 2, 'miss', '700221144', 112000, 'e807f1fcf82d132f9bb018ca6738a19f', 'miss@gmail.com', 'miss', 'madam');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `leaves_id` int(20) NOT NULL,
  `employee_id` int(20) NOT NULL,
  `leave_days` int(20) NOT NULL,
  `leave_month` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`leaves_id`, `employee_id`, `leave_days`, `leave_month`, `start_date`, `end_date`) VALUES
(3, 10, 0, '2019-01', '2019-01-01', '2019-01-20'),
(13, 11, 10, '2019-03', '2019-03-11', '2019-03-25'),
(29, 4, 30, '2019-03', '2019-03-01', '2019-04-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`complaint_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`leaves_id`,`employee_id`),
  ADD UNIQUE KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `complaint_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `leaves_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`),
  ADD CONSTRAINT `admins_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`);

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`);

--
-- Constraints for table `leaves`
--
ALTER TABLE `leaves`
  ADD CONSTRAINT `leaves_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
