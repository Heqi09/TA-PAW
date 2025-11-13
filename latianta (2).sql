-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2025 at 05:59 PM
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
-- Database: `latianta`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `namaAdmin` varchar(50) NOT NULL,
  `noIndukAdmin` decimal(20,0) NOT NULL,
  `alamatAdmin` longtext NOT NULL,
  `noTlpnAdmin` decimal(15,0) NOT NULL,
  `emailAdmin` varchar(50) NOT NULL,
  `passwordAdmin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `idBuku` int(11) NOT NULL,
  `judulBuku` varchar(50) NOT NULL,
  `tahunTerbit` year(4) NOT NULL,
  `halaman` decimal(10,0) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `bahasa` varchar(50) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `kategoriBuku` enum('Karya Umum','Ilmu Komputer','Agama','Ilmu Sosial','Sejarah','Seni') NOT NULL,
  `statusBuku` enum('Tersedia','Sedang Dipinjam','','') NOT NULL,
  `penulis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`idBuku`, `judulBuku`, `tahunTerbit`, `halaman`, `penerbit`, `bahasa`, `deskripsi`, `kategoriBuku`, `statusBuku`, `penulis`) VALUES
(1, 'Bumi', '2007', 1000, 'gramedia', 'indonesia', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'Karya Umum', 'Tersedia', 'tere liye'),
(2, 'bedebah di ujung tanduk', '2023', 2000, 'gramedia', 'indonesia', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'Ilmu Komputer', 'Tersedia', 'tere liye'),
(3, 'batu bertuah', '1997', 500, 'gramedia', 'inggris', 'hvlyiguigyifvuigyicyufuictufug7uof;ogiuvu', 'Agama', 'Sedang Dipinjam', 'Harry Potter'),
(4, 'algoritma dasar', '2022', 50, 'gramedia', 'inggris', 'tentang algoritma dasar pemrograman', 'Ilmu Komputer', 'Tersedia', 'eko setiawan');

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `idPeminjam` int(11) NOT NULL,
  `foreignPemustaka` int(11) NOT NULL,
  `foreignbuku` int(11) NOT NULL,
  `statusPinjam` enum('Permohonan','Dipinjam','Dikembalikan','Ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemustaka`
--

CREATE TABLE `pemustaka` (
  `idPemustaka` int(11) NOT NULL,
  `namaDepan` varchar(50) NOT NULL,
  `noIndukPemustaka` decimal(20,0) NOT NULL,
  `namaBelakang` varchar(50) NOT NULL,
  `alamatPemustaka` longtext NOT NULL,
  `noTlpnPemustaka` decimal(15,0) NOT NULL,
  `emailPemustaka` varchar(50) NOT NULL,
  `passwordPemustaka` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemustaka`
--

INSERT INTO `pemustaka` (`idPemustaka`, `namaDepan`, `noIndukPemustaka`, `namaBelakang`, `alamatPemustaka`, `noTlpnPemustaka`, `emailPemustaka`, `passwordPemustaka`) VALUES
(1, 'Adit Putra', 240411100146, 'Jeremiah', 'Telang', 8943849, 'halo@gmial.com', 'DCFVGTBHY'),
(2, 'Aziz', 240411100141, 'Saifudding', 'kamal', 856342423, 'dunia@gmail.com', 'fewnfjenfoe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`idBuku`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`idPeminjam`),
  ADD KEY `foreignPemustaka` (`foreignPemustaka`);

--
-- Indexes for table `pemustaka`
--
ALTER TABLE `pemustaka`
  ADD PRIMARY KEY (`idPemustaka`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `idBuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `idPeminjam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemustaka`
--
ALTER TABLE `pemustaka`
  MODIFY `idPemustaka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD CONSTRAINT `peminjam_ibfk_1` FOREIGN KEY (`foreignPemustaka`) REFERENCES `pemustaka` (`idPemustaka`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
