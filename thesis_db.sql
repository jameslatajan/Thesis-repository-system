-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 02:29 AM
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
(38, 'Surigao City ', 'cas', 'Babas, Rhea Mae C.', 'Female', '1988-07-21', 'None', 'None', 'Assistant Professor II', 'None', '', 0, '2022-11-29 10:07:59.193083'),
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
(91, 'Surigao City ', 'cte', 'Maturan Jocelyn T.', 'Female', '1972-11-20', 'None', 'None', 'Assistant Professor III Coordinator, Culture and Arts', 'None', '', 0, '2022-11-29 14:34:23.898960'),
(92, 'Surigao City ', 'ceit', 'Dumaicos Trashy P.', 'Male', '1979-05-02', 'None', 'None', 'Instructor III', 'None', '', 0, '2022-12-05 14:24:10.893026'),
(93, 'Surigao City ', 'ceit', 'Aves, Federico A. Jr.', 'Male', '1973-01-02', 'None', 'None', 'Associate Professor I Program Chair, BSCE', 'BSCE', '', 0, '2022-12-05 14:26:21.786395'),
(94, 'Surigao City ', 'ceit', 'Teleron, Jerry', 'Male', '1971-10-15', 'None', 'None', 'Associate Professor IV Program Chair, BSCpE', 'BSCpE', '', 0, '2022-12-05 14:28:23.125873'),
(95, 'Surigao City ', 'ceit', 'Galila, Ghandi B.', 'Male', '1991-03-31', 'None', 'None', 'Instructor I Temporary Programmer (ICT Office)', 'None', '', 0, '2022-12-05 14:39:03.441267'),
(96, 'Surigao City ', 'ceit', 'Ruaya, Perfecto Jr. R.', 'Male', '1973-03-12', 'None', 'None', 'Associate Professor III Network Administrator', 'None', '', 0, '2022-12-05 14:40:36.262211'),
(97, 'Surigao City ', 'ceit', 'Reyna, Ritchie A.', 'Female', '1973-10-26', 'None', 'None', 'Associate Professor V In-charge EDP/MIS System Analyst', 'None', '', 0, '2022-12-05 14:42:09.398108'),
(98, 'Surigao City ', 'ceit', 'Madelo, Aurea M.', 'Female', '1969-03-11', 'None', 'None', 'Associate Professor IV', 'None', '', 0, '2022-12-05 14:43:13.177800'),
(99, 'Surigao City ', 'ceit', 'Pascua, Gracechell M.', 'Female', '1990-03-06', 'None', 'None', 'Assistant Professor II In-charge, GAD & PWD', 'None', '', 0, '2022-12-05 14:45:33.371207'),
(100, 'Surigao City ', 'ceit', 'Delosa, Conrado Jr. B.', 'Male', '1986-05-16', 'None', 'None', 'Instructor I', 'None', '', 0, '2022-12-05 14:46:51.768077'),
(101, 'Surigao City ', 'ceit', ' ALMA CHRISTIE  C.  REYNA', 'Female', '1976-04-15', 'None', 'None', 'Associate Professor II Program Chair', 'None', '', 0, '2022-12-05 14:48:40.406947'),
(102, 'Surigao City ', 'ceit', 'Borja, Lucilyn C.', 'Female', '1972-07-28', 'None', 'None', 'Assistant Professor III', 'None', '', 0, '2022-12-05 14:49:56.953302'),
(103, 'Surigao City ', 'ceit', 'Morite, Analyn S.', 'Female', '1973-12-28', 'None', 'None', 'Professor II', 'None', '', 0, '2022-12-05 14:51:23.388491'),
(104, 'Surigao City ', 'ceit', 'Ylaya, Vrian Jay V.', 'Male', '1984-07-23', 'None', 'None', 'Associate Professor III Program Chair, BSECE', 'None', '', 0, '2022-12-05 14:53:02.467654'),
(105, 'Surigao City ', 'ceit', 'Corvera, Levi A.', 'Male', '1967-05-23', 'None', 'None', 'Assistant Professor II', 'None', '', 0, '2022-12-05 14:53:52.172382'),
(106, 'Surigao City ', 'cte', 'Maghuyop, Alicia Z.', 'Female', '1963-12-22', 'None', 'None', 'Professor II HUB Adviser', 'None', '', 0, '2022-12-05 14:57:17.181616'),
(107, 'Surigao City ', 'cte', 'Causing, Pilmore M', 'Female', '1974-03-20', 'None', 'None', 'Associate Professor III', 'None', '', 0, '2022-12-05 14:58:48.083455'),
(108, 'Surigao City ', 'cte', 'Patulin, Elvis P.', 'Male', '1974-09-20', 'None', 'None', 'Professor VI', 'None', '', 0, '2022-12-05 14:59:40.481614'),
(109, 'Surigao City ', 'cte', 'Lumintac, Maria Tavita Q.', 'Female', '1967-12-25', 'None', 'None', 'Professor VI', 'None', '', 0, '2022-12-05 15:00:36.365703'),
(110, 'Surigao City ', 'cte', 'Sulima, Joewaren R.', 'Female', '1974-03-20', 'None', 'None', 'Associate Professor III', 'None', '', 0, '2022-12-05 15:02:39.957374'),
(111, 'Surigao City ', 'cte', 'Bayang, Eliza E.', 'Female', '1971-06-25', 'None', 'None', 'Associate Professor V  SWK', 'None', '', 0, '2022-12-05 15:04:01.884608'),
(112, 'Surigao City ', 'cte', 'Degamon, Louella S.', 'Female', '1982-06-26', 'None', 'None', 'Assistant Professor III Director, International Affairs Office', 'None', '', 0, '2022-12-05 15:05:05.900903'),
(113, 'Surigao City ', 'cot', 'Ferol, Kenneth Charls E.', 'Male', '1990-07-30', 'None', 'None', 'Assistant Professor III SSG Adviser', 'None', '', 0, '2022-12-05 15:07:49.383547'),
(114, 'Surigao City ', 'cot', 'Sulima, Rolan A.', 'Male', '1969-10-18', 'None', 'None', 'Associate Professor II', 'None', '', 0, '2022-12-05 15:16:26.352551'),
(115, 'Surigao City ', 'cot', 'Macalam, Rhoda May B.', 'Female', '1976-05-30', 'None', 'None', 'Assistant Professor IV Placement Coordinator', 'None', '', 0, '2022-12-05 15:17:48.805421'),
(116, 'Surigao City ', 'cot', 'Yujoco, Michael P.', 'Male', '1976-03-04', 'None', 'None', 'Associate Professor III   Program Chair, BEXET & BSIT Electronics Technology', 'None', '', 0, '2022-12-05 15:27:34.650858'),
(117, 'Surigao City ', 'cot', 'Tan, Julito O.', 'Male', '1977-07-25', 'None', 'None', 'Assistant Professor IV', 'None', '', 0, '2022-12-05 15:28:55.435453'),
(118, 'Surigao City ', 'cot', 'Urbiztondo, Archie P.', 'Male', '1979-08-11', 'None', 'None', 'Assistant Professor III', 'None', '', 0, '2022-12-05 15:37:30.189233'),
(119, 'Surigao City ', 'cot', 'Arcon, Cecilia E.', 'Female', '1965-06-11', 'None', 'None', 'Associate Professor V', 'None', '', 0, '2022-12-05 15:38:36.786647'),
(120, 'Surigao City ', 'cot', 'Dumaguit, James M.', 'Male', '1984-11-14', 'None', 'None', 'Associate Professor III', 'None', '', 0, '2022-12-05 15:39:36.112733'),
(121, 'Surigao City ', 'cot', 'Dumaguit, James M.', 'Male', '1984-11-14', 'None', 'None', 'Associate Professor III', 'None', '', 0, '2022-12-05 15:40:34.255902'),
(122, 'Surigao City ', 'cot', 'Morales, Edgardo C.', 'Male', '1968-01-11', 'None', 'None', 'Instructor III', 'None', '', 0, '2022-12-05 15:41:29.275759'),
(123, 'Surigao City ', 'cot', 'Tan, Renee C.', 'Male', '1964-07-19', 'None', 'None', 'Professor IV', 'None', '', 0, '2022-12-05 15:43:31.705319'),
(124, 'Surigao City ', 'cot', 'Sungahid, Amelito A.', 'Male', '1969-04-19', 'None', 'None', 'Assistant Professor I', 'None', '', 0, '2022-12-05 15:45:21.573874'),
(125, 'Surigao City ', 'cot', 'Sandrijo, Virgilio', 'Male', '1966-06-06', 'None', 'None', 'Instructor I', 'None', '', 0, '2022-12-05 15:46:36.520137'),
(126, 'Surigao City ', 'cot', 'Torio Glorina B.', 'Female', '1965-09-15', 'None', 'None', 'Assistant Professor I', 'None', '', 0, '2022-12-05 15:47:42.004435'),
(127, 'Surigao City ', 'cot', 'Chua, Ruel G.', 'Male', '1962-11-03', 'None', 'None', 'Associate Professor III  ', 'None', '', 0, '2022-12-05 15:49:16.131607'),
(128, 'Surigao City ', 'cot', 'Mag-usara, Arvin E.', 'Male', '1978-09-05', 'None', 'None', 'Associate Professor I TSG, In-charge', 'None', '', 0, '2022-12-05 15:50:26.969480'),
(129, 'Surigao City ', 'cot', 'Nala, Rene A.', 'Male', '1969-11-25', 'None', 'None', 'Professor II', 'None', '', 0, '2022-12-05 15:51:26.968199'),
(130, 'Surigao City ', 'cot', 'Sal, Jerlou B.', 'Male', '1984-12-22', 'None', 'None', 'Associate Professor I College Electrical Maintenance', 'None', '', 0, '2022-12-05 15:52:17.624543'),
(131, 'Surigao City ', 'cte', 'Patac, Adriano V.', 'Male', '1986-04-17', 'None', 'None', 'Professor I Director, ITSO', 'None', '', 0, '2022-12-07 09:18:43.043312'),
(132, 'Mainit', 'cte', 'Mozar, Juliet Ruth D.', 'Female', '1970-07-11', 'None', 'None', 'Associate Professor V  BTLED Program Chair  Sport Coordinator ISO Focal', 'None', '', 0, '2022-12-09 09:12:37.816236'),
(133, 'Mainit', 'cot', 'Masuhay, Edilmar P.', 'Male', '1972-08-31', 'None', 'None', 'Associate Professor V    ', 'None', '', 0, '2022-12-09 09:23:24.901033');

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
-- Dumping data for table `files_tb`
--

