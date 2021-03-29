-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 04:10 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epain`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_history`
--

CREATE TABLE `data_history` (
  `nrpID` varchar(50) DEFAULT NULL,
  `nrp_Details` varchar(50) DEFAULT NULL,
  `noKtp` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `tglLahir` varchar(20) DEFAULT NULL,
  `usia` varchar(10) DEFAULT NULL,
  `skorPain` varchar(10) DEFAULT NULL,
  `ruangan` varchar(30) DEFAULT NULL,
  `tglBerobat` varchar(20) DEFAULT NULL,
  `tingkatPenyakit` varchar(50) DEFAULT NULL,
  `namaPasien` varchar(50) DEFAULT NULL,
  `perawat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_history`
--

INSERT INTO `data_history` (`nrpID`, `nrp_Details`, `noKtp`, `alamat`, `gender`, `tglLahir`, `usia`, `skorPain`, `ruangan`, `tglBerobat`, `tingkatPenyakit`, `namaPasien`, `perawat`) VALUES
('00000000', 'JK-EPAIN-19-12-00001', '00011', 'Jl. Gagak', 'Laki-Laki', '2015-12-01', '4', '2 (Ringan)', 'Emergency', '2019-12-16 20:51:55', 'Akut', 'PAK SIEN', 'Dina'),
('JK-EPAIN-19-12-00009', 'JK-EPAIN-19-12-00002', '98613132', 'Jl. Gintung', 'Laki-Laki', '1994-12-30', '25', '10 (Berat)', 'Emergency', '2019-12-16 20:58:11', 'Akut', 'DEWASA', 'Dina');

-- --------------------------------------------------------

--
-- Table structure for table `data_intervensi`
--

CREATE TABLE `data_intervensi` (
  `nrpID` varchar(20) NOT NULL,
  `skalaNyeri` varchar(20) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `ruangan` varchar(20) DEFAULT NULL,
  `perawat` varchar(100) DEFAULT NULL,
  `imp1` text,
  `eva1` text,
  `imp2` text,
  `eva2` text,
  `imp3` text,
  `eva3` text,
  `imp4` text,
  `eva4` text,
  `imp5` text,
  `eva5` text,
  `imp6` text,
  `eva6` text,
  `imp7` text,
  `eva7` text,
  `imp8` text,
  `eva8` text,
  `kolimv1` text,
  `koleva1` text,
  `kolimv2` text,
  `koleva2` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_intervensi`
--

INSERT INTO `data_intervensi` (`nrpID`, `skalaNyeri`, `waktu`, `ruangan`, `perawat`, `imp1`, `eva1`, `imp2`, `eva2`, `imp3`, `eva3`, `imp4`, `eva4`, `imp5`, `eva5`, `imp6`, `eva6`, `imp7`, `eva7`, `imp8`, `eva8`, `kolimv1`, `koleva1`, `kolimv2`, `koleva2`) VALUES
('00000000', 'Ringan', '2019-12-16 20:52:42', 'emergency', 'Dina', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', NULL, NULL),
('JK-EPAIN-19-12-00009', 'Berat', '2019-12-16 20:58:42', 'emergency', 'Dina', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', NULL, NULL, NULL, NULL, NULL, NULL, 'ya', 'ya', 'ya', 'ya'),
('JK-EPAIN-19-12-00009', 'Berat', '2019-12-17 17:55:38', 'emergency', 'Dina', 'rabu1', NULL, NULL, 'rabu2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('JK-EPAIN-19-12-00011', 'Berat', '2019-12-17 22:43:50', '', 'Dina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('JK-EPAIN-19-12-00010', 'Berat', '2019-12-17 22:50:06', '', 'Dina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('JK-EPAIN-19-12-00009', 'Berat', '2019-12-17 23:05:57', 'rawatJalan', 'Dina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_pasien`
--

CREATE TABLE `data_pasien` (
  `tgl_berobat` datetime NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `nrpID` varchar(30) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `usia` varchar(3) NOT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `riwayat_penyakit` varchar(200) DEFAULT NULL,
  `solusi` varchar(200) DEFAULT NULL,
  `hariUsia` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pasien`
--

INSERT INTO `data_pasien` (`tgl_berobat`, `ktp`, `nrpID`, `nama`, `jenis_kelamin`, `alamat`, `tgl_lahir`, `usia`, `kategori`, `riwayat_penyakit`, `solusi`, `hariUsia`) VALUES
('2019-12-05 08:46:50', '999999', 'JK-EPAIN-19-12-00007', 'Gogon', 'Laki-Laki', 'Jl. Cumi', '2019-11-20', '0', NULL, NULL, NULL, '15'),
('2019-12-06 00:20:52', '98613132', 'JK-EPAIN-19-12-00009', 'dewasa', 'Laki-Laki', 'Jl. Gintung', '1994-12-30', '25', NULL, NULL, NULL, '9107'),
('2019-12-06 00:23:06', '128767', 'JK-EPAIN-19-12-00010', 'Anak anak', 'Perempuan', 'Jl. Gang Lama', '2014-10-02', '5', NULL, NULL, NULL, '1891'),
('2019-12-06 00:24:50', '7120435', 'JK-EPAIN-19-12-00011', 'balita', 'Laki-Laki', 'Jl. Nuri', '2018-01-23', '1', NULL, NULL, NULL, '682'),
('2019-12-09 18:05:13', '00011', '00000000', 'pak sien', 'Laki-Laki', 'Jl. Gagak', '2015-12-01', '4', NULL, NULL, NULL, '1469');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengujian`
--

CREATE TABLE `data_pengujian` (
  `nrpID` varchar(100) DEFAULT NULL,
  `nrp_Details` varchar(100) DEFAULT NULL,
  `pengkajian1` varchar(100) DEFAULT NULL,
  `pengkajian2` varchar(100) DEFAULT NULL,
  `pengkajian3` varchar(100) DEFAULT NULL,
  `pengkajian4` varchar(100) DEFAULT NULL,
  `pengkajian5` varchar(100) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `perawat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengujian`
--

INSERT INTO `data_pengujian` (`nrpID`, `nrp_Details`, `pengkajian1`, `pengkajian2`, `pengkajian3`, `pengkajian4`, `pengkajian5`, `waktu`, `perawat`) VALUES
('00000000', 'JK-EPAIN-19-12-00001', 'NULL', 'Perubahan kondisi', NULL, NULL, 'Pasien pulang', '2019-12-16 20:54:59', 'Dina');

-- --------------------------------------------------------

--
-- Table structure for table `data_pertanyaan`
--

CREATE TABLE `data_pertanyaan` (
  `nrpID` varchar(50) DEFAULT NULL,
  `question1` varchar(100) DEFAULT NULL,
  `question2` varchar(100) DEFAULT NULL,
  `question3` varchar(100) DEFAULT NULL,
  `question4` varchar(100) DEFAULT NULL,
  `question5` varchar(100) DEFAULT NULL,
  `question6` varchar(100) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `Skor` varchar(10) DEFAULT NULL,
  `question0` varchar(100) DEFAULT NULL,
  `perawat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pertanyaan`
--

INSERT INTO `data_pertanyaan` (`nrpID`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `tanggal`, `Skor`, `question0`, `perawat`) VALUES
('00000000', 'Tidak', 'Siku Kanan', 'Kurang Dari 3 Bulan (Akut)', 'Seperti berdenyut', '1 2 jam', 'Minum obat', '2019-12-16 20:51:41', NULL, 'kepentok Lemari', 'Dina'),
('JK-EPAIN-19-12-00009', 'Tidak', 'Pinggang kanan', 'Kurang Dari 3 Bulan (Akut)', 'Seperti dipukul', 'Kurang dari 30 menit', 'Kompres air hangat', '2019-12-16 20:58:00', NULL, 'Jatuh', 'Dina'),
('JK-EPAIN-19-12-00009', 'Tidak', 'leher', 'Lebih dari 3 bulan (kronis)', 'Seperti ditikam', '3 4 jam', 'Minum obat', '2019-12-16 21:47:29', NULL, 'kepentok', 'Dina'),
('JK-EPAIN-19-12-00009', 'Tidak', 'dengkul', 'Kurang Dari 3 Bulan (Akut)', 'Seperti ditikam', '3 4 jam', 'Aktifitas dikurangi (istirahat)', '2019-12-17 06:23:32', NULL, 'ketiban', 'Dina'),
('JK-EPAIN-19-12-00009', 'Tidak', 'siku kanan', 'Kurang Dari 3 Bulan (Akut)', 'Seperti ditarik', '1 2 jam', 'Kompres air hangat', '2019-12-17 17:54:50', NULL, 'kepentok', 'Dina'),
('JK-EPAIN-19-12-00007', 'Ya', 'wrwew', 'Kurang Dari 3 Bulan (Akut)', 'Seperti ditarik', '3 4 jam', 'Aktifitas dikurangi (istirahat)', '2019-12-17 18:27:03', NULL, 'kepentok', 'Dina'),
('JK-EPAIN-19-12-00011', 'Tidak', 'qw12', 'Kurang Dari 3 Bulan (Akut)', 'Seperti ditarik', '1 2 jam', 'Kompres air hangat', '2019-12-17 18:28:28', NULL, 'kepentok', 'Dina'),
('JK-EPAIN-19-12-00007', 'Tidak', 'qweer', 'Lebih dari 3 bulan (kronis)', 'Seperti ditarik', '3 4 jam', 'Kompres air hangat', '2019-12-17 22:25:18', NULL, 'kepentok', 'Dina'),
('JK-EPAIN-19-12-00011', 'Sulit Dinilai', 'tes', 'Lebih dari 3 bulan (kronis)', 'Seperti keram', 'Kurang dari 30 menit', 'Aktifitas dikurangi (istirahat)', '2019-12-17 22:31:23', NULL, 'kepentok', 'Dina'),
('JK-EPAIN-19-12-00010', 'Sulit Dinilai', 'gut', 'Lebih dari 3 bulan (kronis)', 'Seperti ditikam', 'Kurang dari 30 menit', 'Aktifitas dikurangi (istirahat)', '2019-12-17 22:49:48', NULL, '2qq', 'Dina'),
('JK-EPAIN-19-12-00009', 'Tidak', 'tes', 'Lebih dari 3 bulan (kronis)', 'Seperti di bakar', '3 4 jam', 'Aktifitas dikurangi (istirahat)', '2019-12-17 23:05:29', NULL, 'kepentok', 'Dina');

-- --------------------------------------------------------

--
-- Table structure for table `data_plan`
--

CREATE TABLE `data_plan` (
  `nrpID` varchar(50) NOT NULL,
  `nrs` int(11) DEFAULT NULL,
  `fps` int(11) DEFAULT NULL,
  `flacc` int(11) DEFAULT NULL,
  `nips` int(11) DEFAULT NULL,
  `cpot` int(11) DEFAULT NULL,
  `cfs` int(11) DEFAULT NULL,
  `ruangan` varchar(30) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_plan`
--

INSERT INTO `data_plan` (`nrpID`, `nrs`, `fps`, `flacc`, `nips`, `cpot`, `cfs`, `ruangan`, `waktu`) VALUES
('00000000', NULL, 2, NULL, NULL, NULL, NULL, 'emergency', '2019-12-16 20:51:55'),
('JK-EPAIN-19-12-00009', 10, NULL, NULL, NULL, NULL, NULL, 'emergency', '2019-12-16 20:58:11'),
('JK-EPAIN-19-12-00009', 0, NULL, NULL, NULL, NULL, NULL, 'emergency', '2019-12-16 21:47:42'),
('JK-EPAIN-19-12-00009', 1, NULL, NULL, NULL, NULL, NULL, 'emergency', '2019-12-16 21:48:03'),
('JK-EPAIN-19-12-00009', NULL, NULL, NULL, NULL, 6, NULL, 'emergency', '2019-12-17 06:23:59'),
('JK-EPAIN-19-12-00009', 9, NULL, NULL, NULL, NULL, NULL, 'emergency', '2019-12-17 17:55:09'),
('JK-EPAIN-19-12-00007', NULL, NULL, NULL, NULL, 1, NULL, 'emergency', '2019-12-17 18:27:18'),
('JK-EPAIN-19-12-00011', NULL, NULL, NULL, NULL, 1, NULL, 'emergency', '2019-12-17 18:28:38'),
('JK-EPAIN-19-12-00011', NULL, NULL, NULL, NULL, 8, NULL, '', '2019-12-17 18:29:01'),
('JK-EPAIN-19-12-00007', NULL, NULL, NULL, NULL, 8, NULL, 'emergency', '2019-12-17 22:25:35'),
('JK-EPAIN-19-12-00011', NULL, NULL, NULL, NULL, 8, NULL, 'emergency', '2019-12-17 22:31:36'),
('JK-EPAIN-19-12-00010', NULL, NULL, NULL, NULL, 8, NULL, 'emergency', '2019-12-17 22:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `userType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`username`, `password`, `nama`, `userType`) VALUES
('nurse01', 'nurse01', 'Dina', 2),
('nurse02', 'nurse02', 'Siska', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loginadmin`
--

CREATE TABLE `tbl_loginadmin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `userType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_loginadmin`
--

INSERT INTO `tbl_loginadmin` (`username`, `password`, `nama`, `userType`) VALUES
('admin01', 'admin01', 'admin 01', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_loginadmin`
--
ALTER TABLE `tbl_loginadmin`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
