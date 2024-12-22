-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 22, 2024 at 05:55 AM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u312453017_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NPM` varchar(10) NOT NULL,
  `Nama_Mahasiswa` varchar(30) DEFAULT NULL,
  `Tempat_Tanggal_Lahir` varchar(40) DEFAULT NULL,
  `Prodi` varchar(30) DEFAULT NULL,
  `Alamat` varchar(50) DEFAULT NULL,
  `Telp` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NPM`, `Nama_Mahasiswa`, `Tempat_Tanggal_Lahir`, `Prodi`, `Alamat`, `Telp`) VALUES
('0880980989', '098809', '08809', '809', '809', '890908'),
('09809', 'idil putra', 'isffldslhdfs', 'hl', 'lh', 'hl6576890-'),
('2100016', 'Eka Pratama', 'Makassar/18-07-1990', 'Sistem Informasi', 'Jl. Pettarani No. 6', '081666666666'),
('2100017', 'Fikri Andika', 'Palembang/22-08-1989', 'Ilmu Komunikasi', 'Jl. Sudirman No. 7', '081777777777'),
('2100018', 'Gita Santika', 'Denpasar/05-09-1988', 'Ekonomi', 'Jl. Kuta No. 8', '081888888888'),
('2100019', 'Hendra Wijaya', 'Malang/11-10-1987', 'Teknik Mesin', 'Jl. Ijen No. 9', '081999999999'),
('2100020', 'Indra Kurniawan', 'Semarang/15-11-1986', 'Biologi', 'Jl. Pandanaran No. 10', '082111111111'),
('2100021', 'Joko Sutrisno', 'Surakarta/18-12-1985', 'Matematika', 'Jl. Slamet Riyadi No. 11', '082222222222'),
('2100022', 'Kirana Putri', 'Bandung/01-01-1990', 'Farmasi', 'Jl. Dago No. 12', '082333333333'),
('2100023', 'Lia Febriani', 'Jakarta/12-02-1991', 'Kedokteran', 'Jl. Sudirman No. 13', '082444444444'),
('2100024', 'Made Andika', 'Denpasar/23-03-1992', 'Pariwisata', 'Jl. Udayana No. 14', '082555555555'),
('2100025', 'Nia Lestari', 'Malang/30-04-1993', 'Kimia', 'Jl. Veteran No. 15', '082666666666'),
('2100026', 'Oki Firmansyah', 'Medan/05-05-1994', 'Fisika', 'Jl. Ahmad Yani No. 16', '082777777777'),
('2100027', 'Putri Aulia', 'Surabaya/17-06-1995', 'Statistika', 'Jl. Basuki Rahmat No. 17', '082888888888'),
('2100028', 'Qori Annisa', 'Makassar/25-07-1996', 'Antropologi', 'Jl. Pettarani No. 18', '082999999999'),
('2100029', 'Rendi Saputra', 'Jakarta/12-08-1997', 'Geografi', 'Jl. Gatot Subroto No. 19', '083111111111'),
('2100030', 'Sari Anggraini', 'Yogyakarta/15-09-1998', 'Sastra Inggris', 'Jl. Malioboro No. 20', '083222222222'),
('2100031', 'Toni Santoso', 'Bandung/20-10-1999', 'Teknik Lingkungan', 'Jl. Cihampelas No. 21', '083333333333'),
('2100032', 'Umi Salamah', 'Jakarta/01-11-2000', 'Perpustakaan', 'Jl. Kebayoran Baru No. 22', '083444444444'),
('2100033', 'Vivi Amelia', 'Surabaya/12-12-2001', 'Jurnalistik', 'Jl. Darmo No. 23', '083555555555'),
('2100034', 'Wawan Darmawan', 'Medan/15-01-2002', 'Teknik Elektro', 'Jl. Sudirman No. 24', '083666666666'),
('2100035', 'Xena Kartika', 'Denpasar/18-02-2003', 'Teknik Kimia', 'Jl. Udayana No. 25', '083777777777'),
('2100036', 'Yusuf Alfiansyah', 'Makassar/20-03-2004', 'Agribisnis', 'Jl. Pettarani No. 26', '083888888888'),
('2100037', 'Zahra Amalia', 'Palembang/22-04-2005', 'Ilmu Politik', 'Jl. Sudirman No. 27', '083999999999'),
('2100038', 'Adam Hidayat', 'Jakarta/24-05-2006', 'Teknik Industri', 'Jl. Kebayoran Lama No. 28', '084111111111'),
('2100039', 'Bella Pratiwi', 'Bandung/26-06-2007', 'Seni Rupa', 'Jl. Braga No. 29', '084222222222'),
('2100040', 'Citra Wulandari', 'Yogyakarta/28-07-2008', 'Arsitektur', 'Jl. Kaliurang No. 30', '084333333333'),
('2100041', 'Dedi Firmansyah', 'Surabaya/30-08-2009', 'Teknik Komputer', 'Jl. Basuki Rahmat No. 31', '084444444444'),
('2100042', 'Eka Lestari', 'Medan/01-09-2010', 'Ilmu Sejarah', 'Jl. Ahmad Yani No. 32', '084555555555'),
('2100043', 'Fajar Prasetyo', 'Makassar/05-10-2011', 'Teknik Pertambangan', 'Jl. Pettarani No. 33', '084666666666'),
('2100044', 'Gilang Ramadhan', 'Denpasar/07-11-2012', 'Teknik Geologi', 'Jl. Udayana No. 34', '084777777777'),
('2100045', 'Hani Fauziah', 'Malang/12-12-2013', 'Teknik Perkapalan', 'Jl. Veteran No. 35', '084888888888'),
('2100046', 'Ilham Maulana', 'Palembang/14-01-2014', 'Peternakan', 'Jl. Rajawali No. 36', '084999999999'),
('2100047', 'Jihan Nabila', 'Jakarta/18-02-2015', 'Kesehatan Masyarakat', 'Jl. Sudirman No. 37', '085111111111'),
('2100048', 'Kevin Pradana', 'Yogyakarta/20-03-2016', 'Kehutanan', 'Jl. Malioboro No. 38', '085222222222'),
('2100049', 'Lina Anggraeni', 'Bandung/25-04-2017', 'Statistika', 'Jl. Cihampelas No. 39', '085333333333'),
('2100050', 'Muhammad Rizky', 'Makassar/30-05-2018', 'Teknik Mesin', 'Jl. Pettarani No. 40', '085444444444'),
('87087', 'idil', 'solok / 2001 10 10', 'a', 'jsd', '09071287923'),
('8789897897', 'iuojjl', 'lkjljk', 'lkj', 'jlkj', 'lkjlk'),
('NPM', 'Nama Mahasiswa', 'Tempat/Tanggal Lahir', 'Prodi', 'Alamat', 'Telp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NPM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
