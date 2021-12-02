-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2021 pada 01.09
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game_kualitas_hd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `listgame`
--

CREATE TABLE `listgame` (
  `id` int(15) NOT NULL,
  `nama_game` varchar(255) NOT NULL,
  `tgl_liris` varchar(255) NOT NULL,
  `game_mode` varchar(255) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `listgame`
--

INSERT INTO `listgame` (`id`, `nama_game`, `tgl_liris`, `game_mode`, `platform`, `genre`) VALUES
(6, 'Watch Dogs 2', '2016-11-16', 'Single Player', 'PS4, XBOX One, PC', 'Action, Hacker'),
(7, 'Final Fantasy XV', '2016-11-29', 'Single Player', 'PS4, XBOX One PC', 'Action, Adventure, Fantasy'),
(8, 'Player Unknowns Battlegrounds', '2017-03-23', 'Multi Player', 'Android, PS4, PC, iOS, Xbox One', 'Action'),
(9, 'Ghost Of Tushima', '2020-07-17', 'Single Player', 'PS4, PS5', 'Action, Slash, Fantasy'),
(10, 'Mobile Legend', '2016-07-14', 'Multi Player', 'Android, iOS', 'Action');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`id`, `username`, `password`) VALUES
(2, 'adan', '$2y$10$l6PZH/UuGiQo1XkjzD4r5e5zXnRY.i7v7/e4zL5sd7Ez9HP/e88bS'),
(3, 'rudi619', '$2y$10$51uwYMuJhq4yfOQwIXf5x.n0y0w33X58loVV9KzSDiOnOcptAkpuG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `listgame`
--
ALTER TABLE `listgame`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `listgame`
--
ALTER TABLE `listgame`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
