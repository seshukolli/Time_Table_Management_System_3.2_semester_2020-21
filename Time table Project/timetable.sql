-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 11:13 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_email`
--

CREATE TABLE `faculty_email` (
  `id` int(10) NOT NULL,
  `fmail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_email`
--

INSERT INTO `faculty_email` (`id`, `fmail`, `password`, `fname`) VALUES
(1, 'gjagadish.cse@anits.edu.in', 'Anits@123', 'Dr.G.JAGADISH'),
(2, 'lakshmi.cse@anits.edu.in', 'Anits@123', 'S.V.S.S.LAKSHMI'),
(3, 'priyanka.cse@anits.edu.in', 'Anits@123', 'S S N L PRIYANKA'),
(4, 'bosubabu.cse@anits.edu.in', 'Anits@123', 'S BOSE BABU'),
(5, 'pkrishna.cse@anits.edu.in', 'Anits@123', 'P KRISHNAJANEYULU'),
(6, 'yogeshbavana.tnp@anits.edu.in', 'Anits@123', 'MR.B YOGESH'),
(7, 'raffee.tnp@anits.edu.in', 'Anits@123', 'MR.RAFFEE SHAIK'),
(8, 'lokeswari.cse@anits.edu.in', 'Anits@123', 'N LOKESWARI'),
(9, 'sratankumar.cse@anits.edu.in', 'Anits@123', 'S RATAN KUMAR'),
(10, 'pranitha.cse@anits.edu.in', 'Anits@123', 'G PRANITHA'),
(11, 'sivajyothi.cse@anits.edu.in', 'Anits@123', 'B SIVA JYOTHI'),
(12, 'mahesh.cse@anits.edu.in', 'Anits@123', 'B MAHESH'),
(13, 'gvgayathri.cse@anits.edu.in', 'Anits@123', 'G V GAYATHRI'),
(14, 'rupeshkumar.cse@anits.edu.in', 'Anits@123', 'CH RUPESH KUMAR'),
(15, 'kchandrasekhar.cse@anits.edu.in', 'Anits@123', 'K CHANDRA SEKHAR');

-- --------------------------------------------------------

--
-- Table structure for table `iii_cse_a`
--

CREATE TABLE `iii_cse_a` (
  `id` int(10) NOT NULL,
  `day` varchar(20) NOT NULL,
  `p1` varchar(20) NOT NULL,
  `p2` varchar(20) NOT NULL,
  `p3` varchar(20) NOT NULL,
  `p4` varchar(20) NOT NULL,
  `p5` varchar(20) NOT NULL,
  `p6` varchar(20) NOT NULL,
  `p7` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iii_cse_a`
--

