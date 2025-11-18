-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2025 at 09:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unipustaka`
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
  `passwordAdmin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `namaAdmin`, `noIndukAdmin`, `alamatAdmin`, `noTlpnAdmin`, `emailAdmin`, `passwordAdmin`) VALUES
(4, 'Admin1', 1, 'Jl. Sare No. 1, Surabaya', 81234567890, 'admin1@mail.com', '240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9'),
(5, 'Admin2', 2, 'Jl. Pandaan No. 2, Surabaya', 82345678901, 'admin2@mail.com', '9924801e8aca687d0a71f4ab14a8ed1644d48348dce8941b6cfdf7fb3076bae2'),
(6, 'Admin3', 3, 'Jl. Jalak No. 3, Surabaya', 83456789012, 'admin3@mail.com', '255876d41c8df2de3170f47fd59d89a8d71e3ca678b8b3dac1981b61181def8c');

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
  `foreignBuku` int(11) NOT NULL,
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
  `passwordPemustaka` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemustaka`
--

INSERT INTO `pemustaka` (`idPemustaka`, `namaDepan`, `noIndukPemustaka`, `namaBelakang`, `alamatPemustaka`, `noTlpnPemustaka`, `emailPemustaka`, `passwordPemustaka`) VALUES
(3, 'Aziz', 240411100141, 'Saifuddin', 'Jl. Pandaan No. 10, Gresik', 85731037913, 'f.azizsyaifuddin@gmail.com', 'e606e38b0d8c19b24cf0ee3808183162ea7cd63ff7912dbb22b5e803286b4446'),
(4, 'Susilo', 240411100142, 'Hadi', 'Jl. Pahlawan No. 20, Surabaya', 82345678901, 'susilo@email.com', '07fb47212f7d30f8c9e1d9843228b65a301cee6ea7624ea9372539ea21603246'),
(5, 'Ahmad', 240411100143, 'Rahman', 'Jl. Diponegoro No. 30, Surabaya', 83456789012, 'ahmad.rahman@email.com', 'e3c702b7186cec0d9d6cc0d703adeed3873577cc673aec304c72b25af935a170'),
(6, 'Siti', 240411100144, 'Nurhaliza', 'Jl. Sudirman No. 40, Surabaya', 84567890123, 'siti.nurhaliza@email.com', 'c670f7b23c1bf997ec890e9d23ea7c016e12b243bdbd151f08baf5f0b86a7c5e'),
(7, 'Budi', 240411100145, 'Santoso', 'Jl. Thamrin No. 50, Surabaya', 85678901234, 'budi.santoso@email.com', '832a0d15a2cb9802f021df187017a1e899d253340bc4b828424115db26d61846');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`),
  ADD UNIQUE KEY `noIndukAdmin` (`noIndukAdmin`);

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
  ADD KEY `foreignPemustaka` (`foreignPemustaka`),
  ADD KEY `fk_buku` (`foreignBuku`);

--
-- Indexes for table `pemustaka`
--
ALTER TABLE `pemustaka`
  ADD PRIMARY KEY (`idPemustaka`),
  ADD UNIQUE KEY `noIndukPemustaka` (`noIndukPemustaka`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `idPemustaka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD CONSTRAINT `fk_buku` FOREIGN KEY (`foreignBuku`) REFERENCES `buku` (`idBuku`),
  ADD CONSTRAINT `fk_pemustaka` FOREIGN KEY (`foreignPemustaka`) REFERENCES `pemustaka` (`idPemustaka`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
