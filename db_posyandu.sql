-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jul 2024 pada 16.49
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
-- Database: `db_posyandu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_pos_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_nama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_tanggal_lahir` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_jenis_kelamin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_jabatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_notlp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_level` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_meja` int(11) NOT NULL DEFAULT 0,
  `flag_erase` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_pos_id`, `admin_nama`, `admin_alamat`, `admin_tanggal_lahir`, `admin_jenis_kelamin`, `admin_jabatan`, `email`, `admin_notlp`, `password`, `admin_level`, `admin_meja`, `flag_erase`, `created_at`, `updated_at`) VALUES
('1', '1', 'nama admin', 'Jl. alamat admin', NULL, '1', 'Jabatan admin', 'admin@gmail.com', '081234567890', '$2y$12$oJD2qI8ITUamYP4KRgCRJ.CNa2jwF4E6UWeQ4EwKrc54Xtn3jmlAS', '1', 0, 1, '2024-02-11 06:57:13', '2024-02-11 06:57:13'),
('702bb907-6a6f-4660-9c7d-f31908ce87a0', '1', 'Kori Senderela', NULL, '2024-12-06', 'Perempuan', 'meja 1', 'riko@gmail.com', '123456', '$2y$12$zlh.tUJzwrnUoczab3miD.3ZcKduR.QNT4hg1SpsghLjJ5CpiE4vu', '1', 0, 0, '2024-07-26 16:22:28', '2024-07-26 16:22:54'),
('9fdd68d9-0704-4312-be93-f8ecbdbaa84e', '1', 'Kori Senderela', 'Jl.Rahadi Usman Desa Sungai Besar', NULL, 'Perempuan', 'Kader', 'adin@gmail.com', NULL, '$2y$12$/kn72EBJYbiD5.HVcpi.6.oj/v0yawbX7qxNwEhoe8lJWVyqpG16K', '2', 0, 0, '2024-07-26 16:20:48', '2024-07-26 16:21:36'),
('a40fab45-7f4b-4994-9055-998ab05e2bba', '1', 'meja 3', 'meja 3', '2024-07-17', 'Laki-laki', 'menjaga meja 3', 'meja3@gmail.com', '081234567', '$2y$12$dqHLrrDsxTQkmTuTofxi1..l3rOTpevQX.rX4FzeV6ikOTar7OFdm', '1', 3, 1, '2024-07-17 07:33:52', '2024-07-17 07:33:52'),
('aff2aad4-9590-4f35-ad8d-025743fb45de', '1', 'meja 2', 'jaga meja 2', '2024-07-17', 'Laki-laki', 'meja 2', 'meja2@gmail.com', '08123467', '$2y$12$SIozKl3iMos3bd0rESwHZuneG9fRzeLjofAvSAr4w8895kmUQPi6W', '1', 2, 1, '2024-07-17 07:32:39', '2024-07-17 07:32:39'),
('bb741a59-2749-41b1-88af-3f8b1979a842', '1', 'pegawai meja 1', 'Jl.Rahadi Usman Desa Sungai Besar', '2024-07-17', 'Laki-laki', 'meja 1', 'meja1@gmail.com', '081234567890', '$2y$12$uErGCrJIvSZs1L1vNpAPF.zueRem3zVR/T1HLVH1jxq9QyTcd1W2C', '1', 1, 0, '2024-07-17 07:29:10', '2024-07-26 16:21:06'),
('c0eb6b71-8cf2-49f1-ace2-ed7929b60ee7', '1', 'Kori Senderela', 'Jl.Rahadi Usman Desa Sungai Besar', '2003-10-26', 'Perempuan', 'Kader', NULL, '089670180374', '$2y$12$xs/MascAhxImpgkQBHJS0OM3e2uDalecCjSK36Mns./u26WePdbHC', '2', 1, 0, '2024-02-11 07:44:21', '2024-07-17 07:32:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anak`
--