INSERT INTO `files_tb` (`file_id`, `faculty_id`, `campus_name`, `department`, `faculty_name`, `title`, `author`, `abstract`, `issue_date`, `file`, `type`, `archive`, `created_at`) VALUES
(55, 56, 'Surigao City ', 'cas', 'None', 'Hearing the Voices of Journalists in Surigao City, Mindanao, Philippines', 'Kristopher M. Ngilangil', 'The Philippine media presented itself as the vanguard of the Filipino people’s basic\r\nfreedoms, especially the freedom of speech and expression. However, as with any responsibility\r\nthat pertains to that freedom, the news media had its flaws that may result in persecution. This\r\nstudy was aimed at investigating journalists\' experiences in Surigao City on media\r\npersecutions. A qualitative research method was utilized where Colaizzi’s strategy for\r\nphenomenological data analysis was used to analyze the gathered data. The results showed 18\r\nthemes that emerged from the clusters such as responsible execution of duties and\r\nresponsibilities, coverage of important issues in the society, persecutions encountered through\r\nharassment, intimidation, censorship, reasons why journalists were persecuted, public officials\r\nas the common persecutors, reactions upon receiving the persecution, addressing and facing\r\nthe persecution. Therefore, there is a need to strengthen the safety and security of the journalist\r\nnot only in Surigao City but in the whole country in general.', '2022-03-01', '2c7c31d54b62fbfc3cadceacdaa72ba0.pdf', '', 0, '2022-12-05'),
(56, 56, 'Surigao City ', 'cas', 'None', 'Cold-Case on Serial Killings in F.H. Batacan’s Smaller and Smaller Circles', 'Kristopher M. Ngilangil', 'A killer is someone who murders at least two people in separate events that occur at different\r\ntimes. Pointing the killers in any gruesome killing may take a long time especially if the investigators\r\nconducting the investigation are not doing well. Even up to this time there are unsolved killings in the\r\ncountry and justice is elusive to serve or yet too long to achieve. This study analyzes the search for justice\r\non the serial killing of the “novel, Smaller and Smaller Circles by F.H Batacan.” Specifically, it\r\ninvestigates the elements of characters, symbols, and conflict. It uses Qualitative Method. The findings\r\nrevealed that the attitude of the national investigators is thwarted with rivalry; identified symbols are\r\nmanifestations of how the gruesome killing happened: heart, face, genitals, and knife. The conflict is man\r\nvs man in which rivalry to get career advancement is also revealed. It is concluded that national\r\ngovernment investigators are inept to solve murder cases where the search for justice is too slow and\r\nelusive. A phenomenology study on lived experiences of the victim’s family shall further be ascertained in\r\norder to know their predicaments.', '2022-03-15', '00b35349512babc13c53eda5c4e21025.pdf', '', 0, '2022-12-05'),
(57, 40, 'Surigao City ', 'cas', 'None', 'Improved Vortex Channel for Whirlpool Generator for Harnessing Water Flow Energy from Irrigation', 'Ruel T. Buba', 'Irrigation is the primary water source in the Philippines\'\r\nrice fields. This water supply is limitless, and water flow can be\r\nexploited to convert energy into electricity. One of the options for\r\naltering the flow into energy was Pico and Mini-hydro. However, the\r\nunpredictability of water levels caused them to suffer from time to\r\ntime. To mitigate the limitations of the later technology, improved\r\nwater flow was used to generate a whirlpool using a vortex. This\r\nstudy utilized an eight-type propeller vortex instead of the\r\nconventional five propeller vortex. The findings are analyzed using a\r\ntwo-sample t-test. The H0 is that the discharge rate of the fivepropeller vortex generator is like that of the eight-propeller propeller\r\nvortex generator. Because the solution p-values are 5.1, the H0 is\r\nrejected, implying that the two models provide different results. The\r\neight-type propeller whirlpool generator outperforms the five-design\r\npropeller whirlpool generator. This design is suitable for harnessing\r\nthe energy in the irrigation using a vortex channel Whirlpool\r\ngenerator to produce electricity', '2022-02-01', '007b609fe2e1c58d83a374823c9ebbd2.pdf', '', 0, '2022-12-05'),
(58, 72, 'Surigao City ', 'cte', 'None', 'Least Learned Competencies in Grade 9 Biology: Basis for Development of Strategic Intervention Material (SIM)', 'Manny P. Eviota , Lilia Z. Boyles', 'This study aimed to develop Strategic Intervention Materials (SIM) in Biology for\r\nGrade 9 students. Specifically, it ascertained the least learned competencies in Grade 9\r\nBiology. It also assessed the quality of the developed materials in terms of content, format,\r\npresentation and organization, and accuracy and up-to-datedness. The evaluation of the\r\nteachers and experts on the quality of the materials were compared. The quality of the\r\nmaterials with respect to the four aspects was also compared. This study used a developmental,\r\ndescriptive and inferential research designs. Data were gathered using a Likert-type\r\ninstrument from 19 science teachers and 5 experts. Data were analyzed using frequency count\r\nand percent for the least learned competencies, mean and standard deviation for the quality of\r\nSIM, Mann-Whitney U test for the difference between the evaluations of teachers and experts,\r\nand Friedman Test and Wilcoxon Post Hoc Test with Bonferroni Correction Alpha for the\r\ndifference on the quality of SIM among the four aspects. Results revealed that the developed\r\nSIM had six identified competencies in Grade 9 Biology class, the quality of the developed SIM\r\nis very satisfactory in terms of content, format, presentation and organization, and accuracy\r\nand up-to-datedness. There is no significant difference on the evaluations of teachers and\r\nexperts on the quality of the developed SIM. The quality of the aspects of SIM in terms of\r\ncontent, format, presentation and organization, and accuracy and up-to-datedness\r\nsignificantly differ with each other', '2022-03-01', '4e0d45b61801faadfbb0bed8dfae165f.pdf', '', 0, '2022-12-05'),
(59, 104, 'Surigao City ', 'ceit', 'None', 'Novel Rectenna Design for RF Harvesting', 'Vrian Jay V. Ylaya, Robert R. Bacarro', 'This paper presents a rectenna system that can harvest RF energy. The system features a differential microstrip antenna. The rectenna is integrated with an Adaptive Neuro-fuzzy inference system or an Adaptive Network-Based Fuzzy System. The implementation of an improved impedance matching circuit has shown great potential and can achieve a gain of 30dBi and a power output of 100uW. The design and implementation of the circuit are performed through simulation. The paper also describes a dual bandpass matching circuit that can improve the rectenna\'s working efficiency.', '2022-05-01', 'a4822af23d44b0b0c5d81316823fed70.doc', '', 0, '2022-12-07'),
(61, 94, 'Surigao City ', 'ceit', 'BSCpE', 'The Implementation of IoT-Based Android App Vegtable Health Check Using Image Processing(Certificate of Publication)', 'Teleron, Jerry I.', 'Certificate of Publication', '2022-05-01', 'c2beb5ee8e6a2264041b2f0eae8eea77.jpg', '', 0, '2022-12-07'),
(62, 94, 'Surigao City ', 'ceit', 'BSCpE', 'The Implementation of Distributed System Application on Periodic Attendance of the Faculty(Certificate of Publication)', 'Teleron, Jerry I.', 'Certificate of Publication', '2022-05-01', '95eb1a3f5b068476c8265351d1a64e3b.jpg', '', 0, '2022-12-07'),
(63, 94, 'Surigao City ', 'ceit', 'BSCpE', 'Design and Implementation of Sun Tracking Solar Panel Using Microcontroller', 'Teleron, Jerry I', ' This study is associated with using the Photovoltaic\r\nconversion panels attached to the fabricated solar tracker system.\r\nSolar cell efficiency is affected by temperature, maximum power\r\npoint tracking (MPPT), and energy conversion efficiency. One of the\r\nmost innovative solar panel improvements is to attach a solar tracker\r\nto the solar panel board. This system provides a panel to tilt a solar\r\npanel to follow the sun\'s position to improve solar energy collection.\r\nThis tracker system assures the optimization of electrical power\r\nconversion from solar energy. It is an experimental design based on\r\nthe Microcontroller that triggers the linear actuator when the panel\r\nreceives signals from the controller to tilt the solar panel according\r\nto the sun\'s movement in precisions. This research expected that it\r\nwould give an innovation for advocating solar energy and the\r\ntransitions of renewable energy to prevent the global warming of the\r\nenvironment', '2022-05-01', '5c4b8c2622371e1961fb744e1f02f284.pdf', '', 0, '2022-12-07'),
(64, 59, 'Surigao City ', 'cas', 'None', 'Implementation of Indigenous Peoples (IPEd) Program in Agusan del Sur: A Case Study', 'Irish A. Oxtero', ' The study aimed to know the implementation of the Indigenous Peoples Education\r\n(IPEd) Program and the support received by the IPEd implementing schools coming from the\r\ndifferent stakeholders. The researcher employed a qualitative research design using an\r\nexploratory case study. Interview guides were used during the interview of fifteen key\r\ninformants, and the data were analyzed using the thematic analysis of Braun & Clarke. The\r\nresults showed nine themes from the different clusters such as governance and management,\r\ncurriculum and instruction, teacher\'s development, facilities and management of resources, the\r\nrole of the culture bearers, parents\' support, culture bearer\'s support, support from the local\r\ngovernment units, and support from the other government agencies. It was found that the\r\nimplementation of the Indigenous Peoples (IPEd) Program is still in the process, and the\r\ndifferent stakeholders have a significant role in the program implementation. ', '2022-06-30', '16e9fd5c8ba87370903e1357ca0f6eac.pdf', '', 0, '2022-12-07'),
(65, 94, 'Surigao City ', 'ceit', 'BSCpE', 'Online QR Code Digital Contact and Quarantine Tracing Using Independent Software Vendor Oracle – Cloud Computing', 'Jerry I. Teleron , Aldwin B. Famador , Analyn S. Morite ,Cheryl M. Tarre , Althea R. Arenajo , Gregorio Z. Gamboa Jr.', ' While the cure has not yet been discovered, one way to prevent the spread of the virus is Contact Tracking. A\r\nsystematic Interaction Monitoring protocol must identify, assess, and manage people who are positive or exposed\r\nto the virus in order to break the chain of transmission and thus prevent continued transmission of the disease. The\r\ncurrent system is a manual data collection approach, where people who need to enter banks, malls, and government\r\noffices have to line up, waiting their turn to write their required personal data in the logbook. Of a security guard.\r\nThe researchers developed the system using Information Technology, various trends, QR codes, Cloud computing,\r\nData Analytics, smartphones, and Big Data. The QR code system eliminates long queues when entering\r\nestablishments. Using the assigned smartphone connected to the internet, the scanning officer only needs two (2) to\r\nfive (5) seconds to scan the QR code of the person entering the office or building. The scanned QR code will\r\nprovide the scanning officer with the necessary personal information and information related to the person’s\r\nexposure or non-exposure to the virus. All retrieved information will be sent to the cloud so that the command\r\ncenter can access the report at any time for possible contact tracking analysis of the known positives on COVID-19.\r\nAnyone violating quarantine will be identified — using the method used in the Rapid Application Development\r\nmodel. The researcher anchored each module as a guide during system development using Oracle’s front-end and\r\nback-end. The development tools used in scripting for forms and reports are native Oracle scripts, including Oracle\r\nplug-ins. The system has already tested its purpose and functionality for contact tracking and quarantine solutions.\r\nIt is already available using Oracle infra and Oracle platforms suitable for bringing BIG DATA into\r\nimplementation nationwide.', '2022-05-01', 'e6aa0d5659fae121dbf20c2c2c3eac41.pdf', '', 0, '2022-12-07'),
(66, 94, 'Surigao City ', 'ceit', 'BSCpE', 'Operations Research Design and Implementation of Pharmacy Management Information System', 'Teleron, Jerry I.', ' This Paper presented to the readers the implementation of\r\nOperations Research for Pharmacy Management Information System\r\n(PMIS) in the Pharmacy business to streamline such business\r\nmanagement to help the owners thrive without difficulty monitoring\r\ntheir business. The scope of the study covers Sales Inventory, Stocks\r\nInventory, Purchases (Orders, Receipts), Payroll, Accounting,\r\nFinancial Management, Sales Reports (Daily, Monthly, Yearly), and\r\nPharmacy prescription book (Senior Citizen, Persons with\r\nDisability). In addition, and above all, a built-in Point of Sale (POS)\r\nfor a single and multi-user environment. PMIS is a Windows-based\r\noperating system application that significantly assists the Pharmacy\r\nbusiness operations that automates the entire process that the owner\r\nis helpful because of the installed inventory and others. More\r\ncomplex fields in Pharmacy business operations.', '2022-05-01', '5092a8ddb924f32e526931690e0d687b.pdf', '', 0, '2022-12-07'),
(67, 59, 'Surigao City ', 'cas', 'None', 'Problems Encountered in the Implementation of Indigenous Peoples Education (IPEd) Program in Agusan del Sur: Basis for Proposed Intervention Program', 'Irish A. Oxtero', ' The study aimed to know the problems encountered by the implementers in\r\nimplementing the Indigenous Peoples Education (IPEd) Program. The researcher employed a\r\ndescriptive survey using a research-made questionnaire to gather the data from the\r\nimplementers of the IPEd Program. Frequency distribution, percentage, ranking, weighted\r\nmean with adjectival description, and t-test were used in the data analysis. Based on the study,\r\nmost implementers came from Bisaya and Cebuano groups with minimal training related to\r\nthe program. Most of the beneficiaries are males, a recipient of either RCCT or MCCT, with a\r\nmonthly income categorized in the poverty line. The family is dependent on the environment as\r\nfarmers. The implementing schools are classified as multi-grade, and additional facilities are\r\nneeded since the enrolment is increasing. The budget depends on the enrolment of learners;\r\nhowever, other stakeholders also help financially in the schools. There is no significant\r\ndifference between the problems encountered as perceived by the implementers at a 0.05 level\r\nof significance. The problems are more on the absence of culture-based learning materials,\r\nand teachers have no expertise in indigenizing the lesson. Hence, there is a need to address the\r\nvarious problems encountered by the implementers and may consider the proposed\r\nintervention program for the extensive implementation of the IPEd program.', '2022-05-01', 'c54bbc98129f8483d55a4f75d140962c.pdf', '', 0, '2022-12-07'),
(68, 131, 'Surigao City ', 'cte', 'None', 'Students’ understanding of a geometric theorem: A case of grade 9 problem posing', 'Adriano Villarosa Patac, Jr, Louida Penera Patac, Nicolas Ensomo Crispo, Jr', ' Teaching axiomatic representation of mathematical objects in all grades\r\ncan and should be done. The paper analyzes students\' understanding and\r\nhow they perceive theorems using problem posing. We looked at how\r\nEnglish-language learners create questions about four geometric theorems\r\nfrom a 9th-grade math textbook. The analysis looks at the question\'s\r\ndistinctiveness, its elements\' relationships, and sentence structure flaws.\r\nThese lines, angle, and triangle theorems were chosen to exemplify\r\nproblem scenarios when a theorem is conveyed in words but not explicitly\r\nsymbolized. The difficulty of posing mathematically relevant problems\r\nstems from the required process of simultaneously changing the theorem\r\nlanguage, home language, and formal mathematics language. In Van Hiele\'s\r\nmethodology, the pupils\' issues aren\'t classified as a formal or informal\r\ndeduction. Questions either deduce from a formal system or emphasize\r\ntheorems. Mastering the required representation registers can assist\r\nstudents in posing problems that reflect, at the very least, at the formal\r\ndeduction level. The absence of symbolic representation increases the\r\ndifficulty in posing original problems involving geometric theorems. As a\r\nresult, how problems are made, especially how they are written, shows\r\nhow well students understand math through problem-posing.', '2022-04-10', '972972c9b1b5deeda125220afeeeb8d3.pdf', '', 0, '2022-12-07'),
(69, 94, 'Surigao City ', 'ceit', 'BSCpE', 'The Implementation of Multiple 89c51 Microcontrollers through RS232C Serial Communication Interface', 'Teleron, Jerry I.', ' The paper presented the implementation of the RS232C\r\nserial communication interface to the intel 80c51 family\r\nmicrocontroller with circuit isolation of serial ports to avoid\r\ninterferences during data transmission. It also presented the multiple\r\nserial interfaces or distributed system interfaces with simple serial\r\ncommunication programming codes and circuit diagrams. Also, a\r\nVisual Basic.net codes for the receiver/transmitter of the Windows\r\nOperating in the host computer/server. Finally, all the circuit\r\ndiagrams presented were tested and functional, including program\r\ncodes.', '2022-05-01', '1ec9c47c5b2deb8abaa1541451250152.pdf', '', 0, '2022-12-07'),
(70, 94, 'Surigao City ', 'ceit', 'BSCpE', 'The Implementation of Point Number Code For Complex Survey Layout', 'Teleron, Jerry I, Aves, Federico A Jr', ' Using the advanced innovations of survey software to\r\nadminister land surveying is a powerful tool that the engineering\r\nindustry uses to gather data, especially regarding land development,\r\nplanning, and designing any establishments or structures. These\r\nsurvey software providers like Autocad or Autodesk, especially Civil\r\n3D and Land Desktop software, have survey solutions for all modes\r\nof land survey production. The Autodesk Civil 3D paves the way to\r\nenhance surveying to boost the usefulness of these innovations.\r\nDetermining only some factors, i.e., Point Number, Northing,\r\nEasting, Elevation, and Description (PNEZD), will help the\r\nsurveyors conduct any survey easier. However, there are many\r\ninstances wherein land surveying can be much more complex. And\r\nmany times, land surveyors or researchers find ways to address these\r\nconventional challenges by maneuvering to the latest technology of\r\nadvanced software and incorporating them into more advanced\r\nsurvey instruments, i.e., Real-Time Kinematic (RTK) controller. And\r\nupon these complex layouts, the rise of the need to survey less\r\nerroneous manners and more time-efficient ways can relatively be the\r\nanswer. This concept and advancement of Autodesk Civil 3D made\r\nPoint Identity possible. By configuring the factors of PNEZD into it\r\nand downloading it in an RTK device controller to have a fast steadystate of the survey, which can be a remedy to fasten land surveying,\r\nespecially in complex layouts.', '2022-05-01', 'def959fa8017a555a8b150a9271dde03.pdf', '', 0, '2022-12-07'),
(72, 44, 'Surigao City ', 'cas', 'None', 'Levels of Heavy Metals in the Water, Sediments, and Tissues of Golden Apple Snail (Pomacea canaliculata) from Lake Dakong Napo, Esperanza, Agusan del Sur, Philippines', 'Jerry Tioaquen Cuadrado , Marriane Joy Plaza Burlat , Johanna Louise Ugay Diola , Robertson Mari Barrera Cusap', ' This study was conducted in order to assess the level of heavy metals in the water, soil, and tissues\r\nof Pomacea canaliculata from Lake Dakong Napo, Esperanza, Philippines as well as identify the\r\nhistopathological alterations in the gonads and muscles of the snail. Heavy metals were detected using\r\nAtomic Absorption Spectrometry and slides for histological studies were prepared using histological\r\nroutine procedure. Results revealed that in sediments Cr (174.67±62 mg/L) and Ni (269.33±17.56 mg/L)\r\nwere above from the recommended safe limits of the international standards, US EPA (≤25) and FAO\r\n(≤50) while concentrations of Pb (16.35± 0.58 mg/L), Cd (5±1.42 mg/L), and Cr (1±0 mg/L) in water\r\nwere above from the recommended safe limits of the national standards, DAO (≤0.05; ≤0.01; ≤0.05).\r\nThese heavy metals were below the permissible limits in the gonads and muscles of P. canaliculata\r\nhowever, alterations in the tissues of the snail are evident suggesting that these heavy metals and other\r\nenvironmental stressors are negatively affecting the organisms inhabiting the lake.', '2022-07-20', '299a85e0752b51fe006afda09194b23c.pdf', '', 0, '2022-12-07'),
(73, 56, 'Surigao City ', 'cas', 'None', 'Tiktok on SNSU Students: Engagement and Influence', 'Kristopher M. Ngilangil', ' — TikTok is very popular among the young and has become for many a mode of free and creative\r\nself-expression. Many people use Tiktok, but most users are teens, and it has become a celebrity start-off. If\r\nTiktok uploads creative content and its viewers are entertained and earned many comments and reactions,\r\nthis study aimed to determine the level of influence and engagement of Tiktok on the students of Surigao del\r\nNorte State University (formerly Surigao State College of Technology). Specifically, it looked into the\r\nfrequency of the students viewing Tiktok. It deals also with the level of influence as to the content, quality,\r\nand music. And the level of engagement as to entertainment factor, viewer’s comment factor, and viewer’s\r\nreaction factor. This study used a descriptive research design. The 4\r\nth\r\n-year Bachelor of Arts in English\r\nLanguage students were the participants of the study. The data gathered was analyzed using the following\r\nstatistical tools: frequency count and percentage distribution, mean and standard deviation, and Pearson\r\nProduct Moment Correlation. Based on the results of the study, Tiktok was very influential to the SNSU\r\nstudents. It also revealed that Tiktok had a significant relationship with the students which means Tiktok was\r\ninfluential and engaging. It is recommended that guidelines on using social media, particularly the use of\r\nTiktok should be crafted and implemented through a school campaign spearheaded by the Student\r\nGovernment Council.', '2022-07-25', '5f3715044b7cc97f3eddaa875e1ee996.pdf', '', 0, '2022-12-07'),
(74, 48, 'Surigao City ', 'cas', 'None', 'Certificate of Appreciation', 'Rosalia L. Hugo', ' Bataan Peninsula State University in Partnership with Philippine Association of Agriculturist, INC. Central Luzon(Tamarind Chapter)', '2021-08-16', 'b0e58e19b3fab7dc8a2a998353a1f55f.jpg', '', 0, '2022-12-07'),
(75, 57, 'Surigao City ', 'cas', 'None', 'Acceptance Letter', 'Danilyn L. Odtojan', 'Acceptance Letter', '2021-08-09', '2c7ac770a7bb2dcfdd097bbc462ef772.jpg', '', 0, '2022-12-07'),
(76, 104, 'Surigao City ', 'ceit', 'None', 'Performance Analysis of Solar Powered Water Well Pump', 'Vrian Jay V. Ylaya , Ruel T. Buba', 'The Philippines is abundant in water. In remote areas,\r\nsources of water are from wells. The collection of water needs effort\r\nand is laborious. Mechanical pumps are available to collect water\r\nfrom the well automatically, but this is impossible in remote areas\r\ndeprived of electricity. This research addresses the later issue: water\r\npumps are powered with solar. The performance of the solar-powered\r\nwater well pump is analyzed from their series and parallel connections\r\nbased on the provided flow rate—data analysis using a two-tailed ttest implemented in Python. The Ho is that there is no significant\r\ndifference in the flow rate of series and parallel connections of the\r\nsolar-powered water well pump. The p-value solve is 1.346, which\r\nrejects the null hypothesis. Thus, there is a significant difference in the\r\nperformance of series and parallel connections of the solar-powered\r\nwater well pump. Efficiently, a parallel connection performed well in\r\nimplementing a solar-powered water well pump', '2022-01-01', '8bdd6203d0e30f92943b46ef226f10c2.pdf', '', 0, '2022-12-07'),
(78, 39, 'Surigao City ', 'cas', 'None', 'Certificate of Appreciation', 'Roselle E. Bertulfo, Yomeralyn Opelenia, Janice A. Suarez, Jerry T. Cuadrado', '2nd International Conference on Biodiversity and Climate Change 2021', '2021-09-23', '55d198e9f39649b2a357ef065104f438.jpg', '', 0, '2022-12-07'),
(79, 44, 'Surigao City ', 'cas', 'None', 'Certificate Of Recognition', 'Jerry T. Cuadrado', ' 2nd International Conference on Biodiversity and Climate Change 2021', '2021-09-23', 'fe8a87869537ed8bdb0001bb2b93582f.jpg', '', 0, '2022-12-07'),
(80, 57, 'Surigao City ', 'cas', 'None', 'Certificate Of Recognition', 'Medielyn M. Odtojan', ' 2nd International Conference on Biodiversity and Climate Change 2021', '2021-09-23', '8ca199aa392d77efc8aa8567fff0532a.jpg', '', 0, '2022-12-07'),
(81, 47, 'Surigao City ', 'cas', 'None', 'Certificate Of Recognition', 'Raymond P. Espanola', ' UCEC 2021', '2021-11-09', '35b9ff178411e8179e2b35d25d40965d.jpg', '', 0, '2022-12-07'),
(82, 57, 'Surigao City ', 'cas', 'None', 'Certificate Of Recognition', 'Medielyn M. Odtojan and Maycel C. Amarille', ' Philippines Network of Education and Environment', '2021-11-12', '585d652828eca8d49771b01dbc97bcf6.jpg', '', 0, '2022-12-07'),
(83, 47, 'Surigao City ', 'cas', 'None', 'Certificate of Appreciation', 'Raymond P. Espanola', ' 1st BASC International Research Conference', '2021-12-15', '015e70d0c94d76ef53072f06010d1544.jpg', '', 0, '2022-12-07'),
(84, 57, 'Surigao City ', 'cas', 'None', 'Letter', 'Medielyn M. Odtojan', ' None', '2021-11-22', '760aa40436381b36cbac421caf2fd18d.jpg', '', 0, '2022-12-07'),
(85, 94, 'Surigao City ', 'ceit', 'BSCpE', 'Certificate Of Recognition', 'Jerry Teleron', ' International Conference On Research Innovation and Investment', '2021-05-17', '1a4ff75aa7391259f80bd47105f10e30.jpg', '', 0, '2022-12-07'),
(86, 104, 'Surigao City ', 'ceit', 'None', 'Notification Of Acceptance', 'Vrian Jay V. Ylaya ', ' 2021 International Conference on Methodological Advances in Research', '2021-10-15', 'c7fdebbc50bc396d6ede96fcb7ec4bd5.jpg', '', 0, '2022-12-07'),
(87, 128, 'Surigao City ', 'cot', 'None', 'Notice of Acceptance', 'Arvin Mag-usara, Vrian Jay Ylana, Gregorio Gamboa Jr. and Jerlou Sal', ' 5th International Research Conference on Innovations in Engineering, Science and Technology', '2021-11-25', 'e90b4a07071d3fc8f8afac1cd77a8ef7.jpg', '', 0, '2022-12-07'),
(88, 71, 'Surigao City ', 'cte', 'None', 'Letter of Acceptance', 'Muricio S. Adlaon and Melicia P. Elandag', ' ICMATSD-21', '2021-11-22', '497dd91cbed681604715cb2749d6b56b.jpg', '', 0, '2022-12-07'),
(89, 71, 'Surigao City ', 'cte', 'None', 'Letter of Acceptance', 'Mauricio S. Adlaon and Jean Lucillie F. Espejon', ' ICMATSD-21 IFERP', '2021-11-22', '0a76a53e26e61c2ca961d8d8f6ec34db.jpg', '', 0, '2022-12-07'),
(90, 56, 'Surigao City ', 'cas', 'None', 'NOTIFICATION OF ACCEPTANCE', 'Kristopher M. Ngilangil', ' International Conference on Economics, Social Sciences, Education and Technology 2022\r\nGlobal Academia Network No. 9 Jalan Gapi 1D/18, Seksyen 1, Kenanga Sejati, Antara Gapi, 48200 Serendah, Selangor Malaysia', '2022-03-12', 'fc399a01cdeac8cb34b468c87dfdfb15.pdf', '', 0, '2022-12-07'),
(91, 47, 'Surigao City ', 'cas', 'None', '17th Education and Development Conference [EDC2022]', 'Raymon Espano', ' ‘Examining Gender and Urban/ Rural School Differences in\r\nEmpirically-Derived Achievement Profiles\'', '2022-05-07', '614d4e6bdbb0f678ef4f9263509e111d.pdf', '', 0, '2022-12-07'),
(92, 62, 'Surigao City ', 'cas', 'None', 'Narrative report', 'Louida Patac', ' Participating in the 17th Education and Development Conference (EDC2022)', '2021-04-05', '35f9becc47ee9fbae5094ceb6939f152.pdf', '', 0, '2022-12-07'),
(93, 56, 'Surigao City ', 'cas', 'None', 'NOTIFICATION OF PAPER ACCEPTANCE', 'Kristopher M. Ngilangil', ' Kuala Lumpur International Conference on Business, Innovation, Social Sciences and\r\nEducation 2022\r\nGlobal Academia Network No. 9 Jalan Gapi 1D/18, Seksyen 1, Kenanga Sejati, Antara Gapi, 48200 Serendah, Selangor Malaysia', '2022-04-26', 'f0b0967470606f30363499285b476770.pdf', '', 0, '2022-12-07'),
(95, 60, 'Surigao City ', 'cas', 'None', 'Mathematical Society of the Philippines', 'Michelle Panganduyon', ' Fist Announcement and Call for papers', '2022-06-04', '3fafda91fc491f945df6ab14673cc26a.pdf', '', 0, '2022-12-07'),
(96, 43, 'Surigao City ', 'cas', 'None', 'Mathematical Society of the Philippines', 'Julius Caadan ', ' First Announcement and Call for Papers', '2022-06-04', '4218edb663ad08fcbe063f2726c1b2ab.pdf', '', 0, '2022-12-07'),
(97, 41, 'Surigao City ', 'cas', 'None', 'Certificate of Presentation', 'Gheleene S. Buenaflor', ' 5th International Multidisciplinary Conference on Current Research Trends 2022', '2022-04-13', '347a7576f0bff1408c6cd2de1751772a.pdf', '', 0, '2022-12-07'),
(98, 57, 'Surigao City ', 'cas', 'None', 'Certificate of Presentation', 'Medielyn M. Odtojan', ' 5th International Multidisciplinary conference on Current Research Trends 2022 ', '2022-04-14', '41d289ea3bbe35e72a3b1b97466e237a.pdf', '', 0, '2022-12-07'),
(99, 101, 'Surigao City ', 'ceit', 'None', 'Letter of Acceptance', 'Alma Chritie Reyna', 'ICITE 2022', '2022-09-16', 'afbd3f7a7cc78adfa5d4be38d0ea5b5a.pdf', '', 0, '2022-12-07'),
(100, 60, 'Surigao City ', 'cas', 'None', 'A Topology on a Hyper BCI-algebra Generated by Hyper-Order', 'Michelle Panganduyon, Sergio R. Canoy, Jr and Bijian Davvaz', ' for later', '2021-01-01', 'b3eac4bb58ee6cece4fda3baad3677a1.jpg', '', 0, '2022-12-07'),
(101, 39, 'Surigao City ', 'cas', 'None', 'KAP and Health Seeking Behavior of Schistosoma Infected Comities in San Miguil, Surigao Del Sur, Philippines', 'Rosell Estal-Bertulfo', ' For later', '2021-01-01', '4756878273c4a8e366dfa4c7729ae9bb.jpg', '', 0, '2022-12-07'),
(102, 62, 'Surigao City ', 'cas', 'None', 'The Influence of Teacher-Student Relationships on Mathematics Problemsolving', 'Louida Patac, Adriano Patac Jr. and Sheila Gales', ' For later', '2021-01-01', '209ae32e12107cb3ecfd87861ecf9bb2.jpg', '', 0, '2022-12-07'),
(103, 62, 'Surigao City ', 'cas', 'None', 'Factor Analytic Method in Developing Scoring Rubric for Word Problems', 'Louida Patac, Adriano Patac Jr. and Cheeza Marie Bactil', ' For later', '2021-12-31', 'e272ca394123a39746dfaae750ceddad.jpg', '', 0, '2022-12-07'),
(104, 131, 'Surigao City ', 'cte', 'None', 'Notice of Publication', 'Adriano Villarosa Patac, Jr', ' Formula for Making Calabash Filling and Spread', '2021-05-21', '46087c8a26417cd44bd6cf6e5296c5fd.jpg', '', 0, '2022-12-07'),
(105, 114, 'Surigao City ', 'cot', 'None', 'Design, Development and Evaluation of a Model System for Teaching and Learning Mechatronics', 'Rolan Sulima, James Dumaguit and Adriano Patac, Jr', ' For later', '2021-10-30', 'a2d9547d772646209e3e89a724077a06.jpg', '', 0, '2022-12-07'),
(106, 40, 'Surigao City ', 'cas', 'None', 'Predictions of Science, Technology, Engineering and Mathematics (STEM) Career Preference', 'Nestor P. Elano Jr, Emmylou A. Borja and Ruel T. Buba', ' For later', '2021-06-23', '212c577abbb8238678f21aca046e49fe.jpg', '', 0, '2022-12-09'),
(107, 44, 'Surigao City ', 'cas', 'None', 'Species Richness and Community Structure of Amphibians and Reptiles in Andanan Watershed Forest Reserve, Caraga Region, Philippines', 'Chennie L. Solania, Jerry T. Cuadrado, Adam Roy V. Galolo and Eve F. Gamalida', ' Later', '2021-09-14', 'bd9ca7068a88f8ea42355609fa55be76.jpg', '', 0, '2022-12-09'),
(108, 94, 'Surigao City ', 'ceit', 'BSCpE', 'RFID Based Student Attendance System Using Raspberry Pi', 'Zyrene B. Opalla, Jasper Jan Oriel, Melody Fe D. Hinayon and Jerry I. Teleron', 'Later', '2022-09-13', 'caf925c424affbbbee125e698cac24f0.pdf', '', 0, '2022-12-09'),
(109, 72, 'Surigao City ', 'cte', 'None', 'Length- Weight Relationship of Bivalves and Gastropods from Mangrooves Frorest, Barangay Nabago, Surigao City Philippines', 'Louella S. Degamon, Manny P. Eviota, Rosalia Hugo, Roselle E. Bertulfo, Medielyn Odtojan, Gheleen Buenaflor, Jerry Cuadrado', ' later', '2022-11-29', 'bfd720863e638aa20304c3fa5e4704ac.pdf', '', 0, '2022-12-09');

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
  MODIFY `faculty_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `files_tb`
--
ALTER TABLE `files_tb`
  MODIFY `file_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
