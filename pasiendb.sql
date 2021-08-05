-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Agu 2021 pada 00.05
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasiendb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `usia` varchar(10) NOT NULL,
  `jenkel` varchar(10) NOT NULL,
  `hasil` varchar(255) NOT NULL,
  `kesimpulan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`id`, `nama`, `usia`, `jenkel`, `hasil`, `kesimpulan`) VALUES
(85, 'Eko Prasetyo', '21', 'L', 'Dermatitis Kontak Alergi : 12% Dermatitis Atopic : 44,56% Dermatitis Kontak Iritan : 77,36% Herves : 10% Neurodermatitis : 0%', 'Dermatitis kontak iritan'),
(86, 'Firda Shofia', '19', 'L', 'Dermatitis Kontak Alergi : 52,66% Dermatitis Atopic : 35,06% Dermatitis Kontak Iritan : 12% Herves : 18% Neurodermatitis : 46,21%', 'Dermatitis kontak alergi'),
(87, 'Mustaqfirin', '22', 'L', 'Dermatitis Kontak Alergi : 0% Dermatitis Atopic : 62,78% Dermatitis Kontak Iritan : 0% Herves : 52,02% Neurodermatitis : 58,64%', 'Dermatitis atopic'),
(88, 'Dafis Wahyu', '24', 'L', 'Dermatitis Kontak Alergi : 28% Dermatitis Atopic : 0% Dermatitis Kontak Iritan : 64,27% Herves : 0% Neurodermatitis : 0%', 'Dermatitis kontak iritan'),
(89, 'Yosa Mayo', '23', 'L', 'Dermatitis Kontak Alergi : 71,14% Dermatitis Atopic : 0% Dermatitis Kontak Iritan : 30% Herves : 72,42% Neurodermatitis : 34,4%', 'Herves'),
(90, 'Ika Lailatin Rahmawati', '23', 'P', 'Dermatitis Kontak Alergi : 68,25% Dermatitis Atopic : 38,4% Dermatitis Kontak Iritan : 44,24% Herves : 18% Neurodermatitis : 18%', 'Dermatitis kontak alergi'),
(91, 'Hasim', '22', 'L', 'Dermatitis Kontak Alergi : 79,22% Dermatitis Atopic : 66,91% Dermatitis Kontak Iritan : 69,93% Herves : 76,66% Neurodermatitis : 72,87%', 'Dermatitis kontak alergi'),
(92, 'Widianingrum', '22', 'P', 'Dermatitis Kontak Alergi : 28% Dermatitis Atopic : 0% Dermatitis Kontak Iritan : 78,95% Herves : 12% Neurodermatitis : 0%', 'Dermatitis kontak iritan'),
(93, 'Azizah', '15', 'P', 'Dermatitis Kontak Alergi : 52,77% Dermatitis Atopic : 0% Dermatitis Kontak Iritan : 28% Herves : 18% Neurodermatitis : 34,4%', 'Dermatitis kontak alergi'),
(94, 'ian', '23', 'L', 'Dermatitis Kontak Alergi : 27,84% Dermatitis Atopic : 50,72% Dermatitis Kontak Iritan : 12% Herves : 62,33% Neurodermatitis : 18%', 'Herves'),
(95, 'tedi', '25', 'L', 'Dermatitis Kontak Alergi : 74,02% Dermatitis Atopic : 0% Dermatitis Kontak Iritan : 30% Herves : 18% Neurodermatitis : 18%', 'Dermatitis kontak alergi'),
(96, 'j', '25', 'P', 'Dermatitis Kontak Alergi : 61,28% Dermatitis Atopic : 12% Dermatitis Kontak Iritan : 12% Herves : 0% Neurodermatitis : 0%', 'Dermatitis kontak alergi'),
(97, 'Asrul', '21', 'L', 'Dermatitis Kontak Alergi : 18% Dermatitis Atopic : 60,4% Dermatitis Kontak Iritan : 42% Herves : 18% Neurodermatitis : 63,92%', 'Neurodermatitis'),
(98, 'eko', '25', 'L', 'Dermatitis Kontak Alergi : 79,93% Dermatitis Atopic : 36,64% Dermatitis Kontak Iritan : 12% Herves : 0% Neurodermatitis : 28%', 'Dermatitis kontak alergi'),
(99, 'widia', '12', 'P', 'Dermatitis Kontak Alergi : 42,4% Dermatitis Atopic : 62,78% Dermatitis Kontak Iritan : 70,77% Herves : 15,4% Neurodermatitis : 66,91%', 'Dermatitis kontak iritan'),
(100, 'samuel', '12', 'P', 'Dermatitis Kontak Alergi : 61,27% Dermatitis Atopic : 77,27% Dermatitis Kontak Iritan : 0% Herves : 18% Neurodermatitis : 76,33%', 'Dermatitis atopic');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
