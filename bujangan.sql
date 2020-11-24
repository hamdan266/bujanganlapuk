-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 09:18 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bujangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis_berita` varchar(20) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `slug_berita` varchar(255) NOT NULL,
  `keywords` text DEFAULT NULL,
  `status_berita` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `judul_gambar` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_produk`, `judul_gambar`, `gambar`, `tanggal_update`) VALUES
(6, 2, 'AUGVAPE-Druga-Foxy-Black-Blue-Resin', 'AUGVAPE-Druga-Foxy-Black-Blue-Resin.jpg', '2020-10-26 09:23:39'),
(7, 2, 'AUGVAPE-Druga-Foxy-Mod-Black-Red-Resin', 'AUGVAPE-Druga-Foxy-Mod-Black-Red-Resin.jpg', '2020-10-26 09:23:56'),
(8, 4, 'Black 1', 'md_5f3f131042023.jpg', '2020-10-26 09:25:52'),
(9, 4, 'the willbest', 'md_5f3f130f5b1d2.jpg', '2020-10-26 09:26:13'),
(10, 8, 'tttt', 'Geekvape-Aegis-Hero-Pod-Mod-Kit-45W-1200mAh-Gun-Metal.png', '2020-10-27 16:52:34'),
(11, 5, 'Artha', 'advken_artha_v2_24mm_rda_-_package_contents.jpg', '2020-10-30 10:50:43'),
(12, 10, 'instagram', '2.png', '2020-10-30 11:01:47'),
(13, 8, 'back_geek', 'Geekvape-Aegis-Hero-Pod-Mod-Kit-45W-1200mAh-Detail.png', '2020-10-30 19:35:08'),
(14, 8, 'red', 'Geekvape-Aegis-Hero-Pod-Mod-Kit-45W-1200mAh-Red.png', '2020-10-30 19:35:20'),
(15, 8, 'redblack', 'GEEKVAPE-Aegis-Hero-Pod-Mod-Kit-45W-1200mAh.jpg', '2020-10-30 19:35:40'),
(16, 8, 'rainbow', 'Geekvape-Aegis-Hero-Pod-Mod-Kit-45W-1200mAh-Rainbow.png', '2020-10-30 19:35:58'),
(17, 11, 'black', 'SMOANT-Pasito-Pod-Kit-Black.jpg', '2020-10-30 19:39:48'),
(18, 11, 'blue', 'SMOANT-Pasito-Pod-Kit.jpg', '2020-10-30 19:39:59'),
(19, 11, 'gun', 'SMOANT-Pasito-Pod-Kit-Gun-Metal.jpg', '2020-10-30 19:40:12'),
(21, 12, 'Blue', '11468591_f9a567d5-814f-46dd-be74-603cfe388b54_2006_2006.jpg', '2020-11-01 02:56:15'),
(22, 12, 'red', '11468591_c6519736-8cd4-45ea-9d93-47b87c970efa_1920_1920.jpg', '2020-11-01 02:56:32'),
(23, 16, 'fynku', '16100563_aff04d36-934e-41ce-847e-d042bb30048a_1080_712.jpeg', '2020-11-01 03:13:28'),
(24, 16, 'aa', '16100563_7291f085-b6e8-46d5-8f40-77effae95a34_1080_875.jpeg', '2020-11-01 03:13:39'),
(25, 16, 'funkyyy', '16100563_8f9d9cef-ff72-4e3a-9ea5-1f8b9585491c_1080_829.jpeg', '2020-11-01 03:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `header_transaksi`
--

CREATE TABLE `header_transaksi` (
  `id_header_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `jumlah_bayar` int(11) DEFAULT NULL,
  `rekening_pembayaran` varchar(255) DEFAULT NULL,
  `rekening_pelanggan` varchar(255) DEFAULT NULL,
  `bukti_bayar` varchar(255) DEFAULT NULL,
  `id_rekening` int(11) DEFAULT NULL,
  `tanggal_bayar` varchar(255) DEFAULT NULL,
  `nama_bank` varchar(255) DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header_transaksi`
--

INSERT INTO `header_transaksi` (`id_header_transaksi`, `id_user`, `id_pelanggan`, `nama_pelanggan`, `email`, `telepon`, `alamat`, `kode_transaksi`, `tanggal_transaksi`, `jumlah_transaksi`, `status_bayar`, `jumlah_bayar`, `rekening_pembayaran`, `rekening_pelanggan`, `bukti_bayar`, `id_rekening`, `tanggal_bayar`, `nama_bank`, `tanggal_post`, `tanggal_update`) VALUES
(1, 0, 1, 'Hamdan Junaedi', 'sehahh26@gmail.com', '089656351051', 'cigindewah', '01112020YJ0NCUV9', '2020-11-01 00:00:00', 170000, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-01 20:12:54', '2020-11-01 19:12:54'),
(2, 0, 1, 'Hamdan Junaedi', 'sehahh26@gmail.com', '089656351051', 'cigindewah', '011120206083VOYY', '2020-11-01 00:00:00', 3370000, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-01 20:20:57', '2020-11-01 19:20:57'),
(3, 0, 1, 'Hamdan Junaedi', 'sehahh26@gmail.com', '089656351051', 'cigindewah', '02112020RWZXILJQ', '2020-11-02 00:00:00', 150000, 'konfirmasi', 150000, '121212121091', 'Sugiarti', 'TWIBBON_HIMASI.png', 1, '04-11-2020', 'Bank Central Asia (BCA)', '2020-11-02 19:35:31', '2020-11-04 02:05:29'),
(4, 0, 1, 'Hamdan Junaedi', 'sehahh26@gmail.com', '089656351051', 'Jalan cigondewah RT.01/01', '04112020CHEAT2GI', '2020-11-04 00:00:00', 350000, 'konfirmasi', 350000, '12901210921', 'Begu silalahi', 'google-meet.png', 1, '04-11-2020', 'Bank Mandiri', '2020-11-04 19:51:05', '2020-11-04 18:52:26'),
(5, 0, 3, 'Hamdan Junaedi', 'hamdan@gmail.com', '089656351051', 'jalan sadang rahayu', '23112020EJ2F4ANO', '2020-11-23 00:00:00', 350000, 'konfirmasi', 350000, '121212121091', 'hamdannn junaedi', 'bukti_bayar.jpg', 2, '24-11-2020', 'Bank Central Asia (BCA)', '2020-11-23 12:43:22', '2020-11-24 06:40:12');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `slug_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `slug_kategori`, `nama_kategori`, `urutan`, `tanggal_update`) VALUES
(1, 'mod', 'Mod', 1, '2020-11-01 02:31:07'),
(5, 'atomizer', 'Atomizer', 2, '2020-10-30 10:38:22'),
(6, 'liquid', 'Liquid', 3, '2020-10-30 10:38:27'),
(7, 'pod', 'Pod', 4, '2020-11-01 02:31:57'),
(8, 'toolkit', 'Toolkit', 5, '2020-10-30 10:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `namaweb` varchar(255) NOT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `metatext` text DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `rekening_pembayaran` varchar(255) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `namaweb`, `tagline`, `email`, `website`, `keywords`, `metatext`, `telepon`, `alamat`, `facebook`, `instagram`, `deskripsi`, `logo`, `icon`, `rekening_pembayaran`, `tanggal_update`) VALUES
(1, 'Bujangan Lapuk VapeStore', 'Gak Ngebuls, Gak Asix....', 'sehahh26@gmail.com', 'https://bujanganlapuk.com', 'bujangan', 'bujangan', '089656351051', 'Jalan Cigondewah No.01', 'https://facebook.com/bujanganlapuk', 'https://instagram.com/bujanganlapuk_vapestore/', 'Menjual vape bosssss', 'blpp33.png', 'va.png', '71320192312391', '2020-11-03 07:52:46');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_pelanggan` varchar(20) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `tanggal_daftar` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `id_user`, `status_pelanggan`, `nama_pelanggan`, `email`, `password`, `telepon`, `alamat`, `tanggal_daftar`, `tanggal_update`) VALUES
(1, 0, 'Pending', 'Hamdan Junaedi', 'sehahh26@gmail.com', '7912a9f0370e6643577505e247ae90dc1395b236', '089656351051', 'Jalan cigondewah', '2020-11-01 19:44:48', '2020-11-03 08:27:19'),
(2, 0, 'Pending', 'Begu Al zondana', 'coba12@gmail.com', 'ce9224427bf7af722d294336463c56ec6491d072', '089656351051', 'hala', '2020-11-14 08:17:48', '2020-11-14 07:17:48'),
(3, 0, 'Pending', 'Hamdan Junaedi', 'hamdan@gmail.com', 'ce9224427bf7af722d294336463c56ec6491d072', '089656351051', 'jalan sadang rahayu', '2020-11-23 12:42:03', '2020-11-23 11:42:03');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `slug_produk` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `keywords` text DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `berat` float DEFAULT NULL,
  `ukuran` varchar(255) DEFAULT NULL,
  `status_produk` varchar(20) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_user`, `id_kategori`, `kode_produk`, `nama_produk`, `slug_produk`, `keterangan`, `keywords`, `harga`, `stok`, `gambar`, `berat`, `ukuran`, `status_produk`, `tanggal_post`, `tanggal_update`) VALUES
(2, 1, 1, 'Mod0001', 'AUGVAPE Druga Foxy Mod', 'augvape-druga-foxy-mod-mod0001', '<p>Ini keterang produk&nbsp;</p>\r\n', 'druga', 750000, 10, 'AUGVAPE-Druga-Foxy-Mod.jpg', 1, '100x50', 'Publish', '2020-10-25 16:52:20', '2020-10-26 09:22:52'),
(4, 1, 1, 'Mod0002', 'Authentic Rincoe Manto Beast VV MOD', 'authentic-rincoe-manto-beast-vv-mod-mod0002', '<p>Authentic Rincoe Manto Beast VV MOD</p>\r\n', 'Rincoe', 450000, 10, 'md_5f3f131040060.jpg', 1, '100x50', 'Publish', '2020-10-26 10:25:21', '2020-10-26 09:25:21'),
(5, 1, 5, 'RDA0001', 'ADVKEN ARTHA V2 24MM RDA', 'advken-artha-v2-24mm-rda-rda0001', '<p>ADVKEN ARTHA V2 24MM RDA</p>\r\n', 'Artha v2', 400000, 100, 'advken_artha_v2_24mm_rda_-_top_cap_and_510_connection.jpg', 100, '4mm', 'Publish', '2020-10-26 10:41:18', '2020-10-26 09:41:18'),
(6, 1, 5, 'RDA0002', 'HELLVAPE DEAD RABBIT V2 24MM RDA', 'hellvape-dead-rabbit-v2-24mm-rda-rda0002', '<p>HELLVAPE DEAD RABBIT V2 24MM RDA</p>\r\n', 'dead rabbit', 380000, 100, 'hellvape_dead_rabbit_v2_24mm_rda_-_full_matte_black.jpg', 1, '4mm', 'Publish', '2020-10-26 10:42:34', '2020-10-26 09:42:34'),
(7, 1, 5, 'RDA0003', 'VAPERZ CLOUD VALHALLA V2 40MM RDA', 'vaperz-cloud-valhalla-v2-40mm-rda-rda0003', '<p><strong>VAPERZ CLOUD VALHALLA V2 40MM RDA</strong></p>\r\n', 'VAPERZ CLOUD', 400000, 100, 'vaperz_cloud_valhalla_v2_rda_-_matte_black.jpg', 1, '4mm', 'Publish', '2020-10-26 10:44:03', '2020-10-26 09:44:03'),
(8, 1, 7, 'Mod000122', 'GEEKVAPE Aegis Hero Pod Mod Kit 45W 1200mAh', 'geekvape-aegis-hero-pod-mod-kit-45w-1200mah-mod000122', '<p>asasasasas</p>\r\n', 'asas', 5000, 2, 'Geekvape-Aegis-Hero-Pod-Mod-Kit-45W-1200mAh-Silver.png', 1, '100x50', 'Publish', '2020-10-27 16:15:56', '2020-11-01 03:05:32'),
(10, 1, 1, 'CubMod', 'Cub Mod', 'cub-mod-cubmod', '<p>teing</p>\r\n', 'coba', 350000, 10, 'CUB-R57-Box-Mod-Black.jpg', 10, '10x10', 'Publish', '2020-10-30 12:01:06', '2020-11-01 02:34:21'),
(11, 1, 7, 'SMOANT Pasito ', 'SMOANT Pasito Pod Kit', 'smoant-pasito-pod-kit-smoant-pasito', '<p>SMOANT PASITO POD STARTER KIT AUTHENTIC MTL DTL RBA 1100 mAh VAPE PODS (STOK TERBATAS!!)</p>\r\n\r\n<p>HARGA PROMO HARI INI!!!</p>\r\n\r\n<p>SMOANT PASITO POD STARTER KIT 100% AUTHENTIC (SEGEL)!!</p>\r\n\r\n<p>Warna:</p>\r\n\r\n<p>- RED</p>\r\n\r\n<p>- BLACK</p>\r\n\r\n<p>- SILVER CARBON</p>\r\n\r\n<p>- GUN METAL</p>\r\n\r\n<p>- BRONZE BLUE</p>\r\n\r\n<p>- GRADIENT PURPLE</p>\r\n\r\n<p>==============</p>\r\n\r\n<p>*** NOTE ***</p>\r\n\r\n<p>- KLIK VARIAN WARNA/PAKET YG DIINGINKAN PADA SAAT PEMBELIAN, JIKA SALAH SATU WARNA/PAKET TIDAK DAPAT DI KLIK MAKA WARNA/PAKET TERSEBUT SUDAH HABIS/KOSONG.</p>\r\n\r\n<p>- TIDAK MENERIMA REQUEST WARNA/PAKET MELALUI CHAT ATAU DISKUSI (Dikarenakan byk sekali chat &amp; diskusi yg masuk jadi kita tidak mungkin melihat chat satu persatu disetiap orderan yang masuk.)</p>\r\n\r\n<p>- KESALAHAN PEMILIHAN WARNA OLEH PEMBELI, BUKAN TANGGUNG JAWAB KAMI. - Membeli dgn WARNA yg HABIS/KOSONG, akan kami kirim warna RAMDOM.</p>\r\n\r\n<p>- (PM/Diskusi dahulu utk mengetahui stok warna)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Spesifikasi Smoant Pasito Pod Kit:</p>\r\n\r\n<p>- Innovatively rebuildable pod system (RBA coil sold separately)</p>\r\n\r\n<p>- ANT chip: Constant output, Quick hit, Low voltage protection/ Short-circuit protection/ 10s Over-time protection/ Over-heating protection</p>\r\n\r\n<p>- Adjustable 5 wattage levels (10W 13W 16W 20W 25W)</p>\r\n\r\n<p>- Be made of CPR and Aluminum alloy material, no finger print and portable.</p>\r\n\r\n<p>- 3ML capacity</p>\r\n\r\n<p>- Replaceable resin drip tip</p>\r\n\r\n<p>- Easy top refilling &amp; prevent leaking</p>\r\n\r\n<p>- 1100mAh battery capacity</p>\r\n\r\n<p>- Type C quick charging</p>\r\n\r\n<p>- Top Adjustable airflow control system</p>\r\n\r\n<p>- Three types of coil heads available, MTL: 1.4ohm Ni-80 coil, DTL: 0.6ohm DTL mesh coil, RBA single coil Kelengkapan Smoant Pasito Pod Kit: 1 x Pasito mod 1 x Pasito cartridge 1 x MTL 1.4&Omega; Ni-80 coil 1 x DTL 0.6&Omega; mesh coil 1 x Type-C charging cable 1 x Coil warning card 1 x Certificate card 1 x Warranty card 1 x User manual KONDISI SEMUA MASIH TERSEGEL PLASTIK PABRIKAN!! GANTENG BUAT DIBAWA KEMANA-MANA GAN. NOTE: Minat silakan langsung di order , apabila sold lapak akan langsung di hapus. thx ** Mohon baca catatan Toko kami sebelum melakukan order ** MEMBELI = SETUJU DENGAN PERATURAN &amp; CATATAN TOKO KAMI.</p>\r\n\r\n<p>Happy Shopping!</p>\r\n\r\n<p>#SMOANT #PASITO #POD #STARTER #KIT #AUTHENTIC #MTL #DTL #RBA 1100 mAh #VAPE #PODS</p>\r\n', 'pasito', 5000, 10, 'SMOANT-Pasito-Classic-Red.jpg', 10, '24', 'Publish', '2020-10-30 12:39:52', '2020-11-01 03:05:41'),
(12, 1, 1, 'HexOhm V3', 'HexOhm V3 3.0 Authentic Anodized Vapezoo', 'hexohm-v3-30-authentic-anodized-vapezoo-hexohm-v3', '<p>hexohm description isi!</p>\r\n', 'hexohm, vapezo', 3200000, 100, 'zifau_hexohm-v3-3-0-authentic-anodized-vapezoo-craving-vapor-mod-vape_full02.jpg', 1, '100x50', 'Publish', '2020-11-01 03:45:35', '2020-11-01 02:45:35'),
(13, 1, 6, 'kilastrawberry', 'Killa Strawberry', 'killa-strawberry-kilastrawberry', '<p>Liquid rasa Strawberry&nbsp;</p>\r\n', 'strawberry', 140000, 100, 'Best_Sellers_eLiquids_and_eJuices.jpg', 60, '60ml', 'Publish', '2020-11-01 04:07:43', '2020-11-01 03:08:06'),
(14, 1, 6, 'BlindLionBySparkIndu', 'Blind Lion By Spark Industries - Nightcap', 'blind-lion-by-spark-industries-nightcap-blindlionbysparkindustrie', '<p>Blind Lion By Spark Industrie ini liquid!</p>\r\n', 'Blind Lion By Spark Industrie', 150000, 100, 'Blind_Lion_By_Spark_Industries_-_Nightcap.png', 60, '60mk', 'Publish', '2020-11-01 04:10:21', '2020-11-01 03:10:21'),
(15, 1, 6, 'StrawLemon', 'StrawLemon Delight by Signature Vape Juice', 'strawlemon-delight-by-signature-vape-juice-strawlemon', '<p>StrawLemon Delight by Signature Vape Juice.jpg</p>\r\n', 'StrawLemon', 170000, 100, 'StrawLemon_Delight_by_Signature_Vape_Juice.jpg', 100, '100ml', 'Publish', '2020-11-01 04:11:58', '2020-11-01 03:11:58'),
(16, 1, 6, 'FunkyMonkey', 'Funky Monkey', 'funky-monkey-funkymonkey', '<p>Funky Monkey</p>\r\n', 'Funky, Monkey', 150000, 100, '154100527700990_fca58c46-3d01-4c3d-b307-1a3034e286ab.jpg', 60, '60ml', 'Publish', '2020-11-01 04:13:09', '2020-11-01 03:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `nomor_rekening` varchar(20) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama_bank`, `nomor_rekening`, `nama_pemilik`, `gambar`, `tanggal_post`) VALUES
(1, 'Bank Central Asia (BCA)', '676767218211', 'Hamdan Junaedi', NULL, '2020-11-03 16:43:47'),
(2, 'Bank Central Asia (BCA)', '8987811212', 'Begu situmorang', NULL, '2020-11-03 16:44:23');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_pelanggan`, `kode_transaksi`, `id_produk`, `harga`, `jumlah`, `total_harga`, `tanggal_transaksi`, `tanggal_update`) VALUES
(1, 0, 1, '01112020YJ0NCUV9', 15, 170000, 1, 170000, '2020-11-01 00:00:00', '2020-11-01 19:12:54'),
(2, 0, 1, '011120206083VOYY', 12, 3200000, 1, 3200000, '2020-11-01 00:00:00', '2020-11-01 19:20:57'),
(3, 0, 1, '011120206083VOYY', 15, 170000, 1, 170000, '2020-11-01 00:00:00', '2020-11-01 19:20:57'),
(4, 0, 1, '02112020RWZXILJQ', 14, 150000, 1, 150000, '2020-11-02 00:00:00', '2020-11-02 18:35:31'),
(5, 0, 1, '04112020CHEAT2GI', 10, 350000, 1, 350000, '2020-11-04 00:00:00', '2020-11-04 18:51:06'),
(6, 0, 3, '23112020EJ2F4ANO', 10, 350000, 1, 350000, '2020-11-23 00:00:00', '2020-11-23 11:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `tanggal_update`) VALUES
(1, 'Hamdan Junaedi', 'sehahh26@gmail.com', 'hamdan', '7912a9f0370e6643577505e247ae90dc1395b236', 'Admin', '2020-10-25 08:43:39'),
(3, 'Beguu', 'beguu@gmail.com', 'begu12', 'cafea5e8196984debcf5ab875f8f82f906c741af', 'User', '2020-10-27 09:36:44'),
(4, 'michelin', 'michell12@gmail.com', 'jono12', '256e8946155aecdecc110a7a60df807f7c1a5302', 'Admin', '2020-10-30 10:19:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
  ADD PRIMARY KEY (`id_header_transaksi`),
  ADD UNIQUE KEY `kode_transaksi` (`kode_transaksi`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `kode_produk` (`kode_produk`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`),
  ADD UNIQUE KEY `nomor_rekening` (`nomor_rekening`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
  MODIFY `id_header_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
