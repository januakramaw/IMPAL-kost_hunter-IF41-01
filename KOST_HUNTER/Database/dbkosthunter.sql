-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 11:04 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkosthunter`
--

-- --------------------------------------------------------

--
-- Table structure for table `as_admin`
--

CREATE TABLE `as_admin` (
  `id_admin` int(11) NOT NULL,
  `name_admin` varchar(128) NOT NULL,
  `email_admin` varchar(128) NOT NULL,
  `password_admin` varchar(256) NOT NULL,
  `role_id_admin` int(11) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `as_admin`
--

INSERT INTO `as_admin` (`id_admin`, `name_admin`, `email_admin`, `password_admin`, `role_id_admin`, `is_active`) VALUES
(8, 'janu', 'janu@gmail.com', '$2y$10$5mKH2ugHJPQf79Hbrx54A.QivJ4/7hkz1gkKNuE180qk2yjM2lC0S', 1, 1),
(9, 'adminrafid', 'adminrafid@gmail.com', '$2y$10$kwUscl97umDwO75Ati3/N.XC9Ns3zpNm6v3IFARbiIAoLgQDgkOuG', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_hunian` int(11) NOT NULL,
  `namahunian` varchar(255) NOT NULL,
  `FASILITAS` varchar(10000) NOT NULL,
  `typehunian` varchar(255) NOT NULL,
  `iklantime` varchar(25) NOT NULL,
  `lokasi` varchar(500) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_hunian`, `namahunian`, `FASILITAS`, `typehunian`, `iklantime`, `lokasi`, `harga`, `foto`) VALUES
(23, 'Sekarep e ', 'Kamar tidur 5, kamar mandi 2 , kasur 5 , meja 5 , parkiran motor', 'Kontrakan', '', 'Perumahan PBB blok 1A nomer 25 Rt 03 Rw 01 dayeuh Kolot, Bandung', '30000000', '12.jpg'),
(24, 'jawa', 'kamar tidur 7 , kamar mandi 3 , kasur 8 , lemari 8 , meja 7 , parkiran motor , garasi mobil , dapur , tempat jemuran', 'Kontrakan', '', 'Jalan bunga bakung nomer 7 rt 01 rw 01 margacinta, kordon', '57000000', 'kons.jpg'),
(26, 'Terserah ', 'kasur , lemari , air conditioner , kamar mandi dalam , parkiran mobil', 'Kost', '', 'Jalan Umayah 1 nomer 45 Rt 03 Rw 09 Sukabirus ,Bandung', '1000000000', '15.jpg'),
(27, 'Feels like home uy', 'kasur , lemari , air conditioner , kamar mandi dalam , parkiran mobil, Gym , Balkon', 'Kost', '', 'Jalan Umayah 2 nomer 100 Rt 03 Rw 09 Sukabirus ,Bandung', '15000000', '31.jpg');

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
(15, 'janu', 'janu@gmail.com', 'default.jpg', '$2y$10$S8IrQPRd3A0uXhk5MufkiOAMjze3I3digNN1f4ax62PAxMaYYG2si', 2, 1, 1563631519),
(16, 'cbr', 'cbr@gmail.com', 'default.jpg', '$2y$10$QqMJ0/ZmfMGD7AdkHTMk1eofC6/OZaiBT6FGy9VlIPSbNACck8JvC', 2, 1, 1568034161),
(17, 'veb', 'goreng@gmail.com', 'default.jpg', '$2y$10$rMcQSzMLl78cX/gqZ2DY1.PNIlRNUWhLJ0fjzScNjS7PBJxn/ftnm', 2, 1, 1569350541),
(18, 'impal', 'impal@gmail.com', 'default.jpg', '$2y$10$vSVguwAC0apgpF/h4gZIy.rcTK0M.0j5Gpvt.f8MP5v1xD1bQn0.q', 2, 1, 1569907400),
(19, 'wardhana', 'lolooo@gmail.com', 'default.jpg', '$2y$10$6nsCSjEV7lx0dcjYnHOGZe97wkJLfSQQ/KlP5FZONfW8WGSohJTqC', 2, 1, 1569909364),
(20, 'rafid', 'rafid@gmail.com', 'default.jpg', '$2y$10$jt5WzW.JvQ/ioSOXUCjw0OvJ4aCM1nbWaRORYf/3LWxRSmTFBldYa', 2, 1, 1569909572),
(21, 'wardhana12', 'kkk@gmail.com', 'default.jpg', '$2y$10$3ReVEtEMLJwRDNFlO7.42.w3ZmBpSDxqP51tfflpBz2pz1eoeHrye', 2, 1, 1569910165),
(22, 'jjj', 'jjj@gmail.com', 'default.jpg', '$2y$10$ZLE7KAq.EeQCS2aqUHW33u1kBP8aohRC1VovH/ZRS4vlzmL8/8Q5S', 2, 1, 1569910214),
(24, 'wardhana', 'msi@gmail.com', 'default.jpg', '$2y$10$CLMIf3KI7yelTJONyCGU6OPfIrCQT0C5RjzZt4WZ899q/k10/w38a', 2, 1, 1575807953),
(26, 'Attala Rafid', 'attalarafid@gmail.com', 'default.jpg', '$2y$10$Wzi0vx9QE7lKLwPCq3xBseV5YOcxw8F0/rO1rWvRCCCbubg4CJ8yK', 2, 1, 1576087922);

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
-- Indexes for table `as_admin`
--
ALTER TABLE `as_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_hunian`);

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
-- AUTO_INCREMENT for table `as_admin`
--
ALTER TABLE `as_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_hunian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
