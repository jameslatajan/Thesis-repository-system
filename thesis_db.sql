-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 07:49 AM
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
(33, 'Surigao City ', 'Ronita E. Talingting', 'Robert R. Bacarro', 'Louida P. Patac', 'Carmelin P. Mosa', 'Marilou B. Carnicer', 0, '2022-11-29 08:56:35'),
(34, 'Del Carmen ', 'Romy Jun A. Sunico ', 'None', 'None', 'None', 'None', 0, '2022-11-29 11:24:42'),
(35, 'Malimono ', 'None', 'None', 'None', 'None', 'None', 0, '2022-11-29 11:25:15'),
(36, 'Mainit', 'None', 'None', 'None', 'None', 'None', 0, '2022-11-29 11:25:46');

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
(51, 'Surigao City ', 'cas', 'Macabodbod, Jonathan C.', 'Male', '1987-10-21', 'None', 'None', 'Associate Professor IV', 'None', '', 0, '2022-11-29 10:47:41.195471'),
(52, 'Surigao City ', 'cas', 'Madelo, Cristine P.', 'Female', '1990-04-08', 'None', 'None', 'Assistant Professor IV', 'None', '', 0, '2022-11-29 10:51:17.498312'),
(53, 'Surigao City ', 'cas', 'Magno, Perlita S.', 'Female', '1962-09-09', 'None', 'None', 'Assistant Professor IV Focal Person, NCIP', 'None', '', 0, '2022-11-29 10:53:19.705486'),
(54, 'Surigao City ', 'cas', 'Miranda, Jonas Robert L.', 'Male', '1983-03-29', 'None', 'None', 'Professor III In-charge, Alumni Affairs', 'None', '', 0, '2022-11-29 10:55:43.383273'),
(55, 'Surigao City ', 'cas', 'Nemenzo, Alnie E.', 'Female', '1979-12-29', 'None', 'None', 'Associate Professor V', 'None', '', 0, '2022-11-29 10:57:39.552551'),
(56, 'Surigao City ', 'cas', 'Ngilangil, Kristopher M.', 'Male', '1980-07-26', 'None', 'None', 'Assistant Professor II Planning Officer', 'None', '', 0, '2022-11-29 11:03:35.690894'),
(57, 'Surigao City ', 'cas', 'Odtojan, Medielyn M.', 'Male', '1972-09-07', 'None', 'None', 'Instructor I', 'None', '', 0, '2022-11-29 11:04:51.833365'),
(58, 'Surigao City ', 'cas', 'Osorio, Ricky T.', 'Male', '1986-11-29', 'None', 'None', 'Assistant Professor III Science Laboratory In-charge', 'None', '', 0, '2022-11-29 11:05:54.493236'),
(59, 'Surigao City ', 'cas', 'Oxtero, Irish A.', 'Female', '1989-05-22', 'None', 'None', 'Assistant Professor I    ', 'None', '', 0, '2022-11-29 11:06:51.308199'),
(60, 'Surigao City ', 'cas', 'Panganduyon, Michelle T.', 'Female', '1994-08-12', 'None', 'None', 'Assistant Professor III', 'None', '', 0, '2022-11-29 11:07:54.351068'),
(61, 'Surigao City ', 'cas', 'Paredes, Judel D.', 'Male', '1969-10-20', 'None', 'None', 'Assistant Professor I Managing Editor (Journal Manager)', 'None', '', 0, '2022-11-29 11:08:52.432057'),
(62, 'Surigao City ', 'cas', 'Patac, Louida P.', 'Female', '1986-10-24', 'None', 'None', 'Professor IV Dean, CAS', 'None', '', 0, '2022-11-29 11:10:50.174849'),
(63, 'Surigao City ', 'cas', 'Paymalan, Irmalyn B.', 'Female', '1986-04-23', 'None', 'None', 'Assistant Professor IV', 'None', '', 0, '2022-11-29 11:11:55.773101'),
(64, 'Surigao City ', 'cas', 'Plaza, Alvie Elma C.', 'Female', '1979-07-31', 'None', 'None', 'Instructor I Extension Director', 'None', '', 0, '2022-11-29 11:13:06.767718'),
(65, 'Surigao City ', 'cas', 'Retita, Princess Grace A.', 'Female', '1991-11-23', 'None', 'None', 'Assistant Professor I', 'None', '', 0, '2022-11-29 11:14:19.502673'),
(66, 'Surigao City ', 'cas', 'Ruaya, Randel B.', 'Male', '1969-06-11', 'None', 'None', 'Instructor I Dance Troupe In-charge', 'None', '', 0, '2022-11-29 11:15:42.547087'),
(67, 'Surigao City ', 'cas', 'Sinaca, Matt B.', 'Male', '1979-06-03', 'None', 'None', 'Assistant Professor IV', 'None', '', 0, '2022-11-29 11:16:48.181536'),
(68, 'Surigao City ', 'cas', 'Sulima, Florencia T.', 'Female', '1972-07-15', 'None', 'None', 'Assistant Professor II', 'None', '', 0, '2022-11-29 11:17:39.829505'),
(69, 'Surigao City ', 'cas', 'Velarde, Vanissa E.', 'Female', '1986-08-19', 'None', 'None', 'Assistant Professor IV      ', 'None', '', 0, '2022-11-29 11:18:43.349941'),
(70, 'Surigao City ', 'cas', 'Yangson, Catherine L.', 'Female', '1972-04-04', 'None', 'None', 'Assistant Professor II    ', 'None', '', 0, '2022-11-29 11:19:56.318570'),
(71, 'Surigao City ', 'cte', 'Adlaon, Mauricio S.', 'Male', '1969-11-20', 'None', 'None', 'Professor I VP - RDE Director, Planning Office', 'None', '', 0, '2022-11-29 11:30:50.844291'),
(72, 'Surigao City ', 'cte', 'Eviota, Manny P.', 'Male', '1985-10-17', 'None', 'None', 'Assistant Professor I    ', 'None', '', 0, '2022-11-29 11:31:44.355791'),
(73, 'Surigao City ', 'ceit', 'Bacarro, Robert R.', 'Male', '1960-09-19', 'None', 'None', 'Associate Professor IV Dean, CEIT', 'None', '', 0, '2022-11-29 11:32:28.315663'),
(74, 'Surigao City ', 'ceit', 'Francisco, Virnille C.', 'Female', '1976-12-24', 'None', 'None', 'Associate Professor III', 'None', '', 0, '2022-11-29 11:33:22.363919'),
(75, 'Surigao City ', 'ceit', 'Gallera, Jovie M.', 'Female', '1988-02-08', 'None', 'None', 'Assistant Professor IV', 'None', '', 0, '2022-11-29 11:34:09.307902'),
(76, 'Surigao City ', 'ceit', 'Cagas, Unife O.', 'Female', '1972-01-15', 'None', 'None', 'Professor IV', 'None', '', 0, '2022-11-29 11:35:02.630286'),
(77, 'Surigao City ', 'ceit', 'Cabañero, Ralph Aran C.', 'Male', '1986-08-11', 'None', 'None', 'Instructor I Temporary Programmer (ICT Office) Web Administrator', 'None', '', 0, '2022-11-29 11:36:01.707096'),
(78, 'Surigao City ', 'ceit', 'Dela Cerna, Monalee A.', 'Female', '1971-10-15', 'None', 'None', 'Professor II Program Chair', 'None', '', 0, '2022-11-29 11:36:58.064028'),
(79, 'Surigao City ', 'ceit', 'Fernandez, Jessica Rose E.', 'Female', '1985-11-11', 'None', 'None', 'Assistant Professor IV Assistant Dean, CEIT ISO Focal Person', 'None', '', 0, '2022-11-29 11:37:55.817879'),
(80, 'Surigao City ', 'cot', 'Carnicer, Marilou B.', 'Female', '1977-11-29', 'None', 'None', 'Associate Professor IV Dean, COT', 'None', '', 0, '2022-11-29 11:45:38.919677'),
(81, 'Surigao City ', 'cte', 'Alipao, Lovelito G.', 'Male', '1982-03-08', 'None', 'None', 'Assistant Professor III', 'None', '', 0, '2022-11-29 13:16:17.147918'),
(83, 'Surigao City ', 'cte', 'Estoque, Merlyn L.', 'Female', '1969-06-11', 'None', 'None', 'Assistant Professor I    ', 'None', '', 0, '2022-11-29 14:13:33.160967'),
(84, 'Surigao City ', 'ceit', 'Toledo, Teresita L.', 'Female', '1967-06-30', 'None', 'None', 'Associate Professor IV', 'None', '', 0, '2022-11-29 14:16:05.239897'),
(85, 'Surigao City ', 'cte', 'Mosa, Carmelin P.', 'Female', '1984-03-04', 'None', 'None', 'Associate Professor IV CTE - Dean', 'None', '', 0, '2022-11-29 14:21:40.369606'),
(86, 'Surigao City ', 'cte', 'Caba, Ailyn B.', 'Female', '1980-01-11', 'None', 'None', 'Associate Professor II', 'None', '', 0, '2022-11-29 14:26:26.446987'),
(87, 'Surigao City ', 'cte', 'Tanguihan, Lucille G.', 'Female', '1974-12-29', 'None', 'None', 'Professor III CTE Accreditation Coordinator', 'None', '', 0, '2022-11-29 14:27:44.149472'),
(88, 'Surigao City ', 'cte', 'Delito, Eleanore Mitsu S.', 'Female', '1971-12-27', 'None', 'None', 'Associate Professor II Director, Sports & Wellness, Culture & Arts Program Chair, BPED', 'None', '', 0, '2022-11-29 14:29:19.260943'),
(89, 'Surigao City ', 'cte', 'Vasquez, Ma. Crisanta S.', 'Female', '1983-02-03', 'None', 'None', 'Assistant Professor III Program Chair, BTVTED', 'None', '', 0, '2022-11-29 14:30:43.536426'),
(90, 'Surigao City ', 'cte', 'Sebag', 'Female', '1986-08-12', 'None', 'None', 'Associate Professor I Director, Special Programs', 'None', '', 0, '2022-11-29 14:32:17.452604'),
(91, 'Surigao City ', 'cte', 'Maturan Jocelyn T.', 'Female', '1972-11-20', 'None', 'None', 'Assistant Professor III Coordinator, Culture and Arts', 'None', '', 0, '2022-11-29 14:34:23.898960');

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
  MODIFY `campus_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `faculty_tb`
--
ALTER TABLE `faculty_tb`
  MODIFY `faculty_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `files_tb`
--
ALTER TABLE `files_tb`
  MODIFY `file_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
