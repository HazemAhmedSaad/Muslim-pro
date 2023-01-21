-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 04:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sw`
--

-- --------------------------------------------------------

--
-- Table structure for table `hadith`
--

CREATE TABLE `hadith` (
  `id` int(11) NOT NULL,
  `Content` varchar(300) NOT NULL,
  `NameOfNarrator` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hadith`
--

INSERT INTO `hadith` (`id`, `Content`, `NameOfNarrator`) VALUES
(55, 'the prophet spoke in a simple and clear way so that all those who heard him ,understood him', 'Aishah'),
(57, '	 I have never seen anyone more smiling than Gods messenger', 'Abdullah Ibn Alharith'),
(58, 'Allah created one hundred (parts of mercy) and He distributed one amongst His creation and kept this one hundred excepting one with Himself (for the Day of Resurrection', 'Abu Huraira'),
(60, 'Prophet (peace and blessings of Allah be upon him) said, \"The most superior among you (Muslims) are those who learn the Quran and teach it to others\"', 'Uthman bin Affan');

-- --------------------------------------------------------

--
-- Table structure for table `hijj`
--

CREATE TABLE `hijj` (
  `id` int(11) NOT NULL,
  `hijj_image` longtext CHARACTER SET utf8 NOT NULL,
  `hijj_place` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hijj`
--

INSERT INTO `hijj` (`id`, `hijj_image`, `hijj_place`) VALUES
(38, '../static/img/03-56-48hijj1.jpg', ' Abar Ali '),
(39, '../static/img/03-57-16hijj2.jpg', 'Yalamalm'),
(40, '../static/img/03-57-31hijj3.jpg', 'zaat irq'),
(41, '../static/img/03-57-48hijj4.jpg', 'qarn al manazil');

-- --------------------------------------------------------

--
-- Table structure for table `inspiration`
--

CREATE TABLE `inspiration` (
  `image_id` int(11) NOT NULL,
  `image` longtext CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inspiration`
--

INSERT INTO `inspiration` (`image_id`, `image`) VALUES
(162, '../static/img/02-56-28supp2.jpg'),
(163, '../static/img/02-58-29supp1.jpeg'),
(164, '../static/img/02-58-37supp3.jpg'),
(165, '../static/img/02-58-44supp4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `supplication`
--

CREATE TABLE `supplication` (
  `supp_id` int(11) NOT NULL,
  `content` varchar(300) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplication`
--

INSERT INTO `supplication` (`supp_id`, `content`) VALUES
(115, 'O God, to You I have bowed, and in You I have believed, and to You I have submitted my hearing, my eyesight, my marrow, my greatness, and my protection are subservient to You.'),
(116, 'I seek refuge in the perfect words of God from His wrath and punishment, and from the evil of His servants, and from the temptations of devils and their wrath'),
(117, 'O Allah, I seek refuge in You from worry and sorrow, helplessness and laziness, miserliness and cowardice, the burden of debt and being overpowered'),
(118, 'O Allah, spare me through your lawful things from what is forbidden, and suffice me through your grace to those who besides you.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(300) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `roleid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `roleid`) VALUES
(26, '', 'muhm.aly@outlook.com,', '123', 2),
(28, '', 'admin@gmail.com', 'admin', 1),
(29, '', 'hazem@gmail.com', '123', 2),
(50, '', 'taha@gmail.com', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hadith`
--
ALTER TABLE `hadith`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hijj`
--
ALTER TABLE `hijj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspiration`
--
ALTER TABLE `inspiration`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplication`
--
ALTER TABLE `supplication`
  ADD PRIMARY KEY (`supp_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `roleid` (`roleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hadith`
--
ALTER TABLE `hadith`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `hijj`
--
ALTER TABLE `hijj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `inspiration`
--
ALTER TABLE `inspiration`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplication`
--
ALTER TABLE `supplication`
  MODIFY `supp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`roleid`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
