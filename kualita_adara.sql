-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2021 pada 07.15
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
-- Struktur dari tabel `tbl_bank`
--

CREATE TABLE `tbl_bank` (
  `id_bank` int(11) NOT NULL,
  `nama_bank` varchar(200) NOT NULL,
  `nomor_rekening` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_bank`
--

INSERT INTO `tbl_bank` (`id_bank`, `nama_bank`, `nomor_rekening`) VALUES
(2, 'BRI', ''),
(14, 'BCA', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_deskripsi_permintaan_cash_advance`
--

CREATE TABLE `tbl_deskripsi_permintaan_cash_advance` (
  `id_deskripsi_permintaan_cash_advance` int(11) NOT NULL,
  `id_permintaan_cash_advance` int(11) DEFAULT NULL,
  `nama_deskripsi_permintaan_cash_advance` varchar(255) DEFAULT NULL,
  `harga_satuan_deskripsi_permintaan_cash_advance` varchar(255) DEFAULT NULL,
  `harga_deskripsi_permintaan_cash_advance` varchar(255) DEFAULT NULL,
  `total_deskripsi_permintaan_cash_advance` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_deskripsi_permintaan_cash_advance`
--

INSERT INTO `tbl_deskripsi_permintaan_cash_advance` (`id_deskripsi_permintaan_cash_advance`, `id_permintaan_cash_advance`, `nama_deskripsi_permintaan_cash_advance`, `harga_satuan_deskripsi_permintaan_cash_advance`, `harga_deskripsi_permintaan_cash_advance`, `total_deskripsi_permintaan_cash_advance`) VALUES
(15, 14, 'ayam', '3', '25000', '75000'),
(16, 14, 'bumbu kacang', '2', '4000', '8000'),
(17, 16, 'Makarono', '2', '200000', '400000'),
(18, 16, 'Kopi Luak', '3', '2000000', '6000000');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_divisi`
--

CREATE TABLE `tbl_divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_divisi`
--

INSERT INTO `tbl_divisi` (`id_divisi`, `nama_divisi`) VALUES
(1, 'direktur'),
(2, 'komisaris'),
(3, 'staf'),
(4, 'keberisihan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'karyawan'),
(2, 'staf'),
(3, 'direktur'),
(4, 'komisaris'),
(5, 'hrd'),
(6, 'office boy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_laporan_advance`
--

CREATE TABLE `tbl_laporan_advance` (
  `id_laporan_cash_advance` int(11) NOT NULL,
  `id_deskripsi_permintaan_cash_advance` int(11) DEFAULT NULL,
  `id_permintaan_cash_advance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_bank` int(11) NOT NULL,
  `nama_pegawai` text NOT NULL,
  `no_telpon` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `alamat_pegawai` varchar(200) NOT NULL,
  `foto_pegawai` varchar(200) NOT NULL,
  `status_pegawai` int(11) NOT NULL,
  `mulai_berkerja` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `id_divisi`, `id_jabatan`, `id_bank`, `nama_pegawai`, `no_telpon`, `jenis_kelamin`, `alamat_pegawai`, `foto_pegawai`, `status_pegawai`, `mulai_berkerja`) VALUES
(11, 1, 5, 2, 'Pak Bagus', '08978209123', 'Laki-Laki', 'asdasdasd', '94b3e37f-8cf5-48eb-8630-4d12386ce74f.jpg', 0, '2021-07-06 02:17:55'),
(12, 3, 5, 1, 'Pak Bagus', '08978201075', 'Prempuan', 'ewrsfsfd', '7ec31944-5f49-4e15-b7b5-d9b405f194173.jpg', 0, '2021-07-06 02:25:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_permintaan_cash_advance`
--

CREATE TABLE `tbl_permintaan_cash_advance` (
  `id_permintaan_cash_advance` int(11) NOT NULL,
  `nama_permintaan_cash_advance` varchar(255) DEFAULT NULL,
  `divisi_permintaan_cash_advance` varchar(255) DEFAULT NULL,
  `jabatan_permintaan_cash_advance` varchar(255) DEFAULT NULL,
  `nama_site_permintaan_cash_advance` varchar(255) DEFAULT NULL,
  `project_permintaan_cash_advance` varchar(255) DEFAULT NULL,
  `customer_permintaan_cash_advance` varchar(255) DEFAULT NULL,
  `tanggal_permintaan_cash_advance` date DEFAULT NULL,
  `total_permintaan_cash_advance` varchar(255) DEFAULT NULL,
  `person_created_cash_advance` varchar(200) DEFAULT NULL,
  `jenis_pembayarn_permintaan_cash_advance` varchar(255) DEFAULT NULL,
  `nama_penerima_permintaan_cash_advance` varchar(255) DEFAULT NULL,
  `bank_permintaan_cash_advance` varchar(255) DEFAULT NULL,
  `nomor_rekening_permintaan_cash_advance` varchar(255) DEFAULT NULL,
  `keterangan_permintaan_cash_advance` varchar(255) DEFAULT NULL,
  `diajukan_permintaan_cash_advance` varchar(255) DEFAULT NULL,
  `tanggal_diajukan_permintaan_cash_advance` date DEFAULT NULL,
  `disetujui_oleh_permintaan_cash_advance` varchar(255) DEFAULT NULL,
  `tanggal_disetujui_permintaan_cash_advance` date DEFAULT NULL,
  `dibayarkan_oleh_permintaan_cash_advance` varchar(255) DEFAULT NULL,
  `tanggal_dibayarkan_permintaan_cash_advance` date DEFAULT NULL,
  `diterima_oleh_permintaan_cash_advance` varchar(255) DEFAULT NULL,
  `tanggal_diterima_permintaan_cash_advance` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_permintaan_cash_advance`
--

INSERT INTO `tbl_permintaan_cash_advance` (`id_permintaan_cash_advance`, `nama_permintaan_cash_advance`, `divisi_permintaan_cash_advance`, `jabatan_permintaan_cash_advance`, `nama_site_permintaan_cash_advance`, `project_permintaan_cash_advance`, `customer_permintaan_cash_advance`, `tanggal_permintaan_cash_advance`, `total_permintaan_cash_advance`, `person_created_cash_advance`, `jenis_pembayarn_permintaan_cash_advance`, `nama_penerima_permintaan_cash_advance`, `bank_permintaan_cash_advance`, `nomor_rekening_permintaan_cash_advance`, `keterangan_permintaan_cash_advance`, `diajukan_permintaan_cash_advance`, `tanggal_diajukan_permintaan_cash_advance`, `disetujui_oleh_permintaan_cash_advance`, `tanggal_disetujui_permintaan_cash_advance`, `dibayarkan_oleh_permintaan_cash_advance`, `tanggal_dibayarkan_permintaan_cash_advance`, `diterima_oleh_permintaan_cash_advance`, `tanggal_diterima_permintaan_cash_advance`) VALUES
(16, 'Cindy', 'Srtaf', 'Direktur', 'Solo', 'Solo', 'Abizaer', '2021-07-14', '', NULL, 'Transfer', 'Erlangga', 'BCA', '123123', '<p>Deskripsi Test</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
-- Indeks untuk tabel `tbl_bank`
--
ALTER TABLE `tbl_bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indeks untuk tabel `tbl_deskripsi_permintaan_cash_advance`
--
ALTER TABLE `tbl_deskripsi_permintaan_cash_advance`
  ADD PRIMARY KEY (`id_deskripsi_permintaan_cash_advance`);

--
-- Indeks untuk tabel `tbl_deskripsi_permintaan_dana`
--
ALTER TABLE `tbl_deskripsi_permintaan_dana`
  ADD PRIMARY KEY (`id_deskripsi_permintaan_dana`);

--
-- Indeks untuk tabel `tbl_divisi`
--
ALTER TABLE `tbl_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indeks untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `tbl_laporan_advance`
--
ALTER TABLE `tbl_laporan_advance`
  ADD PRIMARY KEY (`id_laporan_cash_advance`);

--
-- Indeks untuk tabel `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `tbl_permintaan_cash_advance`
--
ALTER TABLE `tbl_permintaan_cash_advance`
  ADD PRIMARY KEY (`id_permintaan_cash_advance`);

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
-- AUTO_INCREMENT untuk tabel `tbl_bank`
--
ALTER TABLE `tbl_bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_deskripsi_permintaan_cash_advance`
--
ALTER TABLE `tbl_deskripsi_permintaan_cash_advance`
  MODIFY `id_deskripsi_permintaan_cash_advance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_deskripsi_permintaan_dana`
--
ALTER TABLE `tbl_deskripsi_permintaan_dana`
  MODIFY `id_deskripsi_permintaan_dana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_divisi`
--
ALTER TABLE `tbl_divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_laporan_advance`
--
ALTER TABLE `tbl_laporan_advance`
  MODIFY `id_laporan_cash_advance` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_permintaan_cash_advance`
--
ALTER TABLE `tbl_permintaan_cash_advance`
  MODIFY `id_permintaan_cash_advance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_permintaan_dana`
--
ALTER TABLE `tbl_permintaan_dana`
  MODIFY `id_permintaan_dana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
