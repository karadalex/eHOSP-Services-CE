-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2016 at 02:58 AM
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
-- Dumping data for table `gis_remote_nodes`
--

INSERT INTO `gis_remote_nodes` (`id`, `name`, `continent`, `country`, `region`, `nearest_city`, `latitude`, `longitude`, `elevation`, `population`, `status`) VALUES
(1, 'Kiprinos', 'Europe', 'Greece', 'Evros, Thraki', '', 41.5752, 26.2288, 68, 0, 0),
(2, 'Soufli', 'Europe', 'Greece', 'Evros, Thraki', '', 41.2444, 26.1359, 308, 0, 0),
(3, 'Metaksades', 'Europe', 'Greece', 'Evros, Thraki', '', 41.4198, 26.2241, 133, 0, 0),
(4, 'Avdira', 'Europe', 'Greece', 'Ksanthi, Thraki', '', 41.048, 24.9754, 16, 0, 0),
(5, 'Stavroupoli', 'Europe', 'Greece', 'Ksanthi, Thraki', '', 41.198, 24.7055, 108, 0, 0),
(6, 'Fillira', 'Europe', 'Greece', 'Rodopi, Thraki', '', 41.157, 25.6392, 212, 0, 0),
(7, 'Arriana', 'Europe', 'Greece', 'Rodopi, Thraki', '', 41.0826, 25.6951, 57, 0, 0),
(8, 'Gratini', 'Europe', 'Greece', 'Rodopi, Thraki', '', 41.1435, 25.5335, 91, 0, 0),
(9, 'Xoristi', 'Europe', 'Greece', 'Drama, Macedonia', '', 41.1314, 24.2086, 120, 0, 0),
(10, 'Paranesti', 'Europe', 'Greece', 'Drama, Macedonia', '', 41.2671, 24.5008, 122, 0, 0),
(11, 'Mikropoli', 'Europe', 'Greece', 'Drama, Macedonia', '', 41.1919, 23.8206, 334, 0, 0),
(12, 'Kalampaki', 'Europe', 'Greece', 'Drama, Macedonia', '', 41.0519, 24.1877, 71, 0, 0),
(13, 'Galipsos', 'Europe', 'Greece', 'Kavala, Macedonia', '', 40.8032, 23.9502, 174, 0, 0),
(14, 'Avli', 'Europe', 'Greece', 'Kavala, Macedonia', '', 40.8738, 24.1788, 148, 0, 0),
(15, 'Eleftheroupoli', 'Europe', 'Greece', 'Kavala, Macedonia', '', 40.9157, 24.2547, 74, 0, 0),
(16, 'Mavrothalassa', 'Europe', 'Greece', 'Serres, Macedonia', '', 40.8946, 23.7511, 24, 0, 0),
(17, 'Rodolivos', 'Europe', 'Greece', 'Serres, Macedonia', '', 40.9202, 23.9742, 354, 0, 0),
(18, 'Palaiokomi', 'Europe', 'Greece', 'Serres, Macedonia', '', 40.871, 23.9011, 140, 0, 0),
(19, 'Polikastro', 'Europe', 'Greece', 'Kilkis, Macedonia', '', 40.9972, 22.5704, 43, 0, 0),
(20, 'Nea Maditos', 'Europe', 'Greece', 'Thessaloniki, Macedonia', '', 40.6228, 23.5629, 68, 0, 0),
(21, 'Souroti/Peristera', 'Europe', 'Greece', 'Thessaloniki, Macedonia', '', 40.4724, 23.0927, 104, 0, 0),
(22, 'Ammouliani', 'Europe', 'Greece', 'Chalkidiki, Macedonia', '', 40.3314, 23.922, 9, 0, 0),
(23, 'Kassandreia', 'Europe', 'Greece', 'Chalkidiki, Macedonia', '', 40.048, 23.4135, 51, 0, 0),
(24, 'Aleksandreia', 'Europe', 'Greece', 'Imathia, Macedonia', '', 40.6279, 22.4446, 8, 0, 0),
(25, 'Plati', 'Europe', 'Greece', 'Imathia, Macedonia', '', 40.6426, 22.5355, 6, 0, 0),
(26, 'Vergina', 'Europe', 'Greece', 'Imathia, Macedonia', '', 40.4877, 22.3159, 105, 0, 0),
(27, 'Litoxoro', 'Europe', 'Greece', 'Pieria, Macedonia', '', 40.1029, 22.5026, 308, 0, 0),
(28, 'Platamonas', 'Europe', 'Greece', 'Pieria, Macedonia', '', 39.9901, 22.6239, 11, 0, 0),
(29, 'Argos Orestiko', 'Europe', 'Greece', 'Kastoria, Macedonia', '', 40.4527, 21.2587, 650, 0, 0),
(30, 'Nestorio', 'Europe', 'Greece', 'Kastoria, Macedonia', '', 40.387, 20.9745, 1456, 0, 0),
(31, 'Koresteia', 'Europe', 'Greece', 'Kastoria, Macedonia', '', 40.6228, 21.2029, 825, 0, 0),
(32, 'Velventos', 'Europe', 'Greece', 'Kozani, Macedonia', '', 40.2545, 22.0743, 442, 0, 0),
(33, 'Delvinaki', 'Europe', 'Greece', 'Ioannina, Ipiros', '', 39.934, 20.4655, 673, 0, 0),
(34, 'Pramanta', 'Europe', 'Greece', 'Ioannina, Ipiros', '', 39.5228, 21.1044, 21.1044, 0, 0),
(35, 'Vasiliki', 'Europe', 'Greece', 'Lefkada, Eptanisa', '', 38.6287, 20.609, 4, 0, 0),
(36, 'Sami', 'Europe', 'Greece', 'Kefallonia, Eptanisa', '', 38.2514, 20.6472, 0, 0, 0),
(37, 'Karavados', 'Europe', 'Greece', 'Kefallonia, Eptanisa', '', 38.1296, 20.583, 122, 0, 0),
(38, 'Zagora', 'Europe', 'Greece', 'Magnisia, Thessalia', '', 39.4416, 23.1028, 500, 0, 0),
(39, 'Argalasti', 'Europe', 'Greece', 'Magnisia, Thessalia', '', 39.2259, 23.2195, 248, 0, 0),
(40, 'Skopelos', 'Europe', 'Greece', 'Magnisia, Thessalia', '', 39.1251, 23.68, 404, 0, 0),
(41, 'Elati', 'Europe', 'Greece', 'Trikala, Thessalia', '', 39.5043, 21.5351, 927, 0, 0),
(42, 'Oixalia', 'Europe', 'Greece', 'Trikala, Thessalia', '', 39.6071, 21.9814, 109, 0, 0),
(43, 'Neraida', 'Europe', 'Greece', 'Trikala, Thessalia', '', 39.2831, 22.5512, 246, 0, 0),
(44, 'Farkadona', 'Europe', 'Greece', 'Trikala, Thessalia', '', 39.6252, 22.0715, 199, 0, 0),
(45, 'Mouzaki', 'Europe', 'Greece', 'Karditsa, Thessalia', '', 39.3941, 21.6422, 326, 0, 0),
(46, 'Sofades', 'Europe', 'Greece', 'Karditsa, Thessalia', '', 39.3359, 22.0916, 110, 0, 0),
(47, 'Mitropoli', 'Europe', 'Greece', 'Karditsa, Thessalia', '', 39.305, 21.8449, 187, 0, 0),
(48, 'Anafi', 'Europe', 'Greece', 'Kiklades,  Aegean', '', 36.3632, 25.7694, 313, 0, 0),
(49, 'Kimolos', 'Europe', 'Greece', 'Kiklades,  Aegean', '', 36.7929, 24.5747, 83, 0, 0),
(50, 'Folegandros', 'Europe', 'Greece', 'Kiklades,  Aegean', '', 36.6171, 24.9161, 305, 0, 0),
(51, 'Lipsoi', 'Europe', 'Greece', 'Kiklades,  Aegean', '', 37.3011, 26.7438, 197, 0, 0),
(52, 'Kasos', 'Europe', 'Greece', 'Dodekanisa, Aegean', '', 35.4011, 26.9264, 144, 0, 0),
(53, 'Gennadi (Rodhes)', 'Europe', 'Greece', 'Dodekanisa, Aegean', '', 36.0236, 27.9233, 34, 0, 0),
(54, 'Tilos', 'Europe', 'Greece', 'Dodekanisa, Aegean', '', 36.4231, 27.3734, 196, 0, 0),
(55, 'Mitikas', 'Europe', 'Greece', 'Aitoloakarnania, Sterea Ellada', '', 38.6676, 20.9448, 2, 0, 0),
(56, 'Astakos', 'Europe', 'Greece', 'Aitoloakarnania, Sterea Ellada', '', 38.5357, 21.0821, 7, 0, 0),
(57, 'Empesos', 'Europe', 'Greece', 'Aitoloakarnania, Sterea Ellada', '', 39.0234, 21.3212, 307, 0, 0),
(58, 'Aggelokastro', 'Europe', 'Greece', 'Aitoloakarnania, Sterea Ellada', '', 38.5655, 21.296, 64, 0, 0),
(59, 'Prousos', 'Europe', 'Greece', 'Evritania, Sterea Ellada', '', 38.7445, 21.6534, 789, 0, 0),
(60, 'Dytiki Fragkista', 'Europe', 'Greece', 'Evritania, Sterea Ellada', '', 38.9268, 21.5945, 814, 0, 0),
(61, 'Agrafa', 'Europe', 'Greece', 'Evritania, Sterea Ellada', '', 39.1375, 21.6494, 841, 0, 0),
(62, 'Granitsa', 'Europe', 'Greece', 'Evritania, Sterea Ellada', '', 39.1013, 21.5112, 814, 0, 0),
(63, 'Pelasgia', 'Europe', 'Greece', 'Fthiotida, Sterea Ellada', '', 38.9485, 22.84, 213, 0, 0),
(64, 'Livanates', 'Europe', 'Greece', 'Fthiotida, Sterea Ellada', '', 38.7115, 23.0507, 38, 0, 0),
(65, 'Agios Konstantinos', 'Europe', 'Greece', 'Fthiotida, Sterea Ellada', '', 38.7574, 22.8562, 10, 0, 0),
(66, 'Raches', 'Europe', 'Greece', 'Fthiotida, Sterea Ellada', '', 38.8906, 22.781, 108, 0, 0),
(67, 'Mantoudi', 'Europe', 'Greece', 'Evoia, Sterea Ellada', '', 38.7991, 23.4796, 40, 0, 0),
(68, 'Platanistos', 'Europe', 'Greece', 'Evoia, Sterea Ellada', '', 38.0181, 24.5167, 196, 0, 0),
(69, 'Stropones', 'Europe', 'Greece', 'Evoia, Sterea Ellada', '', 38.6181, 23.89, 331, 0, 0),
(70, 'Paradisi', 'Europe', 'Greece', 'Evoia, Sterea Ellada', '', 38.0754, 24.3801, 307, 0, 0),
(71, 'Gimno', 'Europe', 'Greece', 'Evoia, Sterea Ellada', '', 38.4391, 23.8851, 134, 0, 0),
(72, 'Skiros', 'Europe', 'Greece', 'Evoia, Sterea Ellada', '', 38.8163, 24.5955, 446, 0, 0),
(73, 'Domvrena', 'Europe', 'Greece', 'Biotia, Sterea Ellada', '', 38.2529, 22.9822, 152, 0, 0),
(74, 'Akrefnio', 'Europe', 'Greece', 'Biotia, Sterea Ellada', '', 38.4565, 23.2213, 197, 0, 0),
(75, 'Erimanthia', 'Europe', 'Greece', 'Achaia, Peloponnese', '', 37.9819, 21.7255, 409, 0, 0),
(76, 'Klitoria', 'Europe', 'Greece', 'Achaia, Peloponnese', '', 37.8947, 22.1246, 533, 0, 0),
(77, 'Zarouchleika', 'Europe', 'Greece', 'Achaia, Peloponnese', '', 38.2147, 21.7289, 14, 0, 0),
(78, 'Psofida', 'Europe', 'Greece', 'Achaia, Peloponnese', '', 37.8778, 21.8995, 597, 0, 0),
(79, 'Chalandritsa', 'Europe', 'Greece', 'Achaia, Peloponnese', '', 38.1088, 21.7838, 351, 0, 0),
(80, 'Simopoulo', 'Europe', 'Greece', 'Hlia, Peloponnese', '', 37.8489, 21.5715, 203, 0, 0),
(81, 'Elafonisos', 'Europe', 'Greece', 'Lakonia, Peloponnese', '', 36.4876, 22.9595, 109, 0, 0),
(82, 'Agios Nikolaos Voion', 'Europe', 'Greece', 'Lakonia, Peloponnese', '', 36.513, 23.0606, 12, 0, 0),
(83, 'Mavromati (Ithomis)', 'Europe', 'Greece', 'Messinia, Peloponnese', '', 37.1794, 21.9238, 408, 0, 0),
(84, 'Kardamili', 'Europe', 'Greece', 'Messinia, Peloponnese', '', 36.887, 22.233, 14, 0, 0),
(85, 'Ampelionas', 'Europe', 'Greece', 'Messinia, Peloponnese', '', 37.4352, 21.949, 820, 0, 0),
(86, 'Kampos', 'Europe', 'Greece', 'Messinia, Peloponnese', '', 36.938, 22.2028, 299, 0, 0),
(87, 'Kiato', 'Europe', 'Greece', 'Korinthia, Peloponnese', '', 38.0127, 22.7502, 1, 0, 0),
(88, 'Kalianoi', 'Europe', 'Greece', 'Korinthia, Peloponnese', '', 37.8891, 22.4947, 694, 0, 0),
(89, 'Gkoura', 'Europe', 'Greece', 'Korinthia, Peloponnese', '', 37.9326, 22.3408, 956, 0, 0),
(90, 'Kissamos', 'Europe', 'Greece', 'Chania, Crete', '', 35.4946, 23.6537, 21, 0, 0),
(91, 'Kandanos', 'Europe', 'Greece', 'Chania, Crete', '', 35.3274, 23.7416, 431, 0, 0),
(92, 'Anogia', 'Europe', 'Greece', 'Rethimno, Crete', '', 35.2897, 24.8845, 760, 0, 0),
(93, 'Spili', 'Europe', 'Greece', 'Rethimno, Crete', '', 35.2188, 24.5358, 417, 0, 0),
(94, 'Agia Fotini', 'Europe', 'Greece', 'Rethimno, Crete', '', 35.2546, 24.6342, 479, 0, 0),
(95, 'Tilissos', 'Europe', 'Greece', 'Iraklio, Crete', '', 35.297, 25.0182, 196, 0, 0),
(96, 'Charakas', 'Europe', 'Greece', 'Iraklio, Crete', '', 35.0119, 25.1203, 294, 0, 0),
(97, 'Tzermiado', 'Europe', 'Greece', 'Lasithi, Crete', '', 35.1995, 25.4891, 837, 0, 0),
(98, 'Chandras', 'Europe', 'Greece', 'Lasithi, Crete', '', 35.0812, 26.0995, 574, 0, 0),
(99, 'Tourloti', 'Europe', 'Greece', 'Lasithi, Crete', '', 35.1841, 25.905, 5, 0, 0),
(100, 'Psixro', 'Europe', 'Greece', 'Lasithi, Crete', '', 35.1649, 25.4506, 837, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
