-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2023 pada 03.36
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal_profile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `about` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `foto_background` varchar(100) NOT NULL,
  `deskripsi_singkat` varchar(200) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id_about`, `about`, `foto`, `foto_background`, `deskripsi_singkat`, `nama`, `pekerjaan`) VALUES
(147765, 'pembuatan website', 'foto_431486.png', 'foto_background_431486.png', 'silahkan kunjungin website saya', 'ari', 'web developer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `achivement`
--

CREATE TABLE `achivement` (
  `id_achivement` int(50) NOT NULL,
  `achivement` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `achivement`
--

INSERT INTO `achivement` (`id_achivement`, `achivement`, `foto`) VALUES
(66672, 'juara 1 membuat website', '593605.png'),
(66673, 'juara 3  membuat frondend website', '398648.png'),
(66674, 'juara 2 berenag ', '544958.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biography`
--

CREATE TABLE `biography` (
  `id_bio` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `addres` varchar(150) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(20) NOT NULL,
  `blog` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `tanggal_post` date NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id_blog`, `blog`, `description`, `tanggal_post`, `foto`) VALUES
(345680, 'masakan ikan bakar', 'Ikan bakar adalah hidangan tradisional yang memanfaatkan ikan segar yang dibumbui dengan rempah-rempah, kemudian dipanggang di atas bara api atau arang. Proses panggang ini memberikan rasa yang kaya dan aroma yang khas pada ikan. Rempah-rempah yang digunakan dapat bervariasi tergantung pada budaya dan resep lokal, termasuk bumbu sambal, kunyit, jahe, dan lainnya. Ikan bakar sering disajikan dengan nasi, sayuran, dan saus pelengkap, menciptakan hidangan yang lezat dan beraroma.', '2023-10-12', '791365.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cv`
--

CREATE TABLE `cv` (
  `id_cv` int(50) NOT NULL,
  `description` text NOT NULL,
  `tanggal_post` date NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `cv`
--

INSERT INTO `cv` (`id_cv`, `description`, `tanggal_post`, `foto`) VALUES
(1, 'designer', '2023-11-01', '407995.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `experience`
--

CREATE TABLE `experience` (
  `id_experience` int(11) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `experience`
--

INSERT INTO `experience` (`id_experience`, `experience`, `description`, `foto`) VALUES
(3563536, ' web pendaftaran sma ', 'membuat absensi siswa', '377174.png'),
(3563537, 'web pendaftaran ', 'membuat web pendaftaran siswa', '799167.png'),
(3563538, 'web kantin sekolah', 'membuat website berbasis jajan kantin sekolah', '243608.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hobby`
--

CREATE TABLE `hobby` (
  `id_hobby` int(11) NOT NULL,
  `hobby` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hobby`
--

INSERT INTO `hobby` (`id_hobby`, `hobby`, `description`, `foto`) VALUES
(5534, 'berenang', 'Berenang adalah kegiatan yang memungkinkan seseorang untuk merasakan kebebasan dan kenyamanan di dalam elemen air. Ini adalah hobi yang menuntut kepiawaian, kekuatan fisik, dan ketenangan pikiran.', '911535.png'),
(5543, 'rekreasi wisata', 'Wisata adalah kegiatan yang melibatkan perjalanan atau kunjungan ke tempat-tempat menarik, baik alam, budaya, sejarah, maupun hiburan, dengan tujuan untuk bersantai, mengisi waktu luang, dan mengalami', '749094.png'),
(6443, 'programer website', 'Membuat Website adalah aktivitas yang sangat menarik dan bermanfaat dalam era digital yang penuh inovasi ini. Hobi ini mencerminkan minat dan kreativitas dalam mengembangkan, merancang, dan mengelola ', '253715.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
(1, 'adminari', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `maps`
--

CREATE TABLE `maps` (
  `id_maps` int(5) NOT NULL,
  `maps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `maps`
--

INSERT INTO `maps` (`id_maps`, `maps`) VALUES
(7668, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.1570464725005!2d110.4027820736846!3d-7.773166277108599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5765d4d95351%3A0x5175f045ca1816c!2sPT%20Lauwba%20Techno%20Indonesia!5e0!3m2!1sid!2sid!4v1699418002123!5m2!1sid!2sid\" width=\"1100\" height=\"500\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pesan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `pesan`) VALUES
(30375, 'wiwin', 'wiwin534@gmail.com', '\"Website mereka memukau! Desain modern dan fungsional, sesuai dengan visi saya. Terima kasih, tim!\"'),
(30512, 'ridwan', 'ridwan55@gmail.com', '\"Proses pembuatan website lancar. Hasilnya sangat profesional. Sangat puas dengan layanan ini.\"'),
(59592, 'bagas', 'bagastyur33@gmail.co', '\"Website baru saya luar biasa! Mudah dikelola dan memberikan dorongan besar pada bisnis saya.\"');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `project` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id_portofolio`, `project`, `description`, `foto`) VALUES
(24353643, 'website busines', 'Sebuah website bisnis adalah wadah digital yang dirancang untuk mempromosikan, memasarkan, dan mengelola aktivitas sebuah perusahaan atau usaha komersial. Website ini berfungsi sebagai representasi online dari bisnis tersebut dan dapat memiliki beragam elemen dan fitur, tergantung pada jenis bisnis dan tujuannya', '639185.png'),
(24353644, 'web toko online', 'Manajemen Produk: Sistem manajemen produk yang kuat yang memungkinkan Anda menambahkan, mengedit, dan menghapus produk dengan mudah. Ini harus mencakup gambar produk, deskripsi, harga, stok, dan kategori. Pencarian Produk: Fasilitas pencarian produk yang efisien sehingga pelanggan dapat dengan cepat menemukan apa yang mereka cari. Keranjang Belanja: Sistem keranjang belanja yang memungkinkan pelanggan menambahkan produk, mengelola jumlahnya, dan melanjutkan ke proses pembayaran', '217499.png'),
(24353645, 'web portofolio', 'saya akan membuat Desain website anda menjadi Responsif, sehingga dapat diakses dengan baik di berbagai perangkat, termasuk komputer desktop, tablet, dan ponsel cerdas. Gambar atau video latar belakang yang menarik. Informasi ringkas tentang Anda. Tautan ke bagian-bagian utama situs web. Tentang Saya (About Me): Biografi singkat tentang diri Anda, termasuk latar belakang pendidikan dan pengalaman. Foto Anda. Portofolio (Portfolio): Daftar proyek-proyek terbaru atau pilihan yang relevan. Deskripsi singkat setiap proyek. Tautan ke setiap proyek untuk melihat lebih banyak detail. Gambar, video, atau tautan ke pekerjaan yang Anda tampilkan. Pekerjaan Terkait (Services): Daftar layanan atau keterampilan yang Anda tawarkan. Deskripsi singkat tentang setiap layanan. Harga atau informasi kontak untuk konsultasi lebih lanjut.', '822331.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id_services` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(150) NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id_services`, `title`, `description`, `foto`) VALUES
(7, 'konsultasi website', 'Konsultasi Website adalah mitra yang Anda butuhkan untuk meraih sukses digital. Kami memiliki tim ahli dengan pengalaman bertahun-tahun dalam industri', '453497.png'),
(8, 'design website', 'Situs web adalah salah satu alat paling penting untuk berinteraksi dengan audiens Anda di era digital ini. Kualitas desain situs web Anda memiliki dam', '202478.png'),
(9, 'revisi website', 'untuk setiap pemesanan website yang Anda lakukan bersama kami. Kami sangat peduli terhadap kepuasan Anda, dan untuk itu, kami menyediakan kesempatan b', '981101.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skill`
--

CREATE TABLE `skill` (
  `id_skill` int(11) NOT NULL,
  `skill` varchar(200) NOT NULL,
  `persen` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `skill`
--

INSERT INTO `skill` (`id_skill`, `skill`, `persen`, `foto`) VALUES
(334, 'html', '70%', '550634.png'),
(5677, 'css', '90%', '670790.png'),
(6455, 'php', '80%', '283619.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `softskill`
--

CREATE TABLE `softskill` (
  `id_softskill` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `persen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `softskill`
--

INSERT INTO `softskill` (`id_softskill`, `title`, `persen`) VALUES
(14223, 'leadership', '70%'),
(24065, 'confidence', '80%'),
(61201, 'creative', '85%');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id_pesan`, `nama`, `email`, `pesan`) VALUES
(456, 'sindy', 'sindy@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam ut provident repellendus impedit deserunt dignissimos veniam, enim sapiente blanditiis voluptate consectetur culpa eveniet amet accusamus?'),
(9765, 'windah', 'windah@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam ut provident repellendus impedit deserunt dignissimos veniam, enim sapiente blanditiis voluptate consectetur culpa eveniet amet accusamus?'),
(54765, 'riski', 'rizkisaoutra@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam ut provident repellendus impedit deserunt dignissimos veniam, enim sapiente blanditiis voluptate consectetur culpa eveniet amet accusamus?');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `achivement`
--
ALTER TABLE `achivement`
  ADD PRIMARY KEY (`id_achivement`);

--
-- Indeks untuk tabel `biography`
--
ALTER TABLE `biography`
  ADD PRIMARY KEY (`id_bio`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indeks untuk tabel `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id_cv`);

--
-- Indeks untuk tabel `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id_experience`);

--
-- Indeks untuk tabel `hobby`
--
ALTER TABLE `hobby`
  ADD PRIMARY KEY (`id_hobby`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id_maps`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id_services`);

--
-- Indeks untuk tabel `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id_skill`);

--
-- Indeks untuk tabel `softskill`
--
ALTER TABLE `softskill`
  ADD PRIMARY KEY (`id_softskill`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262424325;

--
-- AUTO_INCREMENT untuk tabel `achivement`
--
ALTER TABLE `achivement`
  MODIFY `id_achivement` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66675;

--
-- AUTO_INCREMENT untuk tabel `biography`
--
ALTER TABLE `biography`
  MODIFY `id_bio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=345681;

--
-- AUTO_INCREMENT untuk tabel `cv`
--
ALTER TABLE `cv`
  MODIFY `id_cv` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `experience`
--
ALTER TABLE `experience`
  MODIFY `id_experience` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3563539;

--
-- AUTO_INCREMENT untuk tabel `hobby`
--
ALTER TABLE `hobby`
  MODIFY `id_hobby` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6444;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `maps`
--
ALTER TABLE `maps`
  MODIFY `id_maps` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7669;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=987666;

--
-- AUTO_INCREMENT untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24353646;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id_services` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88889;

--
-- AUTO_INCREMENT untuk tabel `softskill`
--
ALTER TABLE `softskill`
  MODIFY `id_softskill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88573;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54766;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
