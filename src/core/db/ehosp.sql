-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 30, 2016 at 04:09 PM
-- Server version: 5.5.47
-- PHP Version: 5.5.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ehosp`
--

-- --------------------------------------------------------

--
-- Table structure for table `3d_bioprinting`
--

CREATE TABLE `3d_bioprinting` (
  `3d_task_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `genetic_code_id` int(11) NOT NULL,
  `type` enum('ORGAN','TISSUE','BONE','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bot_doctor_registry`
--

CREATE TABLE `bot_doctor_registry` (
  `bot_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doctors_registry`
--

CREATE TABLE `doctors_registry` (
  `doctor_id` int(11) NOT NULL,
  `specialty` enum('','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `surgeries`
--

CREATE TABLE `surgeries` (
  `surgery_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `name` mediumtext NOT NULL,
  `category` enum('CENTRAL NERVOUS SYSTEM','PERIPHERAL NERVOUS SYSTEM','ENDOCRINE','EYE','EARS','RESPIRATORY','CARDIOVASCULAR','LYMPHATIC','GASTROINTESTINAL / MOUTH','URINARY','MALE REPRODUCTIVE','FEMALE REPRODUCTIVE','BONE, CARTILAGE & JOINT','MUSCLE / SOFT TISSUE','BREAST','SKIN','OTHER / UNGROUPED') NOT NULL,
  `type` enum('-CENTESIS','-CLASIA','-DESIS','-ECTOMY','-OPSY','-OSCOPY','-OSTOMY','-OTOMY','-PEXY','-PLASTY','-RRHAPHY') NOT NULL,
  `effectiveness` enum('0','1','2','3','4','5','6','7','8','9','10') NOT NULL,
  `surgery_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_diagnosis`
--

CREATE TABLE `user_diagnosis` (
  `diagnosis_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `json_diagnosis_result` longtext NOT NULL COMMENT 'Diagnosis results stored as a JSON object',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_genetic_code`
--

CREATE TABLE `user_genetic_code` (
  `genetic_code_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `json_genetic_code` longtext NOT NULL COMMENT 'The geneticcode of the user stored as a JSON object'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_medical_history`
--

CREATE TABLE `user_medical_history` (
  `user_id` int(11) NOT NULL,
  `symptoms_json` longtext NOT NULL,
  `diagnosed_diseases_json` longtext NOT NULL,
  `surgeries_json` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_registry`
--

CREATE TABLE `user_registry` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `first_name` varchar(32) DEFAULT NULL,
  `last_name` varchar(32) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `gender` enum('MALE','FEMALE') DEFAULT NULL,
  `user_type` enum('DOCTOR','PATIENT') DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `birth_country` varchar(11) DEFAULT NULL,
  `social_security_number` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_symptoms`
--

CREATE TABLE `user_symptoms` (
  `symptoms_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `symptoms` longtext NOT NULL,
  `sysmptoms_severity` enum('1','2','3','4','5','6','7','8','9','10') NOT NULL,
  `symptoms_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_vital_signs`
--

CREATE TABLE `user_vital_signs` (
  `vital_signs_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `temperature` int(11) NOT NULL,
  `pulse` int(11) NOT NULL,
  `respiratory_rate` int(11) NOT NULL,
  `blood_pressure` int(11) NOT NULL,
  `blood_glucose_level` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `mass` int(11) NOT NULL,
  `body_mass_index` int(11) NOT NULL,
  `vitals_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `3d_bioprinting`
--
ALTER TABLE `3d_bioprinting`
  ADD PRIMARY KEY (`3d_task_id`),
  ADD KEY `genetic_code_id` (`genetic_code_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `bot_doctor_registry`
--
ALTER TABLE `bot_doctor_registry`
  ADD PRIMARY KEY (`bot_id`);

--
-- Indexes for table `doctors_registry`
--
ALTER TABLE `doctors_registry`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `surgeries`
--
ALTER TABLE `surgeries`
  ADD PRIMARY KEY (`surgery_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `user_diagnosis`
--
ALTER TABLE `user_diagnosis`
  ADD PRIMARY KEY (`diagnosis_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `user_genetic_code`
--
ALTER TABLE `user_genetic_code`
  ADD PRIMARY KEY (`genetic_code_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_medical_history`
--
ALTER TABLE `user_medical_history`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_registry`
--
ALTER TABLE `user_registry`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_symptoms`
--
ALTER TABLE `user_symptoms`
  ADD PRIMARY KEY (`symptoms_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_vital_signs`
--
ALTER TABLE `user_vital_signs`
  ADD PRIMARY KEY (`vital_signs_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `3d_bioprinting`
--
ALTER TABLE `3d_bioprinting`
  MODIFY `3d_task_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bot_doctor_registry`
--
ALTER TABLE `bot_doctor_registry`
  MODIFY `bot_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doctors_registry`
--
ALTER TABLE `doctors_registry`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surgeries`
--
ALTER TABLE `surgeries`
  MODIFY `surgery_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_diagnosis`
--
ALTER TABLE `user_diagnosis`
  MODIFY `diagnosis_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_genetic_code`
--
ALTER TABLE `user_genetic_code`
  MODIFY `genetic_code_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_registry`
--
ALTER TABLE `user_registry`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_symptoms`
--
ALTER TABLE `user_symptoms`
  MODIFY `symptoms_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_vital_signs`
--
ALTER TABLE `user_vital_signs`
  MODIFY `vital_signs_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `3d_bioprinting`
--
ALTER TABLE `3d_bioprinting`
  ADD CONSTRAINT `3d_bioprinting_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_registry` (`user_id`);

--
-- Constraints for table `surgeries`
--
ALTER TABLE `surgeries`
  ADD CONSTRAINT `surgeries_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctors_registry` (`doctor_id`),
  ADD CONSTRAINT `surgeries_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_registry` (`user_id`);

--
-- Constraints for table `user_diagnosis`
--
ALTER TABLE `user_diagnosis`
  ADD CONSTRAINT `user_diagnosis_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctors_registry` (`doctor_id`),
  ADD CONSTRAINT `user_diagnosis_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_registry` (`user_id`);

--
-- Constraints for table `user_genetic_code`
--
ALTER TABLE `user_genetic_code`
  ADD CONSTRAINT `user_genetic_code_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_registry` (`user_id`);

--
-- Constraints for table `user_medical_history`
--
ALTER TABLE `user_medical_history`
  ADD CONSTRAINT `user_medical_history_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_registry` (`user_id`);

--
-- Constraints for table `user_symptoms`
--
ALTER TABLE `user_symptoms`
  ADD CONSTRAINT `user_symptoms_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_registry` (`user_id`);

--
-- Constraints for table `user_vital_signs`
--
ALTER TABLE `user_vital_signs`
  ADD CONSTRAINT `user_vital_signs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_registry` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
