CREATE TABLE `tbl_permintaan_dana` (
  `id_permintaan_dana` int PRIMARY KEY,
  `id_user` int,
  `nama_permintaan_dana` varchar(255),
  `nama_penerima_permintaan_dana` varchar(255),
  `bank_penerima_permintaan_dana` varchar(255),
  `no_rekening_penerima_permintaan_dana` varchar(255),
  `keterangan_penerima_permintaan_dana` varchar(255),
  `jenis_pembayaran_permintaan_dana` varchar(255),
  `divisi_permintaan_dana` varchar(255),
  `jabatan_permintaan_dana` varchar(255),
  `nama_site_permintaan_dana` varchar(255),
  `project_permintaan_dana` varchar(255),
  `cutomer_permintaan_dana` varchar(255),
  `tanggal_permintaan_dana` date,
  `total_permintaan_dana` varchar(255),
  `person_created` varchar(255),
  `diajukan_oleh_permintaan_dana` varchar(255),
  `disetujui_oleh_permintaan_dana` varchar(255),
  `dibayarkan_oleh_permintaan_dana` varchar(255),
  `diterima_oleh_permintaan_dana` varchar(255)
);

CREATE TABLE `tbl_user` (
  `id_user` int PRIMARY KEY,
  `id_role` int,
  `username` varchar(255),
  `password` varchar(255),
  `alamat` varchar(255),
  `no_telpon` varchar(255),
  `login_activity` timestamp,
  `user_create` varchar(255),
  `logout_activty` timestamp
);

CREATE TABLE `tbl_dekripsi_permintaan_dana` (
  `id_deskkripsi_permintaan_dana` PK,
  `id_permintaan_dana` int,
  `nama_deskripsi_permintaan_dana` varchar(255),
  `total_deskripsi_permintaan_dana` varchar(255)
);

CREATE TABLE `tbl_role` (
  `id_role` PK,
  `nama_role` varchar(255),
  `status_role` varchar(255),
  `create_log` timestamp
);

ALTER TABLE `tbl_permintaan_dana` ADD FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

ALTER TABLE `tbl_user` ADD FOREIGN KEY (`id_role`) REFERENCES `tbl_role` (`id_role`);