CREATE TABLE `anak` (
  `anak_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anak_ortu_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anak_rfid` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anak_nik` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anak_no_kk` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anak_nama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anak_bb` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anak_ke` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anak_no_akte` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anak_tb` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anak_tempat_lahir` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anak_pos_create` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anak_pegawai_create` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anak_tanggal_lahir` date DEFAULT NULL,
  `anak_jenis_kelamin` int(11) DEFAULT NULL,
  `anak_status_lahir` int(11) DEFAULT NULL,
  `flag_erase` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `anak`
--

INSERT INTO `anak` (`anak_id`, `anak_ortu_id`, `anak_rfid`, `anak_nik`, `anak_no_kk`, `anak_nama`, `anak_bb`, `anak_ke`, `anak_no_akte`, `anak_tb`, `anak_tempat_lahir`, `anak_pos_create`, `anak_pegawai_create`, `anak_tanggal_lahir`, `anak_jenis_kelamin`, `anak_status_lahir`, `flag_erase`, `created_at`, `updated_at`) VALUES
('58105474-db86-486c-933a-249f0eb8f7fc', '3fd400b7-5ad3-4fbb-bb86-f90a10d79a92', 'A0F27222', '123456', '123456', 'Kori Senderela', '5', '2', '123456', '70', 'ketapang', '1', '1', '2024-05-29', 2, 1, 0, '2024-07-29 06:42:31', '2024-07-29 07:15:11'),
('8046ba92-aa27-44b6-af44-631c3a78cf2f', 'f238804a-9db9-465b-8efd-834ca17a3cf7', 'A0F27222', '123456', '123456', 'Kori Senderela', '8', '2', '12345', '100', 'ketapang', '1', '1', '2024-05-29', 2, 1, 1, '2024-07-29 07:24:51', '2024-07-29 07:24:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `imunisasi`
--

CREATE TABLE `imunisasi` (
  `imunisasi_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imunisasi_pos_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imunisasi_nama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imunisasi_deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imunisasi_lama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imunisasi_bulan_awal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imunisasi_bulan_akhir` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imunisasi_status` int(11) NOT NULL DEFAULT 1,
  `flag_erase` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `imunisasi`
--

INSERT INTO `imunisasi` (`imunisasi_id`, `imunisasi_pos_id`, `imunisasi_nama`, `imunisasi_deskripsi`, `imunisasi_lama`, `imunisasi_bulan_awal`, `imunisasi_bulan_akhir`, `imunisasi_status`, `flag_erase`, `created_at`, `updated_at`) VALUES
('12e59065-a839-4103-9dfb-c96a10342373', '1', 'DPT-HB-Hib 1 dan Polio 2', 'Diberikan dalam beberapa dosis untuk mencegah difteri tetanus, dan pertusis (batuk rejan)', '1', '2', '2', 1, 0, '2024-06-27 07:41:09', '2024-06-27 07:42:20'),
('24d02deb-6d03-4427-86e8-c46e223d201c', '1', 'BCG dan Polio 1', 'Diberikan untuk mencegah anak-anak dilindungi dari resiko infeksi penyakit yang dapat menyebabkan komplikasi serius mengancam jiwa', '1', '1', '1', 1, 1, '2024-06-27 07:51:30', '2024-06-27 07:51:30'),
('3d4e265d-d8cb-4880-beb4-49cae4c3126d', '1', 'BCG dan Polio 1', 'Imunisasi adalah proses pemberian vaksin kepada individu dengan tujuan untuk merangsang sistem kekebalan tubuh agar dapat melawan infeksi penyakit tertentu. Vaksin mengandung agen yang menyerupai mikroganisme penyebab penyakit, tetapi telah dilemahkan atau dimatikan sehingga tidak menyebakan penyakit.', '1', '1', '1', 1, 0, '2024-06-27 07:36:35', '2024-06-27 07:41:35'),
('4287bf08-6f76-4304-a3c0-2d53ad436387', '1', 'HB0 1-7 Hari', '--', '1', '0', '0', 1, 0, '2024-02-11 06:57:13', '2024-06-27 07:03:09'),
('6c6de72b-7c68-4004-8ab7-df8b5038d55c', '1', 'DPT-HB-Hib 1 dan Polio 2', 'Diberikan untuk melindungi dari resiko infeksi penyakit yang dapat menyebabkan komplikasi serius dan mengancam jiwa', '1', '2', '2', 1, 1, '2024-06-27 08:23:51', '2024-06-27 08:23:51'),
('6f2de943-18c4-4606-9963-5f4213e6f007', '1', 'Hepatitis B (HB-0),', 'Pos Pelayananan Terpadu (Posyandu) merupakan salah satu elemen penting dalam sistem pelayananan Kesehatan Masyarakat, khususnya dalam pemantauan dan perawatan Kesehatan anak-anak di Indonesia, Posyandu berperan dalam memberikan pelayanan, kesehatan dasar, seperti imunisasi, pemberian nutrisi dan pemantauan pertumbuhan anak. Kegiatan yang dilakukan tim medis selama bertugas di Posyandu ialah  seperti : Pencatatan Register Posyandu, Pencatatan Register Imunisasi, Pengukuran tumbuh kembang anak dan penyuluhan.', '1', '0', '0', 1, 0, '2024-06-27 06:38:39', '2024-06-27 07:41:28'),
('71004c3c-bdfa-4b52-8a01-b4953b8e51ca', '1', 'DPT-HB-Hib 2 dan Polio 3', 'Anak-anak mendaptkan perlindungan yang kuat terhadap sejumlah penyakit serius yang dapat menyebabkan komplikasi parah atau bahkan kematian. Pemberian dosis yang sesuai dengan jadwal imunisasi memastikan kekebalan yang optimal terhadap penyakit-penyakit tersebut', '1', '3', '3', 1, 1, '2024-06-27 09:33:43', '2024-06-27 09:33:43'),
('b6d1f73b-01a4-45f5-a6e7-084490080f6d', '1', 'HB0 < 24 Jam', '--', '1', '0', '0', 1, 0, '2024-02-11 06:57:13', '2024-06-27 07:03:21'),
('b81d8ca9-2fb2-4464-96b3-e6bd92b57912', '1', 'Hepatitis B (HB-0),', 'Diberikan pada bayi baru lahir untuk mencegah tuberkolosis.', '1', '0', '0', 1, 1, '2024-06-27 07:46:45', '2024-06-27 07:46:45'),
('bfd8981f-3182-4ede-b6f8-06742323afe9', '1', 'BCG', '--', '1', '1', '6', 1, 0, '2024-02-11 06:57:13', '2024-06-27 07:03:28'),
('cc718abe-06a1-4928-8cd6-9c66eae4491e', '1', 'DPT-HB-Hib 3 dan Polio 4 dan IPVatau polio suntik', 'Anak-anak mendapatkan perlindungan yang kuat terhadap sejumlah penyakit serius yang dapat menyebabkan komplikasi parah atau bahkan kematian. pemberian dosis yang sesuai. Sesuai jadwal imunisasi memastikan kekebalan yang optimal terhadap penyakit-penyakit tersebut.', '1', '4', '4', 1, 1, '2024-06-27 09:28:06', '2024-06-27 09:28:06'),
('e88e8ae3-985f-473a-a4b5-c289d5300e36', '1', 'DPT-HB-Hib 1 dan Polio 3', 'Anak-nak mendapatkan perlindungan yang kuat terhadap sejumlah penyakit serius dapat menyebabkan komplikasi parah atau bahkan kematian. pemberian dosis yang sesuai jadwal imunisasi memastikan kekebalan yang optimal terhadap penyakit tersebut.', '1', '3', '3', 1, 0, '2024-06-27 09:21:05', '2024-06-27 09:29:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `jadwal_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_pos_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jadwal_imunisasi_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jadwal_tanggal_full` date DEFAULT NULL,
  `jadwal_tanggal` int(11) DEFAULT NULL,
  `jadwal_bulan` int(11) DEFAULT NULL,
  `jadwal_tahun` int(11) DEFAULT NULL,
  `jadwal_lokasi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag_erase` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`jadwal_id`, `jadwal_pos_id`, `jadwal_imunisasi_id`, `jadwal_tanggal_full`, `jadwal_tanggal`, `jadwal_bulan`, `jadwal_tahun`, `jadwal_lokasi`, `flag_erase`, `created_at`, `updated_at`) VALUES
('303eac11-6c9c-4598-8b02-0200e7dd8b79', '1', '24d02deb-6d03-4427-86e8-c46e223d201c', '2024-07-12', 12, 7, 2024, 'Sungai Besar', 1, '2024-07-19 00:04:56', '2024-07-19 00:04:56'),
('d35d9e0c-97cb-4e51-a47b-1bc40526c8ae', '1', '24d02deb-6d03-4427-86e8-c46e223d201c', '2024-07-12', 12, 7, 2024, 'Sungai Besar', 0, '2024-07-12 00:16:17', '2024-07-18 12:01:21'),
('f41df7c3-325f-45e0-a190-339118b9fd2f', '1', '24d02deb-6d03-4427-86e8-c46e223d201c', '2024-02-01', 1, 2, 2024, 'Pematang Gadung', 1, '2024-07-29 04:53:02', '2024-07-29 04:53:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_24_143318_create_posyandu_table', 1),
(6, '2024_01_24_143833_create_imunisasi_table', 1),
(7, '2024_01_24_150810_create_admin_table', 1),
(8, '2024_01_24_150853_create_subadmin_table', 1),
(9, '2024_01_24_150915_create_anak_table', 1),
(10, '2024_02_02_151828_create_rfid_log_table', 1),
(11, '2024_02_02_153934_create_orang_tua_table', 1),
(12, '2024_02_02_192427_create_rekam_medis_table', 1),
(13, '2024_02_03_154235_create_rekam_medis_log_table', 1),
(14, '2024_02_10_133517_create_rfid_card_table', 1),
(15, '2024_03_14_152921_create_jadwal_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orang_tua`
--

CREATE TABLE `orang_tua` (
  `orang_tua_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orang_tua_no_kk` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orang_tua_ibu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orang_tua_ayah` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orang_tua_pekerjaan_ayah` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orang_tua_pendidikan_ayah` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orang_tua_pekerjaan_ibu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orang_tua_pendidikan_ibu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orang_tua_nik_ibu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orang_tua_nik_ayah` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orang_tua_alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orang_tua_kecamatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orang_tua_kabupaten` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orang_tua_rt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orang_tua_rw` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orang_tua_notlp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag_erase` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orang_tua`
--

INSERT INTO `orang_tua` (`orang_tua_id`, `orang_tua_no_kk`, `orang_tua_ibu`, `orang_tua_ayah`, `orang_tua_pekerjaan_ayah`, `orang_tua_pendidikan_ayah`, `orang_tua_pekerjaan_ibu`, `orang_tua_pendidikan_ibu`, `orang_tua_nik_ibu`, `orang_tua_nik_ayah`, `orang_tua_alamat`, `orang_tua_kecamatan`, `orang_tua_kabupaten`, `orang_tua_rt`, `orang_tua_rw`, `orang_tua_notlp`, `email`, `password`, `flag_erase`, `created_at`, `updated_at`) VALUES
('f238804a-9db9-465b-8efd-834ca17a3cf7', '123456', 'Ardiana', 'Busran', NULL, NULL, NULL, NULL, '123456', '123456', 'JL.Rahadi Usman Desa Sungai Besar', NULL, NULL, '04', '02', NULL, 'korisinderela@gmail.com', '$2y$12$YtNCV14Kh5EiosdEclOfwOmYX1ijrSl9BVo0kYAmdTdj.bm1ZObnm', 1, '2024-07-29 07:24:51', '2024-07-29 07:24:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posyandu`
--

CREATE TABLE `posyandu` (
  `posyandu_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posyandu_nama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posyandu_alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posyandu_email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posyandu_notlp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag_erase` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posyandu`
--

INSERT INTO `posyandu` (`posyandu_id`, `posyandu_nama`, `posyandu_alamat`, `posyandu_email`, `posyandu_notlp`, `flag_erase`, `created_at`, `updated_at`) VALUES
('1', 'Posyandu Asoka', 'Posyandu 1', 'posyandu1@gmail.com', '081234567890', 1, '2024-02-11 06:57:12', '2024-02-11 06:57:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `rekam_medis_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rekam_medis_kode` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekam_medis_status_periksa` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `rekam_medis_ortu_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekam_medis_pos_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekam_medis_anak_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekam_medis_imunisasi_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekam_medis_meja_0` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekam_medis_meja_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekam_medis_meja_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekam_medis_meja_3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekam_medis_bb` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekam_medis_tb` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekam_medis_tanggal` int(11) DEFAULT NULL,
  `rekam_medis_bulan` int(11) DEFAULT NULL,
  `rekam_medis_tahun` int(11) DEFAULT NULL,
  `rekam_medis_keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekam_medis_catatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekam_medis_asi_eksklusif` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag_erase` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rekam_medis`
--

INSERT INTO `rekam_medis` (`rekam_medis_id`, `rekam_medis_kode`, `rekam_medis_status_periksa`, `rekam_medis_ortu_id`, `rekam_medis_pos_id`, `rekam_medis_anak_id`, `rekam_medis_imunisasi_id`, `rekam_medis_meja_0`, `rekam_medis_meja_1`, `rekam_medis_meja_2`, `rekam_medis_meja_3`, `rekam_medis_bb`, `rekam_medis_tb`, `rekam_medis_tanggal`, `rekam_medis_bulan`, `rekam_medis_tahun`, `rekam_medis_keterangan`, `rekam_medis_catatan`, `rekam_medis_asi_eksklusif`, `flag_erase`, `created_at`, `updated_at`) VALUES
('10b63702-09de-4d57-9a06-61a2882a57b0', 'RM-140248', '1', '3fd400b7-5ad3-4fbb-bb86-f90a10d79a92', '1', '58105474-db86-486c-933a-249f0eb8f7fc', NULL, '1', NULL, NULL, NULL, NULL, NULL, 29, 7, 2024, NULL, NULL, NULL, 1, '2024-07-29 07:29:43', '2024-07-29 07:29:43'),
('144e4e13-970d-4c0e-af9d-5c2ce324d437', 'RM-841706', '2', 'c555d21f-5b35-4e02-bc51-9e25b9e0ad97', '1', '7d9fe0d8-d302-4353-a860-76857939acca', NULL, '1', 'bb741a59-2749-41b1-88af-3f8b1979a842', NULL, NULL, '4', NULL, 23, 7, 2024, NULL, NULL, NULL, 1, '2024-07-23 06:16:24', '2024-07-23 06:44:30'),
('1700a974-e8ab-455e-8a59-8119859d4d62', 'RM-879207', '3', '3fd400b7-5ad3-4fbb-bb86-f90a10d79a92', '1', '58105474-db86-486c-933a-249f0eb8f7fc', '3d4e265d-d8cb-4880-beb4-49cae4c3126d', '1', '1', '1', '1', '5', '70', 29, 7, 2024, 'Silahkan melakukan posyandu bulan depan', 'Berikan makanan yang bergizi', '1', 1, '2024-07-29 06:43:22', '2024-07-29 06:44:18'),
('1d70bc8f-a1e5-45a5-8f24-4b3da25590a7', 'RM-398987', '1', 'c555d21f-5b35-4e02-bc51-9e25b9e0ad97', '1', '7d9fe0d8-d302-4353-a860-76857939acca', NULL, '1', NULL, NULL, NULL, NULL, NULL, 24, 7, 2024, NULL, NULL, NULL, 1, '2024-07-24 05:32:19', '2024-07-24 05:32:19'),
('26d4a7c0-887b-4cc7-b989-48850a9699c9', 'RM-214122', '3', '82008c52-a085-437f-9639-ab8facc8f66d', '1', '733be2a2-b065-4ddc-8a53-451846157987', NULL, '1', '1', '1', NULL, '16', '150', 25, 7, 2024, NULL, NULL, NULL, 1, '2024-07-25 08:48:18', '2024-07-25 08:48:37'),
('2c75c916-e4cc-405b-951e-82ecaff0f12e', 'RM-537833', '1', '82008c52-a085-437f-9639-ab8facc8f66d', '1', '733be2a2-b065-4ddc-8a53-451846157987', NULL, '1', NULL, NULL, NULL, NULL, NULL, 24, 7, 2024, NULL, NULL, NULL, 1, '2024-07-24 05:31:47', '2024-07-24 05:31:47'),
('34bd9556-db64-4f4b-9801-87ce5e324e23', 'RM-779949', '1', 'c555d21f-5b35-4e02-bc51-9e25b9e0ad97', '1', '7d9fe0d8-d302-4353-a860-76857939acca', NULL, '1', NULL, NULL, NULL, NULL, NULL, 24, 7, 2024, NULL, NULL, NULL, 1, '2024-07-24 05:49:53', '2024-07-24 05:49:53'),
('3e7025d8-c53a-4713-ba7d-0f6bd11dbdba', 'RM-141841', '2', '82008c52-a085-437f-9639-ab8facc8f66d', '1', '733be2a2-b065-4ddc-8a53-451846157987', '4287bf08-6f76-4304-a3c0-2d53ad436387', '1', 'bb741a59-2749-41b1-88af-3f8b1979a842', 'aff2aad4-9590-4f35-ad8d-025743fb45de', 'a40fab45-7f4b-4994-9055-998ab05e2bba', '10', '200', 17, 7, 2024, 'silahkan posyandu', 'posyandu bulan depan', '1', 1, '2024-07-17 08:12:49', '2024-07-24 06:42:07'),
('40ecc7f9-df6d-42cb-a100-4c6684cc38b4', 'RM-110204', '3', '2d02cac0-1701-4adb-beef-f3e7e3d9c391', '1', 'bc9cefc8-baba-4455-81fd-82b8fb79d288', '12e59065-a839-4103-9dfb-c96a10342373', '1', '1', '1', '1', '5', '150', 28, 7, 2024, 'Silahkan melakukan posyandu bulan depan', 'minum yang banyak', '1', 1, '2024-07-27 20:08:22', '2024-07-27 20:10:02'),
('5dedb437-cecb-4925-b7c5-f9b3056d4d6a', 'RM-968499', '1', '3fd400b7-5ad3-4fbb-bb86-f90a10d79a92', '1', '58105474-db86-486c-933a-249f0eb8f7fc', NULL, '1', NULL, NULL, NULL, NULL, NULL, 29, 7, 2024, NULL, NULL, NULL, 1, '2024-07-29 07:25:13', '2024-07-29 07:25:13'),
('61b822f7-3ee1-46fe-9e68-182d298de5c7', 'RM-339629', '3', '8d3c44af-bc99-4377-b718-53d4835c7fe6', '1', '1099f701-3259-4d6b-93c9-1caaf1525de4', '4287bf08-6f76-4304-a3c0-2d53ad436387', '1', '1', '1', '1', '4', '150', 27, 7, 2024, 'silahkan lakukan posyandu tiap bulan', 'banyak minum', '1', 1, '2024-07-27 01:56:06', '2024-07-27 01:57:30'),
('6582df0f-e53d-4dfe-ad72-766b809eb38a', 'RM-581916', '1', '23138237-b159-4015-b0cd-d17d66b28537', '1', '44eb9b3e-367f-42cd-8f06-b58dbe6cf278', NULL, '1', NULL, NULL, NULL, NULL, NULL, 28, 7, 2024, NULL, NULL, NULL, 1, '2024-07-28 07:31:37', '2024-07-28 07:31:37'),
('69214036-2e9d-466e-94fe-8ec640a291d6', 'RM-25156', '1', '23138237-b159-4015-b0cd-d17d66b28537', '1', '44eb9b3e-367f-42cd-8f06-b58dbe6cf278', NULL, '1', NULL, NULL, NULL, NULL, NULL, 28, 7, 2024, NULL, NULL, NULL, 1, '2024-07-28 08:13:08', '2024-07-28 08:13:08'),
('6d89a3f4-881d-44d5-a53d-d37dc4eac4bf', 'RM-438949', '3', '4bdda5cc-790e-4575-b3c0-addd05de4981', '1', 'b5d9c1d3-9960-4905-a553-67d6a88ddeb7', '3d4e265d-d8cb-4880-beb4-49cae4c3126d', '1', '1', '1', '1', '9', '100', 28, 7, 2024, '-', '-', '1', 1, '2024-07-28 06:05:03', '2024-07-28 06:05:43'),
('7e69c079-404f-4eb3-a02d-2d235a26d193', 'RM-953757', '1', '82008c52-a085-437f-9639-ab8facc8f66d', '1', '733be2a2-b065-4ddc-8a53-451846157987', NULL, '1', NULL, NULL, NULL, NULL, NULL, 24, 7, 2024, NULL, NULL, NULL, 1, '2024-07-24 05:29:48', '2024-07-24 05:29:48'),
('820a7074-60df-4f76-95ad-89988c63c39c', 'RM-697238', '3', '2d02cac0-1701-4adb-beef-f3e7e3d9c391', '1', 'bc9cefc8-baba-4455-81fd-82b8fb79d288', NULL, '1', '1', '1', NULL, '5', '150', 28, 7, 2024, NULL, NULL, NULL, 1, '2024-07-27 20:18:53', '2024-07-27 20:19:11'),
('843ea807-e713-48c3-ac77-6d8b2e575f94', 'RM-712555', '3', 'c555d21f-5b35-4e02-bc51-9e25b9e0ad97', '1', '7d9fe0d8-d302-4353-a860-76857939acca', NULL, '1', '1', '1', NULL, '16', '200', 25, 7, 2024, NULL, NULL, NULL, 1, '2024-07-25 03:56:19', '2024-07-25 03:57:13'),
('91866c90-9098-4032-9fdb-70dec7d87b70', 'RM-139216', '3', '4e71444e-91da-4676-94f1-7b0d35f854e9', '1', 'a6e8b579-2940-479a-9284-9b2996c700bd', '24d02deb-6d03-4427-86e8-c46e223d201c', '1', '1', '1', '1', '6', '70', 29, 7, 2024, 'Anak ini silahkan posyandu bulan depan', 'silahkan berikan makanan yang bergizi', '1', 1, '2024-07-29 06:32:08', '2024-07-29 06:33:31'),
('93b04ef1-aca9-4f65-b0f9-0659363e9958', 'RM-126824', '1', 'c555d21f-5b35-4e02-bc51-9e25b9e0ad97', '1', '7d9fe0d8-d302-4353-a860-76857939acca', NULL, '1', NULL, NULL, NULL, NULL, NULL, 24, 7, 2024, NULL, NULL, NULL, 1, '2024-07-24 05:49:36', '2024-07-24 05:49:36'),
('a2fc0bba-c180-4208-affa-3118d794544d', 'RM-70439', '1', 'c555d21f-5b35-4e02-bc51-9e25b9e0ad97', '1', '7d9fe0d8-d302-4353-a860-76857939acca', NULL, '1', NULL, NULL, NULL, NULL, NULL, 24, 7, 2024, NULL, NULL, NULL, 1, '2024-07-24 05:41:07', '2024-07-24 05:41:07'),
('a4437ff7-f8ca-4167-8f85-9b91973a0f65', 'RM-573236', '3', '23138237-b159-4015-b0cd-d17d66b28537', '1', '44eb9b3e-367f-42cd-8f06-b58dbe6cf278', '24d02deb-6d03-4427-86e8-c46e223d201c', '1', '1', '1', '1', '7', '170', 28, 7, 2024, 'Silahkan lakukan', '---', '1', 1, '2024-07-28 05:54:49', '2024-07-28 05:56:17'),
('a7aad45b-00a9-45af-aa24-9e801f48ffe6', 'RM-541396', '1', '4bdda5cc-790e-4575-b3c0-addd05de4981', '1', 'b5d9c1d3-9960-4905-a553-67d6a88ddeb7', NULL, '1', NULL, NULL, NULL, NULL, NULL, 28, 7, 2024, NULL, NULL, NULL, 1, '2024-07-28 08:09:31', '2024-07-28 08:09:31'),
('a9a8c31e-766c-45b5-b3de-b9ee09f035a5', 'RM-74348', '3', '23138237-b159-4015-b0cd-d17d66b28537', '1', '44eb9b3e-367f-42cd-8f06-b58dbe6cf278', '3d4e265d-d8cb-4880-beb4-49cae4c3126d', '1', '1', '1', '1', '5', '150', 28, 7, 2024, 'Silahkan lakukan posyandu di bulan depan', 'perkembangan anak', '1', 1, '2024-07-28 05:49:01', '2024-07-28 05:50:22'),
('b33cbb5b-51a8-4751-b4fb-a8296fe4617c', 'RM-305255', '3', 'c555d21f-5b35-4e02-bc51-9e25b9e0ad97', '1', '7d9fe0d8-d302-4353-a860-76857939acca', '12e59065-a839-4103-9dfb-c96a10342373', '1', 'bb741a59-2749-41b1-88af-3f8b1979a842', 'aff2aad4-9590-4f35-ad8d-025743fb45de', 'a40fab45-7f4b-4994-9055-998ab05e2bba', '4', '130', 17, 7, 2024, 'Anak ini wajib melakukan posyandu bulan depan', 'bulan depan wajib melakukan imunisasi bcg dan polio 1', '1', 1, '2024-07-17 07:51:52', '2024-07-17 07:58:01'),
('b999fd82-0650-4af2-9f0d-2a932f382ac8', 'RM-510342', '3', '4bdda5cc-790e-4575-b3c0-addd05de4981', '1', 'b5d9c1d3-9960-4905-a553-67d6a88ddeb7', '12e59065-a839-4103-9dfb-c96a10342373', '1', '1', '1', '1', '6', '90', 28, 7, 2024, 'silahkan lakukan posyandu bulan depan', 'Anaknya normal', '1', 1, '2024-07-28 06:01:22', '2024-07-28 06:02:51'),
('c3e69980-5917-4a30-a7c2-19cabfd8d808', 'RM-944135', '1', 'c555d21f-5b35-4e02-bc51-9e25b9e0ad97', '1', '7d9fe0d8-d302-4353-a860-76857939acca', NULL, '1', NULL, NULL, NULL, NULL, NULL, 24, 7, 2024, NULL, NULL, NULL, 1, '2024-07-24 06:38:41', '2024-07-24 06:38:41'),
('c53b0be5-a974-4c84-9738-8774e40c2912', 'RM-17578', '3', 'c555d21f-5b35-4e02-bc51-9e25b9e0ad97', '1', '7d9fe0d8-d302-4353-a860-76857939acca', NULL, '1', '1', '1', NULL, '7', '300', 25, 7, 2024, NULL, NULL, NULL, 1, '2024-07-25 04:12:18', '2024-07-25 04:17:12'),
('c546d267-f85c-48ef-9ff2-da9214df37db', 'RM-414925', '3', 'c555d21f-5b35-4e02-bc51-9e25b9e0ad97', '1', '7d9fe0d8-d302-4353-a860-76857939acca', '24d02deb-6d03-4427-86e8-c46e223d201c', '1', '1', '1', '1', '5', '200', 25, 7, 2024, 'silahkan posyandu bulan depan', 'Sehat', '1', 1, '2024-07-25 06:07:23', '2024-07-25 06:10:01'),
('c5716706-6443-40cf-b6b0-920a84596b24', 'RM-118868', '1', '82008c52-a085-437f-9639-ab8facc8f66d', '1', '733be2a2-b065-4ddc-8a53-451846157987', NULL, '1', NULL, NULL, NULL, NULL, NULL, 25, 7, 2024, NULL, NULL, NULL, 1, '2024-07-25 06:14:04', '2024-07-25 06:14:04'),
('c867ee5c-c504-4cd7-a17c-d589e8a5c451', 'RM-43818', '1', 'c555d21f-5b35-4e02-bc51-9e25b9e0ad97', '1', '7d9fe0d8-d302-4353-a860-76857939acca', NULL, '1', NULL, NULL, NULL, NULL, NULL, 24, 7, 2024, NULL, NULL, NULL, 1, '2024-07-24 06:52:32', '2024-07-24 06:52:32'),
('c9af2441-cc7a-4336-b115-1e81d1bc3aaa', 'RM-378417', '1', 'c555d21f-5b35-4e02-bc51-9e25b9e0ad97', '1', '7d9fe0d8-d302-4353-a860-76857939acca', NULL, '1', NULL, NULL, NULL, NULL, NULL, 25, 7, 2024, NULL, NULL, NULL, 1, '2024-07-25 02:05:01', '2024-07-25 02:05:01'),
('c9f7314f-515c-4396-8b3e-e13222d8eb06', 'RM-769913', '1', 'c555d21f-5b35-4e02-bc51-9e25b9e0ad97', '1', '7d9fe0d8-d302-4353-a860-76857939acca', NULL, '1', NULL, NULL, NULL, NULL, NULL, 23, 7, 2024, NULL, NULL, NULL, 1, '2024-07-23 06:40:30', '2024-07-23 06:40:30'),
('ccb1acfb-b0bf-4fee-9d85-b77bf7b8ff6a', 'RM-457195', '1', '82008c52-a085-437f-9639-ab8facc8f66d', '1', '733be2a2-b065-4ddc-8a53-451846157987', NULL, '1', NULL, NULL, NULL, NULL, NULL, 24, 7, 2024, NULL, NULL, NULL, 1, '2024-07-24 06:52:24', '2024-07-24 06:52:24'),
('e02e9494-2c81-4d02-a998-0b5b4b779af4', 'RM-904154', '2', '2d02cac0-1701-4adb-beef-f3e7e3d9c391', '1', 'bc9cefc8-baba-4455-81fd-82b8fb79d288', NULL, '1', '1', NULL, NULL, '5', NULL, 28, 7, 2024, NULL, NULL, NULL, 1, '2024-07-27 21:33:18', '2024-07-27 21:33:27'),
('e710c3b3-a31d-41ff-8f30-2cd36b143854', 'RM-86970', '1', '82008c52-a085-437f-9639-ab8facc8f66d', '1', '733be2a2-b065-4ddc-8a53-451846157987', NULL, '1', NULL, NULL, NULL, NULL, NULL, 23, 7, 2024, NULL, NULL, NULL, 1, '2024-07-23 06:34:12', '2024-07-23 06:34:12'),
('e9d43021-652c-4f21-b1d7-f8743b739847', 'RM-437792', '1', '3fd400b7-5ad3-4fbb-bb86-f90a10d79a92', '1', '58105474-db86-486c-933a-249f0eb8f7fc', NULL, '1', NULL, NULL, NULL, NULL, NULL, 29, 7, 2024, NULL, NULL, NULL, 1, '2024-07-29 07:28:43', '2024-07-29 07:28:43'),
('e9f89974-46c1-4ac3-815c-c538875ed736', 'RM-781903', '1', 'c555d21f-5b35-4e02-bc51-9e25b9e0ad97', '1', '7d9fe0d8-d302-4353-a860-76857939acca', NULL, '1', NULL, NULL, NULL, NULL, NULL, 23, 7, 2024, NULL, NULL, NULL, 1, '2024-07-23 06:53:03', '2024-07-23 06:53:03'),
('f53fc284-8e36-4f22-8ad3-f74492320d31', 'RM-261511', '3', '2d02cac0-1701-4adb-beef-f3e7e3d9c391', '1', 'bc9cefc8-baba-4455-81fd-82b8fb79d288', NULL, '1', '1', '1', NULL, '5', '150', 28, 7, 2024, NULL, NULL, NULL, 1, '2024-07-27 20:13:01', '2024-07-27 20:16:49'),
('f97df265-17df-45bc-99ae-9b001884324d', 'RM-605264', '1', '23138237-b159-4015-b0cd-d17d66b28537', '1', '44eb9b3e-367f-42cd-8f06-b58dbe6cf278', NULL, '1', NULL, NULL, NULL, NULL, NULL, 28, 7, 2024, NULL, NULL, NULL, 1, '2024-07-28 05:54:48', '2024-07-28 05:54:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medis_log`
--

CREATE TABLE `rekam_medis_log` (
  `rekam_medis_log_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rekam_medis_log_kode` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekam_medis_log_rfid` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekam_medis_log_anak_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rfid_card`
--

CREATE TABLE `rfid_card` (
  `rfid_card_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rfid_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rfid_anak_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rfid_pos_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag_erase` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rfid_card`
--

INSERT INTO `rfid_card` (`rfid_card_id`, `rfid_number`, `rfid_anak_id`, `rfid_pos_id`, `flag_erase`, `created_at`, `updated_at`) VALUES
('136f5d58-a306-4ff4-9b64-70cf9b9bb715', '9235F51E', 'b5d9c1d3-9960-4905-a553-67d6a88ddeb7', '1', 0, '2024-07-28 05:47:49', '2024-07-29 04:49:05'),
('29e4fbc1-0024-4b5d-a05f-9785ec6c3093', 'A0F27222', '58105474-db86-486c-933a-249f0eb8f7fc', '1', 0, '2024-07-29 06:42:31', '2024-07-29 07:15:11'),
('4e63337b-7211-4b9b-a847-533215d9d90a', '9235F51E', '7d9fe0d8-d302-4353-a860-76857939acca', '1', 0, '2024-07-17 07:45:49', '2024-07-24 00:05:33'),
('4f5d5eb7-7e43-4585-bc07-3f1092ab684c', '9235F51E', '4ae32cc3-a233-4835-a611-539427be83e3', '1', 0, '2024-07-26 16:05:41', '2024-07-26 16:06:04'),
('66b6c2a6-a211-4fc5-b79c-f65cb2a99463', 'A0F27222', 'e775028f-5418-4a17-a3da-255f507098e9', '1', 0, '2024-07-25 06:13:10', '2024-07-26 16:06:18'),
('7b626a64-2417-4b5a-a16b-1fc1df686db6', 'A0F27222', '1099f701-3259-4d6b-93c9-1caaf1525de4', '1', 0, '2024-07-26 16:10:47', '2024-07-27 05:22:44'),
('895b248b-e10a-40aa-9470-e3d9263bdc23', 'A0F27222', 'c1c6e71e-82e1-4d45-b8ad-bb4294e73796', '1', 0, '2024-07-24 05:29:15', '2024-07-26 16:06:31'),
('92b3e0d1-d6a3-45a1-805a-758c83a37122', 'A0F27222', '958371b5-19d2-4d82-8e00-1f967174d795', '1', 0, '2024-07-24 05:46:17', '2024-07-27 05:22:52'),
('99c479c0-aa02-450f-b554-03e49e4c8f2e', 'A0F27222', 'bc9cefc8-baba-4455-81fd-82b8fb79d288', '1', 0, '2024-07-27 20:08:00', '2024-07-27 21:38:57'),
('ad5e993d-5311-4281-9fc3-638969731c27', 'A0F27222', 'a6e8b579-2940-479a-9284-9b2996c700bd', '1', 0, '2024-07-29 06:31:28', '2024-07-29 06:38:14'),
('b46141da-d826-4206-893d-51ec7556d7f2', 'A0F27222', '8046ba92-aa27-44b6-af44-631c3a78cf2f', '1', 1, '2024-07-29 07:24:51', '2024-07-29 07:24:51'),
('bda2e756-6f3d-42dd-8681-94ea7fdd769c', 'A0F27222', '44eb9b3e-367f-42cd-8f06-b58dbe6cf278', '1', 0, '2024-07-28 05:44:43', '2024-07-29 04:49:13'),
('c4948c7d-1b73-41ed-95b3-0aa77bbc0264', '9235F51E', '733be2a2-b065-4ddc-8a53-451846157987', '1', 0, '2024-07-17 08:11:54', '2024-07-27 05:23:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rfid_log`
--

CREATE TABLE `rfid_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rfid` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rfid_log`
--

INSERT INTO `rfid_log` (`id`, `rfid`, `created_at`, `updated_at`) VALUES
(1, '000000', NULL, NULL),
(3, 'A0F27222', '2024-07-17 07:46:06', '2024-07-17 07:46:06'),
(4, 'A0F27222', '2024-07-17 07:46:17', '2024-07-17 07:46:17'),
(5, 'A0F27222', '2024-07-17 07:46:31', '2024-07-17 07:46:31'),
(6, 'A0F27222', '2024-07-17 07:46:41', '2024-07-17 07:46:41'),
(7, 'A0F27222', '2024-07-17 07:46:54', '2024-07-17 07:46:54'),
(8, 'A0F27222', '2024-07-17 07:47:21', '2024-07-17 07:47:21'),
(9, 'A0F27222', '2024-07-17 07:47:31', '2024-07-17 07:47:31'),
(10, 'A0F27222', '2024-07-17 07:48:10', '2024-07-17 07:48:10'),
(11, 'A0F27222', '2024-07-17 07:48:19', '2024-07-17 07:48:19'),
(12, 'A0F27222', '2024-07-17 07:48:43', '2024-07-17 07:48:43'),
(13, 'A0F27222', '2024-07-17 07:48:52', '2024-07-17 07:48:52'),
(14, 'A0F27222', '2024-07-17 07:49:19', '2024-07-17 07:49:19'),
(15, 'A0F27222', '2024-07-17 07:49:26', '2024-07-17 07:49:26'),
(16, '9235F51E', '2024-07-17 07:49:36', '2024-07-17 07:49:36'),
(17, '9235F51E', '2024-07-17 07:49:59', '2024-07-17 07:49:59'),
(19, 'A0F27222', '2024-07-17 08:11:29', '2024-07-17 08:11:29'),
(22, '', '2024-07-21 08:17:56', '2024-07-21 08:17:56'),
(23, 'A0F27222', '2024-07-21 08:18:05', '2024-07-21 08:18:05'),
(24, 'A0F27222', '2024-07-21 08:18:13', '2024-07-21 08:18:13'),
(25, 'A0F27222', '2024-07-21 08:18:25', '2024-07-21 08:18:25'),
(26, 'A0F27222', '2024-07-21 08:18:34', '2024-07-21 08:18:34'),
(27, 'A0F27222', '2024-07-21 08:18:52', '2024-07-21 08:18:52'),
(28, 'A0F27222', '2024-07-21 08:19:56', '2024-07-21 08:19:56'),
(29, 'A0F27222', '2024-07-21 08:20:24', '2024-07-21 08:20:24'),
(30, '', '2024-07-23 06:14:25', '2024-07-23 06:14:25'),
(31, 'A0F27222', '2024-07-23 06:14:34', '2024-07-23 06:14:34'),
(32, 'A0F27222', '2024-07-23 06:15:03', '2024-07-23 06:15:03'),
(33, '9235F51E', '2024-07-23 06:15:19', '2024-07-23 06:15:19'),
(34, '9235F51E', '2024-07-23 06:15:28', '2024-07-23 06:15:28'),
(37, 'A0F27222', '2024-07-23 06:37:44', '2024-07-23 06:37:44'),
(38, 'A0F27222', '2024-07-23 06:38:18', '2024-07-23 06:38:18'),
(39, 'A0F27222', '2024-07-23 06:38:37', '2024-07-23 06:38:37'),
(43, '9235F51E', '2024-07-24 05:29:36', '2024-07-24 05:29:36'),
(45, '9235F51E', '2024-07-24 05:31:10', '2024-07-24 05:31:10'),
(46, '9235F51E', '2024-07-24 05:31:17', '2024-07-24 05:31:17'),
(47, '9235F51E', '2024-07-24 05:31:27', '2024-07-24 05:31:27'),
(49, '9235F51E', '2024-07-24 05:32:03', '2024-07-24 05:32:03'),
(51, 'A0F27222', '2024-07-24 05:32:56', '2024-07-24 05:32:56'),
(52, '9235F51E', '2024-07-24 05:40:12', '2024-07-24 05:40:12'),
(53, '9235F51E', '2024-07-24 05:40:22', '2024-07-24 05:40:22'),
(54, '9235F51E', '2024-07-24 05:40:32', '2024-07-24 05:40:32'),
(55, '9235F51E', '2024-07-24 05:40:40', '2024-07-24 05:40:40'),
(58, '9235F51E', '2024-07-24 05:46:32', '2024-07-24 05:46:32'),
(59, '9235F51E', '2024-07-24 05:46:48', '2024-07-24 05:46:48'),
(60, '9235F51E', '2024-07-24 05:46:57', '2024-07-24 05:46:57'),
(61, '9235F51E', '2024-07-24 05:47:04', '2024-07-24 05:47:04'),
(62, '9235F51E', '2024-07-24 05:47:13', '2024-07-24 05:47:13'),
(63, 'A0F27222', '2024-07-24 05:47:32', '2024-07-24 05:47:32'),
(64, '9235F51E', '2024-07-24 05:47:41', '2024-07-24 05:47:41'),
(65, '9235F51E', '2024-07-24 05:47:51', '2024-07-24 05:47:51'),
(66, '9235F51E', '2024-07-24 05:48:02', '2024-07-24 05:48:02'),
(67, '9235F51E', '2024-07-24 05:48:24', '2024-07-24 05:48:24'),
(68, '9235F51E', '2024-07-24 05:48:37', '2024-07-24 05:48:37'),
(69, '9235F51E', '2024-07-24 05:49:12', '2024-07-24 05:49:12'),
(70, '9235F51E', '2024-07-24 05:49:23', '2024-07-24 05:49:23'),
(76, '9235F51E', '2024-07-24 06:54:41', '2024-07-24 06:54:41'),
(77, 'A0F27222', '2024-07-24 06:54:51', '2024-07-24 06:54:51'),
(78, 'A0F27222', '2024-07-24 06:54:59', '2024-07-24 06:54:59'),
(83, '', '2024-07-25 06:10:36', '2024-07-25 06:10:36'),
(84, 'A0F27222', '2024-07-25 06:10:45', '2024-07-25 06:10:45'),
(85, '9235F51E', '2024-07-25 06:12:48', '2024-07-25 06:12:48'),
(87, 'A0F27222', '2024-07-25 06:13:16', '2024-07-25 06:13:16'),
(88, 'A0F27222', '2024-07-25 06:13:29', '2024-07-25 06:13:29'),
(89, 'A0F27222', '2024-07-25 06:13:38', '2024-07-25 06:13:38'),
(90, 'A0F27222', '2024-07-25 06:13:48', '2024-07-25 06:13:48'),
(92, 'A0F27222', '2024-07-25 08:47:00', '2024-07-25 08:47:00'),
(93, 'A0F27222', '2024-07-25 08:47:13', '2024-07-25 08:47:13'),
(94, 'A0F27222', '2024-07-25 08:47:22', '2024-07-25 08:47:22'),
(98, '', '2024-07-27 01:55:25', '2024-07-27 01:55:25'),
(99, 'A0F27222', '2024-07-27 01:55:34', '2024-07-27 01:55:34'),
(101, '', '2024-07-27 20:07:40', '2024-07-27 20:07:40'),
(106, 'A0F27222', '2024-07-27 20:36:22', '2024-07-27 20:36:22'),
(107, 'A0F27222', '2024-07-27 20:55:42', '2024-07-27 20:55:42'),
(108, 'A0F27222', '2024-07-27 20:56:53', '2024-07-27 20:56:53'),
(110, '', '2024-07-28 05:43:26', '2024-07-28 05:43:26'),
(121, '', '2024-07-29 06:30:55', '2024-07-29 06:30:55'),
(126, '', '2024-07-29 07:24:32', '2024-07-29 07:24:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subadmin`
--

CREATE TABLE `subadmin` (
  `subadmin_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `subadmin`
--

INSERT INTO `subadmin` (`subadmin_id`, `email`, `password`, `created_at`, `updated_at`) VALUES
('ecce7210-4f12-4e82-beaf-5521a1850702', 'subadmin@gmail.com', '$2y$12$WeweFN5SQ5GxL7uuXDwl2.Z96kK1f.5iTpptCLAemCzBTMjZblFqW', '2024-02-11 06:57:12', '2024-02-11 06:57:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`anak_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`imunisasi_id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`orang_tua_id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posyandu`
--
ALTER TABLE `posyandu`
  ADD PRIMARY KEY (`posyandu_id`);

--
-- Indeks untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`rekam_medis_id`);

--
-- Indeks untuk tabel `rekam_medis_log`
--
ALTER TABLE `rekam_medis_log`
  ADD PRIMARY KEY (`rekam_medis_log_id`);

--
-- Indeks untuk tabel `rfid_card`
--
ALTER TABLE `rfid_card`
  ADD PRIMARY KEY (`rfid_card_id`);

--
-- Indeks untuk tabel `rfid_log`
--
ALTER TABLE `rfid_log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subadmin`
--
ALTER TABLE `subadmin`
  ADD PRIMARY KEY (`subadmin_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rfid_log`
--
ALTER TABLE `rfid_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
