-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 10:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nilai`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_siswa` int(10) UNSIGNED NOT NULL,
  `nama_siswa` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `nisn` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `nis` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `ttl` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `jk` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `agama` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `status_keluarga` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `status_anak` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `alamat_siswa` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `nomor_telp_siswa` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `sekolah_asal` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_terima` date NOT NULL,
  `nama_ayah` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `nama_ibu` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `alamat_ortu` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `nomor_telp_ortu` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `pekerjaan_ayah` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `pekerjaan_ibu` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `nama_wali` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `alamat_wali` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `nomor_telp_wali` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `pekerjaan_wali` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `foto_siswa` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `nama_siswa`, `nisn`, `nis`, `ttl`, `jk`, `agama`, `status_keluarga`, `status_anak`, `alamat_siswa`, `nomor_telp_siswa`, `sekolah_asal`, `tanggal_terima`, `nama_ayah`, `nama_ibu`, `alamat_ortu`, `nomor_telp_ortu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `nama_wali`, `alamat_wali`, `nomor_telp_wali`, `pekerjaan_wali`, `foto_siswa`, `created_at`, `updated_at`) VALUES
(1, 'Dion', '534168165198', '0100101', 'Jepara, 13 Maret 2005', 'Laki-laki', 'Kristen', 'Anak Kandung', 'anak ke-3', 'Jl. Robyong 1', '08952154314632', 'SMPN 01 Jepara', '2021-10-19', 'Selamat', 'Sani', 'Jl. Jepara', '09854967682255', 'Petani', 'Buruh', '-', '-', '-', '-', '58683-kaesang-pangarep-igkaesangp.jpg', '2021-10-19 06:20:05', '2021-10-19 06:20:05'),
(2, 'Jessica', '534168165198', '0100101', 'Semarang. 26 Juli 2005', 'Perempuan', 'Kristen', 'Anak Kandung', 'anak ke-23', 'Jl. Robyong 1', '016874998557', 'SMP Mantap mantap', '2021-10-22', 'Selamat', 'Putri', 'Jl. Sidoarjo', '09854967682255', 'Wirausaha', 'Ibu Rumah Tangga', '-', '-', '-', '-', 'lisa.jpg', '2021-10-21 20:44:25', '2021-10-21 20:44:25'),
(3, 'Micky', '20258845', '101105', 'Semarang. 26 Juli 2005', 'Perempuan', 'Katolik', 'Anak Kandung', 'anak ke-3', 'Jl. Robyong 1', '016874998557', 'SMPN 01 Jepara', '2021-10-22', 'Pardi', 'Nitra', 'Jl. Jepara No. 23', '09854967682255', 'Petani', 'Ibu Rumah Tangga', '-', '-', '-', '-', '58683-kaesang-pangarep-igkaesangp.jpg', '2021-10-22 06:31:22', '2021-10-22 06:31:22'),
(4, 'Louis', '035451321', '231531251', 'Semarang. 26 Juli 2005', 'Perempuan', 'Kristen', 'Anak Kandung', 'anak ke-23', 'Jl. Robyong 1', '016874998557', 'SMP Mantap mantap', '2021-10-26', 'Tejo', 'Putri', 'Jl. Jepara', '09854967682255', 'Wirausaha', 'Ibu Rumah Tangga', '-', '-', '-', '-', 'lisa.jpg', '2021-10-25 19:38:21', '2021-10-25 19:38:21'),
(5, 'Apsael', '658446138', '35648946514', 'Siborong-borong, 23 Maret 2004', 'Laki-Laki', 'Kristen', 'Anak Kandung', 'anak ke-3', 'Jl. Robyong 1', '08952154314632', 'SMP Mantap mantap banget', '2021-10-27', 'Pardi', 'Putri', 'Jl. Borong No. 23', '09854967682255', 'Pejabat', 'Buruh', '-', '-', '-', '-', '58683-kaesang-pangarep-igkaesangp.jpg', '2021-10-26 20:40:40', '2021-10-26 20:40:40'),
(6, 'Irfan', '3518436541', '65487461631', 'Medan, 23 April 2003', 'Laki-Laki', 'Katolik', 'Anak Kandung', 'anak ke-23', 'Jl. Robyong', '08952154314632', 'SMP Mantap mantap', '2021-10-27', 'Selamat', 'Sani', 'Jl. Borong No. 23', '0125554642522', 'Wirausaha', 'Ibu Rumah Tangga', '-', '-', '-', '-', '58683-kaesang-pangarep-igkaesangp.jpg', '2021-10-26 20:45:28', '2021-10-26 20:45:28'),
(7, 'Wulan', '534168165198', '35648946514', 'Jepara, 13 Maret 2005', 'Perempuan', 'Kristen', 'Anak Kandung', 'anak ke-23', 'Jl. Robyong', '08952154314632', 'SMPN 01 Jepara', '2021-10-28', 'Tejo', 'Sani', 'Jl. Jepara', '09854967682255', 'Petani', 'Buruh', '-', '-', '-', '-', 'lisa.jpg', '2021-10-27 18:18:20', '2021-10-27 18:18:20'),
(8, 'Fara', '20258845', '0100101', 'Semarang. 26 Juli 2005', 'Perempuan', 'Kristen', 'Anak Kandung', 'anak ke-23', 'Jl. Robyong 1', '016874998557', 'SMPN 01 Jepara', '2021-10-28', 'Pardi', 'Putri', 'Jl. Borong No. 23', '0125554642522', 'Petani', 'Ibu Rumah Tangga', '-', '-', '-', '-', 'lisa.jpg', '2021-10-27 18:24:12', '2021-10-27 18:24:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(10) UNSIGNED NOT NULL,
  `nip` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `nama_guru` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `jk_guru` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `ttl_guru` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `telp_guru` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `alamat_guru` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `foto_guru` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `mapel` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `kelas` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `kelas_bimbingan` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama_guru`, `email`, `jk_guru`, `ttl_guru`, `telp_guru`, `alamat_guru`, `foto_guru`, `mapel`, `kelas`, `status`, `kelas_bimbingan`, `created_at`, `updated_at`) VALUES
(1, '8888888', 'Pandu', 'pandu@gmail.com', 'Laki-laki', 'Ambarawa, 23 November 2003', '018464131646', 'Jl Robyong', '58683-kaesang-pangarep-igkaesangp.jpg', 'PKN', 'XI', 'Guru Biasa', '-', '2021-10-19 06:20:37', '2021-10-19 06:20:37'),
(2, '77777777', 'Delila', 'delila@gmail.com', 'Perempuan', 'Demak, 34 Mei 2004', '018464131646', 'Jl Robyong', 'lisa.jpg', 'Agama Kristen', 'XII', 'Wali Kelas', 'XII RPL', '2021-10-22 06:55:30', '2021-10-22 06:55:30'),
(3, '51646121', 'Guru', 'guru@role.test', 'Perempuan', 'Semarang, 25 Maret 1998', '089548846659', 'Jl. Robyong No. 23', 'lisa.jpg', 'Matematika', 'XII', 'Guru Biasa', '-', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_nilai`
--

CREATE TABLE `jenis_nilai` (
  `id_jenis_nilai` bigint(20) UNSIGNED NOT NULL,
  `jenis_nilai` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jenis_nilai`
--

INSERT INTO `jenis_nilai` (`id_jenis_nilai`, `jenis_nilai`, `created_at`, `updated_at`) VALUES
(1, 'Penilaian Harian', NULL, NULL),
(2, 'Tugas Harian', NULL, NULL),
(3, 'Penilaian Tengah Semester', NULL, NULL),
(4, 'Penilaian Akhir Semester', NULL, NULL),
(5, 'Remedial', NULL, NULL),
(6, 'Keterampilan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama`, `alias`, `created_at`, `updated_at`) VALUES
('1', 'RPL', 'Rekayasa Perangkat Lunak ', NULL, NULL),
('2', 'BKP', 'Bisnis Kontruksi dan Properti', NULL, NULL),
('3', 'TKRO', 'Teknik Kendaraan Ringan Otomotif', NULL, NULL),
('4', 'TB', 'Tata Boga', NULL, NULL),
('5', 'MM', 'Multimedia', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `kelas` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`, `created_at`, `updated_at`) VALUES
('1', 'X', NULL, NULL),
('2', 'XI', NULL, NULL),
('3', 'XII', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(10) UNSIGNED NOT NULL,
  `nama_mapel` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_mapel` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `jurusan` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `jenis_mapel`, `jurusan`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', 'Normatif', 'Umum', '2021-10-19 06:21:32', '2021-10-19 06:21:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_10_13_100312_create_jurusan_table', 1),
(5, '2021_10_13_100754_create_kelas_table', 1),
(6, '2021_10_13_100917_create_permission_tables', 1),
(7, '2021_10_13_101010_create_data_siswa_table', 1),
(8, '2021_10_13_101043_create_mapel_table', 1),
(9, '2021_10_13_101100_create_tahun_ajaran_table', 1),
(10, '2021_10_13_101124_create_semester_table', 1),
(11, '2021_10_13_101147_create_data_guru_table', 1),
(12, '2021_10_13_101224_create_penilaian_harian_table', 1),
(13, '2021_10_13_122217_create_tabel_tugas', 1),
(14, '2021_10_13_122401_create_tabel_keterampilan', 1),
(15, '2021_10_13_123337_create_tabel_remidial', 1),
(16, '2021_10_14_040355_create_table_student', 1),
(17, '2021_10_25_031821_create_tabel_nilai', 2),
(18, '2021_10_25_040704_create_tabel_jenis_nilai', 2),
(19, '2021_10_25_040927_create_tabel_penilaian', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(1, 'App\\User', 9),
(1, 'App\\User', 10),
(1, 'App\\User', 11),
(1, 'App\\User', 12),
(1, 'App\\User', 13),
(2, 'App\\User', 2),
(2, 'App\\User', 19),
(3, 'App\\User', 3),
(3, 'App\\User', 16),
(3, 'App\\User', 18),
(3, 'App\\User', 20),
(3, 'App\\User', 21),
(3, 'App\\User', 22),
(3, 'App\\User', 23),
(3, 'App\\User', 24);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` bigint(20) UNSIGNED NOT NULL,
  `nama_penilaian` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kelas` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `jurusan` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_penilaian` date NOT NULL,
  `jenis_nilai` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `tipe_nilai` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `mapel` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `nama_penilaian`, `kelas`, `jurusan`, `tgl_penilaian`, `jenis_nilai`, `tipe_nilai`, `email`, `mapel`, `created_at`, `updated_at`) VALUES
(1, 'Tugas Limit Fungsi', 'XII', 'RPL', '2021-10-26', 'Tugas Harian', 'Pengetahuan', 'guru@role.test', 'Matematika', NULL, NULL),
(2, 'Tugas PJJ 15', 'XII', 'RPL', '2021-10-26', 'Tugas Harian', 'Pengetahuan', 'guru@role.test', 'Agama Kristen', NULL, NULL),
(3, 'Penilaian Harian 2', 'XII', 'MM', '2021-10-28', 'Penilaian Harian', 'Pengetahuan', 'delila@gmail.com', 'Agama Kristen', NULL, '2021-10-26 02:40:45'),
(4, 'Tugas Multikulturalisme 1', 'XI', 'TKRO', '2021-10-26', 'Tugas Harian', 'Pengetahuan', 'delila@gmail.com', 'Agama Kristen', NULL, NULL),
(5, 'Tugas Multikulturalisme 2', 'XI', 'TKRO', '2021-11-02', 'Tugas Harian', 'Pengetahuan', 'delila@gmail.com', 'Agama Kristen', NULL, NULL),
(8, 'Penilaian Harian 2', 'XII', 'RPL', '2021-10-30', 'Penilaian Harian', 'Pengetahuan', 'guru@role.test', 'Matematika', NULL, NULL),
(9, 'Penilaian Harian 2', 'XII', 'RPL', '2021-10-30', 'Remedial', 'Pengetahuan', 'guru@role.test', 'Matematika', NULL, NULL),
(10, 'Keterampilan Limit Fungsi', 'XII', 'RPL', '2021-10-29', 'Keterampilan', 'Keterampilan', 'guru@role.test', 'Matematika', NULL, NULL),
(11, 'PTS Ganjil', 'XII', 'RPL', '2021-10-29', 'Penilaian Tengah Semester', 'Pengetahuan', 'guru@role.test', 'Matematika', NULL, NULL),
(12, 'PAS Ganjil', 'XII', 'RPL', '2021-10-30', 'Penilaian Akhir Semester', 'Pengetahuan', 'guru@role.test', 'Matematika', NULL, NULL),
(13, 'Tugas Limit Fungsi 2', 'XII', 'RPL', '2021-11-02', 'Tugas Harian', 'Pengetahuan', 'guru@role.test', 'Matematika', NULL, NULL),
(14, 'Tugas Ketiga', 'XII', 'RPL', '2021-11-04', 'Tugas Harian', 'Pengetahuan', 'guru@role.test', 'Matematika', NULL, NULL),
(15, 'Penilaian Harian 3', 'XII', 'RPL', '2021-11-11', 'Penilaian Harian', 'Pengetahuan', 'guru@role.test', 'Matematika', NULL, NULL),
(16, 'Penilaian Harian 3', 'XII', 'RPL', '2021-11-11', 'Remedial', 'Pengetahuan', 'guru@role.test', 'Matematika', NULL, NULL),
(17, 'Penilaian Harian 4', 'XII', 'RPL', '2021-11-04', 'Penilaian Harian', 'Pengetahuan', 'guru@role.test', 'Matematika', NULL, NULL),
(18, 'Penilaian Harian 4', 'XII', 'RPL', '2021-11-04', 'Remedial', 'Pengetahuan', 'guru@role.test', 'Matematika', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-10-19 06:15:26', '2021-10-19 06:15:26'),
(2, 'guru', 'web', '2021-10-19 06:15:26', '2021-10-19 06:15:26'),
(3, 'siswa', 'web', '2021-10-19 06:15:26', '2021-10-19 06:15:26');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(191) NOT NULL,
  `semester` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id_semester`, `semester`, `created_at`, `updated_at`) VALUES
(1, 'Ganjil', '2021-10-19 06:40:35', '2021-10-19 06:40:53'),
(2, 'Genap', '2021-10-19 06:40:59', '2021-10-19 06:40:59');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `nama_siswa` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `id_kelas` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `id_jurusan` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `id_semester` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `id_tahun` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`nama_siswa`, `id_kelas`, `id_jurusan`, `id_semester`, `id_tahun`, `email`, `created_at`, `updated_at`) VALUES
('Micky', '1', '1', '1', '1', 'micky@gmail.com', NULL, NULL),
('Louis', '2', '1', '1', '1', 'louis@gmail.com', NULL, NULL),
('Apsael', '3', '1', '1', '1', 'sael@gmail.com', NULL, NULL),
('Irfan', '3', '1', '1', '1', 'irfan@gmail.com', NULL, NULL),
('Wulan', '2', '1', '1', '1', 'wulan@gmail.com', NULL, NULL),
('Fara', '2', '1', '1', '1', 'fara@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_nilai`
--

CREATE TABLE `tabel_nilai` (
  `id_nilai` int(191) NOT NULL,
  `id_penilaian` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `besar_nilai` int(11) NOT NULL,
  `ket_nilai` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `id_guru` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tabel_nilai`
--

INSERT INTO `tabel_nilai` (`id_nilai`, `id_penilaian`, `id_siswa`, `besar_nilai`, `ket_nilai`, `id_guru`, `created_at`, `updated_at`) VALUES
(37, 1, 5, 78, 'Tuntas', 3, NULL, '2021-10-27 19:28:02'),
(38, 1, 6, 87, 'Tuntas', 3, NULL, '2021-10-27 19:28:02'),
(39, 2, 5, 98, 'Tuntas', 3, NULL, NULL),
(40, 2, 6, 90, 'Tuntas', 3, NULL, NULL),
(41, 8, 5, 68, 'Tidak Tuntas', 3, NULL, NULL),
(42, 8, 6, 82, 'Tuntas', 3, NULL, NULL),
(44, 9, 5, 75, 'KKM', 3, NULL, NULL),
(45, 9, 6, 82, 'Sudah Tuntas', 3, NULL, NULL),
(46, 10, 5, 90, 'Bagus', 3, NULL, NULL),
(47, 10, 6, 90, 'Bagus', 3, NULL, NULL),
(48, 11, 5, 88, 'Tuntas', 3, NULL, NULL),
(49, 11, 6, 86, 'Tuntas', 3, NULL, NULL),
(50, 12, 5, 90, 'Tuntas', 3, NULL, NULL),
(51, 12, 6, 84, 'Tuntas', 3, NULL, NULL),
(52, 14, 5, 68, 'Tidak Tuntas', 3, NULL, NULL),
(53, 14, 6, 89, 'Tuntas', 3, NULL, NULL),
(54, 15, 5, 85, 'Tuntas', 3, NULL, NULL),
(55, 15, 6, 75, 'KKM', 3, NULL, NULL),
(56, 16, 5, 85, 'Tuntas', 3, NULL, NULL),
(57, 16, 6, 75, 'KKM', 3, NULL, NULL),
(58, 17, 5, 65, 'Tidak Tuntas', 3, NULL, NULL),
(59, 17, 6, 77, 'Tuntas', 3, NULL, NULL),
(60, 18, 5, 0, '-', 3, NULL, NULL),
(61, 18, 6, 0, '-', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahun` int(10) UNSIGNED NOT NULL,
  `tahun_ajaran` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahun`, `tahun_ajaran`, `created_at`, `updated_at`) VALUES
(1, '20/21', '2021-10-19 06:19:05', '2021-10-19 06:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@role.test', NULL, '$2y$10$RE8sQBt0/2g6cA87cDLIiuxs1gTwJer4fO5IkD2rUSf.hQ5T8qGwe', NULL, '2021-10-19 06:15:26', '2021-10-19 06:15:26'),
(2, 'Guru', 'guru@role.test', NULL, '$2y$10$eIQRpSY8LkEZ.vasVWCiO.SVfblq/rRz1/YOYzJjWJhdG0tH6AuNW', NULL, '2021-10-19 06:15:26', '2021-10-19 06:15:26'),
(3, 'Siswa', 'siswa@role.test', NULL, '$2y$10$Stus2hqMZ1EaZt6U6LBFweRmsBHjrOYEMg33x4iXeB2fM3kV/3Ry6', NULL, '2021-10-19 06:15:27', '2021-10-19 06:15:27'),
(9, 'Ega', 'kharisega17@gmail.com', NULL, '$2y$10$xoeAqyaOwSoTjHn7JXET2.sjM98Z0NfXw.FL5eSF0SRJL6rZBiCNm', NULL, '2021-10-21 05:16:25', '2021-10-21 05:16:25'),
(10, 'Frans', 'frans@gmail.com', NULL, '$2y$10$vrb2WDVphgPEZ6eQaAoavO.beQgTNuI4sXnRm8TIfWbMvFdebAmGu', NULL, '2021-10-21 05:34:34', '2021-10-21 05:34:34'),
(11, 'Ivana', 'ivana@gmail.com', NULL, '$2y$10$E9ekvBvsAZHgDQqEr8dgm.EUmSzS0bjDX/xOLSQ1Rc5wG84auR4Pu', NULL, '2021-10-21 05:40:51', '2021-10-21 05:40:51'),
(12, 'Pandu', 'pandu@gmail.com', NULL, '$2y$10$PZqv0bnyA8koQz5kYzszAuX92dPO29svOBDQKSsdmr7Hs8isZecre', NULL, '2021-10-21 05:42:09', '2021-10-21 05:42:09'),
(13, 'Rafa', 'rafa@gmail.com', NULL, '$2y$10$y3//vrLdoQInx5i2JmIWsuGmC4GQX2utmSqaUMYS/dl1e8isOJ0gK', NULL, '2021-10-21 05:48:56', '2021-10-21 05:48:56'),
(16, 'Jessica', 'jessica@gmail.com', NULL, '$2y$10$XR8CYtMCHIcXV8Oj4aLZqO19iqlZxRxr9imQlP48/9D0tY34kgGp.', NULL, '2021-10-21 20:44:25', '2021-10-21 20:44:25'),
(18, 'Micky', 'micky@gmail.com', NULL, '$2y$10$syTwwWKHgPC3COKnzJ8EUucA7JPzg7bbxr6Mw3dq9HKFQ7RPumGe2', NULL, '2021-10-22 06:31:22', '2021-10-22 06:31:22'),
(19, 'Delila', 'delila@gmail.com', NULL, '$2y$10$QEBZ7vjUOHB3WrNsIZOScecJylgpbAI/COLp8.X3ZMY9rGPVhUPr6', NULL, '2021-10-22 06:55:30', '2021-10-22 06:55:30'),
(20, 'Louis', 'louis@gmail.com', NULL, '$2y$10$yNOpu8kFwQlDrQdUgO8uDueZZdpLuyTGTYg.LUo5QNKOWxkGwTJoC', NULL, '2021-10-25 19:38:21', '2021-10-25 19:38:21'),
(21, 'Apsael', 'sael@gmail.com', NULL, '$2y$10$qd84n6/sCR50MOebH3zZce.UkBjkFXAgof1jNqSpITSeNGHhdNe2q', NULL, '2021-10-26 20:40:40', '2021-10-26 20:40:40'),
(22, 'Irfan', 'irfan@gmail.com', NULL, '$2y$10$s5FALp95D9gmSoo185RAIuQ6b/UcNRXYWLcct1pyeChRjSLsYnONi', NULL, '2021-10-26 20:45:28', '2021-10-26 20:45:28'),
(23, 'Wulan', 'wulan@gmail.com', NULL, '$2y$10$ZIVCYcHSxzScKl.LhBAUU.aKBunhTc794vcoBb7cXh1aOgCf2Gtvy', NULL, '2021-10-27 18:18:19', '2021-10-27 18:18:19'),
(24, 'Fara', 'fara@gmail.com', NULL, '$2y$10$SpbD16Qxq3OU8uTZUPUMyuetno0RPtJ6RWcpdESIBACdwWzdaDj8S', NULL, '2021-10-27 18:24:12', '2021-10-27 18:24:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jenis_nilai`
--
ALTER TABLE `jenis_nilai`
  ADD PRIMARY KEY (`id_jenis_nilai`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_nilai`
--
ALTER TABLE `jenis_nilai`
  MODIFY `id_jenis_nilai` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  MODIFY `id_nilai` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahun` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
