-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2022 pada 17.08
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
  `image` varchar(125) NOT NULL,
  `deskripsi_badanAnggaran` varchar(1024) NOT NULL,
  `deskripsi_pimpinanDprd` varchar(1024) NOT NULL,
  `deskripsi_badanMusyawarah` varchar(1024) NOT NULL,
  `deskripsi_bappeda` varchar(1024) NOT NULL,
  `deskripsi_komisi1` varchar(1024) NOT NULL,
  `deskripsi_komisi2` varchar(1024) NOT NULL,
  `deskripsi_komisi3` varchar(1024) NOT NULL,
  `deskripsi_komisi4` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akdpage`
--

INSERT INTO `akdpage` (`id`, `banner`, `deskripsi`, `image`, `deskripsi_badanAnggaran`, `deskripsi_pimpinanDprd`, `deskripsi_badanMusyawarah`, `deskripsi_bappeda`, `deskripsi_komisi1`, `deskripsi_komisi2`, `deskripsi_komisi3`, `deskripsi_komisi4`) VALUES
(1, 'image-21.png', 'Lorem ipsum dolor sit amet, co nsectetu r adipiscin g elit. Tempor pretium dictum mi bibendu m risus. Arcu fames integer lacus, tristique varius amet dignissi m integer at. Scele risque bibendu m conse ctetur proin libero vitae, m alesuad a sceleri sque urna, in. Tempus nulla quisque tincidunt posuere duis euismod sollicitu din ut nunc. Viverra ornare faucibus in facilisis pellente sque venenati s malesu ada. <br> <br> Phasellu s a semper mauris morbi sit sit nunc orci blandit. Pulvinar pellente squenon ulla mcorper condim entum in nunc interdu m non a. Sed lorem cursus luctus gravida sem bib endum. Nulla eu sit neque morbi cursus amet, ornare eu. Iaculis eget in enim eget vitae diam. Ultricies pellente sque at gravida est varius nulla neque, urna. Id sem arcu tortor mi pellente sque leo, eu posuere. Tincidun t blandit nisl posuere purus vitae leo. Tincidun t egestas ultrices non feugiat neque odio quis fer mentum . Volutpat , ullamc orper fringilla facilisi sed arcu ut in imperdiet. Sit ferm entum sagittis, ', 'Kabupaten-Banggai-Laut1.png', 'Deskripsi Badan Anggaran', 'Deskripsi Pimpinan DPRD', 'Deskripsi Badan Musyawarah', 'Deskripsi BAPPEDA', 'Deskripsi Komisi I', 'Deskripsi Komisi II', 'Deskripsi Komisi III', 'Deskripsi Komisi IV');

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

--
-- Dumping data untuk tabel `akdteam`
--

INSERT INTO `akdteam` (`id`, `kategori`, `nama`, `jabatan`, `foto`) VALUES
(1, 'Badan Anggaran', 'Goerge William', 'Board of Director', 'man-11.png'),
(2, 'Badan Anggaran', 'Nama Pimpinan DPRD', 'Jabatan Pimpinan DPRD', 'man-2.png'),
(3, 'Badan Anggaran', 'Nama Badan Musyawarah', 'Jabatan Badan Musyawarah', 'woman-1.png'),
(4, 'BAPPEDA', 'Nama Bappeda', 'Jabatan Bappeda', 'woman-2.png'),
(5, 'Komisi I', 'Nama Komisi I', 'Jabatan Komisi I', 'man-12.png'),
(6, 'Komisi II', 'Nama Komisi II', 'Jabatan Komisi II', 'man-21.png'),
(7, 'Komisi III', 'Nama Komisi III', 'Jabatan Komisi III', 'woman-11.png'),
(8, 'Komisi IV', 'Nama Komisi IV', 'Jabatan Komisi IV', 'woman-21.png');

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
  `isi` varchar(10240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `judul`, `tanggal`, `banner`, `isi`) VALUES
(1, 'Berita 1', '2022-06-03', 'image-1.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas nec ligula a imperdiet. Cras at neque vel felis tempor volutpat. Nam lobortis et nunc quis commodo. Aenean eget diam ac felis ultricies interdum. Nullam cursus sed sem a tempus. Fusce condimentum dolor sed urna pharetra, eu tempus quam luctus. Nullam auctor quam vestibulum dui pellentesque rhoncus. Vestibulum consectetur dolor ut nulla laoreet, nec cursus lacus tempor. Aenean sollicitudin eget mi eget ultricies. Quisque efficitur dignissim rutrum. Donec ut malesuada turpis. Sed eu mauris nec ligula tempor finibus. Ut placerat sagittis lectus eu molestie.\r\n\r\nDonec justo nulla, accumsan a quam sit amet, sagittis semper dui. Fusce lorem nisl, maximus dictum orci eget, vestibulum cursus ipsum. Donec quis mi tincidunt, ornare risus sit amet, efficitur enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse vel elit eros. Suspendisse consequat at felis eu suscipit. Morbi sed augue scelerisque, sagittis diam nec, auctor arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse nec faucibus ligula. Donec tristique cursus eros, ut tempor ligula auctor eget. Nunc tempor gravida dictum. In pharetra sed sapien sed volutpat. Nunc nec scelerisque nunc. Donec est arcu, congue et rutrum et, sollicitudin sit amet est.\r\n\r\nIn hac habitasse platea dictumst. Donec tincidunt lorem a ex pellentesque commodo. Mauris ut mollis lacus. Aenean pretium, nisl sed imperdiet suscipit, tortor ante dignissim neque, in aliquet massa ipsum vitae felis. Cras at diam finibus, pharetra eros in, tempus turpis. Sed lectus augue, ultrices ut luctus in, tincidunt vitae massa. Morbi vehicula euismod lobortis. Sed vel scelerisque ante. Fusce scelerisque ex vitae mi condimentum, vitae vulputate est imperdiet. Suspendisse pretium ut dui eget scelerisque. Maecenas ut ipsum tellus. Nulla feugiat volutpat ullamcorper. Suspendisse id venenatis ipsum. Duis imperdiet varius sapien non volutpat. Quisque magna justo, ullamcorper sed risus eget, sollicitudin ornare ex. Aenean id finibus eros.\r\n\r\nCurabitur eget scelerisque enim. Praesent nec porttitor quam, eu cursus metus. Morbi laoreet diam cursus sapien viverra laoreet. Mauris blandit massa metus, in blandit purus suscipit eu. Nunc sollicitudin nec elit a pretium. Aenean iaculis justo leo, id sagittis libero consequat auctor. Nam tortor urna, posuere eu congue ut, interdum vitae augue. In nec elit quis massa fermentum rutrum. Ut ac magna quis ligula tincidunt maximus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec euismod urna vel varius viverra.\r\n\r\nDonec eget condimentum tortor. Duis lobortis molestie ante, eu vestibulum risus consequat at. Vestibulum in pretium ligula. Mauris commodo porttitor suscipit. Aenean at turpis sapien. Duis auctor ultricies justo, sit amet fringilla arcu eleifend et. Nunc consectetur ligula quis interdum congue. Praesent vulputate erat imperdiet laoreet semper.'),
(2, 'Berita 2', '2022-06-03', 'image-11.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas nec ligula a imperdiet. Cras at neque vel felis tempor volutpat. Nam lobortis et nunc quis commodo. Aenean eget diam ac felis ultricies interdum. Nullam cursus sed sem a tempus. Fusce condimentum dolor sed urna pharetra, eu tempus quam luctus. Nullam auctor quam vestibulum dui pellentesque rhoncus. Vestibulum consectetur dolor ut nulla laoreet, nec cursus lacus tempor. Aenean sollicitudin eget mi eget ultricies. Quisque efficitur dignissim rutrum. Donec ut malesuada turpis. Sed eu mauris nec ligula tempor finibus. Ut placerat sagittis lectus eu molestie.\r\n\r\nDonec justo nulla, accumsan a quam sit amet, sagittis semper dui. Fusce lorem nisl, maximus dictum orci eget, vestibulum cursus ipsum. Donec quis mi tincidunt, ornare risus sit amet, efficitur enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse vel elit eros. Suspendisse consequat at felis eu suscipit. Morbi sed augue scelerisque, sagittis diam nec, auctor arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse nec faucibus ligula. Donec tristique cursus eros, ut tempor ligula auctor eget. Nunc tempor gravida dictum. In pharetra sed sapien sed volutpat. Nunc nec scelerisque nunc. Donec est arcu, congue et rutrum et, sollicitudin sit amet est.\r\n\r\nIn hac habitasse platea dictumst. Donec tincidunt lorem a ex pellentesque commodo. Mauris ut mollis lacus. Aenean pretium, nisl sed imperdiet suscipit, tortor ante dignissim neque, in aliquet massa ipsum vitae felis. Cras at diam finibus, pharetra eros in, tempus turpis. Sed lectus augue, ultrices ut luctus in, tincidunt vitae massa. Morbi vehicula euismod lobortis. Sed vel scelerisque ante. Fusce scelerisque ex vitae mi condimentum, vitae vulputate est imperdiet. Suspendisse pretium ut dui eget scelerisque. Maecenas ut ipsum tellus. Nulla feugiat volutpat ullamcorper. Suspendisse id venenatis ipsum. Duis imperdiet varius sapien non volutpat. Quisque magna justo, ullamcorper sed risus eget, sollicitudin ornare ex. Aenean id finibus eros.\r\n\r\nCurabitur eget scelerisque enim. Praesent nec porttitor quam, eu cursus metus. Morbi laoreet diam cursus sapien viverra laoreet. Mauris blandit massa metus, in blandit purus suscipit eu. Nunc sollicitudin nec elit a pretium. Aenean iaculis justo leo, id sagittis libero consequat auctor. Nam tortor urna, posuere eu congue ut, interdum vitae augue. In nec elit quis massa fermentum rutrum. Ut ac magna quis ligula tincidunt maximus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec euismod urna vel varius viverra.\r\n\r\nDonec eget condimentum tortor. Duis lobortis molestie ante, eu vestibulum risus consequat at. Vestibulum in pretium ligula. Mauris commodo porttitor suscipit. Aenean at turpis sapien. Duis auctor ultricies justo, sit amet fringilla arcu eleifend et. Nunc consectetur ligula quis interdum congue. Praesent vulputate erat imperdiet laoreet semper.'),
(3, 'Berita 3', '2022-06-04', 'image-12.png', ''),
(4, 'Berita 4', '2022-06-25', 'image-13.png', ''),
(5, 'Berita 5', '2022-06-30', 'image-14.png', ''),
(6, 'Berita 6', '2022-06-17', 'image-15.png', ''),
(7, 'Berita 7', '2022-06-23', 'image-16.png', ''),
(8, 'Berita 8', '2022-07-05', 'image-17.png', ''),
(9, 'Berita 9', '2022-07-13', 'image-18.png', ''),
(10, 'Berita 10', '2022-07-15', 'image-19.png', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `newspage`
--

CREATE TABLE `newspage` (
  `id` int(11) NOT NULL,
  `banner` varchar(256) NOT NULL,
  `youtube` varchar(512) NOT NULL,
  `berita_utama1` varchar(256) NOT NULL,
  `berita_utama2` varchar(256) NOT NULL,
  `berita_utama3` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `newspage`
--

INSERT INTO `newspage` (`id`, `banner`, `youtube`, `berita_utama1`, `berita_utama2`, `berita_utama3`) VALUES
(1, 'image-25.png', 'q2UO2qgSMWo', 'Berita 1', 'Berita 2', 'Berita 3');

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
-- Indeks untuk tabel `newspage`
--
ALTER TABLE `newspage`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `newspage`
--
ALTER TABLE `newspage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
