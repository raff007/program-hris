-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 04:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mpdkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `id_cabang` int(11) NOT NULL,
  `nama_cabang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `nama_cabang`) VALUES
(1, 'HEAD OFFICE'),
(2, 'PMI'),
(3, 'PECGI'),
(4, 'GDN');

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id_golongan` int(11) NOT NULL,
  `kode_golkar` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id_golongan`, `kode_golkar`) VALUES
(1, 'K1'),
(2, 'K2'),
(3, 'K3'),
(4, 'K4'),
(5, 'M1'),
(6, 'M2'),
(7, 'M3'),
(8, 'S1'),
(9, 'S2'),
(10, 'S3'),
(11, 'G1'),
(12, 'G2'),
(13, 'G3');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(50) NOT NULL,
  `nik_karyawan` varchar(15) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `id_tipekaryawan` varchar(20) NOT NULL,
  `id_jabatan` varchar(20) NOT NULL,
  `id_departement` varchar(30) NOT NULL,
  `id_cabang` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `id_golongan` varchar(5) NOT NULL,
  `awal_masukpt` date NOT NULL,
  `tipe_kontrak` varchar(10) NOT NULL,
  `st_pernikahan` varchar(30) NOT NULL,
  `anak` varchar(15) NOT NULL DEFAULT '0',
  `st_keluarga` varchar(5) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(30) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `bpjsks` varchar(13) NOT NULL,
  `bpjstk` varchar(11) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `norek` varchar(16) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `photo_pp` varchar(100) NOT NULL,
  `foto_ktp` varchar(100) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_kontrak` varchar(30) NOT NULL,
  `ket` text NOT NULL,
  `timestamp_karyawan` timestamp NOT NULL DEFAULT current_timestamp(),
  `timestamp_lastedit` int(11) NOT NULL,
  `lastedit_by` int(11) NOT NULL,
  `status_karyawan` int(11) NOT NULL,
  `tgl_keluarpt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nik_karyawan`, `nama_karyawan`, `id_tipekaryawan`, `id_jabatan`, `id_departement`, `id_cabang`, `id_lokasi`, `id_golongan`, `awal_masukpt`, `tipe_kontrak`, `st_pernikahan`, `anak`, `st_keluarga`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `bpjsks`, `bpjstk`, `telp`, `bank`, `norek`, `no_ktp`, `no_kk`, `photo_pp`, `foto_ktp`, `npwp`, `alamat`, `email`, `id_kontrak`, `ket`, `timestamp_karyawan`, `timestamp_lastedit`, `lastedit_by`, `status_karyawan`, `tgl_keluarpt`) VALUES
