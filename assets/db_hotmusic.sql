-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2022 pada 02.28
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotmusic`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `id_user` int(24) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL,
  `role` varchar(24) NOT NULL,
  `create_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`id_user`, `username`, `password`, `role`, `create_at`) VALUES
(1, 'admin', 'admin', 'ADMIN', '2022-05-23 00:00:00.000000'),
(2, 'user', 'user', 'USER', '2022-05-23 00:00:00.000000'),
(3, 'ichot', 'ichot', 'USER', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `love`
--

CREATE TABLE `love` (
  `id` int(12) NOT NULL,
  `judul_lagu` varchar(128) NOT NULL,
  `music` varchar(128) NOT NULL,
  `kode_lagu` varchar(128) NOT NULL,
  `kode_album` varchar(128) NOT NULL,
  `kode_band` varchar(128) NOT NULL,
  `love` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `love_test`
--

CREATE TABLE `love_test` (
  `id` int(128) NOT NULL,
  `kode_lagu` varchar(128) NOT NULL,
  `id_user` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `love_test`
--

INSERT INTO `love_test` (`id`, `kode_lagu`, `id_user`, `status`) VALUES
(1, 'LAGU-0001', '3', ''),
(13, 'LAGU-0019', '2', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_album`
--

CREATE TABLE `tbl_album` (
  `id_album` int(24) NOT NULL,
  `band` varchar(128) NOT NULL,
  `judul_album` varchar(128) NOT NULL,
  `slug_album` varchar(128) NOT NULL,
  `sampul` varchar(128) NOT NULL,
  `kode_album` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_album`
--

INSERT INTO `tbl_album` (`id_album`, `band`, `judul_album`, `slug_album`, `sampul`, `kode_album`) VALUES
(1, 'BAND-0001', 'Fire Bird', 'fire-bird', '453498841-firebird.png', 'ALBUM-0001'),
(2, 'BAND-0003', 'TITLE IDOL', 'title-idol', '1065571473-titleidol.png', 'ALBUM-0002'),
(3, 'BAND-0005', 'ONE OF US', 'one-of-us', '1531562159-oneofus.png', 'ALBUM-0003'),
(4, 'BAND-0006', 'Daylight', 'daylight', '', 'ALBUM-0004'),
(5, 'BAND-0006', 'Flame Of Hope', 'flame-of-hope', '', 'ALBUM-0005'),
(6, 'BAND-0011', 'Dreaming Energy', 'dreaming-energy', '', 'ALBUM-0006'),
(7, 'BAND-0011', 'START!! True Dream', 'start-true-dream', '', 'ALBUM-0007');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_band`
--

CREATE TABLE `tbl_band` (
  `id_band` int(24) NOT NULL,
  `nama_band` varchar(128) NOT NULL,
  `slug_band` varchar(128) NOT NULL,
  `kode_band` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_band`
--

INSERT INTO `tbl_band` (`id_band`, `nama_band`, `slug_band`, `kode_band`) VALUES
(1, 'Roselia', 'roselia', 'BAND-0001'),
(2, 'Hallo Happy World', 'hallo-happy-world', 'BAND-0002'),
(3, 'Pastel*Paletts', 'pastel-paletts', 'BAND-0003'),
(4, 'Poppin Party', 'poppin-party', 'BAND-0004'),
(5, 'Afterglow', 'afterglow', 'BAND-0005'),
(6, 'Morfonica', 'morfonica', 'BAND-0006'),
(7, 'Rise A Suilen', 'rise-a-suilen', 'BAND-0007'),
(8, 'Ophelia', 'ophelia', 'BAND-0008'),
(9, 'Back Number', 'back-number', 'BAND-0009'),
(10, 'More More Jump', 'more-more-jump', 'BAND-0010'),
(11, 'Liella', 'liella', 'BAND-0011');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lagu`
--

CREATE TABLE `tbl_lagu` (
  `id_lagu` int(24) NOT NULL,
  `judul_lagu` varchar(128) NOT NULL,
  `music` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `kode_lagu` varchar(128) NOT NULL,
  `kode_album` varchar(128) NOT NULL,
  `kode_band` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_lagu`
--

INSERT INTO `tbl_lagu` (`id_lagu`, `judul_lagu`, `music`, `slug`, `kode_lagu`, `kode_album`, `kode_band`, `status`) VALUES
(1, 'Power of Love', '981846040-Power_of_love!!!.mp3', 'power-of-love', 'LAGU-0001', 'ALBUM-0002', 'BAND-0003', 'danger'),
(2, 'TITLE IDOL', '1469885124-TITLE_IDOL.mp3', 'title-idol', 'LAGU-0002', 'ALBUM-0002', 'BAND-0003', 'dark'),
(3, 'Winking☆Cheer', '78474431-Winking☆Cheer.mp3', 'winking-cheer', 'LAGU-0003', 'ALBUM-0002', 'BAND-0003', 'dark'),
(4, 'Wonderful Sweet', '443348934-Wonderful_Sweet.mp3', 'wonderful-sweet', 'LAGU-0004', 'ALBUM-0002', 'BAND-0003', 'dark'),
(5, 'あっつあつ_常夏_らぶ☆サマー！', '1743266568-あっつあつ_常夏_らぶ☆サマー！.mp3', 'あっつあつ_常夏_らぶ-サマー！', 'LAGU-0005', 'ALBUM-0002', 'BAND-0003', 'dark'),
(6, 'きゅ～まい＊flower', '1008673869-きゅ～まい＊flower.mp3', 'きゅ～まい-flower', 'LAGU-0006', 'ALBUM-0002', 'BAND-0003', 'dark'),
(7, 'しゅわりん どり みん', '1536459280-しゅわりん☆どり～みん.mp3', 'しゅわりん☆どり～みん', 'LAGU-0007', 'ALBUM-0002', 'BAND-0003', 'dark'),
(8, 'もういちど_ルミナス', '440603645-もういちど_ルミナス.mp3', 'もういちど_ル???ペス', 'LAGU-0008', 'ALBUM-0002', 'BAND-0003', 'dark'),
(9, 'ゆめゆめグラデーション', '1405212752-ゆめゆめグラデーション.mp3', 'ゆめゆめグラデーション', 'LAGU-0009', 'ALBUM-0002', 'BAND-0003', 'dark'),
(10, 'ゆら・ゆらRing-Dong-Dance', '1669447599-ゆら・ゆらRing-Dong-Dance.mp3', 'ゆら・ゆらring-dong-dance', 'LAGU-0010', 'ALBUM-0002', 'BAND-0003', 'dark'),
(11, 'ワクワクmeetsトリップ', '256296775-ワクワクmeetsトリップ.mp3', 'ワクワクmeetsトリップ', 'LAGU-0011', 'ALBUM-0002', 'BAND-0003', 'dark'),
(12, '天下卜ーイツA to Z', '1240221155-天下卜ーイツA_to_Z☆.mp3', '天下卜ーイツA_to_Z☆', 'LAGU-0012', 'ALBUM-0002', 'BAND-0003', 'dark'),
(13, 'Easy come, Easy go！', '1586125945-Easy_come,_Easy_go！.mp3', 'easy-come-easy-go！', 'LAGU-0013', 'ALBUM-0003', 'BAND-0005', 'dark'),
(14, 'Hey-day狂騒曲 (カプリチオ)', '1260329222-Hey-day狂騒曲_(カプリチオ).mp3', 'hey-day狂騒曲-カプリチオ', 'LAGU-0014', 'ALBUM-0003', 'BAND-0005', 'dark'),
(15, 'I knew it!', '1669568941-I_knew_it!.mp3', 'i-knew-it', 'LAGU-0015', 'ALBUM-0003', 'BAND-0005', 'dark'),
(16, 'I love your way!', '21098668-I_love_your_way!.mp3', 'i-love-your-way', 'LAGU-0016', 'ALBUM-0003', 'BAND-0005', 'dark'),
(17, 'ON YOUR MARK', '1717261585-ON_YOUR_MARK.mp3', 'on-your-mark', 'LAGU-0017', 'ALBUM-0003', 'BAND-0005', 'dark'),
(18, 'RED RED RED', '794392055-RED_RED_RED.mp3', 'red-red-red', 'LAGU-0018', 'ALBUM-0003', 'BAND-0005', 'dark'),
(19, 'Sasanqua', '27392589-Sasanqua.mp3', 'sasanqua', 'LAGU-0019', 'ALBUM-0003', 'BAND-0005', 'danger'),
(20, 'SENSENFUKOKU', '706266379-SENSENFUKOKU.mp3', 'sensenfukoku', 'LAGU-0020', 'ALBUM-0003', 'BAND-0005', 'dark'),
(21, 'That is How I Roll', '676639163-That_is_How_I_Roll!.mp3', 'that-is-how-i-roll', 'LAGU-0021', 'ALBUM-0003', 'BAND-0005', 'dark'),
(22, 'Y.O.L.O !!!!', '912664634-Y.O.L.O！！！！！.mp3', 'y.o.l.o-!!!!', 'LAGU-0022', 'ALBUM-0003', 'BAND-0005', 'dark'),
(23, 'ツナグ、ソラモヨウ', '1314043159-ツナグ、ソラモヨウ.mp3', 'ツペグ、ソラモヨウ', 'LAGU-0023', 'ALBUM-0003', 'BAND-0005', 'dark'),
(24, 'Dancing Heart La-Pa-Pa-Pa', '1194544163-Dancing_Heart_La-Pa-Pa-Pa!(1080p).mp3', 'dancing-heart-la-pa-pa-pa', 'LAGU-0024', 'ALBUM-0006', 'BAND-0011', 'dark'),
(25, 'Dreaming Energy', '772326260-Dreaming_Energy(1080p).mp3', 'dreaming-energy', 'LAGU-0025', 'ALBUM-0006', 'BAND-0011', 'dark'),
(26, '始まりは君の空', '1464954181-始まりは君の空(1080p).mp3', '始ま゚は君の空', 'LAGU-0026', 'ALBUM-0006', 'BAND-0011', 'dark'),
(27, 'START!! True dreams', '5496006-START!!_True_dreams(1080p).mp3', 'start-true-dreams', 'LAGU-0027', 'ALBUM-0007', 'BAND-0011', 'dark'),
(28, 'だから僕らは鳴らすんだ!', '749686607-だから僕らは鳴らすんだ！(1080p).mp3', 'だから僕らは鳴らすんだ', 'LAGU-0028', 'ALBUM-0007', 'BAND-0011', 'dark'),
(29, 'Daylight-デイライト', '612265062-Daylight_-デイライト-(1080p).mp3', 'daylight-デイライト', 'LAGU-0029', 'ALBUM-0004', 'BAND-0006', 'dark'),
(30, '金色へのプレリュード', '1417785395-金色へのプレリュード(1080p).mp3', '金色へのプレリュード', 'LAGU-0030', 'ALBUM-0004', 'BAND-0006', 'dark'),
(31, 'flame of hope', '1311214645-flame_of_hope(1080p).mp3', 'flame-of-hope', 'LAGU-0031', 'ALBUM-0005', 'BAND-0006', 'dark'),
(32, 'ブルームブルーム', '1073267204-ブルームブルーム(1080p).mp3', 'ブルームブルーム', 'LAGU-0032', 'ALBUM-0005', 'BAND-0006', 'dark'),
(33, 'PASTEL PALLETS TEST BUG', '772326260-Dreaming_Energy(1080p).mp3', 'pastel-pallets-test-bug', 'LAGU-0032', 'ALBUM-0002', 'BAND-0003', 'dark');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id_role` varchar(24) NOT NULL,
  `role_name` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_role`
--

INSERT INTO `tbl_role` (`id_role`, `role_name`) VALUES
('ADMIN', 'admin'),
('USER', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `love`
--
ALTER TABLE `love`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `love_test`
--
ALTER TABLE `love_test`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indeks untuk tabel `tbl_band`
--
ALTER TABLE `tbl_band`
  ADD PRIMARY KEY (`id_band`);

--
-- Indeks untuk tabel `tbl_lagu`
--
ALTER TABLE `tbl_lagu`
  ADD PRIMARY KEY (`id_lagu`);

--
-- Indeks untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `id_user` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `love`
--
ALTER TABLE `love`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `love_test`
--
ALTER TABLE `love_test`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `id_album` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_band`
--
ALTER TABLE `tbl_band`
  MODIFY `id_band` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_lagu`
--
ALTER TABLE `tbl_lagu`
  MODIFY `id_lagu` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
