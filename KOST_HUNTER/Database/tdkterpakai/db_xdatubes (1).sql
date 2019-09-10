-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 06:39 PM
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
  `newsbody` varchar(255) NOT NULL,
  `merkhp` varchar(255) NOT NULL,
  `newstime` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `headline`, `newsbody`, `merkhp`, `newstime`) VALUES
(1, 'Telah Dirilis Samsung Galaxy Note 10', 'Samsung telah mempersiapkan dengan sebaik mungkin, tak lama hanya 4 bulan dari rilisnya Samsung Galaxy S10, Samsung Galaxy Note 10 lagi-lagi berhasil mencuri perhatian penduduk diseluruh dunia, selain penggunaan processor seperti pada laptop, kamera nya t', 'Samsung', '22-04-2019, 22:05:23');

-- --------------------------------------------------------

--
-- Table structure for table `image_path`
--

CREATE TABLE `image_path` (
  `No` int(11) NOT NULL,
  `ImgName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_path`
--

INSERT INTO `image_path` (`No`, `ImgName`) VALUES
(11, 'asdasd.png'),
(12, 'PS_Tutorial_12.png'),
(13, 'PS_Tutorial_14.png'),
(14, 'Doppelganger_resize.jpg'),
(15, '19575995.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `No` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`No`, `Username`, `Pass`) VALUES
(7, 'admin', '7815696ecbf1c96e6894b779456d330e'),
(8, 'Vio Sagara Perkasa', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL,
  `RegisTime` varchar(25) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Username`, `Email`, `Pass`, `RegisTime`, `status`) VALUES
('admin', 'admin@admin.com', '7815696ecbf1c96e6894b779456d330e', '03-04-2019, 22:50:23', ''),
('Vio Sagara Perkasa', 'sagaraperkasa347@gmail.com', '202cb962ac59075b964b07152d234b70', '22-04-2019, 16:10:30', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `image_path`
--
ALTER TABLE `image_path`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image_path`
--
ALTER TABLE `image_path`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
