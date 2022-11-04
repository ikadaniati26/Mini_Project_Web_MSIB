-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2022 pada 06.32
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbperpustakaan_msib`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `idanggota` int(11) NOT NULL,
  `kode_anggota` char(9) NOT NULL,
  `nama_anggota` varchar(45) NOT NULL,
  `jk_anggota` char(1) NOT NULL,
  `jurusan_anggota` char(2) NOT NULL,
  `no_telp_anggota` char(3) DEFAULT NULL,
  `alamat_anggota` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `idbuku` int(11) NOT NULL,
  `kode_buku` char(9) NOT NULL,
  `judul_buku` varchar(45) NOT NULL,
  `penulis_buku` varchar(45) NOT NULL,
  `penerbit_buku` varchar(45) DEFAULT NULL,
  `tahun_penerbit` char(4) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `rak_idrak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`idbuku`, `kode_buku`, `judul_buku`, `penulis_buku`, `penerbit_buku`, `tahun_penerbit`, `stok`, `rak_idrak`) VALUES
(1, 'A01', 'Ensiklopedia Bebas', 'Empu Salak', 'Gramedia', '2015', 6, 3),
(10, 'K01', 'Machine Learning', 'Qiu', '089', '2022', 6, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartu_buktipeminjaman`
--

CREATE TABLE `kartu_buktipeminjaman` (
  `id_kartu` varchar(45) NOT NULL,
  `anggota_idanggota` int(11) NOT NULL,
  `peminjaman_idpeminjaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` enum('Admin','Manager','Staff') NOT NULL,
  `foto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `fullname`, `email`, `username`, `password`, `role`, `foto`) VALUES
(1, 'Airlangga Wijaya', 'Aironeman@gmail.com', 'airlangga', '453e68fbbf1fc25d5cd6bcf24c2aa93b6cfcf845', 'Admin', 'd.jpg'),
(18, 'Fano', 'fano26@gmail.com', 'fano', '413f144baa7a1e3b69df53d2b4cd125e722def25', 'Staff', NULL),
(19, 'Ali', 'ali@gmail.com', 'ali', '777b34eb1221b468e7aa30a5a3441d3a6d63c65f', 'Staff', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `idpeminjaman` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL COMMENT '	',
  `tanggal_kembali` date NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `buku_idbuku` int(11) NOT NULL,
  `petugas_idpetugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `idpengembalian` int(11) NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `denda` int(11) DEFAULT NULL,
  `id_buku` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `kartu_buktipeminjaman_id_kartu` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `idpetugas` int(11) NOT NULL,
  `nip` varchar(11) NOT NULL,
  `nama_petugas` varchar(45) NOT NULL,
  `jabatan_petugas` varchar(45) NOT NULL,
  `no_telp_petugas` char(13) DEFAULT NULL,
  `alamat_petugas` varchar(100) DEFAULT NULL,
  `Foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`idpetugas`, `nip`, `nama_petugas`, `jabatan_petugas`, `no_telp_petugas`, `alamat_petugas`, `Foto`) VALUES
(3, 'P01', 'Anggrada Kusuma', 'pustakawan', '23456095', 'Mojoroto', 'anggrada.jpg'),
(12, 'P02', 'Renita Wulandari', 'Kepala Perpustakaan', '000', 'Bandar', 'd.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rak`
--

CREATE TABLE `rak` (
  `idrak` int(11) NOT NULL,
  `nama_rak` varchar(45) NOT NULL,
  `lokasi_rak` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rak`
--

INSERT INTO `rak` (`idrak`, `nama_rak`, `lokasi_rak`) VALUES
(1, 'Ilmu Komputer', 'A1'),
(2, 'Ilmu Psikologi', 'A2'),
(3, 'Ilmu Sains', 'A3'),
(4, 'Ilmu sejarah', 'A4'),
(5, 'Kumpulan Buku cerita', 'B1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`idanggota`),
  ADD UNIQUE KEY `kode_anggota_UNIQUE` (`kode_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`idbuku`),
  ADD UNIQUE KEY `kode_anggota_UNIQUE` (`kode_buku`),
  ADD KEY `fk_buku_rak1` (`rak_idrak`);

--
-- Indeks untuk tabel `kartu_buktipeminjaman`
--
ALTER TABLE `kartu_buktipeminjaman`
  ADD PRIMARY KEY (`id_kartu`),
  ADD UNIQUE KEY `id_kartu_UNIQUE` (`id_kartu`),
  ADD KEY `fk_anggota_has_peminjaman_anggota1` (`anggota_idanggota`),
  ADD KEY `fk_anggota_has_peminjaman_peminjaman1` (`peminjaman_idpeminjaman`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`idpeminjaman`),
  ADD KEY `fk_peminjaman_buku` (`buku_idbuku`),
  ADD KEY `fk_peminjaman_petugas1` (`petugas_idpetugas`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`idpengembalian`),
  ADD KEY `fk_pengembalian_kartu_buktipeminjaman1` (`kartu_buktipeminjaman_id_kartu`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`idpetugas`);

--
-- Indeks untuk tabel `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`idrak`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `idanggota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `idbuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `idpetugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `rak`
--
ALTER TABLE `rak`
  MODIFY `idrak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `fk_buku_rak1` FOREIGN KEY (`rak_idrak`) REFERENCES `rak` (`idrak`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `kartu_buktipeminjaman`
--
ALTER TABLE `kartu_buktipeminjaman`
  ADD CONSTRAINT `fk_anggota_has_peminjaman_anggota1` FOREIGN KEY (`anggota_idanggota`) REFERENCES `anggota` (`idanggota`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_anggota_has_peminjaman_peminjaman1` FOREIGN KEY (`peminjaman_idpeminjaman`) REFERENCES `peminjaman` (`idpeminjaman`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `fk_peminjaman_buku` FOREIGN KEY (`buku_idbuku`) REFERENCES `buku` (`idbuku`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peminjaman_petugas1` FOREIGN KEY (`petugas_idpetugas`) REFERENCES `petugas` (`idpetugas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `fk_pengembalian_kartu_buktipeminjaman1` FOREIGN KEY (`kartu_buktipeminjaman_id_kartu`) REFERENCES `kartu_buktipeminjaman` (`id_kartu`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
