-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2020 at 05:27 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_tempat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tempat` varchar(50) NOT NULL,
  `Senin` varchar(50) NOT NULL,
  `Selasa` varchar(50) NOT NULL,
  `Rabu` varchar(50) NOT NULL,
  `Kamis` varchar(50) NOT NULL,
  `Jumat` varchar(50) NOT NULL,
  `Sabtu` varchar(50) NOT NULL,
  `Minggu` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tempat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_tempat`, `nama_tempat`, `Senin`, `Selasa`, `Rabu`, `Kamis`, `Jumat`, `Sabtu`, `Minggu`) VALUES
(1, 'Puskesmas Boyolali I', '08:00-15:00', '08:00-15:00', '08:00-15:00', '08:00-01:00', '08:00-15:00', '08:00-15:00', 'Libur'),
(2, 'Puskesmas Boyolali II', '07.30-12.00', '07.30-12.00', '07.30-12.00', '07.30-12.00', '07.30-12.00', '07.30-12.00', 'Libur'),
(3, 'Klinik PMI Boyolali', '08.00-16.00', '08.00-16.00', '08.00-16.00', '08.00-16.00', '08.00-16.00', '08.00-16.00', 'Libur'),
(4, 'Klinik Pratama Rawat Jalan Bhayangkara', '08.00-15.00', '08.00-15.00', '08.00-15.00', '08.00-15.00', '08.00-15.00', '08.00-15.00', 'Libur'),
(5, 'Klinik Kartika 24 Boyolali', '08.00-15.00', '08.00-15.00', '08.00-15.00', '08.00-15.00', '08.00-15.00', '08.00-15.00', 'Libur'),
(6, 'Klinik Pratama Firena Husada', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', 'Libur'),
(7, 'Klinik Pratama Miranti', '08.00-21.00', '08.00-21.00', '08.00-21.00', '08.00-21.00', '08.00-21.00', '08.00-21.00', 'Libur'),
(8, 'Klinik Pratama RJ Ellena', '08.00-16.00', '08.00-16.00', '08.00-16.00', '08.00-16.00', '08.00-16.00', '08.00-16.00', 'Libur'),
(9, 'Dr. Thomas Handoko', 'Pagi 06.00-08.00 Sore 16.00 - 18.00', 'Pagi 06.00-08.00 Sore 16.00 - 18.00', 'Pagi 06.00-08.00 Sore 16.00 - 18.00', 'Pagi 06.00-08.00 Sore 16.00 - 18.00', 'Pagi 06.00-08.00 Sore 16.00 - 18.00', 'Pagi 06.00-08.00 Sore 16.00 - 18.00', 'Pagi 06.00-08.00 Sore 16.00 - 18.00'),
(10, 'Dr. Denta Priambada', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam'),
(11, 'Dr. Argadia Yuni piyadi S.PA', 'Pagi 06.00-07.15 Sore 16.00 - 18.00', 'Pagi 06.00-07.15 Sore 16.00 - 18.00', 'Pagi 06.00-07.15 Sore 16.00 - 18.00', 'Pagi 06.00-07.15 Sore 16.00 - 18.00', 'Pagi 06.00-07.15 Sore 16.00 - 18.00', 'Pagi 06.00-07.15 Sore 16.00 - 18.00', 'Pagi 06.00-07.15 Sore 16.00 - 18.00'),
(12, 'Dr. Khu Winy Kusila', '08.00-16.00', '08.00-16.00', '08.00-16.00', '08.00-16.00', '08.00-16.00', '08.00-16.00', '08.00-16.00'),
(13, 'Dr. Bambang Sugiharto', 'Pagi 05.30-07.30 Sore 16.00-21.00', 'Pagi 05.30-07.30 Sore 16.00-21.00', 'Pagi 05.30-07.30 Sore 16.00-21.00', 'Pagi 05.30-07.30 Sore 16.00-21.00', 'Pagi 05.30-07.30 Sore 16.00-21.00', 'Pagi 05.30-07.30 Sore 16.00-21.00', 'Libur'),
(14, 'Dr. Lilik Wijayanti', 'Pagi 05.30-06.30 Sore 15.30-20.00', 'Pagi 05.30-06.30 Sore 15.30-20.00', 'Pagi 05.30-06.30 Sore 15.30-20.00', 'Pagi 05.30-06.30 Sore 15.30-20.00', 'Pagi 05.30-06.30 Sore 15.30-20.00', 'Pagi 05.30-06.30 Sore 15.30-20.00', 'Libur'),
(15, 'Puskesmas Musuk', '07.30-13.30', '07.30-13.30', '07.30-13.30', '07.30-13.30', '07.30-13.30', '', 'Libur'),
(16, 'Dr. Nurharyadi', 'Pagi 05.30-06.30 Sore 16.30-20.00', 'Pagi 05.30-06.30 Sore 16.30-20.00', 'Pagi 05.30-06.30 Sore 16.30-20.00', 'Pagi 05.30-06.30 Sore 16.30-20.00', 'Pagi 05.30-06.30 Sore 16.30-20.00', 'Pagi 05.30-06.30 Sore 16.30-20.00', 'Libur'),
(17, 'Dr. Deasy Vebriana Pananingrum', 'Pagi 06.00-07.00 Sore 16.00-19.00', 'Pagi 06.00-07.00 Sore 16.00-19.00', 'Pagi 06.00-07.00 Sore 16.00-19.00', 'Pagi 06.00-07.00 Sore 16.00-19.00', 'Pagi 06.00-07.00 Sore 16.00-19.00', 'Pagi 06.00-07.00 Sore 16.00-19.00', 'Libur'),
(18, 'Puskesmas Taman Sari', '08:00-15:00', '08:00-15:00', '08:00-15:00', '08:00-', '08:00-15:00', '08:00-15:00', 'Libur'),
(19, 'Puskesmas Ampel', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam'),
(20, 'Dr. Esha Krestriana', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.01', 'Pagi 06.00-07.00 Sore 16.00-20.02', 'Pagi 06.00-07.00 Sore 16.00-20.03', 'Pagi 06.00-07.00 Sore 16.00-20.04', 'Pagi 06.00-07.00 Sore 16.00-20.05', 'Libur'),
(21, 'Dr. Latifah Indriasari U.', 'Pagi 05.30-07.00 Sore 15.00-20.30', 'Pagi 05.30-07.00 Sore 15.00-20.30', 'Pagi 05.30-07.00 Sore 15.00-20.30', 'Pagi 05.30-07.00 Sore 15.00-20.30', 'Pagi 05.30-07.00 Sore 15.00-20.30', 'Pagi 05.30-07.00 Sore 15.00-20.30', 'Libur'),
(22, 'Dr. Nor Anisa', '08:00-21:00', '08:00-21:00', '08:00-21:00', '08:00-21:00', '08:00-21:00', '08:00-21:00', '08:00-21:00'),
(23, 'Dr. Wiki Lestari', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Libur'),
(24, 'Puskesmas Gladagsari', '07.30-13.00', '07.30-13.01', '07.30-13.02', '07.30-13.03', '07.30-13.04', '07.30-13.05', 'Libur'),
(25, 'Dr. Pramono', 'Pagi 06.00-07.30 Sore 15.30-19.30', 'Pagi 06.00-07.30 Sore 15.30-19.30', 'Pagi 06.00-07.30 Sore 15.30-19.30', 'Pagi 06.00-07.30 Sore 15.30-19.30', 'Pagi 06.00-07.30 Sore 15.30-19.30', 'Pagi 06.00-07.30 Sore 15.30-19.30', 'Libur'),
(26, 'Klinik Pratama Rawat Inap Sumber Waras', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam'),
(27, 'Puskesmas Cepogo', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam'),
(28, 'Klinik Insan Sehat', '08.00-16.00', '08.00-16.00', '08.00-16.00', '08.00-16.00', '08.00-16.00', '08.00-16.00', 'Libur'),
(29, 'Dr.Syamsudin, M.Kes', 'Pagi 06.00-07.30 Sore 15.30-20.30', 'Pagi 06.00-07.30 Sore 15.30-20.30', 'Pagi 06.00-07.30 Sore 15.30-20.30', 'Pagi 06.00-07.30 Sore 15.30-20.30', 'Pagi 06.00-07.30 Sore 15.30-20.30', 'Pagi 06.00-07.30 Sore 15.30-20.30', 'Libur'),
(30, 'Puskesmas Selo', '07.30-15.00', '07.30-15.00', '07.30-15.00', '07.30-15.00', '07.30-15.00', '07.30-15.00', 'Libur'),
(31, 'Dr. Raditya Endro K', 'Pagi 05.30-07.00 Sore 15.30-20.00', 'Pagi 05.30-07.00 Sore 15.30-20.00', 'Pagi 05.30-07.00 Sore 15.30-20.00', 'Pagi 05.30-07.00 Sore 15.30-20.00', 'Pagi 05.30-07.00 Sore 15.30-20.00', 'Pagi 05.30-07.00 Sore 15.30-20.00', 'Libur'),
(32, 'Puskesmas Mojosongo', '07.30-12.00', '07.30-12.00', '07.30-12.00', '07.30-12.00', '07.30-12.00', '07.30-12.00', 'Libur'),
(33, 'Klinik Nayaka Husada', '08.00-16.00', '08.00-16.00', '08.00-16.00', '08.00-16.00', '08.00-16.00', '08.00-16.00', 'Libur'),
(34, 'Klinik Pratama Mitra Medicare', '07.00-20.00', '07.00-20.00', '07.00-20.00', '07.00-20.00', '07.00-20.00', '07.00-20.00', '07.00-20.00'),
(35, 'Dr. Darmawan Wijayanto', '07.30-16.00', '07.30-16.00', '07.30-16.00', '07.30-16.00', '07.30-16.00', '07.30-16.00', 'Libur'),
(36, 'Dr. Endang Sri Widati', '15.00-20.00', '15.00-20.00', '15.00-20.00', '15.00-20.00', '15.00-20.00', '15.00-20.00', 'Libur'),
(37, 'Klinik Mitra Sehati', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam'),
(38, 'Puskesmas Teras', '07.30-15.00', '07.30-15.00', '07.30-15.00', '07.30-15.00', '07.30-15.00', '07.30-15.00', 'Libur'),
(39, 'Dr. Sulistiyani', 'Pagi 06.00-07.00 Sore 17.00-19.00', 'Pagi 06.00-07.00 Sore 17.00-19.00', 'Pagi 06.00-07.00 Sore 17.00-19.00', 'Pagi 06.00-07.00 Sore 17.00-19.00', 'Pagi 06.00-07.00 Sore 17.00-19.00', 'Pagi 06.00-07.00 Sore 17.00-19.00', 'Libur'),
(40, 'Klinik Pratama Rawat Jalan Kebon Arum', '07.00-20.00', '07.00-20.00', '07.00-20.00', '07.00-20.00', '07.00-20.00', '07.00-20.00', 'Libur'),
(41, 'Puskesmas Banyudono I', '08.00-16.00', '08.00-16.00', '08.00-16.00', '08.00-16.00', '08.00-16.00', '08.00-16.00', 'Libur'),
(42, 'Puskesmas Banyudono II', '08.00-15.00', '08.00-15.00', '08.00-15.00', '08.00-15.00', '08.00-15.00', '08.00-15.00', 'Libur'),
(43, 'Klinik Mila Husada', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam'),
(44, 'Klinik Baety Rahma', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam'),
(45, 'Dr. Sri Ningsih', 'Pagi 06.00-10.00 Sore 16.00-21.00', 'Pagi 06.00-10.00 Sore 16.00-21.00', 'Pagi 06.00-10.00 Sore 16.00-21.00', 'Pagi 06.00-10.00 Sore 16.00-21.00', 'Pagi 06.00-10.00 Sore 16.00-21.00', 'Pagi 06.00-10.00 Sore 16.00-21.00', '16.00-21.00'),
(46, 'Dr. FX Kristandiyoko', 'Pagi 06.00-07.00 Sore 16.00-19.00', 'Pagi 06.00-07.00 Sore 16.00-19.00', 'Pagi 06.00-07.00 Sore 16.00-19.00', 'Pagi 06.00-07.00 Sore 16.00-19.00', 'Pagi 06.00-07.00 Sore 16.00-19.00', 'Pagi 06.00-07.00 Sore 16.00-19.00', 'Libur'),
(47, 'Dr. Dewi Priamsari', '05.00-22.00', '05.00-22.00', '05.00-22.00', '05.00-22.00', '05.00-22.00', '05.00-22.00', '05.00-22.00'),
(48, 'Puskesmas Sawit', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam'),
(49, 'Klinik Pratama Harapan Bunda', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam'),
(50, 'Puskesmas Sambi', '07.00-14.00', '07.00-14.00', '07.00-14.00', '07.00-14.00', '07.00-14.00', '07.00-14.00', 'Libur'),
(51, 'Dr. Luluk Diany Z', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', '16.00-20.00'),
(52, 'Dr. Kurniawan Eko Y', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Pagi 06.00-08.00 Sore 16.00-20.00', '16.00-20.00'),
(53, 'Puskesmas Simo', '07.30-14.00', '07.30-14.00', '07.30-14.00', '07.30-14.00', '07.30-14.00', '07.30-14.00', 'Libur'),
(54, 'Klinik Kondang Sehat', '07.30-21.00', '07.30-21.00', '07.30-21.00', '07.30-21.00', '07.30-21.00', '07.30-21.00', 'Libur'),
(55, 'Dr.Maâ€™ad Nur Muddaris', 'Pagi 05.30-07.00 Sore 16.00-20.30', 'Pagi 05.30-07.00 Sore 16.00-20.30', 'Pagi 05.30-07.00 Sore 16.00-20.30', 'Pagi 05.30-07.00 Sore 16.00-20.30', 'Pagi 05.30-07.00 Sore 16.00-20.30', 'Pagi 05.30-07.00 Sore 16.00-20.30', 'Pagi 05.30-07.00 Sore 16.00-20.30'),
(56, 'Dr. Binastiti Sal Indira', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Pagi 06.00-08.00 Sore 16.00-20.00'),
(57, 'Dr. Fitriansah Ar Rasyad', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Pagi 06.00-08.00 Sore 16.00-20.00', '16.00-20.00'),
(58, 'Puskesmas Klego I', '08.00-13.00', '08.00-13.00', '08.00-13.00', '08.00-13.00', '08.00-13.00', '08.00-13.00', 'Libur'),
(59, 'Puskesmas Klego II', '08.00-13.00', '08.00-13.00', '08.00-13.00', '08.00-13.00', '08.00-13.00', '08.00-13.00', 'Libur'),
(60, 'Dr. Ony Hardoko', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00'),
(61, 'Puskesmas Nogosari', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam'),
(62, 'Dr. Lilis Sunarti', 'Pagi 06.00-08.00 Sore 16.00-19.00', 'Pagi 06.00-08.00 Sore 16.00-19.00', 'Pagi 06.00-08.00 Sore 16.00-19.00', 'Pagi 06.00-08.00 Sore 16.00-19.00', 'Pagi 06.00-08.00 Sore 16.00-19.00', 'Pagi 06.00-08.00 Sore 16.00-19.00', 'Libur'),
(63, 'dr.Aldila Akhadiyati', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Pagi 06.00-08.00 Sore 16.00-20.00', 'Libur'),
(64, 'Dr. Ferra Damayanti', '14.00-18.00', '14.00-18.00', '14.00-18.00', '14.00-18.00', '14.00-18.00', '14.00-18.00', 'Libur'),
(65, 'Puskesmas Andong', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam'),
(66, 'Dr. Puji Astuti', 'Pagi 05.00-07.00 Sore 16.00-21.00', 'Pagi 05.00-07.00 Sore 16.00-21.00', 'Pagi 05.00-07.00 Sore 16.00-21.00', 'Pagi 05.00-07.00 Sore 16.00-21.00', 'Pagi 05.00-07.00 Sore 16.00-21.00', 'Pagi 05.00-07.00 Sore 16.00-21.00', 'Libur'),
(67, 'Puskesmas Ngemplak', '08.00-13.30', '08.00-13.30', '08.00-13.30', '08.00-13.30', '08.00-13.30', '08.00-13.30', 'Libur'),
(68, 'Dr. Anita Setiyawati SP', '16.00-20.00', '16.00-20.00', '16.00-20.00', '16.00-20.00', '16.00-20.00', '', 'Libur'),
(69, 'Dr.Dewi Purnamasari', 'Pagi 05.30-07.30 Sore 16.00-20.00', 'Pagi 05.30-07.30 Sore 16.00-20.00', 'Pagi 05.30-07.30 Sore 16.00-20.00', 'Pagi 05.30-07.30 Sore 16.00-20.00', 'Pagi 05.30-07.30 Sore 16.00-20.00', 'Pagi 05.30-07.30 Sore 16.00-20.00', 'Libur'),
(70, 'Dr. Nurbakdiyadi', 'Pagi 06.00-09.00 Sore 15.00-19.00', 'Pagi 06.00-09.00 Sore 15.00-19.00', 'Pagi 06.00-09.00 Sore 15.00-19.00', 'Pagi 06.00-09.00 Sore 15.00-19.00', 'Pagi 06.00-09.00 Sore 15.00-19.00', 'Pagi 06.00-09.00 Sore 15.00-19.00', 'Libur'),
(71, 'Klinik Pratama Imron Medika', 'Pagi 07.00-20.30 Sore 07.00-20.30', 'Pagi 07.00-20.30 Sore 07.00-20.30', 'Pagi 07.00-20.30 Sore 07.00-20.30', 'Pagi 07.00-20.30 Sore 07.00-20.30', 'Pagi 07.00-20.30 Sore 07.00-20.30', 'Pagi 07.00-20.30 Sore 07.00-20.30', 'Libur'),
(72, 'Klinik Pratama Surya Medika', 'Pagi 07.00-11.00 Sore 16.00-20.00', 'Pagi 07.00-11.00 Sore 16.00-20.00', 'Pagi 07.00-11.00 Sore 16.00-20.00', 'Pagi 07.00-11.00 Sore 16.00-20.00', 'Pagi 07.00-11.00 Sore 16.00-20.00', 'Pagi 07.00-11.00 Sore 16.00-20.00', 'Libur'),
(73, 'Klinik Pratama Al Mabrur', '08.00-15.00', '08.00-15.00', '08.00-15.00', '08.00-15.00', '08.00-15.00', '08.00-15.00', 'Libur'),
(74, 'Klinik Mulia Kasih', '17.00-21.00', '17.00-21.00', '17.00-21.00', '17.00-21.00', '17.00-21.00', '', 'Libur'),
(75, 'Puskesmas karanggede', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam'),
(76, 'Dr. Umi Hanik', '07.00-20.00', '07.00-20.00', '07.00-20.00', '07.00-20.00', '07.00-20.00', '07.00-20.00', '07.00-20.00'),
(77, 'Klinik Pratama Rawat Inap Estu Utomo', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam'),
(78, 'Puskesmas Wonosegoro', '07.30-14.00', '07.30-14.00', '07.30-14.00', '07.30-14.00', '07.30-14.00', '07.30-14.00', 'Libur'),
(79, 'Dr. Yopie Ibrahim', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Libur'),
(80, 'Puskesmas Wonosamodro', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam'),
(81, 'Puskesmas Kemusu', '07.30-14.00', '07.30-14.00', '07.30-14.00', '07.30-14.00', '07.30-14.00', '07.30-14.00', 'Libur'),
(82, 'Puskesmas Juwangi', '07.00-15.00', '07.00-15.00', '07.00-15.00', '07.00-15.00', '07.00-15.00', '07.00-15.00', 'Libur'),
(83, 'Dr. Hendra Istiarso', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Pagi 06.00-07.00 Sore 16.00-20.00', 'Libur'),
(84, 'Klinik Pratama Rawat Inap Medika', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam'),
(85, 'Klinik Pratama Rawat Inap Siti Barokah', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam', '24 Jam'),
(86, 'Dr. Andreas Drajat', '06.00-19.00', '06.00-19.00', '06.00-19.00', '06.00-19.00', '06.00-19.00', '06.00-19.00', 'Libur'),
(87, 'coba', '24 jam', '24 jam', '24 jam', 'option31', '24 jam', 'Pagi 17:19-22:15 Sore 05:15-19:17', '24 jam'),
(88, 'dokter bernards', '24 jam', '24 jam', '24 jam', '24 jam', '24 jam', '24 jam', '24 jam'),
(89, '321', '24 jam', '24 jam', '24 jam', '24 jam', '24 jam', '24 jam', '24 jam');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_log`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `persyaratan`
--

CREATE TABLE IF NOT EXISTS `persyaratan` (
  `id_persyaratan` int(11) NOT NULL AUTO_INCREMENT,
  `persyaratan` text NOT NULL,
  PRIMARY KEY (`id_persyaratan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `persyaratan`
--

INSERT INTO `persyaratan` (`id_persyaratan`, `persyaratan`) VALUES
(1, 'gascok'),
(2, 'tes'),
(3, '1'),
(4, 'tes'),
(5, 'coba'),
(6, 'sadasdasddddddddddddddddddddddddddddddddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `tata_cara`
--

CREATE TABLE IF NOT EXISTS `tata_cara` (
  `id_tata_cara` int(11) NOT NULL AUTO_INCREMENT,
  `tata_cara` text NOT NULL,
  PRIMARY KEY (`id_tata_cara`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tata_cara`
--

INSERT INTO `tata_cara` (`id_tata_cara`, `tata_cara`) VALUES
(1, '12312421wew'),
(2, 'Melakukan registrasi pendaftaran terlebih dahulu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tempat`
--

CREATE TABLE IF NOT EXISTS `tb_tempat` (
  `id_tempat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tempat` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_tempat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=184 ;

--
-- Dumping data for table `tb_tempat`
--

INSERT INTO `tb_tempat` (`id_tempat`, `nama_tempat`, `gambar`, `lat`, `lng`, `lokasi`, `telp`, `kecamatan`) VALUES
(95, 'Puskesmas Boyolali I', '.png', -7.540721, 110.605203, 'Jl. Jambu No.11 Siswodipuran, Boyolali', '(0276) 325589', 'Boyolali'),
(96, 'Puskesmas Boyolali II', 'Tidak ada', -7.498464, 110.617984, 'Jl. Solo Semarang KM 5, Penggung, Boyolali', '', 'Boyolali'),
(97, 'Klinik PMI Boyolali', 'Tidak ada', -7.537843, 110.600927, 'Jl. Randu Asri, Kp.Koplak, Siswodipuran, Byoyolali', '(0276) 321104', 'Boyolali'),
(98, 'Klinik Pratama Rawat Jalan Bhayangkara', 'Tidak ada', -7.517718, 110.594598, 'Jl. Pandanaran No. 332 Boyolali', '(0276) 323054', 'Boyolali'),
(99, 'Klinik Kartika 24 Boyolali', 'Tidak ada', -7.531793, 110.598225, 'Jl. Merbabu No. 33 Siswodipuran, Byl', '', 'Boyolali'),
(100, 'Klinik Pratama Firena Husada', 'Tidak ada', -7.528525, 110.59084, 'Jl. Cendana Poncobudoyo 02/10 Pulisen, Boyolali', '(0276) 325396', 'Boyolali'),
(101, 'Klinik Pratama Miranti', 'Tidak ada', -7.518206, 110.595123, 'Jl. Pandanaran No. 373 Banaran, Boyolali', '(0276) 321552', 'Boyolali'),
(102, 'Klinik Pratama RJ Ellena', 'Tidak ada', -7.526278, 110.600608, 'Jl. Pandanaran No. 242 Boyolali', '(0276) 321248', 'Boyolali'),
(103, 'Dr. Thomas Handoko', 'Tidak ada', -7.526278, 110.600608, 'Jl. Pandanaran No. 242 A Banaran, Boyolali', '(0276) 321248', 'Boyolali'),
(104, 'Dr. Denta Priambada', 'Tidak ada', -7.510372, 110.595569, 'Tanjungsari Rt 01/07 Kiringan, Boyolali', '', 'Boyolali'),
(105, 'Dr. Argadia Yuni piyadi S.PA', 'Tidak ada', -7.534957, 110.591283, 'Jl. Anggrek No. 203, Kebonso Pulisen, boyolali', '', 'Boyolali'),
(106, 'Dr. Khu Winy Kusila', 'Tidak ada', -7.531248, 110.591097, 'Jl. Merbabu No. 108, Boyolali', '', 'Boyolali'),
(107, 'Dr. Bambang Sugiharto', 'Tidak ada', -7.542674, 110.602712, 'Jl. Pahlawan, Gudang Kapok 03/08, Siswodipuran, Boyolali', '', 'Boyolali'),
(108, 'Dr. Lilik Wijayanti', 'Tidak ada', -7.53818, 110.605731, 'Jl. Duren No. 8, Siswodipuran, Boyolali', '', 'Boyolali'),
(109, 'Puskesmas Musuk', 'Tidak ada', -7.56855, 110.535442, 'Jl. Drajitan, Ds. Sruni, Kec Musuk', '(0276) 3280462', 'Musuk'),
(110, 'Dr. Nurharyadi', 'Tidak ada', -7.568667, 110.534111, 'Drajitan, Rt 02/II, Drajitan, Sruni, Musuk, Boyolali', '', 'Musuk'),
(111, 'Dr. Deasy Vebriana Pananingrum', 'Tidak ada', -7.538977, 110.553699, 'Tampir Selatan 05/03, Musuk, Boyolali', '', 'Musuk'),
(112, 'Puskesmas Taman Sari', 'Tidak ada', -7.536701, 110.554439, 'Tanggung Gede, Karanganyar, Musuk, Boyolali', '', 'Taman Sari'),
(113, 'Puskesmas Ampel', 'Tidak ada', -7.452084, 110.553364, 'Jl. Solo Semarang, Candi, Ampel', '(0276) 330581', 'Ampel'),
(114, 'Dr. Esha Krestriana', 'Tidak ada', -7.457148, 110.547494, 'Jl. Raya Boyolali-SMG Km 10, Candi, Ampel, Boyolali', '82135970090', 'Ampel'),
(115, 'Dr. Latifah Indriasari U.', 'Tidak ada', -7.457409, 110.560658, 'Binjarjo Rt 04/RW 04, Candi, Ampel, Boyolali', '', 'Ampel'),
(116, 'Dr. Nor Anisa', '.png', -7.444767, 110.537699, 'Apotek Mitra Sehat Jl. Raya Ampel No 50A Solo-Semarang,  Kaligentong, Ampel, Boyolali', '81258210012', 'Ampel'),
(117, 'Dr. Wiki Lestari', 'Tidak ada', -7.451428, 110.545541, 'Karangnongko, RT 05/RW 07, Urutsewu, Ampel, Boyolali', '', 'Ampel'),
(118, 'Puskesmas Gladagsari', 'Tidak ada', -7.457337, 110.497006, 'Jl. Ampel-Pantaran KM 6 Cand.ari, Ampel, Boyolali', '', 'Gladaksari'),
(119, 'Dr. Pramono', 'Tidak ada', -7.452018, 110.542034, 'Tegalsari Rt 02/01, Kaligentong, Ampel,', '', 'Gladaksari'),
(120, 'Klinik Pratama Rawat Inap Sumber Waras', 'Tidak ada', -7.453595, 110.537169, 'Dk. Mrawun RT 001/008, Ds. Gladaksari, Ampel', '82281700714', 'Gladaksari'),
(121, 'Puskesmas Cepogo', 'Tidak ada', -7.505951, 110.518233, 'Jl. Raya Cepogo Km 1 Cepogo, Boyolali', '81225645945', 'Cepogo'),
(122, 'Klinik Insan Sehat', 'Tidak ada', -7.521332, 110.556031, 'Jl. Boyolali-Cepogo Km 5 Jelok, Cepogo, Boyolali', '85702024049', 'Cepogo'),
(123, 'Dr.Syamsudin, M.Kes', 'Tidak ada', -7.515844, 110.528671, 'Jl. Raya Cepogo Km. 9 Sambirejo, Sumbung, Cepogo, Boyolali', '', 'Cepogo'),
(124, 'Puskesmas Selo', 'Tidak ada', -7.503034, 110.457835, 'Jl. Kihajar Seloka Km 01 Samiran, Selo, Boyolali', '', 'Selo'),
(125, 'Dr. Raditya Endro K', 'Tidak ada', -7.499781, 110.472601, 'Jl. Blabak- Boyolali No 214 RT 07/ Rw 02 Gebyok, Selo, Boyolali', '', 'Selo'),
(126, 'Puskesmas Mojosongo', 'Tidak ada', -7.537702, 110.635304, 'Jl. Raya Boyolali-Solo Km 04 Mojosongo, Boyolali', '(0276) 3294179', 'Mojosongo'),
(127, 'Klinik Nayaka Husada', 'Tidak ada', -7.553659, 110.632939, 'Butuh 02/01, Mojosongo, Boyolali', '(0276) 320045', 'Mojosongo'),
(128, 'Klinik Pratama Mitra Medicare', 'Tidak ada', -7.553283, 110.629419, 'Dk. Butuh, Mojosongo, Boyolali', '(0276) 3280080', 'Mojosongo'),
(129, 'Dr. Darmawan Wijayanto', 'Tidak ada', -7.531722, 110.624899, 'Recosari Rt 02/02 Kragilan, Mojosongo', '(0276) 322417', 'Mojosongo'),
(130, 'Dr. Endang Sri Widati', 'Tidak ada', -7.53724, 110.636304, 'Pomah Rt 01/ Rw 02 Mojosongo, Boyolali', '', 'Mojosongo'),
(131, 'Klinik Mitra Sehati', 'Tidak ada', -7.582812, 110.597949, 'Singosari, Mojosongo', '(0276) 3281596', 'Mojosongo'),
(132, 'Puskesmas Teras', 'Tidak ada', -7.537057, 110.655953, 'Teras, Boyolali', '(0276) 322080', 'Teras'),
(133, 'Dr. Sulistiyani', 'Tidak ada', -7.536457, 110.647802, 'Randusari RT 02/03, Teras, Boyolali', '', 'Teras'),
(134, 'Klinik Pratama Rawat Jalan Kebon Arum', 'Tidak ada', -7.536791, 110.642151, 'Kebonarum RT 06/01, Randusari, Teras, Boyolali', '85747479796', 'Teras'),
(135, 'Puskesmas Banyudono I', 'Tidak ada', -7.534719, 110.680445, 'Kebontutup, RT 21/RW 03 Ketaon, Banyudono, Boyolali', '(0276) 3283796', 'Banyudono'),
(136, 'Puskesmas Banyudono II', 'Tidak ada', -7.551974, 110.717873, 'Jetisari, Sambon, Banyudono, Boyolali', '', 'Banyudono'),
(137, 'Klinik Mila Husada', 'Tidak ada', -7.546685, 110.678811, 'Jl. Raya Pengging Km 2 Bantulan 01/01 Jembungan,Banyudono', '', 'Banyudono'),
(138, 'Klinik Baety Rahma', 'Tidak ada', -7.556521, 110.675228, 'Dk. Plumutan RT 06/01, Dukuh, Banyudono', '', 'Banyudono'),
(139, 'Dr. Sri Ningsih', 'Tidak ada', -7.53313, 110.702126, 'Batan RT 12/ RW 03 Batan, Banyudono, Boyolali', '', 'Banyudono'),
(140, 'Dr. FX Kristandiyoko', 'Tidak ada', -7.541499, 110.680651, 'Ngresep RT 02/02, Ngaru-Aru, Banyudono, Boyolali', '', 'Banyudono'),
(141, 'Dr. Dewi Priamsari', 'Tidak ada', -7.552363, 110.717635, 'Jatisari RT 07/02, Sambon, Banyudono, Boyolali', '81329222305', 'Banyudono'),
(142, 'Puskesmas Sawit', 'Tidak ada', -7.567908, 110.676888, 'Gading, Jenengan, Sawit, Boyolali', '', 'Sawit'),
(143, 'Klinik Pratama Harapan Bunda', 'Tidak ada', -7.568547, 110.718368, 'Karangduren RT 02/01, Sawit, Boyolali', '(0271) 780327', 'Sawit'),
(144, 'Puskesmas Sambi', 'Tidak ada', -7.490818, 110.69747, 'Jl. Raya Bangak-Simo Km 7 Boyolali', '(0276) 3294679 ', 'Sambi'),
(145, 'Dr. Luluk Diany Z', 'Tidak ada', -7.485194, 110.695694, 'Jl. Raya Bangak-Simo Km 7 Boyolali', '', 'Sambi'),
(146, 'Dr. Kurniawan Eko Y', 'Tidak ada', -7.510613, 110.701029, 'Winong 6/1 Canden, Sambi, Boyolali', '85642304118', 'Sambi'),
(147, 'Puskesmas Simo', 'Tidak ada', -7.439746, 110.675919, 'Ngaliyan, Palem, Simo', '(0276) 3331030', 'Simo'),
(148, 'Klinik Kondang Sehat', 'Tidak ada', -7.433875, 110.686259, 'Jl. Simo-Karanggede, Jaten, Teter, Simo, Boyolali', '', 'Simo'),
(149, 'Dr.Maâ€™ad Nur Muddaris', 'Tidak ada', -7.445679, 110.684824, 'Kedung Banteng RT 01/1, Bendungan, Simo, Boyolali', '', 'Simo'),
(150, 'Dr. Binastiti Sal Indira', 'Tidak ada', -7.434323, 110.68562, 'Jl. Raya Simo-Klego Km 01, Ngreni, Simo, Boyolali', '', 'Simo'),
(151, 'Dr. Fitriansah Ar Rasyad', 'Tidak ada', -7.441143, 110.678152, 'Jl. Singoprono Raya 11/03, Pelem, Simo, Boyolali', '', 'Simo'),
(152, 'Puskesmas Klego I', 'Tidak ada', -7.357158, 110.688026, 'Jl. Raya Karanggede-Gemolong Km 7 Klego, Boyolali', '', 'Klego'),
(153, 'Puskesmas Klego II', 'Tidak ada', -7.357249, 110.73126, 'Solorejo 14/03, Sumberagung, Klego, Boyolali', '', 'Klego'),
(154, 'Dr. Ony Hardoko', 'Tidak ada', -7.353538, 110.740173, 'Solorejo Baru 29/03, Sumber Agung, klego, Boyolali', '', 'Klego'),
(155, 'Puskesmas Nogosari', 'Tidak ada', -7.448954, 110.753563, 'Ds. Nglonggong, Nogosari, Boyolali', '(0271) 2932244', 'Nogosari'),
(156, 'Dr. Lilis Sunarti', 'Tidak ada', -7.445755, 110.756184, 'Glonggong RT 09/01 Nogosari, Boyolali', '', 'Nogosari'),
(157, 'dr.Aldila Akhadiyati', 'Tidak ada', -7.441648, 110.755051, 'Rejosari RT 06/01, Glonggong, Nogosari', '', 'Nogosari'),
(158, 'Dr. Ferra Damayanti', 'Tidak ada', -7.451087, 110.752753, 'Jl. Nogosari-Kartasura Km 1, Nogosari, Boyolali', '', 'Nogosari'),
(159, 'Puskesmas Andong', 'Tidak ada', -7.376259, 110.768213, 'Ds. Mojo, Kec. Andong, Boyolali', '(0271) 7893301', 'Andong'),
(160, 'Dr. Puji Astuti', 'Tidak ada', -7.325422, 110.74729, 'Jl. Raya Klewor RT 04/01, Kemusu, Boyolali', '', 'Andong'),
(161, 'Puskesmas Ngemplak', 'Tidak ada', -7.519333, 110.797966, 'Dk. Garen, Pandeyan, Ngemplak', '(0271) 7894295', 'Ngemplak'),
(162, 'Dr. Anita Setiyawati SP', 'Tidak ada', -7.520221, 110.788471, 'Jl. Brogo RT 01/RW 04, Donohudan, Ngemplak, Boyolali', '', 'Ngemplak'),
(163, 'Dr.Dewi Purnamasari', 'Tidak ada', -7.529015, 110.7954, 'Sawahan V/I Ngemplak, Boyolali', '', 'Ngemplak'),
(164, 'Dr. Nurbakdiyadi', 'Tidak ada', -7.529348, 110.79441, 'Gandu 01/02 Sawahan, Ngemplak, Boyolali', '', 'Ngemplak'),
(165, 'Klinik Pratama Imron Medika', 'Tidak ada', -7.512936, 110.745535, 'Ngesrep, Ngemplak, Boyolali', '85786143472', 'Ngemplak'),
(166, 'Klinik Pratama Surya Medika', 'Tidak ada', -7.510437, 110.77622, 'Wangkis RT 002/007, Dibal, Ngemplak', '(0271) 7891967', 'Ngemplak'),
(167, 'Klinik Pratama Al Mabrur', 'Tidak ada', -7.505837, 110.749805, 'Panasan Baru Rt 007/Rw 002,Ngesrep, Ngemplak', '(0271) 7853696', 'Ngemplak'),
(168, 'Klinik Mulia Kasih', 'Tidak ada', -7.516723, 110.783837, 'Brogo 03/04, Donohudan,Ngemplak, Boyolali', '', 'Ngemplak'),
(169, 'Puskesmas karanggede', 'Tidak ada', -7.359689, 110.63956, 'Jl. Sawungrono, Kebonan, Karanggede,Boyolali', '', 'Karanggede'),
(170, 'Dr. Umi Hanik', 'Tidak ada', -7.370627, 110.637419, 'Kebonan, Karanggede, Boyolali', '', 'Karanggede'),
(171, 'Klinik Pratama Rawat Inap Estu Utomo', 'Tidak ada', -7.360421, 110.63926, 'Dk. Trayon RT 001/02 Kebonan, karanggede', '', 'Karanggede'),
(172, 'Puskesmas Wonosegoro', 'Tidak ada', -7.31596, 110.65738, 'Jl. Raya Depoksari 05/03, Ketoyan, Wonosegoro', '81226720643', 'Wonosegoro'),
(173, 'Dr. Yopie Ibrahim', 'Tidak ada', -7.312032, 110.658984, 'Jrebeng RT 02/II Wonosegoro', '', 'Wonosegoro'),
(174, 'Puskesmas Wonosamodro', 'Tidak ada', -7.230819, 110.637648, 'Ds. Traban, Repaking, Wonosegoro', '', 'Wonosamodro'),
(175, 'Puskesmas Kemusu', 'Tidak ada', -7.305336, 110.751795, 'Jl. Raya Kemusu Klewor 04/01 Klewor, Kemusu, Boyolali', '', 'Kemusu'),
(176, 'Puskesmas Juwangi', 'Tidak ada', -7.198351, 110.755055, 'Jl. Jolotundo 150 Juwangi, Boyolali', '', 'Juwangi'),
(177, 'Dr. Hendra Istiarso', 'Tidak ada', -7.183799, 110.752101, 'Juwangi 07/02, Juwangi, Boyolali', '', 'Juwangi'),
(178, 'Klinik Pratama Rawat Inap Medika', 'Tidak ada', -7.185299, 110.752124, 'Dk. Juwangi RT 007/002', '', 'Juwangi'),
(179, 'Klinik Pratama Rawat Inap Siti Barokah', 'Tidak ada', -7.185681, 110.753341, 'Desa Juwangi RT 08/02 Juwangi', '', 'Juwangi'),
(180, 'Dr. Andreas Drajat', 'Tidak ada', -7.190357, 110.752519, 'Pilangsari 08/02, Juwangi, Boyolali', '', 'Juwangi'),
(181, 'dokter bernard', 'Tidak ada', -7.512936, 110.214213, ',,', '12345678', NULL),
(182, 'dokter bernards', 'Tidak ada', 1, 1, ',,', 'coba', NULL),
(183, '321', 'Tidak ada', 214, 213, '213', '241', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
