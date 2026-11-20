-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2026 at 09:44 AM
-- Server version: 5.7.43-log
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profindo`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` longtext,
  `image` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `is_published` enum('YES','NO') NOT NULL DEFAULT 'NO',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `title`, `slug`, `content`, `image`, `author`, `is_published`, `published_at`, `created_at`, `updated_at`) VALUES
(2, 9, 'Pentingnya Transparansi untuk Masa Depan Berkelanjutan', 'pentingnya-transparansi-untuk-masa-depan-berkelanjutan', '<p>Dalam era globalisasi dan kesadaran lingkungan yang semakin meningkat, konsep <em>sustainability reporting</em> atau pelaporan keberlanjutan telah menjadi bagian penting dari strategi bisnis modern. Pelaporan keberlanjutan tidak hanya menunjukkan tanggung jawab perusahaan terhadap lingkungan dan masyarakat, tetapi juga membantu membangun reputasi, kepercayaan, dan keberlanjutan bisnis dalam jangka panjang.</p><h3>Apa Itu Sustainability Reporting?</h3><p><em>Sustainability reporting</em> adalah proses di mana perusahaan menyusun dan mempublikasikan informasi mengenai dampak sosial, lingkungan, dan ekonominya. Laporan ini memberikan gambaran komprehensif tentang bagaimana perusahaan beroperasi secara berkelanjutan, termasuk langkah-langkah yang diambil untuk mengurangi jejak karbon, meningkatkan kesejahteraan masyarakat, dan mendukung praktik bisnis yang etis.</p><p>Laporan keberlanjutan sering mengikuti kerangka kerja seperti <em>Global Reporting Initiative</em> (GRI), <em>Sustainability Accounting Standards Board</em> (SASB), atau bahkan <em>Integrated Reporting</em> (IR).</p><h3>Mengapa Sustainability Reporting Penting?</h3><ol><li><strong>Meningkatkan Transparansi dan Akuntabilitas</strong><br>Pelaporan keberlanjutan memaksa perusahaan untuk memantau dan mengevaluasi dampaknya terhadap lingkungan dan masyarakat. Dengan membagikan data ini kepada publik, perusahaan menunjukkan komitmennya terhadap transparansi dan akuntabilitas.</li><li><strong>Meningkatkan Kepercayaan Pemangku Kepentingan</strong><br>Konsumen, investor, dan mitra bisnis kini lebih cenderung memilih perusahaan yang memiliki tanggung jawab sosial. Pelaporan keberlanjutan dapat meningkatkan kepercayaan mereka terhadap perusahaan.</li><li><strong>Memitigasi Risiko</strong><br>Melalui pelaporan keberlanjutan, perusahaan dapat mengidentifikasi risiko lingkungan atau sosial yang mungkin mempengaruhi operasionalnya, sehingga dapat mengambil tindakan preventif.</li><li><strong>Mendorong Inovasi</strong><br>Fokus pada keberlanjutan sering kali memacu inovasi dalam hal produk, layanan, atau proses yang lebih efisien dan ramah lingkungan.</li><li><strong>Mematuhi Regulasi</strong><br>Banyak negara kini mulai memberlakukan regulasi terkait keberlanjutan, seperti pelaporan emisi karbon atau penggunaan energi terbarukan. Pelaporan ini membantu perusahaan tetap patuh pada regulasi yang berlaku.</li></ol><h3>Komponen Utama dalam Sustainability Reporting</h3><p>Laporan keberlanjutan biasanya mencakup beberapa elemen berikut:</p><ol><li><strong>Dampak Lingkungan</strong><br>Termasuk data tentang emisi gas rumah kaca, penggunaan energi, limbah, dan pengelolaan sumber daya alam.</li><li><strong>Dampak Sosial</strong><br>Meliputi kontribusi perusahaan terhadap komunitas, hak asasi manusia, kesejahteraan karyawan, dan kesetaraan gender.</li><li><strong>Dampak Ekonomi</strong><br>Menguraikan kontribusi perusahaan terhadap perekonomian lokal dan global, seperti lapangan kerja, pajak, dan investasi masyarakat.</li><li><strong>Tujuan dan Target Keberlanjutan</strong><br>Perusahaan sering menetapkan tujuan tertentu, seperti netralitas karbon pada tahun tertentu, yang menjadi panduan untuk mencapai hasil yang diinginkan.</li></ol><h3>Tantangan dalam Sustainability Reporting</h3><p>Meskipun bermanfaat, pelaporan keberlanjutan memiliki tantangan, seperti:</p><ul><li><strong>Ketersediaan Data</strong>: Mengumpulkan data yang akurat dan relevan bisa menjadi tugas yang sulit.</li><li><strong>Biaya Implementasi</strong>: Membuat laporan membutuhkan sumber daya yang tidak sedikit, baik waktu maupun biaya.</li><li><strong>Kerangka Kerja yang Beragam</strong>: Beragamnya standar pelaporan bisa membingungkan perusahaan dalam memilih mana yang harus diikuti.</li></ul><h3>Langkah-Langkah untuk Memulai Sustainability Reporting</h3><ol><li>Identifikasi dampak utama perusahaan pada lingkungan, sosial, dan ekonomi.</li><li>Pilih kerangka kerja pelaporan yang sesuai dengan visi dan kebutuhan perusahaan.</li><li>Kumpulkan data yang relevan dan pastikan akurasi.</li><li>Libatkan pemangku kepentingan untuk mendapatkan masukan.</li><li>Publikasikan laporan secara berkala dan evaluasi hasil untuk perbaikan di masa mendatang.</li></ol><h3>Kesimpulan</h3><p><em>Sustainability reporting</em> bukan hanya sekadar dokumen formalitas; ini adalah alat strategis untuk membangun bisnis yang bertanggung jawab, berkelanjutan, dan kompetitif. Dengan semakin tingginya kesadaran akan keberlanjutan, perusahaan yang berkomitmen terhadap pelaporan keberlanjutan memiliki peluang lebih besar untuk menciptakan dampak positif bagi lingkungan, masyarakat, dan ekonomi global.</p><p>Mari kita mulai perjalanan menuju masa depan yang lebih berkelanjutan!</p>', 'uploads/images/01JD682ZC60C90WGE3KZKYMPNR.png', 'Media Division', 'NO', NULL, '2024-11-21 02:32:39', '2024-12-03 14:19:49'),
(3, 14, 'Audit & Investigasi: Pengertian, Tujuan, dan Manfaatnya', 'audit-investigasi-pengertian-tujuan-dan-manfaatnya', '<h3><strong>Apa Itu Audit &amp; Investigasi?</strong></h3><p>Audit dan investigasi adalah dua aktivitas yang sering dilakukan untuk memastikan keabsahan, transparansi, dan integritas dalam suatu organisasi atau entitas. Meskipun sering disebut bersamaan, keduanya memiliki tujuan dan pendekatan yang berbeda:</p><ol><li><strong>Audit</strong><br>Audit adalah proses sistematis untuk menilai, mengevaluasi, dan memeriksa laporan keuangan, operasional, atau sistem internal organisasi. Audit biasanya dilakukan secara berkala untuk memastikan kepatuhan terhadap peraturan, kebijakan internal, dan standar akuntansi.</li><li><strong>Investigasi</strong><br>Investigasi adalah proses penyelidikan mendalam yang dilakukan untuk menemukan fakta terkait masalah tertentu, seperti dugaan kecurangan, pelanggaran hukum, atau tindakan tidak etis lainnya. Investigasi bersifat reaktif, artinya dilakukan ketika ada indikasi atau laporan atas suatu permasalahan.</li></ol><h3><strong>Tujuan Audit dan Investigasi</strong></h3><p><strong>Audit</strong></p><ul><li><strong>Meningkatkan Akuntabilitas</strong>: Memastikan semua laporan keuangan atau operasional disusun berdasarkan prinsip kejujuran dan transparansi.</li><li><strong>Menilai Kepatuhan</strong>: Mengidentifikasi apakah organisasi mematuhi peraturan perundang-undangan dan kebijakan internal.</li><li><strong>Meningkatkan Efisiensi dan Efektivitas</strong>: Memberikan rekomendasi untuk perbaikan operasional organisasi.</li></ul><p><strong>Investigasi</strong></p><ul><li><strong>Mengungkap Fakta</strong>: Menemukan bukti yang relevan terkait dugaan pelanggaran.</li><li><strong>Mencegah Kerugian</strong>: Mengidentifikasi modus atau pola kecurangan untuk mencegah kejadian serupa di masa depan.</li><li><strong>Meningkatkan Kepercayaan</strong>: Memastikan bahwa pelaku pelanggaran diberi sanksi sehingga organisasi dapat mempertahankan integritasnya.</li></ul><h3><strong>Jenis-jenis Audit dan Investigasi</strong></h3><p><strong>Audit</strong></p><ol><li><strong>Audit Keuangan</strong>: Menilai keakuratan dan keabsahan laporan keuangan organisasi.</li><li><strong>Audit Operasional</strong>: Mengevaluasi efisiensi dan efektivitas proses operasional.</li><li><strong>Audit Kepatuhan</strong>: Memastikan kepatuhan terhadap regulasi atau standar tertentu.</li><li><strong>Audit Teknologi Informasi</strong>: Menilai keamanan dan efektivitas sistem TI organisasi.</li></ol><p><strong>Investigasi</strong></p><ol><li><strong>Investigasi Kecurangan</strong>: Menelusuri kasus penyalahgunaan aset, pemalsuan dokumen, atau korupsi.</li><li><strong>Investigasi Forensik</strong>: Mengumpulkan bukti untuk keperluan hukum terkait pelanggaran tertentu.</li><li><strong>Investigasi Etika</strong>: Menyelidiki pelanggaran kode etik atau kebijakan perusahaan.</li></ol><h3><strong>Manfaat Audit dan Investigasi</strong></h3><ol><li><strong>Meningkatkan Kepercayaan Stakeholder</strong><br>Audit dan investigasi yang dilakukan dengan baik membantu meningkatkan kepercayaan pemegang saham, mitra, dan masyarakat terhadap organisasi.</li><li><strong>Mengidentifikasi Risiko</strong><br>Audit dan investigasi membantu mengungkap risiko yang berpotensi merugikan organisasi, seperti penyalahgunaan dana, konflik kepentingan, atau pelanggaran hukum.</li><li><strong>Memberikan Rekomendasi Perbaikan</strong><br>Hasil audit sering kali mencakup rekomendasi untuk meningkatkan efektivitas dan efisiensi organisasi.</li><li><strong>Menjaga Reputasi Organisasi</strong><br>Dengan mengungkap dan menangani masalah secara profesional, organisasi dapat menjaga reputasinya di mata publik.</li></ol>', 'uploads/images/01JE8DD4NBSV9P4EFK3WMBS625.jpg', 'Media Division', 'NO', NULL, '2024-11-21 02:42:04', '2024-12-04 08:43:21'),
(4, 11, 'Solusi Digital & Teknologi: Menyongsong Masa Depan yang Lebih Canggih', 'solusi-digital-teknologi-menyongsong-masa-depan-yang-lebih-canggih', '<h3><strong>Pengertian Solusi Digital &amp; Teknologi</strong></h3><p>Solusi digital merujuk pada penggunaan teknologi digital untuk memecahkan masalah atau meningkatkan efisiensi dalam berbagai aspek kehidupan atau bisnis. Teknologi, di sisi lain, adalah alat atau sistem yang dirancang untuk mempermudah tugas-tugas manusia, meningkatkan kemampuan manusia dalam memproses data, serta menciptakan inovasi dalam berbagai bidang. Dalam konteks bisnis, solusi digital adalah penerapan teknologi untuk mempermudah operasional, meningkatkan produktivitas, dan menciptakan pengalaman pelanggan yang lebih baik.</p><h3><strong>Mengapa Solusi Digital &amp; Teknologi Penting?</strong></h3><ol><li><strong>Meningkatkan Efisiensi</strong><br>Solusi digital membantu perusahaan mempercepat proses kerja, mengurangi kesalahan manusia, dan menghemat waktu. Penggunaan perangkat lunak otomatisasi dan sistem manajemen data yang terintegrasi memungkinkan bisnis bekerja lebih efisien.</li><li><strong>Meningkatkan Pengalaman Pelanggan</strong><br>Teknologi membantu menciptakan pengalaman pelanggan yang lebih baik melalui aplikasi berbasis web, aplikasi mobile, serta platform online lainnya. Ini memberi pelanggan kemudahan dalam mengakses layanan kapan saja dan di mana saja.</li><li><strong>Mempermudah Kolaborasi</strong><br>Teknologi memungkinkan tim yang tersebar di berbagai lokasi untuk berkolaborasi secara real-time. Alat komunikasi seperti email, video conference, dan aplikasi berbasis cloud memungkinkan pengelolaan proyek secara lebih efektif.</li><li><strong>Pengambilan Keputusan yang Lebih Tepat</strong><br>Teknologi Big Data dan analitik memungkinkan perusahaan untuk memproses informasi dalam jumlah besar, mengidentifikasi pola, dan mengambil keputusan yang lebih berbasis data.</li><li><strong>Menjangkau Pasar Global</strong><br>Solusi digital memungkinkan perusahaan untuk memperluas jangkauan mereka ke pasar global tanpa batasan geografis, melalui platform e-commerce, media sosial, dan strategi digital marketing lainnya.</li></ol><h3><strong>Jenis-jenis Solusi Digital yang Populer</strong></h3><p>1. <strong>Cloud Computing</strong></p><p>Cloud computing adalah penyimpanan dan pemrosesan data melalui internet, yang memungkinkan akses data dan aplikasi di mana saja. Perusahaan dapat menggunakan platform cloud untuk menyimpan file, menjalankan aplikasi, serta mengelola infrastruktur tanpa perlu memiliki server fisik.</p><p><strong>Keuntungan:</strong></p><ul><li>Biaya lebih rendah dibandingkan dengan infrastruktur tradisional.</li><li>Skalabilitas yang fleksibel.</li><li>Aksesibilitas data yang mudah dari berbagai perangkat.</li></ul><p>2. <strong>Automasi Proses Bisnis</strong></p><p>Dengan perangkat lunak otomasi, perusahaan dapat mengotomatisasi tugas rutin seperti pengolahan data, pengelolaan inventaris, dan pengiriman email. Hal ini memungkinkan pegawai untuk fokus pada tugas yang lebih strategis dan kreatif.</p><p><strong>Keuntungan:</strong></p><ul><li>Meningkatkan efisiensi dan produktivitas.</li><li>Mengurangi kesalahan manusia.</li><li>Menghemat waktu dan biaya operasional.</li></ul><p>3. <strong>Internet of Things (IoT)</strong></p><p>IoT menghubungkan perangkat fisik melalui internet untuk saling bertukar data. Misalnya, perangkat rumah pintar yang dapat dikendalikan dari jarak jauh, atau sensor dalam mesin yang memberikan data untuk analitik prediktif.</p><p><strong>Keuntungan:</strong></p><ul><li>Pengawasan real-time.</li><li>Prediksi kegagalan perangkat sebelum terjadi kerusakan.</li><li>Penghematan energi dan sumber daya.</li></ul><p>4. <strong>Kecerdasan Buatan (AI) dan Pembelajaran Mesin</strong></p><p>Kecerdasan buatan dan pembelajaran mesin memungkinkan sistem untuk belajar dari data, meningkatkan diri mereka sendiri, dan membuat keputusan cerdas. Misalnya, chatbots yang menggunakan AI untuk melayani pelanggan, atau sistem rekomendasi yang memprediksi produk yang disukai pelanggan.</p><p><strong>Keuntungan:</strong></p><ul><li>Meningkatkan pengalaman pelanggan dengan personalisasi.</li><li>Memungkinkan prediksi yang lebih akurat dalam bisnis.</li><li>Meningkatkan efisiensi operasional melalui automasi cerdas.</li></ul><p>5. <strong>Blockchain</strong></p><p>Blockchain adalah teknologi buku besar terdistribusi yang memungkinkan transaksi yang aman, transparan, dan tidak dapat diubah. Ini sangat populer dalam sektor keuangan (cryptocurrency) dan aplikasi lain yang membutuhkan verifikasi transaksi secara transparan.</p><p><strong>Keuntungan:</strong></p><ul><li>Keamanan tinggi terhadap penipuan.</li><li>Transparansi dan akuntabilitas yang lebih baik.</li><li>Mengurangi biaya transaksi dengan menghilangkan perantara.</li></ul><h3><strong>Penerapan Teknologi di Berbagai Industri</strong></h3><ol><li><strong>Industri Kesehatan</strong><br>Solusi digital di bidang kesehatan, seperti aplikasi telemedicine, rekam medis elektronik, dan teknologi wearables, memungkinkan pelayanan kesehatan lebih cepat dan lebih personal. Pasien dapat berkonsultasi dengan dokter dari jarak jauh atau memantau kondisi kesehatan mereka menggunakan perangkat yang terhubung dengan IoT.</li><li><strong>Industri Keuangan (Fintech)</strong><br>Teknologi telah mengubah cara orang bertransaksi. Solusi digital seperti mobile banking, pembayaran digital, dan cryptocurrency memungkinkan transaksi yang lebih cepat, murah, dan aman.</li><li><strong>Industri Retail dan E-commerce</strong><br>Dengan solusi digital seperti website e-commerce, aplikasi mobile, dan sistem manajemen inventaris otomatis, bisnis retail dapat menjangkau pelanggan lebih luas dan meningkatkan efisiensi operasional mereka.</li><li><strong>Industri Pendidikan (EdTech)</strong><br>Platform pembelajaran online, aplikasi kelas virtual, dan sistem manajemen pembelajaran (LMS) memungkinkan pendidikan yang lebih fleksibel dan dapat diakses oleh siapa saja, kapan saja, dan di mana saja.</li><li><strong>Industri Manufaktur</strong><br>Teknologi seperti otomatisasi pabrik, robotika, dan pemantauan kondisi mesin melalui IoT membantu meningkatkan efisiensi produksi dan mengurangi downtime dalam industri manufaktur.</li></ol><h3><strong>Tantangan dalam Penerapan Solusi Digital</strong></h3><ol><li><strong>Keamanan dan Privasi</strong><br>Dengan semakin banyaknya data yang diolah secara digital, masalah keamanan dan privasi menjadi perhatian utama. Perusahaan harus memastikan bahwa data pelanggan dan transaksi terlindungi dengan baik dari ancaman siber.</li><li><strong>Biaya Implementasi</strong><br>Meskipun solusi digital dapat menghemat biaya jangka panjang, biaya awal untuk implementasi teknologi baru sering kali tinggi. Perusahaan harus memiliki strategi untuk menangani biaya ini.</li><li><strong>Ketergantungan pada Teknologi</strong><br>Perusahaan yang mengandalkan solusi digital juga harus mengatasi potensi ketergantungan terhadap sistem atau perangkat yang mereka gunakan. Gangguan atau kegagalan teknologi bisa berdampak besar.</li><li><strong>Perubahan Budaya Organisasi</strong><br>Mengadopsi teknologi baru sering kali membutuhkan perubahan budaya dalam organisasi. Karyawan perlu dilatih untuk menggunakan teknologi baru, dan ada resistensi dari beberapa pihak terhadap perubahan ini.</li></ol><h3><strong>Kesimpulan</strong></h3><p>Solusi digital dan teknologi menawarkan banyak potensi untuk meningkatkan efisiensi, memperbaiki pengalaman pelanggan, dan mendorong inovasi dalam berbagai sektor. Namun, untuk dapat memanfaatkan teknologi dengan optimal, perusahaan harus menghadapi tantangan yang ada dengan strategi yang tepat. Dengan penerapan yang cermat dan bijaksana, teknologi dapat menjadi pendorong utama dalam menciptakan masa depan yang lebih canggih dan penuh peluang.</p><p><br></p>', 'uploads/images/01JE8DBC0SW8PRE9KXH114NFZ4.webp', 'Media Division', 'NO', NULL, '2024-11-21 02:43:09', '2024-12-04 08:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(9, 'Environment, Social, and Governance (ESG)', 'environment-social-and-governance-esg', '2024-11-20 08:55:07', '2024-12-09 11:02:14'),
(10, 'Bisnis dan Keuangan', 'bisnis-dan-keuangan', '2024-12-04 08:36:21', '2024-12-09 11:04:14'),
(11, 'Digital dan Teknologi', 'digital-dan-teknologi', '2024-12-04 08:36:32', '2024-12-09 11:04:31'),
(12, 'Hukum dan Kepatuhan', 'hukum-dan-kepatuhan', '2024-12-04 08:36:41', '2024-12-16 06:55:56'),
(13, 'Arsitek, Konstruksi dan Interior', 'arsitek-konstruksi-dan-interior', '2024-12-04 08:36:54', '2024-12-16 06:56:19'),
(14, 'Riset dan Analisis', 'riset-dan-analisis', '2024-12-04 08:37:03', '2024-12-04 08:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_11_20_064125_create_categories_table', 2),
(6, '2024_11_20_064137_create_articles_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@profindomitra.co.id', NULL, '$2y$12$UzOAhAhC1pEEgfYR2bSAMO0vv.eWZvwBf9J7NTvNHMrqgbKaiFFNG', 'squNKdh3K0FvATnuFhLe9bcbhl7yFyk1azAsL1tWJlqD16ovM4Otaul6v2Ft', '2024-11-20 06:39:51', '2024-11-20 06:39:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`),
  ADD KEY `articles_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
