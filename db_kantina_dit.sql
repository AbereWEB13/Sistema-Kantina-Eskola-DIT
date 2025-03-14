-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Feb 2025 pada 21.36
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kantina_dit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_costumer`
--

CREATE TABLE `tbl_costumer` (
  `id_costumer` int(100) NOT NULL,
  `naran` varchar(100) DEFAULT NULL,
  `seksu` enum('Mane','Feto') DEFAULT NULL,
  `numeru_telemovel` int(100) DEFAULT NULL,
  `enderesu` varchar(19) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_costumer`
--

INSERT INTO `tbl_costumer` (`id_costumer`, `naran`, `seksu`, `numeru_telemovel`, `enderesu`, `email`, `image`) VALUES
(2, 'Ana', 'Feto', 73430110, 'Manleuana', 'Mile@gmail.com', '1739934949_afc993ab6c15c180446a.jpg'),
(3, 'Rooy', 'Mane', 73202200, 'Bebonuk', 'Rooy@gmail.com', '1739935060_2abe5cdc7625f0099e97.jpg'),
(4, 'Estelio', 'Mane', 74220013, 'Bidau', 'Estelio@gmail.com', '1739935106_fb1c928a18a6b97dce3d.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_fatin`
--

CREATE TABLE `tbl_fatin` (
  `id_fatin` int(100) NOT NULL,
  `kode_fatin` varchar(100) DEFAULT NULL,
  `naran_fatin` varchar(50) DEFAULT NULL,
  `oras_loke` varchar(100) DEFAULT NULL,
  `oras_taka` varchar(100) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_fatin`
--

INSERT INTO `tbl_fatin` (`id_fatin`, `kode_fatin`, `naran_fatin`, `oras_loke`, `oras_taka`, `image`) VALUES
(1, 'K01', 'Mama Juan Kitchen', '7:00', '18:00', '1739718442_169d1c3a1daa2fb9d302.jpeg'),
(2, 'K02', 'Inggita Cafe', '7:00', '18:00', '1739935189_42116ebf87099b7e5810.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategoria`
--

CREATE TABLE `tbl_kategoria` (
  `id_kategoria` int(100) NOT NULL,
  `naran_kategoria` enum('Makanan','Minuman') DEFAULT NULL,
  `deskrisaun` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_kategoria`
--

INSERT INTO `tbl_kategoria` (`id_kategoria`, `naran_kategoria`, `deskrisaun`) VALUES
(1, 'Makanan', 'Etu Naan'),
(2, 'Minuman', 'Esteh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontraktu`
--

CREATE TABLE `tbl_kontraktu` (
  `id_kontraktu` int(100) NOT NULL,
  `id_costumer` int(100) DEFAULT NULL,
  `id_fatin` int(100) DEFAULT NULL,
  `data_hahu` varchar(100) DEFAULT NULL,
  `data_remata` varchar(100) DEFAULT NULL,
  `total_osan` int(100) DEFAULT NULL,
  `estatutu` enum('Ativu','Lae','') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_kontraktu`
--

INSERT INTO `tbl_kontraktu` (`id_kontraktu`, `id_costumer`, `id_fatin`, `data_hahu`, `data_remata`, `total_osan`, `estatutu`) VALUES
(1, 1, 1, '2025-05-30', '2025-02-24', 4200, 'Lae');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(100) NOT NULL,
  `id_costumer` int(100) DEFAULT NULL,
  `id_produtu` int(100) DEFAULT NULL,
  `presu` decimal(10,2) DEFAULT NULL,
  `kuantidade` int(100) DEFAULT NULL,
  `total_presu` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `id_costumer`, `id_produtu`, `presu`, `kuantidade`, `total_presu`) VALUES
(2, 1, 2, 10.00, 1, NULL),
(10, 3, 3, 5.00, 10, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pagamentu`
--

CREATE TABLE `tbl_pagamentu` (
  `id_pagamentu` int(11) NOT NULL,
  `id_costumer` int(100) DEFAULT NULL,
  `osan` decimal(10,2) DEFAULT NULL,
  `data_pagamentu` varchar(100) NOT NULL,
  `estatutu` varchar(100) DEFAULT NULL,
  `data_atualiza` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pagamentu`
--

INSERT INTO `tbl_pagamentu` (`id_pagamentu`, `id_costumer`, `osan`, `data_pagamentu`, `estatutu`, `data_atualiza`) VALUES
(1, 1, 1200.00, '2025-02-25', 'Selu Kompletu', '2025-02-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produtu`
--

CREATE TABLE `tbl_produtu` (
  `id_produtu` int(100) NOT NULL,
  `naran_produtu` varchar(100) DEFAULT NULL,
  `id_kategoria` int(100) DEFAULT NULL,
  `presu` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_produtu`
--

INSERT INTO `tbl_produtu` (`id_produtu`, `naran_produtu`, `id_kategoria`, `presu`) VALUES
(1, 'Etu Naan', 1, 1.00),
(2, 'Burger', 1, 10.00),
(3, 'Aqua', 1, 0.25),
(4, 'Bang Bang Drink', 2, 0.50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id_role` int(11) NOT NULL,
  `naran_role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_role`
--

INSERT INTO `tbl_role` (`id_role`, `naran_role`) VALUES
(1, 'Salvador');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `naran_kompletu` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id_role` int(100) DEFAULT NULL,
  `ativu` enum('Sim','Lae') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `naran_kompletu`, `username`, `password`, `email`, `id_role`, `ativu`) VALUES
(5, 'SalvadorGomes', 'abere', '$2y$10$fdwKMUur9JYF5BCLeHVrDufZ/a1QALZnbEycOmJabYE6g5jmHh/zq', 'aberegomes9@gmail.com', 1, 'Sim');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_costumer`
--
ALTER TABLE `tbl_costumer`
  ADD PRIMARY KEY (`id_costumer`);

--
-- Indeks untuk tabel `tbl_fatin`
--
ALTER TABLE `tbl_fatin`
  ADD PRIMARY KEY (`id_fatin`);

--
-- Indeks untuk tabel `tbl_kategoria`
--
ALTER TABLE `tbl_kategoria`
  ADD PRIMARY KEY (`id_kategoria`);

--
-- Indeks untuk tabel `tbl_kontraktu`
--
ALTER TABLE `tbl_kontraktu`
  ADD PRIMARY KEY (`id_kontraktu`);

--
-- Indeks untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `tbl_pagamentu`
--
ALTER TABLE `tbl_pagamentu`
  ADD PRIMARY KEY (`id_pagamentu`);

--
-- Indeks untuk tabel `tbl_produtu`
--
ALTER TABLE `tbl_produtu`
  ADD PRIMARY KEY (`id_produtu`);

--
-- Indeks untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
