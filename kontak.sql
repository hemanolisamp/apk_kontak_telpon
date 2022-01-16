-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2020 pada 08.29
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kontak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `telepon`
--

CREATE TABLE `telepon` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nomor` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `telepon`
--

INSERT INTO `telepon` (`id`, `nama`, `nomor`) VALUES
(1, 'moon taeil', '08576666765'),
(2, 'johnny', '08576666778'),
(3, 'lee Taeyong', '08576664556'),
(4, 'yuta', '08576349623'),
(5, 'Kun', '08532895412'),
(6, 'Doyoung', '08586542906'),
(7, 'ten', '08587640528'),
(8, 'jaehyun', '08575538640'),
(9, 'winwin', '08586426957'),
(10, 'jungwoo', '08598667329'),
(11, 'lucas', '08543568064'),
(12, 'mark lee', '08525994934'),
(13, 'xiojun', '08575327900'),
(14, 'hendry', '08642747953'),
(15, 'huang renjun', '08648321896'),
(16, 'lee jeno', '08649421759'),
(17, 'lee haechan', '08642170543'),
(18, 'na jaemin', '08325095312'),
(19, 'yangyang', '08654329756'),
(20, 'shotaro', '08523801976'),
(21, ' jung sungchan', '08538251849'),
(22, 'zhong chenle', '08534298101'),
(23, 'park jisung', '08538251849'),
(27, 'manager', '08653589032');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `telepon`
--
ALTER TABLE `telepon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `telepon`
--
ALTER TABLE `telepon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
