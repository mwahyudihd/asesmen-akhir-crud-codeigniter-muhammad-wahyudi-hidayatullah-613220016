-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 01 Feb 2024 pada 16.58
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dept`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hutang`
--

CREATE TABLE `hutang` (
  `id_hutang` int(255) NOT NULL,
  `id_pemilik` int(255) NOT NULL,
  `nm_pemberi` varchar(150) NOT NULL,
  `jumlah_htg` decimal(10,0) NOT NULL,
  `tgl_hutang` date NOT NULL DEFAULT current_timestamp(),
  `status` enum('lunas','belum') NOT NULL DEFAULT 'belum',
  `tgl_lunas` date DEFAULT NULL,
  `tg_hutang` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hutang`
--

INSERT INTO `hutang` (`id_hutang`, `id_pemilik`, `nm_pemberi`, `jumlah_htg`, `tgl_hutang`, `status`, `tgl_lunas`, `tg_hutang`) VALUES
(2, 2, 'Doe', 1000, '2024-02-01', 'belum', NULL, NULL),
(9, 1, 'Joe', 12000, '2024-02-01', 'lunas', '2024-01-31', '2024-01-17'),
(10, 1, 'jafar', 10000, '2024-02-01', 'belum', NULL, '2024-01-31'),
(11, 3, 'ihsan', 20000, '2024-02-01', 'lunas', '2024-02-01', '2024-01-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `note`
--

CREATE TABLE `note` (
  `id_catatan` int(255) NOT NULL,
  `id_pemilik` int(255) NOT NULL,
  `catatan` longtext NOT NULL,
  `create_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `note`
--

INSERT INTO `note` (`id_catatan`, `id_pemilik`, `catatan`, `create_on`) VALUES
(4, 2, 'Ini adalah catatan dari Admin!', '2024-02-01'),
(5, 1, 'Ini Adalah catatan ku Test Edit', '2024-02-01'),
(7, 1, 'Ke-2', '2024-02-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `alamat`) VALUES
(1, 'wahyudi123', 'c512ebf2e55decf16808e123cd36191b', 'M Wahyudi H', 'Bandung'),
(2, 'admin', '25e4ee4e9229397b6b17776bfceaf8e7', 'admin', 'none'),
(3, 'rifki2024', '04a4d542d62d3474008958ce456993f5', 'rifki', 'majalaya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hutang`
--
ALTER TABLE `hutang`
  ADD PRIMARY KEY (`id_hutang`);

--
-- Indeks untuk tabel `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id_catatan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hutang`
--
ALTER TABLE `hutang`
  MODIFY `id_hutang` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `note`
--
ALTER TABLE `note`
  MODIFY `id_catatan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
