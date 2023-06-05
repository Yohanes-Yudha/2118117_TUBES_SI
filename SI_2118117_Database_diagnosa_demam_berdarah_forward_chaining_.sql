-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Apr 2023 pada 17.59
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diagnosa demam berdarah (forward chaining)`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_diagnosa`
--

CREATE TABLE `tabel_diagnosa` (
  `id_diagnosa` varchar(15) NOT NULL,
  `id_pasien` varchar(10) NOT NULL,
  `id_rule` varchar(15) NOT NULL,
  `nama_diagnosa` varchar(50) NOT NULL,
  `tanggal_diagnosa` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_dokter`
--

CREATE TABLE `tabel_dokter` (
  `id_dokter` varchar(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama_dokter` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jam_pelayanan` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_gejala`
--

CREATE TABLE `tabel_gejala` (
  `id_gejala` varchar(15) NOT NULL,
  `nama_gejala` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_hasil_konsultasi`
--

CREATE TABLE `tabel_hasil_konsultasi` (
  `id_hasil_konsultasi` varchar(15) NOT NULL,
  `id_konsultasi` varchar(15) NOT NULL,
  `hasil_konsultasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_konsultasi`
--

CREATE TABLE `tabel_konsultasi` (
  `id_konsultasi` varchar(15) NOT NULL,
  `id_pasien` varchar(10) NOT NULL,
  `id_dokter` varchar(10) NOT NULL,
  `id_diagnosa` varchar(15) NOT NULL,
  `tanggal_konsultasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pasien`
--

CREATE TABLE `tabel_pasien` (
  `id_pasien` varchar(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_penyakit`
--

CREATE TABLE `tabel_penyakit` (
  `id_penyakit` varchar(15) NOT NULL,
  `nama_penyakit` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_rule_gejala`
--

CREATE TABLE `tabel_rule_gejala` (
  `id_rule` varchar(15) NOT NULL,
  `id_gejala` varchar(15) NOT NULL,
  `id_penyakit` varchar(15) NOT NULL,
  `aturan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tabel_diagnosa`
--
ALTER TABLE `tabel_diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`),
  ADD KEY `id_pasien` (`id_pasien`,`id_rule`),
  ADD KEY `id_rule` (`id_rule`);

--
-- Indeks untuk tabel `tabel_dokter`
--
ALTER TABLE `tabel_dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tabel_gejala`
--
ALTER TABLE `tabel_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `tabel_hasil_konsultasi`
--
ALTER TABLE `tabel_hasil_konsultasi`
  ADD PRIMARY KEY (`id_hasil_konsultasi`),
  ADD KEY `id_konsultasi` (`id_konsultasi`);

--
-- Indeks untuk tabel `tabel_konsultasi`
--
ALTER TABLE `tabel_konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `id_pasien` (`id_pasien`,`id_dokter`,`id_diagnosa`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_diagnosa` (`id_diagnosa`);

--
-- Indeks untuk tabel `tabel_pasien`
--
ALTER TABLE `tabel_pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tabel_penyakit`
--
ALTER TABLE `tabel_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indeks untuk tabel `tabel_rule_gejala`
--
ALTER TABLE `tabel_rule_gejala`
  ADD PRIMARY KEY (`id_rule`,`id_gejala`),
  ADD KEY `id_gejala` (`id_gejala`,`id_penyakit`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indeks untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_admin`
--
ALTER TABLE `tabel_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_diagnosa`
--
ALTER TABLE `tabel_diagnosa`
  ADD CONSTRAINT `tabel_diagnosa_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tabel_pasien` (`id_pasien`),
  ADD CONSTRAINT `tabel_diagnosa_ibfk_2` FOREIGN KEY (`id_rule`) REFERENCES `tabel_rule_gejala` (`id_rule`);

--
-- Ketidakleluasaan untuk tabel `tabel_dokter`
--
ALTER TABLE `tabel_dokter`
  ADD CONSTRAINT `tabel_dokter_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tabel_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tabel_hasil_konsultasi`
--
ALTER TABLE `tabel_hasil_konsultasi`
  ADD CONSTRAINT `tabel_hasil_konsultasi_ibfk_1` FOREIGN KEY (`id_konsultasi`) REFERENCES `tabel_konsultasi` (`id_konsultasi`);

--
-- Ketidakleluasaan untuk tabel `tabel_konsultasi`
--
ALTER TABLE `tabel_konsultasi`
  ADD CONSTRAINT `tabel_konsultasi_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tabel_pasien` (`id_pasien`),
  ADD CONSTRAINT `tabel_konsultasi_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `tabel_dokter` (`id_dokter`),
  ADD CONSTRAINT `tabel_konsultasi_ibfk_3` FOREIGN KEY (`id_diagnosa`) REFERENCES `tabel_diagnosa` (`id_diagnosa`);

--
-- Ketidakleluasaan untuk tabel `tabel_pasien`
--
ALTER TABLE `tabel_pasien`
  ADD CONSTRAINT `tabel_pasien_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tabel_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tabel_rule_gejala`
--
ALTER TABLE `tabel_rule_gejala`
  ADD CONSTRAINT `tabel_rule_gejala_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `tabel_penyakit` (`id_penyakit`),
  ADD CONSTRAINT `tabel_rule_gejala_ibfk_2` FOREIGN KEY (`id_gejala`) REFERENCES `tabel_gejala` (`id_gejala`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
