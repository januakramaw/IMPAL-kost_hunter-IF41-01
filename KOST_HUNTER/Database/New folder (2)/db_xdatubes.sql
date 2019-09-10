-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 06:28 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_xdatubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `newsbody` varchar(10000) NOT NULL,
  `merkhp` varchar(255) NOT NULL,
  `newstime` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `headline`, `newsbody`, `merkhp`, `newstime`) VALUES
(1, 'Telah Dirilis Samsung Galaxy Note 10', 'Samsung telah mempersiapkan dengan sebaik mungkin, tak lama hanya 4 bulan dari rilisnya Samsung Galaxy S10, Samsung Galaxy Note 10 lagi-lagi berhasil mencuri perhatian penduduk diseluruh dunia, selain penggunaan processor seperti pada laptop, kamera nya tak main-main, hingga 200Mp dan diklaim sebagai kamera yang menangkap pixel terbesar.', 'Samsung', '22-04-2019, 22:05:23'),
(2, 'Xiaomi Mengusung Ponsel Bertenaga Snapdragon 710', 'Xiaomi dengan kegaharannya pada Zamanaw, kini semakin garang dengan hadirnya Xiaomi MI 8 SE, Ponsel Luarbiasa di harganya yang selalu takkan pernah membuat kocek menjadi jebol.', 'Xiaomi', '22-04-2019, 23:59:11'),
(3, 'Huawei P30 Pro', 'Kini Telah Hadir Huawei P30 Pro dengan performa sangat kencang.', 'Huawei', ''),
(4, 'Apple Meluncurkan iPhone XI', 'Tak henti-hentinya Apple mengejutkan pangsa pasar global, sekarang malah meluncurkan iPhone XI yang performa chipset nya sangat buas.', 'Apple', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'saddaadsadasd', 'saddaadsadasd@asdas.com', 'default.jpg', '$2y$10$CBYwzGicx6MOd55esSDKcObDkLRHHhghgKLmbe22ck0lvsbgQ3X1K', 2, 1, 1556028408),
(2, '123', '123@gmail.com', 'default.jpg', '$2y$10$.sYrx.dZLpsQPUhkBQVDF.6r.4Q5YrZ.XJck730uDve9lxerPghly', 2, 1, 1556028459),
(3, 'asd', 'asdasdasd@gmail.com', 'default.jpg', '$2y$10$ht10s7KAYw12OvoEx/yB.O6Qhaq6nneBmURNSuAGCmX1mKg10j3Nm', 2, 1, 1556031919),
(4, 'ert', 'ert@gmail.com', 'default.jpg', '$2y$10$yJFcbDo7JeOGEezRqyR/COAeVTVTScULl.lBrCGJIL2e/NH6LFZUy', 2, 1, 1556031952);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
