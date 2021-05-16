-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Author: Dhruvin Prajapati
-- Generation Time: May 04, 2021 at 06:35 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hope`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`) VALUES
(6, 'admin', '4297f44b13955235245b2497399d7a93', 'admin@gmail.com', '', '2021-04-05 18:25:10'),
(8, 'abc888', '6d0361d5777656072438f6e314a852bc', 'abc@gmail.com', 'QX5ZMN', '2018-04-13 18:12:30'),
(9, 'Dhruvinhp', '4297f44b13955235245b2497399d7a93', 'dhruvinhprajapati@gmail.com', 'ABCDEF', '2021-03-27 06:34:24'),
(10, 'Dhruvinhp', '4297f44b13955235245b2497399d7a93', 'dhruvinhprajapati@gmail.com', 'BCDEFG', '2021-03-31 06:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `admin_codes`
--

CREATE TABLE `admin_codes` (
  `id` int(222) NOT NULL,
  `adm_id` int(222) NOT NULL,
  `codes` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_codes`
--

INSERT INTO `admin_codes` (`id`, `adm_id`, `codes`) VALUES
(1, 0, 'BCDEFG'),
(2, 0, 'QFE6ZM'),
(3, 0, 'QMZR92'),
(4, 0, 'QPGIOV'),
(5, 0, 'QSTE52'),
(6, 0, 'QMTZ2J');

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `rs_id` int(222) NOT NULL,
  `c_id` int(222) NOT NULL,
  `adm_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `url` varchar(222) NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `o_days` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`rs_id`, `c_id`, `adm_id`, `title`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `image`, `date`) VALUES
(51, 5, 0, 'Give India', 'giveindia@gmail.com', 'none', 'https://www.giveindia.org/', '7am', '7pm', '24hr-x7', 'None', '607eac349427d.jpg', '2021-04-20 10:25:56'),
(52, 6, 0, 'Smile Foundation', 'none', 'None', 'https://www.smilefoundationindia.org/', '7am', '3pm', '24hr-x7', 'none', '607fc74528d74.jpg', '2021-04-21 06:33:41'),
(53, 13, 0, 'Nanhi kali', 'none', 'None', 'http://www.nanhikali.org/', 'full', '8pm', '24hr-x7', 'None', '607fc7da425af.jpg', '2021-04-21 06:36:10'),
(54, 10, 0, 'Goonj', 'None', 'None', 'https://goonj.org/', '6am', '8pm', '24hr-x7', 'None', '607fc8486d539.jpg', '2021-04-21 06:38:00'),
(55, 5, 0, 'Help Age India', 'none', 'None', 'https://www.helpageindia.org/', '7am', '4pm', 'mon-tue', 'None', '607fc8e0ab95e.jpg', '2021-04-21 06:40:32'),
(56, 10, 0, 'Cry', 'None', 'None', 'https://www.cry.org/', '11am', '4pm', 'mon-wed', 'None', '607fc922cb254.jpg', '2021-04-21 06:41:38'),
(57, 5, 0, 'Care India', 'None', 'None', 'https://www.careindia.org/', '9am', '5pm', '24hr-x7', 'None', '607fc9b330802.jpg', '2021-04-21 06:44:03'),
(58, 6, 0, 'Child Line India', 'None', 'None', 'https://www.childlineindia.org/', '7am', '3pm', 'mon-thu', 'None', '607fc9ef9a8de.jpg', '2021-04-21 06:45:03'),
(59, 5, 0, 'Sammaan', 'None', 'None', 'http://sammaan.org/', '11am', '6pm', '24hr-x7', 'None', '607fca2fd7101.jpg', '2021-04-21 06:46:07'),
(60, 5, 0, 'Teach For India', 'None', 'None', 'https://www.teachforindia.org/', '7am', '5pm', 'mon-sat', 'None', '607fcace44417.jpg', '2021-04-21 06:48:46'),
(61, 6, 0, 'Plan India', 'None', 'None', 'https://www.planindia.org/', '10am', '7pm', '24hr-x7', 'None', '607fcb24c6537.jpg', '2021-04-21 06:50:12'),
(62, 5, 0, 'Uday Foundation', 'None', 'None', 'https://www.udayfoundation.org/', 'full', '6pm', '24hr-x7', 'None', '607fcb6e0de6e.jpg', '2021-04-21 06:51:26'),
(63, 10, 0, 'Spark change Foundation', 'None', 'None', 'https://www.sparkachangefoundation.org/', 'full', '8pm', '24hr-x7', 'None', '607fcbb625fdd.jpg', '2021-04-21 06:52:38'),
(64, 6, 0, 'Make a Difference', 'None', 'None', 'https://makeadiff.in/#', '10am', '7pm', '24hr-x7', 'None', '607fcbe99ee13.jpg', '2021-04-21 06:53:29'),
(65, 5, 0, 'Bachpan Bachao Andolan', 'None', 'None', 'https://bba.org.in/', '9am', '7pm', 'mon-sat', 'none', '607fcc2e991b6.jpg', '2021-04-21 06:54:38'),
(66, 5, 0, 'Magic Bus', 'None', 'None', 'https://www.magicbus.org/', '11am', '6pm', 'mon-sat', 'None', '607fcc6c95ea6.jpg', '2021-04-21 06:55:40'),
(67, 6, 0, 'Friends Care Foundation', 'None', 'none', 'https://www.friendscarefoundation.org/', '7am', '7pm', 'mon-thu', 'None', '607fcd156b60d.png', '2021-04-21 06:58:29'),
(68, 5, 0, 'Manav Kartavya', 'none', 'None', 'http://manavkartavya.org/', '6am', '6pm', 'mon-sat', 'None', '607fcd4694a65.png', '2021-04-21 06:59:18'),
(69, 5, 0, 'Jyot Foundation', 'none', 'None', 'http://jyotfoundation.org/', '10am', '6pm', 'mon-sat', 'None', '607fcd77061a3.jpg', '2021-04-21 07:00:07'),
(70, 10, 0, 'human Kind', 'none', 'None', 'https://humankind.in/', '10am', '6pm', 'mon-sat', 'None', '607fcda62524c.jpg', '2021-04-21 07:00:54'),
(71, 13, 0, 'Saath', 'None', 'None', 'http://saath.org/', '9am', '7pm', 'mon-sat', 'none', '607fcdd30e988.png', '2021-04-21 07:01:39'),
(72, 6, 0, 'Charutar Health', 'none', 'None', 'http://www.charutarhealth.org/', '10am', '8pm', 'mon-sat', 'none', '607fce5b788e7.png', '2021-04-21 07:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `ngo_category`
--

CREATE TABLE `ngo_category` (
  `c_id` int(222) NOT NULL,
  `c_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo_category`
--

INSERT INTO `ngo_category` (`c_id`, `c_name`, `date`) VALUES
(5, 'Child education', '2021-04-05 18:22:51'),
(6, 'health', '2021-04-05 18:21:46'),
(10, 'Cancer', '2021-04-05 18:19:44'),
(13, 'Food', '2021-04-20 10:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(222) NOT NULL,
  `adm_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(222) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `adm_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`) VALUES
(41, 0, '', '', '', 'dhruvinhprajapati@gmail.com', '', '123123', '', 1, '2021-05-01 09:10:57'),
(42, 0, '', '', '', 'admin@gmail.com', '', '$2y$10$xqVcnX6C537yhBMfJSIgeuUxoUTj7Vtx7LQJ9LW1IW.enicSZ04mW', '', 1, '2021-05-01 09:15:07'),
(43, 0, '', '', '', 'user123@gmail.com', '', '123123', '', 1, '2021-05-03 05:19:30'),
(44, 0, '', '', '', 'user1@gmail.com', '', '123123', '', 1, '2021-05-03 05:33:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `admin_codes`
--
ALTER TABLE `admin_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adm_id` (`adm_id`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`rs_id`),
  ADD KEY `adm_id` (`adm_id`);

--
-- Indexes for table `ngo_category`
--
ALTER TABLE `ngo_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `adm_id` (`adm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `admin_codes`
--
ALTER TABLE `admin_codes`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `rs_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `ngo_category`
--
ALTER TABLE `ngo_category`
  MODIFY `c_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
