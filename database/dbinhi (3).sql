-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 05:26 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbinhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`, `usertype`) VALUES
(1, 'admin', '$2y$10$fCOiMky4n5hCJx3cpsG20Od4wHtlkCLKmO6VLobJNRIg9ooHTkgjK', 'Main', 'test7', 'LogoB.jpg', '2018-04-30', ''),
(2, 'adminhr', '$2y$10$fCOiMky4n5hCJx3cpsG20Od4wHtlkCLKmO6VLobJNRIg9ooHTkgjK', 'HR', 'BINHI', 'Logo (1).png', '2022-07-07', 'hr'),
(3, 'adminaccounting', '$2y$10$fCOiMky4n5hCJx3cpsG20Od4wHtlkCLKmO6VLobJNRIg9ooHTkgjK', 'ACCOUNTING', 'BINHI', 'Logo (1).png', '2022-07-07', 'acctg');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `announce_no` varchar(20) CHARACTER SET latin1 NOT NULL,
  `announce_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `announce_persons` varchar(100) CHARACTER SET latin1 NOT NULL,
  `announce_venue` varchar(100) CHARACTER SET latin1 NOT NULL,
  `announce_details` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `announce_no`, `announce_name`, `date_start`, `date_end`, `announce_persons`, `announce_venue`, `announce_details`) VALUES
(1, 'SCV194382570', 'BINHI', '2022-07-24 00:00:00', '2022-07-24 00:00:00', 'COORDINATORS ONLY', 'QUEZON MUNICIPAL HALL', 'AGRICULTURAL SEMINAR FOR FIELD WORKERS'),
(2, 'NSR708396152', 'TEAM BUILDING', '2022-07-25 00:00:00', '2022-07-25 00:00:00', 'ALL EMPLOYEES', 'COMPANY\'s PREMISES', 'GIVEAWAY: FREE FOOD FOR FAMILIES AND A PARTY'),
(5, 'ANN208173', 'PARTY FOR ADMINS', '2022-08-11 07:16:00', '2022-08-11 19:16:00', 'EVERY ADMINS', 'OFFICE', 'MUNTING SALO-SALO');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_in` time NOT NULL,
  `status` varchar(15) NOT NULL,
  `time_out` time NOT NULL,
  `num_hr` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `employee_id`, `date`, `time_in`, `status`, `time_out`, `num_hr`) VALUES
(1, 1, '2022-07-25', '08:00:00', '1', '17:00:00', 8),
(107, 2, '2022-07-25', '08:00:00', '1', '17:00:00', 8),
(108, 3, '2022-07-25', '08:00:00', '1', '17:00:00', 8),
(109, 4, '2022-07-25', '08:00:00', '1', '05:00:00', 3),
(110, 5, '2022-07-25', '08:00:00', '1', '05:00:00', 3),
(111, 6, '2022-07-25', '08:00:00', '1', '17:00:00', 8),
(112, 1, '2022-07-24', '09:00:00', '0', '17:00:00', 7),
(113, 2, '2022-07-24', '09:00:00', '0', '17:00:00', 7),
(114, 3, '2022-07-24', '09:00:00', '0', '17:00:00', 7),
(117, 1, '2022-08-11', '08:32:42', '0', '08:32:55', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cashadvance`
--

CREATE TABLE `cashadvance` (
  `id` int(11) NOT NULL,
  `date_advance` date NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashadvance`
--

INSERT INTO `cashadvance` (`id`, `date_advance`, `employee_id`, `amount`) VALUES
(5, '2022-07-25', '2', 600);

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` int(20) NOT NULL,
  `contract_no` varchar(15) CHARACTER SET latin1 NOT NULL,
  `date` date NOT NULL,
  `contract_job` varchar(20) CHARACTER SET latin1 NOT NULL,
  `rate` int(10) NOT NULL,
  `output` int(11) NOT NULL,
  `workers` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `contract_no`, `date`, `contract_job`, `rate`, `output`, `workers`) VALUES
(2, 'JOB2222222', '2022-08-11', 'Kargador', 10, 10, 20),
(4, 'JOB5781329', '2022-08-09', 'Cleaning', 50, 100, 10),
(5, 'JOB1758962', '2022-08-16', 'Harvester', 20, 1000, 50),
(6, 'JOB4852391', '2022-08-18', 'test', 10, 10, 10),
(7, 'JOB3651479', '2022-08-10', 'test', 20, 20, 20),
(8, 'JOB6471895', '2022-08-26', 'Test154', 20, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE `deductions` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`id`, `description`, `amount`) VALUES
(1, 'SSS', 4.5),
(2, 'Pagibig', 2),
(3, 'PhilHealth', 4);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `birthdate` date NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `position_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_id`, `password`, `firstname`, `lastname`, `address`, `birthdate`, `contact_info`, `gender`, `position_id`, `schedule_id`, `photo`, `created_on`) VALUES
(1, 'ABC123456789', '$2y$10$fCOiMky4n5hCJx3cpsG20Od4wHtlkCLKmO6VLobJNRIg9ooHTkgjK', 'RASECK KIEL', 'POSO', 'Brgy. Mambulac, Silay City', '2018-04-02', '09000035719', 'Male', 2, 2, '279022022_506855404419937_7961780579793573116_n.jpg', '2018-04-28'),
(2, 'TWY781946302', 'password', 'EDWARD', 'AYSON', 'Buenos Aires St. Sampaloc Manila', '1995-07-11', '8467067344', 'Male', 1, 2, 'thanossmile.jpg', '2018-07-11'),
(3, 'DYE473869250', '', 'MATT', 'BAINGAN', 'Zaragosa St. Tondo, Manila', '1992-05-02', '09123456789', 'Male', 6, 2, '', '2018-04-30'),
(4, 'JIE625973480', '', 'ELIJAH', 'MANALANSANG', 'Bacoor, Cavite', '1995-10-02', '09468029840', 'Male', 4, 2, '', '2018-04-30'),
(5, 'TQO238109674', '', 'ALVIN', 'USIGAN', 'South Caloocan, Metro Manila', '1995-08-23', '09167572996', 'Male', 5, 2, 'profile.jpg', '2018-07-11'),
(6, 'EDQ203874591', '', 'Marie', 'Test', 'Taga diyan lang sa bakery ni aling bebang', '1991-07-25', '09876543210', 'Female', 3, 2, 'download.jpg', '2018-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

CREATE TABLE `overtime` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `hours` double NOT NULL,
  `rate` double NOT NULL,
  `date_overtime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `overtime`
--

INSERT INTO `overtime` (`id`, `employee_id`, `hours`, `rate`, `date_overtime`) VALUES
(5, '4', 6, 200, '2022-08-30'),
(7, '1', 7, 200, '2022-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `description` varchar(150) NOT NULL,
  `rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `description`, `rate`) VALUES
(1, 'Driver', 100),
(2, 'Admin', 150),
(3, 'Sewer', 100),
(4, 'Machine Operator', 100),
(5, 'Classifier', 100),
(6, 'Bagger', 100);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `time_in`, `time_out`) VALUES
(1, '07:00:00', '16:00:00'),
(2, '08:00:00', '17:00:00'),
(3, '09:00:00', '18:00:00'),
(4, '10:00:00', '19:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashadvance`
--
ALTER TABLE `cashadvance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deductions`
--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `cashadvance`
--
ALTER TABLE `cashadvance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `deductions`
--
ALTER TABLE `deductions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `overtime`
--
ALTER TABLE `overtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
