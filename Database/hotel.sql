-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2013 at 10:00 AM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `username` varchar(30) collate latin1_general_ci NOT NULL,
  `password` varchar(50) collate latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) collate latin1_general_ci NOT NULL,
  `email` varchar(100) collate latin1_general_ci NOT NULL,
  `no_telp` varchar(20) collate latin1_general_ci NOT NULL,
  `level` varchar(20) collate latin1_general_ci NOT NULL default 'user',
  `blokir` enum('Y','N') collate latin1_general_ci NOT NULL default 'N',
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `blokir`) VALUES
('irfan', '24b90bc48a67ac676228385a7c71a119', 'irfan aryadeni', 'irfanaryadeni@ymail.com', '082381357543', 'admin', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `idberita` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(250) NOT NULL,
  `isi` varchar(5000) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  PRIMARY KEY  (`idberita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`idberita`, `tanggal`, `judul`, `isi`, `penulis`) VALUES
('001', '2013-04-19', 'Website Promosi ', 'Telah Di bangun website hotel padang oleh irfan aryadeni. Dengan sedikit pemahaman dan sedikit kreasi dari tangan nya, perlahan dia mengerjakan program PKL nya agar mendapatkan nilai yang bagus.', 'Irfan'),
('002', '2013-04-19', 'Perubahan Hotel Padang ', 'Hotel Padang akan melakukan perubahan bangunan agar terlihat bagus. Dan akan menambah fasilitas yang lebih banyak seperti kolam renang, bar, casino, dan lain-lain. Bukan hamya itu, Hotel Padang akan memberikan diskon yang besar untuk pelanggan setia nya.', 'Irfan');

-- --------------------------------------------------------

--
-- Table structure for table `dtimage`
--

CREATE TABLE IF NOT EXISTS `dtimage` (
  `id_image` int(11) NOT NULL auto_increment,
  `nama_image` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_image`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `dtimage`
--

INSERT INTO `dtimage` (`id_image`, `nama_image`, `tanggal`, `keterangan`, `penulis`) VALUES
(19, 'kamar.JPG', '2013-04-19', 'Deluxe Room Harga : Rp. 570.000,-. Fasilitas : Ac, Tv, Air Panas/Dingin, Shower, Safety Box. Harga Sudah termasuk tax & service 21%.', 'Kamar Deluxe'),
(20, 'family.JPG', '2013-04-19', 'Family Room\r\nHarga : Rp. 450.000,-.\r\nFasilitas : Ac, Tv, Air Panas/Dingin, Shower, Safety Box. Harga Sudah termasuk tax & service 21%.', 'Kamar Family'),
(21, 'standar.JPG', '2013-04-19', 'Standard Room Harga : Rp. 370.000,-. Fasilitas : Ac, Tv, Air Panas/Dingin, Shower, Safety Box. Harga Sudah termasuk tax & service 21%.', 'Kamar Standar'),
(22, 'taman1.JPG', '2013-04-19', 'Hotel Padang menyediakan taman untuk relaksasi, bisnis, dan ngobrol.', 'Taman'),
(23, 'cafe1.JPG', '2013-04-19', 'Restaurant akses 24 jam', 'Restaurant');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
  `id` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(200) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--


-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE IF NOT EXISTS `galery` (
  `id_image` int(11) NOT NULL auto_increment,
  `nama_image` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_image`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id_image`, `nama_image`, `tanggal`, `keterangan`, `penulis`) VALUES
(5, 'depan1.JPG', '2013-04-19', 'Hotel Padang', 'Hotel Padang'),
(7, 'kamar.JPG', '2013-04-19', 'Kamar Deluxe', 'Kamar Deluxe'),
(8, 'taman1.JPG', '2013-04-19', 'Hotel Padang', 'Taman'),
(9, 'resepsionis1.JPG', '2013-04-19', 'Resepsionis', 'Irfan'),
(10, 'lobby.JPG', '2013-05-03', 'lobby', 'irfan');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `nama` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(25) NOT NULL,
  `coment` varchar(250) NOT NULL,
  PRIMARY KEY  (`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`nama`, `email`, `telp`, `coment`) VALUES
('auridho', 'aridslmber@ymail.com', '085766331997', 'Webnya keren cuy');

-- --------------------------------------------------------

--
-- Table structure for table `trading`
--

CREATE TABLE IF NOT EXISTS `trading` (
  `id` varchar(10) NOT NULL,
  `isi` varchar(500) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trading`
--

INSERT INTO `trading` (`id`, `isi`, `tanggal`) VALUES
('01', 'Hotel Padang Akan Melakukan Promosi Besar-Besaran... Tunggu Dan Saksikan...', '2013-04-19');
