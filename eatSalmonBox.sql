-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 13 Jan 2019 pada 13.22
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eatSalmonBox`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sysdb-dhanank`
--

CREATE TABLE `sysdb-dhanank` (
  `id` int(5) NOT NULL,
  `name-link` varchar(20) DEFAULT NULL,
  `url-link` text NOT NULL,
  `view-link` varchar(20) NOT NULL,
  `stat-link` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sysdb-dhanank`
--

INSERT INTO `sysdb-dhanank` (`id`, `name-link`, `url-link`, `view-link`, `stat-link`) VALUES
(1, 'Facebook', 'https://facebook.com', 'checked', 4),
(2, 'Twitter', 'https://www.twitter.com/', 'checked', 1),
(3, 'Google', 'https://google.com', 'checked', 8),
(36, 'Lorem Ipsum', 'Lipsum.com', 'checked', 0),
(40, 'Yahoo', 'https://yahoo.co.id', 'checked', 0),
(42, 'instagram', 'instagram.com', 'unchecked', 0),
(43, 'github', 'github.com', 'checked', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sysdb-login`
--

CREATE TABLE `sysdb-login` (
  `id_account` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sysdb-login`
--

INSERT INTO `sysdb-login` (`id_account`, `username`, `full_name`, `email`, `password`, `usertype`) VALUES
(1, '', 'admin', 'admin@email.com', '21232f297a57a5a743894a0e4a801fc3', 0),
(2, 'dhununk', 'dhanank bagus', 'greatdhanank@gmail.com', 'd873b691c29f641e8487f81cfd3d4d07', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sysdb-dhanank`
--
ALTER TABLE `sysdb-dhanank`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sysdb-login`
--
ALTER TABLE `sysdb-login`
  ADD PRIMARY KEY (`id_account`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sysdb-dhanank`
--
ALTER TABLE `sysdb-dhanank`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `sysdb-login`
--
ALTER TABLE `sysdb-login`
  MODIFY `id_account` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
