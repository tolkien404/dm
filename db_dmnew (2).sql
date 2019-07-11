-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 17, 2019 at 11:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dmnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_acara`
--

CREATE TABLE `tbl_acara` (
  `id_acara` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `id_anggota` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `akses` enum('Admin','User') NOT NULL,
  `create` datetime NOT NULL,
  `update` datetime DEFAULT NULL,
  `delete` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id_anggota`, `id_user`, `status`, `username`, `password`, `akses`, `create`, `update`, `delete`) VALUES
(2, NULL, 'Aktif', 'ica23', 'a3175a452c7a8fea80c62a198a40f6c9', 'Admin', '0000-00-00 00:00:00', '2019-04-17 23:23:33', NULL),
(3, NULL, 'Aktif', '', '89db1c841add3d2600fa6888ea368be7', 'User', '2019-06-14 13:25:42', NULL, NULL),
(4, 7, 'Aktif', 'bobbyaditya1606', '1c6675ef045345f3309bf947b0c4b3ab', 'User', '2019-06-14 17:41:22', NULL, '2019-06-16 11:12:19'),
(5, 203, 'Aktif', 'riski.agam1995', '052132d37f70c44f44a1b7d23b125f6e', 'User', '2019-06-14 21:43:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `kategori` enum('Senat','Diklat Manargasi') NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `create` datetime NOT NULL,
  `update` datetime DEFAULT NULL,
  `delete` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `tanggal`, `judul`, `deskripsi`, `kategori`, `gambar`, `create`, `update`, `delete`) VALUES
