-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 04:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biglibrary`
--
CREATE DATABASE IF NOT EXISTS `biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `author_fName` varchar(50) NOT NULL,
  `author_lName` varchar(50) NOT NULL,
  `description` varchar(8000) NOT NULL,
  `isbn` int(13) NOT NULL,
  `publication_date` date NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `publisher_address` varchar(150) NOT NULL,
  `publisher_size` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `type`, `title`, `image`, `author_fName`, `author_lName`, `description`, `isbn`, `publication_date`, `publisher`, `publisher_address`, `publisher_size`, `status`) VALUES
(1, 'Book', 'Life of Pi', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1320562005l/4214.jpg', 'Yann', 'Martel', 'The son of a zookeeper, Pi Patel has an encyclopedic knowledge of animal behavior and a fervent love of stories. When Pi is sixteen, his family emigrates from India to North America aboard a Japanese cargo ship, along with their zoo animals bound for new homes.', 2147483647, '2001-09-11', 'Seal Books', 'London, UK', 'big', 'available'),
(2, 'book', 'The Name of the Wind', 'https://images-na.ssl-images-amazon.com/images/I/51-TOtX11mL._SX324_BO1,204,203,200_.jpg', 'Patrick', 'Rothfuss', 'So begins the tale of Kvothe - currently known as Kote, the unassuming innkeepter - from his childhood in a troupe of traveling players, through his years spent as a near-feral orphan in a crime-riddled city, to his daringly brazen yet successful bid to enter a difficult and dangerous school of magic.', 2147483647, '2020-10-07', 'Gollancz', 'London, UK', 'big', 'available'),
(4, 'CD', 'Nevermind', 'https://images-na.ssl-images-amazon.com/images/I/612pfd-N4SL._AC_SL1093_.jpg', 'Kurt', 'Cobain', 'Second studio album by the legendary American grunge band. Originally released in 1991, the album has been been remastered and re-released to mark the 20th Anniversary of its original release. Regarded as one of the most influential albums of all time, it includes the tracks \'Smells Like Teen Spirit\', \'Come As You Are\', \'Lithium\' and \'In Bloom\'.', 2147483647, '2011-01-01', 'Universal Music', 'Geffen, UK', 'big', 'available'),
(5, 'Book', 'The Wise Man\'s Fear', 'https://m.media-amazon.com/images/I/51qKDJ8lPeL.jpg', 'Patrick', 'Rothfuss', 'The Wise Man\'s Fear is the second of three novels in The Kingkiller Chronicle series by American author Patrick Rothfuss. The book was first published on March 1, 2011 by DAW Books in the United States.', 2147483647, '2020-11-04', 'Gollancz', 'London, UK', 'big', 'available'),
(8, 'Book', 'The Slow Regard of Silent Things', 'https://images-na.ssl-images-amazon.com/images/I/51P3p+cz-uL._SX318_BO1,204,203,200_.jpg', 'Patrick', 'Rothfuss', 'Praise for The Kingkiller Chronicle:\r\n“The best epic fantasy I read last year.... He’s bloody good, this Rothfuss guy.”', 2147483647, '2020-11-14', 'Gollancz', 'London, UK', 'big', 'available'),
(9, 'DVD', 'Inception', 'https://image.film.at/images/original/2966421/img.jpg', 'Christopher', 'Nolan', 'Dank modernster Technologie ist es in naher Zukunft möglich, in Träume und somit in das Unterbewusstsein von Menschen einzusteigen. Das Einsteigen bedeutet mithin auch die Möglichkeit des Diebstahls fremder und bisher ureigenster Ideen.', 2147483647, '2020-11-03', 'Christopher Nolan', 'America', 'big', 'available'),
(10, 'book', 'Convenience Store Woman', 'https://images-na.ssl-images-amazon.com/images/I/41WAXVSVPcL._SX313_BO1,204,203,200_.jpg', 'Sayaka', 'Murata', 'Meet Keiko. Keiko is 36 years old. She\'s never had a boyfriend, and she\'s been working in the same supermarket for eighteen years. Keiko\'s family wishes she\'d get a proper job. Her friends wonder why she won\'t get married.', 2147483647, '2020-11-10', 'Granta Books', 'France', 'small', 'available'),
(11, 'CD', 'She fucking hates me', 'https://i1.sndcdn.com/artworks-000145756671-t3rolb-t500x500.jpg', 'Puddle', 'of mud', 'music', 2147483647, '2020-11-02', 'Music Inc.', 'Austria', 'big', 'available'),
(12, 'book', 'Die Uhrwerk-Orange', 'https://images-na.ssl-images-amazon.com/images/I/51g5WitJOOL._SX299_BO1,204,203,200_.jpg', 'Anthony', 'Burgess', 'Allabendlich trifft sich der 16-jährige Alex mit seinen »Droogs« Pete, Georgie und Dim in der Korova-Milchbar. Die vierköpfige Gang wird von pathologischer Gewaltlust getrieben.', 2147483647, '2020-11-03', 'Seal Books', 'London, UK', 'small', 'available'),
(13, 'book', 'Die Verwandlung', 'https://images-na.ssl-images-amazon.com/images/I/41LIWDTSgsL._SX326_BO1,204,203,200_.jpg', 'Franz', 'Kafka', 'Die berühmteste Erzählung Franz Kafkas berichtet von Gregor Samsa, der eines Morgens nicht mehr als Mensch, sondern als häßliches \'Ungeziefer\' erwacht. Kafkas \'Verwandlung\' ist die groteske Parabel einer stillen Revolte gegen die Unmenschlichkeit.', 2147483647, '2020-11-06', 'Seal Books', 'London, UK', 'big', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
