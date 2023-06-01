-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 09:12 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtoko1`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `inputPelanggan` (`kode` VARCHAR(10), `nama` VARCHAR(50), `jk` VARCHAR(5), `tmp_lahir` VARCHAR(50), `tgl_lahir` DATE, `email` VARCHAR(50), `kartu_id` INT)  BEGIN
	INSERT INTO pelanggan(kode,nama,jk,tmp_lahir,tgl_lahir,email,kartu_id)
  VALUES(kode,nama,jk,tmp_lahir,tgl_lahir,email,kartu_id);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inputProduk` (`kode` VARCHAR(10), `prod` VARCHAR(50), `hrg_beli` DOUBLE, `hrg_jual` DOUBLE, `stok` INT, `min_stok` INT, `idj` INT)  BEGIN
	INSERT INTO produk (kode, nama_produk, harga_beli,harga_jual, stok, min_stok,jenis_produk_id)   
	VALUES (kode, prod, hrg_beli,hrg_jual, stok, min_stok, idj);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `showPelanggan` ()  BEGIN
	SELECT * FROM pelanggan;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `showProduk` ()  BEGIN
	SELECT * FROM produk;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `totalPesanan` ()  BEGIN
	SELECT produk.nama_produk, pesanan_items.jumlah, pesanan.total 
  FROM ((pesanan_items INNER JOIN pesanan ON pesanan_items.id_pesanan = pesanan.id)
        INNER JOIN produk ON pesanan_items.id_produk =produk.id);
END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `inputPelanggan` (`kode` VARCHAR(11), `nama_pelanggan` VARCHAR(255), `jk` VARCHAR(1), `tmp_lahir` VARCHAR(255), `tgl_lahir` DATE, `email` VARCHAR(255), `kartu_id` INT(11)) RETURNS INT(11) BEGIN
  DECLARE id_pelanggan INT(11);
  
  -- memasukkan data pelanggan baru ke dalam tabel pelanggan
  INSERT INTO pelanggan (kode, nama_pelanggan, jk, tmp_lahir, tgl_lahir, email, kartu_id) VALUES (kode, nama_pelanggan, jk, tmp_lahir, tgl_lahir, email, kartu_id);
  
  -- menyimpan id pelanggan yang baru saja dibuat
  SET id_pelanggan = LAST_INSERT_ID();
  
  RETURN id_pelanggan;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `ket` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`id`, `nama`, `ket`) VALUES
(1, 'furniture', 'tersedia'),
(2, 'minuman', 'tersedia'),
(3, 'makanan', 'tidak tersedia'),
(4, 'elektronik', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `kartu`
--

CREATE TABLE `kartu` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `nama` varchar(30) NOT NULL,
  `diskon` double DEFAULT 0,
  `iuran` double DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kartu`
--

INSERT INTO `kartu` (`id`, `kode`, `nama`, `diskon`, `iuran`) VALUES
(1, '10111', 'Gold', 20000, 2000),
(2, '10112', 'Silver', 15000, 1500),
(3, '10113', 'platinum', 10000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `tmp_lahir` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `kartu_id` int(11) NOT NULL,
  `alamat` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `kode`, `nama`, `jk`, `tmp_lahir`, `tgl_lahir`, `email`, `kartu_id`, `alamat`) VALUES
(1, '011101', 'Dion', 'P', 'Bandung', '1997-09-06', 'agun@gmail.com', 1, NULL),
(2, '011102', 'Angga', 'L', 'Jogja', '1999-11-23', 'angga@gmail.com', 2, NULL),
(3, '011103', 'Fia', 'P', 'Kediri', '1998-01-13', 'fia@gmail.com', 3, NULL),
(5, '011105', 'Suandi', 'L', 'Ketapang', '1997-08-08', 'suandi@gmail.com', 1, NULL),
(6, '011106', 'Vika', 'P', 'Kaltim', '1995-03-18', 'vika@gmail.com', 2, NULL),
(7, '011104', 'Dion', 'L', 'Kalbar', '1998-03-09', 'dion@gmail.com', 4, NULL),
(12, '0110', 'Marni', 'P', 'Jakarta', '2023-01-02', 'marni@gmail.com', 1, NULL),
(17, '011015', 'Marni', 'P', 'Jakarta', '2023-01-02', 'marni@gmail.com', 1, NULL),
(18, '', 'Marni', 'P', 'Jakarta', '2023-01-02', 'marni@gmail.com', 1, NULL),
(20, '011020', 'Marni', 'P', 'Jakarta', '2023-01-02', 'marni@gmail.com', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `no_kuitansi` varchar(10) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `ke` int(11) DEFAULT NULL,
  `pesanan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_vendor` int(11) NOT NULL,
  `tgl_pembelian` date DEFAULT NULL,
  `jml` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `total` double DEFAULT NULL,
  `pelanggan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `total`, `pelanggan_id`) VALUES
