-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 08:20 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `campuses_tb`
--

CREATE TABLE `campuses_tb` (
  `campus_id` int(255) NOT NULL,
  `campus_name` varchar(255) NOT NULL,
  `campus_director` varchar(255) NOT NULL,
  `ceit_dean` varchar(255) NOT NULL,
  `cas_dean` varchar(255) NOT NULL,
  `cte_dean` varchar(255) NOT NULL,
  `cot_dean` varchar(255) NOT NULL,
  `archive` int(1) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campuses_tb`
--

INSERT INTO `campuses_tb` (`campus_id`, `campus_name`, `campus_director`, `ceit_dean`, `cas_dean`, `cte_dean`, `cot_dean`, `archive`, `create_at`) VALUES
(3, 'surigao', 'Ronita taling-ting', 'Lorrin Alvah', 'Symeon Stanford', 'Keiran Vere', 'Bradley Trym', 0, '2022-11-17 16:06:40'),
(4, 'malimono', 'Caedmon Lauren', 'Tycho Anath', 'Cecelia Bonnie', 'Alexa Rose', 'Burke Kainan', 0, '2022-11-17 16:11:53'),
(5, 'DEl carmen', 'Helias Cirino', 'Kelan Headley', 'Morgan Zelma', 'Royalty Teal', 'Delroy Trey', 1, '2022-11-18 09:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `document_tb`
--

CREATE TABLE `document_tb` (
  `document_id` int(255) NOT NULL,
  `campus_id` int(255) NOT NULL,
  `faculty_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `authors` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `issue_date` date NOT NULL,
  `abstract` text NOT NULL,
  `archive` int(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_tb`
--

CREATE TABLE `faculty_tb` (
  `faculty_id` int(255) NOT NULL,
  `campus_id` int(255) NOT NULL,
  `department` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `thesis_sub` varchar(255) NOT NULL,
  `archive` int(1) NOT NULL,
  `created_at` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_tb`
--

INSERT INTO `faculty_tb` (`faculty_id`, `campus_id`, `department`, `name`, `birth_date`, `address`, `contact_no`, `position`, `faculty_name`, `thesis_sub`, `archive`, `created_at`) VALUES
(1, 3, 'ceit', 'Petronius Ireneus', '2012-10-17', 'test address', '09341241', 'instructor I', 'BSCS', '0', 0, '2022-11-18 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campuses_tb`
--
ALTER TABLE `campuses_tb`
  ADD PRIMARY KEY (`campus_id`);

--
-- Indexes for table `document_tb`
--
ALTER TABLE `document_tb`
  ADD PRIMARY KEY (`document_id`),
  ADD KEY `campus_id` (`campus_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `faculty_tb`
--
ALTER TABLE `faculty_tb`
  ADD PRIMARY KEY (`faculty_id`),
  ADD KEY `campus_id` (`campus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campuses_tb`
--
ALTER TABLE `campuses_tb`
  MODIFY `campus_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `document_tb`
--
ALTER TABLE `document_tb`
  MODIFY `document_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty_tb`
--
ALTER TABLE `faculty_tb`
  MODIFY `faculty_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `document_tb`
--
ALTER TABLE `document_tb`
  ADD CONSTRAINT `document_tb_ibfk_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculty_tb` (`faculty_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
