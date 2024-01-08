-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2016 at 10:50 AM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sertifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `acount`
--

CREATE TABLE IF NOT EXISTS `acount` (
  `id_acount` int(10) NOT NULL auto_increment,
  `nuptk` varchar(20) collate latin1_general_ci NOT NULL,
  `nama` varchar(25) collate latin1_general_ci NOT NULL,
  `jk` varchar(15) collate latin1_general_ci NOT NULL,
  `tempat` varchar(20) collate latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `usia` varchar(20) collate latin1_general_ci NOT NULL,
  `pendidikan` varchar(20) collate latin1_general_ci NOT NULL,
  `golongan` varchar(20) collate latin1_general_ci NOT NULL,
  `bidang_studi` varchar(20) collate latin1_general_ci NOT NULL,
  `tmpt_tugas` varchar(20) collate latin1_general_ci NOT NULL,
  `masa_kerja` varchar(20) collate latin1_general_ci NOT NULL,
  `foto` varchar(45) collate latin1_general_ci NOT NULL,
  `file` varchar(45) collate latin1_general_ci NOT NULL,
  `aktif` enum('1','0') collate latin1_general_ci NOT NULL default '0',
  `keterangan` varchar(50) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_acount`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=48 ;

--
-- Dumping data for table `acount`
--

INSERT INTO `acount` (`id_acount`, `nuptk`, `nama`, `jk`, `tempat`, `tgl_lahir`, `usia`, `pendidikan`, `golongan`, `bidang_studi`, `tmpt_tugas`, `masa_kerja`, `foto`, `file`, `aktif`, `keterangan`) VALUES
(42, 'hkj', 'jk', 'Laki-Laki', 'cxc', '1972-02-02', 'asas', 'S1', 'asa', 'as', 'sa', 'sa', '', '', '0', 'lulus'),
(43, '123', 'sd', 'Laki-Laki', 'as', '1971-01-03', 'sd', 'S1', 's', 'd', 'sd', 'sa', '', '', '0', 'lulus'),
(44, '89', 'hj', 'Laki-Laki', 'jhj', '1986-09-16', 'as', 'S1', 'as', 'as', 'as', 'sa', '', '', '0', 'tidak'),
(45, '8989', 'jkj', 'Laki-Laki', 'pad', '1985-09-16', '22', 'S1', 'sdsd', 'ds', 'sd', 'ds', '', '', '0', 'tidak'),
(46, '2015129', 'Joko Susilo', 'Laki-Laki', 'Padang', '1972-03-04', '56', 'S1', 'IV B', 'Matematika', 'Padang', '20', '', '', '0', 'lulus'),
(47, '2015122', 'Bambang Sentosa', 'Laki-Laki', 'Padang', '1987-12-18', '30', 'S1', 'III C', 'B.Indonesia', 'Padang', '5', '', '', '0', 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL auto_increment,
  `username` varchar(100) collate latin1_general_ci NOT NULL,
  `password` varchar(100) collate latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) collate latin1_general_ci NOT NULL,
  `email` varchar(100) collate latin1_general_ci NOT NULL,
  `no_telp` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama_lengkap`, `email`, `no_telp`) VALUES
(13, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@gmail.com', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id_download` int(5) NOT NULL auto_increment,
  `judul` varchar(100) collate latin1_general_ci NOT NULL,
  `nama_file` varchar(100) collate latin1_general_ci NOT NULL,
  `format_file` varchar(20) collate latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  `hits` int(3) NOT NULL,
  PRIMARY KEY  (`id_download`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id_download`, `judul`, `nama_file`, `format_file`, `tgl_posting`, `hits`) VALUES
(11, 'data', '911 (1).doc', 'DOC', '2016-01-15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id` int(10) NOT NULL auto_increment,
  `kriteria` varchar(25) NOT NULL,
  `des` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `kriteria`, `des`) VALUES
(1, 'Tempat tugas', '2'),
(2, 'Pendidikan', '1'),
(3, 'Usia', '5'),
(4, 'Golongan', '3'),
(5, 'Masa kerja', '4');
