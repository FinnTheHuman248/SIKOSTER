-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 04:04 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sikoster`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kost`
--

CREATE TABLE `tabel_kost` (
  `nama_kost` varchar(50) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `harga` varchar(12) NOT NULL,
  `pemilik` varchar(20) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `alamat_pemilik` varchar(225) NOT NULL,
  `rating` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kost`
--

INSERT INTO `tabel_kost` (`nama_kost`, `alamat`, `harga`, `pemilik`, `no_hp`, `alamat_pemilik`, `rating`) VALUES
('Kost Bagas', 'Sidakangen', 'Rp 2.500.000', 'Bu Bagas', '089221789654', 'Di Deket Kosannya', '8.0/10'),
('Kost Barokah', 'Jalan Blater', 'Rp 3.500.000', 'Bude', '081211234561', 'Jalan Blater no.4', '8.5/10'),
('Yuna Kost', 'Jalan Mayjend Soengkono No.3', 'Rp 3.000.000', 'Bu Yuni', '082251031798', 'Jalan Mayjend Soengkono No.3', '9.2/10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_kost`
--
ALTER TABLE `tabel_kost`
  ADD PRIMARY KEY (`nama_kost`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
