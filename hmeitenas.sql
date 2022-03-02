-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.1.41 - Source distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for hmeitenas
CREATE DATABASE IF NOT EXISTS `hmeitenas` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hmeitenas`;


-- Dumping structure for table hmeitenas.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `nama` varchar(30) NOT NULL,
  `id` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table hmeitenas.admin: 1 rows
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`nama`, `id`, `password`) VALUES
	('Hasbi Muhammad', 'admin1', 'password');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


-- Dumping structure for table hmeitenas.anggota
CREATE TABLE IF NOT EXISTS `anggota` (
  `nrp` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(200) NOT NULL,
  PRIMARY KEY (`nrp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table hmeitenas.anggota: 3 rows
/*!40000 ALTER TABLE `anggota` DISABLE KEYS */;
INSERT INTO `anggota` (`nrp`, `nama`, `jenis_kelamin`, `telp`, `alamat`, `foto`) VALUES
	('123123', 'lala', 'wanita', '23124', 'garut', '28122017140357team-member.jpg'),
	('123434', 'UPAY', 'pria', '789789879', 'banjaran', '28122017144858man1.jpg'),
	('152015043', 'Hasbi Muhammad', 'pria', '085794190869', 'jl. Pamekar Timur IV No.7 Komp. Panghegar Permai Bandung, Panyileukan, Mekar Mulya', '281220171600031481003109690.jpg');
/*!40000 ALTER TABLE `anggota` ENABLE KEYS */;


-- Dumping structure for table hmeitenas.berita
CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `path` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table hmeitenas.berita: 3 rows
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` (`id`, `judul`, `deskripsi`, `path`, `waktu`) VALUES
	(1, 'test1', 'contoh berita', 'manutd4.jpg', '2017-12-28 21:54:06'),
	(2, 'judul2', 'ini contoh ke 2', 'Lighthouse.jpg', '2017-12-28 22:10:36'),
	(3, 'judul3', 'Cara membuat upload image dan posting berita lalu menampilkannya di halalman website serta menyimpan kedalam database. Banyak yang menanyakan bagaimana cara meng upload image atau video serta menampilkan dihalaman website.', '1.jpg', '2017-12-28 23:50:43');
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