INSERT INTO `iii_cse_a` (`id`, `day`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`) VALUES
(1, 'Monday', 'CD', 'WT', 'SE', 'ADS', 'SE/OST Lab', 'SE/OST Lab', 'SE/OST Lab'),
(2, 'Tuesday', 'WT', 'CA', 'CD', 'SE', 'ADS', 'CHOURS', 'SPORTS'),
(3, 'Wednesday', 'ADS', 'CA', 'WT', 'CD', 'SE', 'CHOURS', 'LIBRARY'),
(4, 'Thursday', 'SE', 'ADS', 'CA', 'CD', 'WT', 'VA', 'VA'),
(5, 'Friday', 'QA', 'QA', 'CA', 'WT', 'SE/OST Lab', 'SE/OST Lab', 'SE/OST Lab'),
(6, 'Saturday', 'CA', 'CD', 'SE', 'ADS', 'CP', 'CP', 'CP');

-- --------------------------------------------------------

--
-- Table structure for table `iii_cse_a_faculty`
--

CREATE TABLE `iii_cse_a_faculty` (
  `id` int(10) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iii_cse_a_faculty`
--

INSERT INTO `iii_cse_a_faculty` (`id`, `sname`, `fname`) VALUES
(1, 'CA', 'Dr.G.JAGADISH'),
(2, 'CD', 'S S N L PRIYANKA'),
(3, 'SE', 'S.V.S.S.LAKSHMI'),
(4, 'WT', 'S BOSE BABU'),
(5, 'ADS', 'P KRISHNAJANEYULU'),
(6, 'QA', 'MR.RAFFEE SHAIK'),
(7, 'VA', 'MR.B YOGESH '),
(8, 'SE/OST Lab', 'S BOSE BABU'),
(9, 'SE/OST Lab', 'S.V.S.S.LAKSHMI');

-- --------------------------------------------------------

--
-- Table structure for table `iii_cse_b`
--

CREATE TABLE `iii_cse_b` (
  `id` int(10) NOT NULL,
  `day` varchar(20) NOT NULL,
  `p1` varchar(20) NOT NULL,
  `p2` varchar(20) NOT NULL,
  `p3` varchar(20) NOT NULL,
  `p4` varchar(20) NOT NULL,
  `p5` varchar(20) NOT NULL,
  `p6` varchar(20) NOT NULL,
  `p7` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iii_cse_b`
--

INSERT INTO `iii_cse_b` (`id`, `day`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`) VALUES
(1, 'Monday', 'CA', 'SE', 'ADS', 'CD', 'WT', 'CHOURS', 'SPORTS'),
(2, 'Tuesday', 'ADS', 'CD', 'SE', 'CA', 'SE/OST Lab', 'SE/OST Lab', 'SE/OST Lab'),
(3, 'Wednesday', 'CD', 'CA', 'SE', 'WT', 'ADS', 'VA', 'VA'),
(4, 'Thursday', 'WT', 'CD', 'ADS', 'CA', 'SE', 'CHOURS', 'LIBRARY'),
(5, 'Friday', 'SE', 'WT', 'CA', 'CD', 'ADS', 'QA', 'QA'),
(6, 'Saturday', 'WT', 'SE/OST Lab', 'SE/OST Lab', 'SE/OST Lab', 'CP', 'CP', 'CP');

-- --------------------------------------------------------

--
-- Table structure for table `iii_cse_b_faculty`
--

CREATE TABLE `iii_cse_b_faculty` (
  `id` int(10) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iii_cse_b_faculty`
--

INSERT INTO `iii_cse_b_faculty` (`id`, `sname`, `fname`) VALUES
(1, 'CD', 'N LOKESWARI'),
(2, 'SE', 'S RATAN KUMAR'),
(3, 'WT', 'G PRANITHA'),
(4, 'CA', 'B SIVA JYOTHI'),
(5, 'ADS', 'B MAHESH'),
(6, 'SE/OST Lab', 'G PRANITHA'),
(7, 'SE/OST Lab', 'S RATAN KUMAR'),
(8, 'QA', 'MR.RAFFEE SHAIK '),
(9, 'VA', 'MR.B YOGESH');

-- --------------------------------------------------------

--
-- Table structure for table `iii_cse_c`
--

CREATE TABLE `iii_cse_c` (
  `id` int(10) NOT NULL,
  `day` varchar(20) NOT NULL,
  `p1` varchar(20) NOT NULL,
  `p2` varchar(20) NOT NULL,
  `p3` varchar(20) NOT NULL,
  `p4` varchar(20) NOT NULL,
  `p5` varchar(20) NOT NULL,
  `p6` varchar(20) NOT NULL,
  `p7` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iii_cse_c`
--

INSERT INTO `iii_cse_c` (`id`, `day`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`) VALUES
(1, 'Monday', 'CD', 'SE', 'ADS', 'WT', 'CA', 'CHOURS', 'LIBRARY'),
(2, 'Tuesday', 'WT', 'CA', 'SE', 'CD', 'ADS', 'CHOURS', 'SPORTS'),
(3, 'Wednesday', 'ADS', 'CD', 'VA', 'SE', 'WT', 'QA', 'QA'),
(4, 'Thursday', 'CA', 'ADS', 'WT', 'CD', 'SE/OST Lab', 'SE/OST Lab', 'SE/OST Lab'),
(5, 'Friday', 'CA', 'SE/OST Lab', 'SE/OST Lab', 'SE/OST Lab', 'SE', 'ADS', 'WT'),
(6, 'Saturday', 'VA', 'VA', 'SE', 'CD', 'CP', 'CP', 'CP');

-- --------------------------------------------------------

--
-- Table structure for table `iii_cse_c_faculty`
--

CREATE TABLE `iii_cse_c_faculty` (
  `id` int(10) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iii_cse_c_faculty`
--

INSERT INTO `iii_cse_c_faculty` (`id`, `sname`, `fname`) VALUES
(1, 'CD', 'G V GAYATHRI'),
(2, 'SE', 'P KRISHNANJANEYULU'),
(3, 'WT', 'S S N L PRIYANKA'),
(4, 'CA', 'CH RUPESH KUMAR'),
(5, 'ADS', 'K CHANDRA SEKHAR'),
(6, 'SE/OST Lab', 'S S N L PRIYANKA'),
(7, 'SE/OST Lab', 'P KRISHNANJANEYULU'),
(8, 'QA', 'MR.RAFFEE SHAIK'),
(9, 'VA', 'MR.B YOGESH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_email`
--
ALTER TABLE `faculty_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iii_cse_a`
--
ALTER TABLE `iii_cse_a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iii_cse_a_faculty`
--
ALTER TABLE `iii_cse_a_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iii_cse_b`
--
ALTER TABLE `iii_cse_b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iii_cse_b_faculty`
--
ALTER TABLE `iii_cse_b_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iii_cse_c`
--
ALTER TABLE `iii_cse_c`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iii_cse_c_faculty`
--
ALTER TABLE `iii_cse_c_faculty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_email`
--
ALTER TABLE `faculty_email`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `iii_cse_a`
--
ALTER TABLE `iii_cse_a`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `iii_cse_a_faculty`
--
ALTER TABLE `iii_cse_a_faculty`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `iii_cse_b`
--
ALTER TABLE `iii_cse_b`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `iii_cse_b_faculty`
--
ALTER TABLE `iii_cse_b_faculty`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `iii_cse_c`
--
ALTER TABLE `iii_cse_c`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `iii_cse_c_faculty`
--
ALTER TABLE `iii_cse_c_faculty`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
