-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 02:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiku`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `sinopsis` text DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `tanggal_rilis` date DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul`, `sinopsis`, `keterangan`, `tanggal_rilis`, `foto`) VALUES
(2, 'Avengers: Endgame', 'Avengers: Endgame is a 2019 American superhero film based on the Marvel Comics superhero team the Avengers, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures. It is the direct sequel to Avengers: Infinity War (2018) and the 22nd film in the Marvel Cinematic Universe (MCU). It was directed by Anthony and Joe Russo and written by Christopher Markus and Stephen McFeely, and features an ensemble cast including Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth, Scarlett Johansson, Jeremy Renner, Don Cheadle, Paul Rudd, Brie Larson, Karen Gillan, Danai Gurira, Benedict Wong, Jon Favreau, Bradley Cooper, Gwyneth Paltrow, and Josh Brolin. In the film, the surviving members of the Avengers and their allies attempt to reverse the damage caused by Thanos in Infinity War.', '3 Hours 1 Minute', '2019-04-26', 'Endgame.jpg'),
(5, 'Ant-Man and the Wasp', 'Ant-Man and the Wasp is a 2018 American superhero film based on the Marvel Comics characters Scott Lang / Ant-Man and Hope van Dyne / Wasp. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is the sequel to Ant-Man (2015) and the 20th film in the Marvel Cinematic Universe (MCU). The film is directed by Peyton Reed and written by the writing teams of Chris McKenna and Erik Sommers, and Paul Rudd, Andrew Barrer and Gabriel Ferrari. It stars Rudd as Scott Lang and Evangeline Lilly as Van Dyne, alongside Michael Peña, Walton Goggins, Bobby Cannavale, Judy Greer, Tip \"T.I.\" Harris, David Dastmalchian, Hannah John-Kamen, Abby Ryder Fortson, Randall Park, Michelle Pfeiffer, Laurence Fishburne, and Michael Douglas. In Ant-Man and the Wasp, the titular pair work with Hank Pym to retrieve Janet van Dyne from the quantum realm.', '2 Hours 58 Minute', '2018-07-25', 'antman.jpg'),
(6, 'Venom', 'Venom is a 2018 American superhero film based on the Marvel Comics character of the same name, produced by Columbia Pictures in association with Marvel[5] and Tencent Pictures. Distributed by Sony Pictures Releasing, it is the first film in the Sony Pictures Universe of Marvel Characters. Directed by Ruben Fleischer from a screenplay by Jeff Pinkner, Scott Rosenberg, and Kelly Marcel, it stars Tom Hardy as Eddie Brock / Venom, alongside Michelle Williams, Riz Ahmed, Scott Haze, and Reid Scott. In Venom, journalist Brock gains superpowers after being bound to an alien symbiote whose species plans to invade Earth.', '1 Hours 58 Minute', '2018-07-06', 'venom.png');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(3) NOT NULL,
  `nik` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nik`, `nama`, `kelas`) VALUES
(1, '2147483647', 'Jyun', NULL),
(24, 'A.12131.13131', 'Haru~Tan', 'a2'),
(25, 'A.12131.13131', 'Jyun', 'a2'),
(26, '1212131', 'Jyun', 'a2'),
(27, '2147483647', 'haru', 'a2'),
(28, 'A.12131.13131', 'Tester', '131313');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(15) NOT NULL,
  `jadwal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `jadwal`) VALUES
(1, 'Siang'),
(2, 'Sore');

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE `kursi` (
  `id_kursi` int(11) NOT NULL,
  `nokur` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kursi`
--

INSERT INTO `kursi` (`id_kursi`, `nokur`) VALUES
(1, 'A'),
(2, 'A2'),
(3, 'A3'),
(4, 'A4'),
(5, 'B1'),
(6, 'B2'),
(7, 'B3'),
(8, 'B4'),
(9, 'C1'),
(10, 'C2'),
(11, 'C3'),
(12, 'C4'),
(13, 'D1'),
(14, 'D2'),
(15, 'D3'),
(16, 'D4'),
(17, 'E1'),
(18, 'E2'),
(19, 'E3'),
(20, 'E4');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_film` int(11) DEFAULT NULL,
  `tanggal_nonton` date DEFAULT NULL,
  `id_jadwal` int(11) DEFAULT NULL,
  `nokur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_film`, `tanggal_nonton`, `id_jadwal`, `nokur`) VALUES