(1, '2019-04-21 20:19:35', 'faas', '', 'Senat', 'file_1555870775', '2019-04-21 20:19:35', NULL, NULL),
(12, '2019-04-21 20:41:18', 'berita titit', '', 'Senat', 'file_1555872078', '2019-04-21 20:41:18', NULL, NULL),
(13, '2019-04-21 20:57:19', 'sfdfsdf', '', 'Senat', '', '2019-04-21 20:57:19', NULL, NULL),
(14, '2019-04-21 20:57:31', 'berita titit', '', 'Senat', '', '2019-04-21 20:57:31', NULL, NULL),
(15, '2019-04-21 20:59:54', 'ewrwerwer', '', 'Senat', '', '2019-04-21 20:59:54', NULL, NULL),
(16, '2019-04-21 21:04:13', 'adsa', '', 'Senat', 'file_1555873453', '2019-04-21 21:04:13', NULL, NULL),
(17, '2019-04-21 21:04:24', 'asad', '', 'Senat', 'file_1555873464', '2019-04-21 21:04:24', NULL, NULL),
(18, '2019-04-21 21:08:30', 'fgdfgd', '', 'Senat', 'file_1555873710', '2019-04-21 21:08:30', NULL, NULL),
(19, '2019-04-21 21:10:41', 'ewrwerwer', '', 'Senat', 'file_1555873841', '2019-04-21 21:10:41', NULL, NULL),
(20, '2019-04-21 21:11:16', 'dwedwe', '', 'Senat', 'file_1555873876', '2019-04-21 21:11:16', NULL, NULL),
(21, '2019-04-21 21:13:01', 'ewrwerwer', '', 'Senat', 'file_1555873981', '2019-04-21 21:13:01', NULL, NULL),
(22, '2019-04-21 21:15:07', 'sdfds', 'dfdfd', 'Senat', 'file_1555874107', '2019-04-21 21:15:07', NULL, NULL),
(23, '2019-04-21 21:16:10', 'faada', 'sfdfds', 'Senat', 'file_1555874170', '2019-04-21 21:16:10', NULL, NULL),
(24, '2019-04-21 21:18:07', 'berita titit', 'dfdfd', 'Senat', 'file_1555874287', '2019-04-21 21:18:07', NULL, NULL),
(25, '2019-04-21 21:20:07', 'berita titit', 'werwer', 'Senat', 'file_1555874407', '2019-04-21 21:20:07', NULL, NULL),
(26, '2019-04-21 21:25:05', 'ewrwerwer', 'dasdasd', 'Senat', 'file_1555874705', '2019-04-21 21:25:05', NULL, NULL),
(27, '2019-04-21 21:26:04', 'ewrwerwer', 'qweqwe', 'Senat', 'file_1555874764', '2019-04-21 21:26:04', NULL, NULL),
(28, '2019-04-21 21:27:47', 'eqqwe', 'qweqwe', 'Senat', 'file_1555874867', '2019-04-21 21:27:47', NULL, NULL),
(29, '2019-04-21 21:29:05', 'ewrwerwer', 'asdads', 'Senat', 'file_1555874945', '2019-04-21 21:29:05', NULL, NULL),
(30, '2019-04-21 21:30:06', 'sdfsdf', 'dsdf', 'Senat', 'file_1555875006', '2019-04-21 21:30:06', NULL, NULL),
(31, '2019-04-21 21:34:53', 'daas', 'daa', 'Senat', 'file_1555875293', '2019-04-21 21:34:53', NULL, NULL),
(32, '2019-04-21 21:36:55', 'adasd', 'adsa', 'Senat', 'file_1555875415', '2019-04-21 21:36:55', NULL, NULL),
(33, '2019-04-21 21:41:45', 'sfs', 'sdff', 'Senat', 'file_1555875705', '2019-04-21 21:41:45', NULL, NULL),
(34, '2019-04-21 21:41:57', 'berita titit', 'ewfwef', 'Senat', 'file_1555875717', '2019-04-21 21:41:57', NULL, NULL),
(35, '2019-04-21 21:43:07', 'ewrwerwer', 'asdasd', 'Senat', 'file_1555875787', '2019-04-21 21:43:07', NULL, NULL),
(36, '2019-04-21 21:47:46', 'berita titit', 'adasd', 'Senat', 'file_1555876066', '2019-04-21 21:47:46', NULL, NULL),
(37, '2019-04-21 21:51:17', 'berita titit', 'dsadasd', 'Senat', 'file_1555876277', '2019-04-21 21:51:17', NULL, NULL),
(38, '2019-04-21 21:53:04', 'berita titit', 'ewrwrwe', 'Senat', 'file_1555876384', '2019-04-21 21:53:04', NULL, NULL),
(39, '2019-04-27 21:48:46', 'Telah dilaksanakan DM 24 Unbor', 'Assalamualaikum wr.wb, bagaimana kabar kalian? semoga baik baik saja :) dengan segala kesibukan aktifitasnya, tidak terasa berjalannya waktu yang telah kita lalui sebagai insan yang pernah menuntut ilmu di universitas kita tercinta UNIVERSITAS BOROBUDUR, ', 'Senat', 'file_1556394526.png', '2019-04-27 21:48:46', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galery`
--

CREATE TABLE `tbl_galery` (
  `id_galery` int(11) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kiprah`
--

CREATE TABLE `tbl_kiprah` (
  `id_kiprah` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tokoh`
--

CREATE TABLE `tbl_tokoh` (
  `id_tokoh` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 NOT NULL,
  `kelamin` enum('Pria','Wanita') CHARACTER SET latin1 NOT NULL,
  `tempat_lahir` varchar(12) CHARACTER SET latin1 NOT NULL,
  `tgl_lahir` date NOT NULL,
  `prov_domisili` varchar(17) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `status_nikah` enum('Menikah','Belum Menikah') NOT NULL,
  `angkatan` int(5) NOT NULL,
  `pend_terakhir` enum('S1','S2','S3') NOT NULL,
  `jurusan` enum('Akuntansi','Manajemen') NOT NULL,
  `peng_organisasi` varchar(225) NOT NULL,
  `peng_organisasil` varchar(320) NOT NULL,
  `tlpn` varchar(13) DEFAULT NULL,
  `email` varchar(57) NOT NULL,
  `sos_aktif` varchar(34) NOT NULL,
  `facebook` varchar(52) DEFAULT NULL,
  `instagram` varchar(51) DEFAULT NULL,
  `twitter` varchar(25) DEFAULT NULL,
  `val_kerja` varchar(26) DEFAULT NULL,
  `status_kerja` varchar(44) DEFAULT NULL,
  `tempat_kerja` varchar(59) DEFAULT NULL,
  `create` datetime NOT NULL,
  `update` datetime DEFAULT NULL,
  `delete` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `kelamin`, `tempat_lahir`, `tgl_lahir`, `prov_domisili`, `alamat`, `status_nikah`, `angkatan`, `pend_terakhir`, `jurusan`, `peng_organisasi`, `peng_organisasil`, `tlpn`, `email`, `sos_aktif`, `facebook`, `instagram`, `twitter`, `val_kerja`, `status_kerja`, `tempat_kerja`, `create`, `update`, `delete`) VALUES
(1, 'Admin Ganteng', 'Pria', 'Di tempat', '0000-00-00', 'Propinsi Domisili', 'U know la', 'Belum Menikah', 0, 'S1', 'Manajemen', 'kepo', 'kepo', '666', 'admin@admin.org', 'Facebook', 'kepo', 'kepo', 'kepo', 'Others', 'Others', 'Kepo', '0000-00-00 00:00:00', NULL, NULL),
(2, 'Jacky', 'Pria', 'Jakarta', '1984-04-28', 'Jakarta', 'Kosong', 'Belum Menikah', 10, 'S2', 'Manajemen', 'Ketua BPM FE-UB 2013/2014', '', '81299408200', 'javky.haidrah@gmail.com', 'Facebook', 'Instagram', 'zackya.aziz', '', 'Bekerja', 'PNS', 'PNS', '0000-00-00 00:00:00', NULL, NULL),
(3, 'Ricky Fedriansyah', 'Pria', 'Jakarta', '1983-11-18', 'Luar', 'Kosong', 'Belum Menikah', 12, 'S1', 'Manajemen', 'Sekretaris Umum SMFE UB', '', '8111194989', 'rfedriansyah@gmail.com', 'Facebook', 'Ricky Fedriansyah', 'RICKYFEDRIANSYAH', 'fedriansyah', 'Bekerja', 'Karyawan Swasta', '', '0000-00-00 00:00:00', NULL, NULL),
(4, 'M. Andrian S. ', 'Pria', 'Luar Jakarta', '1990-03-12', 'Jakarta', 'Kosong', 'Belum Menikah', 16, 'S1', 'Manajemen', 'Ketua Departemen Kesejahteraan SMFE UB periode 2009-2010', 'Ketua SMFE UB periode 2010-2011', '85770660920', 'muhammad.andrian12@gmail.com', 'Instagram', '', 'andrian_chaniago', '', 'Bekerja', 'Karyawan Swasta', 'Perbankan', '0000-00-00 00:00:00', NULL, NULL),
(5, 'Rizki RahmaWati', 'Wanita', 'Luar Jakarta', '1997-10-28', 'Luar', 'Jl. Langenarjan kidul no. 11 Panembahan Keraton Yogyakarta', 'Belum Menikah', 23, 'S1', 'Akuntansi', 'UKMI', '', '85643738102', 'kikirahma049@gmail.com', 'Instagram', 'kikirahma363@gmail.com', 'Kikirahma01', '', 'Others', 'Others', 'tidak', '0000-00-00 00:00:00', NULL, NULL),
(6, 'Fitri Yani', 'Wanita', 'Jakarta', '1997-02-08', 'Jakarta', 'Jalan kramat 1 , lubang buaya,  jakarta timur', 'Belum Menikah', 22, 'S1', 'Akuntansi', 'Sekretaris HMPA Stupala Universitas Borobudur', '', '89698189960', 'fitrianiajja97@gmail.com', 'Instagram', '', 'Fitryyani08', '', 'Others', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(7, 'Bobby Aditya Nugraha', 'Pria', 'Luar Jakarta', '1997-09-16', 'Other', 'Pernata Hijau Permai Blok D3 NO 12A Bekasi Utara', 'Belum Menikah', 22, 'S1', 'Manajemen', 'Senat ', '', '81218973945', 'bobbyaditya1609@gmail.com', 'Instagram', '', 'Bobbyaditya1609', '', 'Wiraswasta', 'Wiraswasta', 'JNE SURYOPRANOTO', '0000-00-00 00:00:00', NULL, NULL),
(8, 'Devi Asdiani', 'Wanita', 'Jakarta', '1987-12-30', 'Jakarta', 'Komp. Dep. Keu no c-3 duren sawit', 'Menikah', 15, 'S1', 'Manajemen', 'Smfe ub', 'HMI', '81391701235', 'devi.as30@gmail.com', 'Instagram', 'Twitter', '', 'devi_asd', 'Others', 'Others', 'Ibu rumah tangga', '0000-00-00 00:00:00', NULL, NULL),
(9, 'Hari Iwan Nurmansyah', 'Pria', 'Jakarta', '1997-04-29', 'Jakarta', 'Jln kebantenan 4 rt 07 rw 06 no 40 kel semper timur kec cilincing jakarta utara', 'Belum Menikah', 22, 'S1', 'Akuntansi', 'Anggota senat mahasiswa ekonomi universitas borobudur', 'Anggota Ikatan Mahasiswa Akuntansi Indonesia cab Jakarta', '87776711074', 'Hariiwan29@gmail.com', 'Facebook', 'Instagram', 'Hari Iwan Nurmansyah', 'Hariiwannurmansyah', 'Others', 'Others', 'tdk bekerja', '0000-00-00 00:00:00', NULL, NULL),
(10, 'Mardiana Putri', 'Wanita', 'Luar Jakarta', '1995-12-16', 'Luar', 'Ujung Harapan Rt 017 Rw 008 Bahagia, Babelan, Bekasi', 'Belum Menikah', 22, 'S1', 'Akuntansi', 'Kepala Bidang 1 Senat Mahasiswa Fakultas Ekonomi Universitas Borobudur Periode 2016-2017', '', '82298673634', 'mardiana.putri161295@gmail.com', 'Facebook', 'Mardiana Putri', 'mardianaputri_16', '', 'Others', 'Others', 'tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(11, 'Afifah Ummu Hani Al Haz', 'Wanita', 'Jakarta', '2018-04-19', 'Jakarta', 'Cawang III RT 08/ RW 011 No.40A Kelurahan Cawang Kecamatan Kramat Jati Jakarta Timur', 'Belum Menikah', 23, 'S1', 'Akuntansi', 'Pengurus Senat', 'Panitia Seminar', '83875408139', 'Afifahalhaz95@gmail.com', 'Facebook', 'Afifah Ummu Hani Alhaz', '@afifahalhaz', '@tetehtipah19', 'Others', 'Others', 'Belum Bekerja', '0000-00-00 00:00:00', NULL, NULL),
(12, 'M.DAHLAN ZAINI', 'Pria', 'Luar Jakarta', '1994-11-25', 'Jakarta', 'Jakarta timur', 'Belum Menikah', 21, 'S1', 'Manajemen', 'Departemant pendidikan senat mahasiswa ekonomi universitas borobudur', 'Ketua komusariat ekonomi HMI universitas borobudur', '87784029535', 'Dahlan.zaini25@gmail.com', 'Instagram', '', 'Dahlan.zaini25', '', 'Belum Bekerja', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(13, 'Kezya Chrisdaria Ayuningtyas A', 'Wanita', 'Jakarta', '2018-07-28', 'Jakarta', 'Perm.taman kirana surya blok C7 No.10 kab.Tangerang Kec.Solear kode pos:15730', 'Belum Menikah', 24, 'S1', 'Akuntansi', 'Mengikuti kegiatan organisasi siswa atau osis diSMA', 'mengikuti lomba teater bahtera dan mengikuti suatu organisasi seni (Tari Merak)dan grup paduan suara ', '89652865347', 'Kezyachrisdariaayuningtyas@gmail.com', 'Facebook', 'Kezya Ayuningtyas', 'Kezyachrisdariaayuningtyas', 'KezyaChrisdaria', 'Belum Bekerja', 'Others', '', '0000-00-00 00:00:00', NULL, NULL),
(14, 'Muhamad Fikar Ramadan', 'Pria', 'Jakarta', '2000-01-06', 'Jakarta', 'Jalan Kayumanis VIII RT 011 RW 08 No 26 Matraman Jakarta Timur DKI Jakarta', 'Belum Menikah', 24, 'S1', 'Manajemen', 'Karang Taruna tingkat RW', 'Karang Taruna Tingkat Kelurahan', '895376339928', 'muhamadfr12@gmail.com', 'Facebook', 'Ramadhan Fikar', 'fikarramadan', 'muh_fikar', 'Belum Bekerja', 'Others', '', '0000-00-00 00:00:00', NULL, NULL),
(15, 'Erdiyananda Fakhri hibatullah', 'Pria', 'Jakarta', '1997-10-12', 'Other', 'perumnas 3 belitung 1 bekasi timur', 'Belum Menikah', 24, 'S1', 'Manajemen', 'semangat optimis solidarity', 'perubahan harus dilakukan', '81316952489', 'congetupan@gmail.com', 'Instagram', 'erdy conge', 'maserdy', 'non account', 'Belum Bekerja', 'Others', 'tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(16, 'Gerizimo Putra Septya Pasaribu', 'Pria', 'Luar Jakarta', '1999-09-09', 'Jakarta', 'Jatibening, caman raya, taman bougenville, jl. Dahlia 2 no. 9', 'Belum Menikah', 24, 'S1', 'Manajemen', 'Menjadi pengurus musik di gereja', '', '82274627924', 'gerizimo.pasaribu@gmail.com', 'Instagram', '', 'https://www.instagram.com/gerizimo11/', '', 'Belum Bekerja', 'Others', 'tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(17, 'Chandra Wira Dhika', 'Pria', 'Luar Jakarta', '1996-01-30', 'Jakarta', 'Villa Mutiara Gading Blok E4 No.2A', 'Belum Menikah', 23, 'S1', 'Manajemen', 'Karang taruna', '', '87873971602', 'Chanwd30@gmail.com', 'Instagram', '', 'Chandwira', '', 'Belum Bekerja', 'Others', 'Tdk bekerja', '0000-00-00 00:00:00', NULL, NULL),
(18, 'Muhammad Rezawan', 'Pria', 'Jakarta', '1997-08-29', 'Jakarta', 'Jl.Basuki Gg.Sumur manggis Rt.06/06 Cilangkap Jakarta Timur', 'Belum Menikah', 24, 'S1', 'Manajemen', 'Senat Mahasiswa Fakultas Ekonomi Universitas Borobudur', '', 'O81908975897', 'rezawanm007@gmail.com', 'Facebook', 'Muhammad Rezawan', '@m.aazer', '@m.aazer', 'Others', 'Others', '', '0000-00-00 00:00:00', NULL, NULL),
(19, 'Mutiara Rizky Istiqomah Sangadji', 'Wanita', 'Jakarta', '1997-11-13', 'Jakarta', 'Jalan cawang 1', 'Belum Menikah', 23, 'S1', 'Akuntansi', 'Sekretaris umum SMFE UB 2017-2018', 'Wakil ketua bidang pembinaan anggota ILUNI DM 2017-2020', '81398857313', 'Mutyararizky@gmail.com', 'Instagram', '', 'Mutyaraarizky', '', 'Belum Bekerja', 'Others', 'Tdk bekerja', '0000-00-00 00:00:00', NULL, NULL),
(20, 'yandra  kurniawan  ', 'Pria', 'Luar Jakarta', '2018-07-06', 'Luar', 'Rao,kabupaten Pasaman, padang  sumatra  barat ', 'Belum Menikah', 24, 'S1', 'Manajemen', 'Anggota  senat ', '', '82172218245', 'yandrakurniawan68@gmail.com ', 'Facebook', 'Instagram', 'yandra kurniawan  060797', 'yandra _lubis ', 'Belum Bekerja', 'Others', 'Tidak bekerja  ', '0000-00-00 00:00:00', NULL, NULL),
(21, 'Aditya gunawan', 'Pria', 'Jakarta', '1996-01-05', 'Jakarta', '  *  ', 'Belum Menikah', 24, 'S1', 'Manajemen', '*', '', '85959662710', 'Adit.boy10@yahoo.com', 'Facebook', 'Instagram', 'Adit.boy10@yahoo.com', 'Adityagunawan574 ', 'Belum Bekerja', 'Wiraswasta', '', '0000-00-00 00:00:00', NULL, NULL),
(22, 'Akhmad Syarifuddin', 'Pria', 'Jakarta', '1978-05-27', 'Jakarta', 'Jl. Pondok Bambu Asri Timur 2 Terusan No.19. Jakarta Timur', 'Menikah', 5, 'S2', 'Akuntansi', 'Ketum Senat Mahasiswa FEUB', 'Ketua PTKP HMI Korkom Borobudur', '8161636914', 'syarifuddin.akhmad@gmail.com', 'Facebook', 'Aretha Institute', 'N/A', 'N/A', 'Bekerja', 'Karyawan Swasta', 'Abbott Indonesia', '0000-00-00 00:00:00', NULL, NULL),
(23, 'Aditya Taufan Buana', 'Pria', 'Luar Jakarta', '1996-04-23', 'Luar', 'Jalan Budi IV no 1A Rt007 RW 011 Kel Cipinang Melayu kec Makassar Jakarta timur', 'Belum Menikah', 22, 'S1', 'Manajemen', 'Kabid Pendidikan dan kebudayaan', '', '87788831101', 'Adityyabuana@gmail.com', 'Facebook', 'Baditsquid', 'Tidak punya', 'Tidak punya', 'Bekerja', 'Karyawan Swasta', 'PT RIVINDI ARTHA MANDIRI', '0000-00-00 00:00:00', NULL, NULL),
(24, 'Raihan Nur Azhar', 'Pria', 'Luar Jakarta', '1998-09-08', 'Luar', 'Jl.lori sakti,rt 04/01 no 51 kaliabang tengah, bekasi utara, kota bekasi, jawa barat, indonesia', 'Belum Menikah', 24, 'S1', 'Manajemen', 'Pmr smpn14 smkn 1 kota bekasi, basket smkn 1 kota bekasi, Member Backbox Linux Indonesia, ketua grup C# code one smkn 1 kota bekasi', 'Iluni dm fe universitas borobudur', '83827133308', '22.raihannurazhar@gmail.com', 'Facebook', 'Instagram', 'Raihan nur azhar', '@sayaraihan', 'Belum Bekerja', 'Wiraswasta', 'Mata Elang Bekasi', '0000-00-00 00:00:00', NULL, NULL),
(25, 'Rahel Leah Pantouw', 'Wanita', 'Luar Jakarta', '1997-12-23', 'Luar', 'Perum.Duta kranji', 'Menikah', 23, 'S1', 'Manajemen', 'N/A', '', '82112960955', 'Rahelleah12@gmail.com', 'Instagram', '', 'Rahelleah', '', 'Belum Bekerja', 'Others', 'Blm bekerja', '0000-00-00 00:00:00', NULL, NULL),
(26, 'MEGA AYU SUDARTO', 'Wanita', 'Luar Jakarta', '1998-06-19', 'Luar', 'Jl. Bantargebang Barat No. 156 Rt.01/00, Kel. Bantargebang Kec. Bantargebang, Bekasi 17151', 'Belum Menikah', 23, 'S1', 'Akuntansi', 'SENAT FE-UB', '', '85881015112', 'ayumega230@gmail.com', 'Facebook', '/mega.ayusud', '@megaasdr', '@megaasdr', 'Belum Bekerja', 'Others', 'Tidak Bekerja', '0000-00-00 00:00:00', NULL, NULL),
(27, 'Reny Fauziah Indriany ', 'Wanita', 'Luar Jakarta', '1993-12-29', 'Jakarta', 'Jakarta Timur ', 'Belum Menikah', 20, 'S1', 'Manajemen', 'Ketua Senat Fakultas Ekonomi', 'Himpunan Mahasiswa Islam', '85658505002', 'Renyfauziahindriany93@gmail.com', 'Facebook', 'Reny Fauziah Indriany', 'Renyfauziah', 'Renyfauziah', 'Others', 'Karyawan Swasta', '', '0000-00-00 00:00:00', NULL, NULL),
(28, 'Alfira Shofi Islamiah', 'Wanita', 'Luar Jakarta', '1999-01-12', 'Luar', 'Pegantungan Baru, Cilegon', 'Belum Menikah', 24, 'S1', 'Akuntansi', 'Menjadi bendahara di eskul KIR (Karya Ilmiah Remaja) dan Civics Club saat SMA', '', '81311430988', 'alfirashofii@gmail.com', 'Facebook', 'Instagram', 'www.instagram.com/alfirass', '', 'Others', 'Others', '', '0000-00-00 00:00:00', NULL, NULL),
(29, 'Chandra Wijaya M', 'Pria', 'Luar Jakarta', '1997-03-22', 'Jakarta', 'Jalan rawa binong lubang buata', 'Belum Menikah', 23, 'S1', 'Manajemen', 'Palang merah remaja unit 014 makassar, Mahasiswa pecinta alam (UIT), The macz man indonesia (jabodetabek),BEM FE’15 UIT', 'Himpunan mahasiwa islam (Univ borobudur), Senat FE’15 borobudur, ', '89524321585', 'Chandrawjm@gmail.com', 'Facebook', 'Chandra Wijaya M', 'ChandraWJM', 'ChandraWJM', 'Bekerja', 'Others', '', '0000-00-00 00:00:00', NULL, NULL),
(30, 'Nadilla Nurramadhanti', 'Wanita', 'Jakarta', '1999-12-13', 'Jakarta', 'Jl. Tebet Barat X D no. 18', 'Belum Menikah', 24, 'S1', 'Akuntansi', 'N/A', '', '87887285737', 'nadilla.nur13@gmail.com', 'Instagram', '', 'nadillarmdhnt', '', 'Belum Bekerja', 'Others', 'Tidak Bekerja ', '0000-00-00 00:00:00', NULL, NULL),
(31, 'Andreas Condro Hendry Wiyana', 'Pria', 'Luar Jakarta', '1998-07-08', 'Luar', 'Perumahan Griya Alam Sentosa blok O 2 no 2 & 3, Cileungsi, Kab. Bogor', 'Belum Menikah', 24, 'S1', 'Manajemen', 'Pengurus OSIS SMA Negeri 7 Bekasi', '', '81290786912', 'hendryandree@gmail.com', 'Instagram', '', 'instagram.com/andrehendryy', '', 'Belum Bekerja', 'Others', 'Tidak berkerja', '0000-00-00 00:00:00', NULL, NULL),
(32, 'M.wahyu julian', 'Pria', 'Luar Jakarta', '1999-07-03', 'Jakarta', 'Jl.menteng wadas barat', 'Belum Menikah', 24, 'S1', 'Manajemen', 'N', '', '895334452925', 'Wahyujulian19@gmail.com', 'Instagram', '', 'Wahyuujulian', '', 'Belum Bekerja', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(33, 'Deni Nur Hamdani', 'Pria', 'Luar Jakarta', '1991-12-07', 'Jakarta', 'Jakarta timur', 'Belum Menikah', 19, 'S1', 'Manajemen', 'HMI komisariat Ekonomi', 'Wakil sekretaris senat ekonomi', '85882818348', 'Deninurhamdani.19@gmail.com', 'Facebook', 'Deni Putra Negara', '-', '', 'Bekerja', 'Karyawan Swasta', 'HMP KONSULTAN ', '0000-00-00 00:00:00', NULL, NULL),
(34, 'Kartika Rahayu', 'Wanita', 'Jakarta', '1984-11-29', 'Luar', 'Perum. Vila Nusa Indah 5 Cluster Maleo Blok SC 9 No. 11, Jl. Raya Ciangsana, Kec. Gn. Putri - Bogor', 'Menikah', 12, 'S1', 'Akuntansi', 'Dept. Humas', '', '85691531001', 'Kartika.b729@gmail.com', 'Facebook', 'Instagram', 'Kartika Rahayu', 'Kartika_ilan', 'Others', 'Tidak bekerja', '', '0000-00-00 00:00:00', NULL, NULL),
(35, 'faza farikha', 'Wanita', 'Luar Jakarta', '1999-01-11', 'Luar', 'Kp. Kramat rt 9/15 no 56, jakarta timur', 'Belum Menikah', 24, 'S1', 'Manajemen', 'Senat ', '', '81318010910', 'ffarikhaaaa11@gmail.com', 'Instagram', '', 'fzfarikhaa', '', 'Belum Bekerja', 'Others', 'tdk berkerja', '0000-00-00 00:00:00', NULL, NULL),
(36, 'Fracilia anggraini', 'Wanita', 'Luar Jakarta', '1996-07-16', 'Jakarta', 'Kramat jati, jakarta timur', 'Belum Menikah', 22, 'S1', 'Akuntansi', 'Pengurus Sehat FE Unbor', '', '83898559501', 'Afracilia@gmail.com', 'Instagram', '', 'Franggrainii', '', 'Belum Bekerja', 'Others', 'Tdk bekerja', '0000-00-00 00:00:00', NULL, NULL),
(37, 'Istihar anshori', 'Pria', 'Luar Jakarta', '2018-09-10', 'Luar', 'Jatiasih ', 'Menikah', 7, 'S1', 'Manajemen', 'Ya', 'Ya', '8111766904', '-', 'Facebook', 'Instagram', 'Istihar anshori', 'Istihar_anshori', '-', 'Bekerja', 'Karyawan Swasta', '0000-00-00 00:00:00', NULL, NULL),
(38, 'Septian yudi anggara', 'Pria', 'Jakarta', '1998-09-14', 'Jakarta', 'Pangkalan jati', 'Belum Menikah', 23, 'S1', 'Manajemen', 'Ketua osis futsal', '', '89629628973', 'Septianya@gmail.com', 'Facebook', 'Septian anggara', '@septianya_14', '@anggabayur', 'Belum Bekerja', 'Others', '', '0000-00-00 00:00:00', NULL, NULL),
(39, 'Ahmad kamil pansimar', 'Pria', 'Luar Jakarta', '1997-08-15', 'Jakarta', 'Jln kebantenan 3 rt05/rw04 no 25 kecamatan. Cilincing\nKelurahan. Semper timur\nKode pos 14130', 'Belum Menikah', 24, 'S1', 'Manajemen', 'Diklat manargasi', 'REPALA', '82113806997', 'Fahima.ahmad@icloud.com', 'Instagram', 'Ahmad kamil', 'Kamil_ahmadd', '@kamil_', 'Belum Bekerja', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(40, 'Indah Widyanti', 'Wanita', 'Jakarta', '1995-06-23', 'Jakarta', 'Jl. Yusufiyah Lubang Buaya, Jakarta Timur', 'Belum Menikah', 21, 'S1', 'Manajemen', 'Departemen Pendidikan SMFE UB Periode 2015-2016', 'Ketua Umum SMFE UB Periode 2016-2017', '82298054034', 'indah.widyanti@ymail.com', 'Instagram', '', 'indahwidiy', '', 'Others', 'Others', 'Tdk Bekerja', '0000-00-00 00:00:00', NULL, NULL),
(41, 'Muhammad haerul anwar', 'Pria', 'Jakarta', '1997-03-11', 'Jakarta', 'JL.Kp pisangan RT010/RW05', 'Belum Menikah', 23, 'S1', 'Manajemen', 'HMI Himpunan mahasiswa islam', 'Diklat manargasi DM ', '81212185219', 'muhammadhaerulanwar29@gmail.com', 'Instagram', 'others', 'm_haerul_anwar', 'othera', 'Belum Bekerja', 'Others', 'tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(42, 'Maulana Mochammad Asyrafi Hammam Choiron', 'Pria', 'Luar Jakarta', '1999-07-17', 'Luar', 'Jl. Boegenville 505 C Duta Kranji, Bekasi barat', 'Belum Menikah', 24, 'S1', 'Akuntansi', 'N/A', 'N/A', '82234562948', 'Hammam.asyrafi@gmail.com', 'Facebook', 'Instagram', 'https://www.facebook.com/maulanamuhammad.asyrafi', '@Asyrafi_99', 'Belum Bekerja', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(43, 'Mohamad Irfan', 'Pria', 'Jakarta', '1974-12-26', 'Luar', 'Jln Gunung Andakasa Denpasar', 'Menikah', 2, 'S2', 'Akuntansi', 'Ketua Umum SMFE UB 1995-1996', '', '81378494589', 'oblak@ymail.com', 'Facebook', 'lupa', 'Tdk ada', 'Tdk ada', 'Bekerja', 'Others', 'BPJS Ketenagakerjaan', '0000-00-00 00:00:00', NULL, NULL),
(44, 'Adinda Pristiawati', 'Wanita', 'Luar Jakarta', '1998-07-23', 'Other', 'Jl. Raya hankam ujung aspal gg.jati rt 04/02 no.82 17432', 'Belum Menikah', 23, 'S1', 'Manajemen', 'N/A', '', '895351065988', 'adindapristia@gmail.com', 'Instagram', '', '@adindapswt', '', 'Belum Bekerja', 'Others', 'Tidak Bekerja', '0000-00-00 00:00:00', NULL, NULL),
(45, 'Deli Tarius Setiyawan', 'Pria', 'Luar Jakarta', '1987-11-29', 'Jakarta', 'Jln. Duren Tiga V no. 36 kel. Duren Tiga Kec. Pancoran Jakarta selatan', 'Menikah', 15, 'S1', 'Manajemen', 'Ketua BPM Fakultas Ekonomi Univ Borobudur', 'Seksi Pendidikan Senat Makasiswa Fak Ekonomi Unbor', '87874560752', 'tariussitanggang@yahoo.com', 'Facebook', 'deli_lohan_bro@yahoo.co.id', 'delieenn', '', 'Bekerja', 'Karyawan Swasta', 'PDGI JAKARTA TIMUR', '0000-00-00 00:00:00', NULL, NULL),
(46, 'Andri Ferdian', 'Pria', 'Luar Jakarta', '1988-04-20', 'Luar', 'Grand residance prapanca 2 blok bb21/15 setu bekasi', 'Belum Menikah', 15, 'S1', 'Akuntansi', 'Departemen humas smfe ub', 'Ketua umum smfe ub', '81212016674', 'andriferdn@gmail.com', 'Facebook', 'Instagram', 'Andri Ferdian', 'andriferdn', 'Bekerja', 'Others', 'PT. Kirana Muda Properti', '0000-00-00 00:00:00', NULL, NULL),
(47, 'siti maryam litikasuri ms', 'Wanita', 'Luar Jakarta', '1998-04-09', 'Jakarta', 'bambu kuning v no 23', 'Belum Menikah', 23, 'S1', 'Manajemen', 'teater', '', '89635726866', 'litikasuriahmad@gmail.com', 'Instagram', '', 'chiee_tika', '', 'Belum Bekerja', 'Others', 'tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(48, 'Aldila Elnurfajri,SE', 'Pria', 'Jakarta', '1985-01-18', 'Luar', 'Jl.Nusa Indah VIII Blok MQ.No.16.Harapan Indah,Bekasi-Jawa Barat', 'Menikah', 12, 'S1', 'Akuntansi', '1.Ketum HMJA-UB\n2.Koord.Minat Bakat Senat SMFE-\n   UB\n3.Ketum BPM FE-UB\n', '1.Sekjen ILUNI DM FE-UB\n2.Ketum Muda Mudi Jabasko\n3.PHMC (anggota)', '87874795881', 'aldilaelnurfajri@rocketmail.com', 'Facebook', 'Instagram', 'aldilaelnurfajri85@gmail.co.id', 'aldielnurfajri', 'Bekerja', 'Karyawan Swasta', 'RS.Persahabatan Jakarta Timur', '0000-00-00 00:00:00', NULL, NULL),
(49, 'Mediana Rakhasiwi', 'Wanita', 'Jakarta', '1987-05-08', 'Jakarta', 'Jl.raya bgr km 26 gg.neran no 15A', 'Belum Menikah', 14, 'S1', 'Akuntansi', 'Bendum senat', 'Ketua bpm', '81384376947', 'mediana.rakhasiwi@yahoo.com', 'Facebook', 'Instagram', 'Mediana Rakasiwi', 'Mediana Rakhasiwi', 'Bekerja', 'Karyawan Swasta', 'Pt.Bank Danamon Indonesia', '0000-00-00 00:00:00', NULL, NULL),
(50, 'Atthree Januari S', 'Wanita', 'Luar Jakarta', '2018-04-23', 'Jakarta', 'Jl Puyuh No 208 L Rt 03/02 Manggarai Tebet Jakarta Selatan 12850', 'Menikah', 3, 'S1', 'Akuntansi', 'Bendahara SMFE-UB', 'Bendahara Koperasi KLI', '81210152743', 'atthreesunardi@gmail.com', 'Facebook', 'Atthree Januari', 'Atthree', 'Atthree', 'Bekerja', 'Karyawan Swasta', '', '0000-00-00 00:00:00', NULL, NULL),
(51, 'Hasan Maliki', 'Pria', 'Jakarta', '1982-09-27', 'Jakarta', 'Jl. Utan Jati RT.003/011 No.31 Pegadungan Kalideres Jakarta Barat', 'Menikah', 12, 'S1', 'Akuntansi', 'N/A', '', '85880808188', 'maliki_aja@yahoo.com', 'Facebook', 'maliki_aja@yahoo.com', 'hasan-keysha', '', 'Bekerja', 'Karyawan Swasta', 'PT. Magna Coatings Indonesia', '0000-00-00 00:00:00', NULL, NULL),
(52, 'Putri Dewi Yuliana', 'Wanita', 'Luar Jakarta', '1986-07-13', 'Luar', 'Jl Boscha IV No 75 Bandung', 'Belum Menikah', 14, 'S1', 'Akuntansi', 'Ketua Senat 2007 s.d 2008', 'Sekretaris BPM', '8561927479', 'ranputri_sarah@yahoo.co.id', 'Facebook', 'Putri D. Yuliana', 'putridysme', 'putridysme', 'Bekerja', 'Karyawan Swasta', '', '0000-00-00 00:00:00', NULL, NULL),
(53, 'Irwan Suhendri', 'Pria', 'Luar Jakarta', '1974-05-23', 'Luar', 'Jl. Pasirluyu utara no 8 bandung', 'Menikah', 2, 'S1', 'Akuntansi', 'Osis, Senat', '', '81285797195', 'Bangw42n@gmail.com', 'Facebook', 'Bangwa2n', 'Bangwa2n', '@bangwa2n', 'Bekerja', 'Karyawan Swasta', '', '0000-00-00 00:00:00', NULL, NULL),
(54, 'Candy Firdaus', 'Pria', 'Luar Jakarta', '1978-11-22', 'Luar', 'Vila Nusa Indah5 SC9/11, jl.Raya Ciangsana, Gn.Putri kab.Bogor', 'Menikah', 6, 'S1', 'Akuntansi', 'SMFE/BPM-UB + ILUNI DM', 'HMI, ...', '85774828345', 'Candy.firdaus@gmail.com', 'Facebook', 'Candy', 'No Account ', '', 'Bekerja', 'Karyawan Swasta', 'PT.SCG READYMIX INDONESIA', '0000-00-00 00:00:00', NULL, NULL),
(55, 'Pardamean Fransetio Nababan', 'Pria', 'Luar Jakarta', '1998-04-08', 'Luar', 'Bekasi, Tambun Utara', 'Belum Menikah', 24, 'S1', 'Akuntansi', 'Anggota senat', 'Anggota PMKB', '82165794870', 'pardamean.1998@gmail.com', 'Facebook', 'Instagram', 'pardamean fransetio nababan', 'fransetionababan19', 'Belum Bekerja', 'Others', 'tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(56, 'Farich R Anas', 'Pria', 'Luar Jakarta', '2018-02-27', 'Jakarta', 'Perum Jatisari Permai Jln.Topaz blok V1/35 Jatisari Bekasi', 'Menikah', 0, 'S1', 'Akuntansi', 'Lain-lain', '', '818822669', 'farichra@yahoo.com', 'Facebook', 'Farich Anas', 'No', '', 'Wiraswasta', 'Wiraswasta', 'PT. Empat Tunggal', '0000-00-00 00:00:00', NULL, NULL),
(57, 'Rikki Mangisi', 'Pria', 'Luar Jakarta', '1998-03-27', 'Luar', 'Pondok Pekayon Indah, jl Palem Barat IX RT 05 RW 16', 'Belum Menikah', 23, 'S1', 'Manajemen', 'wakil ketua Osis ', 'GMKI', '82276780434', 'rikkimanggisi@gmail.com', 'Instagram', '', 'rikki_malau', '', 'Belum Bekerja', 'Others', 'tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(58, 'Bardio Novianto', 'Pria', 'Jakarta', '1973-11-08', 'Luar', 'Jln. Tenggilis Timur VIII blok ii no.1 Surabaya Timur', 'Menikah', 1, 'S1', 'Manajemen', 'Senat Mahasiswa', 'HMI', '82299065555', 'bardionovianto@gmail.com', 'Facebook', 'bardionovianto', 'bardionovianto', '', 'Wiraswasta', 'Wiraswasta', 'GKN', '0000-00-00 00:00:00', NULL, NULL),
(59, 'berry darmayudi', 'Pria', 'Jakarta', '1995-06-10', 'Jakarta', 'Jalan pulo mawar', 'Belum Menikah', 24, 'S1', 'Akuntansi', 'N', 'N', '85714450797', 'darmayudi.berry@yahoo.co.id', 'Facebook', 'jalan pulo mawar', 'jalan pulo mawar', 'jalan pulo mawar', 'Belum Bekerja', 'Others', 'tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(60, 'Eni Sulistiyowati', 'Wanita', 'Luar Jakarta', '1997-09-19', 'Luar', 'Jln. Patriot RT.003 RW.003 kampung 2, gang thailand kelurahan jaka sampurna, kecamatan bekasi barat ', 'Belum Menikah', 22, 'S1', 'Manajemen', 'Pemgurus UKMI', 'Anggota senat', '6283863007522', 'Enisulistiowati1212@gmail.com', 'Facebook', 'Instagram', 'Eni Sulistiyowati', 'Enisulisti', 'Belum Bekerja', 'Karyawan Swasta', 'Blm bekerja', '0000-00-00 00:00:00', NULL, NULL),
(61, 'Sabrina sumarani', 'Wanita', 'Jakarta', '1999-11-17', 'Luar', 'Jl. Cempaka blok c15 no.7 sku, tambun selatan, bekasi', 'Belum Menikah', 24, 'S1', 'Akuntansi', 'Anggota senat', '', '89672183775', 'Sabrinasumarani@gmail.com', 'Facebook', 'Instagram', 'Sabrinasumarani', 'Sabrinasumarani', 'Belum Bekerja', 'Others', 'Tdk bekerja', '0000-00-00 00:00:00', NULL, NULL),
(62, 'Yannisa rahmi', 'Wanita', 'Jakarta', '1999-01-21', 'Luar', 'Jl flamboyan b no 70,bahagia ,bekasi,  jawa barat 17612', 'Belum Menikah', 24, 'S1', 'Manajemen', 'Anggota senat', '', '81311072941', 'yannisarhmi21@gmail.com', 'Instagram', '', 'Yannisarhmi21', '', 'Belum Bekerja', 'Others', 'Tdk bekerja ', '0000-00-00 00:00:00', NULL, NULL),
(63, 'Andri Ismail Maldini', 'Pria', 'Jakarta', '1997-04-18', 'Jakarta', 'Jl. Kalibaru barat VII Rt 010/015 kec.cilincing kel.kalibaru', 'Belum Menikah', 24, 'S1', 'Manajemen', 'Repala ', '', '895320272212', 'Andrimaldni90@gmail.com', 'Facebook', 'Andri maldini', 'Andrmldni', '@Andri_maldini', 'Belum Bekerja', 'Others', 'Tdk bekerja', '0000-00-00 00:00:00', NULL, NULL),
(64, 'Nurhasanah', 'Wanita', 'Luar Jakarta', '1978-05-09', 'Luar', 'Taman Puri Cendana blok c.9 no.14 tambun selatan bekasi', 'Menikah', 7, 'S1', 'Akuntansi', 'N/A', 'N/A', '81282618914', 'nurnazla01@gmail.com', 'Facebook', '', 'Nazla nur', '', 'Bekerja', 'Karyawan Swasta', 'PT. Daya Agung Mandiri', '0000-00-00 00:00:00', NULL, NULL),
(65, 'Bramastyo Laksbiantoro', 'Pria', 'Luar Jakarta', '1974-06-28', 'Jakarta', 'Lotus Garden LG5/35, Grand Galaxy City, Bekasi Selatan, Bekasi, Jawa Barat', 'Menikah', 2, 'S2', 'Akuntansi', 'Sekretaris SMFE UB, 94/95', 'Sekretaris BPM FE UB, 95/96', '8172851717', 'bramasty2874@gmail.com', 'Instagram', '', 'Bramastyo', '', 'Bekerja', 'Karyawan Swasta', 'Pusat Penerbitan dan Usaha Lain (PPUL)  LIA', '0000-00-00 00:00:00', NULL, NULL),
(66, 'Resti Indriani', 'Wanita', 'Luar Jakarta', '1999-12-12', 'Luar', 'Jln kemang sari raya no 61 kel jatikramat, kec jatiasih. Bekasi', 'Belum Menikah', 24, 'S1', 'Akuntansi', 'Iluni DM', '', '89635957963', 'iresti60@gmail.com', 'Instagram', '', 'restindrn', '', 'Belum Bekerja', 'Others', 'tdk bekerja', '0000-00-00 00:00:00', NULL, NULL),
(67, 'Zarra Zettira Pramadya', 'Wanita', 'Luar Jakarta', '1999-12-26', 'Luar', 'Vila gading harapan 5 blok h4 no 18A RT/RW 01/012 Desa satria mekar Kecamatan Tambun Utara Kabupaten Bekasi Utara', 'Belum Menikah', 21, 'S1', 'Akuntansi', 'Iluni DM', '', '89674031513', 'zarrazettira12@gmail.com', 'Instagram', 'Zarra Zettira Pramadya', '@zarrazettirap', '@zarrazettiraa', 'Belum Bekerja', 'Others', 'blm bekerja', '0000-00-00 00:00:00', NULL, NULL),
(68, 'Hasbiaulloh', 'Pria', 'Jakarta', '1981-11-12', 'Jakarta', 'Komplek Kodam Kalideres Rt.010/05 K2/213 Kalideres Jakbar', 'Menikah', 10, 'S1', 'Manajemen', 'SMFE UB', 'Karang Taruna', '82112980880', 'hasbise12@gmail.com', 'Facebook', 'Hasbi Se', 'N/A', 'Hasbiaulloh Se', 'Bekerja', 'Others', 'Kodim 0503/JB', '0000-00-00 00:00:00', NULL, NULL),
(69, 'Rika Rachmawati', 'Wanita', 'Jakarta', '1982-06-22', 'Luar', 'Kota Wisata Cluster Florida , Cibubur', 'Menikah', 9, 'S1', 'Akuntansi', 'Senat mahasiswa fakultas ekonomi', '', '81513077777', 'rika.suanda@gmail.com ', 'Instagram', '', '@Allagris4392', '', 'Wiraswasta', 'Wiraswasta', 'PT. Mitratech Andal Sinergia', '0000-00-00 00:00:00', NULL, NULL),
(70, 'Rahmad Dwi Prasetyo', 'Pria', 'Luar Jakarta', '1999-04-22', 'Luar', 'Jl ujung harapan gg. Al ikhlas rt02/rw43', 'Belum Menikah', 24, 'S1', 'Manajemen', 'N', '', '83876704034', 'dwi.pras0095@gmail.com', 'Instagram', '', 'praassty_', '', 'Belum Bekerja', 'Others', 'tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(71, 'Risa fatma anjani', 'Wanita', 'Luar Jakarta', '1999-06-09', 'Luar', 'Cicurug sukabumi', 'Belum Menikah', 24, 'S1', 'Manajemen', 'anggota PK(pengurus kelas)', '', '85795458134', 'Risyafatma@gmail.com', 'Instagram', '', 'www.instagram.com/faaizafathinah', '', 'Belum Bekerja', 'Others', 'Belum bekerja', '0000-00-00 00:00:00', NULL, NULL),
(72, 'II FAUZI', 'Pria', 'Jakarta', '1982-11-09', 'Jakarta', 'ANGKE INDAH NO.21 RT001/02, JAKARTA BARAT 11330', 'Belum Menikah', 11, 'S1', 'Manajemen', 'Komisi organisasi, (BPM)', 'Karang taruna tingkat kelurahan ( komisi mikro)', '81288963009', 'iifauzi@yahoo.co.id', 'Facebook', 'iifauzi@yahoo.co.id', 'iifauzi@yahoo.co.id', 'iifauzi@yahoo.co.id', 'Bekerja', 'Karyawan Swasta', '', '0000-00-00 00:00:00', NULL, NULL),
(73, 'Vinsensius William Marbun', 'Pria', 'Luar Jakarta', '1997-04-10', 'Luar', 'Jati Cempaka, Pondo Gede', 'Belum Menikah', 23, 'S1', 'Manajemen', 'Pramuka', 'GMKI', '82282836558', 'vinsensiuswilliam@yahoo.com', 'Instagram', '', 'vinsensiusmarbun', '', 'Belum Bekerja', 'Others', 'tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(74, 'Gabriel Patricia Bonita', 'Wanita', 'Jakarta', '1999-11-25', 'Jakarta', 'jl. swasembada barat IX no.9 , rt/rw-004/013 , kel.kebon bawang , kec.tg priok , 14320', 'Belum Menikah', 24, 'S1', 'Akuntansi', 'senat', 'stupala', '89673501429', 'gabrielpatricia93@gmail.com / gabrielpatricia78@gmail.com', 'Facebook', 'gabriel patricia', 'gpbh_', '@gbrlclassen', 'Belum Bekerja', 'Others', '', '0000-00-00 00:00:00', NULL, NULL),
(75, 'Didik Hendry Atmoko', 'Pria', 'Jakarta', '1974-09-25', 'Jakarta', 'Jl. Masjid No.56 Ciracas Jaktim', 'Menikah', 2, 'S1', 'Manajemen', 'SMFUB', 'HMJM FEUB', '83872506469', 'didikha2001@yahoo.com', 'Facebook', 'Instagram', 'Didik rayhan danish', 'Didik danish', 'Bekerja', 'Karyawan Swasta', 'Outsourcing', '0000-00-00 00:00:00', NULL, NULL),
(76, 'Ade Nopriyadi', 'Pria', 'Jakarta', '1996-11-09', 'Jakarta', 'Jalan Kalibaru Barat V Rt. 002/06 no. 35b jakarta utara', 'Belum Menikah', 24, 'S1', 'Manajemen', 'Senat Ekonomi Borobudur', 'Siswa Pencinta alam', '81319618433', 'Adenopriyadi@gmail.com ', 'Facebook', 'Instagram', 'Adhe Nopriyadi', 'Adhenopriyadi', 'Others', 'Others', 'Tdk bekerja', '0000-00-00 00:00:00', NULL, NULL),
(77, 'Kezya Chrisdaria Ayuningtyas', 'Wanita', 'Jakarta', '2018-06-28', 'Other', 'Perm.taman kirana surya Blok.C7 No.10 kab.Tangerang Prov.Banten kode pos:15730', 'Belum Menikah', 24, 'S1', 'Akuntansi', 'Mengikuti oragnisasi siswa atau disebut osis diSMA', 'Mengikuti Ekstrakulikuler seni atau teater dan paduan suara diSMA', '89652865347', 'Kezyachrisdariaayuningtyas@gmail.com', 'Facebook', 'Kezya Ayuningtyas', 'Kezyachrisdariaayuningtyas', 'Kezya chrisdaria', 'Belum Bekerja', 'Others', '', '0000-00-00 00:00:00', NULL, NULL),
(78, 'Wahyudi pratama', 'Pria', 'Luar Jakarta', '1999-05-02', 'Luar', 'Provinsi NTB Kab Sumbawa kec lopok desa pungkit', 'Belum Menikah', 23, 'S1', 'Manajemen', 'Mendapat jaringan yg banyak ,dan ilmu ', 'Mengetahui tentang pemimpin yg sebanarnya', '82340579118', 'Wahyudipratama098@gmail.com', 'Facebook', 'Wahyudi pratama', 'Wahyudipratama98', '', 'Belum Bekerja', 'Others', 'Belum bekerj', '0000-00-00 00:00:00', NULL, NULL),
(79, 'Wilma Nathania Siregar', 'Wanita', 'Luar Jakarta', '1999-03-03', 'Luar', 'VILA JAKA SETIA BLOK E No 4, BEKASI', 'Belum Menikah', 24, 'S1', 'Akuntansi', 'N', '', '82283687036', 'Tidak ada', 'Facebook', 'Wilma nathania siregar', 'Tidak ada', '', 'Belum Bekerja', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(80, 'YUSLIFAR TRISILA.SE.ELP', 'Pria', 'Jakarta', '1970-10-01', 'Luar', 'Jl Kebun Raya Cibodas. Desa Dawuan, Cipanas, Kabupaten Cianjur.Jawa Barat', 'Menikah', 0, 'S2', 'Manajemen', 'KABID SENAT FE UB 1992, HMPA STUPALA UB, PENDIRI FORUM PENANGGULANGAN BENCANA.ALAM.DKI,  KETUA RELAWAN HUTAN INDONESIA 2006-2008,', 'Wakil Sekretaris Jendral Pengurus Pusat FPTI ”Federasi panjat Tebing Indonesia”Cabang Olah Raga KONI. periode 2012- 2016.\nPenasehat Asosiasi Experiential Indonesia (AELI) DPD JAWA BARAT 20016-2019 ,PEMATERI PROFESIONAL PRUSAHAN DAN Fasilitator Outbound TRAINER.sejak 1995.\nInstruktur dan pemerhati kegiatan Alam Terbuka ', '81514535389', 'Cibodastour@gmail.com', 'Facebook', 'Yus cuppy ceper', 'Outboundgunungmas', 'Outboundgunungmas', 'Bekerja', 'Wiraswasta', 'EXPERT INDONESIA @YUSCEPER', '0000-00-00 00:00:00', NULL, NULL),
(81, 'Anisa Firlyati', 'Wanita', 'Jakarta', '1999-03-21', 'Other', 'Perumahan Bumi Anggrek Blok K no.32 rt 02/07 Tambun Utara, Bekasi', 'Belum Menikah', 24, 'S1', 'Akuntansi', 'N/A', '', '82213835052', 'anisafirlyati@gmail.com', 'Facebook', 'Anisa Firlyati', 'Tidak ada', '', 'Belum Bekerja', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(82, 'Wiwin susanto', 'Pria', 'Luar Jakarta', '1982-07-08', 'Luar', 'Jln koramil no. 91 rt 17 rw 08 dusun IV Desa tulung selapan ilir kec.tulung selapan kab. Ogan komering ilir prov. Sumsel', 'Menikah', 10, 'S1', 'Manajemen', 'N/A', '', '81373704641', 'wiwinsusanto008@gmail.com', 'Facebook', 'Wiwin susanto', 'wiwinalvaro', 'Wiwin susanto', 'Bekerja', 'Wiraswasta', '', '0000-00-00 00:00:00', NULL, NULL),
(83, 'Aris Suparto Prayitno', 'Pria', 'Jakarta', '1999-04-02', 'Jakarta', 'Jl. Mardani III No.7', 'Belum Menikah', 24, 'S1', 'Manajemen', 'N/A', '', '85287896639', 'arisprayitno9@gmail.com', 'Facebook', 'https://mobile.facebook.com/aris.prayitno.90?refid=7', 'N/A', '', 'Belum Bekerja', 'Others', 'tdk bekerja', '0000-00-00 00:00:00', NULL, NULL),
(84, 'Lucki Haryanti', 'Wanita', 'Luar Jakarta', '1997-10-31', 'Luar', 'Jln. Swadaya II RT 05/RW 08 no.101, kelurahan jatimakmur, pondok gede', 'Belum Menikah', 22, 'S1', 'Akuntansi', 'Anggota senat', '', '81294647654', 'luckii.hariyanti@gmail.com', 'Facebook', 'Instagram', 'Luckii', 'lucki.hariyanti.lh', 'Belum Bekerja', 'Others', 'tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(85, 'David Wasly Sinaga', 'Pria', 'Luar Jakarta', '1999-06-06', 'Luar', 'Medan', 'Belum Menikah', 24, 'S1', 'Manajemen', 'N/A', '', '85270793448', 'davidwasly@yahoo.com', 'Facebook', 'Instagram', 'David', 'david_wasly', 'Belum Bekerja', 'Others', 'Tidak Bekerja', '0000-00-00 00:00:00', NULL, NULL),
(86, 'REYNALDI', 'Pria', 'Jakarta', '1992-07-31', 'Luar', 'Bekasi Barat, Perum Duta Kranji Blok A', 'Belum Menikah', 18, 'S1', 'Manajemen', 'Ketua Umum SMFE-Universitas Borobudur Periode 2012-2013', 'Ketua Bidang Himpunan Mahasiswa Jurusan Manajemen (HMJM) Universitas Borobudur', '81219420031', 'reynaldi3107@gmail.com', 'Facebook', 'Reynaldi Sarijowan', '@pejuangpasar', '@NcexLee', 'Bekerja', 'Wiraswasta', '', '0000-00-00 00:00:00', NULL, NULL),
(87, 'Afifudin, SE, M.Si', 'Pria', 'Jakarta', '1977-01-20', 'Other', 'Jalan Kalibata Timur Raya, Jakarta Selatan', 'Belum Menikah', 9, 'S2', 'Manajemen', 'Senat mahasiswa FE Universitas Borobudur\nBPM Unviersitas Borobudur', '', '81807939428', 'afifghozlian77@gmail.com', 'Facebook', 'Instagram', 'Afifudin Ghozalian', 'Afifghoz', 'Bekerja', 'PNS', 'Fraksi Partai HANURA DPR RI', '0000-00-00 00:00:00', NULL, NULL),
(88, 'Ayu faradillah', 'Wanita', 'Jakarta', '1990-08-17', 'Jakarta', 'Jati Padang Poncol no 17, pasar Minggu Jakarta selatan', 'Menikah', 17, 'S1', 'Akuntansi', 'SMFE-UB', 'HMI', '82213682448', 'Ayufaradila_han@yahoo.com', 'Facebook', 'Instagram', 'Ayufaradila_han@yahoo.com', 'Ayufaradila_han', 'Bekerja', 'Karyawan Swasta', 'PT.Omegaindo Sejahtera Abadi', '0000-00-00 00:00:00', NULL, NULL),
(89, 'Saskia jelita ', 'Wanita', 'Jakarta', '1999-05-23', 'Jakarta', 'Jl. pulo gebang indah Rt 003 Rw 06 No. 201 ', 'Belum Menikah', 24, 'S1', 'Manajemen', 'Anggota basket unbor', '', '87876566425', 'Saskiaa610@gmail.com ', 'Instagram', 'Adel saskia', '@saskiaadel', '', 'Belum Bekerja', 'Others', 'Tdk bekerja ', '0000-00-00 00:00:00', NULL, NULL),
(90, 'sangkut sri minarni', 'Wanita', 'Luar Jakarta', '2000-01-24', 'Jakarta', 'jl.harapan II kel.cipinang melayu', 'Belum Menikah', 24, 'S1', 'Akuntansi', 'N', '', '81559843913', '*', 'Instagram', '', 'eni.sri.24', '', 'Others', 'Others', '*', '0000-00-00 00:00:00', NULL, NULL),
(91, 'Ajrina ramadhani sari ', 'Wanita', 'Luar Jakarta', '1997-02-02', 'Luar', 'Gg.simban 2 rt/rw 04/04 no 27b kaliabang tengah bekasi utara ', 'Belum Menikah', 22, 'S1', 'Manajemen', 'Pengurus senat ', 'Pengurus ukmi ', '83894915799', 'ajrinaramadhani99@gmail.com', 'Facebook', 'Instagram', 'Ajrina ramadhani', 'Ramadhanisari02', 'Belum Bekerja', 'Others', 'Belum bekerja ', '0000-00-00 00:00:00', NULL, NULL),
(92, 'Tri Prasetyo', 'Pria', 'Jakarta', '1983-12-02', 'Luar', 'Perumahan Zam Residence No. 6 RT/RW 017/07 Bengle, Majalaya, Karawang. ', 'Menikah', 11, 'S1', 'Manajemen', 'N/A', '', '81310330535', 'trikhun.kawasaki@yahoo.com ', 'Facebook', 'Instagram', 'Tri Prasetyo', 'Trikhun.kawasaki', 'Bekerja', 'Karyawan Swasta', 'PT. Atsumitec Indonesia', '0000-00-00 00:00:00', NULL, NULL),
(93, 'Suhardiman (Michi)', 'Pria', 'Jakarta', '1985-08-18', 'Jakarta', 'Jl.Apus 1a RT.02 RW.06 No.17c Kota Bambu Selatan 11240', 'Menikah', 12, 'S1', 'Akuntansi', 'N/A', 'N/A', '87880444088', 'suhardiman_arhj@yahoo.co.id', 'Facebook', 'Instagram', 'lukawa_michi@yahoo.com', 'lukawa_michi@yahoo.com', 'Bekerja', 'Others', 'PT. Penta Valent', '0000-00-00 00:00:00', NULL, NULL),
(94, 'Rossa rollin', 'Wanita', 'Jakarta', '1985-01-09', 'Jakarta', 'Legenda wisata zona marcopolo', 'Menikah', 11, 'S1', 'Manajemen', 'Minat dan bakat', '', '81290951772', 'Vanchalin@yahoo.com', 'Facebook', 'Instagram', 'Rossa rollin', 'Rossa rollin', 'Others', 'Others', 'Tidak bekerja ', '0000-00-00 00:00:00', NULL, NULL),
(95, 'Angela Safitri Sukawati', 'Wanita', 'Luar Jakarta', '1984-02-20', 'Luar', 'Lingkungan Wage Rt 27 Rw 10 Kec/kel Cigugur Kuningan', 'Menikah', 11, 'S1', 'Manajemen', 'N/A', '', '85220765752', 'angelikasafitri273@gmail.com', 'Facebook', 'angela reihan', 'N/A', 'N/A', 'Others', 'Others', 'tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(96, 'Atunio Digerotna', 'Pria', 'Luar Jakarta', '1984-10-17', 'Luar', 'Jl. Z. Abidin no 12 kepala Siring curup', 'Menikah', 12, 'S1', 'Manajemen', 'Smfe', '', '8153894422', 'tuns_1710@yahoo.com', 'Facebook', 'Nio Gerotna', 'Nio Gerotna', '', 'Bekerja', 'Wiraswasta', 'No', '0000-00-00 00:00:00', NULL, NULL),
(97, 'Dwi puspitasari', 'Wanita', 'Luar Jakarta', '1983-10-28', 'Luar', 'Timika papua', 'Menikah', 11, 'S1', 'Manajemen', 'Senat', 'Hmi', '82199158484', 'Dwiqu83@gmail.com', 'Facebook', 'Instagram', 'Dpuspita delta', 'Dpuspita delta', 'Wiraswasta', 'Wiraswasta', 'Tdk bekerja', '0000-00-00 00:00:00', NULL, NULL),
(98, 'Andrianto', 'Pria', 'Luar Jakarta', '1985-06-27', 'Luar', 'Jl.h dimun 4,gang perjuangan no.74,Sukmajaya,Cilodong,depok', 'Menikah', 13, 'S1', 'Akuntansi', 'N', '', '8561514595', 'akhi.andry@gmail.com', 'Facebook', 'akhi.andry@gmail.com', 'andrianto', '', 'Bekerja', 'Karyawan Swasta', 'PT.Agro Jaya Mandiri', '0000-00-00 00:00:00', NULL, NULL),
(99, 'Arbi diansyah kaban', 'Pria', 'Luar Jakarta', '1993-05-18', 'Other', 'Medan', 'Belum Menikah', 19, 'S1', 'Manajemen', 'Departeman pendidikan  Priode 2013 -2014\nKetua umum senat  priode 2014 - 2015\n', '', '85711037465', 'arbikaban@gmail.com', 'Facebook', 'Instagram', 'Arbi kaban', 'Arbi kaban', 'Bekerja', 'Karyawan Swasta', 'Anugrah pharmindo lestari ', '0000-00-00 00:00:00', NULL, NULL),
(100, 'suntoro', 'Pria', 'Jakarta', '1985-05-22', 'Jakarta', 'jl warakas 1 no 53, tj priok jakut', 'Menikah', 7, 'S1', 'Manajemen', 'smfeub', 'bemfeub', '81282680415', 'apyhst@gmail.com', 'Facebook', 'na', 'na', '', 'Bekerja', 'Karyawan Swasta', 'pes', '0000-00-00 00:00:00', NULL, NULL),
(101, 'Ustadz Jafar fakaubun', 'Pria', 'Luar Jakarta', '1997-09-10', 'Luar', 'Jatiwaringin binalindung RT 003 RW 015', 'Belum Menikah', 22, 'S1', 'Manajemen', 'Anggota mahasiswa jurusan manajemen', '', '82399746650', 'Ujajaff@gmailcom', 'Facebook', 'Instagram', 'FM.jafar01@gmail.com', 'Ujajafar', 'Belum Bekerja', 'Others', 'Tdk bekerja', '0000-00-00 00:00:00', NULL, NULL),
(102, 'Ilham setiawan', 'Pria', 'Luar Jakarta', '1994-09-17', 'Jakarta', 'Jl, Cipinang Muara III, Rt. 014 Rw. 08, Kelurahan Cipinang Muara, Jakarta Timur', 'Belum Menikah', 21, 'S1', 'Manajemen', 'Kabid I.T Pada Organisasi Sahabat Polisi', 'Sekretaris Umum Himpunan Mahasiswa Islam, Komisariat Ekonomi, Universitas Borobudur, Cabang Jakarta Timur.', '81316414931', 'Ilhamyukisetiawan@gmail.com', 'Instagram', '', 'Toilet_representatif', '', 'Belum Bekerja', 'Others', 'TDK bekerja', '0000-00-00 00:00:00', NULL, NULL),
(103, 'Nico sumarna', 'Pria', 'Luar Jakarta', '1994-03-29', 'Luar', 'Jati melati perum.bulog 3 bekasi', 'Belum Menikah', 22, 'S1', 'Manajemen', 'Anggota senat fakultas ekonomi', '', '87878382899', 'Nicosarah.90@gmail.com', 'Instagram', '', 'Nic_3294', '', 'Belum Bekerja', 'Others', 'tdk bekerja', '0000-00-00 00:00:00', NULL, NULL),
(104, 'Rusdi Bicara', 'Pria', 'Luar Jakarta', '1992-03-28', 'Luar', 'Jl.pangkalan jati V no. 24', 'Belum Menikah', 20, 'S1', 'Manajemen', 'Kabid 1 senat ekonomi Universitas Borobudur', 'Ketua BPM Ekonomi Universitas Borobudur', '82292556046', 'rusdibicaraaa@gmail.com', 'Instagram', 'Twitter', '@Bicararusdi', 'Rusdibicaraaa', 'Belum Bekerja', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(105, 'Nurbertus', 'Pria', 'Luar Jakarta', '1992-05-11', 'Jakarta', 'Jakarta', 'Belum Menikah', 20, 'S1', 'Manajemen', 'N', 'N', '85215104194', 'Nobertussawa@gmail.com', 'Facebook', 'Instagram', 'Nobertus', 'Nobertus', 'Belum Bekerja', 'Wiraswasta', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(106, 'Neneng Halimah', 'Wanita', 'Jakarta', '1993-10-23', 'Jakarta', 'Jl marzuki 1 gg kesadaran 3 rt 08/01 no 20a kel. Penggilingan kec.cakung jakarta timur', 'Belum Menikah', 21, 'S1', 'Manajemen', 'Sekretaris Hmjm', 'Kabid dept pendidikan SMFE 2012-2013', '81284067124', 'nenenghalimah.nh@gmail.com', 'Facebook', 'Neneng halimah', 'halimah_neneng', '', 'Bekerja', 'Others', 'PT BNI Persero Tbk', '0000-00-00 00:00:00', NULL, NULL),
(107, 'Jesteven Yusuf P', 'Pria', 'Luar Jakarta', '1996-07-27', 'Luar', 'Jl.Budi harapan 2', 'Belum Menikah', 23, 'S1', 'Manajemen', '*', '', '85210142452', '*', 'Facebook', 'Instagram', 'jesteven.poerba@ymail.com', 'jesteven_purba', '*', 'Belum Bekerja', 'Wiraswasta', '0000-00-00 00:00:00', NULL, NULL),
(108, 'Kamisah ', 'Wanita', 'Luar Jakarta', '1982-02-02', 'Luar', 'Pangkal Pinang babel', 'Menikah', 13, 'S1', 'Manajemen', 'Wakil ketua senat ekonomi unbor', '', '85269700424', 'nosutris1974@gmail.com', 'Facebook', 'Instagram', 'Ahnaf yafis ', 'Ahnaf yafis ', 'Wiraswasta', 'Wiraswasta', 'Ahnaf yafis ', '0000-00-00 00:00:00', NULL, NULL),
(109, 'Wahyu winardi', 'Pria', 'Luar Jakarta', '1998-03-25', 'Luar', 'Kp.cikeas nagrak rt 03/01 kec.gunung putri kab.bogor prov.jawa barat', 'Belum Menikah', 23, 'S1', 'Manajemen', 'N/A', '', '83811395644', 'Wahyuperfecto@yahoo.com', 'Facebook', 'Wahyu winardi', '@wahyuwnrd', '@wahyuwnrd', 'Belum Bekerja', 'Others', '', '0000-00-00 00:00:00', NULL, NULL),
(110, 'siti asyifa', 'Wanita', 'Luar Jakarta', '2018-07-17', 'Other', 'Jl.Cilamaya Kec.Jatisari Kab.Karawang', 'Belum Menikah', 24, 'S1', 'Akuntansi', 'Pengurus osis MTs', 'UKMI', '85719318176', 'sitiasyifa@yahoo.com', 'Instagram', '', 'sitiasyifa89@yahoo.com', '', 'Belum Bekerja', 'Others', 'tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(111, 'Firman Qodri', 'Pria', 'Luar Jakarta', '1991-05-04', 'Jakarta', 'Jln kp rawa sawah kel/kec Johar baru jakarta pusat', 'Belum Menikah', 18, 'S2', 'Manajemen', 'HMI', 'SENAT FE UB', '85777091420', 'hmjmfeunbor@gmail.com', 'Facebook', 'Instagram', '', 'firman_qodri', 'Wiraswasta', 'Wiraswasta', 'INA COLLECTION', '0000-00-00 00:00:00', NULL, NULL),
(112, 'Ridwan Muhlisin', 'Pria', 'Jakarta', '1982-07-27', 'Luar', 'Perum taman royal 3 blok A15', 'Menikah', 10, 'S1', 'Manajemen', 'Senat FE-UB', '', '85313190040', 'Irash_i1@yahoo.co.id', 'Facebook', '', 'Tdk punya', '', 'Bekerja', 'Wiraswasta', 'Toko foto kopi & atk', '0000-00-00 00:00:00', NULL, NULL),
(113, 'Cipta panjaitan', 'Pria', 'Luar Jakarta', '1994-04-15', 'Other', 'Belum domisili', 'Belum Menikah', 20, 'S1', 'Manajemen', 'Organisasi senat ', '', '87788825361', 'Jayapanjaitan083@gmail.com', 'Facebook', 'Jayapanjaitan@ymail.com ', 'Jaya_isnt', '', 'Others', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(114, 'Syamsul Fajri', 'Pria', 'Jakarta', '1995-06-17', 'Jakarta', 'Jl Kamal Raya Rt07/14 Kel: Cengkareng Timur, Jakarta Barat', 'Belum Menikah', 21, 'S1', 'Manajemen', 'Departemen Kerohanian SMFE UB 2015-2016', 'Ketua Umum Komisariat Ekonomi HMI Cabang Jaktim Univ Borobudur 2015-2016', '81908622338', 'Syamsul.fajri17@yahoo.com', 'Instagram', '*', 'syamsulacul@yahoo.co.id', '*', 'Others', 'Others', '*', '0000-00-00 00:00:00', NULL, NULL),
(115, 'Sebastian Stefanus Sumantri', 'Pria', 'Jakarta', '1997-03-26', 'Jakarta', 'Jalan Tanah Merdeka 5 Ciracas Jaktim', 'Belum Menikah', 22, 'S1', 'Manajemen', 'Senat', 'Osis', '85711487758', 'stefanus.sumantri@gmail.com', 'Instagram', '', 'stephen.soemantri', '', 'Others', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(116, 'Elisa Alwiyah', 'Wanita', 'Luar Jakarta', '1997-07-22', 'Jakarta', 'menara Latumeten lantai 1/Ac tower A , grogol, Jakarta Barat', 'Belum Menikah', 22, 'S1', 'Akuntansi', 'N/A', 'N/A', '83805857661', 'elishaalwiyah@gmail.com', 'Facebook', 'Instagram', 'Elisha Alwiyah', 'Alwiyahelisha', 'Belum Bekerja', 'Others', 'tdk bekerja', '0000-00-00 00:00:00', NULL, NULL),
(117, 'M.Sahlan Assidiq', 'Pria', 'Luar Jakarta', '1996-02-24', 'Luar', 'Rawa bambu bulak , Kel.Kalibaru , Kec.Medan Satria , Kota Bekasi', 'Belum Menikah', 22, 'S1', 'Manajemen', 'N/A', 'N/A', '895328122520', 'Kittyassidiq24@gmail.com', 'Facebook', 'Instagram', 'Sahlanasidiq@yahoo.co.id', 'Sahlan assidiq', 'Belum Bekerja', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(118, 'Diena saridewi putrowati', 'Wanita', 'Jakarta', '1982-10-06', 'Jakarta', 'Jln. Komodor Halim Perdanakusuma RT.004/01 No. 25 KEBON PALA Makasar Jakarta Timur', 'Menikah', 11, 'S1', 'Manajemen', 'Maaf ya saya lupaa', '', '0888.0803.871', 'dienasaridewi1804@gmail.com', 'Facebook', 'Instagram', 'Diena saridewi', 'Diena saridewi', 'Others', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(119, 'Veronika Septiani Hutapea', 'Wanita', 'Jakarta', '1996-04-09', 'Jakarta', 'jl.waru 5 no 200', 'Belum Menikah', 22, 'S1', 'Manajemen', 'N', 'N', '85894605531', 'veronicaseptiani90@gmail.com', 'Facebook', 'fredkay.style@gmial.com', 'veronicaseptiani90', 'fredkay.style@gmail.com', 'Belum Bekerja', 'Others', '', '0000-00-00 00:00:00', NULL, NULL),
(120, 'Marissa Nurmalasari', 'Wanita', 'Jakarta', '1984-03-25', 'Jakarta', 'Jl. Sentosa 1 No. 11 Komplek TNI-AL Kelapa Gading Barat', 'Menikah', 11, 'S1', 'Akuntansi', 'Anggota Senat', '', '81317475084', 'marissanurmalasari@gmail.com', 'Instagram', '', 'icha_nurmalasari', '', 'Others', 'Others', 'Tidak Bekerja', '0000-00-00 00:00:00', NULL, NULL),
(121, 'Ripa paojiah ', 'Wanita', 'Luar Jakarta', '1998-09-07', 'Luar', 'Kp. Cidahu Rt. 004/5 Desa, Rahong Kec. Cilaku Kab. Cianjur ', 'Belum Menikah', 24, 'S1', 'Akuntansi', 'N', 'N', '82112807417', 'Rifapauziah81@gmail.com ', 'Facebook', 'Instagram', 'Rifapauziah81@gmail.com ', '@Rifapau ', 'Belum Bekerja', 'Others', 'Tidak bekerja ', '0000-00-00 00:00:00', NULL, NULL),
(122, 'Rupa melati', 'Wanita', 'Jakarta', '1999-03-05', 'Jakarta', 'Jl. Pisangan Lama III rt. 06 rw. 08 no. 38B', 'Belum Menikah', 24, 'S1', 'Akuntansi', 'UKMI', '', '81584031028', 'rupamelati@gmail. com', 'Instagram', '', '@rupa melati', '', 'Belum Bekerja', 'Others', '* ', '0000-00-00 00:00:00', NULL, NULL),
(123, 'topan suryana', 'Pria', 'Jakarta', '1982-11-10', 'Jakarta', 'Jl batu sari no18 rt11 rw 02 kel batu ampar kec kramat jati jaktim', 'Menikah', 11, 'S1', 'Manajemen', 'Senat mahasiswa fe unbor', '', '81585895775', 'topan51@gmail.com', 'Facebook', 'topan suryana', 'N/A', 'N/A', 'Bekerja', 'Karyawan Swasta', 'pt pertamina training n consulting', '0000-00-00 00:00:00', NULL, NULL),
(124, 'Muhammad Benny Nasution', 'Pria', 'Luar Jakarta', '1996-07-29', 'Jakarta', 'Jl. Pangkalan Jati, Cipinang Melayu. Jakarta Timur', 'Belum Menikah', 21, 'S1', 'Manajemen', 'Ketua HMJM', 'Ketua Umum PB HMMI', '82165699998', 'Mubenzt22@gmail.com', 'Facebook', 'Mhd. Benny Nasution', 'Tidak ada', 'Tidak ada', 'Belum Bekerja', 'Others', 'Belum Bekerja', '0000-00-00 00:00:00', NULL, NULL),
(125, 'Juli Kurniasih', 'Wanita', 'Jakarta', '1980-07-02', 'Luar', 'Perumnas 2 Bekasi Selatan', 'Menikah', 7, 'S1', 'Akuntansi', 'Karang Taruna tingkat Kelurahan', 'SMFE UB', '81298703545', '-', 'Facebook', 'july.kurniasih', 'n/a', '', 'Others', 'Others', 'tdk bekerja', '0000-00-00 00:00:00', NULL, NULL),
(126, 'A. Hadi Rosyidi', 'Pria', 'Luar Jakarta', '1980-01-01', 'Luar', 'Cluster Nata Garden Jati Luhur Jati Asih', 'Menikah', 7, 'S1', 'Akuntansi', 'SM FE UB', 'UKMI', '81299429428', 'hadi.pip@gmail.com', 'Facebook', 'Abdul Hadi Rosyidi', 'N/A', 'N/A', 'Bekerja', 'Karyawan Swasta', 'PT. Beton Konstruksi Wijaksana', '0000-00-00 00:00:00', NULL, NULL),
(127, 'Muhammad Sholeh Aminudin', 'Pria', 'Jakarta', '1995-08-19', 'Jakarta', 'Jl.kemayoran gempol jakarta pusat', 'Belum Menikah', 21, 'S1', 'Manajemen', 'Senat mahasiswa', '', '81291603175', 'M.sholeh.aminudin@gmail.com', 'Instagram', '', 'Amny4171_', '@KGR_ammy', 'Bekerja', 'Karyawan Swasta', 'PT JOBLINK MANDIRI', '0000-00-00 00:00:00', NULL, NULL),
(128, 'Zuhelmi', 'Pria', 'Jakarta', '2018-08-19', 'Jakarta', 'Jalan Kebon Nanas Selatan II No. 10 RT/RW 017/08, Kel. Cipinang Cempedak, Kec. Jatinegara, Jakarta Timur', 'Belum Menikah', 19, 'S1', 'Akuntansi', 'Departemen Humas SMFE UB\nSekretaris BPM SMFE UB', 'Ketua Bidang PTKP HMI Komisariat Ekonomi Borobudur\nKetua Bidang PTKP Koordinator Komisariat Borobudur\nSekretaris Umum HMI Cabang Jakarta Timur\nKetua Umum HMI Cabang Jakarta Timur', '81291481948', 'zuhelmitanjung1908@gmail.com', 'Facebook', 'Instagram', 'Zuhelmi Tanjung', 'zuhelmitanjung1908', 'Belum Bekerja', 'Others', 'tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(129, 'Stenli oktavianus', 'Pria', 'Jakarta', '1995-10-24', 'Jakarta', 'Kp. Kramat bahagia rt008/009 grogol petamburan', 'Belum Menikah', 22, 'S1', 'Manajemen', 'Senat eokomi borobudur', 'HMJM', '83807882266', 'Stenlioktaavianus@gmail.com', 'Facebook', 'Instagram', 'Stenlirelisuthend', 'Stenliotv', 'Belum Bekerja', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(130, 'Witri Handayani', 'Wanita', 'Luar Jakarta', '1993-12-13', 'Jakarta', 'Jln.Ciangsa, cluster Nuri blok SD 5 nomor 10 kab.bogor Jawa barat', 'Belum Menikah', 22, 'S1', 'Manajemen', 'Departemen Pendidikan Senat FEUB periode 2017/2018', '', '87786793853', 'Handayani.witri13@gmail.com', 'Facebook', 'Instagram', 'Witri handayani', 'handayani.witri13', 'Belum Bekerja', 'Others', 'Belum bekerja', '0000-00-00 00:00:00', NULL, NULL),
(131, 'Yuni Rahmawati', 'Wanita', 'Luar Jakarta', '1996-10-14', 'Jakarta', 'Jl. Pahlawan revolusi rt6/rw12, pondok bambu, durensawit, jakarta timur', 'Belum Menikah', 22, 'S1', 'Akuntansi', ' Pengurus senat', '', '81223209499', 'yunirahma954@gmail.com', 'Facebook', 'Instagram', 'Ayuni rahma', 'rahma. Ayuni', 'Belum Bekerja', 'Others', 'Belum bekerja', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tbl_user` (`id_user`, `nama`, `kelamin`, `tempat_lahir`, `tgl_lahir`, `prov_domisili`, `alamat`, `status_nikah`, `angkatan`, `pend_terakhir`, `jurusan`, `peng_organisasi`, `peng_organisasil`, `tlpn`, `email`, `sos_aktif`, `facebook`, `instagram`, `twitter`, `val_kerja`, `status_kerja`, `tempat_kerja`, `create`, `update`, `delete`) VALUES
(132, 'Dicky wahyu prasetyo', 'Pria', 'Luar Jakarta', '1997-02-24', 'Jakarta', 'Villa nusa indah 2 blok v 11 no 5', 'Belum Menikah', 22, 'S1', 'Manajemen', 'N/A', 'N/A', '81617717600', 'dickyhalo61@gmail.com', 'Facebook', 'Instagram', 'Dicky Wahyu Prasetyo', '@dickyprasetyo24', 'Belum Bekerja', 'Others', 'Tdk berkerja', '0000-00-00 00:00:00', NULL, NULL),
(133, 'Fajar Wahyudi', 'Pria', 'Luar Jakarta', '2018-07-15', 'Jakarta', 'Budi Harapan 2  jakarta timur', 'Belum Menikah', 22, 'S1', 'Manajemen', 'HMI', 'DM22', '87786226426', 'Yudhiewahyudi1@gmail.com ', '', 'fajar_brandals', '@Fajar_wahyudi97', '', 'Belum Bekerja', 'Others', '', '0000-00-00 00:00:00', NULL, NULL),
(134, 'Novita Wizayani', 'Wanita', 'Jakarta', '1997-03-26', 'Jakarta', 'Jalan masjid tanah 80 rt003 rw009 no.37 Kelurahan Klender kecamatan Duren Sawit Jakarta Timur ', 'Belum Menikah', 22, 'S1', 'Manajemen', 'Departemen logistik senat mahasiswa fakultas ekonomi 2017-2018', 'Pengurus UKM Islam ', '8811175523', 'novitawizayani@gmail.com', 'Facebook', 'Instagram', 'novita wizayani ', 'novita_wizayani', 'Belum Bekerja', 'Others', 'tidak bekerja ', '0000-00-00 00:00:00', NULL, NULL),
(135, 'Ketut adi widiartana', 'Pria', 'Luar Jakarta', '1996-12-17', 'Jakarta', 'Jalan Kalimalang, saluran inspeksi,jembatan hitam', 'Belum Menikah', 22, 'S1', 'Manajemen', 'N/A', 'N/A', '85776135717', 'ketut.adiwidi@gmail.com', 'Facebook', 'Ketut.adiwidiartana7@facebook.com', '@Ketut_adi_widiartana', '', 'Belum Bekerja', 'Others', 'Tdk bekerja', '0000-00-00 00:00:00', NULL, NULL),
(136, 'AULIA AKNA RAMADANI', 'Wanita', 'Luar Jakarta', '1998-01-22', 'Luar', 'Jalan kepala pasar\nProvinsi bengkulu kab kaur selatan.', 'Belum Menikah', 22, 'S1', 'Akuntansi', 'HMI', '', '85813570772', 'Auliaaknaramadani98@gmail.com', 'Instagram', '', 'Auliaakanaramadani98', '', 'Belum Bekerja', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(137, 'Neli Indrayeni', 'Wanita', 'Luar Jakarta', '1999-04-19', 'Luar', 'Petuguran rt/rw 02/02, punggelan, banjarnegara, jawa tengah', 'Belum Menikah', 23, 'S1', 'Akuntansi', 'Pramuka', 'Ukmi', '81380545460', 'neliindrayeni7867@gmail.com', 'Instagram', 'Neli Indrayeni', 'nelgonel19', '', 'Belum Bekerja', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(138, 'Dwi Nur Handayani', 'Wanita', 'Luar Jakarta', '1998-03-17', 'Luar', 'Kp.  Rawa Aren jaya kel aren jaya kec bekasi timur', 'Belum Menikah', 23, 'S1', 'Akuntansi', 'PMR ', '', '8976452458', 'Handayanidwinur55@yahoo.com', 'Instagram', '', 'Dwiinurhandayani', '', 'Others', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(139, 'Rhamadani', 'Wanita', 'Luar Jakarta', '1998-01-26', 'Luar', 'Jambi', 'Belum Menikah', 23, 'S1', 'Akuntansi', 'Pramuka.ukmi', '', '82374936310', 'Danirhamadani@gmail.com', 'Instagram', '', 'Rhamadani94', '', 'Belum Bekerja', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(140, 'Dean Rahma Anggraeni', 'Wanita', 'Jakarta', '1997-06-04', 'Jakarta', 'jalan pahlawan revolusi jakarta timur', 'Belum Menikah', 21, 'S1', 'Akuntansi', 'HMI, IMAI, Paskibra Jaktim, HMJA', '', '87788732569', 'deanrahma6@gmail.cok', 'Facebook', 'Instagram', 'Dean Rahma Anggraeini', 'deanrahma6', 'Belum Bekerja', 'Others', 'tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(141, 'Dyan atika suri', 'Wanita', 'Jakarta', '1999-03-27', 'Jakarta', 'Jl dr saharjo rt 07/06 no 30 .kel manggarai kecamatan tebet', 'Belum Menikah', 23, 'S1', 'Manajemen', 'N/A', '', '81281477013', 'Dyan.atsur@gmail.com', 'Instagram', '', 'Dy.atsur@gmail.com', '', 'Belum Bekerja', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(142, 'Rizqi aeni Nabila ', 'Wanita', 'Luar Jakarta', '1999-03-10', 'Jakarta', 'Jl swadaya kp curug No 48 c rt 004/008 pondok kelapa ,duren sawit ,Jakarta timur', 'Belum Menikah', 24, 'S1', 'Manajemen', 'OSIS ', '', '81354518585', 'Nabilarizky81@yahoo.com', 'Facebook', 'Instagram', 'Nabila', 'R Nabila', 'Belum Bekerja', 'Others', 'Belum bekerja', '0000-00-00 00:00:00', NULL, NULL),
(143, 'SLAMET SUHARYANTO', 'Pria', 'Jakarta', '1980-04-24', 'Jakarta', 'JL. Kebon kelapa Rt 11 / 11 no.17 UKS 13120', 'Menikah', 7, 'S1', 'Manajemen', 'SMFE -UB', '', '0813 82341000', 'slave240480@gmail.com', 'Facebook', 'slamet_suharyanto@yahoo.com', 'slamet_suharyanto@yahoo.com', 'slave240480@gmail.com', 'Wiraswasta', 'Wiraswasta', 'PT.Berdikari Slamet', '0000-00-00 00:00:00', NULL, NULL),
(144, 'Zefanya Josepyne Riyanto', 'Wanita', 'Jakarta', '2000-02-18', 'Jakarta', 'Jl. Perjuangan 2 No 107, Jakarta Timur', 'Belum Menikah', 24, 'S1', 'Akuntansi', 'osis', 'futsal putri', '8989369079', 'zefanyajspn@gmail.com', 'Facebook', 'Instagram', 'Zefanya Josepyne Riyanto', 'zefanyajspn', 'Bekerja', 'Others', 'Hang Tuah Kopitiam', '0000-00-00 00:00:00', NULL, NULL),
(145, 'RUT NATAL ULI GIRSANG', 'Wanita', 'Luar Jakarta', '1995-12-01', 'Jakarta', 'Jln. Pondok bambu batas Rt. 004 Rw. 012, Pondok bambu, Duren sawit Jakarta Timur ', 'Belum Menikah', 21, 'S1', 'Manajemen', 'N/A', 'N/A', '81218978623', 'Yuthgirsang@gmail.com', 'Facebook', 'Instagram', 'https://m.facebook.com/ruth.girsang.5?ref=bookmarks', 'instagram.com/yuthgirsang', 'Belum Bekerja', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(146, 'Rumi', 'Wanita', 'Jakarta', '1980-07-11', 'Jakarta', 'Rawamangun', 'Menikah', 7, 'S1', 'Akuntansi', 'Senat', '', '81314404080', 'Zahra.rumie@gmail.com', 'Facebook', 'Zahra arhafi', 'Zahra arhafi', '', 'Bekerja', 'Others', 'Pt amarta multi sinergy', '0000-00-00 00:00:00', NULL, NULL),
(147, 'Indah Nirwana Sari', 'Wanita', 'Jakarta', '1982-02-10', 'Luar', 'Kampung Dua Rt. 006/015 no. 24 Jakasampurna, Bekasi Barat', 'Menikah', 10, 'S1', 'Akuntansi', 'Komisi Evaluasi BPM ', 'Ketum Kohati HMI Koordinator Komisariat Universitas Borobudur', '8129062150', 'indahnirwanasari@yahoo.co.id', 'Facebook', 'Indah Nirwana Sari Kusuma', '@indahnirwanasari', '@neerwana', 'Wiraswasta', 'Wiraswasta', '', '0000-00-00 00:00:00', NULL, NULL),
(148, 'Abdul Sutri Atmojati', 'Pria', 'Jakarta', '1994-12-01', 'Jakarta', 'Jl. Tambora Raya', 'Belum Menikah', 21, 'S1', 'Manajemen', 'N/A', 'N/A', '82298511701', 'abd.sutriatmojati@gmail.com', 'Facebook', 'Instagram', 'sutryatmaja@yahoo.com', 'bdulss', 'Others', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(149, 'Irfan Rumaday', 'Pria', 'Jakarta', '1993-09-09', 'Luar', 'Kp.empu ds.situsari kec.cileungsi kab.bogor', 'Belum Menikah', 21, 'S1', 'Manajemen', 'Menwa', '', '82136325999', 'Rumadayirfan09@gmail.com', 'Instagram', '', 'Irfan_rumaday09', '', 'Bekerja', 'Others', 'PT.map aktif adiperkasa,Tbk', '0000-00-00 00:00:00', NULL, NULL),
(150, 'Muhammad Bayu Mokoagow', 'Pria', 'Jakarta', '1995-03-09', 'Jakarta', 'Jl raya hankam no 288', 'Belum Menikah', 21, 'S1', 'Akuntansi', 'Menwa', 'Ukmi', '82210158436', 'Baymoko@gmail.com', 'Instagram', '', 'Mokoagowbayu', '', 'Bekerja', 'Karyawan Swasta', 'KAP DSI', '0000-00-00 00:00:00', NULL, NULL),
(151, 'Kiky dwi syaputra ', 'Pria', 'Luar Jakarta', '1982-05-20', 'Luar', 'Jl asparagas 1 no 3 rumbai pekanbaru riau', 'Menikah', 9, 'S1', 'Akuntansi', 'WaSekjen smfe ub', 'Bpm fe ub', '82170062632', 'Kikidwi@yahoo.com', 'Facebook', 'Instagram', 'Kikidwi@yahoo.com', 'Kikidwi@yahoo.com', 'Wiraswasta', 'Wiraswasta', 'Firdaus Catering ', '0000-00-00 00:00:00', NULL, NULL),
(152, 'Lisa nurdiansyah', 'Wanita', 'Jakarta', '1994-07-06', 'Luar', 'TAMAN TRIDAYA INDAH 2, blok J 07 No. 30, Desa TRIDAYA SAKTI Kec.tambun selatan - bekasi 17510', 'Menikah', 21, 'S1', 'Manajemen', 'Ketua HMJM ', '', '81218620728', 'Liisaazel@yahoo.com', 'Facebook', 'Instagram', 'Liisa prasatya', 'Liisaprasatya', 'Wiraswasta', 'Wiraswasta', 'Rm.citra bahagia', '0000-00-00 00:00:00', NULL, NULL),
(153, 'Wafi Akhsan', 'Pria', 'Jakarta', '1995-03-17', 'Luar', 'Kp. Turi Jaya, Taruma Jaya, Bekasi', 'Belum Menikah', 21, 'S1', 'Manajemen', 'Dep. Minat Bakat SMFE UB', 'Kabid PA HMI Cab. Jaktim Komisariat Ekonomi Univ. Borobudur', '82213374345', 'wafiakhsan@gmail.com', 'Twitter', '', 'Brudun', 'umatjelata', 'Others', 'Others', 'Belum bekerja', '0000-00-00 00:00:00', NULL, NULL),
(154, 'Silvi Sri Arsyika', 'Wanita', 'Luar Jakarta', '1995-02-25', 'Luar', 'Girisetra RT/RW 002/002 Desa Kalipucang Kecamatan Kalipucang Kabupaten Pangandaran', 'Belum Menikah', 21, 'S1', 'Akuntansi', 'N/A', '', '83875096530', 'arsyika25@gmail.com', 'Facebook', 'Instagram', 'silvi sri arsyika', 'silviarsyika', 'Bekerja', 'Karyawan Swasta', 'PT. Hanson International Tbk', '0000-00-00 00:00:00', NULL, NULL),
(155, 'Dewi Rohmawati', 'Wanita', 'Luar Jakarta', '1996-07-14', 'Jakarta', 'Jl.Anugrah Jatimakmur Pondok Gede,Bekasi', 'Belum Menikah', 21, 'S1', 'Manajemen', '1.Departemen Kesejahteraaan Senat FE UB \n2.KETAPEL DM-22', '', '85600913214', 'dewi.rohmawati67@yahoo.co.id', 'Instagram', '', 'dewiirohma', '', 'Bekerja', 'Karyawan Swasta', 'PT.Dinamika Bintang Kejora', '0000-00-00 00:00:00', NULL, NULL),
(156, 'MUHAMMAD REZA PAHLEVI', 'Pria', 'Jakarta', '1995-12-29', 'Jakarta', 'Jl Tegalan 1B', 'Belum Menikah', 21, 'S1', 'Manajemen', 'N/A', 'N/A', '82190771921', 'rezapahlevi40@yahoo.co.id', 'Instagram', '', '@ezadobs', '', 'Bekerja', 'Karyawan Swasta', 'PT MUTIARA SUNNAH', '0000-00-00 00:00:00', NULL, NULL),
(157, 'FACHRY SETIAWAN', 'Pria', 'Jakarta', '1983-09-30', 'Jakarta', 'Perumahan Bekasi Timur 5 claster Jasmine J1 no. 40 Rt. 006 Rw. 008 Kelurahan. Sumur Batu Kecamatan. Bantargebang', 'Menikah', 11, 'S1', 'Manajemen', 'Sekum SMFE UB', 'Ketua Remaja Islam Masjid Asy syfaa', '81385680082', 'setiawanfachry@yahoo.com', 'Facebook', 'setiawanfachry@yahoo.com', 'setiawanfachry@yahoo.com', '', 'Bekerja', 'PNS', 'Kementerian Agama RI', '0000-00-00 00:00:00', NULL, NULL),
(158, 'ARIF REZTANGI HIMAWAN', 'Pria', 'Luar Jakarta', '1982-04-03', 'Luar', 'Grand Mutiara Gading Cikarang Barat kab.Bekasi', 'Menikah', 10, 'S1', 'Akuntansi', 'Senat Mahasiswa FE UB', 'N/A', '81318353216', 'Arif.rezta@gmail.com', 'Facebook', 'Instagram', 'Arif Reztangi Himawan', 'Arif_reztangi', 'Bekerja', 'Karyawan Swasta', 'PT. Yamaha Motor Electronics Indonesia', '0000-00-00 00:00:00', NULL, NULL),
(159, 'Yudia fitri', 'Wanita', 'Jakarta', '1979-08-26', 'Jakarta', 'Jln. Merpati 8 no.109 Rt 04/Rw 09\nKav.harapan kita\nKel.harapan jaya bekasi utara 17124', 'Menikah', 8, 'S1', 'Akuntansi', 'KARTU...', 'Anggota SMFEUB', '81585219926', 'Males...', 'Facebook', 'Yudiafitrifnf', 'Dah g aktif', 'Dah kebanyakan', 'Wiraswasta', 'Wiraswasta', 'Dirumah ajah', '0000-00-00 00:00:00', NULL, NULL),
(160, 'Widy', 'Pria', 'Luar Jakarta', '1980-10-24', 'Luar', 'Surabaya', 'Menikah', 11, 'S1', 'Manajemen', 'Tidak ada', 'Tidak ada', '81336176866', 'griyasanjaya9@gmail.com', 'Instagram', 'Tidak punya', 'Tidak punya', 'Tidak punya', 'Belum Bekerja', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(161, 'Inda Mauliana', 'Wanita', 'Luar Jakarta', '1996-07-23', 'Jakarta', 'Jl jagur IV kec makassar kel cipinang melayu (kost fatimah azzahra lt.2)', 'Belum Menikah', 21, 'S1', 'Manajemen', 'Himpunan Mahasiswa Manajemen Indonesia', '-', '81234886576', 'Indamauliana21@yahoo.com', 'Instagram', 'Tdk ada', 'Indamauliana', 'Tdk ada', 'Belum Bekerja', 'Others', 'Tdk bekerja', '0000-00-00 00:00:00', NULL, NULL),
(162, 'Joko Ismanto', 'Pria', 'Luar Jakarta', '1982-05-25', 'Jakarta', 'Malaka Residence Blok A No. 9 RT. 009/008 Kel. Munjul Kec. Cipayung Jakarta Timur 13850', 'Menikah', 11, 'S1', 'Manajemen', 'Anggota SMFE-UB', 'Anggota HMJM', '81211519995', 'alzillal@yahoo.com', 'Instagram', '', 'Jokoismanto', '', 'Wiraswasta', 'Wiraswasta', 'PT. Basakaara Citra Adipersada', '0000-00-00 00:00:00', NULL, NULL),
(163, 'Toni Eka Putra', 'Pria', 'Luar Jakarta', '2018-07-24', 'Luar', 'Perumahan Citra Indah City Blok AE.00 No.18', 'Menikah', 8, 'S1', 'Manajemen', 'HMI', 'Khilafatul Muslimin', '811313169', 'tonnyozora@asia.com', 'Tonny Ozora', 'tonnyozora', 'Twitter', '', 'Wiraswasta', 'Wiraswasta', '', '0000-00-00 00:00:00', NULL, NULL),
(164, 'Dian lindya vinci', 'Wanita', 'Luar Jakarta', '1980-12-27', 'Luar', 'Jl dewi sartika no.10 RT/RW 007/08 Kel.Margahayu Kec.Bekasi Timur 17113', 'Menikah', 8, 'S2', 'Akuntansi', 'SMFE-UB', '', '81218169541', 'dlvinci27@gmail.com', 'Instagram', '', 'dlvinci27', '', 'Bekerja', 'Karyawan Swasta', 'PT BANK SYARIAH MANDIRI', '0000-00-00 00:00:00', NULL, NULL),
(165, 'Sulistiyowati', 'Wanita', 'Luar Jakarta', '1979-03-26', 'Other', 'Perumnas 1 bekasi', 'Menikah', 7, 'S1', 'Akuntansi', 'N/A', '', '81318075590', 'dsulistiyowati@ymail.com', 'Facebook', 'Sulistiyowati Ku', ' N/A', '', 'Bekerja', 'Karyawan Swasta', 'PT. SELTECH UTAMA', '0000-00-00 00:00:00', NULL, NULL),
(166, 'NOVITA CHONDRO DEWI', 'Wanita', 'Jakarta', '1980-05-11', 'Jakarta', 'PULO GEBANG PERMAI BLOK C7 NO.19 CAKUNG JAKARTA TIMUR', 'Menikah', 17, 'S1', 'Manajemen', 'Bendahara BPM', '', '8567891919', 'vitnfun2@gmail.com', 'Facebook', 'Instagram', '@novita chondro dewi', '@vitaaynanuwaisshop', 'Others', 'Others', 'tdk bekerja', '0000-00-00 00:00:00', NULL, NULL),
(167, 'Den jaza kurniawan', 'Pria', 'Luar Jakarta', '1977-10-27', 'Other', 'Kp kademangan rt 06/03 kel kademangan krc setu kota tangsel banten', 'Menikah', 9, 'S1', 'Manajemen', 'N/A', '', '87883994808', 'adenkurniawan1977@gmail.com', 'Instagram', '', 'Denjakurniawan', '', 'Wiraswasta', 'Wiraswasta', 'Keep revolusi', '0000-00-00 00:00:00', NULL, NULL),
(168, 'Komar Setiawan', 'Pria', 'Luar Jakarta', '2018-05-06', 'Jakarta', 'Kebagusan, Pasar Minggu Jakarta Selatan ', 'Belum Menikah', 7, 'S1', 'Manajemen', 'Senat FEUB', '', '85720948080', 'Komarsetiawan@gmail.com', 'Facebook', 'Komar Setiawan', 'Komar_setiawan', 'Setiasaja', 'Bekerja', 'Karyawan Swasta', '', '0000-00-00 00:00:00', NULL, NULL),
(169, 'Akhmad pauji', 'Pria', 'Luar Jakarta', '1980-02-21', 'Jakarta', 'Grand wijaya center blok c36 Jakarta selatan', 'Belum Menikah', 9, 'S2', 'Manajemen', 'Hmi', 'Hmi', '81295941990', 'Fauzi777sic@gmail.com', 'Instagram', 'Beruntung777', 'Fauzi777', '', 'Wiraswasta', 'Wiraswasta', 'PT. Smart Indoconsulting', '0000-00-00 00:00:00', NULL, NULL),
(170, 'Endah susanti', 'Wanita', 'Jakarta', '1980-10-05', 'Jakarta', 'Komplek PTB duren sawit jakarta timur', 'Menikah', 7, 'S1', 'Akuntansi', 'Senat', '', '81297098001', 'susanti.endah80@yahoo.com', 'Facebook', 'endah susanti', 'gak punya', '', 'Others', 'Others', 'Ibu rmh tangga', '0000-00-00 00:00:00', NULL, NULL),
(171, 'Rina Saptaningsih', 'Wanita', 'Jakarta', '1981-01-15', 'Other', 'Taman Banten Lestari Blok D 2 C No. 16 RT 006/021, Serang - Banten', 'Menikah', 8, 'S1', 'Manajemen', '#1 Wakil Bendara Umum SMFE UB ', '', '81519994872', 'rina_saptaningsih@yahoo.com', 'Facebook', 'Instagram', 'Rina Nesya Uze', 'rinanesyaraffauze', 'Wiraswasta', 'Wiraswasta', 'Durian Mania', '0000-00-00 00:00:00', NULL, NULL),
(172, 'Sri Rejeki', 'Wanita', 'Luar Jakarta', '1996-12-17', 'Jakarta', 'Jl.Pisangan Lama 2 Rt/Rw :07/03 No.8  , Pisangan Timur ', 'Belum Menikah', 22, 'S1', 'Akuntansi', 'N/A', '', '83891663043', 'srirejeki1712@gmail.com', 'Facebook', 's.rejeki17@yahoo.com', 's.rejeki17@yahoo.com', '', 'Belum Bekerja', 'Others', 'tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(173, 'Bonny Rakhmanto ', 'Pria', 'Luar Jakarta', '2018-01-20', 'Jakarta', 'Komp BDN Jatiwaringin Pondok Gede Bekasi', 'Menikah', 5, 'S2', 'Akuntansi', 'ISMEI', 'HMI', '8161426694', 'rheno_09@yahoo.com', 'Instagram', '', 'tidak ada', '', 'Bekerja', 'Others', 'CEC', '0000-00-00 00:00:00', NULL, NULL),
(174, 'Kokom Komalasari', 'Wanita', 'Jakarta', '1982-02-12', 'Luar', 'Kp kambangan rt 010/003 Banjarsari ciawi bogor', 'Menikah', 9, 'S1', 'Akuntansi', 'Senat FEUB', '', '85778460688', 'ekamalla321@gmail.com', 'Facebook', 'kokom komallasari', 'tdk ada', '', 'Wiraswasta', 'Wiraswasta', 'wiraswasta', '0000-00-00 00:00:00', NULL, NULL),
(175, 'Fajar dikra pratama', 'Pria', 'Jakarta', '1986-09-05', 'Jakarta', 'Jln empu gandring no 83 tangerang', 'Menikah', 13, 'S1', 'Manajemen', 'Ketua BPM fe-UB', '', '812811003288', 'Fajar_dp20@yahoo.com', 'Facebook', 'Twitter', 'Fajar_dp20@yahoo.com', 'Fajar_dp20@yahoo.com', 'Bekerja', 'Karyawan Swasta', '786printing', '0000-00-00 00:00:00', NULL, NULL),
(176, 'Jejen jaelani', 'Pria', 'Jakarta', '1998-05-28', 'Jakarta', 'Jakarta timur', 'Belum Menikah', 23, 'S1', 'Manajemen', 'N', 'A', '82297400238', 'jejenjaelani720@gmail.com', 'Facebook', 'Instagram', 'Jejen setiawan', 'jjn.stwnn', 'Belum Bekerja', 'Others', 'Blm bekerja', '0000-00-00 00:00:00', NULL, NULL),
(177, 'fernando hadi yulisar', 'Pria', 'Luar Jakarta', '1998-02-12', 'Luar', 'Jl raya jatibening rt 01/03 kel.jatibening baru kec.pondok gede', 'Belum Menikah', 23, 'S1', 'Manajemen', 'N/A', 'N/A', '895616768235', 'fernandohadiyulisar16@gmail.com', 'Facebook', 'Instagram', 'fernandohadiyulisar', 'fernandohadiyulisar', 'Belum Bekerja', 'Others', 'Tdk bekerja', '0000-00-00 00:00:00', NULL, NULL),
(178, 'Dian febriani putri', 'Wanita', 'Jakarta', '1999-02-22', 'Jakarta', 'Jl. Nurul iman', 'Belum Menikah', 23, 'S1', 'Manajemen', 'Padus', 'Osis', '87732980682', 'dianfebriani44@gmail.com', 'Instagram', '', 'dianfebrianiputry', '', 'Others', 'Others', '-', '0000-00-00 00:00:00', NULL, NULL),
(179, 'Fitri Yani', 'Wanita', 'Jakarta', '1997-02-08', 'Jakarta', 'Jalan kramat I lubang buaya', 'Belum Menikah', 23, 'S1', 'Akuntansi', 'HMPA STUPALA', '', '89698189960', 'fitrianiajja97@gmail.com', 'Instagram', '', 'fitryyani08', '', 'Belum Bekerja', 'Others', 'Blm bekerja', '0000-00-00 00:00:00', NULL, NULL),
(180, 'Nurviani Kusuma Dewi', 'Wanita', 'Jakarta', '1998-04-03', 'Jakarta', 'Jakarta Timur', 'Belum Menikah', 23, 'S1', 'Manajemen', 'Wakil ketua ekskul modern dance waktu SMA', '', '81314333889', 'nurvianikd03@yahoo.com', 'Instagram', '', '@nurviani.kd', '', 'Belum Bekerja', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(181, 'fernando rizki', 'Pria', 'Luar Jakarta', '1997-06-20', 'Luar', 'padang sumatera barat', 'Belum Menikah', 24, 'S1', 'Manajemen', 'n', 'n', '82287165440', 'fernando.rizki.jambak@gmail.com', 'Instagram', '', 'fernando rizki jambak', '', 'Belum Bekerja', 'Others', 'tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(182, 'Feby rahmadhan putra', 'Pria', 'Luar Jakarta', '1998-02-19', 'Luar', 'PONDOK BABELAN INDAH jln. Palapa 2 blok c 651 rt10/rw008', 'Belum Menikah', 23, 'S1', 'Manajemen', 'Pramuka Saka Bhayangkara ', 'Paskibra', '895378518028', 'Febyrahmadhan19@gmail.com ', 'Facebook', 'Instagram', 'Putrarahmadhan', 'Putrarahmadhan19', 'Bekerja', 'Others', 'UBER DAN GOJEK', '0000-00-00 00:00:00', NULL, NULL),
(183, 'TRI ADI', 'Pria', 'Jakarta', '1994-02-14', 'Jakarta', 'Kelapa Gading Jakarta Utara', 'Belum Menikah', 21, 'S1', 'Manajemen', 'Ketua UKMI', 'Bendahara BPM', '81398931943', 'Adidwimanurung@Gmail.com', 'Instagram', '', 'Triadi.m22', '', 'Belum Bekerja', 'Others', 'Tdk bekerja', '0000-00-00 00:00:00', NULL, NULL),
(184, 'Rikrik Riesmawan', 'Pria', 'Luar Jakarta', '1978-04-22', 'Luar', 'Jl Sinom 4, no. 1 Bandung', 'Menikah', 5, 'S2', 'Akuntansi', 'N/A', '', '8179247911', 'rikrik.riesmawan@gmail.com ', 'Facebook', '', 'Omrikz', '', 'Bekerja', 'Karyawan Swasta', 'Nibras Group', '0000-00-00 00:00:00', NULL, NULL),
(185, 'Delariska Potabuga', 'Wanita', 'Luar Jakarta', '1990-10-22', 'Other', 'Jl. Raya hankam Pondok Gede. Bekasi', 'Belum Menikah', 17, 'S1', 'Akuntansi', 'Bendahara Umum Senat Mahasiswa FE-UB Tahun 2011 - 2012', 'Departemen Humas Senat Mahasiswa FE-UB Tahun 2010 - 2011', '81380488385', 'Delatan90@gmail.com', 'Facebook', 'Instagram', 'Riri Potabuga Tan', 'ririptan_', 'Others', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(186, 'Erlinda sarah wati', 'Wanita', 'Luar Jakarta', '1998-12-15', 'Jakarta', 'Jln.taman bukit duri rt 01 rw 12', 'Belum Menikah', 23, 'S1', 'Manajemen', 'N', '', '62817532752', 'Erlindasarah7@gmail.com', 'Instagram', '', 'Erlinda_arek_elek', '', 'Belum Bekerja', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(187, 'Muhamad rajih', 'Pria', 'Jakarta', '1994-08-06', 'Jakarta', 'Jln,budhi dharma rt 002/03', 'Belum Menikah', 21, 'S1', 'Manajemen', 'Hmi', '', '85697516848', 'rajihmuhamad086@gmail.con', 'Facebook', '0', '0', '0', 'Bekerja', 'Karyawan Swasta', 'Pt ,abboott product indonesia', '0000-00-00 00:00:00', NULL, NULL),
(188, 'Lastri puspa sahara', 'Wanita', 'Jakarta', '1986-01-20', 'Other', 'Jl. Titimplik Bandung', 'Menikah', 12, 'S1', 'Manajemen', 'Anggota SMFE univ. Borobudur', 'N', '85795212186', 'Sahara_ku@yahoo.com', 'Facebook', 'Sahara_ku@yahoo.com ', 'Lastri.p.sahara@gmail.com ', '-', 'Wiraswasta', 'Wiraswasta', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(189, 'Putri Arum Sari', 'Wanita', 'Luar Jakarta', '1998-11-29', 'Luar', 'Jati, Kec. BENER, Kab. Purworejo, Jawa Tengah', 'Belum Menikah', 24, 'S1', 'Akuntansi', 'OSIS', 'PMR', '85743170548', 'HarumSari548170@gmail.com', 'Instagram', '', 'Putriarum.29', '', 'Belum Bekerja', 'Others', 'Belum bekerja', '0000-00-00 00:00:00', NULL, NULL),
(190, 'Metha Dwi Apriyanti', 'Wanita', 'Jakarta', '1980-04-12', 'Jakarta', 'Komplek POLRI Munjul No C8 RT010 RW003 kelurahan Munjul Kecamatan Cipayung Jakarta Timur 13850', 'Menikah', 7, 'S2', 'Manajemen', 'SENAT', 'BEM', '81808194646', 'Metha1280@yahoo.co.id', 'Facebook', 'Instagram', 'Metha Dwi Apriyanti', 'Metha Dwi Apriyanti', 'Wiraswasta', 'Karyawan Swasta', 'PT. GAP CAPITAL ', '0000-00-00 00:00:00', NULL, NULL),
(191, 'Ana Rahayu Wulandari', 'Wanita', 'Luar Jakarta', '1986-11-21', 'Jakarta', 'Ciracas RT 03/04 Ciracas Jakarta timur', 'Menikah', 12, 'S1', 'Akuntansi', 'Bendahara senat FE-UB ', '', '81383553131', 'Nabilla.deviana9@gmail.com', 'Facebook', 'Tidak da', 'Tidak ada', 'Tidak ada', 'Others', 'Others', 'Tidak bekerja', '0000-00-00 00:00:00', NULL, NULL),
(192, 'Andri A. Sulaeman', 'Pria', 'Luar Jakarta', '1980-03-08', 'Luar', 'Perum sukaharja telukjambe timur karawang', 'Menikah', 7, 'S1', 'Manajemen', 'N', '', '81281720333', 'andriasulaeman80@gmail.com', 'Facebook', '', 'o', '', 'Bekerja', 'PNS', '*', '0000-00-00 00:00:00', NULL, NULL),
(193, 'Melawati', 'Wanita', 'Jakarta', '1981-11-02', 'Jakarta', 'Komplek Kodam Jaya Kalideres Rt.010/05 K2/213 Kalideres Jakbar', 'Menikah', 10, 'S1', 'Manajemen', 'SMFE', 'Karang Taruna', '85718251146', 'melawati1202@gmail.com', 'Facebook', 'Mela se', 'N/a', 'N/a', 'Wiraswasta', 'Wiraswasta', 'Wiraswasta', '0000-00-00 00:00:00', NULL, NULL),
(194, 'Nurlaila Dwi Afriyani', 'Wanita', 'Jakarta', '1986-04-02', 'Jakarta', 'Perum Asabri Indah, Jatiluhur, Jatiasih, Kota Bekasi', 'Menikah', 13, 'S1', 'Akuntansi', 'Senat Mahasiswa', '', '85691118124', 'yhanie_piry@yahoo.com', 'Facebook', 'Nurlaila Dwi Afriyani', 'tidak aktif', '', 'Bekerja', 'Karyawan Swasta', 'PT CG POWER SYSTEMS INDONESIA', '0000-00-00 00:00:00', NULL, NULL),
(195, 'Eti kusmyati', 'Wanita', 'Luar Jakarta', '1997-07-07', 'Jakarta', 'Kp. Baru kec. Cakung kel. Cakung barat', 'Belum Menikah', 7, 'S1', 'Akuntansi', 'N', 'N', '81383379662', 'Kusmyatieti199@gmail.com ', 'Facebook', 'Instagram', 'Eti kusmyati', 'Eti kusmyati', 'Wiraswasta', 'Karyawan Swasta', 'PT. INDOMARCO PRISMATAMA', '0000-00-00 00:00:00', NULL, NULL),
(196, 'wahyu Palupisari', 'Wanita', 'Jakarta', '1998-08-18', 'Luar', 'Pondok ungu permai blok MM 1 NO. 27', 'Belum Menikah', 23, 'S1', 'Manajemen', 'N/A', '', '81939776583', 'wpalupisari@gmail.com', 'Instagram', '', 'Palupiisari', '', 'Bekerja', 'Karyawan Swasta', 'PT Perdana Solusindo ', '0000-00-00 00:00:00', NULL, NULL),
(197, 'Suciyanto', 'Pria', 'Jakarta', '2018-05-28', 'Jakarta', 'Perum danamon blok A4 No. 14', 'Belum Menikah', 13, 'S1', 'Akuntansi', 'Diklat manargasi', 'Diklat manajemen ', '82111057330', 'Suciyanto86yahoo. Co. Id', 'Facebook', 'Instagram', 'Suciyanto', 'Suciyanto', 'Bekerja', 'Karyawan Swasta', 'Tempo', '0000-00-00 00:00:00', NULL, NULL),
(198, 'Nasfizar guspendri', 'Pria', 'Luar Jakarta', '1975-08-23', 'Luar', 'Lima kaum Batusangkar', 'Menikah', 6, 'S2', 'Akuntansi', 'Ketua Senat mahasiswa FE-UB th 1999-2000', 'FORDEBI', '81267149608', 'nasfizar@iainbatusangkar.ac.id', 'Facebook', 'nasfizar@plasa.com', 'Tidak ada', 'Tidak ada', 'Bekerja', 'PNS', 'Institut Agama Islam Negeri Batusangkar', '0000-00-00 00:00:00', NULL, NULL),
(199, 'Lili Sugiyanto', 'Pria', 'Luar Jakarta', '1980-07-03', 'Luar', 'Rangkasbitung ', 'Menikah', 7, 'S1', 'Manajemen', 'N', '', '85210455210', 'lilisugiyanto8@gmail.com', 'Facebook', 'Lili Sugiyanto', 'Tdk ada', '', 'Bekerja', 'Wiraswasta', 'Wiraswasta', '0000-00-00 00:00:00', NULL, NULL),
(200, 'Rahma Aprilianti', 'Wanita', 'Jakarta', '1983-04-26', 'Jakarta', 'Jakarta', 'Menikah', 10, 'S1', 'Manajemen', 'Senat', '', '85217440366', 'cah_ayu2011@ymail.com', 'Facebook', 'cah_ayu2011@ymail.com', 'cah_ayu2011@ymail.com', '', 'Bekerja', 'PNS', 'Jakarta', '0000-00-00 00:00:00', NULL, NULL),
(201, 'Muhamad Farchan Rafsanjani', 'Pria', 'Luar Jakarta', '2018-10-27', 'Luar', 'Lingkungan pegantungan baru, Cilegon-Banten', 'Belum Menikah', 22, 'S1', 'Manajemen', 'Ketua SMFE Unbor 2017/2018', '', '8121369163', 'Farhan.rafsanjani@yahoo.com', 'Instagram', '', 'farchanrafsanjani', '', 'Belum Bekerja', 'Others', 'tdk bekerja', '0000-00-00 00:00:00', NULL, NULL),
(202, 'Theresia', 'Wanita', 'Jakarta', '1981-06-30', 'Jakarta', 'Klender, Duren Sawit', 'Belum Menikah', 24, 'S1', 'Manajemen', 'KKMK', 'PMKB', '82225458878', 'Theresialie31@gmail.com', 'Facebook', 'Instagram', '', 'Therie8', 'Bekerja', 'Karyawan Swasta', 'Captain& Co.', '0000-00-00 00:00:00', NULL, NULL),
(203, 'Riszki agam phoenna', 'Pria', 'Luar Jakarta', '1995-10-04', 'Jakarta', 'Lubang buaya cipayung jakarta timur gang gorda', 'Belum Menikah', 21, 'S1', 'Manajemen', 'N/A', '', '82162613567', 'Riski.agam1995@gmail.com', 'Facebook', 'Instagram', '', 'RisAgamP', 'Belum Bekerja', 'Others', 'Tdk berkerja', '0000-00-00 00:00:00', NULL, NULL),
(204, 'Novita Sari', 'Wanita', 'Luar Jakarta', '1999-11-08', 'Jakarta', 'Jl. Lingkungan 1 rt05 rw008 kel. Tengah Kec. Kramatjati Jakarta Timur', 'Belum Menikah', 24, 'S1', 'Manajemen', 'OSIS SMP', 'Karang Taruna', '89643624888', 'nvtaasariii@gmail.com', 'Instagram', '', 'NOVITAA__', '', 'Belum Bekerja', 'Others', 'Tdk bekerja ', '0000-00-00 00:00:00', NULL, NULL),
(205, 'Agusman', 'Pria', 'Luar Jakarta', '1982-08-27', 'Luar', 'Medan sumatera utara', 'Menikah', 12, 'S1', 'Manajemen', 'Senat', '', '82164575990', 'agoesman82@gmail.com', 'Facebook', 'Aak agoes', 'Aak agoes', '', 'Bekerja', 'Karyawan Swasta', 'PT. Multi Alam Prima Rasa', '0000-00-00 00:00:00', NULL, NULL),
(206, 'Jacky', 'Pria', 'Jakarta', '2018-07-01', 'Jakarta', 'Test', 'Belum Menikah', 10, 'S2', 'Manajemen', 'Test', 'Test', '812222222', 'reply@yahoo.com', 'Facebook', 'test@yahoo.com', 'test.test', '@test_test', 'Bekerja', 'Karyawan Swasta', 'Test', '0000-00-00 00:00:00', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_acara`
--
ALTER TABLE `tbl_acara`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id_user_2` (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_galery`
--
ALTER TABLE `tbl_galery`
  ADD PRIMARY KEY (`id_galery`);

--
-- Indexes for table `tbl_kiprah`
--
ALTER TABLE `tbl_kiprah`
  ADD PRIMARY KEY (`id_kiprah`);

--
-- Indexes for table `tbl_tokoh`
--
ALTER TABLE `tbl_tokoh`
  ADD PRIMARY KEY (`id_tokoh`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_acara`
--
ALTER TABLE `tbl_acara`
  MODIFY `id_acara` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_galery`
--
ALTER TABLE `tbl_galery`
  MODIFY `id_galery` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kiprah`
--
ALTER TABLE `tbl_kiprah`
  MODIFY `id_kiprah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tokoh`
--
ALTER TABLE `tbl_tokoh`
  MODIFY `id_tokoh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
