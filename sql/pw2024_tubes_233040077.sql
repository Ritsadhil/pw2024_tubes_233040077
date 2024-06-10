-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2024 at 02:47 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2024_tubes_233040077`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `judul`, `tanggal`, `link`, `gambar`) VALUES
(13, 'VCT Masters Shanghai - Swiss Stage - Day 1', 'May 23, 2024', 'https://www.youtube.com/watch?v=Mv3CSU7Zf3M', '665abe1d7d42e.jpg'),
(14, 'VCT Masters Shanghai - Swiss Stage - Day 2', 'May 24, 2024', 'https://www.youtube.com/watch?v=SJHCCbrGEvc', '665abfde23772.jpg'),
(15, 'VCT Masters Shanghai - Swiss Stage - Day 3', 'May 25, 2024', 'https://www.youtube.com/watch?v=TAZkZ4EWDv4', '665ac01e02fcf.jpg'),
(16, 'VCT Masters Shanghai - Swiss Stage - Day 4', 'May 26, 2024', 'https://www.youtube.com/watch?v=gEXknVgGjJ8', '665ac0a527b62.jpg'),
(17, 'VCT Masters Shanghai - Swiss Stage - Day 5', 'May 27, 2024', 'https://www.youtube.com/watch?v=03VHNppvYZQ', '665ac1250da6d.jpg'),
(18, 'VCT Masters Shanghai - Playoffs - Day 6', ' MAY 30, 2024', 'https://www.youtube.com/watch?v=u1RAJDa1IGQ', '665ac1b5d36aa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` int NOT NULL,
  `ign` varchar(255) NOT NULL,
  `tim_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `ign`, `tim_id`) VALUES
(88, 'd4v41', 1),
(89, 'f0rsaken', 1),
(90, 'mindfreak', 1),
(91, 'something', 1),
(92, 'jinggg', 1),
(93, 'Sayaplayer', 2),
(94, 'Carpe', 2),
(95, 'iZu', 2),
(96, 'xccurate', 2),
(97, 'Rossy', 2),
(98, 'Meteor', 3),
(99, 't3xture', 3),
(100, 'Lakia', 3),
(101, 'Munchkin', 3),
(102, 'Karon', 3),
(103, 'Boaster', 4),
(104, 'Derke', 4),
(105, 'Alfazer', 4),
(106, 'Leo', 4),
(107, 'Chronicle', 4),
(108, 'Boo', 5),
(109, 'benjyfishy', 5),
(110, 'MiniBoo', 5),
(111, 'RieNs', 5),
(112, 'Wo0t', 5),
(113, 'paTiTek', 5),
(114, 'qRaxs', 6),
(115, 'MrFaliN', 6),
(116, 'ATA KAPTAN', 6),
(117, 'yetujey', 6),
(118, 'cNed', 6),
(119, 'Asuna', 7),
(120, 'bang', 7),
(121, 'Cryocells', 7),
(122, 'eeiu', 7),
(123, 'Boostio', 7),
(124, 'JonahP', 8),
(125, 'trent', 8),
(126, 'valyn', 8),
(127, 'leaf', 8),
(128, 'icy', 8),
(129, 'kiNgg', 9),
(130, 'Mazino', 9),
(131, 'aspas', 9),
(132, 'tex', 9),
(133, 'C0M', 9),
(134, 'Haodong', 10),
(135, 'CHICHOO', 10),
(136, 'nobody', 10),
(137, 'Zmjjkk', 10),
(138, 'Smoggy', 10),
(139, 'Muggle', 10),
(140, 'AAAAY', 11),
(141, 'BerLIN', 11),
(142, 'Lysoar', 11),
(143, 'autumn', 11),
(144, 'Life', 11),
(145, 'Nicc', 12),
(146, 'TvirusLuke', 12),
(147, 'vo0kashu', 12),
(148, 'Dingwei', 12),
(149, 'TZH', 12),
(150, 'HaTo', 12),
(151, 'Shion7', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`id`, `nama`, `region`, `logo`) VALUES
(1, 'Paper Rex', 'pacific', 'Paper_Rex.png'),
(2, 'T1', 'pacific', 'T1.png'),
(3, 'Gen g', 'pacific', 'Gen.G.png'),
(4, 'Fnatic', 'emea', 'Fnatic.png'),
(5, 'Team Heretics', 'emea', 'Team_Heretics.png'),
(6, 'FUT Esports', 'emea', 'Fut.png'),
(7, '100 Thieves', 'americas', '100_Thieves.png'),
(8, 'G2 Esports', 'americas', 'G2.png'),
(9, 'Leviatán', 'americas', 'Leviatán.png'),
(10, 'Edward Gaming', 'china', 'edg.png'),
(11, 'FunPlus Phoenix', 'china', 'fpx.png'),
(12, 'Dragon Ranger Gaming', 'china', 'drg.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'nur', '$2y$10$zefz/hKdetfg5OYKGT8Q2uVRqkErJikYRnyVfma4jz9x7Lif/0kv6'),
(4, 'dzaki', '$2y$10$OvYeCb2wDSiMlybafz5h.OWdFGQzBenAxVmLHCpbF7oJPF6THEcMm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tim_id` (`tim_id`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`tim_id`) REFERENCES `tim` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
