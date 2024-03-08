-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 07, 2024 at 11:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emc_fo`
--

-- --------------------------------------------------------

--
-- Table structure for table `medical_history`
--

CREATE TABLE `medical_history` (
  `student_number` int(11) NOT NULL,
  `hasTestedPositive_COVID19` varchar(255) NOT NULL,
  `testedPositive_date` date NOT NULL,
  `bruiseEasily_bleedExcessively` varchar(255) NOT NULL,
  `bruiseBleed_initialManagement` text NOT NULL,
  `hasHistory_medicalProblems` varchar(255) NOT NULL,
  `medicalProblem_initialManagement` text NOT NULL,
  `hasSpecial_needs` varchar(255) NOT NULL,
  `has_allergies` varchar(255) NOT NULL,
  `specify_allergies` text NOT NULL,
  `admitted_dueToComplaints` varchar(255) NOT NULL,
  `admitted_specification` text NOT NULL,
  `complete_immunization` varchar(255) NOT NULL,
  `immunization_specification` text NOT NULL,
  `COVID19_vaccine` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical_history`
--

INSERT INTO `medical_history` (`student_number`, `hasTestedPositive_COVID19`, `testedPositive_date`, `bruiseEasily_bleedExcessively`, `bruiseBleed_initialManagement`, `hasHistory_medicalProblems`, `medicalProblem_initialManagement`, `hasSpecial_needs`, `has_allergies`, `specify_allergies`, `admitted_dueToComplaints`, `admitted_specification`, `complete_immunization`, `immunization_specification`, `COVID19_vaccine`) VALUES
(17223826, 'no', '1970-01-01', 'No', '', 'No', '', 'No', 'No', '', ' No', '', 'Yes', '', '1st Dose,2nd Dose,Booster 1,Booster 2,');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `student_number` int(11) NOT NULL,
  `student_lastname` text NOT NULL,
  `student_firstname` text NOT NULL,
  `student_middlename` text NOT NULL,
  `year_level` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `address` text NOT NULL,
  `father_name` text NOT NULL,
  `father_telno` int(11) NOT NULL,
  `mother_name` text NOT NULL,
  `mother_telno` int(11) NOT NULL,
  `guardian_name` text NOT NULL,
  `guardian_telno` int(11) NOT NULL,
  `guardian_availability` varchar(50) NOT NULL,
  `availableGuardian_name` text NOT NULL,
  `availableGuardian_telno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`student_number`, `student_lastname`, `student_firstname`, `student_middlename`, `year_level`, `section`, `age`, `birthday`, `address`, `father_name`, `father_telno`, `mother_name`, `mother_telno`, `guardian_name`, `guardian_telno`, `guardian_availability`, `availableGuardian_name`, `availableGuardian_telno`) VALUES
(17223826, 'Esportuno', 'Joylynne Grace', ' Caliwan', 4, 'Plato', 21, '2024-03-01', 'Blk 3 Lt 9, Phase 6, St. George Street, Sacred Heart Village, Caloocan City', 'Jose Esportuno', 2147483647, 'Angelina Esportuno', 2147483647, 'Angelina Esportuno', 1, 'No', ' ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD KEY `studentNumber_FK_1` (`student_number`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`student_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `student_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17223827;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD CONSTRAINT `studentNumber_FK_1` FOREIGN KEY (`student_number`) REFERENCES `student_details` (`student_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
