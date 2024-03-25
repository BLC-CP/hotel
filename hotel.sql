-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 12:20 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `aldeias`
--

CREATE TABLE `aldeias` (
  `id_aldeia` varchar(20) NOT NULL,
  `nrn_aldeia` varchar(100) NOT NULL,
  `id_suku` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aldeias`
--

INSERT INTO `aldeias` (`id_aldeia`, `nrn_aldeia`, `id_suku`) VALUES
('ALDEIA-202401', 'Assalainos', 'SUKU-202401'),
('ALDEIA-202402', '-Indoneisa', 'SUKU-202402'),
('ALDEIA-202403', 'Taubere', 'SUKU-202403');

-- --------------------------------------------------------

--
-- Table structure for table `klientes`
--

CREATE TABLE `klientes` (
  `id_kliente` varchar(20) NOT NULL,
  `nrn_kliente` varchar(150) NOT NULL,
  `hela_fatin` varchar(255) NOT NULL,
  `id_aldeia` varchar(20) NOT NULL,
  `id_kuartu` varchar(20) NOT NULL,
  `data_checking` date NOT NULL,
  `data_checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klientes`
--

INSERT INTO `klientes` (`id_kliente`, `nrn_kliente`, `hela_fatin`, `id_aldeia`, `id_kuartu`, `data_checking`, `data_checkout`) VALUES
('KLIENTE-202401', 'Adriana Madalena L. Magno', 'Kampun Baru', 'ALDEIA-202401', 'ROOM-202401', '2024-03-04', '2024-03-06'),
('KLIENTE-202402', 'Jaoao da Silva', 'Caspi', 'ALDEIA-202403', 'ROOM-202402', '2024-02-07', '2024-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `kuartus`
--

CREATE TABLE `kuartus` (
  `id_kuartu` varchar(20) NOT NULL,
  `nu_kuartu` varchar(25) NOT NULL,
  `tipu_kuartu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuartus`
--

INSERT INTO `kuartus` (`id_kuartu`, `nu_kuartu`, `tipu_kuartu`) VALUES
('ROOM-202401', '001', 'VIP'),
('ROOM-202402', '002', 'Economi');

-- --------------------------------------------------------

--
-- Table structure for table `munisipius`
--

CREATE TABLE `munisipius` (
  `id_munisipiu` varchar(20) NOT NULL,
  `nrn_munisipiu` varchar(150) NOT NULL,
  `id_nasaun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `munisipius`
--

INSERT INTO `munisipius` (`id_munisipiu`, `nrn_munisipiu`, `id_nasaun`) VALUES
('MUN-202401', 'Lautem', 'NSN-202401'),
('MUN-202402', '-Indoneisa', 'NSN-202402'),
('MUN-202403', 'Baucau', 'NSN-202401');

-- --------------------------------------------------------

--
-- Table structure for table `nasauns`
--

CREATE TABLE `nasauns` (
  `id_nasaun` varchar(20) NOT NULL,
  `nrn_nasaun` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nasauns`
--

INSERT INTO `nasauns` (`id_nasaun`, `nrn_nasaun`) VALUES
('NSN-202401', 'Timor Leste'),
('NSN-202402', 'Indonesia'),
('NSN-202403', 'Australia');

-- --------------------------------------------------------

--
-- Table structure for table `postus`
--

CREATE TABLE `postus` (
  `id_postu` varchar(20) NOT NULL,
  `nrn_postu` varchar(150) NOT NULL,
  `id_munisipiu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postus`
--

INSERT INTO `postus` (`id_postu`, `nrn_postu`, `id_munisipiu`) VALUES
('POSTU-202401', 'Lospalos', 'MUN-202401'),
('POSTU-202402', '-Indonesia', 'MUN-202402'),
('POSTU-202403', 'Baguia', 'MUN-202403');

-- --------------------------------------------------------

--
-- Table structure for table `sukus`
--

CREATE TABLE `sukus` (
  `id_suku` varchar(20) NOT NULL,
  `nrn_suku` varchar(100) NOT NULL,
  `id_postu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sukus`
--

INSERT INTO `sukus` (`id_suku`, `nrn_suku`, `id_postu`) VALUES
('SUKU-202401', 'Fuiloro', 'POSTU-202401'),
('SUKU-202402', '-Indonesia', 'POSTU-202402'),
('SUKU-202403', 'Samalari', 'POSTU-202403');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` varchar(20) NOT NULL,
  `nrn_user` varchar(150) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nrn_user`, `username`, `password`, `level`, `foto`) VALUES
('USER-202401', 'Brito L. da Conceicao', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '66006846bce0epng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aldeias`
--
ALTER TABLE `aldeias`
  ADD PRIMARY KEY (`id_aldeia`),
  ADD KEY `id_suku` (`id_suku`);

--
-- Indexes for table `klientes`
--
ALTER TABLE `klientes`
  ADD PRIMARY KEY (`id_kliente`),
  ADD KEY `id_kuartu` (`id_kuartu`),
  ADD KEY `id_aldeia` (`id_aldeia`);

--
-- Indexes for table `kuartus`
--
ALTER TABLE `kuartus`
  ADD PRIMARY KEY (`id_kuartu`);

--
-- Indexes for table `munisipius`
--
ALTER TABLE `munisipius`
  ADD PRIMARY KEY (`id_munisipiu`),
  ADD KEY `id_nasaun` (`id_nasaun`);

--
-- Indexes for table `nasauns`
--
ALTER TABLE `nasauns`
  ADD PRIMARY KEY (`id_nasaun`);

--
-- Indexes for table `postus`
--
ALTER TABLE `postus`
  ADD PRIMARY KEY (`id_postu`),
  ADD KEY `id_munisipiu` (`id_munisipiu`);

--
-- Indexes for table `sukus`
--
ALTER TABLE `sukus`
  ADD PRIMARY KEY (`id_suku`),
  ADD KEY `id_postu` (`id_postu`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aldeias`
--
ALTER TABLE `aldeias`
  ADD CONSTRAINT `aldeias_ibfk_1` FOREIGN KEY (`id_suku`) REFERENCES `sukus` (`id_suku`) ON UPDATE CASCADE;

--
-- Constraints for table `klientes`
--
ALTER TABLE `klientes`
  ADD CONSTRAINT `klientes_ibfk_1` FOREIGN KEY (`id_aldeia`) REFERENCES `aldeias` (`id_aldeia`) ON UPDATE CASCADE,
  ADD CONSTRAINT `klientes_ibfk_2` FOREIGN KEY (`id_kuartu`) REFERENCES `kuartus` (`id_kuartu`) ON UPDATE CASCADE;

--
-- Constraints for table `munisipius`
--
ALTER TABLE `munisipius`
  ADD CONSTRAINT `munisipius_ibfk_1` FOREIGN KEY (`id_nasaun`) REFERENCES `nasauns` (`id_nasaun`) ON UPDATE CASCADE;

--
-- Constraints for table `postus`
--
ALTER TABLE `postus`
  ADD CONSTRAINT `postus_ibfk_1` FOREIGN KEY (`id_munisipiu`) REFERENCES `munisipius` (`id_munisipiu`) ON UPDATE CASCADE;

--
-- Constraints for table `sukus`
--
ALTER TABLE `sukus`
  ADD CONSTRAINT `sukus_ibfk_1` FOREIGN KEY (`id_postu`) REFERENCES `postus` (`id_postu`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