(1, 1, '2020-07-23', 1, 0),
(2, 2, '2020-07-23', 1, 0),
(3, 2, '2020-07-23', 1, 0),
(4, 2, '2020-07-23', 1, 0),
(5, 2, '2020-07-23', 1, 0),
(6, 2, '2020-07-23', 1, 0),
(7, 2, '2020-07-23', 1, 0),
(8, 2, '2020-07-16', 1, 0),
(9, 2, '2020-07-16', 1, 0),
(10, 2, '2020-07-16', 1, 0),
(11, 2, '2020-07-16', 1, 0),
(12, 2, '2020-07-16', 1, 0),
(13, 2, '2020-07-16', 1, 0),
(14, 2, '2020-07-16', 1, 0),
(15, 2, '2020-07-16', 1, 0),
(16, 2, '2020-07-16', 1, 0),
(17, 2, '2020-07-16', 1, 0),
(18, 2, '2020-07-16', 1, 0),
(19, 2, '2020-07-16', 1, 0),
(20, 2, '2020-07-16', 1, 0),
(21, 2, '2020-07-16', 1, 0),
(22, 2, '2020-07-16', 1, 0),
(23, 2, '2020-07-16', 1, 0),
(24, 2, '2020-07-16', 1, 0),
(25, 2, '2020-07-16', 1, 0),
(26, 2, '2020-07-16', 1, 0),
(27, 2, '2020-07-16', 1, 0),
(28, 2, '2020-07-16', 1, 0),
(29, 2, '2020-07-16', 1, 0),
(30, 2, '2020-07-16', 1, 0),
(31, 2, '2020-07-16', 1, 0),
(32, 2, '2020-07-16', 1, 0),
(33, 2, '2020-07-16', 1, 0),
(34, 2, '2020-07-16', 1, 0),
(35, 2, '2020-07-16', 1, 0),
(36, 2, '2020-07-15', 1, 0),
(37, 2, '2020-07-15', 1, 0),
(38, 2, '2020-07-15', 1, 0),
(39, 2, '2020-07-10', 1, 0),
(40, 2, '2020-07-10', 1, 0),
(41, 2, '2020-07-16', 1, 0),
(42, 2, '2020-07-16', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `soon`
--

CREATE TABLE `soon` (
  `id_cs` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `sinopsis` text DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `tanggal_rilis` date DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soon`
--

INSERT INTO `soon` (`id_cs`, `judul`, `sinopsis`, `keterangan`, `tanggal_rilis`, `foto`) VALUES
(1, 'Black Widows', 'Black Widow is an upcoming American superhero film based on the Marvel Comics character of the same name. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is intended to be the 24th film in the Marvel Cinematic Universe (MCU). The film was directed by Cate Shortland and written by Eric Pearson from a story by Jac Schaeffer and Ned Benson, and stars Scarlett Johansson as Natasha Romanoff / Black Widow alongside Florence Pugh, David Harbour, O-T Fagbenle, William Hurt, Ray Winstone, and Rachel Weisz. Set after Captain America: Civil War (2016), the film sees Romanoff on the run and forced to confront her past.', 'Cooming soon', '2020-11-06', 'black-widow-poster.jpg'),
(2, 'Thor: Love and Thunder', 'Thor: Love and Thunder is an upcoming superhero film based on the Marvel Comics superhero of the same name. The film is a sequel to Thor, Thor: The Dark World, Thor: Ragnarok, and Avengers: Endgame. It is the twenty-eighth film in the Marvel Cinematic Universe and the fifth film of Phase Four. The film will be released in the United States on February 11, 2022', 'Cooming soon', '2022-02-11', 'thor.jpg'),
(3, 'Doctor Strange Multiverse Madness', 'Doctor Strange in the Multiverse of Madness is an upcoming superhero film, based on the Marvel Comics superhero of the same name. The film is a sequel to Doctor Strange and Avengers: Endgame, and a crossover/sequel to WandaVision and Loki. It is the twenty-ninth film in the Marvel Cinematic Universe and the sixth and final film of Phase Four. The film will be released in the United States on March 25, 2022.[2]', 'Cooming Soon', '2022-03-25', 'doctor_strange.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `soon2`
--

CREATE TABLE `soon2` (
  `id_cs2` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `sinopsis` text DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `tanggal_rilis` date DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soon2`
--

INSERT INTO `soon2` (`id_cs2`, `judul`, `sinopsis`, `keterangan`, `tanggal_rilis`, `foto`) VALUES
(1, 'Spider-Man: Far From Home', 'Parker and his classmates travel to Venice, Italy, where the Water Elemental attacks. Parker helps protect his classmates, while Beck arrives and destroys the creature. Fury meets with Parker and gives him Stark\'s glasses, which were meant for his successor. The glasses enable him to communicate with and take command of the artificial intelligence E.D.I.T.H., which has access to Stark Industries\' databases and commands a large orbital weapons supply. Beck claims to hail from an alternate reality within the Multiverse, where the four Elementals killed his family and destroyed his civilization. He predicts that the Fire Elemental will appear in Prague. Parker declines Fury\'s invitation to join the fight and returns to his class trip.', '2 Hours 9 Minute', '2019-07-29', 'Spiderman.jpg'),
(2, 'Doctor Strange', 'Doctor Stephen Strange is a fictional character appearing in American comic books published by Marvel Comics. Created by artist Steve Ditko and writer Stan Lee,[5] the character first appeared in Strange Tales #110 (cover-dated July 1963). Doctor Strange serves as the Sorcerer Supreme, the primary protector of Earth against magical and mystical threats. Inspired by stories of black magic and Chandu the Magician, Strange was created during the Silver Age of Comic Books to bring a different kind of character and themes of mysticism to Marvel Comics.', '1 Hours 55 Minute', '2016-10-26', 'doctor.jpg'),
(3, 'Avengers: Infinity War', 'Having acquired the Power Stone, one of the six Infinity Stones, from the planet Xandar, Thanos and his lieutenants—Ebony Maw, Cull Obsidian, Proxima Midnight, and Corvus Glaive—intercept the spaceship carrying the survivors of Asgard\'s recent destruction.[N 1] As they extract the Space Stone from the Tesseract, Thanos subdues Thor, overpowers Hulk, and kills Loki. Thanos also kills Heimdall after he sends Hulk to Earth using the Bifröst. Thanos and his lieutenants depart, destroying the ship.', '2 Hours 40 Minute', '2018-04-25', 'infinty.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Adrian Abimanyu Bagaskara', 'adrianabimanyubagaskara@gmail.com', '$2y$10$4KPLTrfj5K8BXarcAj8nWOkgJb4P9PDZm6.zMcTWBiU/hHWWNX5PK'),
(2, 'Adrian Abimanyu Bagaskara', 'adrianbagas93@yahoo.com', '$2y$10$ui/KXixyxJqx1xwHyBff/.BU9qxrRzLkRgIMZcgysWY6cyRHtkJTO'),
(3, 'Adrian Abimanyu Bagaskara', 'adrianabimanyubagaskara@yahoo.com', '$2y$10$241thxoPBeCoRXoyzr6jM.xUPGcVgWUWWEkP1c3naJtM4jEI00GU.'),
(4, 'Adrian Abimanyu Bagaskara', 'hyushuu@gmail.com', '$2y$10$q2pKm1xA7quavYMCCwU8Huxc8CkN5xukK2xY8Cv8ID6Aq7wkMMd0u'),
(5, 'Adrian Abimanyu Bagaskara', 'tetukobagas93@yahoo.com', '$2y$10$7RRFb3FedBm.wAHdAkqBFeimygKt.h0eIlLa9kYE12VYNW1wL3wMK'),
(6, 'Adrian Abimanyu Bagaskara', 'adrian@yahoo.com', '$2y$10$KIUYbb8C54Aicw7ZPPlMfuI5vqwlixOXYOIhEuO86Dr2vQKA2CEtu'),
(7, 'HaruBioskop', 'HarukawaBioskop@gmail.com', '$2y$10$pF2iWh1D1dlhBxBQnA1vg.Sd7qi5j6c6u73zLd1voxM3vn3Qgn7t.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`id_kursi`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indexes for table `soon`
--
ALTER TABLE `soon`
  ADD PRIMARY KEY (`id_cs`);

--
-- Indexes for table `soon2`
--
ALTER TABLE `soon2`
  ADD PRIMARY KEY (`id_cs2`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kursi`
--
ALTER TABLE `kursi`
  MODIFY `id_kursi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `soon`
--
ALTER TABLE `soon`
  MODIFY `id_cs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `soon2`
--
ALTER TABLE `soon2`
  MODIFY `id_cs2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `pesanan` (`id_pesanan`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
