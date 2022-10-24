-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 03:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `halloweenshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `goodies`
--

CREATE TABLE `goodies` (
  `ItemID` int(11) NOT NULL,
  `Item` varchar(100) NOT NULL,
  `Itemprice` int(11) NOT NULL,
  `Itemdescription` varchar(200) NOT NULL,
  `Itemimg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `goodies`
--

INSERT INTO `goodies` (`ItemID`, `Item`, `Itemprice`, `Itemdescription`, `Itemimg`) VALUES
(1, 'Cauldron ', 1000, 'This is Winifreds cauldron.', 'cauldron.png'),
(2, 'Witch Soup ', 25, 'Favorite witch food giving them mysterious powers.', 'soup.png'),
(5, 'Vampire Latte ', 50, 'It\'s like a bloody marry but it tastes like O+. ', 'latte.png'),
(6, 'Ghost Cookie', 60, 'Don\'t worry the cookie\'s there it\'s a ghost remember?  ', 'ghost.png'),
(7, 'Bonehilda', 2000, 'A Skelton maid comes with a coffin and a broom. ', 'bonehilda.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goodies`
--
ALTER TABLE `goodies`
  ADD PRIMARY KEY (`ItemID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goodies`
--
ALTER TABLE `goodies`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