(38, '20220001', 'mawar', '1', '12', '2', 1, 4, '10', '2022-04-15', 'PKWTT', 'Belum-Menikah', '0', 'TK0', 'P', 'cirebon', '1986-04-26', 'KRISTEN', 'SMU/SMK/Sederajat', '5555555555555', '22222222222', '6281298738249', 'BNI', '0333666778889990', '5555555555555555', '7777777777777777', '29042022213950Screenshot female.png', '29042022213737scripp.png', '33.333.555.5-555.555', 'Jl. Swantatra IV No. 4, Jatiasih, RT.006/RW.004, Jatiasih, Kec. Jatiasih, Kota Bks, Jawa Barat 17423', 'email@gmail.com', '1', '', '2022-04-24 04:56:40', 0, 0, 1, '2022-03-31'),
(39, '20220001', 'ios', '1', '14', '1', 1, 4, '3', '2022-04-05', 'PERMANEN', 'Belum-Menikah', '0', 'TK1', 'L', 'cirebon', '1999-04-05', 'KRISTEN', 'S1', '2312308908908', '04645645645', '62811119076', 'BNI', '0333666778889990', '5555555555555555', '6666666666666666', '29042022203738Screenshot 2022-04-30 013653.png', '24042022065819vicode.jpg', '11.113.555.5-555.555', 'shfghd fgdgd', 'email@email.com', '2', '', '2022-04-24 04:58:19', 0, 0, 1, '2022-04-13'),
(40, '20220002', 'shepia', '2', '44', '17', 1, 4, '9', '2022-04-14', 'PKWTT', 'Belum-Menikah', '0', 'TK3', 'P', 'bekasi selatan', '1990-04-04', 'KATOLIK', 'D1', '5555555555555', '22222222222', '6281298738249', 'BCA', '9788646456475675', '5555555555555555', '6666666666666666', '27042022103135female.jpg', '27042022103135vicode.jpg', '33.333.555.5-555.555', 'sfsdfsdf fiiljkljk', 'email@gmail.com', '3', '', '2022-04-27 08:31:35', 0, 0, 1, '2022-04-11'),
(41, '20220003', 'randi', '1', '35', '1', 1, 4, '12', '2022-04-12', 'PERMANEN', 'Menikah', '3', 'TK3', 'L', 'bekasi', '1986-03-05', 'KHONGHUCU', 'S2', '2222542534522', '22222224564', '6281298738249', 'Mandiri', '9788444456475675', '5555597897555555', '7777777745242444', '29042022211321avatar.jpg', '29042022211321ktp.jpg', '04.535.435.3-454.353', 'Bekasi timur jl.raya narogong no.007', 'email@gmail.com', '4', '', '2022-04-29 19:13:21', 0, 0, 1, '2022-04-15'),
(43, '20220004', 'zio', '1', '40', '4', 1, 4, '9', '2022-05-04', 'PERMANEN', 'Belum-Menikah', '0', 'TK3', 'L', 'cirebon', '1973-05-12', 'KHONGHUCU', 'S2', '6765765765755', '04645645645', '6287883977810', 'Mandiri', '3333333338888888', '5555555555555555', '7777777777777777', '07052022211737female.jpg', '07052022211737scripp.png', '11.113.555.5-555.555', 'Perum Graha Indah Blok A2 / No.1, RT.01/RW.014, Jatimekar, Kec. Jatiasih, Kota Bks, Jawa Barat 17422', 'email@gmail.com', '5', '', '2022-05-07 19:17:37', 0, 0, 1, '2022-04-27'),
(44, '20220004', 'ilma', '1', '14', '1', 1, 4, '2', '2022-05-25', 'PKWTT', 'Belum-Menikah', '0', 'TK3', 'L', 'bekasi', '2000-05-03', 'ISLAM', 'SMU/SMK/Sederajat', '1110980590511', '22786799622', '6287886690969', 'Mandiri', '1118865389367967', '5555682682568255', '6666685685466666', '14052022135148Screenshot female.png', '14052022135148ktp.jpg', '33.048.070.7-503.333', 'Jl.Rambutan Indah No.28 Rt.07/011 kp.jaha Kec.jatiasih Kel. Bekasi 17422, RT.001/RW.011, Jatimekar, Bekasi, Kota Bks, Jawa Barat 17422', 'dfgdfgf@gmail.com', '', '', '2022-05-14 11:51:48', 0, 0, 1, '2022-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `kontrak`
--

CREATE TABLE `kontrak` (
  `id_kontrak` int(11) NOT NULL,
  `no_skt` varchar(30) NOT NULL,
  `bln_thnSKT` varchar(30) NOT NULL,
  `nk` varchar(10) NOT NULL,
  `code` varchar(15) NOT NULL,
  `bln_thn` varchar(15) NOT NULL,
  `durasi` varchar(15) NOT NULL,
  `masuk_pt` date NOT NULL,
  `keluar_pt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontrak`
--

INSERT INTO `kontrak` (`id_kontrak`, `no_skt`, `bln_thnSKT`, `nk`, `code`, `bln_thn`, `durasi`, `masuk_pt`, `keluar_pt`) VALUES
(1, '01', 'VI/2020', '011', 'HR.I.21', 'X/2020', '1 Tahun', '0000-00-00', '0000-00-00'),
(2, '02', 'VI/2022', '011', 'HR.I.21', 'X/2020', '1 Tahun', '0000-00-00', '0000-00-00'),
(3, '03', 'VI/2023', '011', 'HR.I.21', 'X/2020', '1 Tahun', '0000-00-00', '0000-00-00'),
(4, '04', 'VI/2024', '011', 'HR.I.21', 'X/2020', '1 Tahun', '0000-00-00', '0000-00-00'),
(5, '05', 'VI/2025', '011', 'HR.I.21', 'X/2020', '1 Tahun', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `level_pengguna`
--

CREATE TABLE `level_pengguna` (
  `id_level` int(20) NOT NULL,
  `nama_level` varchar(20) NOT NULL,
  `status_level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level_pengguna`
--

INSERT INTO `level_pengguna` (`id_level`, `nama_level`, `status_level`) VALUES
(1, 'Superadmin', 1),
(2, 'Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(30) NOT NULL,
  `alamat_lokasi` varchar(30) NOT NULL,
  `id_cabang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `alamat_lokasi`, `id_cabang`) VALUES
(1, 'CIBITUNG', 2),
(2, 'KAWASAN GOBEL', 3),
(4, 'JAKARTA', 1),
(5, 'JAKARTA', 4);

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE `modul` (
  `id_modul` int(15) NOT NULL,
  `id_header` varchar(10) NOT NULL DEFAULT '0',
  `name_modul` varchar(30) NOT NULL,
  `link_modul` varchar(20) NOT NULL,
  `status_modul` varchar(5) NOT NULL,
  `urutan_modul` int(5) NOT NULL,
  `id_levelusers` int(10) NOT NULL,
  `id_icon` int(10) DEFAULT NULL,
  `id_unik` int(10) NOT NULL,
  `sheader` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`id_modul`, `id_header`, `name_modul`, `link_modul`, `status_modul`, `urutan_modul`, `id_levelusers`, `id_icon`, `id_unik`, `sheader`) VALUES
(1, '0', 'Beranda', 'home', '1', 1, 1, 1, 1, 0),
(2, '0', 'Data Karyawan', 'karyawan', '1', 2, 1, 1, 1, 0),
(3, '0', 'Data Absen', 'absen', '1', 3, 1, 1, 1, 0),
(4, '0', 'Departement', 'departement', '1', 4, 1, 1, 1, 0),
(5, '0', 'Legal', 'legal', '1', 5, 1, 1, 1, 0),
(6, '0', 'Admin BPJS', 'admin_BPJS', '1', 6, 1, 1, 1, 0),
(7, '0', 'Outsourcing', 'outsourcing', '1', 7, 1, 1, 1, 0),
(8, '0', 'Recruiter', 'recruiter', '1', 8, 1, 1, 1, 0),
(9, '0', 'userregist', 'userregist', '1', 9, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `id_level` varchar(50) NOT NULL,
  `nik_karyawan` int(15) NOT NULL,
  `status_pengguna` int(2) NOT NULL,
  `timestamp_pengguna` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `foto`, `password`, `nama_pengguna`, `id_level`, `nik_karyawan`, `status_pengguna`, `timestamp_pengguna`) VALUES
(1, 'superadmin', 'katrina.jpg', '$2y$10$CxjXU5d7db19ZS6DWQt2LOlZXs1Oycr7vm/GhIvcv.1RktlqasNaK', 'Super Admin', '1', 1, 1, '2022-01-23 03:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `struktur_jabatan`
--

CREATE TABLE `struktur_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `id_departement` int(3) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `regist_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struktur_jabatan`
--

INSERT INTO `struktur_jabatan` (`id_jabatan`, `id_departement`, `jabatan`, `regist_date`) VALUES
(11, 10, 'DIREKTUR', '2022-03-01 13:26:38'),
(12, 2, 'MANAGER', '2022-03-02 09:11:34'),
(13, 10, 'GM', '2022-03-02 09:12:34'),
(14, 1, 'STAFF', '2022-03-02 09:12:34'),
(35, 1, 'SUPERVISOR', '2022-03-02 09:12:34'),
(36, 2, 'SUPERVISOR', '2022-03-02 09:12:34'),
(37, 10, 'DEPUTI', '2022-03-02 09:12:34'),
(38, 4, 'MANAGER', '2022-03-02 09:11:34'),
(39, 4, 'SUPERVISOR', '2022-03-02 09:12:34'),
(40, 4, 'STAFF', '2022-03-02 09:12:34'),
(41, 5, 'MANAGER', '2022-03-02 09:11:34'),
(42, 6, 'MANAGER', '2022-03-02 09:11:34'),
(43, 19, 'DRIVER', '2022-03-02 09:11:34'),
(44, 17, 'ANGGOTA', '2022-03-02 09:11:34'),
(45, 20, 'STAFF', '2022-03-02 09:12:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartments`
--

CREATE TABLE `tbldepartments` (
  `id_departement` int(11) NOT NULL,
  `id_tipekaryawan` int(11) NOT NULL,
  `nama_departement` varchar(150) DEFAULT NULL,
  `short_name` varchar(100) NOT NULL,
  `code_departement` varchar(15) NOT NULL,
  `creation_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldepartments`
--

INSERT INTO `tbldepartments` (`id_departement`, `id_tipekaryawan`, `nama_departement`, `short_name`, `code_departement`, `creation_date`) VALUES
(1, 1, 'Information Technologies', 'IT', '09CT', '2017-11-01 07:19:37'),
(2, 1, 'Human Resources', 'HR', '08R', '2022-02-07 01:43:35'),
(4, 1, 'FINANCE', 'Finance', '', '2022-03-14 07:40:00'),
(5, 1, 'SECURITY', 'SECURITY', '', '2022-03-14 07:40:00'),
(6, 1, 'HOUSEKEEPING', 'HK', '', '2022-03-14 13:41:32'),
(10, 1, 'BOARD OF DIRECTORS', 'BOD', '', '2022-03-06 13:49:13'),
(17, 2, 'SECURITY', 'SECURITY', '', '2022-03-14 07:40:00'),
(18, 2, 'DRIVER', 'DRIVER', '', '2022-03-14 07:40:00'),
(19, 3, 'RENTAL CARS', 'RENTAL', '', '2022-03-14 07:40:00'),
(20, 1, 'MARKETING', 'MARKETING', '', '2022-03-14 07:40:00'),
(22, 2, 'HOUSEKEEPING', 'HK', '', '2022-03-14 13:41:32');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_karyawan`
--

CREATE TABLE `tipe_karyawan` (
  `id_tipekaryawan` int(11) NOT NULL,
  `nama_tipekaryawan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_karyawan`
--

INSERT INTO `tipe_karyawan` (`id_tipekaryawan`, `nama_tipekaryawan`) VALUES
(1, 'DKM'),
(2, 'OS DKM'),
(3, 'Mitra DKM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD UNIQUE KEY `index_karyawan` (`id_karyawan`,`nik_karyawan`,`nama_karyawan`,`id_golongan`,`agama`,`status_karyawan`,`jenis_kelamin`) USING BTREE,
  ADD KEY `id_lokasi` (`id_lokasi`),
  ADD KEY `id_kontrak` (`id_kontrak`);

--
-- Indexes for table `kontrak`
--
ALTER TABLE `kontrak`
  ADD PRIMARY KEY (`id_kontrak`);

--
-- Indexes for table `level_pengguna`
--
ALTER TABLE `level_pengguna`
  ADD PRIMARY KEY (`id_level`),
  ADD KEY `index_level` (`id_level`,`status_level`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `index_pengguna` (`id_pengguna`,`username`,`password`,`nama_pengguna`,`nik_karyawan`,`id_level`,`status_pengguna`);

--
-- Indexes for table `struktur_jabatan`
--
ALTER TABLE `struktur_jabatan`
  ADD PRIMARY KEY (`id_jabatan`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  ADD PRIMARY KEY (`id_departement`),
  ADD KEY `id_departement` (`id_departement`);

--
-- Indexes for table `tipe_karyawan`
--
ALTER TABLE `tipe_karyawan`
  ADD PRIMARY KEY (`id_tipekaryawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id_cabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `kontrak`
--
ALTER TABLE `kontrak`
  MODIFY `id_kontrak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `level_pengguna`
--
ALTER TABLE `level_pengguna`
  MODIFY `id_level` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `struktur_jabatan`
--
ALTER TABLE `struktur_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  MODIFY `id_departement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tipe_karyawan`
--
ALTER TABLE `tipe_karyawan`
  MODIFY `id_tipekaryawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
