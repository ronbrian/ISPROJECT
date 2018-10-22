-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2018 at 12:32 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `no` int(11) NOT NULL,
  `user id` int(11) NOT NULL,
  `name` text NOT NULL,
  `current time` varchar(50) NOT NULL,
  `appointment date` varchar(100) NOT NULL,
  `appointment time` varchar(50) NOT NULL,
  `service` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL,
  `viewed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`no`, `user id`, `name`, `current time`, `appointment date`, `appointment time`, `service`, `status`, `viewed`) VALUES
(20, 36941325, 'Ron Brian', '2018/10/20/07:20', '2018-10-30', '14:00', 'Laboratory Tests', '', 1),
(23, 36941325, 'Ron Brian', '2018/10/20/08:37', '', '', 'Doctor Consultation', '', 0),
(24, 36941325, 'Ron Brian', '2018/10/20/08:40', '', '', 'Doctor Consultation', '', 0),
(25, 36941325, 'Ron Brian', '2018/10/20/08:40', '', '', 'Doctor Consultation', '', 0),
(26, 36941325, 'Ron Brian', '2018/10/20/08:41', '', '', 'Doctor Consultation', '', 0),
(27, 36941325, 'Ron Brian', '2018/10/20/10:12', '2018-10-15', '12:07', 'Doctor Consultation', '', 0),
(28, 1738, 'Mary Wambui', '2018/10/20/10:23', '2018-10-11', '15:58', 'Doctor Consultation', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Remember me` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `no` int(11) NOT NULL,
  `id` int(35) NOT NULL,
  `time` varchar(50) NOT NULL,
  `doctor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`no`, `id`, `time`, `doctor`) VALUES
(237, 12345678, '2018/10/06/02:39', 'mjuma'),
(238, 36941325, '2018/10/06/02:42', 'mjuma'),
(239, 12345678, '2018/10/06/02:43', 'mjuma'),
(240, 36941325, '2018/10/06/02:49', 'mjuma'),
(241, 36941325, '2018/10/06/02:51', 'mjuma'),
(242, 12345678, '2018/10/06/02:51', 'mjuma'),
(243, 36941325, '2018/10/06/02:52', 'mjuma'),
(244, 36941325, '2018/10/06/02:53', 'mjuma'),
(245, 12345678, '2018/10/06/02:53', 'mjuma'),
(246, 676543, '2018/10/06/02:54', 'mjuma'),
(247, 36941325, '2018/10/06/02:54', 'mjuma'),
(248, 36941325, '2018/10/06/03:04', 'mjuma'),
(249, 36941325, '2018/10/06/03:06', 'mjuma'),
(250, 36941325, '2018/10/06/03:07', 'mjuma'),
(251, 36941325, '2018/10/06/06:59', 'mjuma'),
(252, 36941325, '2018/10/06/07:03', 'mjuma'),
(253, 36941325, '2018/10/06/07:05', 'mjuma'),
(254, 36941325, '2018/10/06/07:05', 'mjuma'),
(255, 36941325, '2018/10/06/07:06', 'mjuma'),
(256, 12345678, '2018/10/06/07:07', 'mjuma'),
(257, 36941325, '2018/10/06/07:10', 'mjuma'),
(258, 36941325, '2018/10/06/07:10', 'mjuma'),
(259, 36941325, '2018/10/06/07:15', 'mjuma'),
(260, 36941325, '2018/10/06/07:21', 'mjuma'),
(261, 36941325, '2018/10/06/07:21', 'mjuma'),
(262, 36941325, '2018/10/06/07:21', 'mjuma'),
(263, 36941325, '2018/10/07/08:24', 'mjuma'),
(264, 12345678, '2018/10/07/08:25', 'mjuma'),
(265, 36941325, '2018/10/07/08:26', 'mjuma'),
(266, 12345678, '2018/10/07/08:26', 'mjuma'),
(267, 36941325, '2018/10/07/08:27', 'jmwangi'),
(268, 12345678, '2018/10/07/08:28', 'jmwangi'),
(269, 36941325, '2018/10/07/08:28', 'jmwangi'),
(270, 12345678, '2018/10/07/08:28', 'jmwangi'),
(271, 36941325, '2018/10/07/08:30', 'mjuma'),
(272, 36941325, '2018/10/07/08:33', 'mjuma'),
(273, 12345678, '2018/10/07/08:34', 'mjuma'),
(274, 12345678, '2018/10/07/08:35', 'mjuma'),
(275, 36941325, '2018/10/07/08:36', 'mjuma'),
(276, 3, '2018/10/07/08:46', 'mjuma'),
(277, 12345678, '2018/10/07/08:47', 'mjuma'),
(278, 3, '2018/10/07/08:50', 'mjuma'),
(279, 36941325, '2018/10/07/08:50', 'mjuma'),
(280, 3, '2018/10/07/08:50', 'mjuma'),
(281, 36941325, '2018/10/07/09:04', 'mjuma'),
(282, 3, '2018/10/07/09:05', 'mjuma'),
(283, 36941325, '2018/10/07/09:06', 'mjuma'),
(284, 0, '2018/10/07/09:06', 'mjuma'),
(285, 3, '2018/10/07/09:07', 'mjuma'),
(286, 3, '2018/10/07/09:09', 'mjuma'),
(287, 12345678, '2018/10/07/09:10', 'jmwangi'),
(288, 36941325, '2018/10/07/09:11', 'mjuma'),
(289, 36941325, '2018/10/07/09:12', 'mjuma'),
(290, 12345678, '2018/10/07/09:14', 'mjuma'),
(291, 3, '2018/10/08/06:03', 'mjuma'),
(292, 36941325, '2018/10/08/06:05', 'mjuma'),
(293, 3, '2018/10/08/07:41', 'mjuma'),
(294, 36941325, '2018/10/08/07:42', 'mjuma'),
(295, 9890, '2018/10/08/07:42', 'mjuma'),
(296, 3, '2018/10/09/02:48', 'ronb'),
(297, 3, '2018/10/13/05:19', 'mjuma'),
(298, 67654343, '2018/10/14/11:04', 'mjuma'),
(299, 3, '2018/10/14/11:04', 'mjuma'),
(300, 3, '2018/10/14/01:37', 'mjuma'),
(301, 3, '2018/10/14/05:35', 'mjuma'),
(302, 36941325, '2018/10/14/05:35', 'mjuma'),
(303, 36941325, '2018/10/14/05:39', 'mjuma'),
(304, 36941325, '2018/10/14/05:56', 'jmwangi'),
(305, 3, '2018/10/17/09:56', 'mjuma'),
(306, 3, '2018/10/18/11:14', 'mjuma'),
(307, 36941325, '2018/10/18/11:31', 'mjuma'),
(308, 36941325, '2018/10/19/02:03', 'mjuma'),
(309, 36941325, '2018/10/20/05:29', 'mjuma'),
(310, 3, '2018/10/20/05:29', 'mjuma'),
(311, 36941325, '2018/10/20/05:29', 'mjuma'),
(312, 23, '2018/10/20/05:29', 'mjuma'),
(313, 43, '2018/10/20/05:30', 'mjuma'),
(314, 1234321, '2018/10/20/05:30', 'mjuma'),
(315, 0, '2018/10/20/05:30', 'mjuma'),
(316, 36941325, '2018/10/20/07:20', 'mjuma'),
(317, 12345678, '2018/10/20/08:34', 'mjuma'),
(318, 3, '2018/10/20/08:55', 'mjuma'),
(319, 36941325, '2018/10/20/10:37', 'mjuma');

-- --------------------------------------------------------

--
-- Table structure for table `medical info`
--

CREATE TABLE `medical info` (
  `no` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `symptoms` text NOT NULL,
  `period` varchar(30) NOT NULL,
  `diagnosis` varchar(200) NOT NULL,
  `prescription` varchar(200) NOT NULL,
  `notes` text NOT NULL,
  `doctor` text NOT NULL,
  `date` varchar(30) NOT NULL,
  `hospital` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical info`