(1, '2023-11-01', 3750000, 1),
(2, '2023-05-02', NULL, 1),
(3, '2023-05-02', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_items`
--

CREATE TABLE `pesanan_items` (
  `id_pesanan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan_items`
--

INSERT INTO `pesanan_items` (`id_pesanan`, `id_produk`, `jumlah`) VALUES
(1, 2, 5),
(2, 6, 4),
(3, 3, 7);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pesanan_produk_vw`
-- (See below for the actual view)
--
CREATE TABLE `pesanan_produk_vw` (
`nama` varchar(50)
,`tanggal` date
,`nama_produk` varchar(50)
,`jumlah` int(11)
,`harga_jual` double
,`total` double
);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `harga_jual` double NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `min_stok` int(11) NOT NULL,
  `jenis_produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama_produk`, `harga_beli`, `harga_jual`, `stok`, `min_stok`, `jenis_produk_id`) VALUES
(1, 'TV01', 'TV 21 Inch', 20000000, 30000000, 10, 3, 1),
(2, 'TV02', 'Kulkas', 40000000, 50000000, 10, 3, 1),
(3, 'K001', 'Meja Makan', 1000000, 2000000, 4, 2, 4),
(4, 'M001', 'Taro', 4000, 5000, 3, 2, 2),
(5, 'T001', 'Milk Teh', 3000, 4000, 3, 10, 3),
(6, 'TK01', 'TV 25 Inch', 25000000, 35000000, 10, 3, 1),
(7, 'TV03', 'Mesin Cuci', 15000000, 20000000, 4, 1, 1),
(9, '', 'Mesin Cuci', 15000000, 20000000, 4, 1, 1),
(10, 'TV009', 'Mesin Cuci', 15000000, 20000000, 4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `nama_vendor` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure for view `pesanan_produk_vw`
--
DROP TABLE IF EXISTS `pesanan_produk_vw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pesanan_produk_vw`  AS SELECT `pelanggan`.`nama` AS `nama`, `pesanan`.`tanggal` AS `tanggal`, `produk`.`nama_produk` AS `nama_produk`, `pesanan_items`.`jumlah` AS `jumlah`, `produk`.`harga_jual` AS `harga_jual`, sum(`pesanan_items`.`jumlah` * `produk`.`harga_jual`) AS `total` FROM (((`pesanan` join `pelanggan` on(`pesanan`.`pelanggan_id` = `pelanggan`.`id`)) join `pesanan_items` on(`pesanan`.`id` = `pesanan_items`.`id_pesanan`)) join `produk` on(`pesanan_items`.`id_produk` = `produk`.`id`)) GROUP BY `pesanan`.`id`, `produk`.`id`, `pelanggan`.`id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kartu`
--
ALTER TABLE `kartu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_kuitansi` (`no_kuitansi`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_vendor` (`id_vendor`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan_items`
--
ALTER TABLE `pesanan_items`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kartu`
--
ALTER TABLE `kartu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesanan_items`
--
ALTER TABLE `pesanan_items`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`),
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`id_vendor`) REFERENCES `vendor` (`id`);

--
-- Constraints for table `pesanan_items`
--
ALTER TABLE `pesanan_items`
  ADD CONSTRAINT `pesanan_items_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`),
  ADD CONSTRAINT `pesanan_items_ibfk_2` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
