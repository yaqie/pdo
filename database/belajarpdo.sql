-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2018 at 01:34 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajarpdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `isi` text NOT NULL,
  `tanggaljam` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `tanggaljam`) VALUES
(16, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce condimentum ante a lacinia venenatis. Vestibulum risus sapien, tempus vitae commodo vitae, pellentesque vitae arcu. Vivamus gravida accumsan leo, et auctor nibh venenatis a. Integer ante felis, imperdiet faucibus risus vitae, varius varius nibh. Ut non lorem elementum, sollicitudin lectus eu, pellentesque urna. Integer pulvinar laoreet est quis ornare. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse laoreet nec nisi non iaculis. Aliquam gravida mauris leo, sed mattis quam faucibus eget. Aenean dapibus sem mi, sit amet posuere tellus sagittis ac. Curabitur hendrerit quam odio, at congue risus pellentesque eget. Etiam quis dapibus justo, et vestibulum massa. ', '2018-05-28 06:33:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
