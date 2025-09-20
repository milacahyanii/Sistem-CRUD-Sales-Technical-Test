-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Sep 2025 pada 11.29
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sales`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kdbarang` varchar(10) NOT NULL,
  `namabarang` varchar(50) DEFAULT NULL,
  `harga` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kdbarang`, `namabarang`, `harga`) VALUES
('001', 'Miranda', '8000.00'),
('002', 'Herborist', '9500.00'),
('003', 'Nuface', '7000.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `outlet`
--

CREATE TABLE `outlet` (
  `kdoutlet` varchar(10) NOT NULL,
  `namaoutlet` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `PIC` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `outlet`
--

INSERT INTO `outlet` (`kdoutlet`, `namaoutlet`, `alamat`, `PIC`) VALUES
('TKO-001', 'Transmart', 'Cengkareng', 'Steve'),
('TKO-002', 'Hero', 'Jatiuwung', 'Jack');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_detail`
--

CREATE TABLE `penjualan_detail` (
  `id` int(11) NOT NULL,
  `nofaktur` varchar(20) DEFAULT NULL,
  `kode_barang` varchar(10) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` decimal(12,2) DEFAULT NULL,
  `sub_total` decimal(12,2) DEFAULT NULL,
  `created_user` varchar(50) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `edit_user` varchar(50) DEFAULT NULL,
  `edit_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penjualan_detail`
--

INSERT INTO `penjualan_detail` (`id`, `nofaktur`, `kode_barang`, `qty`, `harga`, `sub_total`, `created_user`, `created_date`, `edit_user`, `edit_date`) VALUES
(1, 'fak-202403-001', '001', 2, '8000.00', '16000.00', 'admin', '2025-09-20 07:42:52', NULL, NULL),
(2, 'fak-202403-001', '002', 1, '9500.00', '9500.00', 'admin', '2025-09-20 07:42:52', NULL, NULL),
(3, 'fak-202403-002', '003', 2, '7000.00', '14000.00', 'admin', '2025-09-20 07:42:52', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_header`
--

CREATE TABLE `penjualan_header` (
  `nofaktur` varchar(20) NOT NULL,
  `tglfaktur` date DEFAULT NULL,
  `kdoutlet` varchar(10) DEFAULT NULL,
  `amount` decimal(12,2) DEFAULT NULL,
  `discount` decimal(12,2) DEFAULT NULL,
  `ppn` decimal(12,2) DEFAULT NULL,
  `total_amount` decimal(12,2) DEFAULT NULL,
  `created_user` varchar(50) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `edit_user` varchar(50) DEFAULT NULL,
  `edit_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penjualan_header`
--

INSERT INTO `penjualan_header` (`nofaktur`, `tglfaktur`, `kdoutlet`, `amount`, `discount`, `ppn`, `total_amount`, `created_user`, `created_date`, `edit_user`, `edit_date`) VALUES
('fak-202403-001', '2024-03-22', 'TKO-001', '25500.00', '1000.00', '2805.00', '27305.00', 'admin', '2025-09-20 07:42:52', NULL, NULL),
('fak-202403-002', '2024-03-22', 'TKO-002', '14000.00', '2000.00', '1540.00', '13540.00', 'admin', '2025-09-20 07:42:52', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kdbarang`);

--
-- Indeks untuk tabel `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`kdoutlet`);

--
-- Indeks untuk tabel `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nofaktur` (`nofaktur`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indeks untuk tabel `penjualan_header`
--
ALTER TABLE `penjualan_header`
  ADD PRIMARY KEY (`nofaktur`),
  ADD KEY `kdoutlet` (`kdoutlet`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  ADD CONSTRAINT `penjualan_detail_ibfk_1` FOREIGN KEY (`nofaktur`) REFERENCES `penjualan_header` (`nofaktur`),
  ADD CONSTRAINT `penjualan_detail_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kdbarang`);

--
-- Ketidakleluasaan untuk tabel `penjualan_header`
--
ALTER TABLE `penjualan_header`
  ADD CONSTRAINT `penjualan_header_ibfk_1` FOREIGN KEY (`kdoutlet`) REFERENCES `outlet` (`kdoutlet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
