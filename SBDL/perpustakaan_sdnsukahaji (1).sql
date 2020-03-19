-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2020 at 01:40 
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpustakaan_sdnsukahaji`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_buku` varchar(5) NOT NULL,
  `isbn` varchar(15) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `pengarang` varchar(35) NOT NULL,
  `halaman` varchar(15) NOT NULL,
  `kode_kategori` varchar(5) NOT NULL,
  `kode_rak` varchar(5) NOT NULL,
  `gambar` text NOT NULL,
  `status` varchar(7) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_kategori` (`kode_kategori`),
  KEY `kode_rak` (`kode_rak`),
  KEY `kode_buku` (`kode_buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12349 ;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `kode_buku`, `isbn`, `judul_buku`, `pengarang`, `halaman`, `kode_kategori`, `kode_rak`, `gambar`, `status`) VALUES
(12345, '97899', '979-610-692-2', 'Bahasa Jepang Metode Tokyo', 'Murtafi.atun,A,Md.,S.S', '219', '34567', '567', '', 'Ada'),
(12346, '97860', '978-602-300-202', 'Desain Grafis untuk Pemula', 'Muchlis', '180', '34568', '566', '', 'Ada'),
(12348, '97901', '978-602-308', 'Construck2', 'Rickman', '400', '34569', '568', '', 'Ada');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_buku`
--

CREATE TABLE IF NOT EXISTS `kategori_buku` (
  `id` int(11) NOT NULL,
  `kode_kategori` varchar(5) NOT NULL,
  `nama_kategori` varchar(35) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_kategori` (`kode_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_buku`
--

INSERT INTO `kategori_buku` (`id`, `kode_kategori`, `nama_kategori`) VALUES
(98, '34567', 'Bahasa'),
(99, '34568', 'desain'),
(100, '34569', 'game');

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE IF NOT EXISTS `peminjam` (
  `id` int(11) NOT NULL,
  `kode_peminjam` varchar(5) NOT NULL,
  `nama_peminjam` varchar(35) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_peminjam_2` (`kode_peminjam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`id`, `kode_peminjam`, `nama_peminjam`, `alamat`, `telepon`) VALUES
(764, '1170', 'Ishibash Hiroki', 'Osaka', '0837098764'),
(765, '1169', 'Nisa Brian Sulaeman', 'kadipaten', '0098764'),
(1171, '763', 'Tamura Shogo', 'Nagano', '01928379');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id` int(11) NOT NULL,
  `kode_peminjama` varchar(5) NOT NULL,
  `kode_peminjam` varchar(5) NOT NULL,
  `kode_buku` varchar(5) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `catatan` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_peminjama` (`kode_peminjama`),
  KEY `kode_peminjama_2` (`kode_peminjama`),
  KEY `kode_peminjam` (`kode_peminjam`),
  KEY `kode_buku` (`kode_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `kode_peminjama`, `kode_peminjam`, `kode_buku`, `tgl_pinjam`, `tgl_kembali`, `catatan`) VALUES
(4546, '1213', '763', '97899', '2020-03-06', '2020-03-10', ''),
(5454, '1212', '1169', '97860', '2020-03-02', '2020-03-05', ''),
(5457, '1214', '1170', '97901', '2020-03-12', '2020-03-17', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE IF NOT EXISTS `pengembalian` (
  `id` int(11) NOT NULL,
  `kode_pengembalian` varchar(5) NOT NULL,
  `kode_peminjam` varchar(5) NOT NULL,
  `kode_buku` varchar(5) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `catatan` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_pengembalian` (`kode_pengembalian`),
  KEY `kode_peminjam` (`kode_peminjam`),
  KEY `kode_buku` (`kode_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id`, `kode_pengembalian`, `kode_peminjam`, `kode_buku`, `tgl_pinjam`, `tgl_kembali`, `catatan`) VALUES
(9292, '2020', '1169', '97860', '2020-03-02', '2020-03-05', ''),
(9293, '2021', '763', '97899', '2020-03-06', '2020-03-10', ''),
(9294, '2022', '1170', '97901', '2020-03-12', '2020-03-15', '');

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE IF NOT EXISTS `rak` (
  `id` int(11) NOT NULL,
  `kode_rak` varchar(5) NOT NULL,
  `nama_rak` varchar(35) NOT NULL,
  `posisi` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_rak` (`kode_rak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rak`
--

INSERT INTO `rak` (`id`, `kode_rak`, `nama_rak`, `posisi`) VALUES
(2010, '566', 'C', ''),
(2011, '567', 'B', ''),
(2012, '568', 'A', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`kode_kategori`) REFERENCES `kategori_buku` (`kode_kategori`),
  ADD CONSTRAINT `buku_ibfk_2` FOREIGN KEY (`kode_rak`) REFERENCES `rak` (`kode_rak`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`kode_buku`) REFERENCES `buku` (`kode_buku`),
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`kode_peminjam`) REFERENCES `peminjam` (`kode_peminjam`);

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_3` FOREIGN KEY (`kode_buku`) REFERENCES `buku` (`kode_buku`),
  ADD CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`kode_peminjam`) REFERENCES `peminjam` (`kode_peminjam`);
