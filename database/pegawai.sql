-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 09:09 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `position` varchar(70) NOT NULL DEFAULT 'Manager',
  `Status` varchar(30) NOT NULL DEFAULT 'Active',
  `cid` timestamp NOT NULL DEFAULT current_timestamp(),
  `uid` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `position`, `Status`, `cid`, `uid`, `image`) VALUES
(1, 'Admin', '199910102020101001', 'admin', 'Admin', 'Active', '2019-02-15 05:37:30', '2021-03-03 10:09:43', 'admin@123.com.jpg'),
(2, ' Admin 2', 'admin', 'admin', 'Admin', 'Active', '2019-02-15 05:37:30', '2021-03-08 16:07:14', 'admin@123.com.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `assign_location`
--

CREATE TABLE `assign_location` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `distance_limit` int(10) NOT NULL DEFAULT 100,
  `uid` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_location`
--

INSERT INTO `assign_location` (`id`, `emp_id`, `location_id`, `distance_limit`, `uid`, `status`) VALUES
(8, 20, 10, 100, '2021-03-01 07:04:39', 'Active'),
(9, 21, 10, 100, '2021-03-07 19:33:49', 'Active'),
(10, 22, 12, 10, '2021-03-10 03:57:14', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `assign_project_location`
--

CREATE TABLE `assign_project_location` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `distance_limit` int(11) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Active',
  `cid` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `uid` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `checkin`
--

CREATE TABLE `checkin` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `lat` double NOT NULL,
  `longi` double NOT NULL,
  `address` text NOT NULL,
  `distance` float NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkin`
--

INSERT INTO `checkin` (`id`, `userId`, `lat`, `longi`, `address`, `distance`, `time`) VALUES
(54, 20, -7.090910999999999, 107.668887, '', 0, '2021-03-01 07:05:45'),
(55, 17, -7.090910999999999, 107.668887, '', 0, '2021-03-01 07:07:27'),
(56, 22, -7.090910999999999, 107.668887, '', 0, '2021-03-07 19:36:59'),
(57, 20, -7.090910999999999, 107.668887, '', 0, '2021-03-07 19:38:37'),
(58, 22, -7.090910999999999, 107.668887, '', 0, '2021-03-08 16:42:04'),
(59, 22, -7.090910999999999, 107.668887, '', 0, '2021-03-08 16:42:25'),
(60, 22, -7.090910999999999, 107.668887, '', 0, '2021-03-08 16:44:35'),
(61, 22, -7.090910999999999, 107.668887, '', 0, '2021-03-08 16:47:26'),
(62, 22, -7.090910999999999, 107.668887, '', 0, '2021-03-08 17:01:13'),
(63, 22, -7.090910999999999, 107.668887, '', 0, '2021-03-08 17:02:52'),
(64, 22, -7.090910999999999, 107.668887, '', 0, '2021-03-08 17:03:51'),
(65, 21, -7.090910999999999, 107.668887, '', 0, '2021-03-08 17:08:40'),
(66, 22, -6.3255069, 108.3240926, '', 0, '2021-03-10 03:57:50');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `check_in_id` int(11) NOT NULL,
  `lat` double NOT NULL,
  `longi` double NOT NULL,
  `address` text NOT NULL,
  `distance` float NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `userId`, `check_in_id`, `lat`, `longi`, `address`, `distance`, `time`, `status`) VALUES
