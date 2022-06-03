-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2022 pada 15.08
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dprd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `tentang` varchar(1024) NOT NULL,
  `visi` varchar(1024) NOT NULL,
  `misi` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `tentang`, `visi`, `misi`) VALUES
(1, 'tentang', 'visi', 'misi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `judul` varchar(512) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `deskripsi` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id`, `judul`, `tanggal_mulai`, `tanggal_selesai`, `deskripsi`) VALUES
(2, 'Agenda 2 ya', '2022-05-19', '2022-06-04', 'test ets');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akdpage`
--

CREATE TABLE `akdpage` (
  `id` int(11) NOT NULL,
  `banner` varchar(125) NOT NULL,
  `deskripsi` varchar(1024) NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akdpage`
--

INSERT INTO `akdpage` (`id`, `banner`, `deskripsi`, `image`) VALUES
(1, 'image-21.png', 'Lorem ipsum dolor sit amet, co nsectetu r adipiscin g elit. Tempor pretium dictum mi bibendu m risus. Arcu fames integer lacus, tristique varius amet dignissi m integer at. Scele risque bibendu m conse ctetur proin libero vitae, m alesuad a sceleri sque urna, in. Tempus nulla quisque tincidunt posuere duis euismod sollicitu din ut nunc. Viverra ornare faucibus in facilisis pellente sque venenati s malesu ada. <br> <br> Phasellu s a semper mauris morbi sit sit nunc orci blandit. Pulvinar pellente squenon ulla mcorper condim entum in nunc interdu m non a. Sed lorem cursus luctus gravida sem bib endum. Nulla eu sit neque morbi cursus amet, ornare eu. Iaculis eget in enim eget vitae diam. Ultricies pellente sque at gravida est varius nulla neque, urna. Id sem arcu tortor mi pellente sque leo, eu posuere. Tincidun t blandit nisl posuere purus vitae leo. Tincidun t egestas ultrices non feugiat neque odio quis fer mentum . Volutpat , ullamc orper fringilla facilisi sed arcu ut in imperdiet. Sit ferm entum sagittis, ', 'Kabupaten-Banggai-Laut1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akdteam`
--

CREATE TABLE `akdteam` (
  `id` int(11) NOT NULL,
  `kategori` varchar(125) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `jabatan` varchar(125) NOT NULL,
  `foto` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `maps` varchar(512) NOT NULL,
  `alamat` varchar(512) NOT NULL,
  `telp` varchar(256) NOT NULL,
  `fax` varchar(256) NOT NULL,
  `email` varchar(125) NOT NULL,
  `facebook` varchar(125) NOT NULL,
  `twitter` varchar(125) NOT NULL,
  `youtube` varchar(125) NOT NULL,
  `instagram` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `maps`, `alamat`, `telp`, `fax`, `email`, `facebook`, `twitter`, `youtube`, `instagram`) VALUES
(1, '', 'Kawas an Per kantor an Bupati Bangg ai Kelu rahan Tomba ng Permai , Keca matan Luwuk Selata n', '046121053', '0461 94715 ', 'banggailaut@info.go.id ', 'Banggai Laut FB', 'Banggai Laut Twitter', 'Banggai Laut Youtube', 'Banggai Laut IG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contactpesan`
--

CREATE TABLE `contactpesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `pesan` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `easpirasi`
--

CREATE TABLE `easpirasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `pesan` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `edocument`
--

CREATE TABLE `edocument` (
  `id` int(11) NOT NULL,
  `judul` varchar(125) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `judul` varchar(125) NOT NULL,
  `file` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `title_1` varchar(125) NOT NULL,
  `title_2` varchar(125) NOT NULL,
  `subtitle` varchar(1024) NOT NULL,
  `banner` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `homepage`
--

INSERT INTO `homepage` (`id`, `title_1`, `title_2`, `subtitle`, `banner`) VALUES
(1, 'SELAMAT DATANG DI', 'DPRD KABUPATEN BANGGAI LAUT', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh imperdiet sollicitudin etiam sem. Elementum urna maecenas tellus risus sapien urna. Blandit pellentesque egestas tellus at luctus turpis nunc.', 'home.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `judul` varchar(125) NOT NULL,
  `tanggal` date NOT NULL,
  `banner` varchar(125) NOT NULL,
  `isi` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akdpage`
--
ALTER TABLE `akdpage`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akdteam`
--
ALTER TABLE `akdteam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contactpesan`
--
ALTER TABLE `contactpesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `easpirasi`
--
ALTER TABLE `easpirasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `edocument`
--
ALTER TABLE `edocument`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `akdpage`
--
ALTER TABLE `akdpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `akdteam`
--
ALTER TABLE `akdteam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contactpesan`
--
ALTER TABLE `contactpesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `easpirasi`
--
ALTER TABLE `easpirasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `edocument`
--
ALTER TABLE `edocument`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
