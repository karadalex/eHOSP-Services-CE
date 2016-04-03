-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 31, 2016 at 04:37 PM
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
-- Table structure for table `arduino_log`
--

CREATE TABLE `arduino_log` (
  `ard_log_id` int(11) NOT NULL,
  `arduino_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `arduino_registry`
--

CREATE TABLE `arduino_registry` (
  `arduino_id` int(11) NOT NULL,
  `nxt_link_connection` int(11) NOT NULL,
  `raspberrypi_link_connection` int(11) NOT NULL,
  `model` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bot_doctor_log`
--

CREATE TABLE `bot_doctor_log` (
  `log_id` int(11) NOT NULL,
  `bot_id` int(11) NOT NULL
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
  `specialty` enum('ALLERGY & IMMUNOLOGY','ADOLESCENT MEDICINE','ANAESTHESIOLOGY','PATHOLOGY','CARDIOLOGY','PEDIATRIC CARDIOLOGY','CARDIOTHORACIC SURGERY','CHILD/ADOLESCENT PSYCHIATRY & PSYCHOTHERAPY','CLINICAL NEUROPHYSIOLOGY','DERMATO-VENEREOLOGY','EMERGENCY MEDICINE','ENDOCRINOLOGY','GASTROENTEROLOGY','GENERAL PRACTICE','GERIATRICS','OBSTETRICS & GYNAECOLOGY','HEALTH INFORMATICS','HOSPICE & PALLIATIVE MEDICINE','INFECTIOUS DISEASE','INTERNAL MEDICINE','INTERVENTIONAL RADIOLOGY','VASCULAR MEDICINE','MICROBIOLOGY','NEPHROLOGY','NEUROLOGY','NEUROSURGERY','NUCLEAR MEDICINE','OCCUPATIONAL MEDICINE','OPTHALMOLOGY','ORTHOPAEDICS','ORAL & MAXILLOFACIAL SURGERY','OTORHINOLARYNGOLOGY','PAEDIATRICS','PAEDIATRIC ALLERGOLOGY','PAEDIATRIC ENDOCRINOLLOGY & DIABETES','PAEDIATRIC GASTROENTEROLOGY, HEPATOLOGY & NUTRITION','PAEDIATRIC HAEMATOLOGY & ONCOLOGY','PAEDIATRIC INFECTIOUS DISEASES','NEONATOLOGY','PAEDIATRIC NEPHROLOGY','PAEDIATRIC RESPIRATORY MEDICINE','PAEDIATRIC RHEUMATOLOGY','PAEDIATRIC SURGERY','PHYSICAL MEDICINE & REHABILITATION','PLASTIC, RECONSTRUCTIVE & AESTHETIC SURGERY','PODIATRIC MEDICINE','PULMONOLOGY','PSYCHIATRY','PUBLIC HEALTH','RADIOLOGY','SPORTS MEDICINE','NEURORADIOLOGY','RADIOTHERAPY','GENERAL SURGERY','UROLOGY','VASCULAR SURGERY') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_log`
--

CREATE TABLE `doctor_log` (
  `log_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nxt_log`
--

CREATE TABLE `nxt_log` (
  `nxt_log_id` int(11) NOT NULL,
  `nxt_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nxt_registry`
--

CREATE TABLE `nxt_registry` (
  `nxt_id` int(11) NOT NULL,
  `arduino_link_connection` int(11) NOT NULL,
  `raspberrypi_link_connection` int(11) NOT NULL,
  `model` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `raspberrypi_log`
--

CREATE TABLE `raspberrypi_log` (
  `rasp_log_id` int(11) NOT NULL,
  `raspberrypi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `raspberrypi_registry`
--

CREATE TABLE `raspberrypi_registry` (
  `raspberrypi_id` int(11) NOT NULL,
  `server_link_connection` int(11) NOT NULL,
  `arduino_link_connection` int(11) NOT NULL,
  `nxt_link_connection` int(11) NOT NULL,
  `model` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `surgeries`
--

CREATE TABLE `surgeries` (
  `surgery_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `diagnosis_id` int(11) NOT NULL,
  `name` mediumtext NOT NULL,
  `category` enum('CENTRAL NERVOUS SYSTEM','PERIPHERAL NERVOUS SYSTEM','ENDOCRINE','EYE','EARS','RESPIRATORY','CARDIOVASCULAR','LYMPHATIC','GASTROINTESTINAL / MOUTH','URINARY','MALE REPRODUCTIVE','FEMALE REPRODUCTIVE','BONE, CARTILAGE & JOINT','MUSCLE / SOFT TISSUE','BREAST','SKIN','OTHER / UNGROUPED') NOT NULL,
  `type` enum('-CENTESIS','-CLASIA','-DESIS','-ECTOMY','-OPSY','-OSCOPY','-OSTOMY','-OTOMY','-PEXY','-PLASTY','-RRHAPHY') NOT NULL,
  `3d_task_id` int(11) NOT NULL,
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
  `symptoms_id` int(11) NOT NULL,
  `genetic_code_id` int(11) NOT NULL,
  `json_diagnosis_result` longtext NOT NULL COMMENT 'Diagnosis results stored as a JSON object',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `medical_history_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_genetic_code`
--

CREATE TABLE `user_genetic_code` (
  `genetic_code_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `medical_history_id` int(11) NOT NULL,
  `json_genetic_code` longtext NOT NULL COMMENT 'The geneticcode of the user stored as a JSON object'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
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
-- Indexes for table `arduino_log`
--
ALTER TABLE `arduino_log`
  ADD PRIMARY KEY (`ard_log_id`,`arduino_id`),
  ADD KEY `arduino_id` (`arduino_id`);

--
-- Indexes for table `arduino_registry`
--
ALTER TABLE `arduino_registry`
  ADD PRIMARY KEY (`arduino_id`),
  ADD KEY `nxt_link_connection` (`nxt_link_connection`),
  ADD KEY `raspberrypi_link_connection` (`raspberrypi_link_connection`);

--
-- Indexes for table `bot_doctor_log`
--
ALTER TABLE `bot_doctor_log`
  ADD PRIMARY KEY (`log_id`,`bot_id`),
  ADD KEY `bot_id` (`bot_id`);

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
-- Indexes for table `doctor_log`
--
ALTER TABLE `doctor_log`
  ADD PRIMARY KEY (`log_id`,`doctor_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `nxt_log`
--
ALTER TABLE `nxt_log`
  ADD PRIMARY KEY (`nxt_log_id`,`nxt_id`),
  ADD KEY `nxt_id` (`nxt_id`);

--
-- Indexes for table `nxt_registry`
--
ALTER TABLE `nxt_registry`
  ADD PRIMARY KEY (`nxt_id`),
  ADD KEY `raspberrypi_link_connection` (`raspberrypi_link_connection`),
  ADD KEY `arduino_link_connection` (`arduino_link_connection`);

--
-- Indexes for table `raspberrypi_log`
--
ALTER TABLE `raspberrypi_log`
  ADD PRIMARY KEY (`rasp_log_id`,`raspberrypi_id`),
  ADD KEY `raspberrypi_id` (`raspberrypi_id`);

--
-- Indexes for table `raspberrypi_registry`
--
ALTER TABLE `raspberrypi_registry`
  ADD PRIMARY KEY (`raspberrypi_id`),
  ADD KEY `arduino_link_connection` (`arduino_link_connection`),
  ADD KEY `nxt_link_connection` (`nxt_link_connection`);

--
-- Indexes for table `surgeries`
--
ALTER TABLE `surgeries`
  ADD PRIMARY KEY (`surgery_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `3d_task_id` (`3d_task_id`),
  ADD KEY `diagnosis_id` (`diagnosis_id`);

--
-- Indexes for table `user_diagnosis`
--
ALTER TABLE `user_diagnosis`
  ADD PRIMARY KEY (`diagnosis_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `symptoms_id` (`symptoms_id`),
  ADD KEY `genetic_code_id` (`genetic_code_id`),
  ADD KEY `medical_history_id` (`medical_history_id`);

--
-- Indexes for table `user_genetic_code`
--
ALTER TABLE `user_genetic_code`
  ADD PRIMARY KEY (`genetic_code_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `medical_history_id` (`medical_history_id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`log_id`,`user_id`),
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
-- AUTO_INCREMENT for table `arduino_log`
--
ALTER TABLE `arduino_log`
  MODIFY `ard_log_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `arduino_registry`
--
ALTER TABLE `arduino_registry`
  MODIFY `arduino_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bot_doctor_log`
--
ALTER TABLE `bot_doctor_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `doctor_log`
--
ALTER TABLE `doctor_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nxt_log`
--
ALTER TABLE `nxt_log`
  MODIFY `nxt_log_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nxt_registry`
--
ALTER TABLE `nxt_registry`
  MODIFY `nxt_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `raspberrypi_log`
--
ALTER TABLE `raspberrypi_log`
  MODIFY `rasp_log_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `raspberrypi_registry`
--
ALTER TABLE `raspberrypi_registry`
  MODIFY `raspberrypi_id` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;
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
  ADD CONSTRAINT `3d_bioprinting_ibfk_2` FOREIGN KEY (`genetic_code_id`) REFERENCES `user_genetic_code` (`genetic_code_id`),
  ADD CONSTRAINT `3d_bioprinting_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_registry` (`user_id`);

--
-- Constraints for table `arduino_log`
--
ALTER TABLE `arduino_log`
  ADD CONSTRAINT `arduino_log_ibfk_1` FOREIGN KEY (`arduino_id`) REFERENCES `arduino_registry` (`arduino_id`);

--
-- Constraints for table `bot_doctor_log`
--
ALTER TABLE `bot_doctor_log`
  ADD CONSTRAINT `bot_doctor_log_ibfk_1` FOREIGN KEY (`bot_id`) REFERENCES `bot_doctor_registry` (`bot_id`);

--
-- Constraints for table `doctor_log`
--
ALTER TABLE `doctor_log`
  ADD CONSTRAINT `doctor_log_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctors_registry` (`doctor_id`);

--
-- Constraints for table `nxt_log`
--
ALTER TABLE `nxt_log`
  ADD CONSTRAINT `nxt_log_ibfk_1` FOREIGN KEY (`nxt_id`) REFERENCES `nxt_registry` (`nxt_id`);

--
-- Constraints for table `raspberrypi_log`
--
ALTER TABLE `raspberrypi_log`
  ADD CONSTRAINT `raspberrypi_log_ibfk_1` FOREIGN KEY (`raspberrypi_id`) REFERENCES `raspberrypi_registry` (`raspberrypi_id`);

--
-- Constraints for table `surgeries`
--
ALTER TABLE `surgeries`
  ADD CONSTRAINT `surgeries_ibfk_4` FOREIGN KEY (`diagnosis_id`) REFERENCES `user_diagnosis` (`diagnosis_id`),
  ADD CONSTRAINT `surgeries_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_registry` (`user_id`),
  ADD CONSTRAINT `surgeries_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctors_registry` (`doctor_id`),
  ADD CONSTRAINT `surgeries_ibfk_3` FOREIGN KEY (`3d_task_id`) REFERENCES `3d_bioprinting` (`3d_task_id`);

--
-- Constraints for table `user_diagnosis`
--
ALTER TABLE `user_diagnosis`
  ADD CONSTRAINT `user_diagnosis_ibfk_5` FOREIGN KEY (`medical_history_id`) REFERENCES `user_medical_history` (`user_id`),
  ADD CONSTRAINT `user_diagnosis_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_registry` (`user_id`),
  ADD CONSTRAINT `user_diagnosis_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctors_registry` (`doctor_id`),
  ADD CONSTRAINT `user_diagnosis_ibfk_3` FOREIGN KEY (`symptoms_id`) REFERENCES `user_symptoms` (`symptoms_id`),
  ADD CONSTRAINT `user_diagnosis_ibfk_4` FOREIGN KEY (`genetic_code_id`) REFERENCES `user_genetic_code` (`genetic_code_id`);

--
-- Constraints for table `user_genetic_code`
--
ALTER TABLE `user_genetic_code`
  ADD CONSTRAINT `user_genetic_code_ibfk_2` FOREIGN KEY (`medical_history_id`) REFERENCES `user_medical_history` (`user_id`),
  ADD CONSTRAINT `user_genetic_code_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_registry` (`user_id`);

--
-- Constraints for table `user_log`
--
ALTER TABLE `user_log`
  ADD CONSTRAINT `user_log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_registry` (`user_id`);

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
