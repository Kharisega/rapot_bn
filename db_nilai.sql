-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Okt 2021 pada 11.27
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

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
-- Struktur dari tabel `data_guru`
--

CREATE TABLE `data_guru` (
  `id_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapel_ampuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_ampuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_guru`
--

INSERT INTO `data_guru` (`id_guru`, `nip`, `nama_guru`, `jk_guru`, `ttl_guru`, `telp_guru`, `alamat_guru`, `foto_guru`, `mapel_ampuan`, `kelas_ampuan`, `status`, `created_at`, `updated_at`) VALUES
('1', '111222333', 'Fendhi', 'Laki-Laki', 'Semarang, 12 September 1983', '085436548512', 'Puri Anjasmoro', 'foto1.jpg', 'Matematika', 'Kelas XI', 'Walikelas XII-RPL', NULL, NULL),
('2', '112223334', 'Retno', 'Perempuan', 'Solo, 14 Oktober 1987', '087845631254', 'Ngaliyan', 'foto2.jpg', 'PPKn', 'Kelas XII', 'Guru Biasa', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
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
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `nama_siswa`, `nisn`, `nis`, `ttl`, `jk`, `agama`, `status_keluarga`, `status_anak`, `alamat_siswa`, `nomor_telp_siswa`, `sekolah_asal`, `tanggal_terima`, `nama_ayah`, `nama_ibu`, `alamat_ortu`, `nomor_telp_ortu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `nama_wali`, `alamat_wali`, `nomor_telp_wali`, `pekerjaan_wali`, `foto_siswa`, `created_at`, `updated_at`) VALUES
(1, 'Adzan', '0125469854', '', 'Batam, 18 Juni 2004', 'Laki-Laki', 'Islam', 'Anak Kandung', 'Anak ke-2', 'Perum Marina View', '087534562468', 'SMP Misi Bagi Bangsa', '0000-00-00', 'Yekieli', 'Winarsi', 'Perum Marina View', '087516549523', 'Wiraswasta', 'Tidak Bekerja', '', '', '', '', '', NULL, NULL),
(2, 'Ivanalie', '0215498652', '', 'Magelang, 10 Maret 2004', 'Perempuan', 'Kristen', 'Anak Kandung', 'Anak Ke-1', 'Botton Kopen', '087874157368', 'SMP N 4 Magelang', '0000-00-00', 'Kristianto', 'Dwi Ariyani', 'Botton Kopen', '081145677711', 'Wiraswasta', 'Tidak Bekerja', '', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(10) UNSIGNED NOT NULL,
  `nip` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `nama_guru` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama`, `alias`, `created_at`, `updated_at`) VALUES
('1', 'RPL', 'Rekayasa Perangkat Lunak ', NULL, NULL),
('2', 'BKP', 'Bisnis Kontruksi dan Properti', NULL, NULL),
('3', 'TKRO', 'Teknik Kendaraan Ringan Otomotif', NULL, NULL),
('4', 'TB', 'Tata Boga', NULL, NULL),
('5', 'MM', 'Multimedia', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `kelas` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`, `created_at`, `updated_at`) VALUES
('1', 'X', NULL, NULL),
('2', 'XI', NULL, NULL),
('3', 'XII', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
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
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `jenis_mapel`, `jurusan`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', 'Normatif', 'Umum', NULL, NULL),
(2, 'PPKn', 'Normatif', 'Umum', NULL, NULL),
(3, 'Bahasa Indonesia', 'Normatif', 'Umum', NULL, NULL),
(4, 'Bahasa Inggris', 'Normatif ', 'Umum', NULL, NULL),
(5, 'Bahasa Jawa', 'Normatif', 'Umum', NULL, NULL),
(6, 'Sejarah Indonesia', 'Normatif', 'Umum', NULL, NULL),
(7, 'PKWU', 'Normatif', 'Umum', NULL, NULL),
(8, 'Pendidikan Agama Kristen', 'Normatif', 'Umum', NULL, NULL),
(9, 'Pendidikan Agama Katolik', 'Normatif', 'Umum', NULL, NULL),
(10, 'Pendidikan Agama Islam', 'Normatif', 'Umum', NULL, NULL),
(11, 'PJOK', 'Normatif ', 'Umum', NULL, NULL),
(12, 'Seni Budaya', 'Normatif', 'Umum', NULL, NULL),
(13, 'Fisika', 'Normatif', 'Umum', NULL, NULL),
(14, 'Kimia', 'Normatif', 'Umum', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
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
(16, '2021_10_14_040355_create_table_student', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2),
(3, 'App\\User', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian_harian`
--

CREATE TABLE `penilaian_harian` (
  `id_mapel` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `id_semester` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `id_tahun_ajaran` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `nama_penilaian` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_penilaian` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
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
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-10-22 02:11:50', '2021-10-22 02:11:50'),
(2, 'guru', 'web', '2021-10-22 02:11:50', '2021-10-22 02:11:50'),
(3, 'siswa', 'web', '2021-10-22 02:11:50', '2021-10-22 02:11:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
  `id_semester` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `semester` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `student`
--

CREATE TABLE `student` (
  `id_siswa` int(11) NOT NULL,
  `id_kelas` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `id_jurusan` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_keterampilan`
--

CREATE TABLE `tabel_keterampilan` (
  `id_mapel` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `nama_keterampilan` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_keterampilan` date NOT NULL,
  `keterangan` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `id_semester` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `id_tahun_ajaran` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_remidial`
--

CREATE TABLE `tabel_remidial` (
  `id_mapel` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `nama_tugas` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_remded` date NOT NULL,
  `keterangan` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `id_semester` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `id_tahun_ajaran` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_tugas`
--

CREATE TABLE `tabel_tugas` (
  `id_mapel` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `nama_tugas` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_tugas` date NOT NULL,
  `keterangan` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `id_semester` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `id_tahun_ajaran` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahun` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `tahun_ajaran` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@role.test', NULL, '$2y$10$dxyrkqUGuRgH2psKdWbGP.JzBUq3/Nk5YxbJxV0d0Szu5.kEdRHbG', NULL, '2021-10-22 02:11:50', '2021-10-22 02:11:50'),
(2, 'Guru', 'guru@role.test', NULL, '$2y$10$YFzMI48D1GBoNTEpu23C7ey.U1xkOXnE9dtsjC7YxRzY3R9gwD5Ia', NULL, '2021-10-22 02:11:50', '2021-10-22 02:11:50'),
(3, 'Siswa', 'siswa@role.test', NULL, '$2y$10$uFqcgGFaFbjkkcD51T7UoeIf/di/PWVUYsp/GMWghgZVRNBe317.q', NULL, '2021-10-22 02:11:50', '2021-10-22 02:11:50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
