-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 01, 2020 at 01:51 PM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `r2RO9a56tt`
--

-- --------------------------------------------------------

--
-- Table structure for table `Investigations`
--

CREATE TABLE `Investigations` (
  `ID` int(11) NOT NULL,
  `patient_ID` int(11) NOT NULL,
  `date` date NOT NULL,
  `Bili T/D` tinytext NOT NULL,
  `AST` tinytext NOT NULL,
  `ALT` tinytext NOT NULL,
  `ALP` tinytext NOT NULL,
  `GGT` tinytext NOT NULL,
  `Prot` tinytext NOT NULL,
  `Alb` tinytext NOT NULL,
  `CK` tinytext NOT NULL,
  `Hb/Hct` tinytext NOT NULL,
  `WCC` tinytext NOT NULL,
  `Neutro` tinytext NOT NULL,
  `Platelets` tinytext NOT NULL,
  `CRP` tinytext NOT NULL,
  `ESR` tinytext NOT NULL,
  `PT/INR` tinytext NOT NULL,
  `APTR` tinytext NOT NULL,
  `Fibrinogen` tinytext NOT NULL,
  `Cortisol` tinytext NOT NULL,
  `Urea` tinytext NOT NULL,
  `Creatinine` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Patient`
--

CREATE TABLE `Patient` (
  `ID` int(11) NOT NULL,
  `nhs_number` int(11) NOT NULL,
  `first_name` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `last_name` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `sex` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `home_address` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `postcode` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `home_phone` varchar(32) NOT NULL,
  `mobile_phone` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gp_address` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gp_phone` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Patient`
--

INSERT INTO `Patient` (`ID`, `nhs_number`, `first_name`, `last_name`, `date_of_birth`, `sex`, `home_address`, `postcode`, `home_phone`, `mobile_phone`, `gp_address`, `gp_phone`) VALUES
(1, 4567, 'Ligia', 'Micu', '2020-02-22', 'f', 'Great Dover Street 165', 'SE14XA', '4567', '45678', 'Great Dover Street 165', '54678');

-- --------------------------------------------------------

--
-- Table structure for table `Referral`
--

CREATE TABLE `Referral` (
  `ID` int(11) NOT NULL,
  `patient_ID` int(11) NOT NULL,
  `consultant_name` varchar(32) NOT NULL,
  `consultant_specialty` varchar(32) NOT NULL,
  `organisation_name` varchar(32) NOT NULL,
  `organisation_hospital_no` int(32) NOT NULL,
  `bleepnumber` tinytext NOT NULL,
  `parent_aware` tinyint(1) NOT NULL,
  `interpreter_needed` tinyint(1) NOT NULL,
  `interpreter_language` tinytext,
  `kch_doctor_name` tinytext NOT NULL,
  `date_time` datetime NOT NULL,
  `current_issue` mediumtext NOT NULL,
  `history_of_present_complaint` mediumtext NOT NULL,
  `family_history` mediumtext NOT NULL,
  `current_feeds` text,
  `medications` text,
  `other_investigations` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `ID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Investigations`
--
ALTER TABLE `Investigations`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `patient_ID` (`patient_ID`);

--
-- Indexes for table `Patient`
--
ALTER TABLE `Patient`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `nhs_number` (`nhs_number`);

--
-- Indexes for table `Referral`
--
ALTER TABLE `Referral`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Foreign Key(patient)` (`patient_ID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Investigations`
--
ALTER TABLE `Investigations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Patient`
--
ALTER TABLE `Patient`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Referral`
--
ALTER TABLE `Referral`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Referral`
--
ALTER TABLE `Referral`
  ADD CONSTRAINT `Foreign Key(patient)` FOREIGN KEY (`patient_ID`) REFERENCES `Patient` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
