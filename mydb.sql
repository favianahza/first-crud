-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 11:48 PM
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
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `football`
--

CREATE TABLE `football` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(64) NOT NULL,
  `AGE` int(2) NOT NULL,
  `CLUB` varchar(64) NOT NULL,
  `PICTURE` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `football`
--

INSERT INTO `football` (`ID`, `NAME`, `AGE`, `CLUB`, `PICTURE`) VALUES
(1, 'Mariano DÃ­az MejÃ­as', 25, 'Real Madrid C.F.', 'Real Madrid C.F.-Mariano DÃ­az MejÃ­as.jpg'),
(2, 'Lionel AndrÃ©s Messi', 32, ' F.C. Barcelona', ' F.C. Barcelona-Lionel AndrÃ©s Messi.jpg'),
(3, 'Kevin De Bruyne', 28, 'Manchester City F.C.', 'Manchester City F.C.-Kevin De Bruyne.jpg'),
(4, 'Mats Julian Hummels', 30, 'FC Bayern Munich', 'FC Bayern Munich-Mats Julian Hummels.png'),
(5, 'Christian Dannemann Eriksen', 27, 'Tottenham Hotspur F.C.', 'Tottenham Hotspur F.C.-Christian Dannemann Eriksen.jpg'),
(6, 'Antoine Griezmann', 28, 'AtlÃ©tico Madrid', 'AtlÃ©tico Madrid-Antoine Griezmann.png'),
(7, 'Lorenzo Insigne', 28, 'S.S.C. Napoli', 'S.S.C. Napoli-Lorenzo Insigne.jpg'),
(8, 'Marco Reus', 30, 'Borussia Dortmund', 'Borussia Dortmund-Marco Reus.jpg'),
(9, 'Jesse Ellis Lingard', 26, 'Manchester United F.C.', 'Manchester United F.C.-Jesse Ellis Lingard.png'),
(10, 'Georginio Gregion Emile Wijnaldum', 28, 'Liverpool F.C.', 'Liverpool F.C.-Georginio Gregion Emile Wijnaldum.jpg'),
(11, 'Thiago Emiliano da Silva', 34, 'Paris Saint-Germain F.C.', 'Paris Saint-Germain F.C.-Thiago Emiliano da Silva.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `NO` int(11) NOT NULL,
  `NAME` varchar(64) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `CONFIRM` varchar(255) NOT NULL,
  `EMAIL` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`NO`, `NAME`, `PASSWORD`, `CONFIRM`, `EMAIL`) VALUES
(1, 'admin', '12345', '12345', 'admin@mail.com'),
(2, 'fapsco', 'nameno', 'nameno', 'fapscorp1@gmail.com'),
(3, '120220034', 'nameno12345', 'nameno12345', 'codeathwish@gmail.com'),
(4, '123', '32323232', '123123', '23'),
(5, 'asiap', 'asip', 'asiap', 'asip@mail.com'),
(6, 'favianahza', 'nameno', 'nameno', 'favianahza@gmail.com'),
(7, 'admon', 'admon', 'admon', 'admon'),
(8, '1', '1', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `football`
--
ALTER TABLE `football`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `football`
--
ALTER TABLE `football`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
