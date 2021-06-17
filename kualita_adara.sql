-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2021 pada 07.53
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kualita_adara`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_deskripsi_permintaan_dana`
--

CREATE TABLE `tbl_deskripsi_permintaan_dana` (
  `id_deskripsi_permintaan_dana` int(11) NOT NULL,
  `id_permintaan_dana` int(11) NOT NULL,
  `nama_deskripsi_permintaan_dana` varchar(225) NOT NULL,
  `total_deskripsi_permintaan_dana` varchar(225) NOT NULL,
  `harga_satuan_deskripsi_permintaan_dana` varchar(200) DEFAULT NULL,
  `harga_deskripsi_permintaan_dana` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_deskripsi_permintaan_dana`
--

INSERT INTO `tbl_deskripsi_permintaan_dana` (`id_deskripsi_permintaan_dana`, `id_permintaan_dana`, `nama_deskripsi_permintaan_dana`, `total_deskripsi_permintaan_dana`, `harga_satuan_deskripsi_permintaan_dana`, `harga_deskripsi_permintaan_dana`) VALUES
(1, 1, 'asdasd', '', '2', '800000000'),
(2, 1, 'asdasdfdfdfgvdf', '', '3', '7000000'),
(4, 2, 'Makan Ayam Padang', '', '3', '10000'),
(5, 2, 'Makan Sate Ayam', '', '1', '150000'),
(6, 2, 'Minuman Boba', '', '2', '5000'),
(7, 2, 'Teh Tarik', '', '3', '5000'),
(8, 3, '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_permintaan_dana`
--

CREATE TABLE `tbl_permintaan_dana` (
  `id_permintaan_dana` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_permintaan_dana` varchar(255) DEFAULT NULL,
  `nama_penerima_permintaan_dana` varchar(255) DEFAULT NULL,
  `bank_penerima_permintaan_dana` varchar(255) DEFAULT NULL,
  `no_rekening_penerima_permintaan_dana` varchar(255) DEFAULT NULL,
  `keterangan_penerima_permintaan_dana` varchar(255) DEFAULT NULL,
  `jenis_pembayaran_permintaan_dana` varchar(255) DEFAULT NULL,
  `divisi_permintaan_dana` varchar(255) DEFAULT NULL,
  `jabatan_permintaan_dana` varchar(255) DEFAULT NULL,
  `nama_site_permintaan_dana` varchar(255) DEFAULT NULL,
  `project_permintaan_dana` varchar(255) DEFAULT NULL,
  `cutomer_permintaan_dana` varchar(255) DEFAULT NULL,
  `tanggal_permintaan_dana` date DEFAULT NULL,
  `total_permintaan_dana` varchar(255) DEFAULT NULL,
  `person_created` varchar(255) DEFAULT NULL,
  `diajukan_oleh_permintaan_dana` varchar(255) DEFAULT NULL,
  `disetujui_oleh_permintaan_dana` varchar(255) DEFAULT NULL,
  `dibayarkan_oleh_permintaan_dana` varchar(255) DEFAULT NULL,
  `diterima_oleh_permintaan_dana` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_permintaan_dana`
--

INSERT INTO `tbl_permintaan_dana` (`id_permintaan_dana`, `id_user`, `nama_permintaan_dana`, `nama_penerima_permintaan_dana`, `bank_penerima_permintaan_dana`, `no_rekening_penerima_permintaan_dana`, `keterangan_penerima_permintaan_dana`, `jenis_pembayaran_permintaan_dana`, `divisi_permintaan_dana`, `jabatan_permintaan_dana`, `nama_site_permintaan_dana`, `project_permintaan_dana`, `cutomer_permintaan_dana`, `tanggal_permintaan_dana`, `total_permintaan_dana`, `person_created`, `diajukan_oleh_permintaan_dana`, `disetujui_oleh_permintaan_dana`, `dibayarkan_oleh_permintaan_dana`, `diterima_oleh_permintaan_dana`) VALUES
(1, NULL, 'asdasd', 'asdasdasd', 'DKI', NULL, '<p>test summernote</p>', 'Tunai', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasdasd', '2021-06-17', '', 'cindy', NULL, NULL, NULL, NULL),
(2, NULL, 'Erlangga', 'Rahmat', 'BCA', NULL, '<p>Ini Adalah Bukti Pembelianya</p><p><img xss=removed data-filename=\"download.jpg\"><br></p>', 'Tunai', 'Pemasaran', 'Manager', 'Bukit Dago', 'Project Tower Semarang', 'Seila Bukit dagp', '2021-06-16', '', 'cindy', NULL, NULL, NULL, NULL),
(3, NULL, '', '', '', NULL, '', 'Transfer', '', '', '', '', '', '0000-00-00', '', 'cindy', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(200) DEFAULT NULL,
  `status_role` int(11) DEFAULT NULL,
  `create_log` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_role`
--

INSERT INTO `tbl_role` (`id_role`, `nama_role`, `status_role`, `create_log`) VALUES
(1, 'Admin', 1, 'Cindy'),
(2, 'Admin', 1, 'Cindy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  `no_telpon` varchar(200) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `login_activity` timestamp NULL DEFAULT current_timestamp(),
  `user_create` varchar(200) DEFAULT NULL,
  `logout_activty` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `id_role`, `no_telpon`, `alamat`, `login_activity`, `user_create`, `logout_activty`) VALUES
(1, 'cindy', '123', 1, '08978201075', 'Kebayoran', '2021-06-16 10:54:07', 'cindy', '2021-06-16 10:56:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_deskripsi_permintaan_dana`
--
ALTER TABLE `tbl_deskripsi_permintaan_dana`
  ADD PRIMARY KEY (`id_deskripsi_permintaan_dana`);

--
-- Indeks untuk tabel `tbl_permintaan_dana`
--
ALTER TABLE `tbl_permintaan_dana`
  ADD PRIMARY KEY (`id_permintaan_dana`);

--
-- Indeks untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_deskripsi_permintaan_dana`
--
ALTER TABLE `tbl_deskripsi_permintaan_dana`
  MODIFY `id_deskripsi_permintaan_dana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_permintaan_dana`
--
ALTER TABLE `tbl_permintaan_dana`
  MODIFY `id_permintaan_dana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
