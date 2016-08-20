-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2016 at 03:18 AM
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

--
-- Dumping data for table `emergency_contacts`
--

INSERT INTO `emergency_contacts` (`id`, `country`, `contact_name`, `phone_numbers`, `contact_type`) VALUES
(1, 'GRC', 'ΕΚΑΒ', '166', ''),
(2, 'GRC', 'ΑΜΕΣΗ ΙΑΤΡΙΚΗ ΒΟΗΘΕΙΑ (INTERAMERICAN)', '168', ''),
(3, 'GRC', 'ΑΜΕΣΗ ΙΑΤΡΙΚΗ ΒΟΗΘΕΙΑ (ΙΑΤΡΙΚΟ ΚΕΝΤΡΟ ΑΘΗΝΩΝ)', '178', ''),
(4, 'GRC', 'ΚΕΝΤΡΟ ΑΜΕΣΗΣ ΒΟΗΘΕΙΑΣ ΣΤΡΑΤΟΥ', '103', ''),
(5, 'GRC', 'ΣΤΑΘΜΟΣ Α\' ΒΟΗΘΕΙΩΝ ΑΘΗΝΩΝ (ΠΑΡΟΧΗ ΠΛΗΡΟΦΟΡΙΩΝ)', '150', ''),
(6, 'GRC', 'ΣΤΑΘΜΟΣ Α\' ΒΟΗΘΕΙΩΝ ΙΚΑ', '64678116', ''),
(7, 'GRC', 'ΚΕΝΤΡΟ ΔΗΛΗΤΗΡΙΑΣΕΩΝ', '7793777', ''),
(8, 'GRC', 'ΚΕΝΤΡΟ ΑΙΜΟΔΟΣΙΑΣ', '8219391', ''),
(9, 'GRC', 'ΠΑΝΕΛΛΗΝΙΟΣ ΣΥΛΛΟΓΟΣ ΕΘΕΛΟΝΤΩΝ ΑΙΜΟΔΟΣΙΑΣ', '5247061', ''),
(10, 'GRC', 'ΠΥΡΟΣΒΕΣΤΙΚΗ ΥΠΗΡΕΣΙΑ', '199', ''),
(11, 'GRC', 'ΑΜΕΣΗ ΔΡΑΣΗ ΑΣΤΥΝΟΜΙΑΣ', '100', ''),
(12, 'GRC', 'ΚΟΙΝΩΝΙΚΗ ΒΟΗΘΕΙΑ', '197', ''),
(13, 'GRC', 'ΑΜΕΣΗ ΕΠΕΜΒΑΣΗ ΛΙΜΕΝΙΚΟΥ ΣΩΜΑΤΟΣ', '108', ''),
(14, 'GRC', 'ΕΦΗΜΕΡΙΕΣ ΝΟΣΟΚΟΜΕΙΩΝ-ΚΛΙΝΙΚΩΝ ΙΚΑ', '106', ''),
(15, 'GRC', 'ΕΦΗΜΕΡΙΕΣ ΙΑΤΡΩΝ ΑΘΗΝΑΣ-ΠΕΙΡΑΙΑ', '105', ''),
(16, 'GRC', 'ΕΦΗΜΕΡΙΕΣ ΙΑΤΡΩΝ ΛΟΙΠΩΝ ΔΗΜΩΝ ΠΕΡΙΟΧΗΣ ΠΡΩΤΕΥΟΥΣΗΣ', '101', ''),
(17, 'GRC', 'ΔΙΗΜΕΡΕΥΟΝΤΑ ΚΑΙ ΔΙΑΝΥΚΤΕΡΕΥΟΝΤΑ ΦΑΡΜΑΚΕΙΑ ΑΘΗΝΩΝ', '107', ''),
(18, 'GRC', 'ΔΙΗΜΕΡΕΥΟΝΤΑ ΚΑΙ ΔΙΑΝΥΚΤΕΡΕΥΟΝΤΑ ΦΑΡΜΑΚΕΙΑ ΠΡΟΑΣΤΙΩΝ', '', ''),
(19, 'GRC', 'ΤΡΟΧΑΙΑ ΑΘΗΝΩΝ', '5230111', ''),
(20, 'GRC', 'ΤΡΟΧΑΙΑ ΠΕΙΡΑΙΩΣ', '4113832', ''),
(21, 'GRC', 'ΑΝΑΚΡΙΤΙΚΟ ΤΡΟΧΑΙΑΣ', '5230101', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
