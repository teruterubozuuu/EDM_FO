-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 11, 2024 at 10:52 AM
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
-- Table structure for table `age_last_birthday`
--

CREATE TABLE `age_last_birthday` (
  `student_number` int(11) NOT NULL,
  `age_1` text NOT NULL,
  `age_2` text NOT NULL,
  `age_3` text NOT NULL,
  `age_4` text NOT NULL,
  `age_5` text NOT NULL,
  `age_6` text NOT NULL,
  `age_7` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `age_last_birthday`
--

INSERT INTO `age_last_birthday` (`student_number`, `age_1`, `age_2`, `age_3`, `age_4`, `age_5`, `age_6`, `age_7`) VALUES
(11022326, '21', '21', '21 ', '21 ', '21 ', '21 ', '21 '),
(141022326, '21', '21', '21 ', '21 ', '21 ', '21 ', '21 '),
(1741022326, '21', '21', '21 ', '21 ', '21 ', '21 ', '21 '),
(1041022326, '21', '21', '21 ', '21 ', '21 ', '21 ', '21 ');

-- --------------------------------------------------------

--
-- Table structure for table `caries_indicated_extraction`
--

CREATE TABLE `caries_indicated_extraction` (
  `student_number` int(11) NOT NULL,
  `indicated_extraction1` text NOT NULL,
  `indicated_extraction2` text NOT NULL,
  `indicated_extraction3` text NOT NULL,
  `indicated_extraction4` text NOT NULL,
  `indicated_extraction5` text NOT NULL,
  `indicated_extraction6` text NOT NULL,
  `indicated_extraction7` text NOT NULL,
  `indicated_extraction8` text NOT NULL,
  `indicated_extraction9` text NOT NULL,
  `indicated_extraction10` text NOT NULL,
  `indicated_extraction11` text NOT NULL,
  `indicated_extraction12` text NOT NULL,
  `indicated_extraction13` text NOT NULL,
  `indicated_extraction14` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `caries_indicated_extraction`
--

INSERT INTO `caries_indicated_extraction` (`student_number`, `indicated_extraction1`, `indicated_extraction2`, `indicated_extraction3`, `indicated_extraction4`, `indicated_extraction5`, `indicated_extraction6`, `indicated_extraction7`, `indicated_extraction8`, `indicated_extraction9`, `indicated_extraction10`, `indicated_extraction11`, `indicated_extraction12`, `indicated_extraction13`, `indicated_extraction14`) VALUES
(141022326, ' a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(1741022326, ' a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(1041022326, ' a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `caries_indicated_filling`
--

CREATE TABLE `caries_indicated_filling` (
  `student_number` int(11) NOT NULL,
  `caries_filling1` text NOT NULL,
  `caries_filling2` text NOT NULL,
  `caries_filling3` text NOT NULL,
  `caries_filling4` text NOT NULL,
  `caries_filling5` text NOT NULL,
  `caries_filling6` text NOT NULL,
  `caries_filling7` text NOT NULL,
  `caries_filling8` text NOT NULL,
  `caries_filling9` text NOT NULL,
  `caries_filling10` text NOT NULL,
  `caries_filling11` text NOT NULL,
  `caries_filling12` text NOT NULL,
  `caries_filling13` text NOT NULL,
  `caries_filling14` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `caries_indicated_filling`
--

INSERT INTO `caries_indicated_filling` (`student_number`, `caries_filling1`, `caries_filling2`, `caries_filling3`, `caries_filling4`, `caries_filling5`, `caries_filling6`, `caries_filling7`, `caries_filling8`, `caries_filling9`, `caries_filling10`, `caries_filling11`, `caries_filling12`, `caries_filling13`, `caries_filling14`) VALUES
(141022326, ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a'),
(1741022326, ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a'),
(1041022326, ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a');

-- --------------------------------------------------------

--
-- Table structure for table `dental_student_details`
--

CREATE TABLE `dental_student_details` (
  `student_number` int(11) NOT NULL,
  `lastname` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `hospital_municipality` text NOT NULL,
  `school_firm` text NOT NULL,
  `birthdate` date NOT NULL,
  `occupation` text NOT NULL,
  `civil_status` text NOT NULL,
  `address` text NOT NULL,
  `patient_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dental_student_details`
--

INSERT INTO `dental_student_details` (`student_number`, `lastname`, `firstname`, `middlename`, `hospital_municipality`, `school_firm`, `birthdate`, `occupation`, `civil_status`, `address`, `patient_status`) VALUES
(1234, 'Esportuno', ' Esportuno', 'asd', 'asdasdas', 'asda', '2024-02-29', 'dasda', 'dasdsa', ' asdasda', ' on'),
(11022326, 'Esportuno', ' Joylynne Grace', 'Caliwan', 'COMMONWEALTH', 'LAGRO HIGH', '2003-02-12', 'STUDENT', 'SINGLE', ' BLK 3 LT 9, ST. GEORGE STREET, SACRED HEART VILLAGE, CALOOCAN CITY', ' on'),
(17122326, 'Esportuno', ' Joylynne Grace', 'Caliwan', 'COMMONWEALTH', 'LAGRO HIGH', '2003-02-12', 'STUDENT', 'SINGLE', ' BLK 3 LT 9, ST. GEORGE STREET, SACRED HEART VILLAGE, CALOOCAN CITY', ' on'),
(17222326, 'Esportuno', ' Joylynne Grace', 'Caliwan', 'COMMONWEALTH', 'LAGRO HIGH', '2003-02-12', 'STUDENT', 'SINGLE', ' BLK 3 LT 9, ST. GEORGE STREET, SACRED HEART VILLAGE, CALOOCAN CITY', ' on'),
(17223326, 'Esportuno', ' Joylynne Grace', 'Caliwan', 'COMMONWEALTH', 'LAGRO HIGH', '2003-02-12', 'STUDENT', 'SINGLE', ' BLK 3 LT 9, ST. GEORGE STREET, SACRED HEART VILLAGE, CALOOCAN CITY', ' on'),
(17223826, 'Esportuno', ' Joylynne Grace', 'Caliwan', 'COMMONWEALTH', 'LAGRO HIGH', '2003-02-12', 'STUDENT', 'SINGLE', ' BLK 3 LT 9, ST. GEORGE STREET, SACRED HEART VILLAGE, CALOOCAN CITY', ' on'),
(27122326, 'Esportuno', ' Joylynne Grace', 'Caliwan', 'COMMONWEALTH', 'LAGRO HIGH', '2003-02-12', 'STUDENT', 'SINGLE', ' BLK 3 LT 9, ST. GEORGE STREET, SACRED HEART VILLAGE, CALOOCAN CITY', ' on'),
(141022326, 'Esportuno', ' Joylynne Grace', 'Caliwan', 'COMMONWEALTH', 'LAGRO HIGH', '2003-02-12', 'STUDENT', 'SINGLE', ' BLK 3 LT 9, ST. GEORGE STREET, SACRED HEART VILLAGE, CALOOCAN CITY', ' on'),
(1041022326, 'Esportuno', ' Joylynne Grace', 'Caliwan', 'COMMONWEALTH', 'LAGRO HIGH', '2003-02-12', 'STUDENT', 'SINGLE', ' BLK 3 LT 9, ST. GEORGE STREET, SACRED HEART VILLAGE, CALOOCAN CITY', ' on'),
(1741022326, 'Esportuno', ' Joylynne Grace', 'Caliwan', 'COMMONWEALTH', 'LAGRO HIGH', '2003-02-12', 'STUDENT', 'SINGLE', ' BLK 3 LT 9, ST. GEORGE STREET, SACRED HEART VILLAGE, CALOOCAN CITY', ' on');

-- --------------------------------------------------------

--
-- Table structure for table `examination_date`
--

CREATE TABLE `examination_date` (
  `student_number` int(11) NOT NULL,
  `date_1` date NOT NULL,
  `date_2` date NOT NULL,
  `date_3` date NOT NULL,
  `date_4` date NOT NULL,
  `date_5` date NOT NULL,
  `date_6` date NOT NULL,
  `date_7` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `examination_date`
--

INSERT INTO `examination_date` (`student_number`, `date_1`, `date_2`, `date_3`, `date_4`, `date_5`, `date_6`, `date_7`) VALUES
(11022326, '2024-02-27', '2024-03-01', '2024-03-02', '2024-03-04', '2024-03-06', '2024-03-08', '2024-03-12'),
(141022326, '2024-02-27', '2024-03-01', '2024-03-02', '2024-03-04', '2024-03-06', '2024-03-08', '2024-03-12'),
(1741022326, '2024-02-27', '2024-03-01', '2024-03-02', '2024-03-04', '2024-03-06', '2024-03-08', '2024-03-12'),
(1041022326, '2024-02-27', '2024-03-01', '2024-03-02', '2024-03-04', '2024-03-06', '2024-03-08', '2024-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `examiner_name`
--

CREATE TABLE `examiner_name` (
  `student_number` int(11) NOT NULL,
  `examiner_name1` text NOT NULL,
  `examiner_name2` text NOT NULL,
  `examiner_name3` text NOT NULL,
  `examiner_name4` text NOT NULL,
  `examiner_name5` text NOT NULL,
  `examiner_name6` text NOT NULL,
  `examiner_name7` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `examiner_name`
--

INSERT INTO `examiner_name` (`student_number`, `examiner_name1`, `examiner_name2`, `examiner_name3`, `examiner_name4`, `examiner_name5`, `examiner_name6`, `examiner_name7`) VALUES
(1041022326, 'noceda', 'noceda', 'eda', 'king', 'noceda', 'eda', 'noceda');

-- --------------------------------------------------------

--
-- Table structure for table `filled_restored`
--

CREATE TABLE `filled_restored` (
  `student_number` int(11) NOT NULL,
  `filledRestored1` text NOT NULL,
  `filledRestored2` text NOT NULL,
  `filledRestored3` text NOT NULL,
  `filledRestored4` text NOT NULL,
  `filledRestored5` text NOT NULL,
  `filledRestored6` text NOT NULL,
  `filledRestored7` text NOT NULL,
  `filledRestored8` text NOT NULL,
  `filledRestored9` text NOT NULL,
  `filledRestored10` text NOT NULL,
  `filledRestored11` text NOT NULL,
  `filledRestored12` text NOT NULL,
  `filledRestored13` text NOT NULL,
  `filledRestored14` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `filled_restored`
--

INSERT INTO `filled_restored` (`student_number`, `filledRestored1`, `filledRestored2`, `filledRestored3`, `filledRestored4`, `filledRestored5`, `filledRestored6`, `filledRestored7`, `filledRestored8`, `filledRestored9`, `filledRestored10`, `filledRestored11`, `filledRestored12`, `filledRestored13`, `filledRestored14`) VALUES
(1741022326, ' c', ' c', ' c', ' c', ' c', ' c', ' c', ' c', ' c', ' c', ' c', ' c', ' c', ' c'),
(1041022326, ' c', ' c', ' c', ' c', ' c', ' c', ' c', ' c', ' c', ' c', ' c', ' c', ' c', ' c');

-- --------------------------------------------------------

--
-- Table structure for table `fluoride_application`
--

CREATE TABLE `fluoride_application` (
  `student_number` int(11) NOT NULL,
  `fluoride_application1` text NOT NULL,
  `fluoride_application2` text NOT NULL,
  `fluoride_application3` text NOT NULL,
  `fluoride_application4` text NOT NULL,
  `fluoride_application5` text NOT NULL,
  `fluoride_application6` text NOT NULL,
  `fluoride_application7` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fluoride_application`
--

INSERT INTO `fluoride_application` (`student_number`, `fluoride_application1`, `fluoride_application2`, `fluoride_application3`, `fluoride_application4`, `fluoride_application5`, `fluoride_application6`, `fluoride_application7`) VALUES
(1041022326, 'e', 'e', 'e', 'e', 'e', 'e', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `lower_left`
--

CREATE TABLE `lower_left` (
  `student_number` int(11) NOT NULL,
  `operation_31` int(11) NOT NULL,
  `operation_32` int(11) NOT NULL,
  `operation_33` int(11) NOT NULL,
  `operation_34` int(11) NOT NULL,
  `operation_35` int(11) NOT NULL,
  `operation_36` int(11) NOT NULL,
  `operation_37` int(11) NOT NULL,
  `operation_38` int(11) NOT NULL,
  `condition_31` int(11) NOT NULL,
  `condition_32` int(11) NOT NULL,
  `condition_33` int(11) NOT NULL,
  `condition_34` int(11) NOT NULL,
  `condition_35` int(11) NOT NULL,
  `condition_36` int(11) NOT NULL,
  `condition_37` int(11) NOT NULL,
  `condition_38` int(11) NOT NULL,
  `operation_71` int(11) NOT NULL,
  `operation_72` int(11) NOT NULL,
  `operation_73` int(11) NOT NULL,
  `operation_74` int(11) NOT NULL,
  `operation_75` int(11) NOT NULL,
  `condition_71` int(11) NOT NULL,
  `condition_72` int(11) NOT NULL,
  `condition_73` int(11) NOT NULL,
  `condition_74` int(11) NOT NULL,
  `condition_75` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lower_right`
--

CREATE TABLE `lower_right` (
  `student_number` int(11) NOT NULL,
  `operation_48` int(11) NOT NULL,
  `operation_47` int(11) NOT NULL,
  `operation_46` int(11) NOT NULL,
  `operation_45` int(11) NOT NULL,
  `operation_44` int(11) NOT NULL,
  `operation_43` int(11) NOT NULL,
  `operation_42` int(11) NOT NULL,
  `operation_41` int(11) NOT NULL,
  `condition_48` int(11) NOT NULL,
  `condition_47` int(11) NOT NULL,
  `condition_46` int(11) NOT NULL,
  `condition_45` int(11) NOT NULL,
  `condition_44` int(11) NOT NULL,
  `condition_43` int(11) NOT NULL,
  `condition_42` int(11) NOT NULL,
  `condition_41` int(11) NOT NULL,
  `operation_85` int(11) NOT NULL,
  `operation_84` int(11) NOT NULL,
  `operation_83` int(11) NOT NULL,
  `operation_82` int(11) NOT NULL,
  `operation_81` int(11) NOT NULL,
  `condition_85` int(11) NOT NULL,
  `condition_84` int(11) NOT NULL,
  `condition_83` int(11) NOT NULL,
  `condition_82` int(11) NOT NULL,
  `condition_81` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lower_right`
--

INSERT INTO `lower_right` (`student_number`, `operation_48`, `operation_47`, `operation_46`, `operation_45`, `operation_44`, `operation_43`, `operation_42`, `operation_41`, `condition_48`, `condition_47`, `condition_46`, `condition_45`, `condition_44`, `condition_43`, `condition_42`, `condition_41`, `operation_85`, `operation_84`, `operation_83`, `operation_82`, `operation_81`, `condition_85`, `condition_84`, `condition_83`, `condition_82`, `condition_81`) VALUES
(27122326, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(11022326, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(141022326, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(1741022326, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(1041022326, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5);

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
(17223826, 'no', '1970-01-01', 'No', '', 'No', '', 'No', 'No', '', ' No', '', 'Yes', '', '1st Dose,2nd Dose,Booster 1,Booster 2,'),
(1, 'no', '1970-01-01', 'No', '', 'No', '', 'No', 'No', '', ' No', '', 'Yes', '', '1st Dose,,,,');

-- --------------------------------------------------------

--
-- Table structure for table `missing_caries`
--

CREATE TABLE `missing_caries` (
  `student_number` int(11) NOT NULL,
  `missingCaries1` text NOT NULL,
  `missingCaries2` text NOT NULL,
  `missingCaries3` text NOT NULL,
  `missingCaries4` text NOT NULL,
  `missingCaries5` text NOT NULL,
  `missingCaries6` text NOT NULL,
  `missingCaries7` text NOT NULL,
  `missingCaries8` text NOT NULL,
  `missingCaries9` text NOT NULL,
  `missingCaries10` text NOT NULL,
  `missingCaries11` text NOT NULL,
  `missingCaries12` text NOT NULL,
  `missingCaries13` text NOT NULL,
  `missingCaries14` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `missing_caries`
--

INSERT INTO `missing_caries` (`student_number`, `missingCaries1`, `missingCaries2`, `missingCaries3`, `missingCaries4`, `missingCaries5`, `missingCaries6`, `missingCaries7`, `missingCaries8`, `missingCaries9`, `missingCaries10`, `missingCaries11`, `missingCaries12`, `missingCaries13`, `missingCaries14`) VALUES
(1741022326, 'c', 'c', 'c', 'c', 'c', 'c', 'c', '', '', '', '', '', '', ''),
(1041022326, 'c', 'c', 'c', 'c', 'c', 'c', 'c', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `num_teeth_present`
--

CREATE TABLE `num_teeth_present` (
  `student_number` int(11) NOT NULL,
  `teeth1` text NOT NULL,
  `teeth2` text NOT NULL,
  `teeth3` text NOT NULL,
  `teeth4` text NOT NULL,
  `teeth5` text NOT NULL,
  `teeth6` text NOT NULL,
  `teeth7` text NOT NULL,
  `teeth8` text NOT NULL,
  `teeth9` text NOT NULL,
  `teeth10` text NOT NULL,
  `teeth11` text NOT NULL,
  `teeth12` text NOT NULL,
  `teeth13` text NOT NULL,
  `teeth14` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `num_teeth_present`
--

INSERT INTO `num_teeth_present` (`student_number`, `teeth1`, `teeth2`, `teeth3`, `teeth4`, `teeth5`, `teeth6`, `teeth7`, `teeth8`, `teeth9`, `teeth10`, `teeth11`, `teeth12`, `teeth13`, `teeth14`) VALUES
(141022326, '32', '32', '32', '32', '32', '32', '32', '32', '32', '32', '32', '32', '32', '32'),
(1741022326, '32', '32', '32', '32', '32', '32', '32', '32', '32', '32', '32', '32', '32', '32'),
(1041022326, '32', '32', '32', '32', '32', '32', '32', '32', '32', '32', '32', '32', '32', '32');

-- --------------------------------------------------------

--
-- Table structure for table `presence_calculus`
--

CREATE TABLE `presence_calculus` (
  `student_number` int(11) NOT NULL,
  `calculus1` text NOT NULL,
  `calculus2` text NOT NULL,
  `calculus3` text NOT NULL,
  `calculus4` text NOT NULL,
  `calculus5` text NOT NULL,
  `calculus6` text NOT NULL,
  `calculus7` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `presence_calculus`
--

INSERT INTO `presence_calculus` (`student_number`, `calculus1`, `calculus2`, `calculus3`, `calculus4`, `calculus5`, `calculus6`, `calculus7`) VALUES
(141022326, 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'No'),
(1741022326, 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'No'),
(1041022326, 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `presence_dental_caries`
--

CREATE TABLE `presence_dental_caries` (
  `student_number` int(11) NOT NULL,
  `dentalCaries_1` text NOT NULL,
  `dentalCaries_2` text NOT NULL,
  `dentalCaries_3` text NOT NULL,
  `dentalCaries_4` text NOT NULL,
  `dentalCaries_5` text NOT NULL,
  `dentalCaries_6` text NOT NULL,
  `dentalCaries_7` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `presence_dental_caries`
--

INSERT INTO `presence_dental_caries` (`student_number`, `dentalCaries_1`, `dentalCaries_2`, `dentalCaries_3`, `dentalCaries_4`, `dentalCaries_5`, `dentalCaries_6`, `dentalCaries_7`) VALUES
(11022326, 'Yes ', 'No ', ' Yes ', 'Yes ', 'No ', 'Yes ', 'No '),
(141022326, 'Yes ', 'No ', ' Yes ', 'Yes ', 'No ', 'Yes ', 'No '),
(1741022326, 'Yes ', 'No ', ' Yes ', 'Yes ', 'No ', 'Yes ', 'No '),
(1041022326, 'Yes ', 'No ', ' Yes ', 'Yes ', 'No ', 'Yes ', 'No ');

-- --------------------------------------------------------

--
-- Table structure for table `presence_df_anomaly`
--

CREATE TABLE `presence_df_anomaly` (
  `student_number` int(11) NOT NULL,
  `DF_anomaly1` text NOT NULL,
  `DF_anomaly2` text NOT NULL,
  `DF_anomaly3` text NOT NULL,
  `DF_anomaly4` text NOT NULL,
  `DF_anomaly5` text NOT NULL,
  `DF_anomaly6` text NOT NULL,
  `DF_anomaly7` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `presence_df_anomaly`
--

INSERT INTO `presence_df_anomaly` (`student_number`, `DF_anomaly1`, `DF_anomaly2`, `DF_anomaly3`, `DF_anomaly4`, `DF_anomaly5`, `DF_anomaly6`, `DF_anomaly7`) VALUES
(141022326, ' No', ' No', ' No', ' No', ' Yes', ' Yes', ' Yes'),
(1741022326, ' No', ' No', ' No', ' No', ' Yes', ' Yes', ' Yes'),
(1041022326, ' No', ' No', ' No', ' No', ' Yes', ' Yes', ' Yes');

-- --------------------------------------------------------

--
-- Table structure for table `presence_gingivitis`
--

CREATE TABLE `presence_gingivitis` (
  `student_number` int(11) NOT NULL,
  `gingivitis1` text NOT NULL,
  `gingivitis2` text NOT NULL,
  `gingivitis3` text NOT NULL,
  `gingivitis4` text NOT NULL,
  `gingivitis5` text NOT NULL,
  `gingivitis6` text NOT NULL,
  `gingivitis7` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `presence_gingivitis`
--

INSERT INTO `presence_gingivitis` (`student_number`, `gingivitis1`, `gingivitis2`, `gingivitis3`, `gingivitis4`, `gingivitis5`, `gingivitis6`, `gingivitis7`) VALUES
(11022326, 'Yes', 'No', 'No', 'No', 'Yes', 'No', 'Yes'),
(141022326, 'Yes', 'No', 'No', 'No', 'Yes', 'No', 'Yes'),
(1741022326, 'Yes', 'No', 'No', 'No', 'Yes', 'No', 'Yes'),
(1041022326, 'Yes', 'No', 'No', 'No', 'Yes', 'No', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `presence_neoplasm`
--

CREATE TABLE `presence_neoplasm` (
  `student_number` int(11) NOT NULL,
  `neoplasm1` text NOT NULL,
  `neoplasm2` text NOT NULL,
  `neoplasm3` text NOT NULL,
  `neoplasm4` text NOT NULL,
  `neoplasm5` text NOT NULL,
  `neoplasm6` text NOT NULL,
  `neoplasm7` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `presence_neoplasm`
--

INSERT INTO `presence_neoplasm` (`student_number`, `neoplasm1`, `neoplasm2`, `neoplasm3`, `neoplasm4`, `neoplasm5`, `neoplasm6`, `neoplasm7`) VALUES
(141022326, ' No', ' No', ' Yes', ' Yes', ' Yes', ' No', ' Yes'),
(1741022326, ' No', ' No', ' Yes', ' Yes', ' Yes', ' No', ' Yes'),
(1041022326, ' No', ' No', ' Yes', ' Yes', ' Yes', ' No', ' Yes');

-- --------------------------------------------------------

--
-- Table structure for table `presence_oral_debris`
--

CREATE TABLE `presence_oral_debris` (
  `student_number` int(11) NOT NULL,
  `oraldebris1` text NOT NULL,
  `oraldebris2` text NOT NULL,
  `oraldebris3` text NOT NULL,
  `oraldebris4` text NOT NULL,
  `oraldebris5` text NOT NULL,
  `oraldebris6` text NOT NULL,
  `oraldebris7` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `presence_oral_debris`
--

INSERT INTO `presence_oral_debris` (`student_number`, `oraldebris1`, `oraldebris2`, `oraldebris3`, `oraldebris4`, `oraldebris5`, `oraldebris6`, `oraldebris7`) VALUES
(141022326, 'Yes ', 'No ', 'Yes ', 'yes ', 'No ', 'No ', 'Yes '),
(1741022326, 'Yes ', 'No ', 'Yes ', 'yes ', 'No ', 'No ', 'Yes '),
(1041022326, 'Yes ', 'No ', 'Yes ', 'yes ', 'No ', 'No ', 'Yes ');

-- --------------------------------------------------------

--
-- Table structure for table `presence_periodontal_pocket`
--

CREATE TABLE `presence_periodontal_pocket` (
  `student_number` int(11) NOT NULL,
  `periodontal_pocket1` text NOT NULL,
  `periodontal_pocket2` text NOT NULL,
  `periodontal_pocket3` text NOT NULL,
  `periodontal_pocket4` text NOT NULL,
  `periodontal_pocket5` text NOT NULL,
  `periodontal_pocket6` text NOT NULL,
  `periodontal_pocket7` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `presence_periodontal_pocket`
--

INSERT INTO `presence_periodontal_pocket` (`student_number`, `periodontal_pocket1`, `periodontal_pocket2`, `periodontal_pocket3`, `periodontal_pocket4`, `periodontal_pocket5`, `periodontal_pocket6`, `periodontal_pocket7`) VALUES
(141022326, ' Yes ', ' Yes ', ' No ', ' No ', ' Yes ', ' No ', ' Yes '),
(1741022326, ' Yes ', ' Yes ', ' No ', ' No ', ' Yes ', ' No ', ' Yes '),
(1041022326, ' Yes ', ' Yes ', ' No ', ' No ', ' Yes ', ' No ', ' Yes ');

-- --------------------------------------------------------

--
-- Table structure for table `root_fragment`
--

CREATE TABLE `root_fragment` (
  `student_number` int(11) NOT NULL,
  `rootFragment1` text NOT NULL,
  `rootFragment2` text NOT NULL,
  `rootFragment3` text NOT NULL,
  `rootFragment4` text NOT NULL,
  `rootFragment5` text NOT NULL,
  `rootFragment6` text NOT NULL,
  `rootFragment7` text NOT NULL,
  `rootFragment8` text NOT NULL,
  `rootFragment9` text NOT NULL,
  `rootFragment10` text NOT NULL,
  `rootFragment11` text NOT NULL,
  `rootFragment12` text NOT NULL,
  `rootFragment13` text NOT NULL,
  `rootFragment14` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `root_fragment`
--

INSERT INTO `root_fragment` (`student_number`, `rootFragment1`, `rootFragment2`, `rootFragment3`, `rootFragment4`, `rootFragment5`, `rootFragment6`, `rootFragment7`, `rootFragment8`, `rootFragment9`, `rootFragment10`, `rootFragment11`, `rootFragment12`, `rootFragment13`, `rootFragment14`) VALUES
(141022326, ' b', ' b', ' b', ' b', ' b', ' b', ' b', ' b', ' b', ' b', ' b', ' b', ' b', ' b'),
(1741022326, ' b', ' b', ' b', ' b', ' b', ' b', ' b', ' b', ' b', ' b', ' b', ' b', ' b', ' b'),
(1041022326, ' b', ' b', ' b', ' b', ' b', ' b', ' b', ' b', ' b', ' b', ' b', ' b', ' b', ' b');

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
(1, 'aa', 'aaa', ' aa', 0, 'aa', 0, '2024-03-06', 'sdad', 'asdad', 0, 'asda', 0, 'asdsa', 0, 'No', ' ', 0),
(17223826, 'Esportuno', 'Joylynne Grace', ' Caliwan', 4, 'Plato', 21, '2024-03-01', 'Blk 3 Lt 9, Phase 6, St. George Street, Sacred Heart Village, Caloocan City', 'Jose Esportuno', 2147483647, 'Angelina Esportuno', 2147483647, 'Angelina Esportuno', 1, 'No', ' ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `total_df_dmf`
--

CREATE TABLE `total_df_dmf` (
  `student_number` int(11) NOT NULL,
  `df_DMF1` text NOT NULL,
  `df_DMF2` text NOT NULL,
  `df_DMF3` text NOT NULL,
  `df_DMF4` text NOT NULL,
  `df_DMF5` text NOT NULL,
  `df_DMF6` text NOT NULL,
  `df_DMF7` text NOT NULL,
  `df_DMF8` date NOT NULL,
  `df_DMF9` text NOT NULL,
  `df_DMF10` text NOT NULL,
  `df_DMF11` text NOT NULL,
  `df_DMF12` text NOT NULL,
  `df_DMF13` text NOT NULL,
  `df_DMF14` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `total_df_dmf`
--

INSERT INTO `total_df_dmf` (`student_number`, `df_DMF1`, `df_DMF2`, `df_DMF3`, `df_DMF4`, `df_DMF5`, `df_DMF6`, `df_DMF7`, `df_DMF8`, `df_DMF9`, `df_DMF10`, `df_DMF11`, `df_DMF12`, `df_DMF13`, `df_DMF14`) VALUES
(1041022326, 'c', 'c', 'c', 'c', 'c', 'c', 'c', '0000-00-00', 'c', 'c', 'c', 'c', 'c', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `upper_left`
--

CREATE TABLE `upper_left` (
  `student_number` int(11) NOT NULL,
  `operation_61` int(11) NOT NULL,
  `operation_62` int(11) NOT NULL,
  `operation_63` int(11) NOT NULL,
  `operation_64` int(11) NOT NULL,
  `operation_65` int(11) NOT NULL,
  `condition_61` int(11) NOT NULL,
  `condition_62` int(11) NOT NULL,
  `condition_63` int(11) NOT NULL,
  `condition_64` int(11) NOT NULL,
  `condition_65` int(11) NOT NULL,
  `operation_21` int(11) NOT NULL,
  `operation_22` int(11) NOT NULL,
  `operation_23` int(11) NOT NULL,
  `operation_24` int(11) NOT NULL,
  `operation_25` int(11) NOT NULL,
  `operation_26` int(11) NOT NULL,
  `operation_27` int(11) NOT NULL,
  `operation_28` int(11) NOT NULL,
  `condition_21` int(11) NOT NULL,
  `condition_22` int(11) NOT NULL,
  `condition_23` int(11) NOT NULL,
  `condition_24` int(11) NOT NULL,
  `condition_25` int(11) NOT NULL,
  `condition_26` int(11) NOT NULL,
  `condition_27` int(11) NOT NULL,
  `condition_28` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upper_left`
--

INSERT INTO `upper_left` (`student_number`, `operation_61`, `operation_62`, `operation_63`, `operation_64`, `operation_65`, `condition_61`, `condition_62`, `condition_63`, `condition_64`, `condition_65`, `operation_21`, `operation_22`, `operation_23`, `operation_24`, `operation_25`, `operation_26`, `operation_27`, `operation_28`, `condition_21`, `condition_22`, `condition_23`, `condition_24`, `condition_25`, `condition_26`, `condition_27`, `condition_28`) VALUES
(17222326, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(17122326, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(27122326, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(11022326, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(141022326, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(1741022326, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(1041022326, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `upper_right`
--

CREATE TABLE `upper_right` (
  `student_number` int(11) NOT NULL,
  `operation_55` varchar(255) DEFAULT NULL,
  `operation_54` varchar(255) DEFAULT NULL,
  `operation_53` varchar(255) DEFAULT NULL,
  `operation_52` varchar(255) DEFAULT NULL,
  `operation_51` varchar(255) DEFAULT NULL,
  `condition_55` varchar(255) DEFAULT NULL,
  `condition_54` varchar(255) DEFAULT NULL,
  `condition_53` varchar(255) DEFAULT NULL,
  `condition_52` varchar(255) DEFAULT NULL,
  `condition_51` varchar(255) DEFAULT NULL,
  `operation_18` varchar(255) DEFAULT NULL,
  `operation_17` varchar(255) DEFAULT NULL,
  `operation_16` varchar(255) DEFAULT NULL,
  `operation_15` varchar(255) DEFAULT NULL,
  `operation_14` varchar(255) DEFAULT NULL,
  `operation_13` varchar(255) DEFAULT NULL,
  `operation_12` varchar(255) DEFAULT NULL,
  `operation_11` varchar(255) DEFAULT NULL,
  `condition_18` varchar(255) DEFAULT NULL,
  `condition_17` varchar(255) DEFAULT NULL,
  `condition_16` varchar(255) DEFAULT NULL,
  `condition_15` varchar(255) DEFAULT NULL,
  `condition_14` varchar(255) DEFAULT NULL,
  `condition_13` varchar(255) DEFAULT NULL,
  `condition_12` varchar(255) DEFAULT NULL,
  `condition_11` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upper_right`
--

INSERT INTO `upper_right` (`student_number`, `operation_55`, `operation_54`, `operation_53`, `operation_52`, `operation_51`, `condition_55`, `condition_54`, `condition_53`, `condition_52`, `condition_51`, `operation_18`, `operation_17`, `operation_16`, `operation_15`, `operation_14`, `operation_13`, `operation_12`, `operation_11`, `condition_18`, `condition_17`, `condition_16`, `condition_15`, `condition_14`, `condition_13`, `condition_12`, `condition_11`) VALUES
(1234, '5', '5', ' 5', '5', '5', '5', ' 5', '  5 ', ' 5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5'),
(17223826, '5', '5', ' 5', '5', '5', '5', ' 5', '  5 ', ' 5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5'),
(17223326, '5', '5', ' 5', '5', '5', '5', ' 5', '  5 ', ' 5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5'),
(17222326, '5', '5', ' 5', '5', '5', '5', ' 5', '  5 ', ' 5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5'),
(17122326, '5', '5', ' 5', '5', '5', '5', ' 5', '  5 ', ' 5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5'),
(27122326, '5', '5', ' 5', '5', '5', '5', ' 5', '  5 ', ' 5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5'),
(11022326, '5', '5', ' 5', '5', '5', '5', ' 5', '  5 ', ' 5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5'),
(141022326, '5', '5', ' 5', '5', '5', '5', ' 5', '  5 ', ' 5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5'),
(1741022326, '5', '5', ' 5', '5', '5', '5', ' 5', '  5 ', ' 5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5'),
(1041022326, '5', '5', ' 5', '5', '5', '5', ' 5', '  5 ', ' 5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `age_last_birthday`
--
ALTER TABLE `age_last_birthday`
  ADD KEY `student_number_FK_6` (`student_number`);

--
-- Indexes for table `caries_indicated_extraction`
--
ALTER TABLE `caries_indicated_extraction`
  ADD KEY `student_number_FK_16` (`student_number`);

--
-- Indexes for table `caries_indicated_filling`
--
ALTER TABLE `caries_indicated_filling`
  ADD KEY `student_number_FK_15` (`student_number`);

--
-- Indexes for table `dental_student_details`
--
ALTER TABLE `dental_student_details`
  ADD PRIMARY KEY (`student_number`);

--
-- Indexes for table `examination_date`
--
ALTER TABLE `examination_date`
  ADD KEY `student_number_FK_5` (`student_number`);

--
-- Indexes for table `examiner_name`
--
ALTER TABLE `examiner_name`
  ADD KEY `student_number_FK_22` (`student_number`);

--
-- Indexes for table `filled_restored`
--
ALTER TABLE `filled_restored`
  ADD KEY `student_number_FK_19` (`student_number`);

--
-- Indexes for table `fluoride_application`
--
ALTER TABLE `fluoride_application`
  ADD KEY `student_number_FK_21` (`student_number`);

--
-- Indexes for table `lower_left`
--
ALTER TABLE `lower_left`
  ADD KEY `student_number_FK_3` (`student_number`);

--
-- Indexes for table `lower_right`
--
ALTER TABLE `lower_right`
  ADD KEY `student_number_FK_4` (`student_number`);

--
-- Indexes for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD KEY `studentNumber_FK_1` (`student_number`);

--
-- Indexes for table `missing_caries`
--
ALTER TABLE `missing_caries`
  ADD KEY `student_number_FK_18` (`student_number`);

--
-- Indexes for table `num_teeth_present`
--
ALTER TABLE `num_teeth_present`
  ADD KEY `student_number_FK_14` (`student_number`);

--
-- Indexes for table `presence_calculus`
--
ALTER TABLE `presence_calculus`
  ADD KEY `student_number_FK_11` (`student_number`);

--
-- Indexes for table `presence_dental_caries`
--
ALTER TABLE `presence_dental_caries`
  ADD KEY `student_number_FK_7` (`student_number`);

--
-- Indexes for table `presence_df_anomaly`
--
ALTER TABLE `presence_df_anomaly`
  ADD KEY `student_number_FK_13` (`student_number`);

--
-- Indexes for table `presence_gingivitis`
--
ALTER TABLE `presence_gingivitis`
  ADD KEY `student_number_FK_8` (`student_number`);

--
-- Indexes for table `presence_neoplasm`
--
ALTER TABLE `presence_neoplasm`
  ADD KEY `student_number_FK_12` (`student_number`);

--
-- Indexes for table `presence_oral_debris`
--
ALTER TABLE `presence_oral_debris`
  ADD KEY `student_number_FK_10` (`student_number`);

--
-- Indexes for table `presence_periodontal_pocket`
--
ALTER TABLE `presence_periodontal_pocket`
  ADD KEY `student_number_FK_9` (`student_number`);

--
-- Indexes for table `root_fragment`
--
ALTER TABLE `root_fragment`
  ADD KEY `student_number_FK_17` (`student_number`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`student_number`);

--
-- Indexes for table `total_df_dmf`
--
ALTER TABLE `total_df_dmf`
  ADD KEY `student_number_FK_20` (`student_number`);

--
-- Indexes for table `upper_left`
--
ALTER TABLE `upper_left`
  ADD KEY `student_number_FK_2` (`student_number`);

--
-- Indexes for table `upper_right`
--
ALTER TABLE `upper_right`
  ADD KEY `student_number_FK_1` (`student_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dental_student_details`
--
ALTER TABLE `dental_student_details`
  MODIFY `student_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1741022327;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `student_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17223846;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `age_last_birthday`
--
ALTER TABLE `age_last_birthday`
  ADD CONSTRAINT `student_number_FK_6` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);

--
-- Constraints for table `caries_indicated_extraction`
--
ALTER TABLE `caries_indicated_extraction`
  ADD CONSTRAINT `student_number_FK_16` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);

--
-- Constraints for table `caries_indicated_filling`
--
ALTER TABLE `caries_indicated_filling`
  ADD CONSTRAINT `student_number_FK_15` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);

--
-- Constraints for table `examination_date`
--
ALTER TABLE `examination_date`
  ADD CONSTRAINT `student_number_FK_5` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);

--
-- Constraints for table `examiner_name`
--
ALTER TABLE `examiner_name`
  ADD CONSTRAINT `student_number_FK_22` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);

--
-- Constraints for table `filled_restored`
--
ALTER TABLE `filled_restored`
  ADD CONSTRAINT `student_number_FK_19` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);

--
-- Constraints for table `fluoride_application`
--
ALTER TABLE `fluoride_application`
  ADD CONSTRAINT `student_number_FK_21` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);

--
-- Constraints for table `lower_left`
--
ALTER TABLE `lower_left`
  ADD CONSTRAINT `student_number_FK_3` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);

--
-- Constraints for table `lower_right`
--
ALTER TABLE `lower_right`
  ADD CONSTRAINT `student_number_FK_4` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);

--
-- Constraints for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD CONSTRAINT `studentNumber_FK_1` FOREIGN KEY (`student_number`) REFERENCES `student_details` (`student_number`);

--
-- Constraints for table `missing_caries`
--
ALTER TABLE `missing_caries`
  ADD CONSTRAINT `student_number_FK_18` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);

--
-- Constraints for table `num_teeth_present`
--
ALTER TABLE `num_teeth_present`
  ADD CONSTRAINT `student_number_FK_14` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);

--
-- Constraints for table `presence_calculus`
--
ALTER TABLE `presence_calculus`
  ADD CONSTRAINT `student_number_FK_11` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);

--
-- Constraints for table `presence_dental_caries`
--
ALTER TABLE `presence_dental_caries`
  ADD CONSTRAINT `student_number_FK_7` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);

--
-- Constraints for table `presence_df_anomaly`
--
ALTER TABLE `presence_df_anomaly`
  ADD CONSTRAINT `student_number_FK_13` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);

--
-- Constraints for table `presence_gingivitis`
--
ALTER TABLE `presence_gingivitis`
  ADD CONSTRAINT `student_number_FK_8` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);

--
-- Constraints for table `presence_neoplasm`
--
ALTER TABLE `presence_neoplasm`
  ADD CONSTRAINT `student_number_FK_12` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);

--
-- Constraints for table `presence_oral_debris`
--
ALTER TABLE `presence_oral_debris`
  ADD CONSTRAINT `student_number_FK_10` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);

--
-- Constraints for table `presence_periodontal_pocket`
--
ALTER TABLE `presence_periodontal_pocket`
  ADD CONSTRAINT `student_number_FK_9` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);

--
-- Constraints for table `root_fragment`
--
ALTER TABLE `root_fragment`
  ADD CONSTRAINT `student_number_FK_17` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);

--
-- Constraints for table `total_df_dmf`
--
ALTER TABLE `total_df_dmf`
  ADD CONSTRAINT `student_number_FK_20` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);

--
-- Constraints for table `upper_left`
--
ALTER TABLE `upper_left`
  ADD CONSTRAINT `student_number_FK_2` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);

--
-- Constraints for table `upper_right`
--
ALTER TABLE `upper_right`
  ADD CONSTRAINT `student_number_FK_1` FOREIGN KEY (`student_number`) REFERENCES `dental_student_details` (`student_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