--

INSERT INTO `medical info` (`no`, `id`, `symptoms`, `period`, `diagnosis`, `prescription`, `notes`, `doctor`, `date`, `hospital`) VALUES
(23, 3, '............', '', '', '', '', '', '2018/10/07/08:46', ''),
(24, 0, '', '', '', '', '', '', '2018/10/07/08:47', ''),
(25, 12345678, '', '', '', '', '', '', '2018/10/07/08:47', ''),
(26, 3, 'ccccccccccc', '', '', '', '', '', '2018/10/07/08:50', ''),
(28, 12345678, '', '', '', '', '', '', '2018/10/07/09:14', ''),
(29, 36941325, 'Stomach Ache', '4 Months', 'Ulcers / Stomach Ulcers', '', 'Take with Plenty of water, and do not skip meals.', 'mjuma', '2018/10/14/05:36', ''),
(30, 36941325, 'Headache', '3 days', 'Lack of sleep', '', 'Take with a glass of plain water', 'mjuma', '2018/10/14/05:39', ''),
(31, 36941325, 'Unknown', 'Not Sure', 'Nothing', '', 'No Etra Notes', 'jmwangi', '2018/10/14/05:56', 'Kenyatta National Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `no` int(11) NOT NULL,
  `name` text NOT NULL,
  `age` int(11) NOT NULL,
  `id` varchar(10) NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `gender` text NOT NULL,
  `password` varchar(150) NOT NULL DEFAULT '0',
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`no`, `name`, `age`, `id`, `tel`, `email`, `gender`, `password`, `isactive`) VALUES
(3, 'Ron Brian', 19, '36941325', 704814222, 'ronmachoka@gmail.com', 'M', 'qwerty', 0),
(4, 'James Mwangi', 23, '12345678', 788787664, 'james@strathmore.edu', 'M', '0', 0),
(5, 'Test User 1', 40, '87654321', 777889874, 'testuser@gmail.com', 'M', '0', 0),
(8, 'Test User 3', 8, '3', 0, '', 'M', '0', 0),
(9, 'Stacy', 29, '99', 766758443, 'stacy@gmail.com', 'F', '0', 0),
(10, 'Mary Wambui', 34, '1738', 788688584, 'mwambui@gmail.com', 'F', 'qwerty', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient record`
--

CREATE TABLE `patient record` (
  `no` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `bmi` decimal(10,2) NOT NULL,
  `blood pressure` int(11) NOT NULL,
  `conditions` text NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient record`
--

INSERT INTO `patient record` (`no`, `id`, `height`, `weight`, `bmi`, `blood pressure`, `conditions`, `date`) VALUES
(1, 36941325, 2, 66, '16.50', 84, 'NONE', '2018/10/04/04:31'),
(2, 12345678, 2, 23, '0.00', 88, 'NONE', '2018/10/04/04:31'),
(4, 87654321, 2, 98, '22.00', 80, 'None', '2018/10/07/08:43'),
(7, 3, 76, 56, '30.65', 88, 'none', '2018/10/07/08:45'),
(8, 99, 2, 64, '0.00', 56, 'NONE', '2018/10/14/12:33'),
(9, 1738, 1.5, 82, '0.55', 84, 'NONE', '2018/10/20/09:14');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Name` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `ID` int(10) NOT NULL,
  `title` text NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Name`, `username`, `ID`, `title`, `password`) VALUES
('James Mwangi', 'jmwangi', 1, 'doctor', '123'),
('Hellen Njoki', 'hnjoki', 2, 'clerk', 'qwe'),
('mzee juma', 'mjuma', 3, 'doctor', 'zxc'),
('Brian Njogu', 'bnjogu', 4, 'clerk', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`) VALUES
(5, 'akinyi'),
(8, 'lawrence'),
(10, 'jemo'),
(12, 'odede'),
(32, 'wilberforce'),
(81, 'ashley'),
(12345678, 'james'),
(36941325, 'ron'),
(0, 'Sign Up and Proceed to Log In'),
(0, 'loiko'),
(0, 'qwerty'),
(0, 'password=mkmk'),
(0, '3'),
(0, '3'),
(0, 'password=waze'),
(0, 'cvbvc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `no` (`no`),
  ADD KEY `user id` (`user id`),
  ADD KEY `no_2` (`no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `medical info`
--
ALTER TABLE `medical info`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `no` (`no`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `no` (`no`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `patient record`
--
ALTER TABLE `patient record`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `no` (`no`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `ID_2` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=320;

--
-- AUTO_INCREMENT for table `medical info`
--
ALTER TABLE `medical info`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patient record`
--
ALTER TABLE `patient record`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