(51, 20, 54, -7.090910999999999, 107.668887, '', 0, '2021-03-01 07:06:43', 0),
(52, 17, 55, -7.090910999999999, 107.668887, '', 0, '2021-03-01 07:07:34', 0),
(53, 22, 56, -7.090910999999999, 107.668887, '', 0, '2021-03-07 19:37:06', 0),
(54, 20, 57, -7.090910999999999, 107.668887, '', 0, '2021-03-07 19:59:27', 0),
(55, 22, 58, -7.090910999999999, 107.668887, '', 0, '2021-03-08 16:42:09', 0),
(56, 22, 59, -7.090910999999999, 107.668887, '', 0, '2021-03-08 16:42:28', 0),
(57, 22, 60, -7.090910999999999, 107.668887, '', 0, '2021-03-08 16:47:07', 0),
(58, 22, 61, -7.090910999999999, 107.668887, '', 0, '2021-03-08 16:47:33', 0),
(59, 22, 62, -7.090910999999999, 107.668887, '', 0, '2021-03-08 17:01:21', 0),
(60, 22, 63, -7.090910999999999, 107.668887, '', 0, '2021-03-08 17:02:56', 0),
(61, 22, 64, -7.090910999999999, 107.668887, '', 0, '2021-03-08 17:05:59', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(80) NOT NULL,
  `emp_gender` varchar(18) NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_position` varchar(70) NOT NULL,
  `emp_address` text NOT NULL,
  `emp_mobile` varchar(15) NOT NULL,
  `emp_email` varchar(80) NOT NULL,
  `emp_password` varchar(80) NOT NULL,
  `emp_joining_date` date NOT NULL,
  `cid` timestamp NOT NULL DEFAULT current_timestamp(),
  `uid` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` text NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_gender`, `emp_dob`, `emp_position`, `emp_address`, `emp_mobile`, `emp_email`, `emp_password`, `emp_joining_date`, `cid`, `uid`, `image`, `status`) VALUES
(20, 'Akbar', 'Laki-laki', '2000-10-01', 'DINAS KESEHATAN', 'Singaraja', '08123456789', 'akbar@gmail.com', 'akbar', '2020-10-10', '2021-03-01 04:16:48', '2021-03-10 03:51:10', 'akbar@gmail.com.jpg', 'Active'),
(21, 'Abu Hamash', 'Laki-laki', '2000-01-01', 'INSPEKTORAT', 'Pabean', '085222369123', 'abu@gmail.com', 'abu', '2021-03-03', '2021-03-03 04:23:18', '2021-03-10 03:51:22', 'abu@gmail.com.jpg', 'Active'),
(22, 'pegawai', 'Male', '2021-03-01', 'SEKRETARIAT DAERAH', 'asfasdfadsf', '32432432', '321215', 'pegawai', '2021-03-22', '2021-03-03 04:47:15', '2021-03-10 03:50:55', '321215.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `emp_project_matrix`
--

CREATE TABLE `emp_project_matrix` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Active',
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `cid` timestamp NOT NULL DEFAULT current_timestamp(),
  `uid` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `id` int(11) NOT NULL,
  `holiday_date` date NOT NULL,
  `holiday_event` varchar(80) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Active',
  `cid` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `uid` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `id` int(11) NOT NULL,
  `lat` double NOT NULL,
  `longi` double NOT NULL,
  `address` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`id`, `lat`, `longi`, `address`, `status`) VALUES
(10, -7.090910999999999, 107.668887, 'Rumah', 'Active'),
(12, -6.3255069, 108.3240926, 'Diskominfo', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `viewStatus` varchar(20) NOT NULL DEFAULT 'NotSeen',
  `messageStatus` varchar(30) NOT NULL DEFAULT 'Received',
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `u_id` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `emp_id`, `admin_id`, `message`, `viewStatus`, `messageStatus`, `status`, `u_id`) VALUES
(43, 22, 2, 'Maaf', 'NotSeen', 'Received', 'Inactive', '2021-03-08 16:07:22'),
(47, 20, 2, 'perjalanan dinas', 'NotSeen', 'Received', 'Active', '2021-03-08 18:04:17'),
(48, 22, 1, 'Perjalanan Dinas', 'NotSeen', 'Received', 'Active', '2021-03-10 03:53:04'),
(49, 22, 1, 'maaf', 'NotSeen', 'Received', 'Active', '2021-03-10 04:02:06'),
(50, 22, 1, 'dgdfds', 'NotSeen', 'Received', 'Active', '2021-03-10 04:20:34');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(300) NOT NULL,
  `project_start_date` date NOT NULL,
  `project_end_date` date NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Active',
  `cid` timestamp NOT NULL DEFAULT current_timestamp(),
  `uid` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `id` int(11) NOT NULL,
  `theme` varchar(80) NOT NULL,
  `useFor` varchar(30) NOT NULL,
  `cid` timestamp NOT NULL DEFAULT current_timestamp(),
  `uid` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id`, `theme`, `useFor`, `cid`, `uid`) VALUES
(1, 'theme-black', 'admin', '2019-02-26 10:12:22', '2021-03-08 10:47:41'),
(2, 'theme-black', 'emp', '2019-03-17 10:07:02', '2021-03-08 10:47:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_location`
--
ALTER TABLE `assign_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_project_location`
--
ALTER TABLE `assign_project_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkin`
--
ALTER TABLE `checkin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `emp_project_matrix`
--
ALTER TABLE `emp_project_matrix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assign_location`
--
ALTER TABLE `assign_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `assign_project_location`
--
ALTER TABLE `assign_project_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `checkin`
--
ALTER TABLE `checkin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `emp_project_matrix`
--
ALTER TABLE `emp_project_matrix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
