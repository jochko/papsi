-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2017 at 08:09 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_papsiciletuh`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE IF NOT EXISTS `t_admin` (
  `id_admin` tinyint(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','operator') NOT NULL,
  `reset_key` varchar(35) NOT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id_admin`, `username`, `fullname`, `password`, `level`, `reset_key`) VALUES
(1, 'joko', 'joko', '9ba0009aa81e794e628a04b51eaf7d7f', 'admin', ''),
(2, 'agus', 'agus', 'agus', 'operator', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_bukti_bayar`
--

CREATE TABLE IF NOT EXISTS `t_bukti_bayar` (
  `id_bukti` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `file` text NOT NULL,
  PRIMARY KEY (`id_bukti`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_galeri`
--

CREATE TABLE IF NOT EXISTS `t_galeri` (
  `id_galeri` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(225) NOT NULL,
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `t_galeri`
--

INSERT INTO `t_galeri` (`id_galeri`, `nama`, `keterangan`, `gambar`) VALUES
(4, 'Panenjoan', 'Wisata pano rama amfiteater alami berukuran raksasa (Gian t Amphitheatre)\r\nLembah Ciletuh berbentuk tapal kuda terbesar di Indonesia\r\nHamparan sawah, rumah-rumah warga dan perkampung an dikelilingi tebing yang\r\nditutupi hutan lebat dan laut lepas Samudra Indonesia.\r\n', 'gambar1495991724.jpg'),
(5, 'Curug Awang', 'Air terjun dengan hamparan batu pasir yang datar dan tebing yang tegak sepanjang\r\n±80 m\r\nDi musim kemarau menikmati pemandangan air terjun d ari atas hulu curug dan\r\nmelihat pem andangan sawah terasering yang tersusun rapih\r\nBisa digunak an untuk panjat tebing\r\nPada musim hujan air meluap dan dan berwarna kuning m engisi sepanjang dinding\r\nbatu pasir s ehingga batuan tertutupi oleh air menyerupai air terjun niagara\r\nMelewati Pe rkebunan kelapa sawit, perkebunan kelapa, Hu ma\r\nPengrajin G ula Merah dan menyaksikan proses pembuatan g ula merah\r\nMencicipi Cimplung yaitu makanan khas\r\nMenikmati s egarnya air kelapa.', 'gambar1494887005.jpg'),
(6, 'Curuh Tengah', 'Batuan yang mendasari air terjun ini berupa batu pasir dengan ketinggian ±5 m\r\nMenuju cur ug melalui pematang sawah\r\n', 'gambar1494894090.jpg'),
(7, 'Curug Puncakmanik', 'Curug paling tinggi sekitar ±100 m\r\nmenyaksika n curug dari atas atau langsung menuju ke bawah.\r\nmasih alami dengan latar batu dinding curug yang mengkilat berwarna kehitaman\r\nterdapat leu wi atau kubangan air\r\nterdapat jen is batuan lava bantal\r\nDi hutan ter dapat tanaman rafflesia fatma atau bunga bangkai berukuran kecil yang\r\nmenyerupai rafflesia arnoldii\r\nPohon kiara, bungur, kepuh, sonokeling dan lain sebagainya\r\nTerdapat Bi natang seperti monyet, babi hutan, burung-burung dan macan tutul.', 'gambar1494895744.jpg'),
(8, 'Curug Sodong', 'Air terjun d engan dua jatuhan air yang memiliki cekunga n (nyedong) seperti goa\r\nberada di S ungai Cikanteh memiliki pemandangan yang alami dan menakjubkan,\r\nmerupakan salah satu air terjun yang berada di deretan tebing amfiteater Ciletuh.\r\nDibawah air terjun terdapat pohon rindang untuk berteduh dengan hamparan batu\r\nsungai untu k menikmati suasana gemuruh air terjun dan percikan air membuat\r\nsuasana jadi adem dan santai.\r\nSebenarnya dikawasan ini terdapat tiga curug yang saling berdekatan, yaitu Curug\r\nSodong, Curug Ngelay dan Curug Cikanteh.', 'gambar1494895866.jpg'),
(9, 'Curug Ngelay', 'Curug Ngela y merupakan curug dengan debit air yang rela tif kecil dan bisa disebut\r\ncurug musim an, posisi Curug Ngelay berada pas di atas Curug Sodong.', 'gambar1494895954.jpg'),
(10, 'Curug Cimarinjung', 'Air terjun ini bisa dinikmati dari kejauhan ataupun dari dekat, air terjun yang berdekatan dengan pantai ini memiliki keunikan tersendiri, deretan tebing batu cadas lembah ciletuh diwarnai hijaunya pepohonan menjadikan tempat ini begitu alami ditambah dekatnya jarak antara curug dan pantai mem buat kelebihan tersendiri untuk temp at ini, dari pantai kita sudah bisa melihat pemandangan air terjun Cimarinjung yang begitu besar.', 'gambar1494896133.jpg'),
(11, 'Puncak Darma', 'Puncak Dar ma berada di ketinggian 320 mdpl mempunyai daya tarik yang luar biasa karena me nyuguhkan seluruh bentang alam Teluk Ciletu h dan lanskap kawasan Ciletuh. Dari tempat ini terlihat hamparan bentang alam\r\nsungai Cim arinjung dan sungai Ciletuh di palangpang, la ut lepas samudra hindia, pulau kecil, pegunungan, perkampungan warga dan hampa ran sawah. Selain itu, dari tempat ini pengunjung bisa menikmati terbenamnya ma tahari (sunset) atau pula menyaksika n terbitnya matahari (sunrise).', 'gambar1494896189.jpg'),
(12, 'Pantai Palangpang', 'Pantai palan gpang merupakan pantai di kawasan Teluk Ciletuh yang dikelilingi tebing dan  peman dangan  air  terjun.  Akan  tetapi  pantai  ini\r\npertemuan terdapat pertemuan dua sungai atau dihapitny a dua muara dari sungai Cimarinjung dan sungai Ciletuh.', 'gambar1494896307.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_item`
--

CREATE TABLE IF NOT EXISTS `t_item` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `harga` int(11) NOT NULL,
  `kapasitas` varchar(225) NOT NULL,
  `ket_item` text NOT NULL,
  `fas_item` text NOT NULL,
  `alamat` text NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_item`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `t_item`
--

INSERT INTO `t_item` (`id_item`, `id_kategori`, `nama`, `harga`, `kapasitas`, `ket_item`, `fas_item`, `alamat`, `gambar`, `status`) VALUES
(1, 1, 'Paket Wisata Small', 4000000, '20', 'Paket Rp. 200.000/orang dan jumlah peserta :  20 orang\r\nTujian wisata yang di kunjungi :\r\n1. Panenjoan\r\n2. Curug Awang\r\n3. Curug Tengah\r\n4. Curug Puncak Jeruk\r\n5. Curug Puncak Manik\r\n6. Curug Cimarinjung\r\n7. Pantai Palangpang\r\n8. Puncak Darma.\r\nPaket ini tidak termasuk transportasi untuk tambah transportasi silahkan pesan transportasi.', '1. Homestay\r\n2. Tour Guide\r\n3.Makan 4x ', '', 'gambar1494899852.jpg', 1),
(2, 1, 'Paket Wisata Medium', 2000000, '5', 'Dalam paket ini wisata yang di kunjung adalah : 1. Panenjoan\r\n2. Curug Awang\r\n3. Curug Tengah\r\n4. Curug Puncak Manik\r\n5. Curug Sodong\r\n6. Curug Cikanteh\r\n7. Pantai Palangpang\r\n8. Puncak Darma\r\n9. Curug Cimarinjung', 'Homestay, Tour Guide, Makan 4x, Retribusi masuk kawasan Ciletuh Geopark', '', 'gambar1494901503.jpg', 1),
(22, 0, 'asdfghj', 34567, '5', 'dghjklkjhgkj', 'dfghjklkljkhjjg', 'kljhgfdfsdfghjk', 'gambar1495660042.jpg', 1),
(24, 0, 'joko', 4567, '45', 'sdfghj', 'sdfghj', 'sdfghj', 'gambar1495735673.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_kategori`
--

CREATE TABLE IF NOT EXISTS `t_kategori` (
  `id_kategori` smallint(6) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(30) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `t_kategori`
--

INSERT INTO `t_kategori` (`id_kategori`, `kategori`, `gambar`) VALUES
(1, 'Paket Wisata', 'gambar1495384299.png'),
(2, 'Penginapan', 'gambar1495384324.png'),
(3, 'Transportasi', 'gambar1495384346.png');

-- --------------------------------------------------------

--
-- Table structure for table `t_komentar`
--

CREATE TABLE IF NOT EXISTS `t_komentar` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `no_hp` varchar(35) NOT NULL,
  `komentar` text NOT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_konfirmasi`
--

CREATE TABLE IF NOT EXISTS `t_konfirmasi` (
  `id_kon` int(11) NOT NULL AUTO_INCREMENT,
  `bank_user` varchar(30) NOT NULL,
  `nama_bank` varchar(30) NOT NULL,
  `bank_penerima` varchar(30) NOT NULL,
  `jml_kirim` double NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `ubah` datetime NOT NULL,
  PRIMARY KEY (`id_kon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_kontak`
--

CREATE TABLE IF NOT EXISTS `t_kontak` (
  `id_kontak` int(11) NOT NULL AUTO_INCREMENT,
  `alamat` text NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `t_kontak`
--

INSERT INTO `t_kontak` (`id_kontak`, `alamat`, `no_telp`, `email`) VALUES
(1, 'Jl. Panenjoan - Tamanjaya Desa Tamanjaya Kecamatan Ciemas. Kabupaten Sukabumi 43177', '081646947977', 'Jokoagusgunawan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `t_member`
--

CREATE TABLE IF NOT EXISTS `t_member` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `status` tinytext NOT NULL,
  `reset` varchar(35) NOT NULL,
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `t_member`
--

INSERT INTO `t_member` (`id_user`, `username`, `fullname`, `email`, `password`, `jk`, `telp`, `alamat`, `status`, `reset`) VALUES
(18, 'gunawan1', 'joko gunawan', 'jokogunawan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Laki-Laki', '081646947977', 'sdfghjklkdfghjhgf', '1', ''),
(19, 'joko123', 'agus gunawan', 'joko123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '081646947977', 'jl.pelabuan II km 09 sukabumi', '1', ''),
(16, 'jokoganteng', 'joko Agus', 'jokoagusgunawan@gmail.com', '278ea841c0d133059032b8a75320c3e0', 'Laki-Laki', '081646947977', 'jl.pelabuan II km 09 sukabumi', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_pesanan`
--

CREATE TABLE IF NOT EXISTS `t_pesanan` (
  `id_pesanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `id_rekening` int(11) NOT NULL,
  `kode_pesan` varchar(30) NOT NULL,
  `nama_pembayar` varchar(30) NOT NULL,
  `total` double NOT NULL,
  `bayar` double NOT NULL,
  `sisa` double NOT NULL,
  `tgl_pesanan` datetime NOT NULL,
  `tgl_gunakan` date NOT NULL,
  `batas_bayar` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_pesanan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `t_pesanan`
--

INSERT INTO `t_pesanan` (`id_pesanan`, `id_user`, `id_item`, `id_rekening`, `kode_pesan`, `nama_pembayar`, `total`, `bayar`, `sisa`, `tgl_pesanan`, `tgl_gunakan`, `batas_bayar`, `status`) VALUES
(7, 0, 0, 0, '', 'joko', 0, 0, 0, '2017-05-19 00:00:00', '2017-05-27', '2017-05-20 00:00:00', 0),
(8, 0, 0, 0, '', 'joko', 0, 0, 0, '2017-05-19 00:00:00', '2017-05-12', '2017-05-20 00:00:00', 0),
(17, 0, 0, 0, '', 'joko', 0, 0, 0, '2017-05-19 00:00:00', '2017-05-29', '2017-05-20 00:00:00', 0),
(18, 0, 0, 0, '', 'agus', 0, 0, 0, '2017-05-19 00:00:00', '2017-05-21', '2017-05-20 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_rekening`
--

CREATE TABLE IF NOT EXISTS `t_rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_pemilik` varchar(30) NOT NULL,
  `no_rekening` varchar(30) NOT NULL,
  `nama_bank` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_rekening`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_rekening`
--

INSERT INTO `t_rekening` (`id_rekening`, `nama_pemilik`, `no_rekening`, `nama_bank`, `status`) VALUES
(0, 'joko', '3456789', 'BCA', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
