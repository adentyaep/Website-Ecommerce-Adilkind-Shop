-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2021 pada 08.08
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_adilkind`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gerabah`
--

CREATE TABLE `tb_gerabah` (
  `idgerabah` int(5) NOT NULL,
  `id_jenis` int(5) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `foto_gerabah` varchar(25) NOT NULL,
  `nama_gerabah` varchar(25) NOT NULL,
  `harga` int(6) NOT NULL,
  `stok` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_gerabah`
--

INSERT INTO `tb_gerabah` (`idgerabah`, `id_jenis`, `jenis`, `foto_gerabah`, `nama_gerabah`, `harga`, `stok`) VALUES
(1, 1, 'Cangkir', 'cangkir-kopin-jago.webp', 'Cangkir Motif Jago Kopin', 120000, 0),
(2, 1, 'Cangkir', 'teaset-biru.jpg', 'Teaset Kopin Biru', 100000, 0),
(3, 1, 'Cangkir', 'teaset-bunga-teko.jpg', 'Teaset Motif Bunga Kopin', 200000, 100),
(4, 1, 'Cangkir', 'teaset-hitam.jpg', 'Teaset Kopin Hitam', 100000, 0),
(5, 2, 'Mangkok', 'mangkok-jago1.webp', 'Mangkok Jago Sedang', 20000, 82),
(6, 2, 'Mangkok', 'mangkok-jago2.png', 'Mangkok Jado Kecil', 15000, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `idgerabah` int(11) NOT NULL,
  `nama_gerabah` varchar(30) NOT NULL,
  `jml_item` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `tanggal_pesan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_pelanggan`, `idgerabah`, `nama_gerabah`, `jml_item`, `harga`, `total_harga`, `tanggal_pesan`, `alamat`) VALUES
(15, 1, 1, 'Cangkir Motif Jago Kopin', 2, 240000, 235000, '2021-06-26 05:23:23', 'Adentya Jl. Dahlia No. 27 RT 05 / RW 05 Gandasuli Brebes Jawa Timur Kabupaten Pati 52215 081392690434'),
(16, 1, 2, 'Teaset Kopin Biru', 6, 600000, 595000, '2021-06-26 19:08:33', 'Adentya Brebes Jawa Tengah Kabupaten Brebes 52215 081392690434'),
(17, 7, 5, 'Mangkok Jago Sedang', 18, 360000, 355000, '2021-06-28 01:22:12', 'Adentya Brebes Jawa Tengah Kabupaten Rembang 52215 081392690434'),
(18, 2, 4, 'Teaset Kopin Hitam', 100, 10000000, 9995000, '2021-06-28 01:23:17', 'Adentya Kota Bandung Jawa Barat Kabupaten Cilacap 52215 081392690434'),
(19, 1, 2, 'Teaset Kopin Biru', 8, 800000, 795000, '2021-06-29 01:50:32', 'Adentya Brebes Jawa Tengah Kabupaten Banjarnegara 52215 081392690434'),
(20, 1, 2, 'Teaset Kopin Biru', 86, 8600000, 8595000, '2021-06-30 05:43:11', 'Adentya Brebes Jawa Tengah Kabupaten Brebes 52215 081392690434');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`idUser`, `username`, `password`, `nama`) VALUES
(1, 'adentyae', '1234', 'Adentya Elmas Pranawa'),
(8, 'emil.kontesa', '1234', 'Emil Kontesa'),
(9, 'aldisi', '12345', 'Hasan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_gerabah`
--
ALTER TABLE `tb_gerabah`
  ADD PRIMARY KEY (`idgerabah`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_gerabah`
--
ALTER TABLE `tb_gerabah`
  MODIFY `idgerabah` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
