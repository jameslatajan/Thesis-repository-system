-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 03:49 AM
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
(31, 'test', 'test', 'test', 'test', 'test', 'test', 1, '2022-11-29 08:08:08'),
(32, 'test', 'test', 'test', 'test', 'test', 'test', 1, '2022-11-29 08:29:08'),
(33, 'Surigao City ', 'Ronita E. Talingting', 'Robert R. Bacarro', 'Louida P. Patac', 'Carmelin P. Mosa', 'Marilou B. Carnicer', 0, '2022-11-29 08:56:35');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_tb`
--

CREATE TABLE `faculty_tb` (
  `faculty_id` int(255) NOT NULL,
  `campus_name` text NOT NULL,
  `department` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sex` varchar(10) NOT NULL,
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

INSERT INTO `faculty_tb` (`faculty_id`, `campus_name`, `department`, `name`, `sex`, `birth_date`, `address`, `contact_no`, `position`, `faculty_name`, `thesis_sub`, `archive`, `created_at`) VALUES
(33, 'test', 'ceit', 'asdfasdf', '', '2022-11-17', 'adfasdf', 'sadfasdf', 'asdfasf', 'asdfasdf', '', 1, '2022-11-29 08:29:20.628754'),
(35, 'Surigao City ', 'ceit', 'test123', 'Male', '2022-06-29', 'test', 'test', 'test', 'TEST', '', 1, '2022-11-29 09:11:14.984828'),
(36, 'Surigao City ', 'ceit', 'test', 'Male', '2022-11-09', 'test', 'test', 'test', 'test', '', 1, '2022-11-29 09:20:57.385296'),
(37, 'Surigao City ', 'cas', 'Arcaya, Rosemarie C.', 'Female', '1981-07-27', 'None', 'None', 'Associate Professor IV HRMO', 'None', '', 0, '2022-11-29 10:06:14.304152'),
(38, 'Surigao City ', 'cas', 'Babas, Rhea Mae C.', 'Female', '1998-07-21', 'None', 'None', 'Assistant Professor II', 'None', '', 0, '2022-11-29 10:07:59.193083'),
(39, 'Surigao City ', 'cas', 'Bertulfo, Roselle  E.', 'Female', '1977-12-18', 'None', 'None', 'Instructor I SFAU Focal Person', 'None', '', 0, '2022-11-29 10:10:03.673869'),
(40, 'Surigao City ', 'cas', 'Buba, Ruel T.', 'Male', '1981-08-27', 'None', 'None', 'Associate Professor I Research Director', 'None', '', 0, '2022-11-29 10:16:10.413626'),
(41, 'Surigao City ', 'cas', 'Buenaflor, Gheleene S.', 'Female', '1980-09-11', 'None', 'None', 'Instructor 1 (Temporary)', 'None', '', 0, '2022-11-29 10:17:38.001465'),
(42, 'Surigao City ', 'cas', 'Bustamante, Prudence Peace V.', 'Male', '1990-06-30', 'None', 'None', 'Instructor III', 'None', '', 0, '2022-11-29 10:26:10.746158'),
(43, 'Surigao City ', 'cas', 'Caadan, Julius G.', 'Male', '1974-05-17', 'None', 'None', 'Associate Professor V  ', 'None', '', 0, '2022-11-29 10:27:08.962979'),
(44, 'Surigao City ', 'cas', 'Cuadrado, Jerry T.', 'Male', '1990-12-24', 'None', 'None', 'Assistant Professor II      ', 'None', '', 0, '2022-11-29 10:32:41.625530'),
(45, 'Surigao City ', 'cas', 'Diaz, Annabelle N.', 'Female', '1972-05-15', 'None', 'None', 'Associate Professor III  ', 'None', '', 0, '2022-11-29 10:35:14.251955'),
(46, 'Surigao City ', 'cas', 'Docoy, Lucihida M.', 'Female', '1963-10-25', 'None', 'None', 'Associate Professor V', 'None', '', 0, '2022-11-29 10:38:27.945130'),
(47, 'Surigao City ', 'cas', 'Española, Raymon P.', 'Male', '1990-07-25', 'None', 'None', 'Associate Professor IV', 'None', '', 0, '2022-11-29 10:42:05.068441'),
(48, 'Surigao City ', 'cas', 'Hugo, Rosalia L.', 'Female', '1967-06-19', 'None', 'None', 'Instructor I, Temporary Science Laboratory In-charge', 'None', '', 0, '2022-11-29 10:43:23.558454'),
(49, 'Surigao City ', 'cas', 'Leong, Grace H.', 'Female', '1967-11-08', 'None', 'None', 'Assistant Professor I    ', 'None', '', 0, '2022-11-29 10:44:40.790554'),
(50, 'Surigao City ', 'cas', 'Lloren, Merdolyn C.', 'Female', '1991-09-03', 'None', 'None', 'Assistant Professor III', 'None', '', 0, '2022-11-29 10:46:25.809773'),
(51, 'Surigao City ', 'cas', 'Macabodbod, Jonathan C.', 'Male', '1987-10-21', 'None', 'None', 'Associate Professor IV', 'None', '', 0, '2022-11-29 10:47:41.195471');

-- --------------------------------------------------------

--
-- Table structure for table `files_tb`
--

CREATE TABLE `files_tb` (
  `file_id` int(255) NOT NULL,
  `faculty_id` int(255) NOT NULL,
  `campus_name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `abstract` text NOT NULL,
  `issue_date` date NOT NULL,
  `file` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `archive` int(2) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campuses_tb`
--
ALTER TABLE `campuses_tb`
  ADD PRIMARY KEY (`campus_id`);

--
-- Indexes for table `faculty_tb`
--
ALTER TABLE `faculty_tb`
  ADD PRIMARY KEY (`faculty_id`),
  ADD KEY `campus_id` (`campus_name`(768));

--
-- Indexes for table `files_tb`
--
ALTER TABLE `files_tb`
  ADD PRIMARY KEY (`file_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campuses_tb`
--
ALTER TABLE `campuses_tb`
  MODIFY `campus_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `faculty_tb`
--
ALTER TABLE `faculty_tb`
  MODIFY `faculty_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `files_tb`
--
ALTER TABLE `files_tb`
  MODIFY `file_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
